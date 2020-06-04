-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 02:45 PM
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul_film`, `poster`, `overview`, `jam`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Judul Film update', '1591245522.jpg', 'Overview update', '15:30:00', 40000, NULL, '2020-06-03 21:38:42'),
(2, 'pemandangan', '1591095352.jpg', 'ini film pemandangan', '00:00:00', 0, NULL, '2020-06-02 03:55:52'),
(3, 'keren', '1591097891.jpg', 'ini film keren', '15:00:00', 0, '2020-05-31 11:33:43', '2020-06-02 04:38:11'),
(4, 'stave jobs', '1591004818 . jpg', 'ini film stave jobs', '00:00:00', 0, '2020-06-01 02:46:58', '2020-06-01 02:46:58'),
(5, 'avengers', '1591095477.jpg', 'ini film bagus', '00:00:00', 0, '2020-06-01 02:47:57', '2020-06-02 03:57:57'),
(6, 'aladin', '1591035370.jpg', 'ini film aladin', '00:00:00', 0, '2020-06-01 11:16:10', '2020-06-01 11:16:10'),
(7, 'civil war', '1591036622.jpg', 'film civil war', '00:00:00', 0, '2020-06-01 11:37:02', '2020-06-01 11:37:02'),
(8, 'upin', '1591096877.jpg', 'ipin', '21:24:00', 0, '2020-06-02 04:21:17', '2020-06-02 04:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `kursi`
--

CREATE TABLE `kursi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `studio_id` int(11) NOT NULL,
  `nama_kursi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2020_05_12_073520_create_admins_table', 3),
(5, '2020_05_31_123241_create_film_table', 4),
(6, '2020_05_31_161959_create_films_table', 5),
(7, '2020_06_03_043949_create_kursi_table', 6),
(8, '2020_06_03_044140_create_pesan_table', 6),
(9, '2020_06_03_055947_create_studio_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama_film`, `tanggal`, `jam`, `jumlah`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'films', '2020-06-03', '13:30:00', 1, 40000, NULL, NULL),
(2, 'films', '2020-06-03', '13:30:00', 1, 40000, NULL, NULL),
(3, 'films', '2020-06-03', '13:30:00', 1, 40000, NULL, NULL),
(4, 'films', '2020-06-03', '13:30:00', 1, 40000, NULL, NULL),
(5, 'films', '2020-06-03', '13:30:00', 2, 40000, NULL, NULL),
(6, 'films', '2020-06-03', '13:30:00', 2, 40000, NULL, NULL),
(7, 'films', '2020-06-03', '13:30:00', 2, 40000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` int(11) NOT NULL,
  `nama_studio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `film_id`, `nama_studio`, `created_at`, `updated_at`) VALUES
(1, 1, 'Studio 1', NULL, NULL),
(2, 2, 'Studio 2', NULL, NULL),
(3, 3, 'Studio 3', NULL, NULL),
(4, 4, 'Studio 4', NULL, NULL),
(5, 5, 'Studio 5', NULL, NULL),
(6, 6, 'Studio 6', NULL, NULL),
(7, 7, 'Studio 7', NULL, NULL),
(8, 8, 'Studio 8', NULL, NULL),
(9, 9, 'Studio 9', NULL, NULL),
(10, 10, 'Studio 10', NULL, NULL),
(11, 11, 'Studio 11', NULL, NULL),
(12, 12, 'Studio 12', NULL, NULL);

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
(2, 'nurma cool', 'fero@fero.com', NULL, '$2y$10$Vkn1yUkDgoBQRGp/lbnzaep8Ee6rAyPDS6il5Iq5/cKhDGr.Cy89q', NULL, '2020-04-28 12:29:18', '2020-04-28 12:29:18'),
(9, 'feronika', 'fero@gmail.com', NULL, '$2y$10$5Qe5oHmnBrxq.c2Nw6J74.YgwLU6hwtThCmn7NFogv/2ZdApgApqy', NULL, '2020-04-28 19:20:50', '2020-04-28 19:20:50'),
(11, 'fero', 'feronikan@feron.com', NULL, '$2y$10$1fl3rPgpLHF5HqEArI6KxulerqSkjBbja6UDBRJeK4XuZvF1MZ/sq', NULL, '2020-04-28 19:53:04', '2020-04-28 19:53:04'),
(12, 'feronika', 'feronikanm@fero.com', NULL, '$2y$10$zRueUXybrFPSOGJ8ZtIuoeCvJik3n2I.X8EnctiPq3ay7d/prPILm', NULL, '2020-04-28 19:58:25', '2020-04-28 19:58:25'),
(13, 'dickydicky', 'dicky@dicky.com', NULL, '$2y$10$OXu4OMSGrKq3OjmQnwcx1Oxa.xMZfO5G0HtW5Jq3GcEozaSJsLqTG', NULL, '2020-05-15 23:53:14', '2020-05-15 23:53:14'),
(14, 'fifi', 'fifi@fifi.com', NULL, '123456', NULL, '2020-05-21 07:06:28', '2020-05-21 07:06:28'),
(16, 'fifi', 'fifi@gmail.com', NULL, '$2y$10$IOZCxiBd7ol3UOsHEVeB2.P8SDZzjnpgUXReoYRrO9OmVfz0/1mkO', NULL, '2020-05-22 00:14:51', '2020-05-22 00:14:51'),
(17, 'wibu', 'wibuwibu@gmail.com', NULL, '$2y$10$bRY8GOkTKQP.WZaLxU4mLuKcrULYo4Mmj1OBGh70W61c0nSVduvnG', NULL, '2020-06-04 03:49:05', '2020-06-04 03:49:05'),
(18, 'wibu123', 'wibu123@gmail.com', NULL, '$2y$10$wIbI5TPsHdpVuvYshnbctOkd.43sRvRNhrdoCUqju7LTKKsgTg.4S', NULL, '2020-06-04 04:08:09', '2020-06-04 04:08:09');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
