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
			$sql="INSERT INTO tbl_Rubros(Nombre_Rubro) VALUES('$')";
			$verr=$this->db->query($sql);
			return true;
		}
		else{
			return false;
		}
		
	}
}