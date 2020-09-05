-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2020 at 03:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrentsepeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbike`
--

CREATE TABLE `tbbike` (
  `id` int(11) NOT NULL,
  `kode` int(20) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `hargasewa` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbbike`
--

INSERT INTO `tbbike` (`id`, `kode`, `merk`, `jenis`, `warna`, `hargasewa`, `image`) VALUES
(1, 1, 'mikyy', 'sepeda gunung', 'biru', '10000', '1598144577.jpg'),
(2, 2, 'sanoya', 'sepeda balap', 'hitam', '20k/Jam', '1598144706.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbsepeda`
--

CREATE TABLE `tbsepeda` (
  `id` int(11) NOT NULL,
  `kode` int(20) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `hargasewa` int(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsepeda`
--

INSERT INTO `tbsepeda` (`id`, `kode`, `merk`, `jenis`, `warna`, `hargasewa`, `image`) VALUES
(1, 1, 'miky', 'sepeda gunung', 'hitam', 10000, ''),
(2, 1, 'mikyy', 'sepeda gunung', 'biru', 10000, ''),
(3, 1, 'mikyy', 'sepeda gunung', 'biru', 10000, ''),
(4, 1, 'mikyy', 'sepeda gunung', 'biru', 10000, ''),
(5, 1, 'mikyy', 'sepeda gunung', 'biru', 10000, '1598141909.jpg'),
(6, 1, 'mikyy', 'sepeda gunung', 'biru', 10000, '1598141945.jpg'),
(7, 1, 'mikyy', 'sepeda gunung', 'biru', 10000, '1598141986.jpg'),
(8, 1, 'mikyy', 'sepeda gunung', 'biru', 10000, '1598144511.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `id` int(11) NOT NULL,
  `kodesepeda` varchar(50) NOT NULL,
  `noktp` varchar(50) NOT NULL,
  `tanggaltransaksi` varchar(50) NOT NULL,
  `jumlahbayar` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noktp` varchar(100) NOT NULL,
  `roleuser` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `email`, `password`, `nama`, `nohp`, `alamat`, `noktp`, `roleuser`) VALUES
(1, 'save@email.com', 'save', 'save', '0873264238471', 'save', 'save', 1),
(2, 'save@mail.com', 'save', 'savet', '02849374897', 'sace', '', 2),
(5, 'saw@mail.com', '123', 'savet', '02849374897', 'sace', 'sace', 3),
(6, 'saaw@mail.com', '123', 'savet', '092849374897', 'sacer', 'sacer', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbike`
--
ALTER TABLE `tbbike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsepeda`
--
ALTER TABLE `tbsepeda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbike`
--
ALTER TABLE `tbbike`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbsepeda`
--
ALTER TABLE `tbsepeda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
