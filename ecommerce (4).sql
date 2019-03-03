-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 02:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isDeleted` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `isDeleted`, `created_at`, `updated_at`) VALUES
(24, '1546178955.png', 'Yes', '2018-12-30 08:39:15', '2018-12-30 08:40:15'),
(25, '1546179054.png', 'Yes', '2018-12-30 08:40:55', '2018-12-30 08:42:11'),
(26, '1546179055.png', 'Yes', '2018-12-30 08:40:55', '2018-12-30 08:42:09'),
(27, '1546179095.png', 'Yes', '2018-12-30 08:41:36', '2018-12-30 08:42:07'),
(28, '1546179423.png', 'Yes', '2018-12-30 08:47:03', '2018-12-30 08:50:01'),
(29, '1546179423.png', 'Yes', '2018-12-30 08:47:03', '2018-12-30 08:49:59'),
(30, '1546179424.png', 'Yes', '2018-12-30 08:47:05', '2018-12-30 08:49:57'),
(31, '1546179780.png', 'Yes', '2018-12-30 08:53:01', '2018-12-30 08:53:35'),
(32, '1546179781.jpg', 'Yes', '2018-12-30 08:53:02', '2018-12-30 08:53:33'),
(33, '1546179782.png', 'Yes', '2018-12-30 08:53:03', '2018-12-30 08:53:31'),
(34, '1546179825.png', 'Yes', '2018-12-30 08:53:46', '2018-12-30 08:54:44'),
(35, '1546179826.png', 'Yes', '2018-12-30 08:53:46', '2018-12-30 08:54:42'),
(36, '1546179826.jpg', 'Yes', '2018-12-30 08:53:47', '2018-12-30 08:54:42'),
(37, '1546179893.png', 'Yes', '2018-12-30 08:54:54', '2018-12-30 08:55:15'),
(38, '1546179894.png', 'Yes', '2018-12-30 08:54:54', '2018-12-30 08:55:14'),
(39, '1546179894.jpg', 'Yes', '2018-12-30 08:54:55', '2018-12-30 08:55:12'),
(40, '1546179923.png', 'Yes', '2018-12-30 08:55:24', '2019-01-01 22:52:55'),
(41, '1546179924.png', 'Yes', '2018-12-30 08:55:24', '2019-01-01 22:52:54'),
(42, '1546179924.jpg', 'Yes', '2018-12-30 08:55:25', '2019-01-01 22:52:51'),
(43, '1546185573.jpg', 'Yes', '2018-12-30 10:29:33', '2019-01-01 22:52:50'),
(44, '1546402993.jpg', 'Yes', '2019-01-01 22:53:13', '2019-01-01 22:53:23'),
(45, '1546403030.png', 'Yes', '2019-01-01 22:53:52', '2019-01-31 02:24:46'),
(46, '1546403033.jpg', 'No', '2019-01-01 22:53:53', '2019-01-01 22:53:53'),
(47, '1546403033.png', 'No', '2019-01-01 22:53:55', '2019-01-01 22:53:55'),
(48, '1549116933.jpg', 'Yes', '2019-02-02 08:45:34', '2019-02-02 08:45:56'),
(49, '1549432502.jpg', 'Yes', '2019-02-06 00:25:04', '2019-02-06 00:25:24');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dummy.png',
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `isDeleted` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image`, `category`, `category_id`, `slug`, `isDeleted`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'dummy.png', 'neurosurgery', NULL, 'neurosurgery', 'No', NULL, '2019-02-20 11:46:16', '2019-02-20 11:46:16'),
(2, 'dummy.png', 'implants', 1, 'implants', 'No', NULL, '2019-02-20 11:46:38', '2019-02-20 11:46:38'),
(3, 'dummy.png', 'disposable', 1, 'disposable', 'No', NULL, '2019-02-20 11:47:05', '2019-02-20 11:47:05'),
(4, 'dummy.png', 'instruments', 1, 'instruments', 'No', NULL, '2019-02-20 11:47:26', '2019-02-20 11:47:26'),
(5, 'dummy.png', 'orthopaedics', NULL, 'orthopaedics', 'No', NULL, '2019-02-20 11:47:40', '2019-02-20 11:47:40'),
(6, 'dummy.png', 'implants', 5, 'implants', 'No', NULL, '2019-02-20 11:47:58', '2019-02-20 11:47:58'),
(7, 'dummy.png', 'disposable', 5, 'disposable', 'No', NULL, '2019-02-20 11:48:17', '2019-02-20 11:48:17'),
(8, 'dummy.png', 'hydrocephalus shunt systems', 2, 'hydrocephalus-shunt-systems', 'No', NULL, '2019-02-20 11:48:46', '2019-02-20 11:48:46'),
(9, 'dummy.png', 'bone grafting products', 2, 'bone-grafting-products', 'No', NULL, '2019-02-20 11:49:24', '2019-02-20 11:49:24');

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
(5, '2018_12_17_161315_create_categories_table', 2),
(6, '2018_12_20_025309_create_banners_table', 3),
(9, '2018_12_21_033423_create_products_table', 4),
(10, '2018_12_22_040152_create_product_multi_price', 5);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` longtext COLLATE utf8mb4_unicode_ci,
  `category_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci,
  `sub_title` mediumtext COLLATE utf8mb4_unicode_ci,
  `qty` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `multi_price` enum('Yes','No') COLLATE utf8mb4_unicode_ci DEFAULT 'No',
  `images` mediumtext COLLATE utf8mb4_unicode_ci,
  `attachment` mediumtext COLLATE utf8mb4_unicode_ci,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `inStock` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Yes',
  `isDeleted` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `slug`, `category_id`, `title`, `sub_title`, `qty`, `price`, `multi_price`, `images`, `attachment`, `description`, `inStock`, `isDeleted`, `created_at`, `updated_at`) VALUES
