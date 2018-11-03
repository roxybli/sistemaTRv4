<?php
class Sedes_Model extends CI_Model
{
	public function verSedes(){
		$sql="SELECT * FROM tbl_Sedes";
		$verr=$this->db->query($sql);
		return $verr;
	}
	public function insertarSedes($datos=null){
		if($datos!=null){
			$nombre=$datos['Nombre_Sede'];
			$sql="INSERT INTO tbl_Sedes(Nombre_Sede) VALUES('$nombre')";
			$verr=$this->db->query($sql);
			return true;
		}
		else{
			return false;
		}
	}
	public function editarSedes($datos=null){
		if($datos!=null){
			$nombre=$datos['Nombre_Sede2'];
			$id= $datos['ID'];
			$sql="UPDATE tbl_Sedes SET Nombre_Sede ='$nombre' WHERE  PK_Id_Sede = $id";
			$verr=$this->db->query($sql);
			return true;
		}
		else{
			return false;
		}
	}

	public function eliminarSedes($id){

			$sql="DELETE FROM tbl_Sedes WHERE  Pk_Id_Sede = $id";
			if($this->db->query($sql))
			{
			return true;
		}
		else{
			return false;
		}
	}
	public function verificarNombreSedes($nombre){
		$sql = "SELECT Nombre_Sede FROM tbl_Sedes WHERE Nombre_Sede = '$nombre'";
		$res =$this->db->query($sql);
		return $res->result();

	}

}