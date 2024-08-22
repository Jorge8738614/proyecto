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
  <style>
        body {
            background-color: #f7f7f7;
        }
        .login-container {
            margin-top: 100px;
        }
        .login-form {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-form h5 {
            margin-bottom: 30px;
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-primary {
            border-radius: 20px;
            padding: 10px 20px;
        }
        .text-right a {
            color: #007bff;
        }

        /* CSS personalizado para tabla de usuarios */
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table th {
            background-color: #343a40; /* Color de fondo para el encabezado de la tabla */
            color: #ffffff; /* Color del texto en el encabezado */
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2; /* Color de fondo para las filas pares */
        }

        .table tbody tr:hover {
            background-color: #e9ecef; /* Color de fondo cuando se pasa el ratón sobre una fila */
        }

        .btn {
            margin-right: 5px; /* Espaciado entre botones */
        }

        .container {
            max-width: 1200px; /* Ancho máximo del contenedor */
        }

        

      /* Finalizacion CSS personalizado para tabla de usuarios */

    </style>
</head>
<body> 
<div class="row" style="margin:0px; background: ;" > 
  
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
                        <li class="nav-item"  >
                            <a class="nav-link active" href="#">
                                <span data-feather="home"></span>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="http://localhost/proyecto/Clogin/vista_usuarios">
                                <span data-feather="file"></span>
                                Usuarios
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="shopping-cart"></span>
                                Productos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span data-feather="users"></span>
                                Clientes
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