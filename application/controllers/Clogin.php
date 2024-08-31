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
}
