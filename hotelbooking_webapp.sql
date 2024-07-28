-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 04:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelbooking_webapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'waiting',
  `start_date` varchar(255) DEFAULT NULL,
  `end_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `name`, `email`, `phone`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, '2', 'Nokib', 'rokibhasan0376@gmail.com', '011234567892', 'approve', '2024-05-28', '2024-05-31', '2024-05-27 11:51:32', '2024-05-27 12:05:23'),
(3, '1', 'Hasan', 'hasanevan986@gmail.com', '01705741773', 'approve', '2024-05-29', '2024-05-30', '2024-05-28 12:44:38', '2024-05-28 12:45:09'),
(4, '1', 'Hasan', 'hasanevan986@gmail.com', '01705741773', 'waiting', '2024-06-02', '2024-06-03', '2024-06-01 08:22:00', '2024-06-01 08:22:00'),
(5, '1', 'Hasan', 'hasanevan986@gmail.com', '01705741773', 'waiting', '2024-06-04', '2024-06-05', '2024-06-01 08:24:29', '2024-06-01 08:24:29');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Evan Hasan', 'hasanevan986@gmail.com', '01705741773', 'More organized', '2024-05-27 04:45:20', '2024-05-27 04:45:20'),
(2, 'Nokib', 'rokibhasan0376@gmail.com', '01705741773', 'Hello', '2024-05-27 11:58:57', '2024-05-27 11:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `coxsbazars`
--

CREATE TABLE `coxsbazars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) NOT NULL DEFAULT 'yes',
  `room_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coxsbazars`
--

INSERT INTO `coxsbazars` (`id`, `room_title`, `image`, `description`, `price`, `wifi`, `room_type`, `created_at`, `updated_at`) VALUES
(1, 'Single Room', '1717248373.jpg', 'Attach belkoni, Attach Bath', '2500', 'yes', 'premium', '2024-06-01 07:26:13', '2024-06-01 07:55:54'),
(2, 'Double Room', '1717248502.jpg', 'Double Bed room, TV, double Belkoni.', '3000', 'yes', 'deluxe', '2024-06-01 07:28:22', '2024-06-01 07:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1716797015.jpg', '2024-05-27 02:03:35', '2024-05-27 02:03:35'),
(2, '1716797028.jpg', '2024-05-27 02:03:48', '2024-05-27 02:03:48'),
(3, '1716797043.jpg', '2024-05-27 02:04:03', '2024-05-27 02:04:03'),
(4, '1716797072.jpg', '2024-05-27 02:04:32', '2024-05-27 02:04:32'),
(5, '1716797083.jpg', '2024-05-27 02:04:43', '2024-05-27 02:04:43'),
(6, '1716808792.jpg', '2024-05-27 05:19:52', '2024-05-27 05:19:52'),
(7, '1716808812.jpg', '2024-05-27 05:20:12', '2024-05-27 05:20:12'),
(8, '1716808830.jpg', '2024-05-27 05:20:30', '2024-05-27 05:20:30'),
(9, '1716808854.jpg', '2024-05-27 05:20:54', '2024-05-27 05:20:54'),
(10, '1716808862.jpg', '2024-05-27 05:21:02', '2024-05-27 05:21:02'),
(11, '1716808871.jpg', '2024-05-27 05:21:11', '2024-05-27 05:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hotel_name` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotel_name`, `place`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SeaMoon', 'Cox\'s Bazar', '1717007978.jpg', '2024-05-28 14:38:04', '2024-05-29 12:39:38'),
(2, 'Redisson Blue', 'Dhaka', '1717007209.jpg', '2024-05-29 12:26:49', '2024-05-29 12:26:49'),
(3, 'Dreamers Paradise', 'Saint Martin', '1717007959.jpg', '2024-05-29 12:30:48', '2024-05-29 12:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_04_30_173608_create_sessions_table', 1),
(7, '2024_05_01_173013_create_rooms_table', 2),
(8, '2024_05_03_195643_create_bookings_table', 3),
(9, '2024_05_04_180027_add_status_field_to_bookings', 4),
(10, '2024_05_05_133007_create_gallaries_table', 5),
(11, '2024_05_06_165756_create_contacts_table', 6),
(12, '2024_05_26_190751_create_notifications_table', 7),
(13, '2024_05_28_200537_create_hotels_table', 8),
(14, '2024_06_01_122035_create_coxsbazars_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `room_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `wifi` varchar(255) NOT NULL DEFAULT 'yes',
  `room_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_title`, `image`, `description`, `price`, `wifi`, `room_type`, `created_at`, `updated_at`) VALUES
