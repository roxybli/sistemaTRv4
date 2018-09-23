<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?= base_url() ?>capital"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<h2 class="text-primary text-center">Emprende en los siguientes negocios</h2>
<?php 
    if (sizeof($datos->result()) == 0)
    {
        echo '<h3 class="text-danger">No hay negocios !!!</h3>';
    }
    else
    {
?>



<div class="row">
    <div class="col-md-4 contenedorNegocios1">
        <table class="table negociosT">
            <!--<tr class="">
                <th colspan="2" class="text-center">Alimentos y Bebidas</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Alimentos y Bebidas") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>

    <div class="col-md-4 contenedorNegocios2">
        <table class="table negociosT">
          <!--  <tr class="">
                <th colspan="2" class="text-center">Confección</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Textiles Confección") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>

    <div class="col-md-4 contenedorNegocios3">
        <table class="table negociosT">
          <!--  <tr class="">
                <th colspan="2" class="text-center">Comercio</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Comercio") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-4 contenedorNegocios4">
        <table class="table negociosT">
          <!--  <tr class="">
                <th colspan="2" class="text-center">Técnologia e innovación</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Técnologia e innovación") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>

    <div class="col-md-4 contenedorNegocios5">
        <table class="table negociosT">
          <!--  <tr class="">
                <th colspan="2" class="text-center">Química</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Quimica") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>

    <div class="col-md-4 contenedorNegocios6">
        <table class="table negociosT">
           <!-- <tr class="">
                <th colspan="2" class="text-center">Artesanias</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Artesanias") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-md-4 contenedorNegocios7">
        <table class="table negociosT">
           <!-- <tr class="">
                <th colspan="2" class="text-center">Construcción</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Construcción") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>

    <div class="col-md-4 contenedorNegocios8">
        <table class="table negociosT">
           <!-- <tr class="">
                <th colspan="2" class="text-center">Servicios</th>
            </tr>-->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Servicios") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}
             ?>
        </table>
    </div>

    <div class="col-md-4 contenedorNegocios9">
        <table class="table negociosT">
          <!--  <tr class="">
            <th colspan="2" class="text-center">Textiles </th>
            </tr> -->

            <?php 
                foreach ($datos->result() as $filaNegocio)
                {
                    if ($filaNegocio->Nombre_Rubro == "Comercio") {
                    
            ?>
            <tr>
                <td class="text-center"><?= $filaNegocio->Nombre_Subrubro ?></td>
                <td class="text-center"><a title="Ver detalles" class="btn btn-success text-center" href="<?= base_url() ?>capital/detalleNegocio?e=<?= $filaNegocio->PK_Id_Subrubro ?>"><i class="fa fa-eye"></i> </a></td>
            </tr>
            <?php 

                }}}
             ?>
        </table>
    </div>
</div>

</div>

