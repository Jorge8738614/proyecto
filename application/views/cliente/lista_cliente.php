 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Cliente</h1>
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
                                                <form method="GET" action="<?php echo base_url(); ?>Ccliente/buscar">
                                                    <input name="txt_buscar" type="text" placeholder="Buscar Clientes" class="form-control">
                                            </td>
                                            <td>
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                                 <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                                            Nuevo Cliente
                                                  </button>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-="true">
                                                      <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Nuevo Cliente</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            REGISTRAR CLIENTE
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <form method="POST" action="<?php echo base_url();?>Ccliente/agregarbd" autocomplete="off">
                                                                    <div class="form-group">
                                                                        <label for="nombre">Nombre(s)</label>
                                                                        <input type="text" class="form-control" id="nombre" placeholder="* Escriba su nombre" name="nombre" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="nombre">Apellidos</label>
                                                                        <input type="text" class="form-control" id="apellido" placeholder="* Escriba su apellido" name="nombre" required>
                                                                    </div>
                                                                      <div class="form-group col-md-6">
                                                                        <label for="direccion">Dirección</label>
                                                                        <input type="text" class="form-control" id="direccion" placeholder="* Escriba su dirección" name="direccion" required>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="producto_imagen">Imagen</label>
                                                                        <input type="file" name="producto_imagen" class="form-control" required>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                    <div class="form-group col-md-6">
                                                                        <label for="nombre">tipo</label>
                                                                        <input type="text" class="form-control" id="tipo_cliente" placeholder="* Escriba su tipo" name="tipo" required>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <label for="celular">Celular</label>
                                                                        <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número de celular" name="celular" required>
                                                                    </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="text-center">
                                                                        <button type="submit" class="btn btn-primary btn-md">Registrar</button>
                                                                        <a href="<?php echo base_url(); ?>Ccliente/vista_clientes" class="btn btn-danger">Cancelar</a>   
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
                                            <td>
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>Ccliente/vista_clientes_deshabilitados">inactivos</a>
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
                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>tipo</th>
                                                    <th>Dirección</th>
                                                    <th>Foto referencial</th>
                                                    <th>Teléfono</th>
                                                    <th>Modificar</th>
                                                    <th>Eliminar</th>
                                                </tr> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                                $contador = 1;
                                                foreach ($clientes as $row) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $contador; ?></td>
                                                    <td><?php echo $row->nombre; ?></td>
                                                    <td><?php echo $row->apellido; ?></td>
                                                    <td><?php echo $row->tipo; ?></td>
                                                    <td><?php echo $row->direccion; ?></td>
                                                    <td></td>
                                                    <td><?php echo $row->celular; ?></td>
                                                    <td>
                                                        <form method="GET" action="<?php echo base_url(); ?>Ccliente/modificar">
                                                            <input type="text" name="id" value="<?php echo $row->id_cliente; ?>" style="display: none;">
                                                            <button type="submit" class="btn btn-success btn-xs">Modificar</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form method="GET" action="<?php echo base_url(); ?>Ccliente/eliminarbd">
                                                            <input type="text" name="id" value="<?php echo $row->id_cliente; ?>" style="display: none;">
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
                                <div class="pagination">
                                    <table class="table-responsive">
                                        <tr>
                                            <td> <a href="<?php echo base_url(); ?>Ccliente/page_ant?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> <span></span> < anterior </a> 
                                            </td>
                                            <td style="width: 50px; text-align: center;"> <?php echo $caminante; ?> <center>  <input type="hidden" value="1" name="caminante"> </center> 
                                             </td>
                                            <td> 
                                                <a href="<?php echo base_url(); ?>Ccliente/page_sig?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> <span></span> siguiente > </a> 
                                            </td>
                                        </tr>
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

