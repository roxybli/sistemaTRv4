 <script type="text/javascript">
     function mostrar(){
        document.getElementById('div_1').style.display = 'none';
        document.getElementById('div_2').style.display = 'block';
     }
 </script>
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
            <div class="card">
            <div class="card-title">
               <h4>Usted no ha creado un perfil empresarial</h4>
            </div>
             <a class="badge badge-success" onclick="mostrar()"><span style="font-size:20px;" class="badge badge-success">Crear Perfil Empresarial</span></a>
            </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" id="div_2" style="display:none;">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                        <div class="card">
                                <div class="card-title">
                                    <h4>Nuevo Perfil</h4>
                                </div>
                                <div class="form-validation">
                                        <!-- Bread crumb -->
					                                <form class="form-valide" enctype="multipart/form-data" action="<?=base_url()?>Perfiles/registroPerfil" method="post" id="FormPerfil">                             
                                                        <div class="row ">
                                                          <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-name" name="nombreN" placeholder="Nombre del Negocio">
                                                                        <input hidden type="text" name="id_usuaria" value=<?php echo  $this->session->userdata('id') ?>>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <select class="form-control" id="val-sede" name="rubro" required>
                                                                            <?php
                                                                                echo "<option value=''>Seleccione el rubro de su negocio</option>";
                                                                                foreach ($rubros->result() as $fila) {

                                                                                  echo "<option value=".$fila->pk_Id_Rubro.">".$fila->Nombre_Rubro."</option>";
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
                                                                        <input type="text" class="form-control" id="val-lastname " name="direccionN" placeholder="Dirección del negocio">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-direccion " name="descripcionN" placeholder="Descripción del negocio">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        <!--/row-->
                                                          <div class="row">
                                                              <div class="col-md-4">
                                                                   <label>Seleccionar una imagen de perfil</label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <input class="btn btn-success" type="file" name="imagenPerfil" id="imagenPerfil">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                             <div class="col-md-4" id="mostrarPerfil">                                                           
                                                             	<img src="<?=base_url()?>plantilla/images/picture.png">
                                                            </div>
                                                            </div>
                                                              <div class="row">
                                                              <div class="col-md-4">
                                                                   <label>Seleccione imagen para mostrar en su perfil </label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <input class="btn btn-success" type="file" name="imagen1" id="imagen1" change="filePeview(this)">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                             <div class="col-md-4" id="mostrarfoto1">
                                                             <img src="<?=base_url()?>plantilla/images/picture.png">
                                                            </div>
                                                            </div>
                                                              <div class="row">
                                                              <div class="col-md-4">
                                                                   <label>Seleccione imagen para mostrar en su perfil </label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <input class="btn btn-success" type="file" name="imagen2" id="imagen2" change="filePeview(this)">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                             <div class="col-md-4" id="mostrarfoto2" >
                                                             <img src="<?=base_url()?>plantilla/images/picture.png">
                                                            </div>
                                                            </div>
                                                              <div class="row">
                                                              <div class="col-md-4">
                                                                   <label>Seleccione imagen para mostrar en su perfil </label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <input class="btn btn-success" type="file" name="imagen3" id="imagen3" change="filePeview(this)">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                             <div class="col-md-4" id="mostrarfoto3">
                                                             <img src="<?=base_url()?>plantilla/images/picture.png">
                                                            </div>
                                                            </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-municipio " name="telefono"  placeholder="Inserte su número de WhatsApp">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-phoneus " name="correo" placeholder="Ingrese un correo electrónico de contacto">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>
                                                        </div>
                                                        <div class="row">
                                                        <div class="col-md-12">
                                                         <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-floppy-o"></i> Guardar</button>
                                                        </div>
                                                        </div>
                                                    </form>
							            <!-- End Bread crumb -->
  
                                </div>
                                </div>
                        </div>
                    </div>
                
<script type="text/javascript">

$('#imagenPerfil').change(function(){
    fotoPerfil(this);
});
function fotoPerfil(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarPerfil').innerHTML='<div class="round-img"><img  src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/></div>';
    }
    }
}
//este es el metodo para la segunda foto
$('#imagen1').change(function(){
    foto1(this);
});
function foto1(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarfoto1').innerHTML='<img  src="'+e.target.result+'"  width="100" height="100" id="vista1" alt="Imagen a publicar"/>';
    }
    }
}

$('#imagen2').change(function(){
    foto2(this);
});

function foto2(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarfoto2').innerHTML='<img  src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
    }
    }
}


$('#imagen3').change(function(){
    foto3(this);
});
function foto3(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarfoto3').innerHTML='<img  src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/>';
    }
    }
}

</script>