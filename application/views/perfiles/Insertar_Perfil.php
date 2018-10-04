 <script src="<?=base_url() ?>plantilla/componentes/js/CrearPerfil.js"></script>
 <style type="text/css">
.TituloUser{
        display: block;
        margin: 0 auto;
        background-color: #F44336;
        padding: 20px;
        text-align: center;
        color: white;
        border-radius: 98;
        width: 60%;
        font-weight: bold;
     }
     .ImageInicio{
        margin: 0 auto;
     }
     .encabezado{
        text-align: center;
        margin: 10px;
        display: block;
        color: white;
        font-weight: bold;
     }
    .etiqueta{
        color: white;
        font-weight: bold;
     }
     .btnCenter{
      text-align: center;
     }
     #siguiente{
      
        background-color:#4CAF50;
        color: #FFFFFF;
     }
    #anterior{ 
        background-color:#FF5252;
        color: #FFFFFF;
     }
     .subirImg{
      background-color: #FF4081;
      margin: 0 auto;
      color: white;
      font-weight: bold;
      padding: 20px;
     }
     .subirImg:hover{
      background-color: #FF5252;
      color: white;
     }
     .ImgPerfil{
      margin: 0 auto;
      padding: 10px;
     }
     .indicaciones{
      display: block;
      color: white;
      text-align: justify-all;
     }
     .subirImgG{
      background-color: #536DFE;
      margin: 0 auto;
      color: white;
      font-weight: bold;
      padding: 20px;
     }
 </style>
 <!-- Bread crumb -->
 <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Nuevo Perfil</li>
                    </ol>
                </div>
            </div>
             <div class="container-fluid" id="div_1">
                <!-- Start Page Content -->
            <div class="card TituloUser">
            <div class="card-title">
            <img class="ImageInicio"  src="<?= base_url()?>plantilla/images/triste.png">
               <div><h4 style="color:white; font-weight:bold;">Usted no ha creado un perfil empresarial</h4></div>
            </div>
             <a style="background-color:#448AFF; font-weight:bold; padding:10px;" class="btn" onclick="mostrar()"> <i class="fa fa-plus-circle"></i> Crear Perfil Empresarial</a>
            </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" id="div_2" style="display:none;">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12"> 
                                <div >
                                        <!-- Bread crumb -->
					                                <form class="FormPerfil" enctype="multipart/form-data" action="<?=base_url()?>Perfiles/registroPerfil" method="post" id="FormPerfil">  
                                                    <!--INICIO DEL DIV1DATOS--> 
                                                    <div id="DivDatos" class="card" style="background-color:#0097a7; display:none">
                                                    <h3 class="encabezado" >Registro de datos del negocio</h3>
                                                     <div class="row">
                                                          <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte el nombre de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="nombreN" name="nombreN" placeholder="Nombre del Negocio">
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Seleccione el rubro de su negocio</label>
                                                                    <div class="input-group">
                                                                        <select class="form-control" name="rubro" id="rubro" >
                                                                            <?php
                                                                                echo "<option value=''>Seleccione el rubro de su negocio</option>";
                                                                                foreach ($rubros->result() as $fila) {

                                                                                  echo "<option value=".$fila->PK_Id_Rubro.">".$fila->Nombre_Rubro."</option>";
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
                                                                <label class="etiqueta">Inserte la direccion de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="direccionN" name="direccionN" placeholder="Dirección del negocio">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte una descripsion de su negocio de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="descripcionN" name="descripcionN" placeholder="Descripción del negocio">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte numero de telefono de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="telefono" name="telefono"  placeholder="Inserte su número de WhatsApp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                <label class="etiqueta">Inserte la direccion de correo electronico de su negocio</label>
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="correo" name="correo" placeholder="Ingrese un correo electrónico de contacto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 btnCenter">
                                                                 <a onclick="Atras()" class="btn btn-info" id="anterior" ><i class="fa fa-arrow-left"></i> Cancelar</a> 
                                                             </div>
                                                        <div class="col-md-6 btnCenter">
                                                             <a onclick="siguiente()" class="btn btn-info" id="siguiente">Siguiente  <i class="fa fa-arrow-right"></i></a>
                                                        </div>
                                                        </div>
                                                        </div>
                                                    <!--FINAL DEL DIV1 -->   
                                                    <!--INICIO DEL DIV2IMAGEN DE PERFIL -->               
                                                       <div id="Div2Imagenes" class="card row" style="background-color:#00BCD4; display:none;">
                                                             <h3 class="encabezado">Seleccione una imagen de perfil</h3>
                                                             <div class="row">
                                                                    <input hidden class="btn btn-success" type="file" name="imagenPerfil" id="imagenPerfil">
                                                                    <a onclick="SubirImgPerfil()" style="color:white" class="btn subirImg"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                </div>  
                                                             <div class="row" id="mostrarPerfil"></div>

                                                            <div class="row btnCenter" >
                                                                <div class="col-md-6 btnCenter" style="display:none" id="botonesImage">
                                                                     <a onclick="Atras()" class="btn btn-info" id="anterior" ><i class="fa fa-arrow-left"></i> Cancelar</a> 
                                                                 </div>
                                                                <div class="col-md-6 btnCenter" style="display:none" id="botonesImage2">
                                                                 <a onclick="siguiente2()" class="btn btn-info" id="siguiente">Siguiente  <i class="fa fa-arrow-right"></i></a>
                                                                </div>
                                                            
                                                            </div>
                                                            </div>

                                                            <!--FIN DEL DIV PARA LA IMAGENES-->
                                                              <div id="DivImagesGaleria" class="card" style="display:none; background-color:#FF5722;">
                                                              <h3 class="encabezado">Agregue imagenes para mostrar en su perfil</h3>
                                                              <p class="indicaciones"><b>Indicaciones:</b> por politicas de la organizacion solo se permiten tres imagens por lo que ya se muestran los eapacios establecidos para cada una,  estas las puede cambiar cuando desee despues de creado su perfil</p>
                                                              <div class="row">
                                                                  <div class="col-md-4 btnCenter">
                                                                  <a onclick="SubirImg(1)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                  <input hidden type="file" name="imagen1" id="imagen1" change="filePeview(this)">
                                                                  </div>
                                                                  <div class="col-md-4 btnCenter">
                                                                  <a onclick="SubirImg(2)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                  <input hidden type="file" name="imagen2" id="imagen2" change="filePeview(this)">
                                                                    
                                                                  </div>
                                                                  <div class="col-md-4 btnCenter">
                                                                  <a onclick="SubirImg(3)" style="color:white"  class="btn subirImgG"><i class="fa fa-cloud-upload"></i> Seleccionar imagen</a>
                                                                  <input hidden type="file" name="imagen3" id="imagen3" change="filePeview(this)">
                                                                    
                                                                  </div>
                                                                
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-4 ImgPerfil" id="mostrarfoto1">
                                                                  <img src="<?=base_url()?>plantilla/images/picture.png">
                                                                  </div>
                                                                  <div class="col-md-4 ImgPerfil" id="mostrarfoto2" >
                                                                      <img  src="<?=base_url()?>plantilla/images/picture.png">
                                                                  </div>
                                                                 <div class="col-md-4 ImgPerfil" id="mostrarfoto3">
                                                                    <img src="<?=base_url()?>plantilla/images/picture.png">
                                                                  </div>
                                                                
                                                              </div>
                                                              <div class="row">
                                                                  <div class="col-md-6 btnCenter">
                                                                     <a onclick="Verificar()" class="btn btn-danger" id="anterior" ><i class="fa fa-arrow-left"></i> Verificar</a> 
                                                                  </div>
                                                                 <div class="col-md-6 btnCenter" >
                                                                    <button id="btnEnviar" type="submit" class="btn btn-primary"><i class="fa fa-floppy-o"></i> Guardar</button>
                                                                  </div>
                                                                
                                                              </div>
                                                              </div>
                                                              </div>
                                                              </div>
                                                               </div>
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                        
                                                        </div>
                                                        </div>
                                                    </form>
							            <!-- End Bread crumb -->
                                </div>
                                
                        </div>
                    </div>