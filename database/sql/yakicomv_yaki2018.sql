-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2018 at 11:40 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yakicomv_yaki2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `address` longtext COLLATE utf8_unicode_ci,
  `contact_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `open_hour` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `close_hour` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `has_buffet_service` tinyint(4) NOT NULL DEFAULT '0',
  `buffet_price` decimal(18,0) DEFAULT NULL,
  `location` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `slug`, `description`, `address`, `contact_name`, `phone_number`, `email`, `open_hour`, `close_hour`, `has_buffet_service`, `buffet_price`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Yaki 1', 'yaki-1', 'Nhà hàng Yaki 1', '18 Chế Lan Viên, P. Tây Thạnh, Q. Tân Phú, Tp. HCM', 'Anh Hùng', '0964 702 808 - (028) 36206899', 'admin@yaki.com.vn', '11:00', '23:00', 0, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9881590830187!2d106.62798898405839!3d10.812217650659457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175295f81d836b5%3A0x5932194c45465333!2sYaki+Qu%C3%A1n!5e0!3m2!1sen!2s!4v1526400224599\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 0, '2018-05-15 14:38:41', '2018-05-15 16:04:05'),
(2, 'Yaki 2', 'yaki-2', 'Nhà hàng Yaki 2', '123 Bờ Bao Tân Thắng, P. Sơn Kỳ, Q. Tân Phú, Tp. HCM', 'Anh Vĩnh', '0906 928 592 - (028) 38161252', 'admin@yaki.com.vn', '11:00', '23:00', 0, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15675.951266541508!2d106.6214228861431!3d10.812243865770549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bf0a6e08531%3A0x8fba12444567c2ea!2zUXXDoW4gbsaw4bubbmcgWWFraQ!5e0!3m2!1sen!2s!4v1526400322146\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 0, '2018-05-15 14:38:41', '2018-05-15 16:05:58'),
(3, 'Yaki 3', 'yaki-3', 'Nhà hàng Yaki 3', '375 Tân Sơn Nhì, P. Tân Thành, Q. Tân Phú, Tp. HCM', 'Anh Nhâm', '0903 906 084 - (028) 38102177', 'admin@yaki.com.vn', '11:00', '23:00', 1, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2255507918635!2d106.62674911410531!3d10.794029661821769!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175295561b92877%3A0x1f877a4ce3eb5c06!2sQuan+Nuong+Yaki!5e0!3m2!1sen!2s!4v1526400441719\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 0, '2018-05-15 14:38:41', '2018-05-15 16:07:39'),
(4, 'Yaki 4', 'yaki-4', 'Nhà hàng Yaki 4', '60 Đường CN1, P. Sơn Kỳ, Q. Tân Phú, Tp. HCM', 'Anh Năm', '0977 559 967 - (028) 38162188', 'admin@yaki.com.vn', '11:00', '23:00', 1, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15675.65491387801!2d106.6099832697754!3d10.817914000000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bed9d353d93%3A0x3d94fd0419cc6721!2zbmjDoCBow6BuZyBxdcOhbiBuxrDhu5tuZyBZYWtp!5e0!3m2!1sen!2s!4v1526400521753\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 0, '2018-05-15 14:38:41', '2018-05-15 16:11:20'),
(5, 'Yaki 6', 'yaki-6', 'Nhà hàng Yaki 6', '39 Đường số 3, Vĩnh Lộc Mới, Q. Bình Tân, Tp. HCM', 'Anh Hiếu', '0909 257 878 - (028) 36209267', 'admin@yaki.com.vn', '11:00', '23:00', 1, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.0642004633205!2d106.5898639141054!3d10.806394961596414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eb47fe41e75%3A0x1781a971fc5f0786!2zWWFraSBDaOG6s25nIEThu6tuZyBOxrDhu5tuZyA2!5e0!3m2!1sen!2s!4v1526400748976\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 0, '2018-05-15 14:38:41', '2018-05-15 16:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `branch_images`
--

CREATE TABLE `branch_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch_images`
--

INSERT INTO `branch_images` (`id`, `branch_id`, `name`, `order`) VALUES
(2, 2, 'dbf31437c9f32d8e6e4638ca9c9d7b4e.jpeg', 0),
(6, 3, '7d4972a12475857dd6e6b45a92795241.jpeg', 0),
(7, 1, '32e0cf70d6fb34ad98850547c9df6ce2.jpeg', 0),
(8, 4, '983c21fd8b992b04b85c2e1800ff2d41.jpeg', 0),
(9, 5, 'b2931231e613497a98cbf0a52e6dc405.jpeg', 0);
-- --------------------------------------------------------

--
-- Table structure for table `ribbons`
--

CREATE TABLE `ribbons` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `css_class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `ribbons_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ribbons`
--

INSERT INTO `ribbons` (`id`, `name`, `css_class`) VALUES
(0, 'Không hiển thị', NULL),
(1, 'Dải màu xanh lá cây', 'ft23-ribbon'),
(2, 'Dải màu xanh da trời', 'ft23-ribbon blue'),
(3, 'Dải màu đỏ', 'ft23-ribbon red');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ribbon_id` int(10) UNSIGNED NOT NULL,
  `ribbon_content` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_categories` (`cid`),
  KEY `categories_ribbon_id_foreign` (`ribbon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cid`, `name`) VALUES
(10, 'C10', 'Cá'),
(1, 'C01', 'Cháo - Lẩu'),
(12, 'C12', 'Giò chả'),
(16, 'C16', 'Hàng gia dụng'),
(14, 'C14', 'Món ăn được yêu thích'),
(2, 'C02', 'Món chiên - xào - hấp'),
(3, 'C03', 'Món khai vị'),
(4, 'C04', 'Món nướng'),
(13, 'C13', 'Rau củ quả sạch'),
(15, 'C15', 'Sản phẩm được mua nhiều'),
(6, 'C06', 'Thịt bò'),
(8, 'C08', 'Thịt dê'),
(9, 'C09', 'Thịt gà'),
(7, 'C07', 'Thịt heo'),
(5, 'C05', 'Thức uống'),
(11, 'C11', 'Tôm');

-- --------------------------------------------------------

--
-- Table structure for table `category_menu`
--

