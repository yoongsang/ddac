-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2017 at 12:34 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddac`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `admin_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `admin_username`, `admin_password`, `admin_name`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Yoong Sang'),
(4, 'admin2', '202cb962ac59075b964b07152d234b70', 'Lim');

-- --------------------------------------------------------

--
-- Table structure for table `ship_import`
--

CREATE TABLE `ship_import` (
  `ID` int(11) NOT NULL,
  `container_number` varchar(255) DEFAULT NULL,
  `container_description` varchar(255) DEFAULT NULL,
  `actual_date` varchar(255) DEFAULT NULL,
  `ship_status` varchar(255) DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ship_import`
--

INSERT INTO `ship_import` (`ID`, `container_number`, `container_description`, `actual_date`, `ship_status`, `schedule_id`) VALUES
(4, 'EDB', 'Furniture', '', 'Shipping', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ship_schedules`
--

CREATE TABLE `ship_schedules` (
  `ID` int(11) NOT NULL,
  `ship_name` varchar(255) DEFAULT NULL,
  `date_out` varchar(255) DEFAULT NULL,
  `date_receive` varchar(255) DEFAULT NULL,
  `location_from` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `service_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `ship_schedules`
--

INSERT INTO `ship_schedules` (`ID`, `ship_name`, `date_out`, `date_receive`, `location_from`, `destination`, `service_type`) VALUES
(1, 'A100', '14-Jul-2017', '21-Jul-2017', 'Johor', 'China', 'Export'),
(2, 'B180', '15-Jul-2017', '27-Jul-2017', 'Pelabuhan klang', 'Indonesia', 'Transshipment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ship_import`
--
ALTER TABLE `ship_import`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ship_schedules`
--
ALTER TABLE `ship_schedules`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ship_import`
--
ALTER TABLE `ship_import`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ship_schedules`
--
ALTER TABLE `ship_schedules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
