<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver a pagina principal</h3></a>
     </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Productos disponibles</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <p><a href="<?= base_url() ?>/inventario/productosProceso" class="btn btn-info">Ver productos en proceso</a>
                <a href="<?= base_url() ?>/inventario/ventasRealizadas" class="btn btn-info">Ventas realizadas</a></p>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                <?php 
                    if (sizeof($datos->result()) == 0) 
                    {
                        echo '<h3 class="text-danger">No hay productos que mostrar !!!</h3>';
                    }
                    else
                    {
                ?>
                <a target="_blank" href="<?= base_url() ?>inventario/reporteInventario" class="btn btn-danger btn-sm"> Ver en PDF</a>
                    <table class="table negociosD">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Lugar</th>
                                <th>Estado</th>
                                <th>Creado Por</th>
                                <th>Opción</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                            foreach ($datos->result() as $filaProducto)
                            {
                        ?>
                            <tr>
                                <td>
                                    
                                </td>
                                <td><?= $filaProducto->Nombre_Producto ?></td>
                                <td><?= $filaProducto->Existencia_Producto ?></td>
                                <td>$<?= $filaProducto->Precio_Producto ?></td>
                                <td><?= $filaProducto->Lugar_Existencia?></td>
                                <td><?= $filaProducto->Estado?></td>
                                <td><?= $filaProducto->Nombre. " ". $filaProducto->Apellido?></td>
                                <td><a href="<?= base_url() ?>inventario/vender_producto/<?= $filaProducto->PK_Id_Inventario ?>" class="text-primary">Vender</a></td>
                                <td></td>
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

