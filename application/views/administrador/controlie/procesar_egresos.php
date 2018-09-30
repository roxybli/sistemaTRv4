<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="#"><h3 class="text-primary">Control de ingresos y egresos</h3></a>
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
                <h4 id="">Validando egresos </h4>
            </div>
            <div class="card-body">
                
                <form class="form-valide" method="post" action="<?= base_url() ?>controlie/dEgreso" id="" > 
                <input type="hidden" name="fechaEgresos" value="<?= $fecha ?>">
                    <div class="row">
                        <div class="col-md-3">
                    <?php
                        $totalIngresos=0;
                        foreach ($ingresos->result() as $ingresosF)
                        {
                        }
                            $totalIngresos = $ingresosF->Total_Ingreso;
                        echo '<input type="text" name="totalIngresos" class="form-control" value='.$totalIngresos.'>';
                    ?> 
                        </div>

                        <div class="col-md-3">
                            <select name="egresoS" class="form-control">
                            <?php
                                foreach ($egresos->result() as $egresosF)
                                {
                                    if ($egresosF->Estado_Egreso == "Pendiente" && $egresosF->Cantidad_Egreso > 0)
                                    {
    
                            ?>
                                <option value="<?= $egresosF->Pk_Id_Egreso ?>"><?= $egresosF->Nombre_Egreso ?></option>
                            <?php    
                                    }
                                }
                            ?>
                            </select>
                        </div>

                        <div class="col-md-3">
                            <button class="btn btn-primary form-control">Validar</button>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= base_url() ?>controlie/"><span class="btn btn-primary">Terminar</span></a>
                        </div>
                    </div>
    			</form>
                    
            </div>
        </div>
    </div>
</div> 
</div>