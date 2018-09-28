<?php
class Mensajes_Model extends CI_Model
{
	public function verMensajes(){
		$sql="SELECT * FROM tbl_Mensajes";
		$verr=$this->db->query($sql);
		return $verr;
	}
	public function guardarMensaje($emisor, $contacto, $contenido, $id){
			if($this->db->query("INSERT INTO tbl_Mensajes(Emisor_Mensaje, Contacto_Mensaje, Contenido_Mensaje, FK_Id_Usuaria, Estado_Mensaje) VALUES ('$emisor', '$contacto', '$contenido', $id,'Nuevo')"))
			{
				return true;
			}
			else{
				return false;
			}
	}
	public function verMensaje(){
		$id= $this->session->userdata('id');
		$sql="SELECT * FROM tbl_Mensajes WHERE FK_Id_Usuaria=$id AND Estado_Mensaje='Nuevo'";
		$res = $this->db->query($sql);
		return $res->result();
	}
		public function EstadoMensaje($id){
		$sql="UPDATE tbl_Mensajes SET Estado_Mensaje='Leido' WHERE PK_Id_Mensaje=$id";
		$this->db->query($sql);
	}
}