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
                <p><h4 class="text-primary">Productos disponibles</h4>  <a href="<?= base_url() ?>/inventario/productosProceso" class="btn btn-info">Ver productos en proceso</a></p>
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Lugar</th>
                                <th>Estado</th>
                                <th>Creado Por</th>
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