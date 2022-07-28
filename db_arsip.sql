-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2022 at 05:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `username_admin`, `password`, `gambar`) VALUES
(1, 'Agung adi', 'admin', 'af61985fab499287e2e0608e71c8a4006a3c4a2c', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fakturpajak`
--

CREATE TABLE `tb_fakturpajak` (
  `id_fp` int(11) NOT NULL,
  `nomor_fp` varchar(255) NOT NULL,
  `nama_pkp` varchar(255) NOT NULL,
  `alamat_pkp` varchar(255) NOT NULL,
  `npwp_pkp` varchar(255) NOT NULL,
  `nama_pjkp` varchar(255) NOT NULL,
  `alamat_pjkp` varchar(255) NOT NULL,
  `npwp_pjkp` varchar(255) NOT NULL,
  `tanggal_fp` date NOT NULL,
  `file_fp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_fakturpajak`
--

INSERT INTO `tb_fakturpajak` (`id_fp`, `nomor_fp`, `nama_pkp`, `alamat_pkp`, `npwp_pkp`, `nama_pjkp`, `alamat_pjkp`, `npwp_pjkp`, `tanggal_fp`, `file_fp`) VALUES
(1, '010.002-22.606803192', 'PT. INDOSARI NIAGA NUSANTARA', 'WISMA GKBI LT.12 SUITE 1217 JL. JENDERAL SUDIRMAN NO 28 , JAKARTA PUSAT', '90.064.592.0-077.000', 'PT. ULU MAS JAYA', 'KOMPLEK CHARITA INDAH JL. BERINGIN BLOK B NO.04 RT.085 RW.002 SUKAJAYA SUKARAMI ', '90.855.697.0-307.000', '2022-06-30', '2022-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_feedback`
--

CREATE TABLE `tb_feedback` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_feedback`
--

INSERT INTO `tb_feedback` (`id_kontak`, `nama`, `email`, `komentar`) VALUES
(7, 'Agung', 'agung@gmail.com', 'Wah keren\r\n'),
(8, 'Zidan', 'Zidan@gmail.com', 'baguss banget\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pb` int(11) NOT NULL,
  `nama_pb` varchar(255) NOT NULL,
  `alamat_pb` varchar(255) DEFAULT NULL,
  `jumlah_pb` varchar(255) NOT NULL,
  `tanggal_pb` date NOT NULL,
  `deskripsi_pb` varchar(255) NOT NULL,
  `file_pb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pb`, `nama_pb`, `alamat_pb`, `jumlah_pb`, `tanggal_pb`, `deskripsi_pb`, `file_pb`) VALUES
(1, 'Altundri', 'Sudirman', 'Seratus lima puluh ribu rupiah', '2022-07-03', 'Untuk belanja', '2022-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_pj` int(11) NOT NULL,
  `terima_pj` varchar(255) NOT NULL,
  `alamat_pj` varchar(255) NOT NULL,
  `jumlah_pj` varchar(255) NOT NULL,
  `tanggal_pj` date NOT NULL,
  `deskripsi_pj` varchar(255) NOT NULL,
  `file_pj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_pj`, `terima_pj`, `alamat_pj`, `jumlah_pj`, `tanggal_pj`, `deskripsi_pj`, `file_pj`) VALUES
(1, 'Kemang Intan', 'Jalan Sudirman', 'Delapan ratus dua puluh delapan ribu tujuh puluh rupiah', '2022-07-03', 'Pembayaran via link aja', '2022-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pimpinan`
--

CREATE TABLE `tb_pimpinan` (
  `id_pimpinan` int(11) NOT NULL,
  `nama_pimpinan` varchar(50) NOT NULL,
  `username_pimpinan` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pimpinan`
--

INSERT INTO `tb_pimpinan` (`id_pimpinan`, `nama_pimpinan`, `username_pimpinan`, `password`, `gambar`) VALUES
(1, 'Agung', 'pimpinan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef ', 'pimpinan.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_purchaseorder`
--

CREATE TABLE `tb_purchaseorder` (
  `id_po` int(11) NOT NULL,
  `nomor_po` varchar(255) NOT NULL,
  `kepada_po` varchar(255) NOT NULL,
  `alamat_po` varchar(255) NOT NULL,
  `tanggal_po` date NOT NULL,
  `outlet` varchar(255) NOT NULL,
  `file_po` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_purchaseorder`
--

INSERT INTO `tb_purchaseorder` (`id_po`, `nomor_po`, `kepada_po`, `alamat_po`, `tanggal_po`, `outlet`, `file_po`) VALUES
(20, 'PO/06/22/009', 'PT Citra Satria Utama ', 'Palembang', '2022-06-21', 'Brayamart', '2022-.pdf'),
(21, 'PO/06/22/012', 'PT Coca Cola Distribution Indonesia ', 'Jl. R.A Kartini Kav.8,Cilandak Barat, Jakarta 12430', '2022-06-21', 'Brayamart', '2022-.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username_admin` (`username_admin`);

--
-- Indexes for table `tb_fakturpajak`
--
ALTER TABLE `tb_fakturpajak`
  ADD PRIMARY KEY (`id_fp`);

--
-- Indexes for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pb`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_pj`);

--
-- Indexes for table `tb_pimpinan`
--
ALTER TABLE `tb_pimpinan`
  ADD PRIMARY KEY (`id_pimpinan`),
  ADD UNIQUE KEY `username_pimpinan` (`username_pimpinan`);

--
-- Indexes for table `tb_purchaseorder`
--
ALTER TABLE `tb_purchaseorder`
  ADD PRIMARY KEY (`id_po`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_fakturpajak`
--
ALTER TABLE `tb_fakturpajak`
  MODIFY `id_fp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_feedback`
--
ALTER TABLE `tb_feedback`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_pj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pimpinan`
--
ALTER TABLE `tb_pimpinan`
  MODIFY `id_pimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_purchaseorder`
--
ALTER TABLE `tb_purchaseorder`
  MODIFY `id_po` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
