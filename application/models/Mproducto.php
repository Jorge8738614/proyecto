<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mproducto extends CI_Model {

    public function insertar_producto($data) {
        return $this->db->insert('producto', $data);
    }

    public function lista_productos() {
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('producto_estado', 1); // Solo productos activos
        $query = $this->db->get();
        return $query->result();
    }

    public function get_producto($id_producto)
    {
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('id_producto', $id_producto);
        $query = $this->db->get();
        return $query->result();       
    }

    public function recuperar_producto($id_producto) {
        $this->db->select('*');
        $this->db->from('producto');
        $this->db->where('id_producto', $id_producto);
        $query = $this->db->get();
        return $query->result(); // Devuelve una única fila
    }

    public function modificar_producto($id_producto, $data) {
        $this->db->where('id_producto', $id_producto);
        return $this->db->update('producto', $data);
    }

 // FUNCIONES DE PAGINACION PARA PRODUCTO
    public function size_productos()    
    {       $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  
            $resultados= $this->db->get('producto');
            return $resultados -> result(); 
    }
    public function lista_productos_page($ini,$fin)
    {
            $this->db->select('*');
            //$this->db->where('estado_usuario', 1); 
            $this->db->limit(10, $ini); 
            $resultados= $this->db->get('producto');
            return $resultados -> result(); 
    }
}