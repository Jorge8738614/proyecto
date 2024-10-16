 <            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Productos / Registro</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="container d-flex justify-content-center align-items-center min-vh-100">
                    <div class="col-lg-8">
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                        REGISTRAR PRODUCTO
                                </div>
                             <div class="panel-body">
                                <form role="form" action="<?php echo base_url();?>Cproducto/agregarbd" method="post" enctype="multipart/form-data" autocomplete="off">
                            <div class="form-group">
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
                    </div>
                </div>
            </div>
                <!-- /.container-fluid -->
         </div>
            <!-- /#page-wrapper -->