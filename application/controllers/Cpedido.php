<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpedido extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mpedido');
        $this->load->model('Mproducto');
        $this->load->model('Mcliente');
        $this->load->model('Mventa');
    }


    public function registrar_pedidos()
    {
        $data=array(
         "productos"=>$this->Mproducto->lista_productos(),
         "pedidos"=> $this->Mpedido->listar_pedidos(),
         "ultimo_pedido"=> $this->Mpedido->listar_ultimo_pedido(),
         "clientes"=> $this->Mcliente->lista_clientes(),);

        //print_r($data);

        $this->load->view('assets/header');
        $this->load->view('pedido/registrar_pedido', $data);
        $this->load->view('assets/footer');
    }

    public function registrar_carrito()
    {
        
            
            $codigo_car = $_POST["codigo_car"];
            $id_cliente = $_POST["cliente"];
            $prioridad = $_POST["prioridad"];
            $id_producto = $_POST["producto"];
            $cantidad_car = $_POST["cantidad"];

            $prod = $this->Mproducto->get_producto($id_producto);
            $costo_car = $prod[0]->producto_precio;

            $data = array(
            "codigo_car" => $codigo_car,
            "id_cliente" => $id_cliente,
            "prioridad" => $prioridad,
            "id_producto" => $id_producto,
            "cantidad_car" => $cantidad_car,
            "costo_car" => $costo_car,
            );

            $this->Mpedido->registrar_carrito_pedidos($data);

            $data1 = array(
             "productos"=>$this->Mproducto->lista_productos(),
             "pedidos"=> $this->Mpedido->listar_pedidos(),
             "ultimo_pedido"=> $this->Mpedido->listar_ultimo_pedido(),
             "clientes"=> $this->Mcliente->lista_clientes(),
             "codigo_car" => $codigo_car,
             "carrito"=> $this->Mpedido->lista_carrito_pedido($codigo_car),

              );
            //INESERCCIONEN LA TABLA DETALLE VENTAS
            $venta_data = array(
                "id_cliente" => $id_cliente,
                "total" => $cantidad_car * $costo_car,
            );

           

        $this->load->view('assets/header');
        $this->load->view('pedido/registrar_pedido_carrito', $data1);
        $this->load->view('assets/footer');

    }
    public function eliminar_carrito_bd()
    {
        $id_carrito=$_POST['id_carrito'];
        $this->Mpedido->eliminar_carrito_pedido($id_carrito);
        
        $data=array(
         "productos"=>$this->Mproducto->lista_productos(),
         "pedidos"=> $this->Mpedido->listar_pedidos(),
         "ultimo_pedido"=> $this->Mpedido->listar_ultimo_pedido(),
         "clientes"=> $this->Mcliente->lista_clientes(),);

            //print_r($data);
    
        $this->load->view('assets/header');
        $this->load->view('pedido/registrar_pedido', $data);
        $this->load->view('assets/footer');
        
    }   

    public function registrar_carrito_venta()
    {
        echo "ingreso";
        $codigo_car=$_POST['codigo_car1'];
        $total=$_POST['total'];
        $pago=$_POST['pago'];
        $cambio=$_POST['cambio'];
        $id_cliente=$_POST['id_cliente'];
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
        echo $id_cliente;
        
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
          $this->Mventa->registrar_detalle_venta($ddata);
        }

        $this->Mventa->vaciar_carrito($codigo_car);

        header('Location: http://localhost/proyecto/Cpedido/registrar_pedidos');

    }
        

}
