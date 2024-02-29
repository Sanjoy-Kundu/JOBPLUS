-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 29, 2024 at 11:52 AM
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
-- Database: `jobplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `about_title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `user_id`, `about_title`, `about_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et.', 'Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat corrupti reprehenderit.', '2024-02-20 05:51:11', '2024-02-20 06:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_mobile` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_email`, `contact_mobile`, `contact_address`, `created_at`, `updated_at`) VALUES
(1, 'efg@gmail.com', '0155936587', 'MADARIPUR DHAKA BANGLADESH', '2024-02-19 07:33:40', '2024-02-19 12:10:26');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `adminAccess` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minumumSalary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobLocation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobExperience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobAdditionalRequirement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobPublishDate` date NOT NULL,
  `jobSkill` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobCompnayOtherBenifits` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobEmployeeStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `adminAccess`, `companyName`, `jobTitle`, `minumumSalary`, `jobLocation`, `jobExperience`, `jobAdditionalRequirement`, `jobPublishDate`, `jobSkill`, `jobCompnayOtherBenifits`, `jobEmployeeStatus`, `created_at`, `updated_at`) VALUES
(1, 3, '1', 'Ostad Ltd', 'Experienced PHP Developer (Laravel, WordPress)', '55000', 'Dahaka', 'At least 1 year.\nThe applicants should have experience in the following business area(s)Software Company', 'Age 20 to 40 years.\nSolid understanding of PHP & Good concept of OOP.\nHaving Knowledge of React JS is a plus.\nGood to have: knowledge of WordPress/ WooCommerce and its core.', '2024-02-18', 'JavaScript Laravel PHP (OOP) ReactJS woocommerce plugin Wordpress Plugin Development', 'Performance bonus. Weekly 2 holidays. Lunch Facilities: Full Subsidize. Salary Review: Half Yearly Festival Bonus: 2', 'Permanent', '2024-02-20 12:47:43', '2024-02-27 10:15:10'),
(2, 3, '0', 'Ostad Ltd', 'Eum corrupti ullam', 'Sit consequatur Id', 'Perspiciatis omnis', 'Labore voluptatem n', 'Dolor numquam omnis', '2019-08-12', 'Voluptas ipsum cons,Voluptas ipsum consVoluptas ipsum consVoluptas ipsum cons', 'Porro dolor obcaecat', 'Full Time', '2024-02-25 07:13:09', '2024-02-25 07:13:09'),
(5, 3, '0', 'ABCDEF', 'ABC', '15500', 'DHAKA', 'FRESHER CAN APPLY', 'HTML, JAVASCRIPT, VUE, PHP, LARAVEL', '2012-05-17', 'ABCDEF', 'ABCDEF', 'ABCDEF', '2024-02-25 07:53:55', '2024-02-26 04:58:54'),
(6, 3, '0', 'Aguilar and Rose Traders', 'Eveniet commodo dol', 'Aliqua Maiores ulla', 'Laudantium sit dol', 'Aut nihil quis eos', 'Sed provident volup', '2018-03-08', 'Ad reprehenderit dol', 'Dolores debitis dolo', 'Ea eaque hic adipisi', '2024-02-25 07:54:01', '2024-02-25 07:54:01'),
(7, 4, '0', 'Norton and Gaines LLC', 'Architecto nulla id', 'Impedit hic quod re', 'Dolor inventore aute', 'Ad facilis tempor au', 'Esse voluptatum cul', '2020-09-09', 'Cupiditate nulla ull', 'Vel repellendus Qui', 'Impedit quibusdam a', '2024-02-25 07:55:10', '2024-02-25 07:55:10'),
(9, 4, '0', 'CDCDCD', 'ABABABBAAB', 'Ea ea ut similique d', 'Dicta deleniti dolor', 'Voluptas non velit t', 'Ipsum numquam elit', '2004-12-20', 'Ipsum enim reiciendi', 'Et est anim dolor a', 'Non doloribus aperia', '2024-02-25 07:55:19', '2024-02-29 03:45:13'),
(10, 3, '0', 'Golden Ayala Trading', 'Officiis velit minim', '12500', 'Autem doloribus nost', 'Nostrud atque aliqua', 'Illum blanditiis li', '1983-09-07', 'Molestiae commodi es', 'Est in consectetur s', 'Permanent', '2024-02-26 03:28:52', '2024-02-26 03:28:52'),
(11, 3, '0', 'Dotson Mcintyre Traders', 'Eum quo ut consectet', 'Quia magna non delec', 'Dolore dignissimos e', 'Nulla qui ipsam offi', 'Exercitationem conse', '2012-06-08', 'Ut quisquam eius id', 'Dolor earum id ea f', 'Voluptatem Voluptat', '2024-02-26 04:07:05', '2024-02-26 04:07:05'),
(12, 3, '0', 'aaaffa', 'Ab laudantium commo', '18000', 'Velit quo veniam mi', 'Rerum est at consec', 'Pariatur Eiusmod si', '1977-11-02', 'Rerum sit nisi ut ea', 'Hic ducimus volupta', 'Aut distinctio Quae', '2024-02-26 04:07:09', '2024-02-26 05:05:52'),
(13, 3, '0', 'Greene and Macdonald Co', 'Nesciunt exercitati', 'Et quod deserunt lor', 'Reprehenderit quia', 'Sunt soluta providen', 'Cupidatat culpa imp', '1996-09-04', 'Cillum eaque tempori', 'Provident assumenda', 'Vel dolore reprehend', '2024-02-26 04:07:13', '2024-02-26 04:07:13'),
(14, 3, '0', 'Kirk and Wynn Plc', 'Enim amet sit volu', 'Quia porro facilis v', 'Blanditiis sunt nec', 'Ullam asperiores do', 'Consequat Id labor', '1998-04-20', 'Cillum sit molestia', 'Neque nulla sit pari', 'Ut beatae vel conseq', '2024-02-26 04:07:16', '2024-02-26 04:07:16'),
(15, 3, '0', 'Strickland Cross Plc', 'Sit molestiae et dol', 'Corrupti incidunt', 'Quibusdam ullamco de', 'Reiciendis qui ullam', 'Inventore aut corpor', '1980-05-01', 'Corrupti incididunt', 'Omnis eum ipsa obca', 'Eu et quidem proiden', '2024-02-26 04:07:20', '2024-02-26 04:07:20'),
(16, 3, '0', 'Hill and Knowles Traders', 'At voluptas fugiat', '25000', 'Omnis non quod saepe', 'Dolor exercitationem', 'Ea itaque ad ratione', '1995-01-03', 'Soluta pariatur Tem', 'Sed fugiat aliqua E', 'Similique dicta poss', '2024-02-26 04:07:24', '2024-02-26 05:08:22'),
(17, 1, '0', 'Summerbd', 'Laravel Developer', '55000', 'Madaripur', '2 year exprience.', 'Sapiente eiusmod lab', '1995-04-20', 'Enim corporis volupt', 'free lunch', 'Remotely', '2024-02-26 10:55:49', '2024-02-26 10:56:18');

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2024_02_19_124142_create_contacts_table', 2),
(19, '2024_02_20_100835_create_abouts_table', 3),
(22, '2024_02_20_124250_create_jobs_table', 4),
(23, '2024_02_29_095447_create_submit_jobs_table', 5);

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'authToken', '3bbd6febcb2b3c3a7710d5ff2c1f807361e3909216c4d3c8330ea9e2eb2ac9e8', '[\"*\"]', '2024-02-17 04:04:56', NULL, '2024-02-17 04:04:19', '2024-02-17 04:04:56'),
(2, 'App\\Models\\User', 3, 'authToken', '340b46dd61150bb75b3ea3c1e06f4e8655ce71607de9054853b29fa5a84fd4cb', '[\"*\"]', '2024-02-17 04:41:38', NULL, '2024-02-17 04:30:58', '2024-02-17 04:41:38'),
(3, 'App\\Models\\User', 3, 'authToken', '936a859e9234ed1ab326e358bcb7ba1ffad7f14e3493609d58d75be94d4f88c6', '[\"*\"]', '2024-02-17 13:11:31', NULL, '2024-02-17 13:11:03', '2024-02-17 13:11:31'),
(4, 'App\\Models\\User', 3, 'authToken', 'f54f0d2483299c076d51ca72158f44cee4f2a220a2508edfc04da8ccf4dad043', '[\"*\"]', NULL, NULL, '2024-02-17 13:12:52', '2024-02-17 13:12:52'),
(5, 'App\\Models\\User', 3, 'authToken', '80f1d6f3c41dd4dee526673e3aefb2b67ee0635b4dcc8c221d1e756173626359', '[\"*\"]', NULL, NULL, '2024-02-17 13:14:28', '2024-02-17 13:14:28'),
(6, 'App\\Models\\User', 5, 'authToken', '5f7a4f6dcaa4a0f4bbae4058cc0a3a7735c405d0664ec41df49e9b8294391505', '[\"*\"]', NULL, NULL, '2024-02-18 04:23:22', '2024-02-18 04:23:22'),
(7, 'App\\Models\\User', 1, 'authToken', 'eeb27e5c7093bb2ad13583e394d8aeb5b1358a0b33e2466478a45c1e1f2385a4', '[\"*\"]', NULL, NULL, '2024-02-18 04:35:54', '2024-02-18 04:35:54'),
(8, 'App\\Models\\User', 1, 'authToken', '4f0aca0bd66a6f0e2b1cf9793950f8dd99fc816841563c32675f85c2f1258826', '[\"*\"]', NULL, NULL, '2024-02-18 04:50:37', '2024-02-18 04:50:37'),
(9, 'App\\Models\\User', 1, 'authToken', '1ab552425824c19fe1f0faff5d47be810973ef330088b96c9c562e2d472011ab', '[\"*\"]', NULL, NULL, '2024-02-18 04:50:38', '2024-02-18 04:50:38'),
(10, 'App\\Models\\User', 1, 'authToken', 'fbffe33adf48fba06101a074e294383362c23e3f43cf8f7dd37a9113c2cb16fe', '[\"*\"]', NULL, NULL, '2024-02-18 04:58:51', '2024-02-18 04:58:51'),
(11, 'App\\Models\\User', 1, 'authToken', 'd9f9d809c0942a3b8a38ea7a80050202629004489cb53645bc49def70be881a9', '[\"*\"]', NULL, NULL, '2024-02-18 04:59:54', '2024-02-18 04:59:54'),
(12, 'App\\Models\\User', 1, 'authToken', 'fa5d79cde9f987d18f9e22e3e2934353806907471fe4fb9ed84f9985a3df4ebb', '[\"*\"]', NULL, NULL, '2024-02-18 05:00:45', '2024-02-18 05:00:45'),
(13, 'App\\Models\\User', 1, 'authToken', '6ec5b6c96561936d98181cbf645c96a62106f7b2485e8b73d6aa825107304d59', '[\"*\"]', '2024-02-18 05:05:57', NULL, '2024-02-18 05:05:33', '2024-02-18 05:05:57'),
(14, 'App\\Models\\User', 1, 'authToken', 'e500a8a82fc701772b511c22f1ef8c6e8aa5e4654355a271ebe9a521b015496e', '[\"*\"]', '2024-02-18 11:52:25', NULL, '2024-02-18 05:10:23', '2024-02-18 11:52:25'),
(15, 'App\\Models\\User', 6, 'authToken', '24e15406de11858913af7b9f966af56e16d55e2d0e4136212d0dc41cf403dcb6', '[\"*\"]', NULL, NULL, '2024-02-18 11:25:06', '2024-02-18 11:25:06'),
(16, 'App\\Models\\User', 6, 'authToken', 'b5eaf168ba104c84c253859a7c992540e813dfa8ab49f41fc4fb479f7febc257', '[\"*\"]', NULL, NULL, '2024-02-18 11:44:13', '2024-02-18 11:44:13'),
(17, 'App\\Models\\User', 6, 'authToken', 'a035716e95f9edd7fe66c66bbd1d619ebadf53b4ffcdbefff5d0b16d3d71979a', '[\"*\"]', NULL, NULL, '2024-02-18 11:51:40', '2024-02-18 11:51:40'),
(18, 'App\\Models\\User', 6, 'authToken', '47ea5a962ea0e6f87eacb773d5b7b683a7869a3eeeaf34309da1cc65877337ae', '[\"*\"]', '2024-02-18 11:53:22', NULL, '2024-02-18 11:53:07', '2024-02-18 11:53:22'),
(19, 'App\\Models\\User', 6, 'authToken', 'f4753e42eec474d1690e00770891a60052038c96e1d6314bd24bc77637f4a548', '[\"*\"]', NULL, NULL, '2024-02-18 11:58:32', '2024-02-18 11:58:32'),
(20, 'App\\Models\\User', 6, 'authToken', '8f64f81f0f2c59493653df8462e2fb3f24e0f70dfb5dee7081d787e95f4c1c90', '[\"*\"]', '2024-02-18 12:33:46', NULL, '2024-02-18 12:24:22', '2024-02-18 12:33:46'),
(21, 'App\\Models\\User', 2, 'authToken', '24416848e0ce4ea9a966b94950b45f86ed96d7035ee3af972178b77e5ec3b07b', '[\"*\"]', '2024-02-19 03:35:12', NULL, '2024-02-19 03:35:04', '2024-02-19 03:35:12'),
(22, 'App\\Models\\User', 3, 'authToken', '19de036816a1ea07f154afd943d1920a6a5148d50af0a70f35b47f40be79b74c', '[\"*\"]', '2024-02-19 03:37:29', NULL, '2024-02-19 03:37:16', '2024-02-19 03:37:29'),
(23, 'App\\Models\\User', 1, 'authToken', 'f81a6c31cd223e6cd188c67f5bf7cd9a7b08cd933cfc91219e42006156016e0f', '[\"*\"]', NULL, NULL, '2024-02-19 03:38:25', '2024-02-19 03:38:25'),
(24, 'App\\Models\\User', 1, 'authToken', 'f7ac0cc42a1e35775cb39cea1dbcbaaceb319d55538059bf9f2bf4385be8e12f', '[\"*\"]', '2024-02-19 03:44:26', NULL, '2024-02-19 03:44:08', '2024-02-19 03:44:26'),
(25, 'App\\Models\\User', 1, 'authToken', '6f9497939f7299b4e5e07f8eec49ae9f7d4c073604c9a88813c2109760931563', '[\"*\"]', '2024-02-19 05:13:02', NULL, '2024-02-19 03:45:37', '2024-02-19 05:13:02'),
(26, 'App\\Models\\User', 2, 'authToken', '3e728525d7909f75599bd983d07fa5f911158354c5deb52583548cd9a60385f4', '[\"*\"]', '2024-02-19 05:23:31', NULL, '2024-02-19 05:15:13', '2024-02-19 05:23:31'),
(27, 'App\\Models\\User', 1, 'authToken', '4bd485f99d642480d8200c505994bef4e49a1f5df9d5ff28cdbef5b8c81ea8d8', '[\"*\"]', '2024-02-19 05:25:24', NULL, '2024-02-19 05:23:50', '2024-02-19 05:25:24'),
(28, 'App\\Models\\User', 2, 'authToken', '0b72ceef6fe3efaaf39b19f690b6f6f7aef1f8bb99d88b5e58af21a94c29993f', '[\"*\"]', '2024-02-19 05:40:48', NULL, '2024-02-19 05:25:48', '2024-02-19 05:40:48'),
(29, 'App\\Models\\User', 3, 'authToken', '290b4709631197c2f6bc72e45b5f30f3639fa41a1c37500b1edabf9fae717d88', '[\"*\"]', '2024-02-19 05:52:23', NULL, '2024-02-19 05:41:23', '2024-02-19 05:52:23'),
(30, 'App\\Models\\User', 1, 'authToken', 'e09f241b9c04c746f41bd7548ee277b3a317ecca4d05ed71ecb32df77c5573fb', '[\"*\"]', '2024-02-19 05:58:48', NULL, '2024-02-19 05:53:47', '2024-02-19 05:58:48'),
(31, 'App\\Models\\User', 3, 'authToken', 'a983cdde2810a9c2f749e3b832821cdf9830662aa7fc5746dd7fdeb54d2448b3', '[\"*\"]', '2024-02-19 06:15:35', NULL, '2024-02-19 06:00:03', '2024-02-19 06:15:35'),
(32, 'App\\Models\\User', 2, 'authToken', '8bf6f917e539ec1a7df300512d8335c68bdc84d76787a6cc2c2d20e22fd2bc66', '[\"*\"]', '2024-02-19 06:26:26', NULL, '2024-02-19 06:16:19', '2024-02-19 06:26:26'),
(33, 'App\\Models\\User', 3, 'authToken', 'fd651145e092bd6baab455515a86d32d0b9c09e61534f4f86ae429d7fd41d2ad', '[\"*\"]', '2024-02-19 06:26:58', NULL, '2024-02-19 06:26:50', '2024-02-19 06:26:58'),
(34, 'App\\Models\\User', 1, 'authToken', '79b415a570c638b4e8843f073c333c1a65c0c5e817317841240f75da68fb2433', '[\"*\"]', '2024-02-20 06:20:47', NULL, '2024-02-19 06:27:51', '2024-02-20 06:20:47'),
(35, 'App\\Models\\User', 1, 'authToken', 'eaaf3850c360ff89bcab7274ddc3a9f16ff75f2d7e36d4bbf856b0711a74d5f4', '[\"*\"]', '2024-02-19 12:02:51', NULL, '2024-02-19 07:21:53', '2024-02-19 12:02:51'),
(36, 'App\\Models\\User', 1, 'authToken', '3b1837d73c3c4525298bd765639096031a1c18a6d2006a4a1f02140405780c81', '[\"*\"]', '2024-02-20 05:24:28', NULL, '2024-02-20 04:29:57', '2024-02-20 05:24:28'),
(37, 'App\\Models\\User', 2, 'authToken', '4c1f0784c6eac456d24ff8704843838a26988f57a0ede2290567798ae97aae2e', '[\"*\"]', '2024-02-20 06:34:51', NULL, '2024-02-20 06:34:16', '2024-02-20 06:34:51'),
(38, 'App\\Models\\User', 1, 'authToken', 'a34f389b78bae091fd4ed5bfd12d2eb8b27e5011295b73d31b05091efcd0c106', '[\"*\"]', '2024-02-20 06:35:20', NULL, '2024-02-20 06:35:14', '2024-02-20 06:35:20'),
(39, 'App\\Models\\User', 3, 'authToken', 'd21d194ac9cf61fe21ebde245a6334f99b0a083903d904650e41c663fb9feb4b', '[\"*\"]', '2024-02-20 07:35:01', NULL, '2024-02-20 06:37:44', '2024-02-20 07:35:01'),
(40, 'App\\Models\\User', 1, 'authToken', '121f0d3255fc41a48f7dba998aceedd9d933b267fd6feb9e5841ab69abdc0f7b', '[\"*\"]', '2024-02-20 07:41:15', NULL, '2024-02-20 07:35:21', '2024-02-20 07:41:15'),
(41, 'App\\Models\\User', 2, 'authToken', '29cc0e45f93846553def4f03e98c3429cf2bc64e237a5cde092027d793f3b4c5', '[\"*\"]', '2024-02-20 07:44:39', NULL, '2024-02-20 07:42:08', '2024-02-20 07:44:39'),
(42, 'App\\Models\\User', 1, 'authToken', '596f0439ebde2418537df4ea81618968448e90d2c7b28b06ca0c09a4cea7b043', '[\"*\"]', '2024-02-20 07:45:17', NULL, '2024-02-20 07:45:02', '2024-02-20 07:45:17'),
(43, 'App\\Models\\User', 3, 'authToken', '13d975a1e91b31624979e5397a90c10c7f294bf1befe9514ba6d14717d57c590', '[\"*\"]', '2024-02-25 07:13:09', NULL, '2024-02-20 10:56:14', '2024-02-25 07:13:09'),
(44, 'App\\Models\\User', 1, 'authToken', '489eb135d5b52564b48b175f5afe1ad4c0dff91515cadee063e3f3976827086d', '[\"*\"]', NULL, NULL, '2024-02-20 12:03:01', '2024-02-20 12:03:01'),
(45, 'App\\Models\\User', 3, 'authToken', '206d02198ca8c08e91c6ca49df62034ddbfe253d1f52ae7013425c0aadeedbe0', '[\"*\"]', '2024-02-28 10:19:17', NULL, '2024-02-20 12:03:19', '2024-02-28 10:19:17'),
(46, 'App\\Models\\User', 1, 'authToken', '367aa08743de9fbf52d9aff0ebf0247313cdb01b624a8412168f5f83951f752b', '[\"*\"]', '2024-02-25 07:47:36', NULL, '2024-02-25 07:47:14', '2024-02-25 07:47:36'),
(47, 'App\\Models\\User', 3, 'authToken', '81e91d69145d1df0e0bff4fb925b158abf0b150c298d6cfc4331b28063cdbd60', '[\"*\"]', '2024-02-25 07:54:01', NULL, '2024-02-25 07:52:12', '2024-02-25 07:54:01'),
(48, 'App\\Models\\User', 4, 'authToken', 'd79709bd960ccd463138adf34acc95082153ae7c73b6951d083e7da6d7b8f0a6', '[\"*\"]', '2024-02-25 09:15:21', NULL, '2024-02-25 07:54:22', '2024-02-25 09:15:21'),
(49, 'App\\Models\\User', 1, 'authToken', 'a43214adced60c75b1f590d48fc6890bef8108c39020fd612c7665b0c38a67b2', '[\"*\"]', '2024-02-25 11:26:31', NULL, '2024-02-25 10:19:20', '2024-02-25 11:26:31'),
(50, 'App\\Models\\User', 1, 'authToken', 'a4d3dfcd5d2d892c652c82c1e66449de7c994b8e05a597be4398e2b36a290581', '[\"*\"]', '2024-02-25 11:16:14', NULL, '2024-02-25 10:23:44', '2024-02-25 11:16:14'),
(51, 'App\\Models\\User', 3, 'authToken', '09361db22b8011061f624d37e1de40139df0422b942939a4679f43143bd2f9d5', '[\"*\"]', '2024-02-29 05:20:32', NULL, '2024-02-25 11:16:41', '2024-02-29 05:20:32'),
(52, 'App\\Models\\User', 3, 'authToken', 'e2c02cbbd9bf7ccf8e036249e03d28697f43bfec861d724ad4b32e6fdc22b308', '[\"*\"]', '2024-02-25 11:27:19', NULL, '2024-02-25 11:27:13', '2024-02-25 11:27:19'),
(53, 'App\\Models\\User', 3, 'authToken', 'bcc3f0e420fb6a43d402eb48e554aa5dfab43d1c276d8cbc94f433fe6142d239', '[\"*\"]', '2024-02-25 12:24:56', NULL, '2024-02-25 11:28:35', '2024-02-25 12:24:56'),
(54, 'App\\Models\\User', 4, 'authToken', '561a76803437d456f5333991dbb67f04fed699225fbecc311c3f0d5e70fe4407', '[\"*\"]', '2024-02-25 13:19:12', NULL, '2024-02-25 12:26:05', '2024-02-25 13:19:12'),
(55, 'App\\Models\\User', 8, 'authToken', '176e0567b8cbfb5446084daa41485b98e027aef9fff665fac1667944012a8324', '[\"*\"]', '2024-02-26 03:26:49', NULL, '2024-02-25 13:24:16', '2024-02-26 03:26:49'),
(56, 'App\\Models\\User', 3, 'authToken', '0511dc377e16791b07ac9b0feacb16b70ccd85f38d6a80dfe4866f002ed7d574', '[\"*\"]', '2024-02-26 05:08:59', NULL, '2024-02-26 03:27:29', '2024-02-26 05:08:59'),
(57, 'App\\Models\\User', 1, 'authToken', '169681c2269e994db1f08bc2feb2dfa2d923ba62c444200cf5a94efb8bf88b5e', '[\"*\"]', '2024-02-26 13:46:17', NULL, '2024-02-26 10:51:34', '2024-02-26 13:46:17'),
(58, 'App\\Models\\User', 1, 'authToken', '5fa72eab8da844b2ab1062c2f0d4073e9fecb08fc168c54729463a1315bec59a', '[\"*\"]', '2024-02-26 13:50:32', NULL, '2024-02-26 13:29:16', '2024-02-26 13:50:32'),
(59, 'App\\Models\\User', 1, 'authToken', 'ca2a4cc98016dde0a745b2b0c5dd92448c53a3e6c9c2795dffdafa7ff794a031', '[\"*\"]', '2024-02-28 12:31:12', NULL, '2024-02-27 03:29:41', '2024-02-28 12:31:12'),
(60, 'App\\Models\\User', 1, 'authToken', 'b8bfcc2ec6e9ab917d1ca53ff1282f315d65bea88f23f3d160e1896708883557', '[\"*\"]', NULL, NULL, '2024-02-28 12:41:33', '2024-02-28 12:41:33'),
(61, 'App\\Models\\User', 1, 'authToken', '0a97fb0439c2f79c8819af4a7c80db7f1f0dc43ec742e5b540fe4b3157d7b3bd', '[\"*\"]', '2024-02-28 13:50:09', NULL, '2024-02-28 12:45:33', '2024-02-28 13:50:09'),
(62, 'App\\Models\\User', 9, 'authToken', '29d16d357c33945b7b175478e06bd437c93adbe07d1cb39b0fa19a9971599c70', '[\"*\"]', '2024-02-28 13:32:42', NULL, '2024-02-28 12:56:52', '2024-02-28 13:32:42'),
(63, 'App\\Models\\User', 3, 'authToken', 'deb422a2aec790e82d90e367879002dbea49a6641ca53445696aa8b3bcaa71c0', '[\"*\"]', '2024-02-29 03:42:37', NULL, '2024-02-29 03:42:08', '2024-02-29 03:42:37'),
(64, 'App\\Models\\User', 4, 'authToken', '38d02062b402ea0ec03d476186b1523ecefdded7c1eec2e77f86692f9f028fa4', '[\"*\"]', '2024-02-29 03:45:14', NULL, '2024-02-29 03:43:58', '2024-02-29 03:45:14'),
(65, 'App\\Models\\User', 2, 'authToken', '63320cca79503058d21fd730f2840259834e08672448388927a220f0c4bee1f1', '[\"*\"]', '2024-02-29 04:37:39', NULL, '2024-02-29 03:52:44', '2024-02-29 04:37:39'),
(66, 'App\\Models\\User', 2, 'authToken', 'f5861392d977ff22e89775dcc65fad415493573a45ac2a7fc968d973fcc7e80d', '[\"*\"]', '2024-02-29 05:21:12', NULL, '2024-02-29 03:56:47', '2024-02-29 05:21:12'),
(67, 'App\\Models\\User', 2, 'authToken', '94224f9677bded68a9d9223a92c789c24129f40ad1b1415730e28a36c308d2f4', '[\"*\"]', '2024-02-29 05:49:54', NULL, '2024-02-29 05:12:33', '2024-02-29 05:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `submit_jobs`
--

CREATE TABLE `submit_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submit_jobs`
--

INSERT INTO `submit_jobs` (`id`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2', '2024-02-29 04:25:10', '2024-02-29 04:25:10'),
(2, 2, '2', '2024-02-29 04:32:42', '2024-02-29 04:32:42'),
(3, 2, '2', '2024-02-29 04:34:14', '2024-02-29 04:34:14'),
(4, 2, '2', '2024-02-29 04:37:39', '2024-02-29 04:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'owner,companies,cadidates',
  `otp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', 'admin@gmail.com', '$2y$12$qDiGaE2WHf1N5aDecfDQhOl0cczypB3l0InOgJaZYDJ4jiI6oYrPy', 'admin', '0', '2024-02-16 07:47:25', '2024-02-19 05:11:12'),
