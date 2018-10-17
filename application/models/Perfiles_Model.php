<?php
class Perfiles_Model extends CI_Model
{
	public function verificarPerfil($id){

		$sql="SELECT * FROM VW_Perfiles where FK_Usuaria ='$id'";
		$validar=$this->db->query($sql);
		if($this->session->userdata('id_tipo')!=1 && $this->session->userdata('id_tipo')!=2 ){
			$fechaActual = date("Y/m/d");
			$sql2="UPDATE tbl_Usuarias SET Fecha_Actividad='$fechaActual' WHERE pk_Id_Usuaria ='$id'";
			$this->db->query($sql2);
		}
		return $validar->result();
	}
	public function BuscarPerfil($Nombre, $sede, $rubro){
		$sql = "SELECT * FROM VW_Perfiles WHERE Nombre_Negocio LIKE '%$Nombre%' AND Nombre_Sede LIKE '%$sede%' AND Nombre_Rubro LIKE '%$rubro%'";
		$result = $this->db->query($sql);
		return $result->result();
	}
	public function CargarBolsa(){
		$sql="SELECT * FROM VW_Perfiles";
		$validar=$this->db->query($sql);
		return $validar;
	}
	public function cargarUsuaria($id){
		$sql="SELECT * FROM tbl_Usuarias WHERE pk_Id_Usuaria ='$id'";
		$usuarias= $this->db->query($sql);
		return $usuarias;
	}
	public function editarUsuaria($data=null){
		if($data!=null){
			$id=$data['id_usuaria'];
			$nombre=$data['nombre'];
			$apellido=$data['apellido'];
			$nomuser=$data['nomuser'];
			$pass=$data['pass'];
			$direccion=$data['direccion'];
			$telefono=$data['telefono'];
			$sql="UPDATE tbl_Usuarias SET Nombre='$nombre', Apellido='$apellido', Nom_User='$nomuser', Pass='$pass', Direccion='$direccion', Telefono='$telefono' WHERE pk_Id_Usuaria= '$id'";
			if($this->db->query($sql)){
				return true;

			}
			else{
				return false;
			}
		}

	}
	public function InsertarPerfil($img_perfil, $img_1, $img_2,$img_3, $datos=null)
	{
		if ($datos!=null) {
			$id_usuaria=$datos['id_usuaria'];
			$nombreN=$datos['nombreN'];
			$direccionN=$datos['direccionN'];
			$descripcionN=$datos['descripcionN'];
			$rubro=$datos['rubro'];
			$foto_perfil=$img_perfil;
			$foto1=$img_1;
			$foto2=$img_2;
			$foto3=$img_3;
			$telefono=$datos['telefono'];
			$correo=$datos['correo'];

			$sql="INSERT INTO tbl_Perfiles_Empresariales(FK_Usuaria, Nombre_Negocio, Direccion_Negocio, Descripcion_Negocio, FK_Rubro, Foto_Perfil, Foto1, Foto2, Foto3, Telefono, Correo) VALUES ('$id_usuaria', '$nombreN', '$direccionN', '$descripcionN', '$rubro', '$foto_perfil', '$foto1', '$foto2', '$foto3', '$telefono', '$correo')";
			if($this->db->query($sql)){

				return true;

			}
			else{
				return false;
			}

		}

	}
	public function EditarImagen($campo, $img, $id){
		$sql= "UPDATE tbl_Perfiles_Empresariales SET $campo='$img' WHERE FK_Usuaria= '$id'";
		if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}

	}
	public function editarPerfil($data=null){
		if($data!=null){
			$id=$data['id_usuaria'];
			$nombren=$data['nombre_n'];
			$direccionn=$data['direccion_n'];
			$descripcion=$data['descripcion_n'];
			$telefono=$data['telefono_n'];
			$correo=$data['Correo_n'];
			//$telefono=$data['telefono'];
			$sql="UPDATE tbl_Perfiles_Empresariales SET Nombre_Negocio='$nombren', Direccion_Negocio='$direccionn', Descripcion_Negocio='$descripcion', Telefono='$telefono', Correo='$correo' WHERE FK_Usuaria = '$id'";
			if($this->db->query($sql)){
				return true;

			}
			else{
				return false;
			}
		}

	}
	public function Ver_Perfil($id, $cantidad){
		$actualizar_visitas = $cantidad+1;
		$sql = "UPDATE tbl_Perfiles_Empresariales SET Num_Visitas ='$actualizar_visitas' WHERE FK_Usuaria='$id'";
		$this->db->query($sql);

		$sql2="SELECT p.*, r.*, u.Nombre, u.Apellido, s.* FROM tbl_Perfiles_Empresariales AS p INNER JOIN tbl_Rubros AS r ON p.FK_Rubro = r.PK_Id_Rubro INNER JOIN tbl_Usuarias AS u ON p.FK_Usuaria =u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.pk_Id_Sede WHERE p.FK_Usuaria='$id'";
		$perfil=$this->db->query($sql2);
		return $perfil;

		//CONSULTA PARA CREAR O MODIFICAR LA VISTA POR FAVOR NO TOCAR SI NO SABE MUCHO MENOS BORRAR GRACIAS!!
		//ATT. DESARROLLADOR 1.

		//CREATE OR REPLACE VIEW  VW_Perfiles AS SELECT p.*, r.*, u.Nombre, u.Apellido, s.* FROM tbl_Perfiles_Empresariales AS p INNER JOIN tbl_Rubros AS r ON p.FK_Rubro = r.PK_Id_Rubro INNER JOIN tbl_Usuarias AS u ON p.FK_Usuaria =u.pk_Id_Usuaria INNER JOIN tbl_Sedes as s ON u.FK_Sede = s.pk_Id_Sede 
		
		//OJO NO BORRAR 

	}
	public function NumRubro(){
		$sql="SELECT COUNT(*) AS Num, r.Nombre_Rubro FROM tbl_Perfiles_Empresariales AS P INNER JOIN tbl_Rubros AS r ON P.FK_Rubro = r.PK_Id_Rubro GROUP BY FK_Rubro ORDER BY Num DESC LIMIT 1";
		$r=$this->db->query($sql);
		return $r;
	}
}