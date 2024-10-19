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
                                                </td>
                                                   </form>
                                                <td> 
                                                <!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                                            Nuevo pedido
                                                  </button>
                                                  <!-- Modal -->
                                                  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-="true">
                                                      <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                              <div class="modal-header">
                                                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                                        <h4 class="modal-title" id="myModalLabel">Nuevo pedido</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            REGISTRAR PEDIDO
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                    <form method="POST" action="<?php echo base_url();?>Cpedido/registrar_carrito" autocomplete="off">
                                                    <input type="hidden" name="codigo_car" value="<?php echo $codigo_car = "PS_".$ultimo_pedido[0]->id_venta; ?>" >
                                                    <div class="form-group">
                                                         <label  class="sr-only">Nombre de cliente: </label>
                                                          <input type="nombre_cliente" name="cantidad" class="form-control form-control-sm" placeholder=" Nombre del cliente " required min="0">
                                                    </div>
                                                    <div class="form-group">
                                                         <label for="productos" class="sr-only">Direccion: </label>
                                                          <input type="text" name="direccion" class="form-control form-control-sm" placeholder=" Direccion " required min="0">
                                                    </div>
                                                    <!-- implemetar el plugin autocompletado-->
                                                    <div class="form-group">
                                                         <label for="productos" class="sr-only">lugar de entrega: </label>
                                                          <input type="text" name="lugar_entrega" class="form-control form-control-sm" placeholder=" Lugar de entrega " required min="0">
                                                    </div>
                                                    <div class="form-group">
                                                    <label for="prioridad" class="sr-only">Prioridad de entrega :</label>
                                                    <select name="prioridad" class="form-control form-control-sm" required>
                                                        <option value="1">  Alta   </option>
                                                        <option value="2">  Media  </option>
                                                        <option value="3">  Baja   </option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                            <label for="productos" class="sr-only">Productos:</label>
                                                            <select name="producto" class="form-control form-control-sm">
                                                                <?php foreach ($productos as $producto) { ?>
                                                                    <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->producto_nombre; ?> <label for="cantidades" class="sr-only">Cantidades:</label> <?php echo " cantidad "; echo $producto->producto_cantidad; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                    </div>
                                                    <div>
                                                        <input type="number" name="cantidad" class="form-control form-control-sm" placeholder=" Cantidad " required min="0">
                                                    </div>
                                                    <br>
                                                    <div>
                                                        <button type="submit" class="btn btn-primary btn-md"> Agregar </button>
                                                        <a href="<?php echo base_url(); ?>Cpedido/registrar_carrito_pedidos" class="btn btn-danger"> Cancelar </a>   
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
                                                                        <button type="button" class="btn btn-primary">Save changes</button>
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


 