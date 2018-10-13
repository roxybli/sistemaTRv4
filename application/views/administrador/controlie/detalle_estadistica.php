<style>
table{
   background-color: rgba(0, 13, 90, 0.2);
}
.barra{
    padding: 7px;
    color: rgba(0, 13, 90, 0);
}
table td{
    width: 100px;
}
</style>
<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>controlie/estadisticaMensualIE"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Detalle estadistica </h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Estadisticas</a></li>
            <li class="breadcrumb-item active">detalle</li>
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
                       echo '<h3 class="text-danger text-center">No hay ingresos que mostrar</h3>';
                    }
                    else
                    {
                ?>
                    <table class="negociosD" cellpadding="10">
                        <tr>
                            <th colspan="12" class="text-center" style="color:#fff">ESTADISTICA DE INGRESOS</th>
                        </tr>
                        <?php 
                            foreach ($ingresos->result() as $ingresos)
                            {
                        ?>
                        <tr>
                            <td colspan="2" class="text-left"  style="color:#000d5a"><?= $ingresos->Nombre_Ingreso." ($".$ingresos->Cantidad_Ingreso.")" ?></td>
                        <?php 
                            switch ($ingresos->Total) {
                                case (($ingresos->Total >= 0) && ($ingresos->Total <= 100)):
                                    echo '<td colspan="" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 100) && ($ingresos->Total <= 200)):
                                    echo '<td colspan="2" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 200) && ($ingresos->Total <= 300)):
                                    echo '<td colspan="3" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 300) && ($ingresos->Total <= 400)):
                                    echo '<td colspan="4"  class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 400) && ($ingresos->Total <= 500)):
                                    echo '<td colspan="5" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;

                                case (($ingresos->Total > 500) && ($ingresos->Total <= 600)):
                                    echo '<td colspan="6"  class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 600) && ($ingresos->Total <= 700)):
                                    echo '<td colspan="7" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 700) && ($ingresos->Total <= 800)):
                                    echo '<td colspan="8" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 800) && ($ingresos->Total <= 900)):
                                    echo '<td colspan="9" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($ingresos->Total > 900) && ($ingresos->Total <= 1000)):
                                    echo '<td colspan="10" class="text-left"><div class="barra" style="border-left:'.$ingresos->Cantidad_Ingreso.'px solid #acc90d">d</div></td>';
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                        ?>
                            
                        </tr>

                        <?php } ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right" style="color:#000d5a">$100</td>
                            <td class="text-right" style="color:#000d5a">$200</td>
                            <td class="text-right" style="color:#000d5a">$300</td>
                            <td class="text-right" style="color:#000d5a">$400</td>
                            <td class="text-right" style="color:#000d5a">$500</td>
                            <td class="text-right" style="color:#000d5a">$600</td>
                            <td class="text-right" style="color:#000d5a">$700</td>
                            <td class="text-right" style="color:#000d5a">$800</td>
                            <td class="text-right" style="color:#000d5a">$900</td>
                            <td class="text-right" style="color:#000d5a">$1000</td>
                        </tr>

                    </table>    
                    <?php } ?>

                        <p></p>
                     <?php 
                    if (sizeof($egresos->result())==0)
                    {
                       echo '<h3 class="text-danger text-center">No hay egresos que mostrar</h3>';
                    }
                    else
                    {
                ?>
                    <table class="negociosD" cellpadding="10">
                        <tr>
                            <th colspan="12" class="text-center" style="color:#fff">ESTADISTICA DE INGRESOS</th>
                        </tr>
                        <?php 
                            foreach ($egresos->result() as $egresos)
                            {
                        ?>
                        <tr>
                            <td colspan="2" class="text-left"  style="color:#000d5a"><?= $egresos->Nombre_Egreso." ($".$egresos->Cantidad_Egreso.")" ?></td>
                        <?php 
                            switch ($egresos->Total) {
                                case (($egresos->Total >= 0) && ($egresos->Total <= 100)):
                                    echo '<td colspan="" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 100) && ($egresos->Total <= 200)):
                                    echo '<td colspan="2" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 200) && ($egresos->Total <= 300)):
                                    echo '<td colspan="3" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 300) && ($egresos->Total <= 400)):
                                    echo '<td colspan="4"  class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 400) && ($egresos->Total <= 500)):
                                    echo '<td colspan="5" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;

                                case (($egresos->Total > 500) && ($egresos->Total <= 600)):
                                    echo '<td colspan="6"  class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 600) && ($egresos->Total <= 700)):
                                    echo '<td colspan="7" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 700) && ($egresos->Total <= 800)):
                                    echo '<td colspan="8" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 800) && ($egresos->Total <= 900)):
                                    echo '<td colspan="9" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                case (($egresos->Total > 900) && ($egresos->Total <= 1000)):
                                    echo '<td colspan="10" class="text-left"><div class="barra" style="border-left:'.$egresos->Cantidad_Egreso.'px solid #acc90d">d</div></td>';
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                        ?>
                            
                        </tr>

                        <?php } ?>

                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right" style="color:#000d5a">$100</td>
                            <td class="text-right" style="color:#000d5a">$200</td>
                            <td class="text-right" style="color:#000d5a">$300</td>
                            <td class="text-right" style="color:#000d5a">$400</td>
                            <td class="text-right" style="color:#000d5a">$500</td>
                            <td class="text-right" style="color:#000d5a">$600</td>
                            <td class="text-right" style="color:#000d5a">$700</td>
                            <td class="text-right" style="color:#000d5a">$800</td>
                            <td class="text-right" style="color:#000d5a">$900</td>
                            <td class="text-right" style="color:#000d5a">$1000</td>
                        </tr>

                    </table>    
                    <?php } ?>


                </div>
            </div> 
        </div>
    </div>
</div>


