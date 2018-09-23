<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insumos extends CI_Controller {
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
		$this->load->view('administrador/inventario/insumos/index');
		$this->load->view('administrador/base/footer2');

	}


	public function insumosExistentes()
	{
		$this->load->model('Insumos_Model');
		$id = $this->session->userdata('id');
		$insumos = $this->Insumos_Model->mostrarInsumos($id);
		$data = array('insumos' => $insumos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/insumos/insumos_existentes', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function guardarInsumos()
	{

		$datos = $this->input->post();
		for ($i=0; $i < sizeof($datos['nombreInsumos']); $i++)
		{ 
			if ($datos['nombreInsumos'][$i]=="" || $datos['cantidaInsumo'][$i]=="" || $datos['precioInsumo'][$i]=="" || $datos['medidasInsumo'][$i]=="" || $datos['tipoInsumo'][$i]=="")
			{
				echo '<script type="text/javascript">
				alert("Error: No ingresaste todos los datos !!!");
				self.location ="'.base_url().'insumos/"
				</script>';
				break;
			}
		}
		$this->load->model('Insumos_Model');
		$id = $this->session->userdata('id');
		$bool = $this->Insumos_Model->guardarInsumos($datos, $id);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al guardar los insumos")</script>';

		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				alert("Insumos guardados correctamente !!!");
				self.location ="'.base_url().'insumos/"
				</script>';
			}
		}
	}

	public function datosInsumo()
	{
		$id = $_GET['i'];
		$this->load->Model("Insumos_Model");

		$datos = $this->Insumos_Model->datosIndumo($id);


		$data = array('datos' => $datos );

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/insumos/actualizar_insumo', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function actualizarInsumo()
	{
		$datos = $this->input->post();

		$this->load->Model("Insumos_Model");

		$bool = $this->Insumos_Model->actualizarInsumo($datos);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al actualizar los datos")</script>';

		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				alert("Insumo actualizado correctamente !!!");
				self.location ="'.base_url().'insumos/insumosExistentes"
				</script>';
			}
		}
	}

	public function eliminarInsumo()
	{
		$id = $_GET['i'];
		$this->load->Model("Insumos_Model");

		$bool = $this->Insumos_Model->eliminarInsumo($id);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al eliminar los datos")</script>';

		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				alert("Insumo eliminado correctamente !!!");
				self.location ="'.base_url().'insumos/insumosExistentes"
				</script>';
			}
		}
	}

}