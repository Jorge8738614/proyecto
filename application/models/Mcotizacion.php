<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcotizacion extends CI_Model {

    // Inserta un nuevo pedido en la base de datos
   // public function insertar_pedido($datos_pedido) {
    //    $this->db->insert('pedido', $datos_pedido);
   // }

    public function listar_venta() {
        $query = $this->db->get('venta');
        return $query->result();
    }

    public function registrar_venta($data)
    {
         $this->db->insert('venta', $data);
    }


    public function listar_ultima_venta()
    {
        $this->db->order_by('id_venta DESC');
        $this->db->select('*');
        $this->db->limit(1);
        $query = $this->db->get('venta');
        return $query->result(); // Devuelve una única fila
    }

}
