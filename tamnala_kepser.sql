-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 03.38
-- Versi server: 10.1.21-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `akun`
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
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `nip_baru`, `nama_lengkap`, `jenis_kelamin`, `username`, `password`, `level`) VALUES
(1, '3215212411980002', 'Ilham Azis Annaba', 'Laki - Laki', 'ilham', 'ilham', 'admin'),
(18, '3215212411980000', 'Kepala Dinas', 'Perempuan', 'kepala', 'kepala', 'kepala_dinas'),
(19, '3215212411980011', 'Gumilar', 'Laki - Laki', 'staf', 'staf', 'staff_tu'),
(20, '3215212411980001', 'Raden Gumilar', 'Laki - Laki', 'pegawai', 'pegawai', 'pegawai'),
(21, '3215212411980003', 'Ilham', 'Laki - Laki', 'pegawai2', 'pegawai2', 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `nip_baru` varchar(200) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `laporan_file` text NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tgl_laporan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nip_baru`, `nama_lengkap`, `laporan_file`, `judul`, `tgl_laporan`, `status`) VALUES
(19, '3215212411980001', 'Raden Gumilar', 'IKRAM.pdf', 'dada', '31-December-2020 08:14:24', 'Accepted'),
(20, '3215212411980003', 'Ilham', 'FIRMAN.pdf', 'dada', '31-December-2020 08:41:23', 'Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` bigint(20) NOT NULL,
  `nip_lama` varchar(200) NOT NULL,
  `nip_baru` varchar(200) NOT NULL,
  `bukti_berkas_nip` text NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `gelar_depan` varchar(150) NOT NULL,
  `bukti_gelar_depan_1` text NOT NULL,
  `bukti_gelar_depan_2` text NOT NULL,
  `gelar_belakang` varchar(150) NOT NULL,
  `bukti_gelar_belakang_1` text NOT NULL,
  `bukti_gelar_belakang_2` text NOT NULL,
  `bukti_gelar_belakang_3` text NOT NULL,
  `jenis_kelamin` varchar(150) NOT NULL,
  `agama` varchar(150) NOT NULL,
  `golongan_darah` varchar(150) NOT NULL,
  `perkawinan` varchar(150) NOT NULL,
  `hobi` varchar(150) NOT NULL,
  `berkas_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `nip_lama`, `nip_baru`, `bukti_berkas_nip`, `nama_lengkap`, `gelar_depan`, `bukti_gelar_depan_1`, `bukti_gelar_depan_2`, `gelar_belakang`, `bukti_gelar_belakang_1`, `bukti_gelar_belakang_2`, `bukti_gelar_belakang_3`, `jenis_kelamin`, `agama`, `golongan_darah`, `perkawinan`, `hobi`, `berkas_photo`) VALUES
(1, '123456', '3215212411980002', '', 'Ilham Azis Annaba', 'H.', '', '', ',. S.Kom.', '', '', '', 'Laki - Laki', 'Islam', 'AB', 'Belum Kawin', 'Sepak Bola, Bulu Tangkis', ''),
(5, '12', '0', '', 'qw', 'Ir.', '', '', ',. S.H.', '', '', '', 'Laki - Laki', 'ISLAM', 'B', 'Sudah Menikah', 'Bowling', ''),
(6, '0', '0', '', 'as', '', '', '', '', '', '', '', 'Laki - Laki', '', '', '', '', ''),
(7, '0', '3215212411980001', '', 'Raden Gumilar', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(8, '0', '3215212411980003', '', 'Ilham', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(9, '0', '3215212411980011', '', 'Gumilar', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(10, '0', '3215212411980000', '', 'Kepala Dinas', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(11, '123456', '3215212411980002', '', 'Ilham Azis Annaba', 'H.', '', '', ',. S.Kom.', '', '', '', 'Laki - Laki', 'Islam', 'AB', 'Belum Kawin', 'Sepak Bola, Bulu Tangkis', ''),
(12, '12', '0', '', 'qw', 'Ir.', '', '', ',. S.H.', '', '', '', 'Laki - Laki', 'ISLAM', 'B', 'Sudah Menikah', 'Bowling', ''),
(13, '0', '0', '', 'as', '', '', '', '', '', '', '', 'Laki - Laki', '', '', '', '', ''),
(14, '0', '3215212411980001', '', 'Raden Gumilar', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(15, '0', '3215212411980003', '', 'Ilham', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(16, '0', '3215212411980011', '', 'Gumilar', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(17, '0', '3215212411980000', '', 'Kepala Dinas', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(18, '123456', '3215212411980002', '', 'Ilham Azis Annaba', 'H.', '', '', ',. S.Kom.', '', '', '', 'Laki - Laki', 'Islam', 'AB', 'Belum Kawin', 'Sepak Bola, Bulu Tangkis', ''),
(19, '12', '0', '', 'qw', 'Ir.', '', '', ',. S.H.', '', '', '', 'Laki - Laki', 'ISLAM', 'B', 'Sudah Menikah', 'Bowling', ''),
(20, '0', '0', '', 'as', '', '', '', '', '', '', '', 'Laki - Laki', '', '', '', '', ''),
(21, '0', '3215212411980001', '', 'Raden Gumilar', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(22, '0', '3215212411980003', '', 'Ilham', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(23, '0', '3215212411980011', '', 'Gumilar', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(24, '0', '3215212411980000', '', 'Kepala Dinas', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', ''),
(25, '123456', '3215212411980002', '', 'Ilham Azis Annaba', 'H.', '', '', ',. S.Kom.', '', '', '', 'Laki - Laki', 'Islam', 'AB', 'Belum Kawin', 'Sepak Bola, Bulu Tangkis', ''),
(26, '12', '0', '', 'qw', 'Ir.', '', '', ',. S.H.', '', '', '', 'Laki - Laki', 'ISLAM', 'B', 'Sudah Menikah', 'Bowling', ''),
(27, '0', '0', '', 'as', '', '', '', '', '', '', '', 'Laki - Laki', '', '', '', '', ''),
(28, '0', '3215212411980001', '', 'Raden Gumilar', '', '', '', '', '', '', '', 'Perempuan', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_izin`
--

CREATE TABLE `surat_izin` (
  `id` int(11) NOT NULL,
  `nip_baru` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `pangkat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `tanggal_awal` date NOT NULL,
  `tanggal_akhir` date NOT NULL,
  `lama_izin` varchar(255) NOT NULL,
  `tipe_izin` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_izin`
--

INSERT INTO `surat_izin` (`id`, `nip_baru`, `nama_lengkap`, `pangkat`, `jabatan`, `tanggal_awal`, `tanggal_akhir`, `lama_izin`, `tipe_izin`, `alasan`, `status`, `tgl`) VALUES
(10, '3215212411980001', 'Raden Gumilar', '', '', '2020-12-30', '2020-12-30', '1', 'Cuti', 'cuti tahunan', 'Staff TU', '29 Desember 2020'),
(11, '3215212411980003', 'Ilham', '', '', '2020-12-29', '2020-12-29', '2', 'keluar', 'Keperluan Keluarga', 'Di Terima', '29 Desember 2020'),
(30, '3215212411980003', 'Ilham', '', '', '2020-12-29', '2020-12-29', '3', 'Sakit', 'Keperluan Keluarga', 'Di Terima', '29 Desember 2020'),
(32, '3215212411980003', 'Ilham', '', '', '2020-12-29', '2020-12-29', '3', 'Sakit', 'Keperluan Keluarga', 'Di Terima', '29 Desember 2020'),
(33, '3215212411980003', 'Ilham', '', '', '2020-12-29', '2020-12-29', '3', 'Sakit', 'Keperluan Keluarga', 'Di Terima', '29 Desember 2020');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_izin`
--
ALTER TABLE `surat_izin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `surat_izin`
--
ALTER TABLE `surat_izin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
