-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net

--
-- Servidor: localhost
-- Tiempo de generación: 07-05-2020 a las 10:27:18
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `clientes` (
`id_clientes` int(11) NOT NULL,
`full_name` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`number_phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
`direccion` varchar(120) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `clientes`
ADD PRIMARY KEY (`id_clientes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `clientes`
MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;