(1, 'Ocean View Suite', '1716796736.jpg', 'A luxurious suite with stunning ocean views, modern amenities, and a private balcony. Ideal for a relaxing getaway.', '2000', 'yes', 'deluxe', '2024-05-27 01:58:56', '2024-05-27 01:58:56'),
(2, 'Cityscape Room', '1716796795.jpg', 'A chic room offering panoramic views of the city skyline, equipped with all the comforts for a convenient stay.', '1500', 'yes', 'premium', '2024-05-27 01:59:55', '2024-05-27 02:02:19'),
(3, 'Cozy Corner Room', '1716796841.jpg', 'A comfortable and cozy room, perfect for solo travelers or couples looking for a budget-friendly option.', '1000', 'no', 'regular', '2024-05-27 02:00:41', '2024-05-27 02:00:41'),
(4, 'Garden Retreat Room', '1716796880.jpg', 'A serene room overlooking beautiful gardens, providing a tranquil atmosphere and modern conveniences.', '1800', 'yes', 'premium', '2024-05-27 02:01:20', '2024-05-27 02:02:41'),
(5, 'Mountain View Lodge', '1716796915.jpg', 'A spacious room with breathtaking mountain views, featuring rustic decor and all necessary amenities for a memorable stay.', '2500', 'yes', 'deluxe', '2024-05-27 02:01:55', '2024-05-27 02:01:55'),
(10, 'Single Room', '1717248062.jpg', 'Two bed, TV, Attach Bath', '2500', 'yes', 'premium', '2024-06-01 07:21:02', '2024-06-01 07:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JybPbmH8hZ9dCe08eGmuCuPEhqU87l2F4mVP54yd', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZm1ScWN6V1ZrZlFTcWM3R29JdkkzbjVFQTAwdVJtVVM1cFV4YkhUTiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vdXJfcm9vbXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1717252344);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `usertype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', '0123456789', 'user', NULL, '$2y$10$MyGxpPBNejoXQjDUn0CN.eGaB8hg2/tofgjWT2bGoFCmBo0sMUCSu', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-30 12:03:35', '2024-04-30 12:03:35'),
(2, 'Rokib', 'admin@gmail.com', '01872147477', 'admin', NULL, '$2y$10$LFhYTJO4Hr4o5YoimVxxVuZ2oTEel0cRPNgIADBvSsStJTDFkyvrC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-30 12:04:52', '2024-04-30 12:04:52'),
(3, 'rokib', 'rokib@gmail.com', '12345678900', 'user', NULL, '$2y$10$UBwG1BjULwT5f0miFuBPL.Joc1H3MmXilPBWtqpm3p/Mb.TKnjTBG', NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-30 15:16:26', '2024-04-30 15:16:26'),
(4, 'Hasan', 'hasanevan986@gmail.com', '01705741773', 'user', NULL, '$2y$10$GwPDXwpaSwX9vBrcINNN3.JrfiKKtoH9odeAxot367synQ/cSDgcy', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-27 04:44:31', '2024-05-27 04:44:31'),
(5, 'Nokib', 'rokibhasan0376@gmail.com', '011234567892', 'user', NULL, '$2y$10$W/6AAtSd3Fr/3BnXmqChT.1BdW4LAfr9A.teVSkY8AK5xT1ANgltC', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-27 11:49:22', '2024-05-27 11:49:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coxsbazars`
--
ALTER TABLE `coxsbazars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coxsbazars`
--
ALTER TABLE `coxsbazars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
