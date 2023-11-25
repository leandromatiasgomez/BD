-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 03:25:44
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `utn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `matricula` int(11) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `apellido_alumno` varchar(50) NOT NULL,
  `dni_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`matricula`, `nombre_alumno`, `apellido_alumno`, `dni_alumno`) VALUES
(1, 'Daniel', 'Ramirez', 35004325),
(2, 'Sofia', 'Torres', 38478327),
(3, 'Martin', 'Fernandez', 29709648),
(4, 'German', 'Torres', 31003946),
(5, 'Fernando', 'Ramirez', 36984561),
(6, 'German', 'Valdez', 31648279),
(7, 'Carlos', 'Robert', 41232639),
(8, 'Armando', 'Fernandez', 39608462),
(9, 'Walter', 'Guerrero ', 31649782),
(10, 'Hugo', 'Genaro', 33609860);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosaulas`
--

CREATE TABLE `alumnosaulas` (
  `codigo_alumnoaula` int(11) NOT NULL,
  `codigo_alumno` int(11) NOT NULL,
  `codigo_aula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnosaulas`
--

INSERT INTO `alumnosaulas` (`codigo_alumnoaula`, `codigo_alumno`, `codigo_aula`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8),
(9, 9, 8),
(10, 10, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnoscarreras`
--

CREATE TABLE `alumnoscarreras` (
  `codigo_alumnocarrera` int(11) NOT NULL,
  `codigo_alumno` int(11) NOT NULL,
  `codigo_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `codigo_aula` int(11) NOT NULL,
  `codigo_sede` int(11) NOT NULL,
  `codigo_materia` int(11) NOT NULL,
  `codigo_profesor` int(11) NOT NULL,
  `numero_aula` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`codigo_aula`, `codigo_sede`, `codigo_materia`, `codigo_profesor`, `numero_aula`) VALUES
(1, 1, 1, 1, 'a1'),
(2, 1, 2, 1, 'a2'),
(3, 1, 3, 2, 'a3'),
(4, 1, 5, 2, 'a4'),
(5, 1, 4, 2, 'a5'),
(6, 2, 8, 3, 'A'),
(7, 3, 1, 4, '1'),
(8, 4, 3, 5, 'A1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `codigo_cargo` int(11) NOT NULL,
  `nombre_cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`codigo_cargo`, `nombre_cargo`) VALUES
(1, 'Profesor'),
(2, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `codigo_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(50) NOT NULL,
  `codigo_tipo_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`codigo_carrera`, `nombre_carrera`, `codigo_tipo_carrera`) VALUES
