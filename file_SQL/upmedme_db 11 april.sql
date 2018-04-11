-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Apr 2018 pada 14.34
-- Versi server: 5.6.38-log
-- Versi PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upmedme_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `analisa_kesehatan`
--

CREATE TABLE `analisa_kesehatan` (
  `id` int(11) NOT NULL,
  `subjek_1` int(11) NOT NULL,
  `subjek_2` int(11) DEFAULT NULL,
  `subjek_3` int(11) DEFAULT NULL,
  `id_kondisi` int(11) DEFAULT NULL,
  `kode_pesan` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `analisa_kesehatan`
--

INSERT INTO `analisa_kesehatan` (`id`, `subjek_1`, `subjek_2`, `subjek_3`, `id_kondisi`, `kode_pesan`) VALUES
(3, 2, 1, 0, 1, '1A'),
(4, 6, 1, NULL, 1, '1B'),
(5, 0, NULL, NULL, 9, '1C'),
(6, 0, NULL, NULL, 0, '1D'),
(7, 0, NULL, NULL, 2, '1A'),
(8, 0, NULL, NULL, 3, '2B'),
(9, 0, NULL, NULL, 4, '2C'),
(10, 0, NULL, NULL, 6, '2D'),
(11, 0, NULL, NULL, 8, '2E'),
(12, 0, NULL, NULL, 9, '3A'),
(13, 0, NULL, NULL, 2, '3B'),
(14, 0, NULL, NULL, 4, '3C'),
(15, 0, NULL, NULL, 5, '3D'),
(16, 0, NULL, NULL, 3, '3E'),
(17, 0, NULL, NULL, 1, '35'),
(18, 0, NULL, NULL, 11, '34'),
(19, 0, NULL, NULL, 4, '32'),
(20, 0, NULL, NULL, 0, '31'),
(21, 0, NULL, NULL, 3, '30'),
(22, 0, NULL, NULL, 3, '29'),
(23, 0, NULL, NULL, NULL, '27'),
(24, 0, NULL, NULL, NULL, '27'),
(25, 0, NULL, NULL, NULL, '23'),
(26, 0, NULL, NULL, NULL, '23'),
(27, 0, NULL, NULL, NULL, '20'),
(28, 0, NULL, NULL, NULL, '21'),
(29, 0, NULL, NULL, NULL, '21'),
(30, 0, NULL, NULL, NULL, '20'),
(31, 0, NULL, NULL, NULL, '19'),
(32, 0, NULL, NULL, NULL, '17'),
(33, 0, NULL, NULL, NULL, '17'),
(34, 0, NULL, NULL, NULL, '16'),
(35, 0, NULL, NULL, NULL, '14'),
(36, 0, NULL, NULL, NULL, '13'),
(37, 0, NULL, NULL, NULL, '12'),
(38, 0, NULL, NULL, NULL, '11'),
(39, 0, NULL, NULL, NULL, '11'),
(40, 0, NULL, NULL, NULL, '10'),
(41, 0, NULL, NULL, NULL, '9A'),
(42, 0, NULL, NULL, NULL, '8A'),
(43, 0, NULL, NULL, NULL, '4A'),
(44, 0, NULL, NULL, NULL, '4B'),
(45, 0, NULL, NULL, NULL, '4C'),
(46, 0, NULL, NULL, NULL, '5A'),
(47, 0, NULL, NULL, NULL, '5B'),
(48, 0, NULL, NULL, NULL, '5C'),
(49, 0, NULL, NULL, NULL, '6A'),
(50, 0, NULL, NULL, NULL, '6B'),
(51, 0, NULL, NULL, NULL, '6C'),
(52, 0, NULL, NULL, NULL, '6D'),
(53, 0, NULL, NULL, 2, '35'),
(54, 0, NULL, NULL, 11, '3E'),
(55, 0, 0, 0, 4, '2C'),
(56, 0, 0, 0, 4, '31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tabel kondisi';

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id`, `deskripsi`) VALUES
(0, 'default message'),
(1, 'bila disertai subjek 1 setelah subjek 2 (id kondisi 1)'),
(2, ' bila disertai subjek 1 sebelum subjek 2'),
(3, ' bila subjek 1 diatas normal'),
(4, ' bila subjek 2 dibawah normal'),
(5, 'penurunan drastis(berat badan masuk nya ke profil lho?)(ragu)'),
(6, ' mengalami subjek 1 berturut turut (rawan fail,perlu edukasi ke penggunanya)'),
(7, 'konsumsi obat tertentu(ragu, kecuali kita bisa cek ada kata tertentu dalam deskripsi?)'),
(8, 'tanpa disertai subjek 1,subjek 2'),
(9, 'bila disertai dan/atau subjek 1,2,3,4'),
(10, ' subjek 1 diatas normal tanpa disertai subjek 2'),
(11, 'subjek 1 di bawah normal setelah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rifqimaula@gmail.com', 'bc01e8b869a731ba821d697ec1ff5af782442c18f7d9f4870f05b15cadea8634', '2017-06-28 06:12:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

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
  `Pekerjaan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`UID`, `Nama`, `Alamat`, `HP`, `User`, `Username`, `Kodepos`, `Foto`, `Umur`, `Golongan_darah`, `berat_badan`, `tinggi_badan`, `riwayat_penyakit`, `No_BPJS`, `NO_KTP`, `Kota`, `Pekerjaan`) VALUES
(20, 'User Satu', 'Keputih', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekor_medis`
--

CREATE TABLE `rekor_medis` (
  `record_id` int(11) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Description_value` varchar(255) NOT NULL,
  `Datetime` datetime NOT NULL,
  `Title` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rekor_medis`
--

INSERT INTO `rekor_medis` (`record_id`, `User`, `Subject`, `Description_value`, `Datetime`, `Title`) VALUES
(2, '10', '0', 'jatuh di selokan, luka borok berdarah di kaki kanan habis itu agak kaku lutut kanan saya', '2017-09-23 00:00:00', 'jatuh di selokan'),
(4, '10', '0', 'borok bernanah di kaki kiri', '2017-09-26 00:00:00', 'Jatuh dari Sepeda'),
(5, '10', '16', '200', '2017-09-27 00:00:00', 'Gula darah Tinggi'),
(6, '10', '16', '200', '2017-09-27 00:00:00', 'Gula darah Tinggi'),
(7, '10', '16', '200', '2017-09-27 00:00:00', 'Gula darah Tinggi'),
(8, '10', '16', '200', '2017-09-27 00:00:00', 'Gula darah Tinggi'),
(9, '10', '16', '200', '2017-09-27 00:00:00', 'Gula darah Tinggi'),
(10, '10', '16', '300', '2017-09-27 00:00:00', 'Hasil pemeriksaan Lab pagi'),
(11, '10', '1', 'gak tau pokoknya gak enak aja akhir akhir ini', '0000-00-00 00:00:00', 'keseleo'),
(12, '10', '1', 'Gak enak badan', '2017-10-12 00:00:00', 'Tes trauma'),
(13, '10', '1', 'Sekarang pakai deskripsi', '2017-10-12 00:00:00', 'Tes Trauma 2'),
(14, '10', '2', 'Demam suhu sekitar 40 derajat celcius dibarengi gatal-gatal', '2017-10-10 00:00:00', 'Sakit Demam karena alergi'),
(15, '20', '1', 'Kecelakaan', '2017-10-16 00:00:00', 'Jatuh dari Sepeda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_subjek`
--

CREATE TABLE `relasi_subjek` (
  `id` int(11) NOT NULL,
  `id_subjek` int(11) NOT NULL,
  `id_relasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `relasi_subjek`
--

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `smart_message`
--

CREATE TABLE `smart_message` (
  `id_pesan` int(11) NOT NULL,
  `kode_pesan` varchar(2) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek`
--

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Group` decimal(10,0) DEFAULT NULL,
  `Type` binary(1) DEFAULT NULL COMMENT '0 text , 1 angka'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subjek`
--

INSERT INTO `subjek` (`id`, `Name`, `Group`, `Type`) VALUES
(1, 'Trauma', '0', 0x30),
(2, 'Demam', '0', 0x30),
(3, 'Batuk', '0', 0x30),
(4, 'Gangguan Pencernaan', '0', 0x30),
(5, 'Gangguan Telinga', '0', 0x30),
(6, 'Gangguan Syaraf', '0', 0x30),
(7, 'Makan minum curiga', '0', 0x30),
(8, 'Pergi ke daerah endemis', '0', 0x30),
(9, 'Gigitan Hewan', '0', 0x30),
(10, 'Nyeri Dada', '0', 0x30),
(11, 'Sesak', '0', 0x30),
(12, 'Konsumsi obat tertentu', '0', 0x30),
(13, 'Pergi ke dokter', '0', 0x30),
(14, 'Nyeri Persendian/otot', '0', 0x30),
(15, 'lain lain', '0', 0x30),
(16, 'Gula Darah Puasa', '0', 0x31),
(17, 'Gula Darah Acak', '0', 0x31),
(18, 'Tensi darah sistol', '0', 0x31),
(19, 'Asam Urat', '0', 0x31),
(20, 'SGOT/SGPT', '0', 0x31),
(21, 'Serum Creatinin', '0', 0x31),
(22, 'Ureum', '0', 0x31),
(23, 'HBA1C', '0', 0x31),
(24, 'Cholestrol Total', '0', 0x31),
(25, 'Cholestrol HDL', '0', 0x31),
(26, 'Cholestrol LDL', '0', 0x31),
(27, 'Trigliserida', '0', 0x31),
(28, 'Heoglobin', '0', 0x31),
(29, 'Sel Darah Putih', '0', 0x31),
(30, 'Neutrofil', '0', 0x31),
(31, 'Limfosit', '0', 0x31),
(32, 'Trombosit ', '0', 0x31),
(33, 'CD4++', '0', 0x31),
(34, 'Jumlah Batang rokok ', '0', 0x31),
(35, 'Minum Air Putih per hari', '0', 0x31),
(36, 'Jarak Berjalan Kaki', '0', 0x31),
(37, 'Olahraga', '0', 0x30),
(38, 'Puasa', '0', 0x30),
(39, 'Penyakit Kulit dan Kelamin', '0', 0x30),
(40, 'Gangguan Mens dan Kewanitaan', '0', 0x30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` int(11) DEFAULT NULL COMMENT '1 utk admin, 2 untuk native',
  `status_login` int(10) DEFAULT NULL COMMENT '0 jika belum , 1 jika login',
  `last_login` timestamp NULL DEFAULT NULL COMMENT 'waktu terakhir login',
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status_login`, `last_login`, `username`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci', 'MUcVT7FmPCkIWQ6NJrFgLwvjsSete4QKjRBdpPM4SuauBQB0blbQOwo9gUqt', '2016-06-24 09:50:01', '2018-04-07 05:56:54', 1, 1, '2017-06-26 15:03:11', 'admin'),
(20, 'user1', 'user1@gmail.com', '$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci', 'aMaEJhrHySlKmO4sapXgpcz71mGWgna0YEtsFtrHpS8PeUKpKvFDO82sp0Gt', '2016-06-24 09:50:01', '2018-03-14 05:45:25', 1, 1, '2017-06-26 15:03:11', 'user1'),
(21, 'asd', '', '$2y$10$vXdf6Rza/K6JwMy/rrhhEOhbhxE18UrNrRT36JjVWxHdtNt6C1IAO', NULL, '2018-03-18 00:12:34', '2018-03-18 00:12:34', NULL, NULL, NULL, 'asd_20180318');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `analisa_kesehatan`
--
ALTER TABLE `analisa_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`UID`);

--
-- Indeks untuk tabel `rekor_medis`
--
ALTER TABLE `rekor_medis`
  ADD PRIMARY KEY (`record_id`);

--
-- Indeks untuk tabel `relasi_subjek`
--
ALTER TABLE `relasi_subjek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `analisa_kesehatan`
--
ALTER TABLE `analisa_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `rekor_medis`
--
ALTER TABLE `rekor_medis`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `relasi_subjek`
--
ALTER TABLE `relasi_subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT untuk tabel `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
