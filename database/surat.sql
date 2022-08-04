-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 01:26 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pemohon`
--

CREATE TABLE `data_pemohon` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pemohon`
--

INSERT INTO `data_pemohon` (`nik`, `nama`, `tanggal_lahir`, `tempat_lahir`, `jekel`, `agama`, `alamat`, `telepon`, `pekerjaan`) VALUES


-- --------------------------------------------------------

--
-- Table structure for table `data_request_skd`
--

CREATE TABLE `data_request_skd` (
  `id_request_skd` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(20) NOT NULL DEFAULT '-',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'DOMISILI',
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skd`
--

INSERT INTO `data_request_skd` (`id_request_skd`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(12, '1111111111111111', '2021-01-11 03:22:38', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-01-11'),
(17, '5555555555555555', '2021-01-11 08:27:04', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-01-31'),
(19, '5555555555555555', '2021-01-11 08:41:15', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-01-11'),
(20, '1111111111111111', '2021-01-13 21:12:25', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '-', 'Surat dicetak, bisa diambil!', 'DOMISILI', 3, '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_skp`
--

CREATE TABLE `data_request_skp` (
  `id_request_skp` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `lama` int(11) NOT NULL,
  `sampai_tanggal` date NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'PAMIT',
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_skp`
--

INSERT INTO `data_request_skp` (`id_request_skp`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `instansi`, `jabatan`, `keperluan`, `keterangan`, `lama`, `sampai_tanggal`, `request`, `status`, `acc`) VALUES
(7, '1111111111111111', '2021-01-11 10:50:31', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'PT. Djarum', 'Staf IT', 'Sakit', 'Surat dicetak, bisa diambil!', 2, '2021-01-12', 'PAMIT', 3, '2021-01-11'),
(8, '4444444444444444', '2021-01-11 16:03:13', '4444444444444444 - Muhammad Farih Ahbab_.jpg', '4444444444444444 - Muhammad Farih Ahbab_.jpg', 'PT. Djarum', '', 'Ijin Sakit', 'Surat dicetak, bisa diambil!', 5, '2021-01-15', 'PAMIT', 3, '2021-01-14'),
(9, '1111111111111111', '2021-01-13 21:11:53', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'PT. Djarum', '', 'Sakit', 'Surat dicetak, bisa diambil!', 2, '2021-01-15', 'PAMIT', 3, '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sktm`
--

CREATE TABLE `data_request_sktm` (
  `id_request_sktm` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `request` varchar(20) NOT NULL DEFAULT 'TIDAK MAMPU',
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_sktm`
--

INSERT INTO `data_request_sktm` (`id_request_sktm`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `keperluan`, `request`, `keterangan`, `status`, `acc`) VALUES
(14, '5555555555555555', '2021-01-11 08:30:37', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', 'Bantuan Beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-01-11'),
(17, '2222222222222222', '2021-01-11 10:57:03', '2222222222222222 - Amalia_.jpg', '2222222222222222 - Amalia_.jpg', 'Bantuan Beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-01-11'),
(18, '8888888888888888', '2021-01-12 04:38:01', '8888888888888888 - Inayah_.jpg', '8888888888888888 - Inayah_.jpg', 'Bantuan Beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-01-12'),
(21, '1111111111111111', '2021-01-13 21:08:05', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Bantuan Beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-01-14'),
(47, '98', '2021-03-16 05:33:29', '98_.jpg', '98_.jpg', 'Beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-03-16'),
(48, '00', '2021-03-16 06:46:44', '00_.jpg', '00_.jpg', 'Beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-03-16'),
(49, '00', '2021-04-06 02:05:55', '00_.jpg', '00_.jpg', 'Beasiswa', 'TIDAK MAMPU', 'Surat dicetak, bisa diambil!', 3, '2021-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `data_request_sku`
--

CREATE TABLE `data_request_sku` (
  `id_request_sku` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scan_ktp` text NOT NULL,
  `scan_kk` text NOT NULL,
  `usaha` varchar(30) NOT NULL,
  `keperluan` varchar(30) NOT NULL,
  `keterangan` varchar(50) NOT NULL DEFAULT 'Data sedang diperiksa oleh Staf',
  `request` varchar(20) NOT NULL DEFAULT 'USAHA',
  `status` int(11) NOT NULL DEFAULT '0',
  `acc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_request_sku`
--

INSERT INTO `data_request_sku` (`id_request_sku`, `nik`, `tanggal_request`, `scan_ktp`, `scan_kk`, `usaha`, `keperluan`, `keterangan`, `request`, `status`, `acc`) VALUES
(7, '5555555555555555', '2021-01-11 09:26:15', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', '5555555555555555 - Bintang Sultan Mimbar Maulana_.jpg', 'Warung Kopi', 'Bantuan UMKM', 'Surat dicetak, bisa diambil!', 'USAHA', 3, '2021-01-11'),
(8, '1111111111111111', '2021-01-13 21:07:43', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', '1111111111111111 - Fachri Shofiyyuddin Ahmad_.jpg', 'Warung Kopi', 'Bantuan UMKM', '', 'USAHA', 3, '2021-01-14');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `nik` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL,
  `hak_akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`nik`, `password`, `hak_akses`) VALUES
('00', '123', 'Pemohon'),
('1', '1', 'Staf'),
('1000000000000000', '10', 'Pemohon'),
('1111111111111111', '123', 'Pemohon'),
('1234', '123', 'Pemohon'),
('2', '2', 'Lurah'),
('2222222222222222', '2', 'Pemohon'),
('3333333333333333', '3', 'Pemohon'),
('4444444444444444', '4', 'Pemohon'),
('5555555555555555', '5', 'Pemohon'),
('7777777777777777', '7', 'Pemohon'),
('8888888888888888', '8', 'Pemohon'),
('98', '123', 'Pemohon'),
('9999999999999999', '9', 'Pemohon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD PRIMARY KEY (`id_request_skd`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD PRIMARY KEY (`id_request_skp`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD PRIMARY KEY (`id_request_sktm`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD PRIMARY KEY (`id_request_sku`),
  ADD KEY `id_pemohon` (`nik`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  MODIFY `id_request_skd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  MODIFY `id_request_skp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  MODIFY `id_request_sktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  MODIFY `id_request_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pemohon`
--
ALTER TABLE `data_pemohon`
  ADD CONSTRAINT `data_pemohon_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_skd`
--
ALTER TABLE `data_request_skd`
  ADD CONSTRAINT `data_request_skd_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_skp`
--
ALTER TABLE `data_request_skp`
  ADD CONSTRAINT `data_request_skp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_sktm`
--
ALTER TABLE `data_request_sktm`
  ADD CONSTRAINT `data_request_sktm_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

--
-- Constraints for table `data_request_sku`
--
ALTER TABLE `data_request_sku`
  ADD CONSTRAINT `data_request_sku_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `data_user` (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
