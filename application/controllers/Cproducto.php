<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cproducto extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mproducto");
    }

    public function agregar()
        {
            
          $this->load->view('assets/header');
          $this->load->view('producto/registro_producto');
          $this->load->view('assets/footer');
        }


 public function agregarbd() {
 
    $this->db->trans_start();

    $data = array(
        'producto_nombre' => $this->input->post('producto_nombre'),
        'producto_descripcion' => $this->input->post('producto_descripcion'),
        'producto_precio' => $this->input->post('producto_precio'),
        'producto_cantidad' => $this->input->post('producto_cantidad'),
        'producto_codigo' => $this->input->post('producto_codigo'),
        'producto_unidad_medida' => $this->input->post('producto_unidad_medida'),
        'producto_estado' => '1' // Estado inicial activo
    );

    $this->Mproducto->insertar_producto($data);
    $id_producto = $this->db->insert_id(); // Obtener el ID del producto insertado

    $datos_pedido = array(
        'id_producto' => $id_producto,
    );

    
    $this->db->insert('pedido', $datos_pedido);

    
    $this->db->trans_complete();

    // Verificar si la transacción fue exitosa
    if ($this->db->trans_status() === FALSE) {
        echo "Error al registrar el producto y el pedido.";
    } else {
        redirect('Cproducto/vista_productos');
    }
}

    public function vista_productos() {
        $lista = $this->Mproducto->lista_productos();
        $data = array('productos' => $lista);
        $this->load->view('assets/header');
        $this->load->view('assets/menu');
        $this->load->view('producto/lista_producto', $data);
        $this->load->view('assets/footer');
    }

    public function modificar_producto() {
        $id_producto = trim($_GET['id']);
        if ($id_producto != '') {
            $data = array("producto" => $this->Mproducto->recuperar_producto($id_producto));
            if ($data['producto']) {
                $this->load->view('assets/header');
                $this->load->view('producto/modificar_producto', $data);
                $this->load->view('assets/footer');
            } else {
                redirect('Cproducto/vista_productos');
            }
        } else {
            redirect('Cproducto/vista_productos');
        }
    }

    public function actualizar() {
        $id_producto = trim($_POST['id']);
        
        $data = array(
            'producto_nombre' => $this->input->post('producto_nombre'),
            'producto_descripcion' => $this->input->post('producto_descripcion'),
            'producto_precio' => $this->input->post('producto_precio'),
            'producto_cantidad' => $this->input->post('producto_cantidad'),
            'producto_codigo' => $this->input->post('producto_codigo'),
            'categoria_id' => $this->input->post('categoria_id'),
            'producto_unidad_medida' => $this->input->post('producto_unidad_medida')
        );

        $this->Mproducto->modificar_producto($id_producto, $data);
        redirect('Cproducto/vista_productos');
    }

    public function eliminarbd() {
        if (isset($_GET['id'])) {
            $id_producto = $_GET['id'];
            $data['producto_estado'] = '0'; // Cambia el estado a 0 (inactivo)
            $this->Mproducto->modificar_producto($id_producto, $data);
            redirect('Cproducto/vista_productos');
        } else {
            echo "Error: No se ha proporcionado el ID del producto.";
        }
    }
}
