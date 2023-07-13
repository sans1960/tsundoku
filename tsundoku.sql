-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2023 at 07:07 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsundoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `autors`
--

CREATE TABLE `autors` (
  `id` bigint UNSIGNED NOT NULL,
  `autor_nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biopic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autors`
--

INSERT INTO `autors` (`id`, `autor_nom`, `slug`, `biopic`, `url_foto`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Anna Carreras Aubets', 'anna-carreras-aubets', '<p>Anna Carreras Aubets (Barcelona, 6 de gener de 1977), &eacute;s una escriptora, cr&iacute;tica liter&agrave;ria, correctora i traductora catalana.[1] Llicenciada en Filologia catalana per la Universitat Aut&ograve;noma de Barcelona, ha escrit diversos estudis sobre la literatura dels anys 1970 i 1980, entre els quals destaca l\'edici&oacute; de l\'obra po&egrave;tica completa de Vicen&ccedil; Altai&oacute;. &Eacute;s autora, juntament amb Vicen&ccedil; Altai&oacute; i Jes&uacute;s Gald&oacute;n, del llibre d\'aforismes El cervell i les venes (2005). El 2008 guany&agrave; el Premi Alexandre Ballester amb l\'obra Tot ser&agrave; blanc. Ha tradu&iuml;t l\'obra d\'Elena Ferrante al catal&agrave;[2] i ha participat en diferents reculls de contes. Col&middot;labora a la premsa i a les revistes d\'art.</p>', 'https://www.nuvol.com/app/uploads/2017/03/anna-carreras-1-e1532331822763.jpg', 1, '2023-06-29 13:44:59', '2023-06-29 13:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint UNSIGNED NOT NULL,
  `titol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autor_nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genere_id` bigint UNSIGNED NOT NULL,
  `autor_id` bigint UNSIGNED DEFAULT NULL,
  `editorial_id` bigint UNSIGNED DEFAULT NULL,
  `editorial_nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imatge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `editorial_web` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idioma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `titol`, `slug`, `autor_nom`, `genere_id`, `autor_id`, `editorial_id`, `editorial_nom`, `isbn`, `imatge`, `sinopsi`, `editorial_web`, `idioma`, `user_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Halley 2040', 'halley-2040', 'Anna Carreras Aubetsu', 9, 1, 1, 'Llibres del delicte', '978-84-120625-6-4', 'https://www.llibresdeldelicte.com/wp-content/uploads/2020/03/Halley.jpg', '<p>La Laia i en Llu&iacute;s s&oacute;n germans i viuen junts. Fart de sentir enrenou sexual al pis del costat, en Llu&iacute;s exigeix a la Laia que li canvi&iuml; l&rsquo;habitaci&oacute;. Ell treballa en un forn i es lleva d&rsquo;hora. Ella, que escriu contes i no t&eacute; horaris, accepta el canvi per&ograve; no assumeix que l&rsquo;entranyable ve&iuml;na nonagen&agrave;ria tingui una vida sexual envejable. Decidida a descobrir el misteri que s&rsquo;amaga al pis del costat, la Laia inicia una innocent investigaci&oacute; que l&rsquo;inspira a escriure un conte a temps real. El fet de con&egrave;ixer l&rsquo;Ovidi, un paio inanimat de vida fosca, i l&rsquo;Albert, un veterinari retirat que ara fa de repartidor d&rsquo;Amazon, portar&agrave; la Laia a l&rsquo;epicentre d&rsquo;una trama criminal en la qual s&rsquo;hi veur&agrave; enxarxada com en una teranyina.</p>', 'https://www.llibresdeldelicte.com/', 'Catalá', 2, 1, '2023-06-30 04:54:34', '2023-06-30 04:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `bookshops`
--

CREATE TABLE `bookshops` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qui_som` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciutat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zoom` int NOT NULL DEFAULT '14',
  `active` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookshops`
--

INSERT INTO `bookshops` (`id`, `nom`, `slug`, `logo`, `qui_som`, `url`, `ciutat`, `latitud`, `longitud`, `zoom`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Llibreria Strogof', 'llibreria-strogof', 'https://pbs.twimg.com/profile_images/802137330819665920/SyGNDhnt_400x400.jpg', '<h2>Lector sense cura</h2>', 'https://strogoff.cat/', 'La Garriga', '41.686725200064984', '2.2862309539680026', 18, 1, '2023-06-21 08:54:55', '2023-06-30 05:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `parent_id` int UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int UNSIGNED NOT NULL,
  `commentable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `editorials`
--

CREATE TABLE `editorials` (
  `id` bigint UNSIGNED NOT NULL,
  `editorial_nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_vendes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adreça` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `editorials`
--

INSERT INTO `editorials` (`id`, `editorial_nom`, `slug`, `descripcio`, `url`, `url_vendes`, `logo`, `adreça`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Llibres del delicte', 'llibres-del-delicte', '<p>Som novel&middot;la negra en catal&agrave;</p>', 'https://www.llibresdeldelicte.com/', 'https://www.llibresdeldelicte.com/', 'https://www.llibresdeldelicte.com/wp-content/uploads/2016/12/logo-llibresdeldelicte.png', 'info@llibresdeldelicte.com', 1, '2023-06-29 14:29:44', '2023-06-29 14:29:44');

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
-- Table structure for table `generes`
--

CREATE TABLE `generes` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generes`
--

INSERT INTO `generes` (`id`, `nom`, `slug`, `icon`, `active`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Assaig', 'assaigo', 'images/generes/images/S7ESHKdO7m1AvFFSfH9XFuE9QAj7JYiaaqmXQ7DW.png', 1, NULL, '2023-06-18 04:54:38', '2023-06-27 06:11:28'),
(2, 'Teatre', 'teatre', 'images/generes/images/Bcf35J4erPBHRzAg0lLU6WMPDAjsZ13TMmN2TaIp.png', 1, NULL, '2023-06-20 03:15:11', '2023-06-20 03:15:11'),
(3, 'Clássics', 'classics', 'images/generes/images/OqOS2H34jeGZqX1f9gl2NaCQNmJ4VTPtUJsxLc4G.png', 0, NULL, '2023-06-20 03:16:06', '2023-06-20 03:16:06'),
(4, 'Narrativa contempóranea', 'narrativa-contemporanea', 'images/generes/images/hOaF13kpDAE7UcaK9Z9t9xU3xWcqnbxe2m8npUMc.png', 1, NULL, '2023-06-20 03:17:17', '2023-06-20 03:17:17'),
(5, 'Infantil i juvenil', 'infantil-i-juvenil', 'images/generes/images/ub4BvHGG4q3C2G68llsMCA4s3P1ZMVbeIeTAnSji.png', 1, NULL, '2023-06-21 03:27:52', '2023-06-21 03:27:52'),
(6, 'Memòries i biografies', 'memories-i-biografies', 'images/generes/images/TQILLQIJVMiFnENlVxXDFAGwSL3p2YzVEL4JlqZq.png', 1, NULL, '2023-06-21 03:28:40', '2023-06-21 03:28:40'),
(7, 'Novel·la misteri, gòtica i terror', 'novella-misteri-gotica-i-terror', 'images/generes/images/aPHZkK0IJTep24DISZr6JHq5AlH13btQiLlhn95S.png', 1, NULL, '2023-06-21 03:29:28', '2023-06-21 03:29:28'),
(8, 'Novel·la viatges i aventures', 'novella-viatges-i-aventures', 'images/generes/images/pcH9UFaQGhDNZ9PlnmM0aBmBwwSn10fpDFRsxTs1.png', 1, NULL, '2023-06-21 03:30:16', '2023-06-21 03:30:16'),
(9, 'Novel·la negra i policíaca', 'novella-negra-i-policiaca', 'images/generes/images/u66iYIvp7SRhuSjKjXrbNTL6OuZ91sosaWUneh3n.png', 1, NULL, '2023-06-21 03:31:00', '2023-06-21 03:31:00'),
(10, 'Novel·la ciència-ficció i fantasia', 'novella-ciencia-ficcio-i-fantasia', 'images/generes/images/MHQUlcJGB78IR5hGAk66N4Eu0pCaPkRY94TSqUBS.png', 1, NULL, '2023-06-21 03:32:05', '2023-06-21 03:32:05'),
(11, 'Novel·la històrica', 'novella-historica', 'images/generes/images/ggHTTs0LwsufZgiEY8BHlqBVnnfuYE8FjYvVl3Oe.png', 1, NULL, '2023-06-21 03:32:53', '2023-06-21 03:32:53');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_16_075527_create_generes_table', 1),
(9, '2023_06_19_084503_create_bookshops_table', 1),
(14, '2023_06_29_100125_create_ratings_table', 2),
(15, '2023_06_18_065709_create_autors_table', 3),
(16, '2023_06_18_155618_create_editorials_table', 4),
(19, '2023_06_21_063311_create_books_table', 5),
(21, '2023_06_30_101959_create_comments_table', 6);

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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `comment`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(26, '2023-06-30 05:03:53', '2023-07-01 03:56:22', 4, NULL, 'App\\Models\\Book', 1, 2),
(27, '2023-06-30 05:04:06', '2023-06-30 05:04:06', 5, NULL, 'App\\Models\\Autor', 1, 2),
(28, '2023-06-30 05:23:55', '2023-06-30 05:23:55', 5, NULL, 'App\\Models\\Editorial', 1, 2),
(29, '2023-06-30 06:53:05', '2023-06-30 06:56:28', 4, NULL, 'App\\Models\\Bookshop', 1, 2),
(30, '2023-07-01 03:59:22', '2023-07-01 03:59:22', 5, NULL, 'App\\Models\\Book', 1, 3);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'asanscliment@gmail.com', NULL, '$2y$10$cCOHQTAHGw6D1ZPNc4qebeq1HZfvzAzhqvyda2VbRzMmgggO.8vdK', NULL, '2023-06-16 03:39:48', '2023-06-16 03:39:48'),
(2, 'Albert', 'pepe@gmail.com', NULL, '$2y$10$kJb/gIa/CxkRWDy549Jrbesb7ikFoLiW1PJRsHKJn/kB4u1EagMJ.', NULL, '2023-06-29 05:29:28', '2023-06-29 05:29:28'),
(3, 'Zacarias Satrustegui', 'albertsans830@gmail.com', NULL, '$2y$10$4CUBnK7Xbo0mcuj9gwvfH.flrz4GSzxWzRjS6KKK7r7FgGNAMu9hu', NULL, '2023-06-29 08:58:44', '2023-06-29 08:58:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_genere_id_foreign` (`genere_id`),
  ADD KEY `books_user_id_foreign` (`user_id`);

--
-- Indexes for table `bookshops`
--
ALTER TABLE `bookshops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editorials`
--
ALTER TABLE `editorials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `generes`
--
ALTER TABLE `generes`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `autors`
--
ALTER TABLE `autors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookshops`
--
ALTER TABLE `bookshops`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `editorials`
--
ALTER TABLE `editorials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generes`
--
ALTER TABLE `generes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_genere_id_foreign` FOREIGN KEY (`genere_id`) REFERENCES `generes` (`id`),
  ADD CONSTRAINT `books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
