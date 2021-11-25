-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2021 at 04:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kk` varchar(255) NOT NULL,
  `akta_lahir` varchar(255) NOT NULL,
  `ijazah` varchar(255) NOT NULL,
  `nilai_rapor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `foto`, `kk`, `akta_lahir`, `ijazah`, `nilai_rapor`) VALUES
(13, 'bagus 34.jpg', '21.11.4076_BAGUS BUDI SATOTO_UTS ENTEPENEURSHIP.pdf', '21.11.4076_BAGUS BUDI SATOTO_UTS ENTEPENEURSHIP.pdf', '21.11.4076_BAGUS BUDI SATOTO_UTS ENTEPENEURSHIP.pdf', 100);

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--

CREATE TABLE `blacklist` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blacklist`
--

INSERT INTO `blacklist` (`id_user`, `nama`) VALUES
(3, 'Bagus Budi Satoto');

-- --------------------------------------------------------

--
-- Table structure for table `countdown`
--

CREATE TABLE `countdown` (
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countdown`
--

INSERT INTO `countdown` (`tanggal`) VALUES
('2099-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'pendaftar');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_un`
--

CREATE TABLE `nilai_un` (
  `id_nilai` int(11) NOT NULL,
  `indo` int(5) NOT NULL,
  `mtk` int(5) NOT NULL,
  `inggris` int(5) NOT NULL,
  `ipa` int(5) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_un`
--

INSERT INTO `nilai_un` (`id_nilai`, `indo`, `mtk`, `inggris`, `ipa`, `jumlah`) VALUES
(13, 100, 100, 100, 100, 400);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `no_pendf` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `kelamin` enum('L','P') NOT NULL,
  `tgl_lhr` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `id_berkas` int(11) NOT NULL,
  `id_nilai` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`no_pendf`, `id`, `nama`, `kelamin`, `tgl_lhr`, `agama`, `alamat`, `id_berkas`, `id_nilai`, `status`) VALUES
(2147483647, 4, 'Bagus Budi Satoto', 'L', '2006-08-13', 'islam', 'Yogyakarta\r\nBantul #Home', 13, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `id_level`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(4, 'Bagus Budi Satoto', 'bagus@yahoo.com', '17b38fc02fd7e92f3edeb6318e3066d8', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `nilai_un`
--
ALTER TABLE `nilai_un`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`no_pendf`),
  ADD KEY `id_berkas` (`id_berkas`),
  ADD KEY `id_nilai` (`id_nilai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_un`
--
ALTER TABLE `nilai_un`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD CONSTRAINT `pendaftar_ibfk_1` FOREIGN KEY (`id_nilai`) REFERENCES `nilai_un` (`id_nilai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftar_ibfk_2` FOREIGN KEY (`id_berkas`) REFERENCES `berkas` (`id_berkas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
