-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 07:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamnala_kepser`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` bigint(20) NOT NULL,
  `nip_baru` varchar(225) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nip_baru`, `nama_lengkap`, `jenis_kelamin`, `username`, `password`, `level`) VALUES
(1, '3215212411980002', 'Ilham Azis Annaba', 'Laki - Laki', 'ilham', 'ilham', 'admin'),
(18, 'qw', 'qw', 'Perempuan', 'qw', 'qw', 'kepala_dinas'),
(19, 'as', 'as', 'Laki - Laki', 'as', 'as', 'staff_tu'),
(20, 'zx', 'zx', 'Perempuan', 'zx', 'zx', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` bigint(20) NOT NULL,
  `nip_lama` varchar(150) NOT NULL,
  `nip_baru` varchar(150) NOT NULL,
  `bukti_berkas_nip` varchar(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `gelar_depan` varchar(150) NOT NULL,
  `bukti_gelar_depan_1` varchar(150) NOT NULL,
  `bukti_gelar_depan_2` varchar(150) NOT NULL,
  `gelar_belakang` varchar(150) NOT NULL,
  `bukti_gelar_belakang_1` varchar(150) NOT NULL,
  `bukti_gelar_belakang_2` varchar(150) NOT NULL,
  `bukti_gelar_belakang_3` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(150) NOT NULL,
  `agama` varchar(150) NOT NULL,
  `golongan_darah` varchar(150) NOT NULL,
  `perkawinan` varchar(150) NOT NULL,
  `hobi` varchar(150) NOT NULL,
  `berkas_photo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nip_lama`, `nip_baru`, `bukti_berkas_nip`, `nama_lengkap`, `gelar_depan`, `bukti_gelar_depan_1`, `bukti_gelar_depan_2`, `gelar_belakang`, `bukti_gelar_belakang_1`, `bukti_gelar_belakang_2`, `bukti_gelar_belakang_3`, `jenis_kelamin`, `agama`, `golongan_darah`, `perkawinan`, `hobi`, `berkas_photo`) VALUES
(1, '123456', '3215212411980002', '', 'Ilham Azis Annaba', 'H.', '', '', ',. S.Kom.', '', '', '', 'Laki - Laki', 'Islam', 'AB', 'Belum Kawin', 'Sepak Bola, Bulu Tangkis', ''),
(5, '12', 'qw', '', 'qw', 'Ir.', '', '', ',. S.H.', '', '', '', 'Laki - Laki', 'ISLAM', 'B', 'Sudah Menikah', 'Bowling', ''),
(6, '', 'as', '', 'as', '', '', '', '', '', '', '', 'Laki - Laki', '', '', '', '', ''),
(7, '', 'zx', '', 'zx', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
