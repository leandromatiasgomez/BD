-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2023 a las 12:59:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

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
  `Matricula` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `DNI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Matricula`, `Nombre`, `Apellido`, `DNI`) VALUES
(1, 'Daniel', 'Ramirez', 35004325);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnosaulas`
--

CREATE TABLE `alumnosaulas` (
  `codigo_asignacion` int(11) NOT NULL,
  `codigo_alumno` int(11) NOT NULL,
  `codigo_aula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnosaulas`
--

INSERT INTO `alumnosaulas` (`codigo_asignacion`, `codigo_alumno`, `codigo_aula`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `codigo_aula` int(11) NOT NULL,
  `codigo_sede` int(11) NOT NULL,
  `codigo_materia` int(11) NOT NULL,
  `codigo_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`codigo_aula`, `codigo_sede`, `codigo_materia`, `codigo_profesor`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `codigo_cago` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreraalumno`
--

CREATE TABLE `carreraalumno` (
  `codigo_asignacion` int(11) NOT NULL,
  `codigo_carrera` int(11) NOT NULL,
  `codigo_alumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreramateria`
--

CREATE TABLE `carreramateria` (
  `codigo_asignacion` int(11) NOT NULL,
  `codigo_carrera` int(11) NOT NULL,
  `codigo_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreramateria`
--

INSERT INTO `carreramateria` (`codigo_asignacion`, `codigo_carrera`, `codigo_materia`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `codigo_carrera` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `codigo_tipo_carrera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`codigo_carrera`, `nombre`, `codigo_tipo_carrera`) VALUES
(1, 'Electrónica', 5),
(2, 'Licenciatura Organizacional Industrial', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrerassedes`
--

CREATE TABLE `carrerassedes` (
  `codigo_asignacion` int(11) NOT NULL,
  `codigo_carrera` int(11) NOT NULL,
  `codigo_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrerassedes`
--

INSERT INTO `carrerassedes` (`codigo_asignacion`, `codigo_carrera`, `codigo_sede`) VALUES
(1, 2, 5),
(2, 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `codigo_empleado` int(11) NOT NULL,
  `codigo_cargo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `DNI` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`codigo_empleado`, `codigo_cargo`, `nombre`, `apellido`, `DNI`) VALUES
(1, 1, 'Rosa', 'Gonzales', 30780900);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleadosede`
--

CREATE TABLE `empleadosede` (
  `codigo_asignacion` int(11) NOT NULL,
  `codigo_empleado` int(11) NOT NULL,
  `codigo_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `codigo_materia` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`codigo_materia`, `nombre`) VALUES
(1, 'Ingles 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `codigo_sede` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `Provincia` varchar(50) NOT NULL,
  `Localidad` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`codigo_sede`, `nombre`, `Provincia`, `Localidad`, `Direccion`) VALUES
(1, 'Facultad Regional Buenos Aires', 'CABA', 'Almagro', 'Medrano 951'),
(2, 'Facultad Regional Avellaneda', 'Buenos Aires', 'Avellaneda', 'Av. Mitre 750'),
(3, 'Facultad Regional Bahía Blanca', 'Buenos Aires', 'Bahía Blanca', '11 de Abril 461 '),
(4, 'Facultad Regional La Plata', 'Buenos Aires', 'La Plata', 'Calle 60 esq. 124');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocarreras`
--

CREATE TABLE `tipocarreras` (
  `codigo_tipo_carrera` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipocarreras`
--

INSERT INTO `tipocarreras` (`codigo_tipo_carrera`, `nombre`) VALUES
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
  ADD PRIMARY KEY (`Matricula`);

--
-- Indices de la tabla `alumnosaulas`
--
ALTER TABLE `alumnosaulas`
  ADD PRIMARY KEY (`codigo_asignacion`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`codigo_aula`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`codigo_cago`);

--
-- Indices de la tabla `carreraalumno`
--
ALTER TABLE `carreraalumno`
  ADD PRIMARY KEY (`codigo_asignacion`);

--
-- Indices de la tabla `carreramateria`
--
ALTER TABLE `carreramateria`
  ADD PRIMARY KEY (`codigo_asignacion`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`codigo_carrera`);

--
-- Indices de la tabla `carrerassedes`
--
ALTER TABLE `carrerassedes`
  ADD PRIMARY KEY (`codigo_asignacion`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`codigo_empleado`);

--
-- Indices de la tabla `empleadosede`
--
ALTER TABLE `empleadosede`
  ADD PRIMARY KEY (`codigo_asignacion`);

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
-- Indices de la tabla `tipocarreras`
--
ALTER TABLE `tipocarreras`
  ADD PRIMARY KEY (`codigo_tipo_carrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `Matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alumnosaulas`
--
ALTER TABLE `alumnosaulas`
  MODIFY `codigo_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `codigo_aula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `codigo_cago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreraalumno`
--
ALTER TABLE `carreraalumno`
  MODIFY `codigo_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carreramateria`
--
ALTER TABLE `carreramateria`
  MODIFY `codigo_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `codigo_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carrerassedes`
--
ALTER TABLE `carrerassedes`
  MODIFY `codigo_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `codigo_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleadosede`
--
ALTER TABLE `empleadosede`
  MODIFY `codigo_asignacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `codigo_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `codigo_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipocarreras`
--
ALTER TABLE `tipocarreras`
  MODIFY `codigo_tipo_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
