<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sedes extends CI_Controller {

	public function index(){
		$this->load->model('Sedes_Model');
		$r=$this->Sedes_Model->verSedes();
		$data= array('Sede'=>$r);
		$this->load->view('administrador/base/header');
		//$this->load->view('administrador/base/home');
		$this->load->view('Sedes/Gestionar_Sedes', $data);
		$this->load->view('administrador/base/footer');
	}
	public function Guardar(){
		$datos = $this->input->POST();
		$this->load->model('Sedes_Model');
		$bool=$this->Sedes_Model->insertarSedes($datos);
		if($bool){
			echo '<script type="text/javascript">
				alert("Sede insertada con éxito");
				self.location ="'.base_url().'/Sedes"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Sedes"
				</script>';
		}
	}
	public function Editar(){
		$datos = $this->input->POST();
		$this->load->model('Sedes_Model');
		$bool=$this->Sedes_Model->editarSedes($datos);
		if($bool){
			echo '<script type="text/javascript">
				alert("Sede editada con exito");
				self.location ="'.base_url().'/Sedes"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Sedes"
				</script>';
		}
	}
	public function Eliminar(){
		$datos = $this->input->GET('id');
		$this->load->model('Sedes_Model');
		$bool=$this->Sedes_Model->eliminarSedes($datos);
		if($bool){
			echo '<script type="text/javascript">
				
				self.location ="'.base_url().'/Sedes"
				</script>';
		}
		else{
			echo '<script type="text/javascript">
				alert("NO se pudo realizar la acción");
				self.location ="'.base_url().'/Sedes"
				</script>';
		}
	}
	public function VerificarNomSede(){
		if ($this->input->is_ajax_request()) {
			$this->load->model('Sedes_Model');
			$valor = $this->input->POST("buscar");
			//$valor="Alimentos y Bebidas";
			$result = $this->Sedes_Model->verificarNombreSede($valor);
			echo json_encode($result);
		}
	
}
}