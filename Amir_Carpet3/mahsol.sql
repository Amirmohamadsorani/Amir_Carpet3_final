-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 06:55 PM
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
-- Table structure for table `mahsol`
--

CREATE TABLE `mahsol` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `ghymat` int(11) NOT NULL,
  `imageurl` varchar(100) NOT NULL,
  `explane` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahsol`
--

INSERT INTO `mahsol` (`id`, `name`, `ghymat`, `imageurl`, `explane`) VALUES
(1, 'کات بی', 4490000, 'picture/catbi.webp', 'موکت پالاز کات B یکی دیگر از موکت های پر طرفدار شرکت پالاز است ، که با استفاده از فناوری‌های پیشرفته و مواد با کیفیت بالا تولید می‌شود'),
(2, 'یاسمن', 6200000, 'picture/yasaman.webp', 'موکت پالاز یاسمن، یکی از موکت های با کیفیت و زیبا است که بسیاری از افراد برای تزیین فضاهای داخلی منازل، محل کار، هتل ها و رستوران ها استفاده می کنند'),
(3, 'یاس', 7400000, 'picture/yas.webp', 'خرید موکت پالاز یاس (Pallas Yash) یکی از مواردی است که در طراحی و دکوراسیون داخلی فضاها بسیار مهم است.'),
(4, 'الماس', 16000000, 'picture/almas.webp', 'موکت الماس، محصولی باکیفیت از شرکت پالاز، به دلیل داشتن ویژگی‌های منحصر به فرد، همچنان یکی از محبوب‌ترین گزینه‌ها برای کف‌پوش منازل به شمار می‌رود'),
(5, 'افرا', 4950000, 'picture/afra.webp', 'موکت پالاز افرا یکی موکت‌های با کیفیت و طراحی زیبا رایج در بازار است، که توسط شرکت پالاز موکت تولید می‌شود. این موکت با استفاده از جنس الیاف مصنوعی با دوام و مقاومت بالا ساخته شده است.'),
(6, 'زیبا', 3190000, 'picture/ziba.webp', 'پالاز موکت طرح زیبا یکی از محصولات محبوب در بازار کفپوش‌ها است که به دلیل طراحی منحصر به فرد و کیفیت بالا، طرفداران زیادی پیدا کرده است'),
(7, 'باران', 5190000, 'picture/baran.jpg', 'پالاز موکت طرح زیبا یکی از محصولات محبوب در بازار کفپوش‌ها است که به دلیل طراحی منحصر به فرد و کیفیت بالا، طرفداران زیادی پیدا کرده است'),
(8, 'ونوس', 8690000, 'picture/venod.webp', 'موکت پالاز طرح ونوس از جمله موکت های جدید و تخصصی پالاز است. این محصول به طور تخصص برای هتل ها و کاربری های اداری و فرهنگی طراحی و تولید شده است.'),
(9, 'زیبا اسپورت', 3490000, 'picture/zibaesport.jpg', 'موکت پالاز زیبا اسپرت یکی از محصولات جذاب و مقاوم شرکت پالاز موکت است که به‌دلیل طراحی خاص و ویژگی‌های فنی مورد استقبال مشتریان قرار می‌گیرد.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahsol`
--
ALTER TABLE `mahsol`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
