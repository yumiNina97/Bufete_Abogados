-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-04-2023 a las 23:59:54
-- Versión del servidor: 5.7.24
-- Versión de PHP: 8.0.28

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `micar`
--

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `creador_id`, `modificador_id`, `eliminador_id`, `nombre`, `descripcion`, `estado`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'LAVADO BASICO', 'LAVADO BASICO', NULL, NULL, '2023-05-01 03:38:39', '2023-05-01 03:38:39'),
(2, 1, NULL, NULL, 'LAVADO ESPECIAL PROFUNDO', 'LAVADO ESPECIAL PROFUNDO', NULL, NULL, '2023-05-01 03:38:47', '2023-05-01 03:38:47'),
(3, 1, NULL, NULL, 'LAVADO ESPECIAL', 'LAVADO ESPECIAL', NULL, NULL, '2023-05-01 03:38:56', '2023-05-01 03:38:56'),
(4, 1, NULL, NULL, 'ABRILLANTADOR EXTERNO', 'ABRILLANTADOR EXTERNO', NULL, NULL, '2023-05-01 03:39:05', '2023-05-01 03:39:05'),
(5, 1, NULL, NULL, 'EMBELLECEDOR', 'EMBELLECEDOR', NULL, NULL, '2023-05-01 03:39:15', '2023-05-01 03:39:15');

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `creador_id`, `modificador_id`, `eliminador_id`, `ap_paterno`, `ap_materno`, `nombres`, `cedula`, `correo`, `celular`, `fecha_nacimiento`, `estado`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'PAUCARA', 'CONDE', 'VIANELA RAQUEL', '855212', 'vivis@gmail.com', '78965412', '2023-04-01', NULL, NULL, '2023-04-30 23:36:36', '2023-04-30 23:36:36');

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `estado`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR', 'ADMINISTRADOR', NULL, NULL, '2023-05-01 03:35:01', '2023-05-01 03:35:01'),
(2, 'SUPERVISOR', 'SUPERVISOR', NULL, NULL, '2023-05-01 03:35:13', '2023-05-01 03:35:13'),
(3, 'LAVADOR', 'LAVADOR', NULL, NULL, '2023-05-01 03:35:19', '2023-05-01 03:35:19'),
(4, 'CAJERO', 'CAJERO', NULL, NULL, '2023-05-01 03:35:27', '2023-05-01 03:35:27');

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `creador_id`, `modificador_id`, `eliminador_id`, `descripcion`, `categoria_id`, `unidad_venta`, `precio`, `estado`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, 'LAVADO  DE TAXI', 1, 'UNIDAD', '30.00', NULL, NULL, '2023-05-01 03:39:36', '2023-05-01 03:39:36'),
(2, 1, NULL, NULL, 'LAVADO ESPECIAL VAGONETA / CAMIONETA XL', 2, 'UNIDAD', '700.00', NULL, NULL, '2023-05-01 03:40:00', '2023-05-01 03:40:00'),
(3, 1, NULL, NULL, 'ENCERADO BRILLO ESPEJO', 4, 'UNIDAD', '100.00', NULL, NULL, '2023-05-01 03:40:25', '2023-05-01 03:40:25'),
(4, 1, NULL, NULL, 'LAVADO DE ARO', 3, 'UNIDAD', '20.00', NULL, NULL, '2023-05-01 03:40:55', '2023-05-01 03:40:55');

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `rol_id`, `name`, `nombres`, `ap_paterno`, `ap_materno`, `cedula`, `direccion`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Joel Jonathan Flores Quispe', NULL, NULL, NULL, NULL, NULL, 'jjjoelcito123@gmail.com', NULL, '$2y$10$jSA7MjRH5ASNdzOQ/ShMGenjsiZWZfQLhXt5ps8gQyLF4rnZoLCM6', NULL, '2023-05-01 03:34:34', '2023-05-01 03:34:34'),
(2, 3, 'GONZALO PATI MAMANI', 'GONZALO', 'PATI', 'MAMANI', '12', 'Villa Copacabana Escobar uria Calle 1 #2', 'gonzalo@gmail.com', NULL, '$2y$10$VvHatDBXoe9CV86oqRIWm.wedor76Gg3FofHBzH29gYvQU4q3Zmyy', NULL, '2023-05-01 03:36:05', '2023-05-01 03:36:05');

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `creador_id`, `modificador_id`, `eliminador_id`, `cliente_id`, `placa`, `color`, `marca`, `estado`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 1, '6027IUT', 'NEGRO', 'AVM TEKEN', NULL, NULL, '2023-04-30 23:37:23', '2023-04-30 23:37:23');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
