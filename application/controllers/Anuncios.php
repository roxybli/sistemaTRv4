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
	public function VerAnuncios(){
		if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$id=$this->input->GET('id');
		$this->load->model('Anuncios_Model');
		$noticia = $this->Anuncios_Model->VerAnuncio($id);
		$data=array('Noticia'=>$noticia);
		//$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Ver_Anuncio', $data);
		$this->load->view('administrador/base/footer');
	}

	public function GestionarNoticias(){
		$this->load->model('Anuncios_Model');
		$anuncio=$this->Anuncios_Model->listarAnuncios();
		$datos = array('Anuncios'=>$anuncio);
		//cargando vistas
		$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Gestionar_Noticias',$datos);
		$this->load->view('administrador/base/footer');
	}
	public function eliminarAnuncio(){
			$id= $this->input->GET('id');
			$this->load->model('Anuncios_Model');
			$bool=$this->Anuncios_Model->EliminarAnuncio($id);
			if($bool){
				echo '<script type="text/javascript">	
					self.location ="'.base_url().'/Anuncios/GestionarNoticias"
				</script>';
			}
			else{
				echo '<script type="text/javascript">
					alert("ERROR");
					self.location ="'.base_url().'Anuncios/GestionarNoticias"
					</script>';
			}
	}
	public function EditarNoticias(){
		$id=$this->input->GET('id');
		$this->load->model('Anuncios_Model');
		$noticia = $this->Anuncios_Model->VerAnuncio($id);
		$data=array('Noticia'=>$noticia);
		$this->load->view('administrador/base/header');
		$this->load->view('anuncios/Editar_Noticia', $data);
		$this->load->view('administrador/base/footer');
	}
	public function Editar(){
		$datos=$this->input->POST();
		if($nombre=$_FILES['imagenN']['name']==""){
			$nombre=$datos['Imagen'];
		}
		else{
			$nombre=$_FILES['imagenN']['name'];
	    	$tempo= $_FILES['imagenN']['tmp_name'];
	    	$dir="plantilla/img_anuncios/";
	    	move_uploaded_file($tempo, $dir.$nombre);
		}
	    //$imagenconvert= file_get_contents($dir.$nombre);
	    $this->load->model('Anuncios_Model');
	    $bool= $this->Anuncios_Model->editarAnuncio($nombre, $datos);
	    if($bool){
	    	echo '<script type="text/javascript">
				alert("Anuncio editado con exito");
				self.location ="'.base_url().'Anuncios/GestionarNoticias"
				</script>';
	    }
	    else{
	    	echo '<script type="text/javascript">alert("Error al editar los datos")</script>';
	    }

	}

	public function BuscarPor(){
		if ($this->input->is_ajax_request()) {
			$valor = $this->input->POST("buscar");
			$this->load->model('Anuncios_Model');
			$result = $this->Anuncios_Model->BuscarNoticia($valor);
			echo json_encode($result);
		}
		
	}
	public function BuscarFecha(){

		$datos = $this->input->POST();
		if($tipo=$this->session->userdata('login')){
			$this->load->view('administrador/base/header');
		}
		else{
			$this->load->view('administrador/base/headerVisitante');
		}
		$this->load->model('Anuncios_Model');
		$anuncio=$this->Anuncios_Model->AnunciosFecha($datos);
		$datos = array('Anuncios'=>$anuncio);
		$this->load->view('anuncios/lista_anuncios',$datos);
		$this->load->view('administrador/base/footer');
	}

	}


