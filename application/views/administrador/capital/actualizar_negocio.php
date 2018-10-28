<?php 
    foreach ($datos->result() as $filaCabecera)
    {}
?>
<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital/gestionarNegocio"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
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
<form action="<?= base_url() ?>capital/actualizarDatosNegocio" method="post">
    <table class="table table-bordered negociosD" >
    <tr>
        <th colspan="2" class="text-center" style="color:#fff"> Rubro: <strong><?= $filaCabecera->Nombre_Rubro ?></strong></th>
        <th colspan="2" class="text-center" style="color:#fff"> Producción estimada: <strong><?= $filaCabecera->Produccion_Mensual  ?></strong></th>
    </tr>
    <tr>
        <td class="text-center"><strong>Nombre</strong></td>
        <td class="text-center"><strong>Cantidad</strong></td>
        <td class="text-center"><strong>Precio unitario</strong></td>
        <td class="text-center"><strong>Opción</strong></td>
    </tr>

    <tr>

    <?php 
        foreach ($datos->result() as $filaCuerpoE)
        {
            $i = '"'.$filaCuerpoE->Pk_Id_Elemento_Subrubro.'"'; 
           
    ?>
    <tr>
        <td class="text-center"><?= $filaCuerpoE->Nombre_Elemento  ?></td>
        <td class="text-center"><input type="text" value="<?= $filaCuerpoE->Cantidad_Elemento  ?>" class="form-control text-center" name="cantidadElemento[]"></td>
        <td class="text-center"><input type="text" value="<?= $filaCuerpoE->Precio_Elemento ?>" class="form-control text-center" name="precioEquipamiento[]">
        <input type="hidden" value="<?= $filaCuerpoE->Pk_Id_Elemento_Subrubro ?>" class="form-control text-center" name="idEquipamiento[]">
        </td>
        <td class="text-center"><a onclick="alerta()" title="Eliminar" href="<?= base_url() ?>capital/eliminarElementoSubrubro/<?= $filaCuerpoE->Pk_Id_Elemento_Subrubro ?>/<?= $filaCuerpoE->Fk_Id_Subrubro ?>"><i class="fa fa-trash fa-lg"></i></a>
        </td>
    </tr>

    <?php } ?>

        <tr>
            <td colspan="4" class="text-center">
            <input type="hidden" value="<?= $filaCuerpoE->Fk_Id_Subrubro ?>" name="idSubrubro">
            <button class="btn-primary btn-lg">Actualizar datos</button>
            </td>
        </tr>
</table>
</form>
</div>
