-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 05, 2020 at 06:52 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soulsoft_CA`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activityid` int(11) UNSIGNED NOT NULL,
  `activity` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `pagename` varchar(255) NOT NULL,
  `servicetype` enum('Bill','service','Normal','Wallet','Users','Distributor Retailors','Retailors') NOT NULL DEFAULT 'Normal',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isactive` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityid`, `activity`, `path`, `pagename`, `servicetype`, `createdat`, `updatedat`, `isactive`) VALUES
(1, 'RETAILOR', 'retailor', 'RETAILOR', 'Retailors', '2020-11-03 11:56:03', '2020-11-04 07:29:03', 1),
(2, 'User Master', 'userMaster', 'Users', 'Users', '2020-11-03 11:56:03', '2020-11-04 07:37:41', 1),
(3, 'SHOP ACT', 'shopAct', 'SHOP ACT', 'service', '2020-11-03 11:57:13', '2020-11-04 07:23:31', 1),
(4, 'UDYOG AADHAR', 'udyagAadhar', 'UDYOG AADHAR', 'service', '2020-11-03 11:57:13', '2020-11-04 07:23:36', 1),
(5, 'CA CERTIFICATE\r\n', 'certificate', 'CA CERTIFICATE\r\n', 'service', '2020-11-03 11:57:21', '2020-11-04 07:23:42', 0),
(6, 'REPORT\r\n', 'report', 'REPORT\r\n', 'service', '2020-11-03 11:57:21', '2020-11-04 07:23:48', 0),
(9, 'IMPORT EXPORT\r\n', 'importExport\r\n', 'IMPORT EXPORT\r\n', 'service', '2020-11-03 11:59:18', '2020-11-04 07:23:53', 1),
(11, 'INCOME\r\n', 'income\r\n', 'INCOME\r\n', 'service', '2020-11-03 12:01:15', '2020-11-04 07:23:59', 1),
(13, 'RETAILOR DISTRIBUTOR', 'retailorDistributor', 'RETAILOR DISTRIBUTOR', 'Distributor Retailors', '2020-11-03 12:01:38', '2020-11-04 07:27:59', 1),
(14, 'E-WAY BILL', 'ewayBill', 'E-WAY BILL', 'service', '2020-11-03 12:01:38', '2020-11-04 07:23:16', 1),
(15, 'BALANCESHEET', 'balancesheet', 'BALANCESHEET', 'service', '2020-11-03 12:02:22', '2020-11-04 07:23:09', 1),
(16, 'PANCARD\r\n', 'pancard\r\n', 'PANCARD\r\n', 'service', '2020-11-03 12:02:38', '2020-11-04 07:23:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ca_certificate`
--

CREATE TABLE `ca_certificate` (
  `certid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `nameasperadhar` varchar(100) NOT NULL,
  `pancardnumber` varchar(12) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `shopaddress` text NOT NULL,
  `homeaddress` text NOT NULL,
  `reason` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ca_certificate`
--

INSERT INTO `ca_certificate` (`certid`, `userid`, `nameasperadhar`, `pancardnumber`, `mobilenumber`, `emailid`, `shopaddress`, `homeaddress`, `reason`, `createdat`, `updatedat`) VALUES
(2, 1, 'PAWAR VIKAS BHASKAR', 'EEVPP4596B', '9657613754', 'vikas@nucleon.com', 'Pune Maharashtra', 'Rahuri Ahmadnagar Maharashtra', 'for school', '2020-10-18 23:39:05', '2020-10-23 11:11:08');

-- --------------------------------------------------------

--
-- Table structure for table `contact_master`
--

CREATE TABLE `contact_master` (
  `userid` int(10) UNSIGNED NOT NULL,
  `country` varchar(50) NOT NULL,
  `ustate` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `uaddress` text NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_master`
--

INSERT INTO `contact_master` (`userid`, `country`, `ustate`, `city`, `pincode`, `uaddress`, `createdat`, `updatedat`) VALUES
(2, 'India', 'Maharashtra', 'Sangmner', '411528', 'A/P-Sangmner,Tal-Sangmner,Dist-Ahamadnagar', '2020-10-23 10:34:53', '2020-10-23 10:34:53'),
(36, 'India', 'Maharashtra', 'nagpur', '440009', '439,ashirwad building, nagpur', '2020-11-04 05:39:30', '2020-11-04 05:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `criteria_documents`
--

CREATE TABLE `criteria_documents` (
  `criteriaid` int(10) UNSIGNED NOT NULL,
  `proof` varchar(150) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `distributors_retailors`
--

CREATE TABLE `distributors_retailors` (
  `distretid` int(10) UNSIGNED NOT NULL,
  `distributorid` int(10) UNSIGNED NOT NULL,
  `retailorid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `distributors_retailors`
--

INSERT INTO `distributors_retailors` (`distretid`, `distributorid`, `retailorid`, `createdat`, `updatedat`) VALUES
(2, 1, 2, '2020-10-22 11:41:15', '2020-10-22 11:41:15'),
(3, 1, 3, '2020-10-22 11:41:31', '2020-10-22 11:41:31'),
(4, 2, 1, '2020-11-04 21:38:14', '2020-11-04 21:38:14'),
(5, 2, 2, '2020-11-05 05:50:03', '2020-11-05 05:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `docid` int(10) UNSIGNED NOT NULL,
  `service` varchar(100) NOT NULL,
  `rowid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(50) DEFAULT NULL,
  `doctype` varchar(100) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`docid`, `service`, `rowid`, `extension`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'EWAY', 40, 'jfif', 'aadhar', '2020-11-04 11:20:19', '2020-11-04 11:20:19'),
(2, 'EWAY', 40, 'jfif', 'pan', '2020-11-04 11:20:19', '2020-11-04 11:20:19'),
(3, 'EWAY', 41, 'jfif', 'aadhar', '2020-11-04 11:21:10', '2020-11-04 11:21:10'),
(4, 'EWAY', 41, 'jfif', 'pan', '2020-11-04 11:21:11', '2020-11-04 11:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `document_master`
--

CREATE TABLE `document_master` (
  `docid` int(10) UNSIGNED NOT NULL,
  `document` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_master`
--

INSERT INTO `document_master` (`docid`, `document`, `createdat`, `updatedat`) VALUES
(1, 'Aadhar Card', '2020-10-16 23:24:03', '2020-10-16 23:24:03'),
(2, 'Pan Card', '2020-10-16 23:24:03', '2020-10-16 23:24:03'),
(4, 'VOTER CARD', '2020-10-17 12:43:09', '2020-10-17 12:43:09'),
(5, 'LIC', '2020-10-17 13:02:29', '2020-10-17 13:02:29'),
(6, 'Premium', '2020-10-17 13:10:01', '2020-10-17 13:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `employee_service`
--

CREATE TABLE `employee_service` (
  `empserviceid` int(10) UNSIGNED NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `empid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `e_waybill`
--

CREATE TABLE `e_waybill` (
  `billid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL COMMENT 'it can be retailor,user',
  `gstnumber` varchar(50) NOT NULL,
  `gstid` varchar(50) NOT NULL,
  `gstpwd` varchar(50) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_waybill`
--

INSERT INTO `e_waybill` (`billid`, `userid`, `gstnumber`, `gstid`, `gstpwd`, `mobilenumber`, `emailid`, `createdat`, `updatedat`) VALUES
(2, 1, '9745852', '78456123', '7410258', '8208504868', 'vbpawar311@gmail.com', '2020-10-20 00:04:37', '2020-10-20 00:04:37'),
(3, 1, '9745852', '78456123', '7410258', '8208504868', 'vbpawar311@gmail.com', '2020-10-20 00:06:22', '2020-10-20 00:06:22'),
(4, 1, '12345', '4321', 'a1111', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:04:18', '2020-11-03 05:04:18'),
(5, 1, '222222', '1111111', '4444444', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:10:34', '2020-11-03 05:10:34'),
(6, 1, 'hhhhhh', 'y66666', 'hhh888888', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:14:26', '2020-11-03 05:14:26'),
(7, 1, 'xcsd', 'xssc', 'xcscs', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:17:17', '2020-11-03 05:17:17'),
(8, 1, 'xcsd', 'xssc', 'xcscs', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:17:32', '2020-11-03 05:17:32'),
(9, 1, 'xcsd', 'xssc', 'xcscs', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:17:32', '2020-11-03 05:17:32'),
(10, 1, 'ssdf', 'sdfg', 'sdfg', '', '', '2020-11-03 05:20:30', '2020-11-03 05:20:30'),
(11, 1, 'ssdf', 'sdfg', 'sdfg', '', '', '2020-11-03 05:21:28', '2020-11-03 05:21:28'),
(12, 1, 'ssdf', 'sdfg', 'sdfg', '', '', '2020-11-03 05:22:04', '2020-11-03 05:22:04'),
(13, 1, 'sfdgfd', 'dsgff', 'dfg', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:25:19', '2020-11-03 05:25:19'),
(14, 1, '', '', '', '', '', '2020-11-03 05:27:05', '2020-11-03 05:27:05'),
(15, 1, '', '', '', '', '', '2020-11-03 05:32:19', '2020-11-03 05:32:19'),
(16, 1, '', '', '', '', '', '2020-11-03 05:34:51', '2020-11-03 05:34:51'),
(17, 1, 'ssdvf', 'sdvb', 'sdfg', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:35:59', '2020-11-03 05:35:59'),
(18, 1, 'sdgfdh', 'fgfh', 'fgfg', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:38:08', '2020-11-03 05:38:08'),
(19, 1, 'sdfsfd', 'dfdgfd', 'fdgfdgf', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:47:51', '2020-11-03 05:47:51'),
(20, 1, 'fddsgfds', 'fdgs', 'dgfsgf', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:49:27', '2020-11-03 05:49:27'),
(21, 1, '', '', '', '', '', '2020-11-03 05:51:04', '2020-11-03 05:51:04'),
(22, 1, 'asfdg', 'dfg', 'dsfg', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:53:17', '2020-11-03 05:53:17'),
(23, 1, 'sdfg', 'qswdefg', 'sdsf', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:54:29', '2020-11-03 05:54:29'),
(24, 1, 'sdfg', 'qswdefg', 'sdsf', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:54:50', '2020-11-03 05:54:50'),
(25, 1, '', '', '', '', '', '2020-11-03 05:55:09', '2020-11-03 05:55:09'),
(26, 1, 'dfd', 'fgf', 'sgffd', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 05:57:33', '2020-11-03 05:57:33'),
(27, 1, 'fgdgf', 'dfg', 'sdf', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 06:01:42', '2020-11-03 06:01:42'),
(28, 1, 'sdfbg', 'sdfg', 'dfg', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 06:03:40', '2020-11-03 06:03:40'),
(29, 1, 'cv', 'xc', 'cvb', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 06:08:39', '2020-11-03 06:08:39'),
(30, 1, 'xc', 'fgn', 'dfg', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-03 06:11:04', '2020-11-03 06:11:04'),
(31, 1, '1255', '1458', '1485', '9685278958', 'vikaspawar3110@gmail.com', '2020-11-03 10:54:53', '2020-11-03 10:54:53'),
(32, 1, '12343``', '12344', '12344', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-03 10:56:36', '2020-11-03 10:56:36'),
(33, 1, '12333', '14785', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-03 10:59:55', '2020-11-03 10:59:55'),
(34, 1, '12333', '14785', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-03 11:00:37', '2020-11-03 11:00:37'),
(35, 1, '12333', '14785', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-03 11:01:47', '2020-11-03 11:01:47'),
(36, 1, '12333', '14785', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-03 11:02:18', '2020-11-03 11:02:18'),
(37, 1, '12333', '14785', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-03 11:05:25', '2020-11-03 11:05:25'),
(38, 1, '12333', '14785', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-03 11:08:43', '2020-11-03 11:08:43'),
(39, 1, '1255', '1458', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-04 11:18:33', '2020-11-04 11:18:33'),
(40, 1, '1255', '1458', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-04 11:20:19', '2020-11-04 11:20:19'),
(41, 1, '1255', '1458', '1485', '09657613754', 'vikaspawar3110@gmail.com', '2020-11-04 11:21:10', '2020-11-04 11:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `importexport`
--

CREATE TABLE `importexport` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `typeoforg` varchar(50) NOT NULL,
  `prefactivity` varchar(100) NOT NULL,
  `pannumber` varchar(10) NOT NULL,
  `panname` varchar(100) NOT NULL,
  `DOBpan` date NOT NULL,
  `branchdetails` varchar(255) NOT NULL,
  `uaddress` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `ustate` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pincode` varchar(7) DEFAULT NULL,
  `bankname` varchar(55) DEFAULT NULL,
  `acholdername` varchar(100) DEFAULT NULL,
  `acno` varchar(20) DEFAULT NULL,
  `branchname` varchar(100) DEFAULT NULL,
  `ifsccode` varchar(50) DEFAULT NULL,
  `cin` varchar(50) DEFAULT NULL,
  `gstno` varchar(50) DEFAULT NULL,
  `spanname` varchar(100) DEFAULT NULL,
  `spannumber` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `line1` varchar(255) DEFAULT NULL,
  `line2` varchar(255) DEFAULT NULL,
  `scity` varchar(50) DEFAULT NULL,
  `sstate` varchar(50) DEFAULT NULL,
  `spin` varchar(7) DEFAULT NULL,
  `smobile` varchar(11) DEFAULT NULL,
  `semailid` varchar(100) DEFAULT NULL,
  `sadharnumber` varchar(13) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `importexport`
--

INSERT INTO `importexport` (`id`, `userid`, `typeoforg`, `prefactivity`, `pannumber`, `panname`, `DOBpan`, `branchdetails`, `uaddress`, `country`, `ustate`, `district`, `city`, `pincode`, `bankname`, `acholdername`, `acno`, `branchname`, `ifsccode`, `cin`, `gstno`, `spanname`, `spannumber`, `dob`, `line1`, `line2`, `scity`, `sstate`, `spin`, `smobile`, `semailid`, `sadharnumber`, `createdat`, `updatedat`) VALUES
(2, 1, 'CA', 'NA', 'EEVPP', 'VBPAWAR', '0000-00-00', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '0000-00-00', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '123', '2020-10-24 10:43:12', '2020-10-24 10:43:12');

-- --------------------------------------------------------

--
-- Table structure for table `incometax`
--

CREATE TABLE `incometax` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `profession` varchar(50) NOT NULL,
  `bussiname` varchar(150) DEFAULT NULL,
  `premisename` varchar(150) DEFAULT NULL,
  `assesmentyear` varchar(10) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `dob` date DEFAULT NULL,
  `pannumber` varchar(11) DEFAULT NULL,
  `fathername` varchar(100) DEFAULT NULL,
  `contact` varchar(11) NOT NULL,
  `emailid` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `ustate` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `flat` varchar(100) DEFAULT NULL,
  `road` varchar(100) DEFAULT NULL,
  `pincode` varchar(7) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'New',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incometax`
--

INSERT INTO `incometax` (`id`, `userid`, `profession`, `bussiname`, `premisename`, `assesmentyear`, `fname`, `mname`, `lname`, `gender`, `dob`, `pannumber`, `fathername`, `contact`, `emailid`, `country`, `ustate`, `city`, `flat`, `road`, `pincode`, `status`, `createdat`, `updatedat`) VALUES
(2, 1, 'Businees', 'CA', 'NA', '2018', 'NA', 'NA', 'NA', '', '0000-00-00', 'NA', 'NA', '9657613754', 'vbpawar@gmail.com', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'New', '2020-10-27 11:29:52', '2020-10-27 11:29:52'),
(3, 1, 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Male', '1995-10-31', 'EEVPP4596B', 'Smith', '5896574', 'vbpawar@gmail.com', 'India', 'Maharashtra', 'Rahuri', 'Pune', 'Mahatma Gandhi', '478956', 'New', '2020-10-29 10:49:50', '2020-10-29 10:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `pancard`
--

CREATE TABLE `pancard` (
  `panid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `appType` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `aadharnumber` varchar(20) NOT NULL,
  `nameasperadhar` varchar(255) NOT NULL,
  `title` varchar(20) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `emailid` varchar(155) NOT NULL,
  `fatherlname` varchar(55) DEFAULT NULL,
  `fatherfname` varchar(55) DEFAULT NULL,
  `fathermname` varchar(55) DEFAULT NULL,
  `motherlname` varchar(55) DEFAULT NULL,
  `motherfname` varchar(55) DEFAULT NULL,
  `mothermname` varchar(55) DEFAULT NULL,
  `sourceofincome` varchar(100) DEFAULT NULL,
  `rflat` varchar(55) DEFAULT NULL,
  `rnameofpremise` varchar(55) DEFAULT NULL,
  `rstreet` varchar(55) DEFAULT NULL,
  `rarea` varchar(55) DEFAULT NULL,
  `rtown` varchar(55) DEFAULT NULL,
  `rcountry` varchar(55) DEFAULT NULL,
  `rstate` varchar(55) DEFAULT NULL,
  `rpincode` varchar(55) DEFAULT NULL,
  `onameofoffice` varchar(100) DEFAULT NULL,
  `oflat` varchar(55) DEFAULT NULL,
  `onameofpremise` varchar(55) DEFAULT NULL,
  `oroad` varchar(55) DEFAULT NULL,
  `oarea` varchar(50) DEFAULT NULL,
  `otown` varchar(50) DEFAULT NULL,
  `ocountry` varchar(50) DEFAULT NULL,
  `ostate` varchar(56) DEFAULT NULL,
  `opincode` varchar(7) DEFAULT NULL,
  `countrycode` varchar(55) DEFAULT NULL,
  `stdcode` varchar(20) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `semailid` varchar(150) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'New',
  `craetedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pancard`
--

INSERT INTO `pancard` (`panid`, `userid`, `appType`, `category`, `aadharnumber`, `nameasperadhar`, `title`, `lname`, `fname`, `mname`, `dob`, `gender`, `contact`, `emailid`, `fatherlname`, `fatherfname`, `fathermname`, `motherlname`, `motherfname`, `mothermname`, `sourceofincome`, `rflat`, `rnameofpremise`, `rstreet`, `rarea`, `rtown`, `rcountry`, `rstate`, `rpincode`, `onameofoffice`, `oflat`, `onameofpremise`, `oroad`, `oarea`, `otown`, `ocountry`, `ostate`, `opincode`, `countrycode`, `stdcode`, `mobile`, `semailid`, `status`, `craetedat`, `updatedat`) VALUES
(1, 1, 'New Pan foreigner', 'Indivisual', '12589685', 'V P N', 'Shree', 'Smith', 'Nick', 'Jonas', '2020-10-01', 'Male', '9657613754', 'vb@hotmail.com', 'Ken', 'Jon', 'M', 'Kate', 'Katlen', 'Stark', 'Employeer', 'Pune', 'Na', 'Na', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New', '2020-10-29 11:34:03', '2020-10-29 11:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `payment_transaction`
--

CREATE TABLE `payment_transaction` (
  `paymentid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `transferedby` int(10) UNSIGNED NOT NULL,
  `amount` double(11,2) NOT NULL,
  `paymentdate` date NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `projectedbalancesheet`
--

CREATE TABLE `projectedbalancesheet` (
  `projectedid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `nameasperadhar` varchar(100) NOT NULL,
  `pancardnumber` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `projectAmt` double(11,2) NOT NULL,
  `shopAddress` varchar(255) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `createat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projectedbalancesheet`
--

INSERT INTO `projectedbalancesheet` (`projectedid`, `userid`, `nameasperadhar`, `pancardnumber`, `DOB`, `emailid`, `mobilenumber`, `projectAmt`, `shopAddress`, `homeAddress`, `createat`, `updatedat`) VALUES
(1, 1, 'mahesh', 'NAN', '0000-00-00', 'a@gmail.com', '1478965412', 80000.00, 'abc', 'xyz', '2020-10-27 10:00:18', '2020-10-27 11:24:50'),
(2, 1, 'Lalit Meshram', 'afd1234', '2020-11-04', 'lalitlucky007meshram@gmail.com', '+918007015819', 80000.00, '439,ashirwad building, nagpur', 'nagpur', '2020-11-04 07:08:17', '2020-11-04 07:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `project_report`
--

CREATE TABLE `project_report` (
  `reportid` int(11) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `cost` double(10,2) NOT NULL,
  `loanamt` double(11,2) NOT NULL,
  `owncapital` double(11,2) NOT NULL,
  `noofyear` int(11) NOT NULL,
  `repayment_shedule` smallint(1) NOT NULL DEFAULT '0',
  `lastyear_bal_sheet` smallint(1) NOT NULL DEFAULT '0',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_report`
--

INSERT INTO `project_report` (`reportid`, `userid`, `cost`, `loanamt`, `owncapital`, `noofyear`, `repayment_shedule`, `lastyear_bal_sheet`, `createdat`, `updatedat`) VALUES
(1, 1, 50000.00, 5000.00, 200000.00, 10, 1, 1, '2020-10-20 23:27:45', '2020-10-20 23:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `proof_docs`
--

CREATE TABLE `proof_docs` (
  `pdid` int(10) UNSIGNED NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `criteriaid` int(10) UNSIGNED NOT NULL,
  `docid` int(10) UNSIGNED NOT NULL,
  `catgoryid` int(10) UNSIGNED NOT NULL,
  `flag` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `retailor_access_control`
--

CREATE TABLE `retailor_access_control` (
  `accessid` int(10) UNSIGNED NOT NULL,
  `retailorid` int(10) UNSIGNED NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `isactive` enum('0','1') NOT NULL DEFAULT '0',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `roleid` int(10) UNSIGNED NOT NULL,
  `role` varchar(50) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_master`
--

INSERT INTO `role_master` (`roleid`, `role`, `createdat`, `updatedat`) VALUES
(1, 'Admin', '2020-10-14 22:04:58', '2020-10-14 22:04:58'),
(2, 'Distributor', '2020-10-14 22:04:58', '2020-10-14 22:04:58'),
(3, 'Retailor', '2020-10-14 22:04:58', '2020-10-14 22:04:58'),
(4, 'Employee', '2020-10-14 22:04:58', '2020-10-14 22:04:58'),
(5, 'Customer', '2020-10-14 22:04:58', '2020-10-14 22:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `service_charges`
--

CREATE TABLE `service_charges` (
  `chargesid` tinyint(4) NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `charges` double(11,2) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_charges`
--

INSERT INTO `service_charges` (`chargesid`, `serviceid`, `charges`, `createdat`, `updatedat`) VALUES
(2, 3, 200.00, '2020-10-17 18:19:44', '2020-10-17 18:19:44'),
(4, 4, 150.00, '2020-10-17 18:25:03', '2020-10-17 18:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `service_documents`
--

CREATE TABLE `service_documents` (
  `sdid` int(10) UNSIGNED NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL,
  `docid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `serviceid` int(10) UNSIGNED NOT NULL,
  `servicename` varchar(150) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_master`
--

INSERT INTO `service_master` (`serviceid`, `servicename`, `createdat`, `updatedat`) VALUES
(2, 'PAN CARD', '2020-10-17 14:56:54', '2020-10-17 14:56:54'),
(3, 'Shop Act', '2020-10-17 17:19:14', '2020-10-17 17:19:14'),
(4, 'AEPS', '2020-10-17 18:24:49', '2020-10-17 18:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `service_subcategorys`
--

CREATE TABLE `service_subcategorys` (
  `categoryid` int(10) UNSIGNED NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `category` varchar(150) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_subcategorys`
--

INSERT INTO `service_subcategorys` (`categoryid`, `serviceid`, `category`, `createdat`, `updatedat`) VALUES
(2, 2, 'association', '2020-10-17 15:26:10', '2020-10-17 15:26:10'),
(3, 2, 'Trust', '2020-10-17 15:26:26', '2020-10-17 15:26:26'),
(4, 2, 'Trust', '2020-10-17 15:30:40', '2020-10-17 15:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `service_transaction`
--

CREATE TABLE `service_transaction` (
  `transactionid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL,
  `charges` double(11,2) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_transaction_docs`
--

CREATE TABLE `service_transaction_docs` (
  `servicedocid` int(10) UNSIGNED NOT NULL,
  `transactionid` int(10) UNSIGNED NOT NULL,
  `criteriaid` int(10) UNSIGNED NOT NULL,
  `docid` int(10) UNSIGNED NOT NULL,
  `doc_extension` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shopact`
--

CREATE TABLE `shopact` (
  `shopactid` int(10) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `nameofestb` varchar(150) NOT NULL,
  `street` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `taluka` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `ownerpremise` varchar(250) NOT NULL,
  `dateofcommit` date NOT NULL,
  `natureofbuss` varchar(100) NOT NULL,
  `menw` tinyint(4) NOT NULL,
  `womenw` tinyint(4) NOT NULL,
  `s_nameofestb` varchar(255) NOT NULL,
  `s_street` varchar(100) NOT NULL,
  `s_locality` varchar(100) NOT NULL,
  `s_landmark` varchar(150) NOT NULL,
  `s_taluka` varchar(100) NOT NULL,
  `s_village` varchar(100) NOT NULL,
  `s_district` varchar(100) NOT NULL,
  `s_state` varchar(100) NOT NULL,
  `s_residence` tinyint(4) NOT NULL,
  `s_adharnumber` varchar(13) NOT NULL,
  `s_mobile` varchar(11) NOT NULL,
  `s_email` varchar(150) NOT NULL,
  `s_status` varchar(55) NOT NULL,
  `typeoforg` varchar(100) NOT NULL,
  `s_nameofemp` varchar(100) NOT NULL,
  `s_menw` tinyint(4) NOT NULL,
  `s_womenw` tinyint(4) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopact`
--

INSERT INTO `shopact` (`shopactid`, `userid`, `nameofestb`, `street`, `landmark`, `district`, `taluka`, `village`, `pincode`, `mobile`, `emailid`, `ownerpremise`, `dateofcommit`, `natureofbuss`, `menw`, `womenw`, `s_nameofestb`, `s_street`, `s_locality`, `s_landmark`, `s_taluka`, `s_village`, `s_district`, `s_state`, `s_residence`, `s_adharnumber`, `s_mobile`, `s_email`, `s_status`, `typeoforg`, `s_nameofemp`, `s_menw`, `s_womenw`, `createdat`) VALUES
(1, 1, 'TKINFOTECH', 'PUNE', 'NANA PETH', 'AHMADANAGAR', 'PUNE', 'RAHURI', '410478', '8785697485', 'TK@GMAIL.COM', 'NA', '2020-10-27', 'KIRANA SHOP', 2, 4, 'NA', 'NA', 'PUNE', 'PUNE', 'PUNE', 'SWARGATE', 'MAHATMA PHULE', 'MIRZAPUR', 4, '147859585', '896574896', 'YK@GMAIL.COM', 'ACTIVE', 'KIRANA', 'TK', 2, 2, '2020-10-26 10:38:29');

-- --------------------------------------------------------

--
-- Table structure for table `udyog_adhar`
--

CREATE TABLE `udyog_adhar` (
  `uid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `adharnumber` varchar(12) NOT NULL,
  `nameofent` varchar(100) NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL,
  `category` varchar(15) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `nameofentr` varchar(100) NOT NULL,
  `typeoforg` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postoffice` varchar(50) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `ustate` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `regdate` date NOT NULL,
  `bankName` varchar(100) NOT NULL,
  `ifsc` varchar(50) NOT NULL,
  `bankAc` varchar(100) NOT NULL,
  `men` tinyint(4) DEFAULT NULL,
  `women` tinyint(4) DEFAULT NULL,
  `status` enum('complete','New') NOT NULL DEFAULT 'New',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udyog_adhar`
--

INSERT INTO `udyog_adhar` (`uid`, `userid`, `adharnumber`, `nameofent`, `gender`, `category`, `mobilenumber`, `emailid`, `nameofentr`, `typeoforg`, `city`, `postoffice`, `pincode`, `ustate`, `district`, `regdate`, `bankName`, `ifsc`, `bankAc`, `men`, `women`, `status`, `createdat`, `updatedat`) VALUES
(5, 1, '404798765412', 'test name mid las', 'Male', 'Others', '08888888888', 'shaikhwasim729@gmail.com', 'test name mid las', 'Public Limited', 'Jalna', 'Shahagad', '431212', 'mh', 'Jalna district', '2020-11-01', 'SBI', 'IFC5557', '7020110025699', 1, 2, 'New', '2020-11-01 00:00:06', '2020-11-01 00:00:06'),
(6, 1, 'adhar1', 'Lalit Meshram', 'Male', 'Others', '08007015819', 'lalitlucky007meshram@gmail.com', 'enterprise1', 'Partnership Firm', 'nagpur', 'nagpur', '440009', 'Maharashtra', 'nagpur', '2020-11-04', 'bob', 'ifsc123', 'acc123', 4, 1, 'New', '2020-11-04 02:03:17', '2020-11-04 02:03:17'),
(7, 1, 'adhar12', 'wasim', 'Male', 'ST', '08007015819', 'lalitlucky007meshram@gmail.com', 'sdsds', 'Partnership Firm', 'nagpur', 'nagpur', '440009', 'Maharashtra', 'nagpur', '2020-11-04', 'bob', 'ifsc123', 'acc123', 4, 1, 'New', '2020-11-04 03:53:28', '2020-11-04 07:00:08'),
(8, 1, '123456789123', 'kiran appasaheb vyavhare', 'Male', 'OBC', '8788329794', 'kiranvyavhare36@gmail.com', 'kiran appasaheb vyavhare', 'Partnership Firm', 'sangamner', 'zarekathi', '413714', 'maharashart', 'anagar', '2020-11-17', 'icici banka', 'icic1235665', '123456789653213', 2, 1, 'New', '2020-11-04 21:34:48', '2020-11-04 21:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_control`
--

CREATE TABLE `user_access_control` (
  `accessid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `activityid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_control`
--

INSERT INTO `user_access_control` (`accessid`, `userid`, `activityid`, `createdat`, `updatedat`) VALUES
(1, 2, 2, '2020-11-03 12:04:01', '2020-11-03 12:04:01'),
(2, 2, 4, '2020-11-03 12:04:01', '2020-11-03 12:04:01'),
(3, 2, 15, '2020-11-03 12:04:20', '2020-11-03 12:04:20'),
(4, 2, 5, '2020-11-03 12:04:20', '2020-11-03 12:04:20'),
(5, 2, 14, '2020-11-03 12:04:43', '2020-11-03 12:04:43'),
(6, 2, 9, '2020-11-03 12:04:43', '2020-11-03 12:04:43'),
(7, 2, 11, '2020-11-03 12:05:02', '2020-11-03 12:05:02'),
(8, 2, 16, '2020-11-03 12:05:02', '2020-11-03 12:05:02'),
(9, 2, 1, '2020-11-03 12:05:41', '2020-11-03 12:05:41'),
(10, 2, 13, '2020-11-03 12:05:41', '2020-11-03 12:05:41'),
(11, 2, 2, '2020-11-04 07:25:26', '2020-11-04 07:25:26'),
(12, 2, 3, '2020-11-04 07:25:26', '2020-11-04 07:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `userid` int(10) UNSIGNED NOT NULL,
  `roleid` int(10) UNSIGNED NOT NULL,
  `emailid` varchar(150) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `upassword` varchar(20) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`userid`, `roleid`, `emailid`, `firstname`, `lastname`, `upassword`, `contact`, `createdat`, `updatedat`) VALUES
(2, 1, 'admin@ca.com', 'KIRAN', 'VYAVHARE', '12345', '9657613754', '2020-10-23 10:33:58', '2020-10-23 10:33:58'),
(36, 1, 'lalitrmeshram@gmail.com', 'Lalit', 'Meshram', '12345', '8007015819', '2020-11-04 05:39:30', '2020-11-04 06:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transaction`
--

CREATE TABLE `wallet_transaction` (
  `transactionid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `transaction_type` enum('Credit','Debit') NOT NULL,
  `amount` double(11,2) NOT NULL,
  `message` varchar(255) NOT NULL,
  `transactiondate` datetime NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activityid`);

--
-- Indexes for table `ca_certificate`
--
ALTER TABLE `ca_certificate`
  ADD PRIMARY KEY (`certid`);

--
-- Indexes for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `criteria_documents`
--
ALTER TABLE `criteria_documents`
  ADD PRIMARY KEY (`criteriaid`);

--
-- Indexes for table `distributors_retailors`
--
ALTER TABLE `distributors_retailors`
  ADD PRIMARY KEY (`distretid`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `document_master`
--
ALTER TABLE `document_master`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `employee_service`
--
ALTER TABLE `employee_service`
  ADD PRIMARY KEY (`empserviceid`),
  ADD UNIQUE KEY `serviceid_2` (`serviceid`,`empid`),
  ADD KEY `serviceid` (`serviceid`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `e_waybill`
--
ALTER TABLE `e_waybill`
  ADD PRIMARY KEY (`billid`);

--
-- Indexes for table `importexport`
--
ALTER TABLE `importexport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incometax`
--
ALTER TABLE `incometax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pancard`
--
ALTER TABLE `pancard`
  ADD PRIMARY KEY (`panid`);

--
-- Indexes for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `projectedbalancesheet`
--
ALTER TABLE `projectedbalancesheet`
  ADD PRIMARY KEY (`projectedid`);

--
-- Indexes for table `project_report`
--
ALTER TABLE `project_report`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `proof_docs`
--
ALTER TABLE `proof_docs`
  ADD PRIMARY KEY (`pdid`),
  ADD KEY `catgoryid` (`catgoryid`),
  ADD KEY `serviceid` (`serviceid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `retailor_access_control`
--
ALTER TABLE `retailor_access_control`
  ADD PRIMARY KEY (`accessid`);

--
-- Indexes for table `role_master`
--
ALTER TABLE `role_master`
  ADD PRIMARY KEY (`roleid`);

--
-- Indexes for table `service_charges`
--
ALTER TABLE `service_charges`
  ADD PRIMARY KEY (`chargesid`),
  ADD UNIQUE KEY `serviceid` (`serviceid`);

--
-- Indexes for table `service_documents`
--
ALTER TABLE `service_documents`
  ADD PRIMARY KEY (`sdid`),
  ADD KEY `categoryid` (`categoryid`),
  ADD KEY `serviceid` (`serviceid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `service_master`
--
ALTER TABLE `service_master`
  ADD PRIMARY KEY (`serviceid`);

--
-- Indexes for table `service_subcategorys`
--
ALTER TABLE `service_subcategorys`
  ADD PRIMARY KEY (`categoryid`),
  ADD KEY `serviceid` (`serviceid`);

--
-- Indexes for table `service_transaction`
--
ALTER TABLE `service_transaction`
  ADD PRIMARY KEY (`transactionid`);

--
-- Indexes for table `service_transaction_docs`
--
ALTER TABLE `service_transaction_docs`
  ADD PRIMARY KEY (`servicedocid`);

--
-- Indexes for table `shopact`
--
ALTER TABLE `shopact`
  ADD PRIMARY KEY (`shopactid`);

--
-- Indexes for table `udyog_adhar`
--
ALTER TABLE `udyog_adhar`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_access_control`
--
ALTER TABLE `user_access_control`
  ADD PRIMARY KEY (`accessid`),
  ADD KEY `activityid` (`activityid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `roleid` (`roleid`);

--
-- Indexes for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  ADD PRIMARY KEY (`transactionid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activityid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ca_certificate`
--
ALTER TABLE `ca_certificate`
  MODIFY `certid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `criteria_documents`
--
ALTER TABLE `criteria_documents`
  MODIFY `criteriaid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributors_retailors`
--
ALTER TABLE `distributors_retailors`
  MODIFY `distretid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `document_master`
--
ALTER TABLE `document_master`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee_service`
--
ALTER TABLE `employee_service`
  MODIFY `empserviceid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `e_waybill`
--
ALTER TABLE `e_waybill`
  MODIFY `billid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `importexport`
--
ALTER TABLE `importexport`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `incometax`
--
ALTER TABLE `incometax`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pancard`
--
ALTER TABLE `pancard`
  MODIFY `panid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  MODIFY `paymentid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectedbalancesheet`
--
ALTER TABLE `projectedbalancesheet`
  MODIFY `projectedid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_report`
--
ALTER TABLE `project_report`
  MODIFY `reportid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proof_docs`
--
ALTER TABLE `proof_docs`
  MODIFY `pdid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `retailor_access_control`
--
ALTER TABLE `retailor_access_control`
  MODIFY `accessid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_master`
--
ALTER TABLE `role_master`
  MODIFY `roleid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service_charges`
--
ALTER TABLE `service_charges`
  MODIFY `chargesid` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_documents`
--
ALTER TABLE `service_documents`
  MODIFY `sdid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `serviceid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_subcategorys`
--
ALTER TABLE `service_subcategorys`
  MODIFY `categoryid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_transaction`
--
ALTER TABLE `service_transaction`
  MODIFY `transactionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_transaction_docs`
--
ALTER TABLE `service_transaction_docs`
  MODIFY `servicedocid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopact`
--
ALTER TABLE `shopact`
  MODIFY `shopactid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `udyog_adhar`
--
ALTER TABLE `udyog_adhar`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_access_control`
--
ALTER TABLE `user_access_control`
  MODIFY `accessid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  MODIFY `transactionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_master`
--
ALTER TABLE `contact_master`
  ADD CONSTRAINT `contact_master_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_service`
--
ALTER TABLE `employee_service`
  ADD CONSTRAINT `employee_service_ibfk_1` FOREIGN KEY (`serviceid`) REFERENCES `service_master` (`serviceid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `employee_service_ibfk_2` FOREIGN KEY (`empid`) REFERENCES `user_master` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `proof_docs`
--
ALTER TABLE `proof_docs`
  ADD CONSTRAINT `proof_docs_ibfk_1` FOREIGN KEY (`catgoryid`) REFERENCES `service_subcategorys` (`categoryid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `proof_docs_ibfk_2` FOREIGN KEY (`serviceid`) REFERENCES `service_master` (`serviceid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `proof_docs_ibfk_3` FOREIGN KEY (`docid`) REFERENCES `document_master` (`docid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `service_charges`
--
ALTER TABLE `service_charges`
  ADD CONSTRAINT `service_charges_ibfk_1` FOREIGN KEY (`serviceid`) REFERENCES `service_master` (`serviceid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_documents`
--
ALTER TABLE `service_documents`
  ADD CONSTRAINT `service_documents_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `service_subcategorys` (`categoryid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_documents_ibfk_2` FOREIGN KEY (`serviceid`) REFERENCES `service_master` (`serviceid`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `service_documents_ibfk_3` FOREIGN KEY (`docid`) REFERENCES `document_master` (`docid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `service_subcategorys`
--
ALTER TABLE `service_subcategorys`
  ADD CONSTRAINT `service_subcategorys_ibfk_1` FOREIGN KEY (`serviceid`) REFERENCES `service_master` (`serviceid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_access_control`
--
ALTER TABLE `user_access_control`
  ADD CONSTRAINT `user_access_control_ibfk_1` FOREIGN KEY (`activityid`) REFERENCES `activities` (`activityid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_access_control_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_master`
--
ALTER TABLE `user_master`
  ADD CONSTRAINT `user_master_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role_master` (`roleid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  ADD CONSTRAINT `wallet_transaction_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_master` (`userid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
