<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcotizacion extends CI_Model {

    public function listar_cotizacion() 
    {
        $query = $this->db->get('cotizacion');
        return $query->result();
    }
    
    public function get_cotizacion_id()
    {
        $this->db->order_by('id_cotizacion DESC');
        $this->db->select('*');
        $this->db->limit(1);
        $query = $this->db->get('cotizacion');
        return $query->result();    
    }

    public function registrar_cotizacion($data)
    {
         $this->db->insert('cotizacion', $data);
    }

    public function registrar_detalle_cotizacion($data)
    {
         $this->db->insert('detalle_cotizacion', $data);
    }

    public function vaciar_carrito($codigo_car_co)
    {
        $this->db->where('codigo_car_co',$codigo_car_co);
        //$this->db->where("c.codigo_cot", $codigo_car); // Debería ser $codigo_cot
        $this->db->delete('carrito');
    }


    public function listar_ultima_cotizacion()
    {
        $this->db->order_by('id_cotizacion DESC');
        $this->db->select('*');
        $this->db->limit(1);
        $query = $this->db->get('cotizacion');
        return $query->result(); // Devuelve una única fila
    }

    
    public function lista_carrito_cotizacion($codigo_car_co)
    {
        $this->db->select('*');
        $this->db->join("producto p", "p.id_producto = c.id_producto");
        //$this->db->join("cliente cl", "cl.id_cliente = c.id_cliente");
        $this->db->where("c.codigo_car_co", $codigo_car_co);
        $query = $this->db->get('carrito_co c');
        return $query->result(); // Devuelve una única fila
    }
    
    // Obtener lista de productos (esto es opcional si ya tienes un método similar en otro modelo)
    public function obtener_productos() 
    {
        $query = $this->db->get('producto');
        return $query->result();
    }

   public function eliminar_carrito_cotizacion($id_carrito_co)
    {
        $this->db->where('id_carrito_co',$id_carrito_co);
        $this->db->delete('carrito');
    }

    public function obtener_cotizacion() {
        $this->db->select('*');
        $this->db->from('cotizacion');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_producto($id_cotizacion)
    {
        $this->db->select('*');
        $this->db->from('cotizacion');
        $this->db->where('id_cotizacion', $id_cotizacion);
        $query = $this->db->get();
        return $query->result();       
    }

    public function recuperar_cotizacion($id_cotizacion)

    {
        $this->db->select('*');
        $this->db->from('cotizacion');
        $this->db->where('id_cotizacion',$id_cotizacion);  // Ajusta aquí si el nombre es diferente
        $resultados = $this->db->get();
         return $resultados -> result(); // Devuelve el re
    }

    // FUNCIONES DE PAGINACION PARA VENTA
    public function size_cotizacion()    
    {       $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente 
            $resultados= $this->db->get('cotizacion');
            return $resultados -> result(); //devuelve el resultado
    }
    public function lista_cotizacion_page($ini,$fin)
    {
            $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente
            $this->db->limit(10, $ini); 
            $resultados= $this->db->get('cotizacion');
            return $resultados -> result(); //devuelve el resultado
    }


}
