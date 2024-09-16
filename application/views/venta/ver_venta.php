<<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Registro Venta</h4>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Código de Venta -->
                        <div class="form-group">
                            <label for="codigo_venta">Código de Venta</label>
                            <input type="text" class="form-control" id="codigo_venta" placeholder="Código de Venta" readonly>
                        </div>
                        
                        <!-- Fecha de Venta -->
                        <div class="form-group">
                            <label for="fecha_venta">Fecha de Venta</label>
                            <input type="date" class="form-control" id="fecha_venta" placeholder="Fecha de Venta" readonly>
                        </div>
                        
                        <!-- Total -->
                        <div class="form-group">
                            <label for="total">Total</label>
                            <input type="text" class="form-control" id="total" placeholder="Total de la Venta" readonly>
                        </div>
                        
                        <!-- Descuento -->
                        <div class="form-group">
                            <label for="descuento">Descuento</label>
                            <input type="text" class="form-control" id="descuento" placeholder="Descuento Aplicado" readonly>
                        </div>

                        <!-- ID Cliente -->
                        <div class="form-group">
                            <label for="id_cliente">ID Cliente</label>
                            <input type="text" class="form-control" id="id_cliente" placeholder="ID del Cliente" readonly>
                        </div>

                        <!-- Nombre del Cliente -->
                        <div class="form-group">
                            <label for="nombre_cliente">Nombre del Cliente</label>
                            <input type="text" class="form-control" id="nombre_cliente" placeholder="Nombre del Cliente" readonly>
                        </div>

                        <!-- Botón para regresar -->
                        <div class="form-group text-center">
                            <a href="<?php echo base_url(); ?>Cventa/vista_venta" class="btn btn-primary">Regresar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>