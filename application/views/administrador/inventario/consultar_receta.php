<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver a pagina principal</h3></a>
     </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Recetas de productos</a></li>
            <li class="breadcrumb-item active">Existentes</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>Ultimos Productos </h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <?php 
                    if (sizeof($datos->result())==0)
                    {
                      echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>'; 
                    }
                    else
                    {

                ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Producto</th>
                                <th>Precio</th>
                                <th>Lugar</th>
                                <th>Creado Por</th>
                                <th>Opcion</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            foreach ($datos->result() as $filaProcedimientos)
                            {
                        ?>
                            <tr>
                                <td>
                                    
                                </td>
                                <td><span><?= $filaProcedimientos->Nombre_Producto ?></span></td>
                                <td><span>$<?= $filaProcedimientos->Precio_Producto ?></span></td>
                                <td><span><?= $filaProcedimientos->Direccion ?></span></td>
                                <td><span><?= $filaProcedimientos->Nombre ?></span></td>
                                <td><a href="<?= base_url() ?>inventario/detalleProcedimiento?e=<?= $filaProcedimientos->PK_Id_Producto ?>">Ver detalles</a></td>
                            </tr>
                        
                        <?php       
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