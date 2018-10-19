<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.min.js"></script>
<style type="text/css">
         .TituloUser{
        display: block;
        margin: 0 auto;
        background-color: #0489B1;
        padding: 20px;
        text-align: center;
        color: white;
        border-radius: 98;
        width: 100%;
        font-weight: bold;
     }
</style>
<?php
/*
if(isset($_POST['btn'])){
    //print_r($_FILES);
    //obtener datos de la imagen
    $nombre=$_FILES['imagenN']['name'];
    $tempo= $_FILES['imagenN']['tmp_name'];
    $dir="plantilla/images/imagenesA/";
    //echo "NOmbre".$nombre."<br> url".$tempo;
    move_uploaded_file($tempo, $dir.$nombre);
    $imagenconvert= file_get_contents($dir.$nombre);
    //echo "longitud del archivo".$imagenconvert;

    //echo "<img src='data:image/jpg; base64>,".base64_encode($imagenconvert)."'";
}
*/
?>
<!--ESTA ES LA FORMA DE MOSTRAR LA IMAGEN
<form method="POST" action="<?= base_url() ?>Anuncios/guardar" enctype="multipart/form-data">

<input type="file" name="imagenN"> selleccionar archivo
<button name="btn">Guardar</button>
</form>
<img src="data:image/jpg; base64,<?php echo base64_encode($imagenconvert);?>"/>
-->
<!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Anuncios</a></li>
                        <li class="breadcrumb-item active">Publicar Anuncio</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->

            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row ">
                    <div class="col-sm-12">
                           <div class="card TituloUser">
                                <h3 class="responsive" style="color:white; font-weight:bold;">Publicar Noticias</h3>
                                </div>
                        <div class="card">
                                <div class="form-validation">
                                     <p style="color:#000000;"><b>Indicaciones</b><br>Todos los campos son requeridos</p>
                                        <!-- Bread crumb -->
                                                    <form class="form-valide" method="POST" action="<?= base_url() ?>Anuncios/guardar" enctype="multipart/form-data" form="formAnuncio" id="formAnuncio">                                    
                                                        <div class="row ">

                                                         <div class="col-md-12">
                                                                <div class="form-group"  id='datetimepicker9' >
                                                                    <label style="color: #000000"> Fecha de publicación:</label>
                                                                   <div class='input-group' >                    
                                                                    <input type='date' class="form-control" id="fecha" name="fecha" placeholder="Seleccione una fecha" />
                                                                        <span class="input-group-addon">
                                                                            <span class="glyphicon glyphicon-calendar">
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <div class="col-md-12">
                                                                <div class="form-group">
                                                                     <label style="color: #000000">Titulo de la Noticia:</label>
                                                                    <div class="input-group">
                                                                        <textarea type="text" class="form-control" id="val-name " name="titulo" placeholder="Titulo de la Noticia" pattern="[A-Z-0-9]+" required></textarea> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                     <label style="color: #000000"> Descripción de la Noticia:</label>
                                                                    <div class="input-group">
                                                                        <textarea type="text" class="form-control" id="val-name " name="Descripcion_Noticia" placeholder="Descripcion de la Noticia" pattern="[A-Z-0-9]+" required></textarea> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             <div class="col-md-12">
                                                                <div class="form-group">
                                                                     <label style="color: #000000">Contenido de la Noticia:</label>
                                                                    <div class="input-group">
                                                                        <textarea rows="8" cols="80" class=" form-control textarea_editor form-control" rows="15" style="height:300px" type="text" class="form-control" id="val-name " name="contenido" placeholder="Contenido" required></textarea> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="row">
                                                              <div class="col-md-4">
                                                                   <label style="color: #000000">Seleccionar una imagen(opcional)</label>
                                                              </div>
                                                              <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                    <a onclick="SubirImg()" class="btn btn-info btn-medium" style="color:white; padding:0 25 0 25;"><i class="fa fa-upload fa-2x" style="margin-right:10px;"></i>Subir Imagen</a>
                                                                    <input  hidden type="file" name="imagenN" id="imagenN" change="filePeview(this)">
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                             <div class="col-md-4" id="mostrarI">
                                                             <img src="<?=base_url()?>plantilla/images/picture.png">
                                                            </div>
                                                            </div>
                                                            <!--/span-->
                                                            <!--/span--> 
                                                        </div>
                                                        

                                                        <div class="row">
                                                        <div class="col-md-6">
                                                        <a style="color:white;" class="btn btn-success"><i class="fa fa-times-circle f-s-20" style="margin:10px;"></i>Cancelar</a>  
                                                        </div>
                                                        <div class="col-md-6">
                                                        <button type="submit" class="btn btn-primary"><i class="fa fa-share-square-o f-s-20" style="margin:10px;"></i>Publicar</button>
                                                            
                                                        </div>
                                                        </div> 


                                                       
                                                    </form>
                                        <!-- End Bread crumb -->
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
<script type="text/javascript">
function SubirImg(){
    document.getElementById('imagenN').click();
}
function filePreview(input){
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';
            document.getElementById('mostrarI').innerHTML='<img  src="'+e.target.result+'"  width="200" height="200" id="vista" alt="Imagen a publicar"/>';
    }
    }
}
$('#imagenN').change(function(){
    filePreview(this);
});
$.fn.datepicker.dates['es'] = {
                days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"],
                daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb", "Dom"],
                daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa", "Do"],
                months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"]
                };
    $('#fecha').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });
    $('#fechaInicial').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });
    $('#fechaFinal').datepicker({
                format: 'yyyy-mm-dd',
                language:'es',

            });


</script>