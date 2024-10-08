            <div class="col-lg-5 col-md-5 col-sm-12">

                <h4 class="text mb-4"> REGISTRAR DE PEDIDO </h4>
                <form method="POST" action="<?php echo base_url();?>Cpedido/registrar_carrito" autocomplete="off">
                    <input type="hidden" name="codigo_car" value="<?php echo $codigo_car = "PS_".$ultimo_pedido[0]->id_venta; ?>" >
                    <div class="form-group">
                         <label for="productos" class="sr-only">Productos:</label>
                        <select name="cliente" class="form-control form-control-sm">
                            <?php foreach ($clientes as $cliente) { ?>
                                <option value="<?php echo $cliente->id_cliente; ?>" > <?php echo $cliente->nombre; ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="prioridad" class="sr-only">Prioridad:</label>
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
                        <a href="<?php echo base_url(); ?>Ccliente/vista_clientes" class="btn btn-danger"> Cancelar </a>   
                    </div>
            </form>

         <!-- FINAL DIV -->
          </div>




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
                                 <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                             </form>

                        </td>
                    </tr>
    

                    <?php 
                       $total_venta = $total_venta +($cantidad_car*$costo_car);                
                      }
                    ?>
                    
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