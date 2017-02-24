-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24 Feb 2017 pada 21.17
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
-- Struktur dari tabel `tabel_anggaran_pengeluaran`
--

CREATE TABLE IF NOT EXISTS `tabel_anggaran_pengeluaran` (
`id_anggaran_pengeluaran` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `sisa_anggaran` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_level_user`
--

CREATE TABLE IF NOT EXISTS `tabel_level_user` (
`id_level` int(11) NOT NULL,
  `nama_level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pendapatan_pribadi`
--

CREATE TABLE IF NOT EXISTS `tabel_pendapatan_pribadi` (
`id_pendapatan_p` int(11) NOT NULL,
  `nama_pendapatan` varchar(100) DEFAULT NULL,
  `tanggal_pemasukan` datetime DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengeluaran_pribadi`
--

CREATE TABLE IF NOT EXISTS `tabel_pengeluaran_pribadi` (
`id_pengeluaran_pribadi` int(11) NOT NULL,
  `id_saldo_pribadi` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) DEFAULT NULL,
  `jumlah_pengeluaran` double DEFAULT NULL,
  `waktu_pengeluaran` datetime DEFAULT NULL,
  `keterangan_pengeluaran` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengeluaran_project`
--

CREATE TABLE IF NOT EXISTS `tabel_pengeluaran_project` (
`id_pengeluaran_project` int(11) NOT NULL,
  `id_anggaran_pengeluaran` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) DEFAULT NULL,
  `waktu_pengeluaran` datetime DEFAULT NULL,
  `keterangan_pengeluaran` text,
  `bukti_pengeluaran` text,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_project`
--

CREATE TABLE IF NOT EXISTS `tabel_project` (
`id_project` int(11) NOT NULL,
  `nama_project` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_project_personil`
--

CREATE TABLE IF NOT EXISTS `tabel_project_personil` (
`id_project_personil` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_saldo_pribadi`
--

CREATE TABLE IF NOT EXISTS `tabel_saldo_pribadi` (
`id_saldo` int(11) NOT NULL,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_saldo_project`
--

CREATE TABLE IF NOT EXISTS `tabel_saldo_project` (
`id_saldo` int(11) NOT NULL,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tambahan_anggaran`
--

CREATE TABLE IF NOT EXISTS `tabel_tambahan_anggaran` (
`id_tambahan` int(11) NOT NULL,
  `nama_tambahan` varchar(100) DEFAULT NULL,
  `jumlah_tambahan` double DEFAULT NULL,
  `waktu_tambahan` datetime DEFAULT NULL,
  `id_project` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE IF NOT EXISTS `tabel_user` (
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
-- Indexes for table `tabel_anggaran_pengeluaran`
--
ALTER TABLE `tabel_anggaran_pengeluaran`
 ADD PRIMARY KEY (`id_anggaran_pengeluaran`), ADD KEY `fk_anggaran_project` (`id_project`);

--
-- Indexes for table `tabel_level_user`
--
ALTER TABLE `tabel_level_user`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tabel_pendapatan_pribadi`
--
ALTER TABLE `tabel_pendapatan_pribadi`
 ADD PRIMARY KEY (`id_pendapatan_p`), ADD KEY `fk_pend_user` (`id_user`);

--
-- Indexes for table `tabel_pengeluaran_pribadi`
--
ALTER TABLE `tabel_pengeluaran_pribadi`
 ADD PRIMARY KEY (`id_pengeluaran_pribadi`), ADD KEY `fk_saldo_pribadi` (`id_saldo_pribadi`);

--
-- Indexes for table `tabel_pengeluaran_project`
--
ALTER TABLE `tabel_pengeluaran_project`
 ADD PRIMARY KEY (`id_pengeluaran_project`), ADD KEY `fk_pengeluaran_user` (`id_user`), ADD KEY `fk_pengeluaran_angg` (`id_anggaran_pengeluaran`);

--
-- Indexes for table `tabel_project`
--
ALTER TABLE `tabel_project`
 ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `tabel_project_personil`
--
ALTER TABLE `tabel_project_personil`
 ADD PRIMARY KEY (`id_project_personil`), ADD KEY `fk_pp_user` (`id_user`), ADD KEY `fk_pp_project` (`id_project`), ADD KEY `fk_pp_level` (`id_level_user`);

--
-- Indexes for table `tabel_saldo_pribadi`
--
ALTER TABLE `tabel_saldo_pribadi`
 ADD PRIMARY KEY (`id_saldo`), ADD KEY `fk_saldopr_user` (`id_user`);

--
-- Indexes for table `tabel_saldo_project`
--
ALTER TABLE `tabel_saldo_project`
 ADD PRIMARY KEY (`id_saldo`), ADD KEY `fk_saldo_project` (`id_project`);

--
-- Indexes for table `tabel_tambahan_anggaran`
--
ALTER TABLE `tabel_tambahan_anggaran`
 ADD PRIMARY KEY (`id_tambahan`), ADD KEY `fk_tambahan_project` (`id_project`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_anggaran_pengeluaran`
--
ALTER TABLE `tabel_anggaran_pengeluaran`
MODIFY `id_anggaran_pengeluaran` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_level_user`
--
ALTER TABLE `tabel_level_user`
MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_pendapatan_pribadi`
--
ALTER TABLE `tabel_pendapatan_pribadi`
MODIFY `id_pendapatan_p` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_pengeluaran_pribadi`
--
ALTER TABLE `tabel_pengeluaran_pribadi`
MODIFY `id_pengeluaran_pribadi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_pengeluaran_project`
--
ALTER TABLE `tabel_pengeluaran_project`
MODIFY `id_pengeluaran_project` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_project`
--
ALTER TABLE `tabel_project`
MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_project_personil`
--
ALTER TABLE `tabel_project_personil`
MODIFY `id_project_personil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_saldo_pribadi`
--
ALTER TABLE `tabel_saldo_pribadi`
MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_saldo_project`
--
ALTER TABLE `tabel_saldo_project`
MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_tambahan_anggaran`
--
ALTER TABLE `tabel_tambahan_anggaran`
MODIFY `id_tambahan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_anggaran_pengeluaran`
--
ALTER TABLE `tabel_anggaran_pengeluaran`
ADD CONSTRAINT `fk_anggaran_project` FOREIGN KEY (`id_project`) REFERENCES `tabel_project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tabel_pendapatan_pribadi`
--
ALTER TABLE `tabel_pendapatan_pribadi`
ADD CONSTRAINT `fk_pend_user` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tabel_pengeluaran_pribadi`
--
ALTER TABLE `tabel_pengeluaran_pribadi`
ADD CONSTRAINT `fk_saldo_pribadi` FOREIGN KEY (`id_saldo_pribadi`) REFERENCES `tabel_saldo_pribadi` (`id_saldo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tabel_pengeluaran_project`
--
ALTER TABLE `tabel_pengeluaran_project`
ADD CONSTRAINT `fk_pengeluaran_angg` FOREIGN KEY (`id_anggaran_pengeluaran`) REFERENCES `tabel_anggaran_pengeluaran` (`id_anggaran_pengeluaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pengeluaran_user` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tabel_project_personil`
--
ALTER TABLE `tabel_project_personil`
ADD CONSTRAINT `fk_pp_level` FOREIGN KEY (`id_level_user`) REFERENCES `tabel_level_user` (`id_level`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pp_project` FOREIGN KEY (`id_project`) REFERENCES `tabel_project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_pp_user` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tabel_saldo_pribadi`
--
ALTER TABLE `tabel_saldo_pribadi`
ADD CONSTRAINT `fk_saldopr_user` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tabel_saldo_project`
--
ALTER TABLE `tabel_saldo_project`
ADD CONSTRAINT `fk_saldo_project` FOREIGN KEY (`id_project`) REFERENCES `tabel_project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tabel_tambahan_anggaran`
--
ALTER TABLE `tabel_tambahan_anggaran`
ADD CONSTRAINT `fk_tambahan_project` FOREIGN KEY (`id_project`) REFERENCES `tabel_project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
