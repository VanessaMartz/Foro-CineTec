-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2021 a las 20:56:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vanessadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idadministrador` varchar(13) NOT NULL DEFAULT 'not null',
  `nombre` varchar(32) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `statusadministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idadministrador`, `nombre`, `apellidos`, `telefono`, `email`, `password`, `statusadministrador`) VALUES
('CUPU8008255B9', 'ULISES', 'CUEVAS PÉREZ', '2291586032', 'ulises.cuevas@tecnm.veracruz.mx', '123456', 1),
('GAFJ8107029A0', 'JESÚS MANUEL', 'GARCÍA FRANCO', '2292536465', 'jmfranco@tecnm.veracruz.mx', '123456', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `idalumno` varchar(10) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `apellidos` varchar(64) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `statusalumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`idalumno`, `nombre`, `apellidos`, `telefono`, `email`, `password`, `statusalumno`) VALUES
('E16020870', 'VANESSA', 'MARTINEZ DIAZ', '2292472204', 'vane.martz@hotmail.com', '123456', 1),
('E16020893', 'ILIANA', 'BARRERA HERNÁNDEZ', '2291586380', 'ilianabahe@hotmail.com', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `idmateria` varchar(3) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `creditos` int(11) DEFAULT NULL,
  `statusmateria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idmateria`, `nombre`, `creditos`, `statusmateria`) VALUES
('2A3', 'PROGRAMACIÓN ORIENTADA A OBJETOS', 5, 1),
('2A4', 'CÁLCULO INTEGRAL', 4, 1),
('3L4', 'ESTADÍSTICA', 4, 1),
('9H7', 'ARQUITECTURA WEB', 5, 1),
('9J3', 'SISTEMAS DISTRIBUIDOS', 5, 1),
('9J8', 'PROGRAMACIÓN WEB', 5, 1),
('9L3', 'INTELIGENCIA ARTIFICIAL', 5, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idadministrador`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`idalumno`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idmateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
