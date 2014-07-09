-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-08-2013 a las 10:08:03
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aplicaciones_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_bin NOT NULL,
  `pass` varchar(30) COLLATE utf8_bin NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(30) COLLATE utf8_bin NOT NULL,
  `a_paterno` varchar(25) COLLATE utf8_bin NOT NULL,
  `a_materno` varchar(25) COLLATE utf8_bin NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `f_nacimiento` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `pass`, `admin`, `email`, `nombre`, `a_paterno`, `a_materno`, `sexo`, `f_nacimiento`) VALUES
(1, 'admin', 'admin', 1, 'admin@myweb.com', 'juan', 'pistolas', '', 1, '1988-02-24'),
(2, 'a-cordero', 'pass-ana', 0, 'ana_cordero@myweb.com', 'ana', 'cordero', 'blanco', 0, '1988-08-15'),
(3, 'p-r25', 'pass-pablo', 0, 'pablo_ruiz@myweb.com', 'pablo', 'ruiz', 'ruiz', 1, '1968-08-13'),
(4, 'x-serenata', 'pass-ximena', 0, 'ximena_serenata@myweb.com', 'ximena', 'serenata', 'sanchez', 0, '1999-12-24'),
(5, 'jose-p', 'pass-jose', 0, 'jose_perez@myweb.com', 'jose', 'perez', 'tomas', 1, '1994-11-02'),
(6, 'octa-sanz', 'pass-octavio', 0, 'octavio_sanz@myweb.com', 'octavio', 'sanz', 'paez', 1, '1977-05-21'),
(7, 'user254', 'pass-roger', 0, 'roger_feraz@myweb.com', 'rogelio', 'fernandez', 'azuara', 1, '1975-06-01'),
(8, 's.sarmi', 'pass-selena', 0, 's.sarmi@myweb.com', 'selena', 'sanchez', 'sarmiento', 0, '1998-04-21'),
(9, 'jazmine', 'pass-jazmin', 0, 'jestrada@myweb.com', 'jazmin', 'estrada', '', 0, '2000-01-01'),
(10, 'dasilvio', 'pass-silvio', 0, 'da.silvio@myweb.com', 'silvio', 'soto', 'islas', 1, '1975-08-11'),
(11, 'conchita-16-9', 'pass-concepcion', 0, 'cochita-16-9@myweb.com', 'maria concepcion', 'arreola', 'gomez', 0, '1989-09-16'),
(12, 'usali', 'pass-ursula', 0, 'usj-19@myweb.com', 'ursula', 'salinas', 'juarez', 0, '1990-10-29');
