<?php 

class Inventario_Model extends CI_Model
{

public function guardarProcedimiento($datos=null)
	{
		$nombreProducto = $datos['nombreProducto'];
		$precioProducto = $datos['precioProducto'];
		$idUsuario = $datos['idUsuario'];

		$idInsumos= $datos['materiaPrimaSeleccionada'];

		$cantidadInsumo= $datos['cantidadInsumo'];
		$medidasInsumo= $datos['medidaInsumo'];
		//$cantidaInsumo= $datos['cantidaInsumo'];
		//$precioInsumo= $datos['precioInsumo'];
		//$tipoInsumos= $datos['tipoInsumo'];

		$sql1="INSERT INTO tbl_Productos VALUES('', '$nombreProducto', '$precioProducto', '$idUsuario')";
		if ($this->db->query($sql1))
			{
				$sql2="SELECT MAX(PK_Id_Producto) as PK_Id_Producto FROM tbl_Productos";	
				$id = $this->db->query($sql2);
				$contador=0;
				foreach ($id->result() as $idP)
				{
					$datoID = $idP->PK_Id_Producto;
				}
				for ($i=0; $i < sizeof($idInsumos) ; $i++)
				{ 
					$sql3= "INSERT INTO tbl_Productos_Insumos VALUES('$datoID','$idInsumos[$i]','$cantidadInsumo[$i]','$medidasInsumo[$i]')";
					$this->db->query($sql3);
					$contador++;
				}

				if ($contador == sizeof($idInsumos) AND $sql2 AND $sql3)
				{

					echo '<script type="text/javascript">
						alert("Se guardo correctamente el producto !!! ");
						self.location ="'.base_url().'inventario/producto_receta"
						</script>';
					
				}

			}

/*
		$contador = 0;
		for ($i=0; $i < sizeof($cantidaInsumo); $i++)
		{ 
			$sql="INSERT INTO tbl_Insumos VALUES('', '$nombreInsumos[$i]', '$cantidaInsumo[$i]', '$precioInsumo[$i]', '$medidasInsumo[$i]',
				'$tipoInsumos[$i]')";
			
			if ($this->db->query($sql))
			{
				$contador++;	
			}
		}

		if ($contador == sizeof($cantidaInsumo))
		{
			return true;
		}
		return false;*/
	}

