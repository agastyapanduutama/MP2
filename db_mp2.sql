-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2020 at 06:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mp2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengajuan`
--

CREATE TABLE `tb_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengajuan`
--

INSERT INTO `tb_pengajuan` (`id_pengajuan`, `jenis`, `id_user`, `status`) VALUES
(5, 'Pengajuan KP', 5, 3),
(6, 'Pengajuan KP', 1, 1),
(7, 'Pengajuan Skripsi', 6, 0),
(8, 'Pengajuan KP', 5, 1),
(9, 'Pendaftaran sidang skripsi', 5, 0),
(10, 'Pendaftaran Pra-Sidang', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id_surat` int(11) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `file` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`id_surat`, `nama_surat`, `file`) VALUES
(2, 'Pendaftaran Pra-Sidang', 'Form_Pendaftaran_Pra-Sidang.docx'),
(3, 'Pendaftaran sidang skripsi', 'F_AKA-03-08_FORM_PENDAFTARAN_SIDANG_SKRIPSI_2016.docx'),
(4, 'Surat Izin Sidang', 'Surat_Izin_sidang_tabel.doc'),
(5, 'Surat Izin Perusahaan Wisuda', 'Surat_Izin_perusahaan_wisuda.doc'),
(6, 'Surat Izin Kegiatan Wisuda', 'Surat_Izin_kegiatan_Wisuda.doc'),
(7, 'Pendaftaran KP', 'Form_Pendaftaran_KP2.docx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`, `nim`, `nama`) VALUES
(2, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'admin', 'admin'),
(5, 'aws', 'aws', '55357933a7310d2db90c3fa1ed0970a7bb34ed39', 2, '123', 'aws'),
(6, 'gcp', 'gcp', 'fc1aa7ef6e9f80a78fea9896d73bfcef0cf24868', 2, '321', 'gcp'),
(7, 'Pandu', 'helloworld', 'c20c45fd9cdc571d06f801c5b01548c55b30506a', 2, '1217619', 'Agastya Pandu Satriya Utama');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengajuan`
--
ALTER TABLE `tb_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
