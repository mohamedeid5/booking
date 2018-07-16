-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2018 at 05:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `email`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin', 'admin@booking.com', '$2y$10$INkh2R3KZbYXC8.ZNgv0IOZrdQLI3qhtmv9wJTHvudKLbVcygJahG', 1, 'jErUNm1oGBI3bvuQnUt2Og8OcKHaMhzD49vnDlu1X7HVq4fccJI2w3waczG5', '2018-07-15 00:19:44', '2018-07-15 00:19:44'),
(4, 'admin', 'two', 'admin2@booking.com', 'admin2', NULL, NULL, '2018-07-15 02:48:53', '2018-07-15 02:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `nights` int(11) DEFAULT NULL,
  `rooms` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `user_id`, `hotel_id`, `price`, `nights`, `rooms`, `adult`, `children`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1500, 3, 1, 1, 0, '2018-07-13', '2018-07-15', '2018-07-14 00:20:13', '2018-07-14 00:20:13'),
(2, 1, 3, 300, 3, 2, 2, 2, '2018-07-12', '2018-07-30', '2018-07-14 01:09:03', '2018-07-14 01:09:03'),
(3, 1, 3, 300, 3, 1, 1, 0, '2018-07-12', '2018-07-30', '2018-07-14 01:30:14', '2018-07-14 01:30:14'),
(4, 1, 3, 300, 3, 1, 1, 0, '2018-07-12', '2018-07-30', '2018-07-14 01:30:20', '2018-07-14 01:30:20'),
(5, 1, 3, 300, 3, 1, 1, 0, '2018-07-12', '2018-07-15', '2018-07-14 01:37:17', '2018-07-14 01:37:17'),
(6, 1, 3, 300, 3, 1, 1, 0, '2018-07-12', '2018-07-15', '2018-07-14 01:38:35', '2018-07-14 01:38:35'),
(7, 1, 4, 4050, 3, 1, 1, 0, '2018-07-12', '2018-07-30', '2018-07-14 03:42:51', '2018-07-14 03:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country`, `created_at`, `updated_at`) VALUES
(8, 'dahab', 'Egypt', '2018-07-10 00:08:47', '2018-07-13 23:08:31'),
(11, 'cairo', 'Egypt', '2018-07-14 02:06:28', '2018-07-14 02:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) UNSIGNED NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotel_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` int(191) NOT NULL,
  `adult` int(191) NOT NULL,
  `children` int(191) NOT NULL,
  `distance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `country`, `city_id`, `location`, `hotel_name`, `rooms`, `adult`, `children`, `distance`, `price`, `rate`, `description`, `from`, `to`, `created_at`, `updated_at`) VALUES
(3, 'egypt', 8, 'egy', 'Nile Hotel', 10, 10, 10, '15', '100', '4', NULL, '2018-07-10', '2018-07-30', '2018-07-09 23:28:17', '2018-07-14 02:34:15'),
(4, 'Egypt', 11, 'Egypt,Cairo,Nasr City', 'Ramada', 40, 40, 10, '25', '1350', '3', NULL, '2018-07-12', '2018-07-30', '2018-07-14 02:12:43', '2018-07-14 02:42:11'),
(6, 'egypt', 8, 'egy', 'nile', 10, 10, 10, '15', '100', '4', NULL, '2018-07-10', '2018-07-30', '2018-07-14 02:31:19', '2018-07-14 02:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `i_p_s`
--

CREATE TABLE `i_p_s` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `i_p_s`
--

INSERT INTO `i_p_s` (`id`, `user_id`, `ip`, `country`, `country_code`, `city`, `state`, `currency`, `created_at`, `updated_at`) VALUES
(1, 1, '156.201.108.26', 'Egypt', 'EG', 'Aga', 'Aga', 'EGP', '2018-07-11 03:14:21', '2018-07-11 10:25:21'),
(2, 5, '156.201.108.26', 'Egypt', 'EG', 'Minya', 'MN', 'EGP', '2018-07-11 00:59:00', '2018-07-11 00:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_11_022616_create_ips_table', 2),
(4, '2018_07_11_023841_create_ips_table', 3),
(6, '2018_07_11_055916_create_hotels_table', 4),
(7, '2018_07_11_094230_create_cities_table', 5),
(8, '2018_07_13_005438_create_books_table', 6),
(9, '2018_07_14_045844_create_admins_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed', 'Eid', 'meid368@gmail.com', '$2y$10$PGO9jHabHYqoeAzgM9kr5OAcJmzYckRGCGNfqNYI6qBg2iMQ7eoqG', NULL, 'c6S9Gm2ndJZbOiCc8gUvs5px8cXAew3RA6Fqt7xf63zHrhXsCYRJy89yCP0h', '2018-07-10 22:14:52', '2018-07-15 02:38:44');

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
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_hotel` (`city_id`);

--
-- Indexes for table `i_p_s`
--
ALTER TABLE `i_p_s`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `i_p_s`
--
ALTER TABLE `i_p_s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `city_hotel` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
