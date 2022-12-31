-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-12-2022 a las 04:31:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sofka`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naves`
--

CREATE TABLE `naves` (
  `idNave1` int(11) NOT NULL,
  `idRelacional` varchar(200) NOT NULL,
  `tipoAtributo` text NOT NULL,
  `atributo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `naves`
--

INSERT INTO `naves` (`idNave1`, `idRelacional`, `tipoAtributo`, `atributo`) VALUES
(38, '75768', 'Velocidad', '34'),
(39, '38506', 'Velocidad', '78'),
(40, '33157', 'Capacidad', '3 personas'),
(41, '14473', 'Capacidad', '2 personas'),
(42, '14539', 'Capacidad', '3 personas'),
(43, '58543', 'Origen', 'Estados unidos'),
(44, '24488', 'Origen', 'Estados unidos'),
(45, '74721', 'Velocidad', '12.4'),
(46, '86434', 'Capacidad', '23 personas'),
(47, '96698', 'Destino', 'Saturno'),
(48, '21337', 'Velocidad', '12'),
(49, '89128', 'Capacidad', '3 personas'),
(50, '10768', 'Origen', 'China'),
(51, '42467', 'Velocidad', '12'),
(52, '98456', 'Capacidad', '12 personas'),
(53, '95871', 'Destino', 'Saturno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `idVehiculos` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `altura` varchar(30) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `combustible` text NOT NULL,
  `pais` text NOT NULL,
  `idRelacionVehiculo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`idVehiculos`, `nombre`, `altura`, `peso`, `combustible`, `pais`, `idRelacionVehiculo`) VALUES
(42, 'Nave 2.2', '45', '90', 'Petroleo', 'EE UU', '75768'),
(43, 'Nave 2.3', '56', '12', 'Nitrogeno', 'España', '38506'),
(44, 'Nave 3.1', '23', '89', 'Oxigeno liquido', 'China', '33157'),
(45, 'Nave 3.2', '23', '231', 'Oxigeno liquido', 'Argentina', '14473'),
(46, 'Nave 3.3', '23', '121', 'Oxigeno liquido', 'EE UU', '14539'),
(47, 'Nave 1.4', '23', '23 kg', 'Oxigeno liquido', 'España', '58543'),
(48, 'Nave 1.5', '23', '12', 'Oxigeno', 'España', '24488'),
(49, 'Nave 2.4', '23.2', '78', 'Petroleo', 'Colombia', '74721'),
(50, 'Nave 3', '12', '12', 'Petroleo', 'Colombia', '86434'),
(51, 'Nave 4.5', '12', '90', 'Petroleo', 'Colombia', '96698'),
(52, 'Nave 2.9', '23', '23', 'Petroleo', 'EE UU', '21337'),
(53, 'Nave 3.9', '23', '23', 'Petroleo', 'colombia', '89128'),
(54, 'Nave 1-0', '12', '12', 'Petroleo', 'Colombia', '10768'),
(55, 'Nave 2.9', '12', '12', 'Oxigeno liquido', 'EE UU', '42467'),
(56, 'Nave 3.9', '12', '12', 'Petroleo', 'Argentina', '98456'),
(57, 'Nave 4.5', '12 CM', '9KG', 'Petroleo', 'EE UU', '95871');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `naves`
--
ALTER TABLE `naves`
  ADD PRIMARY KEY (`idNave1`),
  ADD KEY `id_relacional_nave1` (`idRelacional`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`idVehiculos`),
  ADD KEY `id_relacional_vehiculos` (`idRelacionVehiculo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `naves`
--
ALTER TABLE `naves`
  MODIFY `idNave1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `idVehiculos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `naves`
--
ALTER TABLE `naves`
  ADD CONSTRAINT `naves_ibfk_1` FOREIGN KEY (`idRelacional`) REFERENCES `vehiculos` (`idRelacionVehiculo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
