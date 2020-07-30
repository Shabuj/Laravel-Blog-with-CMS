-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 04:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about`, `date`) VALUES
(1, 'Web Application Developer and Software Developer, currently living in Pabna, Bangladesh. I have a Bachelor of Science in Computer Science from Pabna University of Science & Technology, and my primary focus and inspiration for my studies is Web Development. In my free time, I am constantly experimenting with new technologies and techniques. I am very passionate about Web Development, and strive to better myself as a developer, and the development community as a whole . I have been studying web development since 2015 and I develop in both Laravel and PHP, though I primarily use Laravel. I am proficient in html,css,xml,javascript,jQuery,ajax,sql/mysql,wordpress,vue js, and strong knowledge about seo. In addition i have more knowledge about c,c++ and a bit about shell programming and also expert in graph algorithm. Know more about me , this is my resume.', '2019-08-04 18:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Java', '2019-08-10 12:39:43', '2019-08-10 12:39:43'),
(2, 'PhP', '2019-08-10 12:42:15', '2019-08-10 23:57:12'),
(3, 'Sports', '2020-04-18 09:57:41', '2020-04-18 09:57:41'),
(4, 'C++', '2020-04-23 00:04:03', '2020-04-23 00:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `massage`, `created_at`, `updated_at`) VALUES
(1, 'Shabuj', 'Hossain', 'shabujpust@gmail.com', 'amar sonar', '2019-08-08 04:31:07', '2019-08-08 04:31:07'),
(3, 'Nayan', 'hasan', 'mspust@gmail.com', 'saajfhf', '2019-08-08 05:36:39', '2019-08-08 05:36:39'),
(4, 'Shabuj', 'Hossain', 'mstmajedakhatun553@gmail.com', 'amar', '2019-08-08 05:40:02', '2019-08-08 05:40:02'),
(5, 'Shabuj', 'Hossain', 'shabujpust@gmail.com', 'anamdj', '2019-08-08 06:08:13', '2019-08-08 06:08:13'),
(6, 'Shabuj', 'Hossain', 'shabujpust@gmail.com', 'anamdj', '2019-08-08 06:08:57', '2019-08-08 06:08:57'),
(7, 'Shabuj', 'Hossain', 'shabujpust@gmail.com', 'amar sonar bangla', '2019-08-08 06:09:18', '2019-08-08 06:09:18'),
(8, 'Rahim', 'Islam', 'ra@gmail.com', 'ertgaihlslcm', '2020-04-09 21:23:11', '2020-04-09 21:23:11'),
(9, 'Shabuj', 'Hossain', 'mstmajedakhatun553@gmail.com', 'gsd', '2020-04-09 21:25:01', '2020-04-09 21:25:01'),
(10, 'amr', 'ss', 'mspust@gmail.com', 'sfadgvsa', '2020-04-19 04:15:38', '2020-04-19 04:15:38');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_07_30_065632_create_titles_table', 4),
(10, '2019_08_04_183414_create_abouts_table', 5),
(15, '2019_08_08_082459_create_contacts_table', 6),
(16, '2019_08_09_012038_create_socials_table', 7),
(17, '2019_07_25_061318_create_catagories_table', 8),
(18, '2020_04_19_081947_create_posts_table', 9);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `catagory_id`, `title`, `body`, `image`, `author`, `tags`, `created_at`, `updated_at`) VALUES
(5, 2, 'Cricket Player', 'AB de villers is a great player in this world and he make everything else .. he played many team all over the world .', 'public/images/8WPWqKxygIKes6NIPHdm49tJ71y7sk2GdIPC8N1v.jpeg', 'Md. Shabuj Hossain', 'Cricket', '2020-04-20 06:02:46', '2020-04-20 06:02:46'),
(6, 2, 'acds', 'dthfsdfs', 'public/images/3EAPCeJugXJ9yG3gbHn3F4eIsv0jVzYvCcwCtoyD.jpeg', 'Md. Shabuj Hossain', 'Cricket', '2020-04-20 06:50:07', '2020-04-21 20:56:38'),
(7, 2, 'PhP programming Language', 'amar', 'public/images/ThBTAIUNWJuKNZnTtyvSivor1VO8vT3IyBCdEuf5.jpeg', 'Nayan Ahmed', 'PHP', '2020-04-20 20:11:56', '2020-04-21 20:57:37'),
(8, 1, 'Java Programming', 'amar sonar bangla ami tomai vlo bashi', 'public/images/O0zwN6iJEqFwvIK0cxzi7KBNiRtOMOsklF6foiWY.jpeg', 'Md. Shabuj Hossain', 'java', '2020-04-22 01:33:18', '2020-04-22 01:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tw` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ld` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `date`) VALUES
(1, 'EVERGREEN', '2019-07-30 07:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md Shabuj Hossain', 'shabujpust@gmail.com', NULL, '$2y$10$7uOUMvoPjPVupvuGlZA5iOLJJ.uK9Vr2UF.PJ4q3wHMsfAFtvSP7q', 'xfGb0O1LhTfui1gnjeGzn584j4Nl5eQIBHdmJDkCNbtVAwf7jpxlrsf6gL3P', '2020-04-22 22:06:39', '2020-04-22 22:06:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
