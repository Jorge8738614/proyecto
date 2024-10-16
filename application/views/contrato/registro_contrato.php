 <!-- Page Content -->
             <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Contratos</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Contratos
                                </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="panel panel-default">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <form method="POST" action="<?php echo base_url();?>" autocomplete="off">
                                                                                 <div class="form-group">
                                                                                    <h5>Nombre del cliente: </h5>
                                                                                    <input type="text" name="nombre" class="form-control form-control-sm" placeholder=" ingrese nombre ">
                                                                                </div>
                                                                                <div>
                                                                                    <h5>Mensualidad a pagar:</h5>
                                                                                    <input type="number" name="cantidad" class="form-control form-control-sm" placeholder=" Cantidad " required min="0">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <h5>Direccion del cliente: </h5>
                                                                                    <input type="text" name="direccion" class="form-control form-control-sm" placeholder=" ingrese direccion ">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <h5>Celular del cliente: </h5>
                                                                                    <input type="text" name="celular" class="form-control form-control-sm" placeholder=" ingrese celular ">
                                                                                </div>
                                                                                <br>
                                                                                <div>
                                                                                    <button type="submit" class="btn btn-primary btn-md"> Agregar </button>
                                                                                    <a href="<?php echo base_url(); ?>Cpedido/registrar_carrito_pedidos" class="btn btn-danger"> Cancelar </a>   
                                                                                </div>
                                                                        </form>

                                                                        <div class="form-group">
                                                                                         <h5>Lista de producto a entregar: </h5>
                                                                                         <table class="table table-striped table-bordered table-hover" style="margin:0px; font-size: 11px;">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>No.</th>
                                                                                                    <th>Nombre del producto</th>
                                                                                                    <th>cantidad</th>
                                                                                                    <th>precio</th>
                                                                                                    <th>modificar</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                </div>
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
                        
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->