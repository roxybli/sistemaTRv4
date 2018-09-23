<?php 

class Controlie_Model extends CI_Model
{

public function guardarIE($datos=null, $idUsuario)
	{
		$ingresosN= $datos['ingresosN'];
		$ingresosD= $datos['ingresosD'];
		$egresosN= $datos['egresosN'];
		$egresosD= $datos['egresosD'];
		$fecha= $datos['fechaIE'];
		$estadoE= $datos['estadoE'];

		$ingresoTotal = 0;
		$contadorI = 0;
		$contadorE = 0;

		if (sizeof($ingresosN) >0)
		{
			for ($i=0; $i < sizeof($ingresosN); $i++)
			{ 
				$sql="INSERT INTO tbl_Ingresos VALUES('','$idUsuario', '$ingresosN[$i]', '$ingresosD[$i]', '$fecha')";
				
				if ($this->db->query($sql))
				{
					$contadorI++;	
				}

				$ingresoTotal = $ingresoTotal + $ingresosD[$i];
			}
		}

		if (sizeof($egresosN) >0)
		{
			for ($i=0; $i < sizeof($egresosN); $i++)
			{ 
				if ($estadoE[$i]=="1")
				{
					$sql2="INSERT INTO tbl_Egresos VALUES('','$idUsuario', '$egresosN[$i]', '$egresosD[$i]', '$fecha', 'Pendiente')";
				
					if ($this->db->query($sql2))
					{
						$contadorE++;	
					}
				}
				else
				{
					$sql2="UPDATE tbl_Egresos set Cantidad_Egreso='$egresosD[$i]', Fecha_Egreso='$fecha' WHERE Pk_Id_Egreso='$estadoE[$i]'";
			
					if ($this->db->query($sql2))
					{
						$contadorE++;	
					}
				}
			}
		}



		$sql3 = "INSERT INTO tbl_Balance VALUES('', '$idUsuario', '$fecha', '$ingresoTotal')";
		$this->db->query($sql3); 	
		if (($contadorI + $contadorE) == (sizeof($ingresosN) + sizeof($egresosN)))
		{
			return true;
		}
		return false;
	}

	public function obtenerIngreso($fecha, $id)
	{
		$sql = "SELECT Total_Ingreso FROM tbl_Balance WHERE Fecha_Balance = '$fecha' AND FK_Id_Usuario='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}
	public function obtenerEgreso($fecha, $id)
	{
		$sql = "SELECT * FROM tbl_Egresos WHERE Fecha_Egreso = '$fecha' AND FK_Id_Usuario='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function obtenerIngreso2($id)
	{
		$sql = "SELECT DISTINCT Nombre_Ingreso  FROM tbl_Ingresos WHERE FK_Id_Usuario='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}
	public function obtenerEgreso2($id)
	{
		$sql = "SELECT * FROM tbl_Egresos WHERE FK_Id_Usuario='$id' AND Fecha_Egreso=(SELECT MAX(Fecha_Egreso) FROM tbl_Egresos WHERE FK_Id_Usuario='$id') GROUP BY Nombre_Egreso";
		$datos = $this->db->query($sql);
		return $datos;
	}


	public function procesarEgresos($datos = null)
	{
		$ingreso = $datos['totalIngresos'];//
		$egreso = $datos['egresoS'];
		//$egresoCantidad = $datos['cantidadEgreso'];
		$fecha = $datos['fechaEgresos'];
		$restaIE = $ingreso;

			$sql = "SELECT MAX(PK_Id_Balance) as idBalance FROM tbl_Balance";
			$id = $this->db->query($sql);
			foreach ($id->result() as $idB)
			{
				$datoID = $idB->idBalance;
			}

		$sql2 = "INSERT INTO tbl_Ingresos_Egresos_Balance VALUES('$datoID', '$egreso', 'Gasto', '$ingreso')";
		$sql3 = "UPDATE tbl_Egresos SET Estado_Egreso='Procesado' WHERE Pk_Id_Egreso='$egreso'";
		if ($this->db->query($sql2))
		{
			if ($this->db->query($sql3))
			{
				return true;
			}
		}
		return false;

	}

	public function obtenerBalances($id)
	{
		$sql = "SELECT b.Fecha_Balance, bie.Total_Ingreso, bie.Nombre_Operacion, e.Nombre_Egreso, e.Cantidad_Egreso, COUNT(*) as Operaciones FROM tbl_Balance as b INNER JOIN tbl_Ingresos_Egresos_Balance as bie on(b.PK_Id_Balance = bie.FK_Id_Balance) 
		INNER JOIN tbl_Egresos as e ON(bie.FK_Id_Egreso= e.Pk_Id_Egreso) WHERE b.FK_Id_Usuario = '$id' GROUP BY b.Fecha_Balance";
		/*$sql = "SELECT b.Fecha_Balance, bie.Total_Ingreso, bie.Total_Operacion, bie.Nombre_Operacion, e.Nombre_Egreso, e.Cantidad_Egreso FROM tbl_Balance as b INNER JOIN tbl_Ingresos_Egresos_Balance as bie
				on(b.PK_Id_Balance = bie.FK_Id_Balance) INNER JOIN tbl_Egresos as e ON(bie.FK_Id_Egreso= e.Pk_Id_Egreso)";*/
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function detalleBalance($fecha)
	{
	 $sql = "SELECT b.Fecha_Balance, bie.Total_Ingreso, bie.Nombre_Operacion, e.Nombre_Egreso, e.Cantidad_Egreso FROM tbl_Balance as b INNER JOIN tbl_Ingresos_Egresos_Balance as bie
				on(b.PK_Id_Balance = bie.FK_Id_Balance) INNER JOIN tbl_Egresos as e ON(bie.FK_Id_Egreso= e.Pk_Id_Egreso) WHERE b.Fecha_Balance='".$fecha."'";
		$datos = $this->db->query($sql);
		return $datos;
	}


}


 ?>



