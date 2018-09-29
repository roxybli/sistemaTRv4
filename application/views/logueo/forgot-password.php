<?php include_once"header-login.php"; ?>

                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="login-content card">
                            <div class="login-form">
                                <div class="form-validation">
                                        <!-- Bread crumb -->
							            <div class="row ">
							                <div class="col-md-5 ">
											   <a href="<?=base_url() ?>Emprendedoras/"><img src="<?=base_url() ?>plantilla/images/LogoCiudadMujer.png" class="img-responsive img-login"  alt="Imagen Ciudad Mujer" > </a>
							                </div>
							                <div class="col-md-7 ">
					                             <h3 align="center">Olvido la contraseña</h3>
					                              <form class="form-valide" action="#!" method="post">
					                                    <div class="form-group">
					                                        <div class="input-group">
					                                            <div class="input-group-addon">
					                                            <span class="icns-login"><i class="fa fa-envelope-o f-s-20"></i></span>
					                                            &nbsp;
					                                            </div>
					                                            <input type="email" class="form-control" id="val-email " name="val-email" placeholder="E-mail">
					                                        </div>
					                                    </div>
					                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Aceptar</button>
					                                    <span class="register-link m-t-15 pull-left">
					                                        <a href="<?=base_url() ?>login/">Iniciar sesión</a>
					                                    </span>
					                                    <span class="register-link m-t-15 pull-right">
					                                        <a href="<?=base_url() ?>login/help">Contáctenos</a>
					                                    </span>
					                                </form>
							                </div>
							            </div>
							            <!-- End Bread crumb -->
  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php //include_once"footer-login.php"; ?>