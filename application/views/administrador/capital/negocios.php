<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>

     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Elije uno de los rubros disponibles !!!</h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">negocios</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<<<<<<< HEAD
<div class="card">
            <div class="card-title">
            </div>
            <div class="card-body">
                <div id="">
                    <form method="post" action="<?= base_url() ?>capital/detalleCapital">
                        <div class="row">
                            <div class="col-md-10">
                                <select name="rubro" class="form-control" required>

                                    <option value="">Elija uno de los siguientes rubros </option>
                                <?php 

                                    foreach ($datos->result() as $filaDatos) {
                                       
                                    ?>
                                    <option value="<?= $filaDatos->PK_Id_Rubro?>"><?= $filaDatos->Nombre_Rubro ?></option>

                                <?php } ?>
                                </select>   
                                
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary">Siguiente <i class="fa fa-angle-double-right f-s-20"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
=======
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
    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Alimentos y Bebidas</th>
            </tr>

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

    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Textiles Confección</th>
            </tr>

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

    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Comercio</th>
            </tr>

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
    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Técnologia e innovación</th>
            </tr>

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

    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Quimica</th>
            </tr>

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

    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Artesanias</th>
            </tr>

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
    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Construcción</th>
            </tr>

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

    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Servicios</th>
            </tr>

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

    <!--    <div class="col-md-4 contenedorNegocios">
        <table class="table negociosT">
            <tr class="">
                <th colspan="2" class="text-center">Textiles </th>
            </tr>

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
    </div>-->
</div>

>>>>>>> pr/1
</div>

