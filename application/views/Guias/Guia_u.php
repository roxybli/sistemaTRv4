<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Sawarabi+Mincho" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Open+Sans+Condensed:300|Oswald|Sawarabi+Mincho" rel="stylesheet">
<style type="text/css">
    .degradado {
        background: -webkit-linear-gradient(#33691e, #dcedc8); /* For Safari 5.1 to 6.0 */
        background: -o-linear-gradient(#33691e, #dcedc8); /* For Opera 11.1 to 12.0 */
        background: -moz-linear-gradient(#33691e, #dcedc8); /* For Firefox 3.6 to 15 */
        background: linear-gradient(#33691e, #dcedc8); /* Standard syntax */
        color: white;
}
.degradado_lineal {
background: -webkit-linear-gradient(left, #004d40 , #80cbc4); /* For Safari 5.1 to 6.0 */
background: -o-linear-gradient(right, #004d40 , #80cbc4); /* For Opera 11.1 to 12.0 */
background: -moz-linear-gradient(right, #004d40 , #80cbc4); /* For Firefox 3.6 to 15 */
background: linear-gradient(to right, #004d40 , #80cbc4); /* Standard syntax */
text-align: center;
color: #fff;
padding: 25px;
}
.contenido{
    text-align: justify;
    color: #000;
    font-family: 'Oswald', sans-serif;
    font-family: 'Sawarabi Mincho', sans-serif;
    font-family: 'Open Sans Condensed', sans-serif;
    font-family: 'Josefin Sans', sans-serif;

}
.encabezado{
    display: block; 
    margin: 0 auto;
    color: white;
    font-family: 'Oswald', sans-serif;
}
.DivDescarga a:hover{
    background-color: #00bcd4;
    width: 300px;
    height: 100px;
    text-align: center;
}
</style>
<div class="container-fluid">
    <?php
        foreach ($Guia->result() as $GuiaU) {
    ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="row card-title degradado_lineal ">
                            <h1  class="encabezado">
                                <?php echo $GuiaU->Titulo_Guia;?></h1><hr>   
                        </div>
                        
                        <div class="card-body">

                            <div class="profiletimeline">

                                  <div class="sl-item">
                                        <div class="sl-right">
                                            <div>
                                                <div class="m-t-20 row">
                                                        <div class="col-md-11 col-xs-12 contenido ">
                                                            <div>
                                                             <?php echo $GuiaU->Contenido;?>
                                                        </div>
                                                        <div class="DivDescarga">
                                                        <?php
                                                        if($GuiaU->Tipo_publicacion=="Documento"){
                                                            echo '<a href="'.base_url().'plantilla/Documentos/'.$GuiaU->Documento_Guia.'" class ="btn btn-info btn-md" style="color:white; padding:25px;"><i class="fa fa-download fa-2x" ></i> Descargar Documento</a>';

                                                        }
                                                        else if($GuiaU->Tipo_publicacion=="Video"){

                                                            echo "<iframe width='500' height='400' src='https://www.youtube.com/embed/". $GuiaU->Video_Multimedia."?rel=0' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe>";

                                                        }

                                                        ?>
                                                        </div>
                                                        
                                                        </div>
                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function(){
    });
</script>
            
        <?php } ?>
    </div>
<hr>