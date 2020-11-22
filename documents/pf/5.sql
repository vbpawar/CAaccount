-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:59 PM
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
(1, 'PF Withdrawal', 'pf_withdrawal/show', 'PF Withdrawal', 'service', '2020-11-15 11:49:00', '2020-11-15 11:59:03', 0),
(2, 'Digital Signature', 'digital_sign/show', 'Digital Signature', 'service', '2020-11-15 11:50:31', '2020-11-15 11:59:12', 0),
(3, 'User', 'users/show', 'User', 'Users', '2020-11-15 11:52:04', '2020-11-15 12:03:26', 0),
(4, 'Distributor Retailors\r\n', 'retailorDistributor', ' Distributor Retailor', 'Distributor Retailors', '2020-11-15 11:52:04', '2020-11-15 12:03:38', 0);

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
(1, 'IDFC', '1258525', 'IFSC121', '2020-11-14 17:37:38', '2020-11-14 17:37:38'),
(2, 'HDFC', '895588', 'HDFC344', '2020-11-14 17:39:31', '2020-11-14 17:39:31'),
(3, 'IDFC', '258965588', 'IFSC121', '2020-11-20 00:03:41', '2020-11-20 00:03:41'),
(4, 'IDFC', '258965588', 'IFSC121', '2020-11-20 00:05:36', '2020-11-20 00:05:36'),
(5, 'IDFC', '258965588', 'IFSC121', '2020-11-20 00:07:16', '2020-11-20 00:07:16');

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
(36, 'India', 'Maharashtra', 'nagpur', '440009', '439,ashirwad building, nagpur', '2020-11-04 05:39:30', '2020-11-04 05:39:30'),
(39, 'INDIA', 'MAHARASHTRA', 'PUNE', '415896', 'GI TECH', '2020-11-14 13:27:17', '2020-11-14 13:27:17'),
(40, 'INDIA', 'MAHARASHTRA', 'PUNE', '415896', 'GI TECH', '2020-11-14 13:30:14', '2020-11-14 13:30:14'),
(41, 'INDIA', 'MAHARASHTRA', 'PUNE', '415896', 'GI TECH', '2020-11-14 13:30:24', '2020-11-14 13:30:24'),
(42, 'INDIA', 'MAHARASHTRA', 'PUNE', '415896', 'GI TECH', '2020-11-14 13:30:41', '2020-11-14 13:30:41'),
(43, 'INDIA', 'MAHARASHTRA', 'PUNE', '415896', 'GI TECH', '2020-11-14 13:32:47', '2020-11-14 13:32:47'),
(44, 'INDIA', 'MAHARASHTRA', 'PUNE', '415896', 'GI TECH', '2020-11-14 13:34:29', '2020-11-14 13:34:29'),
(45, 'India', 'Maharashtra', 'Pune', '413075', 'Pune', '2020-11-15 23:28:40', '2020-11-15 23:28:40'),
(46, 'MAharahstra', 'Ma', 'Pune', '', 'Pune', '2020-11-15 23:31:30', '2020-11-15 23:31:30'),
(47, 'MAharahstra', 'Ma', 'Pune', '', 'Pune', '2020-11-15 23:32:10', '2020-11-15 23:32:10'),
(48, 'MAharahstra', 'Ma', 'Pune', '', 'Pune', '2020-11-15 23:32:35', '2020-11-15 23:32:35'),
(49, 'MAharahstra', 'Ma', 'Pune', '', 'Pune', '2020-11-15 23:32:40', '2020-11-15 23:32:40'),
(50, 'MAharahstra', 'Ma', 'Pune', '', 'Pune', '2020-11-15 23:34:28', '2020-11-15 23:34:28'),
(51, 'MAharahstra', 'Ma', 'Pune', '', 'Pune', '2020-11-15 23:35:40', '2020-11-15 23:35:40'),
(52, 'MAharahstra', 'Ma', 'Pune', '', 'Pune', '2020-11-15 23:37:53', '2020-11-15 23:37:53'),
(53, 'India', 'Maharashtra', 'Pune', '147895', 'Pune', '2020-11-15 23:39:19', '2020-11-15 23:39:19'),
(54, 'India', 'Maharashtra', 'Pune', '147895', 'Pune', '2020-11-15 23:40:40', '2020-11-15 23:40:40'),
(55, 'India', 'Maharashtra', 'Pune', '147895', 'Pune', '2020-11-15 23:41:13', '2020-11-15 23:41:13'),
(56, 'India', 'Maharashtra', 'Pune', '147895', 'Pune', '2020-11-15 23:41:59', '2020-11-15 23:41:59'),
(57, 'India', 'Maharashtra', 'Pune', '413075', 'pune', '2020-11-15 23:44:14', '2020-11-15 23:44:14'),
(58, 'MAharahstra', 'Ma', 'Pune', '147895', 'pune', '2020-11-15 23:47:23', '2020-11-15 23:47:23');

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
-- Table structure for table `digital_docs`
--

