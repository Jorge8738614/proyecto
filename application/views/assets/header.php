<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> SISTEMA </title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">
  <script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>
  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>bootstrap/js/jquery.js"></script>
   <!-- template startmin-->
         <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>startmin/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url(); ?>startmin/css/metisMenu.min.css" rel="stylesheet">

        <!-- Timeline CSS -->
        <link href="<?php echo base_url(); ?>startmin/css/timeline.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>startmin/css/startmin.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo base_url(); ?>startmin/css/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url(); ?>startmin/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
</head>
<body> 
<div class="row" style="margin:0px; background: ;" > 
  <?php
//print_r($this ->session);
//echo "</br> este es el id usuario : ";
$id_usuario_sesion = $this->session->userdata('id_usuario_sesion');
//echo $id_usuario_sesion; echo "</br>";

if ($id_usuario_sesion =="") {
  header("Location: http://localhost/proyecto/Clogin/index");
}
if ($id_usuario_sesion>0) {
 // echo "usuario logeado";
  
}
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background:orange; height: 60px; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
    <h4>MENU DEL SISTEMA</h4> 

    <div style="display: flex; align-items: center;">
      <span id="username" style="margin-right: 15px; font-weight: bold;">
        <?php if ($this->session->userdata('alias_sesion')): ?>
            Usuario: <?= $this->session->userdata('alias_sesion'); ?>
        <?php else: ?>
            Usuario no encontrado
        <?php endif; ?>
    </span>
        <!-- Muestra el nombre del usuario -->
        <button style="background-color: orange; border: none; color: white; padding: 10px 20px; cursor: pointer; font-weight: bold;"> <a class="nav-link" href="<?php echo base_url(); ?>Clogin/salir" > Cerrar sesion</a></button>
    </div>
</div>


  <div class="col-lg-2 col-md-2 col-sm-2  hidden-xs" style="background:; height: 500px;" >

    <style type="text/css">
        .nav-item{ background: orange; width:200px; margin-top:2px; margin-bottom:2px;  }
        .nav-item a { color:white; }
    </style>

    <div class="container-fluid"  style="background:;" >
        <div class="row" style="background:;" >
            <!-- Vertical Navbar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky" style="background:;" >
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="home"></span>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Cusuario/vista_usuarios">
                                <span data-feather="file"></span>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Cproducto/vista_productos">
                                <span data-feather="shopping-cart"></span>
                                Productos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Cpedido/registrar_pedidos">
                                <span data-feather="shopping-cart"></span>
                                Pedidos Rapidos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Cpedido/vista_pedido">
                                <span data-feather="shopping-cart"></span>
                                Pedidos
                            </a>
                        </li> 
                                               
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Ccliente/vista_clientes">
                                <span data-feather="users"></span>
                                Clientes
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Cproducto/vista_productos">
                                <span data-feather="shopping-cart"></span>
                                Ventas Efectuadas
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Ccotizacion/vista_cotizacion">
                                <span data-feather="users"></span>
                                Cotizaciones
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Ccontrato/vista_contrato">
                                <span data-feather="users"></span>
                                Contratos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="bar-chart-2"></span>
                                Reportes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="layers"></span>
                                Configuración
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>Clogin/salir" > Cerrar sesion</a> 
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- final del row -->
        </div>
        <!-- final del fluid -->
        </div>

  <!-- final del fluid -->
  </div>

  <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12" style="background: ; height:600px;">