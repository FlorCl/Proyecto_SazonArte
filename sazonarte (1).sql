-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2018 a las 15:47:14
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sazonarte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_coment` int(30) NOT NULL,
  `Comentario` text NOT NULL,
  `id_usuario` int(25) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recetas`
--

CREATE TABLE `recetas` (
  `id_receta` int(20) NOT NULL,
  `nombre` text NOT NULL,
  `id_tiprec` int(20) NOT NULL,
  `precio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recetas`
--

INSERT INTO `recetas` (`id_receta`, `nombre`, `id_tiprec`, `precio`) VALUES
(1, 'Pizza de 2 quesos', 3, 150),
(2, 'Bombas de carne', 3, 800),
(3, 'Merluza con alcauciles', 3, 450);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiporec`
--

CREATE TABLE `tiporec` (
  `id_tiprec` int(20) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiporec`
--

INSERT INTO `tiporec` (`id_tiprec`, `nombre`) VALUES
(1, 'regionales'),
(2, 'gourmet'),
(3, 'especiales'),
(4, 'light'),
(5, 'bebes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(15) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `sexo` text NOT NULL,
  `pais` text NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `edad`, `email`, `telefono`, `sexo`, `pais`, `usuario`, `pass`) VALUES
(1, 'Ana', 'Perez', 25, 'ana@mail.com', '2345678', 'femenino', 'Argentina', 'ana', '123'),
(2, 'Carlos', 'Lopez', 40, 'carlos@mail.com', '456578321', 'masculino', 'Argentina', 'pablo', 'cl123'),
(3, 'Roberto', 'Gimenez', 45, 'roberto@mail.com', '112345677', 'masculino', 'Uruguay', 'rober', 'rg123'),
(4, 'Paula', 'Rivera', 23, 'paula@mail.com', '345122778809', 'femenino', 'Chile', 'pau', 'pr123'),
(5, 'Carlos', 'Sanchez', 71, 'carsanchezs@mail.com', '256689432', 'masculino', 'Paraguay', 'carsa', 'cs123'),
(6, 'Pablo', 'Ramirez', 40, 'paramis@mail.com', '23466780', 'masculino', 'Bolivia', 'param', 'pr123'),
(7, 'Marcela', 'Salas', 60, 'marce@mail.com', '3412331260', 'femenino', 'Uruguay', 'masa', 'ms123'),
(8, 'Julian', 'Robles', 21, 'juli@mail.com', '190234870', 'masculino', 'Paraguay', 'juro', 'jr123'),
(9, 'Marla', 'Silva', 46, 'marsilva@mail.com', '987564001', 'femenino', 'Brasil', 'masi', 'ms123'),
(10, 'Silvina', 'Faroli', 51, 'silvi@mail.com', '266435690', 'femenino', 'Argentina', 'sifa', 'sf123'),
(11, 'marta', 'sanchez', 0, 'evaluna_21sl@hotmail.com', '34567721', 'femenino', 'Argentina', 'mar', 'ms123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_coment`);

--
-- Indices de la tabla `recetas`
--
ALTER TABLE `recetas`
  ADD PRIMARY KEY (`id_receta`);

--
-- Indices de la tabla `tiporec`
--
ALTER TABLE `tiporec`
  ADD PRIMARY KEY (`id_tiprec`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
