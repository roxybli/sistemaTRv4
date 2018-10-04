
<?php 
foreach ($info as $fila) {
}
foreach ($user->result() as $fila2) {
    # code...
}
?>
<style type="text/css">
    .imgs {
        width: 300px;
        height: 300px;
    }
</style>
            <!-- Container fluid  -->
            <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Perfil</a></li>
                        <li class="breadcrumb-item active">Mi Perfil</li>
                    </ol>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto_Perfil;?>" alt="Imagen de perfil" />
                                        </div>
                                    </header>

                                    <h3><?php echo "Encargada del negocio: <br>".$fila->Nombre." ".$fila->Apellido?></h3>
                                    <div class="desc">
                                        <h4>Sede</h4><?php echo $fila->Nombre_Sede;?>
                                    </div>
                                    <div class="contacts">
                                        <a href=""><i class="fa fa-plus"></i></a>
                                        <a href=""><i class="fa fa-whatsapp"></i></a>
                                        <a href=""><i class="fa fa-envelope"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Mi negocio</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Información</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Editar Información</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto_Perfil;?>" alt="Imagen de perfil" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="" class="link"><?php echo $fila->Nombre_Negocio; ?></a>
                                                        <p>Imagenes de mi negocio | Rubro: <?php echo $fila->Nombre_Rubro?></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20 imgs"><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto1;?>" class="img-responsive radius" />
                                                            <div style="padding:10px;">
                                                            <a  onclick="editI()" class="btn-outline btn-rounded btn-success">Editar imagen</a>   
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20 imgs" id="form1" style="display:none;">
                                                                <form class="form-valide" enctype="multipart/form-data" action="<?=base_url()?>Perfiles/editarImagen?c=1" method="post" id="FormPerfil">
                                                                    <input type="file" name="imagen" id="imagen" onchange="cambio(this)">
                                                                    <div class="col-lg-3 col-md-6 m-b-20" id="Cimg1" >
                                                                    </div>
                                                                    <button class="btn btn-warning btn-flat m-b-30 m-t-30">Cargar</button>
                                                                </form>
                                                            </div>

                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto2;?>" class="img-responsive radius" />
                                                             <div style="padding:10px;">
                                                            <a  onclick="editI2()" class="btn-outline btn-rounded btn-success">Editar imagen</a>   
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20" id="form2" style="display:none;">
                                                                <form class="form-valide" enctype="multipart/form-data" action="<?=base_url()?>Perfiles/editarImagen?c=2" method="post" id="FormPerfil">
                                                                    <input type="file" name="imagen" id="imagen" onchange="cambio2(this)">
                                                                    <div class="col-lg-3 col-md-6 m-b-20" id="Cimg2">
                                                                    </div>
                                                                    <button class="btn btn-warning btn-flat m-b-30 m-t-30">Cargar</button>
                                                                </form>
                                                            </div>

                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img style="height:150px;" src="<?=base_url() ?>plantilla/img_perfil/<?php echo $fila->Foto3;?>" class="img-responsive radius" />
                                                             <div style="padding:10px;">
                                                            <a  onclick="editI3()" class="btn-outline btn-rounded btn-success">Editar imagen</a>   
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 m-b-20" id="form3" style="display:none;">
                                                                <form class="form-valide" enctype="multipart/form-data" action="<?=base_url()?>Perfiles/editarImagen?c=3" method="post" id="Form3" name="form3">
                                                                    <input type="file" name="imagen" id="imagen" onchange="cambio3(this)">
                                                                    <div class="col-lg-3 col-md-6 m-b-20" id="Cimg3">
                                                                    </div>
                                                                    <button class="btn btn-warning btn-flat m-b-30 m-t-30">Cargar</button>
                                                                </form>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Encargado</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Nombre?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>WhatsApp</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Telefono?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Correo ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Dirección</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $fila->Direccion_Negocio;  ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30"><?php  echo $fila->Descripcion_Negocio;?></p>
                                </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="row ">
                                    <div class="col-sm-12">
                                        <div class="card">
                                                <div class="card-title">
                                                    <h4>Editar información personal</h4>
                                                </div>
                                                <div class="form-validation">
                                                        <!-- Bread crumb -->
                                                                    <form class="form-valide" action="<?=base_url()?>Perfiles/EditarUsuaria" method="post">                             
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-name" name="nombre" placeholder="Nombre" value="<?php echo $fila2->Nombre;?>">
                                                                                        <input type="text" hidden name="id_usuaria" value="<?php echo $fila2->pk_Id_Usuaria;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Apellido </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-lastname " name="apellido" placeholder="Apellido" value="<?php echo $fila2->Apellido;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre de usuario </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-direccion " name="nomuser" placeholder="Nombre de usuario" value="<?php echo $fila2->Nom_User;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Contraseña </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-municipio " name="pass" placeholder="Contraseña" value="<?php echo $fila2->Pass;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Dirección </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-phoneus " name="direccion" placeholder="Direccion" value="<?php echo $fila2->Direccion;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Teléfono </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="" name="telefono" placeholder="Telefono" value="<?php echo $fila2->Telefono;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span># DUI </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-username" name="dui" placeholder="# DUI" value="<?php echo $fila2->Dui;?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                                                                        <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-floppy-o"></i> Editar</button>  
                                                                        </div>
                                                                    </form>
                                                                    </div>
                                                                    <div class="form-validation">
                                                        <!-- Bread crumb -->
                                                         <h4>Editar Información del negocio</h4>
                                                                    <form class="form-valide" action="<?=base_url()?>Perfiles/EditarPerfil" method="post">                             
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Nombre del negocio </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-name" name="nombre_n" placeholder="Nombre" value="<?php echo $fila->Nombre_Negocio;?>">
                                                                                        <input type="text" hidden name="id_usuaria" value="<?php echo $fila->FK_Usuaria;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Dirección del Negocio </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-lastname " name="direcion_n" placeholder="Apellido" value="<?php echo $fila->Direccion_Negocio;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">

                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Rubro</span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-direccion " name="nomuser" placeholder="Nombre de usuario" value="<?php echo $fila->Nombre_Rubro;?>" disabled>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Descripción </span>
                                                                                    <div class="input-group">
                                                                                        <textarea type="text" class="form-control" id="val-municipio " name="descripcion_n" placeholder="Contraseña" value="<?php echo $fila->Descripcion_Negocio;?>"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            </div>
                                                                        <!--/row-->
                                                                        <div class="row ">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Dirección </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-phoneus " name="direccion_n" placeholder="Direccion" value="<?php echo $fila->Direccion_Negocio;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                       
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Teléfono </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="" name="telefono_n" placeholder="Telefono_n" value="<?php echo $fila->Telefono;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                <span>Correo </span>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" id="val-username" name="Correo_n" placeholder="# DUI" value="<?php echo $fila->Correo;?>">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--/span-->
                                                                        </div>
                                                                        <!--/row-->
                                                                        <div class="col-md-12">
                                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-floppy-o"></i> Editar</button>  
                                                                        </div>
                                                                    </form>
                                                                    </div>

                                                        <!-- End Bread crumb -->
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                           </div>
                                           </div>
                                           </div>
