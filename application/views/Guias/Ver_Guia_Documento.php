<div class="container-fluid">
    <?php
        foreach ($Guias_list->result() as $Guias) {
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
                                            <div>
                                                <div class="m-t-20 row">
                                                    <div class="col-md-3 col-xs-12" style="background-color: #000d5a; padding: 20px;">
                                                        <img alt="user" style=" display: block; margin: 0 auto; height: 100px; width: 100px;" class="img-responsive radius"  src="<?=base_url() ?>plantilla/images/archivo.png"/>
                                                       
                                                    </div>
                                                        <div class="col-md-9 col-xs-12 alert">
                                                            <h1 style="color:#000;"> <?php echo $Guias->Titulo_Guia;?></h1><hr>
                                                            <a href="<?= base_url()?>Guias/VerGuia?id=<?php echo $Guias->pk_Id_Guia?>" class="btn btn-info"><i class="fa fa-eye fa-2x" style="margin: 10px;"></i>Ver Publicacion</a>
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
            

    </div>
<hr>

        <?php } ?>