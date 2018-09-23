<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventario extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('login'))
		{
			//header("Location:". base_url());
			echo '<script type="text/javascript">
				alert("Debes iniciar sesion !!!");
				self.location ="'.base_url().'"
				</script>';
		}
	}

	public function index()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/inventario_home');
		$this->load->view('administrador/base/footer2');

	}

	public function productos_disponibles()
	{
		$id = $this->session->userdata('id');

		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosTerminados($id);
		$data = array('datos' => $datos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/productos_disponibles', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function producto_receta()
	{
		$this->load->model('Insumos_Model');
		$id = $this->session->userdata('id');
		$insumos = $this->Insumos_Model->mostrarInsumos($id);
		$data = array('insumos' => $insumos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/producto_receta', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function consultar_receta()
	{
		$this->load->model('Inventario_Model');
		$id = $this->session->userdata('id');
		$datos = $this->Inventario_Model->procedimientosExistentes($id);

		$data = array('datos' => $datos);
		
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/consultar_receta', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function guardarProcedimiento()
	{
		$datos = $this->input->post();
		for ($i=0; $i < sizeof($datos['cantidadInsumo']); $i++)
		{ 
			if ($datos['cantidadInsumo'][$i] <= 0)
			{
				unset($datos['idInsumos'][$i]);
				unset($datos['nombreInsumo'][$i]);
				unset($datos['medidaInsumo'][$i]);
			}
		}
		$cantidadI = array();
		for ($i=0; $i < sizeof($datos['cantidadInsumo']); $i++)
		{ 
			if ($datos['cantidadInsumo'][$i] != 0)
			{
				//unset($datos['cantidadInsumo'][$i]);
				array_push($cantidadI, $datos['cantidadInsumo'][$i] );

			}
		}

		$datoss = array();

		sort($datos['idInsumos']);
		//var_dump($datos['idInsumos']);

		sort($datos['medidaInsumo']);
		//var_dump($datos['nombreInsumo']);

		//var_dump($cantidadI);

		$datoss['materiaPrimaSeleccionada' ] = $datos['materiaPrimaSeleccionada'];
		$datoss['medidaInsumo' ] = $datos['medidaInsumo'];
		$datoss['cantidadInsumo' ] = $cantidadI;

		$datoss['nombreProducto' ]  = $datos['nombreProducto'];
		$datoss['precioProducto' ]  = $datos['precioProducto'];
		$datoss['idUsuario' ]  = $datos['idUsuario'];

		//var_dump($datoss);

		//var_dump($datos['cantidadInsumo']);
		$this->load->model('Inventario_Model');
		$this->Inventario_Model->guardarProcedimiento($datoss);
	}

	public function detalleProcedimiento()
	{
		$id =$_GET['e'];
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->detalleProcedimiento($id);
		$data = array('datos' => $datos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/detalle_procedimiento', $data);
		$this->load->view('administrador/base/footer2');

	}


	public function guardarProducto()
	{
		$datos = $this->input->post();

		$this->load->model('Inventario_Model');
		$direccion = $this->session->userdata('direccion');
		$bool = $this->Inventario_Model->guardarProducto($datos, $direccion);
		//var_dump($data);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al guardar los insumos")</script>';

		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				alert("Su producto esta en proceso !!!");
				self.location ="'.base_url().'inventario/productos_disponibles"
				</script>';
			}
		}


	}

	public function productosProceso()
	{
		$id = $this->session->userdata('id');

		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosProceso($id);
		$data = array('datos' => $datos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/productos_proceso', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function actualizarProducto()
	{
		$id = $_GET['e'];
		$this->load->model('Inventario_Model');
		$bool = $this->Inventario_Model->actualizarProducto($id);
		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al realizar operacion")</script>';

		}
		else
		{
			if ($bool)
			{
				echo '<script type="text/javascript">
				alert("Operacion realizada con exito !!!");
				self.location ="'.base_url().'inventario/productos_disponibles"
				</script>';
			}
		}
	}


}