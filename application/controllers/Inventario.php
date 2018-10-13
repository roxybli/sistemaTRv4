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

		if (!isset($datos['materiaPrimaSeleccionada']))
		{
			echo '<script type="text/javascript">
				alert("Debes seleccionar la materia prima");
				self.location ="'.base_url().'inventario/producto_receta"
				</script>';
		}
		else
		{
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


			if (sizeof($datoss['cantidadInsumo']) == 0)
			{
				echo '<script type="text/javascript">
				alert("No ingresaste todas las cantidades de las materias primas seleccionadas");
				self.location ="'.base_url().'inventario/producto_receta"
				</script>';
			}
			else
			{
				$this->load->model('Inventario_Model');
				$this->Inventario_Model->guardarProcedimiento($datoss);
			}

			//var_dump($datoss);

			//var_dump($datos['cantidadInsumo']);
		}
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
				self.location ="'.base_url().'inventario/productos_proceso"
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


	public function vender_producto($p)
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductoTerminado($id, $p);
		$data = array('datos' => $datos);

		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/venta_producto', $data);
		$this->load->view('administrador/base/footer2');

	}

	public function venderProducto()
	{
		$datos = $this->input->post();
		$this->load->model('Inventario_Model');
		$bool = $this->Inventario_Model->efectuarVenta($datos);

	}

	public function ventasRealizadas()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->obtenerVentas($id);
		$data = array('datos' => $datos);


		$this->load->view('administrador/base/header');
		$this->load->view('administrador/inventario/ventas_realizadas', $data);
		$this->load->view('administrador/base/footer2');
	}

	public function reporteInventario()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosTerminados($id);
		$fecha = date("d-m-Y");
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
			    text-align:left;
			    background-color:#000d5a;
			    color:#fff;
			    
			}
			table td{
			    border:1px solid #000;
			    padding:10px;
			    text-align:left;  
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
					<img src='".base_url()."plantilla/images/LogoCM.jpg'>
			    </div>
			    <div class='textoCentral'>
				    <p>CIUDAD MUJER, EL SALVADOR <br>
				    REPORTE DE INSUMOS</p>   
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
			        <tr >
				        <th>Producto</th>
				        <th>Cantidad</th>
				        <th>Precio</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";



		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($datos->result() as $fila)
		        {

		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->Existencia_Producto;
					$precio = $fila->Precio_Producto;
					$monto = $fila->Precio_Producto;

					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);

		            $html.="<tr><td>" . $nombre . "</td><td>" . $cantidad. "</td><td>" . $precio. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos terminados </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";

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

	public function reporteVentas()
	{
		$id = $this->session->userdata('id');
		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->obtenerVentas($id);
		if (sizeof($datos->result())!=0) 
		{
			$this->load->library('M_pdf');

			$fecha = date("d-m-Y");
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
			    text-align:left;
			    background-color:#000d5a;
			    color:#fff;
			    
			}
			table td{
			    border:1px solid #000;
			    padding:10px;
			    text-align:left;  
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
					<img src='".base_url()."plantilla/images/LogoCM.jpg'>
			    </div>
			    <div class='textoCentral'>
				    <p>CIUDAD MUJER, EL SALVADOR <br>
				    REPORTE DE INSUMOS</p>   
			    </div>
			    </div>";
			      foreach ($datos->result() as $user)
		        {}

			$html .= "<br>
			    <strong style='font-weight: bold;'>Resumen de ventas  de $user->Nombre $user->Apellido hasta la fecha  $fecha</strong>

			</div>
			<br>
			        
			<div class='table-responsive container'>
			      
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr >
				        <th>Producto</th>
				        <th>Cantidad</th>
				        <th>Fecha</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";



		          $totalVendido = 0;
		          $dinero =0; 
		         foreach ($datos->result() as $fila)
		        {

		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->Cantidad_Venta;
					$precio = $fila->Fecha_Venta;
					$monto = $fila->Precio_Producto;
					$totalVendido = $totalVendido + $cantidad;
					$dinero = $dinero + ($monto*$cantidad);

		            $html.="<tr><td>" . $nombre . "</td><td>" . $cantidad. "</td><td>" . $precio. "</td><td>$" . $monto*$cantidad. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos vendidos </th>
						<th>$totalVendido</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";

				$html .= "</table></div>";

		 

		         $pdfFilePath = "resumen de ventas.pdf";
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

	public function reporteInventarioEnProceso()
	{
		$id = $this->session->userdata('id');

		$this->load->model('Inventario_Model');
		$datos = $this->Inventario_Model->mostrarProductosProceso($id);
		if (sizeof($datos->result())!=0) 
		{
			$this->load->library('M_pdf');
			$fecha= date("d-m-Y");
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
			    text-align:left;
			    background-color:#000d5a;
			    color:#fff;
			    
			}
			table td{
			    border:1px solid #000;
			    padding:10px;
			    text-align:left;  
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
					<img src='".base_url()."plantilla/images/LogoCM.jpg'>
			    </div>
			    <div class='textoCentral'>
				    <p>CIUDAD MUJER, EL SALVADOR <br>
				    REPORTE DE INSUMOS</p>   
			    </div>
			    </div>";

			    foreach ($datos->result() as $user)
		        {}

			$html .="<br>
			    <strong style='font-weight: bold;'>Resumen de productos en proceso de $user->Nombre $user->Apellido hasta la fecha  $fecha</strong>

			</div>
			<br>
			        
			<div class='table-responsive container'>
			      
			        <table class='table table table-bordered'>
			        <thead class='active' >
			        <tr >
				        <th>Producto</th>
				        <th>Cantidad</th>
				        <th>Precio</th>
				        <th>Monto</th>
			        </tr>
			        </thead>
			        <tbody>";



		          $totalProceso = 0;
		          $dinero =0; 
		         foreach ($datos->result() as $fila)
		        {

		            
		            $nombre = $fila->Nombre_Producto ;
					$cantidad = $fila->Existencia_Producto;
					$precio = $fila->Precio_Producto;
					$monto = $fila->Precio_Producto * $cantidad;

					$totalProceso = $totalProceso + $cantidad;
					$dinero = $dinero + $monto;

		            $html.="<tr><td>" . $nombre . "</td><td>" . $cantidad. "</td><td>" . $precio. "</td><td>$" . $monto. "</td></tr>";
		        }
		        $html .= "<tr>
						<th colspan='3'>Total de productos en proceso </th>
						<th>$totalProceso</th>
						</tr>";
				$html .= "<tr>
						<th colspan='3'>Total de dinero </th>
						<th>$$dinero</th>
						</tr>";

				$html .= "</table></div>";

		 

		         $pdfFilePath = "resumen de productos en proceso.pdf";
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


}