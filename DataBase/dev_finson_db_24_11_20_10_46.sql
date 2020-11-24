-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 24, 2020 at 04:45 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_finson_db`
--
DROP DATABASE IF EXISTS `dev_finson_db`;
CREATE DATABASE IF NOT EXISTS `dev_finson_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `dev_finson_db`;

-- --------------------------------------------------------

--
-- Table structure for table `bps_business_partners`
--

CREATE TABLE `bps_business_partners` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `bps_unique_number` char(10) COLLATE utf8_spanish_ci NOT NULL,
  `bps_last_name` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `bps_second_last_name` varchar(110) COLLATE utf8_spanish_ci DEFAULT NULL,
  `bps_first_name` varchar(110) COLLATE utf8_spanish_ci NOT NULL,
  `bps_second_name` varchar(110) COLLATE utf8_spanish_ci DEFAULT NULL,
  `bps_birthdate` date NOT NULL,
  `bps_gender_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
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
-- Dumping data for table `bps_business_partners`
--

INSERT INTO `bps_business_partners` (`uuid`, `bps_unique_number`, `bps_last_name`, `bps_second_last_name`, `bps_first_name`, `bps_second_name`, `bps_birthdate`, `bps_gender_uuid`, `structures_country_uuid`, `structures_state_uuid`, `bps_unique_registry_key`, `bps_elector_key`, `bps_federal_taxpayer_registry`, `bps_identification_number`, `created`, `modified`) VALUES
('0e9b4a36-8714-4f37-bc14-c497b7292609', 'C100000013', 'FIGUEROA', 'VELAZCO', 'CLAUDIA', '', '1986-08-22', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'FIVC860822MCLGLL03', 'FGVLCL86082205M300', 'FIVC860822', '1607885883', '2020-11-24 03:19:29', '2020-11-24 03:19:29'),
('11b5d4bb-e640-4bf8-a6a7-c81dd864d546', 'C100000005', 'REYNA', 'CORDOVA', 'ARIA', 'ALEXIS', '1991-10-24', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'RECA911024HCLYRR02', 'RYCRAR91102405H100', 'RECA911024', '1247258438', '2020-11-24 03:05:17', '2020-11-24 03:05:17'),
('1b3d4881-379a-4e21-b53e-02308b8519fd', 'C100000009', 'FLORES', 'MARTINEZ', 'SANJUANITA', '', '1967-01-27', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'fd1ce8f7-2cc5-4aaf-b0b4-9af4f441cf06', 'FOMS670127MDGLRN', 'FOMS670127MASLRN', 'FOMS670127', '00000000000', '2020-11-24 03:10:10', '2020-11-24 03:10:10'),
('1f095d72-f555-4712-a22b-5ac10a4f28da', 'C100000006', 'MARTINEZ', 'SANTOS', 'JESSICA', 'GUADALUPE', '1998-04-09', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'MASJ980409MCLRNS05', 'MRSNJS98040905M800', 'MASJ980409', '1637365786', '2020-11-24 03:06:33', '2020-11-24 03:06:33'),
('2e789c58-288a-4eb2-83fd-a82930d2c299', 'C100000008', 'ARELLANO', 'HURTADO', 'MIRIAM', '', '1986-04-22', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'AEHM860422MMNRRR04', 'ARHRMR86042216M700', 'AEHM860422', '1837898770', '2020-11-24 03:09:03', '2020-11-24 03:09:03'),
('36690c38-9756-4cc0-ab62-5a2eb5f193b6', 'C100000000', 'RIZO', 'FLORES', 'JUAN', 'CARLOS', '1987-11-04', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'RIFJ871104HCLZLN04', 'RZFLJN87110405H800', 'RIFJ871104946', '3510073924980', '2020-10-02 17:58:10', '2020-11-23 22:38:09'),
('5ce0bc22-e459-4e68-880c-c52eaf89dde9', 'C100000014', 'TORRES', 'JUAREZ', 'JUAN', 'JOSE', '1974-01-04', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'TOJJ740104HMNRRN', 'TOJJ740104HMNRRN', 'TOJJ740104', '00000000', '2020-11-24 03:20:44', '2020-11-24 03:20:44'),
('6b4673b0-8dd5-40a3-99c1-5bc4a5d5491e', 'C100000002', 'VALDIVIA', 'CAMACHO', 'SANDRA', 'ISABEL', '1987-08-14', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'fd1ce8f7-2cc5-4aaf-b0b4-9af4f441cf06', 'VACS870814MDGLMN05', 'VLCMSN87081410M200', 'VACS870814', '1424989786', '2020-10-03 02:25:33', '2020-10-03 02:25:33'),
('7ac1673a-3564-41b3-a347-eb3fda3a4298', 'C100000012', 'RUBIO', 'ESQUIVEL', 'LORENA', '', '1974-01-04', '15b014cb-0528-4264-a01a-bda3d89fee56', '4957ee1c-8691-4cda-9622-bc6b33f5028b', '99709267-de84-4c8e-a00a-46826371a769', 'RUEL740104MASBSR02', 'RBESLR74010405M300', 'RUEL740104', '000000000', '2020-11-24 03:13:54', '2020-11-24 03:13:54'),
('7c17da38-a1bb-41ad-88c2-dcd1de2e166b', 'C100000010', 'RODRIGUEZ', 'ESCALERA', 'PEDRO', '', '1972-11-13', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'ROEP721113HCLDSD07', 'RDESPD72111305H000', 'ROEP721113', '1826731121', '2020-11-24 03:11:28', '2020-11-24 03:11:28'),
('91100394-44e9-42ff-9d03-4ab54b1861d7', 'C100000007', 'MARTINEZ', 'CHAVEZ', 'MARIA', 'GUADALUPE', '1964-05-25', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'MACM640525MCLRHR', 'MRCHGD64052505M400', 'MACM640525', '1098461834', '2020-11-24 03:07:40', '2020-11-24 03:07:40'),
('91365ae5-b563-4601-bf86-097633bb21b2', 'C100000004', 'CASTORENA', 'HERNANDEZ', 'IDALIA', '', '1984-05-04', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'CAHI840504MCLSRD05', 'CSHRID84050405M301', 'CAHI840504', '1354123138623', '2020-10-03 02:28:00', '2020-10-03 02:28:00'),
('a6cb0cd5-6693-420a-9344-e58d85efef9b', 'C100000011', 'TORRES', 'SOLORIOA', 'PAOLA', 'JAZMIN', '1998-05-07', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'TOSP980507MMNRLL08', 'TRSLPL98050716M900', 'TOSP980507', '1452585028', '2020-11-24 03:12:48', '2020-11-24 03:14:18'),
('b0634d07-3320-4223-ab59-71f7e9527f13', 'C100000001', 'SOLORIO', 'HURTADO', 'JUANA', 'CRUZ ELENA', '1975-12-15', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'SOHJ751215MMNLRN00', 'SUHRUN75121516M500', 'SOHJ751215', '1861858375', '2020-10-03 02:23:09', '2020-10-03 02:23:09'),
('fb85e846-d391-42f7-90fe-0b8dce9069aa', 'C100000003', 'SANTOS', 'JIMENEZ', 'MARIA', 'CONCEPCIÓN', '1967-10-09', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'SAJC671009MCLNMN08', 'SNJMCN67100905M901', 'SAJC671009', '1139306889', '2020-10-03 02:26:39', '2020-10-03 02:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `bps_genders`
--

CREATE TABLE `bps_genders` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `gender` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `sex` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `gender_full` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `bps_genders`
--

INSERT INTO `bps_genders` (`uuid`, `gender`, `sex`, `gender_full`, `enable`, `created`, `modified`) VALUES
('1425115e-1691-4d35-91c7-59f0abaa1b18', 'H', 'M', 'Hombre', 1, '2020-10-03 02:37:25', '2020-10-03 02:37:25'),
('15b014cb-0528-4264-a01a-bda3d89fee56', 'M', 'F', 'Mujer', 1, '2020-10-03 02:37:34', '2020-10-03 02:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `bps_types_addresses`
--

CREATE TABLE `bps_types_addresses` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `type_address` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `bps_types_addresses`
--

INSERT INTO `bps_types_addresses` (`uuid`, `type_address`, `enable`, `created`, `modified`) VALUES
('02cf0bae-bb18-4055-b922-a7187e77d232', 'NEGOCIO', 1, '2020-10-03 02:53:29', '2020-10-03 02:53:29'),
('d0f8c99f-3a20-4248-a991-1f482df166ba', 'RENTA', 1, '2020-10-03 02:53:35', '2020-10-03 02:53:35'),
('f8765c13-32f0-4297-8901-a55e26e9208e', 'CASA', 1, '2020-10-03 02:53:23', '2020-10-03 02:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `bps_types_phones`
--

CREATE TABLE `bps_types_phones` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `type_phone` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `bps_types_phones`
--

INSERT INTO `bps_types_phones` (`uuid`, `type_phone`, `enable`, `created`, `modified`) VALUES
('4762c7e9-f057-413e-a2a6-1d9fa9befa58', 'CASA', 1, '2020-10-03 02:52:52', '2020-10-03 02:52:52'),
('5a6c0597-9443-493b-adbd-f8d9f172fda8', 'CELULAR', 1, '2020-10-03 02:52:47', '2020-10-03 02:52:47'),
('b08c8e70-048e-434f-9873-68fccb0afec2', 'SMS', 1, '2020-10-03 02:52:56', '2020-10-03 02:52:56'),
('ec220cef-e474-45c3-8e6f-b50405260c82', 'RECADOS', 1, '2020-10-03 02:53:09', '2020-10-03 02:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `structures_colonies`
--

CREATE TABLE `structures_colonies` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_country_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_state_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_municipality_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `colony` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `postal_code` int(5) NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `structures_colonies`
--

INSERT INTO `structures_colonies` (`uuid`, `structures_country_uuid`, `structures_state_uuid`, `structures_municipality_uuid`, `colony`, `postal_code`, `enable`, `description`, `created`, `modified`) VALUES
('074a46fe-77d9-4d8b-af55-8e22a6a3cb55', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', '82a9ccf4-197d-46b4-bfb0-6e900dd63bdc', 'Residencial del norte', 27274, 1, '', '2020-10-02 21:12:21', '2020-10-02 21:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `structures_countries`
--

CREATE TABLE `structures_countries` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `country` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `country_key` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `structures_countries`
--

INSERT INTO `structures_countries` (`uuid`, `country`, `country_key`, `enable`, `description`, `created`, `modified`) VALUES
('4957ee1c-8691-4cda-9622-bc6b33f5028b', 'Estados Unidos Americanos', 'USA', 0, 'Estados Unidos Americanos', '2020-10-02 20:12:38', '2020-10-02 20:12:52'),
('a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Estados Unidos Mexicanos', 'MEX', 1, 'Pais de los estados unidos mexicanos', '2020-09-30 15:49:40', '2020-09-30 15:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `structures_municipalities`
--

CREATE TABLE `structures_municipalities` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_country_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_state_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `municipality` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `municipality_key` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `structures_municipalities`
--

INSERT INTO `structures_municipalities` (`uuid`, `structures_country_uuid`, `structures_state_uuid`, `municipality`, `municipality_key`, `enable`, `description`, `created`, `modified`) VALUES
('82a9ccf4-197d-46b4-bfb0-6e900dd63bdc', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'Torreón', 'TRC', 1, 'Municipio de torréon coahuila', '2020-10-02 20:25:57', '2020-10-02 20:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `structures_states`
--

CREATE TABLE `structures_states` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `structures_country_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `state` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `state_key` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `state_renapo` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `structures_states`
--

