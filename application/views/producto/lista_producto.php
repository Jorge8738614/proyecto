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
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/agregar" class="text-center">Registrar</a>
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
                                                    <th>Descripción</th>
                                                    <th>Precio</th>
                                                    <th>Cantidad</th>
                                                    <th>Código</th>
                                                    <th>Unidad de Medida</th>
                                                    <th>Categoría</th>
                                                    <th>Modificar</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <?php
                                                $contador = 1;
                                                foreach ($productos as $producto) 
                                                {  
                                                ?>
                                                    <tr>
                                                        <td><?php echo $contador; ?></td>
                                                        <td><?php echo $producto->producto_nombre; ?></td>
                                                        <td><?php echo $producto->producto_descripcion; ?></td>
                                                        <td><?php echo $producto->producto_precio; ?></td>
                                                        <td><?php echo $producto->producto_cantidad; ?></td>
                                                        <td><?php echo $producto->producto_codigo; ?></td>
                                                        <td><?php echo $producto->producto_unidad_medida; ?></td>
                                                        <td><?php echo $producto->categoria_id; ?></td>
                                                        <td>
                                                            <form method="GET" action="<?php echo base_url(); ?>Cproducto/modificar_producto">
                                                                <input type="hidden" name="id" value="<?php echo $producto->id_producto; ?>">
                                                                <button type="submit" class="btn btn-success btn-xs">Modificar</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form method="GET" action="<?php echo base_url(); ?>Cproducto/eliminarbd">
                                                                <input type="hidden" name="id" value="<?php echo $producto->id_producto; ?>">
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
