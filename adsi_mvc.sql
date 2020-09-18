-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2020 a las 02:15:56
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adsi_mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `password` char(60) NOT NULL DEFAULT '',
  `level` tinyint(3) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `lastAccess` datetime DEFAULT NULL,
  `session` varchar(32) NOT NULL DEFAULT '',
  `avatar` varchar(15) NOT NULL DEFAULT '',
  `timeStamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `active`, `lastAccess`, `session`, `avatar`, `timeStamp`) VALUES
(1, 'SYSTEM ADMINISTRATOR', 'administrator@academicoplus.net', 'SGJXSVlWV1JBYVR4eWZWOFp0dHRxUT09', 32, 1, '2020-06-22 11:54:10', '2ld5228j8ckmfu4lmeu6gb118t', 'user_41.png', '2020-06-22 16:54:10'),
(2, 'VICTOR NIETO OLIVO', 'vnieto26@msn.com', 'VENwL29XWG96cEhBZDdCMG1vVGxpZz09', 4, 1, '2020-06-19 09:30:28', '642700e1a086199828fb0a51c9f1b85c', 'user_13.png', '2020-06-20 02:30:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
