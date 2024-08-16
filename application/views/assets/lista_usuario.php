<h1>Lista de Usuarios</h1>

<br><br>

<a href="<?php echo base_url(); ?>index.php/usuario/deshabilitados">
    <button type="button" class="btn btn-warning">VER DESHABILITADOS</button>
</a>

<br><br>

<a href="<?php echo base_url(); ?>index.php/usuario/agregar">
    <button type="button" class="btn btn-primary">Agregar Usuario</button>
</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nombre</th>
            <th>Alias</th>
            <th>Email</th>
            <th>Rol</th>
            <th>Fecha Creación</th>
            <th>Modificar</th>
            <th>Eliminar</th>
            <th>Deshabilitar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $contador = 1;
        foreach ($usuarios->result() as $row) {  // Usar $usuarios porque así se pasó en el controlador
        ?>
        <tr>
            <td><?php echo $contador; ?></td>
            <td><?php echo $row->nombre; ?></td>
            <td><?php echo $row->alias; ?></td>
            <td><?php echo $row->email; ?></td>
            <td><?php echo $row->rol; ?></td> <!-- Ajusta esto según tu estructura de base de datos -->
            <td><?php echo formatearFecha($row->fecha_creacion); ?></td>
            <td>
                <?php echo form_open_multipart("usuario/modificar"); ?>
                <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                <button type="submit" class="btn btn-success">Modificar</button>
                <?php echo form_close(); ?>
            </td>
            <td>
                <?php echo form_open_multipart("usuario/eliminarbd"); ?>
                <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <?php echo form_close(); ?>
            </td>
            <td>
                <?php echo form_open_multipart("usuario/deshabilitarbd"); ?>
                <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                <button type="submit" class="btn btn-warning">Deshabilitar</button>
                <?php echo form_close(); ?>
            </td>
        </tr>
        <?php
        $contador++;
        }
        ?>
    </tbody>
</table>