	public function procedimientosExistentes($id)
	{
		$sql="SELECT p.PK_Id_Producto, p.Nombre_Producto, p.Precio_Producto, u.Nombre, u.Direccion
			FROM tbl_Productos as p INNER JOIN tbl_Usuarias as u ON(p.FK_Id_Usuario = u.pk_Id_Usuaria) WHERE u.pk_Id_Usuaria='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function detalleProcedimiento($id)
	{
		$sql="SELECT p.PK_Id_Producto, p.Nombre_Producto, p.Precio_Producto, i.PK_Id_Insumo , i.Nombre_Insumo , i.Existencia_Insumo, i.Precio_Insumo, i.Medida_Insumo, pi.Cantidad_Insumo, pi.FK_Id_Insumo, u.Nombre, u.Direccion
				FROM tbl_Productos as p INNER JOIN tbl_Productos_Insumos as pi ON(p.PK_Id_Producto=pi.FK_Id_Producto) INNER JOIN tbl_Insumos as i on(
				pi.FK_Id_Insumo=i.PK_Id_Insumo) INNER JOIN tbl_Usuarias as u ON(p.FK_Id_Usuario = u.pk_Id_Usuaria) WHERE p.PK_Id_Producto='".$id."'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function guardarProducto($datos = null, $direccion)
	{
		$idProducto = $datos['idProducto'];
		$totalProducto = $datos['cantidadProducto'];
		$fecha = $datos['fechaProducto'];
		$estado = "En Proceso";

		$idInsumos = $datos['idInsumos'];
		$existenciaInsumo = $datos['existenciaInsumo'];
		$cantidadInsumo = $datos['cantidadInsumo'];

		$sql = "INSERT INTO tbl_Inventario VALUES('', '$idProducto', '$totalProducto', '$fecha', '$direccion', '$estado')";
		$contador = 0;
		if ($this->db->query($sql))
		{
			for ($i=0; $i < sizeof($idInsumos); $i++)
			{ 
				$nuevaCantidad = $existenciaInsumo[$i]-$cantidadInsumo[$i];
				$sql2 = "UPDATE tbl_Insumos SET Existencia_Insumo = '$nuevaCantidad' WHERE PK_Id_Insumo= '$idInsumos[$i]'";			
				if ($this->db->query($sql2))
				{
					$contador++;
				}
			}

			if (sizeof($idInsumos) == $contador)
			{
				return true;
			}
		}
		else
		{
			return false;
		}

	}

	public function mostrarProductosProceso($id)
	{
		$sql = "SELECT p.Nombre_Producto, p.Precio_Producto,i.PK_Id_Inventario, i.Existencia_Producto, i.Fecha_Creacion, i.Lugar_Existencia, i.Estado, u.Nombre, u.Apellido FROM tbl_Productos as p INNER JOIN tbl_Inventario as i on(
 				p.PK_Id_Producto = i.FK_Id_Producto) INNER JOIN tbl_Usuarias as u on(p.FK_Id_Usuario= u.pk_Id_Usuaria) AND p.FK_Id_Usuario = '$id' AND i.Estado='En Proceso'";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function actualizarProducto($id)
	{
		$sql = "UPDATE tbl_Inventario SET Estado= 'Terminado' WHERE PK_Id_Inventario='$id'";
		if ($this->db->query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function mostrarProductosTerminados($id)
	{
		$sql = "SELECT p.Nombre_Producto, p.Precio_Producto,i.PK_Id_Inventario, i.Existencia_Producto, i.Fecha_Creacion, i.Estado, u.Nombre, u.Apellido, u.Direccion as 'Lugar_Existencia' FROM tbl_Productos as p INNER JOIN tbl_Inventario as i on(
 				p.PK_Id_Producto = i.FK_Id_Producto) INNER JOIN tbl_Usuarias as u on(p.FK_Id_Usuario= u.pk_Id_Usuaria) AND p.FK_Id_Usuario = '$id' AND i.Estado='Terminado'";
		$datos = $this->db->query($sql);
		return $datos;
	}

    public function mostrarProductoTerminado($u, $p)
	{
		$sql = "SELECT p.Nombre_Producto, p.Precio_Producto,i.PK_Id_Inventario, i.Existencia_Producto, i.Fecha_Creacion, i.Lugar_Existencia, i.Estado, u.Nombre, u.Apellido FROM tbl_Productos as p INNER JOIN tbl_Inventario as i 
		on(p.PK_Id_Producto = i.FK_Id_Producto) INNER JOIN tbl_Usuarias as u on(p.FK_Id_Usuario= u.pk_Id_Usuaria) AND p.FK_Id_Usuario = $u AND i.Estado='Terminado' AND i.PK_Id_Inventario='$p' ";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function efectuarVenta($datos =null)
	{
		$idInventario = $datos['idActualizar'];
		$cantidadE = $datos['existenciaProducto'];
		$cantidadV = $datos['cantidadVender'];
		$fecha = $datos['fechaVenta'];

		$total = $cantidadE-$cantidadV;
		$sql = "UPDATE tbl_Inventario SET Existencia_Producto='". $total."' WHERE PK_Id_Inventario='".$idInventario."'";
		if ($this->db->query($sql))
		{
			$sql2 = "INSERT INTO tbl_Venta VALUES('', '$idInventario', '$cantidadV', '$fecha')";
			if ($this->db->query($sql2))
			{
				echo '<script type="text/javascript">
					alert("Transacción exitosa !!!");
					self.location ="'.base_url().'inventario/productos_disponibles";
					</script>';
			}
		}	
		else
		{
			echo '<script type="text/javascript">alert("Error al realizar la transacción")</script>';
		}
	}


	public function obtenerVentas($id)
	{
		/*$sql = "SELECT v.Cantidad_Venta, v.Fecha_Venta, p.Nombre_Producto, p.Precio_Producto FROM tbl_Venta as v INNER JOIN tbl_Inventario as i 
		on(v.Fk_Id_Inventario = i.PK_Id_Inventario) INNER JOIN tbl_Productos as p on(i.FK_Id_Producto = p.PK_Id_Producto) WHERE p.FK_Id_Usuario='$id'";*/


		$sql = "SELECT v.Cantidad_Venta, v.Fecha_Venta, p.Nombre_Producto, p.Precio_Producto, u.Nombre, u.Apellido FROM tbl_Venta as v INNER JOIN tbl_Inventario as i on(v.Fk_Id_Inventario = i.PK_Id_Inventario) INNER JOIN tbl_Productos as p on(i.FK_Id_Producto = p.PK_Id_Producto) INNER JOIN tbl_Usuarias as u ON(p.FK_Id_Usuario=u.pk_Id_Usuaria) WHERE p.FK_Id_Usuario='$id'";
		$datos = $this->db->query($sql);
		return $datos;
	}


}
 ?>


