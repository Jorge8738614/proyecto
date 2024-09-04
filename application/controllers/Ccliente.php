<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccliente extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mcliente");
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
        $this->load->view('cliente/registro_cliente');
        $this->load->view('assets/footer');
    }

    public function vista_clientes()
    {
        $config['base_url'] = base_url() . 'Ccliente/vista_clientes';
        $config['total_rows'] = $this->Mcliente->count_all_clients();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $lista = $this->Mcliente->get_clients($config['per_page'], $page);
        $data = array(
            'clientes' => $lista,
            'pagination_links' => $this->pagination->create_links()
        );

        $this->load->view('assets/header');
        $this->load->view('assets/menu');
        $this->load->view('cliente/lista_cliente', $data);
        $this->load->view('assets/footer');
    }

    public function vista_clientes_deshabilitados()
    {
        $lista = $this->Mcliente->lista_clientes_deshabilitados();
        $data = array('clientes' => $lista);
        $this->load->view('assets/header');
        $this->load->view('assets/menu');
        $this->load->view('assets/lista_cliente_deshabilitados', $data);
        $this->load->view('assets/footer');
    }

    public function agregarbd() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'direccion' => $this->input->post('direccion'),
            'celular' => $this->input->post('celular')
            );

        if ($this->Mcliente->insertar_cliente($data)) {
            redirect('Ccliente/vista_clientes');
        } else {
            echo "Error al registrar el cliente.";
        }
    }

    public function modificar()
    {
        $id_cliente = trim($_GET['id']);
        if ($id_cliente != '') {
            $data = array("cliente" => $this->Mcliente->recuperar_cliente($id_cliente));

            if (sizeof($data) > 0) {
                $this->load->view('assets/header');
                $this->load->view('assets/modificar_cliente', $data);
                $this->load->view('assets/footer');
            } else {
                redirect('Ccliente/vista_clientes');
            }
        } else {
            redirect('Ccliente/vista_clientes');
        }
    }

    public function actualizar()
    {
        $id_cliente = trim($_POST['id']);

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono')
        );

        $this->Mcliente->modificar_cliente($id_cliente, $data);
        redirect('Ccliente/vista_clientes');
    }

    public function eliminarbd()    
    {
        if (isset($_GET['id'])) { 
            $id_cliente = $_GET['id'];
            $data['estado_cliente'] = '0';
            $this->Mcliente->modificar_cliente($id_cliente, $data);
            redirect('Ccliente/vista_clientes');
        } else {
            echo "Error: No se ha proporcionado el ID del cliente.";
        }
    }

    public function habilitarbd()    
    {
        if (isset($_GET['id'])) { 
            $id_cliente = $_GET['id'];
            $data['estado_cliente'] = '1';
            $this->Mcliente->modificar_cliente($id_cliente, $data);
            redirect('Ccliente/vista_clientes');
        } else {
            echo "Error: No se ha proporcionado el ID del cliente.";
        }
    }

    public function buscar()
    {
        $txt_buscar = $_GET["txt_buscar"];
        $data= array(
            "txt_buscar" => $txt_buscar,
            "clientes" => $this->Mcliente->buscar_cliente($txt_buscar),
        );

        $this->load->view('assets/header');
        $this->load->view('assets/lista_cliente_busqueda', $data);
        $this->load->view('assets/footer');
    }
}
