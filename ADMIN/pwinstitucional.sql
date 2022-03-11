-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 15:36:05
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pwinstitucional`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anios`
--

CREATE TABLE `anios` (
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anios`
--

INSERT INTO `anios` (`anio`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `division` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`idcurso`, `anio`, `division`) VALUES
(1, 1, 'A'),
(2, 1, 'B'),
(3, 1, 'C'),
(4, 1, 'D'),
(5, 2, 'A'),
(6, 2, 'B'),
(7, 2, 'C'),
(8, 2, 'D'),
(9, 3, 'A'),
(10, 3, 'B'),
(11, 3, 'C'),
(12, 3, 'D'),
(13, 4, '1'),
(14, 4, '2'),
(15, 4, '3'),
(16, 4, '4'),
(17, 5, '1'),
(18, 5, '2'),
(19, 5, '3'),
(20, 5, '4'),
(21, 6, '1'),
(22, 6, '2'),
(23, 7, '1'),
(24, 7, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `idcurso` int(11) NOT NULL,
  `idturno` int(11) NOT NULL,
  `archivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`idcurso`, `idturno`, `archivo`) VALUES
(24, 2, 'linkviejo.jpg'),
(24, 3, '_slider1_TOTAL.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `idmateria` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`idmateria`, `nombre`) VALUES
(1, 'MATEMATICA'),
(2, 'PRACTICA DEL LENGUAJE'),
(3, 'FISICA'),
(4, 'QUIMICA'),
(5, 'FISICO-QUIMICA'),
(6, 'CIENCIAS NATURALES'),
(7, 'CIENCIAS SOCIALES'),
(8, 'SISTEMAS TECNOLOGICOS'),
(9, 'PROCEDIMIENTOS TECNICOS'),
(10, 'LENGUAJE TECNOLOGICO'),
(11, 'INGLES'),
(12, 'ARTISTICA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `idmesa` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `idmateria` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `horario` time NOT NULL,
  `idtipoinstancia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mesas`
--

INSERT INTO `mesas` (`idmesa`, `anio`, `idmateria`, `fecha`, `horario`, `idtipoinstancia`) VALUES
(1, 2, 1, '2021-12-12', '18:00:00', 5),
(2, 5, 1, '2021-12-12', '15:00:00', 3),
(4, 3, 7, '2021-12-23', '18:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `idnoticia` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcioncorta` varchar(500) NOT NULL,
  `descripcionlarga` varchar(4000) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `fechainicio` datetime DEFAULT NULL,
  `fechafin` datetime DEFAULT NULL,
  `idusuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`idnoticia`, `titulo`, `descripcioncorta`, `descripcionlarga`, `imagen`, `fechainicio`, `fechafin`, `idusuario`) VALUES
(1, 'SE ANUNCIAN VIAJES DE EGRESADOS', 'Los viajes de egresados serán tenidos en cuenta para que viajen alumnos solamente ...', 'aca vamos a mandar una descripcion larga que mande zaraza la zaza ....ñlkusgfaposduifjv{zlkjcvn ñzjkcbvj s{z ngjv+pszj vz{j vcs{zlkcvhj lz-k', '', '2021-10-21 00:02:11', '2021-10-30 00:00:01', ''),
(2, 'LA NOTICIA DEL DIA', 'Soto se rompio el brazo', 'Es un bobo', '', '2021-10-28 01:28:06', '2021-10-30 01:28:06', ''),
(3, 'OJO EL BUZO DE MELISA', 'HOY nos muestra su buzxo fluo', 'Melisa trajo un buzo que encandila a la gente', '', '2021-10-20 01:29:03', '2021-10-24 01:29:03', ''),
(4, 'ESTAFA EN PINAMAR', 'Alumnos estafan a docente de PRDISC prometiendo los abm en tiempo y forma', 'ellos prometieron y no cumplieron copn lo pactada y recargaron todo el trabajo en Aylen', '', '2021-10-24 01:30:02', '2021-10-26 01:30:02', ''),
(5, 'ESCANDALO EN LA EEST', 'corta', 'larga', '_postaslider3_TOTAL.png', '2021-11-23 00:00:00', '2021-11-23 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `idprofesor` int(11) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `dni` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`idprofesor`, `apellido`, `nombre`, `dni`) VALUES
(1, 'MORRONGO', 'SEBASTIAN', '11111111'),
(2, 'PEREZ', 'MARIA', '22222222'),
(3, 'GONZALEZ', 'DELIA', '33333333'),
(4, 'LOPEZ', 'JOSE', '44444444'),
(5, 'FERNANDEZ', 'EDELMIRA', '55555555'),
(6, 'GOMEZ', 'NORBERTO', '66666666'),
(7, 'BIANCHI', 'ERNESTINA', '77777777'),
(8, 'ARIZMENDI', 'JUAN', '88888888'),
(9, 'LORENZO', 'JUANA', '99999999');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesoresxmesa`
--

CREATE TABLE `profesoresxmesa` (
  `idmesa` int(11) NOT NULL,
  `idprofesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesoresxmesa`
--

INSERT INTO `profesoresxmesa` (`idmesa`, `idprofesor`) VALUES
(1, 2),
(1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposinstancia`
--

CREATE TABLE `tiposinstancia` (
  `idtipoinstancia` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tiposinstancia`
--

INSERT INTO `tiposinstancia` (`idtipoinstancia`, `nombre`) VALUES
(1, 'PREVIOS DICIEMBRE'),
(2, 'REGULARES DICIEMBRE'),
(3, 'PREVIOS FEBRERO'),
(4, 'REGULARES FEBRERO'),
(5, 'PREVIOS AGOSTO'),
(6, 'REGULARES AGOSTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `idturno` int(11) NOT NULL,
  `nombreturno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`idturno`, `nombreturno`) VALUES
(1, 'MAÑANA'),
(2, 'TARDE'),
(3, 'VESPERTINO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anios`
--
ALTER TABLE `anios`
  ADD PRIMARY KEY (`anio`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcurso`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`idcurso`,`idturno`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`idmateria`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`idmesa`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idnoticia`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`idprofesor`);

--
-- Indices de la tabla `profesoresxmesa`
--
ALTER TABLE `profesoresxmesa`
  ADD PRIMARY KEY (`idmesa`,`idprofesor`);

--
-- Indices de la tabla `tiposinstancia`
--
ALTER TABLE `tiposinstancia`
  ADD PRIMARY KEY (`idtipoinstancia`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`idturno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
