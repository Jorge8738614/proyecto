<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Musuario");
    }

    public function menu()
		{
			
		  $this->load->view('assets/header');
		  $this->load->view('assets/menu');
		  $this->load->view('assets/footer');
		}

		public function agregar()
		{
			
		  $this->load->view('assets/header_login');
		  $this->load->view('assets/registro_login');
		  $this->load->view('assets/footer');
		}

		public function index()
		{
			
		  $this->load->view('assets/header_login');
		  $this->load->view('assets/login');
		  $this->load->view('assets/footer');
		}


	public function validarusuario() 
	{
		$alias=$_POST['alias'];
		$password=$_POST['password'];

		echo $alias;
		echo $password;
		$consulta=$this->Musuario->validar($alias,$password);

		print_r($consulta);
		$size = sizeof($consulta);
		echo $size;

		if($size>0)
		{
			
			foreach($consulta as $row)
			{
				$data_session = array(
				'id_usuario_sesion'=> $row->id_usuario,
				'alias_sesion'=> $row->alias,
				'id_rol_sesion'=> $row->id_rol);

				$this->session->set_userdata($data_session);
				echo"alias"; echo $this->session->alias_sesion;

				header("Location: http://localhost/proyecto/Clogin/menu");

			}
		}
		else
		{
			header("Location: http://localhost/proyecto/Clogin/index");
		
		}
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

    public function vista_usuarios()
    {
        $lista = $this->Musuario->lista_usuarios();
        $data = array('usuarios' => $lista);
        $this->load->view('assets/header');
        $this->load->view('assets/menu');
        $this->load->view('assets/lista_usuario', $data);
        $this->load->view('assets/footer');
    }

	public function modificar($id_usuario)
	{
		 if ($id_usuario) {
		      // Obtener información del usuario basado en el ID
		     $data['info_usuario'] = $this->Musuario->recuperar_usuario($id_usuario);
		        
		        // Verificar si se obtuvo algún dato
		        if ($data['info_usuario']->num_rows() > 0) {
		            $this->load->view('assets/header');
		            $this->load->view('assets/modificar_login', $data);
		            $this->load->view('assets/footer');
		        } else {
		            // Redirigir si no se encuentra el usuario
		            redirect('Clogin/vista_usuarios');
		        }
		    } else {
		        // Redirigir si el ID no se pasa
		        redirect('Clogin/vista_usuarios');
		    }
		}

    public function actualizar()
    {
        $id_usuario = $this->input->post('id_usuario');
        $data = array(
            'nombre_completo' => $this->input->post('nombre_completo'),
            'apellido' => $this->input->post('apellido'),
            'celular' => $this->input->post('celular'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'cargo' => $this->input->post('cargo'),
            'alias' => $this->input->post('alias')
        );

        if ($this->Musuario->modificar_usuario($id_usuario, $data)) {
            redirect('Clogin/vista_usuarios');
        } else {
            echo "Error al modificar el usuario.";
        }
    }

    public function salir()
    {
        $this->session->sess_destroy();
        redirect('Clogin');
    }

    public function control_ingreso()
    {
        if($this->session->userdata('alias'))
        {
            redirect('Clogin/menu');
        }
        else
        {
            redirect('Clogin/index');
        }
    }
}
