<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guias extends CI_Controller {

	public function index(){
			$this->load->view('administrador/base/header');
			//$this->load->view('administrador/base/home');
			$this->load->view('Guias/Insertar_Guia');
			$this->load->view('administrador/base/footer');
	}
	public function guardar_multimedia(){
		$datos = $this->input->POST();
		$nombre_documento = $_FILES['Documento']['name'];
		$temp = $_FILES['Documento']['tmp_name'];
		$dir="plantilla/Documentos/";
	    move_uploaded_file($temp, $dir.$nombre_documento);
	    $this->load->model('Guias_Model');
	    $bool = $this->Guias_Model->Insertar_Guia($nombre_documento, $datos);
	     if($bool){
	    	echo '<script type="text/javascript">
				 alert("Operacion realizada con exito !!");
				self.location ="'.base_url().'Guias"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al insertar los datos");
	    	self.location ="'.base_url().'Guias"</script>';
	    }
	}
	public function Cargar_Guias(){
		$this->load->view('administrador/base/header');
		$var = $this->input->GET('v');
		$this->load->model('Guias_Model');
		$info = $this->Guias_Model->Ver_Guias($var);
		$data = array('Guias_list' => $info);
		//$this->load->view('Guias/Lista_Guias', $data);
		if ($var ==1){
			$this->load->view('Guias/Ver_Guia_Documento', $data);
		}
		else if($var ==2){
			$this->load->view('Guias/Ver_Guia_Video', $data);
		}
		$this->load->view('administrador/base/footer');
	}
	public function VerGuia(){
		$this->load->view('administrador/base/header');
		$id = $this->input->Get('id');
		$this->load->model('Guias_Model');

		$resul= $this->Guias_Model->VerGuiaId($id);
		$data = array('Guia' => $resul);
		$this->load->view('Guias/Guia_u', $data);
		$this->load->view('administrador/base/footer');
	}
}