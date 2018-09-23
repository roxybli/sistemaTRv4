<?php 
class Guias_model extends CI_Model{
	public function Insertar_Guia($url_doc, $datos = null){
		if($datos !=null){
			$titulo = $datos['Titulo'];
			$fecha = $datos['Fecha1'];
			$tipo = $datos['tipo'];
			$video = explode('=', $datos['Video']);
			$video = $video[1];

			$documento = $url_doc;
			$contenido = $datos['Contenido'];

			$sql ="INSERT INTO tbl_Guias_Multimedia(Titulo_Guia, Fecha_Publicacion, Tipo_Publicacion, Video_Multimedia, Documento_Guia, Contenido) VALUES('$titulo', '$fecha', '$tipo', '$video', '$documento', '$contenido')";
			if($this->db->query($sql)){
				return true;

			}
			else 
			{
				return false;
			}
		}
		else{
			return false;
		}
	}
	public function Ver_Guias($valor){
		if($valor==1){
			$sql="SELECT * FROM tbl_Guias_Multimedia WHERE Tipo_Publicacion='Documento'";
		}
		else if($valor==2){
			$sql="SELECT * FROM tbl_Guias_Multimedia WHERE Tipo_Publicacion='Video'";
		}
		$result = $this->db->query($sql);
		return $result;
	}
		public function VerGuiaId($id){
		$sql="SELECT * FROM tbl_Guias_Multimedia WHERE pk_Id_Guia='$id'";
		$result = $this->db->query($sql);
		return $result;
	}
}


?>