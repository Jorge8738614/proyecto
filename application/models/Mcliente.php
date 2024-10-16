<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcliente extends CI_Model {

    public function construct()
    {
        parent::__construct();
    }

    public function insertar_cliente($data) {
        return $this->db->insert('cliente', $data);
    }

    public function lista_clientes()
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('estado_cliente', 1); 
        $resultados = $this->db->get();
        return $resultados->result(); 
    }

    public function lista_clientes_deshabilitados()
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('estado_cliente', 0); 
        $resultados = $this->db->get();
        return $resultados->result(); 
    }
    

    public function recuperar_cliente($id_cliente)
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('id_cliente', $id_cliente);
        $resultados = $this->db->get();
        return $resultados->result();
    }

    public function modificar_cliente($id_cliente, $data)
    {
        $this->db->where('id_cliente', $id_cliente);
        $this->db->update('cliente', $data);
    }

    public function buscar_cliente($txt_buscar){
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('nombre', $txt_buscar);
        $this->db->where('estado_cliente', 1);
        $resultados = $this->db->get();
        return $resultados->result(); 
    }
     // FUNCIONES DE PAGINACION PARA CLIENTE
    public function size_clientes()    
    {      
            $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  
            $resultados= $this->db->get('cliente');
            return $resultados -> result(); //devuelve el resultado
    }
    public function lista_clientes_page($caminante)
    {
            $this->db->select('*');
            //$this->db->where('estado_usuario', 1);
            $this->db->limit( 10,$caminante); 
            $resultados= $this->db->get('cliente');
            return $resultados -> result(); //devuelve el resultado
    }

}
