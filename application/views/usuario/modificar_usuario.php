<!-- Modificar Usuario Section -->
<div class="container mt-5">
    <h5 style="margin-bottom: 1px;">Sistema / Usuario / Modificar Usuario </h5>
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <h5 class="text-center mb-4">MODIFICAR USUARIO</h5>
            <?php 
                
              if (sizeof($usuario) > 0): ?>
            <?php foreach($usuario as $row): ?>
           
            <form method="POST" action="<?php echo base_url(); ?>Cusuario/actualizar" autocomplete="off">
           
                <input type="text" name="id" value="<?php echo $row->id_usuario; ?>"  style="display: none;">

                <div class="form-group">
                    <label for="nombre_completo">Nombre(s)</label>
                    <input type="text" class="form-control" id="nombre_completo" placeholder="* Escriba su nombre" name="nombre_completo" value="<?php echo $row->nombre_completo; ?>" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido(s)</label>
                    <input type="text" class="form-control" id="apellido" placeholder="* Escriba su apellido" name="apellido" value="<?php echo $row->apellido; ?>" required>
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="tel" class="form-control" id="celular" placeholder="* Escriba su número de celular" name="celular" value="<?php echo $row->celular; ?>" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="* Escriba su password" name="password" value="<?php echo $row->password; ?>" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="cargo">Cargo</label>
                    <select class="form-control" id="cargo" name="cargo" required>
                        <option value="" disabled>* Seleccione su cargo</option>
                        <option value="admin" <?php echo ($row->cargo == 'admin') ? 'selected' : ''; ?>>Admin</option>
                        <option value="vendedor" <?php echo ($row->cargo == 'vendedor') ? 'selected' : ''; ?>>Vendedor</option>
                        <option value="distribuidor" <?php echo ($row->cargo == 'distribuidor') ? 'selected' : ''; ?>>Distribuidor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alias">Alias</label>
                    <input type="text" class="form-control" id="alias" placeholder="* Escriba su alias" name="alias" value="<?php echo $row->alias; ?>" required>
                </div>
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-md">Modificar</button>
                    <a href="<?php echo base_url(); ?>Cusuario/vista_usuarios" class="btn btn-danger">Cancelar</a>   
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                <p>No se encontró el usuario.</p>
            <?php endif; ?>
            </form>
        </div>
    </div>
</div>
