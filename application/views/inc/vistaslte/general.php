<!-- General Form Elements -->
 <div class="content-wrapper">
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Agregar Estudiante</h3>
  </div>
  <?php
    echo form_open_multipart("estudiante/agregarbd");
  ?>
  <!-- /.card-header -->
  <div class="card-body">
    <form>
      <!-- input states -->
      <div class="form-group">
        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Nombre(s)</label>
        <input type="text" class="form-control is-valid" name="nombre" id="inputSuccess" placeholder="Escriba sus Nombres">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Apellido Paterno</label>
        <input type="text" class="form-control is-valid" name="apellido1" id="inputSuccess" placeholder="Escriba su apellido paterno">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Apellido Materno</label>
        <input type="text" class="form-control is-valid" name="apellido2" id="inputSuccess" placeholder="Escriba su apellido materno">
      </div>
      <div class="form-group">
        <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Nota</label>
        <input type="number" min="0" max="100" class="form-control is-valid" name="nota" id="inputSuccess" placeholder="Escriba su nota">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-block btn-dark">Agregar Estudiante</button>
      </div>
       
    </form>
  </div>
  <!-- /.card-body -->
</div>
 </div>
    <?php
    echo form_close();
    ?>