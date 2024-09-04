<!-- Tabla de clientes -->
<div class="container mt-4">
    <h5 style="margin-bottom: 1px;">Sistema / Cliente / Lista de Clientes</h5>

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
            <td>
                <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Ccliente/agregar" class="text-center">Registrar</a>
            </td>
        </tr>
    </table>

    <table class="table table-striped table-bordered table-hover">
        <thead class="thead-dark">
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
            $contador = $this->uri->segment(3) ? $this->uri->segment(3) : 1;
            foreach ($clientes as $row) {
            ?>
            <tr>
                <td><?php echo $contador; ?></td>
                <td><?php echo $row->nombre; ?></td>
                <td><?php echo $row->direccion; ?></td>
                <td><?php echo $row->telefono; ?></td>
                <td>
                    <a class="btn btn-warning btn-sm" href="<?php echo base_url(); ?>Ccliente/modificar?id=<?php echo $row->id_cliente; ?>">Modificar</a>
                </td>
                <td>
                    <a class="btn btn-danger btn-sm" href="<?php echo base_url(); ?>Ccliente/eliminarbd?id=<?php echo $row->id_cliente; ?>" onclick="return confirm('¿Está seguro de eliminar este cliente?')">Eliminar</a>
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
