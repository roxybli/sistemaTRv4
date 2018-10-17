<<<<<<< HEAD
<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/productos_disponibles"><h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>

     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Ventas realizadas</h3>
     </div>

    <div class="col-md-3 align-self-center">
=======
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?=base_url() ?>inventario/productos_disponibles"><h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Regresar</h3></a>
     </div>
    <div class="col-md-7 align-self-center">
>>>>>>> pr/1
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Inventario</a></li>
            <li class="breadcrumb-item active">Ventas realizadas</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
<<<<<<< HEAD
            <div class="card-title text-right">
                     <a target="_blank" href="<?= base_url() ?>inventario/reporteVentas" class="btn btn-danger"> Ver en PDF</a>
=======
            <div class="card-title">
                <p><h4 class="text-primary">Productos en proceso </h4></p>
>>>>>>> pr/1
            </div>
            <div class="card-body">
                <div class="table-responsive">
                 <?php 
                    if (sizeof($datos->result())== 0) {
                        echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                    }
                    else
                    {
                ?>
<<<<<<< HEAD
                    <table class="table negociosD" id="ventasRealizadas">
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Total</th>
=======
                     <a target="_blank" href="<?= base_url() ?>inventario/reporteVentas" class="btn btn-danger btn-sm"> Ver en PDF</a>
                    <table class="table negociosD" style="width:800px; margin: 0 auto">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Monto</th>
>>>>>>> pr/1
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                            foreach ($datos->result() as $filaProducto)
                            {
                        ?>
                            <tr>
<<<<<<< HEAD
                                <td><?= $filaProducto->Nombre_Producto ?></td>
                                <td><?= $filaProducto->Cantidad_Venta ?></td>
                                <td>$<?= $filaProducto->Precio_Producto ?></td>
                                <td>$<?= $filaProducto->Cantidad_Venta * $filaProducto->Precio_Producto ?></td>
=======
                                <td>
                                    
                                </td>
                                <td><?= $filaProducto->Nombre_Producto ?></td>
                                <td><?= $filaProducto->Cantidad_Venta ?></td>
                                <td>$<?= $filaProducto->Precio_Producto * $filaProducto->Cantidad_Venta?></td>
>>>>>>> pr/1
                                <td><?= $filaProducto->Fecha_Venta ?></td>
                                
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
<<<<<<< HEAD
</div>

<script type="text/javascript">
    $(document).ready(function() {
    $('#ventasRealizadas').DataTable();
} );
</script>
=======
</div>
>>>>>>> pr/1
