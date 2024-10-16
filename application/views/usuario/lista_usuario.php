<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Usuarios</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                        <table class="table">
                                            <tr>
                                                <td style="width: 70%;">
                                                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/buscar">
                                                        <input name="txt_buscar" type="text" placeholder="Buscar Usuarios" class="form-control" >   
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm" > Buscar </button>
                                                 </form>
                                                </td>

                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/vista_usuarios_deshabilitados"> Deshabilitados </a>
                                                </td>
                                                <td>
                                                       <!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                                            Nuevo Usuario
                                                  </button>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-="true">
                                                      <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Nuevo Usuario</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            REGISTRAR USUARIO
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
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.modal -->  
                                                </td>
                                            </tr>
                                        </table>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nombre Completo</th>
                                                    <th>Apellido</th>
                                                    <th>Alias</th>
                                                    <th>Rol</th>
                                                    <th>Fecha Creación</th>
                                                    <th>Modificar</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contador = 1;
                                                    
                                                foreach ($usuarios as $row) 
                                                {  
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador; ?></td>
                                                        <td><?php echo $row->nombre_completo; ?></td>
                                                        <td><?php echo $row->apellido; ?></td>
                                                        <td><?php echo $row->alias; ?></td>
                                                        <td><?php echo $row->id_rol; ?></td>
                                                        <td><?php echo formatearFecha($row->fecha_creacion); ?></td>
                                                        <!-- Opcional: acciones para modificar, eliminar y deshabilitar -->
                                                        
                                                        <td>
                                                            <form method="GET" action="<?php echo base_url(); ?>Cusuario/modificar">
                                                            <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
                                                            <button type="submit" class="btn btn-success btn-xs">Modificar</button>
                                                            </form>
                                                            
                                                        </td>
                                                        <td>
                                                            <form method="GET" action="<?php echo base_url(); ?>Cusuario/eliminarbd">
                                                            <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
                                                            <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                            </form>

                                                        </td>
                                                    </tr>
                                                    <?php
                                                    $contador++;
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

            <!-- /#page-wrapper -->

        </div>
</div>
