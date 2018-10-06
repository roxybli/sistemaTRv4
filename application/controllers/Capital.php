<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Capital extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login'))
		{
			echo '<script type="text/javascript">
				alert("Debes iniciar sesion !!!");
				self.location ="'.base_url().'"
				</script>';
		}
	}

	public function index()
	{
		$this->load->view('administrador/base/header');
		
		$this->load->view('administrador/capital/index');
		$this->load->view('administrador/base/footer2');
	}

	public function ingresarNegocio()
	{
		$this->load->view('administrador/base/header');
		
		$this->load->Model("Capital_Model");
		$datos = $this->Capital_Model->obternerRubros();
		$data = array('datos' => $datos );
		
		$this->load->view('administrador/capital/capital_inicial', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function guardarDatosNegocio()
	{
		$datos = $this->input->post();

		$this->load->model("Capital_Model");

		$this->Capital_Model->guardarNegocio($datos);
		
	}

	public function negocios()
	{
		$this->load->view('administrador/base/header');
		$this->load->Model("Capital_Model");
		$datos = $this->Capital_Model->obternerRubros();
		$data = array('datos' => $datos );
		$this->load->view('administrador/capital/negocios', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function detalleNegocio($id)
	{
		$this->load->model("Capital_Model");
		$datos = $this->Capital_Model->detalleNegocio($id);
		$data = array('datos' => $datos );

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/capital/detalle_negocio', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function detalleCapital()
	{
	    $dato = $this->input->post();
	    $id =  $dato['rubro'];
		$this->load->Model("Capital_Model");
		$datos = $this->Capital_Model->obtenerNegocios($id);
		$data = array('datos' => $datos );



	    $this->load->view('administrador/base/header');
		$this->load->view('administrador/capital/negocios_rubro', $data);
		$this->load->view('administrador/base/footer2');
	}


}