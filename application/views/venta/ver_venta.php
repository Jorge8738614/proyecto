            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Ventas</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Detalles de la venta
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <?php  
                                              if (sizeof($venta) > 0): ?>
                                            <?php foreach($venta as $row): ?>
                                            <form role="form" method="POST" action="<?php echo base_url(); ?>Cventa/actualizar" autocomplete="off">
                                            <input type="text" name="id" value="<?php echo $row->id_venta; ?>"  style="display: none;">
                                            <div class="form-group">
                                                <label for="nombre_completo">Nombre(s) Completo</label>
                                                <input type="text" class="form-control" id="nombre_completo" placeholder="* Escriba su nombre" name="nombre_completo" value="<?php echo $row->nombre_completo; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nombre_completo">Apellido(s)</label>
                                                <input type="text" class="form-control" id="apellido" placeholder="* Escriba su apellido" name="apellido" value="<?php echo $row->apellido; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="telefono">celular</label>
                                                <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número de celular" name="celular" value="<?php echo $row->celular; ?>" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" placeholder="* Escriba su password" name="password" value="<?php echo $row->password; ?>" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                    <label for="cargo">Cargo</label>
                                                    <select class="form-control" id="cargo" name="cargo" required>
                                                        <option value="" disabled>* Seleccione su cargo</option>
                                                        <option value="admin" <?php echo ($row->cargo == 'admin') ? 'selected' : ''; ?>>Admin</option>
                                                         <option value="vendedor" <?php echo ($row->cargo == 'vendedor') ? 'selected' : ''; ?>>Vendedor</option>
                                                        <option value="distribuidor" <?php echo ($row->cargo == 'distribuidor') ? 'selected' : ''; ?>>Distribuidor</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="alias">Alias</label>
                                                <type="text" class="form-control" id="alias" placeholder="* Escriba su alias" name="alias" value="<?php echo $row->alias; ?>" required>
                                            </div>
                                            <br>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary btn-md">Registrar</button>
                                                <a href="<?php echo base_url(); ?>Cusuario/vista_usuarios" class="btn btn-danger">Cancelar</a>   
                                            </div>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                                <p>No se encontró el usuario.</p>
                                            <?php endif; ?> 
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