<?php 

class Insumos_Model extends CI_Model
{

public function mostrarInsumos($id)
	{

		$sql="SELECT i.PK_Id_Insumo, i.Nombre_Insumo, i.Existencia_Insumo, i.Precio_Insumo, i.Medida_Insumo, i.FK_Id_Tipo_Insumo , ti.Nombre_Tipo, u.Nombre, u.Apellido FROM tbl_Insumos as i INNER JOIN tbl_Tipos_Insumos as ti on(i.FK_Id_Tipo_Insumo=ti.Pk_Id_Tipo_Insumo) INNER JOIN tbl_Usuarias as u on(i.FK_Id_Usuario = u.pk_Id_Usuaria) WHERE i.FK_Id_Usuario = '$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}

public function guardarInsumos($datos=null, $id)
	{
		$nombreInsumos= $datos['nombreInsumos'];
		$cantidaInsumo= $datos['cantidaInsumo'];
		$precioInsumo= $datos['precioInsumo'];
		$medidasInsumo= $datos['medidasInsumo'];
		$tipoInsumos= $datos['tipoInsumo'];


		$contador = 0;
		for ($i=0; $i < sizeof($cantidaInsumo); $i++)
		{ 
			$sql="INSERT INTO tbl_Insumos VALUES('', '$nombreInsumos[$i]', '$cantidaInsumo[$i]', '$precioInsumo[$i]', '$medidasInsumo[$i]',
				'$tipoInsumos[$i]', $id)";
			
			if ($this->db->query($sql))
			{
				$contador++;	
			}
		}

		if ($contador == sizeof($cantidaInsumo))
		{
			return true;
		}
		return false;
	}

public function datosIndumo($id)
	{
		$sql = "SELECT i.Nombre_Insumo, i.PK_Id_Insumo, i.Existencia_Insumo, i.Precio_Insumo, i.Medida_Insumo, ti.Nombre_Tipo, u.Nom_User  FROM tbl_Insumos as i INNER JOIN tbl_Tipos_Insumos as ti ON(
 					   i.FK_Id_Tipo_Insumo = ti.Pk_Id_Tipo_Insumo) INNER JOIN tbl_Usuarias as u on(i.FK_Id_Usuario=u.pk_Id_Usuaria) WHERE i.PK_Id_Insumo='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}

public function actualizarInsumo($datos=null)
	{
		$nombreInsumo = $datos['nombreInsumo'];
		$precioInsumo = $datos['precioInsumo'];
		$existenciaInsumo = $datos['existenciaInsumo'];
		$idInsumo = $datos['idInsumo'];

		$sql = "UPDATE tbl_Insumos SET Nombre_Insumo = '$nombreInsumo', Precio_Insumo = '$precioInsumo', Existencia_Insumo = '$existenciaInsumo'
				WHERE PK_Id_Insumo = '$idInsumo'";

		if ($this->db->query($sql))
		{
			return true;
		}
		return false;
	}

	public function eliminarInsumo($id)
	{
		$sql = "DELETE FROM tbl_Insumos WHERE PK_Id_Insumo = '$id'";

		if ($this->db->query($sql))
		{
			return true;
		}
		return false;
	}

}


 ?>



