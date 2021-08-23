-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 10:05 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pankas`
--

-- --------------------------------------------------------

--
-- Table structure for table `alamatjemaat`
--

CREATE TABLE `alamatjemaat` (
  `id` int(11) NOT NULL,
  `id_jemaat` int(11) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `RT` varchar(5) DEFAULT NULL,
  `RW` varchar(5) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamatjemaat`
--

INSERT INTO `alamatjemaat` (`id`, `id_jemaat`, `alamat`, `RT`, `RW`, `kelurahan`, `kecamatan`, `kota`, `provinsi`) VALUES
(1, 10101, 'PERUM. GRIYA CILANGKAP BLOK B NO 04', NULL, NULL, 'CILANGKAP', 'TAPOS', 'DEPOK', 'JAWA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `jemaat`
--

CREATE TABLE `jemaat` (
  `id` int(11) NOT NULL,
  `id_jemaat` int(11) DEFAULT NULL,
  `id_anggota` int(11) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `jenis_kelamin` tinyint(1) DEFAULT NULL,
  `pendidikan` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sektor` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jemaat`
--

INSERT INTO `jemaat` (`id`, `id_jemaat`, `id_anggota`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `pendidikan`, `pekerjaan`, `telepon`, `email`, `sektor`, `status`) VALUES
(1, 10101, 0, 'SAMUEL', 'GINTING', 1, NULL, NULL, '082213481429', NULL, 1, 1),
(2, 10101, 1, 'YUNETA IRIANTI', 'SINULINGGA', 0, NULL, NULL, NULL, NULL, 1, 0),
(3, 10101, 2, 'VIOREN LOVENTA', 'GINTING', 0, NULL, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE `sektor` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `rayon` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`id`, `nama`, `rayon`) VALUES
(1, 'YERUSALEM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tanggaldantempat`
--

CREATE TABLE `tanggaldantempat` (
  `id` int(11) NOT NULL,
  `id_jemaat` int(11) NOT NULL,
  `id_keluarga` int(11) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_baptis` date DEFAULT NULL,
  `tempat_baptis` varchar(50) DEFAULT NULL,
  `tanggal_sidi` date DEFAULT NULL,
  `tempat_sidi` varchar(50) DEFAULT NULL,
  `tanggal_nikah` date DEFAULT NULL,
  `tempat_nikah` varchar(50) DEFAULT NULL,
  `tanggal_meninggal` date DEFAULT NULL,
  `tempat_meninggal` varchar(50) DEFAULT NULL,
  `tanggal_pindah` date DEFAULT NULL,
  `tempat_pindah` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanggaldantempat`
--

INSERT INTO `tanggaldantempat` (`id`, `id_jemaat`, `id_keluarga`, `tanggal_lahir`, `tempat_lahir`, `tanggal_baptis`, `tempat_baptis`, `tanggal_sidi`, `tempat_sidi`, `tanggal_nikah`, `tempat_nikah`, `tanggal_meninggal`, `tempat_meninggal`, `tanggal_pindah`, `tempat_pindah`) VALUES
(1, 10101, 0, '1965-10-03', 'JAKARTA', '1966-08-21', 'PANKAS', '1982-07-04', 'PANKAS', '2001-11-02', 'PANKAS', NULL, NULL, NULL, NULL),
(2, 10101, 1, '1978-10-19', 'JAKARTA', '1978-12-24', 'PANKAS', '1995-10-01', 'PANKAS', '2001-11-02', 'PANKAS', NULL, NULL, NULL, NULL),
(3, 10101, 2, '2003-05-28', 'JAKARTA', '2003-12-26', 'PANKAS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_tengah` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_depan`, `nama_tengah`, `nama_belakang`) VALUES
(1, 'yerusalem1', 'yerusalem1', 'David', 'Bagus', 'Pardede');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamatjemaat`
--
ALTER TABLE `alamatjemaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sektor`
--
ALTER TABLE `sektor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggaldantempat`
--
ALTER TABLE `tanggaldantempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alamatjemaat`
--
ALTER TABLE `alamatjemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sektor`
--
ALTER TABLE `sektor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tanggaldantempat`
--
ALTER TABLE `tanggaldantempat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
