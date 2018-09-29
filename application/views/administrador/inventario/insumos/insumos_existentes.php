<div class="row page-titles" style="background:#000d5a;">
    <div class="col-md-4 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>
     <div class="col-md-5 align-center">
        <h3 style="color: #fff">Insumos disponibles </h3>
     </div>
    <div class="col-md-3 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Insumos</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>

<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <!--<div class="form-group">
                    <div class="input-group">
                        <a href="" title="Buscar Insumo"><button class="btn btn-primary"><i class="fa fa-search f-s-20"></i></button></a>
                        <input type="text" class="form-control" id="insumoB" name="" placeholder="Insumo a buscar">  
                        <div class="input-group-addon">
                        <a href="<?= base_url() ?>insumos/" title="Agregar Insumo"><button class="btn btn-primary"><i class="fa fa-plus f-s-20"></i></button></a>
                        </div>
                    </div>
                </div>-->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                <?php 
                 if (sizeof($insumos->result()) == 0)
                    {
                        echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                    }
                    else
                    {

                ?>
                <div class="text-right">
                <a href="<?= base_url() ?>insumos/" title="Agregar Insumo"><button class="btn btn-primary"><i class="fa fa-plus f-s-20"></i> Agregar nuevo insumo</button></a>
                <a target="_blank" href="<?= base_url() ?>insumos/reporteInsumos" class="btn btn-danger"> Ver en PDF</a>
                </div>
                    <table class="table negociosD text-cell" id="inventarioInsumos">
                        <thead>
                            <tr>
                                <th>Nombre del insumo</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Medida</th>
                                <th>Tipo</th>
                                <th>Operación</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($insumos->result() as $filaInsumos)
                            {
                           ?> 
                               <tr>
                                    <td><span><?= $filaInsumos->Nombre_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Existencia_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Precio_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Medida_Insumo ?></span></td>
                                    <td><span><?= $filaInsumos->Nombre_Tipo ?></span></td>
                                    <td>                                
                                        <div class="dropdown" align="center">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?= base_url() ?>insumos/datosInsumo?i=<?= $filaInsumos->PK_Id_Insumo?>"><i class="fa fa-edit fa-lg"></i> Editar</a></li>
                                                <li><a href="<?= base_url() ?>insumos/eliminarInsumo?i=<?= $filaInsumos->PK_Id_Insumo?>"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a></li>
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
    $('#inventarioInsumos').DataTable();
} );
</script>