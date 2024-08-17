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

		public function agregarbd()
		{
		    $nombre_completo = strtoupper($_POST['nombre_completo'] ?? '');
		    $celular = strtoupper($_POST['celular'] ?? '');
		    $password = strtoupper($_POST['password'] ?? '');
		    $alias = $_POST['alias'] ?? '';

		    $data = [
		        'nombre_completo' => $nombre_completo,
		        'celular' => $celular,
		        'password' => $password,
		        'alias' => $alias,
		    ];

		    $this->Musuario->agregar_usuario($data);
		    header("Location: http://localhost/proyecto/Clogin");
		}

		public function vista_usuarios()
		{
		    // Obtener la lista de usuarios desde el modelo
		    $lista = $this->Musuario->lista_usuarios();  // Asegúrate de usar el nombre correcto de la función

		    // Preparar los datos para pasarlos a la vista
		    $data = array('usuarios' => $lista);

		    // Cargar las vistas y pasar los datos
		    $this->load->view('assets/header');
		    $this->load->view('assets/menu');
		    $this->load->view('assets/lista_usuario', $data);  // Vista con la lista de usuarios
		    $this->load->view('assets/footer');
		}



	public function salir()
	{
		$this->session->sess_destroy();
		header("Location: http://localhost/proyecto/Clogin");
	}


	public function control_ingreso()
	{
		if($this->session->userdata('alias'))
		{
			header("Location: http://localhost/proyecto/Clogin/menu");
		}
		else
		{
			header("Location: http://localhost/proyecto/Clogin/index");
		}
	}

	



}
