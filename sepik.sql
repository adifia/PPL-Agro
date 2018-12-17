-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2018 at 08:20 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sepik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(2) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `kabupaten`) VALUES
(1, 'Jember'),
(2, 'Bondowoso'),
(3, 'Situbondo'),
(4, 'Banyuwangi');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `id_kabupaten` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kecamatan`, `id_kabupaten`) VALUES
(1, 'bondowoso', 2),
(2, 'binakal', 2),
(3, 'botolinggo', 2),
(4, 'cermee', 2),
(5, 'curahdami', 2),
(6, 'grujukan', 2),
(7, 'jambesari', 2),
(8, 'klabang', 2),
(9, 'maesan', 2),
(10, 'pakem', 2),
(11, 'prajekan', 2),
(12, 'pujer', 2),
(13, 'sempol', 2),
(14, 'sukosari', 2),
(15, 'sumber wringin', 2),
(16, 'taman krocok', 2),
(17, 'tamanan', 2),
(18, 'tapen', 2),
(19, 'tegal ampel', 2),
(20, 'tenggarang', 2),
(21, 'tlogosari', 2),
(22, 'wonosari', 2),
(23, 'wringin', 2),
(24, 'Ajung', 1),
(25, 'Ambulu', 1),
(26, 'Arjasa', 1),
(27, 'Balung', 1),
(28, 'Bangsalsari', 1),
(29, 'Gumuk Mas', 1),
(30, 'Jelbuk', 1),
(31, 'Jenggawah', 1),
(32, 'Jombang', 1),
(33, 'Kalisat', 1),
(34, 'Kaliwates', 1),
(35, 'Kencong', 1),
(36, 'Ledokombo', 1),
(37, 'Mayang', 1),
(38, 'Mumbulsari', 1),
(39, 'Pakusari', 1),
(40, 'Panti', 1),
(41, 'Patrang', 1),
(42, 'Puger', 1),
(43, 'Rambipuji', 1),
(44, 'Semboro', 1),
(45, 'Silo', 1),
(46, 'Sukorambi', 1),
(47, 'Sukowono', 1),
(48, 'Sumber Baru', 1),
(49, 'Sumber Jame', 1),
(50, 'Sumber Sari', 1),
(51, 'Tanggul', 1),
(52, 'Tempurejo', 1),
(53, 'Umbulsari', 1),
(54, 'Wuluhan', 1),
(84, 'Arjasa', 3),
(85, 'Asembagus', 3),
(86, 'Banyuglugur', 3),
(87, 'Banyuputih', 3),
(88, 'Besuki', 3),
(89, 'Bungatan', 3),
(90, 'Jangkar', 3),
(91, 'Jatibanteng', 3),
(92, 'Kapongan', 3),
(93, 'Kendit', 3),
(94, 'Mangaran', 3),
(95, 'Mlandingan', 3),
(96, 'Panarukan', 3),
(97, 'Panji', 3),
(98, 'Situbondo', 3),
(99, 'Suboh', 3),
(100, 'Sumbermalang', 3),
(101, 'Bangorejo', 4),
(102, 'Banyuwangi', 4),
(103, 'Cluring', 4),
(104, 'Gambiran', 4),
(105, 'Genteng', 4),
(106, 'Giri', 4),
(107, 'Glagah', 4),
(108, 'Glenmore', 4),
(109, 'Kabat', 4),
(110, 'Kalibaru', 4),
(111, 'Kalipuro', 4),
(112, 'Licin', 4),
(113, 'Muncar', 4),
(114, 'Pesanggaran', 4),
(115, 'Purwoharjo', 4),
(116, 'Rogojampi', 4),
(117, 'Sempu', 4),
(118, 'Siliragung', 4),
(119, 'Singojuruh', 4),
(120, 'Songgon', 4),
(121, 'Srono', 4),
(122, 'Tegaldlimo', 4),
(123, 'Tegalsari', 4),
(124, 'Wongsorejo', 4);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2018_10_23_091120_create_mahasiswa', 1),
(20, '2018_11_01_140916_stok', 1),
(21, '2018_11_01_151218_create_stok', 2),
(22, '2018_11_03_082647_create_pesanan', 3),
(24, '2018_11_03_091652_create_detail_pesanan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `ukuran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_pesanan` int(10) UNSIGNED NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_terkirim` date DEFAULT NULL,
  `harga` double NOT NULL,
  `alasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_stok` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `ukuran`, `jumlah_pesanan`, `alamat`, `bukti_pembayaran`, `status`, `tgl_terkirim`, `harga`, `alasan`, `id_user`, `id_stok`, `created_at`, `updated_at`) VALUES
