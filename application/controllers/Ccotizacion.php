<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccotizacion extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mcotizacion');
        $this->load->model('Mproducto');
        $this->load->model('Musuario');
    }

    public function registrar_cotizacion()
    {
         $codigo_c = $this->Mcotizacion->get_cotizacion_id();

        
            if (sizeof($codigo_c) == 0) {
                $codigo_car = "COD_1";
            } else {
                // Acceder al primer elemento del array y luego a la propiedad del objeto
                $codigo_car = "COD_" . $codigo_c[0]->id_cotizacion;  // Acceder al primer objeto en el array
            }

        
        $data = array(
         "productos"=>$this->Mproducto->lista_productos(),
         "cotizacion"=> $this->Mcotizacion->listar_cotizacion(),
         "ultimo_cotizacion"=> $this->Mcotizacion->listar_ultima_cotizacion(),
         "cotizacion"=> $this->Mcotizacion->listar_cotizacion(),
         "carrito" => $this->Mcotizacion->listar_cotizacion(),
         "codigo_car" => $codigo_car,
        );
        //print_r($data);

        $this->load->view('assets/header');
        $this->load->view('cotizacion/vista_registrar_cotizacion_carrito', $data);
        $this->load->view('assets/footer');

    }

    //esta funcion no muestra nada

    public function lista_cotizacion()
    {
        $data=array(
         "productos"=>$this->Mproducto->lista_productos(),
         "cotizacion"=> $this->Mcotizacion->listar_cotizacion(),
         "ultimo_cotizacion"=> $this->Mcotizacion->listar_ultima_cotizacion(),
         "cotizacion"=> $this->Mcotizacion->listar_cotizacion(),);

        //print_r($data);

        $this->load->view('assets/header');
        $this->load->view('cotizacion/lista_cotizacion', $data);
        $this->load->view('assets/footer');
    }


    public function registrar_carrito_cotizacion()
    {
        
            
            $codigo_car = $_POST["codigo_car"];
            $id_producto = $_POST["producto"];
            $cantidad_car = $_POST["cantidad"];

            $prod = $this->Mproducto->get_producto($id_producto);
            $costo_car = $prod[0]->producto_precio;

            $data = array(
            "codigo_car" => $codigo_car,
            "id_producto" => $id_producto,
            "cantidad_car" => $cantidad_car,
            "costo_car" => $costo_car,
            );

            //print_r($data);

            $this->Mcotizacion->registrar_carrito_cotizacion($data);

            $data1 = array(
             "productos"=>$this->Mproducto->lista_productos(),
             "cotizacion"=> $this->Mcotizacion->listar_cotizacion(),
             "ultimo_cotizacion"=> $this->Mcotizacion->listar_ultima_cotizacion(),
             "codigo_car" => $codigo_car,
             "carrito"=> $this->Mcotizacion->lista_carrito_cotizacion($codigo_car),
             "usuarios"=> $this->Musuario->lista_usuarios(),
              );
            //print_r($data1);

            //INESERCCIONEN LA TABLA DETALLE VENTAS
            //$cotizacion_data = array(
                //"id_producto" => $id_producto,
                //"total" => $cantidad_car * $costo_car,
            //);

           

        $this->load->view('assets/header');
        $this->load->view('cotizacion/vista_registrar_cotizacion_carrito', $data1);
        $this->load->view('assets/footer');

    }
    public function eliminar_carrito_bd()
    {
        $id_carrito_co =$_POST['id_carrito_co'];
        $this->Mcotizacion->eliminar_carrito_cotizacion($id_carrito_co);
        //redirect('pedido/registrar_pedido_carrito');
        $data=array(
         "productos"=>$this->Mproducto->lista_productos(),
         "pedidos"=> $this->Mpedido->listar_pedidos(),
         "ultimo_cotizacion"=> $this->Mpedido->listar_ultimo_pedido(),
         "usuarios"=> $this->Musuario->lista_usuarios(),
        );

        //print_r($data);

        $this->load->view('assets/header');
        $this->load->view('cotizacion/vista_registrar_cotizacion_carrito', $data);
        $this->load->view('assets/footer');
        
    }   

    public function registrar_carrito_venta()
    {
        echo "ingreso";
        $codigo_car=$_POST['codigo_car1'];
        $total=$_POST['total'];
        $pago=$_POST['pago'];
        $cambio=$_POST['cambio'];
        $fecha_venta=date("YmdHis");

        echo $codigo_car;
        $carrito= $this->Mpedido->get_carrito_pedido($codigo_car);
        //print_r($carrito);
        echo "<br>";
        echo $total;
        echo "<br>";
        echo $pago;
        echo "<br>";
        echo $cambio = $pago - $total;
        echo "<br>";
        //echo $id_cliente;
        
        $data= array(
            "codigo_venta"=>$codigo_car,
            "id_cliente"=>$id_cliente,
            "total"=>$total,
            "pago"=>$pago,
            "cambio"=>$cambio,
            "fecha_venta"=>$fecha_venta
        );

        $this->Mventa->registrar_venta($data);


        foreach ($carrito as $car) 
        {
          echo $id_producto=$car->id_producto;
           echo "-";
          echo $cantidad_car=$car->cantidad_car;
           echo "-";
          echo $costo_car=$car->costo_car;

          echo "<br>";
          $ddata= array(
            "codigo_venta"=>$codigo_car,
            "id_producto"=>$id_producto,
            "cantidad_venta"=>$cantidad_car,
            "precio_venta"=>$costo_car,
            );
          $this->Mcotizacion->registrar_detalle_cotizacion($ddata);
        }

        $this->Mcotizacion->vaciar_carrito($codigo_car);

        header('Location: http://localhost/proyecto/Cpedido/registrar_pedidos');

    }

    public function impresion()
    {
       $this->load->view('cotizacion/impresion');
    }
    
        

}
