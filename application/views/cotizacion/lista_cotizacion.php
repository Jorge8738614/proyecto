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
                                                <form method="GET" action="<?php echo base_url(); ?>">
                                                    <input name="txt_buscar" type="text" placeholder="Buscar Clientes" class="form-control">
                                            </td>
                                            <td>
                                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                </form>
                                            </td>
                                            <td>
                                            </td>
                                            <td>
                                                <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>">inactivos</a>
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
                                                    <th>Nro. Cotización</th>
                                                    <th>Fecha - Hora</th>
                                                    <th>Cliente</th>
                                                    <th>Vendedor</th>
                                                    <th>Total Cotización</th>
                                                    <th>Acciones</th>
                                                </tr> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                              <?php
                                                $contador = 1;
                                                //foreach ($clientes as $row) {
                                                ?>
                                                <tr>
                                                     <td>VGT001</td>
                                                    <td>2023-12-26 14:04:36</td>
                                                    <td>Aris Hernandez</td>
                                                    <td>Jorge Hernandez</td>
                                                    <td>S/. 141.6</td>
                                                    <td>
                                                        <form method="GET" action="<?php echo base_url(); ?>">
                                                            <input type="text" name="id" value="" style="display: none;">
                                                            <button type="submit" class="btn btn-success btn-xs">Modificar</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <form method="GET" action="<?php echo base_url(); ?>">
                                                            <input type="text" name="id" value="" style="display: none;">
                                                            <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                                    $contador++;
                                             //   }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                <div class="pagination">
                                    <table class="table-responsive">
                                        <tr>
                                            <td> <a href=""> <span></span> < anterior </a> 
                                            </td>
                                            <td style="width: 50px; text-align: center;">  <center>  <input type="hidden" value="1" name="caminante"> </center> 
                                             </td>
                                            <td> 
                                                <a href=""> <span></span> siguiente > </a> 
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

