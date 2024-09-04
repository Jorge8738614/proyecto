 <!-- Registration Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <h5 class="text-center mb-4">REGISTRAR EN EL SISTEMA</h5>
                <form method="POST" action="<?php echo base_url();?>Ccliente/agregarbd" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre">Nombre(s)</label>
                        <input type="text" class="form-control" id="nombre" placeholder="* Escriba su nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre_completo">Direccion</label>
                        <input type="text" class="form-control" id="direccion" placeholder="* Escriba su primer apellido" name="direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="celular">celular</label>
                        <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número de celular" name="celular" required>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-md">Registrar</button>
                        <a href="<?php echo base_url(); ?>Ccliente/vista_clientes" class="btn btn-danger">Cancelar</a>   
                    </div>
            </form>

            </div>
        </div>
    </div>