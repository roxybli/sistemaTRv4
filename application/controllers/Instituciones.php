<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instituciones extends CI_Controller {

	public function index(){
		$this->load->model('Instituciones_Model');
		$r=$this->Instituciones_Model->verInstituciones();
		$data= array('Institucion'=>$r);
		$this->load->view('administrador/base/header');
		//$this->load->view('administrador/base/home');
		$this->load->view('Instituciones/Gestionar_Instituciones', $data);
		$this->load->view('administrador/base/footer');
	}
	public function Guardar(){
		$datos = $this->input->POST();
		$this->load->model('Instituciones_Model');
		$bool=$this->Instituciones_Model->insertarInstituciones($datos);
		if($bool){
			echo '<script type="text/javascript">
				alert("Institución insertada con éxito");
				self.location ="'.base_url().'/Instituciones"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Instituciones"
				</script>';
		}
	}
	public function Editar(){
		$datos = $this->input->POST();
		$this->load->model('Instituciones_Model');
		$bool=$this->Instituciones_Model->editarInstituciones($datos);
		if($bool){
			echo '<script type="text/javascript">
				alert("Institución editada con exito");
				self.location ="'.base_url().'/Instituciones"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Instituciones"
				</script>';
		}
	}
	public function Eliminar(){
		$datos = $this->input->GET('id');
		$this->load->model('Instituciones_Model');
		$bool=$this->Instituciones_Model->eliminarInstituciones($datos);
		if($bool){
			echo '<script type="text/javascript">
				
				self.location ="'.base_url().'/Instituciones"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Instituciones"
				</script>';
		}
	}
	public function VerificarNomInstitucion(){
		if ($this->input->is_ajax_request()) {
			$this->load->model('Instituciones_Model');
			$valor = $this->input->POST("buscar");
			//$valor="Alimentos y Bebidas";
			$result = $this->Instituciones_Model->verificarNombreInstitucion($valor);
			echo json_encode($result);
		}
	
}
}