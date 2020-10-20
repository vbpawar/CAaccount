-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 08:50 PM
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
-- Database: `chataccount`
--

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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ca_certificate`
--

INSERT INTO `ca_certificate` (`certid`, `userid`, `nameasperadhar`, `pancardnumber`, `mobilenumber`, `emailid`, `shopaddress`, `homeaddress`, `reason`, `createdat`, `updatedat`) VALUES
(2, 1, 'PAWAR Laxman BHASKAR', 'EEVPP4596B', '9657613754', 'vikaspawar3110@gmail.com', 'Pune Maharashtra', 'Rahuri Ahmadnagar Maharashtra', 'for school', '2020-10-18 23:39:05', '2020-10-20 22:57:57');

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
-- Table structure for table `distributors_retailors`
--

CREATE TABLE `distributors_retailors` (
  `distretid` int(10) UNSIGNED NOT NULL,
  `distributorid` int(10) UNSIGNED NOT NULL,
  `retailorid` int(10) UNSIGNED NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_waybill`
--

INSERT INTO `e_waybill` (`billid`, `userid`, `gstnumber`, `gstid`, `gstpwd`, `mobilenumber`, `emailid`, `createdat`, `updatedat`) VALUES
(2, 1, '9745852', '78456123', '7410258', '8208504868', 'vbpawar311@gmail.com', '2020-10-20 00:04:37', '2020-10-20 00:04:37'),
(3, 1, '9745852', '78456123', '7410258', '8208504868', 'vbpawar311@gmail.com', '2020-10-20 00:06:22', '2020-10-20 00:06:22');

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
  `createat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `repayment_shedule` smallint(1) NOT NULL DEFAULT 0,
  `lastyear_bal_sheet` smallint(1) NOT NULL DEFAULT 0,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
  `flag` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `createdat` datetime NOT NULL DEFAULT current_timestamp(),
  `updatedat` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
-- AUTO_INCREMENT for table `ca_certificate`
--
ALTER TABLE `ca_certificate`
  MODIFY `certid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_master`
--
ALTER TABLE `contact_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `criteria_documents`
--
ALTER TABLE `criteria_documents`
  MODIFY `criteriaid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distributors_retailors`
--
ALTER TABLE `distributors_retailors`
  MODIFY `distretid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `billid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_transaction`
--
ALTER TABLE `payment_transaction`
  MODIFY `paymentid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projectedbalancesheet`
--
ALTER TABLE `projectedbalancesheet`
  MODIFY `projectedid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_report`
--
ALTER TABLE `project_report`
  MODIFY `reportid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
