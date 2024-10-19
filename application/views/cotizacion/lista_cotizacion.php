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
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Cliente</th>
                                                    <th>Fecha</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($cotizaciones as $cotizacion): ?>
                                                <tr>
                                                    <td><?php echo $cotizacion->id_cotizacion; ?></td>
                                                    <td><?php echo $cotizacion->nombre_cliente; ?></td>
                                                    <td><?php echo $cotizacion->fecha_cotizacion; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('Ccotizacion/ver_cotizacion/' . $cotizacion->id_cotizacion); ?>" class="btn btn-info">Ver Detalles</a>
                                                    </td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
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

