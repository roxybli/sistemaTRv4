<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans+Condensed:300|Oswald|Sawarabi+Mincho" rel="stylesheet">
<style type="text/css">
    .degradado {
        background: -webkit-linear-gradient(#33691e, #dcedc8); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#33691e, #dcedc8); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#33691e, #dcedc8); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#33691e, #dcedc8); /* Standard syntax */
        color: white;
}
.degradado_lineal {
background: -webkit-linear-gradient(left, #004d40 , #80cbc4); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right, #004d40 , #80cbc4); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right, #004d40 , #80cbc4); /* For Firefox 3.6 to 15 */
background: linear-gradient(to right, #004d40 , #80cbc4); /* Standard syntax */
text-align: center;
color: #fff;
padding: 25px;
height: 200px
}
.contenido{
    text-align: justify;
    color: #000;
    font-family: 'Oswald', sans-serif;
    font-family: 'Sawarabi Mincho', sans-serif;
    font-family: 'Open Sans Condensed', sans-serif;
    font-family: 'Josefin Sans', sans-serif;

}
.encabezado{
    display: block; 
    margin: 0 auto;
    color: white;
    font-family: 'Oswald', sans-serif;
    font-size:'Medium';
}
.DivDescarga a:hover{
    background-color: #00bcd4;
    width: 90px;
    height: 50px;
    text-align: center;
}
</style>
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
    #filtros{

    }
    #formato{
        color: #000;

    }
    #baner{
        display: block;
        margin: 0 auto;
        width: 70%;
        height: 300px;
    }
    .bordes{
        display: block;
        margin: 0 auto;
        border-style: solid;
        border-color: #f2efef;
        border-width: 1px;
        padding: 5px;
        margin-bottom: 10px;
    }
    #perfil{
        display: block;
        margin: 0 auto;
        color: #fff;
        background-color: #000d5a;
    }
    .images{
        height: 50px;
        width: 30%;
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

    }</style>
<div class="container-fluid">
    <?php
        foreach ($Noticia->result() as $noti) {
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row card-title degradado_lineal ">
                            <h3  class="encabezado">
                                <?php echo $noti->Titulo;?></h1><hr>
                                <span ><p style="color:white;" align="right"><i class="fa fa-check" style="margin-right:10px;"></i>Publicado por <?= $noti->Nombre?></p>
                                <span><p style="color:white;" align="right"><i class="fa fa-calendar" style="margin-right:10px;"></i> Fecha de publicación <?= $noti->Fecha?></p><br></span></p><br></span>   
                        </div>
                        
                        <div class="card-body">

                            <div class="profiletimeline">

                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                        <div class="col-md-11 col-xs-12 contenido ">
                                                         <div>
                                                             <?php echo $noti->Contenido;?>
                                                        </div>
                                                        <div class="DivDescarga">
                                                        <img src="<?= base_url()?>plantilla/img_anuncios/<?php echo $noti->Imagen;?>">
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
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function(){
    });
</script>
            
        <?php } ?>
    </div>
<hr>