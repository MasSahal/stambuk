-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2023 at 06:57 AM
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
-- Table structure for table `guru_mapel`
--

CREATE TABLE `guru_mapel` (
  `id_gurumapel` int NOT NULL,
  `idmapel` int NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guru_mapel`
--

INSERT INTO `guru_mapel` (`id_gurumapel`, `idmapel`, `nip`, `nama_guru`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(2, 6, '94', 'Bu Tuti S.pd.i', 'P', '2023-09-03 03:11:48', '2023-09-03 03:31:50'),
(4, 2, '345678', 'vgfghf', 'P', '2023-09-03 05:20:31', '2023-09-03 05:20:31'),
(5, 5, '12', 'Officia a aliquam mo', 'P', '2023-09-06 04:49:08', '2023-09-06 04:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `history_nilai`
--

CREATE TABLE `history_nilai` (
  `id_history` int NOT NULL,
  `id_siswa` int NOT NULL,
  `kelas_sebelumnya` varchar(10) NOT NULL,
  `ta_sebelumnya` varchar(20) NOT NULL,
  `mapel_sebelumnya` varchar(50) NOT NULL,
  `p_nilai_old` int NOT NULL,
  `p_predikat_old` varchar(10) NOT NULL,
  `p_deskripsi_old` text NOT NULL,
  `k_nilai_old` int NOT NULL,
  `k_predikat_old` varchar(10) NOT NULL,
  `k_deskripsi_old` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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

--
-- Dumping data for table `kriteria_nilai`
--

INSERT INTO `kriteria_nilai` (`idkriteria`, `idmapel`, `kriteria`, `updated_at`, `created_at`) VALUES
(3, 2, 'mampu membaca 2', '2023-08-11 12:03:07', '2023-08-11 05:03:07'),
(4, 2, 'mampu menulis 1', '2023-08-11 12:03:21', '2023-08-11 05:03:21'),
(6, 2, '{nama} mampu membaca dengan baik', '2023-09-05 13:26:42', '2023-09-05 06:26:42'),
(7, 1, '{nama} {predikat} menulis, membaca, dan mendengar', '2023-09-05 13:44:16', '2023-09-05 06:44:16'),
(8, 1, '{nama} {predikat} mengeksplor lingkungan sekitar rumah tempat tinggal', '2023-09-05 13:59:00', '2023-09-05 06:59:00');

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
(6, 'Cirebonan', 'mulok', '--', '2023-08-10 17:12:07', '2023-08-09 06:35:58'),
(7, 'Sundaan', 'mulok', 'Bagus', '2023-08-10 17:12:21', '2023-08-10 17:12:21');

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
  `id_transkrip` int NOT NULL,
  `idsiswa` int NOT NULL,
  `id_mapel` int NOT NULL,
  `p_nilai` int NOT NULL,
  `p_predikat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `p_deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `k_nilai` int NOT NULL,
  `k_predikat` varchar(100) NOT NULL,
  `k_deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `id_transkrip`, `idsiswa`, `id_mapel`, `p_nilai`, `p_predikat`, `p_deskripsi`, `k_nilai`, `k_predikat`, `k_deskripsi`, `updated_at`, `created_at`) VALUES