CREATE TABLE `digital_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(100) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `did` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `digital_docs`
--

INSERT INTO `digital_docs` (`docid`, `extension`, `userid`, `did`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'sql', 1, 3, 'Aadhar', '2020-11-20 17:24:04', '2020-11-20 17:24:04'),
(2, 'text', 1, 3, 'PAN', '2020-11-20 17:24:04', '2020-11-20 17:24:04'),
(3, 'java', 1, 3, 'Passport', '2020-11-20 17:24:04', '2020-11-20 17:24:04');

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
  `remark` text DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `digital_signature`
--

INSERT INTO `digital_signature` (`did`, `userid`, `pid`, `rid`, `class`, `uan_number`, `uan_password`, `nature_of_buss`, `trade_name`, `place_of_buss`, `status`, `remark`, `createdat`) VALUES
(1, 1, 1, 1, 'CLASS 1', '589655', '12345', 'Private', 'Kalptaru', 'Pune', '', NULL, '2020-11-13 18:31:18'),
(2, 1, 4, 4, 'CLASS 2', '1234567', '12345', 'Private', 'Kalptaru', 'Pune', 'New', NULL, '2020-11-13 14:51:55'),
(3, 70, 6, 11, 'CLASS 2', '12345', '12245', ' Private limited', 'IDFC', 'Punawala', 'New', NULL, '2020-11-20 17:24:04');

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
(5, 2, 2, '2020-11-05 05:50:03', '2020-11-05 05:50:03'),
(6, 43, 41, '2020-11-15 12:40:57', '2020-11-15 12:40:57'),
(7, 39, 41, '2020-11-15 12:48:39', '2020-11-15 12:48:39');

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
-- Table structure for table `pan_service`
--

CREATE TABLE `pan_service` (
  `panid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `app_type` varchar(100) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `pan_number` varchar(14) DEFAULT NULL,
  `aadhar_name` varchar(255) DEFAULT NULL,
  `contact_number` varchar(12) DEFAULT NULL,
  `emailid` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'New',
  `userid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pan_service`
--

INSERT INTO `pan_service` (`panid`, `rid`, `app_type`, `category`, `pan_number`, `aadhar_name`, `contact_number`, `emailid`, `status`, `userid`, `createdat`, `updatedat`) VALUES
(1, 1, 'INDIVISUAL', 'NEW PAN', NULL, 'VIKAS PAWA', '9657613754', 'vikas.nucleon@gmail.com', '', 1, '0000-00-00 00:00:00', '2020-11-15 21:01:18');

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

--
-- Dumping data for table `payment_transaction`
--

