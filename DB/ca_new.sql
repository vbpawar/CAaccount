-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 09:53 AM
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
-- Database: `ca_new`
--

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
(2, 'BANK OF BADODA', '91700258595', 'IFSC006T', '2020-11-13 12:27:03', '2020-11-13 12:53:26');

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
(2, 'PAWAR VIKAS BHASKAR', 'EEVPP45B', 'PAWAR VIKAS', '636458396367', '9657613754', 'vikas.nucleon@gmail.com', '0000-00-00', '2020-11-13 12:27:03', '2020-11-13 12:53:26');

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
(2, 'GOKUL COLONY', '24', 'STATION ROAD', 'NEAR POLICE STATION', 'RAHURI', 'RAHURI', 'AHMADNAGAR', 'UP', '415896', '2020-11-13 12:27:03', '2020-11-13 12:53:26');

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
  `status` varchar(25) NOT NULL DEFAULT 'New',
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `digital_signature`
--
ALTER TABLE `digital_signature`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `partner_details`
--
ALTER TABLE `partner_details`
  ADD PRIMARY KEY (`partnerid`);

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
-- Indexes for table `residential_details`
--
ALTER TABLE `residential_details`
  ADD PRIMARY KEY (`rid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `digital_signature`
--
ALTER TABLE `digital_signature`
  MODIFY `did` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_details`
--
ALTER TABLE `partner_details`
  MODIFY `partnerid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `pid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pf_withdrwal`
--
ALTER TABLE `pf_withdrwal`
  MODIFY `pfid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `residential_details`
--
ALTER TABLE `residential_details`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shop_details`
--
ALTER TABLE `shop_details`
  MODIFY `sid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `udyog_adhar`
--
ALTER TABLE `udyog_adhar`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
