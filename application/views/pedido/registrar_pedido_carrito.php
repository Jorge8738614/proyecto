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
                                                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/buscar">
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
                                                    <th> </th>
                                                </tr> 
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                               <?php
                                                 $i=0;
                                                 $total_venta = 0;
                                                 foreach( $carrito as $car )
                                                 {  $i++;
                                                    $codigo_car = $car->codigo_car;
                                                    $cliente = $car->nombre;
                                                    $id_cliente = $car->id_cliente;
                                                    $prioridad = $car->prioridad;
                                                    $producto_nombre = $car->producto_nombre;
                                                    $cantidad_car = $car->cantidad_car;
                                                    $costo_car = $car->costo_car;
                                                ?>
                                                <tr>
                                                    <td> <?php echo $i; ?> </td>
                                                    <td> <?php echo $cliente; ?> </td>
                                                    <td> <?php echo $producto_nombre; ?> </td>
                                                    <td> <?php echo $cantidad_car; ?> </td>
                                                    <td> <?php echo $costo_car; ?> </td>
                                                    <td> <?php echo ($cantidad_car*$costo_car); ?> </td>
                                                    <td>
                                                         <form method="POST" action="<?php echo base_url(); ?>Cpedido/eliminar_carrito_bd">
                                                             <input type="hidden" name="id_carrito" value="<?php echo $car->id_carrito; ?>">
                                                             <button type="submit" class="btn btn-danger btn-xs">Cancelar</button>
                                                         </form>

                                                    </td>
                                                </tr>
                                

                                                <?php 
                                                   $total_venta = $total_venta +($cantidad_car*$costo_car);                
                                                  }
                                                ?>
                    
                                            </tbody>
                                        </table>
                                    </div>
                                                <form method="POST" action="<?php echo base_url() ;?>Cpedido/registrar_carrito_venta" >
            
                                                <table class="table table-bordered table-condensed"> 
                                                    <tr>
                                                        <th> total </th>
                                                        <th> pago </th>
                                                        <th> cambio </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" class="form-control" name="total" value="<?php echo $total_venta; ?>"> 
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="pago" placeholder="0.00" autocomplete="off"> 
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control" name="cambio" placeholder="0.00" value=""> 
                                                        </td>
                                                    </tr>
                                                    
                                                </table>

                                                <center>
                                                        <input type="text" name="id_cliente" value="<?php echo $id_cliente; ?>" >
                                                        <input type="text" name="codigo_car1" value="<?php echo $codigo_car; ?>" >

                                                        <button type="submit" class="btn btn-info btn-md"> Finalizar Pedido </button>

                                                        <button type="submit" class="btn btn-info btn-md"> Cancelar </button>
                                                        
                                                </center>
                                                </form>
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

