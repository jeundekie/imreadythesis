-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2020 at 08:13 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imreadythesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accidentcategorys`
--

CREATE TABLE `accidentcategorys` (
  `incidentid` int(10) UNSIGNED NOT NULL,
  `incident` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accidentcategorys`
--

INSERT INTO `accidentcategorys` (`incidentid`, `incident`, `created_at`, `updated_at`) VALUES
(1, 'Medical', NULL, NULL),
(2, 'Trauma', NULL, NULL),
(3, 'OB', NULL, NULL),
(4, 'Fire', NULL, NULL),
(5, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accidentdetails`
--

CREATE TABLE `accidentdetails` (
  `accid` int(11) NOT NULL,
  `roadid` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `patientid` varchar(11) NOT NULL,
  `incidentid` varchar(11) NOT NULL,
  `victimname` varchar(100) NOT NULL,
  `vicaddress` varchar(255) NOT NULL,
  `vicage` varchar(50) NOT NULL,
  `vicnumber` varchar(11) NOT NULL,
  `timeincident` varchar(100) NOT NULL,
  `timecleared` varchar(50) NOT NULL,
  `typerun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accidentdetails`
--

INSERT INTO `accidentdetails` (`accid`, `roadid`, `id`, `patientid`, `incidentid`, `victimname`, `vicaddress`, `vicage`, `vicnumber`, `timeincident`, `timecleared`, `typerun`) VALUES
(1, '1', '1', '1', '1', 'Testing One', 'Phase 4 Block 4 Katarungan', '31', '09823584815', '11:21', '15:21', 'Emergency Transport'),
(2, '1', '1', '1', '1', 'Testing One', 'Phase 4 Block 4 Katarungan', '31', '09823584815', '12:26', '15:26', 'Emergency Transport'),
(3, '1', '1', '1', '1', 'Testing One', 'Phase 4 Block 4 Katarungan', '31', '09823584815', '13:31', '15:32', 'Emergency Transport'),
(4, '2', '1', '1', '1', 'Dummy Two', 'Phase 3 Daang Hari', '45', '09191918488', '04:52', '05:52', 'Emergency Transfer'),
(5, '2', '1', '2', '2', 'Dummy Three', 'Phase 4 Block 4 Katarungan', '55', '09981511515', '18:08', '20:08', 'Emergency Transport'),
(6, '2', '1', '2', '2', 'Dummy Three', 'Phase 4 Block 4 Katarungan', '55', '09981511515', '18:08', '20:08', 'Emergency Transport'),
(7, '2', '1', '2', '2', 'Testing Four', 'Festivall Mall', '55', '09782619981', '17:24', '18:24', 'Emergency Transfer'),
(8, '5', '1', '3', '3', 'Testing Five', 'Near Bilibid', '34', '09052584861', '07:26', '09:26', 'Emergency Transfer'),
(9, '3', '1', '4', '5', 'Testing Six', 'Munisipyo', '24', '09752923629', '08:32', '11:32', 'Emergency Transfer'),
(10, '4', '1', '2', '2', 'Dummy Three', 'Festivall Mall', '34', '09782619981', '21:33', '22:33', 'Emergency Transport'),
(11, '6', '1', '3', '3', 'Testing ten', 'Near Bilibid', '45', '09191918488', '21:38', '20:38', 'Emergency Transfer'),
(12, '7', '1', '2', '2', 'Testing Dummy Three', 'Phase 1 Block 25 Katarungan', '21', '09752818818', '10:06', '14:06', 'Emergency Transport');

-- --------------------------------------------------------

--
-- Table structure for table `addinfo`
--

CREATE TABLE `addinfo` (
  `evaid` int(11) NOT NULL,
  `centerid` varchar(45) NOT NULL,
  `id` varchar(45) NOT NULL,
  `num` varchar(255) NOT NULL,
  `timeda` varchar(100) NOT NULL,
  `datetimeupda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addinfo`
--

INSERT INTO `addinfo` (`evaid`, `centerid`, `id`, `num`, `timeda`, `datetimeupda`) VALUES
(1, '1', '4', '100', '1:41', 'September 21, 2020'),
(2, '1', '4', '50', '1:44', 'September 21, 2020'),
(3, '1', '4', '50', '13:28', 'September 23, 2020'),
(4, '1', '4', '100', '13:29', 'September 23, 2020'),
(5, '5', '4', '400', '15:0', 'September 23, 2020'),
(6, '5', '4', '100', '15:1', 'September 23, 2020'),
(7, '1', '4', '20', '15:23', 'September 23, 2020'),
(8, '5', '4', '50', '15:38', 'September 23, 2020'),
(9, '5', '4', '50', '15:40', 'September 23, 2020'),
(10, '15', '4', '10', '15:42', 'September 23, 2020'),
(11, '1', '4', '40', '12:20', 'September 24, 2020'),
(12, '7', '4', '20', '15:58', 'September 28, 2020'),
(13, '5', '4', '50', '21:36', 'September 28, 2020'),
(14, '1', '4', '90', '22:56', 'September 28, 2020'),
(15, '7', '4', '100', '2:0', 'September 29, 2020'),
(16, '7', '4', '20', '8:23', 'September 30, 2020'),
(17, '15', '4', '40', '10:48', 'September 30, 2020'),
(18, '1', '4', '50', '14:38', 'September 30, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `announcecategorys`
--

CREATE TABLE `announcecategorys` (
  `catid` int(10) UNSIGNED NOT NULL,
  `ancate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announceid` int(10) UNSIGNED NOT NULL,
  `catid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageattach` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `madeby` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `barangays`
--

CREATE TABLE `barangays` (
  `brgyid` int(10) UNSIGNED NOT NULL,
  `brgyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconpic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangays`
--

INSERT INTO `barangays` (`brgyid`, `brgyname`, `iconpic`, `created_at`, `updated_at`) VALUES
(1, 'Sucat', 'images/violet.png', '2020-08-10 10:19:21', '2020-08-10 10:19:21'),
(2, 'Buli', 'images/yello.png', '2020-08-10 10:19:21', '2020-08-10 10:19:21'),
(3, 'Cupang', 'images/redschool.png', '2020-08-10 10:19:21', '2020-08-10 10:19:21'),
(4, 'Alabang', 'images/sky.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(5, 'Ayala Alabang', 'images/darkgray.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(6, 'Bayanan', 'images/green.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(7, 'Putatan', 'images/white.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(8, 'Poblacion', 'images/orangeschool.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(9, 'Tunasan', 'images/blueschool.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `casualties`
--

CREATE TABLE `casualties` (
  `casualid` int(10) UNSIGNED NOT NULL,
  `disasterid` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estamount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casualimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casualties`
--

INSERT INTO `casualties` (`casualid`, `disasterid`, `estamount`, `description`, `casualimage`, `created_at`, `updated_at`) VALUES
(1, '1', '20000', 'Structure was ruin', NULL, NULL, NULL),
(2, '2', '500000', 'structure', NULL, NULL, NULL),
(3, '1', '900000', 'Structure', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 'helow', '2020-08-11 23:03:14', '2020-08-11 23:03:14'),
(2, 2, 'kumain kana', '2020-08-11 23:04:19', '2020-08-11 23:04:19'),
(3, 1, 'bakit?', '2020-08-11 23:08:49', '2020-08-11 23:08:49'),
(4, 2, 'hu', '2020-08-11 23:50:17', '2020-08-11 23:50:17'),
(5, 1, 'panger', '2020-08-12 00:51:35', '2020-08-12 00:51:35');

-- --------------------------------------------------------

--
-- Table structure for table `collisiondetails`
--

CREATE TABLE `collisiondetails` (
  `colid` int(11) NOT NULL,
  `roadid` varchar(45) NOT NULL,
  `vehicleinvo` varchar(45) NOT NULL,
  `platenum` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collisiondetails`
--

INSERT INTO `collisiondetails` (`colid`, `roadid`, `vehicleinvo`, `platenum`) VALUES
(1, '4', 'Mazda', 'FG5QE7'),
(2, '7', 'BMW', 'GFG45E');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contactid` int(11) NOT NULL,
  `centerid` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `forelief` text NOT NULL,
  `forcenter` text NOT NULL,
  `timefrom` text NOT NULL,
  `timeto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contactid`, `centerid`, `id`, `forelief`, `forcenter`, `timefrom`, `timeto`) VALUES
(1, '1', '5', 'yes', 'no', '8:00 AM', '2:00 PM'),
(2, '2', '5', 'no', 'yes', '5:00 PM', '7:00 PM'),
(3, '11', '2', 'yes', 'no', '07.00PM', '12.00PM');

-- --------------------------------------------------------

--
-- Table structure for table `deathdetails`
--

CREATE TABLE `deathdetails` (
  `deathid` int(11) NOT NULL,
  `roadid` varchar(11) NOT NULL,
  `shockgivetime` varchar(100) NOT NULL,
  `numshock` varchar(11) NOT NULL,
  `recogdeath` varchar(45) NOT NULL,
  `timeofdeath` varchar(45) NOT NULL,
  `deathdate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deathdetails`
--

INSERT INTO `deathdetails` (`deathid`, `roadid`, `shockgivetime`, `numshock`, `recogdeath`, `timeofdeath`, `deathdate`) VALUES
(1, '4', '21:34', '5', 'Rigor Mortis', '21:35', '09-25-2020');

-- --------------------------------------------------------

--
-- Table structure for table `disastercall`
--

CREATE TABLE `disastercall` (
  `disid` int(11) NOT NULL,
  `disasterid` varchar(100) NOT NULL,
  `id` varchar(11) NOT NULL,
  `callername` varchar(100) NOT NULL,
  `callernum` varchar(100) NOT NULL,
  `dislocation` varchar(100) NOT NULL,
  `team` text NOT NULL,
  `coordinated` text NOT NULL,
  `whocoor` text NOT NULL,
  `calldate` text NOT NULL,
  `calltime` text NOT NULL,
  `callyear` text NOT NULL,
  `tag` text NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disastercall`
--

INSERT INTO `disastercall` (`disid`, `disasterid`, `id`, `callername`, `callernum`, `dislocation`, `team`, `coordinated`, `whocoor`, `calldate`, `calltime`, `callyear`, `tag`, `remark`) VALUES
(1, '1', '1', 'Glesie', '09752684512', 'Sucat Baywalk', 'RV2', 'Yes', 'Barangay', '2018-02-02', '21:53', '2018', 'none', 'yes'),
(2, '2', '1', 'Martin', '09752684512', 'Katarungan', 'RV2', 'Yes', 'Fire', '2019-11-21', '07:51', '2019', 'none', 'yes'),
(3, '1', '1', 'Maan', '09752684545', 'Alabang', 'RV3', 'Yes', 'Barangay', '2019-11-27', '04:10', '2019', 'none', 'yes'),
(4, '2', '1', 'Maan', '09752684512', 'Sucat', 'RV2', 'Yes', 'Barangay', '2020-09-30', '12:09', '2020', 'none', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `disastercasualties`
--

CREATE TABLE `disastercasualties` (
  `casualid` int(11) NOT NULL,
  `disid` varchar(45) NOT NULL,
  `numinjured` varchar(45) NOT NULL,
  `numdeaths` varchar(45) NOT NULL,
  `estdamage` varchar(45) NOT NULL,
  `dmgdescrip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disastercasualties`
--

INSERT INTO `disastercasualties` (`casualid`, `disid`, `numinjured`, `numdeaths`, `estdamage`, `dmgdescrip`) VALUES
(1, '2', '100', '105', '110', 'nfieniewnfieowf'),
(2, '3', '200', '50', '250', 'structured establishment'),
(3, '1', '50', '20', '40', 'establishment');

-- --------------------------------------------------------

--
-- Table structure for table `disasters`
--

CREATE TABLE `disasters` (
  `disasterid` int(11) NOT NULL,
  `disastertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disasters`
--

INSERT INTO `disasters` (`disasterid`, `disastertype`) VALUES
(1, 'Flood'),
(2, 'Fire'),
(3, 'Earthquake');

-- --------------------------------------------------------

--
-- Table structure for table `emergencycontacts`
--

CREATE TABLE `emergencycontacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `emergencyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emecontacts` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `evacuations`
--

CREATE TABLE `evacuations` (
  `centerid` int(10) UNSIGNED NOT NULL,
  `brgyid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disasterid` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `centername` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `centeraddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuations`
--

INSERT INTO `evacuations` (`centerid`, `brgyid`, `disasterid`, `centername`, `centeraddress`, `latitude`, `longitude`, `info`, `capacity`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Bagong Silang Elementary School', 'Bagong Silang, Samson St, Sucat, Muntinlupa, Metro Manila', '14.44414305', '121.042098899243', 'It has a bathroom, storage room and other facilities that can used in case of emergency.', '400', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(2, '1', '1', 'Muntinlupa Business High School Sucat Annex', 'Dir. A. Bunye, Sucat, Muntinlupa, Kalakhang Maynila', '14.4578728', '121.05286740965056', 'This School is being used if there is no other option in case a calamity occurred it has facility that can accommodate netizens.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(3, '1', '1', 'Sucat Elementary School', 'Sucat Elementary School, Purok 4 Street, Muntinlupa City, Metro Manila', '14.4575151', '121.052702302661', 'This is used as emergency evacuation center in cased of a calamity.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(4, '2', '3', 'Muntinlupa Business High School', '146B Espeleta St, Cupang, Muntinlupa, Metro Manila', '14.4413781999999', '121.049919266302', 'This school can able facility in case of emergency and needed as an alternative to the evacuees.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(5, '2', '1', 'Buli Elementary School', 'Espeleta St, Cupang, Muntinlupa, 1772 Metro Manila', '14.443352', '121.048043260324', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(6, '3', '1', 'Cupang Elementary School', 'Manuel L. Quezon, Cupang, Muntinlupa, 1770 Metro Manila', '14.4303993999999', '121.049493083733', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(7, '4', '3', 'Alabang Elementary School', 'Mendiola, Alabang, Muntinlupa, 1780 Metro Manila', '14.42091125', '121.048927348937', 'This school is qualified to be used in case they need an evacuation center.', '250', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(8, '4', '2', 'Pedro E. Diaz High School', 'UP Side Subdivision, Alabang, Muntinlupa, 1780 Metro Manila', '14.41152205', '121.044237229562', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(9, '5', '1', 'De La Salle - Santiago Zobel School', 'University Ave, Ayala Alabang, Muntinlupa, 1780 Metro Manila', '14.41008095', '121.019763823878', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(10, '6', '1', 'Bayanan Elementary School', 'Bayanan, Bayanan Baywalk, Muntinlupa City, Metro Manila', '14.40696645', '121.045273361328', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(11, '6', '2', 'Bayanan Elementary School Unit 1', 'Bautista street, Ext. Baywalk CITY OF MUNTINLUPA, NCR FOURTH DISTRICT', '14.4121343', '121.051643857209', 'This school is qualified to be used in case they need an evacuation center.', '350', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(12, '7', '1', 'F. de Mesa Memorial Elementary School', 'Freedom Hills Subdivision, Putatan, Muntinlupa, 1772 Kalakhang Maynila', '14.401469', '121.044160948681', 'This school is qualified to be used in case they need an evacuation center.', '400', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(13, '7', '2', 'Putatan Elementary School', '291 San Guillermo St, Putatan, Muntinlupa, 1772 Metro Manila', '14.39435755', '121.05013713217', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(14, '8', '1', 'Itaas Elementary School', '88 Bilibid Rd, Poblacion, Muntinlupa, Metro Manila', '14.3864298', '121.03133254', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(15, '8', '1', 'Muntinlupa Central School', 'Rizal St, Muntinlupa City, 1776 Metro Manila', '14.3883044', '121.04431244', 'This school is qualified to be used in case they need an evacuation center.', '450', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(16, '8', '1', 'Pamantasan ng Lungsod ng Muntinlupa', 'University Road, Barangay Poblacion, 1770 Muntinlupa City', '14.3891566', '121.02533422044', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(17, '8', '2', 'Muntinlupa National High School', 'University Rd, Poblacion, Muntinlupa, 1776 Metro Manila', '14.3887536', '121.02775521', 'This school is qualified to be used in case they need an evacuation center.', '400', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(18, '8', '2', 'Muntinlupa National High School(MNHS) Annex', 'NBP Reservation, Brgy. Poblacion', '14.36927245', '121.02533422044', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(19, '9', '1', 'Lyceum Of Alabang', 'KM 30 National Road, Tunasan Muntinlupa City', '14.37281895', '121.04743349', 'This school is qualified to be used in case they need an evacuation center.', '400', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(20, '9', '1', 'Muntinlupa Science High School', '999 Buendia St, Tunasan, Muntinlupa, 1774 Metro Manila', '14.3841348', '121.05190378', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(21, '9', '1', 'Santo Niño School of Muntinlupa', 'B1 L6 St. Mary Street, Tunasan, Sto. Nino Village, Muntinlupa, 1773', '14.38608635', '121.04791051', 'This school is qualified to be used in case they need an evacuation center.', '350', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(22, '9', '2', 'Tunasan Elementary School', '207 Buendia St, Tunasan, Muntinlupa, 1773 Metro Manila', '14.3810487', '121.05149441', 'This school is qualified to be used in case they need an evacuation center.', '500', '2020-08-10 10:19:23', '2020-08-10 10:19:23'),
(23, '9', '2', 'Muntinlupa National High School Tunasan Annex', '135 Manila S Rd, Tunasan, Muntinlupa, 1773 Metro Manila', '14.3879915', '121.0471758', 'This school is qualified to be used in case they need an evacuation center.', '400', '2020-08-10 10:19:24', '2020-08-10 10:19:24'),
(24, '7', '2', 'Putatan Covered Court', 'Bruger St, Putatan, Muntinlupa, Philippines', '14.39484', '121.04829', 'It has portable bathroom. Spacious and have a stock room.', '400', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evacuationstatus`
--

CREATE TABLE `evacuationstatus` (
  `statusid` bigint(20) UNSIGNED NOT NULL,
  `centerid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberofper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numcan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeupdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateadds` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactperson` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timefrom` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `evacuationstatus`
--

INSERT INTO `evacuationstatus` (`statusid`, `centerid`, `active`, `numberofper`, `numcan`, `timeupdate`, `dateadds`, `contactperson`, `phonenumber`, `timeto`, `timefrom`) VALUES
(1, '1', 'active', '500', '0', '14:38', 'September 30, 2020', 'Jiansel User', '09162634323', '09:00 AM', '07:00 AM'),
(2, '2', 'not active', '0', '', '', '', '', '', '', ''),
(3, '3', 'not active', '0', '', '', '', '', '', '', ''),
(4, '4', 'not active', '0', '', '', '', '', '', '', ''),
(5, '5', 'active', '480', '20', '21:36', 'September 28, 2020', 'Allyza Mae', '09753254985', '09:00 PM', '06:00 PM'),
(6, '6', 'not active', '0', '', '', '', '', '', '', ''),
(7, '7', 'active', '140', '110', '8:23', 'September 30, 2020', 'Eva Center', '09162634323', '18:47', '17:47'),
(8, '8', 'not active', '0', '', '', '', '', '', '', ''),
(9, '9', 'active', '0', '', '', '', 'staff', '09785451684', '06.00PM', '04.00PM'),
(10, '10', 'not active', '0', '', '', '', '', '', '', ''),
(11, '11', 'not active', '0', '', '', '', '', '', '', ''),
(12, '12', 'not active', '0', '', '', '', '', '', '', ''),
(13, '13', 'active', '0', '', '', '', 'Mike', '09824525489', '05.00PM', '04.00PM'),
(14, '14', 'not active', '0', '', '', '', '', '', '', ''),
(15, '15', 'active', '30', '420', '10:49', 'September 30, 2020', 'Eva Center', '09162634323', '13:24', '11:24'),
(16, '16', 'not active', '0', '', '', '', '', '', '', ''),
(17, '17', 'not active', '0', '', '', '', '', '', '', ''),
(18, '18', 'not active', '0', '', '', '', '', '', '', ''),
(19, '19', 'not active', '0', '', '', '', '', '', '', ''),
(20, '20', 'not active', '0', '', '', '', '', '', '', ''),
(21, '21', 'not active', '0', '', '', '', '', '', '', ''),
(22, '22', 'not active', '0', '', '', '', '', '', '', ''),
(23, '23', 'not active', '0', '', '', '', '', '', '', ''),
(24, '24', 'not active', '0', '', '', '', '', '', '', ''),
(25, '25', 'not active', '0', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `evacuees`
--

CREATE TABLE `evacuees` (
  `cueid` int(11) NOT NULL,
  `centerid` varchar(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` varchar(45) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `pregnant` varchar(11) NOT NULL,
  `senior` varchar(100) NOT NULL,
  `medical` varchar(50) NOT NULL,
  `specify` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evacuees`
--

INSERT INTO `evacuees` (`cueid`, `centerid`, `name`, `address`, `age`, `phone`, `gender`, `pwd`, `pregnant`, `senior`, `medical`, `specify`) VALUES
(1, '1', 'Glesie', 'Munisipyo', '21', '09087153015', 'Female', 'yes', 'no', 'yes', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `excessrelief`
--

CREATE TABLE `excessrelief` (
  `exid` int(11) NOT NULL,
  `centerid` varchar(11) NOT NULL,
  `reliefid` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `descripgo` longtext NOT NULL,
  `excedate` varchar(45) NOT NULL,
  `excetime` varchar(100) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excessrelief`
--

INSERT INTO `excessrelief` (`exid`, `centerid`, `reliefid`, `id`, `descripgo`, `excedate`, `excetime`, `remarks`) VALUES
(1, '1', '2', '4', '2 box of Assorted  Clothes', '2020-09-30', '05:36', 'excess'),
(2, '1', '1', '4', 'Noodles', '2020-09-30', '07:56', 'excess');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `firedetails`
--

CREATE TABLE `firedetails` (
  `fireid` int(11) NOT NULL,
  `disid` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `firelevel` varchar(11) NOT NULL,
  `incidentaddress` varchar(100) NOT NULL,
  `firetype` varchar(100) NOT NULL,
  `reason` varchar(45) NOT NULL,
  `damage` varchar(45) NOT NULL,
  `estincidentime` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `floodetails`
--

CREATE TABLE `floodetails` (
  `floodid` int(11) NOT NULL,
  `disid` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `assesment` varchar(255) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floodetails`
--

INSERT INTO `floodetails` (`floodid`, `disid`, `id`, `assesment`, `remarks`, `images`) VALUES
(1, '1', '1', 'nvjsdnckc', 'asncion', 'asncion'),
(2, '2', '1', 'hiui', 'mom', 'mom'),
(3, '2', '1', 'infionf', 'keine', '/images/1601029095.png'),
(4, '3', '1', 'alaraming', 'verified', '/images/1601176372.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `floodreport`
--

CREATE TABLE `floodreport` (
  `reportid` int(11) NOT NULL,
  `disasterid` varchar(11) NOT NULL,
  `areaaffected` varchar(255) NOT NULL,
  `injured` text NOT NULL,
  `deaths` text NOT NULL,
  `missing` text NOT NULL,
  `housedamage` text NOT NULL,
  `estamtdmg` text NOT NULL,
  `numrescued` text NOT NULL,
  `reportime` text NOT NULL,
  `reportyear` text NOT NULL,
  `reportdate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `floodwarnings`
--

CREATE TABLE `floodwarnings` (
  `warningid` int(11) NOT NULL,
  `floodarea` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `warningdate` text NOT NULL,
  `warningtime` text NOT NULL,
  `warningyear` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical`
--

CREATE TABLE `medical` (
  `medid` int(11) NOT NULL,
  `roadid` varchar(11) NOT NULL,
  `lesscon` varchar(45) NOT NULL,
  `levelcon` varchar(45) NOT NULL,
  `medhis` varchar(255) NOT NULL,
  `illness` varchar(100) NOT NULL,
  `assesment` varchar(255) NOT NULL,
  `transporto` varchar(45) NOT NULL,
  `whereto` varchar(100) NOT NULL,
  `signed` varchar(100) NOT NULL,
  `alive` varchar(50) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical`
--

INSERT INTO `medical` (`medid`, `roadid`, `lesscon`, `levelcon`, `medhis`, `illness`, `assesment`, `transporto`, `whereto`, `signed`, `alive`, `images`) VALUES
(1, '1', 'NO', 'Verbal', 'Already Experienced the Same before. no allergies or any other symptoms .', 'Chest Pain', 'Give First Aid', 'Yes', 'Alabang Medical Center', 'no need', 'Yes', '/images/1600828063.jpg'),
(2, '1', 'NO', 'Verbal', 'Dont have allergies,  First time having this ache.', 'Chest Pain', 'Give First Aid', 'Yes', 'Alabang Medical Center', 'no need', 'Yes', '/images/1600828392.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_08_16_013206_create_users_phone_number_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `minusinfo`
--

CREATE TABLE `minusinfo` (
  `minid` int(11) NOT NULL,
  `centerid` varchar(11) NOT NULL,
  `id` varchar(45) NOT NULL,
  `numminus` varchar(100) NOT NULL,
  `numper` varchar(45) NOT NULL,
  `nucan` varchar(100) NOT NULL,
  `timeget` varchar(45) NOT NULL,
  `datereceived` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minusinfo`
--

INSERT INTO `minusinfo` (`minid`, `centerid`, `id`, `numminus`, `numper`, `nucan`, `timeget`, `datereceived`) VALUES
(1, '5', '4', '50', '450', '50', '17:00', 'September 28, 2020'),
(2, '5', '4', '20', '430', '70', '19:00', 'September 28, 2020'),
(3, '15', '4', '10', '30', '420', '10:49', 'September 30, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `obtable`
--

CREATE TABLE `obtable` (
  `obid` int(11) NOT NULL,
  `roadid` varchar(11) NOT NULL,
  `lesscon` text NOT NULL,
  `levelcon` text NOT NULL,
  `painscale` text NOT NULL,
  `lmp` text NOT NULL,
  `aog` text NOT NULL,
  `edd` text NOT NULL,
  `apgarscore` text NOT NULL,
  `transporto` text NOT NULL,
  `whereto` varchar(255) NOT NULL,
  `signed` text NOT NULL,
  `notes` varchar(255) NOT NULL,
  `alive` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obtable`
--

INSERT INTO `obtable` (`obid`, `roadid`, `lesscon`, `levelcon`, `painscale`, `lmp`, `aog`, `edd`, `apgarscore`, `transporto`, `whereto`, `signed`, `notes`, `alive`, `images`) VALUES
(1, '5', 'No', 'Verbal', '5', '2020-04-20', '24', '2021-01-18', '23', 'Yes', 'Asian Hospital', 'no need', 'Manganganak na.', 'Yes', '/images/1600882245.jpg'),
(2, '6', 'No', 'Alert', '4', '2020-09-28', '24', '2020-10-10', '52', 'No', 'No Need', 'no need', 'bubyuyu', 'Yes', '/images/1601023164.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `otherid` int(11) NOT NULL,
  `roadid` varchar(11) NOT NULL,
  `needed` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`otherid`, `roadid`, `needed`, `remarks`, `images`) VALUES
(1, '3', 'Need Assistance in their family', 'responded', '/images/1600886027.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientid` int(11) NOT NULL,
  `patientype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientid`, `patientype`) VALUES
(1, 'Medical'),
(2, 'Trauma'),
(3, 'OB'),
(4, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `receivedmc`
--

CREATE TABLE `receivedmc` (
  `mcid` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `namedonator` varchar(11) NOT NULL,
  `reliefid` varchar(45) NOT NULL,
  `descigood` longtext NOT NULL,
  `dategive` varchar(45) NOT NULL,
  `dateyear` varchar(45) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receivedmc`
--

INSERT INTO `receivedmc` (`mcid`, `id`, `namedonator`, `reliefid`, `descigood`, `dategive`, `dateyear`, `images`) VALUES
(1, '1', 'Makati', '4', 'Assorted Clothes 5 boxes, canned goods 10box , 50 sacks of rice', '2020-08-23', '2020', '/images/1601377571.PNG'),
(2, '1', 'Anonymous', '1', 'dry goods 10box', '2020-09-20', '2020', '/images/1601382394.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `recordisaster`
--

CREATE TABLE `recordisaster` (
  `recid` int(11) NOT NULL,
  `disasterid` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `descriptions` longtext NOT NULL,
  `recordate` varchar(45) NOT NULL,
  `recordyear` varchar(45) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recordisaster`
--

INSERT INTO `recordisaster` (`recid`, `disasterid`, `id`, `descriptions`, `recordate`, `recordyear`, `remarks`) VALUES
(1, '1', '1', 'Received Report From Sucat About Flood because of Bagyo.\r\nWarning only no damage', '2017-05-23', '2017', 'no damage'),
(2, '2', '3', 'Fire Incident occur', '2017-06-05', '2017', 'no major damage'),
(3, '3', '2', '3.4 magnitude occur, give warning to be prepared', '2017-08-06', '2017', 'no major damage11'),
(4, '1', '1', 'Flood incident', '2018-06-05', '2018', 'no damage done'),
(5, '1', '1', 'Warning message', '2020-09-15', '2020', 'no major damage'),
(6, '1', '1', 'Warning  Area', '2020-09-30', '2020', 'no major damage');

-- --------------------------------------------------------

--
-- Table structure for table `reliefdonations`
--

CREATE TABLE `reliefdonations` (
  `donateid` bigint(20) UNSIGNED NOT NULL,
  `reliefid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `centerid` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namedonate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reyear` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reliefdonations`
--

INSERT INTO `reliefdonations` (`donateid`, `reliefid`, `centerid`, `id`, `namedonate`, `description`, `redate`, `reyear`, `images`, `created_at`, `updated_at`) VALUES
(1, '3', '7', '4', 'Anonymous', 'Boxes of Biogesic', '2019-06-21', '2019', '', NULL, NULL),
(2, '3', '1', '4', 'Anonymous', 'ngoingingirg', '2017-05-02', '2017', '/images/1601052776.jpg', NULL, NULL),
(3, '1', '1', '4', 'Anonymous', 'qeifnienfinf', '2017-08-25', '2017', '/images/1601052987.png', NULL, NULL),
(4, '2', '5', '4', 'Makati LGU', '1 sacks Assorted Clothes for kids and Adults\r\nClean undergarments 3 box', '2020-09-28', '2020', '/images/1601273965.PNG', NULL, NULL),
(5, '1', '7', '4', 'Makati LGU', 'Canned goods biscuit ricee', '2020-09-29', '2020', '/images/1601320742.PNG', NULL, NULL),
(6, '2', '5', '4', 'Anonymous', 'Assorted Clothes 10boxes', '2020-09-30', '2020', '/images/1601424051.PNG', NULL, NULL),
(7, '2', '15', '4', 'Anonymous', 'Assorted  Clothes 10 boxes kids and adults', '2020-09-30', '2020', '/images/1601434409.PNG', NULL, NULL),
(8, '2', '1', '4', 'Anonymous', 'Assorted tshirt for adults and kids', '2020-09-30', '2020', '/images/1601448100.PNG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reliefmaptable`
--

CREATE TABLE `reliefmaptable` (
  `reliefmap` int(11) NOT NULL,
  `centerid` varchar(10) NOT NULL,
  `reliefid` varchar(10) NOT NULL,
  `reliefrequest` varchar(255) NOT NULL,
  `lastupdate` varchar(100) NOT NULL,
  `lastdate` varchar(100) NOT NULL,
  `persontocon` varchar(255) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `timefrom` varchar(255) NOT NULL,
  `timeto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reliefmaptable`
--

INSERT INTO `reliefmaptable` (`reliefmap`, `centerid`, `reliefid`, `reliefrequest`, `lastupdate`, `lastdate`, `persontocon`, `phonenumber`, `timefrom`, `timeto`) VALUES
(1, '1', '3', 'In needs of neozep, paracetamol', '14:39', 'September 30, 2020', 'Mister Error', '09087153018', '5:00 PM', '7:00 PM'),
(2, '2', '5', '', '', '', '', '', '', ''),
(3, '3', '5', '', '', '', '', '', '', ''),
(4, '4', '5', '', '', '', '', '', '', ''),
(5, '5', '5', 'neozep, biogesic', '8:0', 'September 30, 2020', 'Eva Center', '09162634323', '8:00 AM', '2:00 PM'),
(6, '6', '5', '', '', '', '', '', '', ''),
(7, '7', '5', 'Dry Foods and Easy to Open Canned Goods.', '2:2', 'September 29, 2020', 'Eva Center', '09785451684', '9:00 AM', '2:00 PM'),
(8, '8', '5', '', '', '', '', '', '', ''),
(9, '9', '5', '', '', '', 'Eva Center', '09162634323', '03.00PM', '03.00PM'),
(10, '10', '5', '', '', '', 'staff', '09785451684', '04.00PM', '06.00PM'),
(11, '11', '5', '', '', '', '', '', '', ''),
(12, '12', '5', '', '', '', '', '', '', ''),
(13, '13', '5', '', '', '', '', '', '', ''),
(14, '14', '5', '', '', '', '', '', '', ''),
(15, '15', '5', 'canned goods, medicine, foods', '10:50', 'September 30, 2020', 'Mister Error', '09087153018', '06.00AM', '02.00PM'),
(16, '16', '5', '', '', '', '', '', '', ''),
(17, '17', '5', '', '', '', '', '', '', ''),
(18, '18', '5', '', '', '', '', '', '', ''),
(19, '19', '5', '', '', '', '', '', '', ''),
(20, '20', '5', '', '', '', '', '', '', ''),
(21, '21', '5', '', '', '', '', '', '', ''),
(22, '22', '5', '', '', '', '', '', '', ''),
(23, '23', '5', '', '', '', '', '', '', ''),
(24, '24', '5', '', '', '', '', '', '', ''),
(25, '25', '5', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reliefs`
--

CREATE TABLE `reliefs` (
  `reliefid` int(10) UNSIGNED NOT NULL,
  `reliefcategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconpic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reliefs`
--

INSERT INTO `reliefs` (`reliefid`, `reliefcategory`, `iconpic`, `created_at`, `updated_at`) VALUES
(1, 'Water,Rice,Canned Goods, Noodles', 'images/yellowneeds.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(2, 'Clothes', 'images/clothes.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(3, 'Medicine', 'images/medicine.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(4, 'All is Needed', 'images/all.png', '2020-08-10 10:19:22', '2020-08-10 10:19:22'),
(5, 'No Needed', 'images/pins.png', '2020-09-09 03:56:07', '2020-09-09 03:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `reliefstatus`
--

CREATE TABLE `reliefstatus` (
  `statid` bigint(20) UNSIGNED NOT NULL,
  `centerid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reliefid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripgoods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `releasedate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `releasetime` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whogive` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reliefstatus`
--

INSERT INTO `reliefstatus` (`statid`, `centerid`, `id`, `reliefid`, `descripgoods`, `releasedate`, `releasetime`, `whogive`, `remarks`, `images`, `created_at`, `updated_at`) VALUES
(1, '5', '1', '3', 'fneifnsdf', '2020-09-23', '16:30', 'mcdrrmo', 'received', '/images/1601025247.jpg', NULL, NULL),
(2, '1', '1', '4', 'nebndkoadm', '2020-09-22', '19:31', 'mcdrrmo', 'received', '/images/1601025247.jpg', NULL, NULL),
(3, '7', '1', '3', '10 Box of  Paracetamol, Vitamins for Kids, 10 Box of Neozep', '2019-05-26', '20:13', 'mcdrrmo', 'received', '/images/1601025247.jpg', NULL, NULL),
(4, '15', '1', '4', '10 sacks rice\r\nAssorted Clothes 5 box\r\n1 box medicine compose of paracetamol', '2019-05-23', '14:00', 'mcdrrmo', 'received', '/images/1601271071.PNG', NULL, NULL),
(5, '5', '1', '3', '10boxes of medicine. neozep 5 biogesic', '2020-10-01', '11:00', 'mcdrrmo', 'not received', '/images/1601424957.PNG', NULL, NULL),
(6, '1', '1', '3', '10 box neozep', '2020-09-30', '18:45', 'mcdrrmo', 'not received', '/images/1601448325.PNG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reliefupdate`
--

CREATE TABLE `reliefupdate` (
  `updateid` int(11) NOT NULL,
  `centerid` varchar(11) NOT NULL,
  `id` varchar(45) NOT NULL,
  `statid` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  `reliedupdate` varchar(100) NOT NULL,
  `relieftimeupdate` varchar(45) NOT NULL,
  `images` varchar(50) DEFAULT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reliefupdate`
--

INSERT INTO `reliefupdate` (`updateid`, `centerid`, `id`, `statid`, `description`, `reliedupdate`, `relieftimeupdate`, `images`, `remark`) VALUES
(1, '1', '4', '2', 'We got everything from mcdrrmo', '2020-09-23', '09:00', '/images/1601314932.PNG', 'received'),
(2, '7', '4', '3', 'Got All the medicine for the kids', '2019-05-28', '10:00', '/images/1601315964.PNG', 'received'),
(3, '5', '4', '1', '10box of neozep same', '2020-09-30', '07:58', '/images/1601423954.PNG', 'received'),
(4, '15', '4', '4', 'ok', '2019-05-23', '17:00', '/images/1601425554.PNG', 'received');

-- --------------------------------------------------------

--
-- Table structure for table `requestable`
--

CREATE TABLE `requestable` (
  `reqid` int(11) NOT NULL,
  `reliefid` varchar(11) NOT NULL,
  `centerid` varchar(45) NOT NULL,
  `id` varchar(11) NOT NULL,
  `refquest` varchar(255) NOT NULL,
  `timreq` varchar(45) NOT NULL,
  `datereq` varchar(45) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestable`
--

INSERT INTO `requestable` (`reqid`, `reliefid`, `centerid`, `id`, `refquest`, `timreq`, `datereq`, `remarks`) VALUES
(1, '4', '1', '4', 'We also Need Tents and Cream for Mosquito.', '7:45', 'September 21, 2020', 'respond'),
(2, '3', '1', '4', 'Paracetamol, Vitamins for Kids and Adults.', '9:7', 'September 22, 2020', 'respond'),
(3, '2', '1', '4', 'Undergarments, Tshirt and small shirt for kids.', '9:9', 'September 22, 2020', 'respond'),
(4, '3', '1', '4', 'We also need masks, Alcohol.', '9:59', 'September 22, 2020', 'respond'),
(5, '1', '5', '4', 'Dry Goods, Easy to eat.', '15:30', 'September 23, 2020', 'respond'),
(6, '1', '1', '4', 'Dry Foods', '11:19', 'September 24, 2020', 'respond'),
(7, '4', '1', '4', 'Dry goods, Biogesic', '12:21', 'September 24, 2020', 'respond'),
(8, '4', '1', '4', 'Water, Dry Foods and medicine for kids syrup tempra and assorted clothes', '14:4', 'September 28, 2020', 'respond'),
(9, '2', '5', '4', 'Clothes for kids.', '14:13', 'September 28, 2020', 'respond'),
(10, '1', '7', '4', 'canned good, biscuit', '3:14', 'September 28, 2020', 'respond'),
(11, '1', '7', '4', 'Dry Foods and Easy to Open Canned Goods.', '2:2', 'September 29, 2020', 'respond'),
(12, '3', '5', '4', 'neozep, biogesic', '8:0', 'September 30, 2020', 'respond'),
(13, '4', '15', '4', 'canned goods, medicine, foods', '10:50', 'September 30, 2020', 'respond'),
(14, '3', '1', '4', 'In needs of neozep, paracetamol', '14:39', 'September 30, 2020', 'respond');

-- --------------------------------------------------------

--
-- Table structure for table `roadaccidents`
--

CREATE TABLE `roadaccidents` (
  `roadid` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `callfrom` varchar(100) NOT NULL,
  `phonum` varchar(11) NOT NULL,
  `victimgender` varchar(11) NOT NULL,
  `incilocation` varchar(100) NOT NULL,
  `team` varchar(11) NOT NULL,
  `relation` varchar(100) NOT NULL,
  `roadate` varchar(11) NOT NULL,
  `yearda` varchar(11) NOT NULL,
  `calltime` varchar(11) NOT NULL,
  `tag` varchar(11) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `finished` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roadaccidents`
--

INSERT INTO `roadaccidents` (`roadid`, `id`, `callfrom`, `phonum`, `victimgender`, `incilocation`, `team`, `relation`, `roadate`, `yearda`, `calltime`, `tag`, `remarks`, `finished`) VALUES
(1, '1', 'George Asufra', '09087153018', 'Male', 'Sucat Highway', 'RV2', 'Good Samaritan', '2017-05-22', '2017', '11:16', 'false', 'Nahihirapang huminga.', 'yes'),
(2, '1', 'Danica Martin', '09163432232', 'Female', 'Starmall Entrance GroundFloor', 'RV1', 'Friend', '2017-10-18', '2017', '16:50', 'none', 'Can\'t breath.', 'yes'),
(3, '1', 'Danica Martin', '09163432232', 'Female', 'Starmall Entrance GroundFloor', 'RV1', 'Friend', '2017-10-18', '2017', '16:50', 'none', 'Can\'t breath.', 'yes'),
(4, '1', 'Dummy Four', '09228488115', 'Male', 'Munisipyo', 'RV3', 'Good Samaritan', '2017-11-21', '2017', '10:53', 'none', 'Nakitang nabangga sa isa pang motor', 'yes'),
(5, '1', 'Dummy OB', '09163432232', 'Female', 'Near Ina ng Awa', 'RV3', 'Family', '2017-12-21', '2017', '07:14', 'none', 'Malapit na maglabor.', 'yes'),
(6, '1', 'Dummy six', '09163432232', 'Female', 'Starmall Entrance GroundFloor', 'RV3', 'Friend', '2018-10-18', '2018', '21:36', 'none', 'nonznsacsakj', 'yes'),
(7, '1', 'George Asufra', '09163432232', 'Female', 'Sucat Highway', 'RV2', 'Friend', '2019-08-25', '2019', '00:19', 'none', 'Car Accident', 'yes'),
(8, '1', 'Dummy Nine', '09163432232', 'Male', 'HighWay Sucat Exit', 'RV4', 'Family', '2020-09-30', '2020', '00:05', 'none', 'Collision on the barrier.', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `roadconditions`
--

CREATE TABLE `roadconditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trauma`
--

CREATE TABLE `trauma` (
  `traumaid` int(11) NOT NULL,
  `roadid` varchar(11) NOT NULL,
  `lesscon` varchar(45) NOT NULL,
  `levelcon` varchar(45) NOT NULL,
  `injuries` varchar(45) NOT NULL,
  `tbsa` varchar(11) NOT NULL,
  `assesment` varchar(100) NOT NULL,
  `casualties` varchar(45) NOT NULL,
  `estcasual` varchar(45) NOT NULL,
  `transporto` varchar(45) NOT NULL,
  `whereto` varchar(100) NOT NULL,
  `signed` varchar(45) NOT NULL,
  `notes` varchar(100) NOT NULL,
  `alive` varchar(45) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trauma`
--

INSERT INTO `trauma` (`traumaid`, `roadid`, `lesscon`, `levelcon`, `injuries`, `tbsa`, `assesment`, `casualties`, `estcasual`, `transporto`, `whereto`, `signed`, `notes`, `alive`, `images`) VALUES
(1, '2', 'NO', 'Verbal', 'Tenderness', 'No Burn', 'Due to Hangover', 'No', 'no casualties', 'Yes', 'Center', 'no need', 'Give Chocolate', 'Yes', '/images/1600878385.PNG'),
(2, '4', 'Yes', 'Umresponsive', 'Concussion', 'No Burn', 'Drunk Driving', 'No', 'no casualties', 'Yes', 'Asian Hospital', 'no need', 'shock', 'No', '/images/1601022925.jpg'),
(3, '7', 'NO', 'Verbal', 'Concussion', 'No Burn', 'Drunk Driving', 'Yes', '500', 'Yes', 'Sucat Hospital', 'no need', 'Conciuous but have damage', 'Yes', '/images/1601438913.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userphone` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `description`, `userphone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'April Anne', 'anneanne', 'martindanica21@gmail.com', 'Super Admin', '09087153018', NULL, '$2y$10$Bjh4VcNLZn1byrISjj4.9e3bciUtLdzgAPHJfItZwigBgnpjkRkpC', NULL, '2020-08-15 22:59:43', '2020-08-15 22:59:43'),
(2, 'staff', 'stuffie', 'staff@staff.com', 'Evacuation Staff', '09785451684', NULL, '$2y$10$jojW.3P7ldc3H9HCYy0c8OajfHoNpFSDw/m.kB.Wl4fDFxRtA7CeW', NULL, '2020-08-16 00:28:03', '2020-08-16 00:28:03'),
(3, 'Test', 'tess', 'tess@yahoo.com', 'Super Admin', '09753254985', NULL, '$2y$10$m.vuhtTn6SGhyqjLtnGT7elughgx9vko74bDCUo7IrE6H2EfLEOfe', NULL, '2020-09-09 07:05:53', '2020-09-09 07:05:53'),
(4, 'Eva Center', 'Evie', 'evacenter@gmail.com', 'Evacuation Staff', '09162634323', NULL, '$2y$10$.l/qbk/aNdD5O8qkrFfNE.QzR8rNvqiZSAgLpL8opYQPll9yEA9ue', NULL, '2020-09-09 07:09:12', '2020-09-09 07:09:12'),
(5, 'Mister Error', 'errie', 'error@gmail.com', 'Evacuation Staff', '09087153018', NULL, '$2y$10$zvmBvKMBVRbfjlRHTSP.w.zQWJdx.rKAmbxJmcf7dtNiK6AWvgEG6', NULL, '2020-09-09 07:15:25', '2020-09-09 07:15:25'),
(6, 'George', 'Georgie', 'george@gmail.com', 'Super Admin', '', NULL, '$2y$10$W4t1WOquazH/9LBjdErJnOd/bU89lsacA5pPOZldrpI5MRctTcl22', NULL, '2020-09-09 07:17:15', '2020-09-09 07:17:15'),
(7, 'Oliver', 'Jan', 'jan@yahoo.com', 'Super Admin', '09162634323', NULL, '$2y$10$Y5zYj9taSa5zse6hcrVKb.ZFVT4ufcUQ1ZYtk5GEJhVF3kAAgQ/fa', NULL, '2020-09-09 07:22:26', '2020-09-09 07:22:26'),
(8, 'Doraemon', 'Dioris', 'dori@gmail.com', 'Super Admin', '', NULL, '$2y$10$9ZxNsxHwFm46JSIJ8Re0O../sx/wuh.zaN2SluThKdiOzJ39pLsfy', NULL, '2020-09-09 07:28:50', '2020-09-09 07:28:50'),
(9, 'Regina', 'Regie', 'regie@gmail.com', 'IT Staff', '', NULL, '$2y$10$FdRjMLy.gwxlBnVI8hUjGeYx8fBprPdG..GBtcZxBNw4sPbv4SUKe', NULL, '2020-09-09 07:59:36', '2020-09-09 07:59:36'),
(10, 'Maxine', 'Max', 'max@yahoo.com', 'Super Admin', '', NULL, '$2y$10$LBjpfC2uD90vow49WGDvY.GS3p4XkUiiRzg/Ze7YPHWky8SU/tawm', NULL, '2020-09-09 08:03:37', '2020-09-09 08:03:37'),
(11, 'Jiansel User', 'user23', 'user@gmail.com', 'Evacuation Staff', '09162634323', NULL, '$2y$10$5YGIEceTM1KJO45dBF6n5OoEpdlvzB0RiQBbC4KY1O7cfom7my8Rm', NULL, '2020-09-09 08:19:39', '2020-09-09 08:19:39'),
(12, 'Tommy', 'tomtom', 'tom@yahoo.com', 'Super Admin', '', NULL, '$2y$10$WdheYIuEzHuZJsCirKSxo.xWedZs0J.Lh3e4eFxn.mW0gdIesukde', NULL, '2020-09-09 08:39:35', '2020-09-09 08:39:35'),
(13, 'Allyza Mae', 'Ally', 'ally@gmail.com', 'Evacuation Staff', '09753254985', NULL, '$2y$10$w0hBeCTNRMeMbsu1KYLrtuVEVFeviyGGXMwrgBwCPx2uHq9rTbFNS', NULL, '2020-09-20 04:01:22', '2020-09-20 04:01:22'),
(14, 'Mike', 'papa', 'mike@gmail.com', 'Evacuation Staff', '09824525489', NULL, '$2y$10$AVrtA46Z/lRiyLtWGTf4n.r14cigZAgI6nisDMGlGBr2tsekYHf4C', NULL, '2020-09-29 21:09:03', '2020-09-29 21:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `users_phone_number`
--

CREATE TABLE `users_phone_number` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_phone_number`
--

INSERT INTO `users_phone_number` (`id`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, '09087153018', '2020-08-15 18:12:56', '2020-08-15 18:12:56'),
(2, '+639087153018', '2020-08-15 18:44:04', '2020-08-15 18:44:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accidentcategorys`
--
ALTER TABLE `accidentcategorys`
  ADD PRIMARY KEY (`incidentid`);

--
-- Indexes for table `accidentdetails`
--
ALTER TABLE `accidentdetails`
  ADD PRIMARY KEY (`accid`);

--
-- Indexes for table `addinfo`
--
ALTER TABLE `addinfo`
  ADD PRIMARY KEY (`evaid`);

--
-- Indexes for table `announcecategorys`
--
ALTER TABLE `announcecategorys`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announceid`);

--
-- Indexes for table `barangays`
--
ALTER TABLE `barangays`
  ADD PRIMARY KEY (`brgyid`);

--
-- Indexes for table `casualties`
--
ALTER TABLE `casualties`
  ADD PRIMARY KEY (`casualid`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collisiondetails`
--
ALTER TABLE `collisiondetails`
  ADD PRIMARY KEY (`colid`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contactid`),
  ADD KEY `centerid` (`centerid`,`id`);

--
-- Indexes for table `deathdetails`
--
ALTER TABLE `deathdetails`
  ADD PRIMARY KEY (`deathid`);

--
-- Indexes for table `disastercall`
--
ALTER TABLE `disastercall`
  ADD PRIMARY KEY (`disid`);

--
-- Indexes for table `disastercasualties`
--
ALTER TABLE `disastercasualties`
  ADD PRIMARY KEY (`casualid`),
  ADD KEY `disid` (`disid`);

--
-- Indexes for table `disasters`
--
ALTER TABLE `disasters`
  ADD PRIMARY KEY (`disasterid`);

--
-- Indexes for table `emergencycontacts`
--
ALTER TABLE `emergencycontacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evacuations`
--
ALTER TABLE `evacuations`
  ADD PRIMARY KEY (`centerid`),
  ADD KEY `brgyid` (`brgyid`),
  ADD KEY `disasterid` (`disasterid`);

--
-- Indexes for table `evacuationstatus`
--
ALTER TABLE `evacuationstatus`
  ADD PRIMARY KEY (`statusid`);

--
-- Indexes for table `evacuees`
--
ALTER TABLE `evacuees`
  ADD PRIMARY KEY (`cueid`);

--
-- Indexes for table `excessrelief`
--
ALTER TABLE `excessrelief`
  ADD PRIMARY KEY (`exid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firedetails`
--
ALTER TABLE `firedetails`
  ADD PRIMARY KEY (`fireid`);

--
-- Indexes for table `floodetails`
--
ALTER TABLE `floodetails`
  ADD PRIMARY KEY (`floodid`);

--
-- Indexes for table `floodreport`
--
ALTER TABLE `floodreport`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `floodwarnings`
--
ALTER TABLE `floodwarnings`
  ADD PRIMARY KEY (`warningid`);

--
-- Indexes for table `medical`
--
ALTER TABLE `medical`
  ADD PRIMARY KEY (`medid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minusinfo`
--
ALTER TABLE `minusinfo`
  ADD PRIMARY KEY (`minid`);

--
-- Indexes for table `obtable`
--
ALTER TABLE `obtable`
  ADD PRIMARY KEY (`obid`),
  ADD KEY `accid` (`roadid`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`otherid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `receivedmc`
--
ALTER TABLE `receivedmc`
  ADD PRIMARY KEY (`mcid`);

--
-- Indexes for table `recordisaster`
--
ALTER TABLE `recordisaster`
  ADD PRIMARY KEY (`recid`);

--
-- Indexes for table `reliefdonations`
--
ALTER TABLE `reliefdonations`
  ADD PRIMARY KEY (`donateid`),
  ADD KEY `reliefid` (`reliefid`);

--
-- Indexes for table `reliefmaptable`
--
ALTER TABLE `reliefmaptable`
  ADD PRIMARY KEY (`reliefmap`);

--
-- Indexes for table `reliefs`
--
ALTER TABLE `reliefs`
  ADD PRIMARY KEY (`reliefid`);

--
-- Indexes for table `reliefstatus`
--
ALTER TABLE `reliefstatus`
  ADD PRIMARY KEY (`statid`);

--
-- Indexes for table `reliefupdate`
--
ALTER TABLE `reliefupdate`
  ADD PRIMARY KEY (`updateid`);

--
-- Indexes for table `requestable`
--
ALTER TABLE `requestable`
  ADD PRIMARY KEY (`reqid`);

--
-- Indexes for table `roadaccidents`
--
ALTER TABLE `roadaccidents`
  ADD PRIMARY KEY (`roadid`);

--
-- Indexes for table `trauma`
--
ALTER TABLE `trauma`
  ADD PRIMARY KEY (`traumaid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_phone_number`
--
ALTER TABLE `users_phone_number`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accidentcategorys`
--
ALTER TABLE `accidentcategorys`
  MODIFY `incidentid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `accidentdetails`
--
ALTER TABLE `accidentdetails`
  MODIFY `accid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `addinfo`
--
ALTER TABLE `addinfo`
  MODIFY `evaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `casualties`
--
ALTER TABLE `casualties`
  MODIFY `casualid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collisiondetails`
--
ALTER TABLE `collisiondetails`
  MODIFY `colid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deathdetails`
--
ALTER TABLE `deathdetails`
  MODIFY `deathid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `disastercall`
--
ALTER TABLE `disastercall`
  MODIFY `disid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `disastercasualties`
--
ALTER TABLE `disastercasualties`
  MODIFY `casualid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `disasters`
--
ALTER TABLE `disasters`
  MODIFY `disasterid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emergencycontacts`
--
ALTER TABLE `emergencycontacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `evacuations`
--
ALTER TABLE `evacuations`
  MODIFY `centerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `evacuationstatus`
--
ALTER TABLE `evacuationstatus`
  MODIFY `statusid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `evacuees`
--
ALTER TABLE `evacuees`
  MODIFY `cueid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `excessrelief`
--
ALTER TABLE `excessrelief`
  MODIFY `exid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `firedetails`
--
ALTER TABLE `firedetails`
  MODIFY `fireid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `floodetails`
--
ALTER TABLE `floodetails`
  MODIFY `floodid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `floodwarnings`
--
ALTER TABLE `floodwarnings`
  MODIFY `warningid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `medical`
  MODIFY `medid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `minusinfo`
--
ALTER TABLE `minusinfo`
  MODIFY `minid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `obtable`
--
ALTER TABLE `obtable`
  MODIFY `obid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `otherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `receivedmc`
--
ALTER TABLE `receivedmc`
  MODIFY `mcid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recordisaster`
--
ALTER TABLE `recordisaster`
  MODIFY `recid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reliefdonations`
--
ALTER TABLE `reliefdonations`
  MODIFY `donateid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reliefmaptable`
--
ALTER TABLE `reliefmaptable`
  MODIFY `reliefmap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reliefs`
--
ALTER TABLE `reliefs`
  MODIFY `reliefid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reliefstatus`
--
ALTER TABLE `reliefstatus`
  MODIFY `statid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reliefupdate`
--
ALTER TABLE `reliefupdate`
  MODIFY `updateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `requestable`
--
ALTER TABLE `requestable`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roadaccidents`
--
ALTER TABLE `roadaccidents`
  MODIFY `roadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trauma`
--
ALTER TABLE `trauma`
  MODIFY `traumaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_phone_number`
--
ALTER TABLE `users_phone_number`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
