-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-11-2022 a las 00:33:32
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario_bodegon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE IF NOT EXISTS `articulo` (
  `articulo_id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre_articulo` varchar(70) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci,
  `fecha_cvto` date DEFAULT NULL,
  `categoria_id` int(7) NOT NULL,
  `fabrica_id` int(7) NOT NULL,
  PRIMARY KEY (`articulo_id`),
  UNIQUE KEY `categoria_id` (`categoria_id`),
  UNIQUE KEY `fabrica_id` (`fabrica_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `categoria_id` int(7) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencia`
--

DROP TABLE IF EXISTS `existencia`;
CREATE TABLE IF NOT EXISTS `existencia` (
  `existencia_id` int(30) NOT NULL AUTO_INCREMENT,
  `cantidad` int(25) NOT NULL,
  `articulo_id` int(20) NOT NULL,
  PRIMARY KEY (`existencia_id`),
  UNIQUE KEY `articulo_id` (`articulo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fabrica`
--

DROP TABLE IF EXISTS `fabrica`;
CREATE TABLE IF NOT EXISTS `fabrica` (
  `fabrica_id` int(7) NOT NULL AUTO_INCREMENT,
  `nombre_fabrica` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`fabrica_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `historial_id` int(50) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time(6) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `articulo_id` int(20) NOT NULL,
  PRIMARY KEY (`historial_id`),
  UNIQUE KEY `usuario_id` (`usuario_id`),
  UNIQUE KEY `articulo_id` (`articulo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `rol_id` int(10) NOT NULL AUTO_INCREMENT,
  `administrador` int(10) NOT NULL,
  `usuario_l` int(10) NOT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rol_id` int(10) NOT NULL,
  PRIMARY KEY (`usuario_id`),
  UNIQUE KEY `usuario_id` (`usuario_id`,`rol_id`),
  KEY `rol_id` (`rol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `articulo_ibfk_1` FOREIGN KEY (`fabrica_id`) REFERENCES `fabrica` (`fabrica_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articulo_ibfk_2` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`categoria_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `existencia`
--
ALTER TABLE `existencia`
  ADD CONSTRAINT `existencia_ibfk_1` FOREIGN KEY (`articulo_id`) REFERENCES `articulo` (`articulo_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`articulo_id`) REFERENCES `articulo` (`articulo_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
