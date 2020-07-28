-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 06:13 PM
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
(1, 'SUV Cars', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'car-1.jpg', 'suv-cars', '2020-07-08 00:00:00', '2020-07-08 00:00:00'),
(2, 'saloon cars', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, ', 'car-2.jpg', 'saloon-cars', '2020-07-08 00:00:00', '2020-07-08 00:00:00'),
(3, 'sports', 'an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets.', 'car-3.jpg', 'sports', '2020-07-08 00:00:00', '2020-07-08 00:00:00'),
(4, 'Popeye', '<p>Popeye Cars is<font color=\"#efc631\"> </font><font color=\"#6ba54a\">the </font><font color=\"#424242\">best</font><br></p>', '2020.07.24.14.16.55-Km8qY-0jlOFIM.jpg', 'popeye', '2020-07-24 14:17:39', '2020-07-24 13:43:17');

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
(1, 1, 'about our company', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2020-07-17 00:00:39', '2020-07-17 00:00:39'),
(2, 1, 'The Team ', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2020-07-17 00:01:43', '2020-07-17 00:01:43'),
(3, 2, 'iCARS Services Online', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', '2020-07-17 00:02:26', '2020-07-17 00:02:26'),
(4, 3, 'Company Deatials', '<p><span style=\"background-color: rgb(0, 255, 255);\">Phone</span>: 054654165654</p><p><font color=\"#ff00ff\">Address</font>: Shoham 5 Ramat Gan</p><p><br></p><p><br><img src=\"data:image/png;base64,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\" style=\"width: 25%;\" data-filename=\"300px-Apollo__1_.png\"></p><p>&nbsp;</p>', '2020-07-20 13:53:27', '2020-07-20 13:53:27'),
(5, 5, 'Our Best Team Ever', '<p>blah&nbsp;<span style=\"font-size: 0.875rem;\">blah&nbsp;</span><span style=\"font-size: 0.875rem;\">blah&nbsp;</span><span style=\"font-size: 0.875rem;\">blah&nbsp;</span><br></p>', '2020-07-20 15:09:24', '2020-07-20 14:02:59');

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
(3, 'content', 'content', 'Content Us', '2020-07-20 00:37:17', '2020-07-15 17:31:24'),
(5, 'Our Team', 'our-team', 'Our Team Page', '2020-07-20 14:02:33', '2020-07-20 14:02:33');

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
  `particle` longtext NOT NULL,
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
