-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cr12_crud`
--
CREATE DATABASE IF NOT EXISTS `cr12_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr12_crud`;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE `trips` (
  `id` int(25) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `location` varchar(150) NOT NULL,
  `price` varchar(11) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `picture`, `location`, `price`, `description`) VALUES
(1, '62213df94f657.jpg', 'Damascus', '3100', 'Te Old Town is where you ll most likely want to explore and where much of the fascinating history, and architecture is found. Established between 10,000 to 8,000 BC, Damascus is known to be the oldest continuously inhabited city in the world\r\n       '),
(2, '62213ef3b39bb.jpg', 'Egypt', '2300', 'Egypt may be known for ancient treasures and rich history, but there is more to this nation than you might expect. From surreal waters and golden sand beaches to remarkable architecture and natural therapies\r\n                            '),
(3, '62213f573df44.jpg', 'Switzerland', '1850', 'The country is famous for its scenic Alps and its rolling hills, plains, and lakes. It is also renowned for its chocolates and watches, while the Swiss knife is a legend in itself! Tourism in Switzerland is a delight of skiing, snow-walking, gorging '),
(4, '62213fa3097b2.jpg', 'Iran', '1380', ' Iran, a mountainous, arid, and ethnically diverse country of southwestern Asia. Much of Iran consists of a central desert plateau, which is ringed on all sides by lofty mountain ranges that afford access to the interior through high passes. Most of '),
(5, '62213fdd617a4.jpg', 'Afghanistan', '1050', 'Afghanistan is a landlocked country located in Southern Asia that borders China, Iran, Pakistan, Tajikistan, Turkmenistan, and Uzbekistan. The geography of Afghanistan is arid and mountainous; the Hindu Kush Mountains run northeast to southwest and d'),
(6, '62214026e2cf0.jpg', 'Germany', '2700', 'Germany is multitude of regional identities offers a cornucopia of distinct experiences to meet all kinds of expectations and suit all possible tastes (even the most discriminating ones) – whatever it is you fancy: beautiful scenery, great architectu'),
(7, '622140ae1f255.jpg', 'Vienna', '1930', 'Vienna, also described as Europe is cultural capital, is a metropolis with unique charm, vibrancy and flair. It boasts outstanding infrastructure, is clean and safe, and has all the inspiration that you could wish for in order to discover this wonder'),
(8, '62214100a14d7.jpg', 'France', '3800', 'Fance entices people of all ages with some of the world s most iconic landmarks, world-class art and architecture, sensational food, stunning beaches, glitzy ski resorts, beautiful countryside and a staggering amount of history\r\n                     ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
