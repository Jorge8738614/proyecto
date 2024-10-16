<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpedido extends CI_Model {
    public function construct()
    {
        parent::__construct();
    }


    public function listar_pedidos() {
        $query = $this->db->get('pedido');
        return $query->result();
    }

    public function registrar_carrito_pedidos($data)
    {
         $this->db->insert('carrito', $data);
    }


    public function listar_ultimo_pedido()
    {
        $this->db->order_by('id_venta ', "DESC");
        $this->db->select('*');
        $this->db->limit(1);
        $query = $this->db->get('venta');
        return $query->result(); // Devuelve una única fila
    }

    
    public function lista_carrito_pedido($codigo_car)
    {
        $this->db->select('*');
        $this->db->join("producto p", "p.id_producto = c.id_producto");
        $this->db->join("cliente cl", "cl.id_cliente = c.id_cliente");
        $this->db->where("c.codigo_car", $codigo_car);
        $query = $this->db->get('carrito c');
        return $query->result(); // Devuelve una única fila
    }
    
    public function modificar_pedido($id_pedido, $data) 
    {
        $this->db->where('id_pedido', $id_pedido);
        return $this->db->update('pedido', $data);
    }


    // Obtener lista de productos (esto es opcional si ya tienes un método similar en otro modelo)
    public function obtener_productos() 
    {
        $query = $this->db->get('producto');
        return $query->result();
    }

   public function eliminar_carrito_pedido($id_carrito)
    {
        $this->db->where('id_carrito',$id_carrito);
        $this->db->delete('carrito');
    }

    public function get_carrito_pedido($codigo_car)
    {   
        $this->db->where('codigo_car',$codigo_car);
        $query = $this->db->get('carrito');
        return $query->result(); // Devuelve una única fila
    }

}
