-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2021 at 07:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(5) NOT NULL,
  `kd_jurusan` char(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `kd_jurusan`, `nama_jurusan`, `created_at`, `updated_at`) VALUES
(1, 'j01', 'Teknik Informatika', '0000-00-00 00:00:00', '2021-07-04 12:18:11'),
(2, 'j02', 'Teknik Komputer', '0000-00-00 00:00:00', '2021-07-04 12:18:11'),
(3, 'j03', 'Sistem Informasi', '0000-00-00 00:00:00', '2021-07-04 12:18:11'),
(4, 'j04', 'Rekayasa Perangkat Lunak', '2021-07-04 11:50:06', '2021-07-04 12:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `jurusan` char(3) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `nama`, `nim`, `jk`, `jurusan`, `created_at`, `updated_at`) VALUES
(2, 'Wahyu', '17TI151', 'Laki-laki', 'j01', '2021-07-04 08:47:36', '2021-07-04 08:47:36'),
(3, 'Fijar', '17TI152', 'Laki-laki', 'j02', '2021-07-04 08:49:32', '2021-07-04 08:49:32'),
(4, 'Dewi', '17TI153', 'Perempuan', 'j03', '2021-07-04 08:50:08', '2021-07-04 08:50:08'),
(5, 'Lutfi', '17TI154', 'Laki-laki', 'j02', '2021-07-04 08:59:31', '2021-07-04 08:59:31'),
(6, 'Kiki', '17TI150', 'Laki-laki', 'j01', '2021-07-04 11:17:43', '2021-07-04 11:17:43'),
(7, 'Sovi', '17TI155', 'Perempuan', 'j04', '2021-07-04 11:56:57', '2021-07-04 11:56:57'),
(8, 'Novi', '17TI156', 'Perempuan', 'j04', '2021-07-04 12:34:59', '2021-07-04 12:34:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
