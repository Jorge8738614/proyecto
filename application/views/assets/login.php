<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso al Sistema</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #c2e9fb 0%, #e6f7ff 100%);
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            margin-top: 100px;
        }
        .login-form {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .login-form:hover {
            transform: scale(1.02);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }
        .login-form h5 {
            margin-bottom: 30px;
            font-weight: bold;
            color: #333;
        }
        .form-control {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
        }
        .btn-primary {
            border-radius: 8px;
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }
        .text-right a {
            color: #007bff;
            text-decoration: none;
            font-size: 14px;
        }
        .text-right a:hover {
            text-decoration: underline;
        }
        footer {
            background: rgba(0, 0, 0, 0.1); /* Fondo semitransparente */
            padding: 15px 0;
            text-align: center;
            border-top: 1px solid rgba(0, 0, 0, 0.2);
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        footer p {
            margin: 0;
            color: #333;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="container login-container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
            <div class="login-form text-center">
                <h5>INGRESO AL SISTEMA</h5>
                <div>
                </div>

               <form method="POST" action="<?php echo base_url();?>Clogin/validarusuario">
                    <div class="form-group">
                        <label>Alias De Usuario</label>
                        <input type="text" class="form-control" placeholder="* escriba su alias" name="alias" autocomplete="off" >
                        <div id="resp_alias"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Contraseña</label>
                            <input type="password" class="form-control" placeholder="* escriba su password" name="password">
                            <div id="resp_alias"></div>
                        </div>
                        <!--
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
                    -->
                    </div>
                    <button type="submit" class="btn btn-primary btn-md">Ingresar</button>
                  
                    <div class="text-right mt-3">
                        <p class="mb-1">
                            <a href="forgot-password.html">Cambiar contraseña</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer>
   
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
