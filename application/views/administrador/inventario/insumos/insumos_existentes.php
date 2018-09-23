<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?=base_url() ?>inventario/"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver a pagina principal</h3></a>
     </div>
    <div class="col-md-7 align-self-center">
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
                <h4>Insumos existentes </h4>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" id="insumoB" name="" placeholder="Insumo a buscar">  
                        <div class="input-group-addon">
                        <a href="<?= base_url() ?>insumos/" title="Agregar Insumo"><button class="btn btn-primary"><i class="fa fa-plus f-s-20"></i></button></a>
                        </div>
	                </div>
	            </div>
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
                    <table class="table" id="insumosE">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Nombre del insumo</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Medida</th>
                                <th>Tipo</th>
                                <th>Operación</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            foreach ($insumos->result() as $filaInsumos)
                            {
                           ?> 
                               <tr>
                                    <td>
                                        
                                    </td>
                                    <td class="text-primary"><span><?= $filaInsumos->Nombre_Insumo ?></span></td>
                                    <td class="text-primary"><span><?= $filaInsumos->Existencia_Insumo ?></span></td>
                                    <td class="text-primary"><span><?= $filaInsumos->Precio_Insumo ?></span></td>
                                    <td class="text-primary"><span><?= $filaInsumos->Medida_Insumo ?></span></td>
                                    <td class="text-primary"><span><?= $filaInsumos->Nombre_Tipo ?></span></td>
                                    <td>                                
                                        <div class="dropdown" align="center">
                                            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?= base_url() ?>insumos/datosInsumo?i=<?= $filaInsumos->PK_Id_Insumo?>"><i class="fa fa-edit fa-lg"></i> Editar</a></li>
                                                <li><a href="<?= base_url() ?>insumos/eliminarInsumo?i=<?= $filaInsumos->PK_Id_Insumo?>"><i class="fa fa-trash-o fa-lg"></i> Eliminar</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="text-primary"><span></span></td>
                                    
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
