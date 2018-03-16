-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jul 2017 pada 15.03
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `UID` int(11) NOT NULL,
  `Nama Lengkap` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `HP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rekor_medis`
--

CREATE TABLE `rekor_medis` (
  `record_id` int(11) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Description_value` varchar(255) NOT NULL,
  `Datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek`
--

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Subjek` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `kode_pos` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telepon` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provinsi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Laki2 atau perempuan di if',
  `kota` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'path ke lokasi photo',
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 CHECKSUM=1 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status_login`, `last_login`, `kode_pos`, `telepon`, `provinsi`, `kota`, `username`, `alamat`) VALUES
(10, 'admin', 'admin@gmail.com', '$2y$10$4dAinxTHaXS4ZUa6eRmYBu3QCggm0fXvRdtutRQKnm.Vldim3tPci', 'BC3nU5JvBPeBW2FFyEXlo3fCz9MbnTuGjaWbxxvnH5bb2iSXq8efeUm8Fg52', '2016-06-24 09:50:01', '2017-07-26 06:00:17', 1, 1, '2017-06-26 15:03:11', '123456', '09876543', 'L', '', 'admin', 'Jln. PLN'),
(17, 'sales1', 'rifqi982@gmail.com', '$2y$10$QF3DA1O6PmDBAOaxNkhRP.rO9QHP6QnantJ73AbbsEw6vlxd8ShVe', 'phuSL0Cj4nPVEKN2ib65FxlyRlqJhUqQte2LRGAfhtci6gsYT1ZJaK1gpAGR', '2017-07-19 08:52:23', '2017-07-19 08:52:30', 2, NULL, NULL, '60123', '0857', NULL, NULL, 'sales1', 'Surabaya'),
(18, 'sales2', 'sales2@gmail.com', '$2y$10$KXusRhImtkcBs9Iurz0BqOltfh6FylMr/ucuhf6gQQNtSipCYLzVG', 'WKodOA1PMZfXZ9686CaICJDyjLb0ddfNTMO8Tn4tRnuX1sDbCye4IzO6uRSG', '2017-07-19 17:16:45', '2017-07-19 17:22:48', 2, NULL, NULL, '60111', '0857', NULL, NULL, 'sales2', 'Surabaya'),
(19, 'sales3', 'sales3@gmail.com', '$2y$10$.iCtKq1enuxH74lFNfs5WeC1N977MkhwxL5afw3QmYJpnq1oN/ERq', 'T0CLZK9dhB5pDRXbjfWV0Er0jrDgKZLwzdZNVD270MOxLUhcUNG6rYxT8bpN', '2017-07-19 17:25:21', '2017-07-19 17:26:42', 2, NULL, NULL, '60111', '0857', NULL, NULL, 'sales3', 'Surabaya'),
(20, 'sales5', 'sales5@gmail.com', '$2y$10$b1j0sjLqGxZpjsbVEoQJBeD/iFub17cBvmJ2pOOqzpb.WuUYQJmui', 'fPkvWpSNF1TXTH7TKT7fw855VlVJMdwBXxzMH3U16PxJhjZ6KQVuKkKIApO5', '2017-07-19 17:38:59', '2017-07-19 17:44:53', 2, NULL, NULL, '60111', '0857', NULL, NULL, 'sales5', 'Surabaya'),
(21, 'sales4', 'sales4@gmail.com', '$2y$10$F/mdDQG9uBrzP3s51ZhBC.515RKqf55fHZ/DYWqCC.H0LLDQv.PF.', NULL, '2017-07-19 17:48:58', '2017-07-19 17:48:58', 2, NULL, NULL, '60111', '0857', NULL, NULL, 'sales4', 'Surabaya');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekor_medis`
--
ALTER TABLE `rekor_medis`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
