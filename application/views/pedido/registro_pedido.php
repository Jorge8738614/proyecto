 <!-- Registration Section -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <h5 class="text-center mb-4">REGISTRAR EN EL SISTEMA</h5>
                <form method="POST" action="<?php echo base_url();?>Ccliente/agregarbd" autocomplete="off">
                    <input type="text" name="codigo_car" value="<?php echo $codigo_car = "PS_".$ultimo_pedido[0]->id_pedido; ?>" >
                    <div class="form-group">
                         <label for="productos" class="sr-only">Productos:</label>
                        <select name="productos" class="form-control form-control-sm">
                            <?php foreach ($clientes as $cliente) { ?>
                                <option value="<?php echo $cliente->id_cliente; ?>"><?php echo $cliente->nombre; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <label for="prioridad" class="sr-only">Prioridad:</label>
                    <select name="prioridad" class="form-control form-control-sm" required>
                        <option value="Alta">Alta</option>
                        <option value="Media">Media</option>
                        <option value="Baja">Baja</option>
                    </select>
                    </div>
                    <div class="form-group">
                            <label for="productos" class="sr-only">Productos:</label>
                            <select name="productos" class="form-control form-control-sm">
                                <?php foreach ($productos as $producto) { ?>
                                    <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->producto_nombre; <label for="cantidades" class="sr-only">Cantidades:</label> echo " cantidad "; echo $producto->producto_cantidad; ?></option>
                                <?php } ?>
                            </select>
                    </div>
                    <div>
                        <input type="number" name="cantidades[]" class="form-control form-control-sm" placeholder=" Cantidad " required>
                    </div>
                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-md">Registrar</button>
                        <a href="<?php echo base_url(); ?>Ccliente/vista_clientes" class="btn btn-danger">Cancelar</a>   
                    </div>
            </form>

            </div>
        </div>
    </div>