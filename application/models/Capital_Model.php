<?php 

class Capital_Model extends CI_Model
{
public function obternerRubros()
	{
		$sql  = "SELECT * FROM tbl_Rubros";
		$datos= $this->db->query($sql);
		return $datos;
	}

	public function guardarNegocio($datos=null)
	{

		@$idRubro  = $datos['idRubroC'];
		@$nombreSubrubro = $datos['nombreRubroE'];
		@$produccionMensual = $datos['produccionMensual'];

		@$cantidadElemento = $datos['cantidadElemento'];
		@$medidasElemento = $datos['medidasElemento'];

		@$nombreElementoI = $datos['nombreElemento'];
		@$precioElementoI  = $datos['dineroElemento'];
		@$categoriaI  = 2;

		@$nombreElementoM = $datos['nombreMaquinaria'];
		@$cantidadElementoM  = $datos['cantidaMaquinaria'];
		@$precioElementoM  = $datos['precioMaquinaria'];
		@$categoriaM  = 1;

		$sql = "INSERT INTO tbl_Subrubros VALUES('', '$idRubro', '$nombreSubrubro', $produccionMensual)";
		if ($this->db->query($sql))
		{
			$sql2 = "SELECT MAX(PK_Id_Subrubro ) as idSubrubro FROM tbl_Subrubros";
			$id = $this->db->query($sql2);
			foreach ($id->result() as $idB)
			{
				$datoID = $idB->idSubrubro;
			}

			$contadorI=0;
			if (sizeof($nombreElementoI) > 0) {
				for ($i=0; $i <sizeof($nombreElementoI) ; $i++)
				{ 
					$sql3 = "INSERT INTO tbl_Elementos_Subrubros VALUES('', '$nombreElementoI[$i]', '$cantidadElemento[$i]', '$precioElementoI[$i] ', '$medidasElemento[$i] ', '$categoriaI', '$datoID')";
					if ($this->db->query($sql3))
					{
						$contadorI++;
					}
				}
			}

			$contadorM=0;
			if (sizeof($nombreElementoM)>0) {
				for ($i=0; $i <sizeof($nombreElementoM) ; $i++)
				{ 
					$sql3 = "INSERT INTO tbl_Elementos_Subrubros VALUES('', '$nombreElementoM[$i]', '$cantidadElementoM[$i]', '$precioElementoM[$i] ', ' ', '$categoriaM', '$datoID')";
					if ($this->db->query($sql3))
					{
						$contadorM++;
					}
				}
			}

			if (sizeof($nombreElementoI) == $contadorI)
			{
				if (sizeof($nombreElementoM) == $contadorM)
				{
					echo '<script type="text/javascript">
						alert("Proceso efectuado Correctamente ");
						self.location ="'.base_url().'capital/"
						</script>';
				}
			}

		}
		else
		{
			echo '<script type="text/javascript">
					alert("Error al Efectuar Proceso");
					self.location ="'.base_url().'capital/"
				</script>';
		}

	}

	public function obtenerNegocios($id)
	{
		$sql = "SELECT r.Nombre_Rubro,sr.PK_Id_Subrubro, sr.Nombre_Rubro as Nombre_Subrubro FROM tbl_Rubros as r INNER JOIN tbl_Subrubros as sr ON(r.PK_Id_Rubro = sr.FK_Id_Rubro) WHERE PK_Id_Rubro = '$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function detalleNegocio($id)
	{
		$sql="SELECT  esr.Fk_Id_Categoria_Elemento, esr.Nombre_Elemento, esr.Cantidad_Elemento, esr.Precio_Elemento,  esr.Medida_Elemento, ce.Nombre_Categoria, sr.Nombre_Rubro as Nombre_Subrubro, sr.Produccion_Mensual, sr.PK_Id_Subrubro, r.Nombre_Rubro FROM tbl_Elementos_Subrubros as esr INNER JOIN tbl_Categoria_Elementos as ce on(esr.Fk_Id_Categoria_Elemento=ce.Pk_Id_Categoria_Elemento) INNER join tbl_Subrubros as sr on(esr.Fk_Id_Subrubro = sr.PK_Id_Subrubro) INNER JOIN tbl_Rubros as r on(sr.FK_Id_Rubro = r.PK_Id_Rubro)
			WHERE sr.PK_Id_Subrubro='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}

}


 ?>



