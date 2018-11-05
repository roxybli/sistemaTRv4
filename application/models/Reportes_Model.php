<?php
class Reportes_Model extends CI_Model
{
	public function ReporteGeneral($param=null){
		$sede = $param['sede'];
		if($sede==""){
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede";
		}
		else{
			echo $sede;
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.FK_Sede=$sede";
		}
		
		$datos=$this->db->query($sql);
		return $datos;
	}
	public function ReportePorAño($param=null){
		if($param !=null){
			$param1 = $param['Año_Ingreso'];
			$sede = $param['sede'];
		if($sede==""){
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso=$param1";
		}
		else{
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso=$param1 AND u.FK_Sede=$sede";
		}
			$datos=$this->db->query($sql);
			return $datos;
		}
	}
	public function ReportePorPeriodo($param=null){
		if($param !=null){
			$param1 = $param['Año_Ingreso'];
			$param2 = $param['Año_Fin'];
			$sede = $param['sede'];
		if($sede==""){
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso BETWEEN $param1 AND $param2";
		}
		else{
			$sql="SELECT p.Nombre_Negocio, r.Nombre_Rubro, s.Nombre_Sede, u.Nombre, u.Apellido, u.Dui, u.Direccion, u.Telefono, u.Año_Ingreso FROM tbl_Perfiles_Empresariales as p INNER JOIN tbl_Rubros as r ON p.FK_Rubro=r.PK_Id_Rubro INNER JOIN tbl_Usuarias as u ON p.FK_Usuaria = u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.Pk_Id_Sede WHERE u.Año_Ingreso BETWEEN $param1 AND $param2 AND u.FK_Sede=$sede";
		}
			$datos=$this->db->query($sql);
			return $datos;


		}
		
	}
}
?>