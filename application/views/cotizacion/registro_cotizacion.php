            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Registro de cotizacion</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    REGISTRAR COTIZACION
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form action="<?php echo base_url('Ccotizacion/guardar_cotizacion'); ?>" method="POST">
                                                <div class="form-group">
                                                    <label for="nombre_cliente">Nombre del Cliente</label>
                                                    <input type="text" name="nombre_cliente" class="form-control" required>
                                                </div>

                                                <h3>Seleccionar Productos</h3>
                                                <?php foreach ($productos as $producto): ?>
                                                    <div class="form-group">
                                                        <label for="producto_<?php echo $producto->id_producto; ?>">
                                                            <?php echo $producto->producto_nombre; ?> (<?php echo $producto->producto_precio; ?>)
                                                        </label>
                                                        <input type="number" name="productos[<?php echo $producto->id_producto; ?>]" class="form-control" min="0" max="<?php echo $producto->producto_cantidad; ?>" value="0">
                                                    </div>
                                                <?php endforeach; ?>

                                                <button type="submit" class="btn btn-primary">Guardar Cotización</button>
                                            </form>
                                        </div>
                                </div>
                                <br>
                                <!-- /.panel-body -->
                                     <!-- Tabla de productos -->
                                        <div class="card">
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Código</th>
                                                            <th>Descripción</th>
                                                            <th>Existencia</th>
                                                            <th>Cantidad</th>
                                                            <th>Precio</th>
                                                            <th>Precio Total</th>
                                                            <th>Acción</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Camara Wifi FULL HD - EZVIZ - C3TN</td>
                                                            <td>2</td>
                                                            <td><input type="number" value="1" class="form-control"></td>
                                                            <td>120.00</td>
                                                            <td>120.00</td>
                                                            <td><button class="btn btn-success">Agregar</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Camara Wifi FULL HD - EZVIZ - C3TN</td>
                                                            <td colspan="4"></td>
                                                            <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <!-- Totales -->
                                                <div class="text-right">
                                                    <p><strong>SUBTOTAL:</strong> 120.00</p>
                                                    <p><strong>IGV (18%):</strong> 21.60</p>
                                                    <p><strong>TOTAL:</strong> 141.60</p>
                                                </div>
                                            </div>
                                        </div>
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