<script type="text/javascript">
    function editI(){
        //alert('hola');
        document.getElementById('form1').style.display = 'block';
        document.getElementById('form2').style.display = 'none';
        document.getElementById('form3').style.display = 'none';
    }
    function editI2(){
        //alert('hola');
        document.getElementById('form1').style.display = 'none';
        document.getElementById('form2').style.display = 'block';
        document.getElementById('form3').style.display = 'none';
    }
    function editI3(){
        //alert('hola');
        document.getElementById('form1').style.display = 'none';
        document.getElementById('form2').style.display = 'none';
        document.getElementById('form3').style.display = 'block';
    }
    function cambio(campo){
        foto(campo, 1);
        //var val = campo;  
    }
    
    function cambio2(campo2){
        foto(campo2, 2);
    }
    function cambio3(campo3){
        foto(campo3, 3);  
    }
/*$('#imagen').change(function(){
    foto(this);
    alert('holaf');
    alert(this);
});*/
function foto(input, param){
    var v =param;
if(input.files && input.files[0]){
    var reader = new FileReader(); 
    reader.readAsDataURL(input.files[0]);
    reader.onload =function(e) {
        if(v==1){
            document.getElementById('Cimg1').innerHTML='<div class=""><img class="" src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/></div>';
        }
        if(v==2){
            document.getElementById('Cimg2').innerHTML='<div class=""><img class="" src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/></div>';
        }
        if(v==3){
            document.getElementById('Cimg3').innerHTML='<div class=""><img class="" src="'+e.target.result+'"  width="100" height="100" id="vista" alt="Imagen a publicar"/></div>';
        }
            //$('#formAnuncio + img').remove();
            //$('#formAnuncio').after('<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>');
            //$('#formAnuncio').innerHTML='<div class="col-md-4"><img  src="'+e.target.result+'"  width="450" height="300" id="vista"/>';    
    }
    }
}
</script>