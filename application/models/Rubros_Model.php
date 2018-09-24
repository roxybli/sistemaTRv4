<?php
class Rubros_Model extends CI_Model
{
	public function verRubros(){
		$sql="SELECT * FROM tbl_Rubros";
		$verr=$this->db->query($sql);
		return $verr;
	}
	public function insertarRubros($datos=null){
		if($datos!=null){
			$nombre_rubro = $datos['Nombre_Rubro'];
			$sql="INSERT INTO tbl_Rubros(Nombre_Rubro) VALUES('$nombre_rubro')";
			if($verr=$this->db->query($sql)){
				return true;
			}
			
		}
		else{
			return false;
		}
		
	}
	public function editarRubros($datos=null){
		if($datos!=null){
			$ID = $datos['ID'];
			$nombre_rubro = $datos['Nombre_Rubro2'];
			$sql="UPDATE tbl_Rubros SET Nombre_Rubro='$nombre_rubro' WHERE PK_Id_Rubro = $ID";
			if($verr=$this->db->query($sql)){
				return true;
			}
			
		}
		else{
			return false;
		}
	}
	public function eliminarRubros($id){

		$sql="DELETE FROM tbl_Rubros WHERE PK_Id_Rubro = $id";
		if($this->db->query($sql)){
			return true;

		}
		else{
			return false;
		}

	}
		
}