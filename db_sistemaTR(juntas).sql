-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-10-2018 a las 17:52:00
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sistematr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_anuncios`
--

DROP TABLE IF EXISTS `tbl_anuncios`;
CREATE TABLE IF NOT EXISTS `tbl_anuncios` (
  `pk_Id_Anuncio` int(11) NOT NULL AUTO_INCREMENT,
  `Contenido` text COLLATE utf8_spanish2_ci NOT NULL,
  `Titulo` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Descripcion_Noticia` text COLLATE utf8_spanish2_ci,
  PRIMARY KEY (`pk_Id_Anuncio`),
  KEY `FK_Id_Usuaria` (`FK_Id_Usuaria`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_anuncios`
--

INSERT INTO `tbl_anuncios` (`pk_Id_Anuncio`, `Contenido`, `Titulo`, `Imagen`, `Fecha`, `FK_Id_Usuaria`, `Descripcion_Noticia`) VALUES
(10, '<div><div>\r\n														San Miguel. Jueves, 4 de octubre de 2018.\r\n El programa Ciudad Mujer tiene entre sus prioridades el combate contra \r\nel cáncer de mama, por ello la Directora de Ciudad Mujer San Miguel, \r\nMiriam Wembesg, realizó este día el lanzamiento oficial de la Campaña de\r\n sensibilización y prevención del cáncer de mama que se desarrollará en \r\nlas sedes de Ciudad Mujer durante el mes de octubre.</div><div><br></div><div>\r\nEl cáncer de mama es también una enfermedad que de detectarse a \r\ntiempo, tiene altas probabilidades de ser superada, por ello en Ciudad \r\nMujer se llevan a cabo a diario mamografías en el módulo de Salud Sexual\r\n y Reproductiva. De octubre de 2017 a septiembre de 2018, en las seis \r\nsedes de Ciudad Mujer se han efectuado 9 mil 796 mamografías, las cuales\r\n representan un importante aporte al combate de la enfermedad, misma que\r\n año con año cobra la vida de cientos de salvadoreñas, pues según datos \r\nde la Organización Mundial de la Salud (OMS) el cáncer de mama es el \r\nsegundo tipo de cáncer que más afecta a las mujeres en el país.\r\n<br></div><div><br></div><div>La realización de la mamografía y el mismo autoexamen de mamas son \r\ndeterminantes para atajar a tiempo la enfermedad, y sobre la realización\r\n de ambos se concientiza y asesora a diario a las usuarias de Ciudad \r\nMujer. En este mes de octubre, dedicado internacionalmente a la \r\nconcientización sobre el cáncer de mama, ese trabajo se intensifica con \r\nla organización de charlas y exposiciones sobre el tema para que las \r\nmujeres estén alertas y descubran a tiempo cualquier síntoma.\r\n						</div></div><br><br><br><br><br>                                                                        <br>', 'CIUDAD MUJER LANZA CAMPAñA DE SENSIBILIZACIóN Y PREVENCIóN DEL CáNCER DE MAMA', 'agua2.jpeg', '2018-09-30', 2, '       San Miguel. Jueves, 4 de octubre de 2018. El programa Ciudad Mujer tiene entre sus prioridades el combate contra el cáncer de mama, por ello la Directora de Ciudad Mujer San Miguel, Miriam Wembesg, realizó este día el lanzamiento oficial de la Campaña de sensibilización y prevención del cáncer de mama que se desarrollará en las sedes de Ciudad Mujer durante el mes de octubre.                                                                                                                                                                                                                             ESTA ES LA DESCRIPCION DE UNA NOTICIA                                                                                                                                                                                                                        '),
(11, '<div>\r\n														<span>\r\n<div>\r\nSan Martín. San Salvador. Viernes, 7 de septiembre de 2018.&nbsp;Este\r\n día dio inicio la capacitación en Atención y Organización de Eventos, \r\nimpartida por la Secretaría de Inclusión Social (SIS) a emprendedoras \r\napoyadas por Ciudad Mujer San Martín con el fin de que adquieran más \r\nconocimientos y habilidades para impulsar el desarrollo de sus \r\nemprendimientos. <br></div><div><br></div><div>El curso tiene una duración de cuatro jornadas en las que las \r\nparticipantes aprenderán sobre los diferentes aspectos y elementos a \r\ntomar en cuenta para la organización de pequeños y grandes eventos. \r\nEntre los contenidos desarrollados están: el montaje de eventos, \r\npreparación de cronogramas, agendas o programas; elaboración de \r\npresupuestos e invitaciones, creación de comisiones de apoyo, búsqueda \r\nde recursos y otros.\r\n<br></div><div><br></div><div>Las emprendedoras participan de manera entusiasta, pues consideran \r\nque los conocimientos que obtendrán en esta nueva capacitación de Ciudad\r\n Mujer, después les servirán para para proyectar y promover la buena \r\nimagen de sus servicios y productos. Lorena Villacorta, elabora \r\naccesorios para mujer con diferentes materiales (coco, madera, piedras&nbsp; y\r\n tela), dijo que entre sus planes a corto plazo está participar o montar\r\n un pequeño desfile para mostrar sus productos, por lo que esta \r\ncapacitación es de mucha utilidad para ella.\r\nLorena ha recibido anteriormente, en Ciudad Mujer San Martín, \r\ncapacitaciones en Derechos y Género, Emprendedurismo y asesoría para \r\nmejorar la imagen de sus productos. Todos esos apoyos y aprendizajes le \r\nhan servido para tener más seguridad en sí misma a la hora de buscar \r\nnuevos clientes y para ser más organizada en su emprendimiento, algo que\r\n con año y medio de trabajo junto a Ciudad Mujer ya genera buenos \r\nresultados, pues actualmente vende sus productos a negocios en San \r\nSalvador, playa El Tunco y San Rafael Cedros.</div><div><br></div><div>\r\nLas participantes tienen emprendimientos en rubros como alimentación,\r\n elaboración de accesorios artesanales, corte y confección y cosmética. \r\nProvienen de municipios como Ilopango, San Salvador, Soyapango, San \r\nBartolomé Pirulapía, Ciudad Delgado, San Martín y otros.\r\nEsta es la primera vez que se brinda esta capacitación a usuarias y \r\nse llevará a cabo en todas las sedes de Ciudad Mujer; en años anteriores\r\n se ha impartido a funcionarias de todos los centros Ciudad Mujer.\r\n</div>\r\n</span>\r\n						</div><br><br><br><br>                                                                        <br>', 'EMPRENDEDORAS DE CIUDAD MUJER SON CAPACITADAS EN ORGANIZACIóN DE EVENTOS', 'agua.jpg', '2018-09-30', 1, '                                            San Martín. San Salvador. Viernes, 7 de septiembre de 2018. Este día dio inicio la capacitación en Atención y Organización de Eventos, impartida por la Secretaría de Inclusión Social (SIS) a emprendedoras apoyadas por Ciudad Mujer San Martín con el fin de que adquieran más conocimientos y habilidades para impulsar el desarrollo de sus emprendimientos.                                                              '),
(12, '<div>\r\n														Santa Rosa de Lima, La Unión. Septiembre de 2018.\r\n La ganadería es una actividad en la que participan más hombres que \r\nmujeres, pero en el oriente del país,&nbsp; la emprendedora Santos Torres \r\ndemuestra que este no es un terreno vedado para que las salvadoreñas se \r\ndesempeñen y estén al frente.</div><div><br></div><div> Desde hacía&nbsp;tiempo quería dedicarse a la \r\nganadería, una aspiración que convirtió en realidad con el \r\nfinanciamiento otorgado por Ciudad Mujer a través del programa Fondo \r\nMujer para emprendedoras.\r\nSantos es una usuaria de la sede de Ciudad Mujer Morazán, centro \r\ndonde antes de obtener el crédito de Fondo Mujer, había recibido \r\natención en el módulo de Salud Sexual y Reproductiva. Especialmente \r\nvalora el aprendizaje que le han dejado diferentes capacitaciones y \r\nasesorías impartidas a través del módulo de Autonomía Económica, pues \r\nconsidera que estas le han traído beneficios en el manejo de su negocio.\r\n<br></div><div><br></div><div>Esta emprendedora ha aprovechado los conocimientos que ha adquirido, \r\npor citar un ejemplo, uno de las primeras formaciones que recibió en \r\nCiudad Mujer Morazán fue en la Escuela de Capacitación Agrícola (ECA), y\r\n gracias a ello hizo un huerto para autoconsumo en su casa.\r\nSantos ha continuado recibiendo los servicios de Ciudad Mujer, entre \r\nellos el otorgamiento de un crédito del programa Fondo Mujer -creado \r\nespecialmente para facilitar préstamos a las emprendedoras en \r\ncondiciones más accesibles-; una iniciativa interinstitucional creada \r\npor la Secretaría de Inclusión Social (SIS), con financiamiento de la \r\nAgencia Italiana de Cooperación para el Desarrollo (AICS), y el apoyo de\r\n ONU Mujeres y el Banco de Desarrollo de El Salvador (BANDESAL). <br></div><div><br></div><div>Fondo Mujer se desarrolla en los centros Ciudad Mujer de Usulután y \r\nMorazán, desde 2016, pero inicialmente no contemplaba a la ganadería \r\ncomo uno de los rubros para el otorgamiento de créditos; no obstante, \r\nbajo la óptica de Ciudad Mujer, los servicios y atenciones que se \r\nprestan deben adecuarse a las realidades y necesidades de las mujeres, \r\nfue así que se hicieron las adecuaciones necesarias para entregar a la \r\nemprendedora Santos el dinero solicitado. Gracias a esos fondos, ella \r\ncompró una pequeña cantidad de vacas, como había deseado hacía tiempo. <br></div><div><br></div><div>La inversión hecha en la compra de los animales ahora rinde frutos a \r\nnivel económico, pero también a nivel personal y emocional, \r\nespecíficamente. “He ido empapándome más de la ganadería, y soy feliz de\r\n hacer lo que me gusta”, asegura Santos.\r\nCon sus nuevos conocimientos y los servicios obtenidos a través de \r\nCiudad Mujer, Santos se siente una mujer segura y consciente de su \r\naporte a la economía, al hogar y a su comunidad; en resumen, ha logrado \r\nel empoderamiento que Ciudad Mujer procura dar a las mujeres con su \r\natención y oferta de servicios especializados.\r\nSantos trabajaba mucho junto a su familia, pero su eficiencia y \r\ndedicación al trabajo ha hecho posible que cree ya una primera fuente de\r\n empleo, pues cuenta con una persona contratada para el cuidado del \r\nganado.</div><div><br></div><div> Ella continúa al frente del trabajo, pendiente de todo lo que se\r\n hace, pues aunque la venta de la leche de vaca es la base su negocio, \r\ntambién elabora queso, requesón y cuajada para su comercialización \r\ntambién.\r\nLa protagonista de esta historia es una de tantas salvadoreñas que \r\ncomienza a trabajar con los primeros rayos del sol. El esfuerzo físico \r\nde su labor es grande, tanto como su aspiración de hacer crecer su \r\nnegocio. Ciudad Mujer le ha abierto oportunidades; siempre es de las \r\nprimeras en asistir a asesorías sobre negocios, capacitaciones en \r\nderechos de las mujeres y participaciones en ferias de emprendedoras.\r\n“Por medio de Ciudad Mujer nos capacitan para que sepamos que debemos\r\n ser respetadas en la sociedad; como mujeres podemos sacar adelante a \r\nnuestra familia, la comunidad y a todo el país”, asegura doña Santos.\r\n						</div><br><br><br><br>                                                                        <br>', 'CIUDAD MUJER APOYA EL DESARROLLO DE LAS MUJERES GANADERAS DEL ORIENTE DEL PAíS', 'agua2.jpeg', '2018-09-26', 1, 'Santa Rosa de Lima, La Unión. Septiembre de 2018. La ganadería es una actividad en la que participan más hombres que mujeres, pero en el oriente del país,  la emprendedora Santos Torres demuestra que este no es un terreno vedado para que las salvadoreñas se desempeñen y estén al frente. Desde hacía tiempo quería dedicarse a la ganadería, una aspiración que convirtió en realidad con el financiamiento otorgado por Ciudad Mujer a través del programa Fondo Mujer para emprendedoras.                                                                                                                                           '),
(13, '<div>\r\n														San Francisco Gotera, Morazán. Miércoles, 19 de septiembre de 2018.&nbsp;Ciudad\r\n Mujer Morazán realizó este día una jornada más de Ciudad Mujer \r\nComunitaria, llevando como mensaje principal la erradicación de la \r\nviolencia contra las mujeres, esto como parte de las actividades \r\nenmarcadas en la campaña “Por una vida libre de violencia para las \r\nmujeres”.</div><div>\r\n<br></div><div>Con este trabajo Ciudad Mujer no sólo acerca sus servicios a los \r\nlugares donde viven las mujeres, sino que también enfatiza sobre el \r\norigen y los efectos de la violencia contra las ellas, cuáles son estos \r\ntipos de violencia, las leyes y las instituciones a las que pueden \r\nacudir en caso de ser víctima de este flagelo, así como los servicios \r\nque están disponibles para ellas en los centros de atención Ciudad Mujer\r\n (asesoría legal, atención sicológica y la facilidad para interponer \r\ndenuncias).\r\nLa señora Pastora Pereira y su hija se acercaron a la Jornada a pasar\r\n consulta médica y agradecieron que Ciudad Mujer lleve a cabo este \r\ntrabajo, pues ellas hace mucho querían ir a la sede para recibir \r\natención ginecológica, pero por falta de tiempo no habían ido, hoy \r\nllevan ya su cupo para recibir la consulta de forma más rápida.</div><div><br></div><div>\r\nEn esta oportunidad, Ciudad Mujer Morazán puso a disposición de las \r\nhabitantes de San Francisco Gotera y municipios aledaños, otros \r\nservicios que se prestan normalmente en la sede, tales como las \r\nconsultas médico-ginecológicas y charlas en salud sexual y reproductiva,\r\n asesoría empresarial para iniciar un emprendimiento o fortalecer el que\r\n ya se tiene, consejería legal y jurídica en temas de identidad, charlas\r\n sobre cómo mejorar la autoestima e identificar el acoso callejero y la \r\natención sicológica para víctimas de violencia, entre otros.\r\nLa Campaña “Por una vida libre de violencia” es desarrollada por las \r\nseis sedes de Ciudad Mujer y es parte de las acciones emprendidas por la\r\n Secretaría de Inclusión Social (SIS) en respuesta a la Alerta Nacional \r\npara la prevención del feminicidio y violencia sexual decretada por el \r\nGobierno de El Salvador, según precisó la Directora de Ciudad Mujer \r\nMorazán, Mercedes Sánchez.\r\n						</div><br>', 'CIUDAD MUJER ACERCA SUS SERVICIOS A LAS COMUNIDADES Y CONCIENTIZA SOBRE LA PREVENCIóN DE LA VIOLENCIA DE GéNERO', 'a6.jpg', '2018-10-05', 1, 'San Francisco Gotera, Morazán. Miércoles, 19 de septiembre de 2018. Ciudad Mujer Morazán realizó este día una jornada más de Ciudad Mujer Comunitaria, llevando como mensaje principal la erradicación de la violencia contra las mujeres, esto como parte de las actividades enmarcadas en la campaña “Por una vida libre de violencia para las mujeres”.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_balance`
--

DROP TABLE IF EXISTS `tbl_balance`;
CREATE TABLE IF NOT EXISTS `tbl_balance` (
  `PK_Id_Balance` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Fecha_Balance` date NOT NULL,
  `Total_Ingreso` float NOT NULL,
  PRIMARY KEY (`PK_Id_Balance`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_balance`
--

INSERT INTO `tbl_balance` (`PK_Id_Balance`, `FK_Id_Usuario`, `Fecha_Balance`, `Total_Ingreso`) VALUES
(25, 1, '2018-08-31', 800),
(26, 1, '2018-08-31', 1100),
(27, 1, '2018-08-31', 1000),
(28, 1, '2018-09-01', 1100),
(29, 1, '2018-08-30', 1000.5),
(30, 1, '2018-09-30', 250),
(31, 1, '2018-10-31', 795),
(32, 2, '2018-08-31', 500.99),
(33, 1, '2018-07-31', 883),
(34, 1, '2018-09-04', 870);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_elementos`
--

DROP TABLE IF EXISTS `tbl_categoria_elementos`;
CREATE TABLE IF NOT EXISTS `tbl_categoria_elementos` (
  `Pk_Id_Categoria_Elemento` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Pk_Id_Categoria_Elemento`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_categoria_elementos`
--

INSERT INTO `tbl_categoria_elementos` (`Pk_Id_Categoria_Elemento`, `Nombre_Categoria`) VALUES
(1, 'Equipamiento'),
(2, 'Insumos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_egresos`
--

DROP TABLE IF EXISTS `tbl_egresos`;
CREATE TABLE IF NOT EXISTS `tbl_egresos` (
  `Pk_Id_Egreso` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Nombre_Egreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Egreso` float NOT NULL,
  `Fecha_Egreso` date NOT NULL,
  `Estado_Egreso` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Pk_Id_Egreso`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_egresos`
--

INSERT INTO `tbl_egresos` (`Pk_Id_Egreso`, `FK_Id_Usuario`, `Nombre_Egreso`, `Cantidad_Egreso`, `Fecha_Egreso`, `Estado_Egreso`) VALUES
(92, 1, 'Luz', 50, '2018-08-01', 'Procesado'),
(93, 1, 'Renta de la casa', 300, '2018-08-01', 'Procesado'),
(94, 1, 'Luz', 10, '2018-08-30', 'Procesado'),
(95, 1, 'Renta de la casa', 50, '2018-09-30', 'Procesado'),
(96, 1, 'Vestuario', 60, '2018-08-30', 'Procesado'),
(97, 1, 'Vacaciones', 150, '2018-10-31', 'Procesado'),
(98, 1, 'Luz', 10, '2018-10-31', 'Procesado'),
(99, 1, 'Vestuario', 125, '2018-10-31', 'Procesado'),
(100, 1, 'Renta de la casa', 50, '2018-10-31', 'Procesado'),
(101, 2, 'Pañales del bb', 50, '2018-08-31', 'Procesado'),
(102, 1, 'Luz', 150, '2018-07-31', 'Procesado'),
(103, 1, 'Renta de la casa', 50, '2018-07-31', 'Procesado'),
(104, 1, 'Vacaciones', 25, '2018-07-31', 'Procesado'),
(105, 1, 'Vestuario', 20, '2018-07-31', 'Procesado'),
(106, 1, 'pago de empleada', 200, '2018-07-31', 'Procesado'),
(107, 1, 'pago del jardinero', 250, '2018-07-31', 'Procesado'),
(108, 1, 'Luz', 100, '2018-09-04', 'Procesado'),
(109, 1, 'Renta de la casa', 100, '2018-09-04', 'Procesado'),
(110, 1, 'Vacaciones', 75, '2018-09-04', 'Procesado'),
(111, 1, 'Vestuario', 80, '2018-09-04', 'Procesado'),
(112, 1, 'Compras en efectivo', 400, '2018-10-01', ''),
(113, 1, 'Efectivo pagado por compras al credito', 200, '2018-10-01', ''),
(114, 1, 'Salarios', 250, '2018-10-01', ''),
(115, 1, 'Renta', 100, '2018-10-01', ''),
(116, 1, 'Pago de préstamos', 0, '2018-10-01', ''),
(117, 1, 'Otros', 0, '2018-10-01', ''),
(118, 1, 'Pago de Luz', 50, '2018-10-01', ''),
(119, 1, 'Compras en efectivo', 500, '2018-11-01', ''),
(120, 1, 'Efectivo pagado por compras al credito', 100, '2018-11-01', ''),
(121, 1, 'Otros', 50, '2018-11-01', ''),
(122, 1, 'Pago de Luz', 50, '2018-11-01', ''),
(123, 1, 'Pago de préstamos', 0, '2018-11-01', ''),
(124, 1, 'Renta', 100, '2018-11-01', ''),
(125, 1, 'Salarios', 250, '2018-11-01', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_elementos_subrubros`
--

DROP TABLE IF EXISTS `tbl_elementos_subrubros`;
CREATE TABLE IF NOT EXISTS `tbl_elementos_subrubros` (
  `Pk_Id_Elemento_Subrubro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Elemento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Elemento` int(11) DEFAULT NULL,
  `Precio_Elemento` float NOT NULL,
  `Fk_Id_Categoria_Elemento` int(11) NOT NULL,
  `Fk_Id_Subrubro` int(11) NOT NULL,
  PRIMARY KEY (`Pk_Id_Elemento_Subrubro`),
  KEY `id_categoria_elemeto` (`Fk_Id_Categoria_Elemento`),
  KEY `Fk_Id_Subrubro` (`Fk_Id_Subrubro`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_elementos_subrubros`
--

INSERT INTO `tbl_elementos_subrubros` (`Pk_Id_Elemento_Subrubro`, `Nombre_Elemento`, `Cantidad_Elemento`, `Precio_Elemento`, `Fk_Id_Categoria_Elemento`, `Fk_Id_Subrubro`) VALUES
(30, 'Arroz', 0, 50, 2, 8),
(31, 'Aceite', 0, 60, 2, 8),
(32, 'Horno', 1, 500, 1, 8),
(33, 'Cacerolas', 5, 60, 1, 8),
(34, 'Elemento 1', 0, 6, 2, 9),
(35, 'Elemento', 0, 10, 2, 9),
(36, 'Elemento Maquinaria 1', 1, 500, 1, 9),
(37, 'Elemento Maquinaria 2', 1, 251, 1, 9),
(38, 'Elemento Maquinaria 3', 1, 900, 1, 9),
(39, 'Textil Comestible', 0, 45, 2, 10),
(40, 'Textil Maquinaria', 1, 600, 1, 10),
(41, 'Frutas', 0, 100, 2, 11),
(42, 'Canastas', 5, 60, 1, 11),
(43, 'Mantas', 10, 45, 1, 11),
(44, 'Comida', 0, 50, 2, 12),
(45, 'Estantes', 2, 40.65, 1, 12),
(46, 'Celulares', 100, 1000, 1, 12),
(47, 'Sillas', 5, 50.5, 1, 12),
(48, 'Medicinas', 50, 45, 1, 13),
(49, 'Marihuna', 10, 500, 1, 13),
(50, 'Comida del We', 0, 30, 2, 14),
(51, 'Laveros', 50, 500, 1, 14),
(52, 'Local', 1, 100, 1, 14),
(53, 'Comida', 0, 500, 2, 15),
(54, 'Cemento', 45, 23, 1, 15),
(55, 'Hierro', 6, 20000, 1, 15),
(56, 'Computadora', 1, 789.99, 1, 16),
(57, 'Mochila', 1, 50, 1, 16),
(58, 'quesillo', 0, 1.75, 2, 17),
(59, 'chicharron', 0, 5, 2, 17),
(60, 'aceite', 0, 1.75, 2, 17),
(61, 'sal', 0, 1, 2, 17),
(62, 'plancha', 1, 150, 1, 17),
(63, 'espatula', 1, 1, 1, 17),
(64, 'bote', 1, 1, 1, 17),
(65, 'mesa', 1, 1, 1, 17),
(66, 'silla', 1, 1, 1, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_guias_multimedia`
--

DROP TABLE IF EXISTS `tbl_guias_multimedia`;
CREATE TABLE IF NOT EXISTS `tbl_guias_multimedia` (
  `pk_Id_Guia` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Titulo_Guia` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `Tipo_publicacion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Video_Multimedia` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Documento_Guia` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `Contenido` text COLLATE utf8_spanish2_ci,
  `Descripcion_Guia` text COLLATE utf8_spanish2_ci,
  `Imagen` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`pk_Id_Guia`),
  KEY `FK_Id_Usuaria` (`FK_Id_Usuaria`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_guias_multimedia`
--

INSERT INTO `tbl_guias_multimedia` (`pk_Id_Guia`, `FK_Id_Usuaria`, `Titulo_Guia`, `Fecha_Publicacion`, `Tipo_publicacion`, `Video_Multimedia`, `Documento_Guia`, `Contenido`, `Descripcion_Guia`, `Imagen`) VALUES
(19, 1, 'AQUI VA EL TITULO editado', '2018-11-01', 'Video', '', '', 'Cada vez más empresas de todos los sectores usan las redes sociales\r\n pues las consideran canales de comunicación valiosos ya que a través de\r\n ellas pueden promocionarse de manera sencilla y efectiva en la nube, \r\nobteniendo de ese modo importantes beneficios en términos de negocio. En\r\n efecto, según datos estadísticos, alrededor de 6 cada 10 empresas \r\nespañolas utilizan actualmente los medios de comunicación social con el \r\npropósito de promover sus marcas, optimizar la comunicación y fomentar \r\nla participación de los consumidores para conocerlos mejor. Así, por \r\nejemplo, podemos hacer Re-Tuits en el hastag <a target=\"_blank\" rel=\"nofollow\" href=\"https://twitter.com/AlarmasSpain\">Securitas Direct Twitter</a>\r\n y acceder al contenido que provee esta empresa líder en sistemas de \r\nalarmas. Otro caso es el de Remica, compañía dedicada a la eficiencia \r\nenergética, que a través del <a target=\"_blank\" rel=\"nofollow\" href=\"http://www.youtube.com/user/remicaES\">Canal de Remica </a>da\r\n a conocer mediante videos subidos a Youtube sus servicios y todas las \r\nnovedades referidas al sector. Esto es solo una muestra del enorme poder\r\n que poseen los Social Media para promocionar una marca y fidelizar clientes.<br>\r\nMás oportunidades<br>\r\nPotenciar la imagen de una marca o empresa y conocer más a sus clientes,\r\n son algunas de las cuestiones que explican el aumento del uso de las \r\nredes sociales a nivel empresarial. Aunque también son consideradas una \r\nexcelente y enriquecedora herramienta para mejorar el servicio que \r\nbrindan, no sólo a los consumidores sino además al público interno de \r\nlas organizaciones. De este modo, las comunidades virtuales posibilitan \r\nestar en contacto con los públicos relacionados con la empresa, \r\naprovechando más y mejor las oportunidades.<br>\r\nPara poder incorporar las redes sociales en el ámbito laboral, las \r\ncompañías suelen optar por crear foros de debate o redes sociales a \r\nmedida, e incluso eligen explotar de una manera más abierta a las redes \r\nsociales ya existentes. En algunos casos, por ejemplo, deciden crear un \r\nforo en Linkedin, una página o grupo en Facebook o un hastag dentro de Twitter,\r\n para que los clientes y el público en general puedan mantenerse al \r\ntanto sobre las últimas novedades de la marca. Si bien hay más de mil \r\nredes sociales, es incuestionable que Twitter y Facebook gozan de mayor \r\npopularidad entre los usuarios con perfiles activos.<br>\r\nEn la actualidad, el empleo de las redes sociales por parte de las \r\nempresas es condición básica e indispensable para poder interactuar con \r\nlos clientes. Los usuarios de este tipo de comunidades virtuales se \r\nencuentran constantemente influenciados, siendo éste un factor \r\ndeterminante que incide en las decisiones de compra del usuario.<br>\r\nPor medio de su presencia en los Social Media, las compañías tienen la \r\nposibilidad de recomendar su página a sus contactos, quienes a su vez \r\npueden recomendarla a sus amigos.<br>\r\nSin embargo, algunas empresas dan cuenta de la existencia de ciertos \r\ninconvenientes en el uso de estos medios, como las complicaciones para \r\nmedir el efecto y alcance logrado o la necesidad de tener que actualizar\r\n permanentemente los perfiles. Incluso, hay compañías que desconocen \r\ncuál es la manera correcta&nbsp; de estar en las redes sociales.                                         <br>', 'Descripcion', 'img.jpeg'),
(23, 1, 'Contrato de trabajo en El Salvador', '2018-10-05', 'Documento', '', 'guia_doc.docx', '<h2>Información del contrato de trabajo</h2>\r\nEstos los puntos informativos que debe contener de forma obligatoria los contratos de trabajo:\r\n<ul><li>Nombre, sexo, edad, estado civil, domicilio, residencia y nacionalidad</li><li>Número, lugar y fecha de expedición de las cédulas de identidad personas o documento que acredite la identidad</li><li>El trabajo que se debe realizar bajo la dependencia del patrono</li><li>Duración del contrato, o indicación de que el contrato es por tiempo indefinido</li><li>Fecha de inicio del contrato</li><li>El lugar de trabajo</li><li>Horario de trabajo</li><li>Salario del trabajador</li><li>Forma, lugar y periodo del pago</li><li>Cantidad, calidad y estado de las herramientas a utilizar</li><li>Personas que dependen económicamente del trabajador</li><li>Lugar y fecha de la firma del contrato</li><li>Firma de las dos partes</li></ul>\r\n<h2>Modelo de contrato en El Salvador</h2>\r\nAquí puedes encontrar una plantilla para realizar los contratos laborales de tu empresa. Este es el modelo está ofrecido por la Dirección General de Trabajo perteneciente al Ministerio de Trabajo y Previsión Social de El Salvador.\r\nPara realizar un contrato legal tan solo debes rellenar los espacios vacíos con la información correspondiente. Si quieres descargar este documento de forma totalmente gratuita tienes que pinchar al botón, y ya podrás realizar el contrato que quieras.                                         <br>', 'Descripcion', 'img.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingresos`
--

DROP TABLE IF EXISTS `tbl_ingresos`;
CREATE TABLE IF NOT EXISTS `tbl_ingresos` (
  `PK_Id_Ingreso` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Nombre_Ingreso` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Cantidad_Ingreso` float NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  PRIMARY KEY (`PK_Id_Ingreso`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_ingresos`
--

INSERT INTO `tbl_ingresos` (`PK_Id_Ingreso`, `FK_Id_Usuario`, `Nombre_Ingreso`, `Cantidad_Ingreso`, `Fecha_Ingreso`) VALUES
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
(79, 1, 'Salario', 1000, '2018-08-31'),
(80, 1, 'Salario', 1000, '2018-09-01'),
(81, 1, 'Remesa', 100, '2018-09-01'),
(82, 1, 'Salario', 500.5, '2018-08-30'),
(83, 1, 'Remesa', 0, '2018-08-30'),
(84, 1, 'Ventas Fines de semana', 500, '2018-08-30'),
(85, 1, 'Salario', 100, '2018-09-30'),
(86, 1, 'Remesa', 50, '2018-09-30'),
(87, 1, 'Ventas Fines de semana', 100, '2018-09-30'),
(88, 1, 'Salario', 500, '2018-10-31'),
(89, 1, 'Remesa', 200, '2018-10-31'),
(90, 1, 'Ventas Fines de semana', 50, '2018-10-31'),
(91, 1, 'Regalias', 45, '2018-10-31'),
(92, 2, 'Sueldo', 500.99, '2018-08-31'),
(93, 1, 'Salario', 120, '2018-07-31'),
(94, 1, 'Remesa', 200, '2018-07-31'),
(95, 1, 'Ventas Fines de semana', 100, '2018-07-31'),
(96, 1, 'Regalias', 1, '2018-07-31'),
(97, 1, 'venta de zapatos', 152, '2018-07-31'),
(98, 1, 'regalos de juan', 200, '2018-07-31'),
(99, 1, 'regalos de lily', 100, '2018-07-31'),
(100, 1, 'regalos', 10, '2018-07-31'),
(101, 1, 'Salario', 200, '2018-09-04'),
(102, 1, 'Remesa', 500, '2018-09-04'),
(103, 1, 'Ventas Fines de semana', 10, '2018-09-04'),
(104, 1, 'Regalias', 20, '2018-09-04'),
(105, 1, 'venta de zapatos', 10, '2018-09-04'),
(106, 1, 'regalos de juan', 20, '2018-09-04'),
(107, 1, 'regalos de lily', 100, '2018-09-04'),
(108, 1, 'regalos', 10, '2018-09-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingresos_egresos_balance`
--

DROP TABLE IF EXISTS `tbl_ingresos_egresos_balance`;
CREATE TABLE IF NOT EXISTS `tbl_ingresos_egresos_balance` (
  `FK_Id_Balance` int(11) NOT NULL,
  `FK_Id_Egreso` int(11) NOT NULL,
  `Nombre_Operacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Total_Ingreso` float NOT NULL,
  KEY `id_egreso` (`FK_Id_Egreso`),
  KEY `FK_Id_Balance` (`FK_Id_Balance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_ingresos_egresos_balance`
--

INSERT INTO `tbl_ingresos_egresos_balance` (`FK_Id_Balance`, `FK_Id_Egreso`, `Nombre_Operacion`, `Total_Ingreso`) VALUES
(28, 92, 'Gasto', 1100),
(28, 93, 'Gasto', 1100),
(29, 94, 'Gasto', 1000.5),
(29, 96, 'Gasto', 1000.5),
(30, 95, 'Gasto', 250),
(31, 97, 'Gasto', 795),
(31, 98, 'Gasto', 795),
(31, 99, 'Gasto', 795),
(31, 100, 'Gasto', 795),
(32, 101, 'Gasto', 500.99),
(33, 102, 'Gasto', 883),
(33, 103, 'Gasto', 883),
(33, 104, 'Gasto', 883),
(33, 105, 'Gasto', 883),
(33, 106, 'Gasto', 883),
(33, 107, 'Gasto', 883),
(34, 108, 'Gasto', 870),
(34, 109, 'Gasto', 870),
(34, 110, 'Gasto', 870),
(34, 111, 'Gasto', 870);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ingresos_egresos_bases`
--

DROP TABLE IF EXISTS `tbl_ingresos_egresos_bases`;
CREATE TABLE IF NOT EXISTS `tbl_ingresos_egresos_bases` (
  `PK_Id_Bases` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`PK_Id_Bases`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ingresos_egresos_bases`
--

INSERT INTO `tbl_ingresos_egresos_bases` (`PK_Id_Bases`, `Nombre`, `Tipo`) VALUES
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
-- Estructura de tabla para la tabla `tbl_insumos`
--

DROP TABLE IF EXISTS `tbl_insumos`;
CREATE TABLE IF NOT EXISTS `tbl_insumos` (
  `PK_Id_Insumo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Insumo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Existencia_Insumo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Insumo` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `Medida_Insumo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `FK_Id_Tipo_Insumo` int(11) NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  `Cantidad_Minima` int(11) NOT NULL,
  PRIMARY KEY (`PK_Id_Insumo`),
  KEY `FK_Id_Tipo_Insumo` (`FK_Id_Tipo_Insumo`),
  KEY `FK_Id_Usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_insumos`
--

INSERT INTO `tbl_insumos` (`PK_Id_Insumo`, `Nombre_Insumo`, `Existencia_Insumo`, `Precio_Insumo`, `Medida_Insumo`, `FK_Id_Tipo_Insumo`, `FK_Id_Usuario`, `Cantidad_Minima`) VALUES
(27, 'Agua', '29', '0.25', 'Litros', 1, 1, 0),
(28, 'Papel periodico', '-17', '0.15', 'Libras', 2, 1, 0),
(29, 'Arroz', '30', '0.45', 'Libras', 1, 1, 0),
(30, 'Queso', '1', '7.80', 'Kilos', 1, 1, 0),
(31, 'Insumo1', '5', '0.25', 'Onzas', 1, 1, 0),
(32, 'Insumo2', '7', '3', 'Gramos', 2, 1, 0),
(33, 'Aguacate', '1', '0.50', 'Gramos', 1, 1, 0),
(34, 'Tortillas', '-15', '0.25', 'Kilogramos', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

DROP TABLE IF EXISTS `tbl_inventario`;
CREATE TABLE IF NOT EXISTS `tbl_inventario` (
  `PK_Id_Inventario` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Producto` int(11) NOT NULL,
  `Existencia_Producto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Fecha_Creacion` date NOT NULL,
  `Lugar_Existencia` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_Id_Inventario`),
  KEY `id_producto` (`FK_Id_Producto`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_inventario`
--

INSERT INTO `tbl_inventario` (`PK_Id_Inventario`, `FK_Id_Producto`, `Existencia_Producto`, `Fecha_Creacion`, `Lugar_Existencia`, `Estado`) VALUES
(1, 21, '', '0000-00-00', 'San Miguel', 'Terminado'),
(2, 21, '2', '2018-08-30', 'San Miguel', 'Terminado'),
(3, 22, '', '0000-00-00', 'San Miguel', 'Terminado'),
(4, 21, '', '0000-00-00', 'San Miguel', 'En Proceso'),
(5, 21, '1', '2018-08-31', 'San Miguel', 'Terminado'),
(6, 21, '', '0000-00-00', 'San Miguel', 'En Proceso'),
(7, 21, '', '0000-00-00', 'San Miguel', 'En Proceso'),
(8, 23, '2', '2018-08-15', 'San Miguel', 'Terminado'),
(9, 28, '1', '2018-08-30', '', 'Terminado'),
(10, 29, '20', '2018-08-22', '', 'Terminado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mensajes`
--

DROP TABLE IF EXISTS `tbl_mensajes`;
CREATE TABLE IF NOT EXISTS `tbl_mensajes` (
  `PK_Id_Mensaje` int(11) NOT NULL AUTO_INCREMENT,
  `Contenido_Mensaje` text COLLATE utf8_spanish2_ci NOT NULL,
  `Contacto_Mensaje` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Emisor_Mensaje` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `FK_Id_Usuaria` int(11) NOT NULL,
  `Estado_Mensaje` varchar(10) COLLATE utf8_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`PK_Id_Mensaje`),
  KEY `FK_Id_Usuaria` (`FK_Id_Usuaria`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_mensajes`
--

INSERT INTO `tbl_mensajes` (`PK_Id_Mensaje`, `Contenido_Mensaje`, `Contacto_Mensaje`, `Emisor_Mensaje`, `FK_Id_Usuaria`, `Estado_Mensaje`) VALUES
(1, 'hola                                    \n                                ', '78787878', 'Juan', 14, 'Nuevo'),
(2, '       hola me gustan tus productos contactame                             \n                                ', '7227-7814', 'Roxana Blanco', 7, 'Nuevo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_perfiles_empresariales`
--

DROP TABLE IF EXISTS `tbl_perfiles_empresariales`;
CREATE TABLE IF NOT EXISTS `tbl_perfiles_empresariales` (
  `pk_Id_Perfil` int(11) NOT NULL AUTO_INCREMENT,
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
  `Num_Visitas` int(11) DEFAULT NULL,
  PRIMARY KEY (`pk_Id_Perfil`),
  KEY `FK_Usuaria` (`FK_Usuaria`),
  KEY `FK_Rubro` (`FK_Rubro`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_perfiles_empresariales`
--

INSERT INTO `tbl_perfiles_empresariales` (`pk_Id_Perfil`, `FK_Usuaria`, `Nombre_Negocio`, `Direccion_Negocio`, `Descripcion_Negocio`, `FK_Rubro`, `Foto_Perfil`, `Foto1`, `Foto2`, `Foto3`, `Telefono`, `Correo`, `Num_Visitas`) VALUES
(1, 1, 'asad', 'aDAD', '', 1, 'Roxana Blanco1/f3.jpg', 'Roxana Blanco1/f1.jpg', 'Roxana Blanco1/f2.jpg', 'Roxana Blanco1/f4.jpg', '7777', '7777', 24),
(2, 2, 'Lily Butique', 'allalsl', 'kskad', 1, 'Leticia Machuca2/f3.jpg', 'Leticia Machuca2/impresiones.jpg', 'Leticia Machuca2/soporte.png', 'Leticia Machuca2/soporte.png', '123233', '1232332', 9),
(3, 5, 'Mala artesanias', 'San Miguel', 'Es un negocio de artesanias', 1, 'Maria Lizama5/5529996.jpg', 'Maria Lizama5/diagrama2.jpeg', 'Maria Lizama5/estructura-de-un-cigoto.png', 'Maria Lizama5/evolucion.jpg', '7560954994', 'lalalal@ho', 10),
(5, 6, 'mi negocio', 'un negocio', 'otro', 1, 'maria ramirez6/', 'maria ramirez6/', 'maria ramirez6/', 'maria ramirez6/', 'hola', 'kjjjj', 1),
(6, 8, 'Panaderia Lupe', 'San Miguel', 'Los mejores Panes ', 3, 'Luisa Perez8/img.jpeg', 'Luisa Perez8/img.jpeg', 'Luisa Perez8/img.jpeg', 'Luisa Perez8/img.jpeg', '72454978', 'lupe@gmail', 1),
(7, 7, 'Cerveceria la Patrona', 'San Miguel', 'Somos los mas innovadores programadores de san miguel', 4, 'Juana Lopez7/img.jpeg', 'Juana Lopez7/img.jpeg', 'Juana Lopez7/img.jpeg', 'Juana Lopez7/img.jpeg', '74787579', 'cv@hotmail', 2),
(8, 13, 'MI negocio el mas pro', 'San MIguel', 'Los mas pro en tecnologia', 4, 'Juana 13/images.jpeg', 'Juana 13/img.jpeg', 'Juana 13/img.jpeg', 'Juana 13/img.jpeg', '7777777', 'Micorreo@g', NULL),
(18, 14, 'Mi Paiz', 'San Miguel', 'Venta de artesenias de todo tipo', 6, 'Liliana de jesus Latoya Jackson14/img.jpeg', 'Liliana de jesus Latoya Jackson14/plaza.jpg', 'Liliana de jesus Latoya Jackson14/laguna.jpg', 'Liliana de jesus Latoya Jackson14/pital.jpg', '503-7887-8', 'algo@gmail', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

DROP TABLE IF EXISTS `tbl_productos`;
CREATE TABLE IF NOT EXISTS `tbl_productos` (
  `PK_Id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Precio_Producto` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `FK_Id_Usuario` int(11) NOT NULL,
  PRIMARY KEY (`PK_Id_Producto`),
  KEY `id_usuario` (`FK_Id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`PK_Id_Producto`, `Nombre_Producto`, `Precio_Producto`, `FK_Id_Usuario`) VALUES
(21, 'Pupusas', '0.50', 1),
(22, 'Cafe Mocachino', '1.50', 1),
(23, 'Agua de coco', '1.50', 1),
(28, 'Parapapa', '2', 1),
(29, 'Tacos', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos_insumos`
--

DROP TABLE IF EXISTS `tbl_productos_insumos`;
CREATE TABLE IF NOT EXISTS `tbl_productos_insumos` (
  `FK_Id_Producto` int(11) NOT NULL,
  `FK_Id_Insumo` int(11) NOT NULL,
  `Cantidad_Insumo` float NOT NULL,
  `Medida_Insumo` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  KEY `id_producto` (`FK_Id_Producto`),
  KEY `id_insumo` (`FK_Id_Insumo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_productos_insumos`
--

INSERT INTO `tbl_productos_insumos` (`FK_Id_Producto`, `FK_Id_Insumo`, `Cantidad_Insumo`, `Medida_Insumo`) VALUES
(21, 27, 1, 'Kilos'),
(21, 28, 2, 'Libras'),
(21, 30, 5, 'Litros'),
(22, 27, 1, 'Libras'),
(22, 29, 2, 'Litros'),
(23, 27, 1, 'Kilos'),
(23, 28, 1, 'Libras'),
(23, 30, 3, 'Litros'),
(28, 27, 1, 'Gramos'),
(28, 32, 3, 'Gramos'),
(28, 33, 4, 'Litros'),
(29, 27, 1, 'Gramos'),
(29, 29, 1, 'Kilogramos'),
(29, 30, 1, 'Kilos'),
(29, 33, 1, 'Libras'),
(29, 34, 1, 'Libras'),
(29, 28, 1, 'Litros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rubros`
--

DROP TABLE IF EXISTS `tbl_rubros`;
CREATE TABLE IF NOT EXISTS `tbl_rubros` (
  `PK_Id_Rubro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Rubro` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_Id_Rubro`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_rubros`
--

INSERT INTO `tbl_rubros` (`PK_Id_Rubro`, `Nombre_Rubro`) VALUES
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
-- Estructura de tabla para la tabla `tbl_sedes`
--

DROP TABLE IF EXISTS `tbl_sedes`;
CREATE TABLE IF NOT EXISTS `tbl_sedes` (
  `pk_Id_Sede` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Sede` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`pk_Id_Sede`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_sedes`
--

INSERT INTO `tbl_sedes` (`pk_Id_Sede`, `Nombre_Sede`) VALUES
(1, 'Sede Ciudad Mujer Colón'),
(2, 'Ciudad Mujer Usulután'),
(3, 'Ciudad Mujer Santa Ana'),
(4, 'Ciudad Mujer San Martín'),
(5, 'Ciudad Mujer San Miguel'),
(6, 'Ciudad Mujer Morazán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_subrubros`
--

DROP TABLE IF EXISTS `tbl_subrubros`;
CREATE TABLE IF NOT EXISTS `tbl_subrubros` (
  `PK_Id_Subrubro` int(11) NOT NULL AUTO_INCREMENT,
  `FK_Id_Rubro` int(11) NOT NULL,
  `Nombre_Rubro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Produccion_Mensual` float NOT NULL,
  PRIMARY KEY (`PK_Id_Subrubro`),
  KEY `id_rubro` (`FK_Id_Rubro`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_subrubros`
--

INSERT INTO `tbl_subrubros` (`PK_Id_Subrubro`, `FK_Id_Rubro`, `Nombre_Rubro`, `Produccion_Mensual`) VALUES
(8, 1, 'Comida China', 0),
(9, 1, 'Comida Rusa', 0),
(10, 2, 'Textiles 1', 0),
(11, 3, 'Venta de Frutas', 0),
(12, 4, 'Venta de celulares', 0),
(13, 5, 'Drogueria', 0),
(14, 6, 'Venta de Llaveros', 0),
(15, 7, 'Construcción de Edificios', 0),
(16, 8, 'Consultoria Informatica', 0),
(17, 1, 'pupuseria', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_insumos`
--

DROP TABLE IF EXISTS `tbl_tipos_insumos`;
CREATE TABLE IF NOT EXISTS `tbl_tipos_insumos` (
  `Pk_Id_Tipo_Insumo` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`Pk_Id_Tipo_Insumo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_tipos_insumos`
--

INSERT INTO `tbl_tipos_insumos` (`Pk_Id_Tipo_Insumo`, `Nombre_Tipo`) VALUES
(1, 'Comestible'),
(2, 'No comestible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_usuarias`
--

DROP TABLE IF EXISTS `tbl_tipos_usuarias`;
CREATE TABLE IF NOT EXISTS `tbl_tipos_usuarias` (
  `pk_Id_Tipo` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`pk_Id_Tipo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_tipos_usuarias`
--

INSERT INTO `tbl_tipos_usuarias` (`pk_Id_Tipo`, `Descripcion`) VALUES
(1, 'Super Usuario'),
(2, 'Administradora'),
(3, 'Emprendedora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_usuarios`
--

DROP TABLE IF EXISTS `tbl_tipos_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_tipos_usuarios` (
  `PK_Id_Tipo_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`PK_Id_Tipo_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_tipos_usuarios`
--

INSERT INTO `tbl_tipos_usuarios` (`PK_Id_Tipo_Usuario`, `Nombre_Tipo`) VALUES
(1, 'Administrador'),
(2, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarias`
--

DROP TABLE IF EXISTS `tbl_usuarias`;
CREATE TABLE IF NOT EXISTS `tbl_usuarias` (
  `pk_Id_Usuaria` int(11) NOT NULL AUTO_INCREMENT,
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
  `Fecha_Registro` date DEFAULT NULL,
  PRIMARY KEY (`pk_Id_Usuaria`),
  KEY `fk_Tipo_Usuaria` (`fk_Tipo_Usuaria`),
  KEY `fk_Tipo_Usuaria_2` (`fk_Tipo_Usuaria`),
  KEY `FK_Sede` (`FK_Sede`),
  KEY `FK_Sede_2` (`FK_Sede`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tbl_usuarias`
--

INSERT INTO `tbl_usuarias` (`pk_Id_Usuaria`, `FK_Sede`, `Nombre`, `Apellido`, `Nom_User`, `Pass`, `Direccion`, `fk_Tipo_Usuaria`, `Telefono`, `Dui`, `Fecha_Actividad`, `Fecha_Registro`) VALUES
(1, 1, 'Roxana', 'Blanco', 'roxwite', '123456', 'San Miguel', 1, '72787475', '1111455-0', '2005-10-18', NULL),
(2, 1, 'Leticia', 'Machuca', 'lily', '123456', 'san miguel', 2, '76787574', '2221554-0', '2018-10-01', NULL),
(5, 1, 'Maria', 'Lizama', 'mala', '123456', 'san Miguel', 3, '78888', '789999', '2018-10-02', NULL),
(6, 1, 'maria', 'ramirez', 'maria', '123', 'san miguel', 3, '1235', '111111', '2018-10-02', NULL),
(7, 1, 'Juana', 'Lopez', 'julo', '1234', 'San Miguel', 3, '787878', '1121112', '2018-10-02', '2018-10-02'),
(8, 1, 'Luisa', 'Perez', 'lupe', '123', 'San Miguel', 3, '111111', '22222222', '2018-10-02', '2018-10-02'),
(13, 1, 'Juana', '', 'juana', '1234', 'sanana', 3, '503-5555-5', '55555555-5', '2018-10-05', '2018-10-03'),
(14, 1, 'Liliana de jesus', 'Latoya Jackson', 'lana', '123', 'san miguel', 3, '503-7877-5', '12213565-6', '2018-10-04', '2018-10-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_venta`
--

DROP TABLE IF EXISTS `tbl_venta`;
CREATE TABLE IF NOT EXISTS `tbl_venta` (
  `Pk_Id_Venta` int(11) NOT NULL,
  `Fk_Id_Inventario` int(11) NOT NULL,
  `Cantidad_Venta` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  PRIMARY KEY (`Pk_Id_Venta`),
  KEY `Fk_Id_Inventario` (`Fk_Id_Inventario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_venta`
--

INSERT INTO `tbl_venta` (`Pk_Id_Venta`, `Fk_Id_Inventario`, `Cantidad_Venta`, `Fecha_Venta`) VALUES
(0, 8, 1, '2018-10-05'),
(16, 10, 1, '2018-09-01'),
(17, 9, 25, '2018-09-08'),
(18, 8, 10, '2018-09-29');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_perfiles`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `vw_perfiles`;
CREATE TABLE IF NOT EXISTS `vw_perfiles` (
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
-- Estructura para la vista `vw_perfiles`
--
DROP TABLE IF EXISTS `vw_perfiles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_perfiles`  AS  select `p`.`pk_Id_Perfil` AS `pk_Id_Perfil`,`p`.`FK_Usuaria` AS `FK_Usuaria`,`p`.`Nombre_Negocio` AS `Nombre_Negocio`,`p`.`Direccion_Negocio` AS `Direccion_Negocio`,`p`.`Descripcion_Negocio` AS `Descripcion_Negocio`,`p`.`FK_Rubro` AS `FK_Rubro`,`p`.`Foto_Perfil` AS `Foto_Perfil`,`p`.`Foto1` AS `Foto1`,`p`.`Foto2` AS `Foto2`,`p`.`Foto3` AS `Foto3`,`p`.`Telefono` AS `Telefono`,`p`.`Correo` AS `Correo`,`p`.`Num_Visitas` AS `Num_Visitas`,`r`.`PK_Id_Rubro` AS `PK_Id_Rubro`,`r`.`Nombre_Rubro` AS `Nombre_Rubro`,`u`.`Nombre` AS `Nombre`,`u`.`Apellido` AS `Apellido`,`s`.`pk_Id_Sede` AS `pk_Id_Sede`,`s`.`Nombre_Sede` AS `Nombre_Sede` from (((`tbl_perfiles_empresariales` `p` join `tbl_rubros` `r` on((`p`.`FK_Rubro` = `r`.`PK_Id_Rubro`))) join `tbl_usuarias` `u` on((`p`.`FK_Usuaria` = `u`.`pk_Id_Usuaria`))) join `tbl_sedes` `s` on((`u`.`FK_Sede` = `s`.`pk_Id_Sede`))) ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_anuncios`
--
ALTER TABLE `tbl_anuncios`
  ADD CONSTRAINT `tbl_Anuncios_ibfk_1` FOREIGN KEY (`FK_Id_Usuaria`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_balance`
--
ALTER TABLE `tbl_balance`
  ADD CONSTRAINT `tbl_Balance_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_egresos`
--
ALTER TABLE `tbl_egresos`
  ADD CONSTRAINT `tbl_Egresos_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_elementos_subrubros`
--
ALTER TABLE `tbl_elementos_subrubros`
  ADD CONSTRAINT `tbl_Elementos_Subrubros_ibfk_1` FOREIGN KEY (`Fk_Id_Categoria_Elemento`) REFERENCES `tbl_categoria_elementos` (`Pk_Id_Categoria_Elemento`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Elementos_Subrubros_ibfk_2` FOREIGN KEY (`Fk_Id_Subrubro`) REFERENCES `tbl_subrubros` (`PK_Id_Subrubro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_guias_multimedia`
--
ALTER TABLE `tbl_guias_multimedia`
  ADD CONSTRAINT `tbl_Guias_Multimedia_ibfk_1` FOREIGN KEY (`FK_Id_Usuaria`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_ingresos`
--
ALTER TABLE `tbl_ingresos`
  ADD CONSTRAINT `tbl_Ingresos_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_ingresos_egresos_balance`
--
ALTER TABLE `tbl_ingresos_egresos_balance`
  ADD CONSTRAINT `tbl_Ingresos_Egresos_Balance_ibfk_3` FOREIGN KEY (`FK_Id_Egreso`) REFERENCES `tbl_egresos` (`Pk_Id_Egreso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Ingresos_Egresos_Balance_ibfk_4` FOREIGN KEY (`FK_Id_Balance`) REFERENCES `tbl_balance` (`PK_Id_Balance`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_insumos`
--
ALTER TABLE `tbl_insumos`
  ADD CONSTRAINT `tbl_Insumos_ibfk_1` FOREIGN KEY (`FK_Id_Tipo_Insumo`) REFERENCES `tbl_tipos_insumos` (`Pk_Id_Tipo_Insumo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Insumos_ibfk_2` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD CONSTRAINT `tbl_Inventario_ibfk_1` FOREIGN KEY (`FK_Id_Producto`) REFERENCES `tbl_productos` (`PK_Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_mensajes`
--
ALTER TABLE `tbl_mensajes`
  ADD CONSTRAINT `tbl_Mensajes_ibfk_1` FOREIGN KEY (`FK_Id_Usuaria`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_perfiles_empresariales`
--
ALTER TABLE `tbl_perfiles_empresariales`
  ADD CONSTRAINT `tbl_Perfiles_Empresariales_ibfk_1` FOREIGN KEY (`FK_Usuaria`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Perfiles_Empresariales_ibfk_2` FOREIGN KEY (`FK_Rubro`) REFERENCES `tbl_rubros` (`PK_Id_Rubro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `tbl_Productos_ibfk_1` FOREIGN KEY (`FK_Id_Usuario`) REFERENCES `tbl_usuarias` (`pk_Id_Usuaria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_productos_insumos`
--
ALTER TABLE `tbl_productos_insumos`
  ADD CONSTRAINT `tbl_Productos_Insumos_ibfk_1` FOREIGN KEY (`FK_Id_Producto`) REFERENCES `tbl_productos` (`PK_Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_Productos_Insumos_ibfk_2` FOREIGN KEY (`FK_Id_Insumo`) REFERENCES `tbl_insumos` (`PK_Id_Insumo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_subrubros`
--
ALTER TABLE `tbl_subrubros`
  ADD CONSTRAINT `tbl_Subrubros_ibfk_1` FOREIGN KEY (`FK_Id_Rubro`) REFERENCES `tbl_rubros` (`PK_Id_Rubro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuarias`
--
ALTER TABLE `tbl_usuarias`
  ADD CONSTRAINT `tbl_Usuarias_ibfk_1` FOREIGN KEY (`fk_Tipo_Usuaria`) REFERENCES `tbl_tipos_usuarias` (`pk_Id_Tipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
