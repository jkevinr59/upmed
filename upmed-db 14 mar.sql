/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.1.28-MariaDB : Database - upmed-db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`upmed-db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `upmed-db`;

/*Table structure for table `analisa_kesehatan` */

DROP TABLE IF EXISTS `analisa_kesehatan`;

CREATE TABLE `analisa_kesehatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjek_1` int(11) NOT NULL,
  `subjek_2` int(11) DEFAULT NULL,
  `subjek_3` int(11) DEFAULT NULL,
  `id_kondisi` int(11) DEFAULT NULL,
  `kode_pesan` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `analisa_kesehatan` */

/*Table structure for table `kondisi` */

DROP TABLE IF EXISTS `kondisi`;

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deskripsi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COMMENT='tabel kondisi';

/*Data for the table `kondisi` */

insert  into `kondisi`(`id`,`deskripsi`) values (0,'default message'),(1,'bila disertai subjek 1 setelah subjek 2 (id kondisi 1)'),(2,' bila disertai subjek 1 sebelum subjek 2'),(3,' bila subjek 1 diatas normal'),(4,' bila subjek 2 dibawah normal'),(5,'penurunan drastis(berat badan masuk nya ke profil lho?)(ragu)'),(6,' mengalami subjek 1 berturut turut (rawan fail,perlu edukasi ke penggunanya)'),(7,'konsumsi obat tertentu(ragu, kecuali kita bisa cek ada kata tertentu dalam deskripsi?)'),(8,'tanpa disertai subjek 1,subjek 2'),(9,'bila disertai dan/atau subjek 1,2,3,4'),(10,' subjek 1 diatas normal tanpa disertai subjek 2'),(11,'subjek 1 di bawah normal setelah');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('rifqimaula@gmail.com','bc01e8b869a731ba821d697ec1ff5af782442c18f7d9f4870f05b15cadea8634','2017-06-28 13:12:21');

/*Table structure for table `profil` */

DROP TABLE IF EXISTS `profil`;

CREATE TABLE `profil` (
  `UID` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `HP` varchar(20) DEFAULT NULL,
  `User` varchar(30) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `Kodepos` varchar(10) DEFAULT NULL,
  `Foto` varchar(120) DEFAULT NULL,
  `Umur` int(11) DEFAULT NULL,
  `Golongan_darah` varchar(2) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `riwayat_penyakit` text,
  `No_BPJS` varchar(20) DEFAULT NULL,
  `NO_KTP` varchar(20) DEFAULT NULL,
  `Kota` varchar(100) DEFAULT NULL,
  `Pekerjaan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `profil` */

