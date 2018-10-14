<?php 
    foreach ($datos->result() as $filaCabecera)
    {}
?>
<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital/negocios"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Detalle del negocio <strong><?= $filaCabecera->Nombre_Subrubro   ?></strong></h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">detalle negocio</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<table class="table table-bordered negociosD" >
    <tr>
        <td colspan="4"><a href="<?= base_url() ?>capital/detalleNegocioPDF/<?= $filaCabecera->PK_Id_Subrubro ?>" class="btn btn-danger btn-sm" target="_blank">Ver en PDF</a></td>
    </tr>
    <tr>
        <th colspan="2" class="text-center" style="color:#fff"> Rubro: <strong><?= $filaCabecera->Nombre_Rubro ?></strong></th>
        <th colspan="2" class="text-center" style="color:#fff"> Producción mensual: <strong><?= $filaCabecera->Produccion_Mensual  ?></strong></th>
    </tr>
    <tr>
        <td class="text-center"><strong>Nombre</strong></td>
        <td class="text-center"><strong>Cantidad</strong></td>
        <td class="text-center"><strong>Precio unitario</strong></td>
        <td class="text-center"><strong>Costo</strong></td>
    </tr>
    <tr>
        <td colspan="4  " class="text-center"><h4>Equipamiento</h4></td>
    </tr>
    <tr>

    <?php 
    $totalE=0;
        foreach ($datos->result() as $filaCuerpoE)
        {
            if ($filaCuerpoE->Fk_Id_Categoria_Elemento == 1)
            {
                $totalE = $totalE + ($filaCuerpoE->Precio_Elemento * $filaCuerpoE->Cantidad_Elemento );
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoE->Nombre_Elemento  ?></td>
        <td class="text-center"><?= $filaCuerpoE->Cantidad_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoE->Precio_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoE->Precio_Elemento * $filaCuerpoE->Cantidad_Elemento  ?></td>
    </tr>

    <?php }} ?>
     <tr  class="totalCapital">
        <td colspan="3" class="text-center"><h6><strong>Total inversión en equipamiento</strong> </h6></td>
        <td class="text-center"><h6><strong>$<?= $totalE; ?> </strong></h6></td>
    </tr>

    <tr>
        <td colspan="4" class="text-center"><h4>Insumos</h4></td>
    </tr>
    <tr>

    <?php
    $totalI=0;
        foreach ($datos->result() as $filaCuerpoI)
        {
            if ($filaCuerpoI->Fk_Id_Categoria_Elemento == 2)
            {
                $totalI = $totalI + ($filaCuerpoI->Precio_Elemento * $filaCuerpoI->Cantidad_Elemento  );
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoI->Nombre_Elemento  ?></td>
        <td class="text-center"><?= $filaCuerpoI->Cantidad_Elemento  ?> <?= $filaCuerpoI->Medida_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoI->Precio_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoI->Precio_Elemento * $filaCuerpoI->Cantidad_Elemento  ?></td>
    </tr>

    <?php }} ?>
    <tr class="totalCapital">
        <td colspan="3" class="text-center"><h6><strong>Total inversión en insumos </strong></h6></td>
        <td class="text-center"><h6><strong>$<?= $totalI ; ?> </strong></h6></td>
    </tr>

    <tr class="alert-primary">
        <td colspan="3" class="text-center"><h6><strong>Inversión Total</strong></h6></td>
        <td class="text-center"><h6><strong>$<?= $totalE + $totalI ; ?> </strong></h6></td>
    </tr>

</table>
</div>

