-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:8889
-- Tiempo de generación: 03-08-2014 a las 04:34:35
-- Versión del servidor: 5.5.34
-- Versión de PHP: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `hermes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`usuario` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`mail` varchar(50) NOT NULL,
`aviso` varchar(225) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `usuario`, `password`, `mail`, `aviso`) VALUES
(1, 'kolkoborrego', '3b3bcadabff9af6442850aacc985804dc52f4bbf', 'kolkoborrego@gmail.com', 'Al que se descubra dejando las pesas fuera de su lugar me va a hacer 200 lagartijas y 150 sentadillas.'),
(2, 'jesusmurillo', '3b3bcadabff9af6442850aacc985804dc52f4bbf', 'jesus.murillo@me.com', 'Hoy no voy a trabajar, no voy a trabajar, no voy a trabajar, lalalalala.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`usuario` varchar(50) NOT NULL,
`password` varchar(50) NOT NULL,
`mail` varchar(50) NOT NULL,
`fecha` date NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `usuario` (`usuario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `mail`, `fecha`) VALUES
(1, 'kolkoborregos', '3b3bcadabff9af6442850aacc985804dc52f4bbf', 'jesus.murillo@gmail.com', '2014-07-25'),
(2, 'danstag', '683dcf491e8f82f49e5229f4fc75fd2890638905', 'danielcontreras1994@gmail.com', '2014-07-20'),
(3, 'alberto', '8cb2237d0679ca88db6464eac60da96345513964', 'alberto.vasquez@lol.com', '2014-08-01'),
(4, 'juanpablo', '0f9fa6386aa364e4e8c8dde8c92735e48da127c0', 'juanpazav@gmail.com', '2014-08-02');
