-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2018 a las 03:22:47
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokemons`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(256) NOT NULL,
  `genero` varchar(256) NOT NULL,
  `imagen` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`nombre`, `tipo`, `genero`, `imagen`) VALUES
('Bulbasaur', 'Planta', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/4/43/Bulbasaur.png/revision/latest/scale-to-width-down/700?cb=20170120032346'),
('Charizard', 'Fuego', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/9/95/Charizard.png/revision/latest/scale-to-width-down/700?cb=20180325003352'),
('Eevee', 'Normal', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/f/f2/Eevee.png/revision/latest/scale-to-width-down/700?cb=20150621181400'),
('Jigglypuff', 'Hada', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/a/af/Jigglypuff.png/revision/latest/scale-to-width-down/700?cb=20150110232910'),
('Magikarp', 'Agua', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/0/01/Magikarp.png/revision/latest?cb=20080720115734'),
('Meowth', 'Normal', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/9/99/Meowth.png/revision/latest/scale-to-width-down/700?cb=20160904210550'),
('Mewtwo', 'Psiquico', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/d/d3/Mewtwo.png/revision/latest/scale-to-width-down/700?cb=20150621180327'),
('Pikachu', 'Electrico', '', 'https://vignette.wikia.nocookie.net/es.pokemon/images/7/77/Pikachu.png/revision/latest/scale-to-width-down/700?cb=20150621181250');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `estado` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `estado`) VALUES
(1, 'hola@gmail.com', 'hola', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
