<div class="container mt-4">
    <h5 style="margin-bottom: 1px;">Sistema / Pedido / Lista de Pedidos</h5>

    <!-- Formulario para agregar un nuevo pedido -->
    <form method="POST" action="<?php echo base_url(); ?>Cpedido/agregar_pedido">
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" class="form-control" required>
                <option value="Pendiente">Pendiente</option>
                <option value="Completado">Completado</option>
                <option value="Cancelado">Cancelado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="prioridad">Prioridad:</label>
            <select name="prioridad" class="form-control" required>
                <option value="Alta">Alta</option>
                <option value="Media">Media</option>
                <option value="Baja">Baja</option>
            </select>
        </div>

        <div class="form-group">
            <label for="productos">Productos:</label>
            <select name="productos" class="form-control" >
                <?php foreach ($productos as $producto) { ?>
                    <option value="<?php echo $producto->id_producto; ?>"><?php echo $producto->producto_nombre; ?></option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label for="cantidades">Cantidades:</label>
            <input type="number" name="cantidades[]" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Pedido</button>
    </form>

    <!-- Tabla para mostrar los pedidos existentes -->
    <table class="table table-striped table-bordered table-hover mt-4">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Fecha de Creación</th>
                <th>Estado</th>
                <th>Prioridad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contador = 1;
            foreach ($pedidos as $pedido) {  
            ?>
            <tr>
                <td><?php echo $contador++; ?></td>
                <td><?php echo $pedido->fecha_creacion; ?></td>
                <td><?php echo $pedido->estado; ?></td>
                <td><?php echo $pedido->prioridad; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
