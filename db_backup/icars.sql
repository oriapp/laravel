-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 06:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icars`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `url`, `updated_at`, `created_at`) VALUES
(1, 'SUV Cars', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'car-1.jpg', 'suv-cars', '2020-07-08 00:00:00', '2020-07-08 00:00:00'),
(2, 'saloon cars', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, ', 'car-2.jpg', 'saloon-cars', '2020-07-08 00:00:00', '2020-07-08 00:00:00'),
(3, 'sports', 'an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.', 'car-3.jpg', 'sports', '2020-07-08 00:00:00', '2020-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` text NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `ctitle`, `carticle`, `updated_at`, `created_at`) VALUES
(1, 1, 'about our company', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-07-17 00:00:39', '2020-07-17 00:00:39'),
(2, 1, 'The Team ', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2020-07-17 00:01:43', '2020-07-17 00:01:43'),
(3, 2, 'iCARS Services Online', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2020-07-17 00:02:26', '2020-07-17 00:02:26');

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
(1, 'About', 'about-us', 'About Us', '2020-07-15 17:30:49', '2020-07-15 17:30:49'),
(2, 'Services', 'services', 'Our Services', '2020-07-15 17:30:49', '2020-07-15 17:30:49'),
(3, 'content', 'content-us', 'content us', '2020-07-15 17:31:24', '2020-07-15 17:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(12,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 10, 'a:3:{i:6;a:6:{s:2:\"id\";s:1:\"6\";s:4:\"name\";s:12:\"Pagani Zonda\";s:5:\"price\";d:240000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:19:\"Rolls Royce Phantom\";s:5:\"price\";d:350000;s:8:\"quantity\";i:3;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:16:\"mercedes maybach\";s:5:\"price\";d:2300000;s:8:\"quantity\";i:2;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '5890000.00', '2020-07-14 23:08:31', '2020-07-14 23:08:31'),
(2, 13, 'a:1:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:2:\"Q8\";s:5:\"price\";d:98000;s:8:\"quantity\";i:1;s:10:\"attributes\";a:0:{}s:10:\"conditions\";a:0:{}}}', '98000.00', '2020-07-17 01:07:14', '2020-07-17 01:07:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` text NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `pimage`, `price`, `purl`, `updated_at`, `created_at`) VALUES
(1, 1, 'Porsche Cayenne', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It hd more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'p-1.jpg', '20000.00', 'porsche-cayenne', '2020-07-08 00:00:00', '2020-07-08 00:00:00'),
(2, 1, 'Q8', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'p-2.jpg', '98000.00', 'q8', '2020-07-08 22:58:37', '2020-07-08 22:58:37'),
(3, 2, 'Rolls Royce Phantom', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'p-3.jpg', '350000.00', 'rolls-royce-phantom', '2020-07-08 23:01:09', '2020-07-08 23:01:09'),
(4, 2, 'mercedes maybach', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable ', 'p-4.jpg', '2300000.00', 'mercedes-maybach', '2020-07-08 23:03:01', '2020-07-08 23:03:01'),
(5, 3, 'Porsche 911', 'text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset s', 'p-5.jpg', '143000.00', 'porsche-911', '2020-07-08 23:06:25', '2020-07-08 23:06:25'),
(6, 3, 'Pagani Zonda', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites', 'p-6.jpg', '240000.00', 'pagani-zonda', '2020-07-08 23:10:11', '2020-07-08 23:10:11'),
(7, 1, 'Q8', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their  years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'p-2.jpg', '88000.00', 'q8-2', '2020-07-08 22:58:37', '2020-07-08 22:58:37'),
(8, 1, 'Porsche Cayenne', 'make a type specimen book. It hd more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'p-1.jpg', '2000.00', 'porsche-cayenne-3', '2020-07-08 00:00:00', '2020-07-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(10, 'nulll', 'nulll@gmail.com', '$2y$10$qw3H1NKHAbdiKXZMG3mPZu9L0npjr2YS4loUBpWh6dMDV045.iIti', '2020-07-14 18:14:29', '2020-07-14 18:14:29'),
(11, 'olive', 'olive@gmail.com', '$2y$10$8FrbVu6qy0W1f3D6GI2IT..eh4MlgT8n32IF37x7glSdy5T8JCNe.', '2020-07-15 14:00:33', '2020-07-15 14:00:33'),
(12, 'shimi', 'shimi@gmail.com', '$2y$10$9mpqthnRTNA/bdiGWEFIfe4vSok.moh0O0z7Cly/9LO6rWkyGKEu.', '2020-07-15 14:07:58', '2020-07-15 14:07:58'),
(13, 'Panel Admin', 'admin@gmail.com', '$2y$10$/AW7Jw2RRM.lxxgf8R.73.49V4Equ4lR/gMYdv.9WBpv7iAMArCMO', '2020-07-15 19:58:08', '2020-07-15 19:58:08');

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
(13, 7);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
