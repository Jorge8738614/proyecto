<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musuario extends CI_Model {

    public function validar($login,$password)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('alias',$login);
        $this->db->where('password',$password);
        $resultados= $this->db->get();
        return $resultados -> result(); //devuelve el resultado
    }

      public function insertar_usuario($data) {
        return $this->db->insert('usuario', $data);
    }

    public function lista_usuarios()
        {
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente
            return $this->db->get(); // Devuelve el resultado
        }

//misma funciones para obtener el id usuario
        
    public function get_usuario_sesion($id_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('id_usuario',$id_usuario);
        $resultados= $this->db->get();
        return $resultados -> result(); //devuelve el resultado     
    }

    public function recuperar_usuario($id_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('id_usuario',$id_usuario);  // Ajusta aquí si el nombre es diferente
        return $this->db->get(); // Devuelve el re
    }

    public function modificar_usuario($id_usuario,$data)
    {
        $this->db->where('id_usuario',$id_usuario);
        $this->db->update('usuario',$data);
    }


}