insert  into `profil`(`UID`,`Nama`,`Alamat`,`HP`,`User`,`Username`,`Kodepos`,`Foto`,`Umur`,`Golongan_darah`,`berat_badan`,`tinggi_badan`,`riwayat_penyakit`,`No_BPJS`,`NO_KTP`,`Kota`,`Pekerjaan`) values (20,'User Satu','Keputih',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `rekor_medis` */

DROP TABLE IF EXISTS `rekor_medis`;

CREATE TABLE `rekor_medis` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Description_value` varchar(255) NOT NULL,
  `Datetime` datetime NOT NULL,
  `Title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `rekor_medis` */

insert  into `rekor_medis`(`record_id`,`User`,`Subject`,`Description_value`,`Datetime`,`Title`) values (2,'10','0','jatuh di selokan, luka borok berdarah di kaki kanan habis itu agak kaku lutut kanan saya','2017-09-23 00:00:00','jatuh di selokan'),(4,'10','0','borok bernanah di kaki kiri','2017-09-26 00:00:00','Jatuh dari Sepeda'),(5,'10','16','200','2017-09-27 00:00:00','Gula darah Tinggi'),(6,'10','16','200','2017-09-27 00:00:00','Gula darah Tinggi'),(7,'10','16','200','2017-09-27 00:00:00','Gula darah Tinggi'),(8,'10','16','200','2017-09-27 00:00:00','Gula darah Tinggi'),(9,'10','16','200','2017-09-27 00:00:00','Gula darah Tinggi'),(10,'10','16','300','2017-09-27 00:00:00','Hasil pemeriksaan Lab pagi'),(11,'10','1','gak tau pokoknya gak enak aja akhir akhir ini','0000-00-00 00:00:00','keseleo'),(12,'10','1','Gak enak badan','2017-10-12 00:00:00','Tes trauma'),(13,'10','1','Sekarang pakai deskripsi','2017-10-12 00:00:00','Tes Trauma 2'),(14,'10','2','Demam suhu sekitar 40 derajat celcius dibarengi gatal-gatal','2017-10-10 00:00:00','Sakit Demam karena alergi'),(15,'20','1','Kecelakaan','2017-10-16 00:00:00','Jatuh dari Sepeda');

/*Table structure for table `relasi_subjek` */

DROP TABLE IF EXISTS `relasi_subjek`;

CREATE TABLE `relasi_subjek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subjek_medis` varchar(50) DEFAULT NULL,
  `relasi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `relasi_subjek` */

/*Table structure for table `smart_message` */

DROP TABLE IF EXISTS `smart_message`;

CREATE TABLE `smart_message` (
  `id_pesan` int(11) NOT NULL,
  `kode_pesan` varchar(2) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `smart_message` */

/*Table structure for table `subjek` */

DROP TABLE IF EXISTS `subjek`;

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Group` decimal(10,0) DEFAULT NULL,
  `Type` binary(1) DEFAULT NULL COMMENT '0 text , 1 angka',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `subjek` */

insert  into `subjek`(`id`,`Name`,`Group`,`Type`) values (1,'Trauma','0','0'),(2,'Demam','0','0'),(3,'Batuk','0','0'),(4,'Gangguan Pencernaan','0','0'),(5,'Gangguan Telinga','0','0'),(6,'Gangguan Syaraf','0','0'),(7,'Makan minum curiga','0','0'),(8,'Pergi ke daerah endemis','0','0'),(9,'Gigitan Hewan','0','0'),(10,'Nyeri Dada','0','0'),(11,'Sesak','0','0'),(12,'Konsumsi obat tertentu','0','0'),(13,'Pergi ke dokter','0','0'),(14,'Nyeri Persendian/otot','0','0'),(15,'lain lain','0','0'),(16,'Gula Darah Puasa','0','1'),(17,'Gula Darah Acak','0','1'),(18,'Tensi darah sistol','0','1'),(19,'Asam Urat','0','1'),(20,'SGOT/SGPT','0','1'),(21,'Serum Creatinin','0','1'),(22,'Ureum','0','1'),(23,'HBA1C','0','1'),(24,'Cholestrol Total','0','1'),(25,'Cholestrol HDL','0','1'),(26,'Cholestrol LDL','0','1'),(27,'Trigliserida','0','1'),(28,'Heoglobin','0','1'),(29,'Sel Darah Putih','0','1'),(30,'Neutrofil','0','1'),(31,'Limfosit','0','1'),(32,'Trombosit ','0','1'),(33,'CD4++','0','1'),(34,'Jumlah Batang rokok ','0','1'),(35,'Minum Air Putih per hari','0','1'),(36,'Jarak Berjalan Kaki','0','1'),(37,'Olahraga','0','0'),(38,'Puasa','0','0'),(39,'Penyakit Kulit dan Kelamin','0','0'),(40,'Gangguan Mens dan Kewanitaan','0','0');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `role` int(11) DEFAULT NULL COMMENT '1 utk admin, 2 untuk native',
  `status_login` int(10) DEFAULT NULL COMMENT '0 jika belum , 1 jika login',
  `last_login` timestamp NULL DEFAULT NULL COMMENT 'waktu terakhir login',
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`,`role`,`status_login`,`last_login`,`username`) values (10,'admin','admin@gmail.com','$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci','goNZqWnolO2BCyl9zgcYjSgdMoAGdFbnlsnu3W1N5nfovXvLPXDZ1wgnmUtA','2016-06-24 16:50:01','2018-03-04 13:21:14',1,1,'2017-06-26 22:03:11','admin'),(20,'user1','user1@gmail.com','$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci','ZKnhpUlRMoKkNzreovERkCrl8KWEPgqqyfgxAGkFkfcoUqkDnxoZs6b8zuFv','2016-06-24 16:50:01','2018-02-06 12:18:07',1,1,'2017-06-26 22:03:11','user1'),(21,NULL,NULL,'$2y$10$8khYYVlKMlSTy8ge.1qoZOdui.lr9Q7wAIvO1y.k0cUdTp83o7loC','bNCLaxyYY9DuuMvYK8LCSp5V9vjitaRfZ3pkvlyeiAZ9XO6VMWlApfx5bARk','2018-03-14 08:19:11','2018-03-14 08:20:41',NULL,NULL,NULL,'admin_20180314'),(22,'aku',NULL,'$2y$10$wDYame7aH/X87.4NjmJm8eq3fCzo7kH8Dg7B55aUhaOxb4l3S0hpm',NULL,'2018-03-14 08:20:00','2018-03-14 08:20:00',NULL,NULL,NULL,'aku_20180314');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;