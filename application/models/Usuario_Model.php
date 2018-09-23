<?php 

class Usuario_Model extends CI_Model
{
public function validarUsuario($nombre='')
	{
		//$sql="SELECT * FROM tbl_usuario WHERE nomusuario='".$nombre."' LIMIT 1";
		$sql  = "SELECT * FROM tbl_Usuarios WHERE Nickname = '".$nombre."'";

		$result= $this->db->query($sql);
		if ($result->num_rows() > 0)
		 {
			return $result->row();
		 }
		return null;
	}

}


 ?>



