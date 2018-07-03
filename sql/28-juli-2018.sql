-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for upmed-db
CREATE DATABASE IF NOT EXISTS `upmed-db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `upmed-db`;

-- Dumping structure for table upmed-db.analisa_kesehatan
CREATE TABLE IF NOT EXISTS `analisa_kesehatan` (
  `id` int(11) NOT NULL,
  `subjek_1` int(11) NOT NULL,
  `subjek_2` int(11) DEFAULT NULL,
  `subjek_3` int(11) DEFAULT NULL,
  `id_kondisi` int(11) DEFAULT NULL,
  `kode_pesan` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.analisa_kesehatan: ~70 rows (approximately)
/*!40000 ALTER TABLE `analisa_kesehatan` DISABLE KEYS */;
INSERT INTO `analisa_kesehatan` (`id`, `subjek_1`, `subjek_2`, `subjek_3`, `id_kondisi`, `kode_pesan`) VALUES
	(3, 2, 1, 0, 1, '1A'),
	(4, 6, 1, NULL, 1, '1B'),
	(5, 1, 10, NULL, 9, '1C'),
	(6, 1, 11, NULL, 0, '1D'),
	(7, 2, 1, NULL, 2, '1A'),
	(8, 2, 28, NULL, 3, '2B'),
	(9, 2, 31, NULL, 4, '2C'),
	(10, 2, 2, NULL, 6, '2D'),
	(11, 2, 2, 31, 8, '2E'),
	(12, 3, 11, NULL, 9, '3A'),
	(13, 3, 12, NULL, 2, '3B'),
	(14, 3, 32, NULL, 4, '3C'),
	(15, 3, 37, NULL, 5, '3D'),
	(16, 3, 33, NULL, 3, '3E'),
	(17, 35, 11, NULL, 1, '35A'),
	(18, 34, 44, NULL, 11, '34A'),
	(19, 32, NULL, NULL, 4, '32A'),
	(20, 32, 2, 31, 0, '31A'),
	(21, 30, 28, NULL, 3, '30A'),
	(22, 29, 28, NULL, 3, '29A'),
	(23, 27, 1, NULL, 1, '27A'),
	(24, 27, NULL, NULL, 9, '27B'),
	(25, 23, 10, NULL, 1, '23A'),
	(27, 23, 10, NULL, 2, '23A'),
	(26, 23, 10, NULL, 8, '23B'),
	(27, 20, NULL, NULL, 4, '20A'),
	(28, 21, 2, NULL, 1, '21AX'),
	(58, 21, 2, NULL, 2, '21AX'),
	(29, 21, 11, NULL, 1, '21BX'),
	(59, 21, 11, NULL, 2, '21BX'),
	(30, 20, NULL, NULL, 4, '20X'),
	(31, 19, NULL, NULL, 3, '19'),
	(32, 17, 6, NULL, 1, '17A'),
	(60, 17, 6, NULL, 2, '17A'),
	(33, 17, NULL, NULL, 3, '17B'),
	(34, 16, NULL, NULL, 0, '16A'),
	(35, 14, NULL, NULL, 0, '14A'),
	(36, 13, NULL, NULL, 0, '13A'),
	(37, 12, NULL, NULL, 0, '12A'),
	(38, 11, 3, NULL, 9, '11A'),
	(61, 11, 7, NULL, 9, '11A'),
	(62, 11, 15, NULL, 9, '11A'),
	(63, 11, 12, NULL, 9, '11A'),
	(39, 11, 21, NULL, 2, '11B'),
	(40, 10, 11, NULL, 1, '10'),
	(64, 10, 11, NULL, 2, '10'),
	(41, 9, NULL, NULL, 0, '9A'),
	(42, 8, 2, NULL, 2, '8A'),
	(43, 4, 1, NULL, 1, '4A'),
	(44, 4, 15, NULL, 1, '4B'),
	(70, 4, 15, NULL, 2, '4B'),
	(45, 4, 32, NULL, 1, '4C'),
	(71, 4, 32, NULL, 2, '4C'),
	(46, 5, 1, NULL, 1, '5A'),
	(47, 5, 2, NULL, 1, '5B'),
	(69, 5, 2, NULL, 2, '5B'),
	(48, 5, 3, NULL, 8, '5C'),
	(49, 6, 6, NULL, 2, '6A'),
	(50, 6, 18, NULL, 1, '6B'),
	(68, 6, 18, NULL, 2, '6B'),
	(51, 6, 21, NULL, 1, '6C'),
	(51, 6, 21, NULL, 2, '6C'),
	(52, 6, 1, NULL, 8, '6D'),
	(53, 35, 11, NULL, 2, '35A'),
	(65, 35, 11, NULL, 2, '35A'),
	(54, 3, NULL, NULL, 11, '3E'),
	(66, 3, 33, NULL, 1, '3E'),
	(67, 3, 33, NULL, 2, '3E'),
	(55, 2, 0, 0, 4, '2C'),
	(56, 31, 0, 0, 4, '31');
/*!40000 ALTER TABLE `analisa_kesehatan` ENABLE KEYS */;

-- Dumping structure for table upmed-db.kondisi
CREATE TABLE IF NOT EXISTS `kondisi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tabel kondisi';

