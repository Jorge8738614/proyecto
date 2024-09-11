<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdistribuidor extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Mdistribuidor');
        $this->load->model('Mpedido');
        $this->load->model('Mproducto');
        $this->load->model('Mcliente');
    }

    public function agregar()
    {
        $this->load->view('assets/header');
        $this->load->view('distribuidor/vista_distribuidor');
        $this->load->view('assets/footer');
    }
}
