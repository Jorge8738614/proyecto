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
        return $query->row(); // Devuelve una única fila
    }

    public function modificar_producto($id_producto, $data) {
        $this->db->where('id_producto', $id_producto);
        return $this->db->update('producto', $data);
    }

// FUNCIONES DE PAGINACION 
    public function size_productos()    
    {       $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente 
            $resultados= $this->db->get('producto');
            return $resultados -> result(); //devuelve el resultado
    }
    public function lista_productos_page($ini,$fin)
    {
            $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente
            $this->db->limit($fin, $ini); 
            $resultados= $this->db->get('producto');
            return $resultados -> result(); //devuelve el resultado
    }

}