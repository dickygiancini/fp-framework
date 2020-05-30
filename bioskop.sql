-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 11:23 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Admin', 'admin@admin.com', '$2y$10$QZO8iBfmwIw/Y5dgZxe2J.5xBXlkOGcXdc/l7XDU.rTn.lZcP5dUG', NULL, '2020-05-12 01:30:12', '2020-05-12 01:30:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `KODE_FILM` varchar(20) NOT NULL,
  `FILM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_JADWAL` varchar(20) NOT NULL,
  `TANGGAL` date NOT NULL,
  `JAMTAYANG` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `ID_KURSI` varchar(10) NOT NULL,
  `KODE_STUDIO` varchar(20) DEFAULT NULL,
  `KURSI` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_000000_create_admins_table', 2),
(4, '2020_05_12_073520_create_admins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `KODE_STUDIO` varchar(20) NOT NULL,
  `KODE_FILM` varchar(20) DEFAULT NULL,
  `NAMA_STUDIO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `KODE_TIKET` varchar(20) NOT NULL,
  `ID_KURSI` varchar(10) NOT NULL,
  `HARGA` decimal(10,0) NOT NULL,
  `CHECK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` varchar(20) NOT NULL,
  `ID_CUST` varchar(10) DEFAULT NULL,
  `KODE_STUDIO` varchar(20) DEFAULT NULL,
  `KODE_FILM` varchar(20) DEFAULT NULL,
  `ID_JADWAL` varchar(20) DEFAULT NULL,
  `KODE_TIKET` varchar(20) DEFAULT NULL,
  `TGL_PESAN` datetime NOT NULL,
  `JUMLAH` int(11) NOT NULL,
  `TOTAL_HARGA` varchar(10) NOT NULL,
  `KD_STUDIO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fero', 'fero', NULL, '$2y$10$QFWisI03NLsRWfTvJDF.0eUr8dj5dDQZ6zR4JYGW0c6teSb6GpRn2', NULL, '2020-04-28 12:26:06', '2020-04-28 12:26:06'),
(2, 'nurma cool', 'fero@fero.com', NULL, '$2y$10$Vkn1yUkDgoBQRGp/lbnzaep8Ee6rAyPDS6il5Iq5/cKhDGr.Cy89q', NULL, '2020-04-28 12:29:18', '2020-04-28 12:29:18'),
(9, 'fero', 'fero@gmail.com', NULL, '$2y$10$5Qe5oHmnBrxq.c2Nw6J74.YgwLU6hwtThCmn7NFogv/2ZdApgApqy', NULL, '2020-04-28 19:20:50', '2020-04-28 19:20:50'),
(10, 'fero', 'feronika@fero.com', NULL, '$2y$10$PMakMhPSlOKux1E.D/UNgu/sUeKBJRP5jwh.aatKUv1UfaBa.zrdS', NULL, '2020-04-28 19:51:25', '2020-04-28 19:51:25'),
(11, 'fero', 'feronikan@fero.com', NULL, '$2y$10$1fl3rPgpLHF5HqEArI6KxulerqSkjBbja6UDBRJeK4XuZvF1MZ/sq', NULL, '2020-04-28 19:53:04', '2020-04-28 19:53:04'),
(12, 'feronika', 'feronikanm@fero.com', NULL, '$2y$10$zRueUXybrFPSOGJ8ZtIuoeCvJik3n2I.X8EnctiPq3ay7d/prPILm', NULL, '2020-04-28 19:58:25', '2020-04-28 19:58:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`KODE_FILM`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_JADWAL`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`ID_KURSI`),
  ADD KEY `FK_KURSI_RELATIONS_STUDIO` (`KODE_STUDIO`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`KODE_STUDIO`),
  ADD KEY `FK_STUDIO_RELATIONS_FILM` (`KODE_FILM`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`KODE_TIKET`),
  ADD KEY `FK_TIKET_RELATIONS_KURSI` (`ID_KURSI`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_TRANSAKS_RELATIONS_STUDIO` (`KODE_STUDIO`),
  ADD KEY `FK_TRANSAKS_RELATIONS_TIKET` (`KODE_TIKET`),
  ADD KEY `FK_TRANSAKS_RELATIONS_CUSTOMER` (`ID_CUST`),
  ADD KEY `FK_TRANSAKS_RELATIONS_JADWAL` (`ID_JADWAL`),
  ADD KEY `FK_TRANSAKS_RELATIONS_FILM` (`KODE_FILM`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `FK_KURSI_RELATIONS_STUDIO` FOREIGN KEY (`KODE_STUDIO`) REFERENCES `studio` (`KODE_STUDIO`);

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `FK_STUDIO_RELATIONS_FILM` FOREIGN KEY (`KODE_FILM`) REFERENCES `film` (`KODE_FILM`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `FK_TIKET_RELATIONS_KURSI` FOREIGN KEY (`ID_KURSI`) REFERENCES `kursi` (`ID_KURSI`);


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
