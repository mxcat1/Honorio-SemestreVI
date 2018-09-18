-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-09-2018 a las 04:46:13
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
-- Base de datos: `bd_sis_inter`
--
CREATE DATABASE IF NOT EXISTS `bd_sis_inter` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_sis_inter`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--
-- Creación: 18-09-2018 a las 04:00:50
-- Última actualización: 18-09-2018 a las 04:37:25
-- Última revisión: 18-09-2018 a las 04:00:50
--

DROP TABLE IF EXISTS `articulo`;
CREATE TABLE IF NOT EXISTS `articulo` (
  `id_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `nom_articulo` varchar(255) NOT NULL,
  `personaje` int(11) DEFAULT NULL,
  `tipo_articulo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_articulo`),
  UNIQUE KEY `articulo_id_articulo_uindex` (`id_articulo`),
  UNIQUE KEY `articulo_nom_articulo_uindex` (`nom_articulo`),
  KEY `articulo_personaje_id_personaje_fk` (`personaje`),
  KEY `articulo_tipo_articulo_id_tipo_articulo_fk` (`tipo_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nom_articulo`, `personaje`, `tipo_articulo`) VALUES
(1, 'FrozenBlue Helmet', 1, 2),
(2, 'FrozenBlue Claymore ', 1, 1),
(3, 'FrozenBlue Shoulder', 1, 6),
(4, 'FrozenBlue Arms', 1, 4),
(5, 'FrozenBlue Armor', 1, 3),
(6, 'FrozenBlue Dagger', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_oferta`
--
-- Creación: 18-09-2018 a las 04:26:48
-- Última actualización: 18-09-2018 a las 04:26:48
-- Última revisión: 18-09-2018 a las 04:26:48
--

DROP TABLE IF EXISTS `detalle_oferta`;
CREATE TABLE IF NOT EXISTS `detalle_oferta` (
  `id_detalle_oferta` int(11) NOT NULL AUTO_INCREMENT,
  `oferta_usuario` int(11) NOT NULL,
  `detalle_inventario` int(11) NOT NULL,
  PRIMARY KEY (`id_detalle_oferta`),
  UNIQUE KEY `detalle_oferta_id_detalle_oferta_uindex` (`id_detalle_oferta`),
  KEY `detalle_oferta_det_inventario_usuario_id_det_inve_usuario_fk` (`detalle_inventario`),
  KEY `detalle_oferta_oferta_usuario_id_oferta_usuario_fk` (`oferta_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `det_inventario_usuario`
--
-- Creación: 18-09-2018 a las 04:17:34
-- Última actualización: 18-09-2018 a las 04:39:58
-- Última revisión: 18-09-2018 a las 04:17:34
--

DROP TABLE IF EXISTS `det_inventario_usuario`;
CREATE TABLE IF NOT EXISTS `det_inventario_usuario` (
  `id_det_inve_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `gema_poder_cant` int(11) NOT NULL,
  `refinado_det_inv` tinyint(1) NOT NULL,
  `estado_det_inve` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_det_inve_usuario`),
  UNIQUE KEY `det_inventario_ususario_id_det_inve_usuario_uindex` (`id_det_inve_usuario`),
  KEY `det_inventario_ususario_usuario_id_usuario_fk` (`usuario`),
  KEY `det_inventario_ususario_articulo_id_articulo_fk` (`articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `det_inventario_usuario`
--

INSERT INTO `det_inventario_usuario` (`id_det_inve_usuario`, `articulo`, `usuario`, `gema_poder_cant`, `refinado_det_inv`, `estado_det_inve`) VALUES
(1, 1, 1, 10, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta_usuario`
--
-- Creación: 18-09-2018 a las 04:20:26
-- Última actualización: 18-09-2018 a las 04:20:26
-- Última revisión: 18-09-2018 a las 04:20:26
--

DROP TABLE IF EXISTS `oferta_usuario`;
CREATE TABLE IF NOT EXISTS `oferta_usuario` (
  `id_oferta_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` int(11) NOT NULL,
  `estado_oferta` tinyint(1) NOT NULL,
  `fecha_oferta` date NOT NULL,
  PRIMARY KEY (`id_oferta_usuario`),
  UNIQUE KEY `oferta_usuario_id_oferta_usuario_uindex` (`id_oferta_usuario`),
  KEY `oferta_usuario_usuario_id_usuario_fk` (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--
-- Creación: 18-09-2018 a las 03:53:27
-- Última actualización: 18-09-2018 a las 04:30:24
--

DROP TABLE IF EXISTS `personaje`;
CREATE TABLE IF NOT EXISTS `personaje` (
  `id_personaje` int(11) NOT NULL AUTO_INCREMENT,
  `clase_personaje` varchar(100) NOT NULL,
  PRIMARY KEY (`id_personaje`),
  UNIQUE KEY `personaje_id_personaje_uindex` (`id_personaje`),
  UNIQUE KEY `personaje_clase_personaje_uindex` (`clase_personaje`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`id_personaje`, `clase_personaje`) VALUES
(1, 'Swordman'),
(2, 'Archer'),
(3, 'Blacksmith'),
(4, 'Mage'),
(5, 'Ninja'),
(6, 'Dualist');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_articulo`
--
-- Creación: 18-09-2018 a las 03:45:25
-- Última actualización: 18-09-2018 a las 04:29:35
--

DROP TABLE IF EXISTS `tipo_articulo`;
CREATE TABLE IF NOT EXISTS `tipo_articulo` (
  `id_tipo_articulo` int(11) NOT NULL AUTO_INCREMENT,
  `detalle_articulo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_tipo_articulo`),
  UNIQUE KEY `tipo_articulo_id_articulo_uindex` (`id_tipo_articulo`),
  UNIQUE KEY `tipo_articulo_nom_articulo_uindex` (`detalle_articulo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_articulo`
--

INSERT INTO `tipo_articulo` (`id_tipo_articulo`, `detalle_articulo`) VALUES
(1, 'Arma'),
(2, 'Casco'),
(3, 'Armadura'),
(4, 'Guantes'),
(5, 'Arma de Rango'),
(6, 'Hombrera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--
-- Creación: 18-09-2018 a las 03:43:38
-- Última actualización: 18-09-2018 a las 04:39:05
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nom_usuario` varchar(100) NOT NULL,
  `ape_usuario` varchar(100) NOT NULL,
  `cuenta_usuario` varchar(30) NOT NULL,
  `contrasena_usuario` varchar(255) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `fecha_nac_usuario` date NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `usuario_id_usuario_uindex` (`id_usuario`),
  UNIQUE KEY `usuario_cuenta_usuario_uindex` (`cuenta_usuario`),
  UNIQUE KEY `usuario_email_usuario_uindex` (`email_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nom_usuario`, `ape_usuario`, `cuenta_usuario`, `contrasena_usuario`, `email_usuario`, `fecha_nac_usuario`) VALUES
(1, 'Christian', 'Vilca Apaza', 'mxcat', 'XXmxcatXX', 'mxcat.xxtremxx@gmil.com', '1996-12-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