CREATE TABLE `category_menu` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_menu`
--

INSERT INTO `category_menu` (`category_id`, `menu_id`, `order`) VALUES
(1, 1, 4),
(2, 1, 2),
(3, 1, 1),
(4, 1, 3),
(5, 1, 5),
(10, 2, 5),
(12, 2, 7),
(13, 2, 8),
(6, 2, 1),
(8, 2, 4),
(9, 2, 2),
(7, 2, 3),
(11, 2, 6),
(14, 1, 0),
(15, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`) VALUES
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 45),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 51),
(2, 52),
(2, 53),
(2, 54),
(2, 55),
(2, 56),
(2, 57),
(2, 58),
(2, 59),
(2, 60),
(2, 61),
(2, 62),
(2, 63),
(2, 64),
(2, 65),
(2, 66),
(2, 67),
(2, 68),
(2, 69),
(2, 70),
(2, 71),
(2, 72),
(2, 73),
(2, 74),
(2, 75),
(2, 76),
(2, 77),
(2, 78),
(2, 79),
(2, 80),
(2, 81),
(2, 82),
(2, 83),
(2, 84),
(2, 85),
(2, 86),
(2, 87),
(2, 88),
(2, 89),
(2, 90),
(2, 91),
(2, 92),
(2, 93),
(2, 94),
(2, 95),
(2, 96),
(2, 97),
(2, 98),
(2, 99),
(2, 100),
(2, 101),
(2, 102),
(2, 103),
(2, 104),
(2, 105),
(2, 106),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(2, 111),
(2, 112),
(2, 113),
(2, 114),
(2, 115),
(2, 116),
(2, 117),
(2, 118),
(2, 119),
(2, 120),
(2, 121),
(2, 122),
(2, 123),
(2, 124),
(2, 125),
(2, 126),
(2, 127),
(2, 128),
(2, 129),
(2, 130),
(2, 131),
(2, 132),
(2, 133),
(2, 134),
(2, 135),
(2, 136),
(2, 137),
(2, 138),
(2, 139),
(2, 140),
(4, 141),
(4, 142),
(4, 143),
(4, 144),
(4, 145),
(4, 146),
(4, 147),
(4, 148),
(4, 149),
(4, 150),
(4, 151),
(4, 152),
(4, 153),
(4, 154),
(4, 155),
(4, 156),
(4, 157),
(4, 158),
(4, 159),
(4, 160),
(4, 161),
(4, 162),
(4, 163),
(4, 164),
(4, 165),
(4, 166),
(4, 167),
(4, 168),
(4, 169),
(4, 170),
(4, 171),
(4, 172),
(4, 173),
(4, 174),
(4, 175),
(4, 176),
(4, 177),
(4, 178),
(4, 179),
(4, 180),
(4, 181),
(4, 182),
(4, 183),
(4, 184),
(4, 185),
(4, 186),
(4, 187),
(4, 188),
(4, 189),
(4, 190),
(4, 191),
(4, 192),
(4, 193),
(4, 194),
(4, 195),
(4, 196),
(4, 197),
(4, 198),
(4, 199),
(4, 200),
(4, 201),
(4, 202),
(4, 203),
(4, 204),
(4, 205),
(4, 206),
(4, 207),
(4, 208),
(4, 209),
(4, 210),
(4, 211),
(4, 212),
(4, 213),
(4, 214),
(4, 215),
(4, 216),
(4, 217),
(4, 218),
(4, 219),
(4, 220),
(4, 221),
(4, 222),
(4, 223),
(4, 224),
(4, 225),
(4, 226),
(4, 227),
(4, 228),
(4, 229),
(4, 230),
(4, 231),
(4, 232),
(4, 233),
(4, 234),
(4, 235),
(4, 236),
(4, 237),
(4, 238),
(4, 239),
(4, 240),
(4, 241),
(4, 242),
(4, 243),
(4, 244),
(4, 245),
(4, 246),
(4, 247),
(4, 248),
(4, 249),
(4, 250),
(4, 251),
(4, 252),
(4, 253),
(4, 254),
(4, 255),
(4, 256),
(4, 257),
(4, 258),
(4, 259),
(4, 260),
(1, 261),
(1, 262),
(1, 263),
(1, 264),
(1, 265),
(1, 266),
(1, 267),
(1, 268),
(1, 269),
(1, 270),
(1, 271),
(1, 272),
(1, 273),
(1, 274),
(1, 275),
(5, 276),
(5, 277),
(5, 278),
(5, 279),
(5, 280),
(5, 281),
(5, 282),
(5, 283),
(5, 284),
(5, 285),
(5, 286),
(5, 287),
(5, 288),
(5, 289),
(5, 290),
(5, 291),
(5, 292),
(5, 293),
(5, 294),
(5, 295),
(5, 296),
(5, 297),
(5, 298),
(5, 299),
(5, 300),
(5, 301),
(5, 302),
(5, 303),
(5, 304),
(5, 305),
(5, 306),
(5, 307),
(5, 308),
(5, 309),
(5, 310),
(5, 311),
(5, 312),
(5, 313),
(5, 314),
(5, 315),
(5, 316),
(5, 317),
(5, 318),
(5, 319),
(5, 320),
(5, 321),
(5, 322),
(5, 323),
(5, 324),
(5, 325),
(5, 326),
(5, 327),
(5, 328),
(5, 329),
(5, 330),
(6, 331),
(6, 332),
(6, 333),
(6, 334),
(6, 335),
(7, 336),
(7, 337),
(7, 338),
(7, 339),
(7, 340),
(8, 341),
(8, 342),
(8, 343),
(9, 344),
(9, 345),
(9, 346),
(10, 347),
(10, 348),
(10, 349),
(10, 350),
(10, 351),
(10, 352),
(10, 353),
(10, 354),
(10, 355),
(10, 356),
(10, 357),
(10, 358),
(10, 359),
(10, 360),
(12, 361),
(11, 362),
(13, 363),
(14, 364),
(14, 365),
(4, 366),
(14, 260),
(14, 367),
(4, 367);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member_types`
--

CREATE TABLE `member_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  UNIQUE KEY `member_types_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_types`
--

