<?php
class Usuarias_model extends CI_Model{
	public function insertarTipo($data=null)
	{
		if($data!=null)
		{
			$tipo=$data['tipo'];
			//$image=addcslashes($img, '"".(),/,?');
			$sql=("INSERT INTO tbl_Tipos_Usuarias(Descripcion) VALUES('$tipo')");
			//$this->db->bind_param('sss', $contenido, $video, $img);
			if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}
		}
	}
	public function eliminarUsuaria($id){
		$sql ="DELETE FROM tbl_Usuarias WHERE pk_Id_Usuaria='$id'";
		if($this->db->query($sql)){
			return true;
		}
		else{
			return false;
		}
	}
	public function insertarUsuaria($data=null)
	{
		if($data!=null)
		{
			//$image=addcslashes($img, '"".(),/,?');
			$nombre=$data['nombre'];
			$apellido=$data['apellido'];
			$nomuser=$data['nomuser'];
			$pass=$data['pass'];
			$direccion=$data['direccion'];
			$telefono=$data['telefono'];
			$dui=$data['dui'];
			$tipo=$data['tipo'];
			$sede=$data['sede'];
			$sql=("INSERT INTO tbl_Usuarias(FK_Sede, Nombre,Apellido,Nom_User,Pass,Direccion,fk_Tipo_Usuaria,Telefono,Dui) VALUES('$sede','$nombre','$apellido','$nomuser','$pass','$direccion','$tipo','$telefono','$dui')");
			//$this->db->bind_param('sss', $contenido, $video, $img);
			if($this->db->query($sql)){
				return true;
			}
			else{
				return false;
			}

		}
	}

	public function CargarUsuarias()
	{
		$sede=$this->session->userdata('id_sede');
		$sql="SELECT u.*, s.Nombre_Sede, t.Descripcion AS Tipo FROM tbl_Usuarias AS u INNER JOIN tbl_Sedes AS s ON u.FK_Sede=s.pk_Id_Sede INNER JOIN tbl_Tipos_Usuarias AS t ON u.fk_Tipo_Usuaria = t.pk_Id_Tipo WHERE u.FK_Sede='$sede' AND u.fk_Tipo_Usuaria != 1";
		//echo $sql ."la sede es:". $sede;
		$res=$this->db->query($sql);
		return $res;	
	}

	public function CargarTipo()
	{
		$tipo=$this->session->userdata('id_tipo');
		if($tipo==1){
				$sql=("SELECT * FROM tbl_Tipos_Usuarias");
			}
			else{
				$sql=("SELECT * FROM tbl_Tipos_Usuarias WHERE pk_Id_Tipo!=1 AND pk_Id_Tipo!=2");
			}
			$res=$this->db->query($sql);
			return $res;	
	}
	public function validarUsuaria($nombre='')
	{
		//$sql="SELECT * FROM tbl_usuario WHERE nomusuario='".$nombre."' LIMIT 1";
		$sql  = "SELECT  Nombre, Apellido, pk_Id_Usuaria, Nom_User, Pass, fk_Tipo_Usuaria, FK_Sede FROM tbl_Usuarias WHERE Nom_User='$nombre'";

		$result= $this->db->query($sql);
		if ($result->num_rows() > 0)
		 {
			return $result->row();
		 }
		return null;
	}

	public function CargarSede(){
		$sql = "SELECT * FROM tbl_Sedes";
		$res =$this->db->query($sql);
		return $res;
	}
}
?>