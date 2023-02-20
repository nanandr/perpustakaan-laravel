-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 20, 2023 at 03:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `idbuku` int(255) NOT NULL,
  `kodebuku` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`idbuku`, `kodebuku`, `judul`, `pengarang`, `penerbit`, `created_at`, `updated_at`) VALUES
(1, 'DB', 'Database dengan MySql', 'Yuli', 'RPL production', '2023-02-16 05:45:44', NULL),
(2, 'FIS', 'Fisika Kelas XI', 'Nur', 'RPL production', '2023-02-08 05:45:44', NULL),
(3, 'MAT', 'Matematika', 'Razza Galang', 'RPL production', '2023-01-04 05:45:44', NULL),
(4, 'OOP', 'Pemrograman Berorientasi Obyek', 'Dudung', 'GS', '2022-12-09 05:45:44', '2023-02-20 10:56:42'),
(5, 'OR', 'Olahraga', 'Satia Nugraha', 'Zidane Production', '2023-02-06 05:45:44', '2023-02-20 10:44:09'),
(6, 'PAI', 'Pendidikan Agama Islam', 'M Bagus', 'Zidane Production', '2022-12-01 05:45:44', NULL),
(7, 'KIM', 'Kimia', 'Eros', 'RPL Production', '2023-02-09 05:45:44', NULL),
(9, 'JARKOM', 'Jaringan Komputer', 'Dodi', 'RPL Production', '2023-01-05 05:45:44', NULL),
(10, 'SK', 'Sistem Komputer', 'Rachmawan', 'RPL Production', '2023-01-12 05:45:44', '2023-02-18 17:01:46'),
(11, 'PD', 'Pemrograman Dasar', 'Daniar', 'RPL Production', '2023-01-25 05:45:44', NULL),
(12, 'KIM', 'Kimia', 'Eros', 'RPL Production', '2023-01-19 05:45:44', NULL),
(13, 'WEB', 'Pemrograman Web', 'M Bagus', 'Bagus Production', '2023-02-01 05:45:44', NULL),
(14, 'JARKOM', 'Jaringan Komputer', 'Dodi', 'RPL Production', '2023-02-10 05:45:44', NULL),
(18, 'PROG', 'How to C++', 'Wahyudin', 'RPL Production', '2023-02-19 11:08:29', '2023-02-19 11:08:44'),
(19, 'KOMP', 'Sistem Komputer', 'Udin Saepudin', 'RPL Production', '2023-02-20 03:29:56', '2023-02-20 03:29:56'),
(20, 'DB', 'Basis Data MySQL', 'Enjang Supriyadi', 'RPL Production', '2023-02-20 10:50:48', '2023-02-20 10:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `idpinjam` int(255) NOT NULL,
  `idpetugas` int(10) NOT NULL,
  `idsiswa` int(255) NOT NULL,
  `idbuku` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`idpinjam`, `idpetugas`, `idsiswa`, `idbuku`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 7, '2023-02-19 16:01:11', NULL, NULL),
(2, 1, 4, 9, '2023-02-13 04:39:25', NULL, NULL),
(3, 1, 5, 18, '2023-02-14 04:54:40', NULL, NULL),
(5, 1, 6, 3, '2023-02-20 13:59:39', '2023-02-20 13:59:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `idpetugas` int(10) NOT NULL,
  `namapetugas` varchar(100) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `hp` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`idpetugas`, `namapetugas`, `email`, `email_verified_at`, `hp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '012903210910', '$2y$10$o/O95AJtmpqYavyEOVCaIuIK.iE827GSPmIwCOLfcVgtBRvB89VnK', NULL, '2023-02-19 13:31:56', '2023-02-20 01:11:44'),
(3, 'Admin2', 'admin2@gmail.com', NULL, '0129032109233', '$2y$10$LxahUywewWHiSmpM8zWbA.mkbEf8L6U6KkFc3j6PxU/sO8TzeT5mW', NULL, '2023-02-19 13:57:25', '2023-02-19 15:08:49'),
(4, 'Admin3', 'admin3@gmail.com', NULL, '0821912821', '$2y$10$/BxMn7zhEg17HN0oZQXePO6PbP1pNkggGYJ.vc3zxE/ZMhdl/dUxK', NULL, '2023-02-19 14:31:54', '2023-02-19 14:31:54'),
(6, 'Nandana Rafi Ardika', 'nandana@gmail.com', NULL, '190239012', '$2y$10$yPsJbjCAzEZJx8GcQ980TO2Za1aecgXycybjGNGvwIm.Nf/MLjjDm', NULL, '2023-02-20 01:35:24', '2023-02-20 01:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `idsiswa` int(255) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `namasiswa` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`idsiswa`, `nis`, `namasiswa`, `kelas`, `hp`, `created_at`, `updated_at`) VALUES
(1, '213718299', 'Kurniadi Samsudin', 'XI RPL A', '0821912821', '2023-02-19 11:25:21', '2023-02-19 13:52:02'),
(2, '211115739', 'Nandana Rafi Ardika', 'XI RPL B', '081904054053', '2023-02-19 12:58:59', '2023-02-19 12:58:59'),
(4, '312890132', 'Udin Samsudin', 'X RPL A', '1328989132', '2023-02-20 04:39:15', '2023-02-20 04:39:15'),
(5, '2139281', 'Wawan Gunawan', 'X RPL C', '0348909180', '2023-02-20 04:54:32', '2023-02-20 11:08:42'),
(6, '1832981329', 'Muhammad Messi', 'XI RPL A', '02980813290', '2023-02-20 11:08:29', '2023-02-20 11:08:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`idpinjam`),
  ADD KEY `idpetugas` (`idpetugas`),
  ADD KEY `idsiswa` (`idsiswa`),
  ADD KEY `idbuku` (`idbuku`);

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`idsiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `idbuku` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `idpinjam` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  MODIFY `idpetugas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `idsiswa` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `tbl_peminjaman_ibfk_1` FOREIGN KEY (`idbuku`) REFERENCES `tbl_buku` (`idbuku`),
  ADD CONSTRAINT `tbl_peminjaman_ibfk_2` FOREIGN KEY (`idpetugas`) REFERENCES `tbl_petugas` (`idpetugas`),
  ADD CONSTRAINT `tbl_peminjaman_ibfk_3` FOREIGN KEY (`idsiswa`) REFERENCES `tbl_siswa` (`idsiswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
