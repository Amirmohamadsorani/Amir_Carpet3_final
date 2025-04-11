-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 07:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amir`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellform_panel`
--

CREATE TABLE `sellform_panel` (
  `username` varchar(30) NOT NULL,
  `id` int(10) NOT NULL,
  `meter` int(10) NOT NULL,
  `ghymat` int(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(400) NOT NULL,
  `email` varchar(20) NOT NULL,
  `carpet_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellform_panel`
--

INSERT INTO `sellform_panel` (`username`, `id`, `meter`, `ghymat`, `mobile`, `address`, `email`, `carpet_name`) VALUES
('علی پیرمردایان', 1, 100, 15000000, 2147483647, 'شیراز', 'amiam5311@gmail.com', 'پونه'),
('', 2, 0, 0, 0, '', '', ''),
('حسام فروغی', 3, 100, 0, 2147483647, 'اصفهان', 'amiam5311@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellform_panel`
--
ALTER TABLE `sellform_panel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellform_panel`
--
ALTER TABLE `sellform_panel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
