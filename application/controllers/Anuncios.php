<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncios extends CI_Controller {
	public function index()
	{
	if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$this->load->model('Anuncios_Model');
		$anuncio=$this->Anuncios_Model->listarAnuncios();
		$datos = array('Anuncios'=>$anuncio);
		$this->load->view('anuncios/lista_anuncios',$datos);
		$this->load->view('administrador/base/footer');
	}
	public function publicar_anuncios()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('anuncios/publicar_anuncio');
		$this->load->view('administrador/base/footer');
	}
	public function guardar()
	{
		$nombre=$_FILES['imagenN']['name'];
	    $tempo= $_FILES['imagenN']['tmp_name'];
	    $dir="plantilla/img_anuncios/";
	    move_uploaded_file($tempo, $dir.$nombre);
	    //$imagenconvert= file_get_contents($dir.$nombre);
	    $this->load->model('Anuncios_Model');
	    $datos=$this->input->POST();
	    $bool= $this->Anuncios_Model->insertarAnuncio($nombre, $datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				alert("Anuncio creado con exito");
				self.location ="'.base_url().'Anuncios"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al editar los datos")</script>';
	    }
	}
	public function ListarAnuncios(){

	}
}