-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-07-2022 a las 16:45:26
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `card`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `usuario`, `nombre`, `clave`) VALUES
(1, 'admin', 'Alan Negrette', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(15, 'Pantalones'),
(16, 'Remeras'),
(17, 'Zapatillas'),
(18, 'Buzos'),
(19, 'Camperas'),
(20, 'Gorros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio_normal` decimal(10,2) NOT NULL,
  `precio_rebajado` decimal(10,2) NOT NULL,
  `cantidad` int NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `id_categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio_normal`, `precio_rebajado`, `cantidad`, `imagen`, `id_categoria`) VALUES
(19, 'Gorro Nike', 'Gorro Nike ', '100.00', '80.00', 10, '20220712141322.jpg', 20),
(20, 'Buzo Damp Brothers', 'Buzo Damp Brothers', '5000.00', '4999.00', 14, '20220712141613.jpg', 18),
(22, 'Campera Glaciar', 'Campera Glaciar Hombre', '4000.00', '4000.00', 6, '20220712142758.jpg', 19),
(23, 'Zapatillas New Balance', 'Zapatillas new balance de hombre, verdes', '8000.00', '7800.00', 7, '20220712143117.jpg', 17),
(24, 'Remera Lisa Negra', 'Remera lisa negra new balance', '2000.00', '2000.00', 7, '20220712143336.jpg', 16),
(25, 'Pantalon Cargo ', 'Pantalon cargo negreo de hombre ', '3500.00', '3400.00', 5, '20220712144020.jpg', 15),
(26, 'prueba', 'prueba', '1000.00', '12.00', 10, '20220712155922.jpg', 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`) VALUES
(36, 'sdasdasdasd', 'sadasdasdada@gmail.com'),
(37, 'elmacabro23', 'macabro@gmail.com'),
(38, 'dasdsa', 'pebete@gmail.com'),
(39, 'adada21312d', '215155@gmail.com'),
(40, 'asdada', 'holahola3123@gmail.com'),
(41, 'asdasdasdasdas', '31231283128@gmail.com'),
(42, 'asdasdasdasd@gmail.com', '12312312@gmail.com'),
(43, 'dssadasdas', 'holahola@gmail.com'),
(44, 'alan', 'negrettealan2222@gmail.com'),
(45, 'adasdasdsadsadasd', 'dkasdjasodasd@gmail.com'),
(46, 'sdasdasdasd', '9dasjdasdk@gmail.com'),
(47, 'alan', 'kapoalan4@gmail.com'),
(48, 'sdasdasdasd', '9dasjd2asdk@gmail.com'),
(49, 'sdasdasdasd', '12312n3j12n3j12kn@gmail.com'),
(50, 'ajsdaskdasj', 'asdjsaudsa@gmail.com'),
(51, 'asdasdasdas', '231312dasd@gmail.com'),
(52, 'asdasdasdasdasdas', '231321rdasdsa3@gmail.com'),
(53, 'dasdas', '312312312@gmail.com'),
(69, 'dasdasd', '1312125@gmail.com'),
(76, 'dasdasdas', 'mdaoame@gmail.com'),
(165, 'dasdasdas', 'masdskado12@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
