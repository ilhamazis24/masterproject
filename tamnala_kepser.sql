-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 04:52 PM
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
  `id_akun` varchar(225) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `jenis_kelamin` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `id_akun`, `nama_lengkap`, `jenis_kelamin`, `username`, `password`, `photo`, `level`) VALUES
(1, '3215212411980002', 'Ilham Azis Annaba', 'Laki - Laki', 'ilham', 'ilham', '', 'admin'),
(2, 'qw', 'qw', 'qw', 'qw', 'qw', '', 'kepala_dinas'),
(3, 'as', 'as', 'as', 'as', 'as', '', 'pegawai'),
(4, 'zx', 'zx', 'zx', 'zx', 'zx', '', 'staff_tu'),
(5, '2342', 'admin', 'Laki - Laki', 'admin', 'admin', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` bigint(20) NOT NULL,
  `id_akun` varchar(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `lokasi` varchar(150) NOT NULL,
  `eselon1` varchar(150) NOT NULL,
  `eselon2` varchar(150) NOT NULL,
  `eselon3` varchar(150) NOT NULL,
  `eselon4` varchar(150) NOT NULL,
  `golongan_darah` varchar(150) NOT NULL,
  `agama` varchar(150) NOT NULL,
  `pendidikan_terakhir` varchar(150) NOT NULL,
  `eselon` varchar(150) NOT NULL,
  `pangkat` varchar(150) NOT NULL,
  `setatus_kawin` varchar(150) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `kelompok_fungsional` varchar(150) NOT NULL,
  `provinsi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
