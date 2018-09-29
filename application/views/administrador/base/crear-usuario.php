<?php include_once"header.php"; ?>
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Casa</a></li>
                        <li class="breadcrumb-item active">Nuevo usuario</li>
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
                                    <h4>Nuevo Usuario</h4>
                                </div>
                                <div class="form-validation">
                                        <!-- Bread crumb -->
					                                <form class="form-valide" action="#" method="post">                                    
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <select class="form-control" id="val-sede" name="val-sede">
                                                                            <option value="">Sedes Ciudad Mujer</option>
                                                                            <option>Sede San Miguel</option>
                                                                            <option>Sede KM Dieciocho</option>
                                                                            <option>Sede La Union</option>
                                                                            <option>Sede Usulutan</option>
                                                                        </select>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-name " name="val-name" placeholder="Nombre">
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
                                                                        <input type="text" class="form-control" id="val-lastname " name="val-lastname" placeholder="Apellido">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-direccion " name="val-direccion" placeholder="Dirección">
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
                                                                        <input type="text" class="form-control" id="val-municipio " name="val-municipio" placeholder="Municipio">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-phoneus " name="val-phoneus" placeholder="Teléfono">
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
                                                                        <input type="email" class="form-control" id="val-email " name="val-email" placeholder="E-mail">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-username" name="val-username" placeholder="Usuario">
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
                                                                        <input type="password" class="form-control" id="val-password " name="val-password" placeholder="Contraseña">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="Rep-contraseña">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->

                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Aceptar</button>
                                                    </form>
							            <!-- End Bread crumb -->
  
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
<?php include_once"footer.php"; ?>