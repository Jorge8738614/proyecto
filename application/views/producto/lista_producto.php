<!-- Tabla de usuarios -->
<div class="container mt-4">
    <h1 class="mb-4">Lista de productos</h1>

    <!-- Botones opcionales para ver deshabilitados y agregar usuario -->
    <div class="mb-4">
        <a href="<?php echo base_url(); ?>index.php/usuario/deshabilitados"> </a>
        <br>
        <a href="http://localhost/proyecto/Cproducto/agregar" class="text-center">Registrar producto</a>
    </div>

      <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Código</th>
            <th>Unidad de Medida</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?php echo $producto->producto_nombre; ?></td>
                <td><?php echo $producto->producto_descripcion; ?></td>
                <td><?php echo $producto->producto_precio; ?></td>
                <td><?php echo $producto->producto_cantidad; ?></td>
                <td><?php echo $producto->producto_codigo; ?></td>
                <td><?php echo $producto->producto_unidad_medida; ?></td>
                <td><?php echo $producto->categoria_id; ?></td>
                <td>
                <form method="GET" action="<?php echo base_url(); ?> Cproducto/modificar_producto">
                    <input type="text" name="id" value="<?php echo $producto->id_producto; ?>" style="display: none;">
                    <button type="submit" class="btn btn-success">Modificar</button>
                </form>
                </td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Cproducto/eliminarbd" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $producto->id_producto; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

        </tbody>
    </table>
</div>

