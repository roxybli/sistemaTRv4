<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?= base_url() ?>capital/negocios"><h3 class="text-primary"><i class="fa fa-chevron-left"></i>Regresar</h3></a>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">detalle negocio</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<table class="table table-bordered negociosD">
    <tr class="alert-primary">
    <?php 
        foreach ($datos->result() as $filaCabecera)
        {}
    ?>
        <th class="text-center">Rubro: <strong> <?= $filaCabecera->Nombre_Rubro  ?></strong> </th>
        <th colspan="2" class="text-center"> </h4>Negocio: <strong><?= $filaCabecera->Nombre_Subrubro  ?></strong></h4></th>
    </tr>
    <tr>
        <td class="text-center"><strong>Nombre</strong></td>
        <td class="text-center"><strong>Cantidad</strong></td>
        <td class="text-center"><strong>Precio </strong></td>
    </tr>
    <tr>
        <td colspan="3" class="text-center"><h4>Maquinaria</h4></td>
    </tr>
    <tr>

    <?php 
    $totalE=0;
        foreach ($datos->result() as $filaCuerpoE)
        {
            if ($filaCuerpoE->Fk_Id_Categoria_Elemento == 1)
            {
                $totalE = $totalE + $filaCuerpoE->Precio_Elemento
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoE->Nombre_Elemento  ?></td>
        <td class="text-center"><?= $filaCuerpoE->Cantidad_Elemento  ?></td>
        <td class="text-center">$<?= $filaCuerpoE->Precio_Elemento  ?></td>
    </tr>

    <?php }} ?>
     <tr  class="totalCapital">
        <td colspan="2" class="text-center"><h6><strong>Total inversión en Maquinaria</strong> </h6></td>
        <td class="text-center"><h6><strong>$<?= $totalE; ?> </strong></h6></td>
    </tr>

    <tr>
        <td colspan="3" class="text-center"><h4>Insumos</h4></td>
    </tr>
    <tr>

    <?php
    $totalI=0;
        foreach ($datos->result() as $filaCuerpoI)
        {
            if ($filaCuerpoI->Fk_Id_Categoria_Elemento == 2)
            {
                $totalI = $totalI + $filaCuerpoI->Precio_Elemento
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoI->Nombre_Elemento  ?></td>
        <td class="text-center">--</td>
        <td class="text-center">$<?= $filaCuerpoI->Precio_Elemento  ?></td>
    </tr>

    <?php }} ?>
    <tr class="totalCapital">
        <td colspan="2" class="text-center"><h6><strong>Total inversión en insumos </strong></h6></td>
        <td class="text-center"><h6><strong>$<?= $totalI ; ?> </strong></h6></td>
    </tr>

    <tr class="alert-primary">
        <td colspan="2" class="text-center"><h6><strong>Inversión Total</strong></h6></td>
        <td class="text-center"><h6><strong>$<?= $totalE + $totalI ; ?> </strong></h6></td>
    <tr class="alert-primary">
        <td colspan="2" class="text-center"><h6><strong>Precios de insumos y maquinaria son de referencia segun estudio de Ciudad Mujer 2018</strong></h6></td>
        <td class="text-center"></td>
    </tr>    </tr>

</table>
</div>

