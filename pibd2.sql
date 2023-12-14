-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2023 a las 19:17:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pibd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE `albumes` (
  `idAlbum` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`idAlbum`, `titulo`, `descripcion`, `usuario`) VALUES
(1, 'carl', 'im just carl', 1),
(2, 'Bob espoja emo', 'album bob espoja emo', 2),
(3, 'perrosmasfeosqueunamierda', 'Perros feos, tontos, asquerosos y con mala hostia', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos`
--

CREATE TABLE `estilos` (
  `idEstilo` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `fichero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estilos`
--

INSERT INTO `estilos` (`idEstilo`, `nombre`, `descripcion`, `fichero`) VALUES
(1, 'default', 'Tema por defecto', 'style.css'),
(2, 'Tema oscuro', 'Tema con colores oscuros', 'dark_style.css'),
(3, 'Estilo de impresión', 'Estilo simplificado para facilitar la impresión', 'imp_style.css'),
(4, 'Estilo de fuente grande', 'Estilo ampliado para facilitar la lectura', 'hf_style.css'),
(5, 'Estilo de alto contraste', 'Estilo con colores alterados para aumentar la legibilidad', 'hc_style.css'),
(6, 'Estilo de alto contraste y fuente ampliada', 'Estilo combinando alto contraste y fuente ampliada para la máxima legibilidad', 'hcf_style.css');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `idFoto` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` date NOT NULL,
  `pais` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `fichero` text NOT NULL,
  `alternativo` text NOT NULL,
  `fRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`idFoto`, `titulo`, `descripcion`, `fecha`, `pais`, `album`, `fichero`, `alternativo`, `fRegistro`) VALUES
(10, 'Carl-man', 'Im just Carl', '2023-11-15', 6, 1, 'carl-man.png', 'carl-man', '2023-11-30 18:42:45'),
(11, 'Carl-woman', 'Carl elástico', '2023-11-11', 4, 1, 'carl-woman.webp', 'carl-elastigirl', '2023-11-30 18:42:45'),
(12, 'Bob esponja emo', 'Pobresito moviesponja, ta triste', '2023-11-05', 5, 2, 'emo-spongebob.gif', 'bob esponja emo', '2023-11-30 18:42:45'),
(13, 'Chinochin bebelin', 'Chinochin bebelin de parte de julito', '2023-08-17', 2, 2, 'chino.png', 'chino.png', '2023-11-30 19:26:03'),
(14, 'Steve Harvey', 'Señor patata Steve Harvey', '2024-01-18', 4, 2, 'don-papa.jpg', 'don-papa.jpg', '2023-11-30 19:27:59'),
(15, 'Don pollo', 'Quien quiela peldel su tiempo que lo pielda, yo me via come ete pollo, en 3 minuto', '2023-11-19', 4, 1, 'donpollo.jpg', 'donpollo.jpg', '2023-11-30 22:31:08'),
(16, 'Pablo Motos', 'Que entre la china', '1945-11-20', 3, 2, 'pablomotos.jpg', 'pablomotos.jpg', '2023-11-30 22:31:08'),
(17, 'Pou', 'Un gnomo estaba andando encima do asfalto', '2023-11-29', 7, 2, 'pou.png', 'pou.png', '2023-11-30 22:31:08'),
(18, 'Torrente no hay mas que uno', 'Mucho moro', '2013-08-19', 3, 1, 'santiago-segura.jpg', 'santiago-segura.jpg', '2023-11-30 22:31:08'),
(19, 'Shrek - Minion', 'Tulepera con la papaya', '2023-11-26', 10, 2, 'shrek-minion.png', 'shrek-minion.png', '2023-11-30 22:31:08'),
(20, '._.', 'º-º', '2023-06-23', 1, 1, 'unknown.png', 'unknown.png', '2023-11-30 22:31:08'),
(21, 'perro milei', 'el puto perro milei', '2023-12-05', 8, 3, 'perro (3).jpg', '', '2023-12-14 17:30:57'),
(22, 'perro feo de cojones', 'que dos hostias tiene el perro', '2023-12-11', 3, 3, 'perro (1).jpg', '', '2023-12-14 17:30:57'),
(23, 'zurullo', 'no doy más info que vomito', '2023-12-05', 5, 3, 'perro (2).jpg', '', '2023-12-14 17:31:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `idPais` int(11) NOT NULL,
  `nomPais` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idPais`, `nomPais`) VALUES
(1, 'Alemania'),
(2, 'China'),
(3, 'España'),
(4, 'Estados Unidos'),
(5, 'Francia'),
(6, 'Grecia'),
(7, 'Italia'),
(8, 'México'),
(9, 'Rusia'),
(10, 'Ucrania');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitudes`
--

CREATE TABLE `solicitudes` (
  `idSolicitud` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `email` text NOT NULL,
  `direccion` text NOT NULL,
  `color` text NOT NULL,
  `copias` int(11) NOT NULL,
  `resolucion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `iColor` tinyint(1) NOT NULL,
  `fRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `coste` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomUsuario` text NOT NULL,
  `clave` text NOT NULL,
  `email` text NOT NULL,
  `sexo` tinyint(4) NOT NULL,
  `fNacimiento` date NOT NULL,
  `ciudad` text NOT NULL,
  `pais` int(11) NOT NULL,
  `foto` text NOT NULL,
  `fRegistro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomUsuario`, `clave`, `email`, `sexo`, `fNacimiento`, `ciudad`, `pais`, `foto`, `fRegistro`, `estilo`) VALUES
(1, 'carlos', 'carlos', 'carlos@pie.com', 0, '2024-01-01', 'Alicante', 2, 'pablomotos.jpg', '2023-11-30 18:35:11', 2),
(2, 'raul', 'raul', 'raul@papiloma.com', 1, '2002-09-10', 'Persianax', 1, 'donpollo.jpg', '2023-11-30 18:35:11', 2),
(3, 'admin', 'admin', 'admin', 1, '2004-12-01', 'Sax', 1, '', '2023-12-14 17:16:30', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`idAlbum`),
  ADD KEY `fk_usuario_id` (`usuario`);

--
-- Indices de la tabla `estilos`
--
ALTER TABLE `estilos`
  ADD PRIMARY KEY (`idEstilo`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`idFoto`),
  ADD KEY `fk_pais_foto` (`pais`),
  ADD KEY `fk_album_foto` (`album`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idPais`);

--
-- Indices de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD PRIMARY KEY (`idSolicitud`),
  ADD KEY `fk_album_id` (`album`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_estilo_id` (`estilo`),
  ADD KEY `fk_pais_id` (`pais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `idAlbum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estilos`
--
ALTER TABLE `estilos`
  MODIFY `idEstilo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  MODIFY `idSolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `fk_album_foto` FOREIGN KEY (`album`) REFERENCES `albumes` (`idAlbum`),
  ADD CONSTRAINT `fk_pais_foto` FOREIGN KEY (`pais`) REFERENCES `paises` (`idPais`);

--
-- Filtros para la tabla `solicitudes`
--
ALTER TABLE `solicitudes`
  ADD CONSTRAINT `fk_album_id` FOREIGN KEY (`album`) REFERENCES `albumes` (`idAlbum`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_estilo_id` FOREIGN KEY (`estilo`) REFERENCES `estilos` (`idEstilo`),
  ADD CONSTRAINT `fk_pais_id` FOREIGN KEY (`pais`) REFERENCES `paises` (`idPais`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
