-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2018 a las 11:25:24
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `luzbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `id` varchar(15) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  `estrato` int(11) DEFAULT NULL,
  `servicio` int(11) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellidos`, `id`, `pass`, `email`, `telefono`, `edad`, `direccion`, `pais`, `estrato`, `servicio`, `estado`) VALUES
('', '', '', '', '', 0, 0, '', '', 0, 0, 1),
('7', '', '7', '7', 'manuel6170@hotmail.com', 7, 7, '7', '7', 7, 7, 1),
('57687989', '68798', '8', '56789', 'mcvictor@unicauca.edu.co', 5678, 678, '6878', '798', 789, 789, 0),
('manuel', 'manuel', 'manuel', 'manuel', 'manuel', 2, 2, 'manuel', 'manuel', 2, 2, 1),
('manuel', 'manuel', 'manuel222', 'manuel', 'manuel', 0, 2, 'manuel', 'manuel', 2, 2, 1),
('manuel', 'manuel', 'manuel2233332', 'manuel', 'manuel', 0, 2, 'manuel', 'manuel', 2, 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
