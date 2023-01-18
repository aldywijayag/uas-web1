-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 08:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warung`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah_barang` int(10) NOT NULL,
  `harga_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `nama_barang`, `jumlah_barang`, `harga_barang`) VALUES
(1, 'Kecap ABC 275ml', 50, '17500'),
(2, 'Sambal ABC 335ml', 22, '16500'),
(3, 'So Klin Pewangi Pouch 800', 10, '15200'),
(4, 'Lifebuoy Lemon Fresh Bata', 8, '3500'),
(5, 'Pepsodent 120g', 13, '8900'),
(6, 'Roma Biskuit Kelapa 300g', 11, '8150'),
(7, 'Indomie Ayam Bawang', 30, '2800'),
(8, 'Indomie Goreng', 35, '3000'),
(9, 'Rexona Men Icecool 45ml', 31, '14500'),
(10, 'Rexona Men Invicible 50ml', 31, '15300'),
(11, 'Posh Active Cool 40Ml', 21, '21300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
