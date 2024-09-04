<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination {

    protected $CI;

    public function __construct() {
        
        $this->CI =& get_instance();
        $this->CI->load->library('pagination');
    }

    public function paginate($base_url, $total_rows, $per_page, $uri_segment) {
        // Configuración básica para la paginación
        $config['base_url'] = $base_url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = $uri_segment;

        // Configura los estilos para la paginación
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'Primero';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Siguiente';
        $config['prev_link'] = 'Anterior';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        // Inicializa la paginación
        $this->CI->pagination->initialize($config);

        
        return $this->CI->pagination->create_links();
    }
}
