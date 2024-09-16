 <!-- Registration Section -->
        <div class="row" style="padding-top:20px;">
            
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

          <div class="col-lg-7 col-md-7 col-sm-12">

            <h4> LISTA DE PRODUCTOS A PEDIR </h4>

            <div class="table-responsive" >
                
                <table class="table table-bordered">
                   
                   <tr>
                       <th> # </th>
                       <th> producto </th>
                       <th> cantidad </th>
                       <th> costo </th>
                       <th> subtotal </th>
                       <th> </th>
                   </tr> 
                    
                </table>

            </div>

          </div>

        <!-- FINAL ROW -->    
        </div>



 