INSERT INTO `payment_transaction` (`paymentid`, `userid`, `transferedby`, `amount`, `paymentdate`, `message`, `createdat`, `updatedat`) VALUES
(1, 1, 2, 200.00, '2020-11-14', 'Added money in wallet', '2020-11-14 12:09:23', '2020-11-14 12:09:23');

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
(1, 'VIKAS PAWAR', 'EVVP987BN', 'VIKAS PAWAR', '20289588888', '9657613754', 'vikas.nucleon@gmail.com', '1998-03-11', '2020-11-14 17:37:38', '2020-11-14 17:37:38'),
(2, 'KUNAL KAPSE', 'VPP67bg', 'KAPSE KUNAL', '25828888888', '9657613754', 'vikas.nucleon@gmail.com', '1997-12-12', '2020-11-14 17:39:31', '2020-11-14 17:39:31'),
(3, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '636458396589', '9657613754', 'vikas.nucleon@gmail.com', '1998-03-11', '2020-11-20 00:03:40', '2020-11-20 00:03:40'),
(4, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '636458396589', '9657613754', 'vikas.nucleon@gmail.com', '1998-03-11', '2020-11-20 00:05:36', '2020-11-20 00:05:36'),
(5, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '636458396589', '9657613754', 'vikas.nucleon@gmail.com', '2020-11-19', '2020-11-20 00:07:16', '2020-11-20 00:07:16'),
(6, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '636458396589', '9657613754', 'vikas.nucleon@gmail.com', NULL, '2020-11-20 17:24:04', '2020-11-20 17:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `pf_docs`
--

CREATE TABLE `pf_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(100) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `pfid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pf_docs`
--

INSERT INTO `pf_docs` (`docid`, `extension`, `userid`, `pfid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'png', 1, 4, 'Aadhar', '2020-11-20 00:05:36', '2020-11-20 00:05:36'),
(2, 'jfif', 1, 4, 'PAN', '2020-11-20 00:05:36', '2020-11-20 00:05:36'),
(3, 'text', 1, 5, 'Aadhar', '2020-11-20 00:07:16', '2020-11-20 00:07:16'),
(4, 'xlsx', 1, 5, 'PAN', '2020-11-20 00:07:16', '2020-11-20 00:07:16');

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
  `remark` text DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pf_withdrwal`
--

INSERT INTO `pf_withdrwal` (`pfid`, `userid`, `pid`, `rid`, `bid`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 2, 1, 1, 1, 'New', NULL, '2020-11-14 17:37:39', '2020-11-14 17:37:39'),
(2, 2, 2, 2, 2, 'New', NULL, '2020-11-14 17:39:31', '2020-11-14 17:39:31'),
(3, 2, 3, 8, 3, 'New', NULL, '2020-11-20 00:03:41', '2020-11-20 00:03:41'),
(4, 2, 4, 9, 4, 'New', NULL, '2020-11-20 00:05:36', '2020-11-20 00:05:36'),
(5, 2, 5, 10, 5, 'New', NULL, '2020-11-20 00:07:16', '2020-11-20 00:07:16');

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
(1, 'Gokul colony', '12', 'Police station', 'Pune', 'Rahuri', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '4130752', '2020-11-14 17:37:38', '2020-11-14 17:37:38'),
(2, 'DHULE', 'DHULE', 'DHULE', 'DHULE', 'DHULE', 'DHULE', 'DHULE', 'DHULE', '415888', '2020-11-14 17:39:31', '2020-11-14 17:39:31'),
(3, 'PUNE', '10', 'Police station', 'RAHURI', 'RAhuri', 'PUNE', 'AHMADNAGAR', 'MAHARASHTRA', '412589', '2020-11-15 20:51:36', '2020-11-15 20:51:36'),
(4, 'PUNE', '10', 'Police station', 'RAHURI', 'RAhuri', 'PUNE', 'AHMADNAGAR', 'MAHARASHTRA', '412589', '2020-11-15 20:57:03', '2020-11-15 20:57:03'),
(5, 'PUNE', '10', 'Police station', 'RAHURI', 'RAhuri', 'PUNE', 'AHMADNAGAR', 'MAHARASHTRA', '412589', '2020-11-15 20:57:16', '2020-11-15 20:57:16'),
(6, 'PUNE', '10', 'Police station', 'RAHURI', 'RAhuri', 'PUNE', 'AHMADNAGAR', 'MAHARASHTRA', '412589', '2020-11-15 21:00:34', '2020-11-15 21:00:34'),
(7, 'PUNE', '10', 'Police station', 'RAHURI', 'RAhuri', 'PUNE', 'AHMADNAGAR', 'MAHARASHTRA', '412589', '2020-11-15 21:01:17', '2020-11-15 21:01:17'),
(8, 'SUPE', '45', 'GHODENADI', 'PUNE', 'SHIRUR', 'SHIRUR', 'PUNE', 'MP', '147895', '2020-11-20 00:03:41', '2020-11-20 00:03:41'),
(9, 'SUPE', '45', 'GHODENADI', 'PUNE', 'SHIRUR', 'SHIRUR', 'PUNE', 'MP', '147895', '2020-11-20 00:05:36', '2020-11-20 00:05:36'),
(10, 'SUPE', '45', 'GHODENADI', 'PUNE', 'SHIRUR', 'SHIRUR', 'PUNE', 'MP', '147895', '2020-11-20 00:07:16', '2020-11-20 00:07:16'),
(11, 'Gokul colony', '45', 'Police station', 'PUNE', 'SHIRUR', 'SHIRUR', 'PUNE', 'MP', '147895', '2020-11-20 17:24:04', '2020-11-20 17:24:04');

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
(1, 2, 1, '2020-11-15 11:53:03', '2020-11-15 11:53:03'),
(2, 2, 2, '2020-11-15 11:53:03', '2020-11-15 11:53:03'),
(3, 2, 3, '2020-11-15 11:53:36', '2020-11-15 11:53:36'),
(4, 2, 4, '2020-11-15 11:53:36', '2020-11-15 11:53:36'),
(7, 47, 1, '2020-11-15 23:19:44', '2020-11-15 23:19:44'),
(8, 47, 2, '2020-11-15 23:19:44', '2020-11-15 23:19:44'),
(9, 47, 4, '2020-11-15 23:19:44', '2020-11-15 23:19:44'),
(10, 48, 1, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(11, 48, 2, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(12, 48, 3, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(13, 48, 4, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(14, 49, 1, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(15, 49, 2, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(16, 49, 3, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(17, 49, 4, '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(18, 50, 1, '2020-11-16 00:11:24', '2020-11-16 00:11:24'),
(19, 50, 2, '2020-11-16 00:11:24', '2020-11-16 00:11:24'),
(20, 50, 3, '2020-11-16 00:11:24', '2020-11-16 00:11:24'),
(21, 50, 4, '2020-11-16 00:11:24', '2020-11-16 00:11:24'),
(22, 51, 1, '2020-11-16 00:11:26', '2020-11-16 00:11:26'),
(23, 51, 2, '2020-11-16 00:11:26', '2020-11-16 00:11:26'),
(24, 51, 3, '2020-11-16 00:11:26', '2020-11-16 00:11:26'),
(25, 51, 4, '2020-11-16 00:11:26', '2020-11-16 00:11:26'),
(28, 54, 1, '2020-11-16 00:13:14', '2020-11-16 00:13:14'),
(29, 54, 3, '2020-11-16 00:13:14', '2020-11-16 00:13:14'),
(30, 55, 1, '2020-11-16 00:23:05', '2020-11-16 00:23:05'),
(31, 55, 2, '2020-11-16 00:23:05', '2020-11-16 00:23:05'),
(32, 55, 3, '2020-11-16 00:23:05', '2020-11-16 00:23:05'),
(33, 55, 4, '2020-11-16 00:23:05', '2020-11-16 00:23:05'),
(41, 63, 1, '2020-11-16 05:26:48', '2020-11-16 05:26:48'),
(42, 63, 2, '2020-11-16 05:26:48', '2020-11-16 05:26:48'),
(43, 63, 3, '2020-11-16 05:26:48', '2020-11-16 05:26:48'),
(44, 63, 4, '2020-11-16 05:26:48', '2020-11-16 05:26:48'),
(51, 70, 1, '2020-11-17 11:10:19', '2020-11-17 11:10:19'),
(52, 70, 2, '2020-11-17 11:10:19', '2020-11-17 11:10:19'),
(53, 71, 1, '2020-11-18 09:12:27', '2020-11-18 09:12:27'),
(54, 71, 4, '2020-11-18 09:12:27', '2020-11-18 09:12:27'),
(55, 72, 1, '2020-11-18 10:09:30', '2020-11-18 10:09:30');

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
(36, 1, 'lalitrmeshram@gmail.com', 'Lalit', 'Meshram', '12345', '8007015819', '2020-11-04 05:39:30', '2020-11-04 06:35:41'),
(39, 1, 'vikas.nucleon@gmail.com', 'VIKAS', 'PAWAR', '12345', '9881652726', '2020-11-14 13:27:17', '2020-11-15 21:09:21'),
(40, 3, 'vikas.nucleon@gmail.com', 'VIKAS', 'PAWAR', '12345', '9881652726', '2020-11-14 13:30:14', '2020-11-15 12:35:12'),
(41, 3, 'vikas.nucleon@gmail.com', 'VIKAS', 'PAWAR', '12345', '9881652726', '2020-11-14 13:30:24', '2020-11-15 12:35:42'),
(42, 3, 'vikas.nucleon@gmail.com', 'VIKAS', 'PAWAR', '12345', '9881652726', '2020-11-14 13:30:41', '2020-11-15 12:35:53'),
(43, 2, 'vikas.nucleon@gmail.com', 'VIKAS', 'PAWAR', '12345', '9881652726', '2020-11-14 13:32:47', '2020-11-14 13:32:47'),
(44, 2, 'vikas.nucleon@gmail.com', 'VIKAS', 'PAWAR', '12345', '9881652726', '2020-11-14 13:34:29', '2020-11-14 13:34:29'),
(47, 4, 'kiranvyavhare277@gmail.com', 'kiran', 'vyavhare', '12345', '8788329794', '2020-11-15 23:19:44', '2020-11-15 23:19:44'),
(48, 5, 'kiran277@gmail.com', 'rahul', 'wani', '12345', '8788329794', '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(49, 5, 'kiran277@gmail.com', 'rahul', 'wani', '12345', '8788329794', '2020-11-16 00:11:21', '2020-11-16 00:11:21'),
(50, 5, 'kiran277@gmail.com', 'rahul', 'wani', '12345', '8788329794', '2020-11-16 00:11:24', '2020-11-16 00:11:24'),
(51, 5, 'kiran277@gmail.com', 'rahul', 'wani', '12345', '8788329794', '2020-11-16 00:11:26', '2020-11-16 00:11:26'),
(53, 3, 'shaikhwasim729@gmail.com', 'wasim', 'sk', '12345', '74182963', '2020-11-16 00:13:00', '2020-11-16 00:13:00'),
(54, 3, 'shaikhwasim729@gmail.com', 'wasim', 'sk', '12345', '74182963', '2020-11-16 00:13:14', '2020-11-16 00:13:14'),
(55, 2, 'shaikhwasim729@gmail.com', 'wasim distrib', 'sk', '123', '123456793', '2020-11-16 00:23:05', '2020-11-16 00:23:05'),
(63, 4, 'distributor@ca.com', 'wasim', 'sk', '12345', '74182963', '2020-11-16 05:26:48', '2020-11-16 05:26:48'),
(70, 3, 'retailor@ca.com', 'John', 'Doe', '12345', '965761354', '2020-11-17 11:10:18', '2020-11-17 11:10:18'),
(71, 3, 'ashok.retailor@ca.com', 'Ashok', 'Mule', '12345', '8007015819', '2020-11-18 09:12:27', '2020-11-18 09:12:27'),
(72, 4, 'akash.customer@ca.com', 'Akash', 'Malve', '12345', '8007015819', '2020-11-18 10:09:30', '2020-11-18 10:09:30');

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
-- Dumping data for table `wallet_transaction`
--

INSERT INTO `wallet_transaction` (`transactionid`, `userid`, `transaction_type`, `amount`, `message`, `transactiondate`, `createdat`, `updatedat`) VALUES
(1, 2, 'Credit', 250.00, 'Added money in wallet', '2020-11-15 00:00:00', '2020-11-15 16:54:12', '2020-11-15 16:54:12'),
(2, 2, 'Credit', 500.00, 'Added money in wallet', '2020-11-15 12:53:00', '2020-11-15 16:56:53', '2020-11-15 16:56:53'),
(3, 2, 'Debit', 250.00, 'Added money in wallet', '2020-11-15 05:02:59', '2020-11-15 17:02:59', '2020-11-15 17:03:51'),
(4, 2, 'Credit', 2500.00, 'Added money in wallet', '2020-11-20 12:03:30', '2020-11-20 00:03:30', '2020-11-20 00:03:30'),
(5, 2, 'Debit', 2000.00, 'Debit for service', '2020-11-20 12:03:40', '2020-11-20 00:03:40', '2020-11-20 00:03:40'),
(6, 2, 'Credit', 3000.00, 'Added money in wallet', '2020-11-20 12:05:30', '2020-11-20 00:05:30', '2020-11-20 00:05:30'),
(7, 2, 'Debit', 2000.00, 'Debit for service', '2020-11-20 12:05:36', '2020-11-20 00:05:36', '2020-11-20 00:05:36'),
(8, 2, 'Debit', 2000.00, 'Debit for service', '2020-11-20 12:07:15', '2020-11-20 00:07:15', '2020-11-20 00:07:15'),
(9, 2, 'Credit', 10000.00, 'Added money in wallet', '2020-11-20 04:37:46', '2020-11-20 16:37:46', '2020-11-20 16:37:46'),
(13, 70, 'Credit', 5000.00, 'Added money in wallet', '2020-11-20 05:22:32', '2020-11-20 17:22:32', '2020-11-20 17:22:32'),
(14, 70, 'Debit', 2000.00, 'Debit for service', '2020-11-20 05:24:04', '2020-11-20 17:24:04', '2020-11-20 17:24:04');

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
-- Indexes for table `digital_docs`
--
ALTER TABLE `digital_docs`
  ADD PRIMARY KEY (`docid`);

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
-- Indexes for table `pan_service`
--
ALTER TABLE `pan_service`
  ADD PRIMARY KEY (`panid`);

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
-- Indexes for table `pf_docs`
--
ALTER TABLE `pf_docs`
  ADD PRIMARY KEY (`docid`);

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
  MODIFY `activityid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `criteria_documents`
--
ALTER TABLE `criteria_documents`
  MODIFY `criteriaid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `digital_docs`
--
ALTER TABLE `digital_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `digital_signature`
--
ALTER TABLE `digital_signature`
  MODIFY `did` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `distributors_retailors`
--
ALTER TABLE `distributors_retailors`
  MODIFY `distretid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `pan_service`
--
ALTER TABLE `pan_service`
  MODIFY `panid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner_details`
--
ALTER TABLE `partner_details`
  MODIFY `partnerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  MODIFY `paymentid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pf_docs`
--
ALTER TABLE `pf_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pf_withdrwal`
--
ALTER TABLE `pf_withdrwal`
  MODIFY `pfid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proof_docs`
--
ALTER TABLE `proof_docs`
  MODIFY `pdid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `residential_details`
--
ALTER TABLE `residential_details`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `accessid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  MODIFY `transactionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  ADD CONSTRAINT `wallet_transaction_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_master` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
