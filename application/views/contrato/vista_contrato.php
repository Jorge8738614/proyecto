    <!-- Sección principal -->
    <div class="container mt-4">
        <!-- Título y Formulario de búsqueda -->
        <div class="row mb-3">
            <div class="col-md-8">
                <h2><i class="fas fa-file-alt"></i> Lista de cotizaciones</h2>
            </div>
            <div class="col-md-4">
                <div class="form-inline float-right">
                    <input type="text" class="form-control mr-2" placeholder="Nro. Cotización">
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
            <div class="col-md-6 text-right">
                <button class="btn btn-success mr-2"><i class="fas fa-file-excel"></i></button>
                <button class="btn btn-danger"><i class="fas fa-file-pdf"></i></button>
            </div>
        </div>

        <!-- Tabla de cotizaciones -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Nro. Cotización</th>
                            <th>Fecha - Hora</th>
                            <th>Cliente</th>
                            <th>Vendedor</th>
                            <th>Total Cotización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>VGT001</td>
                            <td>2023-12-26 14:04:36</td>
                            <td>Aris Hernandez</td>
                            <td>Jorge Hernandez</td>
                            <td>S/. 141.6</td>
                            <td>
                                <button class="btn btn-info"><i class="fas fa-eye"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Paginación -->
                <nav>
                    <ul class="pagination justify-content-center">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>