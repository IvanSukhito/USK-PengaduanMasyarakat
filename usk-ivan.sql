-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 08:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usk-ivan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ivan', '$2y$10$08NfqT4W6stQJaDupOaBmuyKFTirTPe.lCDOnzPJNzF41hYLZ401K', '2021-04-06 20:47:12', '2021-04-06 20:47:12'),
(2, 'Bu Yenny', '$2y$10$vixTnkleTSpUVer7SqHzLuc.qry/RVms1m9nNvPM5XgEO3wHkIklu', '2021-04-06 21:22:40', '2021-04-06 21:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `aspirasis`
--

CREATE TABLE `aspirasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('menunggu','proses','selesai') COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_penduduk` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aspirasis`
--

INSERT INTO `aspirasis` (`id`, `id_laporan`, `lokasi`, `ket`, `status`, `feedback`, `id_penduduk`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, 20830, 'Depan Masjid', 'Saluran Mampet', 'selesai', 'puas', 2, 3, '2021-04-07 05:48:36', '2021-04-08 03:03:38'),
(2, 20832, 'Depan Gang', 'Lampu Jalan Mati', 'selesai', NULL, 2, 1, '2021-04-07 07:04:37', '2021-04-08 06:33:34'),
(3, 80421, 'Pos RW', 'Kursi Rusak', 'selesai', 'puas', 5, 1, '2021-04-08 02:36:08', '2021-04-08 06:32:35'),
(9, 90838, 'Depan Gereja', 'Jaringan Mati', 'selesai', 'puas', 9, 4, '2021-04-08 03:00:30', '2021-04-08 06:43:58'),
(10, 100830, 'Depan Gereja', 'Lampu Mati', 'menunggu', NULL, 10, 1, '2021-04-08 04:12:24', '2021-04-08 04:12:24'),
(11, 110844, 'Depan Gang', 'Lampu Mati', 'selesai', 'puas', 11, 1, '2021-04-08 06:24:26', '2021-04-08 06:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ket_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `ket_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Keluhan Sarana Prasana', '2021-04-06 21:27:26', '2021-04-06 21:27:26'),
(3, 'Keluhan Lingkungan', '2021-04-06 21:28:30', '2021-04-06 21:28:47'),
(4, 'Keluhan Jaringan', '2021-04-07 05:04:36', '2021-04-07 05:04:36'),
(5, 'Keluhan Iuran', '2021-04-07 05:30:59', '2021-04-07 05:30:59');

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
(1, '2021_04_07_034149_create_admin_table', 1),
(2, '2021_04_07_035803_create_penduduks_table', 2),
(3, '2021_04_07_040022_create_kategoris_table', 2),
(4, '2021_04_07_040231_create_aspirasis_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `penduduks`
--

CREATE TABLE `penduduks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduks`
--

INSERT INTO `penduduks` (`id`, `nik`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, '3173013801903100', 'Budal', 'Jl. Meruya Utara  Rt 5/02 Blok A', '2021-04-07 05:47:42', '2021-04-07 05:47:42'),
(2, '3173013801903122', 'Rudi Antarin', 'Jl. Meruya Utara  Rt 5/02 Blok A', '2021-04-07 05:48:36', '2021-04-07 05:48:36'),
(5, '3173013804411100', 'Joya Smile', 'Jl. Timur timur Rt 18/02 Blok A No 81', '2021-04-08 02:36:08', '2021-04-08 02:36:08'),
(9, '3173013801903115', 'Doni Salaman', 'Jl. Srengseng Utara  Rt 5/02 Blok A', '2021-04-08 03:00:30', '2021-04-08 03:00:30'),
(10, '3173013804402200', 'Aceng', 'Jl. Flamingo Barat Blok C No99', '2021-04-08 04:12:24', '2021-04-08 04:12:24'),
(11, '3173013801900989', 'Rini', 'Jl. Berdikari Rt 18/02 Blok C No 88', '2021-04-08 06:24:26', '2021-04-08 06:24:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_username_unique` (`username`);

--
-- Indexes for table `aspirasis`
--
ALTER TABLE `aspirasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aspirasis_id_kategori_foreign` (`id_kategori`),
  ADD KEY `aspirasis_id_penduduk_foreign` (`id_penduduk`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduks`
--
ALTER TABLE `penduduks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penduduks_nik_unique` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aspirasis`
--
ALTER TABLE `aspirasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penduduks`
--
ALTER TABLE `penduduks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aspirasis`
--
ALTER TABLE `aspirasis`
  ADD CONSTRAINT `aspirasis_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aspirasis_id_penduduk_foreign` FOREIGN KEY (`id_penduduk`) REFERENCES `penduduks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
