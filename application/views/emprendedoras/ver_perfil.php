<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
 <link href="https://fonts.googleapis.com/css?family=Acme|Indie+Flower" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Indie+Flower" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Heebo|Indie+Flower|Merienda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Heebo|Indie+Flower|Merienda|Poiret+One" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css?family=Acme|Gloria+Hallelujah|Heebo|Indie+Flower|Kalam|Merienda|Poiret+One" rel="stylesheet"> 
<!--FUnetes de rox-->
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 

<style type="text/css">
    #div12{
        margin: 12px;
        /*background-color: #acc90d;*/

        
            }
    #Titulo{
        display: block;
        background-color: #000d5a;
        color: #fff;
        text-align: center;
        font-family: 'Ranga';
    }
    #baner{
        display: block;
        margin: 0 auto;
        width: 90%;
        height: 400px;
    }
    .images{
        height: 200px;
        width: 100%;
    }
    #perfil:hover{
        background-color: #0C853A;
    }
    .letra-menu{

        color: white;
        font-size: 18px;
        margin: 10;
    }
    #ln:hover{
        background-color: #000d5a;

    }
    #info{
        padding: 50px;
    }
    #info, p{
   
    /*font-family: 'Acme', sans-serif;
   font-family: 'Merienda', cursive;
   font-family: 'Poiret One', cursive;
   font-family: 'Gloria Hallelujah', cursive;
   font-family: 'Lora', serif;*/
   font-family: 'Rubik', sans-serif;
    color: #000d5a;
    }
    #Negocio{
        font-family: 'Rubik', sans-serif;
        font-size: 50px;
    }
    </style>
    <?php
    foreach ($perfil->result() as $Perfil) {
    	# code...
    }
    ?>
  <main class="mdl-layout__content">
  <div class="page-content">
   <div class="row">
    <div class="col-lg-4">
    	<div class="card-two">
            <header>
                 <div class="avatar">
                    <img src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto_Perfil;?>"style="height:100px;" />
                 </div>
            </header>
            <h3 id="Negocio"><?php echo $Perfil->Nombre_Negocio?></h3>
                <div class="desc">
                   <p style="font-family: 'Rubik', sans-serif;"> <?php echo $Perfil->Descripcion_Negocio?></p>
                </div>
                 <div class="contacts">
                    <a onclick="MostrarC(<?php echo $Perfil->Correo?>)"><i class="fa fa-plus"></i></a>
                    <a onmouseover="MostrarW(<?php echo $Perfil->Telefono?>)"><i class="fa fa-whatsapp"></i></a>
                    <a href="" title="Iniciar chat en la plataforma"><i class="fa fa-envelope"></i></a>
                    <div  class="clrear">
                    </div>

                </div>
        </div>

            <div id="info">
                    <img src="<?=  base_url()?>plantilla/images/ubicacion.png">
                    <p style="display:inline-block; ">Dirección: <?php echo $Perfil->Direccion_Negocio?></p>
                    <div>
                    <img src="<?= base_url()?>plantilla/images/chica.png" style="display:inline-block;">
                    <p style="display:inline-block; ">Propietaria: <?php echo $Perfil->Nombre.' '.$Perfil->Apellido?></p>
                    </div>
                     <div>
                    <img src="<?= base_url()?>plantilla/images/rubro.png" style="display:inline-block;">
                    <p style="display:inline-block; ">Rubro: <?php echo $Perfil->Nombre_Rubro?></p>
                    </div>
                    <div>
                    <img src="<?= base_url()?>plantilla/images/sede.png" style="display:inline-block;">
                    <p style="display:inline-block; ">Sede: <?php echo $Perfil->Nombre_Sede?></p>
                    </div>
            </div>
	</div>
    	<div class="col-lg-8">
    		<h1>Nuestro Trabajo</h1>
    		 <div class="row">
                <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto1;?>" class="img-responsive radius"  style="height:200px;" /></div>
                <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto2;?>" class="img-responsive radius" style="height:200px;" /></div>
                <div class="col-lg-3 col-md-6 m-b-20"><img src="<?php echo base_url().'plantilla/img_perfil/'.$Perfil->Foto3;?>" class="img-responsive radius" style="height:200px;" /></div>
            </div>
    	</div>	
    </div>
	</div>
	</main>
<script type="text/javascript">
	function MostrarW(valor){
    swal("Contactanos en WhatsApp envia un mensaje al: "+valor)
	}
	function MostrarC(val){
		swal("Envianos un correo", val ,"success")
	}
</script>