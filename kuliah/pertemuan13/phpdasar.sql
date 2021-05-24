-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 02:40 PM
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `hp` int(20) NOT NULL,
  `golongan` int(10) NOT NULL,
  `gaji` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `gambar`, `nip`, `nama`, `hp`, `golongan`, `gaji`) VALUES
(5, '1.jpg', 1, 'Ahmad Baharudin', 812333454, 3, 1250000),
(6, '2.jpg', 2, 'Amin Imsyorry', 812657838, 2, 1350000),
(7, '3.jpg', 3, 'Zulkarnaen', 877654789, 1, 1450000),
(8, '4.jpg', 4, 'Desi Ratnasary', 812657838, 2, 1350000),
(18, '5.jpg', 5, 'Juliana', 819234089, 1, 1350000);

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
(3, 'pw', '$2y$10$wwV6btjAZ6u/q/N0y1Z8.uFr.7iTKxdZFTuamVMdYujEPj.sS64My'),
(4, 'admin', '$2y$10$Q6o48/T2fDYTnMP8yhY6PeE3O0zyl8jguthOvV9MukYh9SQL/bKO2'),
(5, 'berliana', '$2y$10$oc/o448JqZzfn4o/110cKOPTMTrivuXFnZGOvjgcL66UVoZ0NnBc2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
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
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
