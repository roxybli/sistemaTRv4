<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<?php 
foreach ($Guia->result() as $guia) {
}
?>
 <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Inicio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                        <li class="breadcrumb-item active">Nuevo usuaria</li>
                    </ol>
                    <a onclick=""></a>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
<div class="container-fluid">
    <div class="row">
                    <div class="col-lg-12">
                        
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gestion de guias multimedia</h4>
                                <h6 class="card-subtitle">Usted puede descargar los datos en los siguientes formatos copiar, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead >
                                            <tr>
                                                <th> Id Guia</th>
                                                <th>Titulo</th>
                                                <th>Publicada por</th>
                                                <th>Fecha de publicacion</th>
                                                <th>Tipo de publicacion</th>
                                                <th>Operacion</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id noticia</th>
                                                <th>Titulo</th>
                                                <th>Publicada por</th>
                                                <th>Fecha de publicacion</th>
                                                <th>Tipo de publicacion</th>
                                                <th>Operacion</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                                foreach ($Guia->result() as $guia){ 
                                                    echo "<tr>";  
                                                    echo "<td id='ni'>".$guia->pk_Id_Guia."</td>";  
                                                    echo "<td id='nom'>".$guia->Titulo_Guia."</td>";
                                                    echo "<td id='cat'>".$guia->Nombre."</td>";
                                                    echo "<td id='cat'>".$guia->Fecha_Publicacion."</td>";
                                                    echo "<td id='cat'>".$guia->Tipo_publicacion."</td>";
                                                    $id=$guia->pk_Id_Guia;
                                                    //INformacion para editar Noticia
                                                    $idUser1=$guia->FK_Id_Usuaria;
                                                    $idEdit=$guia->pk_Id_Guia;
                                                    $idTipo=$this->session->userdata('id_tipo');
                                                    $idUser2=$this->session->userdata('id');

                                                    echo '<td><div class="dropdown" align="center">
                                                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" data-toggle="dropdown"><i class="fa fa-cogs fa-lg"></i><span class="caret"></span></button>
                                                                <ul class="dropdown-menu">
                                                                    <li><a onclick="Eliminar('.$idUser1.', '.$idUser2.','.$idTipo.','.$idEdit.')"><i class="fa fa-trash-o"></i> Eliminar</a> </li>
                                                                     <li><a  onclick="Editar('.$idUser1.', '.$idUser2.','.$idTipo.','.$idEdit.')" ><i class="fa fa-pencil-square-o"></i> Editar</a> </li> 
                                                                      <li><a href="'.base_url().'Guias/VerGuia?id='.$id.'"><i class="fa fa-eye"></i> Ver Noticia </a> </li>                                 </ul>
                                                                </div></td>';
                                                     } 
                                            ?>  
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                </div>
                <!-- End PAge Content -->
</div>
<script type="text/javascript">
    function Eliminar(idUser1, idUser2, idTipo,idEdit){
        var idU =idEdit;
        if(idUser1==idUser2 || idTipo==1 ){
             swal({
            title: "Esta seguro que desea eliminar este registro ?",
            text: "Usted eliminara todos los registros pertenecietes a esta usuaria !!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si, Eliminar !!",
            cancelButtonText: "No, Cancelar !!",
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function(isConfirm){
            if (isConfirm) {
                swal("Eliminada!!", "Registro eliminado con exito !!", "success");
                document.location= '<?= base_url()?>Guias/eliminarGuia?id='+idU;
            }
            else {
                swal("Cancelado !!", "Proceso cancelado !!", "error");
            }
        });
        }
        else{
            sweetAlert("Accion no permitida", "Usted no posee permisos para Eliminar esta publicacion", "error");
        }
           }
    function Editar(idUser1, idUser2, idTipo,idEdit){

        if(idUser1==idUser2 || idTipo==1 ){
            document.location= '<?= base_url()?>Guias/editarGuia?id='+idEdit;
        }
        else{
            sweetAlert("Accion no permitida", "Usted no posee permisos para editar esta publicacion", "error");
        }
    }
</script>
