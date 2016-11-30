-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-11-2016 a las 13:05:55
-- Versión del servidor: 5.7.16-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuariosv1`
--
CREATE DATABASE IF NOT EXISTS `usuariosv1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `usuariosv1`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tema`
--

DROP TABLE IF EXISTS `tema`;
CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `nombre` varchar(70) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(300) CHARACTER SET utf8 NOT NULL,
  `visualizado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tema`
--

INSERT INTO `tema` (`id_tema`, `nombre`, `descripcion`, `visualizado`) VALUES
(1, 'Tabla Periódica y su Uso', 'Introducción a la tabla periódica.', 0),
(2, 'Compuestos y Elementos', 'Explicación acerca de los compuestos y los elementos presentes en la tabla periódica.', 0),
(3, 'Modelos Atómicos', 'Explicación sobre los modelos atómicos.', 0),
(4, 'Enlace Químico', 'Introducción a los enlaces químicos.', 0),
(5, 'Propiedades de los Metales', 'Propiedades que poseen los metales presentes en la tabla periódica.', 0),
(6, 'Elementos de la Tabla Periódica', 'Explicación breve sobre los elementos de la tabla periódica.', 0),
(7, 'Trabajos de Cannizaro y Mendeleyev', 'Trabajos más importantes sobre estos grandes personajes.', 0),
(8, 'Regularidades de la Tabla Periódica', 'Explicación sobre las regularidades que se encuentran en la tabla periódica.', 0),
(9, 'Metales y Metaloides', 'Principales características de estos elementos.', 0),
(10, 'Caracter Metálico, Valencia y Masa Atómica', 'Principales características.', 0),
(11, 'Importancia de los Elementos Químicos Para los Seres Vivos', '¿Por qué los elementos son importantes para nosotros?', 0),
(12, 'Enlace Iónico', 'Introducción al Enlace Iónico.', 0),
(13, 'Enlace Covalente', 'Introducción al Enlace Covalente.', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `resultado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id_test`, `resultado`, `fecha`, `id_usuario`) VALUES
(13, 'AR:7 SI:6 VV:5 SG:8', '2016-11-08 02:57:34', 29),
(14, 'AR:5:SI:9:VV:6:SG:7', '2016-11-08 03:23:32', 33),
(17, 'AR:10:SI:11:VV:11:SG:9', '2016-11-24 01:29:23', 43),
(22, 'AR:0:SI:0:VV:0:SG:0', '2016-11-24 04:00:40', 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `contrasena`, `email`) VALUES
(15, 'ismael', 'ISMAELalgo1', 'ismael@algo.com'),
(17, 'mahatma', 'ISMAEL3m', 'pachon@icloud.com'),
(29, 'rosendo', 'ROSENDOav1', 'ros@endo.com'),
(33, 'usuario', 'USUARIOrio1', 'usuario@usuario.com'),
(38, 'shakira', 'SHAKIra1', 'shaki@ra.com'),
(42, 'yuevaldo', 'YUEvaldo1', 'yue@valdo.com'),
(43, 'nerito', 'NERITOoscuro1', 'nerito@oscuro.com'),
(56, 'vanila', 'VANILAice1', 'vanila@ice.com'),
(57, 'ricks', 'RICKSlive1', 'ricks@live.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `idx_email` (`email`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
