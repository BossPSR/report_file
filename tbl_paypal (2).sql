-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 10:43 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report_file`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_paypal`
--

CREATE TABLE `tbl_paypal` (
  `id` int(11) NOT NULL,
  `orderID` varchar(255) NOT NULL,
  `payerID` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency_code` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `create_time` datetime NOT NULL,
  `start_time` datetime DEFAULT NULL,
  `status_drop` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_paypal`
--

INSERT INTO `tbl_paypal` (`id`, `orderID`, `payerID`, `amount`, `currency_code`, `user_id`, `first_name`, `last_name`, `create_time`, `start_time`, `status_drop`) VALUES
(2, '', '', 0, 'USD', 4, '', '', '2020-01-28 16:41:41', '2020-02-26 16:41:41', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_paypal`
--
ALTER TABLE `tbl_paypal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_paypal`
--
ALTER TABLE `tbl_paypal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
