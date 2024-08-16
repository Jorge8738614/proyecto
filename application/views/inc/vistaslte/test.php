

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Estudiantes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Lista de Estudiantes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <br>
                <div class="form-group">
                    <a href="<?php echo base_url(); ?>index.php/estudiante/deshabilitados">
                        <button type="button" class="btn btn-warning">Ver deshabilitados</button>
                    </a>
                </div>
                <div class="form-group">
                   <a href="<?php echo base_url(); ?>index.php/estudiante/form">
                     <button type="button" class="btn btn-primary">Agregar estudiante</button>
                  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nombre.</th>
                    <th>Primer APellido.</th>
                    <th>Segundo APellido.</th>
                    <th>nota</th>
                    <th>Creado</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                    <th>Deshabilitar</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                         $contador=1;
                          foreach($alumnos->result() as $row)
                          {
                          ?>
                        <tr>
                          <td><?php echo $contador; ?></td>
                          <td><?php echo $row->nombre; ?></td>
                          <td><?php echo $row->primerApellido; ?></td>
                          <td><?php echo $row->segundoApellido; ?></td>
                          <td><?php echo $row->nota; ?>
                          <?php echo estado($row->nota); ?>
                          </td>
                          <td><?php echo formatearFecha($row->creado); ?></td>
                          <td>
                    <?php
                    echo form_open_multipart("estudiante/formmodi");
                    ?>
                    <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante; ?>">
                    <button type="submit" class="btn btn-success">Modificar</button>
                    <?php
                    echo form_close();
                    ?>        
                    </td>
                    <td>
                    <?php
                    echo form_open_multipart("estudiante/eliminarbd");
                    ?>
                    <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante; ?>">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <?php
                    echo form_close();
                    ?>
                          </td>
                          <td>
                    <?php
                    echo form_open_multipart("estudiante/deshabilitarbd");
                    ?>
                    <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante; ?>">
                    <button type="submit" class="btn btn-warning">Deshabilitar</button>
                    <?php
                    echo form_close();
                    ?>
                          </td>
                        </tr>
                        <?php
                        $contador++;
                        }
                        ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>