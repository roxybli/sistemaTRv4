<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="#"><h3 class="text-primary"><i class="fa fa-home"></i> Calculo de capital inicial</h3></a>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
            </div>
            <div class="card-body">
                <div id="capitalRubros">
                <h4><a href="<?= base_url() ?>capital/negocios">Ver detalle negocios</a></h4>
                    <form method="" action="">
                        <div class="row">
                            <div class="col-md-10">
                                <select name="" class="form-control" id="idRubro" required>

                                    <option value="">Elija uno de los siguientes rubros </option>
                                <?php 
                                    foreach ($datos->result() as $filaDatos) {
                                       
                                    ?>
                                    <option value="<?= $filaDatos->PK_Id_Rubro?>"><?= $filaDatos->Nombre_Rubro ?></option>

                                <?php } ?>
                                </select>   
                                
                            </div>
                            <div class="col-md-2">
                                <button type="button" id="btnCapitalRubros" class="btn btn-primary">Siguiente <i class="fa fa-angle-double-right f-s-20"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

                 <div id="capitalSubrubro">
                    <form class="form-valide" method="" action="">                                    
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                       
                                        <input type="text" list="negocios" class="form-control" id="nombreSubrubro" name="" placeholder="Nombre de la actividad" required>
                                        <datalist id="negocios">
                                            <option value="Panaderia y Pasteleria">
                                            <option value="Restaurantes">
                                        </datalist>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="materiaComestible" min="0" name="" placeholder="Número de materia prima" onkeypress="return numeros(event, 'num')" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="maquinaria" name="" min="0" placeholder="Número de Maquinaria" onkeypress="return numeros(event, 'num')" required>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="button" class="btn btn-primary" id="btnProcesarElemntosSubrubro" name="" value="Aceptar">
                                        
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>


                <div id="elementosSubrubro">
                    <form action="<?= base_url() ?>capital/guardarDatosNegocio" method="post" id="elementoSR">
                         <div class="row">
                             <div class="col-md-12">
                                 <input type="hidden" value="" id="idRubroC" name="idRubroC">
                                 <p><h3 id="nombreRubroN" class="text-primary text-center"></h3></p>
                                 <input type="hidden" value="" id="nombreRubroE" name="nombreRubroE">
                             </div>
                         </div> 
                    </form>
                </div>


            </div>
        </div>
    </div>
</div> 
</div>