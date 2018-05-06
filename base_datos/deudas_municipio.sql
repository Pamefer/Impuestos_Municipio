-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2016 a las 04:20:24
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `deudas_municipio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE IF NOT EXISTS `cuentas` (
  `id_cuenta` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `contrasenia` varchar(200) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_cuenta`),
  KEY `fk_CUENTAS_ROLES_idx` (`id_rol`),
  KEY `fk_cuentas_usuarios1_idx` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id_cuenta`, `usuario`, `contrasenia`, `id_rol`, `id_usuario`) VALUES
(1, 'admin', 'admin', 1, 1),
(2, 'secretaria', '1234', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotomultas`
--

CREATE TABLE IF NOT EXISTS `fotomultas` (
  `id_fotomulta` int(11) NOT NULL AUTO_INCREMENT,
  `rango_ini` int(11) DEFAULT NULL,
  `rango_final` int(11) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`id_fotomulta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `fotomultas`
--

INSERT INTO `fotomultas` (`id_fotomulta`, `rango_ini`, `rango_final`, `valor`) VALUES
(1, 61, 75, 109.8),
(2, 76, 180, 367);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotomultas_usuarios`
--

CREATE TABLE IF NOT EXISTS `fotomultas_usuarios` (
  `id_foto_usuar` int(11) NOT NULL AUTO_INCREMENT,
  `FOTOMULTAS_id_fotomulta` int(11) NOT NULL,
  `USUARIOS_id_usuario` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `lugar` varchar(150) DEFAULT NULL,
  `velocidad` int(11) DEFAULT NULL,
  `valorpagar` double DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_foto_usuar`),
  KEY `fk_FOTOMULTAS_has_USUARIOS_USUARIOS1_idx` (`USUARIOS_id_usuario`),
  KEY `fk_FOTOMULTAS_has_USUARIOS_FOTOMULTAS1_idx` (`FOTOMULTAS_id_fotomulta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `fotomultas_usuarios`
--

INSERT INTO `fotomultas_usuarios` (`id_foto_usuar`, `FOTOMULTAS_id_fotomulta`, `USUARIOS_id_usuario`, `fecha`, `hora`, `lugar`, `velocidad`, `valorpagar`, `estado`) VALUES
(1, 1, 1, '2016-06-20', '11:30:45', 'Catamayo', 56, 234, 'PENDIENTE'),
(2, 2, 1, '2016-06-21', '12:45:24', 'Loja', 67, 40, 'PAGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Secretaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo_servicio` int(11) NOT NULL,
  `criterio_cobro` varchar(45) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  `tiempo_cobro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`),
  KEY `fk_SERVICIOS_TIPO_SERVICIO1_idx` (`id_tipo_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `id_tipo_servicio`, `criterio_cobro`, `valor`, `tiempo_cobro`) VALUES
(1, 1, 'metros cuadrados', 0.7, 'Anual'),
(2, 2, 'pago por cada persona con vehiculo', 37, 'Anual'),
(3, 3, 'metros cúbicos consumidos', 0.6, 'Mensual'),
(4, 4, 'permiso de funcionamiento ', 101, 'Anual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios_usuarios`
--

CREATE TABLE IF NOT EXISTS `servicios_usuarios` (
  `id_ser_usuar` int(11) NOT NULL AUTO_INCREMENT,
  `id_servicio` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `consumo` double DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `valorpagar` double DEFAULT NULL,
  PRIMARY KEY (`id_ser_usuar`),
  KEY `fk_SERVICIOS_has_USUARIOS_USUARIOS1_idx` (`id_usuario`),
  KEY `fk_SERVICIOS_has_USUARIOS_SERVICIOS1_idx` (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `servicios_usuarios`
--

INSERT INTO `servicios_usuarios` (`id_ser_usuar`, `id_servicio`, `id_usuario`, `consumo`, `estado`, `fecha`, `direccion`, `valorpagar`) VALUES
(1, 1, 1, 34, 'PENDIENTE', '2016-06-13', 'Daniel Alvarez', 35),
(2, 2, 1, 45, 'PENDIENTE', '2016-06-12', 'Loja', 45),
(3, 3, 1, 45, 'PAGADO', '2016-06-05', 'catamayo', 67),
(4, 1, 2, 45, 'PENDIENTE', '2016-06-19', 'Loja', 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicio`
--

CREATE TABLE IF NOT EXISTS `tipo_servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `servicio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_servicio`
--

INSERT INTO `tipo_servicio` (`id_servicio`, `servicio`) VALUES
(1, 'Impuesto Predial'),
(2, 'Impuesto Rodaje'),
(3, 'Agua'),
(4, 'Patentes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `cedula` varchar(10) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `placa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `cedula`, `correo`, `direccion`, `telefono`, `placa`) VALUES
(1, 'Pamela', 'Guaman', '111', 'correo@gmail.com', 'Loja', '2555555', 'LBX-2022'),
(2, 'Daniel', 'Alvarez', '222', 'secre@gmail.com', 'Loja', '2345234', NULL),
(3, 'jose', 'cueva', '333', 'notiene@gmail.com', 'camatamayo', '1800-jose', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `fk_CUENTAS_ROLES` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cuentas_usuarios1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fotomultas_usuarios`
--
ALTER TABLE `fotomultas_usuarios`
  ADD CONSTRAINT `fk_FOTOMULTAS_has_USUARIOS_FOTOMULTAS1` FOREIGN KEY (`FOTOMULTAS_id_fotomulta`) REFERENCES `fotomultas` (`id_fotomulta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FOTOMULTAS_has_USUARIOS_USUARIOS1` FOREIGN KEY (`USUARIOS_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_SERVICIOS_TIPO_SERVICIO1` FOREIGN KEY (`id_tipo_servicio`) REFERENCES `tipo_servicio` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicios_usuarios`
--
ALTER TABLE `servicios_usuarios`
  ADD CONSTRAINT `fk_SERVICIOS_has_USUARIOS_SERVICIOS1` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id_servicio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SERVICIOS_has_USUARIOS_USUARIOS1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
