-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2021 at 06:34 AM
-- Server version: 5.7.34
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkinfote_CA`
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
  `servicetype` enum('Bill','service','Normal','Wallet','Users','Distributor Retailors','Retailors','Service Charges') NOT NULL DEFAULT 'Normal',
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isactive` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityid`, `activity`, `path`, `pagename`, `servicetype`, `createdat`, `updatedat`, `isactive`) VALUES
(1, 'PF Withdrawal', 'pf_withdrawal/show', 'PF Withdrawal', 'service', '2020-11-15 11:49:00', '2020-11-15 11:59:03', 0),
(2, 'Digital Signature', 'digital_sign/show', 'Digital Signature', 'service', '2020-11-15 11:50:31', '2020-11-15 11:59:12', 0),
(3, 'User', 'users/show', 'User', 'Users', '2020-11-15 11:52:04', '2020-11-15 12:03:26', 0),
(4, 'Distributor Retailors\r\n', 'retailorDistributor', ' Distributor Retailor', 'Distributor Retailors', '2020-11-15 11:52:04', '2020-11-15 12:03:38', 0),
(5, 'Service Charges\r\n', 'servicecharge', 'Service Charges', 'Service Charges', '2020-11-15 11:52:04', '2020-11-15 12:03:38', 0),
(6, 'Pan Card', 'pancard', 'Pan Card', 'service', '2020-11-25 19:37:31', '2020-11-25 19:38:07', 0),
(8, 'Shop Act', 'shopAct', 'Shop Act', 'service', '2020-11-28 03:05:59', '2020-11-28 03:05:59', 0),
(9, 'Udyog Aadhar', 'udyagAadhar', 'Udyog Aadhar', 'service', '2020-11-29 05:37:50', '2020-11-29 05:37:50', 0),
(10, 'Income Tax', 'income', 'Income Tax', 'service', '2020-12-07 01:33:06', '2020-12-07 01:33:06', 0),
(11, 'GST Filing', 'loadgstfile', 'GST Filing', 'service', '2020-12-13 03:50:11', '2020-12-13 03:50:11', 0),
(12, 'GST Annual Return', 'loadgstannual', 'GST Annual Return', 'service', '2020-12-13 03:52:55', '2020-12-13 03:52:55', 0),
(13, 'GST Registration', 'gst', 'GST Registration', 'service', '2021-01-05 10:23:50', '2021-01-05 10:23:50', 1),
(14, 'Certificate', 'ca_certificate', 'Certificate', 'service', '2021-01-05 11:07:35', '2021-01-05 11:07:35', 1),
(15, 'E-Way Bill', 'ewayBill', 'E-Way Bill', 'service', '2021-05-02 05:51:03', '2021-05-02 05:51:03', 0),
(16, 'Food Licence', 'foodlicense', 'Food Licence', 'service', '2021-05-02 05:51:03', '2021-05-02 05:51:03', 0),
(17, 'Tax Invoice', 'taxInvoice', 'Tax Invoice', 'service', '2021-05-02 06:22:29', '2021-05-02 06:22:29', 0),
(18, 'Eway-Bill', 'ewayBill', 'Eway Bill', 'service', '2021-05-23 22:50:15', '2021-05-23 22:50:15', 1),
(19, 'Food Lincense', 'foodlicense', 'Food License', 'service', '2021-05-23 22:53:47', '2021-05-23 22:53:47', 1),
(20, 'Partnership Deed', 'partnershipDeed', 'Partnership Deed', 'service', '2021-05-23 22:56:57', '2021-05-23 22:56:57', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `bid` int(10) UNSIGNED NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ac_number` varchar(255) DEFAULT NULL,
  `ifsc_number` varchar(100) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`bid`, `bank_name`, `ac_number`, `ifsc_number`, `createdat`, `updatedat`) VALUES
(1, 'WINDSON', '11478955996', 'WINT478', '2020-11-22 07:20:14', '2020-11-22 07:20:14'),
(2, 'bob', 'bob1223', 'ifsc123', '2020-11-26 10:34:05', '2020-11-26 10:34:05'),
(3, '', '', '', '2020-11-27 10:08:35', '2020-11-27 10:08:35'),
(4, 'bob', 'bob123456890', 'ifsc1234', '2020-11-29 06:23:28', '2020-11-29 06:23:28'),
(5, 'bob', 'bob123456890', 'ifsc1234', '2020-11-29 06:56:40', '2020-11-29 06:56:40'),
(6, 'hfghfh', 'gffhfh', 'ghfhf', '2020-11-29 07:19:11', '2020-11-29 07:19:11'),
(7, 'bob', 'bob123456890', 'ifsc1234', '2020-11-29 08:32:25', '2020-11-29 08:32:25'),
(8, 'axis bank', 'acc123', 'ifsc123', '2020-12-01 11:41:16', '2020-12-01 11:41:16'),
(9, 'axis bank', 'acc123', 'ifsc123', '2020-12-01 11:43:47', '2020-12-01 11:43:47'),
(10, 'axis bank', 'acc123', 'ifsc123', '2020-12-01 11:45:30', '2020-12-01 11:45:30'),
(11, 'bob', 'acc1234', 'ifsc123', '2020-12-02 07:24:34', '2020-12-02 07:24:34'),
(12, 'bob', 'bob123456890', 'ifsc1234', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(13, 'IDFC', '3102589685', 'IFSC002', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(14, 'IDFC', '258965588', 'IFSC121', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(19, 'IDFC', '258965588', 'IFCS85P', '2020-12-02 12:22:09', '2020-12-02 12:22:09'),
(21, 'IDFC', '258965588', 'IFCS85P', '2020-12-02 12:24:28', '2020-12-02 12:24:28'),
(22, 'WINDSON', '258965588', 'IFCS85P', '2020-12-02 12:27:39', '2020-12-02 12:27:39'),
(24, 'bob', 'bob123456890', 'ifsc1234', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(26, 'hfghfh', 'gffhfh', 'ghfhf', '2020-12-02 14:18:00', '2020-12-02 14:18:00'),
(27, 'bob', 'bob123456890', 'ifsc1234', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(28, 'KOTAK', '0147896325', 'MAHITNAHI002', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(29, 'IDFC', '3102589685', 'IFSC002', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(30, 'IDFC', '3102589685', 'IFSC002', '2020-12-07 00:24:28', '2020-12-07 00:24:28'),
(31, 'IDFC', '3102589685', 'IFSC002', '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(32, 'bob', 'acc123', 'ifsc123', '2020-12-07 19:27:36', '2020-12-07 19:27:36'),
(33, 'bob', 'acc123', 'ifsc123', '2020-12-07 20:06:39', '2020-12-07 20:06:39'),
(34, 'bob', 'acc123', 'ifsc123', '2020-12-07 20:09:58', '2020-12-07 20:09:58'),
(35, 'icic bank', '65325632656', 'ifjsk56565', '2020-12-08 09:22:34', '2020-12-08 09:22:34'),
(36, 'icic bank', '65325632656', 'ifjsk56565', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(37, '', '', '', '2020-12-22 07:58:59', '2020-12-22 07:58:59'),
(38, 'bob', 'bob123456890', 'ifsc1234', '2021-01-02 23:18:07', '2021-01-02 23:18:07'),
(39, 'bob', 'bob123456890', 'ifsc1234', '2021-01-02 23:21:13', '2021-01-02 23:21:13'),
(40, 'boi', '9626150544321563', 'abc12345', '2021-01-22 09:46:16', '2021-01-22 09:46:16'),
(41, 'boi', '23456789432', 'bkid1123', '2021-01-22 22:58:11', '2021-01-22 22:58:11'),
(42, 'sbi', '96261000513321', '', '2021-01-22 23:27:30', '2021-01-22 23:27:30'),
(43, 'sbi', '96261000513321', 'bkid1123', '2021-01-23 03:38:11', '2021-01-23 03:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `certid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `c_type` varchar(100) NOT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `buss_name` varchar(255) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `buss_address` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(100) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `certificates_docs`
--

CREATE TABLE `certificates_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(20) NOT NULL,
  `userid` int(11) NOT NULL,
  `certid` int(11) NOT NULL,
  `doctype` varchar(50) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_directors`
--

CREATE TABLE `company_directors` (
  `id` int(10) UNSIGNED NOT NULL,
  `companyid` int(10) UNSIGNED NOT NULL,
  `shares` float DEFAULT NULL,
  `nameofdir` varchar(255) DEFAULT NULL,
  `daddress` text,
  `emailid` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company_reg`
--

CREATE TABLE `company_reg` (
  `companyid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `ctype` varchar(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `obj_company` varchar(255) DEFAULT NULL,
  `obj_specfied` varchar(255) DEFAULT NULL,
  `capital` double(11,2) DEFAULT NULL,
  `naturebuss` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(100) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'India', 'MAHARASHTRA', 'Sangmner', '411002', 'A/P Sangmenr', '2020-11-22 06:58:50', '2020-11-24 10:47:04'),
(2, 'USA', 'UP', 'Nagpur', '411005', 'Nagpur', '2020-11-22 07:05:19', '2020-11-28 06:03:26'),
(3, 'USA', 'Winterfell', 'North', '147895', 'Winterfell', '2020-11-22 07:07:12', '2020-11-22 07:07:12'),
(4, 'USA', 'Winterfell', 'North', '478965', 'Winterfell', '2020-11-22 07:08:50', '2020-11-22 07:08:50'),
(5, 'India', 'MAHARASHTRA', 'Pune', '411002', 'Pune', '2020-11-27 08:26:26', '2020-11-27 08:26:26'),
(6, 'India', 'MAHARASHTRA', 'KENDAL', '411005', 'Kendal Bk', '2020-11-27 08:56:23', '2020-11-27 08:56:23'),
(7, 'India', 'MP', 'PUNE', '411005', 'PUNE', '2020-11-28 06:06:32', '2020-11-28 06:06:32'),
(8, 'India', 'Maharshtra', 'Ahmednagar', '420605', 'Nimgaon bk', '2020-11-28 09:51:49', '2020-11-28 09:51:49'),
(10, 'India', 'MAHARASHTRA', 'NASHIK', '422001', 'BEHIND NDCC BANK', '2020-11-29 05:37:02', '2020-11-29 05:37:02'),
(13, 'India', 'MAHARASHTRA', 'NASHIK', '422001', 'BEHIND NDCC BANK', '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(14, 'india ', 'maha', 'sangamner', '412714', 'at post zarekathi tal san. dist A.nagar pin code 412714', '2020-11-29 06:59:54', '2020-11-29 06:59:54'),
(15, 'in', 'dfjkfhjk', 'fdfjkhfj', 'jkfhjk', 'jfhfkfhjfh jkfhjkfh fjkhfjk ffjhkhjkhjk gjkghfjkgh dgdjkfh dgdfgjh gfdjkfg gfdjk ', '2020-11-29 07:02:13', '2020-11-29 07:02:13'),
(16, 'gh', 'fjkfhkj', 'jkhfgjkdh', 'gjfdjgkdjk', 'hdhfdjkh jhgkhfk jdkghdfjk ', '2020-11-29 07:04:02', '2020-11-29 07:04:02'),
(17, 'India', 'MAHARASHTRA', 'Satara', '422013', 'Shere Station Shere Satara Maharashtra - 415108', '2020-11-30 09:51:12', '2020-11-30 09:51:12'),
(18, 'India', 'MAHARASHTRA', 'Sankh ', '416412', 'Sankh Tal- Jath, Sankh, Sangli Maharashtra 416412', '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(19, 'India', 'MAHARASHTRA', '', '', 'Maharashtra ', '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(20, 'India', 'Maharashtra', 'nagpur', '440009', '439,ashirwad building, nagpur', '2020-12-16 18:55:48', '2020-12-16 18:55:48'),
(21, 'sfsf', 'fsfsd', 'fdfd', 'fsfsdf', 'xvxvdd', '2020-12-17 00:33:27', '2020-12-17 00:33:27'),
(22, 'India', 'maha', 'sangamner', '412714', 'at post zarekathi tal san. dist A.nagar pin code 412714', '2021-01-13 09:22:18', '2021-01-13 09:22:18');

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
-- Table structure for table `deed_docs`
--

CREATE TABLE `deed_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `deedid` int(11) NOT NULL,
  `doctype` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deed_docs`
--

INSERT INTO `deed_docs` (`docid`, `extension`, `userid`, `deedid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'png', 3, 8, 'Shop Bill', '2021-05-23 02:34:41', '2021-05-23 02:34:41'),
(2, 'png', 3, 8, 'Other Doc 1', '2021-05-23 02:34:41', '2021-05-23 02:34:41'),
(3, 'png', 3, 1, 'Other Doc 2', '2021-05-23 02:41:42', '2021-05-23 02:41:42'),
(4, 'jpg', 3, 2, 'Rent agrement', '2021-05-23 08:27:26', '2021-05-23 08:27:26'),
(5, 'png', 3, 2, 'Shop Bill', '2021-05-23 08:27:26', '2021-05-23 08:27:26'),
(6, 'png', 3, 2, 'Other Doc 1', '2021-05-23 08:27:27', '2021-05-23 08:27:27'),
(7, 'jpg', 3, 2, 'Other Doc 2', '2021-05-23 08:27:27', '2021-05-23 08:27:27'),
(8, 'jpg', 3, 3, 'Rent agrement', '2021-05-23 09:24:26', '2021-05-23 09:24:26'),
(9, 'png', 3, 3, 'Shop Bill', '2021-05-23 09:24:27', '2021-05-23 09:24:27'),
(10, 'jpg', 3, 4, 'Rent agrement', '2021-05-23 21:17:16', '2021-05-23 21:17:16'),
(11, 'png', 3, 4, 'Shop Bill', '2021-05-23 21:17:16', '2021-05-23 21:17:16'),
(12, 'jpg', 3, 4, 'Other Doc 1', '2021-05-23 21:17:17', '2021-05-23 21:17:17'),
(13, 'png', 3, 4, 'Other Doc 2', '2021-05-23 21:17:17', '2021-05-23 21:17:17'),
(14, 'png', 3, 9, 'Rent agrement', '2021-05-23 22:40:51', '2021-05-23 22:40:51'),
(15, 'png', 3, 10, 'Rent agrement', '2021-05-23 22:44:59', '2021-05-23 22:44:59'),
(16, 'jpg', 3, 10, 'Shop Bill', '2021-05-23 22:44:59', '2021-05-23 22:44:59'),
(17, 'jpg', 3, 10, 'Other Doc 1', '2021-05-23 22:44:59', '2021-05-23 22:44:59'),
(18, 'jpg', 3, 10, 'Other Doc 2', '2021-05-23 22:44:59', '2021-05-23 22:44:59');

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
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `digital_docs`
--

INSERT INTO `digital_docs` (`docid`, `extension`, `userid`, `did`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'pdf', 1, 1, 'Aadhar', '2020-11-22 07:32:49', '2020-11-22 07:32:49'),
(2, 'sql', 1, 1, 'PAN', '2020-11-22 07:32:49', '2020-11-22 07:32:49'),
(3, 'pdf', 1, 1, 'Passport', '2020-11-22 07:32:49', '2020-11-22 07:32:49'),
(4, 'jpg', 1, 3, 'Aadhar', '2020-11-22 07:56:54', '2020-11-22 07:56:54'),
(5, 'jpg', 1, 3, 'PAN', '2020-11-22 07:56:54', '2020-11-22 07:56:54'),
(6, 'jpg', 1, 3, 'Passport', '2020-11-22 07:56:54', '2020-11-22 07:56:54'),
(7, 'jpg', 1, 4, 'Aadhar', '2020-11-26 12:22:41', '2020-11-26 12:22:41'),
(8, 'jpg', 1, 4, 'PAN', '2020-11-26 12:22:41', '2020-11-26 12:22:41'),
(9, 'jpg', 1, 4, 'Passport', '2020-11-26 12:22:41', '2020-11-26 12:22:41'),
(10, 'jpg', 1, 5, 'Aadhar', '2020-11-26 12:36:37', '2020-11-26 12:36:37'),
(11, 'jpg', 1, 5, 'PAN', '2020-11-26 12:36:37', '2020-11-26 12:36:37'),
(12, 'jpg', 1, 5, 'Passport', '2020-11-26 12:36:38', '2020-11-26 12:36:38'),
(13, 'jpg', 1, 6, 'Aadhar', '2020-11-26 12:38:07', '2020-11-26 12:38:07'),
(14, 'jpg', 1, 6, 'PAN', '2020-11-26 12:38:08', '2020-11-26 12:38:08'),
(15, 'jpg', 1, 6, 'Passport', '2020-11-26 12:38:11', '2020-11-26 12:38:11'),
(16, 'jpeg', 1, 7, 'Aadhar', '2020-11-28 05:57:28', '2020-11-28 05:57:28'),
(17, 'jpeg', 1, 7, 'PAN', '2020-11-28 05:57:32', '2020-11-28 05:57:32'),
(18, 'jpeg', 1, 7, 'Passport', '2020-11-28 05:57:33', '2020-11-28 05:57:33'),
(19, 'jpeg', 1, 8, 'Aadhar', '2020-11-28 07:18:00', '2020-11-28 07:18:00'),
(20, 'jpeg', 1, 8, 'PAN', '2020-11-28 07:18:00', '2020-11-28 07:18:00'),
(21, 'jpeg', 1, 8, 'Passport', '2020-11-28 07:18:01', '2020-11-28 07:18:01'),
(22, 'jpeg', 1, 9, 'Aadhar', '2020-11-29 17:16:05', '2020-11-29 17:16:05'),
(23, 'jpeg', 1, 9, 'PAN', '2020-11-29 17:16:05', '2020-11-29 17:16:05'),
(24, 'jpeg', 1, 9, 'Passport', '2020-11-29 17:16:05', '2020-11-29 17:16:05'),
(25, 'jfif', 1, 10, 'Aadhar', '2021-01-23 01:59:58', '2021-01-23 01:59:58'),
(26, 'webp', 1, 10, 'PAN', '2021-01-23 01:59:58', '2021-01-23 01:59:58'),
(27, 'jpg', 1, 10, 'Passport', '2021-01-23 01:59:58', '2021-01-23 01:59:58');

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
  `nature_of_buss` varchar(150) NOT NULL,
  `trade_name` varchar(150) NOT NULL,
  `place_of_buss` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT '1',
  `remark` text,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `digital_signature`
--

INSERT INTO `digital_signature` (`did`, `userid`, `pid`, `rid`, `class`, `nature_of_buss`, `trade_name`, `place_of_buss`, `status`, `remark`, `createdat`) VALUES
(1, 3, 2, 2, 'Class 3', 'Private Limited', 'IDFC', 'Punawala', '4', 'completed', '2020-11-26 12:18:44'),
(2, 3, 3, 3, 'CLASS 2', ' asdd', 'abc', 'nagpur', '3', 'ok', '2020-11-29 08:23:55'),
(3, 3, 4, 4, 'CLASS 2', ' nature', 'xyz', 'nagpur', '3', '', '2020-11-26 06:27:21'),
(4, 3, 6, 6, 'Class 3', ' institution', 'Ace', 'nagpur', '3', 'Rejected by admin', '2020-11-27 09:41:58'),
(5, 3, 7, 7, 'CLASS 2', ' ddsfgd', 'dfsdf', 'dfsdf', '3', 'Reject', '2020-11-28 05:49:15'),
(6, 3, 8, 8, 'CLASS 2', ' ', '', '', '4', '', '2020-11-27 00:32:07'),
(7, 3, 10, 14, 'Class 3', ' Private Limited', 'IFSC', 'Pune', '2', 'Change remark', '2020-12-11 10:26:35'),
(8, 3, 11, 15, 'Class 3', ' Private limited', 'MAHIT NAHI', 'KON AHE', '2', 'please contact to admin', '2020-11-29 17:10:42'),
(9, 3, 56, 103, 'CLASS 2', ' ONLINE WORK', 'TK INFOTECH', 'AT POST ZAREKATHI TAL. SANGAMNER DIST. A. NAGAR PIN CODE 413714', '2', 'Test', '2020-12-11 10:28:49'),
(10, 3, 151, 227, 'Class 3', ' import export', 'xyz', 'bardi nagpur', '3', 'details are not proper', '2021-01-23 02:02:36');

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
(1, 2, 6, '2020-11-27 08:56:20', '2020-11-27 08:56:20'),
(2, 14, 7, '2020-11-28 06:06:31', '2020-11-29 07:06:30'),
(3, 2, 3, '2020-11-28 06:08:45', '2020-11-28 06:08:45'),
(4, 14, 15, '2020-11-29 07:02:13', '2020-11-29 07:02:13'),
(5, 14, 16, '2020-11-29 07:04:02', '2020-11-29 07:04:02'),
(6, 14, 15, '2020-11-29 07:04:48', '2020-11-29 07:04:48'),
(7, 14, 7, '2020-11-29 07:05:36', '2020-11-29 07:05:36'),
(8, 2, 20, '2020-12-16 18:55:48', '2020-12-16 18:55:48'),
(9, 2, 21, '2020-12-17 00:33:27', '2020-12-17 00:33:27');

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
-- Table structure for table `ewaybill`
--

CREATE TABLE `ewaybill` (
  `bill_id` int(11) NOT NULL,
  `shipid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `billId` int(11) DEFAULT NULL,
  `bussness_type` varchar(45) DEFAULT NULL,
  `bussness_name` varchar(45) DEFAULT NULL,
  `shop_adhar` varchar(15) DEFAULT NULL,
  `gst_number` varchar(45) DEFAULT NULL,
  `eway_bill_id` varchar(45) DEFAULT NULL,
  `bill_pwd` varchar(45) DEFAULT NULL,
  `transporter_name` varchar(45) DEFAULT NULL,
  `transporter_id` varchar(45) DEFAULT NULL,
  `distance_km` varchar(20) DEFAULT NULL,
  `transport_mode` varchar(10) DEFAULT NULL,
  `vehicle_type` varchar(30) DEFAULT NULL,
  `vehicle_number` varchar(45) DEFAULT NULL,
  `transport_doc_number` varchar(45) DEFAULT NULL,
  `final_date` date DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `createdat` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ewaybill`
--

INSERT INTO `ewaybill` (`bill_id`, `shipid`, `pid`, `userid`, `billId`, `bussness_type`, `bussness_name`, `shop_adhar`, `gst_number`, `eway_bill_id`, `bill_pwd`, `transporter_name`, `transporter_id`, `distance_km`, `transport_mode`, `vehicle_type`, `vehicle_number`, `transport_doc_number`, `final_date`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 1, 209, 3, 1, '1', 'XXOVEK', 'wew', '25', '123', '1222', 'vikas', '122', '40', 'road', 'regular', 'MH6766y', 'Vikas677', '1999-01-01', 2, 'Change statys', '2021-05-02 01:12:30', '2021-05-02 01:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `ewaybill_invoice_details`
--

CREATE TABLE `ewaybill_invoice_details` (
  `id` int(11) NOT NULL,
  `ewaybill_id` int(11) DEFAULT NULL,
  `pname` varchar(45) DEFAULT NULL,
  `pdesc` varchar(45) DEFAULT NULL,
  `hsn` varchar(45) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `unit` varchar(45) DEFAULT NULL,
  `variable_value` varchar(45) DEFAULT NULL,
  `gst_rate` float DEFAULT NULL,
  `igst_rate` float DEFAULT NULL,
  `cess_advol_rate` float DEFAULT NULL,
  `cess_non_advol_rate` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ewaybill_invoice_details`
--

INSERT INTO `ewaybill_invoice_details` (`id`, `ewaybill_id`, `pname`, `pdesc`, `hsn`, `quantity`, `unit`, `variable_value`, `gst_rate`, `igst_rate`, `cess_advol_rate`, `cess_non_advol_rate`) VALUES
(1, 1, 'Maza', 'Cocacola', '860560', '5', '12', '12', 12, 12, 2, 12),
(2, 1, 'Appy Fizz', 'Cocacola', '860560', '5', '12', '12', 12, 12, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `eway_bill_details`
--

CREATE TABLE `eway_bill_details` (
  `id` int(11) NOT NULL,
  `tax_amt` float DEFAULT NULL,
  `cgst_amt` float DEFAULT NULL,
  `sgst_amt` float DEFAULT NULL,
  `igst_amt` float DEFAULT NULL,
  `cess_advol_amt` float DEFAULT NULL,
  `cess_non_amt` float DEFAULT NULL,
  `other_amt` float DEFAULT NULL,
  `invoice_amt` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eway_bill_details`
--

INSERT INTO `eway_bill_details` (`id`, `tax_amt`, `cgst_amt`, `sgst_amt`, `igst_amt`, `cess_advol_amt`, `cess_non_amt`, `other_amt`, `invoice_amt`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `eway_shiping_details`
--

CREATE TABLE `eway_shiping_details` (
  `shipid` int(11) NOT NULL,
  `sname` varchar(45) DEFAULT NULL,
  `gstn` varchar(45) DEFAULT NULL,
  `sstate` varchar(45) DEFAULT NULL,
  `saddress` varchar(100) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `pincode` varchar(45) DEFAULT NULL,
  `bname` varchar(45) DEFAULT NULL,
  `b_gstn` varchar(45) DEFAULT NULL,
  `bstate` varchar(45) DEFAULT NULL,
  `b_address` varchar(45) DEFAULT NULL,
  `b_place` varchar(45) DEFAULT NULL,
  `b_pincode` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eway_shiping_details`
--

INSERT INTO `eway_shiping_details` (`shipid`, `sname`, `gstn`, `sstate`, `saddress`, `place`, `pincode`, `bname`, `b_gstn`, `bstate`, `b_address`, `b_place`, `b_pincode`) VALUES
(1, 'Vikas Bhaskar', '123', 'Maharashtra', 'Gokul Colony rahuri', 'Pume', '411002', 'BHASKAR RAMJI PAWAR', '344', 'MAHARASHTRA', NULL, NULL, '413705');

-- --------------------------------------------------------

--
-- Table structure for table `food_licence`
--

CREATE TABLE `food_licence` (
  `foodid` int(10) UNSIGNED NOT NULL,
  `userid` int(11) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `emailid` varchar(150) DEFAULT NULL,
  `mobile_alternate` varchar(12) DEFAULT NULL,
  `noofyear` varchar(10) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL,
  `faddress` varchar(255) NOT NULL,
  `fstate` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `app_type` varchar(100) NOT NULL,
  `subdivision` varchar(100) NOT NULL,
  `village` varchar(100) DEFAULT NULL,
  `pincode` varchar(10) NOT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_licence`
--

INSERT INTO `food_licence` (`foodid`, `userid`, `mobile_number`, `fax`, `emailid`, `mobile_alternate`, `noofyear`, `telephone`, `faddress`, `fstate`, `district`, `app_type`, `subdivision`, `village`, `pincode`, `landmark`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 3, '09657613754', '4789655', 'vikaspawar3110@gmail.com', '09657613754', '1', '96578859696', 'Mira Road West Mumbai', 'Maharashtra', 'Ahmadnagar', '2', 'Rahuri', 'Pune', '413705', 'Pune', 1, NULL, '2021-04-30 23:33:51', '2021-04-30 23:33:51'),
(2, 3, '09657613754', '4789655', 'vikaspawar3110@gmail.com', '09657613754', '1', '96578859696', 'Mira Road West Mumbai', 'Maharashtra', 'Ahmadnagar', '2', 'Rahuri', 'Pune', '413705', 'Pune', 1, NULL, '2021-04-30 23:34:31', '2021-04-30 23:34:31'),
(3, 3, '09657613754', '4789655', 'vikaspawar3110@gmail.com', '09657613754', '1', '96578859696', 'Mira Road West Mumbai', 'Maharashtra', 'Ahmadnagar', '2', 'Rahuri', 'Pune', '413705', 'Pune', 2, 'Change status', '2021-04-30 23:35:52', '2021-05-01 02:45:09'),
(4, 3, '09657613754', '4789655', 'vikaspawar3110@gmail.com', '09657613754', '1', '96578859696', 'Mira Road West Mumbai', 'Maharashtra', 'Ahmadnagar', '2', 'Rahuri', 'Pune', '413705', 'Pune', 1, NULL, '2021-04-30 23:36:43', '2021-04-30 23:36:43'),
(5, 3, '09657613754', '4789655', 'vikaspawar3110@gmail.com', '09657613754', '1', '96578859696', 'Mira Road West Mumbai', 'Maharashtra', 'Ahmadnagar', '2', 'Rahuri', 'Pune', '413705', 'Pune', 3, 'Reject by admin', '2021-04-30 23:37:22', '2021-05-01 02:49:41'),
(6, 3, '09024634008', '4789655', 'hulkt@avengers.com', '09763602243', '5', '96578859696', 'Taimur vila Vasai East', 'Maharashtra', 'Ahmadnagar', '2', 'Rahuri', 'Pune', '455002', 'Pune', 2, 'Update status', '2021-04-30 23:56:00', '2021-05-01 05:16:13'),
(7, 3, '8523698745', '8522236', 'Samarth@gmail.com', '8596587452', '5', '7895641256', 'nagpur', 'maharashtra', 'nagpur', '1', 'nagpur', 'nagpur', '440009', 'railway station', 1, NULL, '2021-05-25 05:37:55', '2021-05-25 05:37:55'),
(8, 3, '8523698745', '8522236', 'meshram@gmail.com', '8596587452', '8', '7895641256', 'nagpur', 'maharashtra', 'nagpur', '2', 'nagpur', 'nagpur', '440009', 'krishna temple', 3, 'by lalit', '2021-05-25 05:43:56', '2021-05-25 05:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `food_licence_docs`
--

CREATE TABLE `food_licence_docs` (
  `docid` int(11) NOT NULL,
  `extension` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `foodid` int(11) NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_licence_docs`
--

INSERT INTO `food_licence_docs` (`docid`, `extension`, `userid`, `foodid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'png', 3, 3, 'Photo', '2021-04-30 23:35:52', '2021-04-30 23:35:52'),
(2, 'png', 3, 3, 'Identity Proof', '2021-04-30 23:35:52', '2021-04-30 23:35:52'),
(3, 'png', 3, 3, 'Other Documents', '2021-04-30 23:35:52', '2021-04-30 23:35:52'),
(4, 'png', 3, 4, 'Photo', '2021-04-30 23:36:44', '2021-04-30 23:36:44'),
(5, 'png', 3, 4, 'Identity Proof', '2021-04-30 23:36:44', '2021-04-30 23:36:44'),
(6, 'png', 3, 4, 'Other Documents', '2021-04-30 23:36:45', '2021-04-30 23:36:45'),
(7, 'png', 3, 5, 'Photo', '2021-04-30 23:37:22', '2021-04-30 23:37:22'),
(8, 'png', 3, 5, 'Identity Proof', '2021-04-30 23:37:22', '2021-04-30 23:37:22'),
(9, 'png', 3, 5, 'Other Documents', '2021-04-30 23:37:22', '2021-04-30 23:37:22'),
(10, 'png', 3, 6, 'Photo', '2021-04-30 23:56:01', '2021-04-30 23:56:01'),
(11, 'png', 3, 6, 'Identity Proof', '2021-04-30 23:56:02', '2021-04-30 23:56:02'),
(12, 'png', 3, 6, 'Other Documents', '2021-04-30 23:56:02', '2021-04-30 23:56:02'),
(13, 'jpg', 3, 7, 'Photo', '2021-05-25 05:37:56', '2021-05-25 05:37:56'),
(14, 'png', 3, 7, 'Identity Proof', '2021-05-25 05:37:56', '2021-05-25 05:37:56'),
(15, 'jpg', 3, 7, 'Other Documents', '2021-05-25 05:37:56', '2021-05-25 05:37:56'),
(16, 'jpg', 3, 8, 'Photo', '2021-05-25 05:43:56', '2021-05-25 05:43:56'),
(17, 'jpg', 3, 8, 'Identity Proof', '2021-05-25 05:43:57', '2021-05-25 05:43:57'),
(18, 'png', 3, 8, 'Other Documents', '2021-05-25 05:43:57', '2021-05-25 05:43:57');

-- --------------------------------------------------------

--
-- Table structure for table `gst_annual_docs`
--

CREATE TABLE `gst_annual_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(100) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `gid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_annual_docs`
--

INSERT INTO `gst_annual_docs` (`docid`, `extension`, `userid`, `gid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'txt', 3, 1, 'Bank Statement', '2020-12-12 23:54:33', '2020-12-12 23:54:33'),
(2, 'text', 3, 2, 'Bank Statement', '2020-12-13 04:12:06', '2020-12-13 04:12:06'),
(3, 'jfif', 3, 3, 'Bank Statement', '2021-01-23 04:10:00', '2021-01-23 04:10:00'),
(4, 'jfif', 3, 4, 'Bank Statement', '2021-01-23 04:10:12', '2021-01-23 04:10:12'),
(5, 'txt', 3, 5, 'Bank Statement/Sales & Purchase Ledger', '2021-03-25 07:27:59', '2021-03-25 07:27:59'),
(6, 'jpg', 3, 7, 'Bank Statement/Sales & Purchase Ledger', '2021-05-17 02:39:15', '2021-05-17 02:39:15'),
(7, 'jpg', 3, 8, 'Bank Statement/Sales & Purchase Ledger', '2021-05-17 02:39:31', '2021-05-17 02:39:31'),
(8, 'jpg', 3, 9, 'Bank Statement/Sales & Purchase Ledger', '2021-05-17 02:39:38', '2021-05-17 02:39:38'),
(9, 'png', 3, 12, 'Bank Statement/Sales & Purchase Ledger', '2021-05-23 04:02:29', '2021-05-23 04:02:29'),
(10, 'jpg', 3, 13, 'Bank Statement/Sales & Purchase Ledger', '2021-05-23 04:37:40', '2021-05-23 04:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `gst_annual_return`
--

CREATE TABLE `gst_annual_return` (
  `gid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(100) DEFAULT NULL,
  `gst_number` varchar(100) DEFAULT NULL,
  `sales_amt` double(11,2) DEFAULT NULL,
  `purchase_amt` double(11,2) DEFAULT NULL,
  `gst_id` varchar(100) DEFAULT NULL,
  `gst_pwd` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_annual_return`
--

INSERT INTO `gst_annual_return` (`gid`, `userid`, `pid`, `shop_name`, `gst_number`, `sales_amt`, `purchase_amt`, `gst_id`, `gst_pwd`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 3, 114, 'PUNJAB', '147852', 12000.00, 15000.00, '145632', '12345', 2, 'Testing the annual remark', '2020-12-12 23:54:32', '2020-12-13 06:22:25'),
(2, 3, 119, 'PUNJAB', '145255', 12000.00, 15000.00, '145632', '12345', 3, 'I have change it for testing', '2020-12-13 04:12:05', '2020-12-13 07:06:10'),
(3, 3, 159, 'padma kirana', '12345678', 45000.00, 50000.00, '987655433', '12345', 1, NULL, '2021-01-23 04:10:00', '2021-01-23 04:10:00'),
(4, 3, 160, 'padma kirana', '12345678', 45000.00, 50000.00, '987655433', '12345', 3, 'rejected by me', '2021-01-23 04:10:12', '2021-01-23 04:14:42'),
(5, 3, 194, '', '', 0.00, 0.00, '', '', 1, NULL, '2021-03-25 07:27:57', '2021-03-25 07:27:57'),
(6, 3, 195, '', '', 0.00, 0.00, '', '', 1, NULL, '2021-03-25 07:28:42', '2021-03-25 07:28:42'),
(7, 3, 221, 'sasas', '1236547896', 456855.00, 522556.00, '4589320000', '5555222333', 1, NULL, '2021-05-17 02:39:15', '2021-05-17 02:39:15'),
(8, 3, 222, 'sasas', '1236547896', 456855.00, 522556.00, '4589320000', '5555222333', 1, NULL, '2021-05-17 02:39:30', '2021-05-17 02:39:30'),
(9, 3, 223, 'sasas', '1236547896', 456855.00, 522556.00, '4589320000', '5555222333', 1, NULL, '2021-05-17 02:39:38', '2021-05-17 02:39:38'),
(10, 3, 224, '', '', 0.00, 0.00, '', '', 1, NULL, '2021-05-17 02:40:24', '2021-05-17 02:40:24'),
(11, 3, 225, 'sasas', '1236547896', 456855.00, 522556.00, '4569874125', '7412589632', 1, NULL, '2021-05-17 02:41:44', '2021-05-17 02:41:44'),
(12, 3, 228, 'JOHN DOE', '789588888', 500.00, 500.00, '147852', '12345', 1, NULL, '2021-05-23 04:02:29', '2021-05-23 04:02:29'),
(13, 3, 234, 'sasas', '78965412359', 85965478.00, 999999999.99, '7896541258', '12345', 1, NULL, '2021-05-23 04:37:40', '2021-05-23 04:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `gst_docs`
--

CREATE TABLE `gst_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(50) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `gid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gst_file`
--

CREATE TABLE `gst_file` (
  `gid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `returntype` varchar(10) NOT NULL,
  `shop_name` varchar(100) DEFAULT NULL,
  `gst_number` varchar(100) DEFAULT NULL,
  `gst_id` varchar(100) DEFAULT NULL,
  `gst_pwd` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_file`
--

INSERT INTO `gst_file` (`gid`, `userid`, `pid`, `returntype`, `shop_name`, `gst_number`, `gst_id`, `gst_pwd`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 3, 115, 'yes', 'PUNJAB', '147852', '145632', '12345', 1, NULL, '2020-12-13 00:50:24', '2020-12-13 00:50:24'),
(2, 3, 116, 'yes', 'PUNJAB', '147852', '145632', '12345', 1, NULL, '2020-12-13 00:51:48', '2020-12-13 00:51:48'),
(3, 3, 117, 'no', 'Ketan Shop', '1478525', '14785', '12345', 3, 'Test for reject', '2020-12-13 02:31:17', '2020-12-13 07:08:02'),
(4, 3, 118, 'yes', 'Jagdhane Store', '145255', '5896', '5896', 2, 'Test hold', '2020-12-13 02:50:12', '2020-12-13 03:31:01'),
(5, 3, 154, 'yes', 'padma kirana', '12345678', '987655433', '12345', 1, NULL, '2021-01-23 03:51:10', '2021-01-23 03:51:10'),
(6, 3, 155, 'yes', 'padma kirana', '12345678', '987655433', '12345', 1, NULL, '2021-01-23 03:51:24', '2021-01-23 03:51:24'),
(7, 3, 156, 'yes', 'padma kirana', '12345678', '987655433', '12345', 3, 'reject', '2021-01-23 03:51:43', '2021-01-23 04:04:45'),
(8, 3, 157, 'yes', 'padma kirana', '12345678', '987655433', '12345', 1, NULL, '2021-01-23 03:51:59', '2021-01-23 03:51:59'),
(9, 3, 158, 'yes', 'padma kirana', '12345678', '987655433', '12345', 1, NULL, '2021-01-23 03:52:58', '2021-01-23 03:52:58'),
(10, 3, 210, 'yes', '', '', '', '', 1, NULL, '2021-05-17 00:01:05', '2021-05-17 00:01:05'),
(11, 3, 211, 'yes', 'sasas', '1236547896', '4569874125', '7412589632', 1, NULL, '2021-05-17 00:03:27', '2021-05-17 00:03:27'),
(12, 3, 212, 'yes', 'sasas', '1236547896', '4569874125', '7412589632', 1, NULL, '2021-05-17 00:03:42', '2021-05-17 00:03:42'),
(13, 3, 213, 'yes', 'sasas', '1236547896', '4569874125', '7412589632', 1, NULL, '2021-05-17 00:05:08', '2021-05-17 00:05:08'),
(14, 3, 214, 'yes', '', '', '', '', 1, NULL, '2021-05-17 01:58:38', '2021-05-17 01:58:38'),
(15, 3, 215, 'yes', 'sasas', '1236547896', '4569874125', '7412589632', 1, NULL, '2021-05-17 02:00:31', '2021-05-17 02:00:31'),
(16, 3, 216, 'yes', 'sasas', '1236547896', '4569874125', '7412589632', 1, NULL, '2021-05-17 02:03:09', '2021-05-17 02:03:09'),
(17, 3, 217, 'yes', '', '', '', '', 4, 'rrrr', '2021-05-17 02:28:15', '2021-05-25 01:30:46'),
(18, 3, 218, 'yes', '', '', '', '', 4, 'wwwww', '2021-05-17 02:28:34', '2021-05-25 01:30:17'),
(19, 3, 219, 'yes', '', '', '', '', 4, 'vcvdv', '2021-05-17 02:28:46', '2021-05-25 01:29:39'),
(20, 3, 220, 'yes', '', '', '', '', 4, 'by me', '2021-05-17 02:30:00', '2021-05-25 01:24:52'),
(21, 3, 226, 'yes', 'CH Trading', '500', '15515', '12111', 4, 'by lalit', '2021-05-23 03:56:45', '2021-05-25 01:24:04'),
(22, 3, 227, 'no', 'John Doe', '12345678', '123456789', '12344', 3, 'by me', '2021-05-23 03:59:57', '2021-05-25 01:03:57'),
(23, 3, 230, 'yes', 'sasas', '7896541236', '4569874125', '7896541258', 3, 'vhgfht', '2021-05-23 04:30:56', '2021-05-25 01:19:40'),
(24, 3, 231, 'yes', 'sasas', '7896541236', '4569874125', '7896541258', 3, 'vvvv', '2021-05-23 04:31:19', '2021-05-25 01:15:43'),
(25, 3, 232, 'yes', 'vdh', 'uhhgh', 'djkdkgb', 'budgu', 3, 'bbbbb', '2021-05-23 04:33:18', '2021-05-25 01:06:25'),
(26, 3, 233, 'yes', 'sasas', '7896541236', '4569874125', '7896541258', 3, 'by lalit', '2021-05-23 04:36:05', '2021-05-25 01:01:52'),
(27, 3, 243, 'no', 'raj cable', 'df34343', '1233444', '741111', 3, 'dsd', '2021-05-25 01:22:06', '2021-05-25 01:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `gst_file_docs`
--

CREATE TABLE `gst_file_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(100) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `gid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_file_docs`
--

INSERT INTO `gst_file_docs` (`docid`, `extension`, `userid`, `gid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'txt', 3, 1, 'Bank Statement', '2020-12-13 00:50:25', '2020-12-13 00:50:25'),
(2, 'text', 3, 1, 'Purchase Bill', '2020-12-13 00:50:25', '2020-12-13 00:50:25'),
(3, 'txt', 3, 1, 'Sales Bill', '2020-12-13 00:50:25', '2020-12-13 00:50:25'),
(4, 'txt', 3, 2, 'Bank Statement', '2020-12-13 00:51:48', '2020-12-13 00:51:48'),
(5, 'text', 3, 2, 'Purchase Bill', '2020-12-13 00:51:49', '2020-12-13 00:51:49'),
(6, 'txt', 3, 2, 'Sales Bill', '2020-12-13 00:51:49', '2020-12-13 00:51:49'),
(7, 'txt', 3, 4, 'Bank Statement', '2020-12-13 02:50:13', '2020-12-13 02:50:13'),
(8, 'text', 3, 4, 'Purchase Bill', '2020-12-13 02:50:14', '2020-12-13 02:50:14'),
(9, 'txt', 3, 4, 'Sales Bill', '2020-12-13 02:50:14', '2020-12-13 02:50:14'),
(10, 'jfif', 3, 5, 'Bank Statement', '2021-01-23 03:51:10', '2021-01-23 03:51:10'),
(11, 'png', 3, 5, 'Sales Bill', '2021-01-23 03:51:10', '2021-01-23 03:51:10'),
(12, 'jfif', 3, 6, 'Bank Statement', '2021-01-23 03:51:24', '2021-01-23 03:51:24'),
(13, 'png', 3, 6, 'Sales Bill', '2021-01-23 03:51:24', '2021-01-23 03:51:24'),
(14, 'jfif', 3, 7, 'Bank Statement', '2021-01-23 03:51:43', '2021-01-23 03:51:43'),
(15, 'webp', 3, 7, 'Purchase Bill', '2021-01-23 03:51:43', '2021-01-23 03:51:43'),
(16, 'png', 3, 7, 'Sales Bill', '2021-01-23 03:51:43', '2021-01-23 03:51:43'),
(17, 'jfif', 3, 8, 'Bank Statement', '2021-01-23 03:51:59', '2021-01-23 03:51:59'),
(18, 'webp', 3, 8, 'Purchase Bill', '2021-01-23 03:51:59', '2021-01-23 03:51:59'),
(19, 'png', 3, 8, 'Sales Bill', '2021-01-23 03:51:59', '2021-01-23 03:51:59'),
(20, 'jfif', 3, 9, 'Bank Statement', '2021-01-23 03:52:58', '2021-01-23 03:52:58'),
(21, 'webp', 3, 9, 'Purchase Bill', '2021-01-23 03:52:58', '2021-01-23 03:52:58'),
(22, 'png', 3, 9, 'Sales Bill', '2021-01-23 03:52:58', '2021-01-23 03:52:58'),
(23, 'jpg', 3, 11, 'Bank Statement', '2021-05-17 00:03:28', '2021-05-17 00:03:28'),
(24, 'png', 3, 11, 'Purchase Bill', '2021-05-17 00:03:28', '2021-05-17 00:03:28'),
(25, 'jpg', 3, 11, 'Sales Bill', '2021-05-17 00:03:28', '2021-05-17 00:03:28'),
(26, 'jpg', 3, 12, 'Bank Statement', '2021-05-17 00:03:42', '2021-05-17 00:03:42'),
(27, 'png', 3, 12, 'Purchase Bill', '2021-05-17 00:03:43', '2021-05-17 00:03:43'),
(28, 'jpg', 3, 12, 'Sales Bill', '2021-05-17 00:03:43', '2021-05-17 00:03:43'),
(29, 'jpg', 3, 13, 'Bank Statement', '2021-05-17 00:05:09', '2021-05-17 00:05:09'),
(30, 'png', 3, 13, 'Purchase Bill', '2021-05-17 00:05:09', '2021-05-17 00:05:09'),
(31, 'jpg', 3, 13, 'Sales Bill', '2021-05-17 00:05:09', '2021-05-17 00:05:09'),
(32, 'jpg', 3, 15, 'Bank Statement', '2021-05-17 02:00:32', '2021-05-17 02:00:32'),
(33, 'png', 3, 15, 'Purchase Bill', '2021-05-17 02:00:33', '2021-05-17 02:00:33'),
(34, 'jpg', 3, 15, 'Sales Bill', '2021-05-17 02:00:33', '2021-05-17 02:00:33'),
(35, 'jpg', 3, 17, 'Bank Statement', '2021-05-17 02:28:15', '2021-05-17 02:28:15'),
(36, 'png', 3, 17, 'Purchase Bill', '2021-05-17 02:28:15', '2021-05-17 02:28:15'),
(37, 'jpg', 3, 17, 'Sales Bill', '2021-05-17 02:28:16', '2021-05-17 02:28:16'),
(38, 'jpg', 3, 18, 'Bank Statement', '2021-05-17 02:28:35', '2021-05-17 02:28:35'),
(39, 'png', 3, 18, 'Purchase Bill', '2021-05-17 02:28:35', '2021-05-17 02:28:35'),
(40, 'jpg', 3, 18, 'Sales Bill', '2021-05-17 02:28:35', '2021-05-17 02:28:35'),
(41, 'jpg', 3, 19, 'Bank Statement', '2021-05-17 02:28:47', '2021-05-17 02:28:47'),
(42, 'png', 3, 19, 'Purchase Bill', '2021-05-17 02:28:47', '2021-05-17 02:28:47'),
(43, 'jpg', 3, 19, 'Sales Bill', '2021-05-17 02:28:48', '2021-05-17 02:28:48'),
(44, 'jpg', 3, 20, 'Bank Statement', '2021-05-17 02:30:00', '2021-05-17 02:30:00'),
(45, 'png', 3, 20, 'Purchase Bill', '2021-05-17 02:30:01', '2021-05-17 02:30:01'),
(46, 'jpg', 3, 20, 'Sales Bill', '2021-05-17 02:30:01', '2021-05-17 02:30:01'),
(47, 'png', 3, 21, 'Bank Statement', '2021-05-23 03:56:45', '2021-05-23 03:56:45'),
(48, 'png', 3, 21, 'Purchase Bill', '2021-05-23 03:56:46', '2021-05-23 03:56:46'),
(49, 'png', 3, 21, 'Sales Bill', '2021-05-23 03:56:46', '2021-05-23 03:56:46'),
(50, 'jpg', 3, 23, 'Bank Statement', '2021-05-23 04:30:57', '2021-05-23 04:30:57'),
(51, 'png', 3, 23, 'Purchase Bill', '2021-05-23 04:30:57', '2021-05-23 04:30:57'),
(52, 'png', 3, 23, 'Sales Bill', '2021-05-23 04:30:57', '2021-05-23 04:30:57'),
(53, 'jpg', 3, 24, 'Bank Statement', '2021-05-23 04:31:20', '2021-05-23 04:31:20'),
(54, 'png', 3, 24, 'Purchase Bill', '2021-05-23 04:31:20', '2021-05-23 04:31:20'),
(55, 'png', 3, 24, 'Sales Bill', '2021-05-23 04:31:20', '2021-05-23 04:31:20'),
(56, 'png', 3, 25, 'Bank Statement', '2021-05-23 04:33:19', '2021-05-23 04:33:19'),
(57, 'png', 3, 25, 'Purchase Bill', '2021-05-23 04:33:19', '2021-05-23 04:33:19'),
(58, 'png', 3, 25, 'Sales Bill', '2021-05-23 04:33:19', '2021-05-23 04:33:19'),
(59, 'jpg', 3, 26, 'Bank Statement', '2021-05-23 04:36:05', '2021-05-23 04:36:05'),
(60, 'png', 3, 26, 'Purchase Bill', '2021-05-23 04:36:05', '2021-05-23 04:36:05'),
(61, 'png', 3, 26, 'Sales Bill', '2021-05-23 04:36:06', '2021-05-23 04:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `gst_partners`
--

CREATE TABLE `gst_partners` (
  `gpid` int(10) UNSIGNED NOT NULL,
  `gid` int(10) UNSIGNED NOT NULL,
  `partnerid` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst_partners`
--

INSERT INTO `gst_partners` (`gpid`, `gid`, `partnerid`, `photo`, `aadhar`, `pan`, `createdat`) VALUES
(1, 3, 46, NULL, NULL, NULL, '2020-12-11 11:44:47'),
(2, 6, 47, NULL, NULL, NULL, '2020-12-21 21:50:16'),
(3, 6, 48, NULL, NULL, NULL, '2020-12-21 21:50:16'),
(4, 7, 50, NULL, NULL, NULL, '2021-01-02 23:31:12'),
(5, 10, 53, NULL, NULL, NULL, '2021-01-02 23:39:54'),
(6, 11, 54, NULL, NULL, NULL, '2021-01-02 23:41:57'),
(7, 12, 55, '5ff1e81374d80.png', '5ff1e81377a73.png', '5ff1e81379c06.png', '2021-01-03 08:51:47'),
(8, 13, 56, './documents/gst/gst_partners/5ff1e92aa86c4.png', './documents/gst/gst_partners/5ff1e92aab03f.png', './documents/gst/gst_partners/5ff1e92aad2bc.png', '2021-01-03 08:56:26'),
(9, 14, 57, './documents/gst/gst_partners/5ff1e9545a4e0.png', './documents/gst/gst_partners/5ff1e9545c010.png', './documents/gst/gst_partners/5ff1e9545da3a.png', '2021-01-03 08:57:08'),
(10, 16, 58, './documents/gst/gst_partners/5ff2024b7c615.jpeg', './documents/gst/gst_partners/5ff2024b88580.jpeg', './documents/gst/gst_partners/5ff2024b8db71.jpeg', '2021-01-03 10:43:39'),
(11, 16, 59, './documents/gst/gst_partners/5ff2024c0b1b4.jpeg', './documents/gst/gst_partners/5ff2024c1135d.jpeg', './documents/gst/gst_partners/5ff2024c16566.jpeg', '2021-01-03 10:43:40'),
(12, 17, 60, './documents/gst/gst_partners/5ff4999925f07.png', './documents/gst/gst_partners/5ff499992798e.png', './documents/gst/gst_partners/5ff499992922e.png', '2021-01-05 09:53:46'),
(13, 19, 65, './documents/gst/gst_partners/601927f74b046.jpeg', './documents/gst/gst_partners/601927f755b1a.jpeg', './documents/gst/gst_partners/601927f759ad3.jpeg', '2021-02-02 03:22:47'),
(14, 19, 66, './documents/gst/gst_partners/601927f7d6693.docx', './documents/gst/gst_partners/601927f7dd5d2.pdf', './documents/gst/gst_partners/601927f7ea4e1.jpeg', '2021-02-02 03:22:48'),
(15, 20, 67, './documents/gst/gst_partners/601936dd65474.jpeg', './documents/gst/gst_partners/601936dd65f24.jpeg', './documents/gst/gst_partners/601936dd721f3.pdf', '2021-02-02 04:26:22'),
(16, 20, 68, './documents/gst/gst_partners/601936ddedc8f.jpeg', './documents/gst/gst_partners/601936ddefef3.jpeg', './documents/gst/gst_partners/601936ddf08e1.jpeg', '2021-02-02 04:26:22'),
(17, 21, 69, './documents/gst/gst_partners/6019493943ff1.jpeg', './documents/gst/gst_partners/601949394fa1a.jpeg', './documents/gst/gst_partners/6019493953259.jpeg', '2021-02-02 05:44:42'),
(18, 21, 70, './documents/gst/gst_partners/60194939c11b3.jpeg', './documents/gst/gst_partners/60194939ca0e6.jpeg', './documents/gst/gst_partners/60194939d01e6.jpeg', '2021-02-02 05:44:42'),
(19, 24, 71, './documents/gst/gst_partners/601a85146dffc.jpeg', './documents/gst/gst_partners/601a851470daa.jpeg', './documents/gst/gst_partners/601a851473581.png', '2021-02-03 04:12:21'),
(20, 24, 72, './documents/gst/gst_partners/601a8514e1094.jpeg', './documents/gst/gst_partners/601a8514e56f4.jpeg', './documents/gst/gst_partners/601a85150c43f.png', '2021-02-03 04:12:22'),
(21, 25, 73, './documents/gst/gst_partners/601a85f98c704.jpeg', './documents/gst/gst_partners/601a85f98e67d.jpeg', './documents/gst/gst_partners/601a85f990d29.jpeg', '2021-02-03 04:16:10'),
(22, 25, 74, './documents/gst/gst_partners/601a85fa06a24.jpeg', './documents/gst/gst_partners/601a85fa090db.jpeg', './documents/gst/gst_partners/601a85fa0b66c.jpeg', '2021-02-03 04:16:11'),
(23, 30, 78, './documents/gst/gst_partners/601b9a0c2c38d.jpeg', './documents/gst/gst_partners/601b9a0c2e519.jpeg', './documents/gst/gst_partners/601b9a0c30fc6.png', '2021-02-03 23:54:05'),
(24, 30, 79, './documents/gst/gst_partners/601b9a0caf96f.jpeg', './documents/gst/gst_partners/601b9a0cb1cd3.jpeg', './documents/gst/gst_partners/601b9a0cb3ea6.png', '2021-02-03 23:54:05'),
(25, 35, 80, './documents/gst/gst_partners/601bf25b5f5d5.txt', './documents/gst/gst_partners/601bf25b63c6e.txt', './documents/gst/gst_partners/601bf25b67468.txt', '2021-02-04 06:10:52'),
(26, 37, 82, './documents/gst/gst_partners/601bf9e95eab3.txt', './documents/gst/gst_partners/601bf9e961e7d.png', './documents/gst/gst_partners/601bf9e96e1e4.jpeg', '2021-02-04 06:43:06'),
(27, 39, 84, './documents/gst/gst_partners/601bfa7874659.txt', './documents/gst/gst_partners/601bfa7877639.png', './documents/gst/gst_partners/601bfa7881628.jpeg', '2021-02-04 06:45:29'),
(28, 40, 85, './documents/gst/gst_partners/601bfa9dd99b3.txt', './documents/gst/gst_partners/601bfa9ddd1c4.png', './documents/gst/gst_partners/601bfa9deab17.jpeg', '2021-02-04 06:46:06'),
(29, 43, 88, './documents/gst/gst_partners/601bfe562ed19.txt', './documents/gst/gst_partners/601bfe56491a0.png', './documents/gst/gst_partners/601bfe565e282.jpeg', '2021-02-04 07:01:59'),
(30, 44, 89, './documents/gst/gst_partners/60aa38c0022d4.png', './documents/gst/gst_partners/60aa38c003e3f.png', './documents/gst/gst_partners/60aa38c005384.png', '2021-05-23 04:13:04'),
(31, 45, 90, './documents/gst/gst_partners/60aa3f60a38b2.jpeg', './documents/gst/gst_partners/60aa3f60a6fb9.png', './documents/gst/gst_partners/60aa3f60a8820.jpeg', '2021-05-23 04:41:21'),
(32, 48, 93, './documents/gst/gst_partners/60ab3d7a0dda5.png', './documents/gst/gst_partners/60ab3d7a0ec94.png', './documents/gst/gst_partners/60ab3d7a0f68e.png', '2021-05-23 22:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `gst_service`
--

CREATE TABLE `gst_service` (
  `gid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `gst_type` varchar(55) NOT NULL,
  `nature_of_buss` varchar(255) NOT NULL,
  `buss_type` varchar(100) NOT NULL,
  `male` tinyint(4) DEFAULT NULL,
  `female` tinyint(4) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT '1',
  `remark` varchar(255) NOT NULL,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gst_service`
--

INSERT INTO `gst_service` (`gid`, `pid`, `rid`, `sid`, `userid`, `gst_type`, `nature_of_buss`, `buss_type`, `male`, `female`, `status`, `remark`, `updatedat`, `createdat`) VALUES
(1, 111, 173, 84, 3, '1', 'adadadasd', '1', NULL, NULL, '1', '', '2020-12-11 11:02:36', '2020-12-11 11:02:36'),
(2, 112, 175, 85, 3, '1', 'aaas', '1', NULL, NULL, '1', '', '2020-12-11 11:19:14', '2020-12-11 11:19:14'),
(3, 113, 177, 86, 3, '1', 'asasasas', '2', NULL, NULL, '1', '', '2020-12-11 11:44:46', '2020-12-11 11:44:46'),
(4, 120, 179, 87, 3, '1', 'sdsfsddgfhgh', '1', NULL, NULL, '1', '', '2020-12-18 09:30:13', '2020-12-18 09:30:13'),
(5, 121, 181, 88, 3, '1', 'sddssds', '1', NULL, NULL, '1', '', '2020-12-18 09:37:46', '2020-12-18 09:37:46'),
(6, 122, 183, 89, 3, '2', 'jhgkjhjkhkj', '2', NULL, NULL, '1', '', '2020-12-21 21:50:15', '2020-12-21 21:50:15'),
(7, 129, 194, 90, 3, '2', 'Mahit nahi', '2', NULL, NULL, '1', '', '2021-01-02 23:31:12', '2021-01-02 23:31:12'),
(10, 132, 200, 93, 3, '2', 'Mahit nahi', '2', NULL, NULL, '1', '', '2021-01-02 23:39:53', '2021-01-02 23:39:53'),
(11, 133, 202, 94, 3, '2', 'Mahit nahi', '2', NULL, NULL, '1', '', '2021-01-02 23:41:56', '2021-01-02 23:41:56'),
(12, 134, 204, 95, 3, '2', 'Test', '2', NULL, NULL, '1', '', '2021-01-03 08:51:47', '2021-01-03 08:51:47'),
(13, 135, 206, 96, 3, '2', 'Test', '2', NULL, NULL, '1', '', '2021-01-03 08:56:26', '2021-01-03 08:56:26'),
(14, 136, 208, 97, 3, '2', 'Test', '2', NULL, NULL, '1', '', '2021-01-03 08:57:08', '2021-01-03 08:57:08'),
(15, 137, 210, 98, 3, '1', '', '2', NULL, NULL, '2', 'Chnage in test', '2021-01-05 10:28:14', '2021-01-03 10:40:34'),
(16, 138, 212, 99, 3, '1', 'cdvdf', '2', NULL, NULL, '4', 'Rejected status', '2021-01-05 10:21:17', '2021-01-03 10:43:39'),
(17, 139, 214, 100, 3, '2', 'Pune', '2', NULL, NULL, '2', 'Hold the gst status', '2021-01-05 10:14:28', '2021-01-05 09:53:46'),
(18, 161, 233, 106, 3, '2', '', '1', NULL, NULL, '4', 'reject by ,e', '2021-01-23 04:34:50', '2021-01-23 04:18:33'),
(19, 165, 240, 110, 3, '1', 'hhghgh', '2', NULL, NULL, '1', '', '2021-02-02 03:22:46', '2021-02-02 03:22:46'),
(20, 166, 242, 111, 3, '1', '', '2', NULL, NULL, '4', 'by lalit', '2021-02-02 06:01:58', '2021-02-02 04:26:21'),
(21, 167, 244, 112, 3, '2', '', '4', NULL, NULL, '2', 'by lalit', '2021-02-02 06:00:39', '2021-02-02 05:44:41'),
(22, 168, 246, 113, 3, '1', '', '1', NULL, NULL, '1', '', '2021-02-03 01:57:04', '2021-02-03 01:57:04'),
(23, 169, 248, 114, 3, '1', '', '1', NULL, NULL, '1', '', '2021-02-03 04:08:35', '2021-02-03 04:08:35'),
(24, 170, 250, 115, 3, '1', '', '2', NULL, NULL, '1', '', '2021-02-03 04:12:21', '2021-02-03 04:12:21'),
(25, 171, 252, 116, 3, '1', '', '3', NULL, NULL, '4', 'by lalit', '2021-02-03 04:21:48', '2021-02-03 04:16:10'),
(28, 174, 258, 119, 3, '1', '', '1', NULL, NULL, '1', '', '2021-02-03 23:27:13', '2021-02-03 23:27:13'),
(30, 176, 262, 121, 3, '1', '', '2', NULL, NULL, '1', '', '2021-02-03 23:54:04', '2021-02-03 23:54:04'),
(34, 180, 270, 125, 3, '1', '', '2', NULL, NULL, '1', '', '2021-02-04 00:13:35', '2021-02-04 00:13:35'),
(35, 181, 272, 126, 3, '2', '', '2', NULL, NULL, '1', '', '2021-02-04 06:10:51', '2021-02-04 06:10:51'),
(37, 183, 276, 128, 3, '2', '', '2', NULL, NULL, '1', '', '2021-02-04 06:43:05', '2021-02-04 06:43:05'),
(39, 185, 280, 130, 3, '2', '', '2', NULL, NULL, '1', '', '2021-02-04 06:45:28', '2021-02-04 06:45:28'),
(40, 186, 282, 131, 3, '2', '', '2', NULL, NULL, '1', '', '2021-02-04 06:46:06', '2021-02-04 06:46:06'),
(43, 189, 288, 134, 3, '2', '', '2', NULL, NULL, '1', '', '2021-02-04 07:01:58', '2021-02-04 07:01:58'),
(44, 229, 302, 152, 3, '2', 'GOD', '2', NULL, NULL, '1', '', '2021-05-23 04:13:03', '2021-05-23 04:13:03'),
(45, 235, 304, 153, 3, '1', 'jvhvjvhvj', '2', NULL, NULL, '3', 'by lalit', '2021-05-24 07:33:43', '2021-05-23 04:41:20'),
(48, 238, 310, 156, 3, '2', 'Test', '2', NULL, NULL, '4', 'Test', '2021-05-23 22:46:35', '2021-05-23 22:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `incometax`
--

CREATE TABLE `incometax` (
  `inid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `incomeType` varchar(55) NOT NULL,
  `bname` varchar(255) DEFAULT NULL,
  `natureofbuss` varchar(255) DEFAULT NULL,
  `place_of_buss` text,
  `buss_type` varchar(255) DEFAULT NULL,
  `turn_over_amt` double DEFAULT NULL,
  `loan_amt` double DEFAULT NULL,
  `income_from_other` double DEFAULT NULL,
  `lic_slip` double DEFAULT NULL,
  `home_loan` double DEFAULT NULL,
  `invs_amt` double DEFAULT NULL,
  `sandry_creditor` double DEFAULT NULL,
  `sandry_debitor` double DEFAULT NULL,
  `stock_amt` double DEFAULT NULL,
  `cash_bal` double DEFAULT NULL,
  `buss_loan` double DEFAULT NULL,
  `personal_loan` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incometax`
--

INSERT INTO `incometax` (`inid`, `userid`, `pid`, `rid`, `incomeType`, `bname`, `natureofbuss`, `place_of_buss`, `buss_type`, `turn_over_amt`, `loan_amt`, `income_from_other`, `lic_slip`, `home_loan`, `invs_amt`, `sandry_creditor`, `sandry_debitor`, `stock_amt`, `cash_bal`, `buss_loan`, `personal_loan`, `status`, `remark`, `createdat`, `updateat`) VALUES
(11, 3, 125, 187, '2', '', '', '', '1', NULL, NULL, 100, NULL, 200, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2020-12-25 08:59:40', '2020-12-25 08:59:40'),
(12, 3, 126, 188, '1', '', '', '', '1', NULL, NULL, NULL, NULL, 200, NULL, NULL, NULL, NULL, NULL, 50000, NULL, 1, NULL, '2020-12-25 09:08:11', '2020-12-25 09:08:11'),
(13, 3, 143, 219, '1', 'ace', 'xfdddsds', 'nagpur', '1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-01-22 09:10:11', '2021-01-22 09:10:11'),
(14, 3, 144, 220, '1', 'xyz tech', 'fdfdgfdg', 'nagpur', '1', 456, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-01-22 09:26:24', '2021-01-22 09:26:24'),
(15, 3, 145, 221, '2', '', '', '', '1', NULL, NULL, 60000, NULL, NULL, 200000, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-01-22 09:44:15', '2021-01-22 09:44:15'),
(16, 3, 147, 223, '1', '', '', '', '1', 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-01-22 10:16:40', '2021-01-22 10:16:40'),
(17, 3, 148, 224, '2', '', '', '', '1', NULL, NULL, 1234567, 765432, 234567, 45000, NULL, NULL, NULL, NULL, NULL, NULL, 2, 'hold by prady', '2021-01-22 10:19:47', '2021-01-22 10:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `incometax_partners`
--

CREATE TABLE `incometax_partners` (
  `inpid` int(11) NOT NULL,
  `inid` int(11) NOT NULL,
  `partnerid` int(11) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income_docs`
--

CREATE TABLE `income_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(50) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `inid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income_docs`
--

INSERT INTO `income_docs` (`docid`, `extension`, `userid`, `inid`, `doctype`, `createdat`, `updatedat`) VALUES
(44, 'JPG', 3, 11, 'Salary Slip', '2020-12-25 08:59:41', '2020-12-25 08:59:41'),
(45, 'txt', 3, 11, 'Loan Certificate', '2020-12-25 08:59:41', '2020-12-25 08:59:41'),
(46, 'txt', 3, 11, 'Aadhar Card', '2020-12-25 08:59:41', '2020-12-25 08:59:41'),
(47, 'txt', 3, 12, 'Investment Proof', '2020-12-25 09:08:11', '2020-12-25 09:08:11'),
(48, 'jpg', 3, 13, 'Aadhar Card', '2021-01-22 09:10:12', '2021-01-22 09:10:12'),
(49, 'jpg', 3, 14, 'Bank Statement', '2021-01-22 09:26:24', '2021-01-22 09:26:24'),
(50, 'jpg', 3, 17, 'Bank Statement', '2021-01-22 10:19:47', '2021-01-22 10:19:47'),
(51, 'jpg', 3, 17, 'Investment Proof', '2021-01-22 10:19:47', '2021-01-22 10:19:47'),
(52, 'jpg', 3, 17, 'Loan Certificate', '2021-01-22 10:19:47', '2021-01-22 10:19:47');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoiceid` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `hsn` varchar(50) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `gst` double(5,2) DEFAULT NULL,
  `cgst` double(5,2) DEFAULT NULL,
  `sgst` double(5,2) DEFAULT NULL,
  `amount` double(10,2) NOT NULL,
  `total_amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoiceid`, `pname`, `hsn`, `quantity`, `rate`, `gst`, `cgst`, `sgst`, `amount`, `total_amount`) VALUES
(1, 1, 'laptop', '12', 87899, 8990909, 122.00, 13.00, 133.00, 12365.00, 233),
(2, 1, 'camera', '12', 87899, 8990909, 122.00, 13.00, 133.00, 12365.00, 233),
(3, 2, 'tv', '12', 87899, 8990909, 122.00, 13.00, 133.00, 1234.00, 233),
(4, 2, 'laptop', '12', 87899, 8990909, 122.00, 13.00, 133.00, 1234.00, 233),
(5, 3, 'laptop', '12', 87899, 8990909, 122.00, 13.00, 133.00, 1234.00, 233),
(6, 4, 'chips', '11', 1233, 44, 12.00, 12.00, 18.00, 44444.00, 1234567),
(7, 6, 'rice', '123', 1234, 12345, 18.00, 12.00, 13.00, 123456.00, 80000),
(8, 6, 'wheat', '123', 1234, 12345, 18.00, 12.00, 13.00, 123456.00, 80000),
(9, 6, 'pulses', '123', 1234, 12345, 18.00, 12.00, 13.00, 123456.00, 80000),
(10, 8, 'laptop', '454', 4545, 4545, 454.00, 544.00, 999.99, 5454.00, 45455454),
(11, 8, 'tv', '454', 4545, 4545, 454.00, 544.00, 999.99, 5454.00, 45455454),
(12, 8, 'camera', '454', 4545, 4545, 454.00, 544.00, 999.99, 5454.00, 45455454),
(13, 9, 'pulses', '12', 1234, 12345, 18.00, 12.00, 13.00, 123456.00, 10000),
(14, 9, 'router', '122', 12345, 123454, 18.00, 12.00, 13.00, 123456.00, 10000),
(15, 10, 'cooler', '122', 12345, 123454, 18.00, 12.00, 2.00, 7000.00, 80000),
(16, 10, 'AC', '1222', 12345, 123454, 18.00, 12.00, 2.00, 7000.00, 80000);

-- --------------------------------------------------------

--
-- Table structure for table `pan_docs`
--

CREATE TABLE `pan_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(50) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `panid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pan_docs`
--

INSERT INTO `pan_docs` (`docid`, `extension`, `userid`, `panid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'jpg', 3, 3, 'Document', '2020-11-28 00:21:13', '2020-11-28 00:21:13'),
(2, 'jpg', 3, 3, 'Other Document', '2020-11-28 00:21:13', '2020-11-28 00:21:13'),
(3, 'jpg', 3, 4, 'Document', '2020-11-28 00:22:33', '2020-11-28 00:22:33'),
(4, 'jpg', 3, 4, 'Other Document', '2020-11-28 00:22:34', '2020-11-28 00:22:34'),
(5, 'sql', 3, 5, 'Document', '2020-11-30 08:52:05', '2020-11-30 08:52:05'),
(6, 'jpeg', 3, 5, 'Other Document', '2020-11-30 08:52:06', '2020-11-30 08:52:06'),
(7, 'jpg', 3, 7, 'Document', '2020-12-25 10:03:41', '2020-12-25 10:03:41'),
(8, 'jpg', 3, 7, 'Other Document', '2020-12-25 10:03:41', '2020-12-25 10:03:41'),
(9, 'txt', 3, 8, 'Document', '2020-12-25 10:40:48', '2020-12-25 10:40:48'),
(10, 'txt', 3, 8, 'Other Document', '2020-12-25 10:40:48', '2020-12-25 10:40:48'),
(11, 'png', 3, 9, 'Document', '2021-01-23 03:09:29', '2021-01-23 03:09:29'),
(12, 'png', 3, 9, 'Other Document', '2021-01-23 03:09:29', '2021-01-23 03:09:29'),
(13, 'jfif', 3, 10, 'Document', '2021-01-23 03:15:07', '2021-01-23 03:15:07'),
(14, 'jfif', 3, 10, 'Other Document', '2021-01-23 03:15:07', '2021-01-23 03:15:07'),
(15, 'jpg', 3, 11, 'Document', '2021-05-16 23:19:49', '2021-05-16 23:19:49'),
(16, 'png', 3, 11, 'Other Document', '2021-05-16 23:19:50', '2021-05-16 23:19:50'),
(17, 'jpg', 3, 12, 'Document', '2021-05-21 05:00:55', '2021-05-21 05:00:55'),
(18, 'jpg', 3, 12, 'Other Document', '2021-05-21 05:00:55', '2021-05-21 05:00:55');

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
  `status` varchar(20) NOT NULL DEFAULT '1',
  `userid` int(10) UNSIGNED NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pan_service`
--

INSERT INTO `pan_service` (`panid`, `rid`, `app_type`, `category`, `pan_number`, `aadhar_name`, `contact_number`, `emailid`, `status`, `userid`, `remark`, `createdat`, `updatedat`) VALUES
(1, 10, '1', '1', 'pan123', 'Anvi', '8007015819', 'lalit@gmail.com', '3', 3, 'by lalit', '2020-11-27 11:22:42', '2021-05-16 23:09:42'),
(2, 11, '1', '1', 'hjjjh', 'LAlit Meshram', '8007015819', 'lalit@gmail.com', '3', 3, 'reject by admin', '2020-11-27 11:26:42', '2020-11-29 17:06:33'),
(3, 12, '2', '2', 'pan12347', 'vikas', '+91800701581', 'lalitlucky007meshram@gmail.com', '3', 3, 'doc not aval', '2020-11-28 00:21:12', '2020-11-29 17:05:38'),
(4, 13, '2', '2', 'pan12347', 'vikas', '+91800701581', 'lalitlucky007meshram@gmail.com', '3', 3, 'reject by admin', '2020-11-28 00:22:33', '2020-11-30 02:45:39'),
(5, 108, '2', '2', 'EVPP45858', 'VIKAS PAWAR', '9885896985', 'vikas.nucleon@gmail.com', '3', 3, '', '2020-11-30 08:52:04', '2021-05-16 22:46:35'),
(6, 189, '1', '1', '', '', '', '', '3', 3, 'rejected by lalit', '2020-12-25 10:02:33', '2021-01-03 06:33:10'),
(7, 190, '1', '1', '', 'Lalit', '+91800701581', 'lalitlucky007meshram@gmail.com', '4', 3, 'complete test', '2020-12-25 10:03:40', '2020-12-25 10:06:04'),
(8, 191, '1', '1', '', 'BHASKAR', '9657613754', 'johnabrahm@gmail.com', '4', 3, 'by admin', '2020-12-25 10:40:48', '2021-01-09 03:29:27'),
(9, 228, '1', '1', '', 'pradyumn', '08208092366', 'pradyum@gmail.com', '4', 3, 'completed by prady', '2021-01-23 03:09:29', '2021-01-23 03:12:16'),
(10, 229, '2', '2', 'adi12345', 'aditya', '08208092366', 'pradyumnbhanarkar@gmail.com', '3', 3, 'by lllllllllllll', '2021-01-23 03:15:07', '2021-05-16 04:09:48'),
(11, 300, '1', '1', '', 'Apeksha', '7896541230', 'apeksha@gmail.com', '3', 3, 'sdsd', '2021-05-16 23:19:49', '2021-05-16 23:21:07'),
(12, 301, '1', '1', '', 'Shammi', '1234567890', 'shammi@gmail.com', '3', 3, 'by lalit', '2021-05-21 05:00:55', '2021-05-21 05:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `partnership_deed`
--

CREATE TABLE `partnership_deed` (
  `deedid` int(10) UNSIGNED NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(150) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  `start_up_date` date NOT NULL,
  `natureofbuss` varchar(100) NOT NULL,
  `msg` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(100) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnership_deed`
--

INSERT INTO `partnership_deed` (`deedid`, `userid`, `shop_name`, `shop_address`, `start_up_date`, `natureofbuss`, `msg`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 3, 'Tech Mahindra', 'Washington', '1258-02-10', 'Test by John', 'Test by John doe', 3, 'by lalit', '2021-05-23 02:41:41', '2021-05-23 09:15:45'),
(2, 3, 'mastersoft', 'nagpur', '2021-04-27', 'it', 'not yet', 4, 'by admin', '2021-05-23 08:27:25', '2021-05-23 09:06:59'),
(3, 3, 'ace', 'Nagpur', '2021-05-05', 'www', 'ddd', 4, 'by lalit', '2021-05-23 09:24:24', '2021-05-23 09:25:33'),
(4, 3, 'solarcell', 'nagpur', '2021-05-10', 'hw', 'no', 4, 'by me', '2021-05-23 21:17:15', '2021-05-23 21:33:08'),
(9, 3, '', '', '0000-00-00', '', '', 1, NULL, '2021-05-23 22:40:51', '2021-05-23 22:40:51'),
(10, 3, 'raj cable', 'Ahmadpur', '2021-05-05', 'dish', 'wwwww', 4, 'by lalit', '2021-05-23 22:44:59', '2021-05-23 22:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `partnership_deed_partners`
--

CREATE TABLE `partnership_deed_partners` (
  `fileid` int(10) UNSIGNED NOT NULL,
  `deedid` int(10) UNSIGNED NOT NULL,
  `partner_name` varchar(150) NOT NULL,
  `aadhar_number` varchar(15) NOT NULL,
  `pan_name` varchar(150) NOT NULL,
  `pan_number` varchar(15) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `electricity` varchar(255) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnership_deed_partners`
--

INSERT INTO `partnership_deed_partners` (`fileid`, `deedid`, `partner_name`, `aadhar_number`, `pan_name`, `pan_number`, `emailid`, `mobile_number`, `electricity`, `aadhar`, `pan`) VALUES
(1, 1, 'John Doe', 'ABC12PQR', 'JOHN SMITH', 'EEVPP78HG', 'smith@got.com', '7896541236', './documents/deed/partners/60aa23556e70b.png', './documents/deed/partners/60aa23557780b.png', './documents/deed/partners/60aa23557d526.png'),
(2, 2, 'ashish', 'a12234', 'ashish', 'p1234', 'ashish@gmail.com', '7412589658', './documents/deed/partners/60aa745d180d2.png', './documents/deed/partners/60aa745d192c9.jpeg', './documents/deed/partners/60aa745d1aae5.jpeg'),
(3, 2, 'mahesh', 'a122345', 'mahesh', 'p12345', 'mahesh@gmail.com', '8523698574', './documents/deed/partners/60aa745d4d82c.jpeg', './documents/deed/partners/60aa745d4e37b.jpeg', './documents/deed/partners/60aa745d4f1b1.png'),
(4, 3, 'ashok', 'a1234', 'ashok', 'p1234', 'ashok@gmail.com', '5236415689', './documents/deed/partners/60aa81b8bc0b0.png', './documents/deed/partners/60aa81b8bc9a0.jpeg', './documents/deed/partners/60aa81b8bd341.jpeg'),
(5, 4, 'shammi', 'a12345', 'shammi', 'p12345', 'shammi@gmail.com', '7896541256', './documents/deed/partners/60ab28cb32fb6.png', './documents/deed/partners/60ab28cb34338.jpeg', './documents/deed/partners/60ab28cb35c40.jpeg'),
(6, 9, 'sarthak', 'hghgh1', 'jbbjbj', 'bjbjbj', 'salman@gmail.com', 'bhjbjbhj', './documents/deed/partners/60ab3c6363320.png', './documents/deed/partners/60ab3c6363562.jpeg', './documents/deed/partners/60ab3c63636a3.jpeg'),
(7, 10, 'lalit', 'a12345', 'lalit', 'p12345', 'lalit@gmail.com', '08007015123', './documents/deed/partners/60ab3d5b653a2.png', './documents/deed/partners/60ab3d5b65596.jpeg', './documents/deed/partners/60ab3d5b65828.jpeg'),
(8, 10, 'vikas', 'a123456', 'vikas', 'p123456', 'vikas@gmail.com', '8569745896', './documents/deed/partners/60ab3d5b65c83.jpeg', './documents/deed/partners/60ab3d5b65f4a.png', './documents/deed/partners/60ab3d5b66118.png');

-- --------------------------------------------------------

--
-- Table structure for table `partnership_partner_investment`
--

CREATE TABLE `partnership_partner_investment` (
  `investmentid` int(10) UNSIGNED NOT NULL,
  `deedid` int(10) UNSIGNED NOT NULL,
  `partner_name` varchar(150) NOT NULL,
  `investment` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnership_partner_investment`
--

INSERT INTO `partnership_partner_investment` (`investmentid`, `deedid`, `partner_name`, `investment`) VALUES
(1, 1, 'John Smith', 1200.00),
(2, 2, 'ashish', 80000.00),
(3, 2, 'mahesh', 20000.00),
(4, 3, 'ashok', 80000.00),
(5, 4, 'shammi', 8888888.00),
(6, 10, 'lalit', 50000.00),
(7, 10, 'vikas', 40000.00);

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
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner_details`
--

INSERT INTO `partner_details` (`partnerid`, `partner_name`, `aadhar_number`, `pan_number`, `contact_number`, `emailid`, `createdat`, `updatedat`) VALUES
(1, 'vikas', 'lalitaadhar123', 'pan1234', 'lalitlucky007me', '+918007015819', '2020-11-28 12:26:34', '2020-11-28 12:26:34'),
(2, 'lalit', 'aadhar12345', 'pan1234', 'lalitlucky007me', '+918007015819', '2020-11-28 12:26:40', '2020-11-28 12:26:40'),
(3, 'ashish', 'a123', 'ap123', 'ashish@gmail.co', '8000998777', '2020-11-28 12:38:45', '2020-11-28 12:38:45'),
(4, 'mahesh', 'm123', 'mp123', 'mahesh@gmail.co', '2000998777', '2020-11-28 12:38:46', '2020-11-28 12:38:46'),
(5, 'alok', 'ak123', 'akp123', 'alok@gmail.com', '3000998777', '2020-11-28 12:38:47', '2020-11-28 12:38:47'),
(6, 'sandeep bharne', 'lalitaadhar123', 'pan123', 'sandeep@gmail.c', '+918007015819', '2020-11-28 23:06:25', '2020-11-28 23:06:25'),
(7, 'ujwal', 'lalitaadhar1234', 'pan1234', 'ujwal@gmail.com', '+918007015819', '2020-11-28 23:06:26', '2020-11-28 23:06:26'),
(8, 'vikas', 'aadhar12345', 'pan1234', 'vikas@gmail.com', '+12369874', '2020-11-29 08:07:28', '2020-11-29 08:07:28'),
(9, 'lalit', 'aadhar123456', 'pan12345', 'lalit@gmail.com', '+8007015819', '2020-11-29 08:07:29', '2020-11-29 08:07:29'),
(10, 'lalit', 'a123', 'p123', 'lalit@gmail.com', '8007015820', '2020-12-01 11:43:48', '2020-12-01 11:43:48'),
(11, 'vikas', 'a1234', 'p1234', 'vikas@gmail.com', '800701523', '2020-12-01 11:43:49', '2020-12-01 11:43:49'),
(12, 'lalit', 'a123', 'p123', 'lalit@gmail.com', '8007015820', '2020-12-01 11:45:31', '2020-12-01 11:45:31'),
(13, 'vikas', 'a1234', 'p1234', 'vikas@gmail.com', '800701523', '2020-12-01 11:45:31', '2020-12-01 11:45:31'),
(14, 'Ema', '8965748', '744', 'johnabrahm@gmai', '09763602243', '2020-12-02 00:29:20', '2020-12-02 00:29:20'),
(15, 'Vikas', '8748858855', 'Evpp9899', 'vikas@gmail.com', '9874845885', '2020-12-02 05:28:13', '2020-12-02 05:28:13'),
(16, 'Vikas', '8748858855', 'Evpp9899', 'vikas@gmail.com', '9874845885', '2020-12-02 05:34:05', '2020-12-02 05:34:05'),
(17, 'lalit', 'a1234', 'p1234', 'lalit@gmail.com', '1234567890', '2020-12-02 07:24:36', '2020-12-02 07:24:36'),
(18, 'vikas', 'a12345', 'p12345', 'vikas@gmail.com', '8007015820', '2020-12-02 07:24:38', '2020-12-02 07:24:38'),
(19, 'lalit', 'a123', 'p123', 'retailor@gmail.', '+918007015819', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(20, 'KUNAL', '98748589696', 'EVPP4596B', 'vikaspawar3110@', '09657613754', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(21, 'Vikas', '8748858855', 'Evpp9899', 'vikas@gmail.com', '9874845885', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(22, 'Vikas', '8748858855', 'Evpp9899', 'vikas@gmail.com', '9874845885', '2020-12-02 12:22:10', '2020-12-02 12:22:10'),
(24, 'Vikas', '8748858855', 'Evpp9899', 'vikas@gmail.com', '9874845885', '2020-12-02 12:24:29', '2020-12-02 12:24:29'),
(25, 'Vikas', '8748858855', 'Evpp9899', 'vikas@gmail.com', '9874845885', '2020-12-02 12:27:40', '2020-12-02 12:27:40'),
(26, 'kunal', '785588888', 'Evpp9899', 'vikas@gmail.com', '9874845885', '2020-12-02 12:27:40', '2020-12-02 12:27:40'),
(27, 'lalit', 'a123', 'p123', 'lalit@gmail.com', '+918007015819', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(28, 'lalit', 'a1234', 'p123', 'lalit@gmail.com', '+918007015819', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(29, 'lalit', 'a123', 'p123', 'lalitlucky007me', '+918007015819', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(30, 'lalit', 'a1234', 'p1231', 'lalitlucky007me', '+918007015819', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(31, 'LAXMAN', '123045678925', 'ABCPQR', 'mahitnahi@got.c', '0147852036', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(32, 'KUNAL', '25858968585', 'EVPP45VB', 'vikaspawar3110@', '09657613754', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(33, 'KUNAL', '8965748', 'Evpp4596B', 'johnabrahm@gmai', '9657613754', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(34, 'KUNAL', '8965748', 'Evpp4596B', 'johnabrahm@gmai', '9657613754', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(35, 'KUNAL', '8965748', 'Evpp4596B', 'hulkt@avengers.', '09763602243', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(36, 'KUNAL', '8965748', '744', 'vikaspawar3110@', '09657613754', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(37, 'vikas', 'a12345', 'p12345', 'vikas@gmail.com', '7896541236', '2020-12-06 22:36:33', '2020-12-06 22:36:33'),
(38, 'lalit', 'a123', 'p123', 'lalit@gmail.com', '8007015820', '2020-12-06 22:36:33', '2020-12-06 22:36:33'),
(39, 'KUNAL', '85885555', '88888888', 'vikaspawar3110@', '09657613754', '2020-12-07 00:24:28', '2020-12-07 00:24:28'),
(40, 'vikas', 'a123', 'p123', 'vikas@gmail.com', '1234567890', '2020-12-07 00:47:56', '2020-12-07 00:47:56'),
(41, 'lalit', 'a1234', 'p1235', 'lalit@gmail.com', '9874563210', '2020-12-07 00:47:57', '2020-12-07 00:47:57'),
(42, 'KUNAL', '895858588', '89585588', 'hulkt@avengers.', '09763602243', '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(43, 'lalit', 'a12345', 'p12345', 'lalit@gmail.com', '800701523', '2020-12-07 19:27:38', '2020-12-07 19:27:38'),
(44, '546546456', '4556456456', '466465', 'sunnykalaskar19', '07020585616', '2020-12-08 09:34:04', '2020-12-08 09:34:04'),
(45, 'sonali', '56454645456', '4565456456', 'sonali@gmail.co', '08788329794', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(46, 'lalit', 'a12345', 'p12345', '85236958', 'lalit@gmail.com', '2020-12-11 11:44:46', '2020-12-11 11:44:46'),
(47, 'anvi', 'a1234', 'pan1234', '+918007015819', 'anvi@gmail.com', '2020-12-21 21:50:15', '2020-12-21 21:50:15'),
(48, 'lalit', 'a12345', 'pan12345', '+918007015820', 'lalit@gmail.com', '2020-12-21 21:50:16', '2020-12-21 21:50:16'),
(49, 'lalit', 'a1234', 'pan1234', 'lalitlucky007me', '+918007015819', '2020-12-24 09:12:04', '2020-12-24 09:12:04'),
(50, 'AKSHAY', '1478596', 'pEvoo47', '987415263', 'akshay@got.com', '2021-01-02 23:31:12', '2021-01-02 23:31:12'),
(53, 'AKSHAY', '1478596', 'pEvoo47', '987415263', 'akshay@got.com', '2021-01-02 23:39:54', '2021-01-02 23:39:54'),
(54, 'AKSHAY', '1478596', 'pEvoo47', '987415263', 'akshay@got.com', '2021-01-02 23:41:57', '2021-01-02 23:41:57'),
(55, 'AKSHAY', '1478596', 'pEvoo47', '987415263', 'akshay@got.com', '2021-01-03 08:51:47', '2021-01-03 08:51:47'),
(56, 'AKSHAY', '1478596', 'pEvoo47', '987415263', 'akshay@got.com', '2021-01-03 08:56:26', '2021-01-03 08:56:26'),
(57, 'AKSHAY', '1478596', 'pEvoo47', '987415263', 'akshay@got.com', '2021-01-03 08:57:08', '2021-01-03 08:57:08'),
(58, 'lalit', 'a12345', 'p12345', '85236958', 'lalit@gmail.com', '2021-01-03 10:43:39', '2021-01-03 10:43:39'),
(59, 'vikas', 'a123456', 'p123456', '852369584', 'vikas@gmail.com', '2021-01-03 10:43:40', '2021-01-03 10:43:40'),
(60, 'AKSHAY', '1478596', 'pEvoo47', '987415263', 'akshay@got.com', '2021-01-05 09:53:46', '2021-01-05 09:53:46'),
(61, 'sumit', '767676767676', 'sum12345', 'sumit@gmail.com', '9876543210', '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(62, 'sumit2', '767676767677', 'sum12345', 'sumit@gmail.com', '9876543210', '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(63, 'Pradyumn', '785634239876', 'pra12345', 'pradyumnsbhanar', '08208092366', '2021-01-23 03:38:11', '2021-01-23 03:38:11'),
(64, 'Padma', '785634239872', 'pra12345', 'pradyumnsbhanar', '08208092366', '2021-01-23 03:38:11', '2021-01-23 03:38:11'),
(65, 'anvi', 'a12345', 'p12345', '1234567890', 'anvi@gmail.com', '2021-02-02 03:22:47', '2021-02-02 03:22:47'),
(66, 'lalit', 'a123456', 'p123456', '7412587412', 'lalit@gmail.com', '2021-02-02 03:22:48', '2021-02-02 03:22:48'),
(67, 'amit', 'a123', 'p123', '7777777777', 'amit@gmail.com', '2021-02-02 04:26:21', '2021-02-02 04:26:21'),
(68, 'ashok', 'a1234', 'p1234', '8888888888', 'ashok@gmail.com', '2021-02-02 04:26:22', '2021-02-02 04:26:22'),
(69, 'shammi', 'a123', 'p123', '1234565432', 's@gmail.com', '2021-02-02 05:44:41', '2021-02-02 05:44:41'),
(70, 'lalit', 'a1233', 'p1234', '1234565432', 'l@gmail.com', '2021-02-02 05:44:42', '2021-02-02 05:44:42'),
(71, 'lalit', 'a123456', 'p1234', '7412587412', 'lalit@gmail.com', '2021-02-03 04:12:21', '2021-02-03 04:12:21'),
(72, 'anvi', 'a1234567', 'p12345', '7412587412', 'anvi@gmail.com', '2021-02-03 04:12:21', '2021-02-03 04:12:21'),
(73, 'lalit', 'a123456', 'p1234', '7412587412', 'lalit@gmail.com', '2021-02-03 04:16:10', '2021-02-03 04:16:10'),
(74, 'pravin', 'a1234562', 'p1234', '7412587412', 'lalit@gmail.com', '2021-02-03 04:16:11', '2021-02-03 04:16:11'),
(78, 'lalit', 'a1234567', 'p1234', '7412587412', 'lalit@gmail.com', '2021-02-03 23:54:04', '2021-02-03 23:54:04'),
(79, 'sarthak', 'a12345678', 'p12345', '7412587412', 'sarthak@gmail.com', '2021-02-03 23:54:05', '2021-02-03 23:54:05'),
(80, 'Vikas', '3455666', '12233', '8502589636', 'vikas@hotmail.com', '2021-02-04 06:10:51', '2021-02-04 06:10:51'),
(82, 'Vikas', '3455666', '12233', '8502589636', 'vikas@hotmail.com', '2021-02-04 06:43:05', '2021-02-04 06:43:05'),
(84, 'Vikas', '3455666', '12233', '8502589636', 'vikas@hotmail.com', '2021-02-04 06:45:29', '2021-02-04 06:45:29'),
(85, 'Vikas', '3455666', '12233', '8502589636', 'vikas@hotmail.com', '2021-02-04 06:46:06', '2021-02-04 06:46:06'),
(88, 'Vikas', '3455666', '12233', '8502589636', 'vikas@hotmail.com', '2021-02-04 07:01:58', '2021-02-04 07:01:58'),
(89, 'CAPETOWN', '1276899', '77887666', '978585555', 'town@got.com', '2021-05-23 04:13:03', '2021-05-23 04:13:03'),
(90, 'hbbbbh', 'ggg45567', 'h5677', '789563222121', 'jhhj@hhjhj.bn', '2021-05-23 04:41:21', '2021-05-23 04:41:21'),
(93, 'bvjcvj', 'habjchdv', 'bhjcvj', 'vhjv', 'vchjv', '2021-05-23 22:45:30', '2021-05-23 22:45:30');

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
  `createdat` datetime DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`pid`, `pan_name`, `pan_number`, `aadhar_name`, `aadhar_number`, `contact_number`, `emailid`, `dob`, `createdat`, `updatedat`) VALUES
(1, 'Aarya Ned Stark', 'AARYA0025', 'Aarya Ned Stark', '6364602255', '9657613754', 'arya@got.com', '1998-03-11', '2020-11-22 07:20:12', '2020-11-22 07:20:12'),
(2, 'jeeya pawar', 'EVVP987BN', '145287896532', '145287896532', '9075516598', 'jeeyapawar10@gmail.com', NULL, '2020-11-22 07:32:47', '2020-11-22 07:32:47'),
(3, 'Ashish', 'pan123', 'Ashish', 'aadhar123', '8007015819', 'ashish@gmail.com', NULL, '2020-11-22 07:52:10', '2020-11-22 07:52:10'),
(4, 'Vikas ', 'PAn123', 'Vikas', 'Aadhar123', '8007015819', 'vikas.nucleon@gmail.com', NULL, '2020-11-22 07:56:52', '2020-11-22 07:56:52'),
(5, 'lalit', 'PAn123', 'LAlit Meshram', 'Aadhar123', '1478523691', 'l@gmail.com', '2020-01-01', '2020-11-26 10:34:03', '2020-11-26 10:34:03'),
(6, 'lalit', 'PAn123', 'lalit', 'Aadhar123', '7412365478', 'l@gmail.com', NULL, '2020-11-26 12:22:40', '2020-11-26 12:22:40'),
(7, 'dfsdf', 'fsfgdf', 'fgdgf', 'fgfdgf', '745822222', 'lal@vhvhhv.dd', NULL, '2020-11-26 12:36:36', '2020-11-26 12:36:36'),
(8, 'gdf', 'gfdfg', 'fgdfg', 'gdfgf', 'fdgdfgf', 'k@gmail.com', NULL, '2020-11-26 12:38:04', '2020-11-26 12:38:04'),
(9, 'Vikas', 'PAn123', 'Vikas', 'Aadhar123', '1236547894', 'vikas.nucleon@gmail.com', '2020-11-03', '2020-11-27 10:08:34', '2020-11-27 10:08:34'),
(10, 'KETAN WAGH', 'EVPP897', 'KETAN WAGH', '9685785488', '9657613754', 'ketan@gmail.com', NULL, '2020-11-28 05:57:24', '2020-11-28 05:57:24'),
(11, 'Nikita', 'tr4667', 'NIKITA KUMBHAR', '895888885', '8963521478', 'nikita.kumbhar@got.com', NULL, '2020-11-28 07:17:59', '2020-11-28 07:17:59'),
(12, 'Lalit Meshram', 'pan123', 'Lalit Meshram', 'aadhar123', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 07:48:56', '2020-11-28 07:48:56'),
(13, 'Lalit Meshram', 'pan123', 'Lalit Meshram', 'aadhar123', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 07:56:13', '2020-11-28 07:56:13'),
(14, 'vikas pawar', 'pan1234', 'Vikas Pawar', 'aadhar1234', '+918007015819', 'vikas@gmail.com', NULL, '2020-11-28 08:01:59', '2020-11-28 08:01:59'),
(15, 'amol', 'pan123', 'Amol', 'aadhar', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 08:20:46', '2020-11-28 08:20:46'),
(16, 'amol', 'pan123', 'Amol', 'aadhar', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 08:25:18', '2020-11-28 08:25:18'),
(17, 'sacdscd', 'ssadas', 'Vikas Pawar', 'fdsfszfdd', '+918007015819', 'vikas@gmail.com', NULL, '2020-11-28 08:38:23', '2020-11-28 08:38:23'),
(18, 'sacdscd', 'ssadas', 'Vikas Pawar', 'fdsfszfdd', '+918007015819', 'vikas@gmail.com', NULL, '2020-11-28 08:39:53', '2020-11-28 08:39:53'),
(19, 'sacdscd', 'ssadas', 'Vikas Pawar', 'fdsfszfdd', '+918007015819', 'vikas@gmail.com', NULL, '2020-11-28 08:41:05', '2020-11-28 08:41:05'),
(20, 'sacdscd', 'ssadas', 'Vikas Pawar', 'fdsfszfdd', '+918007015819', 'vikas@gmail.com', NULL, '2020-11-28 08:44:01', '2020-11-28 08:44:01'),
(21, 'sacdscd', 'ssadas', 'Vikas Pawar', 'fdsfszfdd', '+918007015819', 'vikas@gmail.com', NULL, '2020-11-28 08:44:44', '2020-11-28 08:44:44'),
(22, 'sacdscd', 'ssadas', 'Vikas Pawar', 'fdsfszfdd', '+918007015819', 'vikas@gmail.com', NULL, '2020-11-28 08:48:09', '2020-11-28 08:48:09'),
(23, 'Vikas Pawra', '9685885', 'Ema Bhaskar Watson', '2589558', '965874585', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:23:39', '2020-11-28 09:23:39'),
(24, 'Vikas Pawra', '9685885', 'Ema Bhaskar Watson', '2589558', '965874585', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:25:02', '2020-11-28 09:25:02'),
(25, 'Vikas Pawra', '9685885', 'Ema Bhaskar Watson', '2589558', '965874585', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:26:13', '2020-11-28 09:26:13'),
(26, 'Vikas Pawra', '9685885', 'Ema Bhaskar Watson', '2589558', '965874585', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:27:04', '2020-11-28 09:27:04'),
(27, 'Vikas Pawra', '9685885', 'Ema Bhaskar Watson', '2589558', '965874585', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:28:11', '2020-11-28 09:28:11'),
(28, 'Vikas Pawra', '9685885', 'Ema Bhaskar Watson', '2589558', '965874585', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:29:31', '2020-11-28 09:29:31'),
(29, 'Vikas Pawra', '9685885', 'Ema Bhaskar Watson', '2589558', '965874585', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:33:26', '2020-11-28 09:33:26'),
(30, 'Vikas Pawra', '96585555', 'AMOL PAWAR', '9685889999', '09657613754', 'amol.pawar@tkinfotech.com', NULL, '2020-11-28 09:38:50', '2020-11-28 09:38:50'),
(31, 'Vikas Pawra', '96585555', 'AMOL PAWAR', '9685889999', '09657613754', 'amol.pawar@tkinfotech.com', NULL, '2020-11-28 09:39:36', '2020-11-28 09:39:36'),
(32, 'Vikas Pawra', '96585555', 'AMOL PAWAR', '9685889999', '09657613754', 'amol.pawar@tkinfotech.com', NULL, '2020-11-28 09:41:43', '2020-11-28 09:41:43'),
(33, 'Vikas Pawar', '96985888', 'Ema Bhaskar Watson', '76665667', '09763602243', 'johnabrahm@gmail.com', NULL, '2020-11-28 09:45:47', '2020-11-28 09:45:47'),
(34, 'LAlit', 'sdsd2324', 'LAlit Meshram', '1324ffds', '8007015819', 'lalit@gmail.com', NULL, '2020-11-28 11:48:32', '2020-11-28 11:48:32'),
(35, 'aadad`asa', 'ssdsd', 'jitesh Meshram', 'aasas', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 11:54:59', '2020-11-28 11:54:59'),
(36, 'aadad`asa', 'ssdsd', 'jitesh Meshram', 'aasas', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 11:58:04', '2020-11-28 11:58:04'),
(37, 'aadad`asa', 'ssdsd', 'jitesh Meshram', 'aasas', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 12:02:40', '2020-11-28 12:02:40'),
(38, 'dsdsd', 'adsds', 'Priya Meshram', 'dssfs', '+918007015819', 'retailor@gmail.com', NULL, '2020-11-28 12:06:33', '2020-11-28 12:06:33'),
(39, 'adsds', 'asdsd', 'Vikas Pawar', 'sdsf', '+918007015819', 'distributor@gmail.com', NULL, '2020-11-28 12:14:24', '2020-11-28 12:14:24'),
(40, 'adsds', 'asdsd', 'Vikas Pawar', 'sdsf', '+918007015819', 'distributor@gmail.com', NULL, '2020-11-28 12:15:06', '2020-11-28 12:15:06'),
(41, 'sfg', 'dfgh', 'Priya Meshram', 'sfsdfs', '+918007015819', 'retailor@gmail.com', NULL, '2020-11-28 12:17:57', '2020-11-28 12:17:57'),
(42, 'sfg', 'dfgh', 'Priya Meshram', 'sfsdfs', '+918007015819', 'retailor@gmail.com', NULL, '2020-11-28 12:20:35', '2020-11-28 12:20:35'),
(43, 'sfg', 'dfgh', 'Priya Meshram', 'sfsdfs', '+918007015819', 'retailor@gmail.com', NULL, '2020-11-28 12:21:56', '2020-11-28 12:21:56'),
(44, 'sfg', 'dfgh', 'Priya Meshram', 'sfsdfs', '+918007015819', 'retailor@gmail.com', NULL, '2020-11-28 12:23:39', '2020-11-28 12:23:39'),
(45, 'sfg', 'dfgh', 'Priya Meshram', 'sfsdfs', '+918007015819', 'retailor@gmail.com', NULL, '2020-11-28 12:26:29', '2020-11-28 12:26:29'),
(46, 'LAlit', 'sdsd2324', 'LAlit Meshram', '1324ffds', '8007015819', 'lalit@gmail.com', NULL, '2020-11-28 12:30:06', '2020-11-28 12:30:06'),
(47, 'Mahesh Malve', 'maheshpan123', 'MAhesh', 'maheshaaadhar12', '7894561230', 'mahesh@gmail.com', NULL, '2020-11-28 12:38:43', '2020-11-28 12:38:43'),
(48, 'nilesh', 'p123', 'nilesh', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-11-28 23:06:21', '2020-11-28 23:06:21'),
(49, 'Lalit', 'pan123', 'lalit', 'Aadhar123', '8007015819', 'lalit@gmail.com', '2020-11-01', '2020-11-29 06:05:47', '2020-11-29 06:05:47'),
(50, 'Lalit Meshram', 'p123', 'lalit meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-01', '2020-11-29 06:11:34', '2020-11-29 06:11:34'),
(51, 'Priya Meshram', 'p123', 'Priyanka meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-01', '2020-11-29 06:23:27', '2020-11-29 06:23:27'),
(52, 'Priya Meshram', 'p123', 'Priyanka meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-01', '2020-11-29 06:56:36', '2020-11-29 06:56:36'),
(53, 'ki', 'hfh', 'fhf', 'fghh', '222', 'kiranvyavhare277@gmail.com', '2020-11-17', '2020-11-29 07:19:11', '2020-11-29 07:19:11'),
(54, 'Lalit Meshram', 'p123', 'Lalit Meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-01', '2020-11-29 08:07:27', '2020-11-29 08:07:27'),
(55, 'Lalit Meshram', 'p123', 'lalit meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-01', '2020-11-29 08:32:24', '2020-11-29 08:32:24'),
(56, 'kiran appasaheb vyavhare', 'AAAAA2356AXD', 'kiran appasaheb vyavhare', '12345678912', '8788329794', 'kiranvyavhare277@gmail.com', NULL, '2020-11-29 17:16:05', '2020-11-29 17:16:05'),
(57, 'kiran appasaheb vyavhare', 'AAAAA2356AXD', 'kiran vyavhare', '12345678912', '8788329794', 'kiranvyavhare277@gmail.com', '2020-11-18', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(58, 'kiran appasaheb vyavhare', 'AAAAA2356AXD', 'kiran vyavhare', '12345678912', '8788329794', 'kiranvyavhare277@gmail.com', '2020-11-18', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(59, 'Vikas', 'pan123', 'Vikas', 'a123', '1236547891', 'V@gmail.com', '2020-11-01', '2020-12-01 11:41:15', '2020-12-01 11:41:15'),
(60, 'Vikas', 'pan123', 'Vikas', 'a123', '1236547891', 'V@gmail.com', '2020-11-01', '2020-12-01 11:43:46', '2020-12-01 11:43:46'),
(61, 'Vikas', 'pan123', 'Vikas', 'a123', '1236547891', 'V@gmail.com', '2020-11-01', '2020-12-01 11:45:29', '2020-12-01 11:45:29'),
(62, 'AMOL PAWAR', '9685RPP', 'AMOL PAWAR', '89745896', '987456932', 'amol.pawar@tkinfotech.com', '1988-03-11', '2020-12-02 00:29:20', '2020-12-02 00:29:20'),
(63, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '98785895', '9657613754', 'vaibhav1212@gmail.com', '1998-01-22', '2020-12-02 05:28:10', '2020-12-02 05:28:10'),
(64, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '636458396589', '9657613754', 'vikas.nucleon@gmail.com', '1998-01-11', '2020-12-02 05:34:04', '2020-12-02 05:34:04'),
(65, 'LAlit', 'pan123', 'LAlit Meshram', 'Aadhar123', '8007015819', 'lalit@gmail.com', '2020-12-01', '2020-12-02 07:24:33', '2020-12-02 07:24:33'),
(66, 'Lalit Meshram', 'p1234', 'lalit meshram', 'a1232', '+918007015819', 'lalitlucky007meshram@gmail.com', '2017-01-31', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(67, 'BHASKAR RAMJI PAWAR', 'EVPP4596B', 'PAWAR VIKAS', '968585885', '09657613754', 'vikaspawar3110@gmail.com', '1998-03-10', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(68, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '636458396589', '9657613754', 'vikas.nucleon@gmail.com', '1998-03-11', '2020-12-02 12:09:52', '2020-12-02 12:09:52'),
(73, 'NARESH KALE', 'EVVP987BN', 'KALE NARESH BALU', '98785895', '9657613754', 'vikas.nucleon@gmail.com', '1998-10-10', '2020-12-02 12:22:09', '2020-12-02 12:22:09'),
(75, 'NARESH KALE', 'EVVP987BN', 'KALE NARESH BALU', '98785895', '9657613754', 'vikas.nucleon@gmail.com', '1998-10-10', '2020-12-02 12:24:28', '2020-12-02 12:24:28'),
(76, 'VIKAS PAWAR', 'EVVP987BN', 'KALE NARESH BALU', '', '9657613754', 'vikas.nucleon@gmail.com', '1998-12-12', '2020-12-02 12:27:39', '2020-12-02 12:27:39'),
(78, 'Lalit Meshram', 'p123', 'lalit meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '1989-06-01', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(80, 'ssssss', 'ssssssss', 'ssssss', 'sssssssss', 'sssssssssss', 'SALES@GMAIL.COM', '2020-12-09', '2020-12-02 14:11:09', '2020-12-02 14:11:09'),
(81, 'kiran appasaheb vyavhare', 'AAAAA2356AXD', 'kiran vyavhare', '12345678912', '8788329794', 'kiranvyavhare277@gmail.com', '2020-12-07', '2020-12-02 14:18:00', '2020-12-02 14:18:00'),
(82, 'Lalit Meshram', 'p123', 'lalit meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-11-02', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(83, 'KETAN LAXMAN PAWAR', 'XYZABC', 'PAWAR KETAN', '123456789123', '9874563210', '', '1998-11-12', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(84, 'SANDEEP SANGALE', 'SANGALEHT', 'SANGLE SANDEEP', '789654123', '9657613754', 'sangle@capgemini.com', '1998-01-10', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(85, 'Vikas Pawra', 'AMOL DISCOUNT', 'AMOL PAWAR', '968558855588', '9657859685', 'amol.pawar@tkinfotech.com', '1998-02-10', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(86, 'Vikas Pawra', 'AMOL DISCOUNT', 'AMOL PAWAR', '968558855588', '9657859685', 'amol.pawar@tkinfotech.com', '1998-02-10', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(87, 'EMA WATSON', 'EVPP4587B', 'Ema Bhaskar Watson', '12345678', '987456932', 'johnabrahm@gmail.com', '1998-01-10', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(88, 'Vikas Pawar', 'EVPP234B', 'BHASKAR RAMJI PAWAR', '123456789', '09657613754', 'vikaspawar3110@gmail.com', '1998-01-10', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(90, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '', '', '2020-12-01', '2020-12-06 22:36:30', '2020-12-06 22:36:30'),
(91, 'Vikas Pawar', 'Evpp2548', 'AMOL PAWAR', '9881748585', '09024634008', 'amol.pawar@tkinfotech.com', '1589-01-10', '2020-12-07 00:13:38', '2020-12-07 00:13:38'),
(92, 'Vikas Pawar', 'Evpp2548', 'AMOL PAWAR', '9881748585', '09024634008', 'amol.pawar@tkinfotech.com', '1589-01-10', '2020-12-07 00:14:01', '2020-12-07 00:14:01'),
(93, 'Vikas Pawar', '9858585', 'Ema Watson', '9687458585', '09024634008', 'amol.pawar@tkinfotech.com', '1987-12-12', '2020-12-07 00:19:36', '2020-12-07 00:19:36'),
(94, 'Ema Bhaskar Watson', 'Evpp4585B', 'VIKAS PAWAR', '9685847', '987456932', 'johnabrahm@gmail.com', '1998-01-12', '2020-12-07 00:24:28', '2020-12-07 00:24:28'),
(95, 'Vikas', 'p123', 'Vikas', 'a123', '7896541236', 'vikas@gmail.com', '2020-12-01', '2020-12-07 00:47:55', '2020-12-07 00:47:55'),
(96, 'santosh', 'pan123', 'santosh', 'Aadhar123', '7896541230', 'santosh@gmailcom', '2020-12-07', '2020-12-07 00:51:42', '2020-12-07 00:51:42'),
(97, 'kiran vyavhare vyavhare', 'aaass3232aa', 'kiran appasaheb vyavhare', '123456789321', '08788329794', 'kiranvyavhare277@gmail.com', '2020-12-01', '2020-12-07 01:50:26', '2020-12-07 01:50:26'),
(99, 'kiran vyavhare vyavhare', 'fghfhfgh', 'kiran appasaheb vyavhare', '456464654', '08788329794', 'kiranvyavhare277@gmail.com', '2020-12-09', '2020-12-07 01:53:25', '2020-12-07 01:53:25'),
(100, 'AMOL PAWAR', 'EVPP458N', 'VIKAS PAWAR', '9687896988', '09024634008', 'amol.pawar@tkinfotech.com', '1888-02-10', '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(101, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '8007015819', 'lalit@gmail.com', '2020-12-06', '2020-12-07 19:17:33', '2020-12-07 19:17:33'),
(102, 'LAlit', 'pan123', 'LAlit Meshram', 'Aadhar123', '8007015819', 'lalit@gmail.com', '2020-12-01', '2020-12-07 19:27:35', '2020-12-07 19:27:35'),
(103, 'lalit', 'pan123', 'LAlit Meshram', 'a123', '8007015819', 'mahesh@gmail.com', '2020-12-01', '2020-12-07 20:06:38', '2020-12-07 20:06:38'),
(104, 'Vikas', 'pan123', 'LAlit Meshram', 'aadhar123', '7896541236', 'lalit@gmail.com', '2020-12-08', '2020-12-07 20:09:56', '2020-12-07 20:09:56'),
(105, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '1236547896', 'mahesh@gmail.com', '2019-10-07', '2020-12-07 20:31:19', '2020-12-07 20:31:19'),
(106, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '1236547896', 'mahesh@gmail.com', '2019-10-07', '2020-12-07 20:41:08', '2020-12-07 20:41:08'),
(107, 'Ravindra Kanawade', 'fgfgfg', 'gfgfd', 'fgfdgdfg', '08805664679', 'ravindra.kanawade@gmail.com', '2020-12-08', '2020-12-08 09:22:34', '2020-12-08 09:22:34'),
(108, 'kiran vyavhare vyavhare', 'dffsf', 'ffffff', 'sfsfsfsdf', '08788329794', 'kiranvyavhare277@gmail.com', '2020-12-08', '2020-12-08 09:28:01', '2020-12-08 09:28:01'),
(109, 'kiran vyavhare vyavhare', '45645646', 'prashant wani', '464564564566', '08788329794', 'kiranvyavhare277@gmail.com', '2020-12-01', '2020-12-08 09:34:04', '2020-12-08 09:34:04'),
(110, 'Sunny Kalasakar', '45645646', 'kiran appasaheb vyavhare', 'hgjhgtuygh', '07020585616', 'sunnykalaskar19@gmail.com', '2020-12-06', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(111, 'lalit', 'pan123', 'LAlit Meshram', 'aadhar123', '8007015819', 'lalit@gmail.com', NULL, '2020-12-11 11:02:35', '2020-12-11 11:02:35'),
(112, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '8007015819', 'lalit@gmail.com', NULL, '2020-12-11 11:19:11', '2020-12-11 11:19:11'),
(113, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '1236547896', 'lalit@gmail.com', NULL, '2020-12-11 11:44:44', '2020-12-11 11:44:44'),
(114, 'KUNAL RAVINDRA KAPSE', 'EEVPP4596B', 'KAPSE RAVINDRA KUNAL', '147852369', '9657613754', 'vikas@gmail.com', NULL, '2020-12-12 23:54:32', '2020-12-12 23:54:32'),
(115, 'KUNAL RAVINDRA KAPSE', 'EEVPP4596B', 'KAPSE RAVINDRA KUNAL', '147852369', '9657613754', 'vikas@gmail.com', NULL, '2020-12-13 00:50:24', '2020-12-13 00:50:24'),
(116, 'KUNAL RAVINDRA KAPSE', 'EEVPP4596B', 'KAPSE RAVINDRA KUNAL', '147852369', '9657613754', 'vikas@gmail.com', NULL, '2020-12-13 00:51:48', '2020-12-13 00:51:48'),
(117, 'KETAN KAPSE', 'KETAN12N', 'KETAN KAPSE', '147852369', '9657613754', 'ketan@hotmail.com', NULL, '2020-12-13 02:31:16', '2020-12-13 02:31:16'),
(118, 'KIRAN JAGDHANE', '258963', 'JAGDHANE KIRAN', '36985214', '9657613754', 'kiran@jagdhne.com', NULL, '2020-12-13 02:50:12', '2020-12-13 02:50:12'),
(119, 'KETAN KAPSE', 'EEVPP4596B', 'KAPSE RAVINDRA KUNAL', '147852369', '9657613754', 'vikas@gmail.com', NULL, '2020-12-13 04:12:04', '2020-12-13 04:12:04'),
(120, 'Lalit Meshram', 'p1234', 'lalit meshram', 'sdsdsds', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-12-18 09:30:09', '2020-12-18 09:30:09'),
(121, 'mahesh', 'sdsds', 'das', 'addad', '+918007015819', 'lalitlucky007meshram@gmail.com', NULL, '2020-12-18 09:37:45', '2020-12-18 09:37:45'),
(122, 'Anvi Meshram', 'p12345', 'Anvi Meshram', 'a1234', '+918007015819', 'anvi@gmail.com', NULL, '2020-12-21 21:50:14', '2020-12-21 21:50:14'),
(123, 'fdfsdf', 'Lalit Meshram', 'sffdf', 'sfsfs', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-12-08', '2020-12-22 07:58:59', '2020-12-22 07:58:59'),
(124, 'Lalit Meshram', 'p1234', 'lalit meshram', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2020-12-01', '2020-12-24 09:12:03', '2020-12-24 09:12:03'),
(125, 'RAMJI Oat', 'EVPP4597B', 'VIKAS PAWAR', 'Vikas Pawar', '09763602243', 'hulkt@avengers.com', '1998-03-11', '2020-12-25 08:59:40', '2020-12-25 08:59:40'),
(126, 'KUNAL RAVINDRA KAPSE', 'EEVPP4596B', 'DEMO TEST BY VIKAS', '147852369', '9657613754', 'vikas@gmail.com', '1998-01-11', '2020-12-25 09:08:11', '2020-12-25 09:08:11'),
(127, 'Sarthak mouje', 'p123', 'Sarthak mouje', 'a123', '+918007015819', 'lalitlucky007meshram@gmail.com', '2021-01-01', '2021-01-02 23:18:07', '2021-01-02 23:18:07'),
(128, 'Sankalp Mouje', 'p1234', 'Sankalp mouje', 'a1234', '+918007015819', 'lalitlucky007meshram@gmail.com', '2021-12-31', '2021-01-02 23:21:13', '2021-01-02 23:21:13'),
(129, 'VIKAS PAWAR', 'EEVPP4596B', 'PAWRA VIKAS', '3110155474', '9657613754', 'vikas@gmail.com', NULL, '2021-01-02 23:31:11', '2021-01-02 23:31:11'),
(132, 'VIKAS PAWAR', 'EEVPP4596B', 'PAWRA VIKAS', '3110155474', '9657613754', 'vikas@gmail.com', NULL, '2021-01-02 23:39:53', '2021-01-02 23:39:53'),
(133, 'VIKAS PAWAR', 'EEVPP4596B', 'PAWRA VIKAS', '3110155474', '9657613754', 'vikas@gmail.com', NULL, '2021-01-02 23:41:55', '2021-01-02 23:41:55'),
(134, 'VIKAS PAWAR', 'EEVPP4596B', 'PAWRA VIKAS', '3110155474', '9657613754', 'vikas@gmail.com', NULL, '2021-01-03 08:51:46', '2021-01-03 08:51:46'),
(135, 'VIKAS PAWAR', 'EEVPP4596B', 'PAWRA VIKAS', '3110155474', '9657613754', 'vikas@gmail.com', NULL, '2021-01-03 08:56:22', '2021-01-03 08:56:22'),
(136, 'VIKAS PAWAR', 'EEVPP4596B', 'PAWRA VIKAS', '3110155474', '9657613754', 'vikas@gmail.com', NULL, '2021-01-03 08:57:07', '2021-01-03 08:57:07'),
(137, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '1236547896', 'mahesh@gmail.com', NULL, '2021-01-03 10:40:33', '2021-01-03 10:40:33'),
(138, 'anvi', 'pan123', 'Anvi', 'Aadhar123', '1236547896', 'a@gmail.com', NULL, '2021-01-03 10:43:38', '2021-01-03 10:43:38'),
(139, 'KALIKA', 'KALIKA125', 'KALIKA', '147852369', '9898987456', 'kalika@got.com', NULL, '2021-01-05 09:53:46', '2021-01-05 09:53:46'),
(141, 'vikas', 'vikas', 'vikas', '25896655', '987456932', 'vikaspawar3110@gmail.com', NULL, '2021-01-05 10:53:22', '2021-01-05 10:53:22'),
(142, 'vikas', 'vikas', 'vikas', '25896655', '987456932', 'vikaspawar3110@gmail.com', NULL, '2021-01-05 10:54:22', '2021-01-05 10:54:22'),
(143, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '7896541236', 'lalit@gmail.com', '2020-12-21', '2021-01-22 09:10:11', '2021-01-22 09:10:11'),
(144, 'lalit', 'pan123', 'LAlit Meshram', 'Aadhar123', '1236547896', 'mahesh@gmail.com', '2020-12-21', '2021-01-22 09:26:23', '2021-01-22 09:26:23'),
(145, 'Vikas', 'EEVPP4596B', 'VIKAS PAWAR', '343063675839', '9657613547', 'vikas.nucleon@gmail.com', '1998-03-11', '2021-01-22 09:44:15', '2021-01-22 09:44:15'),
(146, 'pradyumn', '1234566', 'pradyumn', '123456781234', '08208092366', 'pradyumnbhanarkar@gmail.com', '1998-07-14', '2021-01-22 09:46:16', '2021-01-22 09:46:16'),
(147, 'Pradyumn sachchidanand Bhanarkar', '14125', 'pradyumn', '435465', '08208092366', 'pradyumnbhanarkar@gmail.com', '2021-01-22', '2021-01-22 10:16:40', '2021-01-22 10:16:40'),
(148, 'Pradyumn sachchidanand Bhanarkar', 'abc1234', 'Pradyumn', '12345678', '08208092366', 'pradyumnbhanarkar@gmail.com', '2021-01-22', '2021-01-22 10:19:47', '2021-01-22 10:19:47'),
(149, 'pradyumn', 'abc12345', 'pradyumn', '123456781234', '08208092366', 'pradyumn@gmail.com', '2021-01-23', '2021-01-22 22:58:11', '2021-01-22 22:58:11'),
(150, 'aditya', 'adi12345', 'aditya', '987654321987', '08208092366', 'aditya@gmail.com', '2006-07-13', '2021-01-22 23:27:30', '2021-01-22 23:27:30'),
(151, 'pradyumn', 'pra12345', 'pradyumn', '988776655443', '9876543210', 'prad@gmail.com', NULL, '2021-01-23 01:59:58', '2021-01-23 01:59:58'),
(152, 'aditya', 'adi12345', 'aditya', '787856457654', '08208092366', 'adit@gmail.com', '2009-10-13', '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(153, 'sumit', 'sum98765', 'sumit', '098765432109', '08208092366', 'sumit@gmail.com', '2002-02-12', '2021-01-23 03:38:11', '2021-01-23 03:38:11'),
(154, 'Pradyumn sachchidanand Bhanarkar', 'pra12345', 'pradyumn', '767585939243', '08208092366', 'pradyumnbhanarkar@gmail.com', NULL, '2021-01-23 03:51:10', '2021-01-23 03:51:10'),
(155, 'Pradyumn sachchidanand Bhanarkar', 'pra12345', 'pradyumn', '767585939243', '08208092366', 'pradyumnbhanarkar@gmail.com', NULL, '2021-01-23 03:51:24', '2021-01-23 03:51:24'),
(156, 'Pradyumn sachchidanand Bhanarkar', 'pra12345', 'pradyumn', '767585939243', '08208092366', 'pradyumnbhanarkar@gmail.com', NULL, '2021-01-23 03:51:43', '2021-01-23 03:51:43'),
(157, 'Pradyumn sachchidanand Bhanarkar', 'pra12345', 'pradyumn', '767585939243', '08208092366', 'pradyumnbhanarkar@gmail.com', NULL, '2021-01-23 03:51:59', '2021-01-23 03:51:59'),
(158, 'Pradyumn sachchidanand Bhanarkar', 'pra12345', 'pradyumn', '767585939243', '08208092366', 'pradyumnbhanarkar@gmail.com', NULL, '2021-01-23 03:52:58', '2021-01-23 03:52:58'),
(159, 'prady', 'pra1234', 'prady', '838383838383', '08208092366', 'prad@gmail.com', NULL, '2021-01-23 04:10:00', '2021-01-23 04:10:00'),
(160, 'prady', 'pra1234', 'prady', '838383838383', '08208092366', 'prad@gmail.com', NULL, '2021-01-23 04:10:12', '2021-01-23 04:10:12'),
(161, 'Pradyumn sachchidanand Bhanarkar', 'pra12234', 'pradyumn', '5454657687867', '08208092366', 'pradyumnbhanarkar@gmail.com', NULL, '2021-01-23 04:18:33', '2021-01-23 04:18:33'),
(164, 'pradyumn', 'pra12345', 'pradyumn', '64782292984', '08208092366', 'prad@gmail.com', NULL, '2021-01-23 04:49:29', '2021-01-23 04:49:29'),
(165, 'lalit', 'p12345', 'lalit', 'a12345', '8007015819', 'lalit@gmail.com', NULL, '2021-02-02 03:22:45', '2021-02-02 03:22:45'),
(166, 'amit', 'p123', 'amit', 'a123', '77777777777', 'amit@gmail.com', NULL, '2021-02-02 04:26:20', '2021-02-02 04:26:20'),
(167, 'Shammi', 'p123', 'Shammi', 'a123', '7894563210', 'shammi@gmail.com', NULL, '2021-02-02 05:44:40', '2021-02-02 05:44:40'),
(168, 'properiter_test1', 'p123', 'properiter_test1', 'a123', '1234567890', 'p@gamil.com', NULL, '2021-02-03 01:57:03', '2021-02-03 01:57:03'),
(169, 'p1', 'p123', 'p1', 'a123', '77777777777', 'p@gmail.com', NULL, '2021-02-03 04:08:34', '2021-02-03 04:08:34'),
(170, 'partner1', 'p123', 'partner1', 'a123', '77777777777', 'partner1@gmail.com', NULL, '2021-02-03 04:12:20', '2021-02-03 04:12:20'),
(171, 'pvt1', 'p123', 'pvt1', 'a123', '8007015819', 'pvt1@gmail.com', NULL, '2021-02-03 04:16:09', '2021-02-03 04:16:09'),
(174, 'sankalp', 'p123', 'sankalp', 'a123', '77777777777', 's@gmail.com', NULL, '2021-02-03 23:27:13', '2021-02-03 23:27:13'),
(176, 'sarthak', 'p123', 'sarthak', 'a123', '77777777777', 'sarthak@gmail.com', NULL, '2021-02-03 23:54:03', '2021-02-03 23:54:03'),
(180, 'lalit', 'p123', 'lalit', 'a123', '7894563210', 'lalit@gmail.com', NULL, '2021-02-04 00:13:35', '2021-02-04 00:13:35'),
(181, 'Vikas', 'EEVPP4596B', 'VIKAS PAWAR', '343063675839', '9657613547', 'vikas.nucleon@gmail.com', NULL, '2021-02-04 06:10:51', '2021-02-04 06:10:51'),
(183, 'Vikas', 'EEVPP4596B', 'VIKAS PAWAR', '343063675839', '9657613547', 'vikas.nucleon@gmail.com', NULL, '2021-02-04 06:43:03', '2021-02-04 06:43:03'),
(185, 'Vikas', 'EEVPP4596B', 'VIKAS PAWAR', '343063675839', '9657613547', 'vikas.nucleon@gmail.com', NULL, '2021-02-04 06:45:28', '2021-02-04 06:45:28'),
(186, 'Vikas', 'EEVPP4596B', 'VIKAS PAWAR', '343063675839', '9657613547', 'vikas.nucleon@gmail.com', NULL, '2021-02-04 06:46:04', '2021-02-04 06:46:04'),
(189, 'Vikas', 'EEVPP4596B', 'VIKAS PAWAR', '343063675839', '9657613547', 'vikas.nucleon@gmail.com', NULL, '2021-02-04 07:01:57', '2021-02-04 07:01:57'),
(191, 'sarthak', 'p123', 'sarthak', 'a1234', '77777777777', 'sarthak@gmail.com', NULL, '2021-02-05 10:05:16', '2021-02-05 10:05:16'),
(192, 'pradyumn', 'p1234', 'pradyumn', 'a1234', '7894563210', 'ppl@gmail.com', NULL, '2021-02-05 23:56:46', '2021-02-05 23:56:46'),
(193, 'lalit', 'p123', 'lalit', 'a123', '8007015819', 'lalit@gmail.com', NULL, '2021-02-06 01:30:36', '2021-02-06 01:30:36'),
(194, 'sumit', '123244', 'sumit', '123456788765', '8208092355', 'abc@gmail', NULL, '2021-03-25 07:27:57', '2021-03-25 07:27:57'),
(195, 'sumit', '123244', 'sumit', '123456788765', '8208092355', 'abc@gmail', NULL, '2021-03-25 07:28:42', '2021-03-25 07:28:42'),
(196, 'aditya nanhe', 'abcd1234', 'aditya', '737392921832', '9887655432', 'aditya@gmail.com', NULL, '2021-04-14 23:58:27', '2021-04-14 23:58:27'),
(197, 'Anvi  Meshram', 'p12345', 'Anvi Meshram', 'a123456', '4561237891', 'anvi@gmail.com', NULL, '2021-04-17 00:35:45', '2021-04-17 00:35:45'),
(198, 'Vikrant thulkar', 'p12345', 'vikrant thulkar', 'a1234', '7896541230', 'vikrant@gmail.com', NULL, '2021-04-17 01:37:38', '2021-04-17 01:37:38'),
(199, 'mahesh', 'p12345', 'mahesh', 'a12345', '7485963210', 'mahesh@gmail.com', NULL, '2021-04-18 02:23:39', '2021-04-18 02:23:39'),
(200, 'priya', 'p12345', 'priya', 'a12345', '8523654123', 'priya@gmail.com', NULL, '2021-04-18 02:47:01', '2021-04-18 02:47:01'),
(201, '', '1223', 'VIKAS PAWAR', '343589', '', '', '1997-03-11', '2021-05-02 00:11:38', '2021-05-02 00:11:38'),
(202, '', '1223', 'VIKAS PAWAR', '343589', '', '', '1997-03-11', '2021-05-02 00:12:59', '2021-05-02 00:12:59'),
(203, 'jeeya pawar', '65849756', 'jeeya pawar', '458796325487', '9684589245', 'jeeyapawar@gmail.com', '1996-10-07', '2021-05-02 00:28:52', '2021-05-02 00:28:52'),
(204, 'jeeya pawar', '65849756', 'jeeya pawar', '458796325487', '9684589245', 'jeeyapawar@gmail.com', '1996-10-07', '2021-05-02 00:29:43', '2021-05-02 00:29:43'),
(205, '', 'rttye6', 'VIKAS PAWAR', '85588888', '', '', '1998-03-02', '2021-05-02 01:02:39', '2021-05-02 01:02:39'),
(206, '', '', '', '', '', '', '0000-00-00', '2021-05-02 01:05:35', '2021-05-02 01:05:35'),
(207, '', '', '', '', '', '', '0000-00-00', '2021-05-02 01:06:49', '2021-05-02 01:06:49'),
(208, '', '', '', '', '', '', '0000-00-00', '2021-05-02 01:09:05', '2021-05-02 01:09:05'),
(209, 'Vikas Pawar', 'eee', 'VIKAS PAWAR', '', '9657613754', 'ada@ada.com', '1998-12-12', '2021-05-02 01:12:29', '2021-05-02 01:12:29'),
(210, 'Sharda', 'p12345', 'a12345', 'a', '', '', NULL, '2021-05-17 00:01:05', '2021-05-17 00:01:05'),
(211, 'Sharda', 'p12345', 'Sharda', 'a12345', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 00:03:27', '2021-05-17 00:03:27'),
(212, 'Sharda', 'p12345', 'Sharda', 'a12345', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 00:03:42', '2021-05-17 00:03:42'),
(213, 'Sharda', 'p12345', 'Sharda', 'a12345', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 00:05:08', '2021-05-17 00:05:08'),
(214, 'aaaaaaaa', 'p1111111', 'aaaaaaaa', 'a1333', '115151111511', 'aaa@gmail.com', NULL, '2021-05-17 01:58:37', '2021-05-17 01:58:37'),
(215, 'Vikrant thulkar', 'p12345', 'vikrant thulkar', 'a1333', '9638527412', 'vikrant@gmail.com', NULL, '2021-05-17 02:00:31', '2021-05-17 02:00:31'),
(216, 'aaaaaaaa', 'p12345', 'Sharda', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:03:09', '2021-05-17 02:03:09'),
(217, 'mahesh', 'p12345', 'mahesh', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:28:14', '2021-05-17 02:28:14'),
(218, 'mahesh', 'p12345', 'mahesh', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:28:34', '2021-05-17 02:28:34'),
(219, 'mahesh', 'p12345', 'mahesh', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:28:46', '2021-05-17 02:28:46'),
(220, 'mahesh', 'p12345', 'mahesh', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:30:00', '2021-05-17 02:30:00'),
(221, 'Sharda', 'p12345', 'Sharda', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:39:14', '2021-05-17 02:39:14'),
(222, 'Sharda', 'p12345', 'Sharda', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:39:30', '2021-05-17 02:39:30'),
(223, 'Sharda', 'p12345', 'Sharda', 'a1333', '9638527412', 'sharda@gmail.com', NULL, '2021-05-17 02:39:38', '2021-05-17 02:39:38'),
(224, 'mahesh', 'p12345', 'mahesh', '', '', '', NULL, '2021-05-17 02:40:24', '2021-05-17 02:40:24'),
(225, 'aaaaaaaa', 'p12345', 'aaaaaaaa', '', '9638527412', 'aaa@gmail.com', NULL, '2021-05-17 02:41:43', '2021-05-17 02:41:43'),
(226, 'BHASKAR', 'vyuujknjkk', 'PAWAR VIKAS', '78y7y7y78y7y7', '9657613754', 'ada@ada.com', NULL, '2021-05-23 03:56:45', '2021-05-23 03:56:45'),
(227, 'John Doe', 'VPRTSQ345T', 'JOHN M DOE', '2345678811', '987456932', 'john@got.com', NULL, '2021-05-23 03:59:57', '2021-05-23 03:59:57'),
(228, 'JOHN M DOE', 'PQRT2343TY', 'JOHN M DOE', '123456789', '9657613754', 'john@gmail.com', NULL, '2021-05-23 04:02:29', '2021-05-23 04:02:29'),
(229, 'JOHN M DOE', 'EEVPP9098T', 'JOHN M DOE', '23456789988', '9767312678', 'john@gmail.co', NULL, '2021-05-23 04:13:02', '2021-05-23 04:13:02'),
(230, 'aaaaaaaa', 'p12345', 'aaaaaaa', 'a123456', '9874563214', 'aaa@gmail.com', NULL, '2021-05-23 04:30:56', '2021-05-23 04:30:56'),
(231, 'aaaaaaaa', 'p12345', 'aaaaaaa', 'a123456', '9874563214', 'aaa@gmail.com', NULL, '2021-05-23 04:31:19', '2021-05-23 04:31:19'),
(232, 'AMOL PAWAR', 'ee', 'qadsf', 'djnfjkkjbkfjb', '78345y748846', 'amol.pawar@tkinfotech.com', NULL, '2021-05-23 04:33:18', '2021-05-23 04:33:18'),
(233, 'aaaaaaaa', 'p12345', 'aaaaaaa', 'a123456', '9874563214', 'aaa@gmail.com', NULL, '2021-05-23 04:36:04', '2021-05-23 04:36:04'),
(234, 'hggfhf', 'fhgfgf', 'tdttd', 'dgfgfg', '789654125', 'lalit@gmail.com', NULL, '2021-05-23 04:37:39', '2021-05-23 04:37:39'),
(235, 'aaaaaaaa', 'p789654', 'fffffff', 'a12345', '7896541258', 'aaa@gmail.com', NULL, '2021-05-23 04:41:19', '2021-05-23 04:41:19'),
(238, 'BHASKAR RAMJI PAWAR', 'dvgdfgfgdf', 'cgnxvchvcbnvcv', 'cnxbvbcvcv', '09657613754', 'vikaspawar3110@gmail.com', NULL, '2021-05-23 22:45:30', '2021-05-23 22:45:30'),
(239, 'sarthak', 'p12345', 'sarthak', 'A12345', '08007015819', 'salman@gmail.com', NULL, '2021-05-24 05:08:36', '2021-05-24 05:08:36'),
(240, 'Vikas Pawar', 'EVVPP4596B', 'VIKAS PAWAR', '14788555588', '09763602243', 'hulkt@avengers.com', NULL, '2021-05-24 21:08:56', '2021-05-24 21:08:56'),
(241, 'Vikas Pawar', '12324', 'VIKAS PAWAR', '855888888', '25555555', 'vikaspawar3110@gmail.com', NULL, '2021-05-24 21:25:38', '2021-05-24 21:25:38'),
(242, 'Vikas Pawar', '12324', 'VIKAS PAWAR', '855888888', '25555555', 'vikaspawar3110@gmail.com', NULL, '2021-05-24 21:26:12', '2021-05-24 21:26:12'),
(243, 'Sankalp', 'p12345', 'Sankalp', 'a12345', '7896541236', 'sankalp@gmail.com', NULL, '2021-05-25 01:22:06', '2021-05-25 01:22:06'),
(246, 'Lalit', 'p12345', 'lalit', 'a123456', '9638527412', 'lalit@gmail.com', NULL, '2021-05-25 04:14:43', '2021-05-25 04:14:43'),
(247, 'Sarthak', 'p12345', 'Sarthak', 'a1333', '789654125', 'sarthak@gmail.com', NULL, '2021-05-25 04:33:53', '2021-05-25 04:33:53');

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
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pf_docs`
--

INSERT INTO `pf_docs` (`docid`, `extension`, `userid`, `pfid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'pdf', 1, 1, 'Aadhar', '2020-11-22 07:20:17', '2020-11-22 07:20:17'),
(2, 'pdf', 1, 1, 'PAN', '2020-11-22 07:20:18', '2020-11-22 07:20:18'),
(3, 'pdf', 1, 1, 'Passbook', '2020-11-22 07:20:19', '2020-11-22 07:20:19'),
(4, 'jpg', 1, 2, 'Aadhar', '2020-11-26 10:34:08', '2020-11-26 10:34:08'),
(5, 'jpg', 1, 2, 'PAN', '2020-11-26 10:34:09', '2020-11-26 10:34:09'),
(6, 'jpg', 1, 2, 'Passbook', '2020-11-26 10:34:10', '2020-11-26 10:34:10'),
(7, 'jpeg', 1, 4, 'Aadhar', '2020-11-29 07:19:11', '2020-11-29 07:19:11'),
(8, 'jpeg', 1, 4, 'PAN', '2020-11-29 07:19:11', '2020-11-29 07:19:11'),
(9, 'jpeg', 1, 4, 'Cancelled Check Passbook', '2020-11-29 07:19:11', '2020-11-29 07:19:11'),
(10, 'jpeg', 1, 5, 'Aadhar', '2020-12-02 14:18:00', '2020-12-02 14:18:00'),
(11, 'jpeg', 1, 5, 'PAN', '2020-12-02 14:18:00', '2020-12-02 14:18:00'),
(12, 'jpeg', 1, 5, 'Cancelled Check Passbook', '2020-12-02 14:18:00', '2020-12-02 14:18:00'),
(13, 'jpg', 1, 7, 'Aadhar', '2021-01-02 23:18:07', '2021-01-02 23:18:07'),
(14, 'jpg', 1, 7, 'PAN', '2021-01-02 23:18:07', '2021-01-02 23:18:07'),
(15, 'jpg', 1, 7, 'Cancelled Check Passbook', '2021-01-02 23:18:07', '2021-01-02 23:18:07'),
(16, 'jpg', 1, 9, 'Aadhar', '2021-01-22 09:46:16', '2021-01-22 09:46:16'),
(17, 'jpg', 1, 9, 'PAN', '2021-01-22 09:46:16', '2021-01-22 09:46:16'),
(18, 'jpg', 1, 9, 'Cancelled Check Passbook', '2021-01-22 09:46:16', '2021-01-22 09:46:16'),
(19, 'jpg', 1, 10, 'Aadhar', '2021-01-22 22:58:11', '2021-01-22 22:58:11'),
(20, 'webp', 1, 10, 'PAN', '2021-01-22 22:58:11', '2021-01-22 22:58:11'),
(21, 'jfif', 1, 10, 'Cancelled Check Passbook', '2021-01-22 22:58:11', '2021-01-22 22:58:11'),
(22, 'jpg', 1, 11, 'Aadhar', '2021-01-22 23:27:30', '2021-01-22 23:27:30'),
(23, 'png', 1, 11, 'PAN', '2021-01-22 23:27:30', '2021-01-22 23:27:30'),
(24, 'jfif', 1, 11, 'Cancelled Check Passbook', '2021-01-22 23:27:30', '2021-01-22 23:27:30');

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
  `uan_number` varchar(255) DEFAULT NULL,
  `uan_password` varchar(255) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT '1',
  `remark` text,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pf_withdrwal`
--

INSERT INTO `pf_withdrwal` (`pfid`, `userid`, `pid`, `rid`, `bid`, `uan_number`, `uan_password`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 3, 1, 1, 1, '12345', '12345', '2', 'update status', '2020-11-22 07:20:15', '2021-05-02 01:16:26'),
(2, 3, 5, 5, 2, 'uan123', 'uanpass123', '3', 'reject', '2020-11-26 10:34:06', '2020-11-27 06:23:29'),
(3, 3, 9, 9, 3, 'uan123', '', '4', '', '2020-11-27 10:08:35', '2020-11-28 16:37:33'),
(4, 3, 53, 99, 6, '123456789320', '123456', '4', '', '2020-11-29 07:19:11', '2020-11-29 07:39:15'),
(5, 3, 81, 135, 26, 'fghfghfg', 'fgffh', '3', 'rejected by lalit', '2020-12-02 14:18:00', '2021-01-03 06:24:04'),
(6, 3, 123, 185, 37, 'sfdg', 'dsfdf', '2', 'Test by Vikas', '2020-12-22 07:58:59', '2021-05-01 00:55:25'),
(7, 3, 127, 192, 38, 'uan1234', 'uanpass123', '2', 'hold by me', '2021-01-02 23:18:07', '2021-01-02 23:54:29'),
(8, 3, 128, 193, 39, 'uan1234', 'uanpass123', '3', 'rejected', '2021-01-02 23:21:13', '2021-01-03 00:04:33'),
(9, 3, 146, 222, 40, '1111', '12345', '1', NULL, '2021-01-22 09:46:16', '2021-01-22 09:46:16'),
(10, 3, 149, 225, 41, '123132413213', '12345', '2', 'hold by prady', '2021-01-22 22:58:11', '2021-01-22 23:14:02'),
(11, 3, 150, 226, 42, '123123123', '12345', '4', 'all done', '2021-01-22 23:27:30', '2021-01-23 00:27:23');

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
-- Table structure for table `remarks_document`
--

CREATE TABLE `remarks_document` (
  `remarkid` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `rowid` int(11) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `remarks_document`
--

INSERT INTO `remarks_document` (`remarkid`, `service`, `rowid`, `extension`, `createdat`, `updatedat`) VALUES
(1, 'PF', 1, 'pdf', '2020-11-22 07:45:02', '2020-11-22 07:45:02'),
(2, 'PF', 1, 'pdf', '2020-11-22 07:45:03', '2020-11-22 07:45:03'),
(3, 'Digital', 1, 'pdf', '2020-11-22 07:49:05', '2020-11-22 07:49:05'),
(4, 'Digital', 1, 'pdf', '2020-11-22 07:49:06', '2020-11-22 07:49:06'),
(5, 'PF', 1, 'jpg', '2020-11-25 10:45:27', '2020-11-25 10:45:27'),
(6, 'PF', 1, 'jpg', '2020-11-25 10:45:28', '2020-11-25 10:45:28'),
(7, 'PF', 2, 'jpg', '2020-11-26 10:54:55', '2020-11-26 10:54:55'),
(8, 'PF', 2, 'jpg', '2020-11-26 10:54:56', '2020-11-26 10:54:56'),
(9, 'Digital', 6, 'jpg', '2020-11-27 00:32:07', '2020-11-27 00:32:07'),
(10, 'Digital', 6, 'jpg', '2020-11-27 00:32:08', '2020-11-27 00:32:08'),
(11, 'PF', 1, 'sql', '2020-11-27 21:52:03', '2020-11-27 21:52:03'),
(12, 'PF', 1, 'sql', '2020-11-27 21:52:03', '2020-11-27 21:52:03'),
(13, 'PF', 3, 'jpeg', '2020-11-28 09:48:53', '2020-11-28 09:48:53'),
(14, 'PF', 3, 'JPG', '2020-11-28 09:48:53', '2020-11-28 09:48:53'),
(15, 'PAN', 1, 'jpeg', '2020-11-28 10:38:19', '2020-11-28 10:38:19'),
(16, 'PAN', 1, 'jpeg', '2020-11-28 10:38:19', '2020-11-28 10:38:19'),
(17, 'PAN', 1, 'jpeg', '2020-11-28 10:44:10', '2020-11-28 10:44:10'),
(18, 'PAN', 1, 'jpeg', '2020-11-28 10:44:11', '2020-11-28 10:44:11'),
(19, 'PAN', 2, 'jpeg', '2020-11-28 10:53:58', '2020-11-28 10:53:58'),
(20, 'PAN', 2, 'jpeg', '2020-11-28 10:53:59', '2020-11-28 10:53:59'),
(21, 'PF', 3, 'jpeg', '2020-11-28 16:37:33', '2020-11-28 16:37:33'),
(22, 'PF', 3, 'pdf', '2020-11-28 16:37:33', '2020-11-28 16:37:33'),
(23, 'SHOPACT', 5, 'jpg', '2020-11-28 20:09:38', '2020-11-28 20:09:38'),
(24, 'SHOPACT', 5, 'jpg', '2020-11-28 20:09:38', '2020-11-28 20:09:38'),
(25, 'SHOPACT', 4, 'jpg', '2020-11-28 20:27:17', '2020-11-28 20:27:17'),
(26, 'SHOPACT', 4, 'jpg', '2020-11-28 20:27:18', '2020-11-28 20:27:18'),
(27, 'SHOPACT', 3, 'jpg', '2020-11-28 20:28:07', '2020-11-28 20:28:07'),
(28, 'SHOPACT', 3, 'jpg', '2020-11-28 20:28:07', '2020-11-28 20:28:07'),
(29, 'PF', 4, 'jpeg', '2020-11-29 07:39:02', '2020-11-29 07:39:02'),
(30, 'PF', 4, 'jpeg', '2020-11-29 07:39:02', '2020-11-29 07:39:02'),
(31, 'UDYOG', 3, 'jpg', '2020-11-29 09:50:37', '2020-11-29 09:50:37'),
(32, 'UDYOG', 3, 'jpg', '2020-11-29 09:50:38', '2020-11-29 09:50:38'),
(33, 'UDYOG', 6, 'pdf', '2020-12-02 06:30:43', '2020-12-02 06:30:43'),
(34, 'UDYOG', 6, 'xlsx', '2020-12-02 06:30:44', '2020-12-02 06:30:44'),
(35, 'UDYOG', 18, 'sql', '2020-12-03 09:03:50', '2020-12-03 09:03:50'),
(36, 'UDYOG', 18, 'pptx', '2020-12-03 09:03:50', '2020-12-03 09:03:50'),
(37, 'UDYOG', 16, 'pptx', '2020-12-03 09:07:08', '2020-12-03 09:07:08'),
(38, 'UDYOG', 16, 'sql', '2020-12-03 09:07:08', '2020-12-03 09:07:08'),
(39, 'INCOME', 3, 'jpg', '2020-12-07 01:28:49', '2020-12-07 01:28:49'),
(40, 'INCOME', 3, 'jpg', '2020-12-07 01:28:50', '2020-12-07 01:28:50'),
(41, 'Digital', 7, 'txt', '2020-12-11 10:26:35', '2020-12-11 10:26:35'),
(42, 'Digital', 7, 'text', '2020-12-11 10:26:35', '2020-12-11 10:26:35'),
(43, 'Digital', 9, 'text', '2020-12-11 10:28:49', '2020-12-11 10:28:49'),
(44, 'Digital', 9, 'txt', '2020-12-11 10:28:49', '2020-12-11 10:28:49'),
(45, 'UDYOG', 25, 'text', '2020-12-11 10:31:06', '2020-12-11 10:31:06'),
(46, 'UDYOG', 25, 'txt', '2020-12-11 10:31:06', '2020-12-11 10:31:06'),
(47, 'GSTANNUAL', 4, 'txt', '2020-12-13 03:31:01', '2020-12-13 03:31:01'),
(48, 'GSTANNUAL', 4, 'text', '2020-12-13 03:31:02', '2020-12-13 03:31:02'),
(49, 'GSTANNUAL', 1, 'php', '2020-12-13 06:22:26', '2020-12-13 06:22:26'),
(50, 'GSTANNUAL', 1, 'html', '2020-12-13 06:22:26', '2020-12-13 06:22:26'),
(51, 'GSTANNUAL', 2, 'txt', '2020-12-13 07:05:34', '2020-12-13 07:05:34'),
(52, 'GSTANNUAL', 2, 'text', '2020-12-13 07:05:34', '2020-12-13 07:05:34'),
(53, 'GSTANNUAL', 2, 'txt', '2020-12-13 07:06:10', '2020-12-13 07:06:10'),
(54, 'GSTANNUAL', 2, 'text', '2020-12-13 07:06:10', '2020-12-13 07:06:10'),
(55, 'GSTANNUAL', 3, 'txt', '2020-12-13 07:08:02', '2020-12-13 07:08:02'),
(56, 'GSTANNUAL', 3, 'text', '2020-12-13 07:08:02', '2020-12-13 07:08:02'),
(57, 'UDYOG', 23, 'pdf', '2020-12-16 19:43:15', '2020-12-16 19:43:15'),
(58, 'UDYOG', 23, 'xlsx', '2020-12-16 19:43:15', '2020-12-16 19:43:15'),
(59, 'UDYOG', 22, 'jpg', '2020-12-16 19:53:36', '2020-12-16 19:53:36'),
(60, 'UDYOG', 22, 'jpg', '2020-12-16 19:53:36', '2020-12-16 19:53:36'),
(61, 'PAN', 7, 'jpg', '2020-12-25 10:06:04', '2020-12-25 10:06:04'),
(62, 'PAN', 7, 'jpg', '2020-12-25 10:06:04', '2020-12-25 10:06:04'),
(63, 'PF', 6, 'jpg', '2021-01-02 23:13:36', '2021-01-02 23:13:36'),
(64, 'PF', 6, 'jpg', '2021-01-02 23:13:36', '2021-01-02 23:13:36'),
(65, 'PF', 7, 'jpg', '2021-01-02 23:54:29', '2021-01-02 23:54:29'),
(66, 'PF', 7, 'jpg', '2021-01-02 23:54:29', '2021-01-02 23:54:29'),
(67, 'UDYOG', 21, 'jpg', '2021-01-03 00:19:07', '2021-01-03 00:19:07'),
(68, 'UDYOG', 21, 'jpg', '2021-01-03 00:19:07', '2021-01-03 00:19:07'),
(69, 'UDYOG', 20, 'jpg', '2021-01-03 00:22:50', '2021-01-03 00:22:50'),
(70, 'UDYOG', 20, 'jpg', '2021-01-03 00:22:50', '2021-01-03 00:22:50'),
(71, 'PAN', 8, 'jpg', '2021-01-03 00:28:03', '2021-01-03 00:28:03'),
(72, 'PAN', 8, 'jpg', '2021-01-03 00:28:03', '2021-01-03 00:28:03'),
(73, 'PAN', 5, 'jpg', '2021-01-03 00:51:34', '2021-01-03 00:51:34'),
(74, 'PAN', 5, 'jpg', '2021-01-03 00:51:34', '2021-01-03 00:51:34'),
(75, 'PF', 5, 'jpg', '2021-01-03 06:24:04', '2021-01-03 06:24:04'),
(76, 'PF', 5, 'jpg', '2021-01-03 06:24:04', '2021-01-03 06:24:04'),
(77, 'PAN', 6, 'jpg', '2021-01-03 06:33:10', '2021-01-03 06:33:10'),
(78, 'PAN', 6, 'jpg', '2021-01-03 06:33:11', '2021-01-03 06:33:11'),
(79, 'UDYOG', 19, 'jpg', '2021-01-03 07:00:40', '2021-01-03 07:00:40'),
(80, 'UDYOG', 19, 'jpg', '2021-01-03 07:00:40', '2021-01-03 07:00:40'),
(81, 'GSTR', 17, 'png', '2021-01-05 10:14:28', '2021-01-05 10:14:28'),
(82, 'GSTR', 17, 'png', '2021-01-05 10:14:28', '2021-01-05 10:14:28'),
(83, 'GSTR', 16, 'png', '2021-01-05 10:21:17', '2021-01-05 10:21:17'),
(84, 'GSTR', 16, 'png', '2021-01-05 10:21:17', '2021-01-05 10:21:17'),
(85, 'INCOME', 17, 'jpg', '2021-01-22 10:33:34', '2021-01-22 10:33:34'),
(86, 'INCOME', 17, 'jpg', '2021-01-22 10:33:34', '2021-01-22 10:33:34'),
(87, 'PF', 10, 'png', '2021-01-22 23:14:02', '2021-01-22 23:14:02'),
(88, 'PF', 10, 'png', '2021-01-22 23:14:02', '2021-01-22 23:14:02'),
(89, 'PF', 11, 'jpg', '2021-01-23 00:27:23', '2021-01-23 00:27:23'),
(90, 'PF', 11, 'jfif', '2021-01-23 00:27:23', '2021-01-23 00:27:23'),
(91, 'Digital', 10, 'png', '2021-01-23 02:02:36', '2021-01-23 02:02:36'),
(92, 'Digital', 10, 'png', '2021-01-23 02:02:36', '2021-01-23 02:02:36'),
(93, 'Digital', 10, 'png', '2021-01-23 02:02:44', '2021-01-23 02:02:44'),
(94, 'Digital', 10, 'png', '2021-01-23 02:02:44', '2021-01-23 02:02:44'),
(95, 'PAN', 9, 'jfif', '2021-01-23 03:12:16', '2021-01-23 03:12:16'),
(96, 'PAN', 9, 'jfif', '2021-01-23 03:12:16', '2021-01-23 03:12:16'),
(97, 'PAN', 10, 'jpg', '2021-01-23 03:16:53', '2021-01-23 03:16:53'),
(98, 'PAN', 10, 'jpg', '2021-01-23 03:16:53', '2021-01-23 03:16:53'),
(99, 'SHOPACT', 22, 'png', '2021-01-23 03:30:47', '2021-01-23 03:30:47'),
(100, 'SHOPACT', 22, 'png', '2021-01-23 03:30:47', '2021-01-23 03:30:47'),
(101, 'UDYOG', 26, 'png', '2021-01-23 03:42:21', '2021-01-23 03:42:21'),
(102, 'UDYOG', 26, 'png', '2021-01-23 03:42:21', '2021-01-23 03:42:21'),
(103, 'GSTANNUAL', 4, 'jpg', '2021-01-23 04:14:42', '2021-01-23 04:14:42'),
(104, 'GSTANNUAL', 4, 'jpg', '2021-01-23 04:14:42', '2021-01-23 04:14:42'),
(105, 'GSTR', 18, 'webp', '2021-01-23 04:30:44', '2021-01-23 04:30:44'),
(106, 'GSTR', 18, 'jfif', '2021-01-23 04:30:44', '2021-01-23 04:30:44'),
(107, 'GSTR', 18, 'jfif', '2021-01-23 04:34:50', '2021-01-23 04:34:50'),
(108, 'GSTR', 18, 'jfif', '2021-01-23 04:34:50', '2021-01-23 04:34:50'),
(109, 'CERT', 3, 'png', '2021-01-23 04:53:23', '2021-01-23 04:53:23'),
(110, 'CERT', 3, 'png', '2021-01-23 04:53:23', '2021-01-23 04:53:23'),
(111, 'GSTR', 21, 'jpg', '2021-02-02 06:00:39', '2021-02-02 06:00:39'),
(112, 'GSTR', 21, 'JPG', '2021-02-02 06:00:40', '2021-02-02 06:00:40'),
(113, 'GSTR', 20, 'JPG', '2021-02-02 06:01:58', '2021-02-02 06:01:58'),
(114, 'GSTR', 20, 'jpg', '2021-02-02 06:01:58', '2021-02-02 06:01:58'),
(115, 'GSTR', 25, 'jpg', '2021-02-03 04:21:48', '2021-02-03 04:21:48'),
(116, 'GSTR', 25, 'jpg', '2021-02-03 04:21:49', '2021-02-03 04:21:49'),
(117, 'TIN', 3, 'jpg', '2021-02-06 03:41:48', '2021-02-06 03:41:48'),
(118, 'TIN', 3, 'jpg', '2021-02-06 03:41:48', '2021-02-06 03:41:48'),
(119, 'TIN', 2, 'jpg', '2021-02-06 03:44:01', '2021-02-06 03:44:01'),
(120, 'TIN', 2, 'jpg', '2021-02-06 03:44:01', '2021-02-06 03:44:01'),
(121, 'TIN', 3, 'jpg', '2021-02-06 04:02:09', '2021-02-06 04:02:09'),
(122, 'TIN', 3, 'png', '2021-02-06 04:02:09', '2021-02-06 04:02:09'),
(123, 'TIN', 6, 'xlsx', '2021-04-18 01:59:47', '2021-04-18 01:59:47'),
(124, 'TIN', 6, 'xlsx', '2021-04-18 01:59:47', '2021-04-18 01:59:47'),
(125, 'PF', 6, 'png', '2021-05-01 00:55:25', '2021-05-01 00:55:25'),
(126, 'PF', 6, 'png', '2021-05-01 00:55:25', '2021-05-01 00:55:25'),
(127, 'FOOD', 3, 'png', '2021-05-01 02:45:09', '2021-05-01 02:45:09'),
(128, 'FOOD', 3, 'png', '2021-05-01 02:45:09', '2021-05-01 02:45:09'),
(129, 'FOOD', 5, 'png', '2021-05-01 02:49:41', '2021-05-01 02:49:41'),
(130, 'FOOD', 5, 'png', '2021-05-01 02:49:41', '2021-05-01 02:49:41'),
(131, 'FOOD', 6, 'png', '2021-05-01 05:16:13', '2021-05-01 05:16:13'),
(132, 'FOOD', 6, 'png', '2021-05-01 05:16:13', '2021-05-01 05:16:13'),
(133, 'PF', 1, 'png', '2021-05-02 01:16:26', '2021-05-02 01:16:26'),
(134, 'PF', 1, 'png', '2021-05-02 01:16:26', '2021-05-02 01:16:26'),
(135, 'EWAY', 1, 'png', '2021-05-02 01:22:44', '2021-05-02 01:22:44'),
(136, 'EWAY', 1, 'png', '2021-05-02 01:22:44', '2021-05-02 01:22:44'),
(137, 'UDYOG', 2, 'jpg', '2021-05-23 08:57:43', '2021-05-23 08:57:43'),
(138, 'UDYOG', 2, 'png', '2021-05-23 08:57:43', '2021-05-23 08:57:43'),
(139, 'UDYOG', 2, 'jpg', '2021-05-23 09:01:15', '2021-05-23 09:01:15'),
(140, 'UDYOG', 2, 'png', '2021-05-23 09:01:15', '2021-05-23 09:01:15'),
(141, 'DEED', 2, 'jpg', '2021-05-23 09:05:52', '2021-05-23 09:05:52'),
(142, 'DEED', 2, 'png', '2021-05-23 09:05:52', '2021-05-23 09:05:52'),
(143, 'DEED', 2, 'jpg', '2021-05-23 09:06:59', '2021-05-23 09:06:59'),
(144, 'DEED', 2, 'jpg', '2021-05-23 09:06:59', '2021-05-23 09:06:59'),
(145, 'DEED', 4, 'png', '2021-05-23 21:33:09', '2021-05-23 21:33:09'),
(146, 'DEED', 4, 'jpg', '2021-05-23 21:33:09', '2021-05-23 21:33:09'),
(147, 'GSTR', 48, 'png', '2021-05-23 22:46:35', '2021-05-23 22:46:35'),
(148, 'GSTR', 48, 'png', '2021-05-23 22:46:35', '2021-05-23 22:46:35'),
(149, 'DEED', 10, 'jpg', '2021-05-23 22:47:02', '2021-05-23 22:47:02'),
(150, 'DEED', 10, 'jpg', '2021-05-23 22:47:02', '2021-05-23 22:47:02'),
(151, 'GSTR', 45, 'jpg', '2021-05-24 07:33:45', '2021-05-24 07:33:45'),
(152, 'GSTR', 45, 'png', '2021-05-24 07:33:45', '2021-05-24 07:33:45'),
(153, 'GSTANNUAL', 22, 'jpg', '2021-05-25 01:03:57', '2021-05-25 01:03:57'),
(154, 'GSTANNUAL', 22, 'png', '2021-05-25 01:03:58', '2021-05-25 01:03:58'),
(155, 'GSTANNUAL', 24, 'jpg', '2021-05-25 01:15:43', '2021-05-25 01:15:43'),
(156, 'GSTANNUAL', 24, 'png', '2021-05-25 01:15:44', '2021-05-25 01:15:44'),
(157, 'GSTANNUAL', 21, 'png', '2021-05-25 01:24:04', '2021-05-25 01:24:04'),
(158, 'GSTANNUAL', 21, 'png', '2021-05-25 01:24:04', '2021-05-25 01:24:04'),
(159, 'GSTANNUAL', 19, 'png', '2021-05-25 01:29:39', '2021-05-25 01:29:39'),
(160, 'GSTANNUAL', 18, 'jpg', '2021-05-25 01:30:17', '2021-05-25 01:30:17'),
(161, 'GSTANNUAL', 18, 'png', '2021-05-25 01:30:17', '2021-05-25 01:30:17'),
(162, 'GSTANNUAL', 17, 'jpg', '2021-05-25 01:30:46', '2021-05-25 01:30:46'),
(163, 'TIN', 10, 'png', '2021-05-25 04:36:39', '2021-05-25 04:36:39'),
(164, 'FOOD', 8, 'png', '2021-05-25 05:48:00', '2021-05-25 05:48:00');

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
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residential_details`
--

INSERT INTO `residential_details` (`rid`, `premise_name`, `flat_number`, `road`, `area`, `village`, `taluka`, `district`, `state`, `pincode`, `createdat`, `updatedat`) VALUES
(1, 'Winterfell', '145', 'North', 'Ned Home', 'North', 'Winterfell', 'GOT', 'GOT', '478585', '2020-11-22 07:20:13', '2020-11-22 07:20:13'),
(2, 'SUPE', '45', 'GHODENADI', 'PUNE', 'SHIRUR', 'SHIRUR', 'Ahmadnagar', 'MP', '147895', '2020-11-22 07:32:48', '2020-11-22 07:32:48'),
(3, 'premise', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-22 07:52:10', '2020-11-22 07:52:10'),
(4, 'premise', '123', 'umred', 'area', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-22 07:56:53', '2020-11-22 07:56:53'),
(5, 'premise', '123', 'umred', 'area', 'village', 'taluka', 'district', 'Maharashtra', '440009', '2020-11-26 10:34:04', '2020-11-26 10:34:04'),
(6, 'kdk', '148', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-11-26 12:22:40', '2020-11-26 12:22:40'),
(7, 'dsgdf', '345', 'dfdggf', 'dfsf', 'fsfd', 'sfsddf', 'dfdsf', 'dfsdf', 'fsdfd', '2020-11-26 12:36:36', '2020-11-26 12:36:36'),
(8, '', '', '', '', '', '', '', '', '', '2020-11-26 12:38:05', '2020-11-26 12:38:05'),
(9, '', '', '', '', '', '', '', '', '', '2020-11-27 10:08:35', '2020-11-27 10:08:35'),
(10, 'kdk', '145', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-11-27 11:22:41', '2020-11-27 11:22:41'),
(11, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-11-27 11:26:42', '2020-11-27 11:26:42'),
(12, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 00:21:12', '2020-11-28 00:21:12'),
(13, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 00:22:32', '2020-11-28 00:22:32'),
(14, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '455014', '2020-11-28 05:57:24', '2020-11-28 05:57:24'),
(15, 'Gokul colony', 'DHULE', 'GHODENADI', 'PUNE', 'SHIRUR', 'SHIRUR', 'Ahmadnagar', 'MP', '411002', '2020-11-28 07:17:59', '2020-11-28 07:17:59'),
(16, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 07:48:55', '2020-11-28 07:48:55'),
(17, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 07:48:56', '2020-11-28 07:48:56'),
(18, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 07:56:11', '2020-11-28 07:56:11'),
(19, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 07:56:14', '2020-11-28 07:56:14'),
(20, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:01:59', '2020-11-28 08:01:59'),
(21, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:01:59', '2020-11-28 08:01:59'),
(22, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:20:45', '2020-11-28 08:20:45'),
(23, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:20:47', '2020-11-28 08:20:47'),
(24, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:25:18', '2020-11-28 08:25:18'),
(25, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:25:18', '2020-11-28 08:25:18'),
(26, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:38:22', '2020-11-28 08:38:22'),
(27, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:38:23', '2020-11-28 08:38:23'),
(28, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:39:51', '2020-11-28 08:39:51'),
(29, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:39:55', '2020-11-28 08:39:55'),
(30, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:41:02', '2020-11-28 08:41:02'),
(31, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:41:06', '2020-11-28 08:41:06'),
(32, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:44:00', '2020-11-28 08:44:00'),
(33, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:44:02', '2020-11-28 08:44:02'),
(34, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:44:42', '2020-11-28 08:44:42'),
(35, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:44:46', '2020-11-28 08:44:46'),
(36, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:48:07', '2020-11-28 08:48:07'),
(37, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 08:48:09', '2020-11-28 08:48:09'),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-28 09:08:59', '2020-11-28 09:08:59'),
(39, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:23:19', '2020-11-28 09:23:19'),
(40, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '413705', '2020-11-28 09:23:40', '2020-11-28 09:23:40'),
(41, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:25:00', '2020-11-28 09:25:00'),
(42, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '413705', '2020-11-28 09:25:03', '2020-11-28 09:25:03'),
(43, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:26:11', '2020-11-28 09:26:11'),
(44, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '413705', '2020-11-28 09:26:14', '2020-11-28 09:26:14'),
(45, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:27:02', '2020-11-28 09:27:02'),
(46, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '413705', '2020-11-28 09:27:04', '2020-11-28 09:27:04'),
(47, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:28:09', '2020-11-28 09:28:09'),
(48, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '413705', '2020-11-28 09:28:11', '2020-11-28 09:28:11'),
(49, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:29:29', '2020-11-28 09:29:29'),
(50, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '413705', '2020-11-28 09:29:31', '2020-11-28 09:29:31'),
(51, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:33:24', '2020-11-28 09:33:24'),
(52, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '413705', '2020-11-28 09:33:29', '2020-11-28 09:33:29'),
(53, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:38:45', '2020-11-28 09:38:45'),
(54, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'MP', '411005', '2020-11-28 09:38:51', '2020-11-28 09:38:51'),
(55, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:39:33', '2020-11-28 09:39:33'),
(56, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'MP', '411005', '2020-11-28 09:39:41', '2020-11-28 09:39:41'),
(57, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2020-11-28 09:41:42', '2020-11-28 09:41:42'),
(58, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'MP', '411005', '2020-11-28 09:41:43', '2020-11-28 09:41:43'),
(59, 'Vikas', '968', 'Pune', 'Pune', 'Pune', 'Rauri', 'AHmadnagar', 'Arunachal Pradesh', '411007', '2020-11-28 09:45:46', '2020-11-28 09:45:46'),
(60, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'MAHARASHTRA', '413705', '2020-11-28 09:45:48', '2020-11-28 09:45:48'),
(61, 'dfsfd', '123', 'dfdfdg', 'dfdgf', 'dfdgfdg', 'fdfdf', 'sfdfd', 'sfdfd', '41233', '2020-11-28 11:48:31', '2020-11-28 11:48:31'),
(62, 'adsd', '123', 'xsdsd', 'sdsd', 'sdsd', 'sads', 'dsds', 'sdsd', '440009', '2020-11-28 11:48:32', '2020-11-28 11:48:32'),
(63, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 11:54:58', '2020-11-28 11:54:58'),
(64, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 11:54:59', '2020-11-28 11:54:59'),
(65, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 11:58:02', '2020-11-28 11:58:02'),
(66, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 11:58:05', '2020-11-28 11:58:05'),
(67, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:02:38', '2020-11-28 12:02:38'),
(68, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:02:41', '2020-11-28 12:02:41'),
(69, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:06:32', '2020-11-28 12:06:32'),
(70, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:06:33', '2020-11-28 12:06:33'),
(71, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:14:21', '2020-11-28 12:14:21'),
(72, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:14:25', '2020-11-28 12:14:25'),
(73, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:15:04', '2020-11-28 12:15:04'),
(74, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:15:07', '2020-11-28 12:15:07'),
(75, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:17:56', '2020-11-28 12:17:56'),
(76, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:17:58', '2020-11-28 12:17:58'),
(77, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:19:33', '2020-11-28 12:19:33'),
(78, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:20:36', '2020-11-28 12:20:36'),
(79, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:21:56', '2020-11-28 12:21:56'),
(80, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:21:57', '2020-11-28 12:21:57'),
(81, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:23:38', '2020-11-28 12:23:38'),
(82, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:23:39', '2020-11-28 12:23:39'),
(83, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:26:27', '2020-11-28 12:26:27'),
(84, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:26:30', '2020-11-28 12:26:30'),
(85, 'dfsfd', '123', 'dfdfdg', 'dfdgf', 'dfdgfdg', 'fdfdf', 'sfdfd', 'sfdfd', '41233', '2020-11-28 12:30:05', '2020-11-28 12:30:05'),
(86, 'adsd', '123', 'xsdsd', 'sdsd', 'sdsd', 'sads', 'dsds', 'sdsd', '440009', '2020-11-28 12:30:07', '2020-11-28 12:30:07'),
(87, 'kdk', '12', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '40009', '2020-11-28 12:38:42', '2020-11-28 12:38:42'),
(88, 'premise', '123', 'umred', 'kdk', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 12:38:43', '2020-11-28 12:38:43'),
(89, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 23:06:19', '2020-11-28 23:06:19'),
(90, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-28 23:06:23', '2020-11-28 23:06:23'),
(91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-29 06:05:47', '2020-11-29 06:05:47'),
(92, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-29 06:05:47', '2020-11-29 06:05:47'),
(93, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-29 06:10:49', '2020-11-29 06:10:49'),
(94, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-29 06:14:35', '2020-11-29 06:14:35'),
(95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-29 06:23:26', '2020-11-29 06:23:26'),
(96, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-29 06:23:28', '2020-11-29 06:23:28'),
(97, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-29 06:56:34', '2020-11-29 06:56:34'),
(98, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-29 06:56:39', '2020-11-29 06:56:39'),
(99, 'hfh', '01', 'satapirbaba road', 'zarekathi gon', 'zarekathi', 'sangamner', '601#~#PUNE', 'Maharstra', '413714', '2020-11-29 07:19:11', '2020-11-29 07:19:11'),
(100, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-29 08:07:26', '2020-11-29 08:07:26'),
(101, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-29 08:07:27', '2020-11-29 08:07:27'),
(102, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-11-29 08:32:25', '2020-11-29 08:32:25'),
(103, 'at post zarekathi', '01', 'satapirbaba road', 'zarekathi gon', 'zarekathi', 'sangamner', '601#~#PUNE', 'Maharstra', '413714', '2020-11-29 17:16:05', '2020-11-29 17:16:05'),
(104, 'SAMARATH ', '22', 'SATAPUR BABA ROAD', 'ZAREKATHI', 'ZAREKATHI', 'SANGAMANER', 'A, NAGAR', 'MAHA', '413714', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(105, 'at post zarekathi', '01', 'satapirbaba road', 'zarekathi gon', 'zarekathi', 'sangamner', 'A. Nagar', 'Maharstra', '413714', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(106, '', 'ttry', 'SATAPUR BABA ROAD', 'ZAREKATHI', 'ZAREKATHI', 'SANGAMANER', 'A, NAGAR', 'MAHA', '413714', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(107, 'at post zarekathi', '01', 'satapirbaba road', 'zarekathi gon', 'zarekathi', 'sangamner', '601#~#PUNE', 'Maharstra', '413714', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(108, 'Gokul colony', '45', 'GHODENADI', 'DHULE', 'SHIRUR', 'SHIRUR', 'Ahmadnagar', 'Maharashtra', '147895', '2020-11-30 08:52:03', '2020-11-30 08:52:03'),
(109, 'kdk', '140', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-12-01 11:41:15', '2020-12-01 11:41:15'),
(110, 'kdk', '140', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-12-01 11:43:47', '2020-12-01 11:43:47'),
(111, 'kdk', '140', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-12-01 11:45:29', '2020-12-01 11:45:29'),
(112, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Pune', 'Pune', 'Maharashtra', '411002', '2020-12-02 00:29:19', '2020-12-02 00:29:19'),
(113, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'Pune', 'Maharashtra', '411002', '2020-12-02 00:29:20', '2020-12-02 00:29:20'),
(114, 'Pune', '12', '14', 'Pune', 'Rahuri', 'Rahuri', 'Ahmadnagar', 'MA', '411005', '2020-12-02 05:28:08', '2020-12-02 05:28:08'),
(115, 'SUPE', '45', 'GHODENADI', 'Ned Home', 'SHIRUR', 'SHIRUR', 'PUNE', 'Maharashtra', '147895', '2020-12-02 05:28:10', '2020-12-02 05:28:10'),
(116, 'Pune', '12', '14', 'Pune', 'Rahuri', 'Rahuri', 'Ahmadnagar', 'MA', '411005', '2020-12-02 05:34:04', '2020-12-02 05:34:04'),
(117, 'Gokul colony', 'DHULE', 'GHODENADI', 'Ned Home', 'SHIRUR', 'SHIRUR', 'PUNE', 'Maharashtra', '147895', '2020-12-02 05:34:04', '2020-12-02 05:34:04'),
(118, 'premise', '120', 'Umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-12-02 07:24:34', '2020-12-02 07:24:34'),
(119, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(120, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '455002', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(121, 'SUPE', '45', 'GHODENADI', 'Ned Home', 'SHIRUR', 'SHIRUR', 'Ahmadnagar', 'Maharashtra', '147895', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(126, 'Gokul colony', 'DHULE', 'GHODENADI', 'Ned Home', 'SHIRUR', 'SHIRUR', 'PUNE', 'MP', '147895', '2020-12-02 12:22:09', '2020-12-02 12:22:09'),
(128, 'Gokul colony', 'DHULE', 'GHODENADI', 'Ned Home', 'SHIRUR', 'SHIRUR', 'PUNE', 'MP', '147895', '2020-12-02 12:24:28', '2020-12-02 12:24:28'),
(129, 'SUPE', '45', 'GHODENADI', 'Ned Home', 'SHIRUR', 'SHIRUR', 'PUNE', 'MP', '147895', '2020-12-02 12:27:39', '2020-12-02 12:27:39'),
(131, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(133, 'SAMARATH', '22', 'SATAPUR BABA ROAD', 'ZAREKATHI', 'ZAREKATHI', 'SANGAMANER', 'A, NAGAR', 'MAHA', '413714', '2020-12-02 14:11:09', '2020-12-02 14:11:09'),
(134, 'sssssssss', 'ssssssss', 'satapirbaba road', 'zarekathi gon', 'zarekathi', 'sangamner', '601#~#PUNE', 'Maharstra', '413714', '2020-12-02 14:11:09', '2020-12-02 14:11:09'),
(135, 'at post zarekathi', 'ssssssss', 'satapirbaba road', 'zarekathi gon', 'zarekathi', 'sangamner', '601#~#PUNE', 'Maharstra', '413714', '2020-12-02 14:18:00', '2020-12-02 14:18:00'),
(136, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(137, 'GOKUL COLONY', '103', 'POLICE STATION', 'POLICE STATION', 'RAHURI', 'RAHURI', 'AHMADNAGAR', 'MAHARAHTRA', '411005', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(138, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '411002', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(139, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Arunachal Pradesh', '411007', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(140, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '455002', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(141, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Arunachal Pradesh', '411007', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(142, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '455002', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(143, 'Vikas', '968', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Arunachal Pradesh', '411007', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(144, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '411002', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(145, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Arunachal Pradesh', '411007', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(146, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'MAHARASHTRA', '413705', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(148, 'premise', '120', 'road', 'area', 'village', 'taluka', 'district', 'MAHARASHTRA', '440009', '2020-12-06 22:36:31', '2020-12-06 22:36:31'),
(149, 'Goluk', '9i', 'Tiber', 'Pune', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '402021', '2020-12-07 00:13:38', '2020-12-07 00:13:38'),
(150, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '455002', '2020-12-07 00:13:38', '2020-12-07 00:13:38'),
(151, 'Goluk', '9i', 'Tiber', 'Pune', 'Pune', 'Rahuri', 'AHmadnagar', 'Maharashtra', '402021', '2020-12-07 00:14:01', '2020-12-07 00:14:01'),
(152, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '455002', '2020-12-07 00:14:01', '2020-12-07 00:14:01'),
(153, 'Goluk', '9i', 'Tiber', 'Market', 'Pune', 'Rahuri', 'AHmadnagar', 'Arunachal Pradesh', '411007', '2020-12-07 00:19:36', '2020-12-07 00:19:36'),
(154, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '455002', '2020-12-07 00:19:36', '2020-12-07 00:19:36'),
(155, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '411002', '2020-12-07 00:24:28', '2020-12-07 00:24:28'),
(156, 'premise', '148', 'road', 'area', 'village', 'taluka', 'dsds', 'MAHARASHTRA', 'pincode', '2020-12-07 00:47:56', '2020-12-07 00:47:56'),
(157, 'premise', '124', 'road', 'area', 'village', 'taluka', 'district', 'MAHARASHTRA', 'pincode', '2020-12-07 00:51:43', '2020-12-07 00:51:43'),
(158, 'zarekahti', '01', 'KARABI SAMRAAT TROPICANO', 'zarekathi', 'zarekathi', 'san', 'anagar', 'MAHARASHTRA', '422001', '2020-12-07 01:50:26', '2020-12-07 01:50:26'),
(160, 'zarekahti', '01', 'KARABI SAMRAAT TROPICANO', 'zarekathi', 'zarekathi', 'san', 'anagar', 'MAHARASHTRA', '422001', '2020-12-07 01:53:25', '2020-12-07 01:53:25'),
(161, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '411002', '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(162, '', '122', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '40009', '2020-12-07 19:17:32', '2020-12-07 19:17:32'),
(163, 'premise', '123', 'road', 'area', 'village', 'taluka', 'district', 'MAHARASHTRA', '440009', '2020-12-07 19:17:33', '2020-12-07 19:17:33'),
(164, 'premise', '148', 'road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-12-07 19:27:36', '2020-12-07 19:27:36'),
(165, 'kdk', '148', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'district', 'MAHARASHTRA', '440009', '2020-12-07 20:06:39', '2020-12-07 20:06:39'),
(166, 'premise', '148', 'road', 'nandanvan', 'village', 'taluka', 'district', 'MAHARASHTRA', '440009', '2020-12-07 20:09:57', '2020-12-07 20:09:57'),
(167, 'premise', '120', 'road', 'area', 'village', 'taluka', 'district', 'MAHARASHTRA', '440009', '2020-12-07 20:31:25', '2020-12-07 20:31:25'),
(168, 'premise', '120', 'road', 'area', 'village', 'taluka', 'district', 'mh', '440009', '2020-12-07 20:41:14', '2020-12-07 20:41:14'),
(169, 'zarekahti', '01', 'KARABI SAMRAAT TROPICANO', 'zarekathi', 'zarekathi', 'san', 'nashik', 'MAHARASHTRA', '422013', '2020-12-08 09:22:34', '2020-12-08 09:22:34'),
(170, 'zarekahti', '01', 'KARABI SAMRAAT TROPICANO', 'zarekathi', 'zarekathi', 'san', 'anagar', 'MAHARASHTRA', '422001', '2020-12-08 09:28:01', '2020-12-08 09:28:01'),
(171, 'zarekahti', '01', 'KARABI SAMRAAT TROPICANO', 'zarekathi', 'zarekathi', 'san', 'anagar', 'MAHARASHTRA', '422001', '2020-12-08 09:34:04', '2020-12-08 09:34:04'),
(172, 'zarekahti', '01', 'KARABI SAMRAAT TROPICANO', 'zarekathi', 'zarekathi', 'san', 'nandurbar', 'Maharshtra', '425432', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(173, 'kdk', '120', 'road', 'nandanvan', 'village', 'taluka', 'district', 'MAHARASHTRA', '440009', '2020-12-11 11:02:35', '2020-12-11 11:02:35'),
(174, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '40009', '2020-12-11 11:02:35', '2020-12-11 11:02:35'),
(175, 'premise', '120', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'MAHARASHTRA', '440009', '2020-12-11 11:19:11', '2020-12-11 11:19:11'),
(176, 'kdk', '122', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '40009', '2020-12-11 11:19:12', '2020-12-11 11:19:12'),
(177, 'premise', '120', 'road', 'area', 'village', 'taluka', 'district', 'Maharashtra', '440009', '2020-12-11 11:44:44', '2020-12-11 11:44:44'),
(178, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '40009', '2020-12-11 11:44:45', '2020-12-11 11:44:45'),
(179, 'Premise ', '128', 'umred road', 'nandanvan', '', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-18 09:30:10', '2020-12-18 09:30:10'),
(180, 'kdk', '123', 'umred road', 'nandanvan', '', '', '', 'Maharashtra', '440009', '2020-12-18 09:30:11', '2020-12-18 09:30:11'),
(181, 'Premise ', '128', 'umred road', 'asdasd', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-18 09:37:45', '2020-12-18 09:37:45'),
(182, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-18 09:37:46', '2020-12-18 09:37:46'),
(183, 'Premise ', '128', 'umred road', 'asdasd', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-21 21:50:15', '2020-12-21 21:50:15'),
(184, 'kdk', '123', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-21 21:50:15', '2020-12-21 21:50:15'),
(185, 'Premise ', '', '128', 'nandanvan', '', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-22 07:58:59', '2020-12-22 07:58:59'),
(186, 'Premise ', '128', 'asdasd', 'umred road', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-24 09:12:03', '2020-12-24 09:12:03'),
(187, 'Gokul Colony', '12', 'Police station', 'Pune', 'RAHURI', 'RAHURI', 'RAHURI', 'MAHARASHTRA', '413705', '2020-12-25 08:59:40', '2020-12-25 08:59:40'),
(188, 'Gokul Colony', '123', 'Rahuri', 'Rahuri', 'Rahuri', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '411005', '2020-12-25 09:08:11', '2020-12-25 09:08:11'),
(189, '', '', '', '', '', '', '', '', '', '2020-12-25 10:02:33', '2020-12-25 10:02:33'),
(190, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2020-12-25 10:03:40', '2020-12-25 10:03:40'),
(191, 'Gokul Colony', '', 'Police station', 'Pune', 'Pune', 'Pune', 'Pune', 'Maharashtra', '455014', '2020-12-25 10:40:48', '2020-12-25 10:40:48'),
(192, 'Premise ', '128', 'umred road', 'sadsad', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2021-01-02 23:18:07', '2021-01-02 23:18:07'),
(193, 'Premise ', '128', 'umred road', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2021-01-02 23:21:13', '2021-01-02 23:21:13'),
(194, 'Gokul Dagad', '144', 'Police Station', 'Rahuri', 'Pune', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '413705', '2021-01-02 23:31:11', '2021-01-02 23:31:11'),
(195, 'Pune', '121', 'Rahuri', 'Pune', 'Pune', 'Pune', 'Ahmadnagar', 'Maharashtra', '411002', '2021-01-02 23:31:12', '2021-01-02 23:31:12'),
(200, 'Gokul Dagad', '144', 'Police Station', 'Rahuri', 'Pune', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '413705', '2021-01-02 23:39:53', '2021-01-02 23:39:53'),
(201, 'Pune', '121', 'Rahuri', 'Pune', 'Pune', 'Pune', 'Ahmadnagar', 'Maharashtra', '411002', '2021-01-02 23:39:53', '2021-01-02 23:39:53'),
(202, 'Gokul Dagad', '144', 'Police Station', 'Rahuri', 'Pune', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '413705', '2021-01-02 23:41:55', '2021-01-02 23:41:55'),
(203, 'Pune', '121', 'Rahuri', 'Pune', 'Pune', 'Pune', 'Ahmadnagar', 'Maharashtra', '411002', '2021-01-02 23:41:56', '2021-01-02 23:41:56'),
(204, 'Gokul Dagad', '144', 'Police Station', 'Rahuri', 'Pune', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '413705', '2021-01-03 08:51:47', '2021-01-03 08:51:47'),
(205, 'Pune', '121', 'Rahuri', 'Pune', 'Pune', 'Pune', 'Ahmadnagar', 'Maharashtra', '411002', '2021-01-03 08:51:47', '2021-01-03 08:51:47'),
(206, 'Gokul Dagad', '144', 'Police Station', 'Rahuri', 'Pune', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '413705', '2021-01-03 08:56:22', '2021-01-03 08:56:22'),
(207, 'Pune', '121', 'Rahuri', 'Pune', 'Pune', 'Pune', 'Ahmadnagar', 'Maharashtra', '411002', '2021-01-03 08:56:23', '2021-01-03 08:56:23'),
(208, 'Gokul Dagad', '144', 'Police Station', 'Rahuri', 'Pune', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '413705', '2021-01-03 08:57:08', '2021-01-03 08:57:08'),
(209, 'Pune', '121', 'Rahuri', 'Pune', 'Pune', 'Pune', 'Ahmadnagar', 'Maharashtra', '411002', '2021-01-03 08:57:08', '2021-01-03 08:57:08'),
(210, 'premise', '120', 'road', 'nandanvan', 'village', 'taluka', 'district', 'Maharashtra', '440009', '2021-01-03 10:40:33', '2021-01-03 10:40:33'),
(211, 'kdk', '123', 'umred', '', '', '', '', '', '', '2021-01-03 10:40:33', '2021-01-03 10:40:33'),
(212, 'premise', '120', 'road', 'area', 'village', 'taluka', 'district', 'Maharashtra', '440009', '2021-01-03 10:43:38', '2021-01-03 10:43:38'),
(213, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '40009', '2021-01-03 10:43:38', '2021-01-03 10:43:38'),
(214, 'Gokul Dagad', '144', 'Police Station', 'Rahuri', 'Pune', 'Rahuri', 'Ahmadnagar', 'Maharashtra', '413705', '2021-01-05 09:53:46', '2021-01-05 09:53:46'),
(215, 'Pune', '121', 'Rahuri', 'Pune', 'Pune', 'Pune', 'Ahmadnagar', 'Maharashtra', '411002', '2021-01-05 09:53:46', '2021-01-05 09:53:46'),
(217, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '402021', '2021-01-05 10:53:22', '2021-01-05 10:53:22'),
(218, 'Gokul Colony', '12', 'Police station', 'Pune', 'Pune', 'Pune', 'NAGPUR', 'Maharashtra', '402021', '2021-01-05 10:54:22', '2021-01-05 10:54:22'),
(219, 'premise', '120', 'road', 'area', 'village', 'taluka', 'district', 'Maharashtra', '440009', '2021-01-22 09:10:11', '2021-01-22 09:10:11'),
(220, 'premise', '120', 'umred', 'area', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440009', '2021-01-22 09:26:23', '2021-01-22 09:26:23'),
(221, 'Gokul colony', '458', 'Police station', 'Rahuri', 'Rahuri', 'Rahuri', 'Ahmadnagar', 'Maharashtar', '413705', '2021-01-22 09:44:15', '2021-01-22 09:44:15'),
(222, 'sdbjfsdhkhdsf', 'jh', 'kjh', 'jh', 'kjhhjh', 'hjkjkhh', 'hjh', 'hjkhjk', 'jkhjhk', '2021-01-22 09:46:16', '2021-01-22 09:46:16'),
(223, 'sdbjfsdhkhdsf', 'yyy', 'yy', 'yy', 'yy', 'yyy', 'y', 'Maharashtra', '440009', '2021-01-22 10:16:40', '2021-01-22 10:16:40'),
(224, 'pradyumn', '12', 'ahah', 'jjj', 'jjghh', 'hgfg', 'hgfdf', 'Maharashtra', '440009', '2021-01-22 10:19:47', '2021-01-22 10:19:47'),
(225, 'pradyumn', '12', 'nagbhid road', 'bus stop', 'talodhi', 'nagbhid', 'chandrapur', 'maharashtra', '441221', '2021-01-22 22:58:11', '2021-01-22 22:58:11'),
(226, 'pradyumn', '100', 'nagbhid road', 'bus stop', 'Nagpur', 'Nagpur', 'Nagpur', 'Maharashtra', '440009', '2021-01-22 23:27:30', '2021-01-22 23:27:30'),
(227, 'aditya', '101', 'chada road', 'ram mandir', 'sawner', 'sawner', 'nagpur', 'maharashtra', '440009', '2021-01-23 01:59:58', '2021-01-23 01:59:58'),
(228, 'aditya', '102', 'nagpur road', 'jaitala', 'umred', 'umred', 'nagpur', 'Maharashtra', '440009', '2021-01-23 03:09:29', '2021-01-23 03:09:29'),
(229, 'pradyumn', '103', 'chanda road', 'ram mandir', 'talodhi', 'nagbhid', 'chandrapur', 'Maharashtra', '440009', '2021-01-23 03:15:07', '2021-01-23 03:15:07'),
(230, 'pradum', '105', 'shivaji road', 'nknknk', 'mkmkmk', 'mkmkmk', 'jkjkjk', 'Maharashtra', '440009', '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(231, 'pradyumn', '104', 'nagbhid road', 'jaitala', 'talodhi', 'nagbhid', 'chandrapur', 'Maharashtra', '440009', '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(232, 'pradyumn', '109', 'bramhaouri road', 'walmik mandir', 'kharkada', 'bramhapuri', 'chandrapur', 'Maharashtra', '440009', '2021-01-23 03:38:11', '2021-01-23 03:38:11'),
(233, 'pradyumn', '', '', '', '', '', '', '', '', '2021-01-23 04:18:33', '2021-01-23 04:18:33'),
(234, '', '', '', '', '', '', '', '', '', '2021-01-23 04:18:33', '2021-01-23 04:18:33'),
(239, 'pradyumn', '101', 'nagbhid road', 'jaitala', 'talodhi', 'nagbhid', 'chandrapur', 'Maharashtra', '440009', '2021-01-23 04:49:29', '2021-01-23 04:49:29'),
(240, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-02-02 03:22:46', '2021-02-02 03:22:46'),
(241, 'new nandanvan', '12', 'kk', 'nnnnn', 'fhfhfh', 'gdfgfg', 'mnm,n', 'gjgjg', '440009', '2021-02-02 03:22:46', '2021-02-02 03:22:46'),
(242, '', '', '', '', '', '', '', '', '', '2021-02-02 04:26:20', '2021-02-02 04:26:20'),
(243, '', '', '', '', '', '', '', '', '', '2021-02-02 04:26:21', '2021-02-02 04:26:21'),
(244, '', '', '', '', '', '', '', '', '', '2021-02-02 05:44:41', '2021-02-02 05:44:41'),
(245, '', '', '', '', '', '', '', '', '', '2021-02-02 05:44:41', '2021-02-02 05:44:41'),
(246, '', '', '', '', '', '', '', '', '', '2021-02-03 01:57:04', '2021-02-03 01:57:04'),
(247, '', '', '', '', '', '', '', '', '', '2021-02-03 01:57:04', '2021-02-03 01:57:04'),
(248, '', '', '', '', '', '', '', '', '', '2021-02-03 04:08:34', '2021-02-03 04:08:34'),
(249, '', '', '', '', '', '', '', '', '', '2021-02-03 04:08:34', '2021-02-03 04:08:34'),
(250, '', '', '', '', '', '', '', '', '', '2021-02-03 04:12:20', '2021-02-03 04:12:20'),
(251, '', '', '', '', '', '', '', '', '', '2021-02-03 04:12:20', '2021-02-03 04:12:20'),
(252, '', '', '', '', '', '', '', '', '', '2021-02-03 04:16:09', '2021-02-03 04:16:09'),
(253, '', '', '', '', '', '', '', '', '', '2021-02-03 04:16:09', '2021-02-03 04:16:09'),
(258, '', '', '', '', '', '', '', '', '', '2021-02-03 23:27:13', '2021-02-03 23:27:13'),
(259, '', '', '', '', '', '', '', '', '', '2021-02-03 23:27:13', '2021-02-03 23:27:13'),
(262, '', '', '', '', '', '', '', '', '', '2021-02-03 23:54:03', '2021-02-03 23:54:03'),
(263, '', '', '', '', '', '', '', '', '', '2021-02-03 23:54:04', '2021-02-03 23:54:04'),
(270, '', '', '', '', '', '', '', '', '', '2021-02-04 00:13:35', '2021-02-04 00:13:35'),
(271, '', '', '', '', '', '', '', '', '', '2021-02-04 00:13:35', '2021-02-04 00:13:35'),
(272, 'Gokul colony', '458', '', '', '', '', '', '', '', '2021-02-04 06:10:51', '2021-02-04 06:10:51'),
(273, '', '', '', '', '', '', '', '', '', '2021-02-04 06:10:51', '2021-02-04 06:10:51'),
(276, 'Gokul colony', '458', 'Police station', '', '', '', '', '', '', '2021-02-04 06:43:04', '2021-02-04 06:43:04'),
(277, '', '', '', 'Pune', '', 'Rahuri', '', '', '', '2021-02-04 06:43:04', '2021-02-04 06:43:04'),
(280, 'Gokul colony', '458', 'Police station', '', '', '', '', '', '', '2021-02-04 06:45:28', '2021-02-04 06:45:28'),
(281, '', '', '', 'Pune', '', 'Rahuri', '', '', '', '2021-02-04 06:45:28', '2021-02-04 06:45:28'),
(282, 'Gokul colony', '458', 'Police station', '', '', '', '', '', '', '2021-02-04 06:46:04', '2021-02-04 06:46:04'),
(283, '', '', '', 'Pune', '', 'Rahuri', '', '', '', '2021-02-04 06:46:05', '2021-02-04 06:46:05'),
(288, 'Gokul colony', '458', 'Police station', '', '', '', '', '', '', '2021-02-04 07:01:57', '2021-02-04 07:01:57'),
(289, '', '', '', 'Pune', '', 'Rahuri', '', '', '', '2021-02-04 07:01:57', '2021-02-04 07:01:57'),
(292, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-02-05 10:05:16', '2021-02-05 10:05:16'),
(293, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '', '2021-02-05 23:56:47', '2021-02-05 23:56:47'),
(294, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-02-06 01:30:36', '2021-02-06 01:30:36'),
(295, 'pradyumn', '1555', 'nagbhid road', 'ram mandir', 'umred', 'umred', 'nagpur', 'Maharashtra', '440009', '2021-04-14 23:58:27', '2021-04-14 23:58:27'),
(296, 'premise', '148', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-04-17 00:35:45', '2021-04-17 00:35:45'),
(297, 'rameshwari', '123', 'jaitala', 'pipla', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-04-17 01:37:38', '2021-04-17 01:37:38'),
(298, '', '', '', '', '', '', '', '', '', '2021-04-18 02:23:40', '2021-04-18 02:23:40'),
(299, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '440012', '2021-04-18 02:47:01', '2021-04-18 02:47:01'),
(300, 'adsd', '45', 'ccdc', 'asd', 'asdsd', 'adad', 'sads', 'sad', 'scs', '2021-05-16 23:19:48', '2021-05-16 23:19:48'),
(301, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '40009', '2021-05-21 05:00:55', '2021-05-21 05:00:55'),
(302, 'Washington', '122', 'Gola Barud', 'KOTA', 'GUJRAT', 'VADODARA', 'SURAT', 'BARABANKI', '5353736', '2021-05-23 04:13:02', '2021-05-23 04:13:02'),
(303, 'GUrgaon', '123', 'VADODARA', 'CAPETOWN', 'GURDWARA', 'SURAT', 'GUJRAT', 'GUJRAT', '545678', '2021-05-23 04:13:02', '2021-05-23 04:13:02'),
(304, 'premise', '45', 'ccdc', 'asd', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-05-23 04:41:20', '2021-05-23 04:41:20'),
(305, 'hvjhhvvh', '52', 'hvgvgh', 'vhhjvh', 'hvvhv', 'hjhvjhvj', 'jvhhvvh', 'hghghjhj', '789566', '2021-05-23 04:41:20', '2021-05-23 04:41:20'),
(310, 'cjcvcnvn', 'vjhvxhnvnh', 'hvhjvchj', 'avcjxvcm', 'hvhjvchj', 'hjbchj', 'NAGPUR', 'avhjdvcjh', 'dvhjcv', '2021-05-23 22:45:30', '2021-05-23 22:45:30'),
(311, 'GUrgaon', '968', 'VADODARA', 'Market', 'GURDWARA', 'Rahuri', 'AHmadnagar', 'Maharashtra', '411002', '2021-05-23 22:45:30', '2021-05-23 22:45:30'),
(312, 'kdk', '123', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'Maharashtra', '40009', '2021-05-24 05:08:36', '2021-05-24 05:08:36'),
(313, 'Gokul Colony', '12', 'Police station', 'Pune', 'GUJRAT', 'VADODARA', 'Pune', 'Maharashtra', '413705', '2021-05-24 21:08:56', '2021-05-24 21:08:56'),
(314, 'Washington', 'vjhvxhnvnh', 'Police station', 'KOTA', 'GUJRAT', 'VADODARA', 'NAGPUR', 'Maharashtra', '455014', '2021-05-24 21:25:39', '2021-05-24 21:25:39'),
(315, 'Washington', 'vjhvxhnvnh', 'Police station', 'KOTA', 'GUJRAT', 'VADODARA', 'NAGPUR', 'Maharashtra', '455014', '2021-05-24 21:26:12', '2021-05-24 21:26:12'),
(318, 'premise', '45', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-05-25 04:14:43', '2021-05-25 04:14:43'),
(319, 'premise', '45', 'umred', 'nandanvan', 'nagpur', 'nagpur', 'nagpur', 'maharashtra', '440009', '2021-05-25 04:33:53', '2021-05-25 04:33:53');

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
  `servicename` varchar(255) NOT NULL,
  `charges` double(11,2) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_charges`
--

INSERT INTO `service_charges` (`chargesid`, `servicename`, `charges`, `createdat`, `updatedat`) VALUES
(1, 'PF WITHDRWAL', 500.00, '2020-11-27 10:16:38', '2020-11-30 09:51:35'),
(2, 'DIGITAL SIGNATURE', 500.00, '2020-11-27 10:16:38', '2020-11-27 10:16:38'),
(3, 'Pan Card', 110.00, '2020-11-27 10:16:38', '2020-11-29 02:35:37'),
(4, 'Shop Act', 1.00, '2020-11-28 06:44:59', '2020-12-02 05:24:36'),
(5, 'Udyog Aadhar', 199.00, '2020-11-28 10:19:21', '2020-11-30 09:52:02'),
(6, 'Income', 1000.00, '2020-11-28 22:27:03', '2020-11-30 09:52:15'),
(7, 'GST Registration', 799.00, '2020-11-28 22:27:03', '2020-12-13 06:26:39'),
(8, 'GST Nil Return', 500.00, '2020-12-13 06:28:46', '2020-12-13 06:28:46'),
(9, 'GST Return', 750.00, '2020-12-13 06:28:46', '2020-12-13 06:28:46'),
(10, 'GST Annual Return', 2000.00, '2020-12-13 06:29:23', '2020-12-13 06:29:23'),
(11, 'CA Certificate', 100.00, '2021-01-05 11:08:50', '2021-01-05 11:08:50'),
(12, 'Tax Invoice', 500.00, '2021-02-05 09:15:39', '2021-02-05 09:15:39'),
(13, 'E-way Bill', 200.00, '2021-04-20 03:35:19', '2021-04-20 03:35:19'),
(14, 'Food Licence', 150.00, '2021-05-01 05:08:42', '2021-05-02 21:51:25'),
(15, 'Partnership Deed', 150.00, '2021-05-20 04:20:31', '2021-05-20 04:20:31'),
(16, 'Company Registration ', 100.00, '2021-05-24 02:58:08', '2021-05-24 02:58:08');

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
  `userid` int(10) UNSIGNED NOT NULL,
  `pid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED NOT NULL,
  `sid` int(10) UNSIGNED NOT NULL,
  `natureofbuss` varchar(255) NOT NULL,
  `busstype` varchar(255) NOT NULL,
  `men` int(11) DEFAULT NULL,
  `women` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT '1',
  `remark` varchar(255) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopact`
--

INSERT INTO `shopact` (`shopactid`, `userid`, `pid`, `rid`, `sid`, `natureofbuss`, `busstype`, `men`, `women`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, 3, 15, 23, 4, 'nature of business', '2', 1, NULL, '1', NULL, '2020-11-29 03:08:42', '2020-12-07 00:16:00'),
(2, 3, 44, 82, 34, 'nature of business', '2', NULL, NULL, '1', NULL, '2020-11-28 13:02:59', '2020-12-07 00:16:00'),
(3, 3, 45, 84, 35, 'nature of business', '2', NULL, NULL, '3', 'Rejected by admin', '2020-11-28 20:28:07', '2020-12-07 00:16:00'),
(4, 3, 46, 86, 36, 'dffs', '2', NULL, NULL, '4', 'completed by admin', '2020-11-28 20:27:17', '2020-12-07 00:16:00'),
(5, 3, 47, 88, 37, 'it', '4', 5, 5, '2', 'hold by admin', '2020-11-29 03:08:56', '2020-12-07 00:16:00'),
(6, 3, 48, 90, 38, 'nature of business', '2', 10, 5, '2', 'please mail pending doc mail ID kiranvyavhare277@gmail.com', '2020-11-29 17:08:02', '2020-12-07 00:16:00'),
(7, 3, 54, 101, 43, 'Nature of Business', '2', 4, 3, '1', NULL, '2020-11-29 08:07:28', '2020-12-07 00:16:00'),
(8, 3, 57, 105, 45, 'ONLINE WORK', '1', 2, 3, '1', NULL, '2020-11-29 17:28:25', '2020-12-07 00:16:00'),
(9, 3, 58, 107, 46, 'tytyy', '1', 2, 1, '1', NULL, '2020-11-30 02:50:49', '2020-12-07 00:16:00'),
(10, 3, 62, 113, 50, 'NA', '2', 1, 2, '1', NULL, '2020-12-02 00:29:20', '2020-12-07 00:16:00'),
(11, 3, 63, 115, 51, 'private', '2', 2, 3, '1', NULL, '2020-12-02 05:28:12', '2020-12-07 00:16:00'),
(12, 3, 64, 117, 52, 'vikas', '2', 5, 2, '1', NULL, '2020-12-02 05:34:04', '2020-12-07 00:16:00'),
(13, 3, 80, 134, 65, 'rgg', '1', 2, 2, '1', NULL, '2020-12-02 14:11:09', '2020-12-07 00:16:00'),
(14, 3, 85, 140, 69, 'vikas', '2', 5, 4, '1', NULL, '2020-12-03 09:01:24', '2020-12-07 00:16:00'),
(15, 3, 86, 142, 70, 'vikas', '2', 5, 4, '1', NULL, '2020-12-03 09:01:56', '2020-12-07 00:16:00'),
(16, 3, 87, 144, 71, 'private limited', '2', 2, 2, '1', NULL, '2020-12-03 09:08:00', '2020-12-07 00:16:00'),
(17, 3, 88, 146, 72, 'private limited', '2', 4, 4, '1', NULL, '2020-12-03 23:07:43', '2020-12-07 00:16:00'),
(18, 3, 91, 150, 73, 'Private', '2', 2, 4, '1', NULL, '2020-12-07 00:13:38', '2020-12-07 00:16:00'),
(19, 3, 92, 152, 74, 'Private', '2', 2, 4, '1', NULL, '2020-12-07 00:14:01', '2020-12-07 00:16:00'),
(20, 3, 93, 154, 75, 'private', '1', 5, 5, '1', NULL, '2020-12-07 00:19:36', '2020-12-07 00:19:36'),
(21, 3, 101, 163, 78, 'company', '1', 2, 1, '1', NULL, '2020-12-07 19:17:34', '2020-12-07 19:17:34'),
(22, 3, 152, 231, 104, 'kirana', '2', 10, 20, '3', 'rejected by prady', '2021-01-23 03:27:05', '2021-01-23 03:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `shopact_docs`
--

CREATE TABLE `shopact_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(100) DEFAULT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `shid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopact_docs`
--

INSERT INTO `shopact_docs` (`docid`, `extension`, `userid`, `shid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'jpg', 3, 5, 'Aadhar', '2020-11-28 12:38:48', '2020-11-28 12:38:48'),
(2, 'jpg', 3, 5, 'PAN', '2020-11-28 12:38:49', '2020-11-28 12:38:49'),
(3, 'jpg', 3, 5, 'Passport Photo', '2020-11-28 12:38:50', '2020-11-28 12:38:50'),
(4, 'jpg', 3, 5, 'Signature', '2020-11-28 12:38:50', '2020-11-28 12:38:50'),
(5, 'jpg', 3, 5, 'Shop Photo', '2020-11-28 12:38:51', '2020-11-28 12:38:51'),
(6, 'jpg', 3, 5, 'Declaration Form', '2020-11-28 12:38:51', '2020-11-28 12:38:51'),
(7, 'jpg', 3, 5, 'Other Documents', '2020-11-28 12:38:52', '2020-11-28 12:38:52'),
(8, 'jpg', 3, 6, 'Aadhar', '2020-11-28 23:06:28', '2020-11-28 23:06:28'),
(9, 'jpg', 3, 6, 'PAN', '2020-11-28 23:06:28', '2020-11-28 23:06:28'),
(10, 'jpg', 3, 6, 'Passport Photo', '2020-11-28 23:06:29', '2020-11-28 23:06:29'),
(11, 'jpg', 3, 6, 'Signature', '2020-11-28 23:06:30', '2020-11-28 23:06:30'),
(12, 'jpg', 3, 6, 'Shop Photo', '2020-11-28 23:06:31', '2020-11-28 23:06:31'),
(13, 'jpg', 3, 6, 'Declaration Form', '2020-11-28 23:06:32', '2020-11-28 23:06:32'),
(14, 'jpg', 3, 6, 'Other Documents', '2020-11-28 23:06:34', '2020-11-28 23:06:34'),
(15, 'jpg', 3, 7, 'Aadhar', '2020-11-29 08:07:29', '2020-11-29 08:07:29'),
(16, 'jpg', 3, 7, 'PAN', '2020-11-29 08:07:30', '2020-11-29 08:07:30'),
(17, 'jpg', 3, 7, 'Passport Photo', '2020-11-29 08:07:30', '2020-11-29 08:07:30'),
(18, 'jpg', 3, 7, 'Signature', '2020-11-29 08:07:30', '2020-11-29 08:07:30'),
(19, 'jpg', 3, 7, 'Shop Photo', '2020-11-29 08:07:31', '2020-11-29 08:07:31'),
(20, 'jpg', 3, 7, 'Declaration Form', '2020-11-29 08:07:31', '2020-11-29 08:07:31'),
(21, 'jpg', 3, 7, 'Other Documents', '2020-11-29 08:07:31', '2020-11-29 08:07:31'),
(22, 'jpeg', 3, 8, 'Aadhar', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(23, 'JPG', 3, 8, 'PAN', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(24, 'JPG', 3, 8, 'Passport Photo', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(25, 'JPG', 3, 8, 'Signature', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(26, 'JPG', 3, 8, 'Shop Photo', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(27, 'JPG', 3, 8, 'Declaration Form', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(28, 'pdf', 3, 8, 'Other Documents', '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(29, 'JPG', 3, 9, 'Aadhar', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(30, 'jpeg', 3, 9, 'PAN', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(31, 'JPG', 3, 9, 'Passport Photo', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(32, 'jpeg', 3, 9, 'Signature', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(33, 'JPG', 3, 9, 'Shop Photo', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(34, 'jpeg', 3, 9, 'Declaration Form', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(35, 'JPG', 3, 9, 'Other Documents', '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(36, 'zip', 3, 10, 'Aadhar', '2020-12-02 00:29:21', '2020-12-02 00:29:21'),
(37, 'pdf', 3, 10, 'PAN', '2020-12-02 00:29:21', '2020-12-02 00:29:21'),
(38, 'sql', 3, 10, 'Passport Photo', '2020-12-02 00:29:21', '2020-12-02 00:29:21'),
(39, 'jfif', 3, 10, 'Signature', '2020-12-02 00:29:21', '2020-12-02 00:29:21'),
(40, 'pdf', 3, 10, 'Shop Photo', '2020-12-02 00:29:21', '2020-12-02 00:29:21'),
(41, 'zip', 3, 10, 'Declaration Form', '2020-12-02 00:29:21', '2020-12-02 00:29:21'),
(42, 'zip', 3, 10, 'Other Documents', '2020-12-02 00:29:21', '2020-12-02 00:29:21'),
(43, 'pdf', 3, 11, 'Aadhar', '2020-12-02 05:28:15', '2020-12-02 05:28:15'),
(44, 'pdf', 3, 11, 'PAN', '2020-12-02 05:28:15', '2020-12-02 05:28:15'),
(45, 'sql', 3, 11, 'Passport Photo', '2020-12-02 05:28:16', '2020-12-02 05:28:16'),
(46, 'sql', 3, 11, 'Signature', '2020-12-02 05:28:16', '2020-12-02 05:28:16'),
(47, 'jfif', 3, 11, 'Shop Photo', '2020-12-02 05:28:17', '2020-12-02 05:28:17'),
(48, 'sql', 3, 11, 'Declaration Form', '2020-12-02 05:28:18', '2020-12-02 05:28:18'),
(49, 'sql', 3, 11, 'Other Documents', '2020-12-02 05:28:19', '2020-12-02 05:28:19'),
(50, 'odt', 3, 12, 'Aadhar', '2020-12-02 05:34:05', '2020-12-02 05:34:05'),
(51, 'jfif', 3, 12, 'PAN', '2020-12-02 05:34:05', '2020-12-02 05:34:05'),
(52, 'sql', 3, 12, 'Passport Photo', '2020-12-02 05:34:05', '2020-12-02 05:34:05'),
(53, 'html', 3, 12, 'Signature', '2020-12-02 05:34:05', '2020-12-02 05:34:05'),
(54, 'jpeg', 3, 12, 'Shop Photo', '2020-12-02 05:34:05', '2020-12-02 05:34:05'),
(55, 'jpeg', 3, 12, 'Declaration Form', '2020-12-02 05:34:06', '2020-12-02 05:34:06'),
(56, 'jpeg', 3, 12, 'Other Documents', '2020-12-02 05:34:06', '2020-12-02 05:34:06'),
(57, 'txt', 3, 14, 'Aadhar', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(58, 'txt', 3, 14, 'PAN', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(59, 'text', 3, 14, 'Passport Photo', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(60, 'txt', 3, 14, 'Signature', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(61, 'txt', 3, 14, 'Shop Photo', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(62, 'txt', 3, 14, 'Declaration Form', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(63, 'txt', 3, 14, 'Other Documents', '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(64, 'txt', 3, 15, 'Aadhar', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(65, 'txt', 3, 15, 'PAN', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(66, 'text', 3, 15, 'Passport Photo', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(67, 'txt', 3, 15, 'Signature', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(68, 'txt', 3, 15, 'Shop Photo', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(69, 'txt', 3, 15, 'Declaration Form', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(70, 'txt', 3, 15, 'Other Documents', '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(71, 'txt', 3, 16, 'Aadhar', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(72, 'txt', 3, 16, 'PAN', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(73, 'txt', 3, 16, 'Passport Photo', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(74, 'txt', 3, 16, 'Signature', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(75, 'txt', 3, 16, 'Shop Photo', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(76, 'txt', 3, 16, 'Declaration Form', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(77, 'txt', 3, 16, 'Other Documents', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(78, 'txt', 3, 17, 'Aadhar', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(79, 'sql', 3, 17, 'PAN', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(80, 'txt', 3, 17, 'Passport Photo', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(81, 'txt', 3, 17, 'Signature', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(82, 'txt', 3, 17, 'Shop Photo', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(83, 'txt', 3, 17, 'Declaration Form', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(84, 'txt', 3, 17, 'Other Documents', '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(85, 'jpeg', 3, 20, 'Aadhar', '2020-12-07 00:19:36', '2020-12-07 00:19:36'),
(86, 'jfif', 3, 20, 'Declaration Form', '2020-12-07 00:19:36', '2020-12-07 00:19:36'),
(87, 'jpg', 3, 21, 'Aadhar', '2020-12-07 19:17:35', '2020-12-07 19:17:35'),
(88, 'jpg', 3, 21, 'PAN', '2020-12-07 19:17:35', '2020-12-07 19:17:35'),
(89, 'jpg', 3, 21, 'Passport Photo', '2020-12-07 19:17:36', '2020-12-07 19:17:36'),
(90, 'jpg', 3, 21, 'Signature', '2020-12-07 19:17:36', '2020-12-07 19:17:36'),
(91, 'jpg', 3, 21, 'Shop Photo', '2020-12-07 19:17:37', '2020-12-07 19:17:37'),
(92, 'jpg', 3, 21, 'Declaration Form', '2020-12-07 19:17:37', '2020-12-07 19:17:37'),
(93, 'jpg', 3, 21, 'Other Documents', '2020-12-07 19:17:38', '2020-12-07 19:17:38'),
(94, 'png', 3, 22, 'PAN', '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(95, 'jpg', 3, 22, 'Passport Photo', '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(96, 'jpg', 3, 22, 'Declaration Form', '2021-01-23 03:27:05', '2021-01-23 03:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `shopact_partners`
--

CREATE TABLE `shopact_partners` (
  `shid` int(10) UNSIGNED NOT NULL,
  `shopactid` int(10) UNSIGNED NOT NULL,
  `partnerid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopact_partners`
--

INSERT INTO `shopact_partners` (`shid`, `shopactid`, `partnerid`, `createdat`) VALUES
(1, 3, 1, '2020-11-28 12:26:35'),
(2, 3, 2, '2020-11-28 12:26:41'),
(3, 5, 3, '2020-11-28 12:38:46'),
(4, 5, 4, '2020-11-28 12:38:47'),
(5, 5, 5, '2020-11-28 12:38:48'),
(6, 6, 6, '2020-11-28 23:06:25'),
(7, 6, 7, '2020-11-28 23:06:27'),
(8, 7, 8, '2020-11-29 08:07:28'),
(9, 7, 9, '2020-11-29 08:07:29'),
(10, 10, 14, '2020-12-02 00:29:20'),
(11, 11, 15, '2020-12-02 05:28:14'),
(12, 12, 16, '2020-12-02 05:34:05'),
(13, 14, 33, '2020-12-03 09:01:24'),
(14, 15, 34, '2020-12-03 09:01:56'),
(15, 16, 35, '2020-12-03 09:08:00'),
(16, 17, 36, '2020-12-03 23:07:43'),
(17, 22, 61, '2021-01-23 03:27:05'),
(18, 22, 62, '2021-01-23 03:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `shop_details`
--

CREATE TABLE `shop_details` (
  `sid` int(10) UNSIGNED NOT NULL,
  `rid` int(10) UNSIGNED DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `office_contact` varchar(15) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `office_mailid` varchar(255) DEFAULT NULL,
  `buss_start_date` date DEFAULT NULL,
  `gst_number` varchar(100) DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_details`
--

INSERT INTO `shop_details` (`sid`, `rid`, `shop_name`, `office_contact`, `office_address`, `office_mailid`, `buss_start_date`, `gst_number`, `createdat`, `updatedat`) VALUES
(1, 16, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-10', NULL, '2020-11-28 07:48:56', '2020-11-28 07:48:56'),
(2, 18, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-10', NULL, '2020-11-28 07:56:12', '2020-11-28 07:56:12'),
(3, 20, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-16', NULL, '2020-11-28 08:01:59', '2020-11-28 08:01:59'),
(4, 22, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-15', NULL, '2020-11-28 08:20:46', '2020-11-28 08:20:46'),
(5, 24, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-15', NULL, '2020-11-28 08:25:18', '2020-11-28 08:25:18'),
(6, 26, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-24', NULL, '2020-11-28 08:38:23', '2020-11-28 08:38:23'),
(7, 28, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-24', NULL, '2020-11-28 08:39:52', '2020-11-28 08:39:52'),
(8, 30, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-24', NULL, '2020-11-28 08:41:04', '2020-11-28 08:41:04'),
(9, 32, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-24', NULL, '2020-11-28 08:44:00', '2020-11-28 08:44:00'),
(10, 34, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-24', NULL, '2020-11-28 08:44:43', '2020-11-28 08:44:43'),
(11, 36, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-24', NULL, '2020-11-28 08:48:08', '2020-11-28 08:48:08'),
(12, 38, NULL, NULL, NULL, NULL, NULL, NULL, '2020-11-28 09:09:02', '2020-11-28 09:09:02'),
(13, 39, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-02-11', NULL, '2020-11-28 09:23:38', '2020-11-28 09:23:38'),
(14, 41, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-02-11', NULL, '2020-11-28 09:25:00', '2020-11-28 09:25:00'),
(15, 43, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-02-11', NULL, '2020-11-28 09:26:12', '2020-11-28 09:26:12'),
(16, 45, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-02-11', NULL, '2020-11-28 09:27:03', '2020-11-28 09:27:03'),
(17, 47, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-02-11', NULL, '2020-11-28 09:28:10', '2020-11-28 09:28:10'),
(18, 49, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-02-11', NULL, '2020-11-28 09:29:30', '2020-11-28 09:29:30'),
(19, 51, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-02-11', NULL, '2020-11-28 09:33:25', '2020-11-28 09:33:25'),
(20, 53, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-03-11', NULL, '2020-11-28 09:38:49', '2020-11-28 09:38:49'),
(21, 55, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-03-11', NULL, '2020-11-28 09:39:33', '2020-11-28 09:39:33'),
(22, 57, 'NA', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-03-11', NULL, '2020-11-28 09:41:42', '2020-11-28 09:41:42'),
(23, 59, 'XXOVEK', '09657613754', NULL, 'hulkt@avengers.com', '1988-03-02', NULL, '2020-11-28 09:45:47', '2020-11-28 09:45:47'),
(24, 61, 'asaas', '2345567', NULL, 'lalit@gmail.com', '2020-11-16', NULL, '2020-11-28 11:48:31', '2020-11-28 11:48:31'),
(25, 63, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-16', NULL, '2020-11-28 11:54:59', '2020-11-28 11:54:59'),
(26, 65, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-16', NULL, '2020-11-28 11:58:03', '2020-11-28 11:58:03'),
(27, 67, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-16', NULL, '2020-11-28 12:02:39', '2020-11-28 12:02:39'),
(28, 69, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-18', NULL, '2020-11-28 12:06:33', '2020-11-28 12:06:33'),
(29, 71, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-19', NULL, '2020-11-28 12:14:22', '2020-11-28 12:14:22'),
(30, 73, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-19', NULL, '2020-11-28 12:15:05', '2020-11-28 12:15:05'),
(31, 75, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-10', NULL, '2020-11-28 12:17:56', '2020-11-28 12:17:56'),
(32, 77, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-10', NULL, '2020-11-28 12:19:49', '2020-11-28 12:19:49'),
(33, 79, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-10', NULL, '2020-11-28 12:21:56', '2020-11-28 12:21:56'),
(34, 81, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-10', NULL, '2020-11-28 12:23:38', '2020-11-28 12:23:38'),
(35, 83, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-10', NULL, '2020-11-28 12:26:27', '2020-11-28 12:26:27'),
(36, 85, 'asaas', '2345567', NULL, 'lalit@gmail.com', '2020-11-16', NULL, '2020-11-28 12:30:06', '2020-11-28 12:30:06'),
(37, 87, 'mastersoft', '7896541230', NULL, 'support@gmail.com', '2020-11-01', NULL, '2020-11-28 12:38:43', '2020-11-28 12:38:43'),
(38, 89, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-11', NULL, '2020-11-28 23:06:20', '2020-11-28 23:06:20'),
(39, 91, 'xyz tek', '1478523698', NULL, 'support@gmail.com', '2020-11-03', NULL, '2020-11-29 06:05:47', '2020-11-29 06:05:47'),
(40, 93, 'xyzTechnosoft', '+918007015819', NULL, 'support@gmail.com', '2020-11-11', NULL, '2020-11-29 06:10:55', '2020-11-29 06:10:55'),
(41, 95, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-01', NULL, '2020-11-29 06:23:27', '2020-11-29 06:23:27'),
(42, 97, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-01', NULL, '2020-11-29 06:56:35', '2020-11-29 06:56:35'),
(43, 100, 'Ace Technosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-11-01', NULL, '2020-11-29 08:07:27', '2020-11-29 08:07:27'),
(44, NULL, 'Ace Technosoft', '+918007015819', NULL, 'support@gmail.com', '2020-11-01', NULL, '2020-11-29 08:32:24', '2020-11-29 08:32:24'),
(45, 104, 'T K INFOTECH', '8788329794', NULL, 'SALES@GMAIL.COM', '2020-12-06', NULL, '2020-11-29 17:28:25', '2020-11-29 17:28:25'),
(46, 106, 'T K INFOTECH', '8788329794', NULL, 'SALES@GMAIL.COM', '2020-11-10', NULL, '2020-11-30 02:50:49', '2020-11-30 02:50:49'),
(47, NULL, 'ace', '8007015819', NULL, 'support@gmail.com', '2020-11-29', NULL, '2020-12-01 11:41:14', '2020-12-01 11:41:14'),
(48, NULL, 'ace', '8007015819', NULL, 'support@gmail.com', '2020-11-29', NULL, '2020-12-01 11:43:46', '2020-12-01 11:43:46'),
(49, NULL, 'ace', '8007015819', NULL, 'support@gmail.com', '2020-11-29', NULL, '2020-12-01 11:45:29', '2020-12-01 11:45:29'),
(50, 112, 'XXOVEK', '09657613754', NULL, '', '0000-00-00', NULL, '2020-12-02 00:29:20', '2020-12-02 00:29:20'),
(51, 114, 'UP', '9657858585', NULL, 'Pune', '1998-12-12', NULL, '2020-12-02 05:28:09', '2020-12-02 05:28:09'),
(52, 116, 'UP', '9657858585', NULL, 'Pune', '1998-01-01', NULL, '2020-12-02 05:34:04', '2020-12-02 05:34:04'),
(53, NULL, 'ace', '7456982315', NULL, 'lalit@gmail.com', '2020-12-01', NULL, '2020-12-02 07:24:33', '2020-12-02 07:24:33'),
(54, NULL, 'xyzTechnosoft', '+918007015819', NULL, 'support@gmail.com', '2020-12-10', NULL, '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(55, NULL, 'XXOVEK', '09657613754', NULL, 'johnabrahm@gmail.com', '1998-03-11', NULL, '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(56, NULL, 'UP', '9657858585', NULL, 'Pune', '1998-01-01', NULL, '2020-12-02 12:09:52', '2020-12-02 12:09:52'),
(58, NULL, 'UP', '9657858585', NULL, 'Pune', '2020-12-10', NULL, '2020-12-02 12:22:09', '2020-12-02 12:22:09'),
(60, NULL, 'UP', '9657858585', NULL, 'Pune', '2020-12-10', NULL, '2020-12-02 12:24:29', '2020-12-02 12:24:29'),
(61, NULL, 'UP', '9657858585', NULL, 'Pune', '2020-12-31', NULL, '2020-12-02 12:27:40', '2020-12-02 12:27:40'),
(63, NULL, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-12-06', NULL, '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(65, 133, 'T K INFOTECH', '8788329794', NULL, 'SALES@GMAIL.COM', '2020-12-01', NULL, '2020-12-02 14:11:09', '2020-12-02 14:11:09'),
(66, NULL, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-12-06', NULL, '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(67, NULL, 'AMUL ICECREAM', '9874563210', NULL, 'ketan@got.com', '1478-01-10', NULL, '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(68, NULL, 'XXOVEK', '09657613754', NULL, 'johnabrahm@gmail.com', '1998-12-12', NULL, '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(69, 139, 'XXOVEK', '09657613754', NULL, 'hulkt@avengers.com', '1998-01-21', NULL, '2020-12-03 09:01:24', '2020-12-03 09:01:24'),
(70, 141, 'XXOVEK', '09657613754', NULL, 'hulkt@avengers.com', '1998-01-21', NULL, '2020-12-03 09:01:56', '2020-12-03 09:01:56'),
(71, 143, 'XXOVEK', '09657613754', NULL, 'amol.pawar@tkinfotech.com', '1998-01-10', NULL, '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(72, 145, 'XXOVEK', '09657613754', NULL, 'vikaspawar3110@gmail.com', '1998-01-01', NULL, '2020-12-03 23:07:43', '2020-12-03 23:07:43'),
(73, 149, 'CH Trading', '09024634008', NULL, 'johnabrahm@gmail.com', '1998-01-01', NULL, '2020-12-07 00:13:38', '2020-12-07 00:13:38'),
(74, 151, 'CH Trading', '09024634008', NULL, 'johnabrahm@gmail.com', '1998-01-01', NULL, '2020-12-07 00:14:01', '2020-12-07 00:14:01'),
(75, 153, 'XXOVEK', '09657613754', NULL, 'johnabrahm@gmail.com', '1988-10-10', NULL, '2020-12-07 00:19:36', '2020-12-07 00:19:36'),
(76, NULL, 'XXOVEK', '09657613754', NULL, 'hulkt@avengers.com', '1998-01-11', NULL, '2020-12-07 00:24:28', '2020-12-07 00:24:28'),
(77, NULL, 'XXOVEK', '09657613754', NULL, 'johnabrahm@gmail.com', '1998-01-01', NULL, '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(78, 162, 'x zee', '8007015819', NULL, 'lalit@gmail.com', '2020-12-09', NULL, '2020-12-07 19:17:33', '2020-12-07 19:17:33'),
(79, NULL, 'a zee', '8007015819', NULL, 'lalit@gmail.com', '2020-12-01', NULL, '2020-12-07 19:27:37', '2020-12-07 19:27:37'),
(80, NULL, 'asaas', '8007015819', NULL, 'support@gmail.com', '2020-12-07', NULL, '2020-12-07 20:06:40', '2020-12-07 20:06:40'),
(81, NULL, 'x zee', '8007015819', NULL, 'support@gmail.com', '2020-12-14', NULL, '2020-12-07 20:09:58', '2020-12-07 20:09:58'),
(82, NULL, 'ffgfg', '08788329794', NULL, 'sonali@gmail.com', '2020-12-07', NULL, '2020-12-08 09:22:34', '2020-12-08 09:22:34'),
(83, NULL, 'ffgfg', '08788329794', NULL, 'sonali@gmail.com', '2020-11-30', NULL, '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(84, NULL, 'xyz tech', '8007015819', NULL, 'lalit@gmail.com', '2019-10-09', NULL, '2020-12-11 11:02:36', '2020-12-11 11:02:36'),
(85, 176, 'xyz tech', '8007015819', NULL, 'support@gmail.com', '2019-11-10', NULL, '2020-12-11 11:19:12', '2020-12-11 11:19:12'),
(86, 178, 'ace', '8007015819', NULL, 'support@gmail.com', '2019-11-11', NULL, '2020-12-11 11:44:45', '2020-12-11 11:44:45'),
(87, 180, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-12-02', NULL, '2020-12-18 09:30:11', '2020-12-18 09:30:11'),
(88, 182, 'xyzTechnosoft', '+918007015819', NULL, 'lalitlucky007meshram@gmail.com', '2020-12-17', NULL, '2020-12-18 09:37:46', '2020-12-18 09:37:46'),
(89, 184, 'xyzTechnosoft', '+918007015819', NULL, 'support@gmail.com', '2020-12-08', NULL, '2020-12-21 21:50:15', '2020-12-21 21:50:15'),
(90, 195, 'XYZ', '9657613754', NULL, 'vikas@gmail.com', '1998-03-11', NULL, '2021-01-02 23:31:12', '2021-01-02 23:31:12'),
(93, 201, 'XYZ', '9657613754', NULL, 'vikas@gmail.com', '1998-03-11', NULL, '2021-01-02 23:39:53', '2021-01-02 23:39:53'),
(94, 203, 'XYZ', '9657613754', NULL, 'vikas@gmail.com', '1998-03-11', NULL, '2021-01-02 23:41:56', '2021-01-02 23:41:56'),
(95, 205, 'XYZ', '9657613754', NULL, 'vikas@gmail.com', '0000-00-00', NULL, '2021-01-03 08:51:47', '2021-01-03 08:51:47'),
(96, 207, 'XYZ', '9657613754', NULL, 'vikas@gmail.com', '0000-00-00', NULL, '2021-01-03 08:56:23', '2021-01-03 08:56:23'),
(97, 209, 'XYZ', '9657613754', NULL, 'vikas@gmail.com', '0000-00-00', NULL, '2021-01-03 08:57:08', '2021-01-03 08:57:08'),
(98, 211, 'xyz tech', '8007015819', NULL, 'support@gmail.com', '2020-12-02', NULL, '2021-01-03 10:40:34', '2021-01-03 10:40:34'),
(99, 213, 'xyz tech', '8007015819', NULL, 'support@gmail.com', '2020-12-02', NULL, '2021-01-03 10:43:39', '2021-01-03 10:43:39'),
(100, 215, 'XYZ', '9657613754', NULL, 'vikas@gmail.com', '0000-00-00', NULL, '2021-01-05 09:53:46', '2021-01-05 09:53:46'),
(102, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-05 10:53:22', '2021-01-05 10:53:22'),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-05 10:54:22', '2021-01-05 10:54:22'),
(104, 230, 'padma kirana', '7350243281', NULL, '', '2020-03-03', NULL, '2021-01-23 03:27:05', '2021-01-23 03:27:05'),
(105, NULL, 'padma kirana', '7350243281', NULL, 'padmakirana@gmail.com', '2014-03-03', NULL, '2021-01-23 03:38:11', '2021-01-23 03:38:11'),
(106, 234, '', '', NULL, '', '0000-00-00', NULL, '2021-01-23 04:18:33', '2021-01-23 04:18:33'),
(109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-23 04:49:29', '2021-01-23 04:49:29'),
(110, 241, 'ace', '1234567890', NULL, 'ace@gmail.com', '2021-01-05', NULL, '2021-02-02 03:22:46', '2021-02-02 03:22:46'),
(111, 243, '', '', NULL, '', '0000-00-00', NULL, '2021-02-02 04:26:21', '2021-02-02 04:26:21'),
(112, 245, '', '', NULL, '', '0000-00-00', NULL, '2021-02-02 05:44:41', '2021-02-02 05:44:41'),
(113, 247, '', '', NULL, '', '0000-00-00', NULL, '2021-02-03 01:57:04', '2021-02-03 01:57:04'),
(114, 249, '', '', NULL, '', '0000-00-00', NULL, '2021-02-03 04:08:34', '2021-02-03 04:08:34'),
(115, 251, '', '', NULL, '', '0000-00-00', NULL, '2021-02-03 04:12:21', '2021-02-03 04:12:21'),
(116, 253, '', '', NULL, '', '0000-00-00', NULL, '2021-02-03 04:16:10', '2021-02-03 04:16:10'),
(119, 259, '', '', NULL, '', '0000-00-00', NULL, '2021-02-03 23:27:13', '2021-02-03 23:27:13'),
(121, 263, '', '', NULL, '', '0000-00-00', NULL, '2021-02-03 23:54:04', '2021-02-03 23:54:04'),
(125, 271, '', '', NULL, '', '0000-00-00', NULL, '2021-02-04 00:13:35', '2021-02-04 00:13:35'),
(126, 273, 'MAHIT NAHI', '', NULL, '', '0000-00-00', NULL, '2021-02-04 06:10:51', '2021-02-04 06:10:51'),
(128, 277, 'MAHIT NAHI', '1223', NULL, '', '0000-00-00', NULL, '2021-02-04 06:43:05', '2021-02-04 06:43:05'),
(130, 281, 'MAHIT NAHI', '1223', NULL, '', '0000-00-00', NULL, '2021-02-04 06:45:28', '2021-02-04 06:45:28'),
(131, 283, 'MAHIT NAHI', '1223', NULL, '', '0000-00-00', NULL, '2021-02-04 06:46:05', '2021-02-04 06:46:05'),
(134, 289, 'MAHIT NAHI', '1223', NULL, '', '0000-00-00', NULL, '2021-02-04 07:01:58', '2021-02-04 07:01:58'),
(136, NULL, 'padma kirana', '1236547895', 'talodhi', 'kirana@gmail.com', NULL, '1234785', '2021-02-05 10:05:16', '2021-02-05 10:05:16'),
(137, NULL, 'lalit', '7895452266', 'nagpur', 'buyer@gmail.com', NULL, '3225666', '2021-02-05 10:05:17', '2021-02-05 10:05:17'),
(138, NULL, 'padma kirana', '1236547895', 'talodhi', 'kirana@gmail.com', NULL, '1234785', '2021-02-05 23:56:47', '2021-02-05 23:56:47'),
(139, NULL, 'lalit', '7895452266', 'nagpur', 'buyer@gmail.com', NULL, '3225666', '2021-02-05 23:56:47', '2021-02-05 23:56:47'),
(140, NULL, 'padma kirana', '1236547895', 'talodhi', 'kirana@gmail.com', NULL, '1234785', '2021-02-06 01:30:37', '2021-02-06 01:30:37'),
(141, NULL, 'lalit', '7895452266', 'nagpur', 'buyer@gmail.com', NULL, '3225666', '2021-02-06 01:30:37', '2021-02-06 01:30:37'),
(142, NULL, 'aalu tamatar', '08208092366', '1418 C/O Gadge New Nandanwan', 'pradyumnbhanarkar@gmail.com', NULL, '6373388', '2021-04-14 23:58:27', '2021-04-14 23:58:27'),
(143, NULL, 'takatak', '08208092366', '1418 C/O Gadge New Nandanwan', 'pradyumnbhanarkar@gmail.com', NULL, NULL, '2021-04-14 23:58:28', '2021-04-14 23:58:28'),
(144, NULL, 'disha technopro', '8527419632', 'rameshwari', 'disha@gmail.com', NULL, NULL, '2021-04-17 00:35:45', '2021-04-17 00:35:45'),
(145, NULL, 'tekdoc ', '8523651245', 'bardi', 'tekdoc@gmail.com', NULL, NULL, '2021-04-17 00:35:45', '2021-04-17 00:35:45'),
(146, NULL, 'shahu mill', '7896541236', 'chimur', 'shahu@gmail.com', NULL, 'gst147', '2021-04-17 01:37:38', '2021-04-17 01:37:38'),
(147, NULL, 'vt food industry', '9876543212', 'nagpur', 'vt@gmail.com', NULL, 'gts222', '2021-04-17 01:37:38', '2021-04-17 01:37:38'),
(148, NULL, '', '', '', '', NULL, NULL, '2021-04-18 02:23:40', '2021-04-18 02:23:40'),
(149, NULL, '', '', '', '', NULL, NULL, '2021-04-18 02:23:40', '2021-04-18 02:23:40'),
(150, NULL, 'padma kirana', '8007015819', 'nandanvan', 'ashish@gmail.com', NULL, '1234785', '2021-04-18 02:47:01', '2021-04-18 02:47:01'),
(151, NULL, 'lalit', '8007015819', 'nandanvan', 'ashish@gmail.com', NULL, '3225666', '2021-04-18 02:47:01', '2021-04-18 02:47:01'),
(152, 303, 'BARABaNKI', '8977899888', NULL, 'barabanki@bara.com', '1998-02-11', NULL, '2021-05-23 04:13:03', '2021-05-23 04:13:03'),
(153, 305, 'ace', '84111215151', NULL, 'tbjbjbjb@gyh.jk', '2021-05-10', NULL, '2021-05-23 04:41:20', '2021-05-23 04:41:20'),
(156, 311, 'fvvbvm', 'bjmdbf', NULL, 'bcbc@gmail.com', '1777-01-01', NULL, '2021-05-23 22:45:30', '2021-05-23 22:45:30'),
(157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-24 05:08:36', '2021-05-24 05:08:36'),
(158, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-05-24 21:08:56', '2021-05-24 21:08:56'),
(163, NULL, 'disha technopro', '7896541236', 'nagpur', 'disha@gmail.com', NULL, '987', '2021-05-25 04:14:43', '2021-05-25 04:14:43'),
(164, NULL, 'vt food industry', '8523651245', 'nagpur', 'vt@gmail.com', NULL, '65412', '2021-05-25 04:14:43', '2021-05-25 04:14:43'),
(165, NULL, NULL, '8526987456', 'shoppingnandanvan', 'shoppingvt@gmail.com', NULL, '65487', '2021-05-25 04:14:44', '2021-05-25 04:14:44'),
(166, NULL, 'shahu mill', '8527419632', 'nagpur', 'shahu@gmail.com', NULL, '1111111111111', '2021-05-25 04:33:53', '2021-05-25 04:33:53'),
(167, NULL, 'tekdoc', '8523651245', 'bhandara', 'tekdoc@gmail.com', NULL, '222222', '2021-05-25 04:33:53', '2021-05-25 04:33:53'),
(168, NULL, 'shopping vt food', '8526987456', 'chandrapur', 'shoppingvt@gmail.com', NULL, '33333333', '2021-05-25 04:33:53', '2021-05-25 04:33:53');

-- --------------------------------------------------------

--
-- Table structure for table `tax_invoice`
--

CREATE TABLE `tax_invoice` (
  `invoiceid` int(11) NOT NULL,
  `intype` varchar(100) DEFAULT NULL,
  `userid` int(11) NOT NULL,
  `sellerid` int(11) DEFAULT NULL,
  `buyerid` int(11) DEFAULT NULL,
  `shopid` int(11) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `naturebuss` varchar(55) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `remark` varchar(255) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_invoice`
--

INSERT INTO `tax_invoice` (`invoiceid`, `intype`, `userid`, `sellerid`, `buyerid`, `shopid`, `pid`, `rid`, `naturebuss`, `status`, `remark`, `createdat`, `updatedat`) VALUES
(1, '2', 3, 136, 137, NULL, 191, 292, NULL, 3, 'ffffff', '2021-02-05 10:05:17', '2021-02-06 04:01:35'),
(2, '2', 3, 138, 139, NULL, 192, 293, NULL, 4, 'done', '2021-02-05 23:56:47', '2021-02-06 03:44:01'),
(3, '3', 3, 140, 141, NULL, 193, 294, NULL, 3, 'ssss', '2021-02-06 01:30:37', '2021-02-06 04:02:09'),
(4, '2', 3, 142, 143, NULL, 196, 295, NULL, 1, '', '2021-04-14 23:58:28', '2021-04-14 23:58:28'),
(5, '1', 3, 144, 145, NULL, 197, 296, NULL, 3, 'vcgfgf', '2021-04-17 00:35:45', '2021-04-18 02:02:35'),
(6, '2', 3, 146, 147, NULL, 198, 297, NULL, 4, 'completed by lalit', '2021-04-17 01:37:39', '2021-04-18 01:59:46'),
(7, '1', 3, 148, 149, NULL, 199, 298, NULL, 3, 'xdcdfd', '2021-04-18 02:23:40', '2021-04-18 02:25:04'),
(8, '3', 3, 150, 151, NULL, 200, 299, NULL, 1, '', '2021-04-18 02:47:01', '2021-04-18 02:47:01'),
(9, '2', 3, 163, 164, 165, 246, 318, NULL, 1, '', '2021-05-25 04:14:44', '2021-05-25 04:14:44'),
(10, '4', 3, 166, 167, 168, 247, 319, NULL, 3, 'by lalit', '2021-05-25 04:33:54', '2021-05-25 04:36:39');

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
  `status` varchar(25) NOT NULL DEFAULT '1',
  `remark` varchar(255) NOT NULL,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `udyog_adhar`
--

INSERT INTO `udyog_adhar` (`uid`, `pid`, `rid`, `sid`, `bid`, `userid`, `nature_of_buss`, `buss_type`, `turn_over_amt`, `gst_number`, `male`, `female`, `status`, `remark`, `updatedat`, `createdat`) VALUES
(3, 55, 102, 44, 7, 3, 'nature of business', '2', 400000, '12345698745', 10, 3, '2', 'hold by admin', '2020-11-29 09:50:36', '2020-11-29 08:32:25'),
(4, 59, 109, 47, 8, 3, 'nature of business', '2', 700000, '1236547852', 10, 5, '1', '', '2020-12-01 11:41:17', '2020-12-01 11:41:17'),
(5, 60, 110, 48, 9, 3, 'nature of business', '2', 700000, '1236547852', 10, 5, '1', '', '2020-12-01 11:43:47', '2020-12-01 11:43:47'),
(6, 61, 111, 49, 10, 3, 'nature of business', '2', 700000, '1236547852', 10, 5, '3', 'rejected by admin', '2020-12-02 06:34:26', '2020-12-01 11:45:30'),
(7, 65, 118, 53, 11, 3, 'nature of business', '2', 600000, '326598741', 10, 2, '1', '', '2020-12-02 07:24:35', '2020-12-02 07:24:35'),
(8, 66, 119, 54, 12, 3, 'zxsfdsgdfg', '2', 400000, '12345698745', 10, 3, '1', '', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(9, 67, 120, 55, 13, 3, 'Private', '2', 500, '500', 3, 2, '1', '', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(10, 68, 121, 56, 14, 3, 'Private ltd', '2', 122, '1223333', 2, 4, '1', '', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(11, 73, 126, 58, 19, 3, 'private', '2', 122, '1223333', 1, 2, '1', '', '2020-12-02 12:22:10', '2020-12-02 12:22:10'),
(13, 75, 128, 60, 21, 3, 'private', '2', 122, '1223333', 1, 2, '1', '', '2020-12-02 12:24:29', '2020-12-02 12:24:29'),
(14, 76, 129, 61, 22, 3, 'private limited', '2', 122, '123', 2, 2, '1', '', '2020-12-02 12:27:40', '2020-12-02 12:27:40'),
(15, 78, 131, 63, 24, 3, 'gggggg', '2', 400000, '12345698745', 2, 1, '1', '', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(16, 82, 136, 66, 27, 3, 'nature of business', '2', 400000, '12345698745', 10, 3, '4', 'completd test', '2020-12-03 09:07:08', '2020-12-02 23:14:43'),
(17, 83, 137, 67, 28, 3, 'MAHIT NAHI', '2', 200, '200', 2, 5, '3', 'Rejected for test', '2020-12-03 09:01:17', '2020-12-03 05:02:05'),
(18, 84, 138, 68, 29, 3, 'PUNE', '2', 500, '500', 1, 6, '3', 'rejected for test', '2020-12-03 09:03:50', '2020-12-03 08:57:38'),
(19, 94, 155, 76, 30, 3, 'private', '2', 500, NULL, 3, 5, '4', 'completed', '2021-01-03 07:00:40', '2020-12-07 00:24:28'),
(20, 100, 161, 77, 31, 3, 'Pune', '2', 500, NULL, 1, 2, '3', 'by lalit', '2021-01-03 00:22:50', '2020-12-07 08:58:07'),
(21, 102, 164, 79, 32, 3, 'company', '2', 777777777, NULL, 1, 1, '2', 'by admin', '2021-01-03 00:19:07', '2020-12-07 19:27:37'),
(22, 103, 165, 80, 33, 3, 'company', '1', 777777777, NULL, 1, 2, '4', 'completed', '2020-12-16 19:53:36', '2020-12-07 20:06:40'),
(23, 104, 166, 81, 34, 3, 'gfghgf', '1', 100000, NULL, 1, 2, '2', 'hold for doc', '2020-12-16 19:43:14', '2020-12-07 20:09:58'),
(24, 107, 169, 82, 35, 3, 'klfflfjffklf', '1', 5646546456, NULL, 2, 1, '4', 'tttttt', '2020-12-17 00:36:54', '2020-12-08 09:22:34'),
(25, 110, 172, 83, 36, 3, 'gjugjhgjh', '3', 5646546456, NULL, 2, 1, '2', 'Test', '2020-12-11 10:31:06', '2020-12-08 09:37:18'),
(26, 153, 232, 105, 43, 3, 'kirana', '2', 450000, '12345678', 5, 4, '2', 'hold by prady', '2021-01-23 03:42:21', '2021-01-23 03:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `udyog_docs`
--

CREATE TABLE `udyog_docs` (
  `docid` int(10) UNSIGNED NOT NULL,
  `extension` varchar(100) NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `doctype` varchar(100) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udyog_docs`
--

INSERT INTO `udyog_docs` (`docid`, `extension`, `userid`, `uid`, `doctype`, `createdat`, `updatedat`) VALUES
(1, 'jpg', 3, 3, 'Aadhar', '2020-11-29 08:32:26', '2020-11-29 08:32:26'),
(2, 'jpg', 3, 3, 'PAN', '2020-11-29 08:32:26', '2020-11-29 08:32:26'),
(3, 'jpg', 3, 3, 'CANCELLED CHECK', '2020-11-29 08:32:26', '2020-11-29 08:32:26'),
(4, 'jpg', 3, 3, 'Electricity Bill', '2020-11-29 08:32:27', '2020-11-29 08:32:27'),
(5, 'jpg', 3, 5, 'Aadhar', '2020-12-01 11:43:49', '2020-12-01 11:43:49'),
(6, 'jpg', 3, 5, 'PAN', '2020-12-01 11:43:49', '2020-12-01 11:43:49'),
(7, 'jpg', 3, 5, 'CANCELLED CHECK', '2020-12-01 11:43:50', '2020-12-01 11:43:50'),
(8, 'jpg', 3, 5, 'Electricity Bill', '2020-12-01 11:43:50', '2020-12-01 11:43:50'),
(9, 'jpg', 3, 5, 'OTHER DOCUMENTS', '2020-12-01 11:43:50', '2020-12-01 11:43:50'),
(10, 'jpg', 3, 6, 'Aadhar', '2020-12-01 11:45:32', '2020-12-01 11:45:32'),
(11, 'jpg', 3, 6, 'PAN', '2020-12-01 11:45:32', '2020-12-01 11:45:32'),
(12, 'jpg', 3, 6, 'CANCELLED CHECK', '2020-12-01 11:45:32', '2020-12-01 11:45:32'),
(13, 'jpg', 3, 6, 'Electricity Bill', '2020-12-01 11:45:33', '2020-12-01 11:45:33'),
(14, 'jpg', 3, 6, 'OTHER DOCUMENTS', '2020-12-01 11:45:33', '2020-12-01 11:45:33'),
(15, 'jpg', 3, 7, 'Aadhar', '2020-12-02 07:24:39', '2020-12-02 07:24:39'),
(16, 'jpg', 3, 7, 'PAN', '2020-12-02 07:24:40', '2020-12-02 07:24:40'),
(17, 'jpg', 3, 7, 'CANCELLED CHECK', '2020-12-02 07:24:40', '2020-12-02 07:24:40'),
(18, 'jpg', 3, 7, 'Electricity Bill', '2020-12-02 07:24:41', '2020-12-02 07:24:41'),
(19, 'jpg', 3, 7, 'OTHER DOCUMENTS', '2020-12-02 07:24:42', '2020-12-02 07:24:42'),
(20, 'jpg', 3, 8, 'Aadhar', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(21, 'jpg', 3, 8, 'PAN', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(22, 'jpg', 3, 8, 'CANCELLED CHECK', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(23, 'jpg', 3, 8, 'Electricity Bill', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(24, 'jpg', 3, 8, 'OTHER DOCUMENTS', '2020-12-02 10:55:59', '2020-12-02 10:55:59'),
(25, 'pdf', 3, 9, 'Aadhar', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(26, 'pdf', 3, 9, 'PAN', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(27, 'txt', 3, 9, 'CANCELLED CHECK', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(28, 'pdf', 3, 9, 'Electricity Bill', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(29, 'odt', 3, 9, 'OTHER DOCUMENTS', '2020-12-02 11:10:28', '2020-12-02 11:10:28'),
(30, 'pdf', 3, 10, 'Aadhar', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(31, 'sql', 3, 10, 'PAN', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(32, 'jfif', 3, 10, 'CANCELLED CHECK', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(33, 'odt', 3, 10, 'Electricity Bill', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(34, 'sql', 3, 10, 'OTHER DOCUMENTS', '2020-12-02 12:09:53', '2020-12-02 12:09:53'),
(35, 'pdf', 3, 13, 'Aadhar', '2020-12-02 12:24:29', '2020-12-02 12:24:29'),
(36, 'pdf', 3, 13, 'PAN', '2020-12-02 12:24:30', '2020-12-02 12:24:30'),
(37, 'pdf', 3, 13, 'CANCELLED CHECK', '2020-12-02 12:24:30', '2020-12-02 12:24:30'),
(38, 'jfif', 3, 13, 'Electricity Bill', '2020-12-02 12:24:30', '2020-12-02 12:24:30'),
(39, 'sql', 3, 13, 'OTHER DOCUMENTS', '2020-12-02 12:24:30', '2020-12-02 12:24:30'),
(40, 'odt', 3, 14, 'Aadhar', '2020-12-02 12:27:40', '2020-12-02 12:27:40'),
(41, 'pdf', 3, 14, 'PAN', '2020-12-02 12:27:41', '2020-12-02 12:27:41'),
(42, 'pdf', 3, 14, 'CANCELLED CHECK', '2020-12-02 12:27:41', '2020-12-02 12:27:41'),
(43, 'pdf', 3, 14, 'Electricity Bill', '2020-12-02 12:27:41', '2020-12-02 12:27:41'),
(44, 'odt', 3, 14, 'OTHER DOCUMENTS', '2020-12-02 12:27:41', '2020-12-02 12:27:41'),
(45, 'jpg', 3, 15, 'Aadhar', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(46, 'jpg', 3, 15, 'PAN', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(47, 'jpg', 3, 15, 'CANCELLED CHECK', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(48, 'jpg', 3, 15, 'OTHER DOCUMENTS', '2020-12-02 12:54:14', '2020-12-02 12:54:14'),
(49, 'jpg', 3, 16, 'Aadhar', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(50, 'jpg', 3, 16, 'PAN', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(51, 'jpg', 3, 16, 'CANCELLED CHECK', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(52, 'jpg', 3, 16, 'Electricity Bill', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(53, 'jpg', 3, 16, 'OTHER DOCUMENTS', '2020-12-02 23:14:43', '2020-12-02 23:14:43'),
(54, 'sql', 3, 17, 'Aadhar', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(55, 'sql', 3, 17, 'PAN', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(56, 'sql', 3, 17, 'CANCELLED CHECK', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(57, 'sql', 3, 17, 'Electricity Bill', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(58, 'sql', 3, 17, 'OTHER DOCUMENTS', '2020-12-03 05:02:05', '2020-12-03 05:02:05'),
(59, 'sql', 3, 18, 'Aadhar', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(60, 'txt', 3, 18, 'PAN', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(61, 'txt', 3, 18, 'CANCELLED CHECK', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(62, 'txt', 3, 18, 'OTHER DOCUMENTS', '2020-12-03 08:57:38', '2020-12-03 08:57:38'),
(63, 'text', 3, 19, 'CANCELLED CHECK', '2020-12-07 00:24:28', '2020-12-07 00:24:28'),
(64, 'jpeg', 3, 20, 'Aadhar', '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(65, 'text', 3, 20, 'PAN', '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(66, 'text', 3, 20, 'CANCELLED CHECK', '2020-12-07 08:58:07', '2020-12-07 08:58:07'),
(67, 'jpg', 3, 23, 'Aadhar', '2020-12-07 20:10:00', '2020-12-07 20:10:00'),
(68, 'jpg', 3, 23, 'PAN', '2020-12-07 20:10:01', '2020-12-07 20:10:01'),
(69, 'jpg', 3, 23, 'CANCELLED CHECK', '2020-12-07 20:10:01', '2020-12-07 20:10:01'),
(70, 'jpg', 3, 23, 'Electricity Bill', '2020-12-07 20:10:02', '2020-12-07 20:10:02'),
(71, 'JPG', 3, 24, 'Aadhar', '2020-12-08 09:22:34', '2020-12-08 09:22:34'),
(72, 'JPG', 3, 24, 'PAN', '2020-12-08 09:22:34', '2020-12-08 09:22:34'),
(73, 'JPG', 3, 24, 'CANCELLED CHECK', '2020-12-08 09:22:34', '2020-12-08 09:22:34'),
(74, 'pdf', 3, 25, 'Aadhar', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(75, 'pdf', 3, 25, 'PAN', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(76, 'pdf', 3, 25, 'CANCELLED CHECK', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(77, 'pdf', 3, 25, 'OTHER DOCUMENTS', '2020-12-08 09:37:18', '2020-12-08 09:37:18'),
(78, 'jfif', 3, 26, 'CANCELLED CHECK', '2021-01-23 03:38:11', '2021-01-23 03:38:11'),
(79, 'png', 3, 26, 'Electricity Bill', '2021-01-23 03:38:11', '2021-01-23 03:38:11');

-- --------------------------------------------------------

--
-- Table structure for table `udyog_partners`
--

CREATE TABLE `udyog_partners` (
  `upid` int(10) UNSIGNED NOT NULL,
  `uid` int(10) UNSIGNED NOT NULL,
  `partnerid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `udyog_partners`
--

INSERT INTO `udyog_partners` (`upid`, `uid`, `partnerid`, `createdat`) VALUES
(1, 5, 10, '2020-12-01 11:43:48'),
(2, 5, 11, '2020-12-01 11:43:49'),
(3, 6, 12, '2020-12-01 11:45:31'),
(4, 6, 13, '2020-12-01 11:45:31'),
(5, 7, 17, '2020-12-02 07:24:37'),
(6, 7, 18, '2020-12-02 07:24:38'),
(7, 8, 19, '2020-12-02 10:55:59'),
(8, 9, 20, '2020-12-02 11:10:28'),
(9, 10, 21, '2020-12-02 12:09:53'),
(10, 13, 24, '2020-12-02 12:24:29'),
(11, 14, 25, '2020-12-02 12:27:40'),
(12, 14, 26, '2020-12-02 12:27:40'),
(13, 15, 27, '2020-12-02 12:54:14'),
(14, 15, 28, '2020-12-02 12:54:14'),
(15, 16, 29, '2020-12-02 23:14:43'),
(16, 16, 30, '2020-12-02 23:14:43'),
(17, 17, 31, '2020-12-03 05:02:05'),
(18, 18, 32, '2020-12-03 08:57:38'),
(19, 19, 39, '2020-12-07 00:24:28'),
(20, 20, 42, '2020-12-07 08:58:07'),
(21, 21, 43, '2020-12-07 19:27:38'),
(22, 25, 45, '2020-12-08 09:37:18'),
(23, 26, 63, '2021-01-23 03:38:11'),
(24, 26, 64, '2021-01-23 03:38:11');

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
(1, 1, 1, '2020-11-22 07:00:30', '2020-11-22 07:00:30'),
(2, 1, 2, '2020-11-22 07:00:30', '2020-11-22 07:00:30'),
(3, 1, 3, '2020-11-22 07:00:30', '2020-11-22 07:00:30'),
(4, 1, 4, '2020-11-22 07:00:30', '2020-11-22 07:00:30'),
(5, 1, 5, '2020-11-22 07:00:30', '2020-11-22 07:00:30'),
(6, 2, 3, '2020-11-22 07:05:20', '2020-11-22 07:05:20'),
(7, 2, 4, '2020-11-22 07:05:21', '2020-11-22 07:05:21'),
(10, 4, 1, '2020-11-22 07:08:52', '2020-11-22 07:08:52'),
(11, 4, 2, '2020-11-22 07:08:54', '2020-11-22 07:08:54'),
(13, 1, 6, '2020-11-25 22:45:45', '2020-11-25 22:45:45'),
(14, 5, 1, '2020-11-27 08:26:26', '2020-11-27 08:26:26'),
(15, 5, 2, '2020-11-27 08:26:26', '2020-11-27 08:26:26'),
(18, 1, 8, '2020-11-28 03:07:40', '2020-11-28 03:07:40'),
(20, 7, 1, '2020-11-28 06:06:32', '2020-11-28 06:06:32'),
(21, 7, 2, '2020-11-28 06:06:33', '2020-11-28 06:06:33'),
(22, 8, 1, '2020-11-28 09:51:49', '2020-11-28 09:51:49'),
(24, 10, 1, '2020-11-29 05:37:02', '2020-11-29 05:37:02'),
(25, 10, 2, '2020-11-29 05:37:02', '2020-11-29 05:37:02'),
(26, 10, 4, '2020-11-29 05:37:02', '2020-11-29 05:37:02'),
(27, 10, 6, '2020-11-29 05:37:02', '2020-11-29 05:37:02'),
(28, 10, 8, '2020-11-29 05:37:02', '2020-11-29 05:37:02'),
(29, 1, 9, '2020-11-29 05:39:34', '2020-11-29 05:39:34'),
(43, 13, 1, '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(44, 13, 2, '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(45, 13, 3, '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(46, 13, 6, '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(47, 13, 8, '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(48, 13, 9, '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(49, 14, 3, '2020-11-29 06:59:54', '2020-11-29 06:59:54'),
(50, 15, 1, '2020-11-29 07:02:13', '2020-11-29 07:02:13'),
(51, 15, 2, '2020-11-29 07:02:13', '2020-11-29 07:02:13'),
(52, 15, 6, '2020-11-29 07:02:13', '2020-11-29 07:02:13'),
(53, 15, 8, '2020-11-29 07:02:13', '2020-11-29 07:02:13'),
(54, 15, 9, '2020-11-29 07:02:13', '2020-11-29 07:02:13'),
(84, 16, 1, '2020-12-01 11:03:43', '2020-12-01 11:03:43'),
(85, 16, 2, '2020-12-01 11:03:43', '2020-12-01 11:03:43'),
(86, 16, 3, '2020-12-01 11:03:43', '2020-12-01 11:03:43'),
(87, 16, 5, '2020-12-01 11:03:44', '2020-12-01 11:03:44'),
(88, 16, 6, '2020-12-01 11:03:44', '2020-12-01 11:03:44'),
(89, 16, 8, '2020-12-01 11:03:44', '2020-12-01 11:03:44'),
(90, 16, 9, '2020-12-01 11:03:44', '2020-12-01 11:03:44'),
(91, 18, 1, '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(92, 18, 2, '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(93, 18, 5, '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(94, 18, 6, '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(95, 18, 8, '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(96, 18, 9, '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(97, 19, 1, '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(98, 19, 2, '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(99, 19, 5, '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(100, 19, 6, '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(101, 19, 8, '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(102, 19, 9, '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(103, 1, 10, '2020-12-07 01:34:04', '2020-12-07 01:34:04'),
(105, 1, 11, '2020-12-13 03:53:42', '2020-12-13 03:53:42'),
(106, 1, 12, '2020-12-13 03:53:42', '2020-12-13 03:53:42'),
(109, 17, 1, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(110, 17, 2, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(111, 17, 3, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(112, 17, 5, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(113, 17, 6, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(114, 17, 8, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(115, 17, 9, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(116, 17, 10, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(117, 17, 11, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(118, 17, 12, '2020-12-14 04:40:17', '2020-12-14 04:40:17'),
(119, 20, 1, '2020-12-16 18:55:49', '2020-12-16 18:55:49'),
(120, 20, 8, '2020-12-16 18:55:49', '2020-12-16 18:55:49'),
(121, 20, 11, '2020-12-16 18:55:49', '2020-12-16 18:55:49'),
(122, 20, 12, '2020-12-16 18:55:49', '2020-12-16 18:55:49'),
(125, 1, 13, '2021-01-05 10:24:37', '2021-01-05 10:24:37'),
(127, 1, 14, '2021-01-05 11:08:13', '2021-01-05 11:08:13'),
(129, 21, 1, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(130, 21, 5, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(131, 21, 6, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(132, 21, 8, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(133, 21, 9, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(134, 21, 10, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(135, 21, 11, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(136, 21, 12, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(137, 21, 13, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(138, 21, 14, '2021-01-13 09:20:13', '2021-01-13 09:20:13'),
(139, 6, 1, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(140, 6, 2, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(141, 6, 5, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(142, 6, 6, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(143, 6, 8, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(144, 6, 9, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(145, 6, 10, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(146, 6, 11, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(147, 6, 12, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(148, 6, 13, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(149, 6, 14, '2021-01-13 09:21:15', '2021-01-13 09:21:15'),
(161, 22, 1, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(162, 22, 2, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(163, 22, 5, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(164, 22, 6, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(165, 22, 8, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(166, 22, 9, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(167, 22, 10, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(168, 22, 11, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(169, 22, 12, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(170, 22, 13, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(171, 22, 14, '2021-01-22 22:30:19', '2021-01-22 22:30:19'),
(194, 3, 1, '2021-03-21 22:29:42', '2021-03-21 22:29:42'),
(195, 3, 2, '2021-03-21 22:29:42', '2021-03-21 22:29:42'),
(196, 3, 5, '2021-03-21 22:29:42', '2021-03-21 22:29:42'),
(197, 3, 6, '2021-03-21 22:29:42', '2021-03-21 22:29:42'),
(198, 3, 8, '2021-03-21 22:29:43', '2021-03-21 22:29:43'),
(199, 3, 9, '2021-03-21 22:29:43', '2021-03-21 22:29:43'),
(200, 3, 10, '2021-03-21 22:29:44', '2021-03-21 22:29:44'),
(201, 3, 11, '2021-03-21 22:29:44', '2021-03-21 22:29:44'),
(202, 3, 12, '2021-03-21 22:29:44', '2021-03-21 22:29:44'),
(203, 3, 13, '2021-03-21 22:29:45', '2021-03-21 22:29:45'),
(204, 3, 14, '2021-03-21 22:29:45', '2021-03-21 22:29:45'),
(205, 1, 15, '2021-05-02 05:51:48', '2021-05-02 05:51:48'),
(206, 1, 16, '2021-05-02 05:51:48', '2021-05-02 05:51:48'),
(207, 3, 15, '2021-05-02 06:18:46', '2021-05-02 06:18:46'),
(208, 3, 16, '2021-05-02 06:18:46', '2021-05-02 06:18:46'),
(209, 1, 17, '2021-05-02 06:22:58', '2021-05-02 06:22:58'),
(210, 3, 17, '2021-05-02 06:22:58', '2021-05-02 06:22:58'),
(211, 1, 15, '2021-05-23 22:51:27', '2021-05-23 22:51:27'),
(212, 3, 15, '2021-05-23 22:51:27', '2021-05-23 22:51:27'),
(213, 1, 16, '2021-05-23 22:55:59', '2021-05-23 22:55:59'),
(214, 3, 16, '2021-05-23 22:55:59', '2021-05-23 22:55:59'),
(215, 1, 20, '2021-05-23 22:57:19', '2021-05-23 22:57:19'),
(216, 3, 20, '2021-05-23 22:57:19', '2021-05-23 22:57:19');

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
  `isactive` tinyint(4) NOT NULL DEFAULT '1',
  `token` varchar(255) DEFAULT NULL,
  `expiredate` datetime DEFAULT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`userid`, `roleid`, `emailid`, `firstname`, `lastname`, `upassword`, `contact`, `isactive`, `token`, `expiredate`, `createdat`, `updatedat`) VALUES
(1, 1, 'support@tkinfotech.com', 'Kiran', 'Vyvhare', '12345', '9657613754', 1, 'bd8d698770ecf194806e78717f03c5ce1598', '2021-01-23 01:19:40', '2020-11-22 06:58:19', '2021-01-22 12:34:40'),
(2, 2, 'johnsnow@got.com', 'John', 'Snow', '123456', '8007015819', 1, NULL, NULL, '2020-11-22 07:05:18', '2020-11-28 06:03:25'),
(3, 3, 'lalitrmeshram@gmail.com', 'Lalit', 'Meshram', '12345', '8208504868', 1, 'e1609956d9cff3ab8128f69608aadd524875', '2021-05-11 20:49:08', '2020-11-22 07:07:11', '2021-05-11 08:04:08'),
(4, 4, 'sansa@got.com', 'Sansa', 'Stark', '12345', '9763602243', 1, NULL, NULL, '2020-11-22 07:08:49', '2020-11-22 07:08:49'),
(5, 3, 'kiranvyavhare277@gmail.com', 'Mahi', 'Pandya', '14785', '7896365214', 1, 'f067bd9d7c6514f4d135f4c823eceed9856', '2021-01-03 19:35:55', '2020-11-27 08:26:26', '2021-01-03 06:56:42'),
(6, 3, 'vikaspawar3110@gmail.com', 'Akshay', 'Pawar', '123456', '8969604252', 1, 'b0c898605539af358c3c50b1647726ed289', '2021-01-03 19:29:28', '2020-11-27 08:56:20', '2021-01-03 06:48:07'),
(7, 3, 'amol.pawar@tkinfotech.com', 'AMOL', 'PAWAR', '12345', '8528968585', 1, NULL, NULL, '2020-11-28 06:06:30', '2020-11-28 06:06:30'),
(8, 4, 'ravindra.kanawade@gmail.com', 'Ravindra', 'Kanawade', 'Ravi@123', '8805664679', 1, NULL, NULL, '2020-11-28 09:51:49', '2020-11-28 09:51:49'),
(10, 3, 'mohini12@gmail.com', 'mohini', 'ka', '12345', '08788329794', 1, NULL, NULL, '2020-11-29 05:37:02', '2020-11-29 05:37:02'),
(13, 3, 'sonali@gmail.com', 'ARISTO CRAT CO-OP', 'SOC', '12345', '8788329794', 1, NULL, NULL, '2020-11-29 05:53:14', '2020-11-29 05:53:14'),
(14, 2, 'vaishali1212@gmail.com', 'VAISHIL ', 'WANI', 'Kiran@123', '9921427562', 1, NULL, NULL, '2020-11-29 06:59:54', '2020-11-29 06:59:54'),
(15, 3, 'gokul1212@gmail.com', 'gokul', 'wani', '12345', '9963256865', 0, NULL, NULL, '2020-11-29 07:02:13', '2020-12-01 10:45:59'),
(16, 3, 'vaibhav1212@gmail.com', 'vaibhav', 'wani', '12345', '665445465', 1, NULL, NULL, '2020-11-29 07:04:02', '2020-11-29 07:04:02'),
(17, 3, 'sunnykalaskar19@gmail.com', 'Sunny', 'Kalasakar', '12345', '7020585616', 1, NULL, NULL, '2020-11-30 09:51:12', '2020-12-02 10:18:06'),
(18, 3, 'system.rakesh@gmail.com', 'Rakesh', 'Kate', '12345', '9823163735', 1, NULL, NULL, '2020-12-03 01:49:00', '2020-12-03 01:49:00'),
(19, 3, 'Satheuttamv@gmail.com', 'Vasant', 'Sathe', '12345', '9890111692', 1, NULL, NULL, '2020-12-03 04:19:05', '2020-12-03 04:19:05'),
(20, 3, 'mahesh@gmail.com', 'Mahesh', 'Malve', '12345', '8007015819', 1, NULL, NULL, '2020-12-16 18:55:47', '2020-12-16 19:17:49'),
(21, 3, 'a@gmail.com', 'aaksah', 'mmm', '12345', '8007015819', 1, NULL, NULL, '2020-12-17 00:33:27', '2020-12-17 00:33:27'),
(22, 3, 'kiran111@gmail.com', 'VAISHIL', 'WANI', '12345', '', 1, NULL, NULL, '2021-01-13 09:22:18', '2021-01-13 09:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `wallet_transaction`
--

CREATE TABLE `wallet_transaction` (
  `transactionid` int(10) UNSIGNED NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `transaction_type` enum('Credit','Debit') NOT NULL,
  `amount` double(11,2) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `transactiondate` datetime NOT NULL,
  `createdat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet_transaction`
--

INSERT INTO `wallet_transaction` (`transactionid`, `payment_id`, `userid`, `transaction_type`, `amount`, `message`, `transactiondate`, `createdat`, `updatedat`) VALUES
(1, NULL, 3, 'Credit', 50000.00, 'Added by vikas', '2020-11-30 20:53:13', '2020-11-30 08:23:50', '2020-11-30 08:23:50'),
(2, NULL, 3, 'Debit', 3.00, 'Debit for service', '2020-11-30 09:21:59', '2020-11-30 08:51:59', '2020-11-30 08:51:59'),
(3, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-02 12:11:03', '2020-12-01 11:41:10', '2020-12-01 11:41:10'),
(4, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-02 12:13:39', '2020-12-01 11:43:44', '2020-12-01 11:43:44'),
(5, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-02 12:15:22', '2020-12-01 11:45:27', '2020-12-01 11:45:27'),
(6, NULL, 3, 'Debit', 500.00, 'Debit for service', '2020-12-02 12:59:19', '2020-12-02 00:29:18', '2020-12-02 00:29:18'),
(7, NULL, 3, 'Debit', 500.00, 'Debit for service', '2020-12-02 05:58:03', '2020-12-02 05:28:03', '2020-12-02 05:28:03'),
(8, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-02 06:04:02', '2020-12-02 05:34:03', '2020-12-02 05:34:03'),
(9, NULL, 3, 'Credit', 500.00, 'Credited amount of Udyom Aadhar service which is rejected by admin', '2020-12-02 07:04:22', '2020-12-02 06:34:25', '2020-12-02 06:34:25'),
(10, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-02 07:54:25', '2020-12-02 07:24:28', '2020-12-02 07:24:28'),
(11, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-02 11:25:26', '2020-12-02 10:55:26', '2020-12-02 10:55:26'),
(12, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-02 11:32:46', '2020-12-02 11:02:46', '2020-12-02 11:02:46'),
(13, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:39:48', '2020-12-02 12:09:48', '2020-12-02 12:09:48'),
(14, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:43:34', '2020-12-02 12:13:36', '2020-12-02 12:13:36'),
(15, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:44:18', '2020-12-02 12:14:19', '2020-12-02 12:14:19'),
(16, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:49:28', '2020-12-02 12:19:31', '2020-12-02 12:19:31'),
(17, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:49:58', '2020-12-02 12:20:00', '2020-12-02 12:20:00'),
(18, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:52:05', '2020-12-02 12:22:07', '2020-12-02 12:22:07'),
(19, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:53:35', '2020-12-02 12:23:37', '2020-12-02 12:23:37'),
(20, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:54:23', '2020-12-02 12:24:25', '2020-12-02 12:24:25'),
(21, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 12:57:35', '2020-12-02 12:27:37', '2020-12-02 12:27:37'),
(22, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 01:11:40', '2020-12-02 12:41:40', '2020-12-02 12:41:40'),
(23, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 01:16:23', '2020-12-02 12:46:23', '2020-12-02 12:46:23'),
(24, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 01:23:40', '2020-12-02 12:53:40', '2020-12-02 12:53:40'),
(25, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-03 02:41:03', '2020-12-02 14:11:03', '2020-12-02 14:11:03'),
(26, NULL, 3, 'Debit', 500.00, 'Debit for service', '2020-12-03 02:47:56', '2020-12-02 14:17:56', '2020-12-02 14:17:56'),
(27, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 11:44:12', '2020-12-02 23:14:12', '2020-12-02 23:14:12'),
(28, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 05:32:04', '2020-12-03 05:02:04', '2020-12-03 05:02:04'),
(29, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-03 09:27:33', '2020-12-03 08:57:33', '2020-12-03 08:57:33'),
(30, NULL, 3, 'Credit', 500.00, 'Credited amount of Udyom Aadhar service which is rejected by admin', '2020-12-03 09:31:17', '2020-12-03 09:01:17', '2020-12-03 09:01:17'),
(31, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-03 09:31:23', '2020-12-03 09:01:23', '2020-12-03 09:01:23'),
(32, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-03 09:31:44', '2020-12-03 09:01:44', '2020-12-03 09:01:44'),
(33, NULL, 3, 'Credit', 500.00, 'Credited amount of Udyom Aadhar service which is rejected by admin', '2020-12-03 09:33:50', '2020-12-03 09:03:50', '2020-12-03 09:03:50'),
(34, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-03 09:38:00', '2020-12-03 09:08:00', '2020-12-03 09:08:00'),
(35, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-04 11:37:35', '2020-12-03 23:07:35', '2020-12-03 23:07:35'),
(36, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-07 10:25:09', '2020-12-06 21:55:09', '2020-12-06 21:55:09'),
(37, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-07 11:06:26', '2020-12-06 22:36:28', '2020-12-06 22:36:28'),
(38, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-07 12:43:34', '2020-12-07 00:13:34', '2020-12-07 00:13:34'),
(39, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-07 12:43:49', '2020-12-07 00:13:49', '2020-12-07 00:13:49'),
(40, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-07 12:49:08', '2020-12-07 00:19:08', '2020-12-07 00:19:08'),
(41, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-07 12:54:26', '2020-12-07 00:24:26', '2020-12-07 00:24:26'),
(42, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-07 01:17:51', '2020-12-07 00:47:51', '2020-12-07 00:47:51'),
(43, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-07 01:21:38', '2020-12-07 00:51:38', '2020-12-07 00:51:38'),
(44, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-07 02:20:22', '2020-12-07 01:50:22', '2020-12-07 01:50:22'),
(45, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-07 02:20:26', '2020-12-07 01:50:26', '2020-12-07 01:50:26'),
(46, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-07 02:23:22', '2020-12-07 01:53:22', '2020-12-07 01:53:22'),
(47, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-07 09:27:56', '2020-12-07 08:57:56', '2020-12-07 08:57:56'),
(48, NULL, 3, 'Debit', 1.00, 'Debit for service', '2020-12-08 07:47:21', '2020-12-07 19:17:29', '2020-12-07 19:17:29'),
(49, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-08 07:57:25', '2020-12-07 19:27:30', '2020-12-07 19:27:30'),
(50, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-08 08:36:33', '2020-12-07 20:06:34', '2020-12-07 20:06:34'),
(51, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-08 08:39:51', '2020-12-07 20:09:52', '2020-12-07 20:09:52'),
(52, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-08 09:01:05', '2020-12-07 20:31:05', '2020-12-07 20:31:05'),
(53, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-08 09:10:59', '2020-12-07 20:41:00', '2020-12-07 20:41:00'),
(54, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-08 09:52:32', '2020-12-08 09:22:32', '2020-12-08 09:22:32'),
(55, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-08 09:57:54', '2020-12-08 09:27:54', '2020-12-08 09:27:54'),
(56, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-08 10:03:58', '2020-12-08 09:33:58', '2020-12-08 09:33:58'),
(57, NULL, 3, 'Debit', 199.00, 'Debit for service', '2020-12-08 10:07:07', '2020-12-08 09:37:07', '2020-12-08 09:37:07'),
(58, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-11 11:32:32', '2020-12-11 11:02:34', '2020-12-11 11:02:34'),
(59, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-11 11:49:03', '2020-12-11 11:19:07', '2020-12-11 11:19:07'),
(60, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-12 12:14:37', '2020-12-11 11:44:40', '2020-12-11 11:44:40'),
(61, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:08:21', '2020-12-12 18:38:27', '2020-12-12 18:38:27'),
(62, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:11:44', '2020-12-12 18:41:50', '2020-12-12 18:41:50'),
(63, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:14:27', '2020-12-12 18:44:33', '2020-12-12 18:44:33'),
(64, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:15:10', '2020-12-12 18:45:16', '2020-12-12 18:45:16'),
(65, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:17:14', '2020-12-12 18:47:20', '2020-12-12 18:47:20'),
(66, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:18:22', '2020-12-12 18:48:28', '2020-12-12 18:48:28'),
(67, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:19:04', '2020-12-12 18:49:10', '2020-12-12 18:49:10'),
(68, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:19:56', '2020-12-12 18:50:02', '2020-12-12 18:50:02'),
(69, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:21:00', '2020-12-12 18:51:06', '2020-12-12 18:51:06'),
(70, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:21:44', '2020-12-12 18:51:50', '2020-12-12 18:51:50'),
(71, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:45:31', '2020-12-12 19:15:33', '2020-12-12 19:15:33'),
(72, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:50:04', '2020-12-12 19:20:05', '2020-12-12 19:20:05'),
(73, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:54:45', '2020-12-12 19:24:46', '2020-12-12 19:24:46'),
(74, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:59:22', '2020-12-12 19:29:23', '2020-12-12 19:29:23'),
(75, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:04:13', '2020-12-12 19:34:15', '2020-12-12 19:34:15'),
(76, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:14:41', '2020-12-12 19:44:42', '2020-12-12 19:44:42'),
(77, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:32:14', '2020-12-12 20:02:15', '2020-12-12 20:02:15'),
(78, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:35:25', '2020-12-12 20:05:26', '2020-12-12 20:05:26'),
(79, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:39:51', '2020-12-12 20:09:53', '2020-12-12 20:09:53'),
(80, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:42:57', '2020-12-12 20:12:58', '2020-12-12 20:12:58'),
(81, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:49:15', '2020-12-12 20:19:17', '2020-12-12 20:19:17'),
(82, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:55:00', '2020-12-12 20:25:02', '2020-12-12 20:25:02'),
(83, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:58:18', '2020-12-12 20:28:19', '2020-12-12 20:28:19'),
(84, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 09:06:41', '2020-12-12 20:36:42', '2020-12-12 20:36:42'),
(85, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 09:15:52', '2020-12-12 20:45:53', '2020-12-12 20:45:53'),
(86, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 09:27:36', '2020-12-12 20:57:38', '2020-12-12 20:57:38'),
(87, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:05:08', '2020-12-12 21:35:11', '2020-12-12 21:35:11'),
(88, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 12:24:31', '2020-12-12 23:54:31', '2020-12-12 23:54:31'),
(89, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 01:20:22', '2020-12-13 00:50:21', '2020-12-13 00:50:21'),
(90, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 01:21:47', '2020-12-13 00:51:47', '2020-12-13 00:51:47'),
(91, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 03:01:12', '2020-12-13 02:31:11', '2020-12-13 02:31:11'),
(92, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 03:20:10', '2020-12-13 02:50:10', '2020-12-13 02:50:10'),
(96, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 04:42:01', '2020-12-13 04:12:00', '2020-12-13 04:12:00'),
(97, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 06:49:04', '2020-12-13 06:19:05', '2020-12-13 06:19:05'),
(98, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 06:51:22', '2020-12-13 06:21:22', '2020-12-13 06:21:22'),
(99, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:06:08', '2020-12-13 06:36:08', '2020-12-13 06:36:08'),
(100, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:08:15', '2020-12-13 06:38:16', '2020-12-13 06:38:16'),
(102, NULL, 3, 'Credit', 799.00, 'Credited amount of GST Annual Return service which is rejected by admin', '2020-12-13 07:36:09', '2020-12-13 07:06:09', '2020-12-13 07:06:09'),
(103, NULL, 3, 'Credit', 799.00, 'Credited amount of GST File Return service which is rejected by admin', '2020-12-13 07:38:02', '2020-12-13 07:08:02', '2020-12-13 07:08:02'),
(104, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 07:48:32', '2020-12-13 07:18:32', '2020-12-13 07:18:32'),
(105, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:06:32', '2020-12-13 07:36:32', '2020-12-13 07:36:32'),
(106, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 08:07:33', '2020-12-13 07:37:33', '2020-12-13 07:37:33'),
(107, NULL, 3, 'Credit', 100000.00, 'Testing Balance', '2020-12-31 21:41:01', '2020-12-13 09:11:30', '2020-12-13 09:11:30'),
(108, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:37:41', '2020-12-13 10:07:43', '2020-12-13 10:07:43'),
(109, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:40:33', '2020-12-13 10:10:35', '2020-12-13 10:10:35'),
(110, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:45:13', '2020-12-13 10:15:15', '2020-12-13 10:15:15'),
(111, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:47:56', '2020-12-13 10:17:58', '2020-12-13 10:17:58'),
(112, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:50:31', '2020-12-13 10:20:32', '2020-12-13 10:20:32'),
(113, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:53:38', '2020-12-13 10:23:40', '2020-12-13 10:23:40'),
(114, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:55:28', '2020-12-13 10:25:30', '2020-12-13 10:25:30'),
(115, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 10:57:54', '2020-12-13 10:27:56', '2020-12-13 10:27:56'),
(116, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 11:05:08', '2020-12-13 10:35:09', '2020-12-13 10:35:09'),
(117, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 11:10:22', '2020-12-13 10:40:23', '2020-12-13 10:40:23'),
(118, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 11:14:46', '2020-12-13 10:44:47', '2020-12-13 10:44:47'),
(119, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 11:18:06', '2020-12-13 10:48:08', '2020-12-13 10:48:08'),
(120, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 11:56:58', '2020-12-13 11:26:59', '2020-12-13 11:26:59'),
(121, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-13 11:59:19', '2020-12-13 11:29:20', '2020-12-13 11:29:20'),
(122, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-14 12:05:26', '2020-12-13 11:35:28', '2020-12-13 11:35:28'),
(123, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-14 12:07:25', '2020-12-13 11:37:27', '2020-12-13 11:37:27'),
(124, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-14 12:13:36', '2020-12-13 11:43:38', '2020-12-13 11:43:38'),
(125, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-14 12:19:01', '2020-12-13 11:49:03', '2020-12-13 11:49:03'),
(126, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-14 11:53:42', '2020-12-14 11:23:47', '2020-12-14 11:23:47'),
(127, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-14 11:57:58', '2020-12-14 11:28:02', '2020-12-14 11:28:02'),
(128, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-15 12:02:59', '2020-12-14 11:33:04', '2020-12-14 11:33:04'),
(129, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 08:42:21', '2020-12-16 20:12:26', '2020-12-16 20:12:26'),
(130, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 08:47:34', '2020-12-16 20:17:39', '2020-12-16 20:17:39'),
(131, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:04:40', '2020-12-16 22:34:42', '2020-12-16 22:34:42'),
(132, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:17:24', '2020-12-16 22:47:27', '2020-12-16 22:47:27'),
(133, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:21:24', '2020-12-16 22:51:27', '2020-12-16 22:51:27'),
(134, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:23:27', '2020-12-16 22:53:30', '2020-12-16 22:53:30'),
(135, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:31:10', '2020-12-16 23:01:13', '2020-12-16 23:01:13'),
(136, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:35:02', '2020-12-16 23:05:05', '2020-12-16 23:05:05'),
(137, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:38:03', '2020-12-16 23:08:06', '2020-12-16 23:08:06'),
(138, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:40:40', '2020-12-16 23:10:43', '2020-12-16 23:10:43'),
(139, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:44:15', '2020-12-16 23:14:18', '2020-12-16 23:14:18'),
(140, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:50:10', '2020-12-16 23:20:13', '2020-12-16 23:20:13'),
(141, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:52:11', '2020-12-16 23:22:14', '2020-12-16 23:22:14'),
(142, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 11:58:57', '2020-12-16 23:29:00', '2020-12-16 23:29:00'),
(143, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 12:08:54', '2020-12-16 23:38:57', '2020-12-16 23:38:57'),
(144, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-17 01:13:30', '2020-12-17 00:43:33', '2020-12-17 00:43:33'),
(145, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-18 11:48:29', '2020-12-17 23:18:31', '2020-12-17 23:18:31'),
(146, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-18 11:53:23', '2020-12-17 23:23:24', '2020-12-17 23:23:24'),
(147, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-18 08:09:19', '2020-12-18 07:39:24', '2020-12-18 07:39:24'),
(148, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-18 09:45:14', '2020-12-18 09:15:17', '2020-12-18 09:15:17'),
(149, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-18 10:00:02', '2020-12-18 09:30:05', '2020-12-18 09:30:05'),
(150, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-18 10:07:40', '2020-12-18 09:37:43', '2020-12-18 09:37:43'),
(151, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-21 11:31:19', '2020-12-21 11:01:21', '2020-12-21 11:01:21'),
(152, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-21 11:31:55', '2020-12-21 11:01:56', '2020-12-21 11:01:56'),
(153, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-21 11:33:14', '2020-12-21 11:03:16', '2020-12-21 11:03:16'),
(154, NULL, 3, 'Debit', 799.00, 'Debit for service', '2020-12-22 10:20:07', '2020-12-21 21:50:11', '2020-12-21 21:50:11'),
(155, NULL, 3, 'Debit', 500.00, 'Debit for service', '2020-12-22 08:28:56', '2020-12-22 07:58:57', '2020-12-22 07:58:57'),
(156, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-24 09:41:57', '2020-12-24 09:11:58', '2020-12-24 09:11:58'),
(157, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-25 09:29:38', '2020-12-25 08:59:37', '2020-12-25 08:59:37'),
(158, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2020-12-25 09:38:10', '2020-12-25 09:08:10', '2020-12-25 09:08:10'),
(159, NULL, 3, 'Debit', 110.00, 'Debit for service', '2020-12-25 10:32:30', '2020-12-25 10:02:31', '2020-12-25 10:02:31'),
(160, NULL, 3, 'Debit', 110.00, 'Debit for service', '2020-12-25 10:33:37', '2020-12-25 10:03:38', '2020-12-25 10:03:38'),
(161, NULL, 3, 'Credit', 500000.00, 'test', '2020-12-25 23:09:52', '2020-12-25 10:40:15', '2020-12-25 10:40:15'),
(162, NULL, 3, 'Debit', 110.00, 'Debit for service', '2020-12-25 11:10:32', '2020-12-25 10:40:31', '2020-12-25 10:40:31'),
(163, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-03 11:47:54', '2021-01-02 23:17:54', '2021-01-02 23:17:54'),
(164, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-03 11:51:11', '2021-01-02 23:21:11', '2021-01-02 23:21:11'),
(165, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 12:01:10', '2021-01-02 23:31:10', '2021-01-02 23:31:10'),
(166, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 12:06:19', '2021-01-02 23:36:19', '2021-01-02 23:36:19'),
(167, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 12:07:30', '2021-01-02 23:37:30', '2021-01-02 23:37:30'),
(168, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 12:09:52', '2021-01-02 23:39:52', '2021-01-02 23:39:52'),
(169, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 12:11:54', '2021-01-02 23:41:54', '2021-01-02 23:41:54'),
(170, NULL, 3, 'Credit', 500.00, 'Credited amount of PF services which is rejected by admin', '2021-01-03 08:04:32', '2021-01-03 00:04:32', '2021-01-03 00:04:32'),
(171, NULL, 3, 'Credit', 199.00, 'Credited amount of Udyom Aadhar service which is rejected by admin', '2021-01-03 12:52:50', '2021-01-03 00:22:50', '2021-01-03 00:22:50'),
(172, NULL, 3, 'Credit', 500.00, 'Credited amount of PF services which is rejected by admin', '2021-01-03 02:24:03', '2021-01-03 06:24:04', '2021-01-03 06:24:04'),
(173, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 09:21:44', '2021-01-03 08:51:44', '2021-01-03 08:51:44'),
(174, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 09:26:21', '2021-01-03 08:56:21', '2021-01-03 08:56:21'),
(175, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 09:27:07', '2021-01-03 08:57:07', '2021-01-03 08:57:07'),
(176, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 11:06:18', '2021-01-03 10:36:19', '2021-01-03 10:36:19'),
(177, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 11:06:49', '2021-01-03 10:36:49', '2021-01-03 10:36:49'),
(178, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 11:07:45', '2021-01-03 10:37:45', '2021-01-03 10:37:45'),
(179, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 11:10:31', '2021-01-03 10:40:31', '2021-01-03 10:40:31'),
(180, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-03 11:13:35', '2021-01-03 10:43:35', '2021-01-03 10:43:35'),
(181, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-05 10:23:43', '2021-01-05 09:53:45', '2021-01-05 09:53:45'),
(183, NULL, 3, 'Credit', 500000.00, 'add by vikas', '2021-01-05 23:15:19', '2021-01-05 10:45:46', '2021-01-05 10:45:46'),
(184, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-01-05 11:21:31', '2021-01-05 10:51:32', '2021-01-05 10:51:32'),
(185, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-01-05 11:23:19', '2021-01-05 10:53:21', '2021-01-05 10:53:21'),
(186, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-01-05 11:24:18', '2021-01-05 10:54:20', '2021-01-05 10:54:20'),
(187, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2021-01-22 09:40:05', '2021-01-22 09:10:08', '2021-01-22 09:10:08'),
(188, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2021-01-22 09:56:17', '2021-01-22 09:26:21', '2021-01-22 09:26:21'),
(189, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2021-01-22 10:14:14', '2021-01-22 09:44:14', '2021-01-22 09:44:14'),
(190, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-22 10:15:52', '2021-01-22 09:45:52', '2021-01-22 09:45:52'),
(191, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2021-01-22 10:46:40', '2021-01-22 10:16:40', '2021-01-22 10:16:40'),
(192, NULL, 3, 'Debit', 1000.00, 'Debit for service', '2021-01-22 10:49:45', '2021-01-22 10:19:45', '2021-01-22 10:19:45'),
(193, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 11:28:03', '2021-01-22 22:58:03', '2021-01-22 22:58:03'),
(194, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 11:57:23', '2021-01-22 23:27:23', '2021-01-22 23:27:23'),
(195, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 02:29:46', '2021-01-23 01:59:46', '2021-01-23 01:59:46'),
(196, NULL, 3, 'Credit', 500.00, 'Credited amount of Digital signature services which is rejected by admin', '2021-01-23 09:02:36', '2021-01-23 02:02:36', '2021-01-23 02:02:36'),
(197, NULL, 3, 'Credit', 500.00, 'Credited amount of Digital signature services which is rejected by admin', '2021-01-23 09:02:44', '2021-01-23 02:02:44', '2021-01-23 02:02:44'),
(198, NULL, 3, 'Debit', 110.00, 'Debit for service', '2021-01-23 03:39:23', '2021-01-23 03:09:23', '2021-01-23 03:09:23'),
(199, NULL, 3, 'Debit', 110.00, 'Debit for service', '2021-01-23 03:45:06', '2021-01-23 03:15:06', '2021-01-23 03:15:06'),
(200, NULL, 3, 'Debit', 1.00, 'Debit for service', '2021-01-23 03:57:02', '2021-01-23 03:27:02', '2021-01-23 03:27:02'),
(201, NULL, 3, 'Credit', 500.00, 'Credited amount of Shop Act service which is rejected by admin', '2021-01-23 04:00:47', '2021-01-23 03:30:47', '2021-01-23 03:30:47'),
(202, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-01-23 04:08:10', '2021-01-23 03:38:10', '2021-01-23 03:38:10'),
(203, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 04:21:01', '2021-01-23 03:51:01', '2021-01-23 03:51:01'),
(204, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 04:21:22', '2021-01-23 03:51:22', '2021-01-23 03:51:22'),
(205, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 04:21:39', '2021-01-23 03:51:39', '2021-01-23 03:51:39'),
(206, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 04:21:46', '2021-01-23 03:51:46', '2021-01-23 03:51:46'),
(207, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-01-23 04:22:56', '2021-01-23 03:52:56', '2021-01-23 03:52:56'),
(208, NULL, 3, 'Credit', 799.00, 'Credited amount of GST File Return service which is rejected by admin', '2021-01-23 04:34:45', '2021-01-23 04:04:45', '2021-01-23 04:04:45'),
(209, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-01-23 04:40:00', '2021-01-23 04:10:00', '2021-01-23 04:10:00'),
(210, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-01-23 04:40:12', '2021-01-23 04:10:12', '2021-01-23 04:10:12'),
(211, NULL, 3, 'Credit', 799.00, 'Credited amount of GST Annual Return service which is rejected by admin', '2021-01-23 04:44:42', '2021-01-23 04:14:42', '2021-01-23 04:14:42'),
(212, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-23 04:48:33', '2021-01-23 04:18:33', '2021-01-23 04:18:33'),
(213, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-23 04:56:02', '2021-01-23 04:26:02', '2021-01-23 04:26:02'),
(214, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-01-23 04:56:41', '2021-01-23 04:26:41', '2021-01-23 04:26:41'),
(220, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-01-23 05:19:23', '2021-01-23 04:49:23', '2021-01-23 04:49:23'),
(221, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-02 03:52:43', '2021-02-02 03:22:43', '2021-02-02 03:22:43'),
(222, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-02 04:56:18', '2021-02-02 04:26:18', '2021-02-02 04:26:18'),
(223, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-02 06:14:37', '2021-02-02 05:44:38', '2021-02-02 05:44:38'),
(224, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-03 02:27:01', '2021-02-03 01:57:02', '2021-02-03 01:57:02'),
(225, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-03 04:38:31', '2021-02-03 04:08:32', '2021-02-03 04:08:32'),
(226, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-03 04:42:17', '2021-02-03 04:12:18', '2021-02-03 04:12:18'),
(227, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-03 04:46:06', '2021-02-03 04:16:07', '2021-02-03 04:16:07'),
(228, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-03 05:08:31', '2021-02-03 04:38:31', '2021-02-03 04:38:31'),
(229, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-03 05:08:49', '2021-02-03 04:38:49', '2021-02-03 04:38:49'),
(230, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 11:57:07', '2021-02-03 23:27:07', '2021-02-03 23:27:07'),
(231, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 12:00:25', '2021-02-03 23:30:25', '2021-02-03 23:30:25'),
(232, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 12:24:01', '2021-02-03 23:54:01', '2021-02-03 23:54:01'),
(233, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 12:25:01', '2021-02-03 23:55:01', '2021-02-03 23:55:01'),
(234, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 12:26:56', '2021-02-03 23:56:56', '2021-02-03 23:56:56'),
(235, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 12:38:33', '2021-02-04 00:08:33', '2021-02-04 00:08:33'),
(236, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 12:43:34', '2021-02-04 00:13:34', '2021-02-04 00:13:34'),
(237, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 01:29:24', '2021-02-04 00:59:24', '2021-02-04 00:59:24'),
(238, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 01:29:34', '2021-02-04 00:59:34', '2021-02-04 00:59:34'),
(239, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 02:22:40', '2021-02-04 01:52:40', '2021-02-04 01:52:40'),
(240, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 06:40:45', '2021-02-04 06:10:46', '2021-02-04 06:10:46'),
(241, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 06:46:23', '2021-02-04 06:16:23', '2021-02-04 06:16:23'),
(242, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:12:58', '2021-02-04 06:42:59', '2021-02-04 06:42:59'),
(243, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:14:11', '2021-02-04 06:44:12', '2021-02-04 06:44:12'),
(244, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:15:26', '2021-02-04 06:45:27', '2021-02-04 06:45:27'),
(245, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:15:59', '2021-02-04 06:46:00', '2021-02-04 06:46:00'),
(246, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:30:18', '2021-02-04 07:00:19', '2021-02-04 07:00:19'),
(247, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:31:07', '2021-02-04 07:01:08', '2021-02-04 07:01:08'),
(248, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:31:51', '2021-02-04 07:01:52', '2021-02-04 07:01:52'),
(249, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:35:20', '2021-02-04 07:05:21', '2021-02-04 07:05:21'),
(250, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:38:29', '2021-02-04 07:08:30', '2021-02-04 07:08:30'),
(251, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 07:41:12', '2021-02-04 07:11:12', '2021-02-04 07:11:12'),
(252, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-02-04 09:27:45', '2021-02-04 08:57:45', '2021-02-04 08:57:45'),
(253, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-02-05 10:35:13', '2021-02-05 10:05:14', '2021-02-05 10:05:14'),
(254, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-02-06 12:26:43', '2021-02-05 23:56:45', '2021-02-05 23:56:45'),
(255, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-02-06 02:00:33', '2021-02-06 01:30:35', '2021-02-06 01:30:35'),
(261, NULL, 3, 'Credit', 500.00, 'Credited amount of Tax Invoice service which is rejected by admin', '2021-02-06 04:31:34', '2021-02-06 04:01:35', '2021-02-06 04:01:35'),
(262, NULL, 3, 'Credit', 500.00, 'Credited amount of Tax Invoice service which is rejected by admin', '2021-02-06 04:32:07', '2021-02-06 04:02:08', '2021-02-06 04:02:08'),
(263, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-03-25 07:57:57', '2021-03-25 07:27:55', '2021-03-25 07:27:55'),
(264, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-03-25 07:58:42', '2021-03-25 07:28:40', '2021-03-25 07:28:40'),
(265, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-03-30 01:37:54', '2021-03-30 01:07:55', '2021-03-30 01:07:55'),
(266, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-03-30 05:16:34', '2021-03-30 04:46:35', '2021-03-30 04:46:35'),
(267, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-03-30 05:16:36', '2021-03-30 04:46:37', '2021-03-30 04:46:37'),
(268, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-03-30 05:16:37', '2021-03-30 04:46:38', '2021-03-30 04:46:38'),
(269, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-04-01 10:16:44', '2021-03-31 21:46:42', '2021-03-31 21:46:42'),
(270, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-04-01 10:16:50', '2021-03-31 21:46:48', '2021-03-31 21:46:48'),
(271, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-04-01 10:17:02', '2021-03-31 21:47:00', '2021-03-31 21:47:00'),
(272, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-04-01 10:21:47', '2021-03-31 21:51:49', '2021-03-31 21:51:49'),
(273, NULL, 3, 'Debit', 199.00, 'Debit for service', '2021-04-01 10:22:06', '2021-03-31 21:52:08', '2021-03-31 21:52:08'),
(274, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-04-15 12:28:25', '2021-04-14 23:58:24', '2021-04-14 23:58:24'),
(275, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-04-17 01:05:42', '2021-04-17 00:35:43', '2021-04-17 00:35:43'),
(276, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-04-17 02:07:35', '2021-04-17 01:37:36', '2021-04-17 01:37:36'),
(277, NULL, 3, 'Credit', 500.00, 'Credited amount of Tax Invoice service which is rejected by admin', '2021-04-18 02:32:34', '2021-04-18 02:02:34', '2021-04-18 02:02:34'),
(278, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-04-18 02:53:36', '2021-04-18 02:23:37', '2021-04-18 02:23:37'),
(279, NULL, 3, 'Credit', 500.00, 'Credited amount of Tax Invoice service which is rejected by admin', '2021-04-18 02:55:02', '2021-04-18 02:25:03', '2021-04-18 02:25:03'),
(280, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-04-18 03:17:00', '2021-04-18 02:47:00', '2021-04-18 02:47:00'),
(281, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 11:49:34', '2021-04-30 23:19:34', '2021-04-30 23:19:34'),
(282, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 11:50:49', '2021-04-30 23:20:50', '2021-04-30 23:20:50'),
(283, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 12:03:49', '2021-04-30 23:33:50', '2021-04-30 23:33:50'),
(284, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 12:04:29', '2021-04-30 23:34:29', '2021-04-30 23:34:29'),
(285, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 12:05:49', '2021-04-30 23:35:50', '2021-04-30 23:35:50'),
(286, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 12:06:41', '2021-04-30 23:36:41', '2021-04-30 23:36:41'),
(287, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 12:07:20', '2021-04-30 23:37:21', '2021-04-30 23:37:21'),
(288, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-01 12:25:57', '2021-04-30 23:55:57', '2021-04-30 23:55:57'),
(289, NULL, 3, 'Credit', 500.00, 'Credited amount of Food Licence services which is rejected by admin', '2021-05-01 11:49:40', '2021-05-01 02:49:41', '2021-05-01 02:49:41'),
(290, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 12:31:49', '2021-05-02 00:01:48', '2021-05-02 00:01:48'),
(291, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 12:33:17', '2021-05-02 00:03:17', '2021-05-02 00:03:17'),
(292, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 12:40:49', '2021-05-02 00:10:48', '2021-05-02 00:10:48'),
(293, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 12:41:36', '2021-05-02 00:11:36', '2021-05-02 00:11:36'),
(294, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 12:42:55', '2021-05-02 00:12:56', '2021-05-02 00:12:56'),
(295, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 12:58:52', '2021-05-02 00:28:51', '2021-05-02 00:28:51'),
(296, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 12:59:41', '2021-05-02 00:29:41', '2021-05-02 00:29:41'),
(297, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 01:32:38', '2021-05-02 01:02:38', '2021-05-02 01:02:38'),
(298, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 01:35:34', '2021-05-02 01:05:34', '2021-05-02 01:05:34'),
(299, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 01:36:49', '2021-05-02 01:06:48', '2021-05-02 01:06:48'),
(300, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 01:39:03', '2021-05-02 01:09:03', '2021-05-02 01:09:03'),
(301, NULL, 3, 'Debit', 200.00, 'Debit for service', '2021-05-02 01:42:28', '2021-05-02 01:12:28', '2021-05-02 01:12:28'),
(302, NULL, 3, 'Credit', 110.00, 'Credited amount of pancard services which is rejected by admin', '2021-05-17 11:39:40', '2021-05-16 23:09:41', '2021-05-16 23:09:41'),
(303, NULL, 3, 'Debit', 110.00, 'Debit for service', '2021-05-17 11:49:43', '2021-05-16 23:19:45', '2021-05-16 23:19:45'),
(304, NULL, 3, 'Credit', 110.00, 'Credited amount of pancard services which is rejected by admin', '2021-05-17 11:51:05', '2021-05-16 23:21:06', '2021-05-16 23:21:06'),
(305, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 12:31:03', '2021-05-17 00:01:03', '2021-05-17 00:01:03'),
(306, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 12:33:24', '2021-05-17 00:03:25', '2021-05-17 00:03:25'),
(307, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 12:33:39', '2021-05-17 00:03:40', '2021-05-17 00:03:40'),
(308, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 12:35:05', '2021-05-17 00:05:06', '2021-05-17 00:05:06'),
(309, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 02:28:32', '2021-05-17 01:58:33', '2021-05-17 01:58:33'),
(310, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 02:30:27', '2021-05-17 02:00:28', '2021-05-17 02:00:28'),
(311, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 02:33:06', '2021-05-17 02:03:07', '2021-05-17 02:03:07'),
(312, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 02:58:12', '2021-05-17 02:28:13', '2021-05-17 02:28:13'),
(313, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-17 02:58:31', '2021-05-17 02:28:32', '2021-05-17 02:28:32'),
(314, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-05-17 03:09:11', '2021-05-17 02:39:12', '2021-05-17 02:39:12'),
(315, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-05-17 03:09:27', '2021-05-17 02:39:28', '2021-05-17 02:39:28'),
(316, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-05-17 03:10:20', '2021-05-17 02:40:21', '2021-05-17 02:40:21'),
(317, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-05-17 03:11:40', '2021-05-17 02:41:41', '2021-05-17 02:41:41'),
(318, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-21 11:23:40', '2021-05-20 22:53:42', '2021-05-20 22:53:42'),
(319, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-21 11:27:14', '2021-05-20 22:57:15', '2021-05-20 22:57:15'),
(320, NULL, 3, 'Debit', 110.00, 'Debit for service', '2021-05-21 05:30:54', '2021-05-21 05:00:54', '2021-05-21 05:00:54'),
(321, NULL, 3, 'Credit', 110.00, 'Credited amount of pancard services which is rejected by admin', '2021-05-21 05:32:29', '2021-05-21 05:02:29', '2021-05-21 05:02:29'),
(322, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-23 02:51:43', '2021-05-23 02:21:42', '2021-05-23 02:21:42'),
(323, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-23 02:54:01', '2021-05-23 02:24:00', '2021-05-23 02:24:00'),
(324, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-23 03:04:38', '2021-05-23 02:34:38', '2021-05-23 02:34:38'),
(325, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-23 03:11:40', '2021-05-23 02:41:40', '2021-05-23 02:41:40'),
(326, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-23 04:26:41', '2021-05-23 03:56:42', '2021-05-23 03:56:42'),
(327, NULL, 3, 'Debit', 750.00, 'Debit for service', '2021-05-23 04:29:53', '2021-05-23 03:59:54', '2021-05-23 03:59:54'),
(328, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-05-23 04:32:27', '2021-05-23 04:02:27', '2021-05-23 04:02:27'),
(329, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-05-23 04:42:59', '2021-05-23 04:12:59', '2021-05-23 04:12:59'),
(330, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-23 05:00:53', '2021-05-23 04:30:54', '2021-05-23 04:30:54'),
(331, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-23 05:03:16', '2021-05-23 04:33:17', '2021-05-23 04:33:17'),
(332, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-23 05:06:02', '2021-05-23 04:36:03', '2021-05-23 04:36:03'),
(333, NULL, 3, 'Debit', 2000.00, 'Debit for service', '2021-05-23 05:07:37', '2021-05-23 04:37:38', '2021-05-23 04:37:38'),
(334, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-05-23 05:11:15', '2021-05-23 04:41:16', '2021-05-23 04:41:16'),
(335, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-23 08:57:23', '2021-05-23 08:27:23', '2021-05-23 08:27:23'),
(336, NULL, 3, 'Credit', 150.00, 'Credited amount of Partnership deed service which is rejected by admin', '2021-05-23 09:45:45', '2021-05-23 09:15:45', '2021-05-23 09:15:45'),
(337, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-23 09:54:22', '2021-05-23 09:24:22', '2021-05-23 09:24:22'),
(338, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-24 09:47:13', '2021-05-23 21:17:13', '2021-05-23 21:17:13'),
(339, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-24 10:25:18', '2021-05-23 21:55:18', '2021-05-23 21:55:18'),
(340, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-24 10:25:41', '2021-05-23 21:55:41', '2021-05-23 21:55:41'),
(341, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-24 10:34:00', '2021-05-23 22:04:00', '2021-05-23 22:04:00'),
(342, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-05-24 10:39:30', '2021-05-23 22:09:30', '2021-05-23 22:09:30'),
(343, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-05-24 10:45:42', '2021-05-23 22:15:42', '2021-05-23 22:15:42'),
(344, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-05-24 10:53:46', '2021-05-23 22:23:46', '2021-05-23 22:23:46'),
(345, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-24 11:02:49', '2021-05-23 22:32:49', '2021-05-23 22:32:49'),
(346, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-24 11:10:50', '2021-05-23 22:40:50', '2021-05-23 22:40:50'),
(347, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-24 11:14:56', '2021-05-23 22:44:56', '2021-05-23 22:44:56'),
(348, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-05-24 11:15:06', '2021-05-23 22:45:06', '2021-05-23 22:45:06'),
(349, NULL, 3, 'Debit', 799.00, 'Debit for service', '2021-05-24 11:15:21', '2021-05-23 22:45:21', '2021-05-23 22:45:21'),
(350, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-05-24 05:38:35', '2021-05-24 05:08:35', '2021-05-24 05:08:35'),
(353, NULL, 3, 'Credit', 799.00, 'Credited amount of GST Registration service which is rejected by admin', '2021-05-24 08:03:42', '2021-05-24 07:33:43', '2021-05-24 07:33:43'),
(354, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-05-25 09:38:53', '2021-05-24 21:08:54', '2021-05-24 21:08:54'),
(355, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-05-25 09:55:36', '2021-05-24 21:25:37', '2021-05-24 21:25:37'),
(356, NULL, 3, 'Debit', 10.00, 'Debit for service', '2021-05-25 09:56:09', '2021-05-24 21:26:10', '2021-05-24 21:26:10'),
(357, NULL, 3, 'Credit', 799.00, 'Credited amount of GST File Return service which is rejected by admin', '2021-05-25 01:31:52', '2021-05-25 01:01:52', '2021-05-25 01:01:52'),
(358, NULL, 3, 'Credit', 799.00, 'Credited amount of GST File Return service which is rejected by admin', '2021-05-25 01:33:57', '2021-05-25 01:03:57', '2021-05-25 01:03:57'),
(359, NULL, 3, 'Credit', 799.00, 'Credited amount of GST File Return service which is rejected by admin', '2021-05-25 01:36:25', '2021-05-25 01:06:25', '2021-05-25 01:06:25'),
(360, NULL, 3, 'Credit', 799.00, 'Credited amount of GST File Return service which is rejected by admin', '2021-05-25 01:45:43', '2021-05-25 01:15:43', '2021-05-25 01:15:43'),
(361, NULL, 3, 'Credit', 500.00, 'Credited amount of GST File Return service which is rejected by admin', '2021-05-25 01:49:40', '2021-05-25 01:19:40', '2021-05-25 01:19:40'),
(362, NULL, 3, 'Debit', 750.00, 'Debit for service', '2021-05-25 01:52:04', '2021-05-25 01:22:04', '2021-05-25 01:22:04'),
(363, NULL, 3, 'Credit', 750.00, 'Credited amount of GST File Return service which is rejected by admin', '2021-05-25 01:52:44', '2021-05-25 01:22:44', '2021-05-25 01:22:44'),
(364, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-25 04:39:15', '2021-05-25 04:09:14', '2021-05-25 04:09:14'),
(365, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-25 04:44:41', '2021-05-25 04:14:41', '2021-05-25 04:14:41'),
(366, NULL, 3, 'Debit', 500.00, 'Debit for service', '2021-05-25 05:03:51', '2021-05-25 04:33:51', '2021-05-25 04:33:51'),
(367, NULL, 3, 'Credit', 500.00, 'Credited amount of Tax Invoice service which is rejected by admin', '2021-05-25 05:06:39', '2021-05-25 04:36:38', '2021-05-25 04:36:38'),
(368, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-25 06:07:54', '2021-05-25 05:37:54', '2021-05-25 05:37:54'),
(369, NULL, 3, 'Debit', 150.00, 'Debit for service', '2021-05-25 06:13:55', '2021-05-25 05:43:55', '2021-05-25 05:43:55'),
(370, NULL, 3, 'Credit', 150.00, 'Credited amount of Food Licence services which is rejected by admin', '2021-05-25 02:48:00', '2021-05-25 05:48:00', '2021-05-25 05:48:00');

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
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`certid`);

--
-- Indexes for table `certificates_docs`
--
ALTER TABLE `certificates_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `company_directors`
--
ALTER TABLE `company_directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_reg`
--
ALTER TABLE `company_reg`
  ADD PRIMARY KEY (`companyid`);

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
-- Indexes for table `deed_docs`
--
ALTER TABLE `deed_docs`
  ADD PRIMARY KEY (`docid`);

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
-- Indexes for table `ewaybill`
--
ALTER TABLE `ewaybill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `ewaybill_invoice_details`
--
ALTER TABLE `ewaybill_invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eway_bill_details`
--
ALTER TABLE `eway_bill_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eway_shiping_details`
--
ALTER TABLE `eway_shiping_details`
  ADD PRIMARY KEY (`shipid`);

--
-- Indexes for table `food_licence`
--
ALTER TABLE `food_licence`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `food_licence_docs`
--
ALTER TABLE `food_licence_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `gst_annual_docs`
--
ALTER TABLE `gst_annual_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `gst_annual_return`
--
ALTER TABLE `gst_annual_return`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `gst_docs`
--
ALTER TABLE `gst_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `gst_file`
--
ALTER TABLE `gst_file`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `gst_file_docs`
--
ALTER TABLE `gst_file_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `gst_partners`
--
ALTER TABLE `gst_partners`
  ADD PRIMARY KEY (`gpid`);

--
-- Indexes for table `gst_service`
--
ALTER TABLE `gst_service`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `incometax`
--
ALTER TABLE `incometax`
  ADD PRIMARY KEY (`inid`);

--
-- Indexes for table `incometax_partners`
--
ALTER TABLE `incometax_partners`
  ADD PRIMARY KEY (`inpid`);

--
-- Indexes for table `income_docs`
--
ALTER TABLE `income_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pan_docs`
--
ALTER TABLE `pan_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `pan_service`
--
ALTER TABLE `pan_service`
  ADD PRIMARY KEY (`panid`);

--
-- Indexes for table `partnership_deed`
--
ALTER TABLE `partnership_deed`
  ADD PRIMARY KEY (`deedid`);

--
-- Indexes for table `partnership_deed_partners`
--
ALTER TABLE `partnership_deed_partners`
  ADD PRIMARY KEY (`fileid`);

--
-- Indexes for table `partnership_partner_investment`
--
ALTER TABLE `partnership_partner_investment`
  ADD PRIMARY KEY (`investmentid`);

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
-- Indexes for table `remarks_document`
--
ALTER TABLE `remarks_document`
  ADD PRIMARY KEY (`remarkid`);

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
  ADD UNIQUE KEY `serviceid` (`servicename`);

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
-- Indexes for table `shopact_docs`
--
ALTER TABLE `shopact_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `shopact_partners`
--
ALTER TABLE `shopact_partners`
  ADD PRIMARY KEY (`shid`);

--
-- Indexes for table `shop_details`
--
ALTER TABLE `shop_details`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tax_invoice`
--
ALTER TABLE `tax_invoice`
  ADD PRIMARY KEY (`invoiceid`);

--
-- Indexes for table `udyog_adhar`
--
ALTER TABLE `udyog_adhar`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `udyog_docs`
--
ALTER TABLE `udyog_docs`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `udyog_partners`
--
ALTER TABLE `udyog_partners`
  ADD PRIMARY KEY (`upid`);

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
  ADD UNIQUE KEY `emailid` (`emailid`,`contact`),
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
  MODIFY `activityid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `certid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificates_docs`
--
ALTER TABLE `certificates_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_directors`
--
ALTER TABLE `company_directors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_reg`
--
ALTER TABLE `company_reg`
  MODIFY `companyid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `criteria_documents`
--
ALTER TABLE `criteria_documents`
  MODIFY `criteriaid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deed_docs`
--
ALTER TABLE `deed_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `digital_docs`
--
ALTER TABLE `digital_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `digital_signature`
--
ALTER TABLE `digital_signature`
  MODIFY `did` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `distributors_retailors`
--
ALTER TABLE `distributors_retailors`
  MODIFY `distretid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_master`
--
ALTER TABLE `document_master`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_service`
--
ALTER TABLE `employee_service`
  MODIFY `empserviceid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ewaybill`
--
ALTER TABLE `ewaybill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ewaybill_invoice_details`
--
ALTER TABLE `ewaybill_invoice_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `eway_bill_details`
--
ALTER TABLE `eway_bill_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eway_shiping_details`
--
ALTER TABLE `eway_shiping_details`
  MODIFY `shipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_licence`
--
ALTER TABLE `food_licence`
  MODIFY `foodid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `food_licence_docs`
--
ALTER TABLE `food_licence_docs`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `gst_annual_docs`
--
ALTER TABLE `gst_annual_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gst_annual_return`
--
ALTER TABLE `gst_annual_return`
  MODIFY `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gst_docs`
--
ALTER TABLE `gst_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gst_file`
--
ALTER TABLE `gst_file`
  MODIFY `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `gst_file_docs`
--
ALTER TABLE `gst_file_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `gst_partners`
--
ALTER TABLE `gst_partners`
  MODIFY `gpid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `gst_service`
--
ALTER TABLE `gst_service`
  MODIFY `gid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `incometax`
--
ALTER TABLE `incometax`
  MODIFY `inid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `incometax_partners`
--
ALTER TABLE `incometax_partners`
  MODIFY `inpid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `income_docs`
--
ALTER TABLE `income_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pan_docs`
--
ALTER TABLE `pan_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pan_service`
--
ALTER TABLE `pan_service`
  MODIFY `panid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partnership_deed`
--
ALTER TABLE `partnership_deed`
  MODIFY `deedid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partnership_deed_partners`
--
ALTER TABLE `partnership_deed_partners`
  MODIFY `fileid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `partnership_partner_investment`
--
ALTER TABLE `partnership_partner_investment`
  MODIFY `investmentid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `partner_details`
--
ALTER TABLE `partner_details`
  MODIFY `partnerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  MODIFY `paymentid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `pf_docs`
--
ALTER TABLE `pf_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pf_withdrwal`
--
ALTER TABLE `pf_withdrwal`
  MODIFY `pfid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `proof_docs`
--
ALTER TABLE `proof_docs`
  MODIFY `pdid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remarks_document`
--
ALTER TABLE `remarks_document`
  MODIFY `remarkid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `residential_details`
--
ALTER TABLE `residential_details`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

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
  MODIFY `chargesid` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_documents`
--
ALTER TABLE `service_documents`
  MODIFY `sdid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_master`
--
ALTER TABLE `service_master`
  MODIFY `serviceid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_subcategorys`
--
ALTER TABLE `service_subcategorys`
  MODIFY `categoryid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `shopactid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shopact_docs`
--
ALTER TABLE `shopact_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `shopact_partners`
--
ALTER TABLE `shopact_partners`
  MODIFY `shid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shop_details`
--
ALTER TABLE `shop_details`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `tax_invoice`
--
ALTER TABLE `tax_invoice`
  MODIFY `invoiceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `udyog_adhar`
--
ALTER TABLE `udyog_adhar`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `udyog_docs`
--
ALTER TABLE `udyog_docs`
  MODIFY `docid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `udyog_partners`
--
ALTER TABLE `udyog_partners`
  MODIFY `upid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_access_control`
--
ALTER TABLE `user_access_control`
  MODIFY `accessid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  MODIFY `transactionid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=371;

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
  ADD CONSTRAINT `user_access_control_ibfk_1` FOREIGN KEY (`activityid`) REFERENCES `activities` (`activityid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_access_control_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user_master` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_master`
--
ALTER TABLE `user_master`
  ADD CONSTRAINT `user_master_ibfk_1` FOREIGN KEY (`roleid`) REFERENCES `role_master` (`roleid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `wallet_transaction`
--
ALTER TABLE `wallet_transaction`
  ADD CONSTRAINT `wallet_transaction_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user_master` (`userid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
