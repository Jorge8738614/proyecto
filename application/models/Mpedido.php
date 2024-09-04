<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpedido extends CI_Model {

    // Inserta un nuevo pedido en la base de datos
   // public function insertar_pedido($datos_pedido) {
    //    $this->db->insert('pedido', $datos_pedido);
   // }

    public function listar_pedidos() {
        $query = $this->db->get('pedido');
        return $query->result();
    }

    public function insertar_venta($datos_venta, $productos) {
    
    $this->db->trans_start();

    // Insertar los datos de la venta en la tabla 'venta'
    $this->db->insert('venta', $datos_venta);
    $idVenta = $this->db->insert_id();

    // Insertar cada producto relacionado en la tabla 'venta_producto'
    foreach ($productos as $producto) {
        $data = array(
            'idVenta' => $idVenta,
            'idProducto' => $producto['idProducto'],
            'cantidad' => $producto['cantidad']
        );
        $this->db->insert('venta_producto', $data);
    }

    // Completar la transacción
    $this->db->trans_complete();

    // Verificar si la transacción fue exitosa
    if ($this->db->trans_status() === FALSE) {
        return false;
    } else {
        return true;
    }
}


    // Obtener lista de productos (esto es opcional si ya tienes un método similar en otro modelo)
    public function obtener_productos() {
        $query = $this->db->get('producto');
        return $query->result();
    }
}