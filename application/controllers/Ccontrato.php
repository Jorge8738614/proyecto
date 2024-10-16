<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccontrato extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Mcontrato');
        $this->load->model('Mpedido');
        $this->load->model('Mproducto');
        $this->load->model('Mcliente');
    }

    public function vista_contrato()
    {
        $this->load->view('assets/header');
        $this->load->view('contrato/registro_contrato');
        $this->load->view('assets/footer');
    }
}
 