-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 22, 2022 at 04:45 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`, `subject`, `Title`) VALUES
(24, '2.mp4', 'videos/2.mp4', 'شيخ', 'واعظ'),
(25, '3.mp4', 'videos/3.mp4', 'استمع', 'تحفيز'),
(26, '4.mp4', 'videos/4.mp4', 'الشيخ الشعراوي ', ' مصري'),
(27, '2.mp4', 'videos/2.mp4', 'استمع', 'واعظ'),
(28, '2.mp4', 'videos/2.mp4', 'استمع', 'واعظ'),
(29, '2.mp4', 'videos/2.mp4', 'استمع', 'واعظ'),
(30, '1.mp4', 'videos/1.mp4', 'شيخ', ' مصري'),
(31, '5192800429824947623_play.mp4_logo_AE.mp4', 'videos/5192800429824947623_play.mp4_logo_AE.mp4', 'شيخ', ' مصري'),
(32, '5189422730525144618_play.mp4_logo_AE.mp4', 'videos/5189422730525144618_play.mp4_logo_AE.mp4', 'استمع', ' مصري'),
(33, '1.mp4', 'videos/1.mp4', 'استمع', 'واعظ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
