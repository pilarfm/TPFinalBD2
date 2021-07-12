-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2021 a las 01:26:32
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
  `resultado` varchar(300) DEFAULT 'Error, no fue realizada con exito!',
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
(245, 'salva', 'BD_salva', 'asd', '', '2021-07-08', '16:35:20'),
(246, 'salva', 'BD_salva', 'asdasd', '', '2021-07-08', '16:50:38'),
(247, 'salva', 'BD_salva', 'asdasd', '', '2021-07-08', '16:51:58'),
(248, 'salva', 'BD_salva', 'SELECT * from jugadores', 'Se ha realizado la consulta de forma existosa', '2021-07-08', '16:52:03'),
(249, 'test', 'BD_test', 'CREATE TABLE IF NOT EXISTS jugadores (id_jugador int(5) AUTO_INCREMENT,\nnombre varchar(30),\napellido varchar(30),\ndeporte varchar(30),\nnumero int,\nPRIMARY KEY (id_jugador))', 'Se ha realizado la consulta de forma existosa', '2021-07-12', '19:02:36'),
(250, 'test', 'BD_test', 'INSERT INTO jugadores (Nombre, Apellido, Deporte, Numero) VALUES (\"Leonel\", \"Messi\", \"Futbol\", 10)', 'Se ha realizado la consulta de forma existosa', '2021-07-12', '19:02:39'),
(251, 'test', 'BD_test', 'INSERT INTO jugadores (Nombre, Apellido, Deporte, Numero) VALUES (\"Eldibu\", \"Messi\", \"Futbol\", 10)', 'Se ha realizado la consulta de forma existosa', '2021-07-12', '19:02:52'),
(252, 'test', 'BD_test', 'SELECT * FROM jugadores', 'Se ha realizado la consulta de forma existosa', '2021-07-12', '19:03:02'),
(253, 'test', 'BD_test', 'SELECT * FROM jugadores', 'Se ha realizado la consulta de forma existosa', '2021-07-12', '19:07:27'),
(254, 'test', 'BD_test', 'sadasdasd', 'Error, no fue realizada con exito!', '2021-07-12', '19:09:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `pass`, `nick`, `email`) VALUES
('cofran1', 'cofran', 'cofran1', 'cofran1@gmail.com'),
('lapili', 'pili', 'pili', 'pili@p.com'),
('marco', 'asd', 'asd', 'asd@gmail.com'),
('mati', 'mati123', 'dias', 'mati@gmail.com'),
('pepe', 'pepe', 'asd', 'asd'),
('salva', 'salva', 'calabaza', 'salva@gmail.com'),
('sanchez1', 'sanchez', 'sanchez', 'sanchez@asdasd.com'),
('sanchez2', 'sanchez', 'roque', 'sanchez@asdasd.com'),
('test', '123', 'test', 'test@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logger`
--
ALTER TABLE `logger`
  ADD PRIMARY KEY (`id_logger`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logger`
--
ALTER TABLE `logger`
  MODIFY `id_logger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
