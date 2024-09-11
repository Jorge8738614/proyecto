<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccotizacion extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Mcotizacion');
        $this->load->model('Mproducto');
        $this->load->model('Mcliente');
    }

    public function vista_cotizacion()
    {
        $this->load->view('assets/header');
        $this->load->view('cotizacion/vista_cotizacion');
        $this->load->view('assets/footer');
    }
}
