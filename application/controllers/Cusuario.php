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
		  $this->load->view('assets/registro_login');
		  $this->load->view('assets/footer');
		}
		
		public function vista_usuarios()
    	{

    	 $config['base_url'] = base_url() . 'Cusuario/vista_usuarios/';
	    $config['total_rows'] = $this->Musuario->count_all_users(); // Cambia este método al correcto
	    $config['per_page'] = 10;
	    $config['uri_segment'] = 3;

	    $this->pagination->initialize($config);

	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	    $lista = $this->Musuario->get_users($config['per_page'], $page);
	    $data = array(
	        'usuarios' => $lista,
	        'pagination_links' => $this->pagination->create_links()
	    );

        
        $lista = $this->Musuario->lista_usuarios();
        $data = array('usuarios' => $lista);
        $this->load->view('assets/header');
        $this->load->view('assets/menu');
        $this->load->view('assets/lista_usuario', $data);
        $this->load->view('assets/footer');
    	
    	}
 

    public function agregarbd() {
       $data = array(
            'nombre_completo' => $this->input->post('nombre_completo'),
            'apellido' => $this->input->post('apellido'),
            'celular' => $this->input->post('celular'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'cargo' => $this->input->post('cargo'),
            'alias' => $this->input->post('alias')
        );

        if ($this->Musuario->insertar_usuario($data)) {
            redirect('Clogin/vista_usuarios');
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
		            $this->load->view('assets/modificar_login', $data );
		            $this->load->view('assets/footer');
		        } 
		        else {
		            
		            redirect('Clogin/vista_usuarios');
		        }
		    } else {
		        
		        redirect('Clogin/vista_usuarios');
		    }
	}

    public function actualizar()
    {
        echo $id_usuario = trim($_POST['id']);;
        
        $data = array(
            'nombre_completo' => $this->input->post('nombre_completo'),
            'apellido' => $this->input->post('apellido'),
            'celular' => $this->input->post('celular'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'cargo' => $this->input->post('cargo'),
            'alias' => $this->input->post('alias')
        );

   
        $this->Musuario->modificar_usuario($id_usuario, $data);
         redirect('Clogin/vista_usuarios');
    }

  	public function eliminarbd()	
	{
	    if (isset($_GET['id'])) { // Cambia $_POST a $_GET
	        $id_usuario = $_GET['id'];
	        $data['estado_usuario'] = '0';
	        $this->Musuario->modificar_usuario($id_usuario, $data);
	        redirect('Clogin/vista_usuarios');
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
		  $this->load->view('assets/lista_usuario_busqueda',$data);
		  $this->load->view('assets/footer');

	}

}
