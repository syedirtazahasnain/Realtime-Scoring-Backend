-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2025 at 10:00 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realtime_scoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `batting_scores`
--

CREATE TABLE `batting_scores` (
  `id` bigint UNSIGNED NOT NULL,
  `inning_id` bigint UNSIGNED DEFAULT NULL,
  `player_id` bigint UNSIGNED DEFAULT NULL,
  `runs` int NOT NULL DEFAULT '0',
  `balls_faced` int NOT NULL DEFAULT '0',
  `fours` int NOT NULL DEFAULT '0',
  `sixes` int NOT NULL DEFAULT '0',
  `strike_rate` double NOT NULL DEFAULT '0',
  `how_out` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bowler_id` bigint UNSIGNED DEFAULT NULL,
  `fielder_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batting_scores`
--

INSERT INTO `batting_scores` (`id`, `inning_id`, `player_id`, `runs`, `balls_faced`, `fours`, `sixes`, `strike_rate`, `how_out`, `bowler_id`, `fielder_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 15, 42, 54, 3, 7, 198.19, 'bowled', 12, 21, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(2, 1, 10, 99, 42, 15, 1, 101.69, 'not out', 10, 22, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(3, 1, 12, 66, 39, 15, 1, 167.29, 'run out', 12, 23, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(4, 2, 5, 7, 55, 9, 0, 172.42, 'run out', 10, 24, '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(5, 2, 14, 140, 82, 7, 7, 74.33, 'bowled', 10, 25, '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(6, 2, 12, 5, 72, 6, 1, 151.19, 'bowled', 10, 26, '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(7, 2, 15, 80, 112, 10, 4, 145.11, 'caught', 12, 27, '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(8, 2, 10, 12, 25, 8, 5, 168.85, 'caught', 10, 28, '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(9, 2, 11, 46, 9, 0, 1, 101.67, 'bowled', 12, 29, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(10, 3, 15, 30, 26, 4, 1, 146.05, 'bowled', 10, 30, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(11, 3, 11, 11, 77, 10, 3, 197.48, 'caught', 11, 31, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(12, 3, 12, 91, 68, 3, 4, 175.64, 'not out', 11, 32, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(13, 3, 14, 25, 45, 14, 5, 58.47, 'bowled', 11, 33, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(14, 3, 5, 39, 84, 11, 4, 120.08, 'run out', 11, 34, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(15, 3, 10, 66, 100, 5, 7, 63.02, 'not out', 11, 35, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(16, 4, 10, 25, 7, 9, 2, 54.11, 'run out', 10, 36, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(17, 4, 11, 115, 53, 1, 8, 55.33, 'run out', 5, 37, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(18, 4, 15, 137, 60, 10, 2, 99.61, 'lbw', 15, 38, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(19, 4, 12, 32, 55, 4, 7, 132.01, 'caught', 14, 39, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(20, 4, 5, 4, 102, 6, 6, 121.25, 'not out', 12, 40, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(21, 5, 10, 38, 10, 4, 6, 154.68, 'caught', 10, 41, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(22, 5, 15, 72, 19, 13, 7, 93.32, 'run out', 15, 42, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(23, 5, 11, 138, 76, 6, 5, 100.8, 'caught', 15, 43, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(24, 5, 5, 107, 86, 15, 0, 177.1, 'caught', 5, 44, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(25, 6, 10, 141, 112, 8, 8, 109.13, 'caught', 15, 45, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(26, 6, 15, 100, 63, 2, 0, 50.2, 'lbw', 10, 46, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(27, 6, 11, 113, 40, 15, 8, 91.2, 'bowled', 10, 47, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(28, 6, 5, 109, 52, 5, 6, 177.29, 'not out', 10, 48, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(29, 7, 5, 13, 104, 0, 2, 64.97, 'caught', 11, 49, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(30, 7, 14, 132, 48, 14, 5, 99.06, 'bowled', 10, 50, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(31, 7, 12, 32, 36, 5, 6, 159.45, 'lbw', 15, 51, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(32, 7, 15, 29, 120, 5, 1, 190.07, 'caught', 15, 52, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(33, 7, 10, 66, 109, 9, 5, 137.25, 'bowled', 15, 53, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(34, 7, 11, 85, 64, 10, 8, 141.45, 'bowled', 10, 54, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(35, 8, 15, 130, 59, 5, 0, 58.45, 'bowled', 15, 55, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(36, 8, 11, 57, 39, 0, 0, 190.21, 'bowled', 12, 56, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(37, 8, 10, 63, 0, 9, 7, 93.65, 'lbw', 11, 57, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(38, 9, 15, 143, 54, 5, 8, 111.15, 'caught', 10, 58, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(39, 9, 10, 138, 71, 2, 2, 107.52, 'not out', 11, 59, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(40, 9, 12, 73, 13, 4, 8, 132.33, 'not out', 5, 60, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(41, 10, 15, 61, 22, 9, 2, 91.32, 'run out', 12, 61, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(42, 10, 11, 130, 33, 1, 8, 146.16, 'not out', 10, 62, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(43, 10, 12, 6, 14, 11, 2, 184.72, 'lbw', 15, 63, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(44, 10, 14, 49, 3, 11, 2, 93.37, 'caught', 15, 64, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(45, 10, 5, 132, 101, 11, 4, 149.69, 'run out', 12, 65, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(46, 10, 10, 92, 107, 15, 8, 69.02, 'bowled', 12, 66, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(47, 11, 15, 111, 112, 10, 2, 93.46, 'run out', 14, 67, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(48, 11, 12, 22, 86, 7, 3, 131.42, 'bowled', 11, 68, '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(49, 11, 11, 50, 19, 6, 5, 148.68, 'bowled', 14, 69, '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(50, 11, 10, 93, 33, 12, 3, 122.54, 'caught', 11, 70, '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(51, 11, 5, 93, 71, 11, 5, 107.76, 'caught', 15, 71, '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(52, 11, 14, 6, 106, 12, 1, 127.26, 'bowled', 12, 72, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(53, 12, 15, 78, 1, 3, 3, 167.46, 'bowled', 10, 73, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(54, 12, 12, 12, 116, 7, 3, 128.71, 'caught', 15, 74, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(55, 12, 11, 58, 27, 14, 4, 174.2, 'bowled', 10, 75, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(56, 12, 10, 124, 15, 6, 0, 72.98, 'lbw', 14, 76, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(57, 12, 5, 49, 20, 9, 7, 150.73, 'caught', 14, 77, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(58, 12, 14, 69, 78, 14, 7, 107.09, 'not out', 12, 78, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scripts` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `thumbnail`, `scripts`, `content`, `published_at`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Wolve Winning Celeberation', 'wolve-winning-celeberation', 'blog-thumbnails/SbR5G3UDL45Mxmgn1AbpO4OFvz64fNjft8iIdOmn.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop published.', '2025-06-12 16:42:00', '2025-06-03 11:42:36', '2025-06-03 14:07:59', NULL),
(2, 'Strikers Winning Celeberation', 'strikers-winning-celeberation', 'blog-thumbnails/C7yxDDInoRnVmSL30gebz1QAWOIe0G7MD22ah5oS.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop published.', '2025-06-12 16:42:00', '2025-06-03 11:42:36', '2025-06-03 14:07:43', NULL),
(3, 'Scotchers Winning Celeberation', 'scotchers-winning-celeberation', 'blog-thumbnails/5q4AU82GZtebg9rOQ9rBFItXPDUkqSZbzzppMDzb.png', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop published.', '2025-06-12 16:42:00', '2025-06-03 11:42:36', '2025-06-03 14:07:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bowling_figures`
--

CREATE TABLE `bowling_figures` (
  `id` bigint UNSIGNED NOT NULL,
  `inning_id` bigint UNSIGNED DEFAULT NULL,
  `player_id` bigint UNSIGNED DEFAULT NULL,
  `overs` double NOT NULL DEFAULT '0',
  `maidens` int NOT NULL DEFAULT '0',
  `runs` int NOT NULL DEFAULT '0',
  `wickets` int NOT NULL DEFAULT '0',
  `wides` int NOT NULL DEFAULT '0',
  `no_balls` int NOT NULL DEFAULT '0',
  `economy` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bowling_figures`
--

INSERT INTO `bowling_figures` (`id`, `inning_id`, `player_id`, `overs`, `maidens`, `runs`, `wickets`, `wides`, `no_balls`, `economy`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 3.5, 4, 26, 4, 2, 0, 8.59, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(2, 1, 14, 9.2, 1, 58, 1, 6, 2, 8.46, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(3, 1, 12, 2, 3, 34, 0, 5, 3, 5.64, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(4, 1, 15, 7.6, 2, 57, 3, 0, 2, 7.13, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(5, 1, 10, 6.4, 1, 32, 1, 1, 2, 3.08, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(6, 1, 11, 3.5, 0, 30, 3, 8, 2, 8.24, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(7, 2, 15, 9.6, 5, 51, 3, 4, 1, 5.67, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(8, 2, 10, 1.4, 2, 38, 5, 6, 3, 8.52, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(9, 2, 12, 2.7, 3, 27, 3, 7, 0, 3.64, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(10, 3, 10, 2.8, 4, 21, 3, 2, 1, 3.88, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(11, 3, 11, 6.7, 3, 42, 0, 7, 2, 6.64, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(12, 3, 15, 6.9, 2, 55, 1, 3, 1, 4.02, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(13, 3, 12, 6.2, 4, 52, 5, 4, 2, 4.37, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(14, 3, 5, 4.7, 2, 60, 4, 5, 1, 3.19, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(15, 4, 15, 5.4, 2, 46, 4, 7, 2, 7.24, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(16, 4, 11, 5.1, 2, 32, 5, 7, 1, 3.23, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(17, 4, 12, 5.6, 1, 32, 0, 1, 2, 6.55, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(18, 4, 14, 8.7, 4, 59, 2, 4, 0, 3.11, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(19, 4, 5, 3.3, 0, 38, 3, 5, 0, 8.22, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(20, 4, 10, 9.4, 2, 33, 4, 0, 0, 7.65, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(21, 5, 10, 7.2, 0, 58, 4, 6, 3, 8.53, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(22, 5, 15, 9, 5, 22, 0, 4, 3, 4.51, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(23, 5, 11, 1.4, 5, 42, 5, 8, 1, 7.74, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(24, 5, 5, 7, 5, 32, 3, 1, 2, 3.67, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(25, 6, 10, 6.4, 4, 26, 4, 0, 1, 5.91, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(26, 6, 15, 3.6, 3, 33, 5, 0, 0, 3.95, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(27, 6, 11, 7.8, 4, 22, 5, 0, 3, 3.07, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(28, 6, 5, 5.5, 3, 29, 0, 1, 1, 7.1, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(29, 7, 15, 1.8, 1, 22, 0, 4, 1, 5.05, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(30, 7, 11, 2.6, 3, 46, 1, 8, 0, 3.05, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(31, 7, 10, 8.3, 5, 26, 2, 7, 0, 6.11, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(32, 8, 5, 6.6, 4, 25, 0, 7, 2, 4.79, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(33, 8, 14, 3.7, 0, 44, 5, 0, 0, 5.01, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(34, 8, 12, 6.9, 1, 55, 4, 2, 1, 8.59, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(35, 8, 15, 2.2, 3, 30, 4, 1, 3, 4.34, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(36, 8, 10, 7.9, 3, 24, 4, 7, 3, 8.77, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(37, 8, 11, 5.4, 0, 43, 3, 5, 1, 7.81, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(38, 9, 15, 6, 5, 47, 1, 4, 2, 5.73, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(39, 9, 11, 7, 2, 43, 1, 3, 1, 4.51, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(40, 9, 12, 9.9, 1, 60, 2, 7, 0, 7.35, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(41, 9, 14, 6.4, 2, 60, 1, 6, 2, 6.22, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(42, 9, 5, 2.1, 1, 42, 4, 1, 1, 8.89, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(43, 9, 10, 3.2, 4, 42, 0, 7, 2, 3.15, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(44, 10, 15, 3.5, 5, 45, 0, 1, 1, 7.75, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(45, 10, 10, 8.4, 4, 51, 1, 3, 2, 3.52, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(46, 10, 12, 3.2, 1, 33, 2, 3, 3, 6.9, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(47, 11, 15, 8.2, 5, 52, 2, 2, 3, 7.48, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(48, 11, 12, 3.9, 4, 32, 5, 0, 2, 7.84, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(49, 11, 11, 3.3, 2, 52, 1, 7, 2, 4.4, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(50, 11, 10, 5.6, 5, 26, 3, 5, 1, 8.61, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(51, 11, 5, 1.4, 2, 50, 1, 2, 3, 7.73, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(52, 11, 14, 9.7, 1, 20, 5, 1, 1, 8.82, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(53, 12, 15, 9.6, 0, 22, 2, 7, 1, 4.54, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(54, 12, 12, 9.2, 4, 46, 2, 5, 1, 7.12, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(55, 12, 11, 8.9, 3, 48, 3, 7, 1, 4.52, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(56, 12, 10, 4.2, 4, 51, 3, 4, 1, 7.96, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(57, 12, 5, 5.3, 2, 51, 3, 0, 3, 8.06, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(58, 12, 14, 1.9, 5, 41, 5, 5, 0, 5.99, '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('reatime_scoring_cache_admin@test.com|127.0.0.1', 'i:1;', 1751485409),
('reatime_scoring_cache_admin@test.com|127.0.0.1:timer', 'i:1751485408;', 1751485408);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `d_o_j` date DEFAULT NULL,
  `age` int DEFAULT NULL,
  `city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `user_id`, `phone`, `picture`, `address`, `d_o_j`, `age`, `city`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2025-05-29 13:02:29', '2025-05-29 13:02:29', NULL),
(2, 3, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2025-05-29 13:02:35', '2025-05-29 13:02:35', NULL),
(3, 17, '03313115', NULL, 'Islamabad', '2025-05-15', 23, 'Islamabad', '1', '2025-05-29 14:06:55', '2025-05-29 14:06:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `draft_orders`
--

CREATE TABLE `draft_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `draft_pool_id` bigint UNSIGNED DEFAULT NULL,
  `team_id` bigint UNSIGNED DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `draft_pools`
--

CREATE TABLE `draft_pools` (
  `id` bigint UNSIGNED NOT NULL,
  `tournament_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` enum('pending','active','completed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `draft_pool_players`
--

CREATE TABLE `draft_pool_players` (
  `id` bigint UNSIGNED NOT NULL,
  `draft_pool_id` bigint UNSIGNED DEFAULT NULL,
  `player_id` bigint UNSIGNED DEFAULT NULL,
  `category` enum('Diamond','Gold','Silver','Platinum','Emerging') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Emerging',
  `is_drafted` tinyint(1) NOT NULL DEFAULT '0',
  `team_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `picture`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'B', NULL, 1, '2025-05-29 15:41:03', '2025-05-29 15:42:12', NULL),
(2, 'A', NULL, 1, '2025-05-29 15:41:45', '2025-05-29 15:41:58', '2025-05-29 15:41:58'),
(3, 'A', NULL, 1, '2025-05-30 10:55:58', '2025-05-30 10:55:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `innings`
--

CREATE TABLE `innings` (
  `id` bigint UNSIGNED NOT NULL,
  `match_id` bigint UNSIGNED DEFAULT NULL,
  `batting_team_id` bigint UNSIGNED DEFAULT NULL,
  `bowling_team_id` bigint UNSIGNED DEFAULT NULL,
  `innings_number` enum('1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_runs` int NOT NULL DEFAULT '0',
  `wickets` int NOT NULL DEFAULT '0',
  `overs` double NOT NULL DEFAULT '0',
  `extras` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `innings`
--

INSERT INTO `innings` (`id`, `match_id`, `batting_team_id`, `bowling_team_id`, `innings_number`, `total_runs`, `wickets`, `overs`, `extras`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 4, 3, 9, '1', 180, 3, 34, '{\"wides\":3,\"no_balls\":0,\"byes\":3,\"leg_byes\":1}', '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(2, 4, 9, 3, '2', 238, 4, 36, '{\"wides\":15,\"no_balls\":1,\"byes\":5,\"leg_byes\":8}', '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(3, 6, 1, 7, '1', 340, 4, 40, '{\"wides\":11,\"no_balls\":4,\"byes\":4,\"leg_byes\":5}', '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(4, 6, 7, 1, '2', 322, 5, 28, '{\"wides\":3,\"no_balls\":5,\"byes\":6,\"leg_byes\":2}', '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(5, 9, 8, 8, '1', 338, 6, 22, '{\"wides\":6,\"no_balls\":2,\"byes\":2,\"leg_byes\":6}', '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(6, 9, 8, 8, '2', 252, 7, 24, '{\"wides\":9,\"no_balls\":3,\"byes\":3,\"leg_byes\":2}', '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(7, 16, 9, 2, '1', 272, 6, 37, '{\"wides\":8,\"no_balls\":2,\"byes\":7,\"leg_byes\":7}', '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(8, 16, 2, 9, '2', 343, 6, 20, '{\"wides\":6,\"no_balls\":0,\"byes\":3,\"leg_byes\":1}', '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(9, 17, 3, 1, '1', 182, 10, 43, '{\"wides\":4,\"no_balls\":4,\"byes\":7,\"leg_byes\":6}', '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(10, 17, 1, 3, '2', 137, 8, 43, '{\"wides\":3,\"no_balls\":2,\"byes\":9,\"leg_byes\":1}', '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(11, 20, 5, 5, '1', 197, 10, 21, '{\"wides\":9,\"no_balls\":0,\"byes\":0,\"leg_byes\":2}', '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(12, 20, 5, 5, '2', 166, 3, 44, '{\"wides\":11,\"no_balls\":4,\"byes\":4,\"leg_byes\":4}', '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` bigint UNSIGNED NOT NULL,
  `tournament_id` bigint UNSIGNED DEFAULT NULL,
  `team1_id` bigint UNSIGNED DEFAULT NULL,
  `team2_id` bigint UNSIGNED DEFAULT NULL,
  `match_date` datetime DEFAULT NULL,
  `venue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('upcoming','ongoing','completed','cancelled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toss_winner_id` bigint UNSIGNED DEFAULT NULL,
  `toss_decision` enum('bat','field') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winner_id` bigint UNSIGNED DEFAULT NULL,
  `team1_score` int DEFAULT NULL,
  `team1_wickets` int DEFAULT NULL,
  `team1_overs` double DEFAULT NULL,
  `team2_score` int DEFAULT NULL,
  `team2_wickets` int DEFAULT NULL,
  `team2_overs` double DEFAULT NULL,
  `result` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `man_of_the_match_id` bigint UNSIGNED DEFAULT NULL,
  `summary` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `tournament_id`, `team1_id`, `team2_id`, `match_date`, `venue`, `status`, `toss_winner_id`, `toss_decision`, `winner_id`, `team1_score`, `team1_wickets`, `team1_overs`, `team2_score`, `team2_wickets`, `team2_overs`, `result`, `man_of_the_match_id`, `summary`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 5, '2026-02-15 21:56:27', 'Kirahaven Cricket Ground', 'upcoming', 12, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(2, 2, 6, 10, '2026-01-18 20:16:36', 'Rowehaven Cricket Ground', 'upcoming', 14, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(3, 5, 2, 10, '2025-08-14 15:30:08', 'North Deion Cricket Ground', 'upcoming', 15, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(4, 3, 3, 9, '2025-09-20 09:42:33', 'Eleonoretown Cricket Ground', 'completed', 9, 'bat', 9, 180, 3, 34, 238, 4, 36, 'Team 2 won by 6 wickets', 12, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:04', NULL),
(5, 1, 4, 2, '2025-12-24 18:09:54', 'Moorehaven Cricket Ground', 'upcoming', 19, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(6, 3, 1, 7, '2026-03-22 11:46:40', 'Hildachester Cricket Ground', 'completed', 1, 'field', 7, 340, 4, 40, 322, 5, 28, 'Team 1 won by 18 runs', 15, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:06', NULL),
(7, 3, 3, 4, '2026-04-08 05:34:50', 'Carterland Cricket Ground', 'upcoming', 24, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(8, 4, 7, 10, '2025-10-27 03:28:01', 'Elizabethchester Cricket Ground', 'upcoming', 25, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(9, 3, 8, 8, '2025-09-08 05:55:15', 'Lake Hellenshire Cricket Ground', 'completed', 8, 'bat', 8, 338, 6, 22, 252, 7, 24, 'Team 1 won by 86 runs', 10, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:08', NULL),
(10, 2, 3, 3, '2025-11-24 22:36:32', 'Kayceehaven Cricket Ground', 'upcoming', 29, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(11, 3, 5, 7, '2025-08-25 03:37:05', 'South Ubaldo Cricket Ground', 'upcoming', 32, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(12, 1, 9, 4, '2025-08-29 03:58:38', 'West Adambury Cricket Ground', 'upcoming', 34, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(13, 1, 1, 9, '2025-07-06 10:38:29', 'Uptonburgh Cricket Ground', 'upcoming', 35, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(14, 5, 2, 5, '2025-06-29 12:58:09', 'East Lisettefurt Cricket Ground', 'ongoing', 37, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(15, 4, 7, 2, '2025-11-15 13:49:43', 'East Majorburgh Cricket Ground', 'upcoming', 40, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(16, 1, 9, 2, '2026-02-18 08:44:31', 'Rueckerfurt Cricket Ground', 'completed', 2, 'bat', 9, 272, 6, 37, 343, 6, 20, 'Team 2 won by 4 wickets', 10, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:10', NULL),
(17, 2, 3, 1, '2025-11-30 00:12:26', 'South Sarinaview Cricket Ground', 'completed', 1, 'field', 3, 182, 10, 43, 137, 8, 43, 'Team 1 won by 45 runs', 12, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:12', NULL),
(18, 2, 4, 3, '2026-02-13 06:50:08', 'Norvalbury Cricket Ground', 'ongoing', 46, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(19, 4, 10, 8, '2026-01-07 14:42:12', 'East Brigitteberg Cricket Ground', 'ongoing', 47, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(20, 2, 5, 5, '2025-11-15 15:08:13', 'Dooleyside Cricket Ground', 'completed', 5, 'field', 5, 197, 10, 21, 166, 3, 44, 'Team 1 won by 31 runs', 10, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:15', NULL),
(21, 6, 51, 52, '2026-03-01 17:04:44', 'Jovanborough Cricket Ground', 'completed', 51, 'bat', 51, 240, 0, 32.3, 251, 7, 37.3, 'tie', NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(22, 7, 53, 54, '2025-08-07 18:39:59', 'New Wendell Cricket Ground', 'completed', 54, 'field', 54, 166, 6, 23.3, 320, 8, 38.6, 'tie', NULL, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(23, 8, 55, 56, '2025-09-19 05:01:18', 'New Freeman Cricket Ground', 'completed', 56, 'bat', 55, 203, 3, 21.3, 112, 7, 31.9, 'by wickets', NULL, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(24, 9, 57, 58, '2025-07-24 14:45:29', 'Lylaview Cricket Ground', 'completed', 57, 'bat', 58, 206, 10, 23.3, 109, 10, 47.4, 'no result', NULL, NULL, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(25, 10, 59, 60, '2026-03-11 22:42:56', 'Hyattstad Cricket Ground', 'upcoming', 59, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(26, 11, 61, 62, '2025-08-24 15:16:58', 'South Serena Cricket Ground', 'ongoing', 62, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(27, 12, 63, 64, '2025-06-21 03:12:32', 'Sydniside Cricket Ground', 'upcoming', 64, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(28, 13, 65, 66, '2025-11-30 14:51:27', 'Sporerland Cricket Ground', 'ongoing', 65, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(29, 14, 67, 68, '2026-02-25 03:32:39', 'New Soledad Cricket Ground', 'ongoing', 67, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(30, 15, 69, 70, '2025-12-22 14:18:26', 'Lake Kameronmouth Cricket Ground', 'upcoming', 69, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(31, 16, 71, 72, '2026-02-03 11:04:33', 'Port Millerhaven Cricket Ground', 'upcoming', 72, 'field', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(32, 17, 73, 74, '2025-11-26 08:07:53', 'Hayesland Cricket Ground', 'upcoming', 73, 'bat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `match_players`
--

CREATE TABLE `match_players` (
  `id` bigint UNSIGNED NOT NULL,
  `match_id` bigint UNSIGNED DEFAULT NULL,
  `team_id` bigint UNSIGNED DEFAULT NULL,
  `player_id` bigint UNSIGNED DEFAULT NULL,
  `is_playing` tinyint(1) NOT NULL DEFAULT '1',
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `match_players`
--

INSERT INTO `match_players` (`id`, `match_id`, `team_id`, `player_id`, `is_playing`, `position`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 15, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(2, 1, 5, 12, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(3, 1, 5, 11, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(4, 1, 5, 10, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(5, 1, 5, 5, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(6, 1, 5, 14, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(7, 1, 5, 15, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(8, 1, 5, 12, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(9, 1, 5, 11, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(10, 1, 5, 10, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(11, 1, 5, 5, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(12, 1, 5, 14, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(13, 2, 6, 5, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(14, 2, 6, 10, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(15, 2, 6, 15, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(16, 2, 6, 14, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(17, 2, 6, 12, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(18, 2, 10, 12, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(19, 2, 10, 5, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(20, 2, 10, 14, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(21, 3, 2, 15, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(22, 3, 2, 11, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(23, 3, 2, 10, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(24, 3, 10, 12, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(25, 3, 10, 5, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(26, 3, 10, 14, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(27, 4, 3, 15, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(28, 4, 3, 10, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(29, 4, 3, 12, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(30, 4, 9, 5, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(31, 4, 9, 14, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(32, 4, 9, 12, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(33, 4, 9, 15, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(34, 4, 9, 10, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(35, 4, 9, 11, 1, NULL, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(36, 5, 4, 15, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(37, 5, 4, 11, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(38, 5, 4, 10, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(39, 5, 4, 14, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(40, 5, 2, 15, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(41, 5, 2, 11, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(42, 5, 2, 10, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(43, 6, 1, 15, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(44, 6, 1, 11, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(45, 6, 1, 12, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(46, 6, 1, 14, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(47, 6, 1, 5, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(48, 6, 1, 10, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(49, 6, 7, 10, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(50, 6, 7, 11, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(51, 6, 7, 15, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(52, 6, 7, 12, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(53, 6, 7, 5, 1, NULL, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(54, 7, 3, 15, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(55, 7, 3, 10, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(56, 7, 3, 12, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(57, 7, 4, 15, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(58, 7, 4, 11, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(59, 7, 4, 10, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(60, 7, 4, 14, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(61, 8, 7, 10, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(62, 8, 7, 11, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(63, 8, 7, 15, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(64, 8, 7, 12, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(65, 8, 7, 5, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(66, 8, 10, 12, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(67, 8, 10, 5, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(68, 8, 10, 14, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(69, 9, 8, 10, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(70, 9, 8, 15, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(71, 9, 8, 11, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(72, 9, 8, 5, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(73, 9, 8, 10, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(74, 9, 8, 15, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(75, 9, 8, 11, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(76, 9, 8, 5, 1, NULL, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(77, 10, 3, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(78, 10, 3, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(79, 10, 3, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(80, 10, 3, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(81, 10, 3, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(82, 10, 3, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(83, 11, 5, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(84, 11, 5, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(85, 11, 5, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(86, 11, 5, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(87, 11, 5, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(88, 11, 5, 14, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(89, 11, 7, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(90, 11, 7, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(91, 11, 7, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(92, 11, 7, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(93, 11, 7, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(94, 12, 9, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(95, 12, 9, 14, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(96, 12, 9, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(97, 12, 9, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(98, 12, 9, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(99, 12, 9, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(100, 12, 4, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(101, 12, 4, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(102, 12, 4, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(103, 12, 4, 14, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(104, 13, 1, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(105, 13, 1, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(106, 13, 1, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(107, 13, 1, 14, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(108, 13, 1, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(109, 13, 1, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(110, 13, 9, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(111, 13, 9, 14, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(112, 13, 9, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(113, 13, 9, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(114, 13, 9, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(115, 13, 9, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(116, 14, 2, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(117, 14, 2, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(118, 14, 2, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(119, 14, 5, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(120, 14, 5, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(121, 14, 5, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(122, 14, 5, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(123, 14, 5, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(124, 14, 5, 14, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(125, 15, 7, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(126, 15, 7, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(127, 15, 7, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(128, 15, 7, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(129, 15, 7, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(130, 15, 2, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(131, 15, 2, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(132, 15, 2, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(133, 16, 9, 5, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(134, 16, 9, 14, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(135, 16, 9, 12, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(136, 16, 9, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(137, 16, 9, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(138, 16, 9, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(139, 16, 2, 15, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(140, 16, 2, 11, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(141, 16, 2, 10, 1, NULL, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(142, 17, 3, 15, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(143, 17, 3, 10, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(144, 17, 3, 12, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(145, 17, 1, 15, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(146, 17, 1, 11, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(147, 17, 1, 12, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(148, 17, 1, 14, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(149, 17, 1, 5, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(150, 17, 1, 10, 1, NULL, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(151, 18, 4, 15, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(152, 18, 4, 11, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(153, 18, 4, 10, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(154, 18, 4, 14, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(155, 18, 3, 15, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(156, 18, 3, 10, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(157, 18, 3, 12, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(158, 19, 10, 12, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(159, 19, 10, 5, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(160, 19, 10, 14, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(161, 19, 8, 10, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(162, 19, 8, 15, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(163, 19, 8, 11, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(164, 19, 8, 5, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(165, 20, 5, 15, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(166, 20, 5, 12, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(167, 20, 5, 11, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(168, 20, 5, 10, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(169, 20, 5, 5, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(170, 20, 5, 14, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(171, 20, 5, 15, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(172, 20, 5, 12, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(173, 20, 5, 11, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(174, 20, 5, 10, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(175, 20, 5, 5, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(176, 20, 5, 14, 1, NULL, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medal_types`
--

CREATE TABLE `medal_types` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_23_173923_create_contacts_table', 1),
(9, '2025_05_28_152911_create_teams_table', 1),
(10, '2025_05_28_153148_create_groups_table', 1),
(11, '2025_05_28_153421_create_team_user_table', 1),
(12, '2025_05_28_153613_create_player_profiles_table', 1),
(13, '2025_05_28_154129_create_player_statistics_table', 1),
(14, '2025_05_28_154316_create_tournaments_table', 1),
(15, '2025_05_28_154614_create_matches_table', 1),
(16, '2025_05_28_154942_create_match_players_table', 1),
(17, '2025_05_28_155137_create_innings_table', 1),
(18, '2025_05_28_155447_create_batting_scores_table', 1),
(19, '2025_05_28_155829_create_bowling_figures_table', 1),
(20, '2025_05_28_155932_create_medal_types_table', 1),
(21, '2025_05_28_160220_create_player_medals_table', 1),
(22, '2025_05_28_160540_create_tournament_standings_table', 1),
(23, '2025_05_28_160705_create_player_rankings_table', 1),
(28, '2025_05_29_154603_create_permission_tables', 2),
(29, '2025_05_29_190548_alter_contact_table_change_age_format', 3),
(30, '2025_05_29_202900_alter_groups_table_add_status_column', 4),
(31, '2025_06_03_162832_create_blogs_table', 5),
(32, '2025_06_03_163004_create_seo_settings_table', 6),
(33, '2025_06_24_145658_create_role_user_table', 7),
(34, '2025_06_30_162632_alter_user_table_add_profile_picture', 8),
(35, '2025_07_01_162343_alter_player_profiles_table_add_category_column', 9),
(36, '2025_07_02_202159_create_draft_tables', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player_medals`
--

CREATE TABLE `player_medals` (
  `id` bigint UNSIGNED NOT NULL,
  `player_id` bigint UNSIGNED DEFAULT NULL,
  `medal_type_id` bigint UNSIGNED DEFAULT NULL,
  `match_id` bigint UNSIGNED DEFAULT NULL,
  `tournament_id` bigint UNSIGNED DEFAULT NULL,
  `reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `awarded_on` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player_profiles`
--

CREATE TABLE `player_profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `playing_role` enum('batsman','bowler','all_rounder','wicket_keeper','fielder') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `batting_style` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bowling_style` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fielding_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` enum('Diamond','Gold','Silver','Platinum','Emerging') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Emerging',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `player_profiles`
--

INSERT INTO `player_profiles` (`id`, `user_id`, `playing_role`, `batting_style`, `bowling_style`, `fielding_position`, `category`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'all_rounder', 'left-handed', 'off_spin', 'long-on', 'Emerging', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(2, 10, 'batsman', 'left-handed', 'leg_spin', 'gully', 'Emerging', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(3, 11, 'batsman', 'right-handed', 'medium', 'mid-wicket', 'Emerging', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(4, 12, 'bowler', 'left-handed', 'leg_spin', 'gully', 'Emerging', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(5, 14, 'bowler', 'left-handed', 'off_spin', 'cover', 'Emerging', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(6, 15, 'wicket_keeper', 'right-handed', 'fast', 'gully', 'Emerging', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(7, 80, 'batsman', 'right-handed', NULL, 'slip', 'Emerging', '2025-06-30 12:46:12', '2025-06-30 12:46:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `player_rankings`
--

CREATE TABLE `player_rankings` (
  `id` bigint UNSIGNED NOT NULL,
  `player_id` bigint UNSIGNED DEFAULT NULL,
  `type` enum('batting','bowling','all_rounder') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int NOT NULL DEFAULT '0',
  `points` int NOT NULL DEFAULT '0',
  `tournament_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `player_statistics`
--

CREATE TABLE `player_statistics` (
  `id` bigint UNSIGNED NOT NULL,
  `player_id` bigint UNSIGNED NOT NULL,
  `matches_played` int NOT NULL DEFAULT '0',
  `runs_scored` int NOT NULL DEFAULT '0',
  `wickets_taken` int NOT NULL DEFAULT '0',
  `catches` int NOT NULL DEFAULT '0',
  `stumpings` int NOT NULL DEFAULT '0',
  `batting_average` double NOT NULL DEFAULT '0',
  `bowling_average` double NOT NULL DEFAULT '0',
  `strike_rate` double NOT NULL DEFAULT '0',
  `economy_rate` double NOT NULL DEFAULT '0',
  `highest_score` int NOT NULL DEFAULT '0',
  `best_bowling_figures_wickets` int NOT NULL DEFAULT '0',
  `best_bowling_figures_runs` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `player_statistics`
--

INSERT INTO `player_statistics` (`id`, `player_id`, `matches_played`, `runs_scored`, `wickets_taken`, `catches`, `stumpings`, `batting_average`, `bowling_average`, `strike_rate`, `economy_rate`, `highest_score`, `best_bowling_figures_wickets`, `best_bowling_figures_runs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 15, 1487, 176, 78, 7, 35.18, 10.65, 127.4, 5.31, 67, 1, 29, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(2, 10, 29, 4937, 39, 83, 49, 46.9, 15.97, 110.31, 6.2, 40, 3, 14, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(3, 11, 36, 3415, 37, 49, 50, 31.88, 38.53, 60.49, 4.79, 89, 7, 46, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(4, 12, 89, 1851, 248, 8, 38, 39.29, 37.44, 58.72, 7.4, 19, 4, 36, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(5, 14, 59, 1365, 178, 28, 28, 13.23, 14.23, 117.94, 6.99, 39, 1, 40, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(6, 15, 26, 2244, 276, 63, 45, 53.12, 31.65, 80.84, 6.18, 174, 1, 45, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `canonical_tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schema_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `og_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_site_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `og_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_site` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `tw_card` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tw_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Fl3pnKKCechqhDZQQz3Dy1LpQ0s7JTR2gWO2a1Ra', 79, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibWZ6MVJHZW1DMHh0TlJjaXRWbnJYRlAzaTl4WXFYOTMyaURlNjNtOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9yZWFsdGltZS1zY29yaW5nLnRlc3QvZHJhZnQtcG9vbHMvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjc5O30=', 1751492586);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `owner_id` bigint UNSIGNED DEFAULT NULL,
  `group_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `short_name`, `logo`, `description`, `owner_id`, `group_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Port Karine Lions', 'SVW', 'teams/port-karine-lions.png', 'Quas maxime maxime asperiores qui qui sit. Eos voluptatem et iusto. Reiciendis occaecati dolorem minima maiores facilis voluptatum optio.', NULL, 2, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(2, 'South Lorenaland Sharks', 'VXR', 'teams/south-lorenaland-sharks.png', 'Tempora id et et similique. Non nam dolores dolores asperiores eos ut in. Nam iusto sed eum commodi incidunt.', NULL, 2, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(3, 'Batzland Tigers', 'UED', 'teams/batzland-tigers.png', 'Omnis pariatur quasi voluptatem delectus. Nisi nihil quia aut et iure sed. Ex aliquid quaerat nemo id itaque vel. Inventore molestiae asperiores repellendus quos et in totam. Eveniet voluptatem sunt quia possimus.', NULL, 2, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(4, 'East Pierremouth Eagles', 'JRW', 'teams/east-pierremouth-eagles.png', 'Veniam labore omnis a quos suscipit. Qui et qui illo velit non doloribus iusto. Inventore ipsam et fugiat sed occaecati optio quos.', NULL, 2, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(5, 'Wymanhaven Sharks', 'DDV', 'teams/wymanhaven-sharks.png', 'Quibusdam eveniet id ut reprehenderit. Id nesciunt nesciunt vel corporis nobis delectus sunt delectus. Aliquam sit sunt numquam similique consequatur necessitatibus. Iusto nulla corporis similique.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(6, 'Camylleborough Tigers', 'EZS', 'teams/camylleborough-tigers.png', 'Qui corporis exercitationem dolores nesciunt sequi veritatis consequatur ipsam. Sint laboriosam eum cum reiciendis ea. Qui odio molestiae quia vel. Consequatur aliquid aut perferendis reiciendis qui at totam dolores.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(7, 'Karianneville Eagles', 'BRO', 'teams/karianneville-eagles.png', 'Laudantium veniam iusto animi et in sint delectus. Provident error deserunt rerum. Voluptatem vel qui dicta tempora quo quia modi.', NULL, 2, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(8, 'Robertaview Sharks', 'VYG', 'teams/robertaview-sharks.png', 'Optio non sapiente beatae temporibus error non. Asperiores sequi sint quia ut voluptas. Consequatur sint et nemo cumque non quae quia dolor. Officia officiis atque occaecati architecto assumenda et quis.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(9, 'Adolphushaven Lions', 'YNJ', 'teams/adolphushaven-lions.png', 'Sit ad consectetur eaque maxime doloribus unde est. Laboriosam natus optio et vitae perspiciatis culpa. Rerum et odit facere nostrum nulla tempore.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(10, 'Gutkowskitown Eagles', 'LSC', 'teams/gutkowskitown-eagles.png', 'Et quidem quos esse maiores. Quia molestiae nostrum amet nesciunt provident ex. Assumenda sequi ullam consequatur voluptas voluptas.', NULL, 2, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(11, 'Breitenbergton Lions', 'LPL', 'https://via.placeholder.com/100x100.png/007711?text=sports+unde', 'Vel eum dolores autem voluptas perspiciatis est. Ut facilis nostrum cupiditate unde aut.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(12, 'Dewittside Tigers', 'LWU', 'https://via.placeholder.com/100x100.png/0099ff?text=sports+esse', 'Quia adipisci voluptatem veritatis exercitationem sint accusantium rem. Consequatur nemo eligendi culpa exercitationem non blanditiis. Rem eveniet est sint rerum beatae.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(13, 'Lake Neha Lions', 'WVO', 'https://via.placeholder.com/100x100.png/00cccc?text=sports+consequatur', 'Aliquam enim soluta et quibusdam illo. Consectetur fugit qui odio eos praesentium qui. Pariatur repudiandae molestiae eius vel ex quis autem iure. Ea vero expedita consequatur nam voluptates.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(14, 'West Jack Tigers', 'EYT', 'https://via.placeholder.com/100x100.png/0066aa?text=sports+qui', 'Est earum aut dolor laborum quas dicta quia. Officia debitis minima qui aperiam iste voluptas. Placeat aut sed sed omnis id voluptatem.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(15, 'Nedberg Eagles', 'BKO', 'https://via.placeholder.com/100x100.png/0088cc?text=sports+consequatur', 'Dolores qui beatae facilis autem nesciunt. Quos qui vel corporis et doloremque eius eum. Ipsa earum soluta quis nesciunt.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(16, 'Rogersmouth Sharks', 'XTR', 'https://via.placeholder.com/100x100.png/00ee77?text=sports+tenetur', 'Ducimus ea minima quam minus quia magnam corrupti id. In excepturi eaque dolor optio. Earum consectetur consequatur fuga non ut a. Omnis id non consectetur officia odio qui.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(17, 'Bettyport Eagles', 'ZAK', 'https://via.placeholder.com/100x100.png/002266?text=sports+nulla', 'Temporibus repudiandae animi qui delectus. Reprehenderit nihil soluta corporis sunt odit. Fugiat perferendis voluptatem ducimus consequatur.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(18, 'Shawnatown Tigers', 'LKP', 'https://via.placeholder.com/100x100.png/0077ff?text=sports+alias', 'Nostrum incidunt quis odio odio. Facilis aliquam occaecati recusandae. Autem est laudantium incidunt minus quia commodi eum. Architecto quia reiciendis autem neque ex explicabo deleniti.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(19, 'Brainland Sharks', 'AHB', 'https://via.placeholder.com/100x100.png/00eebb?text=sports+commodi', 'Qui et autem accusamus quos consequuntur. Quia et dolor est velit veritatis pariatur. Perferendis aut et sit suscipit praesentium consectetur deleniti consequatur.', NULL, 2, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(20, 'O\'Reillystad Sharks', 'YHM', 'https://via.placeholder.com/100x100.png/002277?text=sports+et', 'Eligendi omnis adipisci corrupti consequatur repellat atque ut. Doloribus ut sed commodi natus est. Inventore id eius cum expedita facilis quae dolor nam.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(21, 'Oberbrunnerburgh Sharks', 'JFV', 'https://via.placeholder.com/100x100.png/009988?text=sports+quia', 'Incidunt sunt in voluptas consequatur debitis est et. Hic delectus in ex quos nulla voluptates.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(22, 'Lake Kristofferland Lions', 'ESE', 'https://via.placeholder.com/100x100.png/002255?text=sports+maiores', 'Dignissimos aut quia velit est architecto adipisci. Quia in nostrum delectus quaerat distinctio inventore debitis. Doloremque accusantium molestias autem expedita consequuntur enim.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(23, 'New Westonstad Lions', 'YDU', 'https://via.placeholder.com/100x100.png/0022bb?text=sports+earum', 'Maiores ut laudantium voluptatem voluptatem. Consequatur molestiae autem sint id error dolorem et. Atque at porro enim autem qui.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(24, 'Bergeburgh Lions', 'OMP', 'https://via.placeholder.com/100x100.png/0088dd?text=sports+et', 'Suscipit eius enim voluptatum ea voluptatem et dicta. Nemo et odit vitae dignissimos dolor rem. Quis nostrum eligendi et voluptates qui corporis unde quidem.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(25, 'Arlieburgh Sharks', 'AND', 'https://via.placeholder.com/100x100.png/00cc99?text=sports+molestiae', 'Eum soluta amet nihil eum placeat veniam. Quia deleniti autem aperiam rerum accusantium corrupti ut vitae. Est laborum voluptatem enim. Id rerum beatae soluta odit quis dolorem.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(26, 'South Danielleview Eagles', 'EDO', 'https://via.placeholder.com/100x100.png/00cc77?text=sports+perferendis', 'Aut dolores qui porro. Esse qui eum accusantium accusantium doloremque quisquam perferendis. Esse vitae quas vel. Nihil porro et quis praesentium sit accusamus. Qui odit repellendus qui nostrum consequuntur cupiditate numquam.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(27, 'Wiegandburgh Eagles', 'ATP', 'https://via.placeholder.com/100x100.png/007777?text=sports+rerum', 'Nihil optio laboriosam minima aut et aut. Sequi et iusto aut expedita beatae doloremque at. Quaerat consequatur suscipit enim quibusdam similique. Aperiam voluptatem fugiat totam maxime.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(28, 'North Coymouth Eagles', 'OMP', 'https://via.placeholder.com/100x100.png/00ee22?text=sports+quis', 'Est est enim quia dolores harum. Cum eius corrupti nulla doloremque explicabo. Qui quo vel tempora qui repudiandae atque. Accusantium eaque ipsam asperiores aut ad dolorem aut libero.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(29, 'Tremblaymouth Eagles', 'GBU', 'https://via.placeholder.com/100x100.png/0066cc?text=sports+nostrum', 'Commodi molestiae rerum illum quasi rem quia. Rerum voluptatibus ipsam ut quod possimus debitis. Et aperiam ea nemo adipisci consequatur.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(30, 'Shyannemouth Lions', 'RWE', 'https://via.placeholder.com/100x100.png/007799?text=sports+perferendis', 'Et porro iusto ut non sit voluptas et voluptatum. Enim maxime ipsum illo dolor pariatur possimus soluta voluptatibus. Dolorem aut deserunt necessitatibus sint dolorem tempore ut et. Error itaque illum magni excepturi.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(31, 'Romagueraberg Eagles', 'WZZ', 'https://via.placeholder.com/100x100.png/0066dd?text=sports+animi', 'Nisi necessitatibus et sed et incidunt. A soluta et est velit et provident fugiat. Facilis distinctio veniam deleniti facilis quisquam voluptatem. Ratione necessitatibus sunt aspernatur id repellat.', NULL, 3, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(32, 'Judymouth Sharks', 'MNC', 'https://via.placeholder.com/100x100.png/00ffff?text=sports+et', 'Autem voluptates aperiam voluptas ut provident voluptatem assumenda quae. Ipsam corporis cum eos illum et cumque blanditiis. Corrupti voluptas velit est natus consequatur tempora molestiae sequi.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(33, 'Eraton Sharks', 'HVM', 'https://via.placeholder.com/100x100.png/009966?text=sports+id', 'Nisi consequuntur labore architecto incidunt accusantium magnam sint. Harum consequatur id sed sequi non voluptatem quia vero. Provident dolor enim explicabo quia temporibus earum. Est repellendus assumenda dolorem cupiditate quod. Nemo ut et dolorum corporis eius labore.', NULL, 1, '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(34, 'West Stanley Eagles', 'KIN', 'https://via.placeholder.com/100x100.png/002222?text=sports+voluptas', 'Magni dolorem repellat sunt magni aspernatur. Dolorem in quisquam dolorum praesentium odit reiciendis. Corporis et minus ab et inventore molestiae. Consequatur nihil esse accusamus sunt qui.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(35, 'Lake Ikeland Sharks', 'NLN', 'https://via.placeholder.com/100x100.png/00bb22?text=sports+modi', 'Dolor possimus dolorem rerum. Voluptas repellat aperiam in est occaecati quo sed. Iure aut dolore placeat rerum et nulla voluptas.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(36, 'Cartermouth Lions', 'ZPX', 'https://via.placeholder.com/100x100.png/00bb66?text=sports+id', 'Non nihil culpa nihil ipsum quia quam. Qui ipsam quam harum vel libero tenetur. Mollitia tenetur dignissimos quasi et.', NULL, 1, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(37, 'South Johanna Eagles', 'WAK', 'https://via.placeholder.com/100x100.png/00ffcc?text=sports+sint', 'Cupiditate omnis iure ipsam. Consectetur non quod consequatur similique sed voluptatibus possimus et.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(38, 'New Elmerland Sharks', 'ICZ', 'https://via.placeholder.com/100x100.png/0033dd?text=sports+dolorem', 'Rerum veniam ab aspernatur aut. Commodi amet voluptas fuga et. Animi id voluptatem vitae perspiciatis non qui sit minus. Quo modi reprehenderit neque et.', NULL, 1, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(39, 'Zulaufchester Lions', 'MUA', 'https://via.placeholder.com/100x100.png/005522?text=sports+quasi', 'Et aliquam perspiciatis architecto consequuntur sapiente est esse. Maxime veniam rem corporis adipisci aperiam totam. Dicta id molestias eos quidem enim voluptas perspiciatis. Libero dolorum quo quia aperiam.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(40, 'Turcottestad Tigers', 'KRM', 'https://via.placeholder.com/100x100.png/0066ee?text=sports+est', 'Error rerum quis accusamus rerum. Repellat perferendis repudiandae aut provident at dolor quos. Numquam in voluptatem ut totam.', NULL, 3, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(41, 'New Tanya Eagles', 'SYE', 'https://via.placeholder.com/100x100.png/00bb11?text=sports+repudiandae', 'Dolorem blanditiis consequuntur fuga distinctio nam sit. Rerum qui natus sed vero doloremque. Commodi facilis velit maxime ut repellendus hic.', NULL, 1, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(42, 'Lake Aubrey Sharks', 'DEW', 'https://via.placeholder.com/100x100.png/00bb55?text=sports+et', 'Amet expedita neque dolorum voluptas vel aspernatur et. Itaque est assumenda fugiat consequatur fugit totam cum reiciendis. Omnis nemo qui consequuntur non.', NULL, 3, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(43, 'South Haleigh Tigers', 'EOD', 'https://via.placeholder.com/100x100.png/0033aa?text=sports+doloremque', 'Dolorum commodi cumque cum et veniam ab deleniti. Incidunt maxime in quis. Aut dolorem soluta voluptatem.', NULL, 1, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(44, 'Towneton Eagles', 'TPJ', 'https://via.placeholder.com/100x100.png/00eeaa?text=sports+maxime', 'Et tempore qui id corporis tenetur est. Sit et eligendi amet porro sequi. Soluta repellat minima iste quis et. Iusto consequatur sequi quam omnis nobis.', NULL, 3, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(45, 'Jacobsonbury Sharks', 'PAO', 'https://via.placeholder.com/100x100.png/0055bb?text=sports+rerum', 'Quia quia quae veniam fugiat. Tempore necessitatibus magni praesentium eligendi. Molestiae delectus eius et recusandae ratione minus voluptatum dicta. Aliquam porro molestiae et delectus quia officia aut voluptate.', NULL, 3, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(46, 'East Estefaniabury Eagles', 'RTM', 'https://via.placeholder.com/100x100.png/00ffff?text=sports+nisi', 'Nesciunt quia et qui similique ut et. Dolorem sit nesciunt beatae fugit earum. Suscipit optio officia rerum eos possimus et. Sunt sit provident totam beatae sed ipsam.', NULL, 1, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(47, 'South Breanne Eagles', 'MNO', 'https://via.placeholder.com/100x100.png/0000aa?text=sports+quia', 'Ab eaque unde amet provident odio beatae. Placeat non eligendi mollitia. Nobis non aliquid ut exercitationem consequatur et. Assumenda voluptas qui impedit qui quos quae.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(48, 'Turcottetown Eagles', 'DAE', 'https://via.placeholder.com/100x100.png/0099ff?text=sports+rem', 'Dolorem et assumenda aut voluptate. Dolore dicta quidem neque repellendus quia rem ducimus. Id quisquam tempora soluta blanditiis cumque quidem. Velit dignissimos magni sunt inventore consequatur aut dicta.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(49, 'West Geraldmouth Sharks', 'FYF', 'https://via.placeholder.com/100x100.png/007711?text=sports+vel', 'Et eos ducimus omnis aut iure. Qui nihil qui officia neque. Aut ut quae neque voluptatibus vel quidem enim nihil. Praesentium est ad delectus qui.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(50, 'Christamouth Sharks', 'NDU', 'https://via.placeholder.com/100x100.png/0011ee?text=sports+non', 'Enim rerum eveniet vero sed totam nulla. Nesciunt magnam quos soluta.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(51, 'Walshhaven Sharks', 'PZB', 'https://via.placeholder.com/100x100.png/002222?text=sports+impedit', 'Inventore consequatur qui similique et delectus dolorem ut nemo. Omnis illo sint asperiores nisi. Velit sit quos vitae. Sint sint dolores fuga sint autem ab dicta.', NULL, 2, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(52, 'Grimesmouth Tigers', 'YLO', 'https://via.placeholder.com/100x100.png/00dd22?text=sports+enim', 'Aut tempore a qui asperiores. Quidem odio ea dolores culpa voluptatem dolorum. Aspernatur enim iure sapiente maiores deleniti sunt sunt quibusdam. Ab ut ea facere quae. Enim veritatis necessitatibus nam.', NULL, 1, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(53, 'Myraborough Lions', 'DAK', 'https://via.placeholder.com/100x100.png/00aa77?text=sports+dolor', 'A id rerum at et. Est eos perspiciatis laborum dicta. Voluptatem sapiente qui consequatur quam rerum et recusandae.', NULL, 3, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(54, 'South Xanderport Tigers', 'VFP', 'https://via.placeholder.com/100x100.png/00ff66?text=sports+enim', 'Est sed enim repellendus magni veniam aut maxime. Iusto dolorem eos aut eum soluta quia incidunt. Est nobis eius soluta et accusantium. Pariatur mollitia non incidunt est consequatur. Qui asperiores et quisquam harum.', NULL, 1, '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(55, 'Jarrettmouth Lions', 'RPK', 'https://via.placeholder.com/100x100.png/0088aa?text=sports+qui', 'A doloribus in porro. Temporibus fugit aut sed rerum dolores. Ut et consequatur reiciendis vel. Repellat exercitationem sit aut nostrum assumenda praesentium. Nesciunt aut ad quia qui.', NULL, 3, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(56, 'East Salmatown Sharks', 'BQM', 'https://via.placeholder.com/100x100.png/00eecc?text=sports+sed', 'Nostrum eveniet officiis laudantium nobis quaerat et rerum. Et dolorem consequuntur deserunt voluptate nihil est. Hic qui odio rem distinctio sunt dolor dolorem accusamus. Eius vel aut et ipsum deleniti molestias.', NULL, 2, '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(57, 'Tellyview Lions', 'VHE', 'https://via.placeholder.com/100x100.png/00aabb?text=sports+provident', 'Et odit totam et quidem autem vel numquam. At dicta quasi alias nisi voluptatum aut. Perspiciatis illum quia labore est. Omnis et voluptas et consequatur tempora earum distinctio. Nihil tempore enim vel atque quo.', NULL, 2, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(58, 'East Leslie Eagles', 'UZP', 'https://via.placeholder.com/100x100.png/0033ee?text=sports+rerum', 'Ducimus rerum qui corporis facere. Et error et possimus sed. Quia consequuntur aut voluptas quae sunt facilis et.', NULL, 1, '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(59, 'West Buford Lions', 'WXP', 'https://via.placeholder.com/100x100.png/0044aa?text=sports+dolore', 'Sint libero hic ut repellat delectus consequatur sapiente. Consequatur omnis ut praesentium ab voluptatum voluptas odio aut. Sed odio error ut ratione sed. Tempora consequatur in eos voluptates magnam deserunt dolorem.', NULL, 2, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(60, 'Bednarshire Tigers', 'TBD', 'https://via.placeholder.com/100x100.png/00bb66?text=sports+ipsam', 'In consectetur voluptas qui deserunt eum. Quis qui sunt perspiciatis inventore omnis. Error culpa delectus in qui et fuga ipsa. Et odio repudiandae consequatur aut eos molestiae modi corrupti.', NULL, 1, '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(61, 'South Billieberg Sharks', 'YRE', 'https://via.placeholder.com/100x100.png/00aadd?text=sports+quis', 'A dolorum dolorem explicabo blanditiis corporis aut odit. Quibusdam quis dicta laborum dicta blanditiis beatae.', NULL, 3, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(62, 'Lindberg Eagles', 'YNM', 'https://via.placeholder.com/100x100.png/000011?text=sports+blanditiis', 'Ratione amet quisquam cumque maxime nisi quaerat labore voluptatibus. Dolores atque hic soluta veritatis est. Sit quas totam sunt maiores eius consequatur.', NULL, 1, '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(63, 'New Lelahfort Tigers', 'YDT', 'https://via.placeholder.com/100x100.png/00bbbb?text=sports+quidem', 'Inventore aut cumque atque tempore voluptatem nemo dicta. Ducimus ut non magni quia labore dolorem. Aut rerum deleniti natus et nostrum rerum. Autem doloremque culpa ullam est ex tenetur beatae.', NULL, 3, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(64, 'D\'Amorebury Lions', 'FBG', 'https://via.placeholder.com/100x100.png/00aa77?text=sports+ipsum', 'Veniam nihil ipsam provident tenetur est. Eum dolore veniam modi tempora soluta et laboriosam tenetur. Et earum enim dignissimos labore eligendi veniam.', NULL, 2, '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(65, 'South Demetris Sharks', 'EPY', 'https://via.placeholder.com/100x100.png/0066cc?text=sports+laudantium', 'Voluptatibus in assumenda voluptatem minima. Ut autem et omnis nostrum dolores tenetur ipsum. Veniam odit non nesciunt quo esse.', NULL, 2, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(66, 'Mayerfort Eagles', 'TON', 'https://via.placeholder.com/100x100.png/00aa88?text=sports+impedit', 'Voluptas occaecati rerum id ut inventore. Assumenda magnam sequi rerum exercitationem sint rem est. Ex voluptas totam explicabo quas. Ea fugit tenetur voluptatibus qui recusandae sint non ex.', NULL, 3, '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(67, 'Kleinberg Eagles', 'RPF', 'https://via.placeholder.com/100x100.png/00ccbb?text=sports+vel', 'Quia rerum explicabo est repellat aperiam. Doloremque dicta ut dolor sint. Enim harum et alias molestiae aut ipsa adipisci. Corporis totam sint minus sequi est quo.', NULL, 1, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(68, 'Cristianborough Sharks', 'TIG', 'https://via.placeholder.com/100x100.png/0022bb?text=sports+eum', 'Laborum rerum omnis eos sapiente beatae. Tenetur ut reprehenderit est voluptatibus. Et facilis ratione rerum commodi.', NULL, 2, '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(69, 'Port Sidneychester Lions', 'QGK', 'https://via.placeholder.com/100x100.png/0099ff?text=sports+magni', 'Voluptates vitae dolor omnis ullam laudantium est. Est sint beatae facere dolores rerum voluptatem. Ut ut cum nihil fugiat facilis repellat. Quidem tempora et pariatur non debitis illo unde tenetur.', NULL, 3, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(70, 'Kristofferborough Eagles', 'KSO', 'https://via.placeholder.com/100x100.png/0000cc?text=sports+et', 'Commodi ut consectetur placeat corrupti hic sunt. Enim et neque itaque accusamus. Est vero et et quasi accusamus qui reprehenderit aut. Ut sint non occaecati at accusantium earum. Numquam non dolorem dolor minima.', NULL, 2, '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(71, 'Leschland Tigers', 'URI', 'https://via.placeholder.com/100x100.png/0044aa?text=sports+qui', 'Eum nemo ducimus quis consequatur et. Minima ea voluptatum ad repellendus velit est recusandae. Recusandae rerum ipsam porro inventore. Eaque similique qui minus vero at. Ipsam omnis odit ratione amet minus et.', NULL, 2, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(72, 'Sibylfurt Eagles', 'SNS', 'https://via.placeholder.com/100x100.png/00ddaa?text=sports+in', 'Consectetur nemo excepturi perspiciatis dolorem repellat. Quae natus sint sapiente non inventore sunt. Enim molestiae perspiciatis eveniet maxime enim nostrum.', NULL, 2, '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(73, 'Port Darion Eagles', 'YAD', 'https://via.placeholder.com/100x100.png/0088cc?text=sports+temporibus', 'Et minus natus ut et ex neque quia. Fugit omnis ullam sequi laborum veniam provident fugit. Eos repellat et ipsa omnis.', NULL, 1, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(74, 'Blickland Lions', 'RHZ', 'https://via.placeholder.com/100x100.png/009900?text=sports+voluptatum', 'Perspiciatis ullam consequatur aut sapiente debitis quos. Aut quisquam laudantium dolore illum id qui. Et voluptatem odit eum deleniti sit adipisci voluptatibus.', NULL, 2, '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(75, 'BeraTeams', 'BTW', 'team-logos/7gApgrqv6Qk65gtJDqM69vHz1aXR4bdI5qWFzfy4.png', 'Nill', 2, 1, '2025-05-30 10:47:45', '2025-05-30 10:59:56', NULL),
(76, 'Irtaza', 'ITW', 'team-logos/qcPS3RbOKhT4xFWpiZ5Z3J0lQE2LBYMU22033uDB.png', 'Irtza team', 78, 1, '2025-07-02 14:47:17', '2025-07-02 14:47:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `jersey_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_captain` tinyint(1) NOT NULL DEFAULT '0',
  `is_vice_captain` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_user`
--

INSERT INTO `team_user` (`id`, `team_id`, `user_id`, `jersey_number`, `is_captain`, `is_vice_captain`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 15, '1', 1, 0, NULL, NULL, NULL),
(2, 1, 11, '2', 0, 1, NULL, NULL, NULL),
(3, 1, 12, '3', 0, 0, NULL, NULL, NULL),
(4, 1, 14, '4', 0, 0, NULL, NULL, NULL),
(5, 1, 5, '5', 0, 0, NULL, NULL, NULL),
(6, 1, 10, '6', 0, 0, NULL, NULL, NULL),
(7, 2, 15, '1', 1, 0, NULL, NULL, NULL),
(8, 2, 11, '2', 0, 1, NULL, NULL, NULL),
(10, 3, 15, '1', 1, 0, NULL, NULL, NULL),
(11, 3, 10, '2', 0, 1, NULL, NULL, NULL),
(12, 3, 12, '3', 0, 0, NULL, NULL, NULL),
(13, 4, 15, '1', 1, 0, NULL, NULL, NULL),
(14, 4, 11, '2', 0, 1, NULL, NULL, NULL),
(15, 4, 10, '3', 0, 0, NULL, NULL, NULL),
(16, 4, 14, '4', 0, 0, NULL, NULL, NULL),
(17, 5, 15, '1', 1, 0, NULL, NULL, NULL),
(18, 5, 12, '2', 0, 1, NULL, NULL, NULL),
(19, 5, 11, '3', 0, 0, NULL, NULL, NULL),
(20, 5, 10, '4', 0, 0, NULL, NULL, NULL),
(21, 5, 5, '5', 0, 0, NULL, NULL, NULL),
(22, 5, 14, '6', 0, 0, NULL, NULL, NULL),
(23, 6, 5, '1', 1, 0, NULL, NULL, NULL),
(24, 6, 10, '2', 0, 1, NULL, NULL, NULL),
(25, 6, 15, '3', 0, 0, NULL, NULL, NULL),
(26, 6, 14, '4', 0, 0, NULL, NULL, NULL),
(27, 6, 12, '5', 0, 0, NULL, NULL, NULL),
(28, 7, 10, '1', 1, 0, NULL, NULL, NULL),
(29, 7, 11, '2', 0, 1, NULL, NULL, NULL),
(30, 7, 15, '3', 0, 0, NULL, NULL, NULL),
(31, 7, 12, '4', 0, 0, NULL, NULL, NULL),
(32, 7, 5, '5', 0, 0, NULL, NULL, NULL),
(33, 8, 10, '1', 1, 0, NULL, NULL, NULL),
(34, 8, 15, '2', 0, 1, NULL, NULL, NULL),
(35, 8, 11, '3', 0, 0, NULL, NULL, NULL),
(36, 8, 5, '4', 0, 0, NULL, NULL, NULL),
(37, 9, 5, '1', 1, 0, NULL, NULL, NULL),
(38, 9, 14, '2', 0, 1, NULL, NULL, NULL),
(39, 9, 12, '3', 0, 0, NULL, NULL, NULL),
(40, 9, 15, '4', 0, 0, NULL, NULL, NULL),
(41, 9, 10, '5', 0, 0, NULL, NULL, NULL),
(42, 9, 11, '6', 0, 0, NULL, NULL, NULL),
(43, 10, 12, '1', 1, 0, NULL, NULL, NULL),
(44, 10, 5, '2', 0, 1, NULL, NULL, NULL),
(45, 10, 14, '3', 0, 0, NULL, NULL, NULL),
(46, 75, 68, '0', 0, 0, NULL, NULL, NULL),
(48, 3, 23, '64', 0, 0, NULL, NULL, NULL),
(49, 2, 23, '14', 0, 0, NULL, NULL, NULL),
(51, 3, 79, '25', 0, 0, NULL, NULL, NULL),
(52, 74, 2, '25', 1, 0, NULL, NULL, NULL),
(53, 73, 32, '78', 1, 0, NULL, NULL, NULL),
(54, 76, 7, '21', 0, 0, NULL, NULL, NULL),
(55, 76, 26, '14', 0, 0, NULL, NULL, NULL),
(57, 76, 22, '14', 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` enum('T20','ODI','Test') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `name`, `description`, `start_date`, `end_date`, `location`, `format`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'aut Cricket Tournament', 'Consequatur et modi error. Soluta fuga culpa deleniti repudiandae. Illo architecto ut et aliquam eos dolor provident.', '2025-06-28', '2025-08-25', 'North Jovanyview', 'ODI', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(2, 'dolores Cricket Tournament', 'Accusantium labore velit repudiandae quia. Illum quos officia voluptatem dolore rerum repellendus doloribus. Qui accusantium placeat tempora ut et sunt labore. Ipsam id beatae nam debitis eum.', '2025-06-13', '2025-08-08', 'Lake Emanuel', 'T20', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(3, 'facere Cricket Tournament', 'Ex corporis soluta debitis hic ullam minima aut. Voluptate harum veritatis voluptatem totam qui iure aut. Aspernatur porro et et. Officiis dolor ipsam est minus qui ab dolores.', '2025-06-11', '2025-08-05', 'North Wilmer', 'ODI', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(4, 'facilis Cricket Tournament', 'Itaque maiores incidunt rerum omnis ab architecto. Quasi aut facere repellendus delectus exercitationem cupiditate aut. Consequatur ut consequuntur omnis.', '2025-06-16', '2025-07-28', 'Bergstromside', 'T20', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(5, 'ipsum Cricket Tournament', 'In unde at sed. Deserunt et itaque eos rerum consequatur et voluptatem voluptas. Ipsum cumque voluptatibus sed voluptatum dolores libero eius iste.', '2025-06-03', '2025-08-08', 'South Wilhelm', 'Test', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(6, 'labore Cricket Tournament', 'Est ut ea quia quo. Enim ullam et tenetur et dolore quibusdam. Totam expedita et in. Consequuntur sed nobis quasi maiores aut quod officiis accusamus. Sequi possimus cupiditate iste vel ratione ipsa sit.', '2025-06-11', '2025-08-01', 'Dickinsonburgh', 'T20', '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(7, 'est Cricket Tournament', 'Eligendi molestiae architecto totam amet. Quos nulla id pariatur quisquam. Praesentium quis quidem optio. Nesciunt laudantium consequatur non et odit enim. Reiciendis vitae aut non in animi animi magni.', '2025-06-13', '2025-08-16', 'West Wiley', 'Test', '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(8, 'ut Cricket Tournament', 'Quia delectus veniam dolorem laboriosam sapiente ut est. Voluptatum voluptas veritatis non aut ducimus necessitatibus est. Quod quibusdam est dignissimos maiores fuga perferendis. Est est quos animi tenetur quia repudiandae.', '2025-06-01', '2025-08-16', 'Boylefort', 'Test', '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(9, 'saepe Cricket Tournament', 'Omnis vel ducimus nostrum dignissimos. Et doloremque et mollitia in ipsum et illum. Aliquam beatae culpa qui voluptas iusto alias veniam.', '2025-06-05', '2025-08-22', 'Lake Magali', 'T20', '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(10, 'quas Cricket Tournament', 'Voluptatem harum voluptatem consequatur qui. Repellendus dolores libero ad. Temporibus non sed sit unde architecto debitis.', '2025-06-13', '2025-08-29', 'Port Dominic', 'Test', '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(11, 'iure Cricket Tournament', 'Consectetur eos veniam cupiditate dignissimos voluptatem at id nulla. Magnam voluptates dolores dolores cumque earum. Fugiat doloremque temporibus enim quo et. Ut voluptatum minima dolores maiores adipisci ipsum.', '2025-06-12', '2025-08-26', 'South Anaischester', 'T20', '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(12, 'voluptatem Cricket Tournament', 'Architecto nam natus fugit sequi id adipisci. Maxime aut asperiores praesentium sint temporibus et quia quis. Labore temporibus optio quasi et quas vel.', '2025-06-18', '2025-08-26', 'Ziemeshire', 'T20', '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(13, 'ex Cricket Tournament', 'Consectetur nihil consequatur quae suscipit quae. Ut atque qui quam animi. Alias ipsum in doloremque consequatur eos deleniti eveniet. Ipsa dolorem ad mollitia architecto qui sit illo quos. Illo id debitis atque quo aut itaque est.', '2025-06-17', '2025-07-30', 'West Vanessaport', 'T20', '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(14, 'dignissimos Cricket Tournament', 'Architecto voluptas sed voluptatem est enim assumenda dicta nostrum. Atque deserunt praesentium doloribus voluptas est autem eaque. Cum qui accusantium voluptates voluptatem perspiciatis. Fugit in sint doloribus illo velit voluptatem aliquid placeat.', '2025-06-28', '2025-08-09', 'Aniyahside', 'ODI', '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(15, 'repellat Cricket Tournament', 'Cum reprehenderit unde neque aut tempore dicta. Qui qui sit eos vitae alias natus eos quo. Commodi possimus neque unde eligendi voluptas voluptatem.', '2025-06-18', '2025-08-18', 'Thompsonport', 'T20', '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(16, 'vel Cricket Tournament', 'Alias corporis veritatis quo ut explicabo assumenda quidem. Sed et consequatur ut dolores labore et. Incidunt quo ex nemo rem nemo voluptatum aspernatur. Delectus molestiae magni asperiores ipsum distinctio mollitia.', '2025-06-25', '2025-08-05', 'New Harleyview', 'Test', '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(17, 'debitis Cricket Tournament', 'Dolor quis et quia. Praesentium soluta veritatis inventore autem. Reprehenderit rerum non ducimus eum atque. Est praesentium optio error inventore cumque et.', '2025-06-16', '2025-08-15', 'North Lacy', 'Test', '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(18, 'Annual Championship', 'The biggest tournament of the year', '2025-07-27', '2025-09-07', 'Bernadineside', 'Test', '2025-07-02 16:52:39', '2025-07-02 16:52:39', NULL),
(19, 'Annual Championship', 'The biggest tournament of the year', '2025-07-21', '2025-10-01', 'Lennaport', 'Test', '2025-07-02 16:55:05', '2025-07-02 16:55:05', NULL),
(20, 'Annual Championship', 'The biggest tournament of the year', '2025-07-06', '2025-09-12', 'Weberfurt', 'T20', '2025-07-02 16:55:50', '2025-07-02 16:55:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_standings`
--

CREATE TABLE `tournament_standings` (
  `id` bigint UNSIGNED NOT NULL,
  `tournament_id` bigint UNSIGNED DEFAULT NULL,
  `team_id` bigint UNSIGNED DEFAULT NULL,
  `matches_played` int NOT NULL DEFAULT '0',
  `matches_won` int NOT NULL DEFAULT '0',
  `matches_lost` int NOT NULL DEFAULT '0',
  `matches_tied` int NOT NULL DEFAULT '0',
  `matches_no_result` int NOT NULL DEFAULT '0',
  `points` int NOT NULL DEFAULT '0',
  `net_run_rate` double NOT NULL DEFAULT '0',
  `position` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `emp_id`, `profile_picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ryan Schulist', 'alaina.langosh@example.org', '5407', NULL, '2025-05-29 08:38:57', '$2y$12$qk3pIFZWqYtdhmFWNhH50uoUqM0CVFdWK5rDzgovg61my8agcfSxu', '4WM6WKDYpE', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(2, 'Ora Watsica Jr.R', 'abbott.tanner@example.org', '8994', NULL, '2025-05-29 08:38:58', '$2y$12$JRINuf5Wjlb5WdM3xGYNyu./KgDATZQeVeM7lbJJqc0hRBpGrcUqy', 'FBhQoru4tm', '2025-05-29 08:39:01', '2025-05-29 13:02:29', NULL),
(3, 'Garrett Simoniss', 'maryam53@example.net', '6820', NULL, '2025-05-29 08:38:58', '$2y$12$dnkySJtLK4EK96j6nJ1t8.gwj2QrU7QjmgLn4O6kMMX3b0WHIN9Jq', '684rin1AQp', '2025-05-29 08:39:01', '2025-05-29 13:02:35', NULL),
(4, 'Jacky Turner', 'acremin@example.com', '1614', NULL, '2025-05-29 08:38:58', '$2y$12$KTBLcPI.A49NWOKo1M8yQ.c.tjJEkswyDnUACA1HOLx4cMMtdHalO', '5dgo6IeLml', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(5, 'Alek D\'Amore', 'will.considine@example.com', '6719', NULL, '2025-05-29 08:38:58', '$2y$12$iql1bzIHutixRzg7hhbbmubmzssVZyZIrZzlVaoorBexLdD3DHZiy', 'RJBt4F69Gy', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(6, 'Hester Veum I', 'june97@example.com', '1670', NULL, '2025-05-29 08:38:58', '$2y$12$fRHUlNGNdY1E.YxC6uh5YeDCYz0uY5C.NI3yIWsAyX857zko4vSEG', 'Z7MKJT9Isf', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(7, 'Joany Stokes', 'jheidenreich@example.net', '5415', NULL, '2025-05-29 08:38:58', '$2y$12$GXF4reuMRNHauT8nYfdd1eqvFzmX.u2RGZ1fE/KXCmMqp8SUgU3/O', 'pYAt3K4s1v', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(8, 'Kelley Sanford', 'raul.goldner@example.net', '9924', NULL, '2025-05-29 08:38:59', '$2y$12$wvvsALErGJykPSYaR8Vqi.sZ.x5WBECTyWbmw/r8aWZSSrSucMnci', 'kaQQyE2wUT', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(9, 'Wilmer McKenzie', 'wkemmer@example.net', '1632', NULL, '2025-05-29 08:38:59', '$2y$12$2AilSdcHqIW6CHuckxt/x./jciMIBSSXwuOIaJq5bwTzNXue/zeD6', 'veDdeSVVRr', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(10, 'Schuyler Moen', 'priscilla.rowe@example.org', '1734', NULL, '2025-05-29 08:38:59', '$2y$12$mOypmiSY5SP6brIxRUh3muwUA1yM6g9GEbr4MOizPtyZIBRfvZvbe', 'qtdFOliTSj', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(11, 'Stanley Waters DDS', 'letitia25@example.net', '6755', NULL, '2025-05-29 08:38:59', '$2y$12$CfNP80KtRIp1dqysEziYzuF9r7I5UXoXLnl2VuIsoMJ12pQ/lTjBK', 'isvo8R7Gxl', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(12, 'Mittie Hudson IV', 'christa07@example.net', '8431', NULL, '2025-05-29 08:38:59', '$2y$12$DlWfCAf2C4jpFpcrLqGqeOBmUob7yKeqI9jt9pvFHzSr.w/XR4/Iy', 'f6sXcx1Q14', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(13, 'Jaylon Spencer II|', 'jeramy73@example.com', '2898', NULL, '2025-05-29 08:39:00', '$2y$12$QTNezpDUek.e.EZEvyPZJOlL.50r8M1mNuKai8e2pmSjROsO7ZfQ6', '32uxiLOmSK', '2025-05-29 08:39:01', '2025-05-29 13:01:27', NULL),
(14, 'Gerardo Medhurst MD', 'upton.spencer@example.org', '4664', NULL, '2025-05-29 08:39:00', '$2y$12$Ob9RbzKsp/J8gtK3l6bUJe37DVLol4lIGC8pn0Eb8Pp4vrDoJyaQO', 'Ttg4lnu0EN', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(15, 'Mrs. Audra Marvin', 'wolff.raegan@example.org', '6975', NULL, '2025-05-29 08:39:00', '$2y$12$GOCekhhd/aGBA/C64dMWQOMGw4/JE2PZ33BXbFEtIhsYi1h1SsmCa', 'nNYEPoxPWt', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(16, 'Ona Beahan', 'elnora46@example.net', '3826', NULL, '2025-05-29 08:39:00', '$2y$12$7I7HcjFCHauXEHHMO5ty..Hq8kzVAtdA34oe.cnrchw7alAozAicS', 'fF5emYt4d9', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(17, 'Osborne Feeney DVM', 'micaela.keebler@example.com', '6659', NULL, '2025-05-29 08:39:00', '$2y$12$B8JHfmGbcXN4d0vWud/bSe13c3qw3enH.jm1z9jLNCFOYd9olTDrO', 't9yoQjkgVV', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(18, 'Tianna Padberg', 'wfunk@example.com', '3456', NULL, '2025-05-29 08:39:01', '$2y$12$SHxLP/VLgGTvnbbUJw8t5uEsDtJ8m9UXB.kd0.5jv2/xVqSYN5RZG', 'tflrSaQXUy', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(19, 'Monique Kilback DVM', 'egreen@example.org', '6534', NULL, '2025-05-29 08:39:01', '$2y$12$urZkSbNLcDuhvA9tWAqUSOeo2ATmQOzxNoz0an.Je1xlnTR.RUCdm', 'jQPYe64Wnq', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(20, 'Cayla O\'Hara', 'christophe.quigley@example.org', '4380', NULL, '2025-05-29 08:39:01', '$2y$12$SLqp38vmiPfkBmpVMLzoL.0dUVvCm1YD.VbxINRGNFYLQevALntEm', 'wiVesW7vNS', '2025-05-29 08:39:01', '2025-05-29 08:39:01', NULL),
(21, 'Prof. Jett Quitzon', 'jordane.vonrueden@example.net', '7497', NULL, '2025-05-29 08:39:02', '$2y$12$d5Qzy8WHLnTnjGH8kFQFdepNoIkgASJeeUN0.xgXBGeHnO.//vbHC', 'iWXQhvq9Jh', '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(22, 'Ms. Bernita Ankunding DDS', 'krystal.hackett@example.net', '7110', NULL, '2025-05-29 08:39:02', '$2y$12$rro.uaxvDR6gCrU1b/FeY.vISba95hOa49SSOew/cMZ/lzR0sT0yO', 'GtEgNcpmY7', '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(23, 'Reva Thompson', 'lfritsch@example.org', '7376', NULL, '2025-05-29 08:39:02', '$2y$12$3ZTu6Dd1arssSORns1LIF.3kAHGDiPdzax4xd6VzkR2A8scK57Is.', 'vhR7nPePnE', '2025-05-29 08:39:02', '2025-05-29 08:39:02', NULL),
(24, 'Arturo Von', 'njacobs@example.net', '8652', NULL, '2025-05-29 08:39:02', '$2y$12$FAnvZOxx4djZkvrMsOJWleSbHouskoR6//eh6UMsPKOKa5ODjUxgi', 'NsXyLUucj1', '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(25, 'Katherine Ratke', 'caden.bernhard@example.com', '5853', NULL, '2025-05-29 08:39:03', '$2y$12$8rx9J0h7zGuucslqtdLkKeENCOIFV29O3.Glbnt7ms8R0uXqlUxwS', 'HVMoP86gyZ', '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(26, 'Gunnar Jones', 'bahringer.adriana@example.org', '9977', NULL, '2025-05-29 08:39:03', '$2y$12$zlrBpCqarMgK7V68GM8aduVNtXMybP8QBwpMBjhQFTNuRwi1XDPRe', '3x4NDz6l1F', '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(27, 'Kacie Marvin', 'nschoen@example.org', '7213', NULL, '2025-05-29 08:39:03', '$2y$12$YOQ7q7TS37zy3ioL9wMxJO7cbVgvtRP4h41yQZLR.bDCPDWTObfzS', 'df9E3u5Dr7', '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(28, 'Beatrice Shanahan I', 'roma.dach@example.com', '3495', NULL, '2025-05-29 08:39:03', '$2y$12$SQFtIPzSlAv1wG7GLFYIR.Z8osLPT09NFYZY0XNmShe/HojbStE3y', 'YoZxp93xHJ', '2025-05-29 08:39:03', '2025-05-29 08:39:03', NULL),
(29, 'Dr. Dorian Lindgren V', 'wilhelmine24@example.com', '3617', NULL, '2025-05-29 08:39:03', '$2y$12$Tk7BilgTanmEWQ0RmjKjX.n8nK9P9Y8oZ.ITOSDyboPkurq1ADL2m', '0ViHWYJSQE', '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(30, 'Clementina Schuster', 'avery28@example.org', '9839', NULL, '2025-05-29 08:39:04', '$2y$12$7pf.b07zaNaZVMcG0iSGluAKSTWIsRd8eV0rogfA88k42DRJLCxYy', 'rYbSTyBvRX', '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(31, 'Berry Turner', 'kaela.corkery@example.net', '6269', NULL, '2025-05-29 08:39:04', '$2y$12$wh7tVk2cxpKXtauyhV0l2.LCA87BVJaxQr1L1YH4OAYh8GeYoN2fW', 'OsjY8EqbdY', '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(32, 'Drew Cassin', 'bdare@example.org', '5126', NULL, '2025-05-29 08:39:04', '$2y$12$so0XkeeXQQe4P83502df1.1xP4zOrbHSUHaqUw8Ya9xGiSF5P7UZu', 'eRNQL39GLR', '2025-05-29 08:39:04', '2025-05-29 08:39:04', NULL),
(33, 'Fabiola Windler', 'reggie.franecki@example.com', '3149', NULL, '2025-05-29 08:39:04', '$2y$12$ZwiYDUrTY0fWTqOYBeNmFe18WxvO6DfHYMmfALeWoOQFhq/zbfkES', 'XNdVMLdkry', '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(34, 'Angelica Heathcote', 'paucek.laurel@example.org', '9514', NULL, '2025-05-29 08:39:05', '$2y$12$DhPeGaBZx8B7EYTdww6Mn.2/vazyjXPjXJiXCZFI8/en3WZ2r/Mii', '6f0mrcMMy6', '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(35, 'David Hoeger', 'otho90@example.com', '6763', NULL, '2025-05-29 08:39:05', '$2y$12$HVayZEmK6Ny1eHY.2FFGMeKbAYD6EmBiBIvdJJJDqId/NV/JeyDua', 'q7Lm5Hla5b', '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(36, 'Darrion Raynor', 'zora.mayer@example.com', '8345', NULL, '2025-05-29 08:39:05', '$2y$12$RfHqrWmtsRXiCPnTvR1J2OX5OmAGnuNgSkrwsdh/hRf1DU33p61hW', 'aAu0nWzY1v', '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(37, 'Rosamond Renner MD', 'imogene.spencer@example.com', '9732', NULL, '2025-05-29 08:39:05', '$2y$12$T2d1J8S1UJjQY4bCfRUR5.9RixP/ExqWf8lr72E6qM3ZTKYLG4hwu', 'bdsu4Chss1', '2025-05-29 08:39:05', '2025-05-29 08:39:05', NULL),
(38, 'Otho Orn', 'willie.walter@example.net', '8745', NULL, '2025-05-29 08:39:05', '$2y$12$HFcO1oL5R5ytOkrLUNTSXeS7/mzXUmER.IcGzxPY0Boi8nHG4N4Nq', 'HGLJZNWKae', '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(39, 'Christina Wilderman', 'ottilie.funk@example.org', '6309', NULL, '2025-05-29 08:39:06', '$2y$12$aBmX3pTb8S136PojXJgs0u64hWuLRKhqpiGI0nwhYvDjCc0wh0Ki.', '7HR4TvFyRc', '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(40, 'Ethel Sporer', 'hegmann.rachelle@example.org', '5775', NULL, '2025-05-29 08:39:06', '$2y$12$zNcMkR/i50vlpNqBJ6LJ.OU6q1PlVCY.Bi/gemfrMhGUr6Rj4HEI6', 'fLKMmP0ZW9', '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(41, 'Dayne Lind', 'meredith00@example.org', '5748', NULL, '2025-05-29 08:39:06', '$2y$12$1aPDhCoeTT47xrd6yvsybOVYMX9/KpVOXHCSuwn0iy73uvx97VPai', 'QPD9LOpyf0', '2025-05-29 08:39:06', '2025-05-29 08:39:06', NULL),
(42, 'Orland Medhurst PhD', 'harmony.wuckert@example.net', '8415', NULL, '2025-05-29 08:39:06', '$2y$12$IEJ2PaNK9wa9GEUuXYxBweXsAd4Aa30kuqP6bhvsqRcqN08qudEjm', 'B1uQrGCnAW', '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(43, 'Ari Cronin', 'jakubowski.francesco@example.net', '1690', NULL, '2025-05-29 08:39:07', '$2y$12$GGULcKmI/UHV8cSYDjr7JuSVtDDACo0oMTyEJkdA2acJQ1YQU0Kdy', 'bH3FS3DY0e', '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(44, 'Ms. Maude Blick', 'victor.kutch@example.net', '7986', NULL, '2025-05-29 08:39:07', '$2y$12$Kp0yqmWVEQquTtWw1TOLteaDucedxxiUoGPBX.BH3OFfQ/ZLnqpDa', '2AUJNqPuhC', '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(45, 'Mr. Nelson Rowe DVM', 'tcollier@example.com', '9246', NULL, '2025-05-29 08:39:07', '$2y$12$r6QPY.l7qP1qexRFTL.4l.IkVQFTZuBD48ZkFSYFrvVKVYf/ZIoCS', 'VChzhvSR8i', '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(46, 'Emmalee Haley', 'philip.ratke@example.com', '3436', NULL, '2025-05-29 08:39:07', '$2y$12$uiVNuvbExMDRS1SEoseg0eHhvNV06uWhGSoRDTmNA2Gs9p/FGqeOS', 'rT6wKkt530', '2025-05-29 08:39:07', '2025-05-29 08:39:07', NULL),
(47, 'Coralie White', 'larry51@example.org', '6759', NULL, '2025-05-29 08:39:07', '$2y$12$mE3vXHdVGyKeV6XXlayb5./G2uh1.S0wjy2q2JARbdE1O3pbLGlpq', '1s1IAeGVCn', '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(48, 'Lucius Kunde', 'wilhelmine22@example.org', '9437', NULL, '2025-05-29 08:39:08', '$2y$12$UCmYKwmlFwEkhTxDGAEr9uN7t14/kQz/NHawnBmWsuEKFCe6Gz1Ae', 'PYEGDx5iaW', '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(49, 'Abbie Konopelski', 'katrina.considine@example.net', '6761', NULL, '2025-05-29 08:39:08', '$2y$12$OGzLrDJS2ElgTQfLgTo9fO4EKAK2d6eTD6jTitywLPaIArQZtFvjW', 'jwyAeRaKFC', '2025-05-29 08:39:08', '2025-05-29 08:39:08', NULL),
(50, 'Violet Pollich', 'veum.bernie@example.org', '6810', NULL, '2025-05-29 08:39:08', '$2y$12$iAbK5ehKKC7hnx7N3PQE3enlG30XoMhCPVBqByZRe4uAAGVS8qeMe', 'isNg3emKYq', '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(51, 'Mr. Bud Senger DVM', 'rrempel@example.com', '6569', NULL, '2025-05-29 08:39:09', '$2y$12$U29CMZT58fm8e/3F6P0ZlOU3GdkVyUc7IXhd5UzqoGiDrY7nRUHA6', 'iYlE2iVdsv', '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(52, 'Catalina Swaniawski', 'bosco.tatum@example.com', '3747', NULL, '2025-05-29 08:39:09', '$2y$12$ZXMKiZlfxoS8ZKii1QBptOpi4H1NuHKILhqVp6i1HlBRLeo6fAaFq', 'zlxVAvX1u8', '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(53, 'Lowell Kihn', 'ashley.abbott@example.net', '4608', NULL, '2025-05-29 08:39:09', '$2y$12$9bysF.eTX6hbNse/DbbDj.r5jMX.NOAHyDVjFdIfBbk5sAEmrehnm', '8jzcLNxorN', '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(54, 'Mrs. Creola Kerluke', 'astrid.connelly@example.net', '4816', NULL, '2025-05-29 08:39:09', '$2y$12$spY2rlV2/Z.PZNB51MZJPOBKVsuvCAQcoiBYJ78ByACud.lIx6Y7K', 'vkodmEdhoh', '2025-05-29 08:39:09', '2025-05-29 08:39:09', NULL),
(55, 'Dr. Garfield Hegmann', 'mina42@example.net', '6278', NULL, '2025-05-29 08:39:09', '$2y$12$ClqJmqRIWrp09BBiA.gUp.fMQUlsXoy8dodpFrZcwx4obnBl1I3zm', 'cn9NoqPzef', '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(56, 'Theresa Harris', 'ynikolaus@example.net', '7859', NULL, '2025-05-29 08:39:10', '$2y$12$33fsSSdPdRdsdzr15mo0HecFLpLQ8uYQf8Jj6b7PEn8XyuxkJo3Fy', '4C7O3p9ZOC', '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(57, 'Dulce Kling', 'feil.aiyana@example.com', '9806', NULL, '2025-05-29 08:39:10', '$2y$12$C2AD7lOktVOhaCdwZxnDp.YBeOsv3GrFC1yHjTaCEtLiqHdFTqrRG', 'wyzU635VeN', '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(58, 'Mr. Lindsey Walsh', 'crystal72@example.net', '9011', NULL, '2025-05-29 08:39:10', '$2y$12$Oi6Jt6yRop8nh3QVPgJhyOaIOsdQ65Us6BWTPg2LmQLuyb9TfkUeu', '7T6Wz47S6O', '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(59, 'Dr. Ericka Muller I', 'newell.morar@example.net', '8912', NULL, '2025-05-29 08:39:10', '$2y$12$hHEynlFOiL3HsDDzYsaBb.mwu6LIoKRaWFANFxzObYSkP7t01LkoS', 'HUyM7kAl15', '2025-05-29 08:39:10', '2025-05-29 08:39:10', NULL),
(60, 'Kane Hermiston', 'schimmel.macie@example.net', '2275', NULL, '2025-05-29 08:39:10', '$2y$12$5h2O.iQ2Gv1SWiL2vltDfe7emRtMs5ghe8C8izk9f07vSTav6sLXG', 'B14hoaBkp3', '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(61, 'Dixie Treutel', 'hanna17@example.com', '3514', NULL, '2025-05-29 08:39:11', '$2y$12$11XNn3gU7xp4ClYa0BSRMe3U4asiLj6BVHAC.rrO6yuRi5ccGESEy', 'YNUzStKZKn', '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(62, 'Gonzalo Zieme II', 'wolf.martina@example.com', '8778', NULL, '2025-05-29 08:39:11', '$2y$12$ZNMk3YP9pvJXYGDviDiEBO85JdzWIiY2djtgJAnevObw0qnNRR4WW', 'RDBI86iBSI', '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(63, 'Louisa Bogisich', 'ullrich.audie@example.net', '2661', NULL, '2025-05-29 08:39:11', '$2y$12$1gchaLt1XEdUAMCePk9cQ.s3J75FRj54MnKc6eZsP.CV6sQ8m7nty', 'su4m8JAXYR', '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(64, 'Randi Zieme', 'dereck.bogisich@example.net', '5580', NULL, '2025-05-29 08:39:11', '$2y$12$e4jU5v8bgUgVVuV4dnqOb.K47Iy3IaPijlopf1jeh2YO/xOFuULtC', 'lfE74Xv12A', '2025-05-29 08:39:11', '2025-05-29 08:39:11', NULL),
(65, 'Prof. Verona Stracke', 'sarah.kuhlman@example.org', '8231', NULL, '2025-05-29 08:39:12', '$2y$12$pftFn.qfxJDZaFJVCgHcl.AhZbr6rQOV1U9H4G8gTq3CdQxFWF53W', 'skbvfk4ne2', '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(66, 'Bert Terry Sr.', 'abdul.veum@example.com', '8678', NULL, '2025-05-29 08:39:12', '$2y$12$kqHdCFB2Ei34/878wSLTmefft45EMsQXYukJVE0lNltYCp1oo2Ody', 'HLTkwmRxPs', '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(67, 'Jaycee Hill', 'jacky45@example.com', '5853', NULL, '2025-05-29 08:39:12', '$2y$12$b7B3hUqAhQKNd15UTgSuv.0MWuc5WgfIn5tKc6KLe6UgEVh2hqr5i', 'VFZb1VPvwA', '2025-05-29 08:39:12', '2025-05-29 08:39:12', NULL),
(68, 'Dr. Casper Hegmann IV', 'johnnie62@example.com', '8403', NULL, '2025-05-29 08:39:12', '$2y$12$.kId88OiKFfAKgzSuZ7a3uDYgigQM9NO4YDJeOJinHqdILQ5W7.fW', 'ibP7XCgoxt', '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(69, 'Miss Vergie Wilkinson', 'briana.ziemann@example.org', '8306', NULL, '2025-05-29 08:39:13', '$2y$12$5NuE44mqdt1l0JSXBwKJoOUTnpWfsPnvX04JP5diNrjkFBJN80i2G', 'uEKcXqiAjl', '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(70, 'Olga Murray', 'blaise.cartwright@example.org', '3099', NULL, '2025-05-29 08:39:13', '$2y$12$PWWMTwplvWLzDgP8WtlqA.KZliU3re7MkKgvNwaxnd6cctM8Qxa3.', 'o787yGYIj7', '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(71, 'Miss Cara Waelchi', 'heloise.ryan@example.com', '3962', NULL, '2025-05-29 08:39:13', '$2y$12$DtNAdXvKnaNI197uhoEdIu66VDwYsk1cCvrqCk4uXc5PPPPka3T2y', 'hhvL6RwbGu', '2025-05-29 08:39:13', '2025-05-29 08:39:13', NULL),
(72, 'Emery Murphy', 'haag.camron@example.org', '1993', NULL, '2025-05-29 08:39:13', '$2y$12$5e.lxMVz3tx1F0vTCIDVBugiLG/ibb/I6yIwsY10ldVIaXgRP2d6q', 'tKpoKlM8Y9', '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(73, 'Ms. Emilia Lindgren III', 'dante.schumm@example.org', '1943', NULL, '2025-05-29 08:39:14', '$2y$12$4CqsQgvmqdlFPXsoiCZffuH3Bo8mT4.YqXZMH1yk/szoe.TUXvvyO', 't7JKn6w7Ro', '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(74, 'Irving Ward', 'nash90@example.net', '9398', NULL, '2025-05-29 08:39:14', '$2y$12$gQ26QgTYTLZdw4DP35E2BeD7KkNEjYPrmua6H8NAe3yi//SRQymj2', 'p6DAvmjyYF', '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(75, 'Prof. Amiya Bartell', 'megane35@example.org', '6355', NULL, '2025-05-29 08:39:14', '$2y$12$mgcyjGyuI6zs1AGFsjHAtuQiT/XG0zQ6PVCQVDhIFHwdnfLU7j.2i', '1ak5v3G41s', '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(76, 'Dr. Noah Feest II', 'lesch.emelia@example.net', '9106', NULL, '2025-05-29 08:39:14', '$2y$12$y1nKxVl4VtOkW62HBzPiQOGmG4vGiDvjpB.SpNn.lANip60bZNuOa', 'fzlNdkqiHt', '2025-05-29 08:39:14', '2025-05-29 08:39:14', NULL),
(77, 'Kayli Wolff', 'arnoldo.kutch@example.com', '8575', NULL, '2025-05-29 08:39:14', '$2y$12$G0gC8/EfJ7I486B62ejTFuhLmQL6P/YQHZElVaoxSscWarEDRH8gq', 'Vho1JgqFhE', '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(78, 'Dr. Tomas Stroman', 'maribel.feest@example.org', '2968', NULL, '2025-05-29 08:39:15', '$2y$12$yv2Ecf6YzhUYNmixWefTzu/G5SVg8m72DQFNlMPW/jV6tuhXm.eCa', 'Py9SpY0xiK', '2025-05-29 08:39:15', '2025-05-29 08:39:15', NULL),
(79, 'Irtaza', 'test1@test.com', '4587', NULL, NULL, '$2y$12$I.nC2TL8SsbGc0lMa8.fuO1wGmnFDv1Zf1JHE1kJ1lLO8hs7DHkoy', NULL, '2025-05-29 10:03:51', '2025-05-29 10:03:51', NULL),
(80, 'Osama', 'osama_khizar@test.com', NULL, 'avatars/1751303475.png', NULL, '$2y$12$CUrIAITSIRBkLj1wA2SfJeo0uyAf/Ngt/s0u8IhmKAiVdlCWg1WCu', NULL, '2025-06-30 11:58:44', '2025-06-30 12:11:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batting_scores`
--
ALTER TABLE `batting_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `bowling_figures`
--
ALTER TABLE `bowling_figures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draft_orders`
--
ALTER TABLE `draft_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draft_pools`
--
ALTER TABLE `draft_pools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `draft_pool_players`
--
ALTER TABLE `draft_pool_players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `innings`
--
ALTER TABLE `innings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_players`
--
ALTER TABLE `match_players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medal_types`
--
ALTER TABLE `medal_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `player_medals`
--
ALTER TABLE `player_medals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_profiles`
--
ALTER TABLE `player_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_rankings`
--
ALTER TABLE `player_rankings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `player_statistics`
--
ALTER TABLE `player_statistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `seo_settings_page_slug_unique` (`page_slug`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournament_standings`
--
ALTER TABLE `tournament_standings`
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
-- AUTO_INCREMENT for table `batting_scores`
--
ALTER TABLE `batting_scores`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bowling_figures`
--
ALTER TABLE `bowling_figures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `draft_orders`
--
ALTER TABLE `draft_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `draft_pools`
--
ALTER TABLE `draft_pools`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `draft_pool_players`
--
ALTER TABLE `draft_pool_players`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `innings`
--
ALTER TABLE `innings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `match_players`
--
ALTER TABLE `match_players`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `medal_types`
--
ALTER TABLE `medal_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_medals`
--
ALTER TABLE `player_medals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_profiles`
--
ALTER TABLE `player_profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `player_rankings`
--
ALTER TABLE `player_rankings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_statistics`
--
ALTER TABLE `player_statistics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tournament_standings`
--
ALTER TABLE `tournament_standings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
