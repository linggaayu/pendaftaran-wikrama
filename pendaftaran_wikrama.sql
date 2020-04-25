-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2020 pada 10.56
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran_wikrama`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_s`
--

CREATE TABLE `data_s` (
  `id` int(11) NOT NULL,
  `nama_l` varchar(100) NOT NULL,
  `nama_p` varchar(20) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `cita` text NOT NULL,
  `hoby` text NOT NULL,
  `anake` int(11) NOT NULL,
  `skandung` int(11) NOT NULL,
  `stiri` int(11) NOT NULL,
  `sangkat` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `gd` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `koka` text NOT NULL,
  `propinsi` text NOT NULL,
  `notlp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl` varchar(20) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `nama_a` text NOT NULL,
  `ada_a` varchar(20) NOT NULL,
  `ttl_a` text NOT NULL,
  `pekerjaan_a` text NOT NULL,
  `pendidikan_terakhir_a` varchar(50) NOT NULL,
  `warga_a` varchar(100) NOT NULL,
  `nohp_a` varchar(20) NOT NULL,
  `nama_i` text NOT NULL,
  `ada_i` varchar(50) NOT NULL,
  `ttl_i` varchar(100) NOT NULL,
  `pekerjaan_i` varchar(50) NOT NULL,
  `pendidikan_terakhir_i` varchar(50) NOT NULL,
  `warga_i` varchar(100) NOT NULL,
  `nohp_i` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_s`
--
ALTER TABLE `data_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_s`
--
ALTER TABLE `data_s`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
