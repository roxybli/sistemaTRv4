-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 27-10-2018 a las 15:08:11
-- Versión del servidor: 10.1.26-MariaDB-0+deb9u1
-- Versión de PHP: 7.0.30-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sistemaTR`
--
CREATE DATABASE IF NOT EXISTS `db_sistemaTR` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_sistemaTR`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `VW_Perfiles`
--

CREATE TABLE `VW_Perfiles` (
  `pk_Id_Perfil` int(11) DEFAULT NULL,
  `FK_Usuaria` int(11) DEFAULT NULL,
  `Nombre_Negocio` varchar(200) DEFAULT NULL,
  `Direccion_Negocio` varchar(200) DEFAULT NULL,
  `Descripcion_Negocio` text,
  `FK_Rubro` int(11) DEFAULT NULL,
  `Foto_Perfil` varchar(100) DEFAULT NULL,
  `Foto1` varchar(100) DEFAULT NULL,
  `Foto2` varchar(100) DEFAULT NULL,
  `Foto3` varchar(100) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `Correo` varchar(10) DEFAULT NULL,
  `Num_Visitas` int(11) DEFAULT NULL,
  `PK_Id_Rubro` int(11) DEFAULT NULL,
  `Nombre_Rubro` varchar(100) DEFAULT NULL,
  `Nombre` varchar(200) DEFAULT NULL,
  `Apellido` varchar(200) DEFAULT NULL,
  `pk_Id_Sede` int(11) DEFAULT NULL,
  `Nombre_Sede` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Anuncios`
--

CREATE TABLE `tbl_Anuncios` (
  `pk_Id_Anuncio` int(11) NOT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  `Titulo` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Descripcion_Noticia` text COLLATE utf8_spanish2_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Anuncios`
--

INSERT INTO `tbl_Anuncios` (`pk_Id_Anuncio`, `Contenido`, `Titulo`, `Imagen`, `Fecha`, `FK_Id_Usuaria`, `Descripcion_Noticia`) VALUES
(10, '<div>\r\n														Colón, La Libertad. Martes, 18 de septiembre de 2018.&nbsp;La\r\n Directora de Ciudad Mujer Colón, Bárbara Romero, presidió este día la \r\nceremonia de graduación de 298 usuarias capacitadas por esta sede en \r\ndiferentes cursos y talleres técnico-vocacionales que son de gran \r\nimportancia para su desarrollo y empoderamiento.\r\nLos conocimientos que las usuarias adquieren en las capacitaciones de\r\n Ciudad Mujer facilitan su ingreso al mercado laboral a través de una \r\noferta de trabajo por parte de un empleador, o las impulsa a asumir el \r\nreto de iniciar su propio emprendimiento. <br></div><div><br></div><div>Esto fomenta la autonomía \r\neconómica de las mujeres y se convierte en toda una oportunidad para \r\ncambiar sus vidas, especialmente la de aquellas que no cuentan con los \r\nrecursos suficientes para costearse una capacitación o para quienes son \r\nvíctimas de violencia y dependen económicamente de la persona que las \r\nagrede.\r\n“Lo que aprenden en estos cursos es de beneficio para sus vidas, pero\r\n debemos comprender también que se convierte en una herramienta que les \r\nsirve para volverse piezas clave para la economía de sus municipios y \r\ndel país, porque no sólo pueden autoemplearse, si no también volverse \r\ngeneradoras de empleo”, apuntó la Directora de Ciudad Mujer Colón, \r\nBárbara Romero.</div><div><br></div><div>\r\nPor su parte, Isabel de López, representante de las graduadas, hizo \r\nun llamado a las mujeres en general a aprovechar al cien por ciento las \r\noportunidades que ofrece Ciudad Mujer para todas. “Yo me capacité en \r\npastelería y ya trabajo en ello, estoy haciendo pasteles para quince \r\naños y otros eventos”, agregó.\r\nLas graduadas de este día fueron formadas en talleres y cursos \r\ntécnico-vocacionales entre los que se cuentan: operadora de software, \r\nWindows y Microsoft Office, alfabetización en derechos, técnicas \r\nagrícolas; elaboración de champú y jabón, artesanías con productos \r\nmarinos; cosmetología, fabricación artesanal de calzado, corte y \r\nconfección; elaboración de platos a base de mariscos, pastelería, \r\nsorbetes y paletas artesanales.\r\n<br></div><div><br></div><div>Todas provienen de municipios como San Juan Opico, Colón, Teotepeque,\r\n Ciudad Arce; Puerto de La Libertad, Tamanique; Huizúcar, Santa Tecla, \r\nZaragoza y Quezaltepeque.\r\n						</div><br>', 'CIUDAD MUJER COLóN GRADúA 290 USUARIAS CAPACITADAS EN CURSOS TéCNICO-VOCACIONALES', 'a1.jpg', '2018-09-30', 2, '                  Colón, La Libertad. Martes, 18 de septiembre de 2018. La Directora de Ciudad Mujer Colón, Bárbara Romero, presidió este día la ceremonia de graduación de 298 usuarias capacitadas por esta sede en diferentes cursos y talleres técnico-vocacionales que son de gran importancia para su desarrollo y empoderamiento.                                                                                                                                                                                                                  ESTA ES LA DESCRIPCION DE UNA NOTICIA                                                                                                                                                                                                                        '),
(11, '<div>\r\n														<span>Santa Ana. Lunes 1 de octubre de 2018. La\r\n velerista, reconocida por ser la primera mexicana y latinoamericana en \r\ncruzar el Océano Atlántico a vela en solitario, Galia Moss, conoció esta\r\n tarde el funcionamiento del modelo Ciudad Mujer, un programa del \r\nGobierno de El Salvador exclusivo para la población femenina. <br></span></div><div><br></div><div>En el \r\nrecorrido acompañaron la Directora de la sede de Ciudad Mujer Santa Ana,\r\n Rosa María Centeno, y la Representante de ONU Mujeres en El Salvador, \r\nAna Elena Badilla.\r\nDurante la visita, Moss tuvo la oportunidad de conocer los servicios \r\nque&nbsp;ofrece Ciudad Mujer a través de sus cinco módulos de atención. <br></div><div><br></div><div>Expresó sentirse impresionada por el Programa Ciudad Mujer y por cómo se\r\n encuentran distribuidas 18 instituciones del Estado en una misma \r\ninfraestructura, trabajando en beneficio de las mujeres salvadoreñas y \r\nde sus familias.\r\nAl finalizar el recorrido, la velerista sostuvo un conversatorio con \r\nun grupo de mujeres, todas ellas usuarias de Ciudad Mujer, con quienes \r\ncompartió su experiencia e invitó a nunca darse por vencidas, \r\nmotivándolas a que aprovechen que existe un espacio como Ciudad Mujer \r\nque vela por sus derechos. “Estoy muy impresionada por el trabajo que \r\nrealiza Ciudad Mujer. Creo que todos los países deberían de tener este \r\nmodelo”, expresó Moss.\r\n						</div><br>', 'VELERISTA MEXICANA, GALIA MOSS, CONOCE MODELO CIUDAD MUJER', 'a2.jpg', '2018-09-30', 1, ' Santa Ana. Lunes 1 de octubre de 2018. La velerista, reconocida por ser la primera mexicana y latinoamericana en cruzar el Océano Atlántico a vela en solitario, Galia Moss, conoció esta tarde el funcionamiento del modelo Ciudad Mujer, un programa del Gobierno de El Salvador                                                                      '),
(12, '<div>\r\n														<span>\r\n<div>\r\nSan Martín. San Salvador. Viernes, 7 de septiembre de 2018.&nbsp;Este\r\n día dio inicio la capacitación en Atención y Organización de Eventos, \r\nimpartida por la Secretaría de Inclusión Social (SIS) a emprendedoras \r\napoyadas por Ciudad Mujer San Martín con el fin de que adquieran más \r\nconocimientos y habilidades para impulsar el desarrollo de sus \r\nemprendimientos.\r\n<br></div><div><br></div><div>El curso tiene una duración de cuatro jornadas en las que las \r\nparticipantes aprenderán sobre los diferentes aspectos y elementos a \r\ntomar en cuenta para la organización de pequeños y grandes eventos. \r\nEntre los contenidos desarrollados están: el montaje de eventos, \r\npreparación de cronogramas, agendas o programas; elaboración de \r\npresupuestos e invitaciones, creación de comisiones de apoyo, búsqueda \r\nde recursos y otros. <br></div><div><br></div><div>Las emprendedoras participan de manera entusiasta, pues consideran \r\nque los conocimientos que obtendrán en esta nueva capacitación de Ciudad\r\n Mujer, después les servirán para para proyectar y promover la buena \r\nimagen de sus servicios y productos. Lorena Villacorta, elabora \r\naccesorios para mujer con diferentes materiales (coco, madera, piedras&nbsp; y\r\n tela), dijo que entre sus planes a corto plazo está participar o montar\r\n un pequeño desfile para mostrar sus productos, por lo que esta \r\ncapacitación es de mucha utilidad para ella.\r\nLorena ha recibido anteriormente, en Ciudad Mujer San Martín, \r\ncapacitaciones en Derechos y Género, Emprendedurismo y asesoría para \r\nmejorar la imagen de sus productos. Todos esos apoyos y aprendizajes le \r\nhan servido para tener más seguridad en sí misma a la hora de buscar \r\nnuevos clientes y para ser más organizada en su emprendimiento, algo que\r\n con año y medio de trabajo junto a Ciudad Mujer ya genera buenos \r\nresultados, pues actualmente vende sus productos a negocios en San \r\nSalvador, playa El Tunco y San Rafael Cedros.</div><div><br></div><div>\r\nLas participantes tienen emprendimientos en rubros como alimentación,\r\n elaboración de accesorios artesanales, corte y confección y cosmética. \r\nProvienen de municipios como Ilopango, San Salvador, Soyapango, San \r\nBartolomé Pirulapía, Ciudad Delgado, San Martín y otros.\r\nEsta es la primera vez que se brinda esta capacitación a usuarias y \r\nse llevará a cabo en todas las sedes de Ciudad Mujer; en años anteriores\r\n se ha impartido a funcionarias de todos los centros Ciudad Mujer.\r\n</div>\r\n</span>\r\n						</div><br>', 'EMPRENDEDORAS DE CIUDAD MUJER SON CAPACITADAS EN ORGANIZACIóN DE EVENTOS', 'a3.jpg', '2018-09-26', 1, '                   San Martín. San Salvador. Viernes, 7 de septiembre de 2018. Este día dio inicio la capacitación en Atención y Organización de Eventos, impartida por la Secretaría de Inclusión Social (SIS) a emprendedoras apoyadas por Ciudad Mujer San Martín con el fin de que adquieran más conocimientos y habilidades para impulsar el desarrollo de sus emprendimientos.                                                                                                                                                                                                                                                                  ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Balance`
--

CREATE TABLE `tbl_Balance` (
  `PK_Id_Balance` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Fecha_Balance` date NOT NULL,
  `Total_Ingreso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Balance`
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
(36, 1, '2018-11-01', 0),
(37, 15, '2018-10-16', 0),
(38, 1, '2018-10-18', 0),
(39, 1, '2018-10-24', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Categoria_Elementos`
--

CREATE TABLE `tbl_Categoria_Elementos` (
  `Pk_Id_Categoria_Elemento` int(11) NOT NULL,
  `Nombre_Categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Categoria_Elementos`
--

INSERT INTO `tbl_Categoria_Elementos` (`Pk_Id_Categoria_Elemento`, `Nombre_Categoria`) VALUES
(1, 'Equipamiento'),
(2, 'Insumos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Contactos`
--

CREATE TABLE `tbl_Contactos` (
  `PK_Id_Contacto` int(11) NOT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Id_user_contacto` int(11) NOT NULL,
  `Nombre_Contacto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Foto_Contacto` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `Estado_Contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Contactos`
--

INSERT INTO `tbl_Contactos` (`PK_Id_Contacto`, `FK_Id_Usuaria`, `Id_user_contacto`, `Nombre_Contacto`, `Foto_Contacto`, `Estado_Contacto`) VALUES
(12, 2, 1, 'RoxanaBlanco', 'Roxana Blanco1/f3.jpg', 0),
(13, 2, 13, 'Juana', 'Juana 13/images.jpeg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Egresos`
--

CREATE TABLE `tbl_Egresos` (
  `Pk_Id_Egreso` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Nombre_Egreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Egreso` float NOT NULL,
  `Fecha_Egreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Egresos`
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
(125, 1, 'Salarios', 250, '2018-11-01'),
(126, 15, 'Compras en efectivo', 72, '2018-10-16'),
(127, 15, 'Efectivo pagado por compras al credito', 12, '2018-10-16'),
(128, 15, 'Salarios', 100, '2018-10-16'),
(129, 15, 'Renta', 10, '2018-10-16'),
(130, 15, 'Pago de préstamos', 0, '2018-10-16'),
(131, 15, 'Otros', 0, '2018-10-16'),
(132, 1, 'Compras en efectivo', 11, '2018-10-18'),
(133, 1, 'Efectivo pagado por compras al credito', 1, '2018-10-18'),
(134, 1, 'Otros', 10, '2018-10-18'),
(135, 1, 'Pago de Luz', 1, '2018-10-18'),
(136, 1, 'Pago de préstamos', 1, '2018-10-18'),
(137, 1, 'Renta', 1, '2018-10-18'),
(138, 1, 'Salarios', 1, '2018-10-18'),
(139, 1, 'Compras en efectivo', 100, '2018-10-24'),
(140, 1, 'Efectivo pagado por compras al credito', 10, '2018-10-24'),
(141, 1, 'Otros', 10, '2018-10-24'),
(142, 1, 'Pago de Luz', 1, '2018-10-24'),
(143, 1, 'Pago de préstamos', 10, '2018-10-24'),
(144, 1, 'Renta', 10, '2018-10-24'),
(145, 1, 'Salarios', 10, '2018-10-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Elementos_Subrubros`
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
-- Volcado de datos para la tabla `tbl_Elementos_Subrubros`
--

INSERT INTO `tbl_Elementos_Subrubros` (`Pk_Id_Elemento_Subrubro`, `Nombre_Elemento`, `Cantidad_Elemento`, `Precio_Elemento`, `Medida_Elemento`, `Fk_Id_Categoria_Elemento`, `Fk_Id_Subrubro`) VALUES
(1, 'Harina', 10, 0.9, 'Libras ', 2, 18),
(2, 'Agua', 6, 1, 'Litros ', 2, 18),
(3, 'Mesa', 3, 50, ' ', 1, 18),
(4, 'Horno', 1, 500, ' ', 1, 18),
(5, 'Sillas', 6, 5, ' ', 1, 18),
(6, 'sxs', 12, 120, 'Gramos ', 2, 19),
(7, 'yhyyjn', 1, 12, ' ', 1, 19),
(8, 'hgnhj', 1, 10, ' ', 1, 19),
(9, 'qwer', 12, 1, 'Libras ', 2, 20),
(10, 'sdfgh', 1, 12, ' ', 1, 20),
(11, 'tortillas de maiz', 100, 1, 'Litros ', 2, 21),
(12, 'chile', 10, 1, 'Litros ', 2, 21),
(13, 'tomates', 10, 1, 'Litros ', 2, 21),
(14, 'cebolla', 2, 0.25, 'Litros ', 2, 21),
(15, 'aceite', 1, 1.5, 'Litros ', 2, 21),
(16, 'plancha de tacos', 1, 50, ' ', 1, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Guias_Multimedia`
--

CREATE TABLE `tbl_Guias_Multimedia` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Guias_Multimedia`
--

INSERT INTO `tbl_Guias_Multimedia` (`pk_Id_Guia`, `FK_Id_Usuaria`, `Titulo_Guia`, `Fecha_Publicacion`, `Tipo_publicacion`, `Video_Multimedia`, `Documento_Guia`, `Contenido`, `Descripcion_Guia`, `Imagen`) VALUES
(19, 1, 'El uso de redes sociales en las empresas', '2018-11-01', 'Video', 'yhKY9HdOGaQ', '', 'Cada vez más empresas de todos los sectores usan las redes sociales\r\n pues las consideran canales de comunicación valiosos ya que a través de\r\n ellas pueden promocionarse de manera sencilla y efectiva en la nube, \r\nobteniendo de ese modo importantes beneficios en términos de negocio. En\r\n efecto, según datos estadísticos, alrededor de 6 cada 10 empresas \r\nespañolas utilizan actualmente los medios de comunicación social con el \r\npropósito de promover sus marcas, optimizar la comunicación y fomentar \r\nla participación de los consumidores para conocerlos mejor. Así, por \r\nejemplo, podemos hacer Re-Tuits en el hastag <a target=\"_blank\" rel=\"nofollow\" href=\"https://twitter.com/AlarmasSpain\">Securitas Direct Twitter</a>\r\n y acceder al contenido que provee esta empresa líder en sistemas de \r\nalarmas. Otro caso es el de Remica, compañía dedicada a la eficiencia \r\nenergética, que a través del <a target=\"_blank\" rel=\"nofollow\" href=\"http://www.youtube.com/user/remicaES\">Canal de Remica </a>da\r\n a conocer mediante videos subidos a Youtube sus servicios y todas las \r\nnovedades referidas al sector. Esto es solo una muestra del enorme poder\r\n que poseen los Social Media para promocionar una marca y fidelizar clientes.<br>\r\nMás oportunidades<br>\r\nPotenciar la imagen de una marca o empresa y conocer más a sus clientes,\r\n son algunas de las cuestiones que explican el aumento del uso de las \r\nredes sociales a nivel empresarial. Aunque también son consideradas una \r\nexcelente y enriquecedora herramienta para mejorar el servicio que \r\nbrindan, no sólo a los consumidores sino además al público interno de \r\nlas organizaciones. De este modo, las comunidades virtuales posibilitan \r\nestar en contacto con los públicos relacionados con la empresa, \r\naprovechando más y mejor las oportunidades.<br>\r\nPara poder incorporar las redes sociales en el ámbito laboral, las \r\ncompañías suelen optar por crear foros de debate o redes sociales a \r\nmedida, e incluso eligen explotar de una manera más abierta a las redes \r\nsociales ya existentes. En algunos casos, por ejemplo, deciden crear un \r\nforo en Linkedin, una página o grupo en Facebook o un hastag dentro de Twitter,\r\n para que los clientes y el público en general puedan mantenerse al \r\ntanto sobre las últimas novedades de la marca. Si bien hay más de mil \r\nredes sociales, es incuestionable que Twitter y Facebook gozan de mayor \r\npopularidad entre los usuarios con perfiles activos.<br>\r\nEn la actualidad, el empleo de las redes sociales por parte de las \r\nempresas es condición básica e indispensable para poder interactuar con \r\nlos clientes. Los usuarios de este tipo de comunidades virtuales se \r\nencuentran constantemente influenciados, siendo éste un factor \r\ndeterminante que incide en las decisiones de compra del usuario.<br>\r\nPor medio de su presencia en los Social Media, las compañías tienen la \r\nposibilidad de recomendar su página a sus contactos, quienes a su vez \r\npueden recomendarla a sus amigos.<br>\r\nSin embargo, algunas empresas dan cuenta de la existencia de ciertos \r\ninconvenientes en el uso de estos medios, como las complicaciones para \r\nmedir el efecto y alcance logrado o la necesidad de tener que actualizar\r\n permanentemente los perfiles. Incluso, hay compañías que desconocen \r\ncuál es la manera correcta&nbsp; de estar en las redes sociales.                                         <br>', 'Descripcion', 'img.jpeg'),
(23, 1, 'Tipos de contrato de trabajo en El Salvador', '2018-10-01', 'Documento', '', 'guia_doc.docx', 'Así, el tener claro el tipo de contratación que una\r\n empresa te ofrece te permitirá conocer detalles como el reconocimiento \r\nde prestaciones de ley, como seguro social y AFP, el porcentaje de renta\r\n que deberán descontarte, las horas máximas de trabajo que pueden exigir\r\n a la semana, etc.<br><br>\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo por tiempo indefinido</span>\r\n<span><br>Esta contratación se da cuando el empleado forma parte de un \r\nequipo fijo de trabajo, para realizar actividades de manera permanente \r\ndentro de la empresa. Una de las características de este tipo de \r\ncontrato consiste en que no delimita una fecha de caducidad del acuerdo \r\nentre la empresa y el trabajador. Sin embargo, al igual que la mayoría \r\nde contratos, suele establecer que tanto el contratista como el empleado\r\n pueden romper el acuerdo en cualquier momento, siempre y cuando se \r\nrespete el marco legal. Los contratos por tiempo indefinido suelen \r\notorgarse a:<br><br> • Puestos gerenciales y de alto nivel.<br> • Representantes de empresas internacionales.<br> • Plazas de coordinación.<br> • Plazas dedicadas a la prestación de servicios específicos.<br><br></span>\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo por período determinado</span>\r\n<span><br> Esta es una contratación típicamente utilizada para la \r\nelaboración de proyectos a corto y mediano plazo, puede firmarse por \r\nunos cuantos días hasta varios meses o incluso años. Sin embargo, \r\nestablece desde el acuerdo una fecha de caducidad del mismo, usualmente \r\nporque se requerirá del empleado un servicio meramente temporal. Este \r\ntipo de contratos suele utilizarse para empleos como:<br><br> • Construcción.<br> • Consultorías.<br> • Para suplir permisos de empleados fijos (como licencias de maternidad).<br> • Proyectos ejecutados para un período determinado de tiempo.<br><br></span>\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo por servicios profesionales</span>\r\n<span><br>Como su nombre lo indica, estos contratos suceden cuando la \r\nempresa solicita servicios específicos a un profesional, quien suele \r\ntrabajar como consultor. Normalmente, el contrato por servicios \r\nprofesionales se acuerda en base a productos específicos que el empleado\r\n debe entregar y la empresa recibir de manera conforme. Al mismo tiempo,\r\n este tipo de contrataciones no reconocen las prestaciones de ley ni \r\notorgan al empleado un lugar fijo dentro de las instalaciones de la \r\ninstitución.<br><br> Este tipo de contratos suele indicar elementos \r\npreviamente acordados por ambas partes como tiempos de entrega, pago \r\ntotal por servicios, retención de renta o pago de IVA, según sea el \r\ncaso, así como productos específicos que el consultor deberá entregar. \r\nLas empresas recurren a estos contratos para solicitar:<br><br> • Consultorías sobre temas específicos.<br> • Servicios externos por un período corto de tiempo.<br> • Productos que pueden ser elaborados de manera “freelance” por un profesional en el área.<br><br>\r\n Respecto a este tipo de contratos, es necesario destacar que es de suma\r\n importancia que tanto el profesional como la empresa respeten lo \r\nacordado al momento de firmar, pues esto evitará inconvenientes que \r\npuedan requerir intervención legal para ser solucionados. Por otro lado,\r\n el profesional que acepta este tipo de contratos debe esforzarse para \r\nentregar un servicio de calidad, que le permita hacerse de nuevos \r\nclientes para mantener buenas relaciones personales y profesionales como\r\n consultor independiente.<br><br></span>\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo para un período de prueba</span>\r\n<span><br>Es común que las empresas, al momento de contratar un nuevo \r\nempleado para una plaza fija, se determine entregar a este un primer \r\ncontrato para que se realice el período de prueba, durante el cual ambas\r\n partes pueden dar por terminada la relación profesional, a partir de \r\nlos motivos que estimen convenientes. Estos contratos suelen tener una \r\nduración de tres meses, pues se considera que es el tiempo suficiente \r\npara que el empleado conozca a la empresa, así como la empresa al \r\nempleado, permitiendo iniciar una relación profesional entre ambas \r\npartes.<br><br> El código de trabajo de El Salvador indica que al \r\ncelebrar este tipo de contratos, y transcurre el período definido del \r\nmismo y ninguna de las partes decide terminar, el contrato pasará a ser \r\npor tiempo indefinido a menos que se cree un nuevo contrato con un \r\ntiempo determinado. Sin importar cuál sea el caso, el contrato por \r\nperíodo de prueba no puede celebrarse más de una vez entre las partes.<br><br></span>\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Contrato de trabajo para interinatos</span>\r\n<span><br>Suelen darse cuando una plaza se ha desocupado y la empresa \r\nnecesita llenarla de manera temporal, mientras encuentran un nuevo \r\nempleado fijo para la misma. Una de sus principales características es \r\nque permite al empleado que cubrirá la plaza gozar de los mismos \r\nderechos que los empleados fijos, exceptuando la inmovilidad laboral, si\r\n es que estuviese contemplada en la plaza permanente.<br><br> Sin \r\nembargo, a menos que el empleado interino sea incorporado como \r\npermanente dentro de la empresa, al momento de contar con un nuevo \r\nempleado para cubrir la plaza fija, la empresa puede terminar el \r\ncontrato de interinato en el momento que lo desee.<br><br></span>\r\n<span><a target=\"_blank\" rel=\"nofollow\"></a>Consejos adicionales</span>\r\n<span><br>Si bien el Código de Trabajo estipula otros tipos de contrato \r\nademás de los descritos anteriormente, estos son los más comunes para \r\nlas empresas salvadoreñas. No obstante, es necesario que al recibir \r\nalguno de estos, tomes en cuenta las siguientes consideraciones:<br><br> • Lee el contrato detenidamente,  no lo firmes antes de estar completamente seguro de todas las condiciones expuestas en el mismo.<br><br> • Consulta tus dudas, antes de firmar, \r\n consulta con la empresa cualquier duda que tengas y, si no estás de \r\nacuerdo con algún apartado, exprésalo de forma oportuna, para evaluar \r\nuna alternativa posible.<br><br> • Conoce tus derechos y responsabilidades como empleado, \r\n investiga el marco legal que respalda el tipo de contrato que la \r\nempresa te ofrece, así como las obligaciones que debes cumplir como \r\nempleado al firmar un contrato en particular.<br><br> • Cumple cada uno de los acuerdos, \r\n pues ello te evitará la terminación del contrato por parte de la \r\nempresa así como posibles sanciones por faltas a lo estipulado en el \r\ncontrato firmado.<br><br> • Solicita el contrato antes de iniciar, \r\n sobre todo si se trata de una consultoría, pues tener el contrato te \r\npermitirá saber con claridad detalles como las fechas de entrega, \r\nproductos solicitados, fechas de pago, etc.<br><br> Sin importar cuál \r\nsea el tipo de contrato de trabajo que te ofrezcan, recuerda que debes \r\ndemostrar a la empresa la calidad de profesional que eres, para que \r\ntengan una buena imagen de ti y tu trabajo y, así, puedan considerarte \r\npara ocasiones futuras, ya sea para servicios concretos o para formar \r\nparte de su equipo permanente de trabajo.<br><br> Si recién inicias tu \r\nvida profesional, no tengas miedo de aceptar empleos bajo las \r\nmodalidades descritas anteriormente, recuerda que el país cuenta con \r\nregulaciones claras que te permitirán saber si la empresa está actuando \r\ncorrectamente, así como tus derechos y obligaciones como empleado</span><div><br>Leer más: <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx#ixzz5UCxIqCvf\">https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx#ixzz5UCxIqCvf</a><br></div>                                         <br>', 'En El Salvador, al igual que en el resto del mundo, existe un marco legal que regulariza los tipos de contrato de trabajo, con el fin de establecer parámetros claros que tanto las empresas como los trabajadores deben respetar. Estas normas se encuentran estipuladas dentro del Código de Trabajo, regulado por el Ministerio de Trabajo de El Salvador.\r\n\r\nLeer más: https://www.tecoloco.com.sv/blog/tipos-de-contratado-de-trabajo-en-el-salvador.aspx#ixzz5UD11E0VM\r\n', 'a5.png'),
(24, 1, 'Eras de la tiera', '2018-10-17', 'Documento', '', 'tareas_eras.pdf', 'Seguramente se está preguntando: « ¿Tiene algún significado esta extraña\r\n combinación de letras y números?» Pues la respuesta es «Sí» y así es \r\ncomo funciona:) \r\n<br>\r\n<br>\r\n<b>Formato de los códigos HTML: </b>\r\n<br>\r\nCada código HTML comprende el símbolo «#» y 6 letras o números. Estos \r\nnúmeros se expresan en el sistema de numeración hexadecimal. Por ejemplo\r\n «FF» en hexadecimal representa el número 255 en Decimal. \r\n<br>\r\n<br>\r\n<b>Significado de los símbolos: </b>\r\n<br>\r\nSignificado de los símbolos: \r\nLos dos primeros símbolos del código de color HTML representan la intensidad del color <b>rojo</b>. 00 es el menos intenso y FF es el más intenso. \r\nEl tercer y el cuarto número representan la intensidad del <b>verde</b> y el quinto y el sexto representan la intensidad del <b>azul</b>.\r\n Así, con esta combinación de la intensidad del rojo, verde y azul podemos mezclar cualquier color que deseemos de corazón;) \r\n<br>\r\n<br>', 'las eras de la tierra son bien importante para el mundo', 'a5.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Ingresos`
--

CREATE TABLE `tbl_Ingresos` (
  `PK_Id_Ingreso` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) DEFAULT NULL,
  `Nombre_Ingreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Ingreso` float NOT NULL,
  `Fecha_Ingreso` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Ingresos`
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
(12, 1, 'Regalias', 400, '2018-11-01'),
(13, 15, 'Dinero disponible al principio del mes', 100, '2018-10-16'),
(14, 15, 'Ventas en efectivo', 100, '2018-10-16'),
(15, 15, 'Efectivo por ventas al credito', 25, '2018-10-16'),
(16, 15, 'Otros ingresos', 75, '2018-10-16'),
(17, 1, 'Dinero disponible al principio del mes', 100, '2018-10-18'),
(18, 1, 'Ventas en efectivo', 10, '2018-10-18'),
(19, 1, 'Efectivo por ventas al credito', 10, '2018-10-18'),
(20, 1, 'Otros ingresos', 10, '2018-10-18'),
(21, 1, 'Remesas', 11, '2018-10-18'),
(22, 1, 'Regalias', 11, '2018-10-18'),
(23, 1, 'Dinero disponible al principio del mes', 10, '2018-10-24'),
(24, 1, 'Ventas en efectivo', 10, '2018-10-24'),
(25, 1, 'Efectivo por ventas al credito', 100, '2018-10-24'),
(26, 1, 'Otros ingresos', 10, '2018-10-24'),
(27, 1, 'Remesas', 100, '2018-10-24'),
(28, 1, 'Regalias', 100, '2018-10-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Ingresos_Egresos_Balance`
--

CREATE TABLE `tbl_Ingresos_Egresos_Balance` (
  `FK_Id_Balance` int(11) NOT NULL,
  `FK_Id_Egreso` int(11) NOT NULL,
  `Nombre_Operacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Total_Ingreso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Ingresos_Egresos_Balance`
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
(36, 125, 'Gasto', 2100),
(37, 126, 'Gasto', 300),
(37, 127, 'Gasto', 300),
(37, 128, 'Gasto', 300),
(37, 129, 'Gasto', 300),
(37, 130, 'Gasto', 300),
(37, 131, 'Gasto', 300),
(38, 132, 'Gasto', 152),
(38, 133, 'Gasto', 152),
(38, 134, 'Gasto', 152),
(38, 135, 'Gasto', 152),
(38, 136, 'Gasto', 152),
(38, 137, 'Gasto', 152),
(38, 138, 'Gasto', 152),
(39, 139, 'Gasto', 330),
(39, 140, 'Gasto', 330),
(39, 141, 'Gasto', 330),
(39, 142, 'Gasto', 330),
(39, 143, 'Gasto', 330),
(39, 144, 'Gasto', 330),
(39, 145, 'Gasto', 330);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Ingresos_Egresos_Bases`
--

CREATE TABLE `tbl_Ingresos_Egresos_Bases` (
  `PK_Id_Bases` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_Ingresos_Egresos_Bases`
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
-- Estructura de tabla para la tabla `tbl_Insumos`
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
-- Volcado de datos para la tabla `tbl_Insumos`
--

INSERT INTO `tbl_Insumos` (`PK_Id_Insumo`, `Nombre_Insumo`, `Existencia_Insumo`, `Precio_Insumo`, `Medida_Insumo`, `Cantidad_Minima`, `FK_Id_Tipo_Insumo`, `FK_Id_Usuario`) VALUES
(35, 'Agua', '10', '0.90', 'Litros', 2, 1, 1),
(36, 'Papel periodico', '13', '0.25', 'Libras', 5, 2, 1),
(37, 'sal', '-100', '0.25', 'Libras', 2, 1, 1),
(39, 'dfgh', '1', '1', 'Libras', 10, 1, 15),
(42, 'asdfghj', '12', '1', 'Gramos', 1, 1, 15),
(44, 'qwedf', '100', '1.50', 'Kilogramos', 15, 1, 15),
(47, 'tomates', '-102', '10', 'Gramos', 25, 1, 1),
(48, 'chiles', '-51', '5', 'Gramos', 10, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Inventario`
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
-- Volcado de datos para la tabla `tbl_Inventario`
--

INSERT INTO `tbl_Inventario` (`PK_Id_Inventario`, `FK_Id_Producto`, `Existencia_Producto`, `Fecha_Creacion`, `Lugar_Existencia`, `Estado`) VALUES
(1, 21, '80', '0000-00-00', 'San Miguel', 'Terminado'),
(2, 21, '87', '2018-08-30', 'San Miguel', 'Terminado'),
(3, 22, '90', '0000-00-00', 'San Miguel', 'Terminado'),
(4, 21, '100', '0000-00-00', 'San Miguel', 'Terminado'),
(5, 21, '100', '2018-08-31', 'San Miguel', 'Terminado'),
(6, 21, '100', '0000-00-00', 'San Miguel', 'En Proceso'),
(7, 21, '100', '0000-00-00', 'San Miguel', 'Terminado'),
(8, 23, '90', '2018-08-15', 'San Miguel', 'Terminado'),
(9, 28, '71', '2018-08-30', '', 'Terminado'),
(10, 29, '99', '2018-08-22', '', 'Terminado'),
(11, 36, '', '0000-00-00', '', 'En Proceso'),
(12, 36, '90', '2018-10-17', '', 'Terminado'),
(13, 35, '1', '2018-10-09', '', 'En Proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Mensajes`
--

CREATE TABLE `tbl_Mensajes` (
  `PK_Id_Mensaje` int(11) NOT NULL,
  `Contenido_Mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `Contacto_Mensaje` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Emisor_Mensaje` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Estado_Mensaje` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Mensajes`
--

INSERT INTO `tbl_Mensajes` (`PK_Id_Mensaje`, `Contenido_Mensaje`, `Contacto_Mensaje`, `Emisor_Mensaje`, `FK_Id_Usuaria`, `Estado_Mensaje`) VALUES
(1, 'hola                                    \n                                ', '78787878', 'Juan', 14, 'Nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Mensajes_Contactos`
--

CREATE TABLE `tbl_Mensajes_Contactos` (
  `PK_Id_Mensaje_Contacto` int(11) NOT NULL,
  `Id_Emisor` int(11) NOT NULL,
  `Id_receptor` int(11) NOT NULL,
  `Mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Id_Contacto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Perfiles_Empresariales`
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
  `Correo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Num_Visitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Perfiles_Empresariales`
--

INSERT INTO `tbl_Perfiles_Empresariales` (`pk_Id_Perfil`, `FK_Usuaria`, `Nombre_Negocio`, `Direccion_Negocio`, `Descripcion_Negocio`, `FK_Rubro`, `Foto_Perfil`, `Foto1`, `Foto2`, `Foto3`, `Telefono`, `Correo`, `Num_Visitas`) VALUES
(1, 1, 'asad', 'aDAD', '', 1, 'Roxana Blanco1/f3.jpg', 'Roxana Blanco1/f1.jpg', 'Roxana Blanco1/f2.jpg', 'Roxana Blanco1/f4.jpg', '7777', '7777', 36),
(2, 2, 'Lily Butique', 'allalsl', 'kskad', 1, 'Leticia Machuca2/f3.jpg', 'Leticia Machuca2/impresiones.jpg', 'Leticia Machuca2/soporte.png', 'Leticia Machuca2/soporte.png', '123233', '1232332', 12),
(3, 5, 'Mala artesanias', 'San Miguel', 'Es un negocio de artesanias', 1, 'Maria Lizama5/f1.jpg', 'Maria Lizama5/f2.jpg', 'Maria Lizama5/f3.jpg', 'Maria Lizama5/f4.jpg', '7560954994', 'lalalal@ho', 13),
(5, 6, 'Maria´s ', 'un negocio de buen gusto al alcance de tu bolsillo', 'otro', 1, 'maria ramirez6/m1.jpg', 'maria ramirez6/m2.jpg', 'maria ramirez6/m3.jpg', 'maria ramirez6/m4.jpg', '42514542', 'lkjhgf', 4),
(6, 8, 'Panaderia Lupe', 'San Miguel', 'Los mejores Panes ', 3, 'Luisa Perez8/l1.jpg', 'Luisa Perez8/l2.jpg', 'Luisa Perez8/l3.jpg', 'Luisa Perez8/l4.jpg', '72454978', 'lupe@gmail', 3),
(7, 7, 'Cerveceria la Patrona', 'San Miguel', 'Somos los mas innovadores programadores de san miguel', 4, 'Juana Lopez7/j1.jpg', 'Juana Lopez7/j2.jpg', 'Juana Lopez7/j3.jpg', 'Juana Lopez7/j4.jpg', '74787579', 'cv@hotmail', 4),
(8, 13, 'MI negocio el mas pro', 'San MIguel', 'Los mas pro en tecnologia', 4, 'Juana 13/ja1.jpg', 'Juana 13/ja2.jpg', 'Juana 13/ja3.jpg', 'Juana 13/ja4.jpg', '7777777', 'Micorreo@g', 2),
(18, 14, 'Mi artesania', 'San Miguel', 'Venta de artesenias de todo tipo', 6, 'Liliana de jesus Latoya Jackson14/li1.jpg', 'Liliana de jesus Latoya Jackson14/li2.jpg', 'Liliana de jesus Latoya Jackson14/li3.jpg', 'Liliana de jesus Latoya Jackson14/li4.jpg', '503-7887-8', 'algo@gmail', 4),
(19, 15, 'pupuseria la Bendicion de Dios', 'colonia agropecuaria', 'una pupuseria excelente', 1, 'carmen lizama15/b1.jpg', 'carmen lizama15/b2.jpg', 'carmen lizama15/b3.jpg', 'carmen lizama15/b4.jpg', '503-1541-5', 'dxjbsjh.bd', 9),
(20, 17, 'Farmacos Blancos', 'San Miguel', 'venta de farmacos al mejor precio del mercado', 5, 'Glenda Blanco17/ja2.jpg', 'Glenda Blanco17/b1.jpg', 'Glenda Blanco17/b4.jpg', 'Glenda Blanco17/f2.jpg', '503-7215-4', 'glnde@hotmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Productos`
--

CREATE TABLE `tbl_Productos` (
  `PK_Id_Producto` int(11) NOT NULL,
  `Nombre_Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Producto` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Productos`
--

INSERT INTO `tbl_Productos` (`PK_Id_Producto`, `Nombre_Producto`, `Precio_Producto`, `FK_Id_Usuario`) VALUES
(33, 'pepesca', '0.25', 1),
(34, 'agua mineral', '1.50', 1),
(35, 'piñata', '1.50', 1),
(36, 'tacos', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Productos_Insumos`
--

CREATE TABLE `tbl_Productos_Insumos` (
  `FK_Id_Producto` int(11) NOT NULL,
  `FK_Id_Insumo` int(11) NOT NULL,
  `Cantidad_Insumo` float NOT NULL,
  `Medida_Insumo` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Productos_Insumos`
--

INSERT INTO `tbl_Productos_Insumos` (`FK_Id_Producto`, `FK_Id_Insumo`, `Cantidad_Insumo`, `Medida_Insumo`) VALUES
(33, 35, 1, 'Libras'),
(33, 37, 1, 'Litros'),
(34, 35, 21, 'Litros'),
(35, 36, 1, 'Libras'),
(36, 37, 1, 'Gramos'),
(36, 47, 2, 'Gramos'),
(36, 48, 1, 'Libras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Rubros`
--

CREATE TABLE `tbl_Rubros` (
  `PK_Id_Rubro` int(11) NOT NULL,
  `Nombre_Rubro` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Rubros`
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
-- Estructura de tabla para la tabla `tbl_Sedes`
--

CREATE TABLE `tbl_Sedes` (
  `pk_Id_Sede` int(11) NOT NULL,
  `Nombre_Sede` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Sedes`
--

INSERT INTO `tbl_Sedes` (`pk_Id_Sede`, `Nombre_Sede`) VALUES
(1, 'Ciudad Mujer Colón'),
(2, 'Ciudad Mujer San Martín'),
(3, 'Ciudad Mujer Usulután'),
(4, 'Ciudad Mujer Santa Ana'),
(5, 'Ciudad Mujer San Miguel'),
(6, 'Ciudad Mujer Morazán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Subrubros`
--

CREATE TABLE `tbl_Subrubros` (
  `PK_Id_Subrubro` int(11) NOT NULL,
  `FK_Id_Rubro` int(11) NOT NULL,
  `Nombre_Rubro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Produccion_Mensual` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Subrubros`
--

INSERT INTO `tbl_Subrubros` (`PK_Id_Subrubro`, `FK_Id_Rubro`, `Nombre_Rubro`, `Produccion_Mensual`) VALUES
(18, 1, 'Panaderia y Pasteleria', 2000),
(19, 3, 'bnxjh', 100),
(20, 2, 'asdfgh', 100),
(21, 1, 'Taqueria', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Tipos_Insumos`
--

CREATE TABLE `tbl_Tipos_Insumos` (
  `Pk_Id_Tipo_Insumo` int(11) NOT NULL,
  `Nombre_Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Tipos_Insumos`
--

INSERT INTO `tbl_Tipos_Insumos` (`Pk_Id_Tipo_Insumo`, `Nombre_Tipo`) VALUES
(1, 'Comestible'),
(2, 'No comestible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Tipos_Usuarias`
--

CREATE TABLE `tbl_Tipos_Usuarias` (
  `pk_Id_Tipo` int(11) NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Tipos_Usuarias`
--

INSERT INTO `tbl_Tipos_Usuarias` (`pk_Id_Tipo`, `Descripcion`) VALUES
(1, 'Super Usuario'),
(2, 'Administradora'),
(3, 'Emprendedora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Tipos_Usuarios`
--

CREATE TABLE `tbl_Tipos_Usuarios` (
  `PK_Id_Tipo_Usuario` int(11) NOT NULL,
  `Nombre_Tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_Tipos_Usuarios`
--

INSERT INTO `tbl_Tipos_Usuarios` (`PK_Id_Tipo_Usuario`, `Nombre_Tipo`) VALUES
(1, 'Administrador'),
(2, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Usuarias`
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
  `Fecha_Actividad` date DEFAULT NULL,
  `Fecha_Registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_Usuarias`
--

INSERT INTO `tbl_Usuarias` (`pk_Id_Usuaria`, `FK_Sede`, `Nombre`, `Apellido`, `Nom_User`, `Pass`, `Direccion`, `fk_Tipo_Usuaria`, `Telefono`, `Dui`, `Fecha_Actividad`, `Fecha_Registro`) VALUES
(1, 5, 'Roxana', 'Blanco', 'roxwite', '123456', 'San Miguel', 1, '72787475', '1111455-0', '2018-10-18', NULL),
(2, 3, 'Leticia', 'Dias', 'lily', '123456', 'Santiago', 2, '76787574', '2221554-0', '2009-10-18', NULL),
(5, 5, 'Maria', 'Lizama', 'mala', '123456', 'san Miguel', 3, '78888', '789999', '2018-10-02', NULL),
(6, 5, 'maria', 'ramirez', 'maria', '123', 'san miguel', 3, '1235', '111111', '2018-10-02', NULL),
(7, 5, 'Juana', 'Lopez', 'julo', '1234', 'San Miguel', 3, '787878', '1121112', '2018-10-02', '2018-10-02'),
(8, 5, 'Luisa', 'Perez', 'lupe', '123', 'San Miguel', 3, '111111', '22222222', '2018-10-02', '2018-10-02'),
(13, 5, 'Juana', 'Cubias', 'juana', '1234', 'quelepa', 3, '503-5555-5', '55555555-5', '2018-10-12', '2018-10-03'),
(14, 5, 'Liliana de jesus', 'Latoya Jackson', 'lana', '123', 'san miguel', 3, '503-7877-5', '12213565-6', '2018-10-12', '2018-10-04'),
(15, 5, 'carmen', 'lizama', 'carmen', '123456', 'san miguel', 3, '503-7227-8', '03254154-5', '2018-10-21', '2018-10-09'),
(16, 3, 'Sandra', 'Claros', 'sancla', '123456', 'Alegría', 3, '503-7251-4', '10458726-5', NULL, '2018-10-15'),
(17, 5, 'Glenda', 'Blanco', 'glenbla', '123456', 'Hato Nuevo', 3, '503-7412-2', '01255555-5', '2018-10-18', '2018-10-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Venta`
--

CREATE TABLE `tbl_Venta` (
  `Pk_Id_Venta` int(11) NOT NULL,
  `Fk_Id_Inventario` int(11) NOT NULL,
  `Cantidad_Venta` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_Venta`
--

INSERT INTO `tbl_Venta` (`Pk_Id_Venta`, `Fk_Id_Inventario`, `Cantidad_Venta`, `Fecha_Venta`) VALUES
(16, 10, 1, '2018-09-01'),
(17, 9, 25, '2018-09-08'),
(18, 8, 10, '2018-09-29'),
(19, 3, 10, '2018-10-17'),
(20, 2, 12, '2018-10-16'),
(21, 12, 10, '2018-10-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_Anuncios`
--
ALTER TABLE `tbl_Anuncios`
  ADD PRIMARY KEY (`pk_Id_Anuncio`);

--
-- Indices de la tabla `tbl_Balance`
--
ALTER TABLE `tbl_Balance`
  ADD PRIMARY KEY (`PK_Id_Balance`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indices de la tabla `tbl_Categoria_Elementos`
--
ALTER TABLE `tbl_Categoria_Elementos`
  ADD PRIMARY KEY (`Pk_Id_Categoria_Elemento`);

--
-- Indices de la tabla `tbl_Contactos`
--
ALTER TABLE `tbl_Contactos`
  ADD PRIMARY KEY (`PK_Id_Contacto`),
  ADD KEY `FK_Id_Usuaria` (`FK_Id_Usuaria`);

--
-- Indices de la tabla `tbl_Egresos`
--
ALTER TABLE `tbl_Egresos`
  ADD PRIMARY KEY (`Pk_Id_Egreso`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indices de la tabla `tbl_Elementos_Subrubros`
--
ALTER TABLE `tbl_Elementos_Subrubros`
  ADD PRIMARY KEY (`Pk_Id_Elemento_Subrubro`),
  ADD KEY `id_categoria_elemeto` (`Fk_Id_Categoria_Elemento`),
  ADD KEY `Fk_Id_Subrubro` (`Fk_Id_Subrubro`);

--
-- Indices de la tabla `tbl_Guias_Multimedia`
--
ALTER TABLE `tbl_Guias_Multimedia`
  ADD PRIMARY KEY (`pk_Id_Guia`);

--
-- Indices de la tabla `tbl_Ingresos`
--
ALTER TABLE `tbl_Ingresos`
  ADD PRIMARY KEY (`PK_Id_Ingreso`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indices de la tabla `tbl_Ingresos_Egresos_Balance`
--
ALTER TABLE `tbl_Ingresos_Egresos_Balance`
  ADD KEY `id_egreso` (`FK_Id_Egreso`),
  ADD KEY `FK_Id_Balance` (`FK_Id_Balance`);

--
-- Indices de la tabla `tbl_Ingresos_Egresos_Bases`
--
ALTER TABLE `tbl_Ingresos_Egresos_Bases`
  ADD PRIMARY KEY (`PK_Id_Bases`);

--
-- Indices de la tabla `tbl_Insumos`
--
ALTER TABLE `tbl_Insumos`
  ADD PRIMARY KEY (`PK_Id_Insumo`),
  ADD KEY `FK_Id_Tipo_Insumo` (`FK_Id_Tipo_Insumo`),
  ADD KEY `FK_Id_Usuario` (`FK_Id_Usuario`);

--
-- Indices de la tabla `tbl_Inventario`
--
ALTER TABLE `tbl_Inventario`
  ADD PRIMARY KEY (`PK_Id_Inventario`),
  ADD KEY `id_producto` (`FK_Id_Producto`);

--
-- Indices de la tabla `tbl_Perfiles_Empresariales`
--
ALTER TABLE `tbl_Perfiles_Empresariales`
  ADD PRIMARY KEY (`pk_Id_Perfil`),
  ADD KEY `FK_Usuaria` (`FK_Usuaria`),
  ADD KEY `FK_Rubro` (`FK_Rubro`);

--
-- Indices de la tabla `tbl_Productos`
--
ALTER TABLE `tbl_Productos`
  ADD PRIMARY KEY (`PK_Id_Producto`),
  ADD KEY `id_usuario` (`FK_Id_Usuario`);

--
-- Indices de la tabla `tbl_Productos_Insumos`
--
ALTER TABLE `tbl_Productos_Insumos`
  ADD KEY `id_producto` (`FK_Id_Producto`),
  ADD KEY `id_insumo` (`FK_Id_Insumo`);

--
-- Indices de la tabla `tbl_Rubros`
--
ALTER TABLE `tbl_Rubros`
  ADD PRIMARY KEY (`PK_Id_Rubro`);

--
-- Indices de la tabla `tbl_Sedes`
--
ALTER TABLE `tbl_Sedes`
  ADD PRIMARY KEY (`pk_Id_Sede`);

--
-- Indices de la tabla `tbl_Subrubros`
--
ALTER TABLE `tbl_Subrubros`
  ADD PRIMARY KEY (`PK_Id_Subrubro`),
  ADD KEY `id_rubro` (`FK_Id_Rubro`);

--
-- Indices de la tabla `tbl_Tipos_Insumos`
--
ALTER TABLE `tbl_Tipos_Insumos`
  ADD PRIMARY KEY (`Pk_Id_Tipo_Insumo`);

--
-- Indices de la tabla `tbl_Tipos_Usuarias`
--
ALTER TABLE `tbl_Tipos_Usuarias`
  ADD PRIMARY KEY (`pk_Id_Tipo`);

--
-- Indices de la tabla `tbl_Tipos_Usuarios`
--
ALTER TABLE `tbl_Tipos_Usuarios`
  ADD PRIMARY KEY (`PK_Id_Tipo_Usuario`);

--
-- Indices de la tabla `tbl_Usuarias`
--
ALTER TABLE `tbl_Usuarias`
  ADD PRIMARY KEY (`pk_Id_Usuaria`),
  ADD KEY `fk_Tipo_Usuaria` (`fk_Tipo_Usuaria`),
  ADD KEY `fk_Tipo_Usuaria_2` (`fk_Tipo_Usuaria`),
  ADD KEY `FK_Sede` (`FK_Sede`),
  ADD KEY `FK_Sede_2` (`FK_Sede`);

--
-- Indices de la tabla `tbl_Venta`
--
ALTER TABLE `tbl_Venta`
  ADD PRIMARY KEY (`Pk_Id_Venta`),
  ADD KEY `Fk_Id_Inventario` (`Fk_Id_Inventario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_Anuncios`
--
ALTER TABLE `tbl_Anuncios`
  MODIFY `pk_Id_Anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tbl_Balance`
--
ALTER TABLE `tbl_Balance`
  MODIFY `PK_Id_Balance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `tbl_Categoria_Elementos`
--
ALTER TABLE `tbl_Categoria_Elementos`
  MODIFY `Pk_Id_Categoria_Elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_Egresos`
--
ALTER TABLE `tbl_Egresos`
  MODIFY `Pk_Id_Egreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT de la tabla `tbl_Elementos_Subrubros`
--
ALTER TABLE `tbl_Elementos_Subrubros`
  MODIFY `Pk_Id_Elemento_Subrubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `tbl_Guias_Multimedia`
--
ALTER TABLE `tbl_Guias_Multimedia`
  MODIFY `pk_Id_Guia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tbl_Ingresos`
--
ALTER TABLE `tbl_Ingresos`
  MODIFY `PK_Id_Ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `tbl_Ingresos_Egresos_Bases`
--
ALTER TABLE `tbl_Ingresos_Egresos_Bases`
  MODIFY `PK_Id_Bases` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_Insumos`
--
ALTER TABLE `tbl_Insumos`
  MODIFY `PK_Id_Insumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT de la tabla `tbl_Inventario`
--
ALTER TABLE `tbl_Inventario`
  MODIFY `PK_Id_Inventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbl_Perfiles_Empresariales`
--
ALTER TABLE `tbl_Perfiles_Empresariales`
  MODIFY `pk_Id_Perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `tbl_Productos`
--
ALTER TABLE `tbl_Productos`
  MODIFY `PK_Id_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT de la tabla `tbl_Rubros`
--
ALTER TABLE `tbl_Rubros`
  MODIFY `PK_Id_Rubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tbl_Sedes`
--
ALTER TABLE `tbl_Sedes`
  MODIFY `pk_Id_Sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_Subrubros`
--
ALTER TABLE `tbl_Subrubros`
  MODIFY `PK_Id_Subrubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `tbl_Tipos_Insumos`
--
ALTER TABLE `tbl_Tipos_Insumos`
  MODIFY `Pk_Id_Tipo_Insumo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_Tipos_Usuarias`
--
ALTER TABLE `tbl_Tipos_Usuarias`
  MODIFY `pk_Id_Tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_Tipos_Usuarios`
--
ALTER TABLE `tbl_Tipos_Usuarios`
  MODIFY `PK_Id_Tipo_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_Usuarias`
--
ALTER TABLE `tbl_Usuarias`
  MODIFY `pk_Id_Usuaria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tbl_Venta`
--
ALTER TABLE `tbl_Venta`
  MODIFY `Pk_Id_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_Balance`
--
ALTER TABLE `tbl_Balance`
  ADD CONSTRAINT `tbl_Balance_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_Usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"db_sistemaTR\",\"table\":\"tbl_Perfiles_Empresariales\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_Contactos\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_contactos\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_Categoria_Elementos\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_categoria_elementos\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_Venta\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_venta\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_Usuarias\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_usuarias\"},{\"db\":\"db_sistemaTR\",\"table\":\"tbl_Tipos_Usuarios\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2018-10-22 02:14:29', '{\"lang\":\"es\",\"collation_connection\":\"utf8mb4_unicode_ci\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