(23, 'PR0PR4PR9', 'chhabra-slit-n-spring-hydrocephalus-shunt-system-vp63', '81', 'chhabra slit n spring hydrocephalus shunt system-vp', 'chhabra slit n spring hydrocephalus shunt system-vp', '100', '0', 'Yes', '[\"1549116791180.jpg\",\"1549254831189.jpg\"]', NULL, '<p>The model with a larger distal catheter (75cm) is labelled as VP and the model with smaller distal catheter (30cm) is labelled as VA.</p>', 'Yes', 'Yes', '2019-02-02 08:43:11', '2019-02-04 01:16:36'),
(24, 'PR5PR3PR6', 'eye-sphere-solid451', '80', 'eye sphere solid', 'the solid eye sphere is made of medical grade silicone elastomer. it is molded in one piece. it is supplied in peel open packs, ready to use, sterilized by ethylene oxide. each packet contains one eye sphere.', '100', '5050', 'No', '[\"1549253694195.jpg\",\"154925485055.jpg\"]', '[\"1549257446.pdf\"]', '<p><strong>Every human being deserves good look. After evisceration the sclera and muscles contract and shrink. The contour of eye is lost. The artificial eye prosthesis, worn later on, will always look artificial due to lack of eye movements. If evisceration has been done in childhood the eye socket may not develop to full size and a bony deformity may occur. The purpose of solid silicone eye sphere is to maintain contour of eyeball, maintain the eye movements, provide a base for prosthesis, and maintain shape of eye socket and to prevent bony deformity. Lastly, but not the least, to give full self-confidence to the patient. It gives excellent cosmetic results. The artificial eye prosthesis, to be worn later on, will look natural due to good eye contour and almost full eye movements.</strong></p>', 'Yes', 'Yes', '2019-02-03 22:44:33', '2019-02-04 01:17:47'),
(25, 'PR2PR6PR7', 'eye-pad', '83', 'eye pad', 'material of pad: knitted filament yarn fabric and pu foam inside.', '500', '500', 'No', '[\"154926224599.jpg\"]', NULL, '<p>It is world&#39;s best eye dressing. The beauty of this eye dress is that the pad is sealed from all sides. The pad will not shed fibers. The cotton of pad is inside and covered by filament yarn knitted fabric from all sides. So there is no loose fiber around the pad. A very high tech process has been used to manufacture it. For patient it means that no fiber will go inside the eyes to irritate. It also means comfort for the patient. The eye patch to hold the pad in place is made of soft stretchable fabric. The adhesive is soft and easy to remove. The release liner of the patch is easy to remove. All this results to more comfort for patient and ease for the surgeon.</p>', 'Yes', 'Yes', '2019-02-04 01:07:25', '2019-02-04 01:20:44'),
(26, 'PR6PR5PR2', 'kjkjkjkjkjkjkjkjkjkjkjkjkjkjkj', '80', 'kjkjkjkjkjkjkjkjkjkjkjkjkjkjkj', 'kjkjkjkjkjkjkjkjkjkjkjkjkjkjkj', '500', '500', 'No', '[\"154926266792.png\"]', NULL, '<p>kajsdl;fajsd;l kas;ldk;laskd;laskd;lkas;ldkas;lkd;laskd;l</p>', 'Yes', 'Yes', '2019-02-04 01:14:27', '2019-02-04 01:16:50'),
(27, 'PR1PR9PR1', 'title', '84', 'title', 'sub title', '100', '500', 'No', '[\"1549432906123.jpg\"]', NULL, '<p><strong>Lorem </strong><em>ipsum </em>dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Yes', 'Yes', '2019-02-06 00:31:46', '2019-02-20 12:09:36'),
(28, 'PR7PR0PR3', 'chhabra-slit-n-spring-hydrocephalus-shunt-system-vp411', '8', 'chhabra slit n spring hydrocephalus shunt system-vp', 'chhabra slit n spring hydrocephalus shunt system complete set regular size vp(ventricular peritoneal)', '100', '0', 'Yes', '[\"1550684550169.jpg\",\"1550686832110.png\"]', NULL, '<p>The model with a larger distal catheter (75cm) is labelled as VP and the model with smaller distal catheter (30cm) is labelled as VA.</p>', 'Yes', 'No', '2019-02-20 12:12:30', '2019-02-20 12:50:32'),
(29, 'PR1PR0PR8', 'gsl-dome-valve-hydrocephalus-shunt-system', '8', 'gsl dome valve hydrocephalus shunt system', 'gsl dome valve hydrocephalus shunt system', '500', '5000', 'No', '[\"155068705817.jpg\"]', NULL, '<p>GSL DOME VALVE Hydrocephalus Shunt System is a burr hole type of shunt. It has been designed to shunt Cerebro-Spinal Fluid from left ventricles of brain to the peritoneal cavity or rt. Atrium of heart. The main controlling valve is Dome type of valve, which sits on a silicone seat. Except the connector whole shunt is made of medical grade silicone elastomer only. Each system is supplied complete with one unitised GSL &#39;Dome Valve&#39; reservoir with 90cm radio-opaque distal part, one 15cm sterilized by Ethylene Oxide gas and packed in double peel open packaging.</p>', 'Yes', 'No', '2019-02-20 12:54:18', '2019-02-20 12:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_multi_pricies`
--

CREATE TABLE `product_multi_pricies` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multi_price_data` longtext COLLATE utf8mb4_unicode_ci,
  `isDeleted` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_multi_pricies`
--

INSERT INTO `product_multi_pricies` (`id`, `product_id`, `multi_price_data`, `isDeleted`, `created_at`, `updated_at`) VALUES
(1, '19', '[{\"name\":\"ok\",\"code\":\"1223\",\"price\":\"2500\"},{\"name\":\"ok22\",\"code\":\"3215\",\"price\":\"6966\"}]', 'Yes', '2018-12-30 09:37:29', '2019-02-02 08:22:14'),
(2, '19', '[{\"name\":\"ok\",\"code\":\"1223\",\"price\":\"2500\"},{\"name\":\"ok22\",\"code\":\"3215\",\"price\":\"6966\"}]', 'Yes', '2019-02-02 06:22:49', '2019-02-02 08:22:14'),
(3, '19', '[{\"name\":\"ok\",\"code\":\"1223\",\"price\":\"2500\"},{\"name\":\"ok22\",\"code\":\"3215\",\"price\":\"6966\"}]', 'Yes', '2019-02-02 08:19:22', '2019-02-02 08:22:14'),
(4, '19', '[{\"name\":\"ok55\",\"code\":\"1223\",\"price\":\"2500\"},{\"name\":\"ok22\",\"code\":\"3215\",\"price\":\"6966\"}]', 'Yes', '2019-02-02 08:22:00', '2019-02-02 08:22:14'),
(5, '19', '[{\"name\":\"ok55\",\"code\":\"1223\",\"price\":\"2500\"},{\"name\":\"ok22\",\"code\":\"3215\",\"price\":\"6966\"}]', 'No', '2019-02-02 08:22:14', '2019-02-02 08:22:14'),
(6, '23', '[{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH201\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH202\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH203\",\"price\":\"4709\"}]', 'Yes', '2019-02-02 08:43:11', '2019-02-03 23:03:51'),
(7, '23', '[{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH201\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH202\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH203\",\"price\":\"4709\"}]', 'No', '2019-02-03 23:03:51', '2019-02-03 23:03:51'),
(8, '28', '[{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH201\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (Medium Pressure)\",\"code\":\"SH202\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (Low Pressure)\",\"code\":\"SH203\",\"price\":\"4709\"}]', 'Yes', '2019-02-20 12:12:30', '2019-02-20 12:50:32'),
(9, '28', '[{\"name\":\"Ventricular Peritoneal (High Pressure)\",\"code\":\"SH201\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (Medium Pressure)\",\"code\":\"SH202\",\"price\":\"4709\"},{\"name\":\"Ventricular Peritoneal (Low Pressure)\",\"code\":\"SH203\",\"price\":\"4709\"}]', 'No', '2019-02-20 12:50:32', '2019-02-20 12:50:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'admin', 'admin', NULL, '$2y$10$37X46MtySOTsjY5ZogwaYeUU4nKJ7qUkRvKUE0v6MZkcaDufjNelC', 'c6MryKxLnoRASdMg37NUeoN1LttLqWa2HtU4JGAFxS1vjcTr0Mr5AlLodNXN', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_multi_pricies`
--
ALTER TABLE `product_multi_pricies`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `product_multi_pricies`
--
ALTER TABLE `product_multi_pricies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
