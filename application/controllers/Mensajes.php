<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mensajes extends CI_Controller {
	
	public function Guardar(){

				$datos=$this->input->post();
				//echo json_encode($datos);
				$emisor=$datos['Emisor_Mensaje'];
				$contacto =$datos['Contacto_Mensaje'];
				$contenido = $datos['Contenido_Mensaje'];
				$id =$datos['ID'];
				$this->load->model('Mensajes_Model');
				$bool=$this->Mensajes_Model->guardarMensaje($emisor, $contacto, $contenido, $id);
	
	}
	public function VerMensajes(){
		$this->load->model('Mensajes_Model');
		$mensajes = $this->Mensajes_Model->verMensaje();
		echo json_encode($mensajes);
	}
	public function EstadoMensajes(){
		$id = $this->input->post('id');
		$this->load->model('Mensajes_Model');
		$this->Mensajes_Model->EstadoMensaje($id);
		echo json_encode($id);
	}
}
?>