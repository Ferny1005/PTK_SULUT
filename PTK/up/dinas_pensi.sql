-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 08:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinas_pensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'umum', 'umum', 'umum'),
(2, 'sekretaris', 'hm', 'sekretaris'),
(3, 'kasub', 'kasub', 'kasub'),
(4, 'staf_kepeg', 'staf_kepeg', 'staf_kepeg'),
(5, 'staf_proses', 'staf_proses', 'staf_proses'),
(6, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berkala`
--

CREATE TABLE `berkala` (
  `id_berkala` varchar(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pengantar` varchar(50) NOT NULL,
  `sk_pangkat` varchar(50) NOT NULL,
  `sk_cpns` varchar(50) NOT NULL,
  `skp_terakhir` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berkala`
--

INSERT INTO `berkala` (`id_berkala`, `nip`, `nama`, `email`, `pengantar`, `sk_pangkat`, `sk_cpns`, `skp_terakhir`, `id_user`) VALUES
('B0000000001', '200105102022042001', '', 'fernyindy@gmail.com', 'INTANM.xlsx - INTAN KOLOM.pdf', 'INTAN KOLOM.pdf', 'INTANM.xlsx - INTAN KOLOM.pdf', 'Skripsi Akhir.pdf', 0),
('B0000000002', '12344444444', '', 'fernyindy@gmail.com', 'contohfile - Copy (2).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (3).pdf', 'contohfile.pdf', 1),
('B0000000003', '1233', '', 'fernyindy@gmail.com', 'contohfile - Copy (2).pdf', 'contohfile.pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (4).pdf', 1),
('B0000000004', '23456', '', 'fernyindy@gmail.com', 'contohfile - Copy (5).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (3).pdf', 1),
('B0000000005', '123456', '', 'fernyindy@gmail.com', 'contohfile - Copy (2).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy (5).pdf', 1),
('B0000000006', '12345', '', 'fernyindy@gmail.com', 'contohfile - Copy (4).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (2).pdf', 1),
('B0000000007', '132435465623345', '', 'fernyindy@gmail.com', 'contohfile - Copy.pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy (2).pdf', 1),
('B0000000008', '213312', 'fer', 'fernyindy@gmail.com', 'contohfile - Copy (2).pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy.pdf', 'contohfile.pdf', 1660290767),
('B0000000009', '341', 'fer', 'fernyindy@gmail.com', 'contohfile - Copy (2).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (5).pdf', 1660290767);

-- --------------------------------------------------------

--
-- Table structure for table `pensiun`
--

CREATE TABLE `pensiun` (
  `id_pensiun` varchar(11) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `j_pensiun` varchar(20) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `d_perorangan` varchar(50) NOT NULL,
  `sk_cpns` varchar(50) NOT NULL,
  `sk_pns` varchar(50) NOT NULL,
  `skp_terakhir` varchar(50) NOT NULL,
  `sk_jabatan` varchar(50) NOT NULL,
  `sk_pengalihan` varchar(50) NOT NULL,
  `akte_pernikahan` varchar(50) NOT NULL,
  `akte_anak` varchar(50) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `k_peg` varchar(50) NOT NULL,
  `sk_kenaikan` varchar(50) NOT NULL,
  `daftar_gaji` varchar(50) NOT NULL,
  `skp_tahun` varchar(50) NOT NULL,
  `pas_foto` varchar(50) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `ktp` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `sk_disiplin` varchar(50) NOT NULL,
  `sk_pidana` varchar(50) NOT NULL,
  `skck` varchar(50) NOT NULL,
  `sk_sah` varchar(50) NOT NULL,
  `d_riwayat` varchar(50) NOT NULL,
  `lainnya` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pensiun`
--

INSERT INTO `pensiun` (`id_pensiun`, `nip`, `nama`, `email`, `j_pensiun`, `instansi`, `d_perorangan`, `sk_cpns`, `sk_pns`, `skp_terakhir`, `sk_jabatan`, `sk_pengalihan`, `akte_pernikahan`, `akte_anak`, `kk`, `k_peg`, `sk_kenaikan`, `daftar_gaji`, `skp_tahun`, `pas_foto`, `npwp`, `ktp`, `no_rek`, `sk_disiplin`, `sk_pidana`, `skck`, `sk_sah`, `d_riwayat`, `lainnya`, `id_user`) VALUES
('P0000000001', '12356', '', 'fernyindy@gmail.com', 'Batas Usia Pensiun', 'contohfile - Copy (2).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (3).pdf', 'contohfile.pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy.pdf', 'contohfile.pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy.pdf', 'contohfile.pdf', 'Presentasi Aplikasi IKU.pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy.pdf', 'Presentasi Aplikasi IKU.pdf', 'contohfile - Copy (2).pdf', 'Presentasi Aplikasi IKU.pdf', 'Presentasi Aplikasi IKU.pdf', 'Presentasi Aplikasi IKU.pdf', 'contohfile - Copy (2).pdf', 'Presentasi Aplikasi IKU.pdf', 'Presentasi Aplikasi IKU.pdf', 0),
('P0000000002', '12435', '', 'fernyindy@gmail.com', 'Batas Usia Pensiun', 'contohfile - Copy (2).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy (4).pdf', 'contohfile.pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (3).pdf', 'contohfile.pdf', 'contohfile.pdf', 'contohfile.pdf', 'Presentasi Aplikasi IKU.pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy.pdf', 'contohfile.pdf', 1),
('P0000000003', '12333311331', 'fef', 'fernyindy@gmail.com', 'Batas Usia Pensiun', 'contohfile - Copy (2).pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (3).pdf', 'contohfile.pdf', 'contohfile - Copy.pdf', 'contohfile - Copy.pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (5).pdf', 'contohfile - Copy (4).pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy.pdf', 'contohfile - Copy.pdf', 'contohfile.pdf', 'contohfile - Copy (2).pdf', 'contohfile - Copy (3).pdf', 'contohfile - Copy (2).pdf', 1660290767);

-- --------------------------------------------------------

--
-- Table structure for table `tran_berkas`
--

CREATE TABLE `tran_berkas` (
  `id_transaksi` int(11) NOT NULL,
  `asal_berkas` varchar(11) NOT NULL,
  `umum` int(1) NOT NULL,
  `sek` int(1) NOT NULL,
  `kasub` int(1) NOT NULL,
  `staf_kepeg` int(1) NOT NULL,
  `staf_proses` int(1) NOT NULL,
  `kasub_proses` int(1) NOT NULL,
  `umum_proses` int(1) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tran_berkas`
--

INSERT INTO `tran_berkas` (`id_transaksi`, `asal_berkas`, `umum`, `sek`, `kasub`, `staf_kepeg`, `staf_proses`, `kasub_proses`, `umum_proses`, `tgl`) VALUES
(25, 'B0000000009', 1, 1, 1, 1, 0, 0, 0, '2022-08-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `asal`, `username`, `password`) VALUES
(10, 'Aso123', 'Cabang Dinas Manado', 'Aso12345', 'Aso'),
(1660290767, 'SMK Negeri 3 Manado', 'ad', 'ad', 'ad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berkala`
--
ALTER TABLE `berkala`
  ADD PRIMARY KEY (`id_berkala`);

--
-- Indexes for table `pensiun`
--
ALTER TABLE `pensiun`
  ADD PRIMARY KEY (`id_pensiun`) USING BTREE;

--
-- Indexes for table `tran_berkas`
--
ALTER TABLE `tran_berkas`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tran_berkas`
--
ALTER TABLE `tran_berkas`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1660290768;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
