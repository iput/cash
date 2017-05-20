/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.21 : Database - petty_cash_2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`petty_cash_2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `petty_cash_2`;

/*Table structure for table `anggaran_pengeluaran` */

DROP TABLE IF EXISTS `anggaran_pengeluaran`;

CREATE TABLE `anggaran_pengeluaran` (
  `id_anggaran_pengeluaran` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `sisa_anggaran` double DEFAULT NULL,
  PRIMARY KEY (`id_anggaran_pengeluaran`),
  KEY `fk_anggaran_project` (`id_project`),
  CONSTRAINT `fk_anggaran_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `anggaran_pengeluaran` */

/*Table structure for table `level_user` */

DROP TABLE IF EXISTS `level_user`;

CREATE TABLE `level_user` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `level_user` */

/*Table structure for table `pengeluaran_pribadi` */

DROP TABLE IF EXISTS `pengeluaran_pribadi`;

CREATE TABLE `pengeluaran_pribadi` (
  `id_pengeluaran_pribadi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`id_pengeluaran_pribadi`),
  KEY `pengeluaran_user` (`id_user`),
  CONSTRAINT `pengeluaran_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `pengeluaran_pribadi` */

insert  into `pengeluaran_pribadi`(`id_pengeluaran_pribadi`,`id_user`,`tanggal`,`kredit`,`debit`,`keterangan`) values (9,2,'2017-03-23',0,1200000,'makan');

/*Table structure for table `pengeluaran_project` */

DROP TABLE IF EXISTS `pengeluaran_project`;

CREATE TABLE `pengeluaran_project` (
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
  KEY `fk_pengeluaran_angg` (`id_anggaran_pengeluaran`),
  CONSTRAINT `fk_pengeluaran_angg` FOREIGN KEY (`id_anggaran_pengeluaran`) REFERENCES `anggaran_pengeluaran` (`id_anggaran_pengeluaran`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pengeluaran_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengeluaran_project` */

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `nama_project` varchar(100) DEFAULT NULL,
  `anggaran` double DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `project` */

insert  into `project`(`id_project`,`nama_project`,`anggaran`,`tanggal_mulai`,`tanggal_selesai`) values (1,'iso',120000,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'12',112000,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `project_personil` */

DROP TABLE IF EXISTS `project_personil`;

CREATE TABLE `project_personil` (
  `id_project_personil` int(11) NOT NULL AUTO_INCREMENT,
  `id_project` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_level_user` int(11) NOT NULL,
  PRIMARY KEY (`id_project_personil`),
  KEY `fk_pp_user` (`id_user`),
  KEY `fk_pp_project` (`id_project`),
  KEY `fk_pp_level` (`id_level_user`),
  CONSTRAINT `fk_pp_level` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id_level`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pp_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pp_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `project_personil` */

/*Table structure for table `saldo_project` */

DROP TABLE IF EXISTS `saldo_project`;

CREATE TABLE `saldo_project` (
  `id_saldo` int(11) NOT NULL AUTO_INCREMENT,
  `kredit` double DEFAULT NULL,
  `debit` double DEFAULT NULL,
  `id_project` int(11) NOT NULL,
  PRIMARY KEY (`id_saldo`),
  KEY `fk_saldo_project` (`id_project`),
  CONSTRAINT `fk_saldo_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `saldo_project` */

/*Table structure for table `tambahan_anggaran` */

DROP TABLE IF EXISTS `tambahan_anggaran`;

CREATE TABLE `tambahan_anggaran` (
  `id_tambahan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tambahan` varchar(100) DEFAULT NULL,
  `jumlah_tambahan` double DEFAULT NULL,
  `waktu_tambahan` datetime DEFAULT NULL,
  `id_project` int(11) NOT NULL,
  PRIMARY KEY (`id_tambahan`),
  KEY `fk_tambahan_project` (`id_project`),
  CONSTRAINT `fk_tambahan_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tambahan_anggaran` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id_user`,`nama_user`,`alamat`,`no_hp`,`email`,`username`,`password`,`last_login`,`is_active`) values (1,'makhfud','ngawi','089','makhfudzamhari@gmail.com','makhfud','02031209','2017-03-20 14:21:20',0),(2,'nindy','tuluagung','0890','nindy123@gmail.com','nindy','121212','2017-03-21 15:44:16',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
