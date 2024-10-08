 <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Pedido Rapido</h1>
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
                                                <td style="width: 75%;">
                                                    <form method="GET" action="<?php echo base_url(); ?>">
                                                        <input name="txt_buscar" type="text" placeholder="Buscar Pedido" class="form-control "  >   
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary btn-sm" > Buscar </button>
                                                 </form>
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cpedido/formulario_pedidos" class="text-center">Nuevo Pedido</a>

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
                                                    <tr>
                                                    <th> # </th>
                                                    <th> producto </th>
                                                    <th> cantidad </th>
                                                    <th> costo </th>
                                                    <th> subtotal </th>
                                                    <th> Cancelar Pedido</th>
                                                </tr> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
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


 