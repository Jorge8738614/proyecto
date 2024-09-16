<!-- Sección principal -->
<div class="container mt-4">
    <!-- Título y Formulario de búsqueda -->
    <div class="row mb-3">
        <div class="col-md-8">
            <h4><i class="fas fa-file-alt"></i> Lista de Ventas</h4>

        </div>
        <div class="col-md-4">
            <div class="form-inline float-right">
                <input type="text" class="form-control mr-2" placeholder="Nro. Venta">
                <button class="btn btn-info"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>

    <!-- Filtros de búsqueda por fecha -->
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="form-inline">
                <label for="startDate" class="mr-2">De:</label>
                <input type="text" id="startDate" class="form-control mr-2" placeholder="dd/mm/aaaa">
                <label for="endDate" class="mr-2">A:</label>
                <input type="text" id="endDate" class="form-control mr-2" placeholder="dd/mm/aaaa">
                <button class="btn btn-info"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div>

    <!-- Tabla de ventas -->
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nro. Venta</th>
                        <th>Fecha de Venta</th>
                        <th>Cliente</th>
                        <th>Total</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    $aux=0;
                    foreach ($ventas as $vnt) {
                        $i++;
                        $aux++;
                        ?>
                        <tr>
                            <td><?php echo $vnt->id_venta;; ?></td>
                            <td><?php echo $vnt->fecha_venta; ?></td>
                            <td><?php echo $vnt->id_cliente; // Aquí puedes mostrar el nombre del cliente si lo tienes ?></td>
                            <td><?php echo $vnt->total; ?></td>
                            <td>
                                <form method="GET" action="<?php echo base_url(); ?>Cventa/ver_venta">
                                <input type="text" name="id" value="<?php echo $vnt->id_venta; ?>" style="display: none;">
                               <button class="btn btn-info"><i class="fas fa-eye"></i> Ver</button>
                                </form>
                                
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php //echo "la suma es igual a : ";echo $aux; ?>

            <!-- Paginación -->
    <div class="pagination">
    <table class="table table-bordered">
        <tr>
                <td> <a href="<?php echo base_url(); ?>Cventa/page_ant?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> <span></span> < anterior </a> 
                </td>
                <td style="width: 50px; text-align: center;"> <?php echo $caminante; ?> <center>  <input type="hidden" value="1" name="caminante"> </center> 
                 </td>
                <td> 
                    <a href="<?php echo base_url(); ?>Cventa/page_sig?sig=<?php echo $caminante; ?>&cam=<?php echo $caminante; ?>"> <span></span> siguiente > </a> 
                </td>
        </tr>
    </table>
</div>

        </div>
    </div>
</div>
