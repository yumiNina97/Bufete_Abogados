-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2023 a las 02:26:27
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
-- Base de datos: `bufet`
--

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombres`, `ap_paterno`, `ap_materno`, `cedula`, `telefonos`, `correo`, `direccion`, `estado`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'SEGUNDO CLIENTE', 'SEGUNDO', 'SEGUNDO', '8151212', '8121212', 'seguno@gmail.com', 'sdfsdf', NULL, NULL, '2023-05-05 03:50:54', '2023-05-05 04:07:28'),
(2, 'TERCER CLIENTE', 'TERCER', 'TERCER', '84561212', '154684512', 'tercer@gmail.com', 'sefsdfd', NULL, NULL, '2023-05-05 03:52:17', '2023-05-05 04:07:48'),
(3, 'CUARTO CLIENTE', 'CUERATO', 'CUERATO', '5121521', '212121', 'cuarto@gmail.com', '6sdf3sd2f1s', NULL, NULL, '2023-05-05 03:53:02', '2023-05-05 04:08:10'),
(4, 'PRIMER CLIENTE', 'PRIMERO', 'PRIMERO', '8215121', '1521212', 'pri@gmail.com', 'dsfsd', NULL, NULL, '2023-05-05 04:07:08', '2023-05-05 04:07:08'),
(5, 'LUIS FERNANDO', 'QUIROGA', 'MAMANI', '8524561', '78945612', 'luis@gmail.com', 'VILLA NO SE', NULL, NULL, '2023-05-08 02:21:57', '2023-05-08 02:21:57');

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `cliente_id`, `nombre`, `descripcion`, `tipo`, `estado`, `personas`, `fecha_cita`, `posicion`, `contra_demanda`, `documento`, `color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'PROCESO 1', 'DESCRIPCION', 'TIPO', 'ESTAD', 'JOEL, LUIS', '2023-05-04 19:30:00', 'POS', 'CON', '20230505013152.pdf', 'blue', NULL, '2023-05-05 05:31:52', '2023-05-05 05:31:52'),
(2, 2, 'PROCESO 2', 'PROCESO 2', 'TIPO', 'ESTADO', 'JOEL', '2023-05-07 20:10:00', 'POS', 'CO', '20230508001123.pdf', 'blue', NULL, '2023-05-08 04:11:23', '2023-05-08 04:11:23'),
(3, 4, 'PROCESO 3', 'PROCESO 3', 'TIPO', 'ESTADO', 'LUIS', '2023-05-07 20:12:00', 'POS', 'CON', '20230508001233.pdf', 'blue', NULL, '2023-05-08 04:12:33', '2023-05-08 04:12:33'),
(4, 3, 'PROCESO 4', 'PROCESO 4', 'PROCESO 4', 'PROCESO 4', 'PROCESO 4', '2023-05-12 20:12:00', 'POS', 'CON', '20230508001310.sql', 'blue', NULL, '2023-05-08 04:13:10', '2023-05-08 04:13:10'),
(5, 2, 'PROCESO 5', 'PROCESO 5', 'PROCESO 5', 'PROCESO 5', 'PROCESO 5', '2023-05-03 20:13:00', 'POS', 'CON', '20230508001343.pdf', 'blue', NULL, '2023-05-08 04:13:43', '2023-05-08 04:13:43'),
(6, 3, 'PROCESO 6', 'PROCESO 6', 'PROCESO 6', 'PROCESO 6', 'PROCESO 6', '2023-05-08 22:15:00', 'PROCESO 6', 'PROCESO 6', '20230508012005.pdf', 'blue', NULL, '2023-05-08 05:20:05', '2023-05-09 02:13:06');

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`, `descripcion`, `estado`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR', 'ADMIN DEL SISTEMA', NULL, NULL, '2023-05-05 03:40:57', '2023-05-05 03:40:57'),
(2, 'ABOGADO', 'ABOGADO DEL SISTEMA', NULL, NULL, '2023-05-05 03:41:45', '2023-05-05 03:41:45'),
(3, 'SECRETARIA', 'SECRETARIA DEL SISTEMA', NULL, NULL, '2023-05-05 03:41:59', '2023-05-05 03:41:59');

--
-- Volcado de datos para la tabla `tramites`
--

INSERT INTO `tramites` (`id`, `cliente_id`, `nombre`, `descripcion`, `tipo`, `estado`, `personas`, `fecha_cita`, `color`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 2, 'TRAMITE 1', 'DESCRIPCION', 'TIPO', 'ESTADO', 'JOEL', '2023-05-05 21:22:00', 'red', NULL, '2023-05-06 05:22:10', '2023-05-06 05:22:10'),
(2, 2, 'TRAMITE 2', 'DESCRIPCION', 'TIPO', 'ESTADO', 'LUIS', '2023-05-05 21:26:00', 'red', NULL, '2023-05-06 05:27:18', '2023-05-06 05:27:18'),
(3, 1, 'TRAMITE 3', 'TRAMITE 3', 'TRAMITE 3', 'TRAMITE 3', 'TRAMITE 3', '2023-05-07 22:15:00', 'red', NULL, '2023-05-08 05:49:18', '2023-05-08 05:49:18'),
(4, 3, 'TRAMITE 4', 'TRAMITE 4', 'TRAMITE 4', 'TRAMITE 4', 'TRAMITE 4', '2023-05-07 22:10:00', 'red', NULL, '2023-05-08 05:50:14', '2023-05-08 05:50:14'),
(5, 5, 'TRAMITE 5', 'TRAMITE 5', 'TIPO', 'ESTADO', 'JOEL', '2023-05-07 22:25:00', 'red', NULL, '2023-05-08 02:25:50', '2023-05-08 02:25:50'),
(6, 2, 'TRAMITE 6', 'DES', 'TIPO', 'ESTA', 'JOEL', '2023-05-08 22:14:00', 'red', NULL, '2023-05-09 01:15:45', '2023-05-09 02:12:35');

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `rol_id`, `permisos`, `nombres`, `ap_paterno`, `ap_materno`, `cedula`, `direccion`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, '[\"USR\",\"ROL\",\"CLI\",\"PRO\",\"TRA\"]', NULL, NULL, NULL, NULL, NULL, 'JOEL JONATHAN FLORES QUIPE', 'jjjoelcito123@gmail.com', NULL, '$2y$10$fQPQyVu1gwNvaMyueWbR7u8uJ1RwgxKReWLoJz3ObvQdLga2CI54a', NULL, '2023-05-05 02:11:12', '2023-05-05 03:39:41'),
(2, 1, '[\"USR\",\"PRO\",\"TRA\"]', 'VIANELA RAQUEL', 'PAUCARA', 'MAMANI', '8254541', '21', 'VIANELA RAQUEL PAUCARA MAMANI', 'vivis@gmail.com', NULL, '$2y$10$AKXxN0sV9eW8y9fP5/JmUenftB/C4jK7oB6G6A42WXiQOY0lOV0FW', NULL, '2023-05-05 03:46:52', '2023-05-08 02:19:55'),
(3, 2, '[\"USR\",\"ROL\",\"CLI\",\"PRO\",\"TRA\"]', 'JHOSELINE', 'RAMIREZ', 'VIR', '85241', 'Villa Copacabana Escobar uria Calle 1 #2', 'JHOSELINE RAMIREZ VIR', 'jhos@gmail.com', NULL, '$2y$10$f8832jTKjRhT9N1YVN.D8e0cOaqcj9pfETs5IM86ARIeqU12mX4AG', NULL, '2023-05-05 03:48:49', '2023-05-05 03:49:47'),
(4, 1, '[\"USR\",\"ROL\",\"CLI\",\"PRO\",\"TRA\"]', 'MAYUMI', 'MAYUMI', 'MAYUMI', '789', 'LLOJETA', 'MAYUMI MAYUMI MAYUMI', 'mayu@gmail.com', NULL, '$2y$10$hdO2XMVQhzAdY88nqdul4eezOeDF4cAR0K/zGnV34vFXv/DDmdu0O', NULL, '2023-05-09 02:25:38', '2023-05-09 02:25:38');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
