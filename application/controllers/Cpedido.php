<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpedido extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mpedido');
    }

    // Muestra la vista con el formulario y la tabla de pedidos
    public function vista_pedido() {
        $data['pedidos'] = $this->Mpedido->listar_pedidos();
        $this->load->view('assets/header');
        $this->load->view('assets/menu');
        $this->load->view('pedido/lista_pedido', $data);
        $this->load->view('assets/footer');
    }

    // Procesa la inserción de un nuevo pedido
   // public function agregar_pedido() {
  //      $datos_pedido = array(
   //         'fecha_creacion' => date('Y-m-d H:i:s'),
   //         'estado' => $this->input->post('estado'),
   //         'prioridad' => $this->input->post('prioridad')
   //     );

   //    $this->Mpedido->insertar_pedido($datos_pedido);
    //    redirect('Cpedido/vista_pedido');
   // }

 public function agregar_pedido() {
        $datos_pedido = array(
            'estado' => $this->input->post('estado'),
            'prioridad' => $this->input->post('prioridad'),
            'fecha_creacion' => date('Y-m-d H:i:s') // Fecha actual
        );

        // Obtener productos seleccionados desde el formulario
        $productos = array();
        $productos_seleccionados = $this->input->post('productos');
        $cantidades = $this->input->post('cantidades');

        foreach ($productos_seleccionados as $key => $idProducto) {
            $productos[] = array(
                'idProducto' => $idProducto,
                'cantidad' => $cantidades[$key]
            );
        }

        // Llamar al método del modelo para insertar el pedido y productos
        if ($this->Mpedido->insertar_pedido($datos_pedido, $productos)) {
            redirect('Cpedido/vista_pedidos');
        } else {
            echo "Error al registrar el pedido.";
        }
    }
}
