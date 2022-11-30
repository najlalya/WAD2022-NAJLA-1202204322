-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3315
-- Generation Time: Nov 30, 2022 at 10:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_najla_table`
--

CREATE TABLE `showroom_najla_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_najla_table`
--

INSERT INTO `showroom_najla_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(9, 'hhhh', 'hhh', 'ggg', '2022-12-02', 'hhhh', 'avanza.jpg', 'lunas'),
(10, 'asdadas', 'asdada', 'asdasdasda', '2022-12-01', 'adasdaadasdasdasd', 'rush.jpg', 'lunas'),
(11, 'bnm', 'yaya', 'cvb', '2022-12-02', 'ghjklmnvvfdx', 'avanza.jpg', 'belum lunas');

-- --------------------------------------------------------

--
-- Table structure for table `users_najla`
--

CREATE TABLE `users_najla` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_najla`
--

INSERT INTO `users_najla` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(2, '', 'asd@gmail.com', 'a3dcb4d229de6fde0db5686dee47145d', ''),
(3, 'najla', 'najla@gmail.com', 'c06e2fdedb0de9017a14186b39496985', '08138123213'),
(4, 'NAJLA ALYA R', 'najlalya20@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_najla_table`
--
ALTER TABLE `showroom_najla_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `users_najla`
--
ALTER TABLE `users_najla`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_najla_table`
--
ALTER TABLE `showroom_najla_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_najla`
--
ALTER TABLE `users_najla`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
