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
                                            <label for="direccion">Foto referencial</label>
                                            <input type="file">
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
                                        <div class="form-group col-md-6">
                                            <label for="celular">Productos solicitados: </label>
                                            <input type="text" class="form-control" id="producto_solicitados" placeholder="* Escriba su número de celular" name="celular" required>
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