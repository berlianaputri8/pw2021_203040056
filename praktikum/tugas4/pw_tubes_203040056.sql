-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 06:09 AM
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
-- Database: `pw_tubes_203040056`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `acceleration` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `drive` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `picture` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `name`, `power`, `acceleration`, `fuel`, `drive`, `price`, `picture`) VALUES
(0, 'Mini Cooper 3 Door', '100kW', '7.8 sec. 0-100 km/h', '5.3 L/100 KM', '2-wheel', 765000000, 'mini1.png'),
(0, 'Mini Cooper S 3 Door', '141kW', '6.7 sec. 0-100 km/h', '5.5 L/100 KM', '2-wheel', 955000000, 'mini2.jpeg'),
(0, 'Mini Jhon Cooper Works 3 Door', '170kW', '6.1 sec. 0-100 km/h', '6 L/100 KM', '2-wheel', 1135000000, 'mini3.jpeg'),
(0, 'Mini Cooper 5 Door', '100kW', '8.1 sec. 0-100 km/h', '5.4 L/100 KM', '2-wheel', 795000000, 'mini4.png'),
(0, 'Mini Cooper S 5 Door', '141kW', '6.8 sec. 0-100 km/h', '5.6 L/100 KM', '2-wheel', 995000000, 'mini5.jpeg'),
(0, 'Mini Cooper Cabrio', '100kW', '8.7 sec. 0-100 km/h', '5.6 L/100 KM', '2-wheel', 865000000, 'mini6.png'),
(0, 'Mini Cooper S Cabrio', '141kW', '7.1 sec. 0-100 km/h', '5.7 L/100 KM', '2-wheel', 1030000000, 'mini7.jpeg'),
(0, 'Mini Cooper Clubman', '100kW', '9.2 sec. 0-100 km/h', '6 L/100 KM', '4-wheel', 896000000, 'mini8.jpeg'),
(0, 'Mini Cooper S Clubman\"', '141kW', '7.2 sec. 0-100 km/h', '6.2 L/100 KM', '2-wheel', 1500000000, 'mini9.png'),
(0, 'Mini Cooper Countryman', '100kW', '9.6 sec. 0-100 km/h', '6 L/100 KM', '2-wheel', 735000000, 'mini10.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
