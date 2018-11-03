<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>capital/negocios"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
    </div>

     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Negocios Disponibles</h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Capital inicial</a></li>
            <li class="breadcrumb-item active">negocios</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
    <div class="card">
        <div class="card-title">
        </div>
        <div class="card-body">
        <?php 
        if (sizeof($datos->result()) == 0 )
        {
          echo '<h3 class="text-danger text-center">No hay datos que mostrar</h3>';
        }
        else
        {
        ?>
            <table class="table table-bordered negociosD" id="resumenSubrubros">
                <thead>
                    <tr>
                        <th  class="text-center" style="color: #000000" >Nombre del negocio</th>
                        <th  class="text-center" style="color: #000000">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        foreach ($datos->result() as $subrubros) {
                    ?>
                    <tr>
                        <td class="text-center"><?= $subrubros->Nombre_Subrubro ?></td>
                        <td   class="text-center"><a class="text-danger" href="<?= base_url() ?>capital/detalleNegocio/<?= $subrubros->PK_Id_Subrubro ?>">Ver detalles</a></td>
                    </tr>
                    <?php } }?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
    $('#resumenSubrubros').DataTable();
} );
</script>