(9, 'Sedang', 13, 'Korengan', NULL, 'Ditolak', NULL, 97500, NULL, 4, 4, '2018-11-18 19:00:08', '2018-11-19 00:21:06'),
(17, 'Sedang', 10, 'Jem utara', 'http://localhost/SEPIK/public/storage/pembayaran/6S0UKXK4CAiFzFDYXWGPc10q305P6b0xbQDoGkn3.jpeg', 'Ditolak', NULL, 75000, 'karena ada bencana sesuatu', 5, 4, '2018-11-20 00:10:44', '2018-11-26 21:18:31'),
(18, 'Besar', 5, 'Jambisari', 'http://localhost/SEPIK/public/storage/pembayaran/5oYIJJcXORr3a00ymFlOK98cJHZi5ZtpqbdCrdjo.png', 'Dibatalkan', NULL, 240000, NULL, 7, 3, '2018-11-21 20:39:01', '2018-12-06 07:53:29'),
(19, 'Besar', 5, 'Jambisari', NULL, 'Diverifikasi', NULL, 150000, NULL, 7, 3, '2018-11-21 20:39:02', '2018-11-22 09:02:19'),
(20, 'Sedang', 5, 'Ambulu wrngin bondowoso rt.5 rw.2', 'http://localhost/SEPIK/public/storage/pembayaran/GnDC7CyzfhsvPZxTIYuNYsft9uxEH9pNePg5nZLb.jpeg', 'Diterima', NULL, 37500, NULL, 3, 4, '2018-11-22 07:41:36', '2018-11-22 09:01:12'),
(23, 'Sedang', 12, 'Jalan Mastrip no 5', 'http://localhost/SEPIK/public/storage/pembayaran/zRP272jPvJ4TjOqIRqZqNrdMMPoNDDMhQdZHrxHl.png', 'Dibatalkan', NULL, 90000, 'bukti tidak sesuai', 8, 4, '2018-11-22 20:20:45', '2018-12-05 07:30:00'),
(24, 'Sedang', 12, 'besuki raya', NULL, 'Ditolak', NULL, 90000, NULL, 9, 4, '2018-11-22 22:43:12', '2018-11-22 22:43:56'),
(26, 'Besar', 8, 'besuki raya', 'http://localhost/SEPIK/public/storage/pembayaran/AUKk0IyJLf2vpNjvSfZgUv4TkCXkeojd728gAse3.png', 'Diterima', NULL, 240000, NULL, 9, 3, '2018-11-22 22:47:57', '2018-11-22 22:50:54'),
(27, 'Sedang', 20, 'jln.jawa', 'http://localhost/SEPIK/public/storage/pembayaran/HKxRRnucP41WRV7oM8fuufflmbg4DQdJSfPN7wil.png', 'Diterima', NULL, 150000, NULL, 10, 4, '2018-11-22 23:33:09', '2018-11-22 23:47:37'),
(28, 'Besar', 32, 'desa ambulu rt.9, kecamatan wringin, kabupaten Bondowoso', 'http://localhost/SEPIK/public/storage/pembayaran/gdvy9Xr58YfEQj19MPAA5LhT5vV6omForVygRv1X.png', 'Diterima', NULL, 960000, NULL, 8, 3, '2018-12-04 20:55:25', '2018-12-04 21:53:59'),
(30, 'Besar', 31, 'desa ambulu rt.9, kecamatan wringin, kabupaten Bondowoso, kecamatan Ajung, kabupaten Jember', NULL, 'Dalam pengiriman', NULL, 930000, NULL, 8, 3, '2018-12-04 21:27:31', '2018-12-05 01:50:32'),
(31, 'Besar', 10, 'desa ambulu rt.9, kecamatan wringin, kabupaten Bondowoso, kecamatan Ajung, kabupaten Jember', 'http://localhost/SEPIK/public/storage/pembayaran/6sJunxOVI0PqR1H0O2GeoEGQou56Q8fEJCbjTfrW.png', 'Dibatalkan', NULL, 310000, 'banjir nak', 8, 3, '2018-12-05 10:12:42', '2018-12-06 11:31:04'),
(34, 'Besar', 1, 'desa ambulu rt.9, kecamatan Sumbermalang, kabupaten Situbondo', 'http://localhost/SEPIK/public/storage/pembayaran/3l0AGbuxpLhCoXApg0jziVzRrF9BqUe27zquoK1t.png', 'Diterima', NULL, 41000, NULL, 8, 3, '2018-12-06 11:16:43', '2018-12-06 11:56:37'),
(35, 'Besar', 10, 'desa ambulu rt.9, kecamatan Sumbermalang, kabupaten Situbondo, kecamatan Ajung, kabupaten Jember', NULL, 'Menunggu verifikasi', NULL, 300000, NULL, 8, 3, '2018-12-06 19:41:33', '2018-12-06 19:41:33'),
(36, 'Besar', 1, 'Jalan Kenanga no.9 Desa Sumbersari, kecamatan Suboh, kabupaten Situbondo', NULL, 'Diverifikasi', NULL, 40000, NULL, 8, 3, '2018-12-06 19:49:23', '2018-12-06 21:00:09'),
(37, 'Besar', 50, 'desa ambulu rt.9, kecamatan Ajung, kabupaten Jember', 'http://localhost/SEPIK/public/storage/pembayaran/bHASgSDIUOPajaET6S7TvMtNRLtDtKYl9pSeBGvV.png', 'Diverifikasi', NULL, 1510000, NULL, 8, 3, '2018-12-06 20:53:51', '2018-12-06 21:01:52');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` int(10) UNSIGNED NOT NULL,
  `ukuran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `ukuran`, `gambar`, `keterangan`, `harga`, `jumlah`) VALUES
