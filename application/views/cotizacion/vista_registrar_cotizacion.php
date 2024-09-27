     <!-- Registration Section -->
            <div class="row" style="padding-top:20px;">
                
                <div class="col-lg-5 col-md-5 col-sm-12">

                    <h4 class="text mb-4"> NUEVA COTIZACION </h4>
                    <a href="http://localhost/proyecto/Ccotizacion/impresion"> <span class="" ></span> impresion </a>
                   
                    <form method="POST" action="<?php echo base_url();?>Ccotizacion/registrar_carrito_cotizacion">

                        <input type="text" name="codigo_car" value="<?php  echo $codigo_car; ?>" >
                        <div class="form-group">
                            <label for="nombre" class="sr-only">Nombre:</label>
                            <input type="text" name="nombre" class="form-control form-control-sm" placeholder=" Nombre del cliente ">
                        </div>
                        <div class="form-group">
                             <label for="productos" class="sr-only">Detallle de Cotizacion:</label>
                        </div>
                        <div class="form-group">
                        <label for="prioridad" class="sr-only">Tipo de Cliente</label>
                        <select name="prioridad" class="form-control form-control-sm" required>
                            <option value="1">  Empresa privada  </option>
                            <option value="2">  Institucion Publica  </option>
                            <option value="3">  Gimnacion </option>
                            <option value="4">  Domicilio </option>
                        </select>
                        </div>
                        <div class="form-group">
                                <label for="productos" class="sr-only">Productos:</label>
                                <select name="producto" class="form-control form-control-sm">
                                    <?php foreach ($productos as $producto) { ?>
                                        <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->producto_nombre; ?> <label for="cantidades" class="sr-only"> Cantidades: </label> <?php echo " cantidad "; echo $producto->producto_cantidad; ?> </option>
                                    <?php } ?>
                                </select>
                        </div>
                        <div>
                            <input type="number" name="cantidad" class="form-control form-control-sm" placeholder=" Cantidad " required min="0">
                        </div>
                        <br>
                        <div>
                            <button type="submit" class="btn btn-primary btn-md"> Agregar </button>
                            <a href="<?php echo base_url(); ?>Ccotizacion/registrar_carrito_cotizacion" class="btn btn-danger"> Cancelar </a>   
                        </div>
                </form>

             <!-- FINAL DIV -->
              </div>

              <div class="col-lg-7 col-md-7 col-sm-12">

                <h4> DETALLE DE COTIZACION </h4>

                <div class="table-responsive" style="overflow: auto; height: 350px;">
                    
                    <table class="table table-bordered table-condensed">
                       
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



     