-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 06:56 PM
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
-- Table structure for table `carpet`
--

CREATE TABLE `carpet` (
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` int(8) NOT NULL,
  `repassword` int(8) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carpet`
--

INSERT INTO `carpet` (`username`, `email`, `password`, `repassword`, `admin`) VALUES
('dfdfdf', 'amiam@gmail.com', 147, 177, 0),
('amir', 'amiam@gmail.com', 123, 123, 0),
('ali', 'amiam5311@gmail.com', 123, 123, 0),
('admin', 'dfdfdggfg@gmail.com', 1234, 1234, 1),
('amir1', ' afdsf@gmail.com', 123, 123, 1),
('ali', 'amiam5311@gmail.com', 1234, 1234, 0),
('hgihuiui', 'amiam5311@gmail.com', 21651, 16161, 0),
('', '', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
