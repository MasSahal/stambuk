-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2023 at 07:25 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_stambuk`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `idkelas` int NOT NULL,
  `idwali_kelas` int NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`idkelas`, `idwali_kelas`, `nama_kelas`, `updated_at`, `created_at`) VALUES
(6, 3, '1A', '2023-07-27 01:24:54', '2023-07-27 01:24:54'),
(7, 6, '6A', '2023-08-08 04:01:35', '2023-08-08 04:01:35'),
(8, 7, '3B', '2023-08-08 04:01:42', '2023-08-08 04:01:42'),
(9, 16, '6B', '2023-08-09 03:47:28', '2023-08-09 03:47:28'),
(11, 15, '1B', '2023-08-09 03:48:08', '2023-08-09 03:48:08'),
(12, 14, '2A', '2023-08-09 03:48:32', '2023-08-09 03:48:32'),
(13, 13, '2B', '2023-08-09 03:48:45', '2023-08-09 03:48:45'),
(15, 12, '3A', '2023-08-09 03:49:23', '2023-08-09 03:49:23'),
(16, 11, '4A', '2023-08-09 03:50:32', '2023-08-09 03:50:32'),
(17, 10, '4B', '2023-08-09 03:50:44', '2023-08-09 03:50:44'),
(18, 8, '5A', '2023-08-09 03:50:54', '2023-08-09 03:50:54'),
(19, 9, '5B', '2023-08-09 03:51:12', '2023-08-09 03:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_nilai`
--

CREATE TABLE `kriteria_nilai` (
  `idkriteria` int NOT NULL,
  `idmapel` int NOT NULL,
  `kriteria` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `idmapel` int NOT NULL,
  `nama_mapel` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` enum('utama','mulok') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`idmapel`, `nama_mapel`, `type`, `deskripsi`, `updated_at`, `created_at`) VALUES
(1, 'Ipa', 'utama', 'Bagus', '2023-08-09 05:09:07', '2023-08-09 03:59:14'),
(2, 'Bahasa Indonesia', 'utama', 'Bagus Lah', '2023-08-09 03:59:38', '2023-08-09 03:59:38'),
(3, 'Matematika', 'utama', 'Bgus cuy', '2023-08-09 03:59:51', '2023-08-09 03:59:51'),
(4, 'IPS', 'utama', 'Ya Bagus Dong', '2023-08-09 04:00:14', '2023-08-09 04:00:14'),
(5, 'Bahasa Cirebon', 'utama', 'Ya hrus Bgus', '2023-08-09 04:01:17', '2023-08-09 04:01:17'),
(6, 'Aut ipsam reprehende', 'mulok', 'sqws', '2023-08-09 06:35:58', '2023-08-09 06:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int NOT NULL,
  `idsiswa` int NOT NULL,
  `id_mapel` int NOT NULL,
  `p_nilai` int NOT NULL,
  `p_predikat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_deskripsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `k_nilai` int NOT NULL,
  `k_predikat` varchar(100) NOT NULL,
  `k_deskripsi` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `idsiswa`, `id_mapel`, `p_nilai`, `p_predikat`, `p_deskripsi`, `k_nilai`, `k_predikat`, `k_deskripsi`, `updated_at`, `created_at`) VALUES
(1, 2, 1, 90, 'A', 'Sangat Baik dalam Belajar', 89, 'A', 'Sangat Baik dalam Belajar', '2023-08-09 19:42:57', '2023-08-09 19:42:57'),
(2, 2, 2, 44, 'D', 'Kurang dalam Belajar', 8, 'E', 'Sangat Kurang dalam Belajar', '2023-08-09 19:42:57', '2023-08-09 19:42:57'),
(3, 2, 3, 91, 'A', 'Sangat Baik dalam Belajar', 71, 'B', 'Baik dalam Belajar', '2023-08-09 19:42:57', '2023-08-09 19:42:57'),
(4, 2, 4, 58, 'C', 'Cukup dalam Belajar', 7, 'E', 'Sangat Kurang dalam Belajar', '2023-08-09 19:42:57', '2023-08-09 19:42:57'),
(5, 2, 5, 44, 'D', 'Kurang dalam Belajar', 75, 'B', 'Baik dalam Belajar', '2023-08-09 19:42:57', '2023-08-09 19:42:57'),
(6, 2, 6, 56, 'C', 'Cukup dalam Belajar', 11, 'E', 'Sangat Kurang dalam Belajar', '2023-08-09 19:42:57', '2023-08-09 19:42:57'),
(7, 3, 1, 57, 'C', 'Cukup dalam Belajar', 53, 'C', 'Cukup dalam Belajar', '2023-08-09 20:10:14', '2023-08-09 20:10:14'),
(8, 3, 2, 89, 'A', 'Sangat Baik dalam Belajar', 91, 'A', 'Sangat Baik dalam Belajar', '2023-08-09 20:10:14', '2023-08-09 20:10:14'),
(9, 3, 3, 45, 'D', 'Kurang dalam Belajar', 11, 'E', 'Sangat Kurang dalam Belajar', '2023-08-09 20:10:14', '2023-08-09 20:10:14'),
(10, 3, 4, 61, 'C', 'Cukup dalam Belajar', 42, 'D', 'Kurang dalam Belajar', '2023-08-09 20:10:14', '2023-08-09 20:10:14'),
(11, 3, 5, 79, 'B', 'Baik dalam Belajar', 10, 'E', 'Sangat Kurang dalam Belajar', '2023-08-09 20:10:14', '2023-08-09 20:10:14'),
(12, 3, 6, 98, 'A', 'Sangat Baik dalam Belajar', 21, 'E', 'Sangat Kurang dalam Belajar', '2023-08-09 20:10:14', '2023-08-09 20:10:14');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `predikat`
--

