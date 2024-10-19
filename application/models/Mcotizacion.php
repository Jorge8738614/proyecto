<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcotizacion extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Inserta una nueva cotización
    public function insertar_cotizacion($datos_cotizacion) {
        $this->db->insert('cotizacion', $datos_cotizacion);
        return $this->db->insert_id();  // Devuelve el ID de la cotización creada
    }

    // Inserta los productos en la tabla de detalle de cotización
    public function insertar_detalle_cotizacion($detalle) {
        return $this->db->insert('detalle_cotizacion', $detalle);
    }

    // Obtiene todos los productos
    public function obtener_productos() {
        $this->db->where('producto_estado', 1);  // Solo productos habilitados
        $query = $this->db->get('producto');
        return $query->result();
    }

    // Obtiene todos las cotizaciones
public function obtener_cotizaciones() {
    $this->db->select('cotizacion.id_cotizacion, cliente.nombre AS nombre_cliente, cotizacion.fecha_creacion AS fecha_cotizacion');
    $this->db->from('cotizacion');
    $this->db->join('cliente', 'cotizacion.id_cliente = cliente.id_cliente');
    $query = $this->db->get();
    return $query->result();
}

 
    // Obtiene los datos de una cotización específica
    public function obtener_cotizacion($id_cotizacion) {
        $this->db->where('id_cotizacion', $id_cotizacion);
        $query = $this->db->get('cotizacion');
        return $query->row();
    }

    // Obtiene el detalle de una cotización específica
    public function obtener_detalle_cotizacion($id_cotizacion) {
        $this->db->where('cotizacion_id', $id_cotizacion);
        $query = $this->db->get('detalle_cotizacion');
        return $query->result();
    }

    
}
