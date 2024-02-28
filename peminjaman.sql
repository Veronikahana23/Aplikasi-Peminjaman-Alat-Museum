-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2020 at 05:26 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(16) NOT NULL,
  `fasilitas` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id` int(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `kota` varchar(32) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `id_penanggungjawab` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama`, `alamat`, `kota`, `telepon`, `id_penanggungjawab`) VALUES
(3, 'Universitas Pembangunan Nasional', 'Jalan Tambak Bayan', 'Yogyakarta', '0274112233', 9),
(4, 'universitas Gajah Mada', 'Jalan Pancasila', 'Yogyakarta', '0274112233', 10),
(5, 'informatika', 'Jalan Tambak Bayan', 'Yogyakarta', '0274112233', 9);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(16) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` time(4) NOT NULL,
  `jam_selesai` time(4) NOT NULL,
  `id_ruang` int(16) NOT NULL,
  `id_penanggungjawab` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `tanggal`, `jam_mulai`, `jam_selesai`, `id_ruang`, `id_penanggungjawab`) VALUES
(3, 'pameran kriptografi', '2020-02-21', '13:00:00.0000', '15:00:00.0000', 2, 9),
(7, 'Rapat Teater', '2020-02-20', '19:30:00.0000', '21:00:00.0000', 2, 10),
(8, 'Pelantikan Kajur', '2020-03-20', '07:00:00.0000', '13:00:00.0000', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(16) NOT NULL,
  `id_penanggungjawab` int(16) NOT NULL,
  `id_kegiatan` int(16) NOT NULL,
  `id_instansi` int(16) NOT NULL,
  `id_status` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_penanggungjawab`, `id_kegiatan`, `id_instansi`, `id_status`) VALUES
(1, 9, 3, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman2`
--

CREATE TABLE `peminjaman2` (
  `id` int(16) NOT NULL,
  `id_penanggungjawab` int(16) NOT NULL,
  `nama_instansi` varchar(64) NOT NULL,
  `alamat_instansi` varchar(128) NOT NULL,
  `kota_instansi` varchar(32) NOT NULL,
  `telepon_instansi` varchar(16) NOT NULL,
  `nama_kegiatan` varchar(32) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `jam_mulai_kegiatan` time NOT NULL,
  `jam_selesai_kegiatan` time NOT NULL,
  `id_ruang` int(4) NOT NULL,
  `id_status` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman2`
--

INSERT INTO `peminjaman2` (`id`, `id_penanggungjawab`, `nama_instansi`, `alamat_instansi`, `kota_instansi`, `telepon_instansi`, `nama_kegiatan`, `tanggal_kegiatan`, `jam_mulai_kegiatan`, `jam_selesai_kegiatan`, `id_ruang`, `id_status`) VALUES
(12, 9, 'Universitas Gajah Mada', 'Jalan Pancasila', 'Yogyakarta', '02100000000', 'Rapat Teater', '2020-03-13', '11:00:00', '15:00:00', 2, 2),
(13, 9, 'Universitas Pembangunan Nasional', 'Jalan Tambak Bayan', 'Yogyakarta', '123456', 'Rapat Anggota Himpunan', '2020-03-12', '11:00:00', '14:00:00', 2, 4),
(14, 9, 'SMK N 1 Pengasih', 'Jalan Kertodiningrat, Margosari Pengasih, KulonProgo', 'Bantul', '0274332211', 'Lomba Kriptografi', '2020-04-13', '07:00:00', '16:00:00', 2, 1),
(15, 11, 'SMK N 1 Pengasih', 'Jalan Kertodiningrat, Margosari Pengasih, KulonProgo', 'Bantul', '0274556677', 'Pelantikan OSIS', '2020-04-12', '07:00:00', '13:00:00', 2, 1),
(16, 9, 'informatika', 'Jalan Tambak Bayan', 'Yogyakarta', '089776665554', 'Rapat Anggota Himpunan Mahasiswa', '2020-03-30', '07:00:00', '08:00:00', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `penanggungjawab`
--

CREATE TABLE `penanggungjawab` (
  `id` int(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `no_wa` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `role` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penanggungjawab`
--

INSERT INTO `penanggungjawab` (`id`, `nama`, `no_wa`, `email`, `alamat`, `password`, `role`) VALUES
(9, 'Rifky Izha Salasta', '085728188558', 'rifkyizha@gmail.com', 'pandowan', '123', 2),
(10, 'veronika', '085729000222', 'veronika@gmail.com', 'medan', '123', 2),
(11, 'Lulu Sinta', '0821118883488', 'lulu@gmail.com', 'Piyungan', '123', 2),
(12, 'admin', '00000000', 'admin', 'admin', 'admin', 1),
(13, '', '', 'rifkyizha2@gmail.com', '', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(2) NOT NULL,
  `role` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id` int(16) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id`, `nama`) VALUES
(1, 'Komunitas'),
(2, 'Aula');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(16) NOT NULL,
  `status` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'menunggu'),
(2, 'diterima'),
(3, 'ditolak'),
(4, 'dibatalkan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idpenanggungjawab` (`id_penanggungjawab`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idruang` (`id_ruang`),
  ADD KEY `fk_idpenanggungjawab_kegiatan` (`id_penanggungjawab`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_penanggungjawab` (`id_penanggungjawab`),
  ADD KEY `fk_kegiatan` (`id_kegiatan`),
  ADD KEY `fk_instansi` (`id_instansi`),
  ADD KEY `fk_status` (`id_status`);

--
-- Indexes for table `peminjaman2`
--
ALTER TABLE `peminjaman2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_penanggungjawab` (`id_penanggungjawab`),
  ADD KEY `fk_id_ruang_kegiatan` (`id_ruang`),
  ADD KEY `fk_id_status` (`id_status`);

--
-- Indexes for table `penanggungjawab`
--
ALTER TABLE `penanggungjawab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_role` (`role`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `peminjaman2`
--
ALTER TABLE `peminjaman2`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `penanggungjawab`
--
ALTER TABLE `penanggungjawab`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `instansi`
--
ALTER TABLE `instansi`
  ADD CONSTRAINT `fk_idpenanggungjawab` FOREIGN KEY (`id_penanggungjawab`) REFERENCES `penanggungjawab` (`id`);

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_idpenanggungjawab_kegiatan` FOREIGN KEY (`id_penanggungjawab`) REFERENCES `penanggungjawab` (`id`),
  ADD CONSTRAINT `fk_idruang` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_instansi` FOREIGN KEY (`id_instansi`) REFERENCES `instansi` (`id`),
  ADD CONSTRAINT `fk_kegiatan` FOREIGN KEY (`id_kegiatan`) REFERENCES `kegiatan` (`id`),
  ADD CONSTRAINT `fk_penanggungjawab` FOREIGN KEY (`id_penanggungjawab`) REFERENCES `penanggungjawab` (`id`),
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`);

--
-- Constraints for table `peminjaman2`
--
ALTER TABLE `peminjaman2`
  ADD CONSTRAINT `fk_id_penanggungjawab` FOREIGN KEY (`id_penanggungjawab`) REFERENCES `penanggungjawab` (`id`),
  ADD CONSTRAINT `fk_id_ruang_kegiatan` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id`),
  ADD CONSTRAINT `fk_id_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`);

--
-- Constraints for table `penanggungjawab`
--
ALTER TABLE `penanggungjawab`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
