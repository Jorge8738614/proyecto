 <            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Pedidos</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
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
                                                         <label for="productos" class="sr-only">Nombre de cliente: </label>
                                                          <input type="nombre_cliente" name="cantidad" class="form-control form-control-sm" placeholder=" Cantidad " required min="0">
                                                    </div>
                                                    <div class="form-group">
                                                         <label for="productos" class="sr-only">Direccion: </label>
                                                          <input type="direccion" name="cantidad" class="form-control form-control-sm" placeholder=" Cantidad " required min="0">
                                                    </div>
                                                    <!-- implemetar el plugin autocompletado-->
                                                    <div class="form-group">
                                                         <label for="productos" class="sr-only">lugar de entrega: </label>
                                                          <input type="lugar_entrega" name="cantidad" class="form-control form-control-sm" placeholder=" Cantidad " required min="0">
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
            <!-- /#page-wrapper -->