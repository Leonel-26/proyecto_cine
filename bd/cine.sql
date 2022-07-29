-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2022 a las 23:49:34
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
-- Base de datos: `cine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id` int(11) NOT NULL,
  `pelicula` varchar(175) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id`, `pelicula`, `precio`) VALUES
(16, 'JURASSIC WORLD', 2.99),
(17, 'LIGHT YEAR', 3.5),
(18, 'TELÉFONO NEGRO ', 4),
(19, 'EL CUARTO 666', 5),
(20, 'THOR: AMOR Y TRUENO', 3.99),
(21, 'MINIONS: NACE UN VILLANO', 4.5),
(22, 'INVOCANDO AL DEMONIO', 3),
(23, 'ELVIS', 5.5),
(24, 'DOG: UN VIAJE SALVAJE', 4.99),
(25, 'LA MOMIA', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` int(10) NOT NULL,
  `fecha_nac` date NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombres`, `apellidos`, `cedula`, `fecha_nac`, `edad`, `sexo`, `direccion`, `telefono`, `correo`, `contraseña`) VALUES
(21, 'Galinda Inès', 'Chavèz Arcentales', 1315752678, '1960-08-14', 62, 'Femenino', 'Montecristi', 998823456, 'ines60@gmail.com', '123456789'),
(22, 'Samantha Michelle', 'Zambrano Zambrano', 1314782366, '1998-05-23', 24, 'Femenino', 'Chone', 939877207, 'smzz230598@gmail.com', '12345'),
(23, 'Gloria Kassandra', 'Vargas Delgado', 1314782358, '1997-06-19', 25, 'Femenino', 'Guayaquil', 994567393, 'kassy97@gmail.com', 'Kassy97'),
(24, 'Cristopher Damiàn', 'Lopèz Chavèz', 1314797929, '1995-08-07', 26, 'Masculino', 'Manta', 997847383, 'cris-95@gmail.com', '987654 '),
(25, 'Lorena Fabricia', 'Zambrano Zambrano', 1314764567, '1950-11-22', 72, 'Femenino', 'Chone', 976558363, 'lorena50@gmail.com', 'lorena50'),
(26, 'Carlos Victor', 'Lopèz Loor', 1314567324, '1955-03-19', 67, 'Masculino', 'Portoviejo', 974638892, 'cvll-67@gmail.com', '284610'),
(27, 'Jesus Mateo', 'Palma Lopèz', 1314719745, '1990-04-28', 32, 'Masculino', 'Guayaquil', 978375637, 'jesus-90@gmail.com', 'jesus90'),
(28, 'Cristhian Alejandro', 'Baque Nuñez', 1315677886, '1987-10-03', 35, 'Masculino', 'Manta', 946834628, 'cris-1987@gmail.com', '0946834628'),
(29, 'Mayra Magdalena', 'Velèz Zambrano', 1314734674, '1980-07-22', 42, 'Femenino', 'Jipijapa', 987842632, 'mayra-42@gmail.com', 'mayra1980'),
(30, 'Walter Rolando', 'Palma Delgado', 1313455322, '1953-01-09', 69, 'Masculino', 'Jipijapa', 976246482, 'wrpd-1953@gmail.com', 'delgado53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `cedula` int(10) NOT NULL,
  `edad` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `pelicula` varchar(255) NOT NULL,
  `fecha_reser` varchar(255) NOT NULL,
  `sala` varchar(255) NOT NULL,
  `asientos` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `fpago` varchar(255) NOT NULL,
  `asientosSel` varchar(75) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `nombres`, `apellidos`, `cedula`, `edad`, `ciudad`, `pelicula`, `fecha_reser`, `sala`, `asientos`, `precio`, `fpago`, `asientosSel`, `total`) VALUES
(96, 'Galinda Inès', 'Chavèz Arcentales', 1315752678, '62', 'Jipijapa', 'JURASSIC WORLD', '2022-07-27', 'Normal', '4', '2.99', 'Debito', 'A1, A2, A3, A4', 11.72),
(97, 'Samantha Michelle', 'Zambrano Zambrano', 1314782366, '24', 'Chone', 'LIGHT YEAR', '2022-07-27', 'VIP', '3', '3.5', 'Debito', 'C6, C7, C8', 10.29),
(99, 'Gloria Kassandra 	', 'Vargas Delgado', 1314782358, '25', 'Guayaquil', 'TELÉFONO NEGRO ', '2022-07-27', 'Normal', '2', '4', 'Transferencia', 'C1, C2', 8),
(100, 'Cristopher Damiàn', 'Lopèz Chavèz', 1314797929, '26', 'Jipijapa', 'EL CUARTO 666', '2022-07-28', 'VIP', '2', '5', 'Debito', 'F8, F9', 10),
(101, 'Lorena Fabricia', 'Zambrano Zambrano', 1314764567, '72', 'Chone', 'THOR: AMOR Y TRUENO', '2022-07-28', 'Normal', '4', '3.99', 'Transferencia', 'H1, H2, H3, H4', 7.66),
(102, 'Carlos Victor', 'Lopèz Loor', 1314567324, '67', 'Jipijapa', 'MINIONS: NACE UN VILLANO', '2022-07-28', 'Normal', '3', '4.5', 'Debito', 'G7, G8, G9', 6.48),
(103, 'Jesus Mateo 	', 'Palma Lopèz', 1314719745, '32', 'Guayaquil', 'INVOCANDO AL DEMONIO', '2022-07-28', 'Normal', '3', '3', 'Transferencia', 'E1, E2, E3', 8.82),
(104, 'Cristhian Alejandro', 'Baque Nuñez', 1315677886, '35', 'Jipijapa', 'ELVIS', '2022-07-29', 'VIP', '5', '5.5', 'Transferencia', 'D1, D2, D3, D4, D5', 26.95),
(107, 'Mayra Magdalena', 'Velèz Zambrano', 1314734674, '42', 'Jipijapa', 'DOG: UN VIAJE SALVAJE', '2022-07-29', 'VIP', '2', '4.99', 'Debito', 'B7, B8', 9.98),
(108, 'Walter Rolando', 'Palma Delgado', 1313455322, '69', 'Jipijapa', 'LA MOMIA', '2022-07-29', 'Normal', '4', '5', 'Debito', 'H8, H9, H10, H11', 9.6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sesion`
--

CREATE TABLE `sesion` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sesion`
--

INSERT INTO `sesion` (`id`, `correo`, `contraseña`) VALUES
(11, 'ines60@gmail.com', '123456789'),
(12, 'smzz230598@gmail.com', '12345'),
(13, 'kassy97@gmail.com', 'Kassy97'),
(14, 'cris-95@gmail.com', '987654'),
(15, 'lorena50@gmail.com', 'lorena50'),
(16, 'cvll-67@gmail.com', '284610'),
(17, 'jesus-90@gmail.com', 'jesus90'),
(18, 'cris-1987@gmail.com', '0946834628'),
(19, 'mayra-42@gmail.com', 'mayra1980'),
(20, 'wrpd-1953@gmail.com', 'delgado53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sesion`
--
ALTER TABLE `sesion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `sesion`
--
ALTER TABLE `sesion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
