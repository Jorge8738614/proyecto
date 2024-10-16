<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusuario extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Musuario");
        $this->load->library('pagination');
    }

    public function menu()
		{
			
		  $this->load->view('assets/header');
		  $this->load->view('assets/menu');
		  $this->load->view('assets/footer');
		}

		public function agregar()
		{
			
		  $this->load->view('assets/header');
		  $this->load->view('usuario/registro_usuario');
		  $this->load->view('assets/footer');
		}
		
		public function vista_usuarios()
    	{
 
        $lista = $this->Musuario->lista_usuarios_page(1,10);
        $data = array('usuarios' => $lista, "caminante" => 1);

        $this->load->view('assets/header');
        $this->load->view('usuario/lista_usuario', $data);
        $this->load->view('assets/footer');
    	
    	}

		

    	public function vista_usuarios_deshabilitados()
    	{
  
        $lista = $this->Musuario->lista_usuarios_deshabilitados();
        $data = array('usuarios' => $lista);
        $this->load->view('assets/header');
         
        $this->load->view('usuario/lista_usuario_deshabilitados', $data);
        $this->load->view('assets/footer');
    	
    }


 

    public function agregarbd() 
    {
       $data = array(
            'nombre_completo' => $this->input->post('nombre_completo'),
            'apellido' => $this->input->post('apellido'),
            'celular' => $this->input->post('celular'),
            'ci' => $this->input->post('ci'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'cargo' => $this->input->post('cargo'),
            'alias' => $this->input->post('alias')
        );

        if ($this->Musuario->insertar_usuario($data)) {
            redirect('Cusuario/vista_usuarios');
        } else {
            echo "Error al registrar el usuario.";
        }
    }


	public function modificar()
	{
		 $id_usuario = trim($_GET['id']);
		 if ($id_usuario!='') 
		 {
		      
		    $data = array("usuario" => $this->Musuario->recuperar_usuario($id_usuario));
		        
		        //print_r($data);
		        if (sizeof($data) > 0) 
		        {
		            $this->load->view('assets/header');
		            $this->load->view('usuario/modificar_usuario', $data );
		            $this->load->view('assets/footer');
		        } 
		        else {
		            
		            redirect('Cusuario/vista_usuarios');
		        }
		    } else {
		        
		        redirect('Cusuario/vista_usuarios');
		    }
	}

    public function actualizar()
    {
        $id_usuario = trim($_POST['id']);;
        
        $data = array(
            'nombre_completo' => $this->input->post('nombre_completo'),
            'apellido' => $this->input->post('apellido'),
            'celular' => $this->input->post('celular'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'cargo' => $this->input->post('cargo'),
            'alias' => $this->input->post('alias')
        );

   
        $this->Musuario->modificar_usuario($id_usuario, $data);
         redirect('Cusuario/vista_usuarios');
    }

  	public function eliminarbd()	
	{
	    if (isset($_GET['id'])) { 
	        $id_usuario = $_GET['id'];
	        $data['estado_usuario'] = '0';
	        $this->Musuario->modificar_usuario($id_usuario, $data);
	        redirect('Cusuario/vista_usuarios');
	    } else {
	        // Manejar el caso donde 'id' no esté definido
	        echo "Error: No se ha proporcionado el ID del usuario.";
	        // Opcionalmente, redirigir a otra página o mostrar un mensaje de error.
	    }
	}

	public function habilitarbd()	
	{
	    if (isset($_GET['id'])) { 
	        $id_usuario = $_GET['id'];
	        $data['estado_usuario'] = '1';
	        $this->Musuario->modificar_usuario($id_usuario, $data);
	        redirect('Cusuario/vista_usuarios');
	    } else {
	        // Manejar el caso donde 'id' no esté definido
	        echo "Error: No se ha proporcionado el ID del usuario.";
	        // Opcionalmente, redirigir a otra página o mostrar un mensaje de error.
	    }
	}




    public function salir()
    {
        $this->session->sess_destroy();
        redirect('Clogin');
    }

 
    public function panel()
	{
		if($this->session->userdata('login'))
		{
			if($this->session->userdata('tipo')=='admin')
			{
				//el usr ya esta logueado
				redirect('estudiante/index','refresh');
			}
			else
			{
				redirect('estudiante/guest','refresh');
			}
		}
		else
		{
			//usuario no esta logueado
			redirect('usuarios/index/3','refresh');
		}
	}

	public function buscar()
	{
	

		$txt_buscar = $_GET["txt_buscar"];
		$data= array(
			"txt_buscar" => $txt_buscar,
			"usuarios" => $this -> Musuario ->buscar_usuario($txt_buscar),
		);

		  $this->load->view('assets/header');
		  $this->load->view('usuario/lista_usuario_busqueda',$data);
		  $this->load->view('assets/footer');

	}

	//FUNCIONES DE PAGINACION

	    public function page_sig()
    { 
            $caminante = $_GET['cam'];
           	$ini=$caminante*10;
         
 
          $size = sizeof($this->Musuario->size_usuarios());
          $operacion= $size/10;
          $operacion=round($operacion, 0);
          $operacion=$operacion-1;

          if($caminante <= $operacion )
          {
            $lista = $this->Musuario->lista_usuarios_page($ini,10);
            $caminante=$caminante+1;
            $data = array('usuarios' => $lista, "caminante" => $caminante);

            $this->load->view('assets/header');
            $this->load->view('usuario/lista_usuario', $data);
            $this->load->view('assets/footer');
            }
            else
            {
                $lista = $this->Musuario->lista_usuarios_page(1,10);
                $data = array('usuarios' => $lista, "caminante" => 1);

                $this->load->view('assets/header');
                $this->load->view('usuario/lista_usuario', $data);
                $this->load->view('assets/footer');

            }
        
        }

        public function page_ant()
        { 
          $caminante = $_GET['cam']-1; 
          
          if($caminante>0)
          {
             $ini = (($caminante)*10);
            //$caminante = $caminante+1;
        
         
            $lista = $this->Musuario->lista_usuarios_page($ini,10);
            $data = array('usuarios' => $lista, "caminante" => $caminante);

            $this->load->view('assets/header');
            $this->load->view('usuario/lista_usuario', $data);
            $this->load->view('assets/footer');
          }
          else { 

            $lista = $this->Musuario->lista_usuarios_page(1,10);
            $data = array('usuarios' => $lista, "caminante" => 1);

            //print_r($data);

            $this->load->view('assets/header');
            $this->load->view('usuario/lista_usuario', $data);
            $this->load->view('assets/footer');

          }
        
        }
}
