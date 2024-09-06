<!-- Vista combinada: Registro a la izquierda, Lista a la derecha -->
<div class="container mt-4">
    

    <div class="row">
        <!-- Columna Izquierda: Formulario de Registro -->
        <div class="col-md-4">
            <h5 class="text-center mb-4">REGISTRAR EN EL SISTEMA</h5>
            <form method="POST" action="<?php echo base_url();?>Ccliente/agregarbd" autocomplete="off">
                <div class="form-group">
                    <label for="nombre">Nombre(s)</label>
                    <input type="text" class="form-control" id="nombre" placeholder="* Escriba su nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control" id="direccion" placeholder="* Escriba su dirección" name="direccion" required>
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número de celular" name="celular" required>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-md">Registrar</button>
                    <a href="<?php echo base_url(); ?>Ccliente/vista_clientes" class="btn btn-danger">Cancelar</a>   
                </div>
            </form>
        </div>

        <!-- Columna Derecha: Lista de Clientes -->
        <div class="col-md-8">
            <!-- Sección de Búsqueda y Opciones -->
            <h5 style="margin-bottom: 1px;">Sistema / Cliente / Lista de Clientes </h5>

    <table class="table">
        <tr>
            <td style="width: 70%;">
                <form method="GET" action="<?php echo base_url(); ?>Ccliente/buscar">
                    <input name="txt_buscar" type="text" placeholder="Buscar Clientes" class="form-control">
            </td>
            <td>
                <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
                </form>
            </td>
            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Ccliente/vista_clientes_deshabilitados">Deshabilitados</a>
            </td>
    
        </tr>
    </table>

    <style>
        .table tr td { padding: 2px; }
        .table tr th { padding: 2px; background: orange; color: white; }
    </style>

    <table class="table table-striped table-bordered table-hover" style="margin: 0px; font-size: 11px;">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Modificar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $contador = 1;
            foreach ($clientes as $row) {
            ?>
            <tr>
                <td><?php echo $contador; ?></td>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->direccion; ?></td>
                <td><?php echo $row->celular; ?></td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Ccliente/modificar">
                        <input type="text" name="id" value="<?php echo $row->id_cliente; ?>" style="display: none;">
                        <button type="submit" class="btn btn-success btn-xs">Modificar</button>
                    </form>
                </td>
                <td>
                    <form method="GET" action="<?php echo base_url(); ?>Ccliente/eliminarbd">
                        <input type="text" name="id" value="<?php echo $row->id_cliente; ?>" style="display: none;">
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
            <!-- Paginación -->
            <div class="pagination">
                <?php echo $pagination_links; ?>
            </div>
        </div>
    </div>
</div>
