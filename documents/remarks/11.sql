-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 27, 2020 at 02:21 PM
-- Server version: 10.1.45-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spine360_spine`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `upassword` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `addharId` varchar(50) NOT NULL,
  `designation` varchar(200) NOT NULL,
  `branchId` int(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `firmName` varchar(150) NOT NULL,
  `isActive` int(11) NOT NULL DEFAULT '1',
  `sign` text NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`userId`, `username`, `upassword`, `mobile`, `addharId`, `designation`, `branchId`, `address`, `firmName`, `isActive`, `sign`, `createdAt`) VALUES
(1, 'Dr. Pradyna Pansare', 'Pradnya@6687', '9822326687', '', 'Physiotherapist', 1, '', 'Mobility', 1, 'BPT ', '2020-03-03 13:26:15'),
(23, 'Dr. Mansi Songirkar', 'Mansi@6458', '7774916458', '', 'Physiotherapist', 7, '', 'Nliven', 1, '', '2020-03-03 13:26:15'),
(25, 'Dr. Shriya Patel', 'Shriya@3696', '8446993696', '', 'Physiotherapist', 10, '', 'Kriday', 1, '', '2020-03-03 13:26:15'),
(27, 'Prajakta Tamhankar', 'Prajakta@5907', '7057665907', '', 'Front Desk Executive', 1, '', 'Mobility', 1, '', '2020-03-03 13:26:15'),
(31, 'Dr. Rashmi Mathur', 'Rashmi@3393', '8489333393', '', 'Operations Manager', 1, '', 'RWC', 1, '', '2020-03-03 13:26:15'),
(33, 'Dr. Jesley Jose', 'Jesly@4474', '8594074474', '', 'Physiotherapist', 10, '', 'Kriday', 1, '', '2020-03-03 13:26:15'),
(34, 'Dr. Abhirami J', 'Abhirami@5669', '7506735669', '', 'Physiotherapist', 9, '', 'Laespina ', 1, '', '2020-03-16 08:12:09'),
(35, 'R. Vighnesh', 'Vignesh2161@spine360', '9361852161', '', 'CEO', 1, '', 'RWC', 1, '', '2020-03-18 12:37:54'),
(36, 'Mary Roshmy T. A.', 'Mary@8890', '8089238890', '', 'Front Desk Executive', 9, '', 'Laespina ', 1, '', '2020-07-16 05:35:42'),
(37, 'Dr. Siddharth Mathur', 'Sidjarth@0706', '8619760706', '', 'Franchise Owner', 1, '', 'Mobility', 1, '', '2020-03-03 13:26:15'),
(38, 'Dr. Pramod Patil', 'Pramod@3993\r\n', '9403963993', '', 'Franchise Owner\r\n', 7, '', 'Nliven', 1, '', '2020-03-03 13:26:15'),
(39, 'Haritha Krishanan', 'Haritha@5122', '8606415122', '', 'Physiotherapist', 9, '', 'Laespina ', 1, '', '2020-03-03 13:26:15'),
(40, 'Archana Vikas Lokhande', 'Archana@0080', '8098800080', '', 'Front Desk Executive', 10, '', 'Kriday', 1, '', '2020-03-03 13:26:15'),
(41, 'Dr. Nilesh Patil', 'Nilesh@5912', '7720005912', '', 'Franchise Owner\r\n', 10, '', 'Kriday', 1, '', '2020-03-03 13:26:15'),
(42, 'Dr. Vinit Dhohkcule', 'Dhohkcule@2067', '9975292067', '', 'Physiotherapist', 11, '', 'Royal Medical Center', 1, '', '2020-03-03 13:26:15'),
(43, 'Pratik', 'Pratik@4567', '9765074567', '', 'Front Desk Executive', 11, '', 'Royal Medical Center', 1, '', '2020-03-03 13:26:15'),
(44, 'TEST', '1234', '9011015859', '', '', 12, 'aasfasfa', '', 0, '', '2020-08-14 07:41:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`userId`),
  ADD KEY `branchId` (`branchId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_master`
--
ALTER TABLE `user_master`
  ADD CONSTRAINT `user_master_ibfk_1` FOREIGN KEY (`branchId`) REFERENCES `hospital_branch_master` (`branchId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
