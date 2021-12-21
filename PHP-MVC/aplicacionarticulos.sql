-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-09-2010 a las 15:47:56
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aplicacionarticulos`
--
CREATE DATABASE `aplicacionarticulos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `aplicacionarticulos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE IF NOT EXISTS `articulo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `cuerpo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id`, `titulo`, `descripcion`, `cuerpo`) VALUES
(1, 'Netbook Commodore', 'Commodore Atom N450', 'Procesador. Marca: Intel. Modelo: Atom N450. 1GB. \r\nCapacidad. Disco Rigido: 250GB. \r\nPantalla. Tamaño: 10.1Pulgadas. \r\nCaracterí­sticas Generales. Conectividad Wireless: WI FI. \r\nSoftware. Sistema Operativo: Windows 7. Versión: Starter. \r\n'),
(2, 'Netbook HP', 'Pantalla widescreen antirreflejos SD LED de 10,1" de diagonal. Conexión en red inalámbrica. Bluetooth.', 'Procesador. Marca: Intel. Modelo: Atom N270. Velocidad: 1.60GHz. 1GB. \r\nCapacidad. Disco Rigido: 160GB.\r\nPantalla. Tamaño: 10.1Pulgadas. \r\nCaracterí­sticas Generales. Conectividad Wireless: WI FI. Peso: 1.17KG. Software. \r\nSistema Operativo: Windows XP. Versión: Home. \r\n'),
(3, 'Notebook Compaq', 'Notebook con pantalla LED HP Brightview de alta dfiniciòn de 14" (1366 x 768). Lector de medios digitales 5 en 1.', 'Procesador. Marca: AMD. Modelo: V120. Velocidad: 2.2GHz. 1GB. \r\nCapacidad. Disco Rigido: 250GB. \r\nPantalla. Tamaño: 14Pulgadas. \r\nCaracterí­sticas Generales. Unidad Optica: LighScribe Super Multi 8X DVD+RW. Conectividad Wireless: WI FI. \r\nSoftware. Sistema Operativo: Windows 7. Versión: Starter. \r\n'),
(4, 'Notebook Compaq', 'Lector de medios digitales 5 en 1. Webcam incorporada.', 'Procesador. Marca: AMD. Modelo: V120. Velocidad: 2.2GHz. 1GB. \r\nCapacidad. Disco Rigido: 250GB. \r\nPantalla. Tamaño: 14Pulgadas. \r\nCaracterí­sticas Generales. Unidad Optica: LighScribe Super Multi 8X DVD+RW . Conectividad Wireless: WI FI. \r\nSoftware. Sistema Operativo: Windows 7. Versión: Starter. \r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
