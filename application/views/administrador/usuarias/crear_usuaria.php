 <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Nuevo usuaria</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card">
                                <div class="card-title">
                                    <h4>Nuevo Usuaria</h4>
                                </div>
                                <div class="form-validation">
                                        <!-- Bread crumb -->
					                                <form class="form-valide" action="<?=base_url()?>Emprendedoras/registro_usuaria" method="post">                             
                                                        <div class="row ">
                                                          <!--/span-->
                                                          <div class="col-md-12">
                                                          <div class="form-group">
                                                                    <div class="input-group">
                                                                        <select class="form-control" id="val-sede" name="sede">
                                                                            <?php
                                                                                echo "<option value=''>Seleccione la sede a la que pertenece</option>";
                                                                                foreach ($con2->result() as $fila) {

                                                                                  echo "<option value=".$fila->pk_Id_Sede.">".$fila->Nombre_Sede."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>  
                                                          </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-name" name="nombre" placeholder="Nombre">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <select class="form-control" id="val-sede" name="tipo">
                                                                            <?php
                                                                                echo "<option value=''>Seleccione un tipo de usuaria</option>";
                                                                                foreach ($con->result() as $fila) {

                                                                                  echo "<option value=".$fila->pk_Id_Tipo.">".$fila->Descripcion."</option>";
                                                                                }
                                                                            ?>
                                                                        </select>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                          
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-lastname " name="apellido" placeholder="Apellido">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-direccion " name="nomuser" placeholder="Nombre de usuario">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-municipio " name="pass" placeholder="Contraseña">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-phoneus " name="direccion" placeholder="Dirección">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="" name="telefono" placeholder="Teléfono">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-username" name="dui" placeholder="# DUI">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-floppy-o"></i> Guardar</button>
                                                    </form>
							            <!-- End Bread crumb -->
  
                                </div>
                                </div>
                        </div>
                    </div>
                </div>