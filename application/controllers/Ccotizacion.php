<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccotizacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mcotizacion');
        $this->load->model('Mproducto');
        $this->load->model('Musuario');
    }

    public function agregar_cotizacion()
    {
        $this->load->view('assets/header');
        $this->load->view('cotizacion/registro_cotizacion');
        $this->load->view('assets/footer');

    }

    public function listar_cotizacion()
    {
        $this->load->view('assets/header');
        $this->load->view('cotizacion/lista_cotizacion');
        $this->load->view('assets/footer');

    }
    

    public function impresion()
    {
       $this->load->view('cotizacion/impresion');
    }
    
        

}
