-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2022 a las 05:37:55
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `activos_dh`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campaña`
--

CREATE TABLE `campaña` (
  `campaña_id` int(11) NOT NULL,
  `campaña` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `campaña`
--

INSERT INTO `campaña` (`campaña_id`, `campaña`) VALUES
(1, 'AJE'),
(2, 'ARVAL'),
(3, 'ATRACCION DE TALENTO HUMANO'),
(4, 'CLARO ANIVERSARIO'),
(5, 'CLARO APP MI CLARO'),
(6, 'CLARO ATENCION TECNOLOGICA'),
(7, 'CLARO BLINDAJE PORT OUT - ENTEL'),
(8, 'CLARO BLINDAJE PREPAGO'),
(9, 'CLARO CLIENTES EXCLUSIVOS'),
(10, 'CLARO CLOSE THE LOOP'),
(11, 'CLARO CONTACTADOS POSTPAGO'),
(12, 'CLARO CORPORATIVO MOVIL'),
(13, 'CLARO CORPORATIVO MOVIL PERSONALIZADO'),
(14, 'CLARO CORPORATIVO MOVIL SOPORTE'),
(15, 'CLARO CONTACTADOS POSTPAGO RED'),
(16, 'CLARO CONTACTADOS POSTPAGO CHURN'),
(17, 'CLARO CONTACTADOS WHATSAPP'),
(18, 'CLARO CONSULTA PREVIA POSTPAGO'),
(19, 'CLARO CONSULTA PREVIA PREPAGO'),
(20, 'CLARO DESISTIMIENTO DOWNGRADE'),
(21, 'CLARO ENCUESTAS PREPAGO'),
(22, 'CLARO CORPORATIVO MOVIL PERSONALIZADO'),
(23, 'CLARO CORPORATIVO MOVIL SOPORTE'),
(24, 'CLARO CONTACTADOS POSTPAGO RED'),
(25, 'CLARO CONTACTADOS POSTPAGO CHURN'),
(26, 'CLARO CONTACTADOS WHATSAPP'),
(27, 'CLARO CONSULTA PREVIA POSTPAGO'),
(28, 'CLARO CONSULTA PREVIA PREPAGO'),
(29, 'CLARO DESISTIMIENTO DOWNGRADE'),
(30, 'CLARO ENCUESTAS PREPAGO'),
(31, 'CLARO TELEVENTAS INBOUND'),
(32, 'CLARO MIGRACIONES'),
(33, 'CLARO OUTBOUND UPGRADE'),
(34, 'CLARO PORTABILIDAD OUTBOUND'),
(35, 'CLARO POSTPAGO'),
(36, 'CLARO PREPAGO'),
(37, 'CLARO PREVENTIVA CORPORATIVA'),
(38, 'CLARO PREVENTIVA MOVIL'),
(39, 'CLARO PREVENTIVA WHATSAPP'),
(40, 'CLARO RECARGAS PREPAGO'),
(41, 'CLARO RECUPERACION DE CLIENTES'),
(42, 'CLARO RENOVACIONES OUT'),
(43, 'CLARO RETENCIONES INBOUND'),
(44, 'CLARO SUIC'),
(45, 'CLARO UPGRADE'),
(46, 'CLARO UPGRADE IFI INBOUND'),
(47, 'CLARO UPGRADE IFI OUTBOUND'),
(48, 'CLARO VIDEO'),
(49, 'HONDA'),
(50, 'CAPACITACION'),
(51, 'CALIDAD'),
(52, 'REFERIDOS'),
(53, 'CREDISCOTIA'),
(54, 'IAFAS'),
(55, 'DESPACHO'),
(56, 'MASIVO DTH'),
(57, 'MASIVO HFC'),
(58, 'LISTACIONES'),
(59, 'NUEVOS PROYECTOS'),
(60, 'OUTBOUND UPGRADE'),
(61, 'ON TOP'),
(62, 'INNOVACIÓN Y TECNOLOGÍA'),
(63, 'INTELIGENCIA Y PLANEACIÓN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `razon_social`
--

CREATE TABLE `razon_social` (
  `razon_id` int(20) NOT NULL,
  `razon_social` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `razon_social`
--

INSERT INTO `razon_social` (`razon_id`, `razon_social`) VALUES
(4, 'Mercadotecnia Directa y Contact Center'),
(5, 'Wimprove SAC'),
(17, 'MDY Intenational Business Process Outs'),
(18, 'Hernandez Asociados Administracion'),
(19, 'Backup Service Peru SAC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id` int(11) NOT NULL,
  `sede_dh` varchar(255) NOT NULL,
  `razon_social_dh` varchar(255) NOT NULL,
  `nombres_dh` varchar(255) NOT NULL,
  `t_documento_dh` int(11) NOT NULL,
  `n_documento_dh` int(11) NOT NULL,
  `direccion_dh` int(11) NOT NULL,
  `distrito_dh` int(11) NOT NULL,
  `referencia_dh` int(11) NOT NULL,
  `campaña_dh` int(11) NOT NULL,
  `movil_dh` int(11) NOT NULL,
  `correo_dh` int(11) NOT NULL,
  `usuario_subir_dh` int(11) NOT NULL,
  `area_solicitante_dh` int(11) NOT NULL,
  `activos_solicitados_dh` int(11) NOT NULL,
  `postulantes_capa_6_ath` int(11) NOT NULL,
  `status_dh` int(11) NOT NULL,
  `cpu_it` int(11) NOT NULL,
  `monitor_it` int(11) NOT NULL,
  `teclado_it` int(11) NOT NULL,
  `mouse_it` int(11) NOT NULL,
  `diadema_it` int(11) NOT NULL,
  `fecha_prestamo_it` int(11) NOT NULL,
  `estado_laboral_dh` int(11) NOT NULL,
  `fecha_baja_dh` int(11) NOT NULL,
  `status_it` int(11) NOT NULL,
  `fecha_devolucion_it` int(11) NOT NULL,
  `observacion_IT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` tinyint(99) NOT NULL,
  `rol` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`) VALUES
(1, 'ADMIN'),
(2, 'IT'),
(3, 'DH'),
(4, 'VC'),
(5, 'ATH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(90) NOT NULL,
  `usuario` varchar(90) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `contraseña` varchar(90) NOT NULL,
  `id_roles` tinyint(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `usuario`, `correo`, `contraseña`, `id_roles`) VALUES
(1, 'Juan Roque', '73800375', 'gonzaloroque21@gmail.com', '73800375', 1),
(2, 'DH', 'dh', 'dh@mdy', 'dh', 3),
(3, 'ATH', 'ath', 'ath@mdy', 'ath', 5),
(4, 'IT', 'it', 'it@mdy', 'it', 2),
(5, 'VC', 'vc', 'vc', 'vc', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campaña`
--
ALTER TABLE `campaña`
  ADD PRIMARY KEY (`campaña_id`);

--
-- Indices de la tabla `razon_social`
--
ALTER TABLE `razon_social`
  ADD PRIMARY KEY (`razon_id`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_roles` (`id_roles`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campaña`
--
ALTER TABLE `campaña`
  MODIFY `campaña_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `razon_social`
--
ALTER TABLE `razon_social`
  MODIFY `razon_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` tinyint(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_roles`) REFERENCES `roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
