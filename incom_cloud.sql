-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 10:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incom_cloud`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `discriptsion`, `created_by`, `updated_by`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Welcome to InComCloud', '<p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-size: 14px; font-family: Montserrat, sans-serif; color: rgb(17, 17, 17); line-height: 26px;\">We are a leading web hosting company based in Bangladesh. Our mission is to provide reliable, secure, and affordable web hosting solutions for businesses of all sizes.</p><p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-size: 14px; font-family: Montserrat, sans-serif; color: rgb(17, 17, 17); line-height: 26px;\">We are committed to being the most reliable web hosting provider in the industry, and our team of experts strives to deliver the highest quality of service to our customers. We offer a wide range of hosting services, including shared hosting, VPS hosting, dedicated hosting, and domain registration. Our servers are located in state-of-the-art data centers around the world, ensuring your website is always secure and running at top performance. We also provide 24/7 customer support, so you can rest assured that your website is always taken care of.</p><p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-size: 14px; font-family: Montserrat, sans-serif; color: rgb(17, 17, 17); line-height: 26px;\">With our advanced tools and features, you can easily manage your website and make sure it\'s running smoothly. We look forward to helping you create an online presence for your business.</p>', NULL, 1, 'IMG_20230806053050.png', NULL, '2023-08-06 22:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locationURL` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `locationURL`, `email`, `phone`, `cell`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Urban Rose, Flat# 3A, House 61, Road 27, Gulshan 1, Dhaka 1212', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58417.489674588665!2d90.37790959648237!3d23.779698681575095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79ee8766ac5%3A0xce3ad62e5e3a79a4!2sIncomIT%20Solution%20(Broadband)!5e0!3m2!1sen!2sbd!4v1691235814218!5m2!1sen!2sbd', '[\"support@incomcloud.com\"]', '[\"+88 09611403403\"]', '[\"+88 09611403403\"]', NULL, 1, NULL, '2023-08-05 22:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `contact_massages`
--

CREATE TABLE `contact_massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_massages`
--

INSERT INTO `contact_massages` (`id`, `name`, `email`, `subject`, `message`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'April Copeland', 'jesow@mailinator.com', 'Quae dolor dolore si', 'Lorem a ad mollit re', NULL, NULL, '2023-08-05 05:30:25', '2023-08-05 05:30:25');

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `covers`
--

