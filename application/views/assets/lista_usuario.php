<!-- Tabla de usuarios -->
<div class="container mt-4">
    <h1 class="mb-4">Lista de Usuarios</h1>

    <!-- Botones opcionales para ver deshabilitados y agregar usuario -->
    <div class="mb-4">
        <a href="<?php echo base_url(); ?>index.php/usuario/deshabilitados">Usuario deshabilitados</a>
        <br>
        <a href="http://localhost/proyecto/Clogin/agregar" class="text-center">Registrar Usuario</a>
    </div>

    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>No.</th>
                <th>Nombre Completo</th>
                <th>Apellido</th>
                <th>Alias</th>
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
            foreach ($usuarios->result() as $row) {  
            ?>
            <tr>
                <td><?php echo $contador; ?></td>
                <td><?php echo $row->nombre_completo; ?></td>
                <td><?php echo $row->apellido; ?></td>
                <td><?php echo $row->alias; ?></td>
                <td><?php echo $row->id_rol; ?></td>
                <td><?php echo formatearFecha($row->fecha_creacion); ?></td>
                <!-- Opcional: acciones para modificar, eliminar y deshabilitar -->
                
                <td>
                	<!--
				    <?php echo form_open_multipart("Clogin/modificar"); ?>
				    <input type="hidden" name="id_usuario" value="<?php echo $row->id_usuario; ?>">
				    <button type="submit" class="btn btn-success">Modificar</button>
				    <?php echo form_close(); ?>
				-->

				    <?php echo form_open('Clogin/modificar'); ?>
				    <input type="hidden" name="id_usuario" value="<?php echo $row->id_usuario; ?>">
				    <button type="submit" class="btn btn-success">Modificar</button>
				    <?php echo form_close(); ?>
				    

				</td>

               
                <td>
                    <?php echo form_open_multipart("usuario/eliminarbd"); ?>
                    <input type="hidden" name="idusuario" value="<?php echo $row->id_usuario; ?>">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <?php echo form_close(); ?>
                </td>
                 <!--
                <td>
                    <?php echo form_open_multipart("usuario/deshabilitarbd"); ?>
                    <input type="hidden" name="idusuario" value="<?php echo $row->idUsuario; ?>">
                    <button type="submit" class="btn btn-warning">Deshabilitar</button>
                    <?php echo form_close(); ?>
                </td>
                -->
            </tr>
            <?php
            $contador++;
            }
            ?>
        </tbody>
    </table>
</div>

