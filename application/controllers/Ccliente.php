<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ccliente extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mcliente");
    }

    public function agregar()
    {
        $this->load->view('assets/header');
        $this->load->view('cliente/registro_cliente');
        $this->load->view('assets/footer');
    }

    public function vista_clientes()
    {
        $data = array('clientes' => $this->Mcliente->lista_clientes_page(1),
                      'caminante'=>1,
                    ); 

        $this->load->view('assets/header');
        $this->load->view('cliente/lista_cliente', $data);
        $this->load->view('assets/footer');
    }

    public function vista_clientes_deshabilitados()
    {
        $lista = $this->Mcliente->lista_clientes_deshabilitados();
        $data = array('clientes' => $lista);
        $this->load->view('assets/header');
        $this->load->view('assets/menu');
        $this->load->view('assets/lista_cliente_deshabilitados', $data);
        $this->load->view('assets/footer');
    }

    public function agregarbd() {
        $data = array(
            'nombre' => $this->input->post('nombre'),
            'direccion' => $this->input->post('direccion'),
            'celular' => $this->input->post('celular')
            );

        if ($this->Mcliente->insertar_cliente($data)) {
            redirect('Ccliente/vista_clientes');
        } else {
            echo "Error al registrar el cliente.";
        }
    }

    public function modificar()
    {
        $id_cliente = trim($_GET['id']);
        if ($id_cliente != '') {
            $data = array("cliente" => $this->Mcliente->recuperar_cliente($id_cliente));

            if (sizeof($data) > 0) {
                $this->load->view('assets/header');
                $this->load->view('assets/modificar_cliente', $data);
                $this->load->view('assets/footer');
            } else {
                redirect('Ccliente/vista_clientes');
            }
        } else {
            redirect('Ccliente/vista_clientes');
        }
    }

    public function actualizar()
    {
        $id_cliente = trim($_POST['id']);

        $data = array(
            'nombre' => $this->input->post('nombre'),
            'direccion' => $this->input->post('direccion'),
            'telefono' => $this->input->post('telefono')
        );

        $this->Mcliente->modificar_cliente($id_cliente, $data);
        redirect('Ccliente/vista_clientes');
    }

    public function eliminarbd()    
    {
        if (isset($_GET['id'])) { 
            $id_cliente = $_GET['id'];
            $data['estado_cliente'] = '0';
            $this->Mcliente->modificar_cliente($id_cliente, $data);
            redirect('Ccliente/vista_clientes');
        } else {
            echo "Error: No se ha proporcionado el ID del cliente.";
        }
    }

    public function habilitarbd()    
    {
        if (isset($_GET['id'])) { 
            $id_cliente = $_GET['id'];
            $data['estado_cliente'] = '1';
            $this->Mcliente->modificar_cliente($id_cliente, $data);
            redirect('Ccliente/vista_clientes');
        } else {
            echo "Error: No se ha proporcionado el ID del cliente.";
        }
    }

    public function buscar()
    {
        $txt_buscar = $_GET["txt_buscar"];
        $data= array(
            "txt_buscar" => $txt_buscar,
            "clientes" => $this->Mcliente->buscar_cliente($txt_buscar),
        );

        $this->load->view('assets/header');
        $this->load->view('assets/lista_cliente_busqueda', $data);
        $this->load->view('assets/footer');
    }

       public function page_sig()
    { 
          $caminante = $_GET['cam']+1;
          $page = ($caminante-1)*10;

          //echo "pag ="; echo $page;
          //echo " cam = "; echo $caminante;
           
          /*$size = sizeof($this->Mcliente->size_clientes());
          $operacion= $size/10;
          $operacion=round($operacion, 0);
          $operacion = $operacion+1;*/


          /*if($caminante <= $operacion )
          {*/
            $lista = $this->Mcliente->lista_clientes_page($page);
             
            $data = array('clientes' => $lista, "caminante" => $caminante);

            //print_r($data);

            $this->load->view('assets/header');
            $this->load->view('cliente/lista_cliente', $data);
            $this->load->view('assets/footer');

           /* }
            else
            {
                $lista = $this->Mcliente->lista_clientes_page(1,10);
                $data = array('clientes' => $lista, "caminante" => 1);

                //print_r($data);

                $this->load->view('assets/header');
                $this->load->view('cliente/lista_cliente', $data);
                $this->load->view('assets/footer');

            }*/
        
        }

        public function page_ant()
        { 
          $caminante = $_GET['cam']-1; 
          $page = ($caminante-1)*10;
          //echo "pag ="; echo $page;
          //echo " cam = "; echo $caminante;
          
          if($caminante>0)
          { 
            
            $lista = $this->Mcliente->lista_clientes_page($page);
            $data = array('clientes' => $lista, "caminante" => $caminante);

            $this->load->view('assets/header');
            $this->load->view('cliente/lista_cliente', $data);
            $this->load->view('assets/footer');
         
          }
          else { 

            $lista = $this->Mcliente->lista_clientes_page(1);
            $data = array('clientes' => $lista, "caminante" => 1);

            $this->load->view('assets/header');
            $this->load->view('cliente/lista_cliente', $data);
            $this->load->view('assets/footer');

          } 
        
        }
}
