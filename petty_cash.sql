-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Mar 2017 pada 08.46
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petty_cash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggaran_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `anggaran_pengeluaran` (
`id_anggaran_pengeluaran` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `sisa_anggaran` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
`id_level` int(11) NOT NULL,
  `nama_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_pribadi`
--

CREATE TABLE IF NOT EXISTS `pengeluaran_pribadi` (
`id_pengeluaran_pribadi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran_project`
--

CREATE TABLE IF NOT EXISTS `pengeluaran_project` (
`id_pengeluaran_project` int(11) NOT NULL,
  `id_anggaran_pengeluaran` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) DEFAULT NULL,
  `jumlah_pengeluaran` double NOT NULL,
  `waktu_pengeluaran` datetime DEFAULT NULL,
  `keterangan_pengeluaran` text,
  `bukti_pengeluaran` text,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`id_project` int(11) NOT NULL,
  `nama_project` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `project_personil`
--

CREATE TABLE IF NOT EXISTS `project_personil` (
`id_project_personil` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo_project`
--

CREATE TABLE IF NOT EXISTS `saldo_project` (
`id_saldo` int(11) NOT NULL,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambahan_anggaran`
--

CREATE TABLE IF NOT EXISTS `tambahan_anggaran` (
`id_tambahan` int(11) NOT NULL,
  `nama_tambahan` varchar(100) DEFAULT NULL,
  `jumlah_tambahan` double DEFAULT NULL,
  `waktu_tambahan` datetime DEFAULT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggaran_pengeluaran`
--
ALTER TABLE `anggaran_pengeluaran`
 ADD PRIMARY KEY (`id_anggaran_pengeluaran`), ADD KEY `fk_anggaran_project` (`id_project`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pengeluaran_pribadi`
--
ALTER TABLE `pengeluaran_pribadi`
 ADD PRIMARY KEY (`id_pengeluaran_pribadi`), ADD KEY `pengeluaran_user` (`id_user`);

--
-- Indexes for table `pengeluaran_project`
--
ALTER TABLE `pengeluaran_project`
 ADD PRIMARY KEY (`id_pengeluaran_project`), ADD KEY `fk_pengeluaran_user` (`id_user`), ADD KEY `fk_pengeluaran_angg` (`id_anggaran_pengeluaran`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `project_personil`
--
ALTER TABLE `project_personil`
 ADD PRIMARY KEY (`id_project_personil`), ADD KEY `fk_pp_user` (`id_user`), ADD KEY `fk_pp_project` (`id_project`), ADD KEY `fk_pp_level` (`id_level_user`);

--
-- Indexes for table `saldo_project`
--
ALTER TABLE `saldo_project`
 ADD PRIMARY KEY (`id_saldo`), ADD KEY `fk_saldo_project` (`id_project`);

--
-- Indexes for table `tambahan_anggaran`
--
ALTER TABLE `tambahan_anggaran`
 ADD PRIMARY KEY (`id_tambahan`), ADD KEY `fk_tambahan_project` (`id_project`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggaran_pengeluaran`
--
ALTER TABLE `anggaran_pengeluaran`
MODIFY `id_anggaran_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengeluaran_pribadi`
--
ALTER TABLE `pengeluaran_pribadi`
MODIFY `id_pengeluaran_pribadi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengeluaran_project`
--
ALTER TABLE `pengeluaran_project`
MODIFY `id_pengeluaran_project` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_personil`
--
ALTER TABLE `project_personil`
MODIFY `id_project_personil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `saldo_project`
--
ALTER TABLE `saldo_project`
MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tambahan_anggaran`
--
ALTER TABLE `tambahan_anggaran`
MODIFY `id_tambahan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `anggaran_pengeluaran`
--
ALTER TABLE `anggaran_pengeluaran`
ADD CONSTRAINT `fk_anggaran_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pengeluaran_pribadi`
--
ALTER TABLE `pengeluaran_pribadi`
ADD CONSTRAINT `pengeluaran_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pengeluaran_project`
--
ALTER TABLE `pengeluaran_project`
ADD CONSTRAINT `fk_pengeluaran_angg` FOREIGN KEY (`id_anggaran_pengeluaran`) REFERENCES `anggaran_pengeluaran` (`id_anggaran_pengeluaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pengeluaran_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `project_personil`
--
ALTER TABLE `project_personil`
ADD CONSTRAINT `fk_pp_level` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id_level`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pp_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pp_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `saldo_project`
--
ALTER TABLE `saldo_project`
ADD CONSTRAINT `fk_saldo_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tambahan_anggaran`
--
ALTER TABLE `tambahan_anggaran`
ADD CONSTRAINT `fk_tambahan_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
