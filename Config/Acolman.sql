-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-11-2021 a las 03:07:48
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Acolman`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Bancos`
--

CREATE TABLE `Bancos` (
  `Id` int(50) NOT NULL COMMENT 'Indice de la tabla',
  `Bancos` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Bancos aceptados'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla de bancos';

--
-- Volcado de datos para la tabla `Bancos`
--

INSERT INTO `Bancos` (`Id`, `Bancos`) VALUES
(1, 'Banco Azteca'),
(2, 'BanCoppel '),
(3, 'Banjercito'),
(4, 'Oxxo'),
(5, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `Id` int(100) NOT NULL COMMENT 'Es el ID que se genera para cada usuario',
  `Nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'El nombre del Usuario',
  `Apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'El Apellido del usuario',
  `Edad` int(10) NOT NULL COMMENT 'La edad del Usuario',
  `Telefono` int(20) NOT NULL COMMENT 'El Telefono del usuario, esto para comunicarnos',
  `Email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electronico del usuario',
  `Fecha` date NOT NULL COMMENT 'La fecha en que el cliente hara su estancia',
  `Pago` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'El metodo de ago ',
  `No_Cuenta` int(20) NOT NULL COMMENT 'Campo para ingresar el numero e cuenta del usuario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci COMMENT='Tabla correspondiente a los datos del usuario';

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`Id`, `Nombre`, `Apellido`, `Edad`, `Telefono`, `Email`, `Fecha`, `Pago`, `No_Cuenta`) VALUES
(1, 'Rodrigo', 'palma', 23, 551412, 'rodrigo', '2021-11-17', '', 2555),
(2, 'Rodrigo', 'palma', 23, 551412, 'rodrigo', '2021-11-17', '', 2555),
(3, 'Rodrigo', 'Palma', 23, 5526721, 'rodrigopalma98@outlook.com', '2021-11-25', 'Oxxo', 12345),
(4, 'azael', 'Ortiz', 21, 55342672, 'uhss@outlook.com', '2021-11-08', 'Banjercito', 23131331),
(5, 'marselo', 'rias', 45, 55342672, 'marselo@gmail.com', '2021-11-23', 'BanCoppel', 12456);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Bancos`
--
ALTER TABLE `Bancos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Bancos`
--
ALTER TABLE `Bancos`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT COMMENT 'Indice de la tabla', AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT COMMENT 'Es el ID que se genera para cada usuario', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
