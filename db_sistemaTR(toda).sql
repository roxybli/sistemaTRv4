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

CREATE TABLE IF NOT EXISTS `tbl_Anuncios` (
`pk_Id_Anuncio` int(11) NOT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  `Titulo` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Descripcion_Noticia` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Anuncios`
--

INSERT INTO `tbl_Anuncios` (`pk_Id_Anuncio`, `Contenido`, `Titulo`, `Imagen`, `Fecha`, `FK_Id_Usuaria`, `Descripcion_Noticia`) VALUES
(10, '<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).\r\n\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).\r\n</div><br></div><br></div></div><br></div><br><br><br><br><br>', 'TITULO EDITADO', 'agua2.jpeg', '2018-09-30', 2, '                                                                                                                                                        ESTA ES LA DESCRIPCION DE UNA NOTICIA                                                                                                                                                '),
(11, '<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).\r\n\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).\r\n</div></div><br></div><br></div><br><br><br><br>', 'OTRA NOTICIA PARA PROBAR A VER Q PEX', 'agua.jpg', '2018-09-30', 1, 'AQUI ESTA UNA NOTOCIA '),
(12, '<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).<br>\r\n<div>\r\n<h2>¿Por qué lo usamos?</h2>\r\nEs un hecho establecido hace demasiado tiempo que un lector se \r\ndistraerá con el contenido del texto de un sitio mientras que mira su \r\ndiseño. El punto de usar Lorem Ipsum es que tiene una distribución más o\r\n menos normal de las letras, al contrario de usar textos como por \r\nejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo \r\nun español que se puede leer. Muchos paquetes de autoedición y editores \r\nde páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer\r\n una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web \r\nque usan este texto si se encuentran en estado de desarrollo. Muchas \r\nversiones han evolucionado a través de los años, algunas veces por \r\naccidente, otras veces a propósito (por ejemplo insertándole humor y \r\ncosas por el estilo).\r\n</div><br></div><br></div><br></div><br><br><br><br>', 'UN NOTICION ', 'agua2.jpeg', '2018-09-26', 1, '                                                                            buena noticia                                                                        ');

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


CREATE TABLE IF NOT EXISTS `tbl_Guias_Multimedia` (
`pk_Id_Guia` int(11) NOT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Titulo_Guia` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `Tipo_publicacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Video_Multimedia` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Documento_Guia` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci,
  `Descripcion_Guia` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Guias_Multimedia`
--

INSERT INTO `tbl_Guias_Multimedia` (`pk_Id_Guia`, `FK_Id_Usuaria`, `Titulo_Guia`, `Fecha_Publicacion`, `Tipo_publicacion`, `Video_Multimedia`, `Documento_Guia`, `Contenido`, `Descripcion_Guia`, `Imagen`) VALUES
(19, 1, 'AQUI VA EL TITULO editado', '2018-11-01', 'Video', 'erMvGQwiUSo', '', 'Aqui va el contenido<br>', 'Descripcion', 'img.jpeg'),
(23, 1, 'PUBLICACION CON DOCUMENTO', '2018-10-01', 'Documento', '', 'AIP. CLSM.pdf san miguel.pdf', 'JSJSJSJSJSJSJSJSJSJSJSJSJ<br>', 'Descripcion', '');

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
--
-- Table structure for table `tbl_Mensajes`

CREATE TABLE IF NOT EXISTS `tbl_Mensajes` (
`PK_Id_Mensaje` int(11) NOT NULL,
  `Contenido_Mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `Contacto_Mensaje` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Emisor_Mensaje` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Estado_Mensaje` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Mensajes`
--

INSERT INTO `tbl_Mensajes` (`PK_Id_Mensaje`, `Contenido_Mensaje`, `Contacto_Mensaje`, `Emisor_Mensaje`, `FK_Id_Usuaria`, `Estado_Mensaje`) VALUES
(1, 'hola                                    \n                                ', '78787878', 'Juan', 14, 'Nuevo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Perfiles_Empresariales`
--

CREATE TABLE IF NOT EXISTS `tbl_Perfiles_Empresariales` (
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Perfiles_Empresariales`
--

INSERT INTO `tbl_Perfiles_Empresariales` (`pk_Id_Perfil`, `FK_Usuaria`, `Nombre_Negocio`, `Direccion_Negocio`, `Descripcion_Negocio`, `FK_Rubro`, `Foto_Perfil`, `Foto1`, `Foto2`, `Foto3`, `Telefono`, `Correo`, `Num_Visitas`) VALUES
(1, 1, 'asad', 'aDAD', '', 1, 'Roxana Blanco1/f3.jpg', 'Roxana Blanco1/f1.jpg', 'Roxana Blanco1/f2.jpg', 'Roxana Blanco1/f4.jpg', '7777', '7777', 24),
(2, 2, 'Lily Butique', 'allalsl', 'kskad', 1, 'Leticia Machuca2/f3.jpg', 'Leticia Machuca2/impresiones.jpg', 'Leticia Machuca2/soporte.png', 'Leticia Machuca2/soporte.png', '123233', '1232332', 8),
(3, 5, 'Mala artesanias', 'San Miguel', 'Es un negocio de artesanias', 1, 'Maria Lizama5/5529996.jpg', 'Maria Lizama5/diagrama2.jpeg', 'Maria Lizama5/estructura-de-un-cigoto.png', 'Maria Lizama5/evolucion.jpg', '7560954994', 'lalalal@ho', 10),
(5, 6, 'mi negocio', 'un negocio', 'otro', 1, 'maria ramirez6/', 'maria ramirez6/', 'maria ramirez6/', 'maria ramirez6/', 'hola', 'kjjjj', 1),
(6, 8, 'Panaderia Lupe', 'San Miguel', 'Los mejores Panes ', 3, 'Luisa Perez8/img.jpeg', 'Luisa Perez8/img.jpeg', 'Luisa Perez8/img.jpeg', 'Luisa Perez8/img.jpeg', '72454978', 'lupe@gmail', 1),
(7, 7, 'Cerveceria la Patrona', 'San Miguel', 'Somos los mas innovadores programadores de san miguel', 4, 'Juana Lopez7/img.jpeg', 'Juana Lopez7/img.jpeg', 'Juana Lopez7/img.jpeg', 'Juana Lopez7/img.jpeg', '74787579', 'cv@hotmail', 1),
(8, 13, 'MI negocio el mas pro', 'San MIguel', 'Los mas pro en tecnologia', 4, 'Juana 13/images.jpeg', 'Juana 13/img.jpeg', 'Juana 13/img.jpeg', 'Juana 13/img.jpeg', '7777777', 'Micorreo@g', NULL),
(18, 14, 'Mi Paiz', 'San Miguel', 'Venta de artesenias de todo tipo', 6, 'Liliana de jesus Latoya Jackson14/img.jpeg', 'Liliana de jesus Latoya Jackson14/plaza.jpg', 'Liliana de jesus Latoya Jackson14/laguna.jpg', 'Liliana de jesus Latoya Jackson14/pital.jpg', '503-7887-8', 'algo@gmail', 1);

-- --------------------------------------------------------

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

CREATE TABLE IF NOT EXISTS `tbl_Usuarias` (
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
  `Fecha_Actividad` date DEFAULT NULL,
  `Fecha_Registro` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `tbl_Usuarias`
--

INSERT INTO `tbl_Usuarias` (`pk_Id_Usuaria`, `FK_Sede`, `Nombre`, `Apellido`, `Nom_User`, `Pass`, `Direccion`, `fk_Tipo_Usuaria`, `Telefono`, `Dui`, `Fecha_Actividad`, `Fecha_Registro`) VALUES
(1, 1, 'Roxana', 'Blanco', 'roxwite', '123456', 'San Miguel', 1, '72787475', '1111455-0', '2018-10-02', NULL),
(2, 1, 'Leticia', 'Machuca', 'lily', '123456', 'san miguel', 2, '76787574', '2221554-0', '2018-10-01', NULL),
(5, 1, 'Maria', 'Lizama', 'mala', '123456', 'san Miguel', 3, '78888', '789999', '2018-10-02', NULL),
(6, 1, 'maria', 'ramirez', 'maria', '123', 'san miguel', 3, '1235', '111111', '2018-10-02', NULL),
(7, 1, 'Juana', 'Lopez', 'julo', '1234', 'San Miguel', 3, '787878', '1121112', '2018-10-02', '2018-10-02'),
(8, 1, 'Luisa', 'Perez', 'lupe', '123', 'San Miguel', 3, '111111', '22222222', '2018-10-02', '2018-10-02'),
(13, 1, 'Juana', '', 'juana', '1234', 'sanana', 3, '503-5555-5', '55555555-5', '2018-10-04', '2018-10-03'),
(14, 1, 'Liliana de jesus', 'Latoya Jackson', 'lana', '123', 'san miguel', 3, '503-7877-5', '12213565-6', '2018-10-04', '2018-10-04');

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
CREATE TABLE IF NOT EXISTS `VW_Perfiles` (
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `VW_Perfiles`  AS  select `p`.`pk_Id_Perfil` AS `pk_Id_Perfil`,`p`.`FK_Usuaria` AS `FK_Usuaria`,`p`.`Nombre_Negocio` AS `Nombre_Negocio`,`p`.`Direccion_Negocio` AS `Direccion_Negocio`,`p`.`Descripcion_Negocio` AS `Descripcion_Negocio`,`p`.`FK_Rubro` AS `FK_Rubro`,`p`.`Foto_Perfil` AS `Foto_Perfil`,`p`.`Foto1` AS `Foto1`,`p`.`Foto2` AS `Foto2`,`p`.`Foto3` AS `Foto3`,`p`.`Telefono` AS `Telefono`,`p`.`Correo` AS `Correo`,`p`.`Num_Visitas` AS `Num_Visitas`,`r`.`PK_Id_Rubro` AS `PK_Id_Rubro`,`r`.`Nombre_Rubro` AS `Nombre_Rubro`,`u`.`Nombre` AS `Nombre`,`u`.`Apellido` AS `Apellido`,`s`.`pk_Id_Sede` AS `pk_Id_Sede`,`s`.`Nombre_Sede` AS `Nombre_Sede` from (((`tbl_Perfiles_Empresariales` `p` join `tbl_Rubros` `r` on((`p`.`FK_Rubro` = `r`.`PK_Id_Rubro`))) join `tbl_Usuarias` `u` on((`p`.`FK_Usuaria` = `u`.`pk_Id_Usuaria`))) join `tbl_Sedes` `s` on((`u`.`FK_Sede` = `s`.`pk_Id_Sede`))) ;

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


-- Indexes for table `tbl_Mensajes`
--
ALTER TABLE `tbl_Mensajes`
 ADD PRIMARY KEY (`PK_Id_Mensaje`), ADD KEY `FK_Id_Usuaria` (`FK_Id_Usuaria`);

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
-- AUTO_INCREMENT for table `tbl_Mensajes`
--
ALTER TABLE `tbl_Mensajes`
MODIFY `PK_Id_Mensaje` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
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
-- Constraints for table `tbl_Mensajes`
--
ALTER TABLE `tbl_Mensajes`
ADD CONSTRAINT `tbl_Mensajes_ibfk_1` FOREIGN KEY (`FK_Id_Usuaria`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

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
