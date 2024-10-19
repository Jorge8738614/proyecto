<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Pedido Rápido</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <table class="table">
                            <tr>
                                <td style="width: 75%;">
                                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/buscar">
                                        <input name="txt_buscar" type="text" placeholder="Buscar Pedido" class="form-control">
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                                    </form>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                                        Nuevo pedido
                                    </button>

                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                                    <form method="POST" action="<?php echo base_url();?>Cpedido/registrar_carrito" autocomplete="off">
                                                                        <input type="hidden" name="codigo_car" value="<?php echo "PS_".$ultimo_pedido[0]->id_venta; ?>">
                                                                        <div class="form-group">
                                                                            <label class="sr-only">Nombre de cliente:</label>
                                                                            <input type="text" name="nombre_cliente" class="form-control form-control-sm" placeholder="Nombre del cliente" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="direccion" class="sr-only">Dirección:</label>
                                                                            <input type="text" name="direccion" class="form-control form-control-sm" placeholder="Dirección" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="lugar_entrega" class="sr-only">Lugar de entrega:</label>
                                                                            <input type="text" name="lugar_entrega" class="form-control form-control-sm" placeholder="Lugar de entrega" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="prioridad" class="sr-only">Prioridad de entrega:</label>
                                                                            <select name="prioridad" class="form-control form-control-sm" required>
                                                                                <option value="1">Alta</option>
                                                                                <option value="2">Media</option>
                                                                                <option value="3">Baja</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="productos" class="sr-only">Productos:</label>
                                                                            <select name="producto" class="form-control form-control-sm" required>
                                                                                <?php foreach ($productos as $producto) { ?>
                                                                                    <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->producto_nombre; ?> (Cantidad: <?php echo $producto->producto_cantidad; ?>)</option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                        <div>
                                                                            <input type="number" name="cantidad" class="form-control form-control-sm" placeholder="Cantidad" required min="0">
                                                                        </div>
                                                                        <br>
                                                                        <div>
                                                                            <button type="submit" class="btn btn-primary btn-md">Agregar</button>
                                                                            <a href="<?php echo base_url(); ?>Cpedido/registrar_carrito_pedidos" class="btn btn-danger">Cancelar</a>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($carrito as $item) { ?>
                                        <tr>
                                            <td><?php echo $item->id_carrito; ?></td>
                                            <td><?php echo $item->producto_nombre; ?></td>
                                            <td><?php echo $item->cantidad_car; ?></td>
                                            <td><?php echo $item->costo_car; ?></td>
                                            <td>
                                                <form method="POST" action="<?php echo base_url(); ?>Cpedido/eliminar_carrito_bd">
                                                    <input type="hidden" name="id_carrito" value="<?php echo $item->id_carrito; ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <form method="POST" action="<?php echo base_url(); ?>Cpedido/registrar_carrito_venta">
                            <div class="form-group">
                                <label for="total">Total:</label>
                                <input type="text" name="total" id="total" class="form-control" value="<?php echo $total; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="pago">Pago:</label>
                                <input type="text" name="pago" id="pago" class="form-control" placeholder="Ingrese monto" required>
                            </div>
                            <div class="form-group">
                                <label for="cambio">Cambio:</label>
                                <input type="text" name="cambio" id="cambio" class="form-control" readonly>
                            </div>
                            <input type="hidden" name="codigo_car1" value="<?php echo $codigo_car; ?>">
                            <input type="hidden" name="id_cliente" value="<?php echo $id_cliente; ?>">
                            <button type="submit" class="btn btn-success">Finalizar Pedido</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('pago').addEventListener('input', function() {
        var total = parseFloat(document.getElementById('total').value);
        var pago = parseFloat(this.value);
        document.getElementById('cambio').value = (pago - total).toFixed(2);
    });
</script>
