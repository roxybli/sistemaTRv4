<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
<?php 
foreach ($registro->result() as $info2) {
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
                            <div class="card-title">
                                <h4>Registro de Usuarias </h4>
                                <h5><?php echo $info2->Nombre_Sede?></h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id Usuaria</th>
                                                <th>Nombre completo</th>
                                                <th>Usuaria</th>
                                                <th>Contraseña</th>
                                                <th>Direccion</th>
                                                <th>TIpo de Usuarias</th>
                                                <th>Telefono</th>
                                                <th>DUi</th>
                                                <th>Periodo de inactividad</th>
                                                <th colspan="2">Accion</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                                foreach ($registro->result() as $info) { 
                                                    echo "<tr>";  
                                                    echo "<td id='ni'>".$info->pk_Id_Usuaria."</td>";  
                                                    echo "<td id='nom'>".$info->Nombre." ".$info->Apellido."</td>";
                                                     
                                                    echo "<td id='depa'>".$info->Nom_User."</td>";
                                                    echo "<td id='cat'>".$info->Pass."</td>";
                                                    echo "<td id='cat'>".$info->Direccion."</td>";
                                                    echo "<td id='cat'>".$info->Tipo."</td>";
                                                    echo "<td id='cat'>".$info->Telefono."</td>";
                                                    echo "<td id='cat'>".$info->Dui."</td>";
                                                    $fechaActual = date("Y/m/d");
                                                    $fecha2=$info->Fecha_Actividad;
                                                     //$inicio = strtotime($fechaActual);
                                                    //$fecha5="2018/09/18";
                                                    $id=$info->pk_Id_Usuaria;
                                                    $inicio = strtotime($fechaActual);
                                                     $fin = strtotime($fecha2);
                                                     $dif = $inicio - $fin;
                                                     $diasFalt = (( ( $dif / 60 ) / 60 ) / 24);
                                                     //printf("el numero de dias que imprime es %d", $diasFalt);
                                                     if($diasFalt>60){
                                                        echo "<td id='cat'><span style='display:block;' class='alert alert-danger'>Dias inactivo: ".$diasFalt."</span></td>";
                                                        echo "<td><a onclick='Eliminar($id)' class='btn btn-danger m-b-10 m-l-5'><i style='color:white;' class='fa fa-trash-o' aria-hidden='true'></i></a></td>";
                                                        echo "<td><a class='btn btn-warning m-b-10 m-l-5'><i style='color:white;' class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>";
                                                     }
                                                     else{
                                                        echo "<td id='cat'><span style='display:block; color:white;' class='alert alert-success'>Dias inactivo: ".$diasFalt."</span></td>";
                                                        echo "<td><a class='disabled btn btn-danger m-b-10 m-l-5'><i style='color:white;' class='fa fa-trash-o' aria-hidden='true'></i></a></td>";
                                                        echo "<td><a class='btn btn-warning m-b-10 m-l-5'><i style='color:white;' class='fa fa-pencil-square-o' aria-hidden='true'></i></a></td>";

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
                <!-- End PAge Content -->
</div>
<script type="text/javascript">
    function Eliminar(id){
        var idU =id;
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
                document.location= '<?= base_url()?>Emprendedoras/eliminarUsuaria?id='+idU;
            }
            else {
                swal("Cancelado !!", "Proceso cancelado !!", "error");
            }
        });
    }
</script>
