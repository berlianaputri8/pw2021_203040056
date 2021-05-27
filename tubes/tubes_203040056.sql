-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 04:26 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_203040056`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini`
--

CREATE TABLE `mini` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `power` varchar(100) NOT NULL,
  `acceleration` varchar(100) NOT NULL,
  `fuel` varchar(100) NOT NULL,
  `drive` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini`
--

INSERT INTO `mini` (`id`, `nama`, `power`, `acceleration`, `fuel`, `drive`, `price`, `picture`) VALUES
(1, 'Mini Cooper 3 Door', '100kW', '7.8 sec. 0-100 km/h', '5.3 L/100 KM', '2-wheel', 765000000, '1.jpg'),
(2, 'Mini Cooper S 3 Door', '141kW', '6.7 sec. 0-100 km/h', '5.5 L/100 KM', '2-wheel', 955000000, '2.jpg'),
(3, 'Mini Jhon Cooper 3 Door', '170kW', '6.1 sec. 0-100 km/h', '6 L/100 KM', '2-wheel', 1135000000, '3.jpg'),
(4, 'Mini Cooper 5 Door', '100kW', '8.1 sec. 0-100 km/h', '5.4 L/100 KM', '2-wheel', 795000000, '4.jpg'),
(5, 'Mini Cooper S 5 Door', '141kW', '6.8 sec. 0-100 km/h', '5.6 L/100 KM', '2-wheel', 995000000, '5.jpg'),
(6, 'Mini Cooper Cabrio', '100kW', '8.7 sec. 0-100 km/h', '5.6 L/100 KM', '2-wheel', 865000000, '6.jpg'),
(7, 'Mini Cooper S Cabrio', '141kW', '7.1 sec. 0-100 km/h', '5.7 L/100 KM', '2-wheel', 1030000000, '7.jpg'),
(8, 'Mini Cooper Clubman', '100kW', '9.2 sec. 0-100 km/h', '6 L/100 KM', '4-wheel', 896000000, '8.jpg'),
(9, 'Mini Cooper S Clubman', '141kW', '7.2 sec. 0-100 km/h', '6.2 L/100 KM', '2-wheel', 1500000000, '9.jpg'),
(10, 'Mini Cooper Countryman', '100kW', '9.6 sec. 0-100 km/h', '6 L/100 KM', '2-wheel', 735000000, '10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$oFL9Y.i0p3gyFTFbw74NU.PQcsQEkX7K3QMF8ikUyLgJc8rxBv7ea'),
(2, 'ber', '$2y$10$pkCcmF/zbfYCM/qYtzxEAuMNajYOG33017DOYnwkWYoN0JrBdvV3C'),
(3, 'berliana', '$2y$10$qXKej82hKi2Tt/.dW2RAzeoYd0gG252.cQ4qPcekZRQKO05YkuRC6'),
(4, 'abc', '$2y$10$K61m8hEL9U87UY.DM.lKluPBNgW88Qdkk8qsSXRDWSEZXpaOBoJw6'),
(8, 'pw', '$2y$10$Vrv7L4SMSRCp04PZgeTMHOBkhq3bmbu.t5jPeyZfj76KxVn0IIKtC'),
(9, 'abcd', '$2y$10$k9GXDHHuxw4qbC04.4jxV.m0zYGGNyxeJ4ENzr9If.ps5V3K9FAta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mini`
--
ALTER TABLE `mini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mini`
--
ALTER TABLE `mini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
