-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2020 a las 19:11:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dev_finson_db`
--
CREATE DATABASE IF NOT EXISTS `dev_finson_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `dev_finson_db`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `structures_countries`
--

CREATE TABLE `structures_countries` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `country` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `country_key` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `structures_countries`
--

INSERT INTO `structures_countries` (`uuid`, `country`, `country_key`, `enable`, `description`, `created`, `modified`) VALUES
('a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Estados Unidos Mexicanos', 'MEX', 1, 'Pais de los estados unidos mexicanos', '2020-09-30 15:49:40', '2020-09-30 15:49:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `structures_states`
--

CREATE TABLE `structures_states` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_country_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `state` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `state_key` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `state_renapo` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `structures_states`
--

INSERT INTO `structures_states` (`uuid`, `structures_country_uuid`, `state`, `state_key`, `state_renapo`, `enable`, `description`, `created`, `modified`) VALUES
('27180968-37df-4c87-8d4d-e6d5fdfe74ee', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Chiapas', 'CHP', 'CS', 1, '', '2020-09-30 19:27:28', '2020-09-30 19:27:28'),
('2a0d59dc-9855-4a4a-a43d-f35a501b26b9', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Baja California Sur', 'BCS', 'BS', 1, '', '2020-09-30 19:26:34', '2020-09-30 19:26:34'),
('473adc58-45bc-4ea3-876f-82993d0f6755', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Campeche', 'CAM', 'CC', 1, '', '2020-09-30 19:27:06', '2020-09-30 19:27:06'),
('4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Coahuila', 'COA', 'CL', 1, '', '2020-09-30 19:28:46', '2020-09-30 19:28:46'),
('4ec9bfdb-863c-4f77-bae7-24a4c58fa993', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Baja California', 'BCN', 'BC', 1, '', '2020-09-30 19:25:28', '2020-09-30 19:25:28'),
('67841e08-5e13-45f0-915c-fc24d899af2a', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Ciudad de México', 'CMX', 'DF', 1, '', '2020-09-30 19:28:20', '2020-09-30 19:28:20'),
('7a19474f-251e-4f1e-8c49-788e1c7d6c02', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Chihuahua', 'CHH', 'CH', 1, '', '2020-09-30 19:27:49', '2020-09-30 19:27:49'),
('99709267-de84-4c8e-a00a-46826371a769', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Aguascalientes', 'AGU', 'AS', 1, '', '2020-09-30 19:09:00', '2020-09-30 19:09:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `structures_countries`
--
ALTER TABLE `structures_countries`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `country_key` (`country_key`),
  ADD UNIQUE KEY `country` (`country`);

--
-- Indices de la tabla `structures_states`
--
ALTER TABLE `structures_states`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `state_renapo` (`state_renapo`) USING BTREE,
  ADD UNIQUE KEY `state` (`state`) USING BTREE,
  ADD UNIQUE KEY `state_key` (`state_key`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
