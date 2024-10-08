            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Registro de Cliente</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    REGISTRAR EN EL SISTEMA
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
                                            <label for="direccion">Dirección</label>
                                            <input type="text" class="form-control" id="direccion" placeholder="* Escriba su dirección" name="direccion" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="celular">Celular</label>
                                            <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número de celular" name="celular" required>
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
            <!-- /#page-wrapper -->