<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?=base_url() ?>inventario/consultar_receta"><h3 class="text-primary"><i class="fa fa-chevron-left"></i> Volver </h3></a>
     </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Receta de productos</a></li>
            <li class="breadcrumb-item active">detalles</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
            	<?php
                if (sizeof($datos->result())== 0)
                {
                    echo '<h3 class="text-danger">No hay datos que mostrar inserte nuevos datos !!!</h3>';
                }
                else
                {

            		foreach ($datos->result() as $filaProcedimientos)
                            {}
                
            	?>
                
                

                    <h4> Producto: <strong class="text-warning"><?= $filaProcedimientos->Nombre_Producto ?> $<?= $filaProcedimientos->Precio_Producto ?> C/U </strong></h4> 
                <div class="row">
                    <div class="col-md-6">
                        <input type="number" min="1" onkeypress="return numeros(event, 'num')" class="form-control" name="cantidadProducto" placeholder="Cuantos Productos creara ?" value="1" id="cantidadProducto">
                    </div>

                    <div class="col-md-6">
                        <input type="text" name="fechaProducto" class="form-control" id="fechaIE" name="" placeholder="Fecha" required>
                    </div>
                </div>
            </div>
            <div class="card-body">

            <form id="detalleProcedimiento" method="post" action="<?= base_url() ?>inventario/guardarProducto">               
            
            <input type="hidden" value="" id="CP" name="cantidadProducto">
            <input value="" type="hidden" id="FP" name="fechaProducto">
            <?php 
                foreach ($datos->result() as $fila)
                    {

                    }
            ?>
            <input type="hidden" id="" name="idProducto" value="<?= $fila->PK_Id_Producto ?>">

                
                    <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Materia Prima</th>
                                <th>Precio</th>
                                <th>Existencia</th>
                                <th>Requerida</th>
                                <th>Medida</th>
                                <th>Direccion</th>
                                <th></th>
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
                                <td><span><?= $filaProcedimientos->Nombre_Insumo ?></span></td>
                                <td><span><?= $filaProcedimientos->Precio_Insumo ?></span></td>
                                <td><input type="text" name="existenciaInsumo[]"  value="<?= $filaProcedimientos->Existencia_Insumo ?>"> <input type="hidden" name="idInsumos[]"  value="<?= $filaProcedimientos->PK_Id_Insumo?>"></td>
                                <td><span><input type="text" name="cantidadInsumo[]" value="<?= $filaProcedimientos->Cantidad_Insumo ?>" class="calc"></span></td>
                                <td><span><?= $filaProcedimientos->Medida_Insumo ?></span></td>
                                <td><span><?= $filaProcedimientos->Direccion ?></span></td>
                                <td><span><?= $filaProcedimientos->FK_Id_Insumo ?></span></td>
                            </tr>
                        
                        <?php       
                                }
                            }
                        ?>
                        </tbody>
                    </table>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Crear Producto nuevo</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>