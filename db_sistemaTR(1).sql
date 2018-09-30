-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2018 at 03:19 PM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistemaTR`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Anuncios`
--

CREATE TABLE `tbl_Anuncios` (
  `pk_Id_Anuncio` int(11) NOT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  `Titulo` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Anuncios`
--

INSERT INTO `tbl_Anuncios` (`pk_Id_Anuncio`, `Contenido`, `Titulo`, `Imagen`, `Fecha`) VALUES
(1, 'este el contenido del anuncio', 'este es un anuncio', 'plantilla_temp_Computadora', NULL),
(2, 'Esta es una iniciativa para poder contribuir a disminuir la violencia en nuestro querido el Salvador!\r\n\r\nEl Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', 'Carrera por una vida sin violencia.', 'img12.jpg', NULL),
(3, 'Este es un voletin bla bla bla...\r\n\r\nEl Lorem Ipsum fue concebido como un texto de relleno, formateado de una cierta manera para permitir la presentación de elementos gráficos en documentos, sin necesidad de una copia formal. El uso de Lorem Ipsum permite a los diseñadores reunir los diseños y la forma del contenido antes de que el contenido se haya creado, dando al diseño y al proceso de producción más libertad.', 'Voletin informativo', 'page_1.jpg', '2018-08-10'),
(4, 'este es mi anuncio', 'UN ANUNCIO PARA PROBAR MAYUSCULAS', 'estadisticas.png', '2018-08-22'),
(5, 'holaf', 'UN ANUNCIO', '', '2018-08-16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Balance`
--

CREATE TABLE `tbl_Balance` (
  `PK_Id_Balance` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Fecha_Balance` date NOT NULL,
  `Total_Ingreso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Balance`
--

INSERT INTO `tbl_Balance` (`PK_Id_Balance`, `FK_Id_Usuario`, `Fecha_Balance`, `Total_Ingreso`) VALUES
(25, 1, '2018-08-31', 800),
(26, 1, '2018-08-31', 1100),
(27, 1, '2018-08-31', 1000),
(28, 1, '2018-09-01', 1100),
(29, 1, '2018-08-30', 1000.5),
(30, 1, '2018-09-30', 250),
(31, 1, '2018-10-31', 795),
(32, 2, '2018-08-31', 500.99),
(33, 1, '2018-07-31', 883),
(34, 1, '2018-09-04', 870),
(35, 1, '2018-10-01', 0),
(36, 1, '2018-11-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Categoria_Elementos`
--

CREATE TABLE `tbl_Categoria_Elementos` (
  `Pk_Id_Categoria_Elemento` int(11) NOT NULL,
  `Nombre_Categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Categoria_Elementos`
--

INSERT INTO `tbl_Categoria_Elementos` (`Pk_Id_Categoria_Elemento`, `Nombre_Categoria`) VALUES
(1, 'Equipamiento'),
(2, 'Insumos');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Egresos`
--

CREATE TABLE `tbl_Egresos` (
  `Pk_Id_Egreso` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Nombre_Egreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Egreso` float NOT NULL,
  `Fecha_Egreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Egresos`
--

INSERT INTO `tbl_Egresos` (`Pk_Id_Egreso`, `FK_Id_Usuario`, `Nombre_Egreso`, `Cantidad_Egreso`, `Fecha_Egreso`) VALUES
(112, 1, 'Compras en efectivo', 400, '2018-10-01'),
(113, 1, 'Efectivo pagado por compras al credito', 200, '2018-10-01'),
(114, 1, 'Salarios', 250, '2018-10-01'),
(115, 1, 'Renta', 100, '2018-10-01'),
(116, 1, 'Pago de préstamos', 0, '2018-10-01'),
(117, 1, 'Otros', 0, '2018-10-01'),
(118, 1, 'Pago de Luz', 50, '2018-10-01'),
(119, 1, 'Compras en efectivo', 500, '2018-11-01'),
(120, 1, 'Efectivo pagado por compras al credito', 100, '2018-11-01'),
(121, 1, 'Otros', 50, '2018-11-01'),
(122, 1, 'Pago de Luz', 50, '2018-11-01'),
(123, 1, 'Pago de préstamos', 0, '2018-11-01'),
(124, 1, 'Renta', 100, '2018-11-01'),
(125, 1, 'Salarios', 250, '2018-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Elementos_Subrubros`
--

CREATE TABLE `tbl_Elementos_Subrubros` (
  `Pk_Id_Elemento_Subrubro` int(11) NOT NULL,
  `Nombre_Elemento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Elemento` int(11) DEFAULT NULL,
  `Precio_Elemento` float NOT NULL,
  `Medida_Elemento` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fk_Id_Categoria_Elemento` int(11) NOT NULL,
  `Fk_Id_Subrubro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Elementos_Subrubros`
--

INSERT INTO `tbl_Elementos_Subrubros` (`Pk_Id_Elemento_Subrubro`, `Nombre_Elemento`, `Cantidad_Elemento`, `Precio_Elemento`, `Medida_Elemento`, `Fk_Id_Categoria_Elemento`, `Fk_Id_Subrubro`) VALUES
(1, 'Harina', 10, 0.9, 'Libras ', 2, 18),
(2, 'Agua', 6, 1, 'Litros ', 2, 18),
(3, 'Mesa', 3, 50, ' ', 1, 18),
(4, 'Horno', 1, 500, ' ', 1, 18),
(5, 'Sillas', 6, 5, ' ', 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Guias_Multimedia`
--

CREATE TABLE `tbl_Guias_Multimedia` (
  `pk_Id_Guia` int(11) NOT NULL,
  `Titulo_Guia` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `Tipo_publicacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Video_Multimedia` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Documento_Guia` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci,
  `Feccha_publicacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Guias_Multimedia`
--

INSERT INTO `tbl_Guias_Multimedia` (`pk_Id_Guia`, `Titulo_Guia`, `Fecha_Publicacion`, `Tipo_publicacion`, `Video_Multimedia`, `Documento_Guia`, `Contenido`, `Feccha_publicacion`) VALUES
(9, 'Tipos de contrato de trabajo en El Salvador', '2018-08-20', 'Documento', '', 'formato-contrato-individual-trabajo.doc', '<span><br>\r\n<img alt=\"contrato de trabajo el Salvador\" width=\"300\" height=\"200\"></span>\r\n\r\n<span>El mundo laboral se caracteriza por\r\nser sumamente variado, tanto en los tipos de trabajo a los que una persona\r\npuede aplicar como la modalidad bajo la cual se es contratado. Así, existen\r\ntrabajos que se desarrollan por tiempos definidos, que pueden ser largos o\r\ncortos, y para cumplir objetivos previamente acordados entre la empresa,\r\norganización y el trabajador.<br>\r\n<br>\r\nEn El Salvador, al igual que en el resto del mundo, existe un marco legal que\r\nregulariza los tipos de contrato de trabajo, con el fin de establecer\r\nparámetros claros que tanto las empresas como los trabajadores deben respetar.\r\nEstas normas se encuentran estipuladas dentro del Código de Trabajo, regulado\r\npor el Ministerio de Trabajo de El Salvador.<br>\r\n<br>\r\nAsí, el tener claro el tipo de contratación que una empresa te ofrece te\r\npermitirá conocer detalles como el reconocimiento de prestaciones de ley, como\r\nseguro social y AFP, el porcentaje de renta que deberán descontarte, las horas\r\nmáximas de trabajo que pueden exigir a la semana, etc.</span>\r\n\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo por tiempo indefinido</span>\r\n\r\n<span><br>\r\nEsta contratación se da cuando el empleado forma parte de un equipo fijo de\r\ntrabajo, para realizar actividades de manera permanente dentro de la empresa.\r\nUna de las características de este tipo de contrato consiste en que no delimita\r\nuna fecha de caducidad del acuerdo entre la empresa y el trabajador. Sin\r\nembargo, al igual que la mayoría de contratos, suele establecer que tanto el\r\ncontratista como el empleado pueden romper el acuerdo en cualquier momento,\r\nsiempre y cuando se respete el marco legal. Los contratos por tiempo indefinido\r\nsuelen otorgarse a:<br>\r\n<br>\r\n• Puestos gerenciales y de alto nivel.<br>\r\n• Representantes de empresas internacionales.<br>\r\n• Plazas de coordinación.<br>\r\n• Plazas dedicadas a la prestación de servicios específicos.</span>\r\n\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo por período determinado</span>\r\n\r\n<span><br>\r\nEsta es una contratación típicamente utilizada para la elaboración de proyectos\r\na corto y mediano plazo, puede firmarse por unos cuantos días hasta varios\r\nmeses o incluso años. Sin embargo, establece desde el acuerdo una fecha de\r\ncaducidad del mismo, usualmente porque se requerirá del empleado un servicio\r\nmeramente temporal. Este tipo de contratos suele utilizarse para empleos como:<br>\r\n<br>\r\n• Construcción.<br>\r\n• Consultorías.<br>\r\n• Para suplir permisos de empleados fijos (como licencias de maternidad).<br>\r\n• Proyectos ejecutados para un período determinado de tiempo.</span>\r\n\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo por servicios profesionales</span>\r\n\r\n<span><br>\r\nComo su nombre lo indica, estos contratos suceden cuando la empresa solicita servicios\r\nespecíficos a un profesional, quien suele trabajar como consultor. Normalmente,\r\nel contrato por servicios profesionales se acuerda en base a productos\r\nespecíficos que el empleado debe entregar y la empresa recibir de manera\r\nconforme. Al mismo tiempo, este tipo de contrataciones no reconocen las\r\nprestaciones de ley ni otorgan al empleado un lugar fijo dentro de las\r\ninstalaciones de la institución.<br>\r\n<br>\r\nEste tipo de contratos suele indicar elementos previamente acordados por ambas\r\npartes como tiempos de entrega, pago total por servicios, retención de renta o\r\npago de IVA, según sea el caso, así como productos específicos que el consultor\r\ndeberá entregar. Las empresas recurren a estos contratos para solicitar:<br>\r\n<br>\r\n• Consultorías sobre temas específicos.<br>\r\n• Servicios externos por un período corto de tiempo.<br>\r\n• Productos que pueden ser elaborados de manera “freelance” por un profesional\r\nen el área.<br>\r\n<br>\r\nRespecto a este tipo de contratos, es necesario destacar que es de suma\r\nimportancia que tanto el profesional como la empresa respeten lo acordado al\r\nmomento de firmar, pues esto evitará inconvenientes que puedan requerir\r\nintervención legal para ser solucionados. Por otro lado, el profesional que\r\nacepta este tipo de contratos debe esforzarse para entregar un servicio de calidad,\r\nque le permita hacerse de nuevos clientes para mantener buenas relaciones\r\npersonales y profesionales como consultor independiente.</span>\r\n\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo para un período de prueba</span>\r\n\r\n<span><br>\r\nEs común que las empresas, al momento de contratar un nuevo empleado para una\r\nplaza fija, se determine entregar a este un primer contrato para que se realice\r\nel período de prueba, durante el cual ambas partes pueden dar por terminada la\r\nrelación profesional, a partir de los motivos que estimen convenientes. Estos\r\ncontratos suelen tener una duración de tres meses, pues se considera que es el\r\ntiempo suficiente para que el empleado conozca a la empresa, así como la\r\nempresa al empleado, permitiendo iniciar una relación profesional entre ambas\r\npartes.<br>\r\n<br>\r\nEl código de trabajo de El Salvador indica que al celebrar este tipo de\r\ncontratos, y transcurre el período definido del mismo y ninguna de las partes\r\ndecide terminar, el contrato pasará a ser por tiempo indefinido a menos que se\r\ncree un nuevo contrato con un tiempo determinado. Sin importar cuál sea el\r\ncaso, el contrato por período de prueba no puede celebrarse más de una vez\r\nentre las partes.</span>\r\n\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo para interinatos</span>\r\n\r\n<span><br>\r\nSuelen darse cuando una plaza se ha desocupado y la empresa necesita llenarla\r\nde manera temporal, mientras encuentran un nuevo empleado fijo para la misma.\r\nUna de sus principales características es que permite al empleado que cubrirá\r\nla plaza gozar de los mismos derechos que los empleados fijos, exceptuando la\r\ninmovilidad laboral, si es que estuviese contemplada en la plaza permanente.<br>\r\n<br>\r\nSin embargo, a menos que el empleado interino sea incorporado como permanente\r\ndentro de la empresa, al momento de contar con un nuevo empleado para cubrir la\r\nplaza fija, la empresa puede terminar el contrato de interinato en el momento\r\nque lo desee.</span>\r\n\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Consejos adicionales</span>\r\n\r\n<span><span><br>\r\nSi bien el Código de Trabajo estipula otros tipos de contrato además de los\r\ndescritos anteriormente, estos son los más comunes para las empresas\r\nsalvadoreñas. No obstante, es necesario que al recibir alguno de estos, tomes\r\nen cuenta las siguientes consideraciones:<br>\r\n<br>\r\n</span>• Lee el contrato\r\ndetenidamente,&nbsp;<span>no lo\r\nfirmes antes de estar completamente seguro de todas las condiciones expuestas\r\nen el mismo.<br>\r\n<br>\r\n</span>• Consulta tus dudas, antes\r\nde firmar,&nbsp;<span>consulta\r\ncon la empresa cualquier duda que tengas y, si no estás de acuerdo con algún\r\napartado, exprésalo de forma oportuna, para evaluar una alternativa posible.<br>\r\n<br>\r\n</span>• Conoce tus derechos y\r\nresponsabilidades como empleado,&nbsp;<span>investiga el marco legal que respalda el tipo de contrato\r\nque la empresa te ofrece, así como las obligaciones que debes cumplir como\r\nempleado al firmar un contrato en particular.<br>\r\n<br>\r\n</span>• Cumple cada uno de los\r\nacuerdos,&nbsp;<span>pues ello\r\nte evitará la terminación del contrato por parte de la empresa así como\r\nposibles sanciones por faltas a lo estipulado en el contrato firmado.<br>\r\n<br>\r\n</span>• Solicita el contrato antes\r\nde iniciar,&nbsp;<span>sobre\r\ntodo si se trata de una consultoría, pues tener el contrato te permitirá saber\r\ncon claridad detalles como las fechas de entrega, productos solicitados, fechas\r\nde pago, etc.<br>\r\n<br>\r\nSin importar cuál sea el tipo de contrato de trabajo que te ofrezcan, recuerda\r\nque debes demostrar a la empresa la calidad de profesional que eres, para que\r\ntengan una buena imagen de ti y tu trabajo y, así, puedan considerarte para\r\nocasiones futuras, ya sea para servicios concretos o para formar parte de su\r\nequipo permanente de trabajo.<br>\r\n<br>\r\nSi recién inicias tu vida profesional, no tengas miedo de aceptar empleos bajo\r\nlas modalidades descritas anteriormente, recuerda que el país cuenta con\r\nregulaciones claras que te permitirán saber si la empresa está actuando\r\ncorrectamente, así como tus derechos y obligaciones como empleado.</span></span>\r\n\r\nLeer más en\r\n\r\n<span>&nbsp;<a target=\"_blank\" rel=\"nofollow\" href=\"https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx\">https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx</a></span>\r\n\r\n<br><br><br><br><br><br>', NULL),
(17, '1.	LA GERENCIA ', '2018-08-21', 'Video', '1hgpL-STO8M', '', '<div>\r\n\r\n<span><b>1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><b>LA GERENCIA<br></b></span>Ejercer la gerencia, o sea la acción de gobernar, es llevar\r\nla empresa hacia el logro de sus objetivos, tratando de sacar el mejor partido\r\na sus recursos, la administración no es más que una de las seis funciones cuya marcha debe asegurar la gerencia<br>\r\n\r\n<img width=\"515\" alt=\"\" height=\"303\">\r\n\r\n&nbsp;\r\n\r\n<img width=\"589\" alt=\"\" height=\"273\">\r\n\r\n&nbsp;\r\n\r\n&nbsp;\r\n\r\n&nbsp;\r\n\r\n<br><span><b>1.2. </b><b>UN NUEVO SISTEMA DE VALORES PARA LA\r\nEMPRESA.</b></span>\r\n\r\n&nbsp;\r\n\r\n<img width=\"589\" alt=\"\" height=\"500\">\r\n\r\n&nbsp;\r\n\r\n&nbsp;\r\n\r\n<span><b>2.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><b>EL PRESUPUESTO EMPRESARIAL COMO\r\nBASE PARA LA GERENCIA Y EL PROCESO DE DIRECCION </b></span>\r\n\r\n<b>&nbsp;</b>\r\n\r\nEl\r\npresupuesto es el medio para maximizar las utilidades y el camino que debe\r\nrecorrer la gerencia al encarar las responsabilidades siguientes:\r\n\r\n&nbsp;\r\n\r\n•\r\nObtener tasas de rendimiento sobre el capital que interpreten las expectativas\r\nde los inversionistas. \r\n\r\n&nbsp;\r\n\r\n•\r\nInterrelacionar las funciones empresariales (compras, producción, distribución,\r\nfinanzas y relaciones industriales) en pos de un objetivo común mediante la\r\ndelegación de la autoridad y las responsabilidades encomendadas. \r\n\r\n•\r\nFijar políticas, examinar su cumplimiento y replantearlas cuando no cubran con\r\nlas metas que justifican su implantación.\r\n\r\n&nbsp;\r\n\r\nEl\r\ncontrol presupuestario es el medio para mantener el plan de operaciones dentro\r\nde unos límites razonables. Mediante él se comparan unos resultados reales\r\nfrente a los presupuestos, se determinan variaciones y se suministran a la\r\nadministración elementos de juicio para la aplicación de acciones correctivas.\r\n\r\n&nbsp;<br>\r\n\r\n<b>2.1 Metodología para la elaboración\r\ndel presupuesto </b>\r\n\r\n<b>&nbsp;</b>\r\n\r\n<span><img width=\"584\" alt=\"\" height=\"369\">Se tratará\r\nde plantear de la forma más sencilla la metodología para la elaboración de un\r\npresupuesto pensando en el empresario de la PYME, considerando que aunque este\r\nya posea cierta experiencia en el manejo de una empresa, siempre debe seguir\r\nlos principales lineamientos para su elaboración.</span>\r\n\r\n</div>\r\n\r\n<span><br>\r\n</span>\r\n\r\n&nbsp;\r\n\r\n<img width=\"589\" alt=\"\" height=\"262\">\r\n\r\n<img width=\"525\" alt=\"\" height=\"137\">\r\n\r\n&nbsp;\r\n\r\n<img width=\"589\" alt=\"\" height=\"296\">\r\n\r\n&nbsp;\r\n\r\n&nbsp;&nbsp;<b></b>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Ingresos`
--

CREATE TABLE `tbl_Ingresos` (
  `PK_Id_Ingreso` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) DEFAULT NULL,
  `Nombre_Ingreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Ingreso` float NOT NULL,
  `Fecha_Ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Ingresos`
--

INSERT INTO `tbl_Ingresos` (`PK_Id_Ingreso`, `FK_Id_Usuario`, `Nombre_Ingreso`, `Cantidad_Ingreso`, `Fecha_Ingreso`) VALUES
(2, 1, 'Dinero disponible al principio del mes', 1000, '2018-10-01'),
(3, 1, 'Ventas en efectivo', 490, '2018-10-01'),
(4, 1, 'Efectivo por ventas al credito', 50, '2018-10-01'),
(5, 1, 'Otros ingresos', 100, '2018-10-01'),
(6, 1, 'Remesas', 300, '2018-10-01'),
(7, 1, 'Dinero disponible al principio del mes', 1000, '2018-11-01'),
(8, 1, 'Ventas en efectivo', 500, '2018-11-01'),
(9, 1, 'Efectivo por ventas al credito', 100, '2018-11-01'),
(10, 1, 'Otros ingresos', 50, '2018-11-01'),
(11, 1, 'Remesas', 50, '2018-11-01'),
(12, 1, 'Regalias', 400, '2018-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Ingresos_Egresos_Balance`
--

CREATE TABLE `tbl_Ingresos_Egresos_Balance` (
  `FK_Id_Balance` int(11) NOT NULL,
  `FK_Id_Egreso` int(11) NOT NULL,
  `Nombre_Operacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Total_Ingreso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Ingresos_Egresos_Balance`
--

INSERT INTO `tbl_Ingresos_Egresos_Balance` (`FK_Id_Balance`, `FK_Id_Egreso`, `Nombre_Operacion`, `Total_Ingreso`) VALUES
(35, 112, 'Gasto', 1940),
(35, 113, 'Gasto', 1940),
(35, 114, 'Gasto', 1940),
(35, 115, 'Gasto', 1940),
(35, 116, 'Gasto', 1940),
(35, 117, 'Gasto', 1940),
(35, 118, 'Gasto', 1940),
(36, 119, 'Gasto', 2100),
(36, 120, 'Gasto', 2100),
(36, 121, 'Gasto', 2100),
(36, 122, 'Gasto', 2100),
(36, 123, 'Gasto', 2100),
(36, 124, 'Gasto', 2100),
(36, 125, 'Gasto', 2100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Ingresos_Egresos_Bases`
--

CREATE TABLE `tbl_Ingresos_Egresos_Bases` (
  `PK_Id_Bases` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_Ingresos_Egresos_Bases`
--

INSERT INTO `tbl_Ingresos_Egresos_Bases` (`PK_Id_Bases`, `Nombre`, `Tipo`) VALUES
(1, 'Dinero disponible al principio del mes', 'Ingreso'),
(2, 'Ventas en efectivo', 'Ingreso'),
(3, 'Efectivo por ventas al credito', 'Ingreso'),
(4, 'Otros ingresos', 'Ingreso'),
(5, 'Compras en efectivo', 'Egreso'),
(6, 'Efectivo pagado por compras al credito', 'Egreso'),
(7, 'Salarios', 'Egreso'),
(8, 'Renta', 'Egreso'),
(9, 'Pago de préstamos', 'Egreso'),
(10, 'Otros', 'Egreso');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Insumos`
--

CREATE TABLE `tbl_Insumos` (
  `PK_Id_Insumo` int(11) NOT NULL,
  `Nombre_Insumo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Existencia_Insumo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Insumo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Medida_Insumo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Minima` int(11) NOT NULL,
  `FK_Id_Tipo_Insumo` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Insumos`
--

INSERT INTO `tbl_Insumos` (`PK_Id_Insumo`, `Nombre_Insumo`, `Existencia_Insumo`, `Precio_Insumo`, `Medida_Insumo`, `Cantidad_Minima`, `FK_Id_Tipo_Insumo`, `FK_Id_Usuario`) VALUES
(35, 'Agua', '10', '0.90', 'Litros', 2, 1, 1),
(36, 'Papel periodico', '15', '0.25', 'Libras', 5, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Inventario`
--

CREATE TABLE `tbl_Inventario` (
  `PK_Id_Inventario` int(11) NOT NULL,
  `FK_Id_Producto` int(11) NOT NULL,
  `Existencia_Producto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Creacion` date NOT NULL,
  `Lugar_Existencia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Inventario`
--

INSERT INTO `tbl_Inventario` (`PK_Id_Inventario`, `FK_Id_Producto`, `Existencia_Producto`, `Fecha_Creacion`, `Lugar_Existencia`, `Estado`) VALUES
(1, 21, '80', '0000-00-00', 'San Miguel', 'Terminado'),
(2, 21, '99', '2018-08-30', 'San Miguel', 'Terminado'),
(3, 22, '100', '0000-00-00', 'San Miguel', 'Terminado'),
(4, 21, '100', '0000-00-00', 'San Miguel', 'En Proceso'),
(5, 21, '100', '2018-08-31', 'San Miguel', 'Terminado'),
(6, 21, '100', '0000-00-00', 'San Miguel', 'En Proceso'),
(7, 21, '100', '0000-00-00', 'San Miguel', 'Terminado'),
(8, 23, '90', '2018-08-15', 'San Miguel', 'Terminado'),
(9, 28, '71', '2018-08-30', '', 'Terminado'),
(10, 29, '99', '2018-08-22', '', 'Terminado');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Perfiles_Empresariales`
--

CREATE TABLE `tbl_Perfiles_Empresariales` (
  `pk_Id_Perfil` int(11) NOT NULL,
  `FK_Usuaria` int(11) NOT NULL,
  `Nombre_Negocio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion_Negocio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Descripcion_Negocio` text COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Rubro` int(11) NOT NULL,
  `Foto_Perfil` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto1` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto2` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto3` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Correo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Num_Visitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Perfiles_Empresariales`
--

INSERT INTO `tbl_Perfiles_Empresariales` (`pk_Id_Perfil`, `FK_Usuaria`, `Nombre_Negocio`, `Direccion_Negocio`, `Descripcion_Negocio`, `FK_Rubro`, `Foto_Perfil`, `Foto1`, `Foto2`, `Foto3`, `Telefono`, `Correo`, `Num_Visitas`) VALUES
(1, 1, 'asad', 'aDAD', '', 1, 'Roxana Blanco1/f3.jpg', 'Roxana Blanco1/73DACBF4-4090-4B65-A3DD-81EDC113E6DD.jpeg', 'Roxana Blanco1/evolucion.jpg', 'Roxana Blanco1/diagrama2.jpeg', '7777', '7777', 8),
(2, 2, 'Lily Butique', 'allalsl', 'kskad', 1, 'Leticia Machuca2/f3.jpg', 'Leticia Machuca2/impresiones.jpg', 'Leticia Machuca2/soporte.png', 'Leticia Machuca2/soporte.png', '123233', '1232332', 4),
(3, 5, 'Mala artesanias', 'San Miguel', 'Es un negocio de artesanias', 1, 'Maria Lizama5/5529996.jpg', 'Maria Lizama5/diagrama2.jpeg', 'Maria Lizama5/estructura-de-un-cigoto.png', 'Maria Lizama5/evolucion.jpg', '7560954994', 'lalalal@ho', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Productos`
--

CREATE TABLE `tbl_Productos` (
  `PK_Id_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Producto` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Productos`
--

INSERT INTO `tbl_Productos` (`PK_Id_Producto`, `Nombre_Producto`, `Precio_Producto`, `FK_Id_Usuario`) VALUES
(21, 'Pupusas', '0.50', 1),
(22, 'Cafe Mocachino', '1.50', 1),
(23, 'Agua de coco', '1.50', 1),
(28, 'Parapapa', '2', 1),
(29, 'Tacos', '1', 1),
(30, 'fsd', '1.9', 1),
(31, 'sA', '1', 1),
(32, 'ers', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Productos_Insumos`
--

CREATE TABLE `tbl_Productos_Insumos` (
  `FK_Id_Producto` int(11) NOT NULL,
  `FK_Id_Insumo` int(11) NOT NULL,
  `Cantidad_Insumo` float NOT NULL,
  `Medida_Insumo` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Rubros`
--

CREATE TABLE `tbl_Rubros` (
  `PK_Id_Rubro` int(11) NOT NULL,
  `Nombre_Rubro` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Rubros`
--

INSERT INTO `tbl_Rubros` (`PK_Id_Rubro`, `Nombre_Rubro`) VALUES
(1, 'Alimentos y Bebidas'),
(2, 'Textiles Confección'),
(3, 'Comercio'),
(4, 'Técnologia e innovación'),
(5, 'Quimica'),
(6, 'Artesanias'),
(7, 'Construcción'),
(8, 'Servicios');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Sedes`
--

CREATE TABLE `tbl_Sedes` (
  `pk_Id_Sede` int(11) NOT NULL,
  `Nombre_Sede` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Sedes`
--

INSERT INTO `tbl_Sedes` (`pk_Id_Sede`, `Nombre_Sede`) VALUES
(1, 'Sede Ciudad Mujer San Miguel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Subrubros`
--

CREATE TABLE `tbl_Subrubros` (
  `PK_Id_Subrubro` int(11) NOT NULL,
  `FK_Id_Rubro` int(11) NOT NULL,
  `Nombre_Rubro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Produccion_Mensual` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Subrubros`
--

INSERT INTO `tbl_Subrubros` (`PK_Id_Subrubro`, `FK_Id_Rubro`, `Nombre_Rubro`, `Produccion_Mensual`) VALUES
(18, 1, 'Panaderia y Pasteleria', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Tipos_Insumos`
--

CREATE TABLE `tbl_Tipos_Insumos` (
  `Pk_Id_Tipo_Insumo` int(11) NOT NULL,
  `Nombre_Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Tipos_Insumos`
--

INSERT INTO `tbl_Tipos_Insumos` (`Pk_Id_Tipo_Insumo`, `Nombre_Tipo`) VALUES
(1, 'Comestible'),
(2, 'No comestible');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Tipos_Usuarias`
--

CREATE TABLE `tbl_Tipos_Usuarias` (
  `pk_Id_Tipo` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Tipos_Usuarias`
--

INSERT INTO `tbl_Tipos_Usuarias` (`pk_Id_Tipo`, `Descripcion`) VALUES
(1, 'Super Usuario'),
(2, 'Administradora'),
(3, 'Emprendedora');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Tipos_Usuarios`
--

CREATE TABLE `tbl_Tipos_Usuarios` (
  `PK_Id_Tipo_Usuario` int(11) NOT NULL,
  `Nombre_Tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tbl_Tipos_Usuarios`
--

INSERT INTO `tbl_Tipos_Usuarios` (`PK_Id_Tipo_Usuario`, `Nombre_Tipo`) VALUES
(1, 'Administrador'),
(2, 'Invitado');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Usuarias`
--

CREATE TABLE `tbl_Usuarias` (
  `pk_Id_Usuaria` int(11) NOT NULL,
  `FK_Sede` int(11) NOT NULL,
  `Nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellido` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Nom_User` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Pass` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `fk_Tipo_Usuaria` int(11) NOT NULL,
  `Telefono` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Dui` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Actividad` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Usuarias`
--

INSERT INTO `tbl_Usuarias` (`pk_Id_Usuaria`, `FK_Sede`, `Nombre`, `Apellido`, `Nom_User`, `Pass`, `Direccion`, `fk_Tipo_Usuaria`, `Telefono`, `Dui`, `Fecha_Actividad`) VALUES
(1, 1, 'Roxana', 'Blanco', 'roxwite', '123456', 'San Miguel', 1, '72787475', '1111455-0', '2030-09-18'),
(2, 1, 'Leticia', 'Machuca', 'lily', '123456', 'san miguel', 2, '76787574', '2221554-0', '2030-09-18'),
(5, 1, 'Maria', 'Lizama', 'mala', '123456', 'san Miguel', 3, '78888', '789999', '2018-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Venta`
--

CREATE TABLE `tbl_Venta` (
  `Pk_Id_Venta` int(11) NOT NULL,
  `Fk_Id_Inventario` int(11) NOT NULL,
  `Cantidad_Venta` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_Venta`
--

INSERT INTO `tbl_Venta` (`Pk_Id_Venta`, `Fk_Id_Inventario`, `Cantidad_Venta`, `Fecha_Venta`) VALUES
(16, 10, 1, '2018-09-01'),
(17, 9, 25, '2018-09-08'),
(18, 8, 10, '2018-09-29');

-- --------------------------------------------------------

--
-- Stand-in structure for view `VW_Perfiles`
-- (See below for the actual view)
--
CREATE TABLE `VW_Perfiles` (
`pk_Id_Perfil` int(11)
,`FK_Usuaria` int(11)
,`Nombre_Negocio` varchar(200)
,`Direccion_Negocio` varchar(200)
,`Descripcion_Negocio` text
,`FK_Rubro` int(11)
,`Foto_Perfil` varchar(100)
,`Foto1` varchar(100)
,`Foto2` varchar(100)
,`Foto3` varchar(100)
,`Telefono` varchar(10)
,`Correo` varchar(10)
,`Num_Visitas` int(11)
,`PK_Id_Rubro` int(11)
,`Nombre_Rubro` varchar(100)
,`Nombre` varchar(200)
,`Apellido` varchar(200)
,`pk_Id_Sede` int(11)
,`Nombre_Sede` varchar(200)
);

-- --------------------------------------------------------

--
-- Structure for view `VW_Perfiles`
--
DROP TABLE IF EXISTS `VW_Perfiles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`edwin`@`localhost` SQL SECURITY DEFINER VIEW `VW_Perfiles`  AS  select `p`.`pk_Id_Perfil` AS `pk_Id_Perfil`,`p`.`FK_Usuaria` AS `FK_Usuaria`,`p`.`Nombre_Negocio` AS `Nombre_Negocio`,`p`.`Direccion_Negocio` AS `Direccion_Negocio`,`p`.`Descripcion_Negocio` AS `Descripcion_Negocio`,`p`.`FK_Rubro` AS `FK_Rubro`,`p`.`Foto_Perfil` AS `Foto_Perfil`,`p`.`Foto1` AS `Foto1`,`p`.`Foto2` AS `Foto2`,`p`.`Foto3` AS `Foto3`,`p`.`Telefono` AS `Telefono`,`p`.`Correo` AS `Correo`,`p`.`Num_Visitas` AS `Num_Visitas`,`r`.`PK_Id_Rubro` AS `PK_Id_Rubro`,`r`.`Nombre_Rubro` AS `Nombre_Rubro`,`u`.`Nombre` AS `Nombre`,`u`.`Apellido` AS `Apellido`,`s`.`pk_Id_Sede` AS `pk_Id_Sede`,`s`.`Nombre_Sede` AS `Nombre_Sede` from (((`tbl_Perfiles_Empresariales` `p` join `tbl_Rubros` `r` on((`p`.`FK_Rubro` = `r`.`PK_Id_Rubro`))) join `tbl_Usuarias` `u` on((`p`.`FK_Usuaria` = `u`.`pk_Id_Usuaria`))) join `tbl_Sedes` `s` on((`u`.`FK_Sede` = `s`.`pk_Id_Sede`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_Anuncios`
--
ALTER TABLE `tbl_Anuncios`
  ADD PRIMARY KEY (`pk_Id_Anuncio`);

--
-- Indexes for table `tbl_Balance`
--
ALTER TABLE `tbl_Balance`
  ADD PRIMARY KEY (`PK_Id_Balance`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indexes for table `tbl_Categoria_Elementos`
--
ALTER TABLE `tbl_Categoria_Elementos`
  ADD PRIMARY KEY (`Pk_Id_Categoria_Elemento`);

--
-- Indexes for table `tbl_Egresos`
--
ALTER TABLE `tbl_Egresos`
  ADD PRIMARY KEY (`Pk_Id_Egreso`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indexes for table `tbl_Elementos_Subrubros`
--
ALTER TABLE `tbl_Elementos_Subrubros`
  ADD PRIMARY KEY (`Pk_Id_Elemento_Subrubro`),
  ADD KEY `id_categoria_elemeto` (`Fk_Id_Categoria_Elemento`),
  ADD KEY `Fk_Id_Subrubro` (`Fk_Id_Subrubro`);

--
-- Indexes for table `tbl_Guias_Multimedia`
--
ALTER TABLE `tbl_Guias_Multimedia`
  ADD PRIMARY KEY (`pk_Id_Guia`);

--
-- Indexes for table `tbl_Ingresos`
--
ALTER TABLE `tbl_Ingresos`
  ADD PRIMARY KEY (`PK_Id_Ingreso`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indexes for table `tbl_Ingresos_Egresos_Balance`
--
ALTER TABLE `tbl_Ingresos_Egresos_Balance`
  ADD KEY `id_egreso` (`FK_Id_Egreso`),
  ADD KEY `FK_Id_Balance` (`FK_Id_Balance`);

--
-- Indexes for table `tbl_Ingresos_Egresos_Bases`
--
ALTER TABLE `tbl_Ingresos_Egresos_Bases`
  ADD PRIMARY KEY (`PK_Id_Bases`);

--
-- Indexes for table `tbl_Insumos`
--
ALTER TABLE `tbl_Insumos`
  ADD PRIMARY KEY (`PK_Id_Insumo`),
  ADD KEY `FK_Id_Tipo_Insumo` (`FK_Id_Tipo_Insumo`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indexes for table `tbl_Inventario`
--
ALTER TABLE `tbl_Inventario`
  ADD PRIMARY KEY (`PK_Id_Inventario`),
  ADD KEY `id_producto` (`FK_Id_Producto`);

--
-- Indexes for table `tbl_Perfiles_Empresariales`
--
ALTER TABLE `tbl_Perfiles_Empresariales`
  ADD PRIMARY KEY (`pk_Id_Perfil`),
  ADD KEY `FK_Usuaria` (`FK_Usuaria`),
  ADD KEY `FK_Rubro` (`FK_Rubro`);

--
-- Indexes for table `tbl_Productos`
--
ALTER TABLE `tbl_Productos`
  ADD PRIMARY KEY (`PK_Id_Producto`),
  ADD KEY `id_usuario` (`FK_Id_Usuario`);

--
-- Indexes for table `tbl_Productos_Insumos`
--
ALTER TABLE `tbl_Productos_Insumos`
  ADD KEY `id_producto` (`FK_Id_Producto`),
  ADD KEY `id_insumo` (`FK_Id_Insumo`);

--
-- Indexes for table `tbl_Rubros`
--
ALTER TABLE `tbl_Rubros`
  ADD PRIMARY KEY (`PK_Id_Rubro`);

--
-- Indexes for table `tbl_Sedes`
--
ALTER TABLE `tbl_Sedes`
  ADD PRIMARY KEY (`pk_Id_Sede`);

--
-- Indexes for table `tbl_Subrubros`
--
ALTER TABLE `tbl_Subrubros`
  ADD PRIMARY KEY (`PK_Id_Subrubro`),
  ADD KEY `id_rubro` (`FK_Id_Rubro`);

--
-- Indexes for table `tbl_Tipos_Insumos`
--
ALTER TABLE `tbl_Tipos_Insumos`
  ADD PRIMARY KEY (`Pk_Id_Tipo_Insumo`);

--
-- Indexes for table `tbl_Tipos_Usuarias`
--
ALTER TABLE `tbl_Tipos_Usuarias`
  ADD PRIMARY KEY (`pk_Id_Tipo`);

--
-- Indexes for table `tbl_Tipos_Usuarios`
--
ALTER TABLE `tbl_Tipos_Usuarios`
  ADD PRIMARY KEY (`PK_Id_Tipo_Usuario`);

--
-- Indexes for table `tbl_Usuarias`
--
ALTER TABLE `tbl_Usuarias`
  ADD PRIMARY KEY (`pk_Id_Usuaria`),
  ADD KEY `fk_Tipo_Usuaria` (`fk_Tipo_Usuaria`),
  ADD KEY `fk_Tipo_Usuaria_2` (`fk_Tipo_Usuaria`),
  ADD KEY `FK_Sede` (`FK_Sede`),
  ADD KEY `FK_Sede_2` (`FK_Sede`);

--
-- Indexes for table `tbl_Venta`
--
ALTER TABLE `tbl_Venta`
  ADD PRIMARY KEY (`Pk_Id_Venta`),
  ADD KEY `Fk_Id_Inventario` (`Fk_Id_Inventario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_Anuncios`
--
ALTER TABLE `tbl_Anuncios`
  MODIFY `pk_Id_Anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_Balance`
--
ALTER TABLE `tbl_Balance`
  MODIFY `PK_Id_Balance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_Categoria_Elementos`
--
ALTER TABLE `tbl_Categoria_Elementos`
  MODIFY `Pk_Id_Categoria_Elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_Egresos`
--
ALTER TABLE `tbl_Egresos`
  MODIFY `Pk_Id_Egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `tbl_Elementos_Subrubros`
--
ALTER TABLE `tbl_Elementos_Subrubros`
  MODIFY `Pk_Id_Elemento_Subrubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_Guias_Multimedia`
--
ALTER TABLE `tbl_Guias_Multimedia`
  MODIFY `pk_Id_Guia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_Ingresos`
--
ALTER TABLE `tbl_Ingresos`
  MODIFY `PK_Id_Ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_Ingresos_Egresos_Bases`
--
ALTER TABLE `tbl_Ingresos_Egresos_Bases`
  MODIFY `PK_Id_Bases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_Insumos`
--
ALTER TABLE `tbl_Insumos`
  MODIFY `PK_Id_Insumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `tbl_Inventario`
--
ALTER TABLE `tbl_Inventario`
  MODIFY `PK_Id_Inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_Perfiles_Empresariales`
--
ALTER TABLE `tbl_Perfiles_Empresariales`
  MODIFY `pk_Id_Perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_Productos`
--
ALTER TABLE `tbl_Productos`
  MODIFY `PK_Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tbl_Rubros`
--
ALTER TABLE `tbl_Rubros`
  MODIFY `PK_Id_Rubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_Sedes`
--
ALTER TABLE `tbl_Sedes`
  MODIFY `pk_Id_Sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_Subrubros`
--
ALTER TABLE `tbl_Subrubros`
  MODIFY `PK_Id_Subrubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_Tipos_Insumos`
--
ALTER TABLE `tbl_Tipos_Insumos`
  MODIFY `Pk_Id_Tipo_Insumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_Tipos_Usuarias`
--
ALTER TABLE `tbl_Tipos_Usuarias`
  MODIFY `pk_Id_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_Tipos_Usuarios`
--
ALTER TABLE `tbl_Tipos_Usuarios`
  MODIFY `PK_Id_Tipo_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_Usuarias`
--
ALTER TABLE `tbl_Usuarias`
  MODIFY `pk_Id_Usuaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_Venta`
--
ALTER TABLE `tbl_Venta`
  MODIFY `Pk_Id_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_Balance`
--
ALTER TABLE `tbl_Balance`
  ADD CONSTRAINT `tbl_Balance_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Egresos`
--
ALTER TABLE `tbl_Egresos`
  ADD CONSTRAINT `tbl_Egresos_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Elementos_Subrubros`
--
ALTER TABLE `tbl_Elementos_Subrubros`
  ADD CONSTRAINT `tbl_Elementos_Subrubros_ibfk_1` FOREIGN KEY (`Fk_Id_Categoria_Elemento`) REFERENCES `tbl_Categoria_Elementos` (`Pk_Id_Categoria_Elemento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Elementos_Subrubros_ibfk_2` FOREIGN KEY (`Fk_Id_Subrubro`) REFERENCES `tbl_Subrubros` (`PK_Id_Subrubro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Ingresos`
--
ALTER TABLE `tbl_Ingresos`
  ADD CONSTRAINT `tbl_Ingresos_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Ingresos_Egresos_Balance`
--
ALTER TABLE `tbl_Ingresos_Egresos_Balance`
  ADD CONSTRAINT `tbl_Ingresos_Egresos_Balance_ibfk_3` FOREIGN KEY (`FK_Id_Egreso`) REFERENCES `tbl_Egresos` (`Pk_Id_Egreso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Ingresos_Egresos_Balance_ibfk_4` FOREIGN KEY (`FK_Id_Balance`) REFERENCES `tbl_Balance` (`PK_Id_Balance`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Insumos`
--
ALTER TABLE `tbl_Insumos`
  ADD CONSTRAINT `tbl_Insumos_ibfk_1` FOREIGN KEY (`FK_Id_Tipo_Insumo`) REFERENCES `tbl_Tipos_Insumos` (`Pk_Id_Tipo_Insumo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Insumos_ibfk_2` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Inventario`
--
ALTER TABLE `tbl_Inventario`
  ADD CONSTRAINT `tbl_Inventario_ibfk_1` FOREIGN KEY (`FK_Id_Producto`) REFERENCES `tbl_Productos` (`PK_Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Perfiles_Empresariales`
--
ALTER TABLE `tbl_Perfiles_Empresariales`
  ADD CONSTRAINT `tbl_Perfiles_Empresariales_ibfk_1` FOREIGN KEY (`FK_Usuaria`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Perfiles_Empresariales_ibfk_2` FOREIGN KEY (`FK_Rubro`) REFERENCES `tbl_Rubros` (`PK_Id_Rubro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Productos`
--
ALTER TABLE `tbl_Productos`
  ADD CONSTRAINT `tbl_Productos_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Productos_Insumos`
--
ALTER TABLE `tbl_Productos_Insumos`
  ADD CONSTRAINT `tbl_Productos_Insumos_ibfk_1` FOREIGN KEY (`FK_Id_Producto`) REFERENCES `tbl_Productos` (`PK_Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Productos_Insumos_ibfk_2` FOREIGN KEY (`FK_Id_Insumo`) REFERENCES `tbl_Insumos` (`PK_Id_Insumo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Subrubros`
--
ALTER TABLE `tbl_Subrubros`
  ADD CONSTRAINT `tbl_Subrubros_ibfk_1` FOREIGN KEY (`FK_Id_Rubro`) REFERENCES `tbl_Rubros` (`PK_Id_Rubro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Usuarias`
--
ALTER TABLE `tbl_Usuarias`
  ADD CONSTRAINT `tbl_Usuarias_ibfk_1` FOREIGN KEY (`fk_Tipo_Usuaria`) REFERENCES `tbl_Tipos_Usuarias` (`pk_Id_Tipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_Venta`
--
ALTER TABLE `tbl_Venta`
  ADD CONSTRAINT `tbl_Venta_ibfk_1` FOREIGN KEY (`Fk_Id_Inventario`) REFERENCES `tbl_Inventario` (`PK_Id_Inventario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
