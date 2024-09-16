<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mventa extends CI_Model {

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

    public function registrar_detalle_venta($data)
    {
         $this->db->insert('detalle_venta', $data);
    }

    public function vaciar_carrito($codigo_car)
    {
        $this->db->where('codigo_car',$codigo_car);
        $this->db->delete('carrito');
    }


    public function listar_ultima_venta()
    {
        $this->db->order_by('id_venta DESC');
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
    
    // Obtener lista de productos (esto es opcional si ya tienes un método similar en otro modelo)
    public function obtener_productos() 
    {
        $query = $this->db->get('venta');
        return $query->result();
    }

   public function eliminar_carrito_pedido($id_carrito)
    {
        $this->db->where('id_carrito',$id_carrito);
        $this->db->delete('carrito');
    }

    public function obtener_ventas() {
        $this->db->select('*');
        $this->db->from('venta');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_producto($id_venta)
    {
        $this->db->select('*');
        $this->db->from('venta');
        $this->db->where('id_venta', $id_venta);
        $query = $this->db->get();
        return $query->result();       
    }

    public function recuperar_venta($id_venta)

    {
        $this->db->select('*');
        $this->db->from('venta');
        $this->db->where('id_venta',$id_venta);  // Ajusta aquí si el nombre es diferente
        $resultados = $this->db->get();
         return $resultados -> result(); // Devuelve el re
    }

    // FUNCIONES DE PAGINACION PARA VENTA
    public function size_venta()    
    {       $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente 
            $resultados= $this->db->get('venta');
            return $resultados -> result(); //devuelve el resultado
    }
    public function lista_venta_page($ini,$fin)
    {
            $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente
            $this->db->limit(10, $ini); 
            $resultados= $this->db->get('venta');
            return $resultados -> result(); //devuelve el resultado
    }


}
