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
                                                <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                                                </form>
                                            </td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Ccliente/vista_clientes_deshabilitados">Deshabilitados</a>
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
                                                    <th>Dirección</th>
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
                                                    <td><?php echo $row->direccion; ?></td>
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
                                    <table class="table table-bordered">
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