(2, 'SANJOY', 'sanjoy@gmail.com', '$2y$12$L9yacX7N8P2lbudwT/TX6u/BJBz12/GOR6C4Z.QQo20JTCi2DQuka', 'candidate', '0', '2024-02-16 07:48:15', '2024-02-19 05:40:47'),
(3, 'OSTAD APP', 'ostad@gmail.com', '$2y$12$p.Pq6j6tthQ38Q4h7lxKbOLuWSkTD2dnhyw9Ve2cVWlrNoGl/dvW6', 'companies', '0', '2024-02-16 07:49:22', '2024-02-17 13:11:31'),
(4, 'SUMMERBD', 'summerbd@gmail.com', '$2y$12$v3AuJCZkbudlT3iwxRkhee596qfmP6.ijz90zMiAXsuGoN2WoIGIC', 'companies', '0', '2024-02-18 04:20:40', '2024-02-18 04:20:40'),
(5, 'DUVUV', 'duvuv@mailinator.com', '$2y$12$r095VqVS026QRc1Kj9r5su2JQJYBusV6mWeaHosSXb9ul.fVvyycK', 'companies', '0', '2024-02-18 04:22:35', '2024-02-18 04:22:35'),
(6, 'EMON', 'emon@gmail.com', '$2y$12$KhxPuypae8nm7hGSR1BiDef/rVGVI0H982ozKY6/buDemLhp76Zb.', 'candidate', '0', '2024-02-18 04:31:21', '2024-02-18 12:24:58'),
(7, 'SILAS ROBLES', 'lojo@mailinator.com', '$2y$12$gbVhBX7dNMDc.tqXC8U4LeUEjyFWcscZVNuw3XiGhaY2rkJltb2nm', 'candidate', '0', '2024-02-19 03:33:11', '2024-02-19 03:33:11'),
(8, 'RIYAD HOSSAIN', 'riad@gmail.com', '$2y$12$WA64bPm.NOJ6WQ4WylQEH.V3fOnagd5Erj2ROm8hpDkd1JnkFSbS.', 'candidate', '0', '2024-02-25 13:23:57', '2024-02-25 13:23:57'),
(9, 'RAJON ROY', 'rajon@gmaiil.com', '$2y$12$OZttZ2Uzl5MDIruDRC/ZK.tJtAR6utMBK32GevWBqPkE.10i/tEDO', 'candidate', '0', '2024-02-28 12:55:46', '2024-02-28 12:55:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `abouts_user_id_foreign` (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_contact_email_unique` (`contact_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `submit_jobs`
--
ALTER TABLE `submit_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submit_jobs_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `submit_jobs`
--
ALTER TABLE `submit_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `abouts`
--
ALTER TABLE `abouts`
  ADD CONSTRAINT `abouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `submit_jobs`
--
ALTER TABLE `submit_jobs`
  ADD CONSTRAINT `submit_jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
