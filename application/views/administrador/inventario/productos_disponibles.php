<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>

     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Productos terminados</h3>
     </div>

    <div class="col-md-3 align-self-center">
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
            <div class="card-title" >
                <p><a href="<?= base_url() ?>/inventario/productosProceso" class="btn btn-info">Ver productos en proceso</a>
                <a href="<?= base_url() ?>/inventario/ventasRealizadas" class="btn btn-info">Ventas realizadas</a>
                <a target="_blank" href="<?= base_url() ?>inventario/reporteInventario" class="btn btn-danger"> Ver en PDF</a></p>
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
                    <table class="table negociosD cell-border" id="inventarioProductos">
                        <thead>
                            <tr>
                                <th style="color: #000000">Producto</th>
                                <th style="color: #000000">Cantidad</th>
                                <th style="color: #000000">Precio</th>
                                <th style="color: #000000">Lugar</th>
                                <th style="color: #000000">Estado</th>
                                <th style="color: #000000">Creado Por</th>
                                <th style="color: #000000">Opción</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                            foreach ($datos->result() as $filaProducto)
                            {
                        ?>
                            <tr>
                                <td><?= $filaProducto->Nombre_Producto ?></td>
                                <td><?= $filaProducto->Existencia_Producto ?></td>
                                <td>$<?= $filaProducto->Precio_Producto ?></td>
                                <td><?= $filaProducto->Lugar_Existencia?></td>
                                <td><?= $filaProducto->Estado?></td>
                                <td><?= $filaProducto->Nombre. " ". $filaProducto->Apellido?></td>
                                <td><a href="<?= base_url() ?>inventario/vender_producto/<?= $filaProducto->PK_Id_Inventario ?>" class="text-primary">Vender</a></td>
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

<script type="text/javascript">
    $(document).ready(function() {
    $('#inventarioProductos').DataTable();
} );
</script>