-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 
-- サーバのバージョン： 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seasonwalk`
--
CREATE DATABASE IF NOT EXISTS `seasonwalk` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `seasonwalk`;

-- --------------------------------------------------------

--
-- テーブルの構造 `flowers`
--

CREATE TABLE `flowers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `word` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `flowers`
--

INSERT INTO `flowers` (`id`, `name`, `detail`, `word`, `created_at`, `updated_at`) VALUES
(1, '桜', 'バラ科・サクラ属', '精神美', NULL, NULL),
(2, '向日葵', 'キク科・ヒマワリ属', '', NULL, NULL),
(3, '秋桜', 'キク科・コスモス属', '', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `maps`
--

CREATE TABLE `maps` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `maps`
--

INSERT INTO `maps` (`id`, `photo`, `date`, `area`, `created_at`, `updated_at`) VALUES
(4, '23370_15.png', '2020-12-01 00:00:00', '神奈川県', NULL, NULL),
(6, 'C:\\xampp\\tmp\\php6EB1.tmp', '2020-11-09 17:37:25', '東京都', NULL, NULL),
(7, 'C:\\xampp\\tmp\\phpA22.tmp', '2020-12-04 00:00:00', '神奈川県', NULL, NULL),
(8, 'C:\\xampp\\tmp\\phpB1CC.tmp', '2020-12-01 00:00:00', '神奈川県', NULL, NULL),
(9, 'C:\\xampp\\tmp\\php713A.tmp', '2020-12-01 00:00:00', '神奈川県', NULL, NULL),
(10, 'C:\\xampp\\tmp\\php53CE.tmp', '2020-12-01 00:00:00', '神奈川県', NULL, NULL),
(11, 'storage/productimage/o8M07hS95K1Dvw1WMVZSB3agf9lEo3tWRee0AUo9.png', '2020-12-01 00:00:00', '神奈川県', NULL, NULL),
(12, 'C:\\xampp\\tmp\\phpA806.tmp', '2020-12-01 00:00:00', '神奈川県', NULL, NULL),
(13, 'C:\\xampp\\tmp\\phpC922.tmp', '2020-12-01 00:00:00', '神奈川県', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_11_09_050735_create_players_table', 1),
(2, '2020_11_09_051719_create_maps_table', 1),
(3, '2020_11_09_051927_create_flowers_table', 1),
(4, '2020_11_09_052032_create_presents_table', 1),
(5, '2020_11_09_050735_create_people_table', 2),
(6, '2020_12_01_024353_create_products_table', 3),
(7, '2020_12_04_014705_create_albums_table', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `step` int(11) NOT NULL,
  `login` int(11) NOT NULL,
  `present` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `people`
--

INSERT INTO `people` (`id`, `name`, `date`, `step`, `login`, `present`, `rank`, `point`, `created_at`, `updated_at`) VALUES
(1, 'taro', '1999-12-22', 2000, 220, NULL, 150, 1500, NULL, NULL),
(2, 'hanako', '1985-11-15', 3000, 25, NULL, 120, 2000, NULL, NULL),
(3, 'jiro', '1985-09-17', 1089, 3, NULL, NULL, 100, NULL, NULL),
(4, 'yoko', '1995-02-11', 5292, 45, NULL, NULL, NULL, NULL, NULL),
(6, 'kumi', '1984-07-06', 3432, 23, NULL, NULL, NULL, NULL, NULL),
(7, 'mamiko', '1989-12-31', 3211, 33, NULL, NULL, NULL, NULL, NULL),
(8, 'aaa', '2020-12-01', 1089, 214, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `players`
--

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `step` int(11) NOT NULL,
  `login` int(11) NOT NULL,
  `present` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `point` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `players`
--

INSERT INTO `players` (`id`, `name`, `date`, `step`, `login`, `present`, `rank`, `point`, `created_at`, `updated_at`) VALUES
(1, 'taro', '1999-12-22', 2000, 2147483647, NULL, 120, 1500, NULL, NULL),
(2, 'hanako', '1985-11-15', 3000, 2147483647, '', 120, 2000, NULL, NULL),
(3, 'jiro', '1985-09-17', 1089, 3, NULL, NULL, NULL, NULL, NULL),
(4, 'aaa', '1999-10-11', 1234, 20, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `presents`
--

CREATE TABLE `presents` (
  `id` int(10) UNSIGNED NOT NULL,
  `season` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grow` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flower` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `presents`
--

INSERT INTO `presents` (`id`, `season`, `seed`, `bud`, `grow`, `flower`, `created_at`, `updated_at`) VALUES
(1, '春', 'face1.png', 'hijklmn', 'opqrstu', 'vwxyzz', NULL, NULL),
(2, '夏', 'cccccccc', 'bbbbbbbb', 'abababab', 'mmmmmmm', NULL, NULL),
(3, '秋', 'face1.png', 'hijklmn', 'opqrstu', 'vwxyzzz', NULL, NULL),
(5, '冬', 'face2.png', 'face1.png', 'MS_logo.png', 'Yahoo_logo.png', NULL, NULL),
(6, '春', 'face1.png', 'hijklmn', 'opqrstu', 'vwxyzzz', NULL, NULL),
(7, '夏', 'cccccccc', 'bbbbbbbb', 'abababab', 'mmmmmmm', NULL, NULL),
(8, '秋', 'face2.png', 'face1.png', 'MS_logo.png', 'Yahoo_logo.png', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `season` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `products`
--

INSERT INTO `products` (`id`, `path`, `product_name`, `season`, `created_at`, `updated_at`) VALUES
(1, 'storage/productimage/XWI7MXx1HG7MobsL9POhfmi2NsZO57dfWOIuYCwo.png', '桜', '0', NULL, NULL),
(2, 'storage/productimage/y4Gj9qMZSbIzp10vQqsVW9G9YUPAt2ab8EbzZxL1.png', '木', '0', NULL, NULL),
(3, 'storage/productimage/Qw42pIyB6r2hgM1zMLPugjlKuklLNWbZtAo0Oe49.png', 'みどり', '0', NULL, NULL),
(4, 'storage/productimage/8i9cWi6k9dnLqSZX7pqngy2BQZuRucMpJsA6uzl7.png', '花', '0', NULL, NULL),
(21, 'storage/productimage/A462o5vEa55KeC1WPfyztEAva1SJjegLySdIenUn.png', '木３', '0', NULL, NULL),
(23, 'storage/productimage/WjLKd4W6rUPRitducGEu9ATHE9mankoX75UMJbVo.png', '梅', '0', NULL, NULL),
(24, 'storage/productimage/7svI0OHTDo0wNjHWyF0BRML0tOeAw6PPF8JX2MHC.png', '花', '0', NULL, NULL),
(25, 'storage/productimage/wHkk2x1nLbirmjIEj9sy3YeVSMncA4e8vHl2TaNw.png', '桜2', '0', NULL, NULL),
(27, 'storage/productimage/UH2zS9K1r468syQukBDFv5CQBQ0mR569T4ZQ3Zff.png', '桜', '0', NULL, NULL),
(28, 'storage/productimage/H1khZJW9OSJhMQrRpoSGdhCsFAi0c8xsMBFbMw86.png', 'みどり', '0', NULL, NULL),
(29, 'storage/productimage/KdRknUZG2r5oKrRPJtRjg3GXV0di5WRnkvQP76M4.png', 'ふゆ', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
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
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jiro', 'aaa@com', NULL, '$2y$10$U9giJz4WPFk5B3yEVm9LKewNf59X.N2/Ip0Gr1lfI5l/KqvEXmlqq', NULL, '2020-11-16 17:17:18', '2020-11-16 17:17:18'),
(2, 'hanako', 'ccc@gmail.com', NULL, '$2y$10$RR5PXtznmSdDQF1g5rAUteogJRtIE58efZ10NgjdCV1cE4jzG0h3u', NULL, '2020-11-16 21:34:34', '2020-11-16 21:34:34'),
(3, 'taro', 'abc@ccc.jp', NULL, '$2y$10$9p.qYK.3PlIqHkg6QR5jyeYX/o8bAgd8eBuXwPSB.RfN2ViGXi59y', NULL, '2020-11-17 16:21:31', '2020-11-17 16:21:31'),
(4, 'mamiko', 'xyz@bbb.com', NULL, '$2y$10$vl9o6Y1wvYthsd8MIRXghe2lnMiXBfGn3kALL1DZDn9lX6yETJ8d2', NULL, '2020-11-19 20:03:10', '2020-11-19 20:03:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flowers`
--
ALTER TABLE `flowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presents`
--
ALTER TABLE `presents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flowers`
--
ALTER TABLE `flowers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presents`
--
ALTER TABLE `presents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
