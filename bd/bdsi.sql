-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.4.18-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para u700865171_suenointimo
CREATE DATABASE IF NOT EXISTS `u700865171_suenointimo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `u700865171_suenointimo`;

-- Volcando estructura para tabla u700865171_suenointimo.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `telefono` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL DEFAULT '',
  `mensaje` text NOT NULL DEFAULT '',
  `enviadoa` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `FK_mensajes_usuario` (`enviadoa`),
  CONSTRAINT `FK_mensajes_usuario` FOREIGN KEY (`enviadoa`) REFERENCES `usuario` (`email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla u700865171_suenointimo.mensajes: ~0 rows (aproximadamente)
DELETE FROM `mensajes`;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;

-- Volcando estructura para tabla u700865171_suenointimo.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `nombre` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `tallas` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `colores` text DEFAULT NULL,
  `stock` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla u700865171_suenointimo.productos: ~24 rows (aproximadamente)
DELETE FROM `productos`;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`, `tallas`, `descripcion`, `colores`, `stock`, `categoria`) VALUES
	('2008', 'Batola Oro y Rosa', 35000, 'oro.jpg/rosa.jpg', 'S,M,L', 'Batola corta en satin.', 'Amarilla,Rosada', '2', 'Batola'),
	('2009', 'Batola Corazones', 28000, 'batolacorazones1.jpg/batolacorazones2.jpg', 'S,M,L', 'Batola corta en franela.', 'Estampado Corazones', '5', 'Batola'),
	('2010', 'Conjunto Romantic-Satin', 35000, 'conjuntoromanticsatin1.jpg/conjuntoromanticsatin2.jpg', 'S,M,L', 'Dos piezas en satin. Short y Blusa.', 'Blusa Salmon y Short Estampado,Blusa Estampada y S', '2', 'DosPiezas'),
	('2011', 'Batola Princesa', 60000, 'batolaprincesa1.jpg/batolaprincesa2.jpg/batolaprincesa3.jpg/batolaprincesa4.jpg', 'S,M,L', 'Batola con encaje guipur en satin.', 'Blanco,Negro,Palo de Rosa,Lila', '5', 'Batola'),
	('2012', 'Conjunto Cuadritos', 35000, 'conjuntocuadritos1.jpg/conjuntocuadritos2.jpg/conjuntocuadritos3.jpg/conjuntocuadritos4.jpg/conjuntocuadritos5.jpg', 'S,M', 'Dos piezas en franela. Short y Blusa en tiras. Cuadritos Blanco con negro', 'Copa Negra, Copa Cuadros, Encaje Negro, Encaje Azul', '5', 'DosPiezas'),
	('2013', 'Conjunto Visos Rosados', 35000, 'conjuntovisosrosados1.jpg/conjuntovisosrosados2.jpg', 'S,M', 'Conjunto dos piezas top y short. Franela algodon', 'Encaje Negro,Encaje Blanco,Encaje Rosado', '5', 'DosPiezas'),
	('2014', 'Conjunto Bralette', 35000, 'conjuntobralette1.jpg/conjuntobralette2.jpg', 'S,M', 'Conjunto dos piezas en satin. Bralette y short', 'Salmon,Rosado,Curuba,Lila,Dorado', '5', 'DosPiezas'),
	('2015', 'Batola Visos Rosados', 35000, 'batolavisosrosados1.jpg/batolavisosrosados2.jpg', 'S,M', 'Batola en franela de algodon.', 'Rosado', '1', 'Batola'),
	('2016', 'Conjunto Corazones', 25000, 'conjuntocorazones1.jpg/conjuntocorazones2.jpg', 'S,M', 'Dos piezas en franela de algodon. Blusa blanca y Short estampado.', 'Verde Pastel,Amarillo,Rojo', '5', 'DosPiezas'),
	('2017', 'Pijama de Conejitos', 49000, 'pijamaconejitos1.jpg/pijamaconejitos2.jpg', 'S,M,L', 'Dos piezas en satin. Blusa en copa prehormada.', 'Gris con Rosado', '5', 'DosPiezas'),
	('2018', 'Pijama Camisera', 55000, NULL, 'S,M,L', 'Dos piezas en satin. Short y camisa estampado.', 'Blanco,Negro', '5', 'EstiloCamisa'),
	('2019', 'Pijama Azul Cielo', 48000, NULL, 'S,M,L', 'Dos piezas en satin con encaje guipur. Blusa en tiras y short', 'Azul', '5', 'DosPiezas'),
	('2020', 'Pijama Ojitos', 48000, NULL, 'S,M,L', 'Dos piezas en franela algodon. Pantalon largo estampado y blusa en tiras', 'Blusa Negra Pantalon Ojitos', '5', 'PantalonLargo'),
	('2021', 'Pijama Snoopy', 38000, NULL, 'S,M,L', 'Dos piezas en satin elastico. Blusa y short estampados.', 'Estampado Snoopy', '5', 'PantalonLargo'),
	('2022', 'Batola Princesa con Levantadora', 130000, 'batolaprincesaconlevantadora1.jpg/batolaprincesaconlevantadora2.jpg/batolaprincesaconlevantadora3.jpg', 'S,M,L', 'Dos piezas en Satin. Batola y Levantadora', 'Blanco,Negro,Palo de Rosa,Rosado,Plateado', '5', 'Levantadora'),
	('2023', 'Pijama Minnie', 45000, NULL, 'S,M,L', 'Dos piezas. Blusa estilo camisa sin cuello y short con lazo en cinta negro', 'Estampado Minnie', '5', 'EstiloCamisa'),
	('2024', 'Pijama Animal Print', 70000, NULL, 'S,M,L', 'Dos piezas en satin. Blusa estilo camisa pantalon largo. Cinta en satin en cintura del pantalon.', 'Animal Print', '5', 'PantalonLargo'),
	('2025', 'Batola Materna', 48000, NULL, 'S,M,L', 'Copa desplegable para lactancia. Franela en algodon', 'Lila,Jade,Rosado,Amarillo', '4', 'Lactancia'),
	('2026', 'Pijama Materna', 65000, NULL, 'S,M,L', 'Dos piezas en franela de algodon. Pantalon largo y blusa con copa desplegable para lactancia.', 'Salmon,Aguamarina', '2', 'Lactancia'),
	('2027', 'Pijama Camison', 48000, NULL, 'S,M,L', 'Batola estilo camison estampado de rallas en seda satin elastico.', 'Rosado,Azul,Estampado Pastelitos', '3', 'EstiloCamisa'),
	('2028', 'Batola Tacitas', 30000, 'batolatacitas.jpg', 'S,M,L', 'Batola en franela algodon.', 'Estampado Tacitas', '5', 'Batola'),
	('2029', 'Conjunto Unicornio', 25000, NULL, 'S,M', 'Dos piezas en franela de algodon.', 'Blusa Azul Short Estampado, Blusa Estampada Short Azul', '5', 'DosPiezas'),
	('2030', 'Pijama Pink Panter', 48000, NULL, 'S,M,L', 'Dos piezas en franela algodon. Pantalon largo estampado y blusa tipo top.', 'Estampado Pink Panter', '5', 'PantalonLargo'),
	('2031', 'Pijama Stitch', 45000, NULL, 'S,M,L', 'Dos piezas. Blusa estilo camisa sin cuello y short con lazo en cinta rosada', 'Estampado Stitch', '5', 'EstiloCamisa');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla u700865171_suenointimo.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `activo` varchar(50) DEFAULT 'SI',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla u700865171_suenointimo.usuario: ~1 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`email`, `contrasena`, `nombre`, `direccion`, `telefono`, `tipo`, `activo`) VALUES
	('andres1.dvd@hotmail.com', 'f10e2821bbbea527ea02200352313bc059445190', 'gustavo', NULL, NULL, 'usuario', 'SI'),
	('andres@hotmail.com', 'f10e2821bbbea527ea02200352313bc059445190', 'andres', NULL, NULL, 'admin', 'SI');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla u700865171_suenointimo.ventas
CREATE TABLE IF NOT EXISTS `ventas` (
  `idventa` int(11) NOT NULL,
  `idproducto` varchar(50) NOT NULL DEFAULT '',
  `idusuario` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idventa`),
  KEY `FK_ventas_usuario` (`idusuario`),
  KEY `FK_ventas_productos` (`idproducto`),
  CONSTRAINT `FK_ventas_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_ventas_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`email`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla u700865171_suenointimo.ventas: ~0 rows (aproximadamente)
DELETE FROM `ventas`;
/*!40000 ALTER TABLE `ventas` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
