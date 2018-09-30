<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="#"><h3 class="text-primary"><i class="fa fa-home"></i> Control de ingresos y egresos</h3></a>
    </div>
    <div class="col-md-7 align-self-center">
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
                <p><h4 id="">Ingrese las cantidades correspondientes </h4> <a href="<?= base_url() ?>controlie/balances">Ver Balances</a></p>
            </div>
            <div class="card-body">
                <div id="cabeceraIE">
                    <form class="form-valide">                                    
                    <!--/row-->
                        <div class="row ">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="cantidadIngresos" name="" min="0" placeholder="Cantidad de ingresos" onkeypress="return numeros(event, 'num')" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="cantidadEgresos" name="" min="0" placeholder="Cantidad de egresos" onkeypress="return numeros(event, 'num')" required>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="fechaIE" name="fechaIE" placeholder="Fecha" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="input-group">
                                        <button type="button" id="procesarIE" class="btn btn-primary btn-flat "><i class="fa fa-share-square-o f-s-20"></i> Empezar</button>
                                    </div>
                                </div>
                            </div>

                            <!--/span-->
                        </div>
                        <!--/row-->

                        
                    </form>
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
                                            <input type="number" class="form-control" id="" name="ingresosD[]" value="0" placeholder="Precio del ingreso" required>
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
                     if ($egresosF->Estado_Egreso=="Pendiente")
                         {
                             echo  '<input type="hidden" value="'.$egresosF->Pk_Id_Egreso.'" class="form-control" id="" name="estadoE[]" placeholder="">';
                         }
                         else
                         {
                             echo  '<input type="hidden" value="1" class="form-control" id="" name="estadoE[]" placeholder="">';

                         }
                     echo '             </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="input-group">';

                    if ($egresosF->Estado_Egreso == "Pendiente")
                    {
                       echo '<input type="text" class="form-control" id="" name="egresosD[]" value="'.$egresosF->Cantidad_Egreso.'">';
                    }
                    else
                    {
                        echo '<input type="number" class="form-control" id="" name="egresosD[]" value="0">';
                    }
                    echo '                  </div>
                                    </div>
                                </div>
                        </div>';
                }
            } 
            
            ?>
			</form>
                    
            </div>
        </div>
    </div>
</div> 
</div>