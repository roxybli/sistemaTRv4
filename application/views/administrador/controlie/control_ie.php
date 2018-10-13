<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
    <a href="<?=base_url() ?>controlie/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>
     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Control de ingresos y egresos </h3>
     </div>
    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresos y egresos</a></li>
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
                <div id="cabeceraIE">
                    <form class="form-valide">                                    
                    <!--/row-->
                        <div class="row ">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <strong><label>Cantidad de Ingresos</label></strong>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="cantidadIngresos" name="" min="0" placeholder="Cantidad de ingresos" onkeypress="return numeros(event, 'num')" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label>Cantidad de egresos</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="cantidadEgresos" name="" min="0" placeholder="Cantidad de egresos" onkeypress="return numeros(event, 'num')" required>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                <label>Fecha</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="fechaIE" name="fechaIE" placeholder="Fecha" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                <label></label>
                                    <div class="input-group">
                                        <button type="button" id="procesarIE" class="btn btn-primary btn-flat "><i class="fa fa-share-square-o f-s-20"></i> Empezar</button>
                                    </div>
                                </div>
                            </div>

                            <!--/span-->
                        </div>
                        <!--/row-->

                        
                    </form>
                    <hr>
                </div>

            <form class="form-valide" method="post" action="<?= base_url() ?>controlie/guardarDatos" id="tablaIE" >  
            <?php
                //Ingresos Existentes
            if (sizeof($ingresos->result()) > 0)
            {
                echo '<p class="text-warning" >Ingresos ya existentes</p>';
                foreach ($ingresos->result() as $ingresosF)
                {
                ?>
                        <div class="row ">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" value="<?= $ingresosF->Nombre_Ingreso ?>" class="form-control" id="" name="ingresosN[]"  placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="" name="ingresosD[]" value=""  onkeypress="return numeros(event, 'num')" required>
                                        </div>
                                    </div>
                                </div>
                        </div>
                 <?php
                }
            }    
                //Egresos Existentes
            if (sizeof($ingresos->result()) > 0)
            {
                echo '<p class="text-warning" >Egresos ya existentes</p>';
                foreach ($egresos->result() as $egresosF)
                {

                    echo '<div class="row ">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">';
                     echo  '               <input type="text" value="'.$egresosF->Nombre_Egreso.'" class="form-control" id="" name="egresosN[]" placeholder="">';

                     echo '             </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">';
                    echo  '               <input type="text" value=" " class="form-control" id="" name="egresosD[]" onkeypress="return numeros(event, \'num\')"  placeholder="">';
                    echo '                  </div>
                                    </div>
                                </div>
                        </div>';
                }
            } 
            
            ?>
                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Iniciar proceso</button>
			</form>
                    
            </div>
        </div>
    </div>
</div> 
</div>