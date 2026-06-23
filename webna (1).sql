-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2026 at 02:22 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webna`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nip` double NOT NULL,
  `namadosen` varchar(40) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `namadosen`, `namaproduk`, `kategori`, `harga`) VALUES
(1, 19007867656702, 'Arliyana, M.Kom', '', '', 0),
(2, 19678637635705, 'Dr.Frans,M.Kom', '', '', 0),
(3, 19961101201502, 'Frengklin Matatula, S.Kom.MMSI', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `namajurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id`, `namajurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Sistem Informatika'),
(3, 'Manajemen Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `kode` int(15) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `sks` int(2) NOT NULL,
  `semester` int(2) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `kode`, `matakuliah`, `sks`, `semester`, `jurusan`) VALUES
(1, 101, 'Website framework 1', 3, 4, ''),
(3, 103, 'PBO', 2, 2, ''),
(4, 104, 'Bahasa Inggris 2', 2, 4, 'Sistem Informatika'),
(6, 106, 'Basis Data', 3, 4, 'Manajemen Informatika'),
(7, 107, 'Jaringan', 2, 3, 'Manajemen Informatika'),
(8, 108, 'Metode karya ilmiah', 2, 3, 'Teknik Informatika'),
(10, 102, 'Etika Profesi Programer', 2, 3, 'Teknik Informatika'),
(48, 115, 'Programer', 4, 1, 'Manajemen Informatika'),
(49, 117, 'Agama Kristen', 4, 1, 'Manajemen Informatika'),
(50, 120, 'pancasila Dasar', 2, 3, 'Sistem Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `harga`, `gambar`, `kategori`) VALUES
(1, 'Mie Ayam Bakso', 15000, 'miebakso.jpg', 'makanan'),
(2, 'Mie Ayam Komplit', 25000, 'kom.jpg', 'makanan'),
(3, 'Es Teh', 5000, 'teh.jpg', 'minuman'),
(4, 'Es Jeruk', 12000, 'jeruk.jpg', 'minuman'),
(6, 'Mie Ayam ori', 13000, 'ori.jpg', 'makanan'),
(7, 'Air Mineral', 10000, 'le.jpg', 'minuman'),
(9, 'Mie Ayam Ceker', 14000, 'ceker.jpg', 'makanan'),
(11, 'Es sirup', 8000, 'sirup1.jpg', 'minuman'),
(15, 'Es Teh Leci', 6000, 'leci4.jpg', 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'aminah', 'aminah@gmail.com', '$2y$10$cXPvX1Opd.kkNDNtCn6EEu2mNKlvkgG1gz04EhRcjb/QVXTDLV4ua'),
(2, 'nur', 'nur@gmail.com', '$2y$10$MnSWR2S9XJzqbN8c1o4WoekwJJzFP68G1FQrTy3O1TqOD4/6rtZ6O');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
