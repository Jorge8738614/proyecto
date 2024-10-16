<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema Verzasca</title>

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--    Plugin Easy autocomplete  CSS-->  
        <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/easyAutocomplete-1.3.5/easy-autocomplete.min.css">   
       <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/easyAutocomplete-1.3.5/easy-autocomplete.themes.min.css">
    </head>

        <body>

        <div id="wrapper">
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

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">SISTEMA VERZASCA</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <!-- Notificaciones  -->
                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                <!-- CONTROL DE INICIO DE SESION   -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> 
                             <?php if ($this->session->userdata('alias_sesion')): ?>
                                Usuario: <?= $this->session->userdata('alias_sesion'); ?>
                            <?php else: ?>
                                Usuario no encontrado
                            <?php endif; ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Datos Usuario</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-gear fa-fw"></i>Configuracion</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo base_url(); ?>Clogin/salir"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                            </li>
                        </ul>
                    </li>
                     <!-- FINAL DE CONTROL DE INICIO DE SESION   -->
                </ul>
                <!-- /.navbar-top-links -->
                <!-- final de Notificaciones  -->
            </nav>

            <aside class="sidebar navbar-default" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <!-- BUSQUEDA DE MENU  -->
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                         <!-- FINAL DE BUSQUEDA DE MENU  -->
                          <!-- INICIO DE MENU IZQUIERDO  -->
                        <li>
                            <a href="<?php echo base_url(); ?>Cusuario/menu"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>Cusuario/vista_usuarios">Lista de Usuario</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Productos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>Cproducto/agregar">Registro de Productos</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Cproducto/vista_productos">Lista de Productos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>Cpedido/registrar_pedidos"><i class="fa fa-edit fa-fw"></i> Pedidos Rapidos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Ventas Efectuadas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>Cventa/vista_venta">Lista de ventas</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Cproducto/vista_productos">Reporte de ventas</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Clientes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>Ccliente/agregar">Registro de Clientes</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Ccliente/vista_clientes">Lista de Clientes</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Cotizaciones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>Ccotizacion/agregar_cotizacion">Registro de Nueva Cotizacion</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>Ccotizacion/listar_cotizacion">Lista de Cotizacion</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>Ccontrato/vista_contrato"><i class="fa fa-edit fa-fw"></i>Contratos</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Reportes<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Reporte de Cliente</a>
                                </li>
                                <li>
                                    <a href="morris.html">Reporte de Ventas</a>
                                </li>
                                <li>
                                    <a href="morris.html">Reporte de Cotizaciones</a>
                                </li>
                                 <li>
                                    <a href="morris.html">Reporte de Contratos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
            </aside>
            <!-- /.sidebar -->
            </div>