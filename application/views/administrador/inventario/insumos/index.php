<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <a href="<?=base_url() ?>insumos/insumosExistentes"> <h3 class="text-primary"> <i class="fa fa-chevron-left"></i> Atras</h3></a>
     </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Recetas de productos</a></li>
            <li class="breadcrumb-item active">home</li>
        </ol>
    </div>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-title">
                <h4>Nuevos Insumos </h4>
            </div>
            <div class="card-body">
                <div id="cabeceraReceta">
                    <form class="form-valide" action="#">                                    
                    <!--/row-->
                        <div class="row ">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" class="form-control" min="1" id="cantidadInsumos" onkeypress="return numeros(event, 'num')" name="" placeholder="Cantidad de insumos" required>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                        </div>
                        <!--/row-->

                        <button type="button" id="numeroInsumos" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Aceptar</button>
                    </form>
                </div>

            <form class="form-valide" method="post" action="<?= base_url() ?>insumos/guardarInsumos" id="tablaInsumos">
			</form>
                    
            </div>
        </div>
    </div>
</div> 
</div>
<script type="text/javascript">
	/*function operar()
	{
		var datos = '';
		datos += '<div class="row">';
        datos += '<div class="col-md-6">';
        datos +=    '<div class="form-group">';
        datos +=       '<div class="input-group">';
        datos +=           '<input type="text" class="form-control" id="" name="" placeholder="Nombre del insumo">';
        datos +=        '</div>';
        datos +=   ' </div>';
        datos +='</div>';

        datos +='<div class="col-md-6">';
        datos +=    '<div class="form-group">';
        datos +=        '<div class="input-group">';
        datos +=            '<input type="text" class="form-control" id="" name="" placeholder="Cantidad del insumos">';
        datos +=        '</div>';
        datos +=    '</div>';
        datos += '</div>';
        datos +='</div>';
    	datos += '<button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30"><i class="fa fa-share-square-o f-s-20"></i> Guardar receta</button>';
		
	alert(datos);
	}*/
</script>