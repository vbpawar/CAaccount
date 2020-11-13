-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 07:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caaccount`
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isactive` tinyint(4) NOT NULL DEFAULT 0
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
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `bid` int(10) UNSIGNED NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ac_number` varchar(255) DEFAULT NULL,
  `ifsc_number` varchar(100) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`bid`, `bank_name`, `ac_number`, `ifsc_number`, `createdat`, `updatedat`) VALUES
(1, 'IDFC', '91700258595', 'IFSC006T', '2020-11-13 12:26:23', '2020-11-13 12:26:23'),
(2, 'BANK OF BADODA', '91700258595', 'IFSC006T', '2020-11-13 12:27:03', '2020-11-13 12:53:26'),
(3, 'IDFC', '91700258595', 'IFCS', '2020-11-13 23:17:12', '2020-11-13 23:17:12'),
(4, 'IDFC', '91700258595', 'IFCS', '2020-11-13 23:21:17', '2020-11-13 23:21:17');

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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `digital_signature`
--

CREATE TABLE `digital_signature` (
  `did` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `class` varchar(20) NOT NULL,
  `uan_number` varchar(50) NOT NULL,
  `uan_password` varchar(50) DEFAULT NULL,
  `nature_of_buss` varchar(150) NOT NULL,
  `trade_name` varchar(150) NOT NULL,
  `place_of_buss` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'New',
  `createdat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `digital_signature`
--

