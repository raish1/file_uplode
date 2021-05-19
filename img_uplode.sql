-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 11:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_raish_123`
--

-- --------------------------------------------------------

--
-- Table structure for table `img_uplode`
--

CREATE TABLE `img_uplode` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_uplode`
--

INSERT INTO `img_uplode` (`id`, `email`, `number`, `image`) VALUES
(1, 'm@gmail.com', '08882672846', 'uplode/alam.jpg'),
(2, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(3, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(4, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(5, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(6, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(7, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(8, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(9, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(10, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(11, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(12, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(13, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(14, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(15, 'm@gmail.com', '08882672846', 'uplode/raish.jpg'),
(16, 'raishalam043@gmail.com', '6386043119', 'uplode/india flage.jpg'),
(17, 'raishalam043@gmail.com', '6386043119', 'uplode/india flage.jpg'),
(18, 'raishalam043@gmail.com', '6386043119', 'uplode/india flage.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `img_uplode`
--
ALTER TABLE `img_uplode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `img_uplode`
--
ALTER TABLE `img_uplode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
