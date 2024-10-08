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
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/vista_usuarios_deshabilitados"> Reporte de ventas diarias </a>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/agregar" class="text-center">Ventas Canceladas</a>
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
                                                <th>Nro. Venta</th>
                                                <th>Cliente</th>
                                                <th>Fecha de Venta</th>
                                                <th>Total</th>
                                                <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 <?php
                                                    $i = 0;
                                                    foreach ($ventas as $vnt) {
                                                        $i++;
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $vnt->id_venta; ?></td>
                                                            <td><?php echo $vnt->id_cliente; ?></td>
                                                            <td><?php echo $vnt->fecha_venta; ?></td>
                                                            <td><?php echo $vnt->total; ?></td>
                                                            <td>
                                                                <form method="GET" action="<?php echo base_url(); ?>Cventa/ver_venta">
                                                                    <input type="hidden" name="id" value="<?php echo $vnt->id_venta; ?>">
                                                                    <button class="btn btn-info"><i class="fas fa-eye"></i>Ver</button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <?php
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
