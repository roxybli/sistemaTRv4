<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?= base_url() ?>controlie/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver</h3></a>
    </div>

    <div class="col-md-5 align-center">
        <h3 style="color: #fff">Balances disponibles </h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Ingresos y egresos</a></li>
            <li class="breadcrumb-item active">balances</li>
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
               <div class="table-responsive">
                <?php 
                 if (sizeof($datos->result()) == 0)
                    {
                        echo '<h3 class="text-danger">Usted no posee ningun balance !!!</h3>';
                    }
                    else
                    {

                ?>
                    <table class="table detalleB text-cell">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Fecha</th>
                                <th>Información</th>
                                <th>Operación</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $contador=0;
                            foreach ($datos->result() as $filaDatos)
                            {
                           ?> 
                               <tr>
                                    <td>
                                        
                                    </td>
                                    <td class="text-primary"><span><?= $filaDatos->Fecha_Balance ?></span></td>
                                    <td class="text-primary">Balance correspondiene a esta fecha</td>
                                    <td ><a href="<?= base_url() ?>controlie/detalleBalance?f=<?= $filaDatos->Fecha_Balance ?>" style="color: #000000">Ver detalles</a></td>
                                    <td><span></span></td>
                                    
                                </tr>
                        <?php    
                                  $contador++;
                                }
                            }

                         ?>
                        
                        </tbody>
                    </table>
                </div>
                    
            </div>
        </div>
    </div>
</div> 
</div>