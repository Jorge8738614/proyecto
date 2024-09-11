
    <div class="container mt-5">
        <!-- Título -->
        <div class="text-center mb-4">
            <h1><i class="bi bi-card-list"></i> Nueva Cotización</h1>
        </div>
        
        <!-- Datos del cliente -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Datos del cliente</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" value="aris ">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ruc">Apellido</label>
                            <input type="text" class="form-control" id="ruc" value="hernandez">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="telefono">Teléfono</label>
                            <input type="number" class="form-control" id="telefono" value="926572912">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" value="Manuel Villaran">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Datos de la venta -->
        <div class="card mb-4">
            <div class="card-header">
                <h5>Datos de la venta</h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="vendedor">Vendedor</label>
                    <input type="text" class="form-control" id="vendedor" value="Jorge" readonly>
                </div>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-danger mr-2">Anular</button>
                    <button class="btn btn-success">Procesar</button>
                </div>
            </div>
        </div>

        <!-- Tabla de productos -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Descripción</th>
                            <th>Existencia</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Precio Total</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Camara Wifi FULL HD - EZVIZ - C3TN</td>
                            <td>2</td>
                            <td><input type="number" value="1" class="form-control"></td>
                            <td>120.00</td>
                            <td>120.00</td>
                            <td><button class="btn btn-success">Agregar</button></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Camara Wifi FULL HD - EZVIZ - C3TN</td>
                            <td colspan="4"></td>
                            <td><button class="btn btn-danger"><i class="fas fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>

                <!-- Totales -->
                <div class="text-right">
                    <p><strong>SUBTOTAL:</strong> 120.00</p>
                    <p><strong>IGV (18%):</strong> 21.60</p>
                    <p><strong>TOTAL:</strong> 141.60</p>
                </div>
            </div>
        </div>
    </div>

