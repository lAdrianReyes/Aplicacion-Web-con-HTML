-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 22:48:27
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id_alumno` int(11) NOT NULL,
  `curp` varchar(17) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `especialidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`id_alumno`, `curp`, `nombre`, `apellidos`, `especialidad`) VALUES
(1, 'CASD010205MQRLLFA', 'DAFNE JAEL', 'CALAN SOLIS', 'Turismo'),
(2, 'CACM980221HQRSHR0', 'MARIO ENRIQUE', 'CASTRO CHAN', 'Informática'),
(3, 'CAHR010620HQRHRMA', 'JOSE RAMIRO', 'CHAN HERNANDEZ', 'Alimentos y Bebidas'),
(4, 'CAPA000510MQRHTNA', 'ANGELA ABIGAIL', 'CHAN POOT', 'Electricidad'),
(5, 'GOSA000925HOCNNXA', 'Axel', 'Gonzalez Santiago', 'Informática'),
(6, ' REVO990129HOCYLS', 'OSCAR ADRIAN', 'REYES VELASQUEZ', 'Tics'),
(10, 'CXCA001020HOCLRXA', 'Juan', 'Martines Ruiz', 'Turismo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `id_docente` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `calle` varchar(60) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `colonia` varchar(100) NOT NULL,
  `Municipio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`id_docente`, `nombres`, `apellidos`, `telefono`, `calle`, `numero`, `colonia`, `Municipio`) VALUES
(1, 'AXEL ', 'GARCIA RUIZ', '9511117662', 'Benito Juarez', '49', 'Lomas de santa rosa', 'Santa Rosa'),
(2, 'CARLOS ROBERT', 'GARCIA RUIZ', '9511117662', '5 de Mayo', '103', 'Nazareno', 'Santa Cruz Xoxocotlan'),
(3, 'CARMEN DE JESUS', 'CARREÑO CRUZ', '9511234567', 'Arteaga', '201', 'Centro', 'Oaxaca de Juárez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `clave` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `nombre`, `clave`) VALUES
(1, 'Admin', '12345678'),
(2, 'Empleado', '12345678');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`id_docente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
