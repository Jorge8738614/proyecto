<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccotizacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mcotizacion');
    }

    // Cargar la vista de registro de cotización
    public function registrar_cotizacion() {
        $data['productos'] = $this->Mcotizacion->obtener_productos();
        $this->load->view('assets/header');
        $this->load->view('cotizacion/registro_cotizacion', $data);
        $this->load->view('assets/footer');
    }

    // Procesar la creación de la cotización
    public function guardar_cotizacion() { 
    // Recibir datos del formulario
    $nombre_cliente = $this->input->post('nombre_cliente');
    $productos_seleccionados = $this->input->post('productos');

    // Obtener o insertar el cliente
    $cliente = $this->Musuario->obtener_cliente_por_nombre($nombre_cliente);  // Suponiendo que esta función existe

    if (!$cliente) {
        // Si el cliente no existe, lo insertamos en la tabla cliente
        $cliente_data = array(
            'nombre' => $nombre_cliente,
            // Otros datos del cliente si es necesario
        );
        $id_cliente = $this->Musuario->insertar_cliente($cliente_data);
    } else {
        $id_cliente = $cliente->id_cliente;
    }

    // Insertar cotización
    $cotizacion_data = array(
        'id_cliente' => $id_cliente,  // Usar id_cliente en lugar de nombre_cliente
        'fecha_creacion' => date('Y-m-d'),  // Asegúrate de usar el nombre correcto de la columna en la base de datos
        'estado' => 1  // 1 para activo
    );
    $id_cotizacion = $this->Mcotizacion->insertar_cotizacion($cotizacion_data);

    // Insertar detalles de la cotización
    foreach ($productos_seleccionados as $producto_id => $cantidad) {
        $producto = $this->Mproducto->obtener_producto($producto_id);  // Cambiar a Mproducto para obtener los productos

        $detalle_data = array(
            'cotizacion_id' => $id_cotizacion,
            'producto_id' => $producto->id_producto,
            'cantidad' => $cantidad,
            'precio' => $producto->producto_precio,
            'subtotal' => $producto->producto_precio * $cantidad
        );
        $this->Mcotizacion->insertar_detalle_cotizacion($detalle_data);
    }

    // Redirigir al listado de cotizaciones
    redirect('Ccotizacion/listar_cotizaciones');
}


    // Listar las cotizaciones
    public function listar_cotizaciones() {
        $data['cotizaciones'] = $this->Mcotizacion->obtener_cotizaciones();
        $this->load->view('assets/header');
        $this->load->view('cotizacion/lista_cotizacion', $data);
        $this->load->view('assets/footer');
    }

    // Ver detalles de una cotización
    public function ver_cotizacion($id_cotizacion) {
        $data['cotizacion'] = $this->Mcotizacion->obtener_cotizacion($id_cotizacion);
        $data['detalles'] = $this->Mcotizacion->obtener_detalle_cotizacion($id_cotizacion);
        $this->load->view('assets/header');
        $this->load->view('cotizacion/detalle_cotizacion', $data);
        $this->load->view('assets/footer');
    }
}
