
<!-- Include the above in your HEAD tag -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet">
<link href="<?= base_url()?>plantilla/componentes/css/chat.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
    div, p, a, h2, h4,h1,h3,h5,h6{
        color:#000000;
    }
</style>
<div class="container">

<div style="background-color:#4527a0; color:white; padding:20;">
<h3  style="color:white; padding: 30px; margin: 20px; " class=" text-center"><b> Mensajes de los visitantes de tu perfil</b></h3>
</div>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Mensajes</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> 
                </div>
            </div>
          </div>
          <div class="inbox_chat">
          <?php 
            foreach ($Mensajes->result() as $msj) {
                # code...
                if($msj->Estado_Mensaje =="Nuevo"){
                    $contenido = "'".$msj->Contenido_Mensaje."'";
                    $emisor = "'".$msj->Emisor_Mensaje."'";
                    $contacto = "'".$msj->Contacto_Mensaje."'";
                    ?>
            <div class="chat_list active_chat" id="nuevo" onclick="ms(<?= $contenido?>, <?= $msj->PK_Id_Mensaje?>, 1, <?= $emisor?>,<?= $contacto?>)" >
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5><?php echo $msj->Emisor_Mensaje?> <span class="chat_date">Dec 25</span></h5>
                  <p><?php echo $msj->Contenido_Mensaje?></p>
                  <p><?php echo $msj->Contacto_Mensaje?></p>

                </div>
              </div>
            </div>
                <?php    
                }//cierre del if
                else if($msj->Estado_Mensaje =="Leido"){
                    $contenido = "'".$msj->Contenido_Mensaje."'";
                    $emisor = "'".$msj->Emisor_Mensaje."'";
                    $contacto = "'".$msj->Contacto_Mensaje."'";
                    ?>
                        <div class="chat_list" onclick="ms(<?php echo $contenido?>, <?= $msj->PK_Id_Mensaje?>, 2, <?= $emisor?>,<?= $contacto?>)">
                          <div class="chat_people">
                            <div class="chat_img"> <img src="<?= base_url()?>plantilla/images/bookingSystem/8.png" alt="sunil"> </div>
                            <div class="chat_ib">
                              <h5><?php echo $msj->Emisor_Mensaje?> <span class="chat_date">Dec 25</span></h5>
                              <p id="Cont"><?php echo $msj->Contacto_Mensaje?></p>
                            </div>
                          </div>
                        </div>
            <?php }}?>
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history" id="Recibidos">
            <!--<div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test which is a new approach to have all
                    solutions</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
              </div>
            </div>
           <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Test which is a new approach to have all
                  solutions</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div> -->
            <div class="alert alert-info">
                <p>Selceccione un mensaje</p>
            </div>
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
      <p class="text-center top_spac"> <a target="_blank" href="#"></a></p>
    </div>
<script type="text/javascript">
    function ms(con, id, tipo, emisor, contacto) {
        //alert(document.getElementById('id_ms').value);
        //alert(con);
        //cont = document.getElementById('Cont').innerHTML;
        cont = con;
        html ="";
        html='<div class="incoming_msg"><div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div><div class="received_msg"><div class="received_withd_msg"><p>'+cont+'</p><span class="time_date"> '+emisor+'   |    '+contacto+'</span></div></div></div>';
        document.getElementById('Recibidos').innerHTML=html;
       id_m= id;
       if(tipo == 1){

        document.getElementById('nuevo').classList.remove('active_chat');
        ver(id_m);
       }
    }
    function msl(c){
        alert(c);
    }
</script>