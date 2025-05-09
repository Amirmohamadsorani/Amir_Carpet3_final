-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 10:54 AM
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
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` int(8) NOT NULL,
  `repassword` int(8) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `carpet`
--

INSERT INTO `carpet` (`username`, `email`, `password`, `repassword`, `admin`, `id`) VALUES
('amir', 'amiam5311@gmail.com', 1234, 1234, 1, 1),
('ali', 'amiam5311@gmail.com', 123, 123, 0, 13),
('amir1', 'amiam5311@gmail.com', 12345, 12345, 0, 14),
('علی پیرمردایان', 'amiam5311@gmail.com', 123456, 123456, 0, 16),
('hesam', 'amiam5311@gmail.com', 12, 12, 0, 17),
('amir1', 'amiam5311@gmail.com', 10, 10, 0, 18),
('wq', 'amiam5311@gmail.com', 14, 14, 0, 19),
('hgihuiui', 'amiam5311@gmail.com', 52, 52, 0, 20),
('test', 'amiam5354711@gmail.com', 1387, 1387, 0, 21),
('po', 'amiam5311@gmail.com', 11, 11, 0, 22),
('admin', 'admin@gmail.com', 1234, 1234, 1, 24),
('salemi', 'amiam5311@gmail.com', 12345, 12345, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `mahsol`
--

CREATE TABLE `mahsol` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ghymat` int(11) NOT NULL,
  `imageurl` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `explane` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `mahsol`
--

INSERT INTO `mahsol` (`id`, `name`, `ghymat`, `imageurl`, `explane`) VALUES
(1, 'کات بی', 4500000, 'picture/catbi.webp', 'موکت پالاز کات B یکی دیگر از موکت های پر طرفدار شرکت پالاز است ، که با استفاده از فناوری‌های پیشرفته و مواد با کیفیت بالا تولید می‌شود'),
(2, 'یاسمن', 6200000, 'picture/yasaman.webp', 'موکت پالاز یاسمن، یکی از موکت های با کیفیت و زیبا است که بسیاری از افراد برای تزیین فضاهای داخلی منازل، محل کار، هتل ها و رستوران ها استفاده می کنند'),
(3, 'یاس', 7400000, 'picture/yas.webp', 'خرید موکت پالاز یاس (Pallas Yash) یکی از مواردی است که در طراحی و دکوراسیون داخلی فضاها بسیار مهم است.'),
(4, 'الماس', 16000000, 'picture/almas.webp', 'موکت الماس، محصولی باکیفیت از شرکت پالاز، به دلیل داشتن ویژگی‌های منحصر به فرد، همچنان یکی از محبوب‌ترین گزینه‌ها برای کف‌پوش منازل به شمار می‌رود'),
(5, 'افرا', 4950000, 'picture/afra.webp', 'موکت پالاز افرا یکی موکت‌های با کیفیت و طراحی زیبا رایج در بازار است، که توسط شرکت پالاز موکت تولید می‌شود. این موکت با استفاده از جنس الیاف مصنوعی با دوام و مقاومت بالا ساخته شده است.'),
(6, 'زیبا', 3190000, 'picture/ziba.webp', 'پالاز موکت طرح زیبا یکی از محصولات محبوب در بازار کفپوش‌ها است که به دلیل طراحی منحصر به فرد و کیفیت بالا، طرفداران زیادی پیدا کرده است'),
(7, 'باران', 5230000, 'picture/baran.jpg', 'پالاز موکت طرح زیبا یکی از محصولات محبوب در بازار کفپوش‌ها است که به دلیل طراحی منحصر به فرد و کیفیت بالا، طرفداران زیادی پیدا کرده است'),
(8, 'ونوس', 8690000, 'picture/venod.webp', 'موکت پالاز طرح ونوس از جمله موکت های جدید و تخصصی پالاز است. این محصول به طور تخصص برای هتل ها و کاربری های اداری و فرهنگی طراحی و تولید شده است.'),
(9, 'سنوبر', 18600000, 'picture/senobar.webp', 'پالاز موکت طرح سنوبریکی از محصولات محبوب در بازار کفپوش‌ها است که به دلیل طراحی منحصر به فرد و کیفیت بالا، طرفداران زیادی پیدا کرده است');

-- --------------------------------------------------------

--
-- Table structure for table `sellform_panel`
--

CREATE TABLE `sellform_panel` (
  `username` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id` int(10) NOT NULL,
  `meter` int(10) NOT NULL,
  `ghymat` int(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `address` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `carpet_name` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `idk` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `sellform_panel`
--

INSERT INTO `sellform_panel` (`username`, `id`, `meter`, `ghymat`, `mobile`, `address`, `email`, `carpet_name`, `idk`, `totalprice`) VALUES
('amir', 24, 63, 3190000, 2147483647, 'شیراز', 'amiam5312@gmail.com', 'زیبا', 0, 0),
('salemi', 25, 100, 18600000, 2040505545, 'نجب باد', 'amiam5312@gmail.com', 'سنوبر', 0, 0),
('salemi', 26, 80, 8690000, 2147483647, 'نجب باد', 'amiam5354711@gmail.c', 'ونوس', 0, 0),
('admin', 27, 100, 6200000, 2147483647, 'اصفهان', 'amiam5354711@gmail.c', 'یاسمن', 24, 0),
('amir', 28, 63, 7400000, 2040505545, 'sasa', 'amiam5354711@gmail.c', 'یاس', 24, 0),
('', 29, 0, 7400000, 0, '', '', 'یاس', 24, 0),
(';;l;;', 30, 0, 7400000, 0, '', '', 'یاس', 24, 0),
('', 31, 0, 7400000, 0, '', '', 'یاس', 24, 0),
('', 32, 0, 8690000, 0, '', '', 'ونوس', 24, 0),
('', 33, 0, 8690000, 0, '', '', 'ونوس', 24, 0),
('amir1', 34, 100, 4500000, 2147483647, 'شیراز', 'amiam5354711@gmail.c', 'کات', 0, 450),
('amir1', 35, 63, 6200000, 2147483647, 'اصفهان', 'amiam5312@gmail.com', 'یاسمن', 1, 390600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carpet`
--
ALTER TABLE `carpet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahsol`
--
ALTER TABLE `mahsol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellform_panel`
--
ALTER TABLE `sellform_panel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carpet`
--
ALTER TABLE `carpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sellform_panel`
--
ALTER TABLE `sellform_panel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
