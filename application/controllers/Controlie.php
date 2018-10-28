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

	public function detalleBalancePDF($fecha)
	{
		$this->load->model('Controlie_Model');
		$datos = $this->Controlie_Model->detalleBalance($fecha);

		if (sizeof($datos->result())!=0) 
		{
			$this->load->library('M_pdf');

	        $data = [];

	        $hoy = date("dmyhis");
			$html="
			 <style>
			table{
			    border:1px solid #000;
			    border-collapse:collapse;
			    text-align:center;
			    width:100%;
			    
			}
			table th{
			    border:1px solid #000;
			    padding:10px;
			    text-align:center;
			    background-color:#000d5a;
			    color:#fff;
			    
			}
			table td{
			    border:1px solid #000;
			    padding:10px;
			    text-align:center;  
			}


			p {
			    text-align:center;
			}


			img {
			    text-align:left;
			    float:left;
			    width: 100px;
			    height: 110px;

			}

			#cabecera{
				width: 1000px;
			}
			#img{
				float:left;
				margin-left: 30px;
				width: 125px;

			}
			.textoCentral{
				color: #000;
				font-weight: bold;
				float:right;
				padding-left: 20px;
				margin: 0 auto;
				text-align: center;
				line-height:: 50;
				width: 475px;

				line-height: 26px;
			}
			#totalDG{
				 background-color: rgba(0, 0, 255, 0.2);
			}

			 </style>
			 <div class='container'>

			    <div id='cabecera'>
					<div id='img'>
						<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
				    </div>
				    <div class='textoCentral'>
					    ".strtoupper($this->session->userdata('nombreNegocio'))."<br>
					    BALANCE DE INGRESOS Y EGRESOS</p>   
				    </div>
			    </div>";

			     foreach ($datos->result() as $user)
		        {}

			$html .= "<br>
			    <strong style='font-weight: bold;'>Resumen de inventario de $user->Nombre $user->Apellido hasta la fecha  $fecha</strong>

			</div>
			<br>
			        
			<div class='table-responsive container'>
			      
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr>
	                    <th>Fecha</th>
	                    <th>Operacion</th>
	                    <th>Egreso de dinero</th>
	                    <th>Ingreso</th>
	                    <th>Balance</th>
	                </tr>
			        </thead>
			        <tbody>";

                        $contador=0;
                        $ime=0;
                        foreach ($datos->result() as $filaDatos)
                        {
                           $html .="<tr>
                               <td class='text-primary'><span>$filaDatos->Fecha_Balance</span></td>
                               <td class='text-primary'><span>$filaDatos->Nombre_Operacion - $filaDatos->Nombre_Egreso</span></td>
                               <td class='text-primary'><span>$".$filaDatos->Cantidad_Egreso."</span></td>";
                            if ($contador == 0)
                            {
                                $ime = $filaDatos->Total_Ingreso;
                                $html .= "<td class='text-primary'><span>$".$filaDatos->Total_Ingreso."</span></td>";     
                            }
                            else
                            {
                                $html .= "<td class='text-primary'><span>$".$ime ."</span></td>";
                            }
                            $ime = $ime - $filaDatos->Cantidad_Egreso;
                                
                               $html .= "<td class='text-primary'><span>$".$ime."</span></td>
                            </tr>";
                                  $contador++;
                            }

                      $html .=  "<tr id='totalDG'>
				            <td colspan='4' class='text-center'><h3>Total despues de gastos</h3></td>
				            <td colspan='2'><span class='btn btn-primary form-control'>$".$ime."</span></td>
				        </tr></tbody>";

				$html .= "</table></div>";

		 

		         $pdfFilePath = "resumen de inventario.pdf";
		         //load mPDF library
		        $this->load->library('M_pdf');
		         $mpdf = new mPDF('c', 'A4'); 

		         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
		         //echo $estilos;
		         $mpdf->SetDisplayMode('fullpage');
		         $mpdf->WriteHTML($estilos,1);
		 
		        $mpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		       // $mpdf->SetFont('','',40); 
		         $mpdf->shrink_tables_to_fit = 1;
		       
		        $mpdf->WriteHTML($html);


		        $mpdf->Output($pdfFilePath, "I");

				}
			else
			{
				echo '<script type="text/javascript">
					alert("No hay datos que mostrar !!!");
					window.close();
					self.location ="'.base_url().'reportes/trabajosRealizados"
					</script>';
			}

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

			$data = array('ingresos' => $ingresos, 'egresos'=>$egresos, 'mes' => $mes);
			$this->load->view('administrador/base/header');
			$this->load->view('administrador/controlie/detalle_resumen', $data);
			$this->load->view('administrador/base/footer2');		
	}

	public function resumenMensualIEPDF($mes)
	{

			$a = date('Y');
			$fechaI = $a.'-'.$mes.'-01';
			$fechaF = $a.'-'.$mes.'-31';
			$id = $this->session->userdata('id');


			$this->load->model("Controlie_Model");
			$ingresos = $this->Controlie_Model->resumenIngresos($id, $fechaI, $fechaF);
			$egresos = $this->Controlie_Model->resumenEgresos($id, $fechaI, $fechaF);

			if (sizeof($ingresos->result())!=0 || sizeof($egresos->result())!=0) 
			{
				$this->load->library('M_pdf');

		        $data = [];

		        $hoy = date("dmyhis");
				$html="
				 <style>
				table{
				    border:1px solid #000;
				    border-collapse:collapse;
				    text-align:center;
				    width:100%;
				    
				}
				table th{
				    border:1px solid #000;
				    padding:10px;
				    text-align:CENTER;
				    background-color:#000d5a;
				    color:#fff;
				    
				}
				table td{
				    border:1px solid #000;
				    padding:10px;
				    text-align:CENTER;  
				}


				p {
				    text-align:center;
				}


				img {
				    text-align:left;
				    float:left;
				    width: 100px;
				    height: 110px;

				}

				#cabecera{
					width: 1000px;
				}
				#img{
					float:left;
					margin-left: 30px;
					width: 125px;

				}
				.textoCentral{
					color: #000;
					font-weight: bold;
					float:right;
					padding-left: 20px;
					margin: 0 auto;
					text-align: center;
					line-height:: 50;
					width: 475px;

					line-height: 26px;
				}

				 </style>
				 <div class='container'>

				    <div id='cabecera'>
						<div id='img'>
							<img src='".base_url()."plantilla/img_perfil/".$this->session->userdata('fotoUsuaria')."'>
					    </div>
					    <div class='textoCentral'>
						    ".strtoupper($this->session->userdata('nombreNegocio'))."<br>
						    REPORTE DE INGRESOS Y EGRESOS</p>   
					    </div>
				    </div>";
				    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre',];
				    foreach ($ingresos->result() as $user) 
				    {}
				$html .= "<br>
				    <strong style='font-weight: bold;'>Resumen ingresos y egresos de $user->Nombre $user->Apellido
				    correspondiente al mes de ".$meses[$mes-1]."</strong>

				</div>
				<br>
				        
				<div class='table-responsive container'>
				      
				        <table class='table table table-bordered'>
				        <thead class='active' >
				        <tr>
	                        <th colspan='2' class='text-center' style='color:#fff'>INGRESOS</th>
	                    </tr>
				        </thead>
				        <tbody>";


	                        $totalI=0;
	                        foreach ($ingresos->result() as $ingresos)
	                        {
		                      $html .=  "<tr>
		                            <td class='text-center'>$ingresos->Nombre_Ingreso</td>
		                            <td class='text-center'>$".$ingresos->Cantidad_Ingreso."</td>
		                        </tr>";
		                    	$totalI = $totalI + $ingresos->Cantidad_Ingreso; 
		                    } 
		                   $html .= "<tr style='background-color: rgba(0, 13, 90, 0.2)'>
				                        <td class='text-center'>Total de ingresos</td>
				                        <td class='text-center'>$".$totalI."</td>
				                    </tr>";
				           $html .="<tr>
	   			                        <th colspan='2' class='text-center' style='color:#fff'>EGRESOS</th>
	   			                    </tr>";
	                        
	                        $totalE=0;
	                        foreach ($egresos->result() as $egresos)
	                        {
		                        $html .= "<tr>
		                            <td class='text-center'> $egresos->Nombre_Egreso</td>
		                            <td class='text-center'>$".$egresos->Cantidad_Egreso."</td>
		                        </tr>";
		                    	$totalE = $totalE + $egresos->Cantidad_Egreso; 
	                        } 
	                        $html .= "<tr style='background-color: rgba(0, 13, 90, 0.2)'>
	                            <td class='text-center'>Total de egresos</td>
	                            <td class='text-center'>$".$totalE."</td>
	                        </tr>";

			         
					$html .= "</table></div>";

			 

			         $pdfFilePath = "resumen de ingresos y egresos.pdf";
			         //load mPDF library
			        $this->load->library('M_pdf');
			         $mpdf = new mPDF('c', 'A4'); 

			         $estilos=file_get_contents(base_url()."plantilla/css/bootstrap.min.css");
			         //echo $estilos;
			         $mpdf->SetDisplayMode('fullpage');
			         $mpdf->WriteHTML($estilos,1);
			 
			        $mpdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
			       // $mpdf->SetFont('','',40); 
			         $mpdf->shrink_tables_to_fit = 1;
			       
			        $mpdf->WriteHTML($html);


			        $mpdf->Output($pdfFilePath, "I");

					}
				else
				{
					echo '<script type="text/javascript">
						alert("No hay datos que mostrar !!!");
						window.close();
						self.location ="'.base_url().'reportes/trabajosRealizados"
						</script>';
				}
			

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