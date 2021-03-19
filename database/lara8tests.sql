-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 05:31 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara8tests`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
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
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pran acharjee', 'admin@gmail.com', '2021-02-19 20:55:20', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PDXryWxMXn', '2021-02-19 20:55:20', '2021-02-19 20:55:20');

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
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `subject`, `massage`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'mmm', 'kppppppppp', 14, '2021-01-27 23:18:50', '2021-01-27 23:18:50');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_10_05_042556_create_sessions_table', 1),
(13, '2014_10_12_000000_create_users_table', 2),
(14, '2021_01_26_130550_create_notices_table', 3),
(16, '2021_01_26_161022_create_money_table', 4),
(17, '2021_01_27_144456_create_massages_table', 5),
(18, '2021_02_01_144749_create_admins_table', 6),
(19, '2021_02_11_135509_create_slides_table', 6),
(20, '2021_02_11_141050_create_product_images_table', 6),
(21, '2021_02_13_052759_create_activities_table', 6),
(22, '2021_02_15_060151_create_user_comments_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `money`
--

CREATE TABLE `money` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_number` bigint(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `money`
--

INSERT INTO `money` (`id`, `payment_number`, `payment_method`, `amount`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 222222, 'B-kash', 900, 14, '2021-01-27 21:10:11', '2021-01-27 21:10:11'),
(2, 1700000000, 'B-kash', 900, 14, '2021-01-27 21:18:02', '2021-01-27 21:18:02'),
(3, 1700000000, 'B-kash', 900, 15, '2021-01-27 21:31:31', '2021-01-27 21:31:31'),
(4, 1700000000, 'B-kash', 900, 1, '2021-01-27 21:32:24', '2021-01-27 21:32:24'),
(5, 1700000000, 'B-kash', 900, 4, '2021-01-27 21:35:15', '2021-01-27 21:35:15'),
(6, 1700000000, 'B-kash', 900, 1, '2021-01-27 21:36:24', '2021-01-27 21:36:24'),
(7, 1700000000, 'B-kash', 900, 1455, '2021-01-27 21:37:16', '2021-01-27 21:37:16'),
(8, 1700000000, 'B-kash', 900, 145, '2021-01-27 21:46:59', '2021-01-27 21:46:59'),
(9, 1700000000, 'B-kash', 900, 4, '2021-01-27 21:48:27', '2021-01-27 21:48:27'),
(10, 1700000000, 'B-kash', 900, 143, '2021-01-27 21:48:58', '2021-01-27 21:48:58'),
(11, 1700000000, 'B-kash', 900, 14, '2021-01-27 21:52:07', '2021-01-27 21:52:07'),
(12, 1700000000, 'B-kash', 900, 145, '2021-01-27 21:52:12', '2021-01-27 21:52:12'),
(13, 1700000000, 'B-kash', 900, 145, '2021-01-27 21:52:19', '2021-01-27 21:52:19'),
(14, 1700000000, 'B-kash', 900, 145, '2021-01-27 21:53:34', '2021-01-27 21:53:34'),
(15, 1700000000, 'B-kash', 900, 145, '2021-01-27 21:56:17', '2021-01-27 21:56:17'),
(16, 1700000000, 'B-kash', 900, 145, '2021-01-27 21:56:47', '2021-01-27 21:56:47'),
(17, 1700000000, 'B-kash', 900, 14, '2021-01-27 22:04:20', '2021-01-27 22:04:20'),
(18, 1700000000, 'U-cash', 900, 14, '2021-01-27 22:19:31', '2021-01-27 22:19:31'),
(19, 1700000000, 'U-cash', 900, 14, '2021-01-27 22:40:32', '2021-01-27 22:40:32'),
(20, 1700000000, 'U-cash', 900, 14, '2021-01-27 23:26:19', '2021-01-27 23:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_full` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `DD` int(11) NOT NULL,
  `MM` int(11) NOT NULL,
  `YYYY` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `notice`, `notice_full`, `DD`, `MM`, `YYYY`, `created_at`, `updated_at`) VALUES
(1, 'jnnnnnnnnnn', 'jbbbbbbbbbbbbbbbbbbbbb iboooooooooooooooooooooooooooo b  iouuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu  ibuuuuuuuuuuuuuuuuuu  ibuuuuuuuuuuuuuuuuuuuuuuuuu i     uuuuuubbbbbbbbbbbb  uuuuuuuuuuuu u                ', 1, 1, 2021, '2021-01-26 13:45:18', '2021-01-26 13:45:18'),
(2, 'General Meeting', 'The history of the British penny (​1⁄240 of a pound sterling) from 1901 to 1970 saw it remain a large bronze coin throughout that time, with the obverse depicting the monarch and the reverse Britannia. The obverse from 1902 to 1910 featured George William', 2, 3, 2021, '2021-01-26 15:10:50', '2021-01-26 15:10:50'),
(3, 'General Meeting', 'The history of the British penny (​1⁄240 of a pound sterling) from 1901 to 1970 saw it remain a large bronze coin throughout that time, with the obverse depicting the monarch and the reverse Britannia. The obverse from 1902 to 1910 featured George William', 2, 3, 2021, '2021-01-26 15:10:50', '2021-01-26 15:10:50'),
(4, 'General Meeting', 'INSERT INTO `notices` (`id`, `notice`, `notice_full`, `DD`, `MM`, `YYYY`, `created_at`, `updated_at`) VALUES (\'2\', \'General Meeting\', \'The history of the British penny (​1⁄240 of a pound sterling) from 1901 to 1970 saw it remain a large bronze coin throughout that time, with the obverse depicting the monarch and the reverse Britannia. The obverse from 1902 to 1910 featured George William de Saulles\\\'s depiction of Edward VII, followed by Bertram Mackennal\\\'s portrait of George V. No pennies were produced for commerce in 1933, as there were a sufficient number in circulation. At least seven were struck for placement beneath foundation stones and in museums. Edward VIII\\\'s short reign is represented only by a single pattern coin, dated 1937. That year, a new obverse design depicting George VI by Humphrey Paget went into use. From 1953, the penny bore Mary Gillick\\\'s portrait of Elizabeth II. The officials who planned decimalisation in the 1960s did not favour keeping the large bronze penny. It quickly went out of use after Decimal Day, 15 February 1971, and was demonetised on 31 August 1971\', \'2\', \'3\', \'2021\', \'2021-01-26 07:10:50\', \'2021-01-26 07:10:50\');', 3, 5, 2021, '2021-01-26 15:13:08', '2021-01-26 15:13:08'),
(5, 'General Meeting', 'INSERT INTO `notices` (`id`, `notice`, `notice_full`, `DD`, `MM`, `YYYY`, `created_at`, `updated_at`) VALUES (\'2\', \'General Meeting\', \'The history of the British penny (​1⁄240 of a pound sterling) from 1901 to 1970 saw it remain a large bronze coin throughout that time, with the obverse depicting the monarch and the reverse Britannia. The obverse from 1902 to 1910 featured George William de Saulles\\\'s depiction of Edward VII, followed by Bertram Mackennal\\\'s portrait of George V. No pennies were produced for commerce in 1933, as there were a sufficient number in circulation. At least seven were struck for placement beneath foundation stones and in museums. Edward VIII\\\'s short reign is represented only by a single pattern coin, dated 1937. That year, a new obverse design depicting George VI by Humphrey Paget went into use. From 1953, the penny bore Mary Gillick\\\'s portrait of Elizabeth II. The officials who planned decimalisation in the 1960s did not favour keeping the large bronze penny. It quickly went out of use after Decimal Day, 15 February 1971, and was demonetised on 31 August 1971\', \'2\', \'3\', \'2021\', \'2021-01-26 07:10:50\', \'2021-01-26 07:10:50\');', 3, 5, 2021, '2021-01-26 15:13:08', '2021-01-26 15:13:08');

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
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('RfGtmcsKQUUB9JG8002LkhQ5tlMymMaIvQTiC58p', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.150 Safari/537.36 Edg/88.0.705.68', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZU14WnhxVGhtTWpYNFZtYjVTMGt6NlVHME8zMnBZY3N5Q2paNDFMciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYTh0ZXN0cy9wdWJsaWMvYWRtaW5NYW5hZ2VTbGlkZXIiO31zOjUyOiJsb2dpbl9hZG1pbl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1613739359);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `image`, `button_text`, `button_link`, `created_at`, `updated_at`) VALUES
(1, 'active', 'a.jpg', 'ddddddddddddd', 'ffffffffffffffffff', '2021-02-19 12:37:19', '2021-02-19 12:37:19'),
(2, 'active', 'a.jpg', 'ddddddddddddd', 'ffffffffffffffffff', '2021-02-19 12:37:19', '2021-02-19 12:37:19');

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
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `is_varified` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `verification_code`, `is_varified`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(14, 'Rahul Acharjee', 'user@gmail.com', NULL, '$2y$10$JqEeaPk/WZKxeu6MLF3W5ev6kAU5mfJi7FG9Gdr/75drw6T71SEtK', 'd907ce596673a3bdc931b7327b709ca919550531', '1', NULL, NULL, NULL, '2021-01-23 23:18:54', '2021-01-23 23:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `money`
--
ALTER TABLE `money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `money`
--
ALTER TABLE `money`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
