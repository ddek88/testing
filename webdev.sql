-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 11:26 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color`, `created_at`, `updated_at`) VALUES
(1, 'rgb(255, 255, 255)', '2023-02-16 02:55:04', '2023-02-16 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `customs`
--

CREATE TABLE `customs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `custom` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `identities`
--

CREATE TABLE `identities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_web` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `identities`
--

INSERT INTO `identities` (`id`, `nama_web`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Tangan Judi', 'Game slot yang mayoritas disukai para player slot di Indonesia berasal dari provider Pragmatic Play, dimana game favorite adalah Gates of Olympus ( Zeus ) dan Starlight Princess ( Inces )', '2023-02-16 02:55:04', '2023-02-16 03:24:24');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'images/ZnaPoy6q73bXa04uPRmenwCSdlHZOQ8vYtbTPXQm.png', '2023-02-16 02:55:04', '2023-02-16 03:12:50'),
(2, 'images/RmXXV1yPgyiwXa0eEnqqlX1Ga8NwGWJA9VRjOPIk.png', '2023-02-16 02:55:04', '2023-02-16 03:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `navbar_login` varchar(255) NOT NULL,
  `sidebar_daftar` varchar(255) NOT NULL,
  `sidebar_login` varchar(255) NOT NULL,
  `tanggung_jawab` varchar(255) NOT NULL,
  `dukungan_browser` varchar(255) NOT NULL,
  `refferal` varchar(255) NOT NULL,
  `livechat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `navbar_login`, `sidebar_daftar`, `sidebar_login`, `tanggung_jawab`, `dukungan_browser`, `refferal`, `livechat`, `created_at`, `updated_at`) VALUES
(1, 'http://www.webamp.test/', 'http://www.webamp.test/', 'http://www.webamp.test/', 'http://www.webamp.test/', 'http://www.webamp.test/', 'http://www.webamp.test/', 'http://www.webamp.test/livechat', '2023-02-16 02:55:04', '2023-02-16 02:55:04');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_15_095438_create_navbars_table', 1),
(6, '2023_02_15_095515_create_sidebars_table', 1),
(7, '2023_02_15_095556_create_tentang_kamis_table', 1),
(8, '2023_02_15_095629_create_tag_slots_table', 1),
(9, '2023_02_15_095654_create_pintasans_table', 1),
(10, '2023_02_15_095718_create_links_table', 1),
(11, '2023_02_15_095745_create_identities_table', 1),
(12, '2023_02_15_095818_create_colors_table', 1),
(13, '2023_02_15_095901_create_customs_table', 1),
(14, '2023_02_15_100514_create_images_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navbars`
--

CREATE TABLE `navbars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbars`
--

INSERT INTO `navbars` (`id`, `image_id`, `url`, `label`, `created_at`, `updated_at`) VALUES
(1, 1, 'http://www.webamp.test/', 'Home', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(2, 1, 'http://www.webamp.test/', 'Slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(3, 1, 'http://www.webamp.test/', 'Trik Slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(4, 1, 'http://www.webamp.test/', 'Berita', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(5, 1, 'http://www.webamp.test/', 'RTP Live', '2023-02-16 02:55:04', '2023-02-16 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `pintasans`
--

CREATE TABLE `pintasans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pintasans`
--

INSERT INTO `pintasans` (`id`, `url`, `label`, `created_at`, `updated_at`) VALUES
(1, 'http://www.webamp.test/', 'Home', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(2, 'http://www.webamp.test/', 'Demo Slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(3, 'http://www.webamp.test/', 'Berita Slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(4, 'http://www.webamp.test/', 'Tips & Trik Slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(5, 'http://www.webamp.test/', 'RTP Live Hari Ini', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(6, 'http://www.webamp.test/', 'Login Tangan Judi', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(7, 'http://www.webamp.test/', 'Daftar Tangan Judi', '2023-02-16 02:55:04', '2023-02-16 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE `sidebars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`id`, `image_id`, `url`, `label`, `created_at`, `updated_at`) VALUES
(1, 2, 'http://www.webamp.test/', 'Daftar', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(2, 2, 'http://www.webamp.test/', 'Login', '2023-02-16 02:55:04', '2023-02-16 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `tag_slots`
--

CREATE TABLE `tag_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_slots`
--

INSERT INTO `tag_slots` (`id`, `url`, `label`, `created_at`, `updated_at`) VALUES
(1, 'http://www.webamp.test/', 'rtp live', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(2, 'http://www.webamp.test/', 'rtp 98%', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(3, 'http://www.webamp.test/', 'maxwin gates of olympus', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(4, 'http://www.webamp.test/', 'rtp zeus', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(5, 'http://www.webamp.test/', 'demo slot online', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(6, 'http://www.webamp.test/', 'menang slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(7, 'http://www.webamp.test/', 'bet kecil', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(8, 'http://www.webamp.test/', 'slot gacor', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(9, 'http://www.webamp.test/', 'rtp tinggi', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(10, 'http://www.webamp.test/', 'rtp slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(11, 'http://www.webamp.test/', 'profit main slot', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(12, 'http://www.webamp.test/', 'rtp tangan judi', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(13, 'http://www.webamp.test/', 'auto wd', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(14, 'http://www.webamp.test/', 'slot mudah menang', '2023-02-16 02:55:04', '2023-02-16 02:55:04'),
(15, 'http://www.webamp.test/', 'jackpot sweet bonanza', '2023-02-16 02:55:04', '2023-02-16 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kamis`
--

CREATE TABLE `tentang_kamis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tentang_kamis`
--

INSERT INTO `tentang_kamis` (`id`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Kami Tangan Judi sebagai situs agen judi online resmi juga memberikan jasa berupa layanan customer service 1x24 jam nonstop yang dimana semua customer service kami terlah terlatih dan melalui seleksi sehingga dapat memberikan layanan terbaik dan menjawab setiap kendala yang dialami oleh para member kami.', '2023-02-16 02:55:04', '2023-02-16 02:55:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'test@gmail.com', NULL, '$2y$10$0cGM91BrnD83hLwNVGhyz.ICNQIJ28bNYYlt4ixzJc5.1F04nAZZ6', NULL, '2023-02-16 02:55:04', '2023-02-16 02:55:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customs`
--
ALTER TABLE `customs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `identities`
--
ALTER TABLE `identities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbars`
--
ALTER TABLE `navbars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pintasans`
--
ALTER TABLE `pintasans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebars`
--
ALTER TABLE `sidebars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_slots`
--
ALTER TABLE `tag_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang_kamis`
--
ALTER TABLE `tentang_kamis`
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
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customs`
--
ALTER TABLE `customs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `identities`
--
ALTER TABLE `identities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `navbars`
--
ALTER TABLE `navbars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pintasans`
--
ALTER TABLE `pintasans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sidebars`
--
ALTER TABLE `sidebars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tag_slots`
--
ALTER TABLE `tag_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tentang_kamis`
--
ALTER TABLE `tentang_kamis`
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