CREATE TABLE `predikat` (
  `id_sistem` int NOT NULL,
  `pred_a` int NOT NULL DEFAULT '85',
  `pred_b` int NOT NULL DEFAULT '65',
  `pred_c` int NOT NULL DEFAULT '50',
  `pred_d` int NOT NULL DEFAULT '30',
  `pred_e` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `predikat`
--

INSERT INTO `predikat` (`id_sistem`, `pred_a`, `pred_b`, `pred_c`, `pred_d`, `pred_e`) VALUES
(1, 85, 65, 50, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `raport`
--

CREATE TABLE `raport` (
  `idraport` int NOT NULL,
  `idsiswa` int NOT NULL DEFAULT '0',
  `semester` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `th_pelajaran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sikap_spiritual` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sikap_sosial` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eskul1` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi_eskul1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eskul2` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi_eskul2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eskul3` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi_eskul3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `saran` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tinggi_badan` tinyint DEFAULT NULL,
  `berat_badan` tinyint DEFAULT NULL,
  `pendengaran` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penglihatan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gigi` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prestasi1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ket_pres1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prestasi2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ket_pres2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sakit` tinyint DEFAULT NULL,
  `izin` tinyint DEFAULT NULL,
  `tanpa_ket` tinyint DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raport`
--

INSERT INTO `raport` (`idraport`, `idsiswa`, `semester`, `th_pelajaran`, `sikap_spiritual`, `sikap_sosial`, `eskul1`, `deskripsi_eskul1`, `eskul2`, `deskripsi_eskul2`, `eskul3`, `deskripsi_eskul3`, `saran`, `tinggi_badan`, `berat_badan`, `pendengaran`, `penglihatan`, `gigi`, `prestasi1`, `ket_pres1`, `prestasi2`, `ket_pres2`, `sakit`, `izin`, `tanpa_ket`, `updated_at`, `created_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-09 03:55:31', '2023-08-09 03:55:31'),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-09 04:06:50', '2023-08-09 04:06:50'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-09 07:38:30', '2023-08-09 07:38:30'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-09 07:55:11', '2023-08-09 07:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int NOT NULL,
  `idkelas` int NOT NULL,
  `nama_siswa` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `no_induk` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nis` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tempat_lahir` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `agama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `anak_ke` int DEFAULT NULL,
  `alamat_siswa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_ayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_ibu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jalan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kelurahan_desa` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kecamatan_kota` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kabupaten_kota` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `provinsi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama_wali` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `pekerjaan_wali` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alamat_wali` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'none.jpg',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `idkelas`, `nama_siswa`, `no_induk`, `nis`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `alamat_siswa`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `jalan`, `kelurahan_desa`, `kecamatan_kota`, `kabupaten_kota`, `provinsi`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `foto`, `updated_at`, `created_at`) VALUES
(2, 7, 'Ahmad', '4126418', '1254124', 'Cirebon', '1987-04-21', 'L', 'Islam', 3, 'cirebon', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'none.jpg', '2023-08-09 04:06:50', '2023-08-09 04:06:50'),
(3, 6, 'Salman Aulia', '234234', '78', 'Rerum Nam quia velit', '2005-12-10', 'L', 'Sed pariatur Dolore', 81, 'Veritatis veniam la', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'none.jpg', '2023-08-09 07:38:30', '2023-08-09 07:38:30'),
(4, 6, 'Hilman Sky', '88', '95', 'Voluptatem accusanti', '1985-06-15', 'L', 'Non beatae optio re', 79, 'Error unde amet vol', 'Assumenda eaque cons', 'In fugiat vel eos q', 'Nulla magnam eligend', 'Adipisci aut sit si', 'Officia quia in ipsu', 'Quis eu unde labore', 'Sit ea minim except', 'Magna commodo quia e', 'Voluptatem obcaecati', 'Ullamco provident o', 'Ex adipisicing qui m', 'Corporis incidunt q', 'image_2023-08-09_145510139.png', '2023-08-09 08:10:01', '2023-08-09 07:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint NOT NULL COMMENT '0=siswa;1=admin;3=walas',
  `id_join` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `id_join`, `created_at`, `updated_at`) VALUES
(5, 'Super Admin', 'admin@mail.com', NULL, '$2y$10$YJs/U2aBZRbapIWxC2.iC.5zCQactf7D.aCk8kYR/woJidvXYE3b2', NULL, 1, 0, '2023-08-08 02:33:20', '2023-08-08 02:33:20'),
(6, 'Walas', 'walas@mail.com', NULL, '$2y$10$YJs/U2aBZRbapIWxC2.iC.5zCQactf7D.aCk8kYR/woJidvXYE3b2', NULL, 2, 3, '2023-08-08 02:33:20', '2023-08-08 02:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `idwali_kelas` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(20) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `agama` varchar(50) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`idwali_kelas`, `nama`, `nip`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `agama`, `email`, `updated_at`, `created_at`) VALUES
(3, 'Ahmad S', '11235267', 'cirebon', '1989-03-03', 'Et quo mollit volupt', 'L', 'Islam', 'hemiwemufa@mailinator.com', '2023-08-09 05:09:38', '2023-07-25 15:31:05'),
(6, 'Halim firmansyah', '45345', 'jakarta', '2008-08-02', 'Suscipit nostrum vel', 'L', 'Animi molestiae lau', 'vufywejycu@mailinator.com', '2023-08-08 04:00:48', '2023-08-08 04:00:48'),
(7, 'Sri Ningtyas', '345345', 'Cirebon', '2023-08-08', '32rwe', 'P', 'Islam', 'yanis@mail.com', '2023-08-08 04:01:16', '2023-08-08 04:01:16'),
(8, 'Dede Awaludin', '578233652', 'Cirebon', '1996-08-06', 'sumber', 'L', 'Islam', 'Dedeawaludin@gmail.com', '2023-08-09 03:35:55', '2023-08-09 03:35:55'),
(9, 'Saritem', '45284582', 'Jakarta', '1995-12-04', 'Dukupuntang', 'P', 'Islam', 'saritemnih43@gmail.com', '2023-08-09 03:37:04', '2023-08-09 03:37:04'),
(10, 'Dede', '1416252', 'Cirebon', '1994-06-12', 'cirebon', 'L', 'Islam', 'deede12342@gmail.com', '2023-08-09 03:38:56', '2023-08-09 03:37:59'),
(11, 'salman', '8747423', 'Cirebon', '1984-08-12', 'Kesambi', 'L', 'Islam', 'salman@gmail.com', '2023-08-09 03:41:26', '2023-08-09 03:41:26'),
(12, 'Faqih', '190511037', 'Cirebon', '2001-04-24', 'Jamblang', 'L', 'Islam', 'faqihmuhammad895@gmail.com', '2023-08-09 03:43:03', '2023-08-09 03:43:03'),
(13, 'Syafira', '42451831', 'Cirebon', '1987-05-08', 'cirebon', 'P', 'Islam', 'syafira@gmail.com', '2023-08-09 03:44:06', '2023-08-09 03:44:06'),
(14, 'Lugi', '3174371', 'Cirebon', '1997-10-31', 'Kesambi', 'L', 'Islam', 'lugiajah@gmail.com', '2023-08-09 03:45:16', '2023-08-09 03:45:16'),
(15, 'Tiyas', '2458254', 'Semarang', '1996-08-25', 'cirebon', 'P', 'Islam', 'tiyaskuy23@gmail.com', '2023-08-09 03:46:05', '2023-08-09 03:46:05'),
(16, 'Sahal', '525225', 'Cirebon', '1997-07-12', 'jalan ada', 'L', 'Islam', 'sahal@gmail.com', '2023-08-09 03:46:54', '2023-08-09 03:46:54');

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
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`idkelas`),
  ADD KEY `idwali_kelas` (`idwali_kelas`);

--
-- Indexes for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  ADD PRIMARY KEY (`idkriteria`),
  ADD KEY `idmapel` (`idmapel`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`idmapel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`),
  ADD KEY `idsiswa` (`idsiswa`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `predikat`
--
ALTER TABLE `predikat`
  ADD PRIMARY KEY (`id_sistem`);

--
-- Indexes for table `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`idraport`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`),
  ADD KEY `idkelas` (`idkelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`idwali_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  MODIFY `idkriteria` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idmapel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predikat`
--
ALTER TABLE `predikat`
  MODIFY `id_sistem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `raport`
--
ALTER TABLE `raport`
  MODIFY `idraport` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `idwali_kelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`idwali_kelas`) REFERENCES `wali_kelas` (`idwali_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  ADD CONSTRAINT `kriteria_nilai_ibfk_1` FOREIGN KEY (`idmapel`) REFERENCES `mapel` (`idmapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`idmapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`idsiswa`) REFERENCES `siswa` (`idsiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
