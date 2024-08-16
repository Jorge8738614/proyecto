<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso al Sistema</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
            border-radius: 10px;
        }
        .btn-primary {
            border-radius: 10px;
            padding: 10px 20px;
        }
        .text-right a {
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
            <div class="login-form text-center">
                <h5>INGRESO AL SISTEMA</h5>


                <form method="POST" action="<?php echo base_url();?>Clogin/validarusuario">
                    <div class="form-group">
                        <label>Alias De Usuario</label>
                        <input type="text" class="form-control" placeholder="* escriba su alias" name="alias" autocomplete="off" >
                        <div id="resp_alias"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" placeholder="* escriba su password" name="password">
                            <div id="resp_alias"></div>
                        </div>  
                        <div class="form-group col-md-6">
                        <label for="cargo">Cargo</label>
                        <select class="form-control" id="cargo" name="cargo" required>
                            <option value="" disabled selected>* Seleccione su cargo</option>
                            <option value="admin">Admin</option>
                            <option value="vendedor">Vendedor</option>
                            <option value="distribuidor">Distribuidor</option>
                        </select>
                        <div id="resp_cargo"></div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Ingresar</button>
                  
                    <div class="text-right mt-3">
                        <p class="mb-1">
                            <a href="forgot-password.html">Cambiar contraseña</a>
                        </p>
                        <p class="mb-0">
                            <a href="http://localhost/proyecto/Clogin/agregar" class="text-center">Registrar Usuario</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
