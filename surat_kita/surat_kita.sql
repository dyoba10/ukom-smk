-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 08:57 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_kita`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `no_disposisi` varchar(15) NOT NULL,
  `no_agenda` varchar(15) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `status_surat` varchar(15) NOT NULL,
  `tanggapan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`no_disposisi`, `no_agenda`, `no_surat`, `kepada`, `keterangan`, `status_surat`, `tanggapan`) VALUES
('1', '001', '001', 'smk n13 bandar lampung', 'lomba', 'penting', 'harus'),
('2', '002', '002', 'smkn 8 bandar lampung', 'lomba', 'penting', 'harus'),
('3', '003', '003', 'PT JAYA', 'rapat', 'sampai', 'harus'),
('4', '004', '004', 'PT MERDEKA', 'rapat', 'penting', 'harus'),
('5', '005', '005', 'PT ABADI', 'rapat', 'penting', 'harus');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` varchar(15) NOT NULL,
  `nama_depan` char(30) NOT NULL,
  `nama_belakang` char(30) NOT NULL,
  `pasword` varchar(30) NOT NULL,
  `hak` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_depan`, `nama_belakang`, `pasword`, `hak`) VALUES
('1', 'iham', 'ridho', 'ilham', 'user'),
('dyo123', 'M Israq', 'Dyoba', 'dyoba123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `no_agenda` varchar(15) NOT NULL,
  `id_petugas` varchar(15) NOT NULL,
  `jenis_surat` char(30) NOT NULL,
  `tgl_kirim` char(15) NOT NULL,
  `no_surat` char(15) NOT NULL,
  `pengirim` char(30) NOT NULL,
  `perihal` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`no_agenda`, `id_petugas`, `jenis_surat`, `tgl_kirim`, `no_surat`, `pengirim`, `perihal`) VALUES
('001', 'dyo123', 'pemberitahuan', '25-02-2018', '001', 'pt adi jaya grup', 'penting'),
('002', 'dyo123', 'resmi', '19-02-2018', '002', 'PT JAYA', 'penerimaan lowongan'),
('003', 'dyo123', 'pemberitahuan', '10-01-2018', '003', 'PT Anu Gerah', 'penerimaan lowongan'),
('004', 'dyo123', 'resmi', '09-02-2018', '004', 'PT JAYA', 'Laporan Keuangan'),
('005', 'dyo123', 'resmi', '09-02-2018', '005', 'PT JAYA', 'rapat awal bulan');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `no_agenda` varchar(15) NOT NULL,
  `id_petugas` varchar(15) NOT NULL,
  `jenis_surat` char(15) NOT NULL,
  `tgl_kirim` char(30) NOT NULL,
  `tgl_terima` char(15) NOT NULL,
  `no_surat` char(15) NOT NULL,
  `pengirim` char(30) NOT NULL,
  `perihal` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`no_agenda`, `id_petugas`, `jenis_surat`, `tgl_kirim`, `tgl_terima`, `no_surat`, `pengirim`, `perihal`) VALUES
('001', 'dyo123', 'pemberitahuan', '09-02-2018', '21-02-2018', '009', 'smk binamulia lampung', 'penting'),
('002', 'dyo123', 'pengumuman', '25-02-2018', '29-02-2018', '002', 'PT JAYA', 'penerimaan lowongan'),
('003', 'dyo123', 'tidak resmi', '10-01-2018', '21-02-2018', '003', 'PT Puting Beliyung', 'penting'),
('004', 'dyo123', 'resmi', '25-02-2018', '29-02-2018', '004', 'PT Anu Gerah', 'rapat'),
('005', 'dyo123', 'resmi', '09-02-2018', '21-02-2018', '005', 'PT Kita jaya', 'rapat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD KEY `no_agenda` (`no_agenda`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`no_agenda`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_ibfk_1` FOREIGN KEY (`no_agenda`) REFERENCES `surat_masuk` (`no_agenda`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD CONSTRAINT `surat_keluar_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD CONSTRAINT `surat_masuk_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
