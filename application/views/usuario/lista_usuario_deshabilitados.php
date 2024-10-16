<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Usuarios</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                        <table class="table">
                                            <tr>
                                                <td style="width: 70%;">
                                                    <form method="GET" action="<?php echo base_url(); ?>Cusuario/buscar">
                                                        <input name="txt_buscar" type="text" placeholder="Buscar Usuarios" class="form-control" >   
                                                </td>
                                                <td>
                                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                                 </form>
                                                </td>

                                                <td>
                                                    <a class="btn btn-primary btn-sm" href="<?php echo base_url(); ?>Cusuario/vista_usuarios"> habilitados </a>
                                                </td>
                                            </tr>
                                        </table>
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                             <thead class="thead-dark">  
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Nombre Completo</th>
                                                    <th>Apellido</th>
                                                    <th>Alias</th>
                                                    <th>CI</th>
                                                    <th>Fecha Creación</th>
                                                    <th>Modificar</th>
                                                    <th>Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                //$contador = 1;
                                                 $contador = $this->uri->segment(3) ? $this->uri->segment(3) : 1; // Ajusta el contador en función de la paginación
                                                foreach ($usuarios->result() as $row) {  
                                                ?>
                                                <tr>
                                                    <td><?php echo $contador; ?></td>
                                                    <td><?php echo $row->nombre_completo; ?></td>
                                                    <td><?php echo $row->apellido; ?></td>
                                                    <td><?php echo $row->alias; ?></td>
                                                    <td><?php echo $row->ci; ?></td>
                                                    <td><?php echo formatearFecha($row->fecha_creacion); ?></td>
                                                    <!-- Opcional: acciones para modificar, eliminar y deshabilitar -->
                                                    
                                                    <td>
                                                        <form method="GET" action="<?php echo base_url(); ?>Cusuario/habilitarbd">
                                                        <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
                                                        <button type="submit" class="btn btn-success btn-xs">Habilitar</button>
                                                        </form>   
                                                    </td>
                                                    <td>
                                                        <form method="GET" action="<?php echo base_url(); ?>Cusuario/eliminarbd">
                                                        <input type="text" name="id" value="<?php echo $row->id_usuario; ?>" style="display: none;">
                                                        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                                <?php
                                                $contador++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

            <!-- /#page-wrapper -->

        </div>
</div>
