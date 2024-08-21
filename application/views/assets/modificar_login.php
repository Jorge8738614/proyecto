 <!-- Registration Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <h5 class="text-center mb-4">MODIFICAR USUARIO</h5>
                <?php
                foreach($infoestudiante->result() as $row)
                {
                ?>
                <form method="POST" action="<?php echo base_url();?>Clogin/agregarbd" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre_completo">Nombre(s)</label>
                        <input type="text" class="form-control" id="nombre_completo"  placeholder="* Escriba su nombre" name="nombre_completo" value="<?php echo $row->nombre_completo; ?>"  required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido(s)</label>
                        <input type="text" class="form-control" id="apellido" placeholder="* Escriba su primer apellido" name="apellido" value="<?php echo $row->apellido; ?>"  required>
                    </div>
                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número de celular" name="celular" value="<?php echo $row->celular; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="* Escriba su password" name="password" value="<?php echo $row->password; ?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cargo">Cargo</label>
                        <select class="form-control" id="cargo" name="cargo" value="<?php echo $row->cargo; ?>" required >
                            <option value="" disabled selected>* Seleccione su cargo</option>
                            <option value="admin">Admin</option>
                            <option value="vendedor">Vendedor</option>
                            <option value="distribuidor">Distribuidor</option>
                        </select>
                        <div id="resp_cargo"></div>
                    </div>
                    <div class="form-group">
                        <label for="alias">Alias</label>
                        <input type="text" class="form-control" id="alias" placeholder="* Escriba su alias" name="alias" value="<?php echo $row->alias; ?>"required>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-md">Modificar</button>
                        <a href="<?php echo base_url(); ?>Clogin/salir" class="btn btn-danger">Cancelar</a>   
                        <?php
                        echo form_close();
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>