INSERT INTO `member_types` (`id`, `name`) VALUES
(0, 'Thành viên Yaki'),
(1, 'VIP');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8_unicode_ci,
  `member_point` decimal(10,0) DEFAULT '0',
  `member_type_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `note` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_phone_numbers` (`phone_number`),
  KEY `members_member_type_id_foreign` (`member_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `birth_date`, `gender`, `phone_number`, `email`, `address`, `member_point`, `created_at`, `updated_at`) VALUES
(1, 'vĩnh', '1988-02-09', 0, '0906928592', 'huuvinh2@gmail.com', '40 đường số 6, P. BHH, bình Tân', '0', '2018-05-19 08:16:03', '2018-05-19 08:16:03'),
(2, 'Anh Năm', '1980-03-01', 0, '0977559967', 'anhyeuemnhieulam317@yahoo.com', NULL, '0', '2018-05-19 08:18:20', '2018-05-19 08:18:20'),
(3, 'Nguyen Hue', '1995-10-23', 0, '0981352995', 'nhue231095@gmail.com', 'HCM', '0', '2018-05-19 08:18:30', '2018-05-19 08:18:30'),
(4, 'Nhật', '1987-05-23', 1, '0909458451', 'hoangnhat2305@gmail.com', NULL, '0', '2018-05-20 02:43:30', '2018-05-20 02:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_id`, `name`) VALUES
(1, 'YK_MENU', 'Menu Yaki'),
(2, 'YK_SM_MENU', 'Menu Yaki Super Market');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_20_000000_create_categories_table', 1),
(4, '2018_04_20_000001_create_units_table', 1),
(5, '2018_04_20_000002_create_branches_table', 1),
(6, '2018_04_20_000003_create_branch_images_table', 1),
(7, '2018_04_20_000004_create_products_table', 1),
(8, '2018_04_20_000005_create_product_images_table', 1),
(9, '2018_04_20_000006_create_members_table', 1),
(10, '2018_04_20_000007_create_rt_statuses_table', 1),
(11, '2018_04_20_000008_create_order_statuses_table', 1),
(12, '2018_04_20_000009_create_menus_table', 1),
(13, '2018_04_20_000010_create_rt_types_table', 1),
(14, '2018_04_20_000011_create_category_menu_table', 1),
(15, '2018_04_20_000012_create_orders_table', 1),
(16, '2018_04_20_000013_create_order_details_table', 1),
(17, '2018_04_20_000014_create_category_product_table', 1),
(18, '2018_04_20_000015_create_events_table', 1),
(19, '2018_04_20_000016_create_reservation_tables_table', 1),
(20, '2018_04_20_000017_create_rt_status_histories_table', 1),
(21, '2018_04_20_000018_create_order_status_histories_table', 1),
(22, '2018_04_20_000019_create_parameters_table', 1),
(23, '2018_04_20_000020_create_recruitments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `shipping_address` mediumtext COLLATE utf8_unicode_ci,
  `billing_address` mediumtext COLLATE utf8_unicode_ci,
  `comment` mediumtext COLLATE utf8_unicode_ci,
  `invoice_no` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `invoice_date` datetime DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `total_discount` decimal(18,0) DEFAULT NULL,
  `total_shipping` decimal(18,0) DEFAULT NULL,
  `total` decimal(18,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `member_id`, `status_id`, `shipping_address`, `billing_address`, `comment`, `invoice_no`, `invoice_date`, `delivery_date`, `total_discount`, `total_shipping`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '40 đường số 6, P. BHH, bình Tân', '40 đường số 6, P. BHH, bình Tân', 'giao giờ hành chánh', 'O000001', '2018-05-19 15:16:03', NULL, NULL, NULL, '270000', '2018-05-19 08:16:03', '2018-05-19 08:16:03'),
(2, 3, 0, 'HCM', 'HCM', NULL, 'O000002', '2018-05-19 15:18:30', NULL, NULL, NULL, '195000', '2018-05-19 08:18:30', '2018-05-19 08:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sku` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(18,0) DEFAULT NULL,
  `quantity` decimal(5,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `name`, `sku`, `price`, `quantity`) VALUES
(1, 331, 'Bắp bò Úc', 'YM001', '195000', '1.0'),
(1, 339, 'Thịt đùi', 'YM009', '75000', '1.0'),
(2, 331, 'Bắp bò Úc', 'YM001', '195000', '1.0');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_statuses`
--

INSERT INTO `order_statuses` (`id`, `name`) VALUES
(0, 'Chờ xử lý'),
(1, 'Đã xác nhận'),
(2, 'Đang giao hàng'),
(3, 'Hoàn thành'),
(4, 'Đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `order_status_histories`
--

CREATE TABLE `order_status_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_status_histories`
--

INSERT INTO `order_status_histories` (`id`, `order_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2018-05-19 08:16:03', '2018-05-19 08:16:03'),
(2, 2, 0, '2018-05-19 08:18:30', '2018-05-19 08:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `id` int(10) UNSIGNED NOT NULL,
  `param_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `param_id`, `name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'YAKI_ABOUT', 'Nội dung giới thiệu nhà hàng Yaki', 'Yaki - Chắng dừng nướng là cái tên đã quá quen thuộc đối với những tín đồ yêu thích hải sản- nướng, lẩu theo phong cách Nhật – Hàn. Được hình thành đầu tiên tại Yaki 1, đường Chế Lan Viên, phường Tây Thạnh, quận Tân Phú, đến nay Yaki đã có 6 chi nhánh tại Bình Tân và Tân Phú.\r\n\r\nHệ thống phòng lạnh, phòng vip được thiết kế theo  phong cách Nhật ấm cúng, cùng sân vườn rộng rãi  thoáng mát, Yaki còn là một địa chỉ quen thuộc của hàng triệu khách hàng.\r\n\r\nVới  hai hình thức phục vụ đồ ăn hiện đại là: buffet và gọi món, thực khách có cơ hội khám phá hàng trăm món ăn đặc sắc, bổ dưỡng, với điểm nhấn là các loại thịt, hải sản tươi ngon, quý hiếm được Yaki lựa chọn nhập trực tiếp từ những nhà cung cấp uy tín  nhất ở chính quê hương chúng tôi như Quảng Nam, Nha Trang , Bến Tre…\r\n\r\nVới uy tín thương hiệu  được khẳng định, hệ thống nhà hàng Yaki đã được nhiều thực khách ưu ái lựa chọn để tổ chức các sự kiện có quy mô từ nhỏ tới lớn như: tiệc sinh nhật, tiệc buffet,  thôi nôi,  tiệc công ty, liên hoan, Tất Niên cuối năm, …\r\n\r\nThực đơn của YAKI có nhiều món ăn phong phú, đặc sắc và rất ngon miệng được chế biến theo đúng hương vị Nhật Bản. Thực đơn luôn được định kỳ bổ sung và thay đổi nhằm mang đến cho quí khách sự mới mẻ và nhiều trải nghiệm mới.\r\n\r\nYAKI HÂN HẠNH PHỤC VỤ QUÝ KHÁCH.', '2018-05-17 16:57:41', '2018-05-17 16:57:41'),
(2, 'YAKI_ABOUT_HOME', 'Nội dung giới thiệu nhà hàng Yaki - Trang chủ', 'Yaki - Chắng dừng nướng là cái tên đã quá quen thuộc đối với những tín đồ yêu thích hải sản- nướng, lẩu theo phong cách Nhật – Hàn. Được hình thành đầu tiên tại Yaki 1, đường Chế Lan Viên, phường Tây Thạnh, quận Tân Phú, đến nay Yaki đã có 6 chi nhánh tại Bình Tân và Tân Phú.\r\n\r\nThực đơn của YAKI có nhiều món ăn phong phú, đặc sắc và rất ngon miệng được chế biến theo đúng hương vị Nhật Bản. Thực đơn luôn được định kỳ bổ sung và thay đổi nhằm mang đến cho quí khách sự mới mẻ và nhiều trải nghiệm mới.\r\n\r\nYAKI HÂN HẠNH PHỤC VỤ QUÝ KHÁCH.', '2018-05-19 03:17:21', '2018-05-19 03:17:21'),
(3, 'YAKI_BANK_ACCOUNT_INFO', 'Thông tin tài khoản ngân hàng', 'Quý khách vui lòng chuyển khoản đến tài khoản ngân hàng bên dưới.\r\nNội dung: Chuyển khoản cho đơn hàng XXX\r\n\r\nNgân hàng Quốc Dân(NCB) – Chi nhánh Sài Gòn\r\nSố tài khoản: 100002523366\r\nChủ tài khoản: Nguyễn Thị Mai', '2018-05-19 03:21:41', '2018-05-19 03:21:41'),
(4, 'YK_BG_HEADER', 'Hình nền Header', 'background-header.jpg', '2018-05-19 03:21:41', '2018-05-19 03:21:41'),
(5, 'YK_BG_FOOTER', 'Hình nền Footer', 'background-footer.jpg', '2018-05-19 03:21:41', '2018-05-19 03:21:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `sku` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `unit_id` int(10) UNSIGNED NOT NULL,
  `number_of_unit` decimal(5,1) DEFAULT NULL,
  `price` decimal(18,0) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `product_type` tinyint(4) NOT NULL DEFAULT '0',
  `ribbon_id` int(10) UNSIGNED NOT NULL,
  `ribbon_content` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_skus` (`sku`),
  KEY `products_unit_id_foreign` (`unit_id`),
  KEY `products_ribbon_id_foreign` (`ribbon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `description`, `unit_id`, `number_of_unit`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'KV01', 'Bò tái chanh', 'Bò tái chanh', 2, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-21 06:00:59'),
(2, 'KV02', 'Cải chua trộn', NULL, 1, '1.0', '30000', 0, '2018-05-14 17:00:00', '2018-05-19 16:08:17'),
(3, 'KV03', 'Gỏi rau càng cua thịt bò', NULL, 1, '1.0', '89000', 0, '2018-05-14 17:00:00', '2018-05-19 16:10:53'),
(4, 'KV04', 'Gỏi bao tử heo', NULL, 1, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-19 16:13:23'),
(5, 'KV05', 'Gỏi bò Mỹ', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(6, 'KV06', 'Gỏi lưỡi heo', NULL, 1, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-19 16:15:39'),
(7, 'KV07', 'Gỏi bò cải mầm', NULL, 1, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-19 16:06:46'),
(8, 'KV08', 'Khoai môn tím chiên', NULL, 6, '1.0', '35000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(9, 'KV09', 'Khoai tây chiên', NULL, 6, '1.0', '39000', 0, '2018-05-14 17:00:00', '2018-05-19 16:19:23'),
(10, 'KV10', 'Khô mực', NULL, 5, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-19 16:18:54'),
(11, 'KV11', 'Kim chi Hàn Quốc', NULL, 6, '1.0', '35000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(12, 'KV12', 'Nấm kim châm', NULL, 6, '1.0', '25000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(13, 'KV13', 'Rau nhút xào tỏi', NULL, 6, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(14, 'KV14', 'Rau luộc', NULL, 6, '1.0', '25000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(15, 'KV15', 'Rau luộc- Kho quẹt', NULL, 6, '1.0', '55000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(16, 'KV16', 'Rau muống xào tỏi', NULL, 6, '1.0', '39000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(17, 'KV17', 'Rau trộn thập cẩm', NULL, 6, '1.0', '25000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(18, 'KV18', 'Súp miso Nhật', NULL, 4, '1.0', '20000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(19, 'KV19', 'Trứng gà ốp la', NULL, 1, '1.0', '10000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(20, 'CXH01', 'Cơm chiên cá mặn', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(21, 'CXH02', 'Cơm chiên hải sản', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(22, 'CXH03', 'Cơm chiên trứng', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(23, 'CXH04', 'Cơm chiên trứng cuộn Nhật', NULL, 6, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(24, 'CXH05', 'Cơm chiên tỏi', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(25, 'CXH06', 'Cơm chiên tỏi cuộn trứng', NULL, 6, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(26, 'CXH07', 'Ốc hương', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(27, 'CXH08', 'Ốc len xào dừa', NULL, 6, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(28, 'CXH09', 'Ốc mỡ xào tỏi', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(29, 'CXH10', 'Ốc tỏi', NULL, 5, '1.0', '25000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(30, 'CXH11', 'Đậu hủ chiên giòn', NULL, 6, '1.0', '39000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(31, 'CXH12', 'Bao tử hấp gừng', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(32, 'CXH13', 'Bao tử cá basa hấp gừng', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(33, 'CXH14', 'Bao tử cá basa xào lăng', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(34, 'CXH15', 'Bao tử cá sapa xào nghệ', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(35, 'CXH16', 'Bao tử cá xào cải chua', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(36, 'CXH17', 'Bao tử hầm tiêu', NULL, 12, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(37, 'CXH18', 'Bò lúc lắc khoai tây', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(38, 'CXH19', 'Bò nhúng me', NULL, 6, '1.0', '115000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(39, 'CXH20', 'Bò né', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(40, 'CXH21', 'Bò xào cọng hành', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(41, 'CXH22', 'Bò xào hành lá', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(42, 'CXH23', 'Bò xào hành tây', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(43, 'CXH24', 'Bắp bò nhúng mẻ', NULL, 12, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(44, 'CXH25', 'Bắp bò hấp gừng', NULL, 6, '1.0', '105000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(45, 'CXH26', 'Bắp giò heo hấp cuộn rau rừng', NULL, 12, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(46, 'CXH27', 'Bắp giò heo nướng ống tre', NULL, 12, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(47, 'CXH28', 'Cá nục hấp', NULL, 6, '1.0', '89000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(48, 'CXH29', 'Chim lá rụng rô ti (theo mùa)', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(49, 'CXH30', 'Chân gà quái thú', NULL, 6, '1.0', '60000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(50, 'CXH31', 'Chẳng dừng xào sa tế', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(51, 'CXH32', 'Cà chua xào hột gà', NULL, 6, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(52, 'CXH33', 'Cá tai tượng chiên xù', NULL, 7, '1.0', '169000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(53, 'CXH34', 'Cá dìa hầm tiêu', NULL, 8, '1.0', '21000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(54, 'CXH35', 'Cá kèo chiên giòn', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(55, 'CXH36', 'Cá sapa hấp thố', NULL, 1, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(56, 'CXH37', 'Cá trứng chiên nước mắm', NULL, 6, '1.0', '49000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(57, 'CXH38', 'Cánh gà chiên nước mắm', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(58, 'CXH39', 'Cút xào sả ớt', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(59, 'CXH40', 'Cút xúc bánh đa', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(60, 'CXH41', 'Cải chua xào', NULL, 6, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(61, 'CXH42', 'Cải xanh xào tỏi', NULL, 6, '1.0', '35000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(62, 'CXH43', 'Cừu xào lăng (Ninh Thuận)', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(63, 'CXH44', 'Cừu nướng mắm nhĩ (Ninh Thuận)', NULL, 12, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(64, 'CXH45', 'Cừu xào xả ớt (Ninh Thuận)', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(65, 'CXH46', 'Dê hấp riềng xả', NULL, 8, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(66, 'CXH47', 'Dê nấu giả cầy', NULL, 8, '1.0', '39000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(67, 'CXH48', 'Dê nấu rựa mận (3 lạng)', NULL, 12, '1.0', '139000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(68, 'CXH49', 'Dê tái chanh', NULL, 12, '1.0', '90000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(69, 'CXH50', 'Dê hấp gừng', NULL, 12, '1.0', '80000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(70, 'CXH51', 'Dê hấp lá chanh', NULL, 12, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(71, 'CXH52', 'Dê hấp tía tô', NULL, 8, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(72, 'CXH53', 'Dê nấu riềng mẻ', NULL, 8, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(73, 'CXH54', 'Dê xào lăng', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(74, 'CXH55', 'Dồi trường chiên giòn', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(75, 'CXH56', 'Dồi trường hấp gừng', NULL, 12, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(76, 'CXH57', 'Dồi trường xào cải chua', NULL, 12, '1.0', '105000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(77, 'CXH58', 'Ếch chiên nướng mắm', NULL, 5, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(78, 'CXH59', 'Gỏi sứa (D7)', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(79, 'CXH60', 'Gà bó xôi', NULL, 5, '1.0', '350000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(80, 'CXH61', 'Gà ta hấp mắm nhĩ (1.2 kg)', NULL, 5, '1.0', '280000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(81, 'CXH62', 'Gà ta nấu cháo', NULL, 5, '1.0', '280000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(82, 'CXH63', 'Gà ta hấp cải bẹ xanh (1.2 kg)', NULL, 5, '1.0', '280000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(83, 'CXH64', 'Gà ta hấp hành (1.2 kg)', NULL, 5, '1.0', '280000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(84, 'CXH65', 'Gà ta nướng muối ớt (1.2 kg)', NULL, 5, '1.0', '250000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(85, 'CXH66', 'Gà ta tiềm ớt hiểm (1.2 kg)', NULL, 5, '1.0', '250000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(86, 'CXH67', 'Gà tre hấp mắm nhĩ', NULL, 5, '1.0', '199000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(87, 'CXH68', 'Gỏi bò bóp thấu', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(88, 'CXH69', 'Hến xào', NULL, 6, '1.0', '60000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(89, 'CXH70', 'Khổ qua xào trứng', NULL, 6, '1.0', '35000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(90, 'CXH71', 'Lòng xào nghệ', NULL, 6, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(91, 'CXH72', 'Lươn đồng chiên giòn', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(92, 'CXH73', 'Lươn đồng sốt tiêu chanh', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(93, 'CXH74', 'Lươn đồng um chuối', NULL, 12, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(94, 'CXH75', 'Lươn đồng xào xả ớt', NULL, 12, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(95, 'CXH76', 'Lươn đồng QN', NULL, 7, '1.0', '399000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(96, 'CXH77', 'Mực trứng Nha Trang', NULL, 7, '1.0', '360000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(97, 'CXH78', 'Mì xào hải sản', NULL, 12, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(98, 'CXH79', 'Mì xào bò', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(99, 'CXH80', 'Mì xào chay', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(100, 'CXH81', 'Mì xào thập cẩm', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(101, 'CXH82', 'Mì xào trứng ốp la', NULL, 6, '1.0', '50000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(102, 'CXH83', 'Mực nang hấp gừng', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(103, 'CXH84', 'Mực cơm chiên nước mắm', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(104, 'CXH85', 'Mực cơm hấp gừng', NULL, 12, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(105, 'CXH86', 'Mực cơm xào hành', NULL, 12, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(106, 'CXH87', 'Mực lá hấp gừng', NULL, 7, '1.0', '350000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(107, 'CXH88', 'Mực nang', NULL, 7, '1.0', '350000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(108, 'CXH89', 'Mực ống hấp gừng', NULL, 7, '1.0', '350000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(109, 'CXH90', 'Nghêu hấp miso', NULL, 12, '1.0', '50000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(110, 'CXH91', 'Nghêu hấp sả', NULL, 6, '1.0', '50000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(111, 'CXH92', 'Nghêu hấp thái', NULL, 12, '1.0', '50000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(112, 'CXH93', 'Ngọc Dương hầm thuốc Bắc', NULL, 12, '1.0', '290000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(113, 'CXH94', 'Nhộng xào (D7)', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(114, 'CXH95', 'Phèo bò xào cải chua', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(115, 'CXH96', 'Phèo bò hấp hành', NULL, 12, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(116, 'CXH97', 'Rau mướp xào tỏi', NULL, 6, '1.0', '55000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(117, 'CXH98', 'Sò huyết cháy tỏi', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(118, 'CXH99', 'Sò huyết rang me', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(119, 'CXH100', 'Sò huyết tái mù tạc', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(120, 'CXH101', 'Sướn cừu nướng mắm nhĩ (Ninh Thuận)', NULL, 12, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(121, 'CXH102', 'Sụn gà chiên nước mắm', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(122, 'CXH103', 'Sụn gà rang muối Hồng Kông', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(123, 'CXH104', 'Thiên Nga bay trong làng khói', NULL, 12, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(124, 'CXH105', 'Thú linh xào cải chua', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(125, 'CXH106', 'Thú linh xào nghệ', NULL, 6, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(126, 'CXH107', 'Trâu né', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(127, 'CXH108', 'Trâu tươi nhúng mẻ', NULL, 12, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(128, 'CXH109', 'Trâu xào lá lót', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(129, 'CXH110', 'Trâu xào sa tế đặc biệt', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(130, 'CXH111', 'Tôm Hoàng Kim', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(131, 'CXH112', 'Tôm hấp bia', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(132, 'CXH113', 'Mực trứng hấp gừng', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(133, 'CXH114', 'Đuôi bò hấp gừng', NULL, 12, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(134, 'CXH115', 'Ếch chiên giòn', NULL, 12, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(135, 'CXH116', 'Ếch núp lùm', NULL, 12, '1.0', '89000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(136, 'CXH117', 'Ếch xào lăng', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(137, 'CXH118', 'Ếch xào sa tế', NULL, 12, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(138, 'CXH119', 'Ốc bưu xào tiêu', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(139, 'CXH120', 'Ốc bưu hấp xả', NULL, 12, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(140, 'CXH121', 'Ốc bưu hon sả', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(141, 'N01', 'Ba chỉ dê nướng mắm nhĩ', NULL, 8, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(142, 'N02', 'Ba rọi bò Mỹ cuốn nấm kim châm', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(143, 'N03', 'Ba rọi bò Mỹ nướng sốt Nhật', NULL, 6, '1.0', '109000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(144, 'N04', 'Ba rọi heo cuộn nấm', NULL, 12, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(145, 'N05', 'Ba rọi nướng  kiểu Thái', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(146, 'N06', 'Ba rọi nướng Hàn Quốc', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(147, 'N07', 'Ba rọi nướng muối ớt xanh', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(148, 'N08', 'Bắp giò heo nướng muối Yaki', NULL, 6, '1.0', '55000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(149, 'N09', 'Bò một nắng - Muối trứng kiến', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(150, 'N10', 'Bò Mỹ nướng muối ớt xanh', NULL, 6, '1.0', '109000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(151, 'N11', 'Bò Mỹ nướng sốt Yaki', NULL, 6, '1.0', '115000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(152, 'N12', 'Bò lụi sả nướng mắm nhĩ', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(153, 'N13', 'Bò Mỹ nướng sốt Nhật', NULL, 6, '1.0', '109000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(154, 'N14', 'Bò nướng TCTH nabe', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(155, 'N15', 'Bò nướng sa tế TCTH nabe', NULL, 6, '1.0', '105000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(156, 'N16', 'Bò nướng sốt Nhật', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(157, 'N17', 'Bò nướng đá', NULL, 6, '1.0', '105000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(158, 'N18', 'Bò tơ nướng mắm nhĩ', NULL, 6, '1.0', '105000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(159, 'N19', 'Bò Úc nướng muối ớt xanh', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(160, 'N20', 'Bò Úc nướng sốt tiêu đen', NULL, 6, '1.0', '105000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(161, 'N21', 'Bò Úc nướng đá', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(162, 'N22', 'Bắp bò nướng sốt Nhật', NULL, 12, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(163, 'N23', 'Bắp bò Úc nướng sốt tiêu xanh', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(164, 'N24', 'Bắp bò Úc nướng sốt tiêu đen', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(165, 'N25', 'Cá Ninja nướng ngủ vị', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(166, 'N26', 'Chân gà nướng muối ớt', NULL, 6, '1.0', '60000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(167, 'N27', 'Cà tím nướng mở hành', NULL, 6, '1.0', '35000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(168, 'N28', 'Cá Chim Trắng Tươi Sống', NULL, 7, '1.0', '390000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(169, 'N29', 'Cá Chim Trắng nướng muối ớt', NULL, 8, '1.0', '32000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(170, 'N30', 'Cá Chép Biển', NULL, 7, '1.0', '270000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(171, 'N31', 'Cá Chép giòn', NULL, 7, '1.0', '420000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(172, 'N32', 'Cá Chình Biển', NULL, 7, '1.0', '350000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(173, 'N33', 'Cá Chình Suối', NULL, 7, '1.0', '650000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(174, 'N34', 'Cá Diêu Hồng', NULL, 5, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(175, 'N35', 'Cá Dìa', NULL, 8, '1.0', '21000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(176, 'N36', 'Cá Lăng Tươi Sống', NULL, 7, '1.0', '270000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(177, 'N37', 'Cá Mú Gáy', NULL, 7, '1.0', '220000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(178, 'N38', 'Cá Mú Tươi Sống', NULL, 7, '1.0', '430000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(179, 'N39', 'Cá Sapa nướng giấy bạc', NULL, 5, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(180, 'N40', 'Cá Sapa nướng kiểu Nhật', NULL, 5, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(181, 'N41', 'Cá Tai Tượng Sống', NULL, 7, '1.0', '190000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(182, 'N42', 'Cá Tầm Đà Lạt Tươi Sống', NULL, 7, '1.0', '390000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(183, 'N43', 'Cá bò da nướng muối ớt', NULL, 8, '1.0', '21000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(184, 'N44', 'Cá kèo nướng muối ớt', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(185, 'N45', 'Cá sapa nướng muối ớt', NULL, 5, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(186, 'N46', 'Cá thu nhật nướng kiểu nhật', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(187, 'N47', 'Cá trứng nướng muối ớt', NULL, 6, '1.0', '49000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(188, 'N48', 'Cánh gà nướng muối ớt', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(189, 'N49', 'Cút trứng nướng muối ớt', NULL, 5, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(190, 'N50', 'Cừu nướng TCTH (Úc)', NULL, 6, '1.0', '109000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(191, 'N51', 'Cừu nướng TCTH (Ninh Thuận)', NULL, 6, '1.0', '89000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(192, 'N52', 'Doi de nuong', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(193, 'N53', 'Dung de chien nuoc mam', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(194, 'N54', 'Dê Nướng Giả Chồn', NULL, 8, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(195, 'N55', 'Dê Phay', NULL, 8, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(196, 'N56', 'Dê nướng muối Yaki', NULL, 8, '1.0', '42000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(197, 'N57', 'Dê nướng mắm nhĩ', NULL, 8, '1.0', '42000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(198, 'N58', 'Dồi trường nướng mắm nhĩ', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(199, 'N59', 'Gà Nướng Ngủ Vị', NULL, 6, '1.0', '49000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(200, 'N60', 'Gân heo nướng Ngủ vị', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(201, 'N61', 'Gà tre nướng muối ớt', NULL, 5, '1.0', '199000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(202, 'N62', 'Gà tre nướng ống tre', NULL, 5, '1.0', '175000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(203, 'N63', 'Heo rừng nướng TCTH nabe', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(204, 'N64', 'Hào Nướng Phomai ( đút Lò)', NULL, 5, '1.0', '25000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(205, 'N65', 'Hào Tái Mù Tạc', NULL, 5, '1.0', '22000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(206, 'N66', 'Hào nướng mỡ hành', NULL, 5, '1.0', '22000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(207, 'N67', 'Lưỡi heo nướng muối Yaki', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(208, 'N68', 'Lạng Dê', NULL, 8, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(209, 'N69', 'Lạng tôm', NULL, 8, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(210, 'N70', 'Mẹt dê Yaki', NULL, 1, '1.0', '199000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(211, 'N71', 'Mề gà nướng muối ơt', NULL, 6, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(212, 'N72', 'Mển Rừng', NULL, 7, '1.0', '490000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(213, 'N73', 'Mực Lá Khủng', NULL, 7, '1.0', '390000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(214, 'N74', 'Mực cơm nướng muối ớt xanh', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(215, 'N75', 'Mực lá nướng muối ớt', NULL, 7, '1.0', '350000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(216, 'N76', 'Mực một nắng Phan Thiết nướng muối ớt', NULL, 6, '1.0', '139000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(217, 'N77', 'Mực ống', NULL, 7, '1.0', '350000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(218, 'N78', 'Phèo bò nướng ngũ vị', NULL, 6, '1.0', '49000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(219, 'N79', 'Phèo heo nướng ngũ vị', NULL, 6, '1.0', '79000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(220, 'N80', 'Set Nướng Yaki', NULL, 6, '1.0', '139000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(221, 'N81', 'Sườn nướng muối ớt', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(222, 'N82', 'Sườn nướng Singapore', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(223, 'N83', 'Sườn cây nương cay', NULL, 2, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(224, 'N84', 'Sò huyết nướng mọi', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(225, 'N85', 'Sò lông nướng mọi mù tạc', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(226, 'N86', 'Sò lông nướng mỡ hành', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(227, 'N87', 'Sườn nướng mật ong', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(228, 'N88', 'Sườn Cây nướng Bia', NULL, 2, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(229, 'N89', 'Sườn Dây Bò Mỹ Nướng sốt nhật', NULL, 6, '1.0', '115000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(230, 'N90', 'Sườn Dê Cây', NULL, 2, '1.0', '45000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(231, 'N91', 'Sườn bò Úc nướng sốt nhật', NULL, 6, '1.0', '119000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(232, 'N92', 'Sườn cừu nướng Yaki (Úc)', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(233, 'N93', 'Sườn dê nướng', NULL, 8, '1.0', '42000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(234, 'N94', 'Sườn dê đút lò Yaki', NULL, 7, '1.0', '400000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(235, 'N95', 'Sườn nướng Hàn Quốc', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(236, 'N96', 'Sườn nướng mọi', NULL, 6, '1.0', '80000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(237, 'N97', 'Sườn sụn nướng muối ớt xanh', NULL, 6, '1.0', '85000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(238, 'N98', 'Thân bò nướng sốt nhật', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(239, 'N99', 'Thú linh nướng', NULL, 6, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(240, 'N100', 'Thăn Bò Úc Nướng Kiểu Nhật', NULL, 6, '1.0', '130000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(241, 'N101', 'Thăn Dê Nướng Mắm Nhĩ', NULL, 8, '1.0', '55000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(242, 'N102', 'Tôm Hùm', NULL, 7, '1.0', '800000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(243, 'N103', 'Trâu nướng Sa tế', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(244, 'N104', 'Trâu nướng đá', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(245, 'N105', 'Tôm Sú Sống', NULL, 7, '1.0', '450000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(246, 'N106', 'Tôm nướng muối ớt', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(247, 'N107', 'Tôm nướng mọi', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(248, 'N108', 'Tôm nướng sa tế', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(249, 'N109', 'Tôm rang muối', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(250, 'N110', 'Tôm tái  mù tạt', NULL, 6, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(251, 'N111', 'Voucher Set nướng', NULL, 12, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(252, 'N112', 'Vẹm xanh New Đút Lò ( Phô mai)', NULL, 5, '1.0', '17000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(253, 'N113', 'Vẹm xanh nướng mỡ hành', NULL, 5, '1.0', '15000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(254, 'N114', 'Thịt bò nướng', NULL, 8, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(255, 'N115', 'Êch nướng muối ớt', NULL, 12, '1.0', '80000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(256, 'N116', 'Đùi dê đút lò Yaki', NULL, 7, '1.0', '400000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(257, 'N117', 'Đùi bò Úc nướng sốt Nhật', NULL, 6, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(258, 'N118', 'Đùi bò Úc nướng đá', NULL, 12, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(259, 'N119', 'Đầu Cá Hồi Nướng', NULL, 12, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(260, 'N120', 'Ốc Bưu nướng tiêu xanh', NULL, 6, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-21 04:22:22'),
(261, 'CL01', 'Cháo Cù Lao Cút', NULL, 1, '1.0', '109000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(262, 'CL02', 'Cháo Hào', NULL, 1, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(263, 'CL03', 'Cháo Cù Lao bò', NULL, 1, '1.0', '109000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(264, 'CL04', 'Lẩu lươn đồng', NULL, 1, '1.0', '150000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(265, 'CL05', 'Lẩu Dê Tươi', NULL, 1, '1.0', '149000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(266, 'CL06', 'Lẩu Kim Chi Hàn Quốc', NULL, 1, '1.0', '99000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(267, 'CL07', 'Lẩu Nấm Hải Sản', NULL, 1, '1.0', '160000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(268, 'CL08', 'Lẩu Xí Quách Dê', NULL, 1, '1.0', '139000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(269, 'CL09', 'Lẩu chẳng dừng rau má', NULL, 1, '1.0', '119000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(270, 'CL10', 'Lẩu cá Kèo', NULL, 1, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(271, 'CL11', 'Lẩu hải sản', NULL, 1, '1.0', '139000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(272, 'CL12', 'Lẩu thái', NULL, 1, '1.0', '139000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(273, 'CL13', 'Lẩu Đuôi bò', NULL, 1, '1.0', '149000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(274, 'CL14', 'Lẩu đầu cá hồi', NULL, 1, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(275, 'CL15', 'Lẩu Ếch', NULL, 1, '1.0', '129000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(276, 'TU01', 'Heniken chai', NULL, 3, '1.0', '17000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(277, 'TU02', 'Heineken lon', NULL, 9, '1.0', '20000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(278, 'TU03', 'Heineken lon đại', NULL, 9, '1.0', '22000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(279, 'TU04', 'Imo Hajime (500 ml)', NULL, 3, '1.0', '150000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(280, 'TU05', 'Khuyến mãi Sapporo', NULL, 3, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(281, 'TU06', 'Kimibandai (dát vàng)', NULL, 3, '1.0', '210000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(282, 'TU07', 'Kome Hajime (500 ml)', NULL, 3, '1.0', '150000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(283, 'TU08', 'Larue chanh', NULL, 9, '1.0', '12000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(284, 'TU09', 'Lon Sapporo', NULL, 9, '1.0', '19000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(285, 'TU10', 'Ly Sapporo', NULL, 10, '1.0', '22000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(286, 'TU11', 'Ly Tiger', NULL, 10, '1.0', '21000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(287, 'TU12', 'Nước Fen', NULL, 9, '1.0', '15000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(288, 'TU13', 'Nước cam lon', NULL, 9, '1.0', '15000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(289, 'TU14', 'Nước mắt quê hương (750 ml)', NULL, 3, '1.0', '355000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(290, 'TU15', 'Nước ngọt NV', NULL, 3, '1.0', '10000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(291, 'TU16', 'Nước suối', NULL, 3, '1.0', '12000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(292, 'TU17', 'Ohka (500 ml)', NULL, 3, '1.0', '125000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(293, 'TU18', 'Oni (500 ml)', NULL, 3, '1.0', '50000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(294, 'TU19', 'Oni Special (500 ml)', NULL, 3, '1.0', '95000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(295, 'TU20', 'Pepsi lon', NULL, 9, '1.0', '15000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(296, 'TU21', 'Rượu makkoli', NULL, 3, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(297, 'TU22', 'Rượu vang Pháp', NULL, 3, '1.0', '290000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(298, 'TU23', 'Rượu vang Chile', NULL, 3, '1.0', '200000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(299, 'TU24', 'Rượu vang đà lạt', NULL, 3, '1.0', '100000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(300, 'TU25', 'Rượu Đế Vương 300ml', NULL, 3, '1.0', '115000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(301, 'TU26', 'SG Xanh', NULL, 3, '1.0', '15000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(302, 'TU27', 'SG lon trắng', NULL, 9, '1.0', '14000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(303, 'TU28', 'SG Đỏ', NULL, 3, '1.0', '10000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(304, 'TU29', 'Sapporo lon Dai', NULL, 9, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(305, 'TU30', 'Sochu khoai', NULL, 3, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(306, 'TU31', 'Soji Chammisul', NULL, 3, '1.0', '100000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(307, 'TU32', 'Soji chum - Churum', NULL, 3, '1.0', '100000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(308, 'TU33', 'Sting', NULL, 9, '1.0', '15000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(309, 'TU34', 'Sài Gòn GOLD', NULL, 9, '1.0', '25000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(310, 'TU35', 'Tháp bia Tiger', NULL, 13, '1.0', '185000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(311, 'TU36', 'Tháp bia Sapporo', NULL, 13, '1.0', '165000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(312, 'TU37', 'Tiger bạc', NULL, 3, '1.0', '17000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(313, 'TU38', 'Tiger bạc', NULL, 9, '1.0', '19000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(314, 'TU39', 'Tiger lon', NULL, 9, '1.0', '17000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(315, 'TU40', 'Tiger nâu', NULL, 3, '1.0', '16000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(316, 'TU41', 'Wakaba (350 ml)', NULL, 3, '1.0', '40000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(317, 'TU42', 'Wodka (lớn)', NULL, 3, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(318, 'TU43', 'Wodka (nhỏ)', NULL, 3, '1.0', '70000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(319, 'TU44', 'Wodka HN 300 ml', NULL, 3, '1.0', '70000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(320, 'TU45', 'Wodka Pháp', NULL, 3, '1.0', '200000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(321, 'TU46', 'Wodka x men 300ml', NULL, 3, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(322, 'TU47', 'Wodka xmen 500ml', NULL, 3, '1.0', '100000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(323, 'TU48', 'Xá xị', NULL, 9, '1.0', '15000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(324, 'TU49', 'Yumegenmai (750 ml)', NULL, 3, '1.0', '240000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(325, 'TU50', 'Budweiser', NULL, 9, '1.0', '22000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(326, 'TU51', 'Rượu SHOCHU HONKAKU', NULL, 3, '1.0', '240000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(327, 'TU52', 'Rượu mo UME HAJIME 500 ml', NULL, 3, '1.0', '210000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(328, 'TU53', 'Đế Vương Nhãn Vàng 700ml', NULL, 3, '1.0', '270000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(329, 'TU54', 'Đế Vương nhãn Bạc (750 ml)', NULL, 3, '1.0', '270000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(330, 'TU55', 'Đế Vương nhãn Vàng (750 ml)', NULL, 3, '1.0', '270000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(331, 'YM001', 'Bắp bò Úc', '', 7, '1.0', '195000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(332, 'YM002', 'Ba rọi bò Mỹ', '', 7, '1.0', '190000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(333, 'YM003', 'Bò Mỹ', '', 7, '1.0', '315000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(334, 'YM004', 'Thịt bò tơ', 'Xuất xứ: Bến Tre', 7, '1.0', '235000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(335, 'YM005', 'Bò một nắng', 'Xuất xứ: Bến Tre', 7, '1.0', '695000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(336, 'YM006', 'Thịt heo', 'Xuất xứ: Bến Tre', 7, '1.0', '69000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(337, 'YM007', 'Sườn heo', 'Xuất xứ: Bến Tre', 7, '1.0', '120000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(338, 'YM008', 'Thịt ba rọi', 'Xuất xứ: Bến Tre', 7, '1.0', '115000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(339, 'YM009', 'Thịt đùi', 'Xuất xứ: Bến Tre', 7, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(340, 'YM010', 'Chân giò heo', 'Xuất xứ: Bến Tre', 7, '1.0', '90000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(341, 'YM011', 'Đùi dê', '', 7, '1.0', '260000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(342, 'YM012', 'Thịt dê', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(343, 'YM013', 'Xương dê', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(344, 'YM014', 'Gà Tre', '', 7, '1.0', '140000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(345, 'YM015', 'Gà ta', 'Xuất xứ: Bến Tre', 7, '1.0', '140000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(346, 'YM016', 'Đùi Gà', '', 7, '1.0', '60000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(347, 'YM017', 'Cá Bò Da', '', 7, '1.0', '150000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(348, 'YM018', 'Cá Bống Mú', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(349, 'YM019', 'Cá Cam', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(350, 'YM020', 'Cá chếp giòn', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(351, 'YM021', 'Cá chim  trắng', '', 7, '1.0', '215000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(352, 'YM022', 'Cá Chình', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(353, 'YM023', 'Các chuồng Quảng Nam', '', 7, '1.0', '75000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(354, 'YM024', 'Cá ngừ', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(355, 'YM025', 'Cá thu nhật', '', 7, '1.0', '70000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(356, 'YM026', 'Cá Sapa', '', 7, '1.0', '65000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(357, 'YM027', 'Cá tầm', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(358, 'YM028', 'Cá Thu', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(359, 'YM029', 'Cá Trứng', '', 7, '1.0', '35000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(360, 'YM030', 'Cá tai tượng', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(361, 'YM031', 'Chả Bò Đà Nẵng', '', 7, '1.0', '300000', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(362, 'YM032', 'Tôm', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(363, 'YM033', 'Rau sạch', '', 7, '1.0', '0', 0, '2018-05-14 17:00:00', '2018-05-14 17:00:00'),
(364, 'BCN01', 'Đùi dê đút lò', NULL, 14, '1.0', '430000', 0, '2018-05-21 03:59:23', '2018-05-21 04:03:16'),
(365, 'BCN02', 'Mẹt dê Yaki', NULL, 11, '1.0', '199000', 0, '2018-05-21 04:06:58', '2018-05-21 04:08:13'),
(366, 'BCN03', 'Ốc  bươu nướng tiêu xanh', NULL, 1, '1.0', '75000', 0, '2018-05-21 04:09:43', '2018-05-21 04:09:43'),
(367, 'BCN04', 'Chẳng dừng nướng', NULL, 1, '1.0', '85000', 0, '2018-05-21 04:32:44', '2018-05-21 06:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `name`, `order`) VALUES
(1, 1, 'cc73134035aaa9975dc17961471ee4ff.jpeg', 0),
(2, 7, '1855099a9c6524390e09c1c8a70173d7.jpeg', 0),
(3, 2, 'd658937232a9d51059369fed7fc471ae.jpeg', 0),
(4, 9, '3677155b4f5e34ff9c6a07065b03566f.jpeg', 0),
(5, 3, 'b7bc6822a2a6eda0b24e701dccbada59.jpeg', 0),
(6, 4, '418818a106c76a519b29f7b680f36781.jpeg', 0),
(7, 6, '1ba3a08a55cbee096ece42ad735a1d5c.jpeg', 0),
(8, 10, '85867185635c8db70d9ba17879194b19.png', 0),
(9, 364, 'e2a0fa5ae289bfd426b0fb93750cb9df.jpeg', 0),
(10, 365, 'ad20f2cefff322771b265244aa34dd21.jpeg', 0),
(11, 260, 'd2ae7aef456037014c0f80a283e56fec.png', 0),
(12, 367, '3b0acc53e38d7dd53c58ac9a6d9dfaa9.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `recruitments`
--

CREATE TABLE `recruitments` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recruitments`
--

INSERT INTO `recruitments` (`id`, `title`, `content`, `status`, `created_at`, `updated_at`) VALUES
(2, 'HỆ THỐNG YAKI CẦN TUYỂN', 'Yaki cần tuyển tất cả vị trí:\r\n-Phục vụ, Tiếp thực\r\n-Thu ngân, Lễ tân\r\n-Pha chế, Phụ bếp\r\n-Tạp vụ\r\nThời gian làm việc linh động.\r\n+ Lương thỏa thuận\r\n+Thưởng + TIP cao\r\n+ Được đào tạo bài bản các kĩ năng nhà hàng\r\n+ Môi trường làm việc năng động \r\n+ Cơ hội thăng tiến cao \r\nỨng viên quan tâm vui lòng gửi hồ sơ về 60CN1, P Sơn Kỳ, Quận Tân Phú.', 0, '2018-05-19 15:26:10', '2018-05-19 15:59:47'),
(3, 'Cần Tuyển quản lý nhà hàng', '⛔Công ty #KYODAI_YAKI cần tuyển: 10 Quản lý nhà hàng làm việc tại Tân Phú, Bình Tân⛔', 0, '2018-05-21 06:11:03', '2018-05-21 06:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_tables`
--

CREATE TABLE `reservation_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `reservation_no` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `branch_id` int(10) UNSIGNED NOT NULL,
  `rt_type_id` int(10) UNSIGNED NOT NULL,
  `reservation_date` date DEFAULT NULL,
  `reservation_hour` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_of_people` int(10) UNSIGNED NOT NULL,
  `note` longtext COLLATE utf8_unicode_ci,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reservation_tables`
--

INSERT INTO `reservation_tables` (`id`, `reservation_no`, `member_id`, `branch_id`, `rt_type_id`, `reservation_date`, `reservation_hour`, `number_of_people`, `note`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 'R000001', 2, 1, 0, '2018-05-20', '17:20', 10, NULL, 0, '2018-05-19 08:18:20', '2018-05-19 08:18:20'),
(2, 'R000002', 4, 3, 0, '2018-05-23', '18:00', 8, 'Đặt phòng lạnh riêng', 1, '2018-05-20 02:43:30', '2018-05-20 16:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `rt_statuses`
--

CREATE TABLE `rt_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rt_statuses`
--

INSERT INTO `rt_statuses` (`id`, `name`) VALUES
(0, 'Chờ xử lý'),
(1, 'Đã xác nhận'),
(2, 'Hoàn thành'),
(3, 'Đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `rt_status_histories`
--

CREATE TABLE `rt_status_histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `rt_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rt_status_histories`
--

INSERT INTO `rt_status_histories` (`id`, `rt_id`, `status_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, '2018-05-19 08:18:20', '2018-05-19 08:18:20'),
(2, 2, 0, '2018-05-20 02:43:30', '2018-05-20 02:43:30'),
(3, 2, 1, '2018-05-20 16:13:12', '2018-05-20 16:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `rt_types`
--

CREATE TABLE `rt_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rt_types`
--

INSERT INTO `rt_types` (`id`, `name`) VALUES
(0, 'Bình thường'),
(1, 'Buffet');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`) VALUES
(2, 'Cây'),
(3, 'Chai'),
(4, 'Chén'),
(5, 'Con'),
(6, 'Dĩa'),
(1, 'Đĩa'),
(14, 'Đùi'),
(7, 'Kg'),
(8, 'Lạng'),
(9, 'Lon'),
(10, 'Ly'),
(11, 'Mâm'),
(12, 'Phần'),
(13, 'Tháp');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@yaki.com.vn', '$2y$10$qz8JGrnwGIV9we7SII9/kuVeIFxIfhYqzKRTkuvnVF7oFdjEcxy/y', 'UhFO545vKq5NWaKHlLk2jCNOHbkrznw4hJnTfRrePBNAzQfVHe0jiE032T0V', '2018-05-15 14:38:40', '2018-05-15 14:38:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_branches` (`name`);

--
-- Indexes for table `branch_images`
--
ALTER TABLE `branch_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_images_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD KEY `category_menu_category_id_foreign` (`category_id`),
  ADD KEY `category_menu_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD KEY `category_product_category_id_foreign` (`category_id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_member_id_foreign` (`member_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD UNIQUE KEY `order_statuses_id_unique` (`id`);

--
-- Indexes for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_status_histories_order_id_foreign` (`order_id`),
  ADD KEY `order_status_histories_status_id_foreign` (`status_id`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_param_ids` (`param_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `recruitments`
--
ALTER TABLE `recruitments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_tables_member_id_foreign` (`member_id`),
  ADD KEY `reservation_tables_branch_id_foreign` (`branch_id`),
  ADD KEY `reservation_tables_status_id_foreign` (`status_id`),
  ADD KEY `reservation_tables_rt_type_id_foreign` (`rt_type_id`);

--
-- Indexes for table `rt_statuses`
--
ALTER TABLE `rt_statuses`
  ADD UNIQUE KEY `rt_statuses_id_unique` (`id`);

--
-- Indexes for table `rt_status_histories`
--
ALTER TABLE `rt_status_histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rt_status_histories_rt_id_foreign` (`rt_id`),
  ADD KEY `rt_status_histories_status_id_foreign` (`status_id`);

--
-- Indexes for table `rt_types`
--
ALTER TABLE `rt_types`
  ADD UNIQUE KEY `rt_types_id_unique` (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_units` (`name`);

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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `branch_images`
--
ALTER TABLE `branch_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recruitments`
--
ALTER TABLE `recruitments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rt_status_histories`
--
ALTER TABLE `rt_status_histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_images`
--
ALTER TABLE `branch_images`
  ADD CONSTRAINT `branch_images_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ribbon_id_foreign` FOREIGN KEY (`ribbon_id`) REFERENCES `ribbons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_menu`
--
ALTER TABLE `category_menu`
  ADD CONSTRAINT `category_menu_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `category_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_member_type_id_foreign` FOREIGN KEY (`member_type_id`) REFERENCES `member_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
  
--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `orders_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `order_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_status_histories`
--
ALTER TABLE `order_status_histories`
  ADD CONSTRAINT `order_status_histories_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_status_histories_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `order_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ribbon_id_foreign` FOREIGN KEY (`ribbon_id`) REFERENCES `ribbons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `products_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation_tables`
--
ALTER TABLE `reservation_tables`
  ADD CONSTRAINT `reservation_tables_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reservation_tables_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reservation_tables_rt_type_id_foreign` FOREIGN KEY (`rt_type_id`) REFERENCES `rt_types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reservation_tables_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `rt_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `rt_status_histories`
--
ALTER TABLE `rt_status_histories`
  ADD CONSTRAINT `rt_status_histories_rt_id_foreign` FOREIGN KEY (`rt_id`) REFERENCES `reservation_tables` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `rt_status_histories_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `rt_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
