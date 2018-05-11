-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2018 a las 15:31:33
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
-- Base de datos: `thl`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id` int(11) NOT NULL,
  `temp_max` int(11) NOT NULL,
  `hum_max` int(11) NOT NULL,
  `lum_max` int(11) NOT NULL,
  `temp_min` int(11) NOT NULL,
  `hum_min` int(11) NOT NULL,
  `lum_min` int(11) NOT NULL,
  `act1` int(11) NOT NULL,
  `act2` int(11) NOT NULL,
  `act3` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `hora_ini` int(11) NOT NULL,
  `hora_fin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id`, `temp_max`, `hum_max`, `lum_max`, `temp_min`, `hum_min`, `lum_min`, `act1`, `act2`, `act3`, `estado`, `hora_ini`, `hora_fin`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valores`
--

CREATE TABLE `valores` (
  `ID` int(11) NOT NULL,
  `Tiempo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Temp` int(11) NOT NULL,
  `Hum` int(11) NOT NULL,
  `Lum` int(11) NOT NULL,
  `SenT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `valores`
--

INSERT INTO `valores` (`ID`, `Tiempo`, `Temp`, `Hum`, `Lum`, `SenT`) VALUES
(0, '2018-04-20 16:14:37', 24, 61, 61, 24),
(0, '2018-04-20 16:14:50', 0, 0, 0, 0),
(0, '2018-04-20 16:15:00', 24, 59, 59, 24),
(0, '2018-04-20 16:15:11', 24, 57, 57, 24),
(0, '2018-04-20 16:15:21', 31, 55, 55, 34),
(0, '2018-04-20 16:15:31', 24, 57, 57, 24),
(0, '2018-04-20 16:15:42', 24, 56, 56, 24),
(0, '2018-04-20 16:15:52', 24, 64, 64, 24),
(0, '2018-04-20 16:16:03', 27, 61, 61, 28),
(0, '2018-04-20 16:16:13', 24, 59, 59, 24),
(0, '2018-04-20 16:16:23', 24, 56, 56, 24),
(0, '2018-04-20 16:16:34', 23, 57, 57, 23),
(0, '2018-04-20 16:16:44', 24, 56, 56, 24);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
