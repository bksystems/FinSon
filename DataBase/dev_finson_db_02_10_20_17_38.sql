-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2020 a las 00:37:35
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

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
-- Estructura de tabla para la tabla `bps_business_partners`
--

CREATE TABLE `bps_business_partners` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `bps_unique_number` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `bps_last_name` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `bps_second_last_name` varchar(110) COLLATE utf8_spanish_ci DEFAULT NULL,
  `bps_first_name` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `bps_second_name` varchar(110) COLLATE utf8_spanish_ci DEFAULT NULL,
  `bps_birthdate` date NOT NULL,
  `structures_country_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_state_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `bps_unique_registry_key` char(18) COLLATE utf8_spanish_ci NOT NULL,
  `bps_elector_key` char(18) COLLATE utf8_spanish_ci NOT NULL,
  `bps_federal_taxpayer_registry` char(18) COLLATE utf8_spanish_ci NOT NULL,
  `bps_identification_number` char(18) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bps_business_partners`
--

INSERT INTO `bps_business_partners` (`uuid`, `bps_unique_number`, `bps_last_name`, `bps_second_last_name`, `bps_first_name`, `bps_second_name`, `bps_birthdate`, `structures_country_uuid`, `structures_state_uuid`, `bps_unique_registry_key`, `bps_elector_key`, `bps_federal_taxpayer_registry`, `bps_identification_number`, `created`, `modified`) VALUES
('36690c38-9756-4cc0-ab62-5a2eb5f193b6', 'C100000000', 'RIZO', 'FLORES', 'JUAN', 'CARLOS', '1987-11-04', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'RIFJ871104HCLZLN04', 'RZFLJN87110405H800', 'RIFJ871104', '3510073924980', '2020-10-02 17:58:10', '2020-10-02 18:04:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `structures_colonies`
--

CREATE TABLE `structures_colonies` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_country_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_state_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_municipality_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `colony` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `postal_code` int(5) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `structures_colonies`
--

INSERT INTO `structures_colonies` (`uuid`, `structures_country_uuid`, `structures_state_uuid`, `structures_municipality_uuid`, `colony`, `postal_code`, `enable`, `description`, `created`, `modified`) VALUES
('074a46fe-77d9-4d8b-af55-8e22a6a3cb55', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', '82a9ccf4-197d-46b4-bfb0-6e900dd63bdc', 'Residencial del norte', 27274, 1, '', '2020-10-02 21:12:21', '2020-10-02 21:12:35');

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
('4957ee1c-8691-4cda-9622-bc6b33f5028b', 'Estados Unidos Americanos', 'USA', 0, 'Estados Unidos Americanos', '2020-10-02 20:12:38', '2020-10-02 20:12:52'),
('a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Estados Unidos Mexicanos', 'MEX', 1, 'Pais de los estados unidos mexicanos', '2020-09-30 15:49:40', '2020-09-30 15:49:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `structures_municipalities`
--

CREATE TABLE `structures_municipalities` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_country_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_state_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `municipality` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `municipality_key` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `description` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `structures_municipalities`
--

INSERT INTO `structures_municipalities` (`uuid`, `structures_country_uuid`, `structures_state_uuid`, `municipality`, `municipality_key`, `enable`, `description`, `created`, `modified`) VALUES
('82a9ccf4-197d-46b4-bfb0-6e900dd63bdc', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'Torreón', 'TRC', 1, 'Municipio de torréon coahuila', '2020-10-02 20:25:57', '2020-10-02 20:25:57');

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
-- Indices de la tabla `bps_business_partners`
--
ALTER TABLE `bps_business_partners`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `bps_unique_number` (`bps_unique_number`),
  ADD UNIQUE KEY `bps_unique_registry_key` (`bps_unique_registry_key`),
  ADD UNIQUE KEY `bps_elector_key` (`bps_elector_key`);

--
-- Indices de la tabla `structures_colonies`
--
ALTER TABLE `structures_colonies`
  ADD PRIMARY KEY (`uuid`);

--
-- Indices de la tabla `structures_countries`
--
ALTER TABLE `structures_countries`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `country_key` (`country_key`),
  ADD UNIQUE KEY `country` (`country`);

--
-- Indices de la tabla `structures_municipalities`
--
ALTER TABLE `structures_municipalities`
  ADD PRIMARY KEY (`uuid`);

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
