-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2018 at 11:41 AM
-- Server version: 5.6.38-log
-- PHP Version: 5.6.30

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
-- Table structure for table `analisa_kesehatan`
--

CREATE TABLE `analisa_kesehatan` (
  `id` int(11) NOT NULL,
  `subjek_1` int(11) NOT NULL,
  `subjek_2` int(11) DEFAULT NULL,
  `subjek_3` int(11) DEFAULT NULL,
  `id_kondisi` int(11) DEFAULT NULL,
  `kode_pesan` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tabel kondisi';

--
-- Dumping data for table `kondisi`
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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rifqimaula@gmail.com', 'bc01e8b869a731ba821d697ec1ff5af782442c18f7d9f4870f05b15cadea8634', '2017-06-28 06:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
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
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`UID`, `Nama`, `Alamat`, `HP`, `User`, `Username`, `Kodepos`, `Foto`, `Umur`, `Golongan_darah`, `berat_badan`, `tinggi_badan`, `riwayat_penyakit`, `No_BPJS`, `NO_KTP`, `Kota`, `Pekerjaan`) VALUES
(20, 'User Satu', 'Keputih', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rekor_medis`
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
-- Dumping data for table `rekor_medis`
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
-- Table structure for table `relasi_subjek`
--

CREATE TABLE `relasi_subjek` (
  `id` int(11) NOT NULL,
  `subjek_medis` varchar(50) DEFAULT NULL,
  `relasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `smart_message`
--

CREATE TABLE `smart_message` (
  `id_pesan` int(11) NOT NULL,
  `kode_pesan` varchar(2) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Group` decimal(10,0) DEFAULT NULL,
  `Type` binary(1) DEFAULT NULL COMMENT '0 text , 1 angka'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
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
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status_login`, `last_login`, `username`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci', 'goNZqWnolO2BCyl9zgcYjSgdMoAGdFbnlsnu3W1N5nfovXvLPXDZ1wgnmUtA', '2016-06-24 09:50:01', '2018-03-04 06:21:14', 1, 1, '2017-06-26 15:03:11', 'admin'),
(20, 'user1', 'user1@gmail.com', '$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci', 'ZKnhpUlRMoKkNzreovERkCrl8KWEPgqqyfgxAGkFkfcoUqkDnxoZs6b8zuFv', '2016-06-24 09:50:01', '2018-02-06 05:18:07', 1, 1, '2017-06-26 15:03:11', 'user1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_kesehatan`
--
ALTER TABLE `analisa_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`UID`);

--
-- Indexes for table `rekor_medis`
--
ALTER TABLE `rekor_medis`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `relasi_subjek`
--
ALTER TABLE `relasi_subjek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa_kesehatan`
--
ALTER TABLE `analisa_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rekor_medis`
--
ALTER TABLE `rekor_medis`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `relasi_subjek`
--
ALTER TABLE `relasi_subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
