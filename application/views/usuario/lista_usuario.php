<!-- Tabla de usuarios -->
<div class="container mt-4">
    <h5 style="margin-bottom: 1px;">Sistema / Usuario / Lista de Usuarios </h5>

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
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/vista_usuarios_deshabilitados"> Deshabilitados </a>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/agregar" class="text-center">Registrar</a>
            </td>
        </tr>
    </table>
  <style>
      .table tr td {padding: 2px;  }
      .table tr th {padding: 2px; background: orange; color:white; }
  </style>
     <table class="table table-striped table-bordered table-hover" style="margin:0px; font-size: 11px;">
        <thead>  
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
        $contador = 1;
            
        foreach ($usuarios as $row) 
        {  
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
                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/modificar">
				    <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
				    <button type="submit" class="btn btn-success btn-xs">Modificar</button>
				    </form>
				    
				</td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/eliminarbd">
                    <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
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
    
    <div class="pagination">
        <table class="table table-bordered" >
            <tr>
                <td> <a href="<?php echo base_url(); ?>/Cusuario/page_ant?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> <span></span> < anterior </a> 
                </td>
                <td style="width: 50px; text-align: center;"> <?php echo $caminante; ?> <center>  <input type="hidden" value="1" name="caminante"> </center> 
                 </td>
                <td> 
                    <a href="<?php echo base_url(); ?>/Cusuario/page_sig?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> <span></span> siguiente > </a> 
                </td>
            </tr>
        </table>
    </div>

</div>