-- Dumping data for table upmed-db.kondisi: 12 rows
/*!40000 ALTER TABLE `kondisi` DISABLE KEYS */;
INSERT INTO `kondisi` (`id`, `deskripsi`) VALUES
	(0, 'default message'),
	(1, 'bila disertai subjek 1 setelah subjek 2 '),
	(2, ' bila disertai subjek 1 sebelum subjek 2'),
	(3, ' bila subjek 1 diatas normal (subjek 2)'),
	(4, ' bila subjek 1 dibawah normal (subjek 2)'),
	(5, 'penurunan berat badan drastis'),
	(6, ' mengalami subjek 1 berturut turut'),
	(7, 'konsumsi obat tertentu'),
	(8, 'terjadi subjek 1 tanpa subjek 2'),
	(9, 'multi logika'),
	(10, ' subjek 1 di atas normal (subjek 2) tanpa disertai subjek 3'),
	(11, 'subjek 1 di atas  normal (subjek 2)disertai subjek 3');
/*!40000 ALTER TABLE `kondisi` ENABLE KEYS */;

-- Dumping structure for table upmed-db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table upmed-db.password_resets: ~1 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('rifqimaula@gmail.com', 'bc01e8b869a731ba821d697ec1ff5af782442c18f7d9f4870f05b15cadea8634', '2017-06-28 13:12:21');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table upmed-db.pesan
CREATE TABLE IF NOT EXISTS `pesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `message` text,
  `user` int(11) NOT NULL,
  `recipient` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL COMMENT '0=unread,1=read',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.pesan: ~8 rows (approximately)
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
INSERT INTO `pesan` (`id`, `title`, `message`, `user`, `recipient`, `datetime`, `status`) VALUES
	(1, NULL, NULL, 50, 0, '2018-05-22 09:11:06', 0),
	(2, NULL, NULL, 50, 0, '2018-05-22 09:11:19', 0),
	(3, 'halo', 'halo', 50, 0, '2018-05-22 09:15:07', 0),
	(4, 'halo', 'halo', 50, 0, '2018-05-22 09:15:20', 0),
	(5, 'Tes', 'Tes<br />\r\nNewline', 50, 0, '2018-05-22 09:16:54', 0),
	(6, 'ini saya coba tes saja', 'ini messagenya', 50, 0, '2018-06-01 19:06:19', 0),
	(7, 'admin', 'admin', 20, 10, '2018-06-01 19:11:16', 0),
	(8, 'sebar2 broadcast', 'ini saya broadcast saja<br />\r\nselamat datang di upmed, semoga senang', 10, 20, '2018-06-01 23:09:47', 1),
	(9, 'eh kelupaan', 'ini ada sedikit oleh2<br />\r\nbuat kamu', 10, 20, '2018-06-01 23:10:20', 0);
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;

-- Dumping structure for table upmed-db.profil
CREATE TABLE IF NOT EXISTS `profil` (
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

-- Dumping data for table upmed-db.profil: ~1 rows (approximately)
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` (`UID`, `Nama`, `Alamat`, `HP`, `User`, `Username`, `Kodepos`, `Foto`, `Umur`, `Golongan_darah`, `berat_badan`, `tinggi_badan`, `riwayat_penyakit`, `No_BPJS`, `NO_KTP`, `Kota`, `Pekerjaan`) VALUES
	(20, 'User Satu', 'Keputih', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;

-- Dumping structure for table upmed-db.regional
CREATE TABLE IF NOT EXISTS `regional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_region` varchar(5) NOT NULL,
  `nama_region` varchar(100) NOT NULL,
  `parent_region` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.regional: ~0 rows (approximately)
/*!40000 ALTER TABLE `regional` DISABLE KEYS */;
/*!40000 ALTER TABLE `regional` ENABLE KEYS */;

-- Dumping structure for table upmed-db.rekor_medis
CREATE TABLE IF NOT EXISTS `rekor_medis` (
  `record_id` int(11) NOT NULL AUTO_INCREMENT,
  `User` varchar(30) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Description_value` varchar(255) NOT NULL,
  `Datetime` datetime NOT NULL,
  `Title` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.rekor_medis: ~10 rows (approximately)
/*!40000 ALTER TABLE `rekor_medis` DISABLE KEYS */;
INSERT INTO `rekor_medis` (`record_id`, `User`, `Subject`, `Description_value`, `Datetime`, `Title`) VALUES
	(1, '20', '1', 'Memar di dekat tulang kering', '2017-10-11 00:00:00', 'user1 jatuh terkilir'),
	(2, '20', '16', '123', '2017-10-01 00:00:00', 'Gula darah Tinggi'),
	(3, '20', '16', '200', '2017-10-05 00:00:00', 'Gula darah Tinggi'),
	(4, '20', '16', '50', '2017-10-11 00:00:00', 'Gula darah normal'),
	(5, '20', '13', 'Ada kemungkinan kena Tumor', '2017-11-01 00:00:00', 'Ke Dokter Bambang'),
	(6, '20', '32', '400', '2017-11-15 00:00:00', 'Pemeriksaan Lab Tadi Pagi'),
	(7, '20', '32', '100', '2017-11-12 00:00:00', 'Pemeriksaan Lab Kemaren'),
	(8, '20', '32', '250', '2017-11-01 00:00:00', 'Pemeriksaan Lab Kemaren'),
	(9, '27', '1', 'jatuh kemaren', '2018-03-22 00:00:00', 'Jatuh dari sepeda'),
	(10, '20', '1', 'sepeda', '2018-03-22 00:00:00', 'jatuh 2'),
	(11, '20', '1', 'jatuh sepeda', '2018-03-22 00:00:00', 'jatuh'),
	(12, '20', '1', 'jatuh di masa depan', '2018-04-10 00:00:00', 'jatuh cinta'),
	(13, '20', '4', 'Nyeri mulai 5 jam lalu\r\nmau mual, tapi belum muntah\r\nsudah 2 kali kejadian', '2018-03-28 00:00:00', 'Nyeri Ulu hati'),
	(14, '20', '1', 'Jatuh kemaren sore', '2018-04-26 00:00:00', 'Tes Input Jatuh'),
	(15, '20', '4', 'Belum BAB selama 2 hari', '2018-05-15 00:00:00', 'Sembelit');
/*!40000 ALTER TABLE `rekor_medis` ENABLE KEYS */;

-- Dumping structure for table upmed-db.relasi_subjek
CREATE TABLE IF NOT EXISTS `relasi_subjek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_subjek` int(11) NOT NULL,
  `id_relasi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.relasi_subjek: ~245 rows (approximately)
/*!40000 ALTER TABLE `relasi_subjek` DISABLE KEYS */;
INSERT INTO `relasi_subjek` (`id`, `id_subjek`, `id_relasi`) VALUES
	(1, 1, 2),
	(2, 1, 6),
	(3, 1, 10),
	(4, 1, 11),
	(5, 1, 14),
	(6, 1, 22),
	(7, 1, 28),
	(8, 1, 19),
	(9, 2, 1),
	(10, 2, 28),
	(11, 2, 3),
	(12, 2, 4),
	(13, 2, 7),
	(14, 2, 8),
	(15, 2, 9),
	(16, 2, 31),
	(17, 2, 32),
	(18, 3, 2),
	(19, 3, 5),
	(20, 3, 12),
	(21, 3, 11),
	(22, 3, 33),
	(23, 3, 32),
	(24, 3, 37),
	(25, 4, 2),
	(26, 4, 7),
	(27, 4, 8),
	(28, 4, 1),
	(29, 4, 15),
	(30, 4, 9),
	(31, 4, 21),
	(32, 4, 32),
	(33, 4, 37),
	(34, 5, 3),
	(35, 5, 2),
	(36, 5, 1),
	(37, 5, 6),
	(38, 5, 12),
	(39, 6, 2),
	(40, 6, 12),
	(41, 6, 14),
	(42, 6, 19),
	(43, 6, 21),
	(44, 7, 4),
	(45, 7, 2),
	(46, 8, 4),
	(47, 8, 2),
	(48, 8, 15),
	(49, 8, 9),
	(50, 9, 4),
	(51, 9, 2),
	(52, 9, 15),
	(53, 9, 27),
	(54, 9, 28),
	(55, 9, 19),
	(56, 10, 11),
	(57, 10, 1),
	(58, 10, 19),
	(59, 11, 15),
	(60, 11, 7),
	(61, 11, 10),
	(62, 11, 12),
	(63, 11, 19),
	(64, 11, 21),
	(65, 11, 33),
	(66, 11, 3),
	(67, 11, 35),
	(68, 11, 36),
	(69, 12, 15),
	(70, 12, 6),
	(71, 12, 5),
	(72, 12, 4),
	(73, 12, 11),
	(74, 13, 2),
	(75, 13, 6),
	(76, 13, 11),
	(77, 13, 12),
	(78, 13, 7),
	(79, 14, 2),
	(80, 14, 1),
	(81, 14, 6),
	(82, 14, 23),
	(83, 14, 20),
	(84, 14, 21),
	(85, 14, 18),
	(86, 15, 11),
	(87, 15, 2),
	(88, 15, 9),
	(89, 15, 12),
	(90, 15, 11),
	(91, 15, 7),
	(92, 15, 28),
	(93, 15, 20),
	(94, 15, 32),
	(95, 15, 18),
	(96, 16, 4),
	(97, 16, 11),
	(98, 16, 12),
	(99, 16, 15),
	(100, 16, 2),
	(101, 17, 2),
	(102, 17, 12),
	(103, 19, 18),
	(104, 19, 23),
	(105, 19, 37),
	(106, 19, 6),
	(107, 19, 11),
	(108, 19, 10),
	(109, 19, 14),
	(110, 20, 23),
	(111, 20, 19),
	(112, 20, 18),
	(113, 20, 37),
	(114, 20, 14),
	(115, 20, 6),
	(116, 20, 15),
	(117, 20, 34),
	(118, 20, 21),
	(119, 20, 22),
	(120, 20, 20),
	(121, 20, 2),
	(122, 20, 13),
	(123, 20, 12),
	(124, 20, 17),
	(125, 22, 18),
	(126, 22, 19),
	(127, 22, 23),
	(128, 22, 37),
	(129, 22, 21),
	(130, 22, 11),
	(131, 22, 10),
	(132, 22, 6),
	(133, 22, 14),
	(134, 23, 25),
	(135, 23, 24),
	(136, 23, 26),
	(137, 23, 37),
	(138, 23, 19),
	(139, 23, 18),
	(140, 23, 11),
	(141, 23, 14),
	(142, 23, 10),
	(143, 23, 4),
	(144, 27, 28),
	(145, 27, 31),
	(146, 27, 19),
	(147, 27, 32),
	(148, 27, 21),
	(149, 27, 2),
	(150, 27, 4),
	(151, 27, 6),
	(152, 27, 1),
	(153, 27, 8),
	(154, 27, 9),
	(155, 28, 2),
	(156, 28, 1),
	(157, 28, 9),
	(158, 28, 29),
	(159, 28, 30),
	(160, 28, 27),
	(161, 28, 31),
	(162, 28, 6),
	(163, 28, 5),
	(164, 28, 8),
	(165, 28, 17),
	(166, 29, 28),
	(167, 29, 31),
	(168, 29, 32),
	(169, 29, 27),
	(170, 29, 2),
	(171, 29, 11),
	(172, 29, 3),
	(173, 29, 5),
	(174, 29, 6),
	(175, 31, 2),
	(176, 31, 27),
	(177, 31, 28),
	(178, 31, 19),
	(179, 31, 4),
	(180, 31, 8),
	(181, 31, 9),
	(182, 31, 12),
	(183, 31, 15),
	(184, 32, 28),
	(185, 32, 27),
	(186, 32, 37),
	(187, 32, 3),
	(188, 32, 2),
	(189, 32, 6),
	(190, 32, 4),
	(191, 33, 18),
	(192, 33, 23),
	(193, 33, 19),
	(194, 33, 3),
	(195, 33, 11),
	(196, 34, 20),
	(197, 34, 21),
	(198, 34, 28),
	(199, 34, 31),
	(200, 34, 11),
	(201, 34, 2),
	(202, 34, 37),
	(203, 34, 4),
	(204, 35, 19),
	(205, 35, 23),
	(206, 35, 18),
	(207, 35, 20),
	(208, 35, 11),
	(209, 35, 10),
	(210, 35, 4),
	(211, 35, 36),
	(212, 35, 37),
	(213, 35, 33),
	(214, 36, 19),
	(215, 36, 23),
	(216, 36, 11),
	(217, 36, 18),
	(218, 36, 20),
	(219, 36, 10),
	(220, 36, 4),
	(221, 36, 36),
	(222, 36, 33),
	(223, 36, 37),
	(224, 37, 36),
	(225, 37, 37),
	(226, 37, 5),
	(227, 37, 19),
	(228, 37, 18),
	(229, 37, 4),
	(230, 37, 20),
	(231, 38, 20),
	(232, 38, 21),
	(233, 38, 1),
	(234, 38, 4),
	(235, 38, 6),
	(236, 38, 11),
	(237, 38, 13),
	(238, 38, 14),
	(239, 39, 27),
	(240, 39, 28),
	(241, 39, 31),
	(242, 39, 21),
	(243, 39, 4),
	(244, 39, 6),
	(245, 39, 11);
/*!40000 ALTER TABLE `relasi_subjek` ENABLE KEYS */;

-- Dumping structure for table upmed-db.service_management
CREATE TABLE IF NOT EXISTS `service_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `region` int(11) NOT NULL,
  `description` text,
  `manager_1` int(11) NOT NULL,
  `manager_2` int(11) DEFAULT NULL,
  `manager_3` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.service_management: ~0 rows (approximately)
/*!40000 ALTER TABLE `service_management` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_management` ENABLE KEYS */;

-- Dumping structure for table upmed-db.smart_message
CREATE TABLE IF NOT EXISTS `smart_message` (
  `id_pesan` int(11) NOT NULL,
  `kode_pesan` varchar(2) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.smart_message: 1 rows
/*!40000 ALTER TABLE `smart_message` DISABLE KEYS */;
INSERT INTO `smart_message` (`id_pesan`, `kode_pesan`, `message`) VALUES
	(0, '1D', 'Pesan 1D');
/*!40000 ALTER TABLE `smart_message` ENABLE KEYS */;

-- Dumping structure for table upmed-db.subjek
CREATE TABLE IF NOT EXISTS `subjek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Group` decimal(10,0) DEFAULT NULL,
  `Type` binary(1) DEFAULT NULL COMMENT '0 text , 1 angka',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

-- Dumping data for table upmed-db.subjek: ~40 rows (approximately)
/*!40000 ALTER TABLE `subjek` DISABLE KEYS */;
INSERT INTO `subjek` (`id`, `Name`, `Group`, `Type`) VALUES
	(1, 'Trauma', 0, '0'),
	(2, 'Demam', 0, '0'),
	(3, 'Batuk', 0, '0'),
	(4, 'Gangguan Pencernaan', 0, '0'),
	(5, 'Gangguan Telinga', 0, '0'),
	(6, 'Gangguan Syaraf', 0, '0'),
	(7, 'Makan minum curiga', 0, '0'),
	(8, 'Pergi ke daerah endemis', 0, '0'),
	(9, 'Gigitan Hewan', 0, '0'),
	(10, 'Nyeri Dada', 0, '0'),
	(11, 'Sesak', 0, '0'),
	(12, 'Konsumsi obat tertentu', 0, '0'),
	(13, 'Pergi ke dokter', 0, '0'),
	(14, 'Nyeri Persendian/otot', 0, '0'),
	(15, 'lain lain', 0, '0'),
	(16, 'Gula Darah Puasa', 0, '1'),
	(17, 'Gula Darah Acak', 0, '1'),
	(18, 'Tensi darah sistol', 0, '1'),
	(19, 'Asam Urat', 0, '1'),
	(20, 'SGOT/SGPT', 0, '1'),
	(21, 'Serum Creatinin', 0, '1'),
	(22, 'Ureum', 0, '1'),
	(23, 'HBA1C', 0, '1'),
	(24, 'Cholestrol Total', 0, '1'),
	(25, 'Cholestrol HDL', 0, '1'),
	(26, 'Cholestrol LDL', 0, '1'),
	(27, 'Trigliserida', 0, '1'),
	(28, 'Heoglobin', 0, '1'),
	(29, 'Sel Darah Putih', 0, '1'),
	(30, 'Neutrofil', 0, '1'),
	(31, 'Limfosit', 0, '1'),
	(32, 'Trombosit ', 0, '1'),
	(33, 'CD4++', 0, '1'),
	(34, 'Jumlah Batang rokok ', 0, '1'),
	(35, 'Minum Air Putih per hari', 0, '1'),
	(36, 'Jarak Berjalan Kaki', 0, '1'),
	(37, 'Olahraga', 0, '0'),
	(38, 'Puasa', 0, '0'),
	(39, 'Penyakit Kulit dan Kelamin', 0, '0'),
	(40, 'Gangguan Mens dan Kewanitaan', 0, '0');
/*!40000 ALTER TABLE `subjek` ENABLE KEYS */;

-- Dumping structure for table upmed-db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` int(11) DEFAULT NULL COMMENT '1 utk admin, 2 untuk native',
  `status_login` int(10) DEFAULT NULL COMMENT '0 jika belum , 1 jika login',
  `last_login` timestamp NULL DEFAULT NULL COMMENT 'waktu terakhir login',
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

-- Dumping data for table upmed-db.users: ~4 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status_login`, `last_login`, `username`) VALUES
	(10, 'admin', 'admin@gmail.com', '$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci', '4vsPDmSj41PoilkdJaPDwkW6FwiVUDuLmslstjSgZClzVELorx9RByyogd4i', '2016-06-24 16:50:01', '2018-04-11 19:39:48', 1, 1, '2017-06-26 22:03:11', 'admin'),
	(20, 'user1', 'user1@gmail.com', '$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci', 'ETm6g16ayPFaZEw3mwfbDrt1D01SlpsgZxus8XHVsKFy1r9zkrbAot4opNFr', '2016-06-24 16:50:01', '2018-05-16 14:14:33', 1, 1, '2017-06-26 22:03:11', 'user1'),
	(26, 'joke', '', '$2y$10$fq.0X/tzx54Dlfg8TfPyzuDHfHmYar3qiXPo0YIodTXEIxZD/dUkO', '08kiJGsfsJ7uZunQCWB59zfnGcEc9oREcH5FMsYhSizhLEM5rjWkd5NKPmQH', '2018-03-20 10:46:23', '2018-03-22 05:57:56', NULL, NULL, NULL, 'joke'),
	(27, 'joe', 'jokevin.rachmadi@gmail.com', '$2y$10$NB8vdpqTsRSDUpVhZJQG8OTTnOGnd5SMOi.tFUgHLlkUhbqvT16/y', '0eR1zjiAQycQ3PNrnx1FPA2xnpOrzhKqafVVUdHDVWaNXKgIbHkZDal6Qwm4', '2018-03-22 07:23:38', '2018-03-22 07:47:39', NULL, NULL, NULL, 'joe');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
