-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 03:50 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT 0,
  `popular` tinyint(4) DEFAULT 0,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descrip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `meta_title`, `meta_descrip`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(12, 'Mobile Phones', 'Android', 'All top brands with affordable price', 1, 1, '1641712838.jpeg', 'Phone', 'All top brands with affordable price', 'Android Phones', '2021-12-05 03:26:16', '2022-01-09 04:20:38'),
(14, 'Televisions', 'Sumsung', 'Inch_32 Sumsung', 1, 1, '1642803478.png', 'Sumsung', 'Inch_32 Sumsung', 'Inch_32 Sumsung', '2021-12-11 16:03:06', '2022-01-21 19:17:58'),
(15, 'Textile & Decor', 'Home Decoration', 'Home Decoration', 1, 1, '1641715304.jpeg', 'Home Decoration', 'Pazia, Bomba za Pazia, Ureombo wa ndan', 'HD', '2021-12-11 16:04:53', '2022-01-09 05:01:44'),
(16, 'Music System', 'Music', 'Super Bass and Loud', 1, 1, '1641716414.png', 'Music', 'Super Bass', 'Music_System', '2021-12-13 16:12:05', '2022-01-09 05:20:14'),
(17, 'Hand Bags', 'Hand Bags', 'Vipochi na mabegi ya kike', 1, 1, '1642880001.webp', 'WB', 'Vipochi na mabegi ya kike', 'Vipochi na mabegi ya kike', '2021-12-29 06:38:18', '2022-01-22 16:33:21'),
(18, 'Sandals', 'Refrigerators & Coolers', 'Refrigerators & Coolers', 1, 1, '1643137897.png', 'Refrigerators & Coolers', 'Refrigerators & Coolers', 'Refrigerators & Coolers', '2021-12-29 06:42:02', '2022-01-25 16:11:37'),
(19, 'Kanga & Vitenge', 'Kanga & Vitenge', 'Kanga & Vitenge', 1, 1, '1641715584.jfif', 'Kanga & Vitenge', 'Kanga & Vitenge', 'Kanga & Vitenge', '2021-12-29 06:46:28', '2022-01-09 05:06:24'),
(23, 'Accessories', 'Accessories', 'Accessories', 1, 1, '1647171336.jpg', 'Accessories', 'Accessories', 'Accessories', '2022-03-13 08:35:36', '2022-03-13 08:35:36'),
(24, 'Refrigerators & Coolers', 'Refrigerators & Coolers', 'Refrigerators & Coolers', 1, 1, '1647172066.jpg', 'Refrigerators & Coolers', 'Refrigerators & Coolers', 'Refrigerators & Coolers', '2022-03-13 08:47:46', '2022-03-13 08:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `chuma`
--

CREATE TABLE `chuma` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(19, 'Hamisi Chuma', 'hamyychuma.iron26@gmail.com', '0743289196', 'New User', 'How to Order Prodcut', '2022-03-10 15:56:26', '2022-03-10 15:56:26'),
(21, 'User', 'User@gmail.com', '07000000000', 'Purchase', 'tel me about you', '2022-03-10 16:03:19', '2022-03-10 16:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_02_210433_create_categories_table', 2),
(6, '2021_12_09_153257_create_products_table', 3),
(8, '2022_02_14_151041_create_cart_table', 5),
(9, '2022_02_16_043725_create_order_table', 6),
(10, '2022_02_16_050625_create_order_items_table', 6),
(12, '2022_02_17_212232_create_wishlist_item_table', 8),
(14, '2022_02_17_215048_create_chuma_table', 9),
(15, '2022_03_10_143517_create_contacts_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int(191) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel` tinyint(4) NOT NULL DEFAULT 0,
  `tracking_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `fname`, `lname`, `email`, `phone1`, `city`, `address1`, `address2`, `phone2`, `total_price`, `status`, `message`, `cancel`, `tracking_no`, `created_at`, `updated_at`) VALUES
(1, '2', 'Sabra', 'mwana', NULL, '0709887008', 'Moro', 'kihonda', NULL, NULL, 270000, 0, NULL, 0, '1690', '2022-03-12 10:35:54', '2022-03-12 10:35:54'),
(2, '2', 'Sabra', 'mwana', NULL, '0709887008', 'Moro', 'kihonda', NULL, NULL, 8000, 0, NULL, 0, '9056', '2022-03-12 12:26:42', '2022-03-12 12:26:42'),
(3, '2', 'Sabra', 'mwana', NULL, '0709887008', 'Moro', 'kihonda', NULL, NULL, 0, 0, NULL, 0, '5133', '2022-03-12 12:27:39', '2022-03-12 12:27:39'),
(4, '2', 'Sabra', 'mwana', NULL, '0709887008', 'Moro', 'kihonda', NULL, NULL, 540000, 1, NULL, 0, '20851509', '2022-03-12 16:50:56', '2022-03-12 16:52:55'),
(5, '2', 'Sabra', 'mwana', NULL, '0709887008', 'Moro', 'kihonda', NULL, NULL, 8000, 0, NULL, 0, '75401972', '2022-03-12 17:47:10', '2022-03-12 17:47:10'),
(6, '2', 'Sabra', 'mwana', NULL, '0709887008', 'Moro', 'kihonda', NULL, NULL, 470000, 0, NULL, 0, '89502593', '2022-03-12 17:49:24', '2022-03-12 17:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, '1', '3', '1', '270000', '2022-03-12 10:35:54', '2022-03-12 10:35:54'),
(2, '2', '4', '1', '8000', '2022-03-12 12:26:42', '2022-03-12 12:26:42'),
(3, '4', '3', '2', '540000', '2022-03-12 16:50:56', '2022-03-12 16:50:56'),
(4, '5', '4', '1', '8000', '2022-03-12 17:47:10', '2022-03-12 17:47:10'),
(5, '6', '2', '1', '470000', '2022-03-12 17:49:24', '2022-03-12 17:49:24');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `meta_title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_descrip` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cate_id`, `name`, `slug`, `small_description`, `description`, `org_price`, `selling_price`, `rate`, `image`, `images`, `qty`, `tax`, `status`, `trending`, `meta_title`, `meta_keywords`, `meta_descrip`, `created_at`, `updated_at`) VALUES
(1, 12, 'Infinix Hot 11 Play', NULL, 'Size 6.82\" Rear Camera 13MP, Selfie 8MP', 'Dual Simcard, 64GB 4GB, Android 11, 600 mAh, Fingerprint (Rear-Mounte), Size 6.82\" Rear Camera 13MP, Selfie 8MP', '366000', '297000', '4.0', '1647019864793.jpg', '', '10', '1000', 1, 1, NULL, NULL, NULL, '2022-03-11 14:31:04', '2022-03-11 14:31:04'),
(2, 12, 'Samsung M32', NULL, '64GB 4GB 6000 mAh 64MP', '64GB 4GB 6000 mAh 64MP Support 4G Dual SIM OS Android 11 Mediatek Fingerprint Side-mounted', '500000', '470000', '4.5', '1647020226404.jpg', NULL, '2', '1000', 1, 1, NULL, NULL, NULL, '2022-03-11 14:37:06', '2022-03-12 17:49:24'),
(3, 12, 'Iphone S6+', NULL, 'Iphone S6+', 'Iphone S6+', '300000', '270000', '4.0', '1647079678660.jpg', ',1647079678894.jpg,1647079678956.jpg', '7', '10', 1, 1, NULL, NULL, NULL, '2022-03-12 07:07:58', '2022-03-12 16:50:56'),
(4, 17, 'Pochi', NULL, 'Unaweka vitu muhimu na vinaenea', 'Unaweka vitu muhimu na vinaenea', '10000', '8000', '4.0', '1647079918520.jpg', ',1647079918317.jpg,1647079918319.jpg,1647079918200.jpg', '48', '10', 1, 1, NULL, NULL, NULL, '2022-03-12 07:11:58', '2022-03-12 17:47:11'),
(5, 12, 'Umdig Power 3', NULL, '6150mAh Monster Battery 48MP 16MP 6.53\"  Android 10', '6150mAh Monster Battery\r\nFast 18W Charge & 10W Reverse Charge\r\n48MP Ultra Wide Macro Quad Camera\r\n16MP AI Selfie Camera2 + 1 Card Slots\r\nDual SIM + Dedicated Micro-SD Slot\r\nGlobal LTE Bands\r\nDual 4G VoLTE', '450000', '400000', '4.5', '1647159824825.jpg', NULL, '3', '10', 1, 1, NULL, NULL, NULL, '2022-03-13 05:23:44', '2022-03-13 05:23:44'),
(6, 14, 'Samsung 32\'\' TV', NULL, 'LED 32\'\' Full HD', 'LED 32\'\' Full HD HDMI 3, USB 2, 1 AV INPUT', '500000', '480000', '4', '164716069760.jpg', NULL, '20', '10', 1, 1, NULL, NULL, NULL, '2022-03-13 05:38:17', '2022-03-13 05:38:17'),
(7, 14, 'Samsung 75', NULL, 'Android TV 4K', 'LED 55\'\' Full HD HDMI 3, USB 2, 1 AV INPUT\"', '1000000', '950000', '4.5', '1647160858977.jpg', NULL, '4', '10', 1, 1, NULL, NULL, NULL, '2022-03-13 05:40:58', '2022-03-13 05:40:58'),
(9, 16, 'Aborder BT 304', NULL, 'Bluetooth, USB, Memory Card, Remote', 'Bluetooth, USB, Memory Card, Remote\r\n2 Min Speaker', '90000', '80000', '4', '1647161107667.jpg', NULL, '100', '10', 1, 1, NULL, NULL, NULL, '2022-03-13 05:45:07', '2022-03-13 05:45:07'),
(10, 16, 'Aborder BT 666', NULL, 'Bluetooth USB flash drive remote control', 'Bluetooth USB flash drive remote control', '150000', '120000', '4.5', '1647161203677.jpg', NULL, '5', '10', 1, 1, NULL, NULL, NULL, '2022-03-13 05:46:43', '2022-03-13 05:46:43'),
(11, 16, 'Sundar Subwoofer', NULL, 'Bluetooth USB flash drive remote control', 'USB Memory card Ports Inputs and Output ports', '120000', '80000', '4.5', '1647161334641.jpg', NULL, '20', '30', 1, 1, NULL, NULL, NULL, '2022-03-13 05:48:54', '2022-03-13 05:48:54'),
(12, 14, 'TCL iPQ ANDROID TV', NULL, 'UHD 4K Active HDMI Cable', 'Inch 55\'\' Free Bracket youtube, netflix, showmax android tv, 2 years warranty', '1600000', '1450000', '4.5', '1647161515127.jpg', NULL, '3', '100000', 1, 1, NULL, NULL, NULL, '2022-03-13 05:51:55', '2022-03-13 05:51:55'),
(13, 14, 'Hisense TV', NULL, 'Smart 4K HDMI USB AV Ports', 'Brand Hisense 32\'\' Certified UHD, Netflix', '700000', '600000', '4', '1647161694234.jpg', NULL, '4', '2', 1, 1, NULL, NULL, NULL, '2022-03-13 05:54:54', '2022-03-13 05:54:54'),
(14, 18, 'Slippers black', NULL, 'Size 35-39\"', 'Fill comfortable trending model\"', '10000', '8000', '4.5', '1647161910860.jpg', NULL, '50', '23', 0, 0, NULL, NULL, NULL, '2022-03-13 05:58:30', '2022-03-13 06:06:13'),
(15, 18, 'Slipper Collection', NULL, 'Size  38\"', 'Fill comfortable trending model\"', '10000', '8000', '4.5', '1647162089486.jpg', NULL, '30', '2', 1, 1, NULL, NULL, NULL, '2022-03-13 06:01:29', '2022-03-13 06:06:44'),
(16, 18, 'Slipper color', NULL, 'Size  35\"', 'Fill comfortable trending model\"', '10000', '5000', '4.5', '1647162146354.jpg', NULL, '33', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 06:02:26', '2022-03-13 06:07:08'),
(17, 18, 'Slipper white', NULL, 'Size 42\"', 'Fill comfortable trending model\"', '7000', '5000', '4.5', '1647162219894.jpg', NULL, '20', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 06:03:39', '2022-03-13 06:07:26'),
(18, 18, 'Sandals Green', NULL, 'Size 40', 'Fill comfortable trending model', '12000', '8000', '4', '1647163524644.jpg', NULL, '32', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 06:25:24', '2022-03-13 06:25:24'),
(19, 19, 'kitenge Uraafiki', NULL, 'Pande 3', 'Unaweza Kujifunga na kushona', '35000', '30000', '4', '1647164179674.jpg', NULL, '32', '12', 1, 1, NULL, NULL, NULL, '2022-03-13 06:36:20', '2022-03-13 06:36:20'),
(20, 19, 'kitenge duanas', NULL, 'Pande 3', 'Unaweza kujifunga na kushona', '30000', '28000', '4.5', '1647164319157.jpg', NULL, '98', '12', 1, 1, NULL, NULL, NULL, '2022-03-13 06:38:39', '2022-03-13 06:38:39'),
(21, 19, 'kitenge', NULL, 'Pande 3', 'Unaweza kujifunga na kushona', '35000', '30000', '4.5', '1647164389888.jpg', NULL, '32', '23', 0, 0, NULL, NULL, NULL, '2022-03-13 06:39:49', '2022-03-13 06:39:49'),
(22, 19, 'kitenge ur', NULL, 'Pande 3', 'Unaweza kujifunga na kushona', '32000', '30000', '3.5', '1647164480450.jpg', ',1647164480352.jpg,1647164480652.jpg,1647164480553.jpg', '122', '12', 1, 1, NULL, NULL, NULL, '2022-03-13 06:41:20', '2022-03-13 06:41:20'),
(23, 19, 'kitenge 23', NULL, 'pande 2', 'Unaweza kujifunga na kushona', '30000', '28000', '4', '1647164547181.jpg', NULL, '23', '323', 1, 1, NULL, NULL, NULL, '2022-03-13 06:42:27', '2022-03-13 06:42:27'),
(24, 19, 'kanga', NULL, 'pande 2', 'Unaweza kujifunga na kushona', '34000', '32000', '4', '1647164603598.jpg', NULL, '43', '12', 1, 1, NULL, NULL, NULL, '2022-03-13 06:43:23', '2022-03-13 06:43:23'),
(25, 19, 'kange urafiki', NULL, 'pande 2', 'Unaweza kujifunga na kushona', '40000', '37000', '3.5', '1647164718318.jpg', NULL, '32', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 06:45:18', '2022-03-13 06:45:18'),
(27, 17, 'Kinainai Gucc', NULL, 'Gucc', 'classic bag', '20000', '18000', '4.5', '164716532690.jpg', ',1647165326742.jpg', '23', '21', 1, 1, NULL, NULL, NULL, '2022-03-13 06:55:26', '2022-03-13 06:55:26'),
(28, 17, 'Casual Bag', NULL, 'lv', 'classic bag', '17000', '15000', '4.5', '164716544541.jpg', ',1647165445219.jpg', '12', '21', 1, 0, NULL, NULL, NULL, '2022-03-13 06:57:25', '2022-03-13 06:57:25'),
(31, 17, 'Gucc c bag', NULL, 'Gucc cross bag', 'Gucc cross bag', '21000', '20000', '4.5', '1647165559727.jpg', ',1647165559455.jpg,1647165559536.jpg', '13', '21', 1, 0, NULL, NULL, NULL, '2022-03-13 06:59:19', '2022-03-13 06:59:19'),
(35, 17, 'Gucc C bag', NULL, 'Gucc', 'Casual look, Office', '19000', '18500', '4.5', '1647167632291.jpg', NULL, '231', '12', 1, 1, NULL, NULL, NULL, '2022-03-13 07:33:52', '2022-03-13 07:33:52'),
(36, 17, 'Red handbag', NULL, 'Red Gucc', 'Match with any color', '29000', '25000', '4.5', '1647167889500.jpg', NULL, '324', '21', 1, 1, NULL, NULL, NULL, '2022-03-13 07:38:09', '2022-03-13 07:38:09'),
(37, 17, 'Gray Gucc', NULL, 'Classic', 'Match with any color', '20000', '18000', '4.5', '1647167958879.jpg', NULL, '23', '23', 1, 0, NULL, NULL, NULL, '2022-03-13 07:39:18', '2022-03-13 07:39:18'),
(38, 17, 'black bag lv', NULL, 'lv new look', 'Match with any color', '23000', '22000', '4.5', '1647168075553.jpg', ',164716807565.jpg', '23', '43', 1, 0, NULL, NULL, NULL, '2022-03-13 07:41:15', '2022-03-13 07:41:15'),
(39, 17, 'Crazy Handbag', NULL, 'Crazy Handbag', 'Match with any color', '24000', '22000', '4.5', '1647168171326.jpg', NULL, '31', '2131', 1, 0, NULL, NULL, NULL, '2022-03-13 07:42:51', '2022-03-13 07:42:51'),
(40, 17, 'Offica bag', NULL, 'Classic', 'Crazy Handbag', '27000', '22000', '4', '1647168239517.webp', NULL, '653', '32', 1, 0, NULL, NULL, NULL, '2022-03-13 07:43:59', '2022-03-13 07:43:59'),
(41, 17, 'black gucc', NULL, 'Gucc', 'Crazy Handbag', '24000', '23000', '4.5', '1647168327744.jpg', NULL, '12', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 07:45:27', '2022-03-13 07:45:27'),
(42, 15, 'Carpet Manyoya', NULL, 'Size 6x6', 'Hazichuji rangi', '150000', '130000', '4', '1647168775608.jpg', NULL, '4', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 07:52:55', '2022-03-13 07:52:55'),
(43, 15, 'Red Carpet', NULL, 'Size 6x6', 'Crazy Handbag', '120000', '110000', '4.5', '1647168884100.jpg', NULL, '32', '21', 1, 0, NULL, NULL, NULL, '2022-03-13 07:54:44', '2022-03-13 07:54:44'),
(44, 16, 'Mini Speaker', NULL, 'USB drive Memory Card Bluetooth', 'USB drive Memory Card Bluetooth', '25000', '23500', '4.5', '1647169112613.jpg', NULL, '3', '32', 1, 0, NULL, NULL, NULL, '2022-03-13 07:58:32', '2022-03-13 07:58:32'),
(45, 12, 'Samsung J5', NULL, 'Brand New', 'Ram 4 ROM 32 13MP 5MP', '380000', '350000', '3.5', '164716924315.png', ',1647169243756.png,1647169243621.png,1647169243980.png', '2', '21', 1, 0, NULL, NULL, NULL, '2022-03-13 08:00:43', '2022-03-13 08:00:43'),
(46, 12, 'Oppo A12', NULL, '4GB 64GB', '13MP 5MP Android OS 7', '250000', '230000', '3.5', '1647169440256.jpg', ',1647169440216.jpeg', '5', '32', 1, 0, NULL, NULL, NULL, '2022-03-13 08:04:00', '2022-03-13 08:04:00'),
(47, 12, 'Vivo Power', NULL, '3GB 32GB', 'USB drive Memory Card Bluetooth', '340000', '310000', '4', '1647169533214.jpeg', NULL, '3', '2', 1, 0, NULL, NULL, NULL, '2022-03-13 08:05:33', '2022-03-13 08:05:33'),
(48, 12, 'Samsung Note 10', NULL, 'Clean Version 8GB 128GB', 'Type-C Port 48MP wide Camera', '850000', '820000', '4.5', '16471697685.jpeg', NULL, '21', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 08:09:28', '2022-03-13 08:09:28'),
(49, 12, 'Samsung S20', NULL, '5G Mobile Phone', 'Type-C USB port 64MP 6500mAh Monster Battery', '1500000', '1450000', '4.5', '16471698903.png', NULL, '2', '1', 1, 0, NULL, NULL, NULL, '2022-03-13 08:11:30', '2022-03-13 08:11:30'),
(50, 12, 'iPhone 13', NULL, '4GB 128GB', '4GB 128GB Type-C USB port 64MP 6500mAh Monster Battery', '2000000', '1800000', '4.5', '1647170024952.jpg', NULL, '4', '2', 1, 0, NULL, NULL, NULL, '2022-03-13 08:13:44', '2022-03-13 08:13:44'),
(51, 12, 'Samsung A55', NULL, 'Clean', '4GB 128GB Type-C USB port 64MP 6500mAh Monster Battery', '750000', '700000', '4.5', '1647170256681.jpg', NULL, '12', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 08:17:36', '2022-03-13 08:17:36'),
(52, 12, 'Samsung S8', NULL, 'helio\"', '4GB 128GB Type-C USB port 64MP 6500mAh Monster Battery\"', '420000', '400000', '4.5', '1647170340287.jpg', NULL, '12', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 08:19:00', '2022-03-13 08:20:02'),
(53, 24, 'Hisense Frege', NULL, 'Fast Cooling, Energy saving', 'Simple and affordable', '750000', '700000', '4.5', '1647176978128.jpg', NULL, '12', '12', 1, 1, NULL, NULL, NULL, '2022-03-13 10:09:38', '2022-03-13 10:09:38'),
(54, 24, 'Hisense Min Frege', NULL, 'Fast Cooling, Energy saving', 'Refrigerators & Coolers', '650000', '625000', '4.5', '164717707274.jpg', ',1647177072509.jpg,1647177072376.jpg', '12', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 10:11:12', '2022-03-13 10:11:12'),
(55, 24, 'Hisense single', NULL, 'Fast Cooling, Energy saving', 'Refrigerators & Coolers', '500000', '490000', '4.5', '1647177153794.jpg', NULL, '54', '2', 1, 0, NULL, NULL, NULL, '2022-03-13 10:12:33', '2022-03-13 10:12:33'),
(56, 24, 'Hisense Fre', NULL, 'Fast Cooling, Energy saving', 'Refrigerators & Coolers', '1650000', '1600000', '4.5', '1647177232278.jpg', NULL, '21', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 10:13:52', '2022-03-13 10:13:52'),
(57, 24, 'Samsung Frege', NULL, 'Fast Cooling, Energy saving', 'Refrigerators & Coolers', '900000', '875000', '4.5', '1647177311684.png', NULL, '1', '32', 1, 0, NULL, NULL, NULL, '2022-03-13 10:15:11', '2022-03-13 10:15:11'),
(58, 24, 'Frege Two Doors', NULL, 'Fast Cooling, Energy saving', 'Refrigerators & Coolers', '233000', '230000', '4.5', '1647177363349.png', NULL, '21', '12', 1, 0, NULL, NULL, NULL, '2022-03-13 10:16:03', '2022-03-13 10:16:03'),
(59, 24, 'Min Frege', NULL, 'Fast Cooling, Energy saving', 'Refrigerators & Coolers', '600000', '590000', '3.5', '1647177437741.jpg', NULL, '3', '2', 1, 0, NULL, NULL, NULL, '2022-03-13 10:17:17', '2022-03-13 10:17:17'),
(60, 23, 'Samsung USB Flash', NULL, '32 GB', 'Long life', '20000', '16000', '4.5', '1647177898436.jpg', NULL, '21', '21', 1, 0, NULL, NULL, NULL, '2022-03-13 10:24:58', '2022-03-13 10:24:58'),
(61, 23, 'Screen protector', NULL, 'Protect your phone screen', 'Protect your phone screen', '5000', '5000', '4.5', '1647177987795.jpg', NULL, '32', '32', 1, 0, NULL, NULL, NULL, '2022-03-13 10:26:27', '2022-03-13 10:26:27'),
(62, 23, 'Silver Watch', NULL, 'Count your time', 'Count your time', '13000', '12000', '4.5', '1647178118159.jpg', NULL, '21', '2', 1, 0, NULL, NULL, NULL, '2022-03-13 10:28:38', '2022-03-13 10:28:38'),
(63, 23, 'USB Type-C', NULL, NULL, NULL, '7000', '6500', '4.5', '1647178278254.jpg', NULL, '2', NULL, 1, 1, NULL, NULL, NULL, '2022-03-13 10:31:18', '2022-03-13 10:31:18'),
(64, 23, 'Smart Watch', NULL, NULL, NULL, '23000', '20000', '4.5', '1647178345725.jpg', NULL, '2', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:32:25', '2022-03-13 10:32:25'),
(65, 23, 'HD Screen Protector', NULL, NULL, NULL, '10000', '10000', '4.5', '164717840298.jpg', NULL, '1', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:33:22', '2022-03-13 10:33:22'),
(66, 23, 'iPhone Charger', NULL, 'Fast Charger', NULL, '15000', '12000', '4.5', '1647178461711.jpg', NULL, '23', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:34:21', '2022-03-13 10:34:21'),
(67, 23, 'Type-C Charger', NULL, NULL, NULL, '13000', '12000', '4.5', '1647178510933.jpg', NULL, '21', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:35:10', '2022-03-13 10:35:10'),
(68, 23, 'Stereo Buds', NULL, NULL, NULL, '30000', '28000', '4.5', '1647178570714.jpg', NULL, '40', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:36:10', '2022-03-13 10:36:10'),
(69, 23, 'Earphones', NULL, NULL, NULL, '5000', '45000', '4.5', '1647178638674.jpg', NULL, '21', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:37:18', '2022-03-13 10:37:18'),
(70, 23, 'Wireless Earphone', NULL, NULL, NULL, '15000', '15000', '4.5', '1647178692909.jpg', NULL, '1221', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:38:12', '2022-03-13 10:38:12'),
(71, 23, 'Nokia USB', NULL, NULL, NULL, '10000', '10000', '4.5', '1647178745860.jpg', NULL, '21', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:39:05', '2022-03-13 10:39:05'),
(72, 19, 'Kitenge Org', NULL, NULL, NULL, '30000', '28000', '4.5', '164717883263.jpg', NULL, '21', NULL, 1, 0, NULL, NULL, NULL, '2022-03-13 10:40:32', '2022-03-13 10:40:32');

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
  `fnam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `fnam`, `lname`, `phone1`, `phone2`, `city`, `address1`, `address2`, `role_as`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chuma', 'hamyychuma.iron26@gmail.com', NULL, '$2y$10$o.AHpRzOc4il/AGqhZkR5eZpeczE4n3h7i8KOFOIQJMq//uIe6FVq', '', '', '', '', '', '', '', 1, NULL, '2021-11-29 08:12:15', '2021-11-29 08:12:15'),
(2, 'Rashid', 'chuma@gmail.com', NULL, '$2y$10$IfVdNgqmtBlghy8uP2Wvtuc3uRFx9TyGcZTEt6GHASlrJsBlC5Eve', 'Sabra', 'mwana', '0709887008', '', 'Moro', 'kihonda', '', 0, NULL, '2022-01-10 10:13:10', '2022-02-16 03:26:31');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_item`
--

CREATE TABLE `wishlist_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuma`
--
ALTER TABLE `chuma`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist_item`
--
ALTER TABLE `wishlist_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `chuma`
--
ALTER TABLE `chuma`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist_item`
--
ALTER TABLE `wishlist_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
