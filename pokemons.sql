-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2018 a las 17:32:36
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
('Bulbasaur', 'https://pokeguide.neocities.org/Pic/grassicon.png', 'https://vignette.wikia.nocookie.net/es.pokemon/images/b/b2/Macho.png/revision/latest?cb=20140217232917', 'https://vignette.wikia.nocookie.net/es.pokemon/images/4/43/Bulbasaur.png/revision/latest/scale-to-width-down/700?cb=20170120032346'),
('Charizard', 'https://pokeguide.neocities.org/Pic/fireicon.png', 'https://vignette.wikia.nocookie.net/es.pokemon/images/b/b2/Macho.png/revision/latest/scale-to-width-down/17?cb=20140217232917', 'https://vignette.wikia.nocookie.net/es.pokemon/images/9/95/Charizard.png/revision/latest/scale-to-width-down/700?cb=20180325003352'),
('Pikachu', 'https://pokeguide.neocities.org/Pic/electricicon.png', 'https://vignette.wikia.nocookie.net/es.pokemon/images/b/b2/Macho.png/revision/latest/scale-to-width-down/17?cb=20140217232917', 'https://vignette.wikia.nocookie.net/es.pokemon/images/7/77/Pikachu.png/revision/latest/scale-to-width-down/700?cb=20150621181250');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
