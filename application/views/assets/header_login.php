<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SISTEMA </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.css">
    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>bootstrap/js/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.js"></script>
    <style>
      /* Estilo general para el formulario */
          form {
              background-color: #f8f9fa; /* Color de fondo claro */
              padding: 20px; /* Espaciado interno */
              border-radius: 8px; /* Bordes redondeados */
              box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra suave */
          }

          /* Estilo para los inputs */
          .form-control {
              border-radius: 4px; /* Bordes ligeramente redondeados */
              border: 1px solid #ced4da; /* Borde gris claro */
              transition: border-color 0.3s ease-in-out; /* Transición suave en el cambio de color del borde */
          }

          /* Estilo para el foco de los inputs */
          .form-control:focus {
              border-color: #007bff; /* Color del borde al enfocar (azul) */
              box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Sombra azul suave */
          }

          /* Estilo para los labels */
          label {
              font-weight: bold; /* Texto en negrita */
              margin-bottom: 5px; /* Espacio inferior */
              color: #495057; /* Color gris oscuro */
          }

          /* Estilo para el botón de registro */
          .btn-primary {
              background-color: #007bff; /* Color de fondo azul */
              border-color: #007bff; /* Color del borde azul */
              border-radius: 4px; /* Bordes redondeados */
              transition: background-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out; /* Transición suave */
          }

          /* Estilo para el botón al hacer hover */
          .btn-primary:hover {
              background-color: #0056b3; /* Color de fondo azul más oscuro */
              box-shadow: 0 4px 8px rgba(0, 87, 179, 0.4); /* Sombra azul más pronunciada */
          }

          /* Estilo para el encabezado del formulario */
          h5 {
              color: #343a40; /* Color gris oscuro */
              font-weight: bold; /* Texto en negrita */
              margin-bottom: 20px; /* Espacio inferior */
          }

    </style>
</head>

<body>
    <!-- Header Section -->
    