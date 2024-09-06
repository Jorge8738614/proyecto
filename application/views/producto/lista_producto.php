<div class="container mt-4">
    <h5 style="margin-bottom: 1px;">Sistema / Producto / Lista de Productos</h5>

    <table class="table">
        <tr>
            <td style="width: 70%;">
                <form method="GET" action="<?php echo base_url(); ?>Cproducto/buscar">
                    <input name="txt_buscar" type="text" placeholder="Buscar Productos" class="form-control" >   
            </td>
            <td>
                <button type="submit" class="btn btn-primary btn-sm" >Buscar</button>
             </form>
            </td>

            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cproducto/vista_productos_deshabilitados">Deshabilitados</a>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cproducto/agregar" class="text-center">Registrar</a>
            </td>
        </tr>
    </table>

    <style>
        .table tr td {padding: 2px; }
        .table tr th {padding: 2px; background: orange; color:white; }
    </style>

    <table class="table table-striped table-bordered table-hover" style="margin:0px; font-size: 11px;">
        <thead>  
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Código</th>
                <th>Unidad de Medida</th>
                <th>Categoría</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $contador = 1;
        foreach ($productos as $producto) 
        {  
        ?>
            <tr>
                <td><?php echo $contador; ?></td>
                <td><?php echo $producto->producto_nombre; ?></td>
                <td><?php echo $producto->producto_descripcion; ?></td>
                <td><?php echo $producto->producto_precio; ?></td>
                <td><?php echo $producto->producto_cantidad; ?></td>
                <td><?php echo $producto->producto_codigo; ?></td>
                <td><?php echo $producto->producto_unidad_medida; ?></td>
                <td><?php echo $producto->categoria_id; ?></td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Cproducto/modificar_producto">
                        <input type="hidden" name="id" value="<?php echo $producto->id_producto; ?>">
                        <button type="submit" class="btn btn-success btn-xs">Modificar</button>
                    </form>
                </td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Cproducto/eliminarbd">
                        <input type="hidden" name="id" value="<?php echo $producto->id_producto; ?>">
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
        <table class="table table-bordered">
            <tr>
                <td><a href="<?php echo base_url(); ?>Cproducto/page_ant?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> < anterior</a></td>
                <td style="width: 50px; text-align: center;"><?php echo $caminante; ?> <input type="hidden" value="1" name="caminante"></td>
                <td><a href="<?php echo base_url(); ?>Cproducto/page_sig?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>">siguiente ></a></td>
            </tr>
        </table>
    </div>

</div>
