<?php
class Instituciones_Model extends CI_Model
{
	public function verInstituciones(){
		$sql="SELECT * FROM tbl_Instituciones";
		$verr=$this->db->query($sql);
		return $verr;
	}
	public function insertarInstituciones($datos=null){
		if($datos!=null){
			$nombre=$datos['Nombre_Institucion'];
			$sql="INSERT INTO tbl_Instituciones(Nombre_Institucion) VALUES('$nombre')";
			$verr=$this->db->query($sql);
			return true;
		}
		else{
			return false;
		}
	}
	public function editarInstituciones($datos=null){
		if($datos!=null){
			$nombre=$datos['Nombre_Institucion2'];
			$id= $datos['ID'];
			$sql="UPDATE tbl_Instituciones SET Nombre_Institucion ='$nombre' WHERE  PK_Id_Institucion = $id";
			$verr=$this->db->query($sql);
			return true;
		}
		else{
			return false;
		}
	}

	public function eliminarInstituciones($id){

			$sql="DELETE FROM tbl_Instituciones WHERE  Pk_Id_Institucion = $id";
			if($this->db->query($sql))
			{
			return true;
		}
		else{
			return false;
		}
	}
	public function verificarNombreInstituciones($nombre){
		$sql = "SELECT Nombre_Institucion FROM tbl_Instituciones WHERE Nombre_Institucion = '$nombre'";
		$res =$this->db->query($sql);
		return $res->result();

	}

}