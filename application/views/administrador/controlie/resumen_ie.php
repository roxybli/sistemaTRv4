<?php //include_once"header.php"; ?>
            <!-- Bread crumb -->
<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>controlie"><h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Resumen de ingresos y egresos </h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingreso y egresos</a></li>
            <li class="breadcrumb-item active">Resumen</li>
        </ol>
    </div>
</div>
<!-- End Bread crumb -->
<!-- Container fluid  -->
<div class="container-fluid">
<div class="row">
	<table class="table negociosD">
     <tr>
         <th  style="color:#fff">Elemento</th>
         <th  style="color:#fff">Enero</th>
         <th  style="color:#fff">Febrero</th>
         <th  style="color:#fff">Marzo</th>
         <th  style="color:#fff">Abril</th>
         <th  style="color:#fff">Mayo</th>
         <th  style="color:#fff">Junio</th>
         <th  style="color:#fff">Julio</th>
         <th  style="color:#fff">Agosto</th>
         <th  style="color:#fff">Septiembre</th>
         <th  style="color:#fff">Octubre</th>
         <th  style="color:#fff">Noviembre</th>
         <th  style="color:#fff">Diciembre</th>
     </tr>
     <tr>
         <td class="text-center"  style="background: #000d5a; color:#fff">Ingreso</td>
     </tr>
    <?php 
        foreach ($ingresos->result() as $ingreso)
        {
        
     ?>
        <tr>
            <td>
                <?= $ingreso->Nombre_Ingreso;?>
            </td>
        </tr>

     <?php } ?>

     <tr>
         <td class="text-center"  style="background: #000d5a; color:#fff">Egreso</td>
     </tr>
    <?php 
        foreach ($egresos->result() as $egreso)
        {
        
     ?>
        <tr>
            <td><?= $egreso->Nombre_Egreso ?></td>
        </tr>

     <?php } ?>

    </table>
</div>
</div>
<!-- End Container fluid  -->