(27, 2, 2, 1, 9, 'E', '<p>Kang yayan sangat kurang dalam menulis, membaca, dan mendengar. Kang yayan sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal.</p> ', 26, 'E', 'Kang yayan sangat kurang dalam menulis, membaca, dan mendengar. |Kang yayan sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-05 13:59:49', '2023-09-05 13:59:49'),
(28, 2, 2, 4, 53, 'C', '', 64, 'C', '', '2023-09-05 13:59:49', '2023-09-05 13:59:49'),
(29, 2, 2, 5, 7, 'E', '', 78, 'B', '', '2023-09-05 13:59:49', '2023-09-05 13:59:49'),
(30, 2, 2, 7, 79, 'B', '', 53, 'C', '', '2023-09-05 13:59:49', '2023-09-05 13:59:49'),
(31, 1, 1, 1, 48, 'D', 'Sunt qui blanditiis kurang dalam  menulis, membaca, dan mendengar. Sunt qui blanditiis kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', 14, 'E', 'Sunt qui blanditiis sangat kurang dalam menulis, membaca, dan mendengar. Sunt qui blanditiis sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-05 23:38:49', '2023-09-05 23:38:49'),
(32, 1, 1, 4, 85, 'A', '', 11, 'E', '', '2023-09-05 23:38:49', '2023-09-05 23:38:49'),
(33, 1, 1, 5, 78, 'B', '', 38, 'D', '', '2023-09-05 23:38:49', '2023-09-05 23:38:49'),
(34, 1, 1, 7, 1, 'E', '', 43, 'D', '', '2023-09-05 23:38:49', '2023-09-05 23:38:49'),
(35, 4, 4, 1, 89, 'A', 'Voluptate et atque s sangat baik dalam menulis, membaca, dan mendengar. Voluptate et atque s sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 66, 'B', 'Voluptate et atque s baik dalam menulis, membaca, dan mendengar. Voluptate et atque s baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-05 23:43:39', '2023-09-05 23:43:39'),
(36, 4, 4, 4, 47, 'D', '', 13, 'E', '', '2023-09-05 23:43:39', '2023-09-05 23:43:39'),
(37, 4, 4, 5, 81, 'B', '', 22, 'E', '', '2023-09-05 23:43:39', '2023-09-05 23:43:39'),
(38, 4, 4, 7, 97, 'A', '', 90, 'A', '', '2023-09-05 23:43:39', '2023-09-05 23:43:39'),
(39, 7, 3, 1, 51, 'C', 'Quo in consectetur cukup dalam menulis, membaca, dan mendengar. Quo in consectetur cukup dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 14, 'E', 'Quo in consectetur sangat kurang dalam menulis, membaca, dan mendengar. Quo in consectetur sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-05 23:47:46', '2023-09-05 23:47:46'),
(40, 7, 3, 4, 16, 'E', '', 34, 'D', '', '2023-09-05 23:47:46', '2023-09-05 23:47:46'),
(41, 7, 3, 5, 74, 'B', '', 10, 'E', '', '2023-09-05 23:47:46', '2023-09-05 23:47:46'),
(42, 7, 3, 7, 18, 'E', '', 7, 'E', '', '2023-09-05 23:47:46', '2023-09-05 23:47:46'),
(43, 11, 3, 1, 95, 'A', 'Quo in consectetur sangat baik dalam menulis, membaca, dan mendengar. Quo in consectetur sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 63, 'C', 'Quo in consectetur cukup dalam menulis, membaca, dan mendengar. Quo in consectetur cukup dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:07:19', '2023-09-06 03:07:19'),
(44, 11, 3, 4, 57, 'C', '', 42, 'D', '', '2023-09-06 03:07:19', '2023-09-06 03:07:19'),
(45, 11, 3, 5, 48, 'D', '', 46, 'D', '', '2023-09-06 03:07:19', '2023-09-06 03:07:19'),
(46, 11, 3, 7, 50, 'C', '', 4, 'E', '', '2023-09-06 03:07:19', '2023-09-06 03:07:19'),
(47, 12, 4, 1, 11, 'E', 'Voluptate et atque s sangat kurang dalam menulis, membaca, dan mendengar. Voluptate et atque s sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 74, 'B', 'Voluptate et atque s baik dalam menulis, membaca, dan mendengar. Voluptate et atque s baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:07:27', '2023-09-06 03:07:27'),
(48, 12, 4, 4, 40, 'D', '', 93, 'A', '', '2023-09-06 03:07:27', '2023-09-06 03:07:27'),
(49, 12, 4, 5, 45, 'D', '', 33, 'D', '', '2023-09-06 03:07:27', '2023-09-06 03:07:27'),
(50, 12, 4, 7, 69, 'B', '', 50, 'C', '', '2023-09-06 03:07:27', '2023-09-06 03:07:27'),
(51, 10, 2, 1, 44, 'D', 'Kang yayan kurang dalam  menulis, membaca, dan mendengar. Kang yayan kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', 77, 'B', 'Kang yayan baik dalam menulis, membaca, dan mendengar. Kang yayan baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:07:36', '2023-09-06 03:07:36'),
(52, 10, 2, 4, 36, 'D', '', 60, 'C', '', '2023-09-06 03:07:36', '2023-09-06 03:07:36'),
(53, 10, 2, 5, 86, 'A', '', 42, 'D', '', '2023-09-06 03:07:36', '2023-09-06 03:07:36'),
(54, 10, 2, 7, 80, 'B', '', 97, 'A', '', '2023-09-06 03:07:36', '2023-09-06 03:07:36'),
(55, 9, 1, 1, 95, 'A', 'Sunt qui blanditiis sangat baik dalam menulis, membaca, dan mendengar. Sunt qui blanditiis sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 81, 'B', 'Sunt qui blanditiis baik dalam menulis, membaca, dan mendengar. Sunt qui blanditiis baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:07:43', '2023-09-06 03:07:43'),
(56, 9, 1, 4, 19, 'E', '', 11, 'E', '', '2023-09-06 03:07:43', '2023-09-06 03:07:43'),
(57, 9, 1, 5, 4, 'E', '', 69, 'B', '', '2023-09-06 03:07:43', '2023-09-06 03:07:43'),
(58, 9, 1, 7, 75, 'B', '', 48, 'D', '', '2023-09-06 03:07:43', '2023-09-06 03:07:43'),
(59, 13, 1, 1, 2, 'E', 'Sunt qui blanditiis sangat kurang dalam menulis, membaca, dan mendengar. Sunt qui blanditiis sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 71, 'B', 'Sunt qui blanditiis baik dalam menulis, membaca, dan mendengar. Sunt qui blanditiis baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:58:09', '2023-09-06 03:58:09'),
(60, 13, 1, 4, 31, 'D', '', 85, 'A', '', '2023-09-06 03:58:09', '2023-09-06 03:58:09'),
(61, 13, 1, 5, 53, 'C', '', 26, 'E', '', '2023-09-06 03:58:09', '2023-09-06 03:58:09'),
(62, 13, 1, 7, 73, 'B', '', 73, 'B', '', '2023-09-06 03:58:09', '2023-09-06 03:58:09'),
(63, 14, 2, 1, 32, 'D', 'Kang yayan kurang dalam  menulis, membaca, dan mendengar. Kang yayan kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', 11, 'E', 'Kang yayan sangat kurang dalam menulis, membaca, dan mendengar. Kang yayan sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:58:33', '2023-09-06 03:58:33'),
(64, 14, 2, 4, 45, 'D', '', 79, 'B', '', '2023-09-06 03:58:33', '2023-09-06 03:58:33'),
(65, 14, 2, 5, 25, 'E', '', 20, 'E', '', '2023-09-06 03:58:33', '2023-09-06 03:58:33'),
(66, 14, 2, 7, 94, 'A', '', 0, 'E', '', '2023-09-06 03:58:33', '2023-09-06 03:58:33'),
(67, 15, 3, 1, 74, 'B', 'Quo in consectetur baik dalam menulis, membaca, dan mendengar. Quo in consectetur baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 79, 'B', 'Quo in consectetur baik dalam menulis, membaca, dan mendengar. Quo in consectetur baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:58:40', '2023-09-06 03:58:40'),
(68, 15, 3, 4, 0, 'E', '', 16, 'E', '', '2023-09-06 03:58:40', '2023-09-06 03:58:40'),
(69, 15, 3, 5, 3, 'E', '', 86, 'A', '', '2023-09-06 03:58:40', '2023-09-06 03:58:40'),
(70, 15, 3, 7, 51, 'C', '', 56, 'C', '', '2023-09-06 03:58:40', '2023-09-06 03:58:40'),
(71, 16, 4, 1, 79, 'B', 'Voluptate et atque s baik dalam menulis, membaca, dan mendengar. Voluptate et atque s baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 59, 'C', 'Voluptate et atque s cukup dalam menulis, membaca, dan mendengar. Voluptate et atque s cukup dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 03:58:47', '2023-09-06 03:58:47'),
(72, 16, 4, 4, 81, 'B', '', 47, 'D', '', '2023-09-06 03:58:47', '2023-09-06 03:58:47'),
(73, 16, 4, 5, 19, 'E', '', 54, 'C', '', '2023-09-06 03:58:47', '2023-09-06 03:58:47'),
(74, 16, 4, 7, 69, 'B', '', 69, 'B', '', '2023-09-06 03:58:47', '2023-09-06 03:58:47'),
(75, 26, 1, 1, 45, 'D', 'Sunt qui blanditiis kurang dalam  menulis, membaca, dan mendengar. Sunt qui blanditiis kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', 44, 'D', 'Sunt qui blanditiis kurang dalam  menulis, membaca, dan mendengar. Sunt qui blanditiis kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 04:34:09', '2023-09-06 04:34:09'),
(76, 26, 1, 4, 64, 'C', '', 72, 'B', '', '2023-09-06 04:34:09', '2023-09-06 04:34:09'),
(77, 26, 1, 5, 66, 'B', '', 85, 'A', '', '2023-09-06 04:34:09', '2023-09-06 04:34:09'),
(78, 26, 1, 7, 37, 'D', '', 81, 'B', '', '2023-09-06 04:34:09', '2023-09-06 04:34:09'),
(79, 27, 2, 1, 97, 'A', 'Kang yayan sangat baik dalam menulis, membaca, dan mendengar. Kang yayan sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 87, 'A', 'Kang yayan sangat baik dalam menulis, membaca, dan mendengar. Kang yayan sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 04:34:16', '2023-09-06 04:34:16'),
(80, 27, 2, 4, 43, 'D', '', 100, 'A', '', '2023-09-06 04:34:16', '2023-09-06 04:34:16'),
(81, 27, 2, 5, 70, 'B', '', 28, 'E', '', '2023-09-06 04:34:16', '2023-09-06 04:34:16'),
(82, 27, 2, 7, 94, 'A', '', 92, 'A', '', '2023-09-06 04:34:16', '2023-09-06 04:34:16'),
(83, 28, 3, 1, 45, 'D', 'Quo in consectetur kurang dalam  menulis, membaca, dan mendengar. Quo in consectetur kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', 87, 'A', 'Quo in consectetur sangat baik dalam menulis, membaca, dan mendengar. Quo in consectetur sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 04:34:22', '2023-09-06 04:34:22'),
(84, 28, 3, 4, 11, 'E', '', 55, 'C', '', '2023-09-06 04:34:22', '2023-09-06 04:34:22'),
(85, 28, 3, 5, 75, 'B', '', 27, 'E', '', '2023-09-06 04:34:22', '2023-09-06 04:34:22'),
(86, 28, 3, 7, 54, 'C', '', 21, 'E', '', '2023-09-06 04:34:22', '2023-09-06 04:34:22'),
(87, 29, 1, 1, 41, 'D', 'Sunt qui blanditiis kurang dalam  menulis, membaca, dan mendengar. Sunt qui blanditiis kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', 18, 'E', 'Sunt qui blanditiis sangat kurang dalam menulis, membaca, dan mendengar. Sunt qui blanditiis sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 04:36:28', '2023-09-06 04:36:28'),
(88, 29, 1, 4, 31, 'D', '', 84, 'B', '', '2023-09-06 04:36:28', '2023-09-06 04:36:28'),
(89, 29, 1, 5, 20, 'E', '', 33, 'D', '', '2023-09-06 04:36:28', '2023-09-06 04:36:28'),
(90, 29, 1, 7, 23, 'E', '', 88, 'A', '', '2023-09-06 04:36:28', '2023-09-06 04:36:28'),
(91, 30, 2, 1, 28, 'E', 'Kang yayan sangat kurang dalam menulis, membaca, dan mendengar. Kang yayan sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 69, 'B', 'Kang yayan baik dalam menulis, membaca, dan mendengar. Kang yayan baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 04:36:35', '2023-09-06 04:36:35'),
(92, 30, 2, 4, 60, 'C', '', 19, 'E', '', '2023-09-06 04:36:35', '2023-09-06 04:36:35'),
(93, 30, 2, 5, 20, 'E', '', 82, 'B', '', '2023-09-06 04:36:35', '2023-09-06 04:36:35'),
(94, 30, 2, 7, 0, 'E', '', 2, 'E', '', '2023-09-06 04:36:35', '2023-09-06 04:36:35'),
(95, 31, 3, 1, 12, 'E', 'Quo in consectetur sangat kurang dalam menulis, membaca, dan mendengar. Quo in consectetur sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 98, 'A', 'Quo in consectetur sangat baik dalam menulis, membaca, dan mendengar. Quo in consectetur sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 04:36:41', '2023-09-06 04:36:41'),
(96, 31, 3, 4, 57, 'C', '', 32, 'D', '', '2023-09-06 04:36:41', '2023-09-06 04:36:41'),
(97, 31, 3, 5, 100, 'A', '', 32, 'D', '', '2023-09-06 04:36:41', '2023-09-06 04:36:41'),
(98, 31, 3, 7, 100, 'A', '', 66, 'B', '', '2023-09-06 04:36:41', '2023-09-06 04:36:41'),
(99, 32, 4, 1, 30, 'D', 'Voluptate et atque s kurang dalam  menulis, membaca, dan mendengar. Voluptate et atque s kurang dalam  mengeksplor lingkungan sekitar rumah tempat tinggal. ', 23, 'E', 'Voluptate et atque s sangat kurang dalam menulis, membaca, dan mendengar. Voluptate et atque s sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 04:36:48', '2023-09-06 04:36:48'),
(100, 32, 4, 4, 39, 'D', '', 38, 'D', '', '2023-09-06 04:36:48', '2023-09-06 04:36:48'),
(101, 32, 4, 5, 100, 'A', '', 35, 'D', '', '2023-09-06 04:36:48', '2023-09-06 04:36:48'),
(102, 32, 4, 7, 88, 'A', '', 72, 'B', '', '2023-09-06 04:36:48', '2023-09-06 04:36:48'),
(103, 36, 1, 1, 90, 'A', 'Sunt qui blanditiis sangat baik dalam menulis, membaca, dan mendengar. Sunt qui blanditiis sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 8, 'E', 'Sunt qui blanditiis sangat kurang dalam menulis, membaca, dan mendengar. Sunt qui blanditiis sangat kurang dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 06:38:52', '2023-09-06 06:38:52'),
(104, 36, 1, 3, 53, 'C', '', 21, 'E', '', '2023-09-06 06:38:52', '2023-09-06 06:38:52'),
(105, 36, 1, 4, 31, 'D', '', 89, 'A', '', '2023-09-06 06:38:52', '2023-09-06 06:38:52'),
(106, 36, 1, 7, 10, 'E', '', 1, 'E', '', '2023-09-06 06:38:52', '2023-09-06 06:38:52'),
(107, 35, 3, 1, 96, 'A', 'Quo in consectetur sangat baik dalam menulis, membaca, dan mendengar. Quo in consectetur sangat baik dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', 53, 'C', 'Quo in consectetur cukup dalam menulis, membaca, dan mendengar. Quo in consectetur cukup dalam mengeksplor lingkungan sekitar rumah tempat tinggal. ', '2023-09-06 06:38:59', '2023-09-06 06:38:59'),
(108, 35, 3, 3, 57, 'C', '', 50, 'C', '', '2023-09-06 06:38:59', '2023-09-06 06:38:59'),
(109, 35, 3, 4, 62, 'C', '', 6, 'E', '', '2023-09-06 06:38:59', '2023-09-06 06:38:59'),
(110, 35, 3, 7, 42, 'D', '', 5, 'E', '', '2023-09-06 06:38:59', '2023-09-06 06:38:59');

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
  `id_transkrip` int NOT NULL,
  `sikap_spiritual` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sikap_sosial` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eskul1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi_eskul1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eskul2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi_eskul2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `eskul3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi_eskul3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `saran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tinggi_badan` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `berat_badan` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pendengaran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `penglihatan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `gigi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prestasi1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ket_pres1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prestasi2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ket_pres2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sakit` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `izin` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanpa_ket` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `raport`
--

INSERT INTO `raport` (`idraport`, `id_transkrip`, `sikap_spiritual`, `sikap_sosial`, `eskul1`, `deskripsi_eskul1`, `eskul2`, `deskripsi_eskul2`, `eskul3`, `deskripsi_eskul3`, `saran`, `tinggi_badan`, `berat_badan`, `pendengaran`, `penglihatan`, `gigi`, `prestasi1`, `ket_pres1`, `prestasi2`, `ket_pres2`, `sakit`, `izin`, `tanpa_ket`, `updated_at`, `created_at`) VALUES
(1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-05 14:28:52', '2023-09-05 14:28:52'),
(2, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-05 14:29:16', '2023-09-05 14:29:16'),
(3, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-06 12:28:46', '2023-09-06 12:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `sistem`
--

CREATE TABLE `sistem` (
  `id` int NOT NULL,
  `id_ta` int NOT NULL,
  `semester` int NOT NULL,
  `pred_a` int NOT NULL,
  `pred_b` int NOT NULL,
  `pred_c` int NOT NULL,
  `pred_d` int NOT NULL,
  `pred_e` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sistem`
--

INSERT INTO `sistem` (`id`, `id_ta`, `semester`, `pred_a`, `pred_b`, `pred_c`, `pred_d`, `pred_e`) VALUES
(1, 41, 1, 85, 65, 50, 30, 0);

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
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `idkelas`, `nama_siswa`, `no_induk`, `nis`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `anak_ke`, `alamat_siswa`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `jalan`, `kelurahan_desa`, `kecamatan_kota`, `kabupaten_kota`, `provinsi`, `nama_wali`, `pekerjaan_wali`, `alamat_wali`, `updated_at`, `created_at`) VALUES
(1, 15, 'Sunt qui blanditiis', '9', '27', 'Pariatur Modi aliqu', '1980-05-04', 'L', 'Est a esse qui qui', 36, 'Laboriosam quis sit', 'Magna consequatur es', 'Eveniet nemo a volu', 'Consequuntur sunt ex', 'Magnam eum mollit do', 'Sint officia id eli', 'Pariatur Vitae non', 'Excepteur ad consequ', 'Sint corporis nisi', 'Iusto voluptatem min', NULL, NULL, NULL, '2023-09-05 07:27:47', '2023-09-05 07:27:47'),
(2, 12, 'Kang yayan', '13', '14', 'Consequat Quia occa', '2023-01-06', 'P', 'In eu consequat Rat', 16, 'Officia sunt pariatu', 'Veniam qui inventor', 'Est aliqua Laboris', 'Dicta laboriosam ve', 'In quibusdam proiden', 'Architecto est qui q', 'Et odit nostrud proi', 'Fugiat eum dolor vel', 'Id sit repudiandae', 'Quidem fugit mollit', NULL, NULL, NULL, '2023-09-05 07:28:17', '2023-09-05 07:28:17'),
(3, 15, 'Quo in consectetur', '86', '73', 'Sit at recusandae I', '1987-05-12', 'P', 'Voluptatem quos repr', 92, 'Dolore porro consequ', 'Illum quis recusand', 'Reiciendis dignissim', 'In magna cillum nisi', 'Est praesentium con', 'Accusantium vero con', 'Aut dolor vel eos qu', 'Pariatur Eligendi i', 'Commodo voluptate co', 'Magni ullamco et qui', NULL, NULL, NULL, '2023-09-05 07:28:52', '2023-09-05 07:28:52'),
(4, 7, 'Voluptate et atque s', '7', '47', 'Mollit impedit nece', '1977-10-18', 'L', 'Porro sunt sed beat', 82, 'Fugiat nihil ea exe', 'Irure saepe minus do', 'Nemo sed modi laboru', 'Est voluptates dolor', 'Sit nisi exercitati', 'Neque enim tenetur m', 'Quia sed molestias n', 'Recusandae Cupidata', 'Commodo dolore solut', 'In sint qui earum ma', NULL, NULL, NULL, '2023-09-05 07:29:15', '2023-09-05 07:29:15'),
(5, 16, 'Dasman', '89', '22', 'Sunt debitis quis au', '1993-11-10', 'P', 'Et voluptatem Offic', 32, 'Blanditiis reprehend', 'Sit minus reprehend', 'Aut aspernatur magni', 'Nam quaerat accusant', 'Iste dolore ut animi', 'Est deleniti incidid', 'Aut ex culpa est an', 'Dicta labore quis ex', 'Quaerat minima et et', 'Facilis tenetur null', NULL, NULL, NULL, '2023-09-06 05:30:30', '2023-09-06 05:28:46');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE `tahun_ajaran` (
  `id_ta` int NOT NULL,
  `ta_awal` year NOT NULL,
  `ta_akhir` year NOT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_ta`, `ta_awal`, `ta_akhir`, `status`, `created_at`, `updated_at`) VALUES
(1, 2021, 2022, 0, '2023-09-03 05:37:39', '2023-09-03 05:37:39'),
(2, 2022, 2023, 0, '2023-09-03 05:37:39', '2023-09-03 05:37:39'),
(37, 2023, 2024, 0, '2023-09-05 22:39:21', '2023-09-05 22:39:21'),
(38, 2024, 2025, 0, '2023-09-05 23:55:07', '2023-09-05 23:55:07'),
(39, 2025, 2026, 0, '2023-09-06 03:22:54', '2023-09-06 03:22:54'),
(40, 2027, 2028, 0, '2023-09-06 04:29:22', '2023-09-06 04:29:22'),
(41, 2028, 2029, 1, '2023-09-06 04:37:10', '2023-09-06 04:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `transkrip`
--

CREATE TABLE `transkrip` (
  `id_transkrip` int NOT NULL,
  `id_ta` int NOT NULL,
  `idsiswa` int NOT NULL,
  `kelas` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `semester` int NOT NULL DEFAULT '1',
  `status` int NOT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transkrip`
--

INSERT INTO `transkrip` (`id_transkrip`, `id_ta`, `idsiswa`, `kelas`, `semester`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1, 0, NULL, '2023-09-05 14:27:47', '2023-09-05 14:27:47'),
(2, 1, 2, NULL, 1, 0, NULL, '2023-09-05 14:28:17', '2023-09-05 14:28:17'),
(3, 1, 3, NULL, 1, 0, NULL, '2023-09-05 14:28:52', '2023-09-05 14:28:52'),
(4, 1, 4, NULL, 1, 0, NULL, '2023-09-05 14:29:15', '2023-09-05 14:29:15'),
(5, 37, 1, NULL, 2, 0, NULL, '2023-09-06 06:38:31', '2023-09-06 06:38:31'),
(6, 37, 2, NULL, 2, 0, NULL, '2023-09-06 06:38:31', '2023-09-06 06:38:31'),
(7, 37, 3, NULL, 2, 0, NULL, '2023-09-06 06:38:31', '2023-09-06 06:38:31'),
(8, 37, 4, NULL, 2, 0, NULL, '2023-09-06 06:38:31', '2023-09-06 06:38:31'),
(9, 38, 1, NULL, 2, 1, NULL, '2023-09-06 10:03:01', '2023-09-06 10:03:01'),
(10, 38, 2, NULL, 2, 1, NULL, '2023-09-06 10:03:01', '2023-09-06 10:03:01'),
(11, 38, 3, NULL, 2, 1, NULL, '2023-09-06 10:03:01', '2023-09-06 10:03:01'),
(12, 38, 4, NULL, 2, 1, NULL, '2023-09-06 10:03:01', '2023-09-06 10:03:01'),
(13, 39, 1, '6B', 2, 1, NULL, '2023-09-06 10:57:57', '2023-09-06 10:57:57'),
(14, 39, 2, '3A', 2, 1, NULL, '2023-09-06 10:57:57', '2023-09-06 10:57:57'),
(15, 39, 3, '5A', 2, 1, NULL, '2023-09-06 10:57:57', '2023-09-06 10:57:57'),
(16, 39, 4, '6A', 2, 1, NULL, '2023-09-06 10:57:57', '2023-09-06 10:57:57'),
(26, 40, 1, '5A', 1, 0, NULL, '2023-09-06 11:33:55', '2023-09-06 11:33:55'),
(27, 40, 2, '5A', 1, 1, NULL, '2023-09-06 11:33:55', '2023-09-06 11:33:55'),
(28, 40, 3, '5A', 1, 1, NULL, '2023-09-06 11:33:55', '2023-09-06 11:33:55'),
(29, 40, 1, '5A', 2, 1, NULL, '2023-09-06 11:34:27', '2023-09-06 11:34:27'),
(30, 40, 2, '5A', 2, 1, NULL, '2023-09-06 11:34:27', '2023-09-06 11:34:27'),
(31, 40, 3, '5A', 2, 1, NULL, '2023-09-06 11:34:27', '2023-09-06 11:34:27'),
(32, 40, 4, '6A', 2, 1, NULL, '2023-09-06 11:34:27', '2023-09-06 11:34:27'),
(33, 41, 1, '1A', 1, 1, NULL, '2023-09-06 11:45:11', '2023-09-06 11:45:11'),
(34, 41, 2, '1A', 1, 1, NULL, '2023-09-06 11:45:11', '2023-09-06 11:45:11'),
(35, 41, 3, '3A', 1, 1, NULL, '2023-09-06 11:45:11', '2023-09-06 11:45:11'),
(36, 41, 1, '3A', 1, 1, NULL, '2023-09-06 11:45:49', '2023-09-06 11:45:49'),
(37, 41, 3, '2A', 1, 1, NULL, '2023-09-06 11:45:49', '2023-09-06 11:45:49'),
(38, 41, 1, '3A', 1, 1, NULL, '2023-09-06 11:47:38', '2023-09-06 11:47:38'),
(39, 41, 2, '2A', 1, 0, NULL, '2023-09-06 11:47:38', '2023-09-06 11:47:38'),
(40, 41, 3, '3A', 1, 1, NULL, '2023-09-06 11:47:38', '2023-09-06 11:47:38'),
(41, 41, 5, NULL, 1, 1, NULL, '2023-09-06 12:28:46', '2023-09-06 12:28:46');

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
  `role` tinyint NOT NULL COMMENT '0=siswa;1=admin;2=walas;3=guru mapel',
  `id_join` int NOT NULL DEFAULT '0',
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `id_join`, `foto`, `created_at`, `updated_at`) VALUES
(5, 'Administrator', 'admin@mail.com', NULL, '$2y$10$o2f/TY0q7.5DBVAmhirDEugQY6GJbt1elzWDlI25FYaj2Ng0yiIAa', NULL, 1, 0, '1693975961.jpg', '2023-08-08 02:33:20', '2023-08-08 02:33:20'),
(6, 'Sri Ningtyas', 'walas@mail.com', NULL, '$2y$10$jINLYCfPZj8hSo4CPLsJJun9ji5S8qDp9dGWWbqj.6119k5OdIuMK', NULL, 2, 7, NULL, '2023-08-08 02:33:20', '2023-08-08 02:33:20'),
(15, 'tutiskom mpdi', 'tuti@mail.com', NULL, '$2y$10$INE0aBt6jx01geWgIq93gOjjmscEkg6svlQlhjOIx7hQ.WyOu08gK', NULL, 3, 2, NULL, '2023-09-02 21:06:39', '2023-09-02 21:06:39'),
(16, 'vgfghf', 'vgaga@mail.com', NULL, '$2y$10$4Mv1hagAaxodDXtu0XKS8e988vDxuCVOvKq9XfP.ZI30oHFVvrneK', NULL, 3, 4, NULL, '2023-09-02 22:21:16', '2023-09-02 22:21:16'),
(27, 'Sunt qui blanditiis', '27@stambuk.com', NULL, '$2y$10$5gMjHx2IAa71DL4HgyHOv.kFiDK6f0pl1CT1A6APyXRzLmyWv20f.', NULL, 0, 1, NULL, '2023-09-05 00:27:48', '2023-09-05 00:27:48'),
(28, 'Error in commodo sun', '14@stambuk.com', NULL, '$2y$10$Av8wcBf5pmzyQlJbr.rDV.Cb2PJE8sNvDyDNF4NbXcKEz0DFL6YRG', NULL, 0, 2, NULL, '2023-09-05 00:28:17', '2023-09-05 00:28:17'),
(29, 'Quo in consectetur', '73@stambuk.com', NULL, '$2y$10$Mu3EJYYX5iFUiXN.mVXdTuaUIaMFkLE1K3.bTNv0NQZky5HA6e9cq', NULL, 0, 3, NULL, '2023-09-05 00:28:52', '2023-09-05 00:28:52'),
(30, 'Voluptate et atque s', '47@stambuk.com', NULL, '$2y$10$x4GhouqEk29WO9SWkjj8Uu2g0HXAEtj.RqGgRYKOzEYCdSqXP9diS', NULL, 0, 4, NULL, '2023-09-05 00:29:16', '2023-09-05 00:29:16'),
(31, 'Quo nulla officia ne', '22@stambuk.com', NULL, '$2y$10$AituvrJciTPjyYtTfo./d.zK8hy5aP0GfcZdYELKnToMEjyMR3Kdm', NULL, 0, 5, NULL, '2023-09-05 22:28:46', '2023-09-05 22:28:46');

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
-- Indexes for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  ADD PRIMARY KEY (`id_gurumapel`);

--
-- Indexes for table `history_nilai`
--
ALTER TABLE `history_nilai`
  ADD PRIMARY KEY (`id_history`);

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
-- Indexes for table `sistem`
--
ALTER TABLE `sistem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`),
  ADD KEY `idkelas` (`idkelas`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_ta`);

--
-- Indexes for table `transkrip`
--
ALTER TABLE `transkrip`
  ADD PRIMARY KEY (`id_transkrip`);

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
-- AUTO_INCREMENT for table `guru_mapel`
--
ALTER TABLE `guru_mapel`
  MODIFY `id_gurumapel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history_nilai`
--
ALTER TABLE `history_nilai`
  MODIFY `id_history` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `idkelas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kriteria_nilai`
--
ALTER TABLE `kriteria_nilai`
  MODIFY `idkriteria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idmapel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predikat`
--
ALTER TABLE `predikat`
  MODIFY `id_sistem` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `raport`
--
ALTER TABLE `raport`
  MODIFY `idraport` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sistem`
--
ALTER TABLE `sistem`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_ta` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `transkrip`
--
ALTER TABLE `transkrip`
  MODIFY `id_transkrip` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`idmapel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`idkelas`) REFERENCES `kelas` (`idkelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
