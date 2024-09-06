<div class="container mt-4">
    <h5 style="margin-bottom: 1px;">Sistema / Pedido / Lista de Pedidos</h5>
    <!-- Formulario para agregar un nuevo pedido -->

    <table class="table">
        <tr>
            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cproducto/vista_productos_deshabilitados">Deshabilitados</a>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cpedido/agregar" class="text-center">Agregar pedido</a>
            </td>
        </tr>
    </table><h5></h5>
    <form method="POST" action="<?php echo base_url(); ?>Cpedido/agregar_pedido" class="form-inline" style="margin-top: 10px;">

    <div class="form-group mb-2 ml-2">
        <label for="productos" class="sr-only">Productos:</label>
        <select name="productos" class="form-control form-control-sm">
            <?php foreach ($clientes as $cliente) { ?>
                <option value="<?php echo $cliente->id_cliente; ?>"><?php echo $cliente->nombre; ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group mb-2">
        <label for="estado" class="sr-only">Estado:</label>
        <select name="estado" class="form-control form-control-sm" required>
            <option value="Pendiente">Pendiente</option>
            <option value="Completado">Completado</option>
            <option value="Cancelado">Cancelado</option>
        </select>
    </div>

    <div class="form-group mb-2 ml-2">
        <label for="prioridad" class="sr-only">Prioridad:</label>
        <select name="prioridad" class="form-control form-control-sm" required>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
        </select>
    </div>

    <div class="form-group mb-2 ml-2">
        <label for="productos" class="sr-only">Productos:</label>
        <select name="productos" class="form-control form-control-sm">
            <?php foreach ($productos as $producto) { ?>
                <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->producto_nombre; echo " cantidad "; echo $producto->producto_cantidad; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form-group mb-2 ml-2">
        <label for="cantidades" class="sr-only">Cantidades:</label>
        <input type="number" name="cantidades[]" class="form-control form-control-sm" placeholder=" Cantidad " required>
    </div>

    <button type="submit" class="btn btn-primary btn-sm mb-2 ml-2">Registrar Pedido</button>
</form>

<style>
    .form-inline .form-group {
        margin-right: 10px;
    }
    .form-control-sm {
        width: auto;
    }
</style>

        <br>
    <!-- Tabla para mostrar los pedidos existentes -->
     <table class="table table-striped table-bordered table-hover" style="margin:0px; font-size: 11px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Fecha de Creación</th>
                <th>Estado</th>
                <th>Prioridad</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contador = 1;
            foreach ($pedidos as $pedido) {  
            ?>
            <tr>
                <td><?php echo $contador; ?></td>
                <td><?php echo $pedido->fecha_creacion; ?></td>
                <td><?php echo $pedido->estado; ?></td>
                <td><?php echo $pedido->prioridad; ?></td>

                <!-- Botones para modificar y eliminar pedidos -->
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Cpedido/modificar">
                        <input type="hidden" name="id" value="<?php echo $pedido->id_pedido; ?>">
                        <button type="submit" class="btn btn-success btn-xs">Modificar</button>
                    </form>
                </td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Cpedido/eliminarbd">
                        <input type="hidden" name="id" value="<?php echo $pedido->id_pedido; ?>">
                        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                    </form>
                </td>
            </tr>
            <?php
            $contador++;
            }
            ?>
        </tbody>
    </table>
</div>
