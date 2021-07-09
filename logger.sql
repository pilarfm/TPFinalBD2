-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2021 a las 21:40:25
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logger`
--

CREATE TABLE `logger` (
  `id_logger` int(11) NOT NULL,
  `id_usuario` varchar(20) NOT NULL,
  `bd` varchar(30) NOT NULL,
  `query` varchar(500) NOT NULL,
  `resultado` varchar(300) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `hora` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `logger`
--

INSERT INTO `logger` (`id_logger`, `id_usuario`, `bd`, `query`, `resultado`, `fecha`, `hora`) VALUES
(233, 'salva', 'BD_salva', 'SELECT * from jugadores', '', '2021-07-08', '16:06:50'),
(234, 'salva', 'BD_salva', 'CREATE TABLE IF NOT EXISTS abogados (\n  id_jugador int(5) AUTO_INCREMENT,\n  nombre varchar(30),\n  apellido varchar(30),\n  deporte varchar(30),\n  numero int,\n  PRIMARY KEY (id_jugador))', 'bueno', '2021-07-08', '16:18:38'),
(235, 'salva', 'BD_salva', 'SELECT * from jugadores', '', '2021-07-08', '16:26:52'),
(236, 'salva', 'BD_salva', 'SELECT * from jugadores', '', '2021-07-08', '16:27:18'),
(237, 'salva', 'BD_salva', 'SELECT * from jugadores', 'Se ha realizado la consulta de forma existosa', '2021-07-08', '16:29:39'),
(238, 'salva', 'BD_salva', 'SELECT * from jugadoresasdasd', '', '2021-07-08', '16:29:53'),
(239, 'salva', 'BD_salva', 'SELECT * frasdom jugadoresasdasd', '', '2021-07-08', '16:30:11'),
(240, 'salva', 'BD_salva', 'SELECT * from jugadoresasdasd', '', '2021-07-08', '16:31:16'),
(241, 'salva', 'BD_salva', 'SELECT *asdasd', '', '2021-07-08', '16:32:35'),
(242, 'salva', 'BD_salva', 'sadasdas', '', '2021-07-08', '16:33:43'),
(243, 'salva', 'BD_salva', 'asdasd', '', '2021-07-08', '16:34:02'),
(244, 'salva', 'BD_salva', 'asdas', '', '2021-07-08', '16:34:43'),
(245, 'salva', 'BD_salva', 'asd', '', '2021-07-08', '16:35:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logger`
--
ALTER TABLE `logger`
  ADD PRIMARY KEY (`id_logger`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logger`
--
ALTER TABLE `logger`
  MODIFY `id_logger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
