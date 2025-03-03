-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2022 at 03:08 AM
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
-- Database: `npsn_dinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `status`) VALUES
(2, 'staf_btikp', 'staf_btikp', 'staf_btikp', 'staf_btikp'),
(3, 'pejabat_btikp', 'pejabat_btikp', 'pejabat_btikp', 'pejabat_btikp'),
(4, 'staf_gtk', 'staf_gtk', 'staf_gtk', 'staf_gtk'),
(5, 'kabid_gtk', 'kabid_gtk', 'kabid_gtk', 'kabid_gtk'),
(6, 'staf_npsn', 'staf_npsn', 'staf_npsn', 'staf_npsn'),
(7, 'pejabat_es_npsn', 'pejabat_es_npsn', 'pejabat_es_npsn', 'pejabat_es_npsn'),
(8, 'admin_npsn', 'admin_npsn', 'admin_npsn', 'admin_npsn');

-- --------------------------------------------------------

--
-- Table structure for table `npsn_dua`
--

CREATE TABLE `npsn_dua` (
  `id_dua` int(11) NOT NULL,
  `pemilik` varchar(20) NOT NULL,
  `t_milik` varchar(20) NOT NULL,
  `b_milik` varchar(20) NOT NULL,
  `sk_pen` varchar(50) NOT NULL,
  `sk_oper` varchar(50) NOT NULL,
  `tgl_pendiri` date NOT NULL,
  `tgl_operasional` date NOT NULL,
  `lintang` varchar(20) NOT NULL,
  `bujur` varchar(20) NOT NULL,
  `id_sekolah` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `npsn_dua`
--

INSERT INTO `npsn_dua` (`id_dua`, `pemilik`, `t_milik`, `b_milik`, `sk_pen`, `sk_oper`, `tgl_pendiri`, `tgl_operasional`, `lintang`, `bujur`, `id_sekolah`) VALUES
(15, 'Pemerintah Daerah', '40.500', '0', '800/Sekre/Skep/Dikpora/04', '148/420/Tahun 2015', '2015-08-24', '2015-09-02', '3.172', '125.5248', 'S001'),
(16, 'Pemerintah Pusat', '16.200 ', '0', '800.24/225/DIKPORA-MT/II-', '642.2/257/DIKPORA-MT/II-', '2015-02-25', '2015-02-23', '1.0269', '124.5828', 'S002'),
(17, 'Pemerintah Pusat', '5.700', '0', '1080/D.01/DIK/2003', '1080/D.01/DIK/2003', '2003-06-09', '2013-03-21', '0.7596', '124.6119', 'S003'),
(18, 'Pemerintah Pusat', '1', '42000', '126 TAHUN 2015', '126 TAHUN 2015', '1900-01-01', '2015-05-04', '4.2088', '126.7894', 'S004'),
(19, 'Pemerintah Pusat', '3', '0', '189 TAHUN 2015', '189 TAHUN 2015', '2015-07-10', '2015-07-10', '4.5084', '126.8155', 'S005'),
(20, 'Pemerintah Pusat', '17.500', '0', '126 TAHUN 2015', '126 TAHUN 2015', '2015-05-04', '2015-05-04', '3.862', '126.6843', 'S006'),
(21, 'Pemerintah Pusat', '3', '0', '189 TAHUN 2015', '189 TAHUN 2015', '2015-07-10', '2015-07-10', '3.9978', '126.7267', 'S007'),
(22, 'Pemerintah Pusat', '1', '65', '193/420 TAHUN 2016', '193/420 TAHUN 2016', '2016-09-13', '2016-09-13', '3.6307', '125.436', 'S008'),
(23, '', '3', '0', '800/SEKRE/SKEP/DIKPORA/048', '63 TAHUN 2006', '2018-02-26', '2006-04-26', '4.7333', '125.4859', 'S009'),
(24, 'Pemerintah Pusat', '3', '0', '050/KEP/DIKDA-03/592/2019', '050/KEP/DIKDA-03/592/2019', '2019-06-18', '2019-06-18', '.556570100000', '124.428044', 'S010');

-- --------------------------------------------------------

--
-- Table structure for table `npsn_satu`
--

CREATE TABLE `npsn_satu` (
  `id_sekolah` varchar(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kode` int(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenjang` varchar(3) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `acc` int(1) NOT NULL,
  `disposisi` int(1) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `npsn_satu`
--

INSERT INTO `npsn_satu` (`id_sekolah`, `nama`, `kab`, `kec`, `kel`, `kode`, `alamat`, `jenjang`, `kategori`, `email`, `status`, `acc`, `disposisi`, `tgl`) VALUES
('S001', 'SMK NEGERI 1 TATOARENG', 'KAB. KEP. SANGIHE', 'TATOARENG', 'KAHAKITANG', 95856, 'KAHAKITANG', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-10'),
('S002', 'SMA Negeri 1 Touluaan Selatan', 'Kab. Minahasa Tenggara', 'Touluaan Selatan', 'Kalait', 95696, 'Desa Kalait Jaga 4 Kecamatan Touluaan Selatan', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-10'),
('S003', 'SMA NEGERI 1 TUTUYAN', 'Kab. Bolaang Mongondow Timur', 'Tutuyan', 'Tutuyan', 95782, 'TUTUYAN', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-10'),
('S004', 'SMA NEGERI 2 BEO', 'Kab. Kepulauan Talaud', 'Beo Selatan', 'Niampak', 95881, 'Jl. Beo-Melonguane', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-10'),
('S005', 'SMA NEGERI 2 GEMEH DI BANNADDA', 'Kab. Kepulauan Talaud', 'Gemeh', 'Bannada', 95883, 'Jln. Alaboem Desa Bannada', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-10'),
('S006', 'SMA NEGERI 2 LIRUNG', 'Kab. Kepulauan Talaud', 'Salibabu', 'Bitunuris Selatan', 95871, 'Bitunuris', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-10'),
('S007', 'SMA NEGERI 2 MELONGUANE DI KIAMA', 'Kab. Kepulauan Talaud', 'Melonguane', 'Kiama', 95885, 'Jln. Kiama-Tule', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-11'),
('S008', 'SMA NEGERI 3 TAHUNA BARAT', 'Kab. Kep. Sangihe', 'Tahuna Barat', 'Mitung', 95817, 'Kolongan Mitung', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-11'),
('S009', 'SMA NEGERI MARORE', 'Kab. Kep. Sangihe', 'Kepulauan Marore', 'Marore', 95866, 'KAMPUNG MARORE', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-11'),
('S010', 'SMA NEGERI PINOLOSIAN TIMUR', 'Kab. Bolaang Mongondow Selatan', 'Pinolosian Timur', 'Onggunoi', 95775, 'Jalan Desa Onggunoi', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', 1, 0, 0, '2022-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `npsn_upload`
--

CREATE TABLE `npsn_upload` (
  `id_upload` int(11) NOT NULL,
  `permohonan` varchar(100) NOT NULL,
  `sk_pendiri` varchar(100) NOT NULL,
  `sk_operasional` varchar(100) NOT NULL,
  `foto_papan` varchar(100) NOT NULL,
  `foto_tempat` varchar(100) NOT NULL,
  `id_sekolah` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `npsn_upload`
--

INSERT INTO `npsn_upload` (`id_upload`, `permohonan`, `sk_pendiri`, `sk_operasional`, `foto_papan`, `foto_tempat`, `id_sekolah`) VALUES
(11, 'SURAT PERMOHONAN DARI YAYASAN SMKN1 TATOARENG.pdf', 'SK PENDIRI SMKN 1 TATOARENG.pdf', 'SK OPRASIONAL SMKN 1 TATOARENG.pdf', 'SMAN1 TATOARENG.jpg', 'SMAN1 TATOARENG.jpg', 'S001'),
(12, 'SURAT PERMOHONAN DARI YAYASAN SMKN1 Touluaan selatan.pdf', 'SK PENDIRI SMKN 1 Touluaan selatan.pdf', 'SK OPRASIONAL SMKN 1 Touluaan selatan.pdf', 'Touluaan selatan.jpg', 'Touluaan selatan.jpg', 'S002'),
(13, 'SURAT PERMOHONAN DARI YAYASAN SMKN1 Tutuyan.pdf', 'SK PENDIRI SMKN 1 Tutuyan.pdf', 'SK OPRASIONAL SMKN 1 Tutuyan.pdf', 'sman 1 tutuyan.jpg', 'sman 1 tutuyan.jpg', 'S003'),
(14, 'SURAT PERMOHONAN DARI YAYASAN SMA NEGERI 2 BEO.pdf', 'SK PENDIRI SMA 2 BEO.pdf', 'SK OPRASIONAL SMA N 2 BEO.pdf', 'SMA N 2 BEO.jpg', 'SMA N 2 BEO.jpg', 'S004'),
(15, 'SURAT PERMOHONAN DARI YAYASAN SMA NEGERI 2 GEMEH DI BANNADDA.pdf', 'SK PENDIRI SMA 2 GEMEH DI BANNADDA.pdf', 'SK OPRASIONAL SMA N 2 GEMEH DI BANNADDA.pdf', 'SMA N 2 GEMEH DI BANNADDA.jpg', 'SMA N 2 GEMEH DI BANNADDA.jpg', 'S005'),
(16, 'SURAT PERMOHONAN DARI YAYASAN SMA NEGERI 2 LIRUNG.pdf', 'SK PENDIRI SMA 2  LIRUNG.pdf', 'SK OPRASIONAL SMA N 2 LIRUNG.pdf', 'SMA N 2 LIRUNG.jpg', 'SMA N 2 LIRUNG.jpg', 'S006'),
(17, 'SURAT PERMOHONAN DARI YAYASAN SMA NEGERI 2 MELONGUANE DI KIAMA.pdf', 'SK PENDIRI SMA NEGERI 2 MELONGUANE DI KIAMA.pdf', 'SK OPRASIONAL SMA NEGERI 2 MELONGUANE DI KIAMA.pdf', 'SMA NEGERI 2 MELONGUANE DI KIAMA.jpg', 'SMA NEGERI 2 MELONGUANE DI KIAMA.jpg', 'S007'),
(18, 'SURAT PERMOHONAN DARI YAYASAN SMA NEGERI 3 TAHUNA BARAT.pdf', 'SK PENDIRI SMA NEGERI 3 TAHUNA BARAT.pdf', 'SK OPRASIONAL SMA NEGERI 3 TAHUNA BARAT.pdf', 'SMA NEGERI 3 TAHUNA BARAT.jpg', 'SMA NEGERI 3 TAHUNA BARAT.jpg', 'S008'),
(19, 'SURAT PERMOHONAN DARI YAYASAN SMA NEGERI MARORE.pdf', 'SK PENDIRI SMA NEGERI MARORE.pdf', 'SK OPRASIONAL SMA NEGERI MARORE.pdf', 'SMAN1 TATOARENG.jpg', 'SMAN1 TATOARENG.jpg', 'S009'),
(20, 'SURAT PERMOHONAN DARI YAYASAN SMA NEGERI PINOLOSIAN TIMUR.pdf', 'SK PENDIRISMA NEGERI PINOLOSIAN TIMUR.pdf', 'SK OPRASIONAL SMA NEGERI PINOLOSIAN TIMUR.pdf', 'SMA NEGERI PINOLOSIAN TIMUR.jpg', 'SMA NEGERI PINOLOSIAN TIMUR.jpg', 'S010');

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `id_operator` int(20) NOT NULL,
  `nama_operator` varchar(255) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `npsn` int(8) NOT NULL,
  `nama_file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_operator`, `no_wa`, `npsn`, `nama_file`) VALUES
(28, 'INTAN MUKSIN', '085241106465', 40100326, 'SK_Operator_28.pdf'),
(30, 'INTAN MUKSIN', '0897564378943', 40102018, 'SK_Operator_30.pdf'),
(31, 'INTAN MUKSIN', '0854412343', 69769388, 'SK_Operator_31.pdf'),
(32, 'INTAN MUKSIN', '082364725177', 40102015, 'SK_Operator_32.pdf'),
(33, 'INTAN MUKSIN', '087656456875', 40103491, 'SK_Operator_33.pdf'),
(34, 'INTAN MUKSIN', '0876384628394', 40104903, 'SK_Operator_34.pdf'),
(35, 'INTAN MUKSIN', '087648267421', 40103904, 'SK_Operator_35.pdf'),
(36, 'INTAN MUKSIN', '085346728394', 69879012, 'SK_Operator_36.pdf'),
(37, 'INTAN MUKSIN', '087654327654', 40100347, 'SK_Operator_37.pdf'),
(38, 'INTAN MUKSIN', '086534565432', 69880587, 'SK_Operator_38.pdf'),
(39, 'INTAN MUKSIN', '087654323456', 40102761, 'SK_Operator_39.pdf'),
(40, 'INTAN MUKSIN', '08765434567', 40101997, 'SK_Operator_40.pdf'),
(42, 'INTAN MUKSIN', '0897653456', 40100323, 'SK_Operator_42.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `ptk_negeri`
--

CREATE TABLE `ptk_negeri` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `status_per` varchar(20) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kode` int(5) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `npsn` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptk_negeri`
--

INSERT INTO `ptk_negeri` (`nik`, `nama`, `tempat`, `tgl_lahir`, `jk`, `status_per`, `nama_ibu`, `kab`, `kec`, `kel`, `kode`, `alamat`, `npsn`) VALUES
('1307064809950001', 'ASTRA NOVITA', 'KOTA ALAM', '1995-09-08', 'P', 'Menikah', '-', 'MINAHASA TENGGARA', 'RATAHAN', 'LOWU I', 95994, 'LING. II', 40101997),
('7101204807940301', 'LUVITA L. R. WOWOR', 'NANASI', '1991-08-12', 'P', 'Belum Menikah', '-', 'BOLAAMG MONGONDOW', 'POIGAR', 'DESA NANASI DUSUN 111', 95753, 'DESA NANASI DUSUN 111', 40102018),
('7102076505900003', 'MELISA VIRGINE KEMBUAN', 'KAWANGKOAN', '1990-05-25', 'P', 'Menikah', '-', 'MANADO', 'MANALAYANG', 'KLEAK', 95115, 'JL. PULAU KALIMANTAN', 69769388),
('7102101601900001', 'JANDRIFO MARTINO MANOREK', 'TUMARATAS', '1990-01-16', 'L', 'Belum Menikah', '-', 'MINAHASA', 'LANGOWAN BARAT', 'JAGA1', 95694, 'TUMARATAS', 40104903),
('7102116504980001', 'GLENDA APRILLIA BORORING', 'SONDER', '1998-04-25', 'P', 'Belum Menikah', '-', 'MINAHASA', '-', '-', 1234, 'JAGA II TALIKURAN SONDER', 40102761),
('7105074111940001', 'CHRISTIANI E. TOMBUKU', 'MOTOLING 1', '1994-11-02', 'P', 'Menikah', '-', 'MINAHASA SELATAN', 'SINONSAYANG', 'AERGALE', 95959, 'JL. TRANS SULAWESI', 40102018),
('7105182008790001', 'ALTER HENDRA LAPOD', 'MANADO', '1979-08-20', 'L', 'Menikah', '-', 'MINAHASA SELATAN', 'AMURANG TIMUR', 'PONDANG', 95954, 'KEL. PONDANG, LING. IV, KEC.AMURANG TIMUR', 40103904),
('7106024902900001', 'FIERGI VALENTINE MARAMIS', 'BALIKPAPAN', '1990-02-09', 'P', 'Menikah', '-', 'MINAHASA SELATAN', 'MOTOLING BARAT', 'RAANAN BARU DUA', 95955, 'JL. RAYARAANAN BARU-TONDEY, JAGA 1', 40102015),
('7108050608950001', 'ARFAN PONTOH', 'BIGO', '1995-08-06', 'L', 'Belum Menikah', '-', 'BOLAANG MONGONDOW UTARA', 'KAIDIPANG', 'BIGO', 95765, 'JL. TRANS SULAWESI', 40103491),
('7171024407950001', 'INTAN MUCHTAR SANUSI', 'MATALI', '1995-07-04', 'P', 'Menikah', '-', 'KOTA KOTAMOBAGU', 'KOTAMOBAGU TIMUR', 'MATALI', 95718, 'JL. TEUKU UMAR, RT002/RW 001', 40100326),
('7171085505890001', 'GLEYDIS MELISA PALANDI', 'MANADO', '1989-05-15', 'P', 'Menikah', '-', 'MANADO', 'MAPANGET', 'KAIRAGI II', 95249, 'LING. II', 40102761),
('7172022005900002', 'DOWAN WURITIMUR ', 'SORONG', '1990-05-20', 'L', 'Menikah', '-', 'BITUNG', 'MADIDIR', 'PACEDA', 95541, 'LINGKUNGAN III', 69879012),
('7173051812970001', 'CRISTIAN MOTULO', 'TOMOHON', '1997-12-18', 'L', 'Belum Menikah', '-', 'TOMOHON', 'TOMOHON BARAT', 'WOLOAN 1', 95421, 'LING. 3', 40102761),
('7174011510120001', 'BODON LONGKUN', 'BILALANG', '1989-08-23', 'L', 'Menikah', '-', 'KOTA KOTAMOBAGU', 'KOTAMOBAGU TIMUR', 'BILALANG SATU ', 95751, 'BILALANG SATU', 40100323),
('7174022005960001', 'EKA FAJRI ANUGRAH MAWIKERE', 'KOTAMOBAGU', '1996-05-20', 'L', 'Belum Menikah', '-', 'KOTA KOTAMOBAGU', 'KOTAMOBAGU TIMUR', 'KOTOBANGON', 95712, 'JL. BRIGJEN KATAMSO NO. 403', 40100323),
('7174033005980001', 'MAYCEL JINABA', 'MOTOBOI KECIL', '1998-05-30', 'L', 'Belum Menikah', '-', 'KOTA MOBAGU', 'KOTA MOBAGU SELATAN', 'MOTOBOI KECIL', 95717, 'MOTOBOI KECIL', 40100347),
('7174040404970001', 'ALIFKY BAKUNG', 'KOTAMOBAGU', '1997-04-04', 'L', 'Menikah', '-', 'KOTA KOTAMOBAGU', 'KOTAMOBAGU BARAT', 'MOLINOW', 95716, 'JL. KARYATANI, MOLINOW', 40100323),
('7174040606980002', 'ALDI GUNARDI MAMONTO', 'KOTA MOBAGU', '1998-06-06', 'L', 'Belum Menikah', '-', 'KOTA MOBAGU', 'KOTA MOBAGU BARAT', 'MOGOLAING', 95716, 'JL. AMAL', 40100347),
('7174042409950001', 'OKTOVANO GABRIEL KANDOUW', 'KOTAMOBAGU', '1996-10-27', 'L', 'Belum Menikah', '-', 'KOTA KOTAMOBAGU', 'KOTAMOBAGU TIMUR', 'KOTOBANGON', 95712, 'JL. KOL SUGIONO', 40100323);

-- --------------------------------------------------------

--
-- Table structure for table `ptk_pegawai`
--

CREATE TABLE `ptk_pegawai` (
  `nip` varchar(18) NOT NULL,
  `jenis_ptk` varchar(30) NOT NULL,
  `status_kep` varchar(30) NOT NULL,
  `lembaga` varchar(30) NOT NULL,
  `no_sk` varchar(30) NOT NULL,
  `tmt_peng` date NOT NULL,
  `sumber` varchar(20) NOT NULL,
  `no_pem` varchar(50) NOT NULL,
  `tgl_sk` date NOT NULL,
  `tmt_tugas` date NOT NULL,
  `nik` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptk_pegawai`
--

INSERT INTO `ptk_pegawai` (`nip`, `jenis_ptk`, `status_kep`, `lembaga`, `no_sk`, `tmt_peng`, `sumber`, `no_pem`, `tgl_sk`, `tmt_tugas`, `nik`) VALUES
('0606199809072022', 'Guru TIK', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '346A/DIKDA/SMKN1KTG/III/2022', '2022-03-01', 'Sekolah', '018/DIKDA/SMKN1KTG/I/2022', '2022-01-10', '2022-01-10', '7174040606980002'),
('0608199509062022', 'Guru MaPel', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '420/SMKN.1 KDP/CABDIDA-08/453/', '2022-01-07', 'Sekolah', '-', '2022-01-03', '2022-01-07', '7108050608950001'),
('150519890109072022', 'Tenaga Administrasi Sekolah', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', 'I 16.20.3/SMA.8/KP/2021', '2022-01-19', 'Sekolah', '-', '2022-09-07', '2022-09-07', '7171085505890001'),
('1601199009062022', 'Guru MaPel', 'PPPK', 'Kepala Sekolah', '813/BKD/SK/07/2022', '2022-06-01', 'APBN', '813/BKD/SK/07/2022', '2022-05-19', '2022-06-01', '7102101601900001'),
('1812199709072022', 'Guru MaPel', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '002/I 16.20.3/SMA.8/KP/2021', '2022-01-03', 'Sekolah', '-', '2022-09-07', '2022-09-07', '7173051812970001'),
('198923102022070899', 'Penjaga Sekolah', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '389/C.I/SMAN 2 KOTAMOBAGU', '2020-07-13', 'Sekolah', '-', '2022-09-08', '2022-09-08', '7174011510120001'),
('199002092022212021', 'Guru MaPel', 'PPPK', 'Pemerintah Provinsi', '813/BKD/SK/07/2022', '2022-06-01', 'APBD Provinsi', '464/1.16.17/SMKN.1-AMBAR/1-2022', '2022-01-10', '2022-01-10', '7106024902900001'),
('199005202022211007', 'Guru MaPel', 'PPPK', 'Pemerintah Provinsi', '813/BKD/SK/07/2022', '2022-06-01', 'APBN', '800/BKD/3473/2022', '2022-05-19', '2022-06-01', '7172022005900002'),
('199108122005042001', 'Guru MaPel', 'PNS', 'Kepala Sekolah', '110/800-SMKN1/VII/2021', '2019-07-10', 'APBN', '002/422-SMKN1/VII/2021', '2021-07-01', '2019-07-10', '7101204807940301'),
('199507042022212014', 'Guru MaPel', 'PPPK', 'Pemerintah Provinsi', '813/BKD/SK/07/2022', '2022-06-01', 'APBN', '-', '2022-06-01', '2022-05-19', '7171024407950001'),
('199509082022212012', 'Guru MaPel', 'PPPK', 'Pemerintah Provinsi', '813/BKD/SK/07/2022', '2022-06-01', 'APBD Provinsi', '800/BKD/3357/2022', '2022-05-19', '2022-06-01', '1307064809950001'),
('199605200709202100', 'Tenaga Administrasi Sekolah', 'Honor Daerah TK I Prov / THL', 'Pemerintah Provinsi', 'NO. 6 THN 2021', '2021-01-04', 'APBD Provinsi', '-', '2021-01-04', '2021-01-04', '7174022005960001'),
('199610270709202201', 'Tenaga Administrasi Sekolah', 'Honor Daerah TK I Prov / THL', 'Pemerintah Provinsi', 'NMR. 6 THN 2021', '2021-01-04', 'APBD Provinsi', '-', '2021-01-04', '2021-01-04', '7174042409950001'),
('199704042022090800', 'Guru MaPel', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '427/C.1/SMAN2.KTG/VII/2021', '2021-07-01', 'Sekolah', '484.A/C.1/SMAN2.KTG/2021', '2021-07-12', '2021-07-12', '7174040404970001'),
('200105102022051020', 'Guru MaPel', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '008/422-SMKN1/VII/2021', '2021-07-01', 'Sekolah', '002/422-SMKN1/VII/2021', '2021-07-01', '2021-07-01', '7105074111940001'),
('2008197909062022', 'Tenaga Administrasi Sekolah', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '002/1.16.17/SMA.1/A/I-2022', '2022-01-05', 'Sekolah', '001/1.16.17/SMA.1/A/I-2022', '2022-01-04', '2022-01-04', '7105182008790001'),
('2504199809072022', 'Guru MaPel', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '002I/I 16.20.3/SMA.8/KP/2021', '2022-01-03', 'Sekolah', '-', '2022-09-07', '2022-09-07', '7102116504980001'),
('2505199009062022', 'Tenaga Administrasi Sekolah', 'Honor Daerah TK I Prov / THL', 'Pemerintah Provinsi', '220/THN2021', '2022-09-02', 'APBD Provinsi', 'NOMOR 220 TAHUN 2021', '2021-09-01', '2021-09-01', '7102076505900003'),
('3005199809072022', 'Guru MaPel', 'Honor Daerah TK I Prov / THL', 'Kepala Sekolah', '347B/DIKDA/SMKN1KTG/I/2022', '2022-03-01', 'APBN', '018/DIKDA/SMKN1KTG/I/2022', '2022-01-10', '2022-01-10', '7174033005980001');

-- --------------------------------------------------------

--
-- Table structure for table `ptk_swasta`
--

CREATE TABLE `ptk_swasta` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jam_linier` int(2) NOT NULL,
  `jam_tidak_linier` int(2) NOT NULL,
  `npsn` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ptk_swasta`
--

INSERT INTO `ptk_swasta` (`nik`, `nama`, `jk`, `jam_linier`, `jam_tidak_linier`, `npsn`) VALUES
('3316092901980005', 'ANDREAS MIKAEL LONDAH', 'L', 1, 1, 69880587);

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `npsn` int(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kab_kota` varchar(50) NOT NULL,
  `tipe` varchar(3) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `acc` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`npsn`, `nama`, `kab_kota`, `tipe`, `kategori`, `email`, `password`, `status`, `acc`) VALUES
(40100323, 'SMA NEGERI 2 KOTAMOBAGU', 'KOTAMOBAGU', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', '0000', 1, 1),
(40100326, 'SMK NEGERI 1 MOPUYA', 'KOTA KOTAMOBAGU', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', 'MANADO', 1, 1),
(40100347, 'SMK NEGERI 1 KOTAMOBAGU', 'KOTA MOBAGU', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', '6666', 1, 1),
(40101997, 'SMA NEGERI 1 RATAHAN', 'RATAHAN', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', '8888', 1, 1),
(40102015, 'SMK NEGERI 1 AMURANG BARAT', 'MINAHASA SELATAN', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', '1111', 1, 1),
(40102018, 'SMK NEGERI 1 SINONSAYANG', 'MINAHASA SELATAN', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', '456', 1, 1),
(40102761, 'SMA NEGERI 8 MANADO', 'MANADO', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', '7777', 1, 1),
(40103491, 'SMK NEGERI 1 KAIDIPANG', 'BOLAANG MONGONDOW UTARA', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', '2222', 1, 1),
(40103904, 'SMA NEGERI 1 AMURANG', 'MINAHASA SELATAN', 'SMA', 'Negeri', 'intan.muksin2712@gmail.com', '4444', 1, 1),
(40104903, 'SMKN PP KALASEY', 'MINAHASA', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', '3333', 1, 1),
(69769388, 'SMK NEGERI 8 MANADO', 'MANADO', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', '789', 1, 1),
(69879012, 'SMK NEGERI 6 BITUNG', 'BITUNG', 'SMK', 'Negeri', 'intan.muksin2712@gmail.com', '5555', 1, 1),
(69880587, 'SLB KHUSUS AUTIS HIZKIA', 'BITUNG', 'SLB', 'Swasta', 'intan.muksin2712@gmail.com', '7777', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_berkas` int(50) NOT NULL,
  `sp_dinas` varchar(100) NOT NULL,
  `kk` varchar(100) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `ijazah` varchar(100) NOT NULL,
  `sk_gtk` varchar(100) NOT NULL,
  `sk_tugas` varchar(100) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `acc` int(1) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id_berkas`, `sp_dinas`, `kk`, `ktp`, `ijazah`, `sk_gtk`, `sk_tugas`, `nik`, `email`, `status`, `acc`, `tgl`) VALUES
(25, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7171024407950001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(27, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7101225101000302', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(28, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7105074111940001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(30, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7101204807940301', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(31, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7102076505900003', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(32, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7106024902900001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(33, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7108050608950001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(34, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7102101601900001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(35, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7105182008790001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-06'),
(36, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7172022005900002', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(37, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7174033005980001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(38, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7174040606980002', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(39, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '3316092901980005', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(40, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7173051812970001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(41, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7171085505890001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(42, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7102116504980001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(43, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '1307064809950001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(44, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7101314408940301', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(45, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7101311909960301', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(46, 'SURAT CABANG DINAS.pdf', 'KK.jpg', 'KTP.jpg', 'IJAZAH.jpg', 'SK PENGANGKATAN.jpg', 'SK PENUGASAN.png', '7174011610940001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(47, 'SURAT CABANG DINAS.pdf', 'KK.pdf', 'KTP.jpg', 'IJAZAH.pdf', 'SK PENGANGKATAN.pdf', 'SK PENUGASAN.pdf', '7101315511950301', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(48, 'SURAT CABANG DINAS.pdf', 'KK.pdf', 'KTP.jpg', 'IJAZAH.pdf', 'SK PENGANGKATAN.pdf', 'SK PENUGASAN.pdf', '7174022005960001', 'intan.muksin2712@gmail.com', 1, 1, '2022-09-07'),
(49, 'SURAT CABANG DINAS.pdf', 'KK.pdf', 'KTP.jpg', 'IJAZAH.pdf', 'SK PENGANGKATAN.pdf', 'SK PENUGASAN.pdf', '7174042409950001', 'intan.muksin2712@gmail.com', 0, 0, '2022-09-07'),
(50, 'SURAT CABANG DINAS.pdf', 'KK.pdf', 'KTP.jpg', 'IJAZAH.pdf', 'SK PENGANGKATAN.pdf', 'SK PENUGASAN.pdf', '7174011510120001', 'intan.muksin2712@gmail.com', 0, 0, '2022-09-07'),
(51, 'SURAT CABANG DINAS.pdf', 'KK.pdf', 'KTP.jpg', 'IJAZAH.pdf', 'SK PENGANGKATAN.pdf', 'SK PENUGASAN.pdf', '7174040404970001', 'intan.muksin2712@gmail.com', 0, 0, '2022-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `vote_opsi`
--

CREATE TABLE `vote_opsi` (
  `id_opsi` int(11) NOT NULL,
  `nama_opsi` varchar(150) NOT NULL,
  `thumbnail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote_opsi`
--

INSERT INTO `vote_opsi` (`id_opsi`, `nama_opsi`, `thumbnail`) VALUES
(3, 'Sangat Puas', 'photo/1.png'),
(4, 'Puas', 'photo/2.png'),
(5, 'Cukup', 'photo/3.png'),
(6, 'Tidak Puas', 'photo/4.png');

-- --------------------------------------------------------

--
-- Table structure for table `voting`
--

CREATE TABLE `voting` (
  `id_vote` int(11) NOT NULL,
  `id_opsi` int(11) NOT NULL,
  `date_create` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voting`
--

INSERT INTO `voting` (`id_vote`, `id_opsi`, `date_create`) VALUES
(19, 3, '2022-09-06 20:37:10'),
(20, 4, '2022-09-06 20:49:50'),
(21, 3, '2022-09-06 21:01:55'),
(22, 3, '2022-09-06 21:21:37'),
(23, 4, '2022-09-06 21:57:46'),
(24, 5, '2022-09-06 22:06:42'),
(25, 3, '2022-09-06 22:20:53'),
(26, 5, '2022-09-06 22:43:14'),
(27, 3, '2022-09-06 23:14:29'),
(28, 5, '2022-09-06 23:28:43'),
(29, 4, '2022-09-06 23:41:17'),
(30, 5, '2022-09-07 13:45:11'),
(31, 6, '2022-09-07 14:10:01'),
(32, 5, '2022-09-07 14:20:46'),
(33, 3, '2022-09-07 14:29:19'),
(34, 3, '2022-09-07 14:57:15'),
(35, 3, '2022-09-07 15:07:07'),
(36, 3, '2022-09-07 15:19:12'),
(37, 3, '2022-09-07 15:39:40'),
(38, 3, '2022-09-07 16:10:29'),
(39, 3, '2022-09-07 16:20:13'),
(40, 3, '2022-09-07 16:44:06'),
(41, 3, '2022-09-07 18:11:11'),
(42, 3, '2022-09-07 23:55:36'),
(43, 4, '2022-09-08 00:11:31'),
(44, 4, '2022-09-08 00:22:20'),
(45, 4, '2022-09-08 00:35:32'),
(46, 4, '2022-09-10 14:57:07'),
(47, 4, '2022-09-10 22:44:26'),
(48, 4, '2022-09-10 22:57:43'),
(49, 3, '2022-09-10 23:13:36'),
(50, 5, '2022-09-10 23:26:53'),
(51, 4, '2022-09-10 23:49:21'),
(52, 4, '2022-09-11 09:50:38'),
(53, 4, '2022-09-11 10:00:35'),
(54, 4, '2022-09-11 10:11:56'),
(55, 3, '2022-09-11 10:22:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `npsn_dua`
--
ALTER TABLE `npsn_dua`
  ADD PRIMARY KEY (`id_dua`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `npsn_satu`
--
ALTER TABLE `npsn_satu`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `npsn_upload`
--
ALTER TABLE `npsn_upload`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`),
  ADD KEY `npsn` (`npsn`);

--
-- Indexes for table `ptk_negeri`
--
ALTER TABLE `ptk_negeri`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `npsn` (`npsn`);

--
-- Indexes for table `ptk_pegawai`
--
ALTER TABLE `ptk_pegawai`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `ptk_swasta`
--
ALTER TABLE `ptk_swasta`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `npsn` (`npsn`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `vote_opsi`
--
ALTER TABLE `vote_opsi`
  ADD PRIMARY KEY (`id_opsi`);

--
-- Indexes for table `voting`
--
ALTER TABLE `voting`
  ADD PRIMARY KEY (`id_vote`),
  ADD KEY `id_opsi` (`id_opsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `npsn_dua`
--
ALTER TABLE `npsn_dua`
  MODIFY `id_dua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `npsn_upload`
--
ALTER TABLE `npsn_upload`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `id_operator` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_berkas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `vote_opsi`
--
ALTER TABLE `vote_opsi`
  MODIFY `id_opsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voting`
--
ALTER TABLE `voting`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `npsn_dua`
--
ALTER TABLE `npsn_dua`
  ADD CONSTRAINT `npsn_dua_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `npsn_satu` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `npsn_upload`
--
ALTER TABLE `npsn_upload`
  ADD CONSTRAINT `npsn_upload_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `npsn_satu` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `operator_ibfk_1` FOREIGN KEY (`npsn`) REFERENCES `sekolah` (`npsn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ptk_negeri`
--
ALTER TABLE `ptk_negeri`
  ADD CONSTRAINT `ptk_negeri_ibfk_1` FOREIGN KEY (`npsn`) REFERENCES `sekolah` (`npsn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ptk_pegawai`
--
ALTER TABLE `ptk_pegawai`
  ADD CONSTRAINT `ptk_pegawai_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `ptk_negeri` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ptk_swasta`
--
ALTER TABLE `ptk_swasta`
  ADD CONSTRAINT `ptk_swasta_ibfk_1` FOREIGN KEY (`npsn`) REFERENCES `sekolah` (`npsn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `voting`
--
ALTER TABLE `voting`
  ADD CONSTRAINT `voting_ibfk_1` FOREIGN KEY (`id_opsi`) REFERENCES `vote_opsi` (`id_opsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
