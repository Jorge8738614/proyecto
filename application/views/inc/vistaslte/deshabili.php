

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
            
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                  <a href="<?php echo base_url(); ?>index.php/estudiante/demo">
                      <button type="button" class="btn btn-warning">VER HABILITADOS</button>
                  </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nombre.</th>
                    <th>Primer APellido.</th>
                    <th>Segundo APellido.</th>
                    <th>Habilitar</th>
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
                            <td>
                      <?php
                      echo form_open_multipart("estudiante/habilitarbd");
                      ?>
                      <input type="hidden" name="idestudiante" value="<?php echo $row->idEstudiante; ?>">
                      <button type="submit" class="btn btn-warning">Habilitar</button>
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
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>