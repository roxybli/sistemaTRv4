<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/productos_disponibles"><h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>

     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Productos en proceso</h3>
     </div>

    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Productos en proceso</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title text-right">
                <a target="_blank" href="<?= base_url() ?>inventario/reporteInventarioEnProceso" class="btn btn-danger"> Ver en PDF</a>
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
                    <table class="table negociosD" id="inventarioProductosProceso">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Lugar</th>
                                <th>Estado</th>
                                <th>Creado Por</th>
                                <th>Acción</th>
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
                                <td><?= $filaProducto->Nombre. " ". $filaProducto->Apellido ?></td>
                                <td>                                
                                        <div class="dropdown" align="center">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?= base_url() ?>inventario/actualizarProducto?e=<?= $filaProducto->PK_Id_Inventario ?>"><i class="fa fa-edit fa-lg"></i> Terminar</a></li>
                                            </ul>
                                        </div>
                                    </td>

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
    $('#inventarioProductosProceso').DataTable();
} );
</script>