<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcliente extends CI_Model {

    public function insertar_cliente($data) {
        return $this->db->insert('cliente', $data);
    }

    public function lista_clientes()
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('estado_cliente', 1); 
        return $this->db->get();
    }

    public function lista_clientes_deshabilitados()
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('estado_cliente', 0); 
        return $this->db->get(); 
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

    public function count_all_clients()
    {
        $this->db->where('estado_cliente', 1); 
        return $this->db->count_all_results('cliente');
    }

    public function get_clients($limit, $start)
    {
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->where('estado_cliente', 1);
        $this->db->limit($limit, $start);
        $query = $this->db->get();

        return $query->result();
    }
}
