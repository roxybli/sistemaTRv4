<?php
class Anuncios_model extends CI_Model{
	public function insertarAnuncio($img, $data=null)
	{
		if($data!=null)
		{
			//$image=addcslashes($img, '"".(),/,?');
			$titulo=strtoupper($data['titulo']);
			$contenido=$data['contenido'];
			$fecha = $data['fecha'];

			$sql=("INSERT INTO tbl_Anuncios(Contenido, Titulo, Imagen, Fecha) VALUES( '$contenido','$titulo','$img', '$fecha')");
			//$this->db->bind_param('sss', $contenido, $video, $img);
			if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}
		}
	}
	public function listarAnuncios(){
		$sql= "SELECT * FROM tbl_Anuncios";
		$anuncios = $this->db->query($sql);
		return $anuncios;
	}
}
?>