 <!-- Registration Section -->
 <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <h5 class="text-center mb-4">REGISTRAR PRODUCTO</h5>
            <form method="POST" action="<?php echo base_url();?>Cproducto/agregarbd" autocomplete="off">
                <div class="form-group">
                    <label for="producto_nombre">Nombre del Producto</label>
                    <input type="text" class="form-control" id="producto_nombre" placeholder="* Escriba el nombre del producto" name="producto_nombre" required>
                </div>
                <div class="form-group">
                    <label for="producto_descripcion">Descripción</label>
                    <textarea class="form-control" id="producto_descripcion" placeholder="* Escriba la descripción del producto" name="producto_descripcion" required></textarea>
                </div>
                <div class="form-group">
                    <label for="producto_precio">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="producto_precio" placeholder="* Escriba el precio del producto" name="producto_precio" required>
                </div>
                <div class="form-group">
                    <label for="producto_cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="producto_cantidad" placeholder="* Escriba la cantidad en stock" name="producto_cantidad" required>
                </div>
                <div class="form-group">
                    <label for="producto_codigo">Código del Producto</label>
                    <input type="text" class="form-control" id="producto_codigo" placeholder="* Escriba el código del producto" name="producto_codigo" required>
                </div>

                <div class="form-group">
                    <label for="categoria_id">Categoría</label>
                    <select class="form-control" id="id_categoria" name="categoria_id" required>
                        <option value="" disabled selected>* Seleccione la categoría del producto</option>
                        <!-- Añade aquí las opciones de categorías -->
                        <option value="1">Categoría 1</option>
                        <option value="2">Categoría 2</option>
                        <!-- Añade más categorías según sea necesario -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="producto_unidad_medida">Unidad de Medida</label>
                    <input type="text" class="form-control" id="producto_unidad_medida" placeholder="* Escriba la unidad de medida" name="producto_unidad_medida" required>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-md">Registrar Producto</button>
                    <a href="<?php echo base_url(); ?>Cproducto/cancelar" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</div>
