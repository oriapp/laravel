-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 08:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idfgear`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `url`, `updated_at`, `created_at`) VALUES
(8, 'Rifle Accessories', '<p><span style=\"color: rgb(17, 17, 17); font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Fira Sans&quot;, &quot;Droid Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, &quot;ヒラギノ角ゴ Pro W3&quot;, &quot;Hiragino Kaku Gothic Pro&quot;, メイリオ, Meiryo, &quot;ＭＳ Ｐゴシック&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; font-size: 16px;\">Tactical Rifle Upgrade Accessories</span><br></p>', '2020.09.23.11.42.16-InfLg-2020.09.22.20.17.42-Yxw7b-IDF-Combat-Build-Accessories.jpg', 'rifle-accessories', '2020-09-23 11:42:16', '2020-09-23 11:42:16'),
(9, 'Flash Lights', '<p>Flashlights for helmets, guns and hand</p>', 'no-image.png', 'flash-light', '2020-09-26 15:25:32', '2020-09-26 15:25:32'),
(10, 'Weapon Lights', '<p>Flashlights for weapons<br></p>', '2020.10.03.16.54.41-hWymC-owl-optimized-weapon-light-front-500x500.jpg', 'weapon-lights', '2020-10-03 16:54:41', '2020-10-01 22:22:40'),
(11, 'Survival Light', 'Survival Light and Sun-power lights<br>', '2020.10.03.16.59.10-cygs0-img.jpg', 'survival-light', '2020-10-03 16:59:10', '2020-10-03 16:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `ctitle`, `carticle`, `updated_at`, `created_at`) VALUES
(1, 1, 'about our company', '<div>We would like to cooperate with you in many years of experience in developing, planning, manufacturing, importing and marketing equipment and products solutions for the security forces,</div><div>goverment bodies and private customers when the quality of the products and their suitability are operational&nbsp; and battlefield is the first and formost before our eyes.</div><div>Our equipment is located in the leading units in Israel at the best of the best</div><div>Out company was established in 2014 in recognition of the growing demand of tactical equipments, weapons accessories, textile soldiers and combatants and not the armed East in particular and security bodies in general.</div><div><br></div><div>We continue to innovate and keep up to date to import and develop products to use the combat front and maintain close cooperation with the IDF (Israeli Defence Force) floor and security bodies in the country in order to contiue to make Israeli arena the best solutions and innovations in the field.</div><div><br></div><div>We represent Israeli and international companice and leading suppliers and quality manufacturers in their field of the best selling and most sought after garments.</div><div><br></div><div>As a result of the ongoing supply of combat equipment to the security forces, goverment organizations and private customers that we carry out, we are honored to offer you to purchase on out new website</div><div>Our motto: Quality, reliability, and professional and service-free service during delivery as soon as possible</div><div>Quality - High high quality from the most reputable manufacturers with warranties and services on all our products according to the line that a satisfied customer brings after another customer.</div><div>Innovation - to give the best and most innovative solutions so we visit exhibitions around the world meet with the manufacturers sometimes give the ideas and needs of our customers and you to their operational requirements and the needs that arise from the field think test and try and make the necessary adjustments to achieve the perfect process,</div><div><br></div><div>Reliability - Our mission is to make sure you get the equipment you need when you need it. And once the truth is, the product and equipment you purchased from us will not disappoint you, there are no services</div><div>We sell equipment needs operational and the moment you need it we want it to serve you.</div><div>5-star service - as a company that has engraved fast and professional quality services on its banner</div><div>This is our guideline No services Availability Goods Reliability Fair prices and personal contact with the customer This is the key to a long way You have to trust us and our equipment</div><div><br></div><div>Speed ​​- Our speed ensures the order is delivered accurately and on time, fast response, available stock with no delays and no excuses. Our international solutions, ensure fast, reliable and safe delivery.</div><div>We specialize in providing solutions for security forces and security companies, in Israel and around the world we have a huge selection of products and solutions for almost every problem to ensure that they can always find the process with us or consult for our advice.</div><div>The store is a quality and professional store that leads the field of tactical equipment in Israel. The store markets products and brands of leading companies in Israel and around the world.</div><div>We believe that a quality product and good service can come along with an attractive price without the customer having to settle for anything</div><div><br></div>', '2020-10-23 20:33:44', '2020-07-17 00:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(1, 'About', 'about-us', 'About Us', '2020-07-15 17:30:49', '2020-07-15 17:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `amount` varchar(50) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(12,2) NOT NULL,
  `send` varchar(255) NOT NULL DEFAULT '0',
  `paid` varchar(50) DEFAULT '0',
  `user_info` text DEFAULT NULL,
  `details` longtext NOT NULL,
  `payment_info` text DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `user_id`, `data`, `total`, `send`, `paid`, `user_info`, `details`, `payment_info`, `updated_at`, `created_at`) VALUES
(1, 'v8kKZh4vSyFdTXdjxAYa9PSshGZsiLCD', 10, 'a:3:{i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:12:\"Pagani Zonda\";s:5:\"price\";d:240000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:19:\"Rolls Royce Phantom\";s:5:\"price\";d:350000;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:16:\"mercedes maybach\";s:5:\"price\";d:2300000;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '5890000.00', '0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '1', NULL, '', NULL, '2020-07-14 23:08:31', '2020-07-14 23:08:31'),
(14, 'jbJ087Lo3N9fEvbDSZwUglXVW3Pu64S9', 13, 'a:2:{i:10;a:6:{s:2:\"id\";s:2:\"10\";s:4:\"name\";s:4:\"Oliv\";s:5:\"price\";d:5000000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:12;a:6:{s:2:\"id\";s:2:\"12\";s:4:\"name\";s:118:\"חולצה מדי פשיטה ג טקטי למפקד 2 כיסים מדי לחימה צבע ירוק זית דגם Keela\";s:5:\"price\";d:700;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '5001400.00', '0', '0', NULL, '', NULL, '2020-08-10 13:46:57', '2020-08-10 13:46:57'),
(15, 'sZHxlGIF63HNfuPvINQk0RZezblkN1st', 13, 'a:1:{i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:18:\"Porsche Cayenne112\";s:5:\"price\";d:20000;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '60000.00', '0', '0', NULL, '', NULL, '2020-08-14 17:17:25', '2020-08-14 17:17:25'),
(16, 'ink5DnEd32uwkeA4muyStcbh6lsEVLYS', 13, 'a:1:{i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:15:\"Porsche Cayenne\";s:5:\"price\";d:2000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '2000.00', '0', '0', NULL, '', NULL, '2020-08-14 17:18:31', '2020-08-14 17:18:31'),
(17, 'c1YhoQlPpzQLnPyDbLTbxK1ZgK5cCJt5', 13, 'a:2:{i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:15:\"Porsche Cayenne\";s:5:\"price\";d:2000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:2:\"Q8\";s:5:\"price\";d:98000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '100000.00', '0', '0', NULL, '', NULL, '2020-08-24 22:06:34', '2020-08-24 22:06:34'),
(18, 'AntGbGFUHCF7PIGWwnfBmH5WXJMJIFnK', 13, 'a:1:{i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:15:\"Porsche Cayenne\";s:5:\"price\";d:2000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '2000.00', '0', '0', NULL, '', NULL, '2020-08-28 16:23:12', '2020-08-28 16:23:12'),
(19, 'KcohrSjArNiSE4q5HD7OKYLZZdMvUHxf', 13, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:16:\"mercedes maybach\";s:5:\"price\";d:2300000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '2300000.00', '0', '0', NULL, '', NULL, '2020-08-28 16:46:46', '2020-08-28 16:46:46'),
(20, 'MVFCLbTCkStrK8h3GG2SRnh9EnOUdlkY', 13, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:19:\"Rolls Royce Phantom\";s:5:\"price\";d:350000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '350000.00', '0', '0', NULL, 'adadadad %space$ adad %space$ dad %space$ 12 %space$ 0549082678 %space$ plbwymw@gmail.com', NULL, '2020-08-28 19:12:42', '2020-08-28 19:12:42'),
(21, 'xCcQsIeM10TnFrD2drn9Hjt4dDgKN5De', 13, 'a:1:{i:15;a:6:{s:2:\"id\";s:2:\"15\";s:4:\"name\";s:4:\"test\";s:5:\"price\";d:12;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '12.00', '0', '0', NULL, 'dad %space$ adadad %space$ adad %space$ 12 %space$ dadadad %space$ adada', NULL, '2020-08-28 19:14:00', '2020-08-28 19:14:00'),
(22, '93kstIt7gOfTWPYm5iz9n6RNwWTNQvYg', 13, 'a:1:{i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:15:\"Porsche Cayenne\";s:5:\"price\";d:2000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '2000.00', '0', '0', NULL, 'Iris 10 %space$ Tel Aviv %space$ Israel %space$ 4445545 %space$ 0549082678 %space$ test@gmail.com', NULL, '2020-08-28 19:19:03', '2020-08-28 19:19:03'),
(23, 'VfD8yZov6JjSTKu17LvzS1DbZWRxFege', 13, 'a:1:{i:15;a:6:{s:2:\"id\";s:2:\"15\";s:4:\"name\";s:4:\"test\";s:5:\"price\";d:12;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '12.00', '0', '0', NULL, 'Iris 10 %space$ Tel Aviv %space$ Israel %space$ 4445545 %space$ 0549082678 %space$ test@gmail.com', NULL, '2020-08-28 20:25:04', '2020-08-28 20:25:04'),
(24, 'Fyzn3tFA6hyMNsHjrUg781zedQZVNqCl', 13, 'a:1:{i:17;a:6:{s:2:\"id\";s:2:\"17\";s:4:\"name\";s:7:\"fat-cat\";s:5:\"price\";d:125;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '125.00', '0', '0', NULL, 'Iris 10 %space$ Tel Aviv %space$ Israel %space$ 4445545 %space$ 0549082678 %space$ test@gmail.com', NULL, '2020-08-28 20:25:33', '2020-08-28 20:25:33'),
(25, 'MRbxliBorsLkcU2luXeNejLzVrz6VS4F', 13, 'a:1:{i:51;a:6:{s:2:\"id\";s:2:\"51\";s:4:\"name\";s:67:\"Olight M1X Striker CREE XM-L2 1000LM 5modes Portable LED Flashlight\";s:5:\"price\";d:0;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"color\";s:5:\"black\";}s:10:\"conditions\";a:0:{}}}', '0.00', '0', '0', NULL, 'Iris 10 %space$ Tel Aviv %space$ Israel %space$ 4445545 %space$ 0549082678 %space$ plbwymw@gmail.com', NULL, '2020-10-03 13:44:57', '2020-10-02 18:22:49'),
(26, '4i1P8CPy3BGOa5WbFZiKU11fSIkRnRRU', 13, 'a:1:{i:44;a:6:{s:2:\"id\";s:2:\"44\";s:4:\"name\";s:128:\"Nitecore MH25GT 1000 Lumen USB Rechargeable LED Flashlight - Long Range Throwing with Lumen Tactical Adapters (Upgrade for MH25)\";s:5:\"price\";d:0;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"color\";s:3:\"red\";s:4:\"size\";N;}s:10:\"conditions\";a:0:{}}}', '0.00', '0', '0', NULL, 'Iris 10 %space$ Tel Aviv %space$ Israel %space$ 4445545 %space$ 0549082678 %space$ test@gmail.com', NULL, '2020-10-03 13:53:02', '2020-10-03 13:53:02'),
(27, 'Q5a2tDn24yBzvZp2F3itWKKDBN54LRMb', 13, 'a:2:{i:44;a:6:{s:2:\"id\";s:2:\"44\";s:4:\"name\";s:128:\"Nitecore MH25GT 1000 Lumen USB Rechargeable LED Flashlight - Long Range Throwing with Lumen Tactical Adapters (Upgrade for MH25)\";s:5:\"price\";d:0;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"color\";s:5:\"balck\";s:4:\"size\";N;}s:10:\"conditions\";a:0:{}}i:45;a:6:{s:2:\"id\";s:2:\"45\";s:4:\"name\";s:136:\"Nitecore MH10 v2 1200 Lumen USB-C Rechargeable LED Flashlight with 4000mAh Battery, Hard Holster with EdisonBright battery carrying case\";s:5:\"price\";d:0;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"color\";s:5:\"balck\";s:4:\"size\";N;}s:10:\"conditions\";a:0:{}}}', '0.00', '0', '0', NULL, 'Iris 10 %space$ Tel Aviv %space$ Israel %space$ 4445545 %space$ 0549082678 %space$ plbwymw@gmail.com', NULL, '2020-10-03 13:56:21', '2020-10-03 13:56:21'),
(33, '1bJpKQD3wKEJHbkAbxKN5QtusqZ4Z6hN', 13, 'a:1:{i:56;a:6:{s:2:\"id\";s:2:\"56\";s:4:\"name\";s:105:\"OPSMEN  F101 Stealth Survival Flash Light 35M Waterproof & Seismic IR Light Frequency for Helmets & Molle\";s:5:\"price\";d:0;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"color\";s:5:\"Black\";s:4:\"size\";N;}s:10:\"conditions\";a:0:{}}}', '0.00', '0', '1', NULL, 'Iris 10 %space$ Ramat Hasharon %space$ Israel %space$ 4724949 %space$ 0549082678 %space$ plbwymw@gmail.com', NULL, '2020-10-07 15:16:13', '2020-10-04 13:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `in_short` varchar(255) DEFAULT 'yikes',
  `pimage` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `old_price` decimal(10,2) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `purl` varchar(255) NOT NULL,
  `producer` varchar(50) DEFAULT NULL,
  `amount` varchar(255) DEFAULT '0',
  `visibility` varchar(50) DEFAULT '1',
  `colors` longtext DEFAULT NULL,
  `size` longtext DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `in_short`, `pimage`, `price`, `old_price`, `brand`, `weight`, `purl`, `producer`, `amount`, `visibility`, `colors`, `size`, `updated_at`, `created_at`) VALUES
(22, 8, 'CAA Tactical EVG | ERGONOMIC VERTICAL GRIP', '<p><span style=\"color: rgb(0, 0, 0); font-family: Poppins; letter-spacing: 0.07px;\">The EVG Ergonomic Vertical Grip is intended for Picatinny rails with providing controlled operation and cost-effective vertical fore grip.</span></p>', 'ERGONOMIC VERTICAL GRIP', '2020.09.23.11.47.45-6JzEo-httpwww.israeldefensestore.commediacatalogproductevevg.jpg', '1.00', '0.00', 'CAA', '0', 'caa-tactical-evg-ergonomic-vertical-grip', 'CAA', '4', '1', 's:5:\"black\";', NULL, '2020-11-17 12:23:10', '2020-09-23 11:47:45'),
(23, 8, 'CAA Tactical MVG | SHORT VERTICAL GRIP', '<p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">Intended for use with Picatinny rails, the MVG Short Vertical Grip is an essential, light weight, savvy vertical fore grip. The Short Vertical Grip is shaped ergonomically intended for use as a customary vertical grip. It is made of polymer and rubberized panels. The compact MVG gives the user a comfortable fighting stance. No assembly required.</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Contains a storage compartment</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Equipped with a complacent non-slipping gripping surface</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Composed with dual removable switch mounts</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Provides quick and easy installation with no extra tools to Picatinny Rails</span></font></p>', 'MVG | SHORT VERTICAL GRIP', '2020.09.23.11.49.06-jtPV2-2020.09.22.20.17.42-Yxw7b-IDF-Combat-Build-Accessories.jpg', '1.00', '0.00', 'MVG', '0', 'caa-tactical-mvg-short-vertical-grip', 'CAA', '4', '1', 'a:2:{i:0;s:5:\"black\";i:1;s:8:\"Od Green\";}', 'N;', '2020-09-23 11:49:06', '2020-09-23 11:49:06'),
(24, 8, 'FGA | FLASHLIGHT FORWARD GRIP', '<p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">Made with Aluminum and Polymer, the FGA Flashlight Forward Grip Adaptor is a combined light mount and vertical grip into one unit. Intended for the Picatinny rail, it is a lightweight, vertical fore grip. The Flashlight Grip Adaptor is shaped ergonomically designed for the use as a conventional vertical grip. A FGA allows the operator to move effectively while identifying and engaging targets. The grip is accommodated with a 1” push button end cap lights.</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Thumb activated with providing safe operation during high stressful situations</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Equipped with a side safety switch – preventing inadvertent activation during combat</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Storage compartment includes a screw cap holding a cleaning kit, extra batteries, foam plug – eliminating rattling and noise</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Comes with a rubber pressure switch that covers for customized pressure</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Includes a 1.5” Picatinny rail –attached to either side, bottom of the mount for addition</span></font></p>', 'Flashlight Forward Grip', '2020.09.23.14.46.17-lTxLA-0000433_fga-flashlight-grip-adaptor-picatinny-1000x630.jpg', '59.99', '65.00', 'FGA', '0', 'fga-flashlight-forward-grip', 'CAA', '2', '1', NULL, NULL, '2020-09-23 14:51:03', '2020-09-23 14:46:17'),
(25, 8, 'MGRIP1 | MAGAZINE WELL GRIP – AR15/M4', '<p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">The MGRIP1 Ergonomic CQB Magazine Grip is designed for the Picatinny rail hand guard. This polymer made fore grip, is modeled with a more vertical grip angle optimized checkered finger grooves and rubberized, skeleton backstrap. The MGRIP1 is made for a close and tight grip, providing a natural feel with controlled operation and comfortable carry.</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\"><br></span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Picatinny rail prevents any loose movement</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Modeled with a finger groove with added control</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? No assembly required – storage compartment holds batteries, and firing items</span></font></p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px;\"><font color=\"#8a8a8a\" face=\"sans-serif\"><span style=\"font-size: 16px;\">? Provides more control during firing while reducing fatigue</span></font></p>', 'Magazine Well Grip FOR AR15/M4', '2020.09.23.14.49.30-0jZAH-0000935_mgrip1-ergonomic-cqb-magazine-grip-picatinny (1).png', '22.00', '0.00', 'FAB', '0', 'mgrip1-magazine-well-grip-ar15-m4', 'CAA', '2', '1', NULL, NULL, '2020-09-23 14:51:09', '2020-09-23 14:49:11'),
(26, 8, 'FSM15P | DUAL PICATINNY RAIL FRONT SIGHT', '<h2 style=\"margin: 15px 0px; font-size: 42px; color: rgb(0, 0, 0); text-transform: uppercase; font-family: sans-serif;\">FSM15P DUAL PICATINNY RAIL FRONT SIGHT&nbsp;MEASUREMENTS</h2><h1 class=\"product_title entry-title\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\"><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;<span style=\"font-weight: 700;\">Width</span>: 1.33″</p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;<span style=\"font-weight: 700;\">Height</span>: .82″</p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;<span style=\"font-weight: 700;\">Length</span>: 2.83″</p></h1>', 'dual picatinny rail front sight', '2020.09.23.14.53.57-VA47D-0000395_fsm15p-dual-picatinny-rail-front-sight-ar15m4-1000x630.jpg', '13.40', '0.00', 'FSM15P', '0', 'fsm15p-dual-picatinny-rail-front-sight', 'CAA', '4', '1', NULL, NULL, '2020-09-23 14:53:57', '2020-09-23 14:53:38'),
(27, 8, 'PREH | OEM HANDGUARD PICATINNY RAIL – AR/M4', '<p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">A 5.6 inch Picatinny rail which can be easily installed on an existing OEM AR15 / M4 rifle or carbine handguard</p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;Single Picatinny rail screws into existing vent holes on the handguards<br>?&nbsp;Fits most handguard<br>?&nbsp;Excellent for mounting lasers, flashlights, vertical grips, bipods and more.</p>', 'oem handguard picatinny rail', '2020.09.23.14.58.32-YhywG-0001420_preh-handguard-picatinny-rail-ar15m4-720x128.jpg', '9.00', '9.99', 'PREH', '0', 'preh-oem-handguard-picatinny-rail-ar-m4', 'CAA', '4', '1', NULL, NULL, '2020-09-23 14:59:10', '2020-09-23 14:58:11'),
(28, 8, 'CAA TACTICAL Magazine Loader', '<div style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; letter-spacing: 0.005em; line-height: 1.9;\"><em style=\"margin-bottom: 0px;\">ML556 is a magazine loader for .223 cal/5.56mm ammunition. Designed to load single magazines quickly, providing speed and efficiency.</em></p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; letter-spacing: 0.005em; line-height: 1.9;\"><span style=\"font-weight: 700; margin-bottom: 0px;\">Technical details:</span></p></div><div style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; letter-spacing: 0.005em; line-height: 1.9;\">Weight (grams): 38.0</p></div><div style=\"margin-bottom: 0px; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;, sans-serif;\"><span style=\"margin-bottom: 0px; color: rgb(128, 128, 0);\"><span style=\"font-weight: 700; margin-bottom: 0px;\">Will fit the:&nbsp;</span></span>M16/M4/AR-15</div>', 'tactical magazine loader', '2020.09.23.15.12.03-0wIc2-httpwww.israeldefensestore.commediacatalogproductmlml5.jpg', '25.00', '27.00', 'CAA', '0', 'caa-tactical-magazine-loader', 'CAA', '3', '1', NULL, NULL, '2020-09-23 15:12:03', '2020-09-23 15:09:50'),
(29, 8, 'TVG1 | THUNDER LONG VERTICAL GRIP', '<p>Intended for use with Picatinny railed hand protects, the TVG1 Long Thunder Vertical Grip is a basic, light weight, combat- savvy, and vertical forearm grip. The Grip ergonomically intended for use as a customary vertical hold.&nbsp; The TVG1 has a maximum height of 4.4″.</p><p><br></p><p>? Designed for better use in control&nbsp; and improved comfort</p><p>? TVG1 comes with a storage comparment</p><p>? Compact and lightweight with a one finger vertical forward grip</p><p>? Equipped with clamp locking system for secure mounting to any Picatinny rail</p>', 'thunder long vertical grip', '2020.10.05.15.16.32-rXbhU-GRIP.jpg', '5.00', '10.00', 'tvg1', '0', 'tvg1-thunder-long-vertical-grip', 'CAA', '0', '1', NULL, NULL, '2020-10-05 15:56:10', '2020-09-23 20:09:00'),
(30, 8, 'SVG Short Vertical Grip', '<ul dir=\"ltr\" style=\"margin-bottom: 10px; padding: 0px 20px; list-style-position: inside; color: rgb(0, 0, 0); font-family: &quot;open sans hebrew&quot;, Arial;\"><li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong style=\"font-weight: bold;\"><span style=\"color: rgb(26, 23, 27); font-size: 16px;\">Designed with 6 ring grooves for better operating control</span></strong></span></li><li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong style=\"font-weight: bold;\"><span style=\"color: rgb(26, 23, 27); font-size: 16px;\">Composed with a storage compartment</span></strong></span></li><li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong style=\"font-weight: bold;\"><span style=\"color: rgb(26, 23, 27); font-size: 16px;\">&nbsp;Equipped with a claim-locking system for a secure lock on Picatinny Rail</span></strong></span></li><li><span style=\"font-family: arial, helvetica, sans-serif;\"><strong style=\"font-weight: bold;\"><span style=\"color: rgb(26, 23, 27); font-size: 16px;\">Provides a non-slipping gripping surface</span></strong></span></li></ul>', 'thunder long vertical grip', '2020.10.24.14.32.12-b4JHi-2020.09.24.09.46.11-q32Ll-0000313_cp1-cheek-riser-m16-oem-stock-1000x630.jpg', '0.00', '0.00', 'SVG', '0', 'svg-short-vertical-grip', 'CAA', '3', '1', NULL, NULL, '2020-10-24 14:32:12', '2020-09-23 20:11:56'),
(31, 8, '9mm Magazine Coupler for MP5 & Uzi', '<p><font color=\"#777777\" face=\"Poppins\"><span style=\"letter-spacing: 0.07px;\">Israel Defense Store The Israeli Army Surplus IDF Store. CAA Tactical MC5N Polymer Made Magazine Coupler for MP5 &amp; Uzi 9mm Magazines</span></font></p>', '9mm magazine coupler', '2020.09.24.09.46.23-7ql2S-0000449_tvg1-long-thunder-vertical-grip-picatinny-1000x630.jpg', '0.00', '0.00', '9mm', '0', '9mm-magazine-coupler-for-mp5-uzi', 'CAA', '0', '1', NULL, NULL, '2020-09-24 09:46:23', '2020-09-23 20:15:06'),
(32, 8, 'CP1 | AR OEM CHEEK RISER', '<h2 style=\"margin: 15px 0px; font-size: 42px; color: rgb(0, 0, 0); text-transform: uppercase; font-family: sans-serif;\">CP1 CHEEK RISER MEASUREMENTS</h2><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;<span style=\"font-weight: 700;\">Width</span>: 2.12″</p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;<span style=\"font-weight: 700;\">Length</span>: 3.81″</p>', 'ar oem cheek riser', '2020.09.24.09.47.03-r4WsG-0000313_cp1-cheek-riser-m16-oem-stock-1000x630 (1).jpg', '0.00', '0.00', 'CP1', '0', 'cp1-ar-oem-cheek-riser', 'CAA', '5', '1', NULL, NULL, '2020-09-24 09:47:04', '2020-09-24 09:45:20'),
(33, 8, 'CP2 | AR OEM STOCK CHEEK RISER', '<h2 style=\"margin: 15px 0px; font-size: 42px; color: rgb(0, 0, 0); text-transform: uppercase; font-family: sans-serif;\">CP2 CHEEK REST MEASUREMENTS</h2><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;<span style=\"font-weight: 700;\">Width</span>: 2.55″</p><p style=\"margin-right: 0px; margin-bottom: 22px; margin-left: 0px; color: rgb(138, 138, 138); font-family: sans-serif; font-size: 16px;\">?&nbsp;<span style=\"font-weight: 700;\">Length</span>: 5.15″</p>', 'ar oem stock cheek riser', '2020.09.24.09.49.43-fngOR-0000314_cp2-cheek-rest-oem-ar-stock-1000x630.jpg', '0.00', '0.00', 'CP2', '0', 'cp2-ar-oem-stock-cheek-riser', 'CAA', '10', '1', NULL, NULL, '2020-09-24 09:49:43', '2020-09-24 09:49:27'),
(34, 8, 'PCK CAA Tactical 12 Short Plastic Thermal Covers For Picatinny', '<p><span style=\"color: rgb(33, 33, 33); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(237, 237, 237); font-size: small;\"><span style=\"font-weight: 700;\">Weight (gr)</span>&nbsp;104</span><br style=\"color: rgb(33, 33, 33); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; background-color: rgb(237, 237, 237);\"><span style=\"color: rgb(33, 33, 33); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(237, 237, 237); font-size: small;\"><span style=\"font-weight: 700;\">Height (cm)</span>&nbsp;3.6</span><br style=\"color: rgb(33, 33, 33); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px; background-color: rgb(237, 237, 237);\"><span style=\"color: rgb(33, 33, 33); font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(237, 237, 237); font-size: small;\"><span style=\"font-weight: 700;\">Length (cm)</span>&nbsp;4.6/14.6</span></p>', 'short plastic thermal covers', '2020.09.24.09.55.16-3Te5V-pck_item-600x286.jpg', '0.00', '0.00', 'pck caa', '104', 'pck-caa-tactical-12-short-plastic-thermal-covers-for-picatinny', 'caa', '4', '1', 'a:1:{i:0;s:8:\"Od Green\";}', 'N;', '2020-09-24 09:55:16', '2020-09-24 09:55:16'),
(35, 8, 'Ergonomic Pointing Grip', '<p><font face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\" color=\"#000000\"><span style=\"font-size: 15px; background-color: rgb(255, 255, 255);\">The \'PTK\'- Ergonomic Pointing Grip conceptualizes within its design a unique combat proven instinctive shooting method incorporating natural pointing positioning for enhanced accuracy, speed and overall performance.</span></font></p>', 'Ergonomic Pointing Grip', '2020.09.24.09.59.53-6HOs9-PTK-2D.jpg', '0.00', '0.00', 'PTK', '0', 'ergonomic-pointing-grip', 'CAA', '2', '1', 's:5:\"blakc\";', 'N;', '2020-09-24 09:59:53', '2020-09-24 09:59:53'),
(36, 8, 'FAB DEFENSE AG-44S Quick Release Ergonomic Foregrip', '<font face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\" color=\"#000000\"><span style=\"font-size: 15px;\">The AG-44S is a lightweight ergonomic foregrip, made for superior tactical positioning and minimal front weight on your weapon.</span></font>', 'Quick Release Ergonomic Foregrip', '2020.09.25.11.29.54-Ax3T1-AG-44-S-2D.jpg', '0.00', '0.00', 'FAB', '113', 'fab-defense-ag-44s-quick-release-ergonomic-foregrip', 'FAB', '1', '1', 'a:1:{i:0;s:5:\"black\";}', 'N;', '2020-09-25 11:29:54', '2020-09-25 11:29:54'),
(37, 8, 'FAB DEFENSE PLR Adjustable Tactical Light Mount', '<p><font face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\" color=\"#000000\"><span style=\"font-size: 15px; background-color: rgb(255, 255, 255);\">The new ‘PLR’ Tactical Light Mount adjusts to the right,left and underside of barrel.The PLR was designed to add tactical light versatility complimenting your individual tactical preference.</span></font></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Weight&nbsp; &nbsp; 72 gr</span></font></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Width&nbsp; &nbsp; 39 mm</span></font></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Height&nbsp; &nbsp; 71 mm</span></font></p><p></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Length&nbsp; &nbsp; 56 mm</span></font></p>', 'PLR light mount', '2020.10.06.00.02.34-QplSG-download.png', '0.00', '0.00', 'FAB', '72', 'fab-defense-plr-adjustable-tactical-light-mount', 'FAB', '4', '0', 's:5:\"Black\";', NULL, '2020-10-06 00:02:56', '2020-09-25 11:32:39'),
(38, 8, 'FAB DEFENSE Rubberized Ergonomic Foregrip', '<p style=\"margin-bottom: 2.5rem; font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#000000\" style=\"\">The New REG State–of-the-Art Rubberized Ergonomically Designed Tactical Foregrip</font></span></p><p style=\"margin-bottom: 2.5rem; font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px;\"><span style=\"background-color: rgb(255, 255, 255);\"><font color=\"#000000\" style=\"\"><br></font></span></p><p style=\"margin-bottom: 2.5rem;\"><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Weight&nbsp; &nbsp; 128 gr</span></font></p><p style=\"margin-bottom: 2.5rem;\"><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Width&nbsp; &nbsp; 47 mm</span></font></p><p style=\"margin-bottom: 2.5rem;\"><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Height&nbsp; &nbsp; 119 mm</span></font></p><p style=\"margin-bottom: 2.5rem;\"><span style=\"font-size: 15px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif;\">Length&nbsp; &nbsp; 54 mm</span></p>', 'rubberized ergonomic foregrip', '2020.09.25.11.47.36-Gfblb-REG-2D.jpg', '0.00', '0.00', 'FAB', '128', 'fab-defense-rubberized-ergonomic-foregrip', 'FAB', '4', '1', 'a:2:{i:0;s:5:\"black\";i:1;s:8:\"Od Green\";}', 'N;', '2020-09-25 11:47:36', '2020-09-25 11:47:36'),
(39, 8, 'FAB DEFENSE MWG Mag-Well Grip and Funnel for M16 Variants', '<p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><font color=\"#000000\">The MWG transforms the magazine well into a comfortable, close ergonomic foregrip for enhanced maneuverability and lower signature of operator in CQB, combined with a magazine funnel for easier, faster, more reliable magazine change.</font></span></p><p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><font color=\"#000000\"><br></font></span></p><p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><font color=\"#000000\"><br></font></span></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Weight&nbsp; &nbsp; 82 gr</span></font></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Width&nbsp; &nbsp; 45 mm</span></font></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Height&nbsp; &nbsp; 71 mm</span></font></p><p></p><p><font color=\"#000000\" face=\"Open Sans, sans-serif, Helvetica, Arial, sans-serif\"><span style=\"font-size: 15px;\">Length&nbsp; &nbsp; 91 mm</span></font></p>', 'The MWG transforms the magazine well into a comfortable', '2020.09.25.11.51.43-CaoMX-MWG-2D-BACK.jpg', '0.00', '0.00', 'FAB', '82', 'fab-defense-mwg-mag-well-grip-and-funnel-for-m16-variants', 'FAB', '2', '1', NULL, NULL, '2020-09-25 11:51:43', '2020-09-25 11:51:14'),
(40, 8, 'FAB DEFENSE NFR Carbine Length M16 Aluminum Quad Rail', '<p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><font color=\"#000000\">The New NFR Aluminum Quad Rail System provides you with a carbine length M4 handguard upgrade enhancing your weapon\'s overall tactical performance, ventilation and versatility.</font></span></p>', 'Carbine Length M16 Aluminum Quad Rail', '2020.09.25.14.55.29-vnuTG-NFR-2014-3D.jpg', '0.00', '0.00', 'FAB', '0', 'fab-defense-nfr-carbine-length-m16-aluminum-quad-rail', 'FAB', '2', '1', 's:5:\"Black\";', 'N;', '2020-09-25 14:55:30', '2020-09-25 14:55:30'),
(41, 8, 'FAB DEFENSE NFR EX Carbine Length M16 Extended Aluminum Quad Rail System', '<p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px; background-color: rgb(255, 255, 255);\"><font color=\"#000000\">The NFR EX Aluminum Quad Rail System provides an extended M4 handguard upgrade enhancing overall tactical performance, ventilation and versatility.</font></span></p>', 'Carbine Length M16 Extended Aluminum Quad Rail System', '2020.09.25.14.57.13-a8UNL-NFR-EX-2D.jpg', '0.00', '0.00', 'FAB', '0', 'fab-defense-nfr-ex-carbine-length-m16-extended-aluminum-quad-rail-system', 'FAB', '2', '1', 's:5:\"Black\";', NULL, '2020-10-01 21:07:49', '2020-09-25 14:57:13'),
(42, 8, 'FAB DEFENSE UPR 16/4 Universal Picatinny Rail M16/M4/AR15', '<p style=\"margin-bottom: 2.5rem; font-family: &quot;Open Sans&quot;, sans-serif, Helvetica, Arial, sans-serif; font-size: 15px;\">Our UPR 16/4 Universal Picatinny Rail provides enhanced position versatility for your Tactical Lights and lasers and any other Picatinny compatible accessory.</p><div><div style=\"\"><b>Weight&nbsp; &nbsp; 46 gr</b></div><div style=\"\"><b>Width&nbsp; &nbsp; 21 mm</b></div><div style=\"\"><b>Height&nbsp; &nbsp; 16 mm</b></div><div style=\"\"><b>Length&nbsp; &nbsp; 155 mm</b></div></div>', 'Universal Picatinny Rail M16/M4/AR15', '2020.09.25.14.59.43-9CqpJ-17-upr-16-4-3d-upside.jpg', '0.00', '0.00', 'FAB', '46', 'fab-defense-upr-16-4-universal-picatinny-rail-m16-m4-ar15', 'FAB', '10', '1', 'a:1:{i:0;s:5:\"black\";}', NULL, '2020-09-25 15:00:55', '2020-09-25 14:59:43'),
(43, 8, 'FAB DEFENSE TACTICAL QUICK RELEASE FOREGRIP-BIPOD T-POD QR', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(81, 81, 81); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 0.875rem;\">FAB Defense Tactical Quick Release Foregrip-Bipod</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(81, 81, 81); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 0.875rem;\"><br></span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(81, 81, 81); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"font-size: 0.875rem;\"><br></span>Material: Polymer, aviation-grade aluminum, steel</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(81, 81, 81); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Weight: 335 g</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(81, 81, 81); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Dimensions: 70L x 50-200W x 157-218H mm</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(81, 81, 81); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">Manufacturer: FAB Defense</p>', 'FAB Defense Tactical Quick Release Foregrip', '2020.09.26.12.24.51-xC72X-2040.jpg', '134.35', '140.35', 'FAB', '0', 'fab-defense-tactical-quick-release-foregrip-bipod-t-pod-qr', 'FAB', '2', '1', 'a:2:{i:0;s:5:\"black\";i:1;s:8:\"Od Green\";}', 'N;', '2020-09-26 12:24:51', '2020-09-26 12:24:51'),
(44, 9, 'Nitecore MH25GT 1000 Lumen USB Rechargeable LED Flashlight - Long Range Throwing with Lumen Tactical Adapters (Upgrade for MH25)', '<p><b>Max Output</b> 1000 lumens</p><p><b>Max Beam Distance</b> 452 m</p><p><b>Max Beam Intensity</b> 51100 cd</p><p><b>Max Runtime</b> 36 h 0 m / 1.5 d</p><p><b>LED</b> CREE XP-L HI V3</p><p><b>Reflector</b> SMO</p><p><b>Battery</b> 1 × 18650 ,2 × CR123 ,2 x RCR123</p><p><font color=\"#000000\"><b>Special Modes </b></font>SOS,Strobe</p>', 'Nitecore MH25gt -  Flashlight', '2020.10.24.14.43.00-0wGYC-s-l1600 (4).jpg', '0.00', '0.00', 'Nitecore', '143', 'nitecore-mh25gt-1000-lumen-usb-rechargeable-led-flashlight-long-range-throwing-with-lumen-tactical-adapters', 'Nitecore', '2', '1', 's:9:\"balck,red\";', NULL, '2020-10-24 14:43:00', '2020-09-26 15:38:49'),
(45, 9, 'Nitecore MH10 v2 1200 Lumen USB-C Rechargeable LED Flashlight with 4000mAh Battery, Hard Holster with EdisonBright battery carrying case', '<p><b>Max Output</b> 1200 Lumens</p><p><b>Max Beam Distance</b> 202 m</p><p><b>Max Beam Intensity</b> 10200 cd</p><p><b>Max Runtime</b> 1500 h 0 m / 62.5 d</p><p><b>Reflector</b> SMO</p><p><b>Battery</b> 1 × 18650 ,2 × CR123 ,2 x RCR123,1 x 21700</p><p><b>Special Modes</b> Location Beacon,SOS,Strobe</p>', 'Nitecore MH10 V2 Powerful Flashlight!', '2020.10.24.14.43.35-VosMJ-s-l1600 (5).jpg', '0.00', '0.00', 'Nitecore', '77.5', 'nitecore-mh10-v2-1200-lumen-usb-c-rechargeable-led-flashlight-with-4000mah-battery-hard-holster-with-edisonbright-battery-carrying-case', 'Nitecore', '2', '1', 's:5:\"balck\";', NULL, '2020-10-24 14:43:35', '2020-09-26 15:43:26'),
(46, 9, 'Nitecore MH12 v2 1200 Lumen USB-C Rechargeable LED Flashlight with 5000mAh Battery, Hard Holster with EdisonBright battery carrying case', '<p><b>Max Output</b> 1200 Lumens</p><p><b>Max Beam Distance</b> 202 m</p><p><b>Max Beam Intensity</b> 10200 cd</p><p><b>Max Runtime</b> 1500 h 0 m / 62.5 d</p><p><b>LED </b>CREE XP-L2 V6 LED</p><p><b>Reflector </b>SMO</p><p><b>Battery </b>1 × 18650 ,2 × CR123 ,2 x RCR123,1 x 21700</p><p><b>Special Modes </b>Location Beacon,SOS,Strobe</p>', 'Nitecore MH12 V2 Flashlight', '2020.10.24.14.41.06-iDtQL-s-l1600 (3).jpg', '0.00', '0.00', 'Nitecore', '84.5', 'nitecore-mh12-v2-1200-lumen-usb-c-rechargeable-led-flashlight-with-5000mah-battery-hard-holster-with-edisonbright-battery-carrying-case', 'Nitecore', '2', '1', 's:5:\"Black\";', NULL, '2020-10-24 14:41:06', '2020-09-26 15:47:17'),
(47, 9, 'NITECORE NU05 MI Green and IR USB Rechargeable Safety Light', '<p><b>Max Output</b>&nbsp;<span style=\"font-size: 0.875rem;\">IR light (wavelength 940nm)</span></p><p><b>Green light</b>&nbsp;5 Lumens</p><p><b>Max Runtime&nbsp;</b><span style=\"font-size: 0.875rem;\">20h</span></p><p><b>LED&nbsp;</b><span style=\"font-size: 0.875rem;\">4 x high performance LEDs</span></p><p><b>Battery&nbsp;</b><span style=\"font-size: 0.875rem;\">Built-in Li-ion battery</span></p>', 'NU05 MI clip Flashlight By Nitecore', '2020.10.24.14.35.38-uvdZL-s-l1600.jpg', '0.00', '0.00', 'Nitecore', '22', 'nitecore-nu05-mi-green-and-ir-usb-rechargeable-safety-light', 'Nitecore', '2', '1', 's:5:\"Black\";', NULL, '2020-10-24 14:35:38', '2020-09-26 16:07:44'),
(48, 9, 'NITECORE HC65 1000 Lumen USB Rechargeable Headlamp, with Red light and High CRI Light', '<div>Light Sources: CREE XM-L2 U2 LED (Primary), High CRI White LED (Auxiliary Light), Red LED (Auxiliary Light)</div><div><br></div><div><b>Battery Type Supported</b>&nbsp;1x 18650, 2x CR123A, or 2x RCR123</div><div><u><b>Peak Beam Distance</b></u> 120yds (110m)</div><div><b>Peak Beam Intensity</b> 3000cd</div><div><br></div><div><b>Brightness Outputs</b></div><div><b>Turbo</b>&nbsp;1000 lumen / 1h</div><div><b>High</b>&nbsp;550 lumen / 2h 45min</div><div><b>Med</b>&nbsp;280 lumen / 4h 45min</div><div><b>Low</b>&nbsp;80 lumen / 16h</div><div><b>Ultralow</b>&nbsp;1 lumen / 800h</div>', 'Nitecore HC65 1000 Lumen USB flashlight', '2020.10.24.14.37.14-JYCo8-s-l1600 (1).jpg', '0.00', '0.00', 'Nitecore', '62.7', 'nitecore-hc65-1000-lumen-usb-rechargeable-headlamp-with-red-light-and-high-cri-light', 'Nitecore', '2', '1', 's:5:\"Black\";', NULL, '2020-10-24 14:37:14', '2020-09-26 18:53:10'),
(49, 9, 'NITECORE P22R 1800 Lumen Rechargeable Tactical Flashlight', '<p><b>LED&nbsp; &nbsp; </b>CREE XHP35 HD</p><p><b>Maximum Brightness</b>&nbsp; &nbsp; 1800 lumens</p><p><b>Peak Beam Distance&nbsp;</b> &nbsp; 286 yards</p><p><b>Peak Beam Intensity</b>&nbsp; &nbsp; 17200 cd</p><p><b>IP Rating</b>&nbsp; &nbsp; IP68 - 2m submersible</p><p><b>Impact Resistance</b>&nbsp; &nbsp; 1 m</p><p><b>Dimensions</b>&nbsp; &nbsp; L-6.02\"xW-1.25\"xH-1.02\"</p><p><b>Weight&nbsp; &nbsp; </b>4.8oz</p>', 'NITECORE P22R At-A-Glance Flashlight', '2020.10.24.14.39.57-hTaZG-s-l1600 (2).jpg', '0.00', '0.00', 'Nitecore', '4.8', 'nitecore-p22r-1800-lumen-rechargeable-tactical-flashlight', 'Nitecore', '2', '1', 's:5:\"Black\";', NULL, '2020-10-24 14:39:57', '2020-09-26 18:58:55'),
(50, 9, 'NITECORE P05 460 Lumen  Tactical Flashlight', '<p><b>Max Output</b> 460 lumens</p><p><b>Max Beam Distance</b> 150 m</p><p><b>Max Beam Intensity</b> 5650 cd</p><p><b>Max Runtime</b> 4 h 15 m / 0.17 d</p><p><b>LED </b>CREE XM-L2 U2</p><p><b>Reflector </b>SMO</p><p><b>Battery </b>1 × CR123 ,1 × RCR123</p><p><b>Special Modes</b> Strobe</p>', 'P05 460 Lumen Tactical FlashLight By Nitecore', '2020.10.24.14.37.47-jft9N-s-l640.jpg', '0.00', '0.00', 'Nitecore', '60.5', 'nitecore-p05-460-lumen-tactical-flashlight', 'Nitecore', '2', '1', 's:5:\"Black\";', NULL, '2020-10-24 14:37:47', '2020-09-26 19:35:12'),
(51, 9, 'Olight M1X Striker CREE XM-L2 1000LM 5modes Portable LED Flashlight', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\"><span style=\"font-weight: 700;\">Mode 1</span>: 1000 Lumens (5+55 min)</font></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\"><span style=\"font-weight: 700;\">Mode 2</span>: 350 Lumens (2 hours)</font></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\"><span style=\"font-weight: 700;\">Mode 3</span>: 60 Lumens (12 hours)</font></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\"><span style=\"font-weight: 700;\">Mode 4</span>: 10 Lumens (60 hours)</font></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\"><span style=\"font-weight: 700;\">Mode 5</span>: 0.5 Lumens (360 hours)</font></li></ul></li></ul><p style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none;\"></ul></p><p style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\"><br></font></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 16px;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\">Dimensions:</font><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\">Length: 136mm</font></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\">Head Diameter: 26mm</font></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: none;\"><font color=\"#000000\">Weight: 80 g</font></li></ul></li></ul>', 'Olight M1X Striker Hand Flahlight', '2020.09.26.21.13.33-MWk0m-olight_m1x.jpg', '0.00', '0.00', 'Olight', '80', 'olight-m1x-striker-cree-xm-l2-1000lm-5modes-portable-led-flashlight', 'Olight', '1', '1', 's:5:\"black\";', NULL, '2020-10-02 18:22:49', '2020-09-26 21:13:33'),
(52, 9, 'Olight PL-2 Valkyrie 1200 lumen pistol light', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none; color: rgb(34, 34, 34); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">LED:</span>&nbsp;Cree XHP35 HI CW</li></ul><p style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none; color: rgb(34, 34, 34); font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">Power Source:</span>&nbsp;2 x CR123A ( Not compatible with RCR123 / 16340 cells )</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">Peak Beam Distance:</span>&nbsp;235 meters</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">Peak Beam Intensity:</span>&nbsp;13,800cd</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">Brightness Outputs (Using 2 x CR123A):</span><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\"><em>High</em></span>&nbsp;1200~600 Lumens - 1.5 Minutes +70 Minutes ( Gradually steps down from 1200 lumens to 600 after 1.5</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"> </li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\">minutes, then continues at 600 lumens for an additional 70 minutes )</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\"><em>Strobe</em></span>&nbsp;1200 Lumens - 70 Minutes</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\"><em>Momentary On</em></span>&nbsp;1200 Lumens</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></li></ul></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">IPX Rating:</span>&nbsp;IPX-6</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">Impact Resistance:</span>&nbsp;1 meter</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><br></li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\"><span style=\"font-weight: 700;\">Dimensions:</span><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px; padding-inline-start: 0px; list-style: none;\"><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\">Length - 82.5mm</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\">Width - 36.5mm</li><li style=\"padding: 0px; margin: 0px; padding-inline-start: 0px; list-style: initial;\">Height - 32.5mm</li></ul></li></ul>', 'Olight PL-2 Valkyrie 1200 lumen pistol light', '2020.10.01.20.47.40-iz560-olight_pl-2_led_weapon_light_001_1.jpg', '0.00', '0.00', 'Olight', '2.82', 'olight-pl-2-valkyrie-1200-lumen-pistol-light', 'Olight', '2', '1', 's:5:\"Black\";', 'N;', '2020-10-01 20:47:41', '2020-10-01 20:47:41'),
(53, 9, 'Olight PL-Mini II Valkyrie 400 lumen rechargeable pistol light', 'OLIGHT PL-Mini Valkyrie 400 Lumen LED Rechargeable Compact Pistol Light, Build-in Lithium Battery', 'Olight PL-Mini Valkyrie 400 FlashLight', '2020.10.24.17.08.14-yds40-81Vw8HsFafL._AC_SL1500_ (1).jpg', '10.00', '9.00', 'Olight', '0', 'olight-pl-mini-ii-valkyrie-400-lumen-rechargeable-pistol-light', 'Olight', '2', '1', 's:5:\"Black\";', 's:2:\"ss\";', '2020-10-24 17:08:14', '2020-10-01 20:52:20'),
(54, 9, 'Olight HS2 Rechargeable LED Headlamp - 2 x CREE XP-G2 LED - 400 Lumens - Includes Lithium Polymer Battery Pack', '<div><b>LED</b>: 2 x CREE XP-G2 LED (Cool White)</div><div><b>Power Source</b>: 1 x 2000mAh 3.7V Lithium Polymer (Li-Poly) Battery Pack (Included)</div><div><b>Peak Beam Distance</b>: 85 meters (278.9 ft.)</div><div><b>Peak Beam Intensity</b>: 1800 cd</div><div><br></div><div><b>Brightness Outputs</b>:</div><div>Turbo - 400 Lumens - 2 Hours 12 Min.</div><div>High - 200 Lumens - 4 Hours 30 Min.</div><div>Medium - 100 Lumens - 9 Hours</div><div>Low - 50 Lumens - 18 Hours</div><div>IPX Rating: IPX-8 (Protected against splashing water from all directions)</div><div>Impact Resistance: 1 meter</div><div><br></div><div><b>Dimensions </b>(<b>Headlamp</b>):</div><div><b>Length </b>- 45 mm</div><div><b>Width </b>- 23 mm</div><div><b>Height </b>- 24 mm</div>', 'Olight HS2 400 lumen USB Flashlight', '2020.10.24.17.11.33-g3ApM-theshorelinemarket_2615_1928937508.jpg', '0.00', '0.00', 'Olight', '115', 'olight-hs2-rechargeable-led-headlamp-2-x-cree-xp-g2-led-400-lumens-includes-lithium-polymer-battery-pack', 'Olight', '2', '1', 's:5:\"Black\";', NULL, '2020-10-24 17:11:33', '2020-10-03 16:42:38'),
(55, 10, 'Powertac Marksman LED Pistol Light with Green Laser - Picatinny Rail - CREE XM-L2 LED - 600 Lumens - Uses 1 x CR123A or 1 x 16340', '<ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 0px 20px; font-size: 15px; color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, sans-serif;\"><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">LED: CREE XM-L2</strong></li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Power Source: 1 x CR123 A or 1 x RCR123A</strong></li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Peak Beam Distance:</strong>&nbsp;149 meters (488 ft.)</li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Brightness Outputs (Using 1 x RCR123A):</strong><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 20px;\"><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\"><em style=\"margin: 0px; padding: 0px;\">High</em></strong>&nbsp;600 Lumens - 56 Minutes</li></ul></li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Brightness Outputs (Using 1 x CR123A):</strong><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 20px;\"><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\"><em style=\"margin: 0px; padding: 0px;\">High</em></strong>&nbsp;380 Lumens - 61 Minutes</li></ul></li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">IPX Rating: IPX-4</strong></li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\"><br></strong></li><li style=\"margin: 0px; padding: 0px;\"><strong style=\"margin: 0px; padding: 0px;\">Dimensions:</strong><ul style=\"margin-right: 0px; margin-left: 0px; padding: 0px 0px 0px 20px;\"><li style=\"margin: 0px; padding: 0px;\">Length - 2.99\" (76mm)</li><li style=\"margin: 0px; padding: 0px;\">Head Diameter - 0.8\" (21mm)</li><li style=\"margin: 0px; padding: 0px;\">Width - 1.29\" (33mm)</li><li style=\"margin: 0px; padding: 0px;\">Height - 1.88\" (48mm)</li></ul></li></ul>', 'Powertac Marksman 600 Lumen LED Weapon light', '2020.10.03.16.47.58-OlLdr-theshorelinemarket_2618_1047456860.jpg', '0.00', '0.00', 'Powertac', '118', 'powertac-marksman-led-pistol-light-with-green-laser-picatinny-rail-cree-xm-l2-led-600-lumens-uses-1-x-cr123a-or-1-x-16340', 'Powertac', '2', '1', 's:5:\"Black\";', 'N;', '2020-10-03 16:47:59', '2020-10-03 16:47:59'),
(56, 11, 'OPSMEN  F101 Stealth Survival Flash Light 35M Waterproof & Seismic IR Light Frequency for Helmets & Molle', '<p><b>Weight </b>(<b>without battery</b>): 60g</p><p><b>Size </b>: 85 x 55 x 34 mm</p><p><b>Waterproof</b>: IPX8</p><p><b>Working temperature</b>: - 20 °C ~ 60 °C</p><p><b>Battery</b>: 1 x CR123A</p>', 'Opsmen F101Survival Light', '2020.10.03.16.53.13-MuxzE-6f85b988d6cd20855fa1bf61d7adaeff (1).jpg', '0.00', '0.00', 'Opsmen', '60', 'opsmen-f101-stealth-survival-flash-light-35m-waterproof-seismic-ir-light-frequency-for-helmets-molle', 'Opsmen', '5', '1', 's:9:\"Black,Tan\";', '', '2020-10-04 13:49:06', '2020-10-03 16:53:13'),
(57, 9, 'Opsmen  FAST 302  400 Lumens Tactical for  Weapon Flashlight', '<p>Premium CREE XM-L2 (U3) LED, maximum output of 400 lumens</p><p><b style=\"font-size: 0.875rem;\">Length</b><span style=\"font-size: 0.875rem;\">: 97.6mm (5.28”)</span></p><p><b>Head Diameter</b>: 25.4mm (1”)</p><p><b>Tail Diameter</b>: 24.6mm (0.97”)</p><p><b>Weight</b>: 58grams (2.05oz)(without battery)</p><p><br></p><p><b>Accessories</b></p><p>Included: clip, lanyard, spare O-ring</p>', 'FAST 302 Flashlight By Opsmen', '2020.10.03.17.03.54-WwOsn-c54167d1ad11ea7a6ca3ee30abe15f53.jpg', '0.00', '0.00', 'Opsmen', '58', 'opsmen-fast-302--400-lumens-tactical-for--weapon-flashlight', 'Opsmen', '2', '1', 's:5:\"Black\";', 'N;', '2020-10-03 17:03:55', '2020-10-03 17:03:55'),
(58, 10, 'OPSMEN FAST 302R WEAPONLIGHT 400-LUMEN FLASHLIGHT FOR PICATINNY RAIL - BLACK', '<p>&nbsp;Premium CREE XM-L2 (U3) LED, maximum output of 400 lumens</p><p><b>Length</b>: 97.6mm (5.28”)</p><p><b>Head Diameter</b>: 25.4mm (1”)</p><p><b>Tail Diameter</b>: 24.6mm (0.97”)</p><p><b>Weight</b>: 115grams (4.06oz)(without battery)</p><p><br></p><p><b>Accessories</b></p><p><b>Included</b>: Hex key, velcro, spare O-ring</p>', 'FAST 302R Weapon Light By Opsmen', '2020.10.03.17.06.52-TZzlj-74d6aa19050e68ee73a5f9f3f72ca39c.jpg', '0.00', '0.00', 'Opsmen', '115', 'opsmen-fast-302r-weaponlight-400-lumen-flashlight-for-picatinny-rail-black', 'Opsmen', '2', '1', 's:5:\"Black\";', 'N;', '2020-10-03 17:06:52', '2020-10-03 17:06:52'),
(59, 9, 'Opsmen  FAST 502  800 Lumens Tactical for  Weapon Flashlight', '<p>A premium CREE XM-L2 (U3) LED offers maximum output of 800 lumens</p><p><b>Length</b>: 137.2mm (5.4”)</p><p><b>Head Diameter</b>: 32mm (1.26”)</p><p><b>Tail Diameter</b>: 25.4mm (1”)</p><p><b>Weight</b>: 111grams (3.9oz)(without battery)</p><p><br></p><p><b>Accessories</b></p><p>-&nbsp; Clip, Tactical Ring, CR123 battery holster,Lanyard, Spare O-ring</p>', 'FAST 502 Flashlight By Opsmen', '2020.10.03.17.11.22-wwmcR-6068b7287d908ea4ae5fa84da24c8d83.jpg', '0.00', '0.00', 'Opsmen', '111', 'opsmen-fast-502--800-lumens-tactical-for-weapon-flashlight', 'Opsmen', '2', '1', 's:5:\"Black\";', 'N;', '2020-10-03 17:11:22', '2020-10-03 17:11:22'),
(60, 9, 'OPSMEN FAST 502R WEAPONLIGHT 800-LUMEN FLASHLIGHT FOR PICATINNY RAIL - BLACK', '<div><font color=\"#000000\">A premium CREE XM-L2 (U3) LED offers maximum output of 800 lumens</font></div><div><font color=\"#000000\"><b><br></b></font></div><div><font color=\"#000000\"><b>Length</b>: 137.2mm (5.4”)</font></div><div><font color=\"#000000\"><b>Head Diameter</b>: 32mm (1.26”)</font></div><div><font color=\"#000000\"><b>Tail Diameter</b>: 25.4mm (1”)</font></div><div><font color=\"#000000\"><b>Weight</b>: 166grams (5.85oz)(without battery)</font></div><div><font color=\"#000000\"><br></font></div><div><font color=\"#000000\"><br></font></div><div><font color=\"#000000\"><b>Accessories</b></font></div><div><font color=\"#000000\"><b>Included</b>: Hex key, velcro, CR123 battery holster, spare O-ring</font></div>', 'FAST 502R WeaponLight Opsmen', '2020.10.03.17.13.47-dgTQY-e9f240afdd72660148db62fefede4bc5.jpg', '0.00', '0.00', 'Opsmen', '166', 'opsmen-fast-502r-weaponlight-800-lumen-flashlight-for-picatinny-rail-black', 'Opsmen', '2', '1', 's:5:\"Black\";', NULL, '2020-10-03 17:24:40', '2020-10-03 17:13:33'),
(61, 10, 'OPSMEN Fast 401 Ultra High Output Pistol Light 800 Lumen', '<p><u>FAST 401 Ultra-High-Output LED Weaponlight</u></p><p>A premium CREE XM-L2 (U3) LED offers maximum output of 800 lumens</p><p><br></p><p><b>Length</b>: 3.60 inches</p><p><b>Bezel diameter</b>: 1.16 inches</p><p><b>Weight</b>: 3.0 ounces(w/o battery)</p>', 'FAST 401 Ultra-High-Output LED Weaponlight', '2020.10.27.16.58.21-gtu5z-rsz_5f985184c5a2d.png', '0.00', '0.00', 'Opsmen', '3', 'opsmen-fast-401-ultra-high-output-pistol-light-800-lumen', 'Opsmen', '2', '0', 's:5:\"Black\";', NULL, '2020-10-27 16:58:41', '2020-10-03 17:16:40'),
(63, 11, 'OPSMEN F102 \"Firefly\" Marker Light RED', '<p><u>F102 is a multi-function marker light which can fit in helmet, clothes and bag ,etc. Mainly used in various activities such as military training /action, outdoor sports</u></p><p><b>Weight</b>: 23g</p><p><b>Size</b>: 45 x 50 x 18mm</p><p><b>Waterproof</b>: IPX8/Up to 10metres</p><p><b>Working temperature</b>: - 20 °C ~ 60 °C</p><p><b>Battery</b>: 1 x CR2450 (Not replaceable)</p>', 'F102 \"Firefly\" Marker Light By Opsmen', '2020.10.03.20.15.00-qdDCf-186e9656e0b339886c129edbe4d77de1.jpg', '0.00', '0.00', 'Opsmen', '23', 'opsmen-f102-firefly-marker-light-red', 'Opsmen', '4', '1', NULL, NULL, '2020-10-04 13:30:49', '2020-10-03 17:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(50) NOT NULL DEFAULT 'en',
  `last_visit` varchar(255) DEFAULT 'en',
  `ip` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `ipInfo` longtext DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `blacklisted` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `language`, `last_visit`, `ip`, `phone`, `ipInfo`, `updated_at`, `created_at`, `blacklisted`) VALUES
(10, 'nulll', 'nulll@gmail.com', '$2y$10$qw3H1NKHAbdiKXZMG3mPZu9L0npjr2YS4loUBpWh6dMDV045.iIti', 'en', '2020-08-13 18:27:47', '', '7', NULL, '2020-07-14 18:14:29', '2020-07-14 18:14:29', ''),
(11, 'olive', 'olive@gmail.com', '$2y$10$8FrbVu6qy0W1f3D6GI2IT..eh4MlgT8n32IF37x7glSdy5T8JCNe.', 'en', '2020-08-13 18:27:47', '', '6', NULL, '2020-07-15 14:00:33', '2020-07-15 14:00:33', ''),
(12, 'shimi', 'shimi@gmail.com', '$2y$10$9mpqthnRTNA/bdiGWEFIfe4vSok.moh0O0z7Cly/9LO6rWkyGKEu.', 'en', '2020-08-13 18:27:47', '', '5', NULL, '2020-07-15 14:07:58', '2020-07-15 14:07:58', ''),
(13, 'Dvir', 'admin@gmail.com', '$2y$10$/AW7Jw2RRM.lxxgf8R.73.49V4Equ4lR/gMYdv.9WBpv7iAMArCMO', 'en', 'Thursday 10th of December 2020 07:47:55 PM', '127.0.0.1', '1233', '0', '2020-12-10 19:47:56', '2020-07-15 19:58:08', '1'),
(16, 'Ori apple', 'plbwymw1@gmail.com', '$2y$10$hD.R76GD4C7yfSOLo3MNJOXFjyWhxTM4WgNkiOrFNXxvrmZZRcKna', 'en', '2020-08-13 18:27:47', '', '4', NULL, '2020-07-28 19:38:31', '2020-07-28 19:38:31', ''),
(17, 'ori', 'test@gmail.com', '$2y$10$l.H7sOUxSjSWOAiIGzY4zep/c1qxcJIeCHJZjC3Hq7qK66BWI2rJS', 'en', '2020-08-13 18:27:47', '', '3', NULL, '2020-07-29 22:10:39', '2020-07-29 22:10:39', ''),
(18, 'Test Bot', 'botti@gmail.com', '$2y$10$HHT4jA.K6wCGUV9YYLu7VeQM3O3QeZAbMzZVaNG83.MQwhy2kfa3W', 'he', '2020-08-13 18:27:47', '', '2', NULL, '2020-07-30 09:46:20', '2020-07-29 22:19:44', ''),
(19, 'Test Boti', 'cooll5003@gmail.com', '$2y$10$zCd/Tqxg9zu7gbH44jiuy.j20VwNwBcuTffw0AV/JQKHfo1ikH0WK', 'he', 'Friday 14th of August 2020 10:09:22 AM', '127.0.0.1', '2', NULL, '2020-08-14 10:09:22', '2020-08-13 23:10:34', ''),
(20, 'TEST YOU', 'hehe@gmail.com', '$2y$10$H0/fpJksK23ZPGMS6aeBxOVbKlnCJWtxwwzXaAwJ9d5wOYcQUg4zG', 'he', 'Friday 14th of August 2020 05:23:18 PM', '127.0.0.1', '1', NULL, '2020-08-14 17:23:18', '2020-08-14 17:19:41', ''),
(24, 'It\'s me', 'plbwymw@gmail.com', '$2y$10$X9LS28c4eVuJb/7ALeWFP.uNrzOIwumpEfDPsvYkXB5Y7.STcdSD2', 'he', 'Sunday 16th of August 2020 02:40:29 PM', '127.0.0.1', 'a', NULL, '2020-08-16 14:40:29', '2020-08-15 23:04:07', '0'),
(25, 'ADMIN PASS', 'admin2@gmail.com', '$2y$10$lC8iOfDhHYVqxDVm/EA3K.ZOwflwoHJBfQ/1J8XmWkUjhFVf.3Hre', 'en', 'Tuesday 22nd of September 2020 08:10:33 PM', '127.0.0.1', NULL, NULL, '2020-09-22 20:10:33', '2020-09-22 20:10:33', '0'),
(26, 'Ori app test', 'plbwymw2@gmail.com', '$2y$10$hQT4KzUc9n6tqbrxb0aZ4e6MBiw6IL1SnLcJ7.BPcoAByByT4eHm2', 'en', 'Monday 5th of October 2020 11:14:39 AM', '127.0.0.1', NULL, NULL, '2020-10-05 11:14:39', '2020-10-05 10:51:25', '0'),
(27, 'asdasd', 'asdasd@12', '$2y$10$X0U41euDjvHWqH897G5e8O1.QCINDzk0hJQCXI0kAWyph5bUDN8su', 'en', 'Sunday 29th of November 2020 07:56:30 PM', '127.0.0.1', NULL, '0', '2020-11-29 19:56:31', '2020-11-29 19:55:34', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`uid`, `rid`) VALUES
(1, 6),
(2, 6),
(3, 6),
(4, 6),
(5, 6),
(6, 6),
(7, 6),
(8, 6),
(9, 6),
(10, 6),
(11, 6),
(12, 6),
(13, 7),
(14, 6),
(15, 6),
(16, 6),
(17, 6),
(18, 6),
(19, 6),
(20, 6),
(21, 6),
(22, 6),
(23, 6),
(24, 6),
(25, 6),
(26, 6),
(27, 6);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `ip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ipInfo` longtext DEFAULT NULL,
  `blacklist` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`ip`, `date`, `ipInfo`, `blacklist`, `os`) VALUES
('127.0.0.1', 'Thursday 10th of December 2020 07:46:16 PM', '0', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `session` longtext DEFAULT NULL,
  `updated_at` tinytext DEFAULT NULL,
  `created_at` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `session`, `updated_at`, `created_at`) VALUES
(82, 13, 9, 'a:7:{i:0;a:1:{i:0;s:2:\"60\";}i:1;a:1:{i:0;s:2:\"43\";}i:2;a:1:{i:0;s:2:\"28\";}i:3;a:1:{i:0;s:2:\"25\";}i:4;a:1:{i:0;s:2:\"27\";}i:5;a:1:{i:0;s:2:\"59\";}i:6;a:1:{i:0;s:1:\"9\";}}', '2020-12-10 19:47:55', '2020-12-10 19:28:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

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
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purl` (`purl`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_ibfk_1` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contents`
--
ALTER TABLE `contents`
  ADD CONSTRAINT `contents_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
