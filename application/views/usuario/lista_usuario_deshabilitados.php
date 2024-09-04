<!-- Tabla de usuarios -->
<div class="container mt-4">
    <h5 style="margin-bottom: 1px;">Sistema / Usuario / Lista de Usuarios Deshabilitados</h5>

    <table class="table">
        <tr>
            <td style="width: 70%;">
                <form method="GET" action="<?php echo base_url(); ?>Cusuario/buscar">
                    <input name="txt_buscar" type="text" placeholder="Buscar Usuarios" class="form-control" >   
            </td>
            <td>
                <button type="submit" class="btn btn-primary btn-sm" > Buscar </button>
             </form>
            </td>

            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/vista_usuarios"> habilitados </a>
            </td>
        </tr>
    </table>

     <table class="table table-striped table-bordered table-hover">
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
            </tr>
        </thead>
        <tbody>
            <?php
            //$contador = 1;
             $contador = $this->uri->segment(3) ? $this->uri->segment(3) : 1; // Ajusta el contador en función de la paginación
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
                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/habilitarbd">
                    <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
                    <button type="submit" class="btn btn-success">Habilitar</button>
                    </form>   
				</td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/eliminarbd">
                    <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
            <?php
            $contador++;
            }
            ?>
        </tbody>
    </table>
    <div class="pagination">
        <?php echo $this->pagination->create_links(); ?>
    </div>
</div>

