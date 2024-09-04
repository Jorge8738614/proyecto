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

    public function size_usuarios()
    {       $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente 
            $resultados= $this->db->get('usuario');
            return $resultados -> result(); //devuelve el resultado
    }

    public function lista_usuarios()
    {
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente
            return $this->db->get(); // Devuelve el resultado
    }

  
    public function lista_usuarios_page($ini,$fin)
    {
            $this->db->select('*');
            //$this->db->where('estado_usuario', 1);  // Ajusta aquí si el nombre es diferente
            $this->db->limit($fin, $ini); 
            $resultados= $this->db->get('usuario');
            return $resultados -> result(); //devuelve el resultado
    }

    public function lista_usuarios_deshabilitados()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('estado_usuario', 0); 
        return $this->db->get(); 
   }

//misma funciones para obtener el id usuario
        
    public function get_usuario_sesion($id_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('id_usuario',$id_usuario);
        $resultados= $this->db->get();
        return $resultados -> result(); 
    }

    public function recuperar_usuario($id_usuario)
    {
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('id_usuario',$id_usuario);  // Ajusta aquí si el nombre es diferente
        $resultados = $this->db->get();
         return $resultados -> result(); // Devuelve el re
    }

    public function modificar_usuario($id_usuario,$data)
    {
        $this->db->where('id_usuario',$id_usuario);
        $this->db->update('usuario',$data);
    }

    public function buscar_usuario($txt_buscar){
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('nombre_completo',$txt_buscar);
        $this->db->where('estado_usuario',1);
        $resultados = $this->db->get();
         return $resultados -> result(); 
    }

    
    public function count_all_users()
    {
        $this->db->where('estado_usuario', 1); // Solo cuenta usuarios activos
        return $this->db->count_all_results('usuario');
    }

    // Nuevo método para obtener usuarios con paginación
    public function get_users($limit, $start)
    {
        //$this->db->select('*');
       // $this->db->from('usuario');
       // $this->db->where('estado_usuario', 1); // Solo usuarios activos
       // $this->db->limit($limit, $start);
       // $query = $this->db->get();
       // return $query->result();

    $this->db->select('nombre_completo, apellido, alias, id_rol, fecha_creacion, id_usuario');
    $this->db->from('usuario');
    $this->db->where('estado_usuario', 1);
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    return $query->result();
    }


}