-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2022 a las 02:01:30
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbsem2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `documento` double DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `opinion` varchar(150) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`codigo`, `nombre`, `apellido`, `cargo`, `documento`, `correo`, `contra`, `opinion`, `rol`) VALUES
(15, 'bramdo', 'Cadena', 'secretario', 12345, 'nicolascaden@gmail.com', '12345', NULL, 'administrativos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoresest`
--

CREATE TABLE `asesoresest` (
  `identificacion` int(50) NOT NULL,
  `tipo` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `ase` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nomp` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `identest` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `rol` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion`
--

CREATE TABLE `calificacion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `docum` int(20) NOT NULL,
  `nota` int(11) NOT NULL,
  `rol` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `calificacion`
--

INSERT INTO `calificacion` (`id`, `nombre`, `docum`, `nota`, `rol`) VALUES
(1, 'rosdc', 2345, 4, 'calificacion'),
(2, 'Robot', 234, 3, 'calificacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentrario` int(11) NOT NULL,
  `idautor` int(11) DEFAULT NULL,
  `idproyecto` int(11) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cometariodoc`
--

CREATE TABLE `cometariodoc` (
  `identificacion` int(50) NOT NULL,
  `proyecto` varchar(150) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `comentario` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `rol` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `programa` varchar(100) DEFAULT NULL,
  `facultad` varchar(100) DEFAULT NULL,
  `documento` double DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `opinion` varchar(250) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigo`, `nombre`, `apellido`, `programa`, `facultad`, `documento`, `correo`, `contra`, `opinion`, `rol`) VALUES
(19, 'Nicolas', 'Cadena', 'Ingenieria de sistemas', 'Ingenieria', 12345, 'nicolascadena08@gmail.com', '12345', NULL, 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `facultad` varchar(100) DEFAULT NULL,
  `documento` double DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `contra` varchar(20) DEFAULT NULL,
  `opinion` varchar(100) DEFAULT NULL,
  `rol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`codigo`, `nombre`, `apellido`, `facultad`, `documento`, `correo`, `contra`, `opinion`, `rol`) VALUES
(10, 'Juan', 'Perez', 'Ingenieria', 12345, 'juan@gmail.com', '12345', NULL, 'docente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitestud`
--

CREATE TABLE `solicitestud` (
  `codigo` int(11) NOT NULL,
  `identificacion` int(50) NOT NULL,
  `jurado` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `asesor` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `aprobado` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `rol` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `idsolicitud` int(20) NOT NULL,
  `nombredoc` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `asunto` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `solicitud` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `solicitante` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `solicitudes`
--

INSERT INTO `solicitudes` (`idsolicitud`, `nombredoc`, `asunto`, `solicitud`, `solicitante`) VALUES
(12345, 'manual', 'Tesis', 'Hola', 'solicitudes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `name` varchar(300) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `asesoresest`
--
ALTER TABLE `asesoresest`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentrario`);

--
-- Indices de la tabla `cometariodoc`
--
ALTER TABLE `cometariodoc`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `solicitestud`
--
ALTER TABLE `solicitestud`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`idsolicitud`);

--
-- Indices de la tabla `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `asesoresest`
--
ALTER TABLE `asesoresest`
  MODIFY `identificacion` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT de la tabla `calificacion`
--
ALTER TABLE `calificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentrario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cometariodoc`
--
ALTER TABLE `cometariodoc`
  MODIFY `identificacion` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23124;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `solicitestud`
--
ALTER TABLE `solicitestud`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `idsolicitud` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1085943800;

--
-- AUTO_INCREMENT de la tabla `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
