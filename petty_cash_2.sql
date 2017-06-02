-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 06:17 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petty_cash_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggaran_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `anggaran_pengeluaran` (
  `id_anggaran_pengeluaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) NOT NULL,
  `nama_anggaran` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `sisa_anggaran` double DEFAULT NULL,
  PRIMARY KEY (`id_anggaran_pengeluaran`),
  KEY `fk_anggaran_project` (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `anggaran_pengeluaran`
--

INSERT INTO `anggaran_pengeluaran` (`id_anggaran_pengeluaran`, `id_project`, `nama_anggaran`, `anggaran`, `sisa_anggaran`) VALUES
(1, 2, 'transportasi2', 120000, 100000),
(2, 2, 'makan', 200000, 200000),
(3, 1, 'Transportasi', 200000, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id_level`, `nama_level`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Project Manager');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_pribadi`
--

CREATE TABLE IF NOT EXISTS `pengeluaran_pribadi` (
  `id_pengeluaran_pribadi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_pengeluaran_pribadi`),
  KEY `pengeluaran_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran_project`
--

CREATE TABLE IF NOT EXISTS `pengeluaran_project` (
  `id_pengeluaran_project` int(11) NOT NULL AUTO_INCREMENT,
  `id_anggaran_pengeluaran` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) DEFAULT NULL,
  `jumlah_pengeluaran` double NOT NULL,
  `waktu_pengeluaran` datetime DEFAULT NULL,
  `keterangan_pengeluaran` text,
  `bukti_pengeluaran` text,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_pengeluaran_project`),
  KEY `fk_pengeluaran_user` (`id_user`),
  KEY `fk_pengeluaran_angg` (`id_anggaran_pengeluaran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `nama_project` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `nama_project`, `anggaran`, `tanggal_mulai`, `tanggal_selesai`) VALUES
(1, 'ISO Bali2', 120000, '2017-03-05 08:11:53', '2017-09-05 08:11:53'),
(2, 'EA', 10000000, '2017-03-19 13:15:18', '2017-05-19 13:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `project_personil`
--

CREATE TABLE IF NOT EXISTS `project_personil` (
  `id_project_personil` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  PRIMARY KEY (`id_project_personil`),
  KEY `fk_pp_user` (`id_user`),
  KEY `fk_pp_project` (`id_project`),
  KEY `fk_pp_level` (`id_level_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `project_personil`
--

INSERT INTO `project_personil` (`id_project_personil`, `id_project`, `id_user`, `id_level_user`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `saldo_project`
--

CREATE TABLE IF NOT EXISTS `saldo_project` (
  `id_saldo` int(11) NOT NULL AUTO_INCREMENT,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `id_project` int(11) NOT NULL,
  PRIMARY KEY (`id_saldo`),
  KEY `fk_saldo_project` (`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tambahan_anggaran`
--

CREATE TABLE IF NOT EXISTS `tambahan_anggaran` (
  `id_tambahan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tambahan` varchar(100) DEFAULT NULL,
  `jumlah_tambahan` double DEFAULT NULL,
  `waktu_tambahan` datetime DEFAULT NULL,
  `id_project` int(11) NOT NULL,
  PRIMARY KEY (`id_tambahan`),
  KEY `fk_tambahan_project` (`id_project`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tambahan_anggaran`
--

INSERT INTO `tambahan_anggaran` (`id_tambahan`, `nama_tambahan`, `jumlah_tambahan`, `waktu_tambahan`, `id_project`) VALUES
(1, 'dana bos', 3000000, '2017-03-08 14:24:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `email`, `username`, `password`, `status`, `last_login`, `is_active`) VALUES
(1, 'Nindy Agustina', 'Tulungagung', '085608070217', 'nindyagustina89@gmail.com', 'Nindy55', 'MTRQMVllUHQ=', 'belum verifikasi', NULL, 0),
(2, 'ozora', 'Jepang', '08913173103', 'nindyagustina63@gmail.com', 'ozora23', 'dFl0dHRQWTI=', 'belum verifikasi', NULL, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggaran_pengeluaran`
--
ALTER TABLE `anggaran_pengeluaran`
  ADD CONSTRAINT `fk_anggaran_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengeluaran_pribadi`
--
ALTER TABLE `pengeluaran_pribadi`
  ADD CONSTRAINT `pengeluaran_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengeluaran_project`
--
ALTER TABLE `pengeluaran_project`
  ADD CONSTRAINT `fk_pengeluaran_angg` FOREIGN KEY (`id_anggaran_pengeluaran`) REFERENCES `anggaran_pengeluaran` (`id_anggaran_pengeluaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengeluaran_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_personil`
--
ALTER TABLE `project_personil`
  ADD CONSTRAINT `fk_pp_level` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id_level`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pp_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pp_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `saldo_project`
--
ALTER TABLE `saldo_project`
  ADD CONSTRAINT `fk_saldo_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tambahan_anggaran`
--
ALTER TABLE `tambahan_anggaran`
  ADD CONSTRAINT `fk_tambahan_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
