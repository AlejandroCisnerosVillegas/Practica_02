-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 20:01:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `general`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poject_15_productos`
--

CREATE TABLE `poject_15_productos` (
  `imagen` varchar(50) DEFAULT NULL,
  `codigo` varchar(5) DEFAULT NULL,
  `producto` varchar(50) DEFAULT NULL,
  `precio` decimal(4,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `poject_15_productos`
--

INSERT INTO `poject_15_productos` (`imagen`, `codigo`, `producto`, `precio`, `stock`) VALUES
('silla', '46213', 'Silla', 4.00, 10),
('radio', '46212', 'Radio', 5.00, 1),
('mesa', '46210', 'Mesa', 12.00, 10),
('tv', '46211', 'TV', 20.00, 3),
('sofa', '46214', 'Sofa', 24.00, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
