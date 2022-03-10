-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-03-2022 a las 03:35:36
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `examen1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_datos`
--

CREATE TABLE `t_datos` (
  `id` int(11) NOT NULL,
  `sueldo` int(11) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `antiguedad` varchar(255) NOT NULL,
  `php` tinyint(1) NOT NULL,
  `asp` tinyint(1) NOT NULL,
  `vb` tinyint(1) NOT NULL,
  `java` tinyint(1) NOT NULL,
  `oracle` tinyint(1) NOT NULL,
  `bd` tinyint(1) NOT NULL,
  `bono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_datos`
--

INSERT INTO `t_datos` (`id`, `sueldo`, `edad`, `sexo`, `nacionalidad`, `antiguedad`, `php`, `asp`, `vb`, `java`, `oracle`, `bd`, `bono`) VALUES
(1, 5000, 45, 'No especifico', 'Nacional', '1 a 5 años', 1, 1, 1, 1, 1, 1, 5100),
(2, 15500, 45, 'Femenino', 'Nacional', '1 a 5 años', 0, 0, 0, 0, 0, 0, 15810),
(3, 9000, 62, 'Masculino', 'Seleecionar nacionalidad...', 'Más de 10 años', 0, 0, 1, 0, 0, 1, 9180);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_datos`
--
ALTER TABLE `t_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
