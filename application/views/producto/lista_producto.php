<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Productos / Lista productos</h1>
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
                                                    <form method="GET" action="<?php echo base_url(); ?>Cproducto/buscar">
                                                        <input name="txt_buscar" type="text" placeholder="Buscar Producto" class="form-control" >   
                                                </td>
                                                <td>
                                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i>
                                                        </button>
                                                </div>
                                                 </form>
                                                </td>

                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cproducto/vista_productos_deshabilitados"> Deshabilitados </a>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                                            Nuevo Producto
                                                  </button>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-="true">
                                                      <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Nuevo Producto</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="panel panel-default">
                                                                                <div class="panel-heading">
                                                                                    REGISTRAR PRODUCTO
                                                                                </div>
                                                                                <div class="panel-body">
                                                                                    <div class="row">
                                                                                        <div class="col-lg-12">
                                                                                         <form role="form" action="<?php echo base_url();?>Cproducto/agregarbd" method="post" enctype="multipart/form-data" autocomplete="off">
                                                                                            <div class="form-group col-md-12">
                                                                                                <label for="producto_nombre">Nombre del Producto</label>
                                                                                                <input type="text" class="form-control" id="producto_nombre" placeholder="* Escriba el nombre del producto" name="producto_nombre" required>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="producto_descripcion">Descripción</label>
                                                                                                <input class="form-control" id="producto_descripcion" placeholder="* Escriba la descripción del producto" name="producto_descripcion" required></input>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group col-md-6">
                                                                                                    <label for="producto_precio">Precio</label>
                                                                                                    <input type="number" step="0.01" class="form-control" id="producto_precio" placeholder="* Escriba el precio" name="producto_precio" required>
                                                                                                </div>
                                                                                                <div class="form-group col-md-6">
                                                                                                    <label for="producto_cantidad">Cantidad</label>
                                                                                                    <input type="number" class="form-control" id="producto_cantidad" placeholder="Cantidad en stock" name="producto_cantidad" required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group col-md-6">
                                                                                                    <label for="producto_codigo">Código del Producto</label>
                                                                                                    <input type="text" class="form-control" id="producto_codigo" placeholder="Código del producto" name="producto_codigo" required>
                                                                                                </div>

                                                                                                <div class="form-group col-md-6">
                                                                                                    <label for="categoria_id">Categoría</label>
                                                                                                    <select class="form-control" id="id_categoria" name="categoria_id" required>
                                                                                                        <option value="" disabled selected>* Seleccione la categoría</option>
                                                                                                        <option value="1">Categoría 1</option>
                                                                                                        <option value="2">Categoría 2</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-12">
                                                                                                <div class="form-group col-md-6">
                                                                                                    <label for="producto_unidad_medida">Unidad de Medida</label>
                                                                                                    <input type="text" class="form-control" id="producto_unidad_medida" placeholder="Unidad de medida" name="producto_unidad_medida" required>
                                                                                                </div>

                                                                                                <div class="form-group col-md-6">
                                                                                                    <label for="producto_imagen">Imagen</label>
                                                                                                    <input type="file" name="producto_imagen" class="form-control" required>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="form-group col-md-12 text-center">
                                                                                                <button type="submit" class="btn btn-primary btn-md">Registrar Producto</button>
                                                                                                <a href="<?php echo base_url(); ?>Cproducto/vista_productos" class="btn btn-danger">Cancelar</a>
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
                                                    <th>Nombre</th>
                                                    <th>Descripción</th>
                                                    <th>Imagen</th>
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
                                                        <td>
                                                            <?php if (!empty($producto->producto_imagen)) { ?>
                                                            <img src="<?php echo base_url() . $producto->producto_imagen; ?>" alt="Imagen del producto" width="85" height="70">
                                                            <?php } else { ?>
                                                                <p>No hay imagen</p>
                                                            <?php } ?>
                                                        </td>
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
                                        <div class="pagination">
                                            <table class="table-responsive">
                                                <tr>
                                                    <td><a href="<?php echo base_url(); ?>Cproducto/page_ant?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> < anterior</a></td>
                                                    <td style="width: 50px; text-align: center;"><?php echo $caminante; ?> <input type="hidden" value="1" name="caminante"></td>
                                                    <td><a href="<?php echo base_url(); ?>Cproducto/page_sig?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>">siguiente ></a></td>
                                                </tr>
                                            </table>
                                        </div>
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
