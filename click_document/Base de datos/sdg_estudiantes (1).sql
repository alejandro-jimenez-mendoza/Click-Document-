-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2023 a las 21:41:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sdg_estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_ingreso`
--

CREATE TABLE `bitacora_ingreso` (
  `id` int(11) NOT NULL,
  `correo_electronico_b` varchar(1000) NOT NULL,
  `dependencia_b` varchar(150) NOT NULL,
  `hora_b` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `bitacora_ingreso`
--

INSERT INTO `bitacora_ingreso` (`id`, `correo_electronico_b`, `dependencia_b`, `hora_b`) VALUES
(5, 'gyasirdavid@gmail.com', 'Administrador', '2323-10-03 04:10:03.000000'),
(6, 'dalvarezh@unicartagena.edu.co', 'Estudiante', '2023-10-03 04:14:17.000000'),
(7, 'gyasirdavid@gmail.com', 'Estudiante', '2023-10-03 09:19:16.000000'),
(8, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-03 09:23:27.000000'),
(9, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-03 12:22:26.000000'),
(10, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-03 12:25:33.000000'),
(11, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-03 12:27:11.000000'),
(12, 'dalvarezh@unicartagena.edu.co', 'Estudiante', '2023-10-07 02:36:37.000000'),
(13, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-07 02:37:15.000000'),
(14, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-07 02:37:33.000000'),
(15, 'dalvarezh@unicartagena.edu.co', 'Estudiante', '2023-10-07 03:20:08.000000'),
(16, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-07 03:37:57.000000'),
(17, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-18 05:34:38.000000'),
(18, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-21 09:51:17.000000'),
(19, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-21 02:32:52.000000'),
(20, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-21 02:45:06.000000'),
(21, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-21 02:55:26.000000'),
(22, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-25 10:26:15.000000'),
(23, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-25 05:18:17.000000'),
(24, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 10:24:36.000000'),
(25, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 10:48:26.000000'),
(26, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 11:40:47.000000'),
(27, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 11:46:03.000000'),
(28, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 11:50:54.000000'),
(29, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 12:02:43.000000'),
(30, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 12:03:33.000000'),
(31, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 05:38:23.000000'),
(32, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 05:57:48.000000'),
(33, 'gyasirdavid@gmail.com', 'Estudiante', '2023-10-26 06:05:04.000000'),
(34, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-10-26 06:05:26.000000'),
(35, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-26 06:13:23.000000'),
(36, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-10-26 06:14:24.000000'),
(37, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-27 02:16:11.000000'),
(38, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-27 02:16:20.000000'),
(39, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-10-27 02:17:41.000000'),
(40, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-27 03:32:53.000000'),
(41, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-27 03:33:07.000000'),
(42, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-28 10:30:44.000000'),
(43, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-10-28 10:31:38.000000'),
(44, 'gyasirdavid@gmail.com', 'Estudiante', '2023-10-28 10:36:01.000000'),
(45, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-28 10:36:10.000000'),
(46, 'gyasirdavid@gmail.com', 'Administrador', '2023-10-28 10:36:26.000000'),
(47, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-10-28 11:41:47.000000'),
(48, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-10-28 11:57:02.000000'),
(49, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-11-01 08:28:40.000000'),
(50, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-11-04 10:16:02.000000'),
(51, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-11-04 01:35:31.000000'),
(52, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-04 01:40:02.000000'),
(53, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-04 01:42:31.000000'),
(54, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-04 01:46:40.000000'),
(55, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-04 02:19:23.000000'),
(56, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-04 02:19:30.000000'),
(57, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-11-04 02:21:10.000000'),
(58, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-11-04 02:23:39.000000'),
(59, 'rmejiam2@unicartagena.edu.co', 'Administrador', '2023-11-04 02:26:47.000000'),
(60, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-04 03:14:15.000000'),
(61, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-06 01:36:22.000000'),
(62, 'gyasirdavid@gmail.com', 'Administrador', '2023-11-06 02:48:27.000000'),
(63, 'ygarciap2@unicartagena.edu.co', 'Estudiante', '2023-11-06 03:11:10.000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_estudiantes`
--

CREATE TABLE `registro_estudiantes` (
  `nombres_e` text NOT NULL,
  `apellidos_e` text NOT NULL,
  `f_nacimiento_e` date NOT NULL,
  `cod_estudiantil` varchar(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `telefono_e` varchar(255) NOT NULL,
  `email_e` mediumtext NOT NULL,
  `ct_tutorial` varchar(150) NOT NULL,
  `documento` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registro_estudiantes`
--

INSERT INTO `registro_estudiantes` (`nombres_e`, `apellidos_e`, `f_nacimiento_e`, `cod_estudiantil`, `descripcion`, `telefono_e`, `email_e`, `ct_tutorial`, `documento`) VALUES
('Carlos Emilio', 'Ruiz', '2023-11-15', '7522110019', 'estudiante activo semestre 6 ', '3014643634', 'carlos@gmail.com', 'Cereté', ''),
('Alejandro ', 'Jimenez Mendoza', '2023-10-03', '7522120006', 'dhdshdshsddshdsh', '3205289012', 'alejandromendoza200312@gmail.com', 'San Juan Nepomuceno', ''),
('Yasir David', 'Garcia Peña', '2005-01-03', '7522120009', 'Estudiante 5to semestre ingeniería de software', '3178242119', 'ygarciap2@unicartagena.edu.co', 'Cereté', 'descargar-plantilla.docx'),
('Miguel', 'Lopez', '2023-10-25', '7522120011', 'estudiante activo', '2342343', 'migueohi292@gmail.com', 'Cereté', 'Inscripción al seminario de investigación..pdf'),
('pedro', 'sanches', '2023-10-30', '7522120020', 'hhfjjjkct', '322678598', 'psanches@gmail.com', 'Cereté', ''),
('Diego Alejandro', 'Alvarez Hernandez', '2023-09-06', '7522120035', 'my name is diego alvarez', '3216785996', 'dalvarezh@unicartagena.edu.co', 'San Juan Nepomuceno', 'universidad-de-cartagena-colombia-colores-planos-logo-29D4150EAF-seeklogo.com.png'),
('samir ', 'valencia', '2023-10-04', '7522120045', 'dada', '2213123', 'samirvalencia@gmail.com', 'San Juan Nepomuceno', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_admin`
--

CREATE TABLE `r_admin` (
  `id` int(11) NOT NULL,
  `correo_electronico` varchar(535) NOT NULL,
  `contrasena_a` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `r_admin`
--

INSERT INTO `r_admin` (`id`, `correo_electronico`, `contrasena_a`) VALUES
(1, 'gyasirdavid@gmail.com', 'admin_yasir'),
(2, 'rmejiam2@unicartagena.edu.co', 'ricardo_admin'),
(3, 'cipaqueen@gmail.com', 'cipaqueen8080');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora_ingreso`
--
ALTER TABLE `bitacora_ingreso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro_estudiantes`
--
ALTER TABLE `registro_estudiantes`
  ADD PRIMARY KEY (`cod_estudiantil`);

--
-- Indices de la tabla `r_admin`
--
ALTER TABLE `r_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora_ingreso`
--
ALTER TABLE `bitacora_ingreso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `r_admin`
--
ALTER TABLE `r_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
