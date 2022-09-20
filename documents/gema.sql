-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2022 a las 15:35:28
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
-- Base de datos: `gema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revisores`
--

CREATE TABLE `revisores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `revisores`
--

INSERT INTO `revisores` (`id`, `nombre`, `apellido`) VALUES
(1, 'Nombre', 'Revisor1'),
(2, 'Nombre', 'Revisor2'),
(3, 'Nombre', 'Revisor3'),
(4, 'Nombre', 'Revisor4'),
(5, 'Nombre', 'Revisor5'),
(6, 'Nombre', 'Revisor6'),
(7, 'Nombre', 'Revisor7'),
(8, 'Nombre', 'Revisor8');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuarios`
--

CREATE TABLE `tm_usuarios` (
  `Email` varchar(50) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Codigo` int(1) NOT NULL,
  `Revisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tm_usuarios`
--

INSERT INTO `tm_usuarios` (`Email`, `Nombre`, `Apellido`, `Codigo`, `Revisor`) VALUES
('juan234@loquesea.com', 'Juan', 'Garcia', 1, 2),
('juan234@loquesea.com', 'Juan', 'Perez', 1, 3),
('juan234@loquesea.com', 'Rodrigo', 'Perez', 1, 5),
('juan324@loquesea.com', 'Juan', 'Perz', 1, 6),
('juan15@loquesea.com', 'Juan', 'Perez', 2, 7),
('juan11@loquesea.com', 'Juan', 'Perez', 2, 2),
('juan12@loquesea.com', 'Juan', 'Garzon', 2, 3),
('juan0@loquesea.com', 'Juan', 'Perez', 3, 5),
('juan9@loquesea.com', 'Julián', 'Perez', 3, 5),
('juan9@loquesea.com', 'Roberto', 'Perez', 3, 4),
('juan8@loquesea.com', 'Juan', 'Perez', 3, 7),
('juan7@loquesea.com', 'Juan', 'Perea', 1, 6),
('juan6@loquesea.com', 'Juan', 'Perez', 3, 2),
('juan5@loquesea.com', 'Pedro', 'Perez', 1, 3),
('juan4@loquesea.com', 'Andrés', 'Perez', 3, 2),
('juan3@loquesea.com', 'Juan', 'Borre', 1, 1),
('juan2@loquesea.com', 'Juan', 'Perez', 3, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `revisores`
--
ALTER TABLE `revisores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tm_usuarios`
--
ALTER TABLE `tm_usuarios`
  ADD KEY `Revisor` (`Revisor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `revisores`
--
ALTER TABLE `revisores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tm_usuarios`
--
ALTER TABLE `tm_usuarios`
  ADD CONSTRAINT `tm_usuarios_ibfk_1` FOREIGN KEY (`Revisor`) REFERENCES `revisores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