INSERT INTO `covers` (`id`, `notification`, `title`, `sub_title`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Explore Your Cloud Journey With Us', 'limitless domain and hosting amalgamated.', 'An abundance of website hosting choices, an assurance of 99.9% uptime, a complimentary SSL certificate, effortless WordPress installations, and similar features are offered.', 'IMG_20230805055345.png', NULL, 1, NULL, '2023-08-04 23:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `cover_settings`
--

CREATE TABLE `cover_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dedicated_hosts`
--

CREATE TABLE `dedicated_hosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` int(11) DEFAULT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `core` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bandwidth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dedicated_hosts`
--

INSERT INTO `dedicated_hosts` (`id`, `country`, `cpu`, `core`, `storage`, `ram`, `bandwidth`, `price`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 0, 'AMD Epyc Milan 7443P CPU', '24 Core', 'Up to 12x NVMe / SSD', '128GB DDR4-3200 RAM', '20TB Bandwidth', '700', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:48:37', '2023-08-12 23:48:37'),
(4, 0, 'Xeon E5-2695v4', 'Dual 18 Core', 'Up to 8 SSDs', '128GB', '20TB Bandwidth', '400', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:49:59', '2023-08-12 23:49:59'),
(5, 0, 'Xeon E5-2680v4', 'Dual 14 Core', 'Up to 8 SSDs', '64GB', '20TB Bandwidth', '270', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:51:02', '2023-08-12 23:51:02'),
(6, 0, 'Xeon E5-2680v2', 'Dual 10 Core', 'Up to 6 Drives', '64GB', '20TB Bandwidth', '240', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:52:10', '2023-08-12 23:52:10'),
(7, 0, 'Xeon E3-1270v3', 'Quad Core', '16GB', '20TB Bandwidth', '20TB Bandwidth', '140', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:53:29', '2023-08-12 23:53:29'),
(8, 0, 'Intel E3-1230v1', 'Quad Core', 'Up to 4 Drives', '16GB', '20TB Bandwidth', '120', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:55:02', '2023-08-12 23:55:02'),
(9, 1, 'AMD Epyc Milan 7443P CPU', '24 Core', 'Up to 12x NVMe / SSD', '128GB DDR4-3200 RAM', '20TB Bandwidth', '700', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:57:22', '2023-08-12 23:57:22'),
(10, 1, 'Xeon E5-2695v4', 'Dual 18 Core', 'Up to 8 SSDs', '128GB', '20TB Bandwidth', '400', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:58:04', '2023-08-12 23:58:04'),
(11, 1, 'Xeon E5-2680v4', 'Dual 14 Core', 'Up to 8 SSDs', '64GB', '20TB Bandwidth', '280', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:58:57', '2023-08-12 23:58:57'),
(12, 1, 'Xeon E5-2680v2', 'Dual 10 Core', 'Up to 6 Drives', '64GB', '20TB Bandwidth', '240', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:59:45', '2023-08-12 23:59:45'),
(13, 1, 'Xeon E3-1270v3', 'Quad Core', '16GB', '20TB Bandwidth', '20TB Bandwidth', '150', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-13 00:00:35', '2023-08-13 00:00:35'),
(14, 1, 'Intel E3-1230v1', 'Quad Core', 'Up to 4 Drives', '16GB', '20TB Bandwidth', '130', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-13 00:01:26', '2023-08-13 00:01:26'),
(15, 2, 'AMD Epyc Milan 7443P CPU', '24 Core', 'Up to 12x NVMe / SSD', '128GB DDR4-3200 RAM', '20TB Bandwidth', '800', 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 00:02:45', '2023-08-13 00:03:37'),
(16, 2, 'Xeon E5-2695v4', 'Dual 18 Core', 'Up to 8 SSDs', '128GB', '20TB Bandwidth', '420', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-13 00:04:34', '2023-08-13 00:04:34'),
(17, 2, 'Xeon E5-2680v4', 'Dual 14 Core', 'Up to 8 SSDs', '64GB', '20TB Bandwidth', '290', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-13 00:05:26', '2023-08-13 00:05:26'),
(18, 2, 'Xeon E5-2680v2', 'Dual 10 Core', 'Up to 6 Drives', '64GB', '20TB Bandwidth', '250', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-13 00:06:16', '2023-08-13 00:06:16'),
(19, 2, 'Xeon E3-1270v3', 'Quad Core', '16GB', '20TB Bandwidth', '20TB Bandwidth', '140', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-13 00:07:25', '2023-08-13 00:07:25'),
(20, 2, 'Intel E3-1230v1', 'Quad Core', 'Up to 4 Drives', '16GB', '20TB Bandwidth', '120', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-13 00:08:12', '2023-08-13 00:08:12');

-- --------------------------------------------------------

--
-- Table structure for table `domain_categories`
--

CREATE TABLE `domain_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domain_categories`
--

INSERT INTO `domain_categories` (`id`, `name`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '.com', 'IMG_20230805060036.png', 0, 1, NULL, '2023-08-05 00:00:36', '2023-08-05 00:00:36'),
(2, '.net', 'IMG_20230805060058.png', 0, 1, NULL, '2023-08-05 00:00:58', '2023-08-05 00:00:58'),
(3, '.org', 'IMG_20230805060117.png', 0, 1, NULL, '2023-08-05 00:01:17', '2023-08-05 00:01:17'),
(4, '.store', 'IMG_20230805060154.png', 0, 1, NULL, '2023-08-05 00:01:54', '2023-08-05 00:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `domain_pricings`
--

CREATE TABLE `domain_pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `transferprice` int(11) DEFAULT NULL,
  `renewalprice` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domain_pricings`
--

INSERT INTO `domain_pricings` (`id`, `category_id`, `name`, `price`, `transferprice`, `renewalprice`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 11, 13, 14, 1, 1, '2023-08-05 00:22:07', '2023-08-05 00:40:58'),
(2, '2', NULL, 12, 14, 13, 1, NULL, '2023-08-05 00:23:13', '2023-08-05 00:23:13'),
(3, '3', NULL, 11, 13, 15, 1, NULL, '2023-08-05 00:23:27', '2023-08-05 00:23:27'),
(4, '4', NULL, 8, 9, 11, 1, NULL, '2023-08-05 00:23:41', '2023-08-05 00:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `answer`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'What is a USA Dedicated Server Plan?', '<p><span style=\"color: rgb(91, 88, 88); font-family: Roboto, sans-serif; font-size: 15.632px; background-color: rgb(250, 250, 250);\">A USA Dedicated Server Plan is a hosting solution where an entire physical server is dedicated to a single user or organization.It provides exclusive access to the server\'s resources, including the CPU, RAM, storage, and network.</span><br></p>', 0, 1, NULL, '2023-08-07 05:07:57', '2023-08-07 05:07:57'),
(3, 'What are the advantages of using a USA Dedicated Server Plan?', '<p><span style=\"color: rgb(91, 88, 88); font-family: Roboto, sans-serif; font-size: 15.632px; background-color: rgb(250, 250, 250);\">Some advantages of using a USA Dedicated Server Plan include high performance, customization, scalability, security, and reliability.</span><br></p>', 0, 1, NULL, '2023-08-07 05:48:42', '2023-08-07 05:48:42');

-- --------------------------------------------------------

--
-- Table structure for table `genarel_settings`
--

CREATE TABLE `genarel_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genarel_settings`
--

INSERT INTO `genarel_settings` (`id`, `title`, `name`, `phone`, `email`, `address`, `logo`, `favicon`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'InComCloud', 'InComCloud', '+88 09611403403', 'support@incomcloud.com', 'Urban Rose, Flat# 3A, House 61, Road 27, Gulshan 1, Dhaka 1212', NULL, 'favicon.png', NULL, 1, NULL, '2023-08-05 01:00:15');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2023_03_26_035321_create_cover_settings_table', 1),
(8, '2023_03_26_065441_create_abouts_table', 1),
(16, '2023_04_02_064425_create_domain_categories_table', 1),
(18, '2023_04_04_071222_create_contacts_table', 1),
(19, '2023_04_05_042435_create_genarel_settings_table', 1),
(20, '2023_04_12_043920_create_webcontents_table', 1),
(21, '2023_04_29_042700_create_covers_table', 1),
(22, '2023_04_02_071756_create_domain_pricings_table', 2),
(25, '2023_03_18_070921_create_contact_massages_table', 5),
(26, '2023_08_06_074359_create_visions_table', 6),
(27, '2023_08_06_074538_create_misions_table', 6),
(31, '2023_08_07_044925_create_service_committeds_table', 7),
(34, '2023_08_07_094746_create_f_a_q_s_table', 8),
(36, '2023_08_08_095331_create_services_table', 9),
(41, '2023_08_09_052430_create_v_p_s_table', 10),
(45, '2023_08_09_095324_create_dedicated_hosts_table', 11),
(47, '2023_08_13_071638_create_reseller_hosts_table', 12),
(51, '2023_08_14_053241_create_web_hostings_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `misions`
--

CREATE TABLE `misions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `misions`
--

INSERT INTO `misions` (`id`, `discriptsion`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '<p style=\"text-align: center;\"><span style=\"color: rgb(91, 88, 88); font-family: Roboto, sans-serif; font-size: 15.632px; text-align: justify; background-color: rgb(250, 250, 250);\">We love servers, honour your privacy, and practice perfection every day to keep your data safe. Our technical staffs are professional, and they know how to act with different issues. So, we will solve your problems in the shortest period, which saves your precious time! And even, If you aren\'t satisfied with our service, we provide a 7-Days moneyback guarantee. Ultimately you are in charge of the game, and we believe you deserve the best.</span><br></p>', NULL, 1, NULL, '2023-08-06 03:09:40');

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
-- Table structure for table `reseller_hosts`
--

CREATE TABLE `reseller_hosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpanel` int(11) DEFAULT NULL,
  `bandwidth` int(11) DEFAULT NULL,
  `storage` int(11) DEFAULT NULL,
  `ip` int(11) DEFAULT NULL,
  `license` int(11) DEFAULT NULL,
  `litespeed` int(11) DEFAULT NULL,
  `whm_panel` int(11) DEFAULT NULL,
  `backup` int(11) DEFAULT NULL,
  `softaculous` int(11) DEFAULT NULL,
  `imunify` int(11) DEFAULT NULL,
  `cloud_license` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reseller_hosts`
--

INSERT INTO `reseller_hosts` (`id`, `country`, `name`, `cpanel`, `bandwidth`, `storage`, `ip`, `license`, `litespeed`, `whm_panel`, `backup`, `softaculous`, `imunify`, `cloud_license`, `price`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 0, 'Basic', 20, 350, 25, 0, 0, 0, 1, 1, 1, 1, 1, 10, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:22:33', '2023-08-13 05:07:47'),
(4, 0, 'Professional', 30, 600, 75, 0, 0, 0, 1, 1, 1, 1, 1, 20, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:25:34', '2023-08-13 05:08:19'),
(5, 0, 'Advanced', 100, 1000, 250, 1, 0, 0, 1, 1, 1, 1, 1, 42, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:27:09', '2023-08-13 05:08:38'),
(6, 0, 'Business', 200, 2000, 500, 1, 1, 1, 1, 1, 1, 1, 1, 84, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:29:39', '2023-08-13 05:09:02'),
(7, 1, 'Basic', 20, 350, 25, 0, 0, 0, 1, 1, 1, 1, 1, 12, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:44:51', '2023-08-13 05:09:14'),
(8, 1, 'Professional', 30, 600, 75, 0, 0, 0, 1, 1, 1, 1, 1, 22, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:47:37', '2023-08-13 05:09:24'),
(9, 1, 'Advanced', 100, 1000, 250, 1, 0, 0, 1, 1, 1, 1, 1, 46, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:49:33', '2023-08-13 05:09:49'),
(10, 1, 'Business', 200, 2000, 500, 1, 1, 1, 1, 1, 1, 1, 1, 102, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:50:55', '2023-08-13 05:10:17'),
(11, 2, 'Basic', 20, 350, 25, 0, 0, 0, 1, 1, 1, 1, 1, 15, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:53:33', '2023-08-13 05:10:38'),
(12, 2, 'Professional', 30, 600, 75, 0, 0, 0, 1, 1, 1, 1, 1, 16, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:55:34', '2023-08-13 05:10:48'),
(13, 2, 'Advanced', 100, 100, 250, 1, 0, 0, 1, 1, 1, 1, 1, 48, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:57:39', '2023-08-13 05:11:06'),
(14, 2, 'Business', 200, 2000, 500, 1, 1, 1, 1, 1, 1, 1, 1, 88, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-13 04:58:36', '2023-08-13 05:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `status`, `image`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(5, '0', '3', 0, 'IMG_20230808113327.png', 1, NULL, '2023-08-08 05:33:27', '2023-08-12 22:53:43'),
(6, '1', '11', 0, 'IMG_20230808113353.png', 1, NULL, '2023-08-08 05:33:53', '2023-08-08 05:33:53'),
(7, '2', '9', 0, 'IMG_20230808113425.png', 1, NULL, '2023-08-08 05:34:25', '2023-08-08 05:34:25'),
(8, '3', '120', 0, 'IMG_20230808113455.png', 1, NULL, '2023-08-08 05:34:55', '2023-08-08 05:34:55');

-- --------------------------------------------------------

--
-- Table structure for table `servicesmanages`
--

CREATE TABLE `servicesmanages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `history` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_committeds`
--

CREATE TABLE `service_committeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_committeds`
--

INSERT INTO `service_committeds` (`id`, `name`, `description`, `image`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(4, 'We Never Sleep !', '<p><span style=\"color: rgb(91, 88, 88); font-family: Roboto, sans-serif; font-size: 15.632px;\">Our round-the-clock availability ensures that our clients\' needs are always met, no matter the time or location. This level of support helps us to deliver exceptional customer experiences, increase loyalty, and maintain our competitive edge in the market. With \"We Never Sleep,\" our customers can trust that we\'re always there for them.</span><br></p>', 'IMG_20230807062357.png', 0, 1, 1, '2023-08-07 00:23:57', '2023-08-07 01:53:33'),
(5, 'Migrate Your Website Easily', '<p><span style=\"color: rgb(91, 88, 88); font-family: Roboto, sans-serif; font-size: 15.632px;\">Our web hosting service includes free migration, meaning we handle the transfer of your website or application from your current host to ours at no extra cost. With our hassle-free migration process, you can quickly and seamlessly switch to our platform and enjoy our reliable hosting solutions. Our free migration service saves you time and eliminates the complexity of transferring your data, ensuring that your website or application runs smoothly on our platform. Trust us to make your web hosting transition seamless and stress-free.</span><br></p>', 'IMG_20230807062438.png', 0, 1, NULL, '2023-08-07 00:24:38', '2023-08-07 00:24:38'),
(6, 'Easy To Install Applications', '<p><span style=\"color: rgb(91, 88, 88); font-family: Roboto, sans-serif; font-size: 15.632px;\">We are offering easy-to-install applications using Softaculous, a user-friendly installer that simplifies the installation and setup of a wide range of web applications. With Softaculous, customers can quickly and easily install and manage applications without any technical expertise. This saves time and effort, allowing our customers to focus on building and managing their website or application. Overall, Softaculous helps us to deliver a hassle-free experience for our customers and provides a powerful tool to enhance their website\'s functionality.</span><br></p>', 'IMG_20230807062551.png', 0, 1, NULL, '2023-08-07 00:25:51', '2023-08-07 00:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `delete_able` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `address`, `gender`, `image`, `status`, `is_admin`, `delete_able`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin', 'admin@app.com', NULL, '$2y$10$GRs4K5GDb3JscEQEk3fCIOIpfBCaIpuuRwQEb755lv92J0VeIDIDy', NULL, NULL, NULL, NULL, 0, 1, 0, NULL, '2023-08-04 23:52:19', '2023-08-04 23:52:19'),
(2, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$acQCJfQZsZFbu4Moa3aG1.kpCioWd/7o.Lmnhwk6IfAARzw0kHh7m', NULL, NULL, NULL, NULL, 0, 1, 1, NULL, '2023-08-08 02:50:39', '2023-08-08 02:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `visions`
--

CREATE TABLE `visions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visions`
--

INSERT INTO `visions` (`id`, `discriptsion`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"color: rgb(91, 88, 88); font-family: Roboto, sans-serif; font-size: 15.632px; text-align: justify; background-color: rgb(250, 250, 250);\">We love servers, honour your privacy, and practice perfection every day to keep your data safe. Our technical staffs are professional, and they know how to act with different issues. So, we will solve your problems in the shortest period, which saves your precious time! And even, If you aren\'t satisfied with our service, we provide a 7-Days moneyback guarantee. Ultimately you are in charge of the game, and we believe you deserve the best.</span><br></p>', NULL, 1, NULL, '2023-08-06 02:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `v_p_s`
--

CREATE TABLE `v_p_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` int(11) DEFAULT NULL,
  `cpu` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `speed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bandwidth` int(11) DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `v_p_s`
--

INSERT INTO `v_p_s` (`id`, `country`, `cpu`, `ram`, `speed`, `storage`, `bandwidth`, `price`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(7, 0, 1, 2, '2.20', '20', 1000, '6.00', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-09 01:27:13', '2023-08-09 01:27:13'),
(8, 0, 1, 3, '2.20', '30', 2000, '12.00', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-09 01:28:33', '2023-08-09 01:28:33'),
(9, 0, 1, 4, '2.20', '40', 2000, '16.95', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-09 01:35:33', '2023-08-09 01:35:33'),
(10, 0, 2, 6, '2.20', '60', 3000, '28.00', 'http://127.0.0.1:8000/', '0', 1, NULL, '2023-08-09 01:36:19', '2023-08-09 01:36:19'),
(11, 0, 2, 8, '2.20', '80', 4000, '36.95', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-09 01:37:34', '2023-08-09 01:37:34'),
(12, 0, 4, 8, '2.20', '80', 4000, '36.95', 'http://127.0.0.1:8000/', '0', 1, NULL, '2023-08-09 01:38:31', '2023-08-09 01:38:31'),
(13, 0, 4, 16, '2.20', '200', 3000, '75.00', 'http://127.0.0.1:8000/', '0', 1, NULL, '2023-08-09 01:39:16', '2023-08-09 01:39:16'),
(14, 0, 6, 32, '2.20', '250', 4000, '130', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-09 01:40:14', '2023-08-09 01:40:14'),
(15, 1, 1, 2, '2.20', '20', 1000, '5', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:31:54', '2023-08-10 01:31:54'),
(16, 1, 1, 3, '2.20', '30', 2000, '9', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:32:52', '2023-08-10 01:32:52'),
(17, 1, 1, 4, '2.20', '40', 2000, '14', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:34:33', '2023-08-10 01:34:33'),
(18, 1, 2, 6, '2.20', '60', 3000, '26', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:35:35', '2023-08-10 01:35:35'),
(19, 1, 2, 8, '2.20', '80', 4000, '35', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:36:27', '2023-08-10 01:36:27'),
(20, 1, 4, 8, '2.20', '80', 4000, '44', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:37:18', '2023-08-10 01:37:18'),
(21, 1, 4, 16, '2.20', '200', 3000, '70', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:38:11', '2023-08-10 01:38:11'),
(22, 1, 6, 32, '2.20', '250', 4000, '140', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-10 01:40:24', '2023-08-10 01:40:24'),
(23, 2, 1, 2, '2.20', '20', 1000, '10', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:24:05', '2023-08-12 23:24:05'),
(24, 2, 1, 3, '2.20', '30', 2000, '16', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:25:18', '2023-08-12 23:25:18'),
(25, 2, 1, 4, '2.20', '40', 2000, '20', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:26:04', '2023-08-12 23:26:04'),
(26, 2, 2, 6, '2.20', '60', 3000, '30', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:26:55', '2023-08-12 23:26:55'),
(27, 2, 2, 8, '2.20', '80', 4000, '40', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:27:50', '2023-08-12 23:27:50'),
(28, 2, 4, 8, '2.20', '8', 4000, '45', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:28:39', '2023-08-12 23:28:39'),
(29, 2, 4, 16, '2.20', '200', 3000, '80', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:29:22', '2023-08-12 23:29:22'),
(30, 2, 6, 32, '2.20', '250', 4000, '140', 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-12 23:30:03', '2023-08-12 23:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `webcontents`
--

CREATE TABLE `webcontents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discriptsion` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `web_hostings`
--

CREATE TABLE `web_hostings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` int(11) DEFAULT NULL,
  `bandwidth` int(11) DEFAULT NULL,
  `addom_domain` int(11) DEFAULT NULL,
  `subdomain` int(11) DEFAULT NULL,
  `mail` int(11) DEFAULT NULL,
  `sql` int(11) DEFAULT NULL,
  `data_taffic` int(11) DEFAULT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `backup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_hostings`
--

INSERT INTO `web_hostings` (`id`, `country`, `name`, `storage`, `bandwidth`, `addom_domain`, `subdomain`, `mail`, `sql`, `data_taffic`, `os`, `backup`, `price`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 0, 'Personal', 1, 200, 2, 3, 5, 5, 15, 'Linux', 'Weekly', 1.5, 'http://127.0.0.1:8000', '0', 1, 1, '2023-08-14 01:08:42', '2023-08-14 01:09:37'),
(2, 0, 'Bacis', 2, 200, 2, 3, 5, 5, 60, 'Linux', 'Weekly', 2, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:10:42', '2023-08-14 01:10:42'),
(3, 0, 'Advanced', 3, 300, 3, 3, 10, 7, 100, 'Linux', 'Weekly', 2.5, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:15:27', '2023-08-14 01:15:27'),
(4, 1, 'Personal', 1, 200, 2, 3, 5, 5, 15, 'Linux', 'Weekly', 1.3, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:21:13', '2023-08-14 01:21:13'),
(5, 1, 'Bacis', 2, 200, 2, 3, 5, 5, 60, 'Linux', 'Weekly', 2.2, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:23:18', '2023-08-14 01:23:18'),
(6, 1, 'Advanced', 3, 300, 3, 3, 10, 7, 100, 'Linux', 'Weekly', 2.7, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:25:21', '2023-08-14 01:25:21'),
(7, 2, 'Personal', 1, 200, 2, 3, 5, 5, 15, 'Linux', 'Weekly', 2.1, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:27:38', '2023-08-14 01:27:38'),
(8, 2, 'Bacis', 2, 200, 2, 3, 3, 5, 60, 'Linux', 'Weekly', 3, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:29:28', '2023-08-14 01:29:28'),
(9, 2, 'Advanced', 3, 300, 3, 3, 10, 7, 100, 'Linux', 'Weekly', 3, 'http://127.0.0.1:8000', '0', 1, NULL, '2023-08-14 01:32:17', '2023-08-14 01:32:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_massages`
--
ALTER TABLE `contact_massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cover_settings`
--
ALTER TABLE `cover_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dedicated_hosts`
--
ALTER TABLE `dedicated_hosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domain_categories`
--
ALTER TABLE `domain_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domain_pricings`
--
ALTER TABLE `domain_pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genarel_settings`
--
ALTER TABLE `genarel_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misions`
--
ALTER TABLE `misions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reseller_hosts`
--
ALTER TABLE `reseller_hosts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicesmanages`
--
ALTER TABLE `servicesmanages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_committeds`
--
ALTER TABLE `service_committeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visions`
--
ALTER TABLE `visions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `v_p_s`
--
ALTER TABLE `v_p_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webcontents`
--
ALTER TABLE `webcontents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_hostings`
--
ALTER TABLE `web_hostings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_massages`
--
ALTER TABLE `contact_massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cover_settings`
--
ALTER TABLE `cover_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dedicated_hosts`
--
ALTER TABLE `dedicated_hosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `domain_categories`
--
ALTER TABLE `domain_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `domain_pricings`
--
ALTER TABLE `domain_pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `genarel_settings`
--
ALTER TABLE `genarel_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `misions`
--
ALTER TABLE `misions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reseller_hosts`
--
ALTER TABLE `reseller_hosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `servicesmanages`
--
ALTER TABLE `servicesmanages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_committeds`
--
ALTER TABLE `service_committeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visions`
--
ALTER TABLE `visions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `v_p_s`
--
ALTER TABLE `v_p_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `webcontents`
--
ALTER TABLE `webcontents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `web_hostings`
--
ALTER TABLE `web_hostings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
