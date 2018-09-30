<div class="container-fluid">
    <?php

        foreach ($Anuncios->result() as $publicacion) {
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="profiletimeline">
                                  <div class="sl-item">
                                    
                                        <div class="sl-right">
                                            <div><div  class="alert alert-success""><a href="#" class="link"><?php echo $publicacion->Titulo;?></a></div> 
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12"><img alt="user" style="height:200px;" class="img-responsive radius"  src="<?=base_url() ?>plantilla/img_anuncios/<?php 
                                                                    if($publicacion->Imagen==""){
                                                                        echo "LogoCiudadMujer.png";
                                                                    }
                                                                    else{echo $publicacion->Imagen;}?>"/></div>
                                                        <div class="col-md-9 col-xs-12 alert" >
                                                            <p style="color:#000;"> <?php echo $publicacion->Contenido;?></p>
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
            
        <?php } ?>

<hr>