INSERT INTO `digital_signature` (`did`, `userid`, `pid`, `rid`, `class`, `uan_number`, `uan_password`, `nature_of_buss`, `trade_name`, `place_of_buss`, `status`, `createdat`) VALUES
(1, 1, 1, 1, 'CLASS 1', '589655', '12345', 'Private', 'Kalptaru', 'Pune', '', '2020-11-13 18:31:18'),
(2, 1, 4, 4, 'CLASS 2', '1234567', '12345', 'Private', 'Kalptaru', 'Pune', 'New', '2020-11-13 14:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `distributors_retailors`
--

CREATE TABLE `distributors_retailors` (
  `distretid` int(10) UNSIGNED NOT NULL,
  `distributorid` int(10) UNSIGNED NOT NULL,
  `retailorid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `partner_details`
--

CREATE TABLE `partner_details` (
  `partnerid` int(10) UNSIGNED NOT NULL,
  `partner_name` varchar(255) DEFAULT NULL,
  `aadhar_number` varchar(15) DEFAULT NULL,
  `pan_number` varchar(15) DEFAULT NULL,
  `contact_number` varchar(15) DEFAULT NULL,
  `emailid` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `pid` int(10) UNSIGNED NOT NULL,
  `pan_name` varchar(255) NOT NULL,
  `pan_number` varchar(15) NOT NULL,
  `aadhar_name` varchar(255) NOT NULL,
  `aadhar_number` varchar(15) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `createdat` datetime DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`pid`, `pan_name`, `pan_number`, `aadhar_name`, `aadhar_number`, `contact_number`, `emailid`, `dob`, `createdat`, `updatedat`) VALUES
(1, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS BHASKAR', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 12:26:23', '2020-11-13 12:26:23'),
(2, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 12:27:03', '2020-11-13 12:53:26'),
(3, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 14:47:21', '2020-11-13 14:47:21'),
(4, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 14:51:55', '2020-11-13 14:51:55'),
(5, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 15:11:40', '2020-11-13 15:11:40'),
(6, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 18:26:44', '2020-11-13 18:26:44'),
(7, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 18:30:20', '2020-11-13 18:30:20'),
(8, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 18:31:02', '2020-11-13 18:31:02'),
(9, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 18:31:17', '2020-11-13 18:31:17'),
(10, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 23:17:12', '2020-11-13 23:17:12'),
(11, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 23:21:17', '2020-11-13 23:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `pf_withdrwal`
--

CREATE TABLE `pf_withdrwal` (
  `pfid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `bid` int(10) UNSIGNED NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'New',
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pf_withdrwal`
--

INSERT INTO `pf_withdrwal` (`pfid`, `userid`, `pid`, `rid`, `bid`, `status`, `createdat`, `updatedat`) VALUES
(1, 1, 1, 1, 1, 'complete', '2020-11-13 12:26:23', '2020-11-13 12:55:58'),
(2, 1, 2, 2, 2, 'New', '2020-11-13 12:27:03', '2020-11-13 12:27:03');

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
  `flag` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `residential_details`
--

CREATE TABLE `residential_details` (
  `rid` int(10) UNSIGNED NOT NULL,
  `premise_name` varchar(255) DEFAULT NULL,
  `flat_number` varchar(255) DEFAULT NULL,
  `road` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  `taluka` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residential_details`
--

INSERT INTO `residential_details` (`rid`, `premise_name`, `flat_number`, `road`, `area`, `village`, `taluka`, `district`, `state`, `pincode`, `createdat`, `updatedat`) VALUES
(1, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'AHMADNAGAR', 'MAHARASHTRA', '413705', '2020-11-13 12:26:23', '2020-11-13 12:26:23'),
(2, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'AHMADNAGAR', 'UP', '415896', '2020-11-13 12:27:03', '2020-11-13 12:53:26'),
(3, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'AHMADNAGAR', 'UP', '415896', '2020-11-13 14:47:21', '2020-11-13 14:47:21'),
(4, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'AHMADNAGAR', 'UP', '415896', '2020-11-13 14:51:55', '2020-11-13 14:51:55'),
(5, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'NAGPUR', 'UP', '415896', '2020-11-13 15:11:40', '2020-11-13 15:11:40'),
(6, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'NAGPUR', 'UP', '415896', '2020-11-13 18:26:44', '2020-11-13 18:26:44'),
(7, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'NAGPUR', 'UP', '415896', '2020-11-13 18:30:20', '2020-11-13 18:30:20'),
(8, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'NAGPUR', 'UP', '415896', '2020-11-13 18:31:02', '2020-11-13 18:31:02'),
(9, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'NAGPUR', 'UP', '415896', '2020-11-13 18:31:17', '2020-11-13 18:31:17'),
(10, 'VIKAS', 'Private', 'Kalptaru', 'CLASS 1', 'Pune', 'Rahuri', 'Pune', 'Pune', '478952', '2020-11-13 23:17:12', '2020-11-13 23:17:12'),
(11, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'NAGPUR', 'UP', '415896', '2020-11-13 23:17:12', '2020-11-13 23:17:12'),
(12, 'VIKAS', 'Private', 'Kalptaru', 'CLASS 1', 'Pune', 'Rahuri', 'Pune', 'Pune', '478952', '2020-11-13 23:21:17', '2020-11-13 23:21:17'),
(13, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'NAGPUR', 'UP', '415896', '2020-11-13 23:21:17', '2020-11-13 23:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `retailor_access_control`
--

CREATE TABLE `retailor_access_control` (
  `accessid` int(10) UNSIGNED NOT NULL,
  `retailorid` int(10) UNSIGNED NOT NULL,
  `serviceid` int(10) UNSIGNED NOT NULL,
  `isactive` enum('0','1') NOT NULL DEFAULT '0',
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role_master`
--

CREATE TABLE `role_master` (
  `roleid` int(10) UNSIGNED NOT NULL,
  `role` varchar(50) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_master`
--

CREATE TABLE `service_master` (
  `serviceid` int(10) UNSIGNED NOT NULL,
  `servicename` varchar(150) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
-- Table structure for table `shop_details`
--

CREATE TABLE `shop_details` (
  `sid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `office_contact` varchar(15) DEFAULT NULL,
  `office_mailid` varchar(255) DEFAULT NULL,
  `buss_start_date` date DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_details`
--

INSERT INTO `shop_details` (`sid`, `rid`, `shop_name`, `office_contact`, `office_mailid`, `buss_start_date`, `createdat`, `updatedat`) VALUES
(1, 10, NULL, NULL, NULL, NULL, '2020-11-13 23:17:12', '2020-11-13 23:17:12'),
(2, 12, 'PAN', '8955855', 'vp@gmail.com', '0000-00-00', '2020-11-13 23:21:17', '2020-11-13 23:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `udyog_adhar`
--

CREATE TABLE `udyog_adhar` (
  `uid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL,
  `bid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `nature_of_buss` varchar(255) NOT NULL,
  `buss_type` varchar(100) NOT NULL,
  `turn_over_amt` double DEFAULT NULL,
  `gst_number` varchar(100) DEFAULT NULL,
  `male` tinyint(4) DEFAULT NULL,
  `female` tinyint(4) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'New',
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `udyog_adhar`
--

INSERT INTO `udyog_adhar` (`uid`, `pid`, `rid`, `sid`, `bid`, `userid`, `nature_of_buss`, `buss_type`, `turn_over_amt`, `gst_number`, `male`, `female`, `status`, `createdat`) VALUES
(1, 10, 11, 1, 3, 1, 'KAY', 'Private', 258900, '147895', 2, 2, 'New', '2020-11-13 23:17:12'),
(2, 11, 13, 2, 4, 1, 'KAY', 'Private', 258900, '147895', 2, 2, 'New', '2020-11-13 23:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_control`
--

CREATE TABLE `user_access_control` (
  `accessid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `activityid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bid`);

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
-- Indexes for table `digital_signature`
--
ALTER TABLE `digital_signature`
  ADD PRIMARY KEY (`did`);

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
-- Indexes for table `partner_details`
--
ALTER TABLE `partner_details`
  ADD PRIMARY KEY (`partnerid`);

--
-- Indexes for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pf_withdrwal`
--
ALTER TABLE `pf_withdrwal`
  ADD PRIMARY KEY (`pfid`);

--
-- Indexes for table `proof_docs`
--
ALTER TABLE `proof_docs`
  ADD PRIMARY KEY (`pdid`),
  ADD KEY `catgoryid` (`catgoryid`),
  ADD KEY `serviceid` (`serviceid`),
  ADD KEY `docid` (`docid`);

--
-- Indexes for table `residential_details`
--
ALTER TABLE `residential_details`
  ADD PRIMARY KEY (`rid`);

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
-- Indexes for table `shop_details`
--
ALTER TABLE `shop_details`
  ADD PRIMARY KEY (`sid`);

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
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `digital_signature`
--
ALTER TABLE `digital_signature`
  MODIFY `did` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `partner_details`
--
ALTER TABLE `partner_details`
  MODIFY `partnerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  MODIFY `paymentid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pf_withdrwal`
--
ALTER TABLE `pf_withdrwal`
  MODIFY `pfid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `proof_docs`
--
ALTER TABLE `proof_docs`
  MODIFY `pdid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residential_details`
--
ALTER TABLE `residential_details`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `shop_details`
--
ALTER TABLE `shop_details`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `udyog_adhar`
--
ALTER TABLE `udyog_adhar`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
