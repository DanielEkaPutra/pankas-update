-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 08:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.23

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
  `id_alamat` int(11) NOT NULL,
  `id_jemaat` int(11) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `rt` varchar(5) DEFAULT NULL,
  `rw` varchar(5) DEFAULT NULL,
  `kelurahan` varchar(20) DEFAULT NULL,
  `kecamatan` varchar(20) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alamatjemaat`
--

INSERT INTO `alamatjemaat` (`id_alamat`, `id_jemaat`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `provinsi`) VALUES
(1, 10201, 'Perumahan Pesona Laguna 2', '2', '22', 'Cilangkap', 'Tapos', 'Depok', 'Jawa Barat'),
(2, 10101, 'Perumahan Pesona Laguna 2, Blok J2 no 31', '2', '22', 'Cilangkap', 'Tapos', 'Depok', 'Jawa Barat');

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
  `rayon` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `pelkat` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jemaat`
--

INSERT INTO `jemaat` (`id`, `id_jemaat`, `id_anggota`, `nama_depan`, `nama_belakang`, `jenis_kelamin`, `pendidikan`, `pekerjaan`, `telepon`, `email`, `sektor`, `rayon`, `status`, `pelkat`) VALUES
(1, 10201, 0, 'Pujadi Hendra', 'Saputra', 1, 'D3', 'Karyawan Swasta', '08979823762', NULL, 1, 1, '1', 4),
(4, 10101, 0, 'David Samuel', 'Pasaribu', 1, 'S2', 'Karyawan Swasta', '08979823762', NULL, 2, 1, '1', 4),
(6, 10201, 1, 'Clara Magdalena', 'Sirait', 2, 'D3', 'Ibu Rumah Tangga', '08979823762', NULL, 1, 1, '2', 0),
(8, 10201, 2, 'Daniel Eka', 'Putra', 1, 'SMK', 'Mahasiswa', '08979823762', NULL, 1, 1, '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kepengurusan`
--

CREATE TABLE `kepengurusan` (
  `id_pengurus` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepengurusan`
--

INSERT INTO `kepengurusan` (`id_pengurus`, `nama`) VALUES
(1, 'Pengurus'),
(2, 'Anggota'),
(3, 'Pelayan');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama_pelayanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `nama_pelayanan`) VALUES
(1, 'Anggota Jemaat'),
(2, 'Majelis Jemaat'),
(3, 'Koordinator Sektor');

-- --------------------------------------------------------

--
-- Table structure for table `pelkat`
--

CREATE TABLE `pelkat` (
  `id_pelkat` int(11) NOT NULL,
  `nama_pelkat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelkat`
--

INSERT INTO `pelkat` (`id_pelkat`, `nama_pelkat`) VALUES
(1, 'Pelayanan Anak'),
(2, 'Persekutuan Teruna'),
(3, 'Gerakan Pemuda'),
(4, 'Persekutuan Kaum Bapak'),
(5, 'Persekutuan Kaum Perempuan'),
(6, 'Persekutuan Kaum Lanjut Usia');

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` int(11) NOT NULL,
  `rayon` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rayon`
--

INSERT INTO `rayon` (`id_rayon`, `rayon`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `sektor`
--

CREATE TABLE `sektor` (
  `id_sektor` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sektor`
--

INSERT INTO `sektor` (`id_sektor`, `nama`) VALUES
(1, 'Yerusalem'),
(2, 'Bethel'),
(3, 'Sion'),
(4, 'Hermon'),
(5, 'Yerikho'),
(6, 'Karmel'),
(7, 'Pniel'),
(8, 'Nazaret'),
(9, 'Moria'),
(10, 'Getsemani'),
(11, 'Betesda'),
(12, 'Betlehem'),
(13, 'Ebenhaezer');

-- --------------------------------------------------------

--
-- Table structure for table `tanggaldantempat`
--

CREATE TABLE `tanggaldantempat` (
  `id_tanggal` int(11) NOT NULL,
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

INSERT INTO `tanggaldantempat` (`id_tanggal`, `id_jemaat`, `id_keluarga`, `tanggal_lahir`, `tempat_lahir`, `tanggal_baptis`, `tempat_baptis`, `tanggal_sidi`, `tempat_sidi`, `tanggal_nikah`, `tempat_nikah`, `tanggal_meninggal`, `tempat_meninggal`, `tanggal_pindah`, `tempat_pindah`) VALUES
(1, 10201, 0, '2021-09-08', 'Jakarta', '2021-09-07', 'GPIB Effatha', '2021-09-10', 'GPIB Effatha', '2021-09-10', 'GPIB Effatha', '0000-00-00', '', '0000-00-00', ''),
(3, 10201, 2, '2021-09-05', 'Jakarta', '2021-09-16', 'GPIB Effatha', '2021-09-05', 'GPIB Pancaran Kasih', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(5, 10201, 2, '2021-09-13', 'Jakarta', '2021-09-07', 'GPIB Effatha', '2021-09-21', 'GPIB Pancaran Kasih', '0000-00-00', '', '0000-00-00', '', '0000-00-00', ''),
(6, 10201, 1, '2021-09-12', 'Jakarta', '2021-09-13', 'HKBP Kebayoran Lama', '2021-09-14', 'HKBP Kebayoran Lama', '2021-09-19', 'GPIB Effatha', '0000-00-00', '', '0000-00-00', ''),
(8, 10201, 2, '2021-09-05', 'Jakarta', '2021-09-06', 'GPIB Effatha', '2021-09-07', 'GPIB Pancaran Kasih', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '');

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
  `nama_belakang` varchar(50) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 3,
  `jenis_kelamin` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_depan`, `nama_tengah`, `nama_belakang`, `role`, `jenis_kelamin`) VALUES
(1, 'yerusalem1', 'a39a9657dd2d570e8d9dbb6ccf1e0e75', 'David', 'Bagus', 'Pardede', 1, 1),
(2, 'daniel1', 'bbf52ee0e6104769fe034d6c5c7b8cbc', 'Daniel', 'Eka', 'Putra', 2, 1),
(3, 'nella05', 'dc24c23695eb13da5163b7cbf71a3c0e', 'Nella', 'Elisabeth', 'Silalahi', 3, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alamatjemaat`
--
ALTER TABLE `alamatjemaat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `jemaat`
--
ALTER TABLE `jemaat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rayon` (`rayon`);

--
-- Indexes for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `pelkat`
--
ALTER TABLE `pelkat`
  ADD PRIMARY KEY (`id_pelkat`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Indexes for table `sektor`
--
ALTER TABLE `sektor`
  ADD PRIMARY KEY (`id_sektor`);

--
-- Indexes for table `tanggaldantempat`
--
ALTER TABLE `tanggaldantempat`
  ADD PRIMARY KEY (`id_tanggal`);

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
  MODIFY `id_alamat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jemaat`
--
ALTER TABLE `jemaat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kepengurusan`
--
ALTER TABLE `kepengurusan`
  MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelkat`
--
ALTER TABLE `pelkat`
  MODIFY `id_pelkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id_rayon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sektor`
--
ALTER TABLE `sektor`
  MODIFY `id_sektor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tanggaldantempat`
--
ALTER TABLE `tanggaldantempat`
  MODIFY `id_tanggal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