(1, 'Electrónica', 5),
(2, 'Licenciatura Organizacional Industrial', 2),
(3, 'Ingeniería Civil', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrerasmaterias`
--

CREATE TABLE `carrerasmaterias` (
  `codigo_carreramateria` int(11) NOT NULL,
  `codigo_carrera` int(11) NOT NULL,
  `codigo_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrerasmaterias`
--

INSERT INTO `carrerasmaterias` (`codigo_carreramateria`, `codigo_carrera`, `codigo_materia`) VALUES
(1, 2, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 2, 4),
(10, 2, 7),
(11, 2, 8),
(12, 2, 5),
(12, 2, 9),
(13, 2, 12),
(14, 2, 10),
(15, 2, 11),
(15, 3, 1),
(16, 3, 2),
(17, 3, 3),
(18, 3, 4),
(19, 3, 5),
(20, 3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrerassedes`
--

CREATE TABLE `carrerassedes` (
  `codigo_carrerasede` int(11) NOT NULL,
  `codigo_carrera` int(11) NOT NULL,
  `codigo_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrerassedes`
--

INSERT INTO `carrerassedes` (`codigo_carrerasede`, `codigo_carrera`, `codigo_sede`) VALUES
(1, 2, 2),
(2, 2, 3),
(3, 1, 1),
(4, 2, 1),
(5, 3, 1),
(6, 2, 4),
(7, 3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigo_empleado` int(11) NOT NULL,
  `codigo_cargo` int(11) NOT NULL,
  `nombre_empleado` varchar(50) NOT NULL,
  `apellido_empleado` varchar(50) NOT NULL,
  `dni_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codigo_empleado`, `codigo_cargo`, `nombre_empleado`, `apellido_empleado`, `dni_empleado`) VALUES
(1, 1, 'Rosa', 'Gonzales', 30780900),
(2, 1, 'Felipe', 'Perez', 31528796),
(3, 1, 'Eduardo ', 'Salvio', 30210405),
(4, 1, 'Oscar', 'Fernández', 28995631),
(5, 1, 'Pablo', 'Torres', 30043290),
(6, 2, 'Armando', 'Gomez', 12345678);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadossedes`
--

CREATE TABLE `empleadossedes` (
  `codigo_empleadosede` int(11) NOT NULL,
  `codigo_empleado` int(11) NOT NULL,
  `codigo_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `codigo_materia` int(11) NOT NULL,
  `nombre_materia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`codigo_materia`, `nombre_materia`) VALUES
(1, 'Ingles 1'),
(2, 'Informática I (Int) '),
(3, 'Álgebra y Geometría Analítica '),
(4, 'Análisis Matemático I'),
(5, 'Ingeniería y Sociedad'),
(6, 'Análisis Matemático II'),
(7, 'Física I '),
(8, 'Sistemas de Representación '),
(9, 'Algebra y Geometría Analítica'),
(10, 'Ingeniería Civil I (Int.)'),
(11, 'Química General'),
(12, 'Fundamentos de Informática ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `codigo_sede` int(11) NOT NULL,
  `nombre_sede` varchar(50) NOT NULL,
  `provincia_sede` varchar(50) NOT NULL,
  `localidad_sede` varchar(50) NOT NULL,
  `direccion_sede` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`codigo_sede`, `nombre_sede`, `provincia_sede`, `localidad_sede`, `direccion_sede`) VALUES
(1, 'Facultad Regional Buenos Aires', 'CABA', 'Almagro', 'Medrano 951'),
(2, 'Facultad Regional Avellaneda', 'Buenos Aires', 'Avellaneda', 'Av. Mitre 750'),
(3, 'Facultad Regional Bahía Blanca', 'Buenos Aires', 'Bahía Blanca', '11 de Abril 461 '),
(4, 'Facultad Regional La Plata', 'Buenos Aires', 'La Plata', 'Calle 60 esq. 124');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposcarreras`
--

CREATE TABLE `tiposcarreras` (
  `codigo_tipo_carrera` int(11) NOT NULL,
  `nombre_tipo_carrera` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposcarreras`
--

INSERT INTO `tiposcarreras` (`codigo_tipo_carrera`, `nombre_tipo_carrera`) VALUES
(1, 'Ingienieria'),
(2, 'Licenciatura'),
(3, 'Tecnicatura universitaria'),
(4, 'Ciclo de complementación curricular '),
(5, 'Doctorado '),
(6, 'Maestría'),
(7, 'Especialización '),
(8, 'Curso de actualización ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `alumnosaulas`
--
ALTER TABLE `alumnosaulas`
  ADD PRIMARY KEY (`codigo_alumnoaula`);

--
-- Indices de la tabla `alumnoscarreras`
--
ALTER TABLE `alumnoscarreras`
  ADD PRIMARY KEY (`codigo_alumnocarrera`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`codigo_aula`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`codigo_carrera`);

--
-- Indices de la tabla `carrerassedes`
--
ALTER TABLE `carrerassedes`
  ADD PRIMARY KEY (`codigo_carrerasede`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo_empleado`);

--
-- Indices de la tabla `empleadossedes`
--
ALTER TABLE `empleadossedes`
  ADD PRIMARY KEY (`codigo_empleadosede`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`codigo_materia`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`codigo_sede`);

--
-- Indices de la tabla `tiposcarreras`
--
ALTER TABLE `tiposcarreras`
  ADD PRIMARY KEY (`codigo_tipo_carrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `alumnosaulas`
--
ALTER TABLE `alumnosaulas`
  MODIFY `codigo_alumnoaula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `alumnoscarreras`
--
ALTER TABLE `alumnoscarreras`
  MODIFY `codigo_alumnocarrera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `codigo_aula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `codigo_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `carrerassedes`
--
ALTER TABLE `carrerassedes`
  MODIFY `codigo_carrerasede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `codigo_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `empleadossedes`
--
ALTER TABLE `empleadossedes`
  MODIFY `codigo_empleadosede` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `codigo_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `codigo_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tiposcarreras`
--
ALTER TABLE `tiposcarreras`
  MODIFY `codigo_tipo_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
