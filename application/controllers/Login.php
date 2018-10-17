<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('logueo/header-login');
		$this->load->view('logueo/index');
		$this->load->view('logueo/footer-login');
	}
	public function cerrar_sesion(){
		$this->session->sess_destroy();

		echo '<script type="text/javascript">
				alert("Precione Aceptar para cerrar sesion: '.$this->session->userdata('usuario').'");
				self.location ="'.base_url().'"
				</script>';
	}
	public function forgot()
	{
		$this->load->view('logueo/header-login');
		$this->load->view('logueo/forgot-password');
		$this->load->view('logueo/footer-login');
	}
	public function help()
	{
		$this->load->view('logueo/header-login');
		$this->load->view('logueo/contact-sedes');
		$this->load->view('logueo/footer-login');
	}
	public function home()
	{
		$id=$this->session->userdata('id');
		$id_tipo=$this->session->userdata('id_tipo');
		$this->load->model('Perfiles_Model');
		if($id_tipo==1 or $id_tipo==2){
			$this->load->model('Usuarias_Model');
			$num =$this->Usuarias_Model->NuevasUsuarias();
			$numR=$this->Perfiles_Model->NumRubro();
			$numUT =$this->Usuarias_Model->NumeroUsuarias();
			$ns =$this->Usuarias_Model->NumeroUsuariasSede();
			$d=array('num_user'=>$num, 'num_rubro'=>$numR, 'TotalU'=>$numUT, 'Nus'=>$ns);
			$this->load->view('administrador/base/header');
			$this->load->view('administrador/base/home',$d);
			$this->load->view('administrador/base/footer');
		}
		else{
			$ver=$this->Perfiles_Model->verificarPerfil($id);
			$users=$this->Perfiles_Model->cargarUsuaria($id);
			//$info1 = array('info' => $ver);

			if($ver){
				$info1 = array('info' => $ver, 'user'=>$users);
				$this->load->view('administrador/base/header');
				$this->load->view('administrador/plugin/app-profile', $info1);
				$this->load->view('administrador/base/footer');
			}
			else{
				$this->load->model('Rubros_Model');
				$verr=$this->Rubros_Model->verRubros();
				$data= array('rubros'=>$verr);
				$this->load->view('administrador/base/header');
				//$this->load->view('administrador/base/home');
				$this->load->view('perfiles/Insertar_Perfil',$data);
				$this->load->view('administrador/base/footer');
			}

		}
		

	}
	public function validar()
	{
		$this->load->model('Usuarias_Model');
		/*$datos = $this->input->post();
		var_dump($datos);'*/
		$nombre= $_POST['nomuser'];
		$password= $_POST['pass'];

		$fila = $this->Usuarias_Model->validarUsuaria($nombre);

		if ($fila != null)
		{
			if ($fila->Pass == $password)
			{
				$data = array(
					'usuario'=> $nombre,
					'id'=> $fila->pk_Id_Usuaria,
					'login'=> TRUE,
					);
				/*$data2 = array(
					'departamento'=> $fila->depa,
					'tipoUsuario'=> $fila->tipoU,
					'nombre'=> $fila->nombre,
					);*/
				$data3 = array(
					'nombre'=> $fila->Nombre." ".$fila->Apellido,
					'id_tipo'=>$fila->fk_Tipo_Usuaria,
					'id_sede'=>$fila->FK_Sede,
					);


				$this->session->set_userdata($data);
				$this->session->set_userdata($data3);
				//$this->session->set_userdata($data3);
				//header("Location:".base_url()."home/inicio");

				echo '<script type="text/javascript">
				alert("Bienvenido al Sistema: '.$this->session->userdata('usuario').'");
				self.location ="'.base_url().'Login/home"
				</script>';
			}
			else
			{
				//header("Location:".base_url());
				echo '<script type="text/javascript">
				alert("Datos incorrectos para el usuario: '.$nombre.' !!!");
				self.location ="'.base_url().'"
				</script>';
			}
		}
		else
		{
			//header("Location:".base_url());
			echo '<script type="text/javascript">
				alert("Datos incorrectos para el usuario: '.$nombre.' !!!");
				self.location ="'.base_url().'"
				</script>';
		}

		/*	$data = array(
					'usuario'=> $nombre,
					'id'=> 9,
					'login'=> TRUE,
					);
				$this->session->set_userdata($data);
				echo $this->session->userdata('usuario');*/


	}

}