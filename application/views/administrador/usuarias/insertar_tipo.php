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
                        <div class="card">
                                <div class="card-title">
                                    <h4>Insertar un nuevo tipo de usuarias</h4>
                                </div>
                                <div class="form-validation">
                                        <!-- Bread crumb -->
                                                    <form class="form-valide" method="POST" action="<?= base_url() ?>Emprendedoras/registro_tipo" enctype="multipart/form-data" form="formAnuncio" id="formAnuncio">                                    
                                                        <div class="row ">
                                                         <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="input-group">
                                                                        <input type="text" class="form-control" id="val-name " name="tipo" placeholder="Nombre del tipo" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <!--/span-->
                                                            <!--/span--> 
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i>Guardar</button>
                                                       
                                                    </form>
                                        <!-- End Bread crumb -->
                                </div>
                                </div>
                        </div>
                    </div>
                </div>