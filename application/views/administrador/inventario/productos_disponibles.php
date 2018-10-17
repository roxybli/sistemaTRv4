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
<<<<<<< HEAD
            <div class="card-title" >
                <p><a href="<?= base_url() ?>/inventario/productosProceso" class="btn btn-info">Ver productos en proceso</a>
                <a href="<?= base_url() ?>/inventario/ventasRealizadas" class="btn btn-info">Ventas realizadas</a>
                <a target="_blank" href="<?= base_url() ?>inventario/reporteInventario" class="btn btn-danger"> Ver en PDF</a></p>
=======
            <div class="card-title">
                <p><a href="<?= base_url() ?>/inventario/productosProceso" class="btn btn-info">Ver productos en proceso</a>
                <a href="<?= base_url() ?>/inventario/ventasRealizadas" class="btn btn-info">Ventas realizadas</a></p>
>>>>>>> pr/1
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
<<<<<<< HEAD
                    <table class="table negociosD cell-border" id="inventarioProductos">
=======
                <a target="_blank" href="<?= base_url() ?>inventario/reporteInventario" class="btn btn-danger btn-sm"> Ver en PDF</a>
                    <table class="table negociosD">
>>>>>>> pr/1
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Lugar</th>
                                <th>Estado</th>
                                <th>Creado Por</th>
                                <th>Opción</th>
<<<<<<< HEAD
=======
                                <th></th>
>>>>>>> pr/1
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
<<<<<<< HEAD
=======
                                <td></td>
>>>>>>> pr/1
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

<<<<<<< HEAD
<script type="text/javascript">
    $(document).ready(function() {
    $('#inventarioProductos').DataTable();
} );
</script>
=======
>>>>>>> pr/1
