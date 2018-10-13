<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlie extends CI_Controller {
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
		$this->load->view('administrador/controlie/index');
		$this->load->view('administrador/base/footer2');

	}


	public function procesarIE()
	{
		$this->load->view('administrador/base/header');
		$this->load->model('Controlie_Model');

		// Ingresos y egresos Bases
		$ingresosB = $this->Controlie_Model->obtenerIngresosBases();
		$egresosB = $this->Controlie_Model->obtenerEgresosBases();


		$idUsuario = $this->session->userdata('id');
		$ingresos = $this->Controlie_Model->obtenerIngreso2($idUsuario);
		$egresos = $this->Controlie_Model->obtenerEgreso2($idUsuario);

		if (sizeof($ingresos->result())==0 && sizeof($egresos->result())==0)
		{
			$data = array('ingresos' => $ingresosB, 'egresos' => $egresosB);
		}
		else
		{

			$data = array('ingresos' => $ingresos, 'egresos' => $egresos);
		}


		$this->load->view('administrador/controlie/control_ie', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function resumenIE()
	{
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/controlie/resumen_ie');
		$this->load->view('administrador/base/footer2');
	}

	public function estadisticaMensualIE()
	{

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/controlie/estadisticas_ie');
		$this->load->view('administrador/base/footer2');
	}


	public function guardarDatos()
	{
		$datos = $this->input->post();

		// Buscando posiciones vacias en los ingresos
		$contadorIngresosN=0;
		$contadorIngresosD=0;
		for ($i=0; $i < sizeof($datos['ingresosN']); $i++)
		{ 
			if ($datos['ingresosN'][$i]!="")
			{
				/*echo '<script type="text/javascript">
				alert("Error: No ingresaste todos los datos !!!");
				self.location ="'.base_url().'controlie/"
				</script>';
				break;*/
				$contadorIngresosN = $contadorIngresosN+1;
			}
			if ($datos['ingresosD'][$i]!="")
			{
				/*echo '<script type="text/javascript">
				alert("Error: No ingresaste todos los datos !!!");
				self.location ="'.base_url().'controlie/"
				</script>';
				break;*/
				$contadorIngresosD = $contadorIngresosD+1;
			}
		}

		$contadorEgresosN=0;
		$contadorEgresosD=0;
		for ($i=0; $i < sizeof($datos['egresosN']); $i++)
		{ 
			if ($datos['egresosN'][$i]!="")
			{
				/*echo '<script type="text/javascript">
				alert("Error: No ingresaste todos los datos !!!");
				self.location ="'.base_url().'controlie/"
				</script>';
				break;*/
				$contadorEgresosN = $contadorEgresosN+1;
			}

			if ($datos['egresosD'][$i]!="")
			{
				/*echo '<script type="text/javascript">
				alert("Error: No ingresaste todos los datos !!!");
				self.location ="'.base_url().'controlie/"
				</script>';
				break;*/
				$contadorEgresosD = $contadorEgresosD+1;
			}
		}
		/*var_dump($datos['egresosN']);
		echo "<br>Ingreso N ".$contadorIngresosN."<br>";
		echo "Ingreso D ".$contadorIngresosD."<br>";
		echo "Egreso N ".$contadorEgresosN."<br>";
		echo "Egreso D ".$contadorEgresosD;*/

		if (sizeof($datos['ingresosN'])== $contadorIngresosN && sizeof($datos['ingresosD'])== $contadorIngresosD
			&& sizeof($datos['egresosN'])== $contadorEgresosN && sizeof($datos['egresosD'])== $contadorEgresosD)
		{
			/*echo "<br>Todo nice<br>";
				var_dump($datos['ingresosN'])."<br>";
				echo "<br>";
				var_dump($datos['ingresosD'])."<br>";
				echo "<br>";
				var_dump($datos['egresosN'])."<br>";
				echo "<br>";
				var_dump($datos['egresosD'])."<br>";
				echo "<br>";
				var_dump($datos['estadoE'])."<br>";*/

				$idUsuario = $this->session->userdata('id');

				$this->load->model('Controlie_Model');
				$bool = $this->Controlie_Model->guardarIE($datos, $idUsuario);

				if ($bool== false)
				{
					echo '<script type="text/javascript">
						alert("Error al guardar los datos !!!");
						self.location ="'.base_url().'controlie/"
						</script>';

				}
				else
				{
					if ($bool)
					{
						//$fecha = $datos['fechaIE'];
						echo '<script type="text/javascript">
						alert("Insumos guardados correctamente !!!");
						self.location ="'.base_url().'controlie/procesarIE"
						</script>';

					}
				}

		}
		else
		{
			echo '<script type="text/javascript">
				alert("Error: No ingresaste todos los datos requeridos !!!");
				self.location ="'.base_url().'controlie/procesarIE"
				</script>';
		}

	}

	public function validarEgresos()
	{
		$fecha = $_GET['f'];
		$this->load->model('Controlie_Model');
		$idUsuario = $this->session->userdata('id');
		$ingresos = $this->Controlie_Model->obtenerIngreso($fecha, $idUsuario);
		$egresos = $this->Controlie_Model->obtenerEgreso($fecha, $idUsuario);

		$data = array('ingresos' => $ingresos, 'egresos' => $egresos, 'fecha'=> $fecha );
		$this->load->view('administrador/base/header');
		$this->load->view('administrador/controlie/procesar_egresos', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function dEgreso()
	{
		$datos = $this->input->post();
		
		$this->load->model('Controlie_Model');
		$bool = $this->Controlie_Model->procesarEgresos($datos);

		if ($bool== false)
		{
			echo '<script type="text/javascript">alert("Error al realizar la operacion")</script>';

		}
		else
		{
			if ($bool)
			{
				$fecha = $datos['fechaEgresos'];
				echo '<script type="text/javascript">
				alert("Operacion realizada exitosamente !!!");
				self.location ="'.base_url().'controlie/validarEgresos?f='.$fecha.'"
				</script>';

			}
		}
	}

	public function balances()
	{
		$this->load->model('Controlie_Model');
		$idUsuario = $this->session->userdata('id');
		$datos = $this->Controlie_Model->obtenerBalances($idUsuario);
		$data = array('datos'=> $datos );

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/controlie/balances', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function detalleBalance()
	{
		$this->load->model('Controlie_Model');
		$fecha = $_GET['f'];
		$datos = $this->Controlie_Model->detalleBalance($fecha);
		$data = array('datos'=> $datos, 'fecha' => $fecha );

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/controlie/detalle_balance', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function resumenMensualIE()
	{
			$d = $this->input->post();
			$mes =$d['mesResumen'];

			$a = date('Y');
			$fechaI = $a.'-'.$mes.'-01';
			$fechaF = $a.'-'.$mes.'-31';
			$id = $this->session->userdata('id');

			$this->load->model("Controlie_Model");
			$ingresos = $this->Controlie_Model->resumenIngresos($id, $fechaI, $fechaF);
			$egresos = $this->Controlie_Model->resumenEgresos($id, $fechaI, $fechaF);

			$data = array('ingresos' => $ingresos, 'egresos'=>$egresos);
			$this->load->view('administrador/base/header');
			$this->load->view('administrador/controlie/detalle_resumen', $data);
			$this->load->view('administrador/base/footer2');		
	}


	public function estadisticaMIE()
	{
			$d = $this->input->post();
			$mes =$d['mesResumen'];

			$a = date('Y');
			$fechaI = $a.'-'.$mes.'-01';
			$fechaF = $a.'-'.$mes.'-31';
			$id = $this->session->userdata('id');

			$this->load->model("Controlie_Model");
			$ingresos = $this->Controlie_Model->estadisticaIE($id, $fechaI, $fechaF);
			$egresos = $this->Controlie_Model->estadisticaIEE($id, $fechaI, $fechaF);

			$data = array('ingresos' => $ingresos, 'egresos' => $egresos);
			$this->load->view('administrador/base/header');
			$this->load->view('administrador/controlie/detalle_estadistica', $data);
			$this->load->view('administrador/base/footer2');		
	}

}