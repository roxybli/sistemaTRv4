<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>controlie/resumenIE"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Ingresos y egresos </h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Resumen de ingresos y egresos</a></li>
            <li class="breadcrumb-item active">detalles</li>
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
                <?php 
                    if (sizeof($ingresos->result())==0)
                    {
                       echo '<h3 class="text-danger text-center">No hay datos que mostrar</h3>';
                    }
                    else
                    {
                ?>
                    <table class="table table-bordered negociosD">
                        <tr>
                            <th colspan="2" class="text-center" style="color:#fff">INGRESOS</th>
                        </tr>
                        <tr >
                            <td class="text-center">Nombre</td>
                            <td class="text-center">Monto</td>
                        </tr>

                        <?php 
                        $totalI=0;
                            foreach ($ingresos->result() as $ingresos)
                            {
                        ?>
                            <tr>
                                <td class="text-center"><?= $ingresos->Nombre_Ingreso?></td>
                                <td class="text-center">$<?= $ingresos->Cantidad_Ingreso ?></td>
                            </tr>
                        <?php $totalI = $totalI + $ingresos->Cantidad_Ingreso;  } ?>
                        <tr style="background-color: rgba(0, 13, 90, 0.2)">
                            <td class="text-center">Total de ingresos</td>
                            <td class="text-center">$<?= $totalI ?></td>
                        </tr>

                        <tr>
                            <th colspan="2" class="text-center" style="color:#fff">EGRESOS</th>
                        </tr>
                        <tr>
                            <td class="text-center">Nombre</td>
                            <td class="text-center">Monto</td>
                        </tr>
                        <?php 
                        $totalE=0;
                            foreach ($egresos->result() as $egresos)
                            {
                        ?>
                            <tr>
                                <td class="text-center"><?= $egresos->Nombre_Egreso?></td>
                                <td class="text-center">$<?= $egresos->Cantidad_Egreso ?></td>
                            </tr>
                        <?php $totalE = $totalE + $egresos->Cantidad_Egreso;  } ?>
                        <tr style="background-color: rgba(0, 13, 90, 0.2)">
                            <td class="text-center">Total de egresos</td>
                            <td class="text-center">$<?= $totalE ?></td>
                        </tr>

                        

                    </table>    
                    <?php } ?>

                </div>
            </div> 
        </div>
    </div>
</div>


