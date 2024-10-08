            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Usuario</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    REGISTRAR EN EL SISTEMA
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form role="form" method="POST" action="<?php echo base_url();?>Cusuario/agregarbd" autocomplete="off">
                                            <div class="form-group">
                                                <label for="nombre_completo">Nombre(s)</label>
                                                <input type="text" class="form-control" id="nombre_completo" placeholder="* Escriba su nombre" name="nombre_completo" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nombre_completo">Apellido(s)</label>
                                                <input type="text" class="form-control" id="apellido" placeholder="* Escriba su primer apellido" name="apellido" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">celular</label>
                                                <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número telefónico" name="celular" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" placeholder="* Escriba su password" name="password" required>
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
                                            <div class="form-group">
                                                <label for="alias">Alias</label>
                                                <input type="text" class="form-control" id="alias" placeholder="* Escriba su alias" name="alias" required>
                                            </div>
                                            <br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-md">Registrar</button>
                                                <a href="<?php echo base_url(); ?>Cusuario/vista_usuarios" class="btn btn-danger">Cancelar</a>   
                                            </div> 
                                            </form>
                                        </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->