INSERT INTO `structures_states` (`uuid`, `structures_country_uuid`, `state`, `state_key`, `state_renapo`, `enable`, `description`, `created`, `modified`) VALUES
('262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Michoacán', 'MIC', 'MN', 1, '', '2020-10-03 02:21:41', '2020-10-03 02:21:41'),
('27180968-37df-4c87-8d4d-e6d5fdfe74ee', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Chiapas', 'CHP', 'CS', 1, '', '2020-09-30 19:27:28', '2020-09-30 19:27:28'),
('2a0d59dc-9855-4a4a-a43d-f35a501b26b9', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Baja California Sur', 'BCS', 'BS', 1, '', '2020-09-30 19:26:34', '2020-09-30 19:26:34'),
('473adc58-45bc-4ea3-876f-82993d0f6755', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Campeche', 'CAM', 'CC', 1, '', '2020-09-30 19:27:06', '2020-09-30 19:27:06'),
('4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Coahuila', 'COA', 'CL', 1, '', '2020-09-30 19:28:46', '2020-09-30 19:28:46'),
('4ec9bfdb-863c-4f77-bae7-24a4c58fa993', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Baja California', 'BCN', 'BC', 1, '', '2020-09-30 19:25:28', '2020-09-30 19:25:28'),
('67841e08-5e13-45f0-915c-fc24d899af2a', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Ciudad de México', 'CMX', 'DF', 1, '', '2020-09-30 19:28:20', '2020-09-30 19:28:20'),
('7a19474f-251e-4f1e-8c49-788e1c7d6c02', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Chihuahua', 'CHH', 'CH', 1, '', '2020-09-30 19:27:49', '2020-09-30 19:27:49'),
('99709267-de84-4c8e-a00a-46826371a769', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Aguascalientes', 'AGU', 'AS', 1, '', '2020-09-30 19:09:00', '2020-09-30 19:09:00'),
('fd1ce8f7-2cc5-4aaf-b0b4-9af4f441cf06', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'Durango', 'DUR', 'DG', 1, '', '2020-10-03 02:24:27', '2020-10-03 02:24:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bps_business_partners`
--
ALTER TABLE `bps_business_partners`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `bps_unique_number` (`bps_unique_number`),
  ADD UNIQUE KEY `bps_unique_registry_key` (`bps_unique_registry_key`),
  ADD UNIQUE KEY `bps_elector_key` (`bps_elector_key`);

--
-- Indexes for table `bps_genders`
--
ALTER TABLE `bps_genders`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `bps_types_addresses`
--
ALTER TABLE `bps_types_addresses`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `type_address` (`type_address`);

--
-- Indexes for table `bps_types_phones`
--
ALTER TABLE `bps_types_phones`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `type_address` (`type_phone`);

--
-- Indexes for table `structures_colonies`
--
ALTER TABLE `structures_colonies`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `structures_countries`
--
ALTER TABLE `structures_countries`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `country_key` (`country_key`),
  ADD UNIQUE KEY `country` (`country`);

--
-- Indexes for table `structures_municipalities`
--
ALTER TABLE `structures_municipalities`
  ADD PRIMARY KEY (`uuid`);

--
-- Indexes for table `structures_states`
--
ALTER TABLE `structures_states`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `state_renapo` (`state_renapo`) USING BTREE,
  ADD UNIQUE KEY `state` (`state`) USING BTREE,
  ADD UNIQUE KEY `state_key` (`state_key`) USING BTREE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
