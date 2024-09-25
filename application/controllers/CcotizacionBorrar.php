<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccotizacion extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Mcotizacion');
        $this->load->model('Mproducto');
        $this->load->model('Mcliente');
    }

    public function ver_cotizacion()
    {
         $id_cotizacion = trim($_GET['id']);
         if ($id_cotizacion!='') 
         {
              
            $data = array("cotizacion" => $this->Mcotizacion->recuperar_cotizacion($id_cotizacion));
                
                //print_r($data);
                if (sizeof($data) > 0) 
                {
                    $this->load->view('assets/header');
                    $this->load->view('cotizacion/registrar_cotizacion_carrito', $data );
                    $this->load->view('assets/footer');
                } 
                else {
                    
                    redirect('Ccotizacion/vista_cotizacion');
                }
            } else {
                
                redirect('Ccotizacion/vista_cotizacion');
            }
    }

     public function vista_cotizacion() 
     {
        $data = array('cotizacion' => $this->Mcotizacion->lista_cotizacion_page(1,10),
                    'caminante'=>1,
                    ); 

        $this->load->view('assets/header');
        $this->load->view('cotizacion/registrar_cotizacion_carrito', $data );
        $this->load->view('assets/footer');
    }
     public function lista_cotizacion() 
     {
        $data = array('cotizacion' => $this->Mcotizacion->lista_cotizacion_page(1,10),
                    'caminante'=>1,
                    ); 

        $this->load->view('assets/header');
        $this->load->view('cotizacion/lista_cotizacion', $data);
        $this->load->view('assets/footer');
    }


    public function page_sig()
    { 
            $caminante = $_GET['cam'];
            $ini=$caminante*10;
         
 
          $size = sizeof($this->Mventa->size_venta());
          $operacion= $size/10;
          $operacion=round($operacion, 0);
          $operacion=$operacion-1;

          if($caminante <= $operacion )
          {
            $lista = $this->Mventa->lista_venta_page($ini,10);
            $caminante=$caminante+1;
            $data = array('ventas' => $lista, "caminante" => $caminante);

            //print_r($data);

            $this->load->view('assets/header');
            $this->load->view('venta/vista_venta', $data);
            $this->load->view('assets/footer');
            }
            else
            {
                $lista = $this->Mventa->lista_venta_page(1,10);
                $data = array('ventas' => $lista, "caminante" => 1);

                //print_r($data);

                $this->load->view('assets/header');
                $this->load->view('venta/vista_venta', $data);
                $this->load->view('assets/footer');

            }
        
        }

        public function page_ant()
        { 
          $caminante = $_GET['cam']-1; 
          
          if($caminante>0)
          {
            $ini = (($caminante)*10);
            //$caminante = $caminante+1;
        
         
            $lista = $this->Mcotizacion->lista_venta_page($ini,10);
            $data = array('cotizaciones' => $lista, "caminante" => $caminante);

            $this->load->view('assets/header');
            $this->load->view('cotizacion/lista_cotizacion', $data);
            $this->load->view('assets/footer');
          }
          else { 

            $lista = $this->Mventa->lista_venta_page(1,10);
            $data = array('ventas' => $lista, "caminante" => 1);

            //print_r($data);

            $this->load->view('assets/header');
            $this->load->view('venta/vista_venta', $data);
            $this->load->view('assets/footer');

          }
        
        }

}

