<?php // include_once"header-login.php"; ?>

                <div class="row justify-content-center">
                    <div class="col-sm-8">
                        <div class="login-content card">
                            <div class="login-form">
                                <div class="form-validation">
                                        <!-- Bread crumb -->
                                        <div class="row ">
                                            <div class="col-md-5 " >
                                                <a href="<?=base_url() ?>Emprendedoras/"><img src="<?=base_url() ?>plantilla/images/LogoCiudadMujer.png" class="img-responsive img-login"  alt="Imagen Ciudad Mujer" > </a>
                                            </div>
                                            <div class="col-md-7 ">
                                                 <h3 align="center">Iniciar sesión</h3>
                                                  <form class="form-valide" action="<?=base_url() ?>login/validar" method="post">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                <span class="icns-login"><i class="fa fa-user-o f-s-20"></i></span>
                                                                &nbsp;
                                                                </div>
                                                                <input type="text" class="form-control" id="val-username " name="nomuser" placeholder="Usuario">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-addon">
                                                                <span class="icns-login"><i class="fa fa-key f-s-20"></i></span>
                                                                &nbsp;
                                                                </div>
                                                                <input type="password" class="form-control" id="val-password " name="pass" placeholder="Contraseña">
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-sign-out f-s-20"></i> Entrar</button>
                                                        <span class="register-link m-t-15 pull-left">
                                                            <a href="<?=base_url() ?>login/forgot">Olvido la contraseña</a>
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