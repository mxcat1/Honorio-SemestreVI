-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-09-2018 a las 05:01:20
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_sis_inte`
--
CREATE DATABASE IF NOT EXISTS `bd_sis_inte` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `bd_sis_inte`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(11) NOT NULL,
  `nom_articulo` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo_articulo` int(11) DEFAULT NULL,
  `id_personaje` int(11) DEFAULT NULL,
  `precio_articulo_gold` bigint(20) DEFAULT NULL,
  `precio_articulo_cash` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_articulo`),
  KEY `FK_articulo_personaje` (`id_personaje`),
  KEY `FK_articulo_tipo_articulo` (`id_tipo_articulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_oferta`
--

DROP TABLE IF EXISTS `descripcion_oferta`;
CREATE TABLE IF NOT EXISTS `descripcion_oferta` (
  `id_descripcion_oferta` int(11) NOT NULL,
  `id_oferta` int(11) DEFAULT NULL,
  `id_det_inventario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_descripcion_oferta`),
  KEY `FK_descripcion_oferta_det_inventario_usuario` (`id_det_inventario`),
  KEY `descripcion_oferta_oferta_usuario_id_oferta_usuario_fk` (`id_oferta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_inventario_usuario`
--

DROP TABLE IF EXISTS `det_inventario_usuario`;
CREATE TABLE IF NOT EXISTS `det_inventario_usuario` (
  `id_det_inventario_usuario` int(11) NOT NULL,
  `id_articulo` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `gemas_poder_det_inv` int(11) DEFAULT NULL,
  `refinado_det_inve` int(11) DEFAULT NULL,
  `estado_det_inv` tinyint(3) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id_det_inventario_usuario`),
  KEY `FK_det_inventario_usuario_articulo` (`id_articulo`),
  KEY `FK_det_inventario_usuario_usuario` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_contraoferta`
--

DROP TABLE IF EXISTS `oferta_contraoferta`;
CREATE TABLE IF NOT EXISTS `oferta_contraoferta` (
  `id_oferta_contraoferta` int(11) NOT NULL,
  `id_oferta` int(11) DEFAULT NULL,
  `id_contraoferta` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_oferta_contraoferta`),
  KEY `FK_oferta_contraoferta_oferta_usuario` (`id_oferta`),
  KEY `FK_oferta_contraoferta_oferta_usuario1` (`id_contraoferta`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_usuario`
--

DROP TABLE IF EXISTS `oferta_usuario`;
CREATE TABLE IF NOT EXISTS `oferta_usuario` (
  `id_oferta_usuario` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `estado_oferta` tinyint(3) UNSIGNED NOT NULL,
  `fecha_oferta` date NOT NULL,
  `tipo_oferta` tinyint(3) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id_oferta_usuario`),
  KEY `FK_oferta_usuario_usuario` (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

DROP TABLE IF EXISTS `personaje`;
CREATE TABLE IF NOT EXISTS `personaje` (
  `id_personaje` int(11) NOT NULL,
  `clase_personaje` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_personaje`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_articulo`
--

DROP TABLE IF EXISTS `tipo_articulo`;
CREATE TABLE IF NOT EXISTS `tipo_articulo` (
  `id_tipo_articulo` int(11) NOT NULL,
  `detalle_tipo_articulo` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_tipo_articulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ape_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cuenta_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña_usuario` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nac_usuario` date NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