(3, 'Besar', 'http://localhost/SEPIK/public/lele/besar2.jpg', '200-250 gram, +-30 cm, 4-5 ekor per kg', '30000', 40),
(4, 'Sedang', 'http://localhost/SEPIK/public/lele/sedang.jpg', '150 gram, +-30cm,  8-10 ekor per kg', '7500', 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','pelanggan','kurir','pemilik') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKelamin` enum('laki-laki','perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noHp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `remember_token`, `role`, `jenisKelamin`, `alamat`, `noHp`, `created_at`, `updated_at`) VALUES
(1, 'adif', 'adifia19@gmail.com', '$2y$10$lNHsJeTiLsyOPidZylt2gOWXMWEpZ5KZLL4rwQVDSGP083/vIZZWy', 'xMS8gQUXdUnEX5aDcXWproE1L5FQitS7rMbBaQKBMLwjXRNTbZc8QHuvUH96', 'pemilik', NULL, 'jember sari roti', NULL, '2018-11-01 07:39:38', '2018-11-20 00:11:39'),
(2, 'admin', 'admin@admin.com', '$2y$10$hfXMRUKrsQh28keV6lH2N.9S0Ile4dl8GRGmiFG1XeMpccUMca7Ma', 'VBHadywwXybeB9t7w4E8xmh49cbtYzc3bol61SUveUDO6esx1H5uB9RsqS9G', 'admin', 'laki-laki', 'Ambulu, kecamatan Mayang, kabupaten Jember, kecamatan bondowoso, kabupaten Bondowoso', '0987272', '2018-11-01 07:44:44', '2018-12-05 07:10:35'),
(3, 'Doni', 'doni@doni.com', '$2y$10$jDP7UFwVpYoXrNXjSX7ITOzszRFzlxByQLZ8Kj3JCe4wkC4jKSTd2', 'sLGFXpa8lTT0lBh6vhkfwbqNU9Y79jBjpWyzmj3HfGrGPjpdyBd5qUGgEAQQ', 'pelanggan', NULL, 'Ambulu wrngin bondowoso', '08763636662', '2018-11-18 05:34:42', '2018-11-21 21:37:55'),
(4, 'ferdi', 'ferdian@ferdi.com', '$2y$10$ameuduWiJ4sP32Ty17RJeuDz8U5aOmDRIPzJYoQHwG7fCfwoKK8b6', '1eKO2dSfMojDCcA8XAq4dPRpU2XIKW4eJT5lVPgO5JUsp9Dl80521LQh6RbL', 'pelanggan', 'laki-laki', 'ambulu', '113243535', '2018-11-18 18:54:23', '2018-11-19 23:56:19'),
(5, 'Fadhel', 'fadhel@fadhel.com', '$2y$10$cHRxrjyCZLRKcrO78GPx6.zWmKO6BRl03kTMWhw/KbjCiNkt24oNu', 'XAy0ZnCDxmLSp10acxkVSt3nEGqBbmwWGKSufz2DfVuriD6UCumUYwCQAIzg', 'pelanggan', 'laki-laki', 'Jem utara', '087651414328', '2018-11-20 00:08:38', '2018-11-20 00:09:07'),
(6, 'a6', 'a6@a6.a6', '$2y$10$U/kepbwBmM1xphcfUEflb..NsTZwvFhgPH/sG/CJx5lAVigwLH8Y2', 'Y0SeYhW6JeCPlyNDeCcHoEuAahYx6dofeAcjXaAnJ4hz8EVahvwyMUBk4aF9', 'kurir', 'laki-laki', 'ambulu', '0988', '2018-11-21 08:15:49', '2018-12-01 22:44:27'),
(7, 'andi', 'andi@andi.andi', '$2y$10$N9jhjKnXjt37wT/rsh.9puAsIJklak8YgMthtxOhtoqoYMQIVFabi', 'TurqBLvP49STMxgymlfYarcRNC0AWbpBEm3MegnCHZmO6CbKpfsIGGlQkCh0', 'pelanggan', NULL, NULL, NULL, '2018-11-21 20:32:38', '2018-11-21 21:38:19'),
(8, 'Mukhlis', 'mukhlisin@76.mc', '$2y$10$2yLhJudo4sVLlI8mHERw5e4PVnowUJIqNwteeXWPLJ8kMTnok4rGm', '3elnKveZTpogBxSsnJANB2i7id9KIZeStvBJKTyK6RnCBHl2qkEbzZIRKucp', 'pelanggan', 'laki-laki', 'desa ambulu rt.9, kecamatan Ajung, kabupaten Jember', '08513328118', '2018-11-22 19:59:35', '2018-12-06 20:50:52'),
(9, 'Lina', 'kalinalina@lina.lina', '$2y$10$6o8u7lUtXOjzmqxxoh8W7OsRp6VMx5usyKSLkQOkVnR5TOueB5bOW', 'dXaVFTxjCdQgnLb6Inrh93AjaFXzYr78Gjfx9bM7n3es8hJu0jVSvSjTbn8m', 'pelanggan', 'laki-laki', 'besuki raya', '098272627', '2018-11-22 22:42:17', '2018-11-22 22:42:36'),
(10, 'Deni', 'deni@gmail.com', '$2y$10$9tmDKk1rt0o1TBz4obQiouVKBA6xStWphU2GRe07zD9oDQXAe8zCW', 'V8vWetJmcBK2vl1ZlSP1vo1VhQc1rnTvmRFgqi2zQHfc0dJKIVP3A4BVwC8q', 'pelanggan', NULL, NULL, NULL, '2018-11-22 23:26:28', '2018-11-22 23:26:28'),
(16, 'Faisal', 'faisal23@gmail.com', '$2y$10$z3i1s8K.swZUo8dp7HT3Kubjkjf0GRPbcH3h.NVtFgCKDoaQVfc16', 'WZvvFGYrwCu8mQSRV5iVvO2QbKCZMeGu1F4z5jpIqJSmufHUD0xsXxEpfZgs', 'kurir', 'laki-laki', 'Desa Wuluhan rt.3 rw.1, kecamatan Singojuruh, kabupaten Banyuwangi', '012345', '2018-12-03 22:40:24', '2018-12-03 22:40:24'),
(17, 'asdas', 'suci@mustika.com', '$2y$10$LZTF8Pw4CAMMLwqrFV.lQu1WxfbAiYtpoa/Dto5hhfHa2JoS5YkA2', NULL, 'kurir', 'perempuan', 'Jalan Mastrip no 7, kecamatan binakal, kabupaten Bondowoso', '23432423', '2018-12-06 12:47:36', '2018-12-06 19:51:08'),
(18, 'almarhum', 'almarhum@gmail.com', '$2y$10$oLAmw2GDKs4rCyeCf9hI2OeTyQvmDwuWEvF29jz.NWSnARUF/SpO2', 'v56MCUe9RSQiWUcqX7CDiPTJ9e8Eiv4aiicya862GM4EV3cSZNjAUP644NHG', 'pelanggan', 'laki-laki', 'Desa sebelah, kecamatan tenggarang, kabupaten Bondowoso', '098786', '2018-12-06 16:16:36', '2018-12-06 16:17:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kecamatan_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pesanan_id_user_foreign` (`id_user`),
  ADD KEY `detail_pesanan_id_stok_foreign` (`id_stok`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
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
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `fk_kecamatan_kabupaten` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `detail_pesanan_id_stok_foreign` FOREIGN KEY (`id_stok`) REFERENCES `stok` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pesanan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
