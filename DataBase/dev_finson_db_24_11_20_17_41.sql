-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2020 a las 00:41:19
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
DROP DATABASE IF EXISTS `dev_finson_db`;
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
-- Volcado de datos para la tabla `bps_business_partners`
--

INSERT INTO `bps_business_partners` (`uuid`, `bps_unique_number`, `bps_last_name`, `bps_second_last_name`, `bps_first_name`, `bps_second_name`, `bps_birthdate`, `bps_gender_uuid`, `structures_country_uuid`, `structures_state_uuid`, `bps_unique_registry_key`, `bps_elector_key`, `bps_federal_taxpayer_registry`, `bps_identification_number`, `created`, `modified`) VALUES
('0216d799-a944-49c4-8e20-cebb8654054f', 'C100000028', 'HERNANDEZ', 'GARCIA', 'HUGO', 'EDUARDO', '1995-11-23', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'HEGH951123MCLRRG03', 'HRGRHG95112305H600', 'HEGH951123', '1748402152', '2020-11-24 18:02:36', '2020-11-24 18:02:36'),
('02788a66-58a0-497d-b6a7-b4d594dd3355', 'C100000015', 'CUEVAS', 'ESPINO', 'DULCE', 'GUADALUPE', '1996-04-13', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'CUED960413MCLVSL08', 'CVESDK96941305M700', 'CUED960413', '1194423806', '2020-11-24 16:56:05', '2020-11-24 16:56:05'),
('05a79917-49a9-4081-9923-0fbdc8bcf3e3', 'C100000025', 'HERNANDEZ', 'CANIVE', 'MARTHA', 'CECILIA', '1992-09-29', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'HECM920929MCLRNR04', 'HCNMR92062005M400', 'HECM920929', '1529127757315', '2020-11-24 17:33:41', '2020-11-24 17:33:41'),
('0e9b4a36-8714-4f37-bc14-c497b7292609', 'C100000013', 'FIGUEROA', 'VELAZCO', 'CLAUDIA', '', '1986-08-22', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'FIVC860822MCLGLL03', 'FGVLCL86082205M300', 'FIVC860822', '1607885883', '2020-11-24 03:19:29', '2020-11-24 03:19:29'),
('115c00b9-3353-4796-88f5-38b7a55eda64', 'C100000023', 'MARTINEZ', 'AGUADO', 'MARIA', 'ELENA', '1962-11-12', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'fd1ce8f7-2cc5-4aaf-b0b4-9af4f441cf06', 'MAAM621112MDGRGR03', 'MRAGEL62111210M200', 'MAAM621112', '1299534698', '2020-11-24 17:21:43', '2020-11-24 17:21:43'),
('11b5d4bb-e640-4bf8-a6a7-c81dd864d546', 'C100000005', 'REYNA', 'CORDOVA', 'ARIA', 'ALEXIS', '1991-10-24', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'RECA911024HCLYRR02', 'RYCRAR91102405H100', 'RECA911024', '1247258438', '2020-11-24 03:05:17', '2020-11-24 03:05:17'),
('1b3d4881-379a-4e21-b53e-02308b8519fd', 'C100000009', 'FLORES', 'MARTINEZ', 'SANJUANITA', '', '1967-01-27', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'fd1ce8f7-2cc5-4aaf-b0b4-9af4f441cf06', 'FOMS670127MDGLRN', 'FOMS670127MASLRN', 'FOMS670127', '00000000000', '2020-11-24 03:10:10', '2020-11-24 03:10:10'),
('1baa1389-e0eb-43cf-8d6e-8550c184ce22', 'C100000030', 'SANCHEZ', 'MURUAGA', 'JULIAN', '', '1968-11-17', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'SAMJ681117MCLNRL01', 'SNMRJL68111705H501', 'SAMJ681117', '0000000000', '2020-11-24 18:34:29', '2020-11-24 18:34:29'),
('1f095d72-f555-4712-a22b-5ac10a4f28da', 'C100000006', 'MARTINEZ', 'SANTOS', 'JESSICA', 'GUADALUPE', '1998-04-09', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'MASJ980409MCLRNS05', 'MRSNJS98040905M800', 'MASJ980409', '1637365786', '2020-11-24 03:06:33', '2020-11-24 03:06:33'),
('1f757497-b396-4f00-ad3f-19e1bbc9bbb5', 'C100000034', 'TORRES', 'SOLORIO', 'REBECA', 'LIZBETH', '1994-08-24', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'TOSR940824MCLRLB04', 'TRSLRB94082416M500', 'TOSR940824', '1732992784', '2020-11-24 18:40:00', '2020-11-24 18:40:00'),
('20fa3ae9-5883-4bcb-8d80-faeb5a8efe84', 'C100000016', 'LOZANO', 'REYES', 'ASUNCION', '', '1965-11-17', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'LORA651117MCLZYS01', 'LZRYAS65112705M400', 'LORA651117', '1200802702', '2020-11-24 16:58:36', '2020-11-24 16:58:36'),
('21c2fb37-ced7-4d02-b994-906942bd3586', 'C100000020', 'VIGIL', 'HERNANDEZ', 'ANA', 'GRISELDA', '1987-01-18', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'VIHA870118MCLGRN03', 'VGHRAN87011805M000', 'VIHA870118', '1543104315847', '2020-11-24 17:17:41', '2020-11-24 17:17:41'),
('2e789c58-288a-4eb2-83fd-a82930d2c299', 'C100000008', 'ARELLANO', 'HURTADO', 'MIRIAM', '', '1986-04-22', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'AEHM860422MMNRRR04', 'ARHRMR86042216M700', 'AEHM860422', '1837898770', '2020-11-24 03:09:03', '2020-11-24 03:09:03'),
('36690c38-9756-4cc0-ab62-5a2eb5f193b6', 'C100000000', 'RIZO', 'FLORES', 'JUAN', 'CARLOS', '1987-11-04', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'RIFJ871104HCLZLN04', 'RZFLJN87110405H800', 'RIFJ871104946', '3510073924980', '2020-10-02 17:58:10', '2020-11-23 22:38:09'),
('3b8fc770-26c7-4523-98a2-435adb9c9aff', 'C100000026', 'GAYTAN', 'TORRES', 'DANIEL', 'NEFTALY', '1996-09-06', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'GATD960906HCLYRN06', 'GYTRDN96090605H900', 'GATD960906', '14315482266', '2020-11-24 17:57:11', '2020-11-24 17:57:11'),
('4adea1c9-853d-47df-b10a-674713418174', 'C100000038', 'VIGIL', 'HERNANDEZ', 'AYRTON', 'FERNANDO', '1995-04-06', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'VIHA950406HCLGRY04', 'VGHRAY95040605H000', 'VIHA950406', '1543135677489', '2020-11-24 18:59:57', '2020-11-24 18:59:57'),
('5ce0bc22-e459-4e68-880c-c52eaf89dde9', 'C100000014', 'TORRES', 'JUAREZ', 'JUAN', 'JOSE', '1974-01-04', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'TOJJ740104HMNRRN', 'TOJJ740104HMNRRN', 'TOJJ740104', '00000000', '2020-11-24 03:20:44', '2020-11-24 03:20:44'),
('6b4673b0-8dd5-40a3-99c1-5bc4a5d5491e', 'C100000002', 'VALDIVIA', 'CAMACHO', 'SANDRA', 'ISABEL', '1987-08-14', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'fd1ce8f7-2cc5-4aaf-b0b4-9af4f441cf06', 'VACS870814MDGLMN05', 'VLCMSN87081410M200', 'VACS870814', '1424989786', '2020-10-03 02:25:33', '2020-10-03 02:25:33'),
('7ac1673a-3564-41b3-a347-eb3fda3a4298', 'C100000012', 'RUBIO', 'ESQUIVEL', 'LORENA', '', '1974-01-04', '15b014cb-0528-4264-a01a-bda3d89fee56', '4957ee1c-8691-4cda-9622-bc6b33f5028b', '99709267-de84-4c8e-a00a-46826371a769', 'RUEL740104MASBSR02', 'RBESLR74010405M300', 'RUEL740104', '000000000', '2020-11-24 03:13:54', '2020-11-24 03:13:54'),
('7c17da38-a1bb-41ad-88c2-dcd1de2e166b', 'C100000010', 'RODRIGUEZ', 'ESCALERA', 'PEDRO', '', '1972-11-13', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'ROEP721113HCLDSD07', 'RDESPD72111305H000', 'ROEP721113', '1826731121', '2020-11-24 03:11:28', '2020-11-24 03:11:28'),
('80162621-5b97-4934-a503-1e2585a56454', 'C100000022', 'CANIVE', 'DELGADO', 'MARTHA', '', '1967-03-09', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'CADM670309MCLNLR08', 'CNDLMR67030905M600', 'CADM670309', '1694521992', '2020-11-24 17:20:22', '2020-11-24 17:20:22'),
('8f71ecaf-774f-4b49-b9fb-28f78f231be4', 'C100000035', 'DUARTE', 'MARTINEZ', 'ESTHER', 'HAYDEE', '1988-07-16', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'DUME880716MCLRRS', 'DRMRES88071605M000', 'DUME880716', '1377075239921', '2020-11-24 18:55:47', '2020-11-24 18:55:47'),
('91100394-44e9-42ff-9d03-4ab54b1861d7', 'C100000007', 'MARTINEZ', 'CHAVEZ', 'MARIA', 'GUADALUPE', '1964-05-25', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'MACM640525MCLRHR', 'MRCHGD64052505M400', 'MACM640525', '1098461834', '2020-11-24 03:07:40', '2020-11-24 03:07:40'),
('91365ae5-b563-4601-bf86-097633bb21b2', 'C100000004', 'CASTORENA', 'HERNANDEZ', 'IDALIA', '', '1984-05-04', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'CAHI840504MCLSRD05', 'CSHRID84050405M301', 'CAHI840504', '1354123138623', '2020-10-03 02:28:00', '2020-10-03 02:28:00'),
('91c98687-5e5c-48f7-8d13-002c3c903dec', 'C100000019', 'CUEVAS', 'CAMACHO', 'RICARDO', '', '1967-04-03', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', 'fd1ce8f7-2cc5-4aaf-b0b4-9af4f441cf06', 'CUCR670403HDGVMC02', 'CVCMRC67040310H300', 'CUCR670403', '00000000', '2020-11-24 17:16:05', '2020-11-24 17:16:05'),
('93731d88-5dd6-4f68-a8e5-8d4079e35553', 'C100000032', 'HURTADO', 'JIMENEZ', 'MARIA', 'DE LOS ANGELES', '1956-09-13', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'HUJM560913MMNRMR04', 'HRJMAN56091316M901', 'HUJM560913', '1417465423', '2020-11-24 18:37:29', '2020-11-24 18:37:29'),
('93ed4272-6202-4196-b87d-5ebf5bb93769', 'C100000036', 'ESCAREÑO', 'HERNANDEZ', 'FERNANDO', '', '1975-05-30', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'EAHF750530HCLSRR06', 'ESHRFR75053005H301', 'EAHF750530', '1298067882014', '2020-11-24 18:57:13', '2020-11-24 18:57:13'),
('969f0192-ff05-4db5-8a9c-0f27e0440673', 'C100000021', 'HERNANDEZ', 'PICHARDO', 'MARIA', 'DEL SOCORRO', '1967-09-01', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'HEPM670901MCLRCR02', 'HRPCSC67090105M100', 'HEPM670901', '1644369843', '2020-11-24 17:18:54', '2020-11-24 17:18:54'),
('a6cb0cd5-6693-420a-9344-e58d85efef9b', 'C100000011', 'TORRES', 'SOLORIOA', 'PAOLA', 'JAZMIN', '1998-05-07', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'TOSP980507MMNRLL08', 'TRSLPL98050716M900', 'TOSP980507', '1452585028', '2020-11-24 03:12:48', '2020-11-24 03:14:18'),
('a8f02f67-e301-4c70-afa9-36ec34d6f02f', 'C100000033', 'GAITAN', 'TORRES', 'ABIUT', 'ISRAEL', '1993-12-18', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'GATA931218HCLTRB05', 'GYTRAB93121805H200', 'GATA931218', '1204909805', '2020-11-24 18:38:40', '2020-11-24 18:38:40'),
('b0634d07-3320-4223-ab59-71f7e9527f13', 'C100000001', 'SOLORIO', 'HURTADO', 'JUANA', 'CRUZ ELENA', '1975-12-15', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '262aeb73-810e-432d-bdc7-bf7f98c7ecbb', 'SOHJ751215MMNLRN00', 'SUHRUN75121516M500', 'SOHJ751215', '1861858375', '2020-10-03 02:23:09', '2020-10-03 02:23:09'),
('cbf8829f-0425-4721-974f-0f20096932d2', 'C100000024', 'RIZO', 'FLORES', 'RUBEN', 'DAVID', '1983-09-29', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'RIFR830929HCLZLB', 'MMMMMMMM', 'RIFR830929', '0000000000', '2020-11-24 17:24:48', '2020-11-24 17:24:48'),
('d738cd62-a939-4d58-af0e-84976b0782ed', 'C100000031', 'TUMOINE', 'RODRIGUEZ', 'LUIS', 'GERARDO', '1999-07-29', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'TURL990729HCLMDS04', 'YMRDLS99072905H500', 'TURL990729', '1843073613', '2020-11-24 18:36:03', '2020-11-24 18:36:03'),
('ddc7b75b-e33e-44da-9e7a-e69283b5af4d', 'C100000027', 'RODRIGUEZ', 'REYES', 'BRENDA', 'CECILIA', '1967-08-24', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'RORB670824MCLDYR03', 'RDRYBR76082405H900', 'RORB670824', '2011190646', '2020-11-24 17:58:48', '2020-11-24 17:58:48'),
('de0506b3-082d-4cbf-9659-12f32d6e757d', 'C100000017', 'LUEVANOS', 'MUÑETONES', 'LAURA', 'DENISSE', '1994-09-17', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'LUML940917MCLVXR02', 'LVMTLR94041705M500', 'LUML940917', '000000000000', '2020-11-24 17:13:02', '2020-11-24 17:13:02'),
('ed4dc073-6500-4147-85f3-b647c8782d86', 'C100000029', 'HERNANDEZ', 'CANIVE', 'CINTHIA', '', '1987-09-16', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'HECC870916MCLRNN01', 'HRCNCN87091605M000', 'HECC870916', '1751117793', '2020-11-24 18:30:09', '2020-11-24 18:30:09'),
('faad8d7d-638c-4728-a97f-0e5a3c17660e', 'C100000018', 'LOPEZ', 'ARAUJO', 'MARIO', 'ANDRES', '1985-08-25', '1425115e-1691-4d35-91c7-59f0abaa1b18', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'LOAM850825MCLPRR05', 'LPARMR85082505H700', 'LOAM850825', '1451131518597', '2020-11-24 17:14:21', '2020-11-24 17:14:52'),
('fb85e846-d391-42f7-90fe-0b8dce9069aa', 'C100000003', 'SANTOS', 'JIMENEZ', 'MARIA', 'CONCEPCIÓN', '1967-10-09', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'SAJC671009MCLNMN08', 'SNJMCN67100905M901', 'SAJC671009', '1139306889', '2020-10-03 02:26:39', '2020-10-03 02:26:39'),
('fce7955c-6828-4f5e-a7e8-2d297f40328b', 'C100000037', 'CONTRERAS', 'RODRIGUEZ', 'MARIA', 'MAGDALENA', '1983-08-30', '15b014cb-0528-4264-a01a-bda3d89fee56', 'a6377855-e3d7-4192-bac6-d5b3550e2f82', '4e2b538a-6f2c-4cc0-93fa-1286cf945b5a', 'CORM830830MCLNDR01', 'CNRDMG83083005M800', 'CORM830830', '1208058861313', '2020-11-24 18:58:33', '2020-11-24 18:58:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bps_business_partners_phones`
--

CREATE TABLE `bps_business_partners_phones` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `bps_business_partner_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `bps_types_phone_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `number` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bps_business_partners_phones`
--

INSERT INTO `bps_business_partners_phones` (`uuid`, `bps_business_partner_uuid`, `bps_types_phone_uuid`, `number`, `is_primary`, `created`, `modified`) VALUES
('01738278-737b-4c6e-b2c0-c0c5462c22e1', '0e9b4a36-8714-4f37-bc14-c497b7292609', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8713921402', 1, '2020-11-24 21:35:32', '2020-11-24 21:35:32'),
('0802f86f-e92a-4a67-a045-4bdfe43b470c', 'b0634d07-3320-4223-ab59-71f7e9527f13', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8713437175', 1, '2020-11-24 21:26:31', '2020-11-24 21:26:31'),
('1bcc172a-bcd2-4b98-88ec-b1773cb07348', '6b4673b0-8dd5-40a3-99c1-5bc4a5d5491e', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8712195839', 1, '2020-11-24 21:26:55', '2020-11-24 21:26:55'),
('1d4d8f84-348c-4099-a7a6-81bf9646df26', '20fa3ae9-5883-4bcb-8d80-faeb5a8efe84', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8712695881', 1, '2020-11-24 21:42:49', '2020-11-24 21:42:49'),
('2c3da1b1-60c1-4611-8135-ae3748e73be1', '5ce0bc22-e459-4e68-880c-c52eaf89dde9', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8715888510', 1, '2020-11-24 21:39:41', '2020-11-24 21:39:41'),
('34aa3088-b5ad-47f9-a21b-623667ceaac6', 'de0506b3-082d-4cbf-9659-12f32d6e757d', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8714161801', 1, '2020-11-24 21:43:10', '2020-11-24 21:43:10'),
('3aac1095-1238-4bfd-bd22-3a53ea046516', '115c00b9-3353-4796-88f5-38b7a55eda64', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711366374', 1, '2020-11-24 22:05:10', '2020-11-24 22:05:10'),
('3b0d59c6-360a-4f40-8a80-66787fbb504f', 'ddc7b75b-e33e-44da-9e7a-e69283b5af4d', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711044877', 1, '2020-11-24 22:07:15', '2020-11-24 22:07:15'),
('44d452b5-5f7e-41a6-88c9-20d56a1502fe', '1f095d72-f555-4712-a22b-5ac10a4f28da', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711743382', 1, '2020-11-24 21:29:12', '2020-11-24 21:29:12'),
('4766133d-8d4a-46e9-bcb5-4bb06feab4d3', '7ac1673a-3564-41b3-a347-eb3fda3a4298', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8712871038', 1, '2020-11-24 21:35:00', '2020-11-24 21:35:00'),
('57ff65f2-73e9-4b22-9647-84a94098d769', '91365ae5-b563-4601-bf86-097633bb21b2', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8712145613', 1, '2020-11-24 21:28:10', '2020-11-24 21:28:10'),
('6055f01d-9e9d-4469-8e9e-a12be543d48c', '91100394-44e9-42ff-9d03-4ab54b1861d7', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711364471', 1, '2020-11-24 21:29:33', '2020-11-24 21:29:33'),
('6075e384-757d-44e0-98bd-235fc67bc03b', 'fb85e846-d391-42f7-90fe-0b8dce9069aa', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8714187699', 1, '2020-11-24 21:27:31', '2020-11-24 21:27:31'),
('63e0b39e-519e-4614-bd46-0651168347b2', '36690c38-9756-4cc0-ab62-5a2eb5f193b6', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711325087', 1, '2020-11-24 21:16:44', '2020-11-24 21:16:44'),
('6d010288-3051-4361-9c60-bb170c3cd3fb', '05a79917-49a9-4081-9923-0fbdc8bcf3e3', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8714999135', 1, '2020-11-24 22:06:20', '2020-11-24 22:06:20'),
('768921fa-f992-41fd-a1b5-a005c85ecd15', '11b5d4bb-e640-4bf8-a6a7-c81dd864d546', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8712145613', 1, '2020-11-24 21:28:32', '2020-11-24 21:28:32'),
('803533c8-a64c-4402-aa36-292b562ca3fd', '0216d799-a944-49c4-8e20-cebb8654054f', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8714442321', 1, '2020-11-24 22:07:56', '2020-11-24 22:07:56'),
('85ce4749-05cc-4c8f-a371-c9ffcae3eb07', '7c17da38-a1bb-41ad-88c2-dcd1de2e166b', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711310576', 1, '2020-11-24 21:31:51', '2020-11-24 21:31:51'),
('869f268d-5565-4445-a526-b30c52082e9c', '02788a66-58a0-497d-b6a7-b4d594dd3355', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8713314593', 1, '2020-11-24 21:40:03', '2020-11-24 21:40:03'),
('87b9ccb9-0386-4d5c-bea6-10fece53f9d2', '8f71ecaf-774f-4b49-b9fb-28f78f231be4', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711651618', 1, '2020-11-24 22:12:04', '2020-11-24 22:12:04'),
('93b827c4-12cb-4881-a7de-af813ec5e78d', '91c98687-5e5c-48f7-8d13-002c3c903dec', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711326067', 1, '2020-11-24 21:45:43', '2020-11-24 21:45:43'),
('979bc3b2-cba2-4f48-bcf6-ad5198b58f44', '1b3d4881-379a-4e21-b53e-02308b8519fd', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8712774460', 1, '2020-11-24 21:31:12', '2020-11-24 21:31:12'),
('99c430e7-baa4-4803-aa29-16cd514f85be', 'cbf8829f-0425-4721-974f-0f20096932d2', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8717100637', 1, '2020-11-24 22:05:50', '2020-11-24 22:05:50'),
('9dc72df5-c426-4181-802d-d01f53d8c774', 'a6cb0cd5-6693-420a-9344-e58d85efef9b', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8715906134', 1, '2020-11-24 21:34:31', '2020-11-24 21:34:31'),
('c059a883-1e20-4cda-a899-b1ca51f3fdd6', '80162621-5b97-4934-a503-1e2585a56454', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8714012242', 1, '2020-11-24 22:04:37', '2020-11-24 22:04:37'),
('c21633d9-a959-45a3-b396-61aa0286a247', 'ed4dc073-6500-4147-85f3-b647c8782d86', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8713426764', 1, '2020-11-24 22:08:41', '2020-11-24 22:08:41'),
('c525426d-98e2-45c1-ae82-6767838c996f', '21c2fb37-ced7-4d02-b994-906942bd3586', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8713912505', 1, '2020-11-24 21:46:09', '2020-11-24 21:46:09'),
('ccb10d2d-58c3-4270-ae61-46dee7b48fb1', 'faad8d7d-638c-4728-a97f-0e5a3c17660e', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8714161801', 1, '2020-11-24 21:45:17', '2020-11-24 21:45:17'),
('cfa41af5-d04d-4aa7-83ae-1bf5d14b552f', '1baa1389-e0eb-43cf-8d6e-8550c184ce22', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8712660266', 1, '2020-11-24 22:09:02', '2020-11-24 22:09:02'),
('d85ab739-a8c9-4edd-87b3-99c520eb0504', '2e789c58-288a-4eb2-83fd-a82930d2c299', '5a6c0597-9443-493b-adbd-f8d9f172fda8', '8711310576', 1, '2020-11-24 21:30:52', '2020-11-24 21:30:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bps_business_partners_rols`
--

CREATE TABLE `bps_business_partners_rols` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `bps_business_partner_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `bps_types_rol_uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bps_business_partners_rols`
--

INSERT INTO `bps_business_partners_rols` (`uuid`, `bps_business_partner_uuid`, `bps_types_rol_uuid`, `created`, `modified`) VALUES
('01ce5030-b95c-47a8-864e-58db87c3ff42', '1f757497-b396-4f00-ad3f-19e1bbc9bbb5', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:48:20', '2020-11-24 22:48:20'),
('1335f804-a6c7-4e4b-a6cc-3146fac58a8c', '1f095d72-f555-4712-a22b-5ac10a4f28da', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:44:02', '2020-11-24 22:44:02'),
('138da4da-eb2f-46ad-bfeb-6b49f62c9d74', '05a79917-49a9-4081-9923-0fbdc8bcf3e3', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:47:00', '2020-11-24 22:47:00'),
('19022166-3e20-4e02-9082-1a6be37967ab', 'a6cb0cd5-6693-420a-9344-e58d85efef9b', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:44:58', '2020-11-24 22:44:58'),
('2011b4b4-355e-40d1-a7bb-e003006efd89', '11b5d4bb-e640-4bf8-a6a7-c81dd864d546', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:43:55', '2020-11-24 22:43:55'),
('284c31ef-c7bd-404f-b6bb-bf91ecc10582', 'a8f02f67-e301-4c70-afa9-36ec34d6f02f', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:48:12', '2020-11-24 22:48:12'),
('28fb885c-131d-4d67-bb55-638ae6eef1fb', '93ed4272-6202-4196-b87d-5ebf5bb93769', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:48:38', '2020-11-24 22:48:38'),
('3e33c2e8-0647-48aa-8bf1-74f78213fd6b', '1baa1389-e0eb-43cf-8d6e-8550c184ce22', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:47:39', '2020-11-24 22:47:39'),
('4394560c-4792-45ca-9612-b7162eb3a714', 'ddc7b75b-e33e-44da-9e7a-e69283b5af4d', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:47:18', '2020-11-24 22:47:18'),
('4a74e58c-9e14-41d9-9a52-e2f7e5ac2bcd', '115c00b9-3353-4796-88f5-38b7a55eda64', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:46', '2020-11-24 22:46:46'),
('4c505e5e-c7ff-4fdc-95b8-518029d1fd53', '0e9b4a36-8714-4f37-bc14-c497b7292609', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:45:37', '2020-11-24 22:45:37'),
('4d932530-e36a-4fd4-8af1-ac862101bb22', '91c98687-5e5c-48f7-8d13-002c3c903dec', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:13', '2020-11-24 22:46:13'),
('4e97d361-6dcd-4183-abad-99fcfbddacac', '6b4673b0-8dd5-40a3-99c1-5bc4a5d5491e', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:43:20', '2020-11-24 22:43:20'),
('50cb24c0-f802-4245-b9ef-4b7d221e5256', '0216d799-a944-49c4-8e20-cebb8654054f', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:47:24', '2020-11-24 22:47:24'),
('543a9849-178c-435b-baba-db37c8ae25dc', '7c17da38-a1bb-41ad-88c2-dcd1de2e166b', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:44:52', '2020-11-24 22:44:52'),
('5b9ce1af-beec-42ea-aced-810986322f39', '1b3d4881-379a-4e21-b53e-02308b8519fd', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:44:25', '2020-11-24 22:44:25'),
('60d65138-1f9a-425f-8196-b813997c480a', '36690c38-9756-4cc0-ab62-5a2eb5f193b6', 'a8fab67c-1233-40e8-8b64-f4fcb75cd198', '2020-11-24 22:39:17', '2020-11-24 22:39:17'),
('65226d25-cad1-4368-b568-e274032f234a', 'fce7955c-6828-4f5e-a7e8-2d297f40328b', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:48:53', '2020-11-24 22:48:53'),
('687e2ba1-a289-481f-b563-199301e5912e', '7ac1673a-3564-41b3-a347-eb3fda3a4298', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:45:30', '2020-11-24 22:45:30'),
('6b423614-8c71-43ce-bb91-9d3ccd054f23', '91100394-44e9-42ff-9d03-4ab54b1861d7', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:44:11', '2020-11-24 22:44:11'),
('6cbe35e7-004e-4334-8af3-9fd53fe3fa2c', 'd738cd62-a939-4d58-af0e-84976b0782ed', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:47:45', '2020-11-24 22:47:45'),
('71261e63-f1a1-4f0c-9d19-6e0132757511', '21c2fb37-ced7-4d02-b994-906942bd3586', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:20', '2020-11-24 22:46:20'),
('77b55d48-ce74-4543-8dc8-2012599dcf17', 'de0506b3-082d-4cbf-9659-12f32d6e757d', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:01', '2020-11-24 22:46:01'),
('7c707a8d-696f-49d1-9aaf-019b55972d6c', '2e789c58-288a-4eb2-83fd-a82930d2c299', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:44:19', '2020-11-24 22:44:19'),
('885b1aef-432a-470a-b8b9-e1e1cd8b3022', '969f0192-ff05-4db5-8a9c-0f27e0440673', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:28', '2020-11-24 22:46:28'),
('8944f520-3055-44de-92c9-2dde5c56bbf7', '02788a66-58a0-497d-b6a7-b4d594dd3355', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:45:49', '2020-11-24 22:45:50'),
('8b92e2fb-d502-4cc2-a012-5778f0c636de', '5ce0bc22-e459-4e68-880c-c52eaf89dde9', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:45:43', '2020-11-24 22:45:43'),
('8e25c151-457a-411a-8bdd-66241893b0a2', 'cbf8829f-0425-4721-974f-0f20096932d2', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:53', '2020-11-24 22:46:53'),
('916c054d-19f6-407e-8e2a-5be7b6c59086', 'b0634d07-3320-4223-ab59-71f7e9527f13', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:39:24', '2020-11-24 22:39:24'),
('9ddb039b-4e5b-4c09-8e7c-f66a10c64521', '80162621-5b97-4934-a503-1e2585a56454', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:34', '2020-11-24 22:46:34'),
('a7bf038e-7e9f-4a41-a953-61a06c64a2c3', '3b8fc770-26c7-4523-98a2-435adb9c9aff', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:47:10', '2020-11-24 22:47:10'),
('aa66e0e8-2fcf-4d95-8c95-f060a2f4f5a5', '93731d88-5dd6-4f68-a8e5-8d4079e35553', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:48:05', '2020-11-24 22:48:05'),
('b5fa9b28-5ab9-4459-99a3-952fab5bd1df', 'ed4dc073-6500-4147-85f3-b647c8782d86', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:47:31', '2020-11-24 22:47:31'),
('ba64b39e-831a-40c6-b8b4-86373c9bc160', '20fa3ae9-5883-4bcb-8d80-faeb5a8efe84', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:45:55', '2020-11-24 22:45:55'),
('d86e5abd-8196-4dfb-9748-00702c07245e', '1b3d4881-379a-4e21-b53e-02308b8519fd', 'a8fab67c-1233-40e8-8b64-f4fcb75cd198', '2020-11-24 22:44:32', '2020-11-24 22:44:32'),
('da0147dc-e90d-4b09-aaa7-75ce33975f00', '91365ae5-b563-4601-bf86-097633bb21b2', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:43:47', '2020-11-24 22:43:47'),
('da68bdd6-6ae1-45e1-885f-292f7986fe1a', 'fb85e846-d391-42f7-90fe-0b8dce9069aa', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:43:31', '2020-11-24 22:43:31'),
('e2a2c5b0-8a1e-4f21-8e21-7f110b3a0ab6', 'faad8d7d-638c-4728-a97f-0e5a3c17660e', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:46:07', '2020-11-24 22:46:07'),
('efee80b2-ce0a-410f-b3c8-90957fe86281', '8f71ecaf-774f-4b49-b9fb-28f78f231be4', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:48:27', '2020-11-24 22:48:27'),
('f2cc7bd4-f6c1-4780-a762-b7c206f59dc4', '4adea1c9-853d-47df-b10a-674713418174', '6e3562a2-5d45-4d6b-a73b-3ef9a2165304', '2020-11-24 22:48:59', '2020-11-24 22:48:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bps_genders`
--

CREATE TABLE `bps_genders` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `gender` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `sex` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `gender_full` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bps_genders`
--

INSERT INTO `bps_genders` (`uuid`, `gender`, `sex`, `gender_full`, `enable`, `created`, `modified`) VALUES
('1425115e-1691-4d35-91c7-59f0abaa1b18', 'H', 'M', 'Hombre', 1, '2020-10-03 02:37:25', '2020-10-03 02:37:25'),
('15b014cb-0528-4264-a01a-bda3d89fee56', 'M', 'F', 'Mujer', 1, '2020-10-03 02:37:34', '2020-10-03 02:37:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bps_types_addresses`
--

CREATE TABLE `bps_types_addresses` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `type_address` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bps_types_addresses`
--

INSERT INTO `bps_types_addresses` (`uuid`, `type_address`, `enable`, `created`, `modified`) VALUES
('02cf0bae-bb18-4055-b922-a7187e77d232', 'NEGOCIO', 1, '2020-10-03 02:53:29', '2020-10-03 02:53:29'),
('d0f8c99f-3a20-4248-a991-1f482df166ba', 'RENTA', 1, '2020-10-03 02:53:35', '2020-10-03 02:53:35'),
('f8765c13-32f0-4297-8901-a55e26e9208e', 'CASA', 1, '2020-10-03 02:53:23', '2020-10-03 02:53:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bps_types_phones`
--

CREATE TABLE `bps_types_phones` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `type_phone` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bps_types_phones`
--

INSERT INTO `bps_types_phones` (`uuid`, `type_phone`, `enable`, `created`, `modified`) VALUES
('4762c7e9-f057-413e-a2a6-1d9fa9befa58', 'CASA', 1, '2020-10-03 02:52:52', '2020-10-03 02:52:52'),
('5a6c0597-9443-493b-adbd-f8d9f172fda8', 'CELULAR', 1, '2020-10-03 02:52:47', '2020-10-03 02:52:47'),
('b08c8e70-048e-434f-9873-68fccb0afec2', 'SMS', 1, '2020-10-03 02:52:56', '2020-10-03 02:52:56'),
('ec220cef-e474-45c3-8e6f-b50405260c82', 'RECADOS', 1, '2020-10-03 02:53:09', '2020-10-03 02:53:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bps_types_rols`
--

CREATE TABLE `bps_types_rols` (
  `uuid` char(36) COLLATE utf8_spanish_ci NOT NULL,
  `type_rol` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `enable` tinyint(1) NOT NULL,
  `description` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bps_types_rols`
--

INSERT INTO `bps_types_rols` (`uuid`, `type_rol`, `enable`, `description`, `created`, `modified`) VALUES
('1b3c75be-e2bd-4ffd-a74b-f8e2be163850', 'AVAL', 1, 'ROL PARA DETERMINAR QUE PUEDE SER AVAL', '2020-11-24 22:21:54', '2020-11-24 22:21:54'),
('486597a6-a904-4d97-bb43-d9444468582c', 'BLOQUEADO', 1, 'ESTE ROL SE ASIGNA CUANDO UN BP NO PUEDE OBTENER UN CREDITO', '2020-11-24 22:29:47', '2020-11-24 22:29:47'),
('6e3562a2-5d45-4d6b-a73b-3ef9a2165304', 'CLIENTE', 1, 'ROL PARA DETERMINAR QUE ES CLIENTE', '2020-11-24 22:21:37', '2020-11-24 22:21:37'),
('a8fab67c-1233-40e8-8b64-f4fcb75cd198', 'EMPLEADO', 1, 'ROL PARA DETERMINAR QUE ES EMPLEADO', '2020-11-24 22:22:21', '2020-11-24 22:22:21');

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
-- Indices de la tabla `bps_business_partners_phones`
--
ALTER TABLE `bps_business_partners_phones`
  ADD PRIMARY KEY (`uuid`);

--
-- Indices de la tabla `bps_business_partners_rols`
--
ALTER TABLE `bps_business_partners_rols`
  ADD PRIMARY KEY (`uuid`);

--
-- Indices de la tabla `bps_genders`
--
ALTER TABLE `bps_genders`
  ADD PRIMARY KEY (`uuid`);

--
-- Indices de la tabla `bps_types_addresses`
--
ALTER TABLE `bps_types_addresses`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `type_address` (`type_address`);

--
-- Indices de la tabla `bps_types_phones`
--
ALTER TABLE `bps_types_phones`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `type_address` (`type_phone`);

--
-- Indices de la tabla `bps_types_rols`
--
ALTER TABLE `bps_types_rols`
  ADD PRIMARY KEY (`uuid`),
  ADD UNIQUE KEY `type_rol` (`type_rol`);

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
