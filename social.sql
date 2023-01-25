-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2023 at 12:52 PM
-- Server version: 8.0.32-0buntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int NOT NULL,
  `post_id` int NOT NULL,
  `comment` varchar(250) NOT NULL,
  `commented_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `comment`, `commented_at`) VALUES
(1, 2, 'Nice!', '2023-01-17 10:27:06'),
(2, 2, 'Nice!', '2023-01-17 10:28:12'),
(3, 1, 'Nice!', '2023-01-17 10:55:05'),
(5, 1, 'Nice!', '2023-01-17 11:27:44'),
(6, 1, 'Nice!', '2023-01-17 11:27:48'),
(7, 1, 'Awewsome!', '2023-01-17 11:27:57'),
(8, 1, 'Awesome!', '2023-01-17 11:28:36'),
(9, 2, 'Nice!', '2023-01-17 11:30:25'),
(10, 2, 'Awesome bro!', '2023-01-17 11:30:34'),
(11, 2, 'Awesome bro!gjjgjyu', '2023-01-17 11:47:30'),
(13, 2, 'Awesome bro!gjjgjyu', '2023-01-17 11:56:08'),
(15, 2, 'Awesome ji.............', '2023-01-17 12:03:05'),
(25, 8, 'Nice!', '2023-01-17 12:59:13'),
(26, 8, 'Awesome!', '2023-01-17 12:59:17'),
(31, 11, 'Awesome yr!', '2023-01-18 03:38:08'),
(32, 11, 'Awesome yr!', '2023-01-18 03:39:50'),
(33, 11, 'Awesome yr!!!!!!!!!!!', '2023-01-18 03:41:11'),
(38, 11, 'Awesome yr', '2023-01-18 04:13:06'),
(41, 12, 'Nice!', '2023-01-18 05:18:58'),
(45, 14, 'Nice!', '2023-01-18 05:48:30'),
(47, 6, 'Good😀...', '2023-01-18 05:51:05'),
(50, 14, 'Not too much good!', '2023-01-18 08:43:35'),
(53, 16, 'Nice!', '2023-01-18 09:01:20'),
(54, 17, 'Nice!', '2023-01-18 09:03:58'),
(55, 17, 'okk', '2023-01-18 09:04:16'),
(58, 3, 'hello11jjj', '2023-01-18 09:54:36'),
(59, 3, 'hello', '2023-01-18 11:00:16'),
(61, 3, 'helloytfygfyh', '2023-01-18 11:00:56'),
(63, 3, 'helloytfygfyh', '2023-01-18 11:03:35'),
(78, 20, 'Nice!', '2023-01-18 12:20:21'),
(79, 20, 'Awesome!', '2023-01-18 12:20:30'),
(80, 20, 'Awesome!', '2023-01-18 12:20:32'),
(82, 18, 'Nice!', '2023-01-19 03:53:31'),
(83, 16, 'Nice!', '2023-01-19 04:32:17'),
(84, 16, 'Nice!', '2023-01-19 04:34:41'),
(85, 16, 'Nice!', '2023-01-19 04:37:43'),
(86, 16, 'Nice!', '2023-01-19 04:37:52'),
(87, 16, 'Nice!', '2023-01-19 04:38:29'),
(88, 16, 'Nice!', '2023-01-19 04:38:31'),
(89, 16, 'Nice!', '2023-01-19 04:39:38'),
(90, 16, 'Nice!', '2023-01-19 04:39:58'),
(91, 16, 'Nice!', '2023-01-19 04:41:44'),
(92, 16, 'Nice!', '2023-01-19 04:41:53'),
(94, 16, 'Nice!', '2023-01-19 04:49:50'),
(95, 16, 'Nice!', '2023-01-19 04:54:49'),
(96, 16, 'Nice!SSS', '2023-01-19 04:54:59'),
(97, 17, 'Not bad', '2023-01-19 08:40:04'),
(98, 25, 'Awesome yr!', '2023-01-19 08:42:15'),
(99, 8, 'Awesome!', '2023-01-19 09:26:41'),
(102, 27, 'Nice!', '2023-01-19 10:03:27'),
(103, 5, 'nice', '2023-01-19 11:22:46'),
(104, 20, 'Awesome!', '2023-01-20 05:39:42'),
(105, 5, 'jtjt', '2023-01-20 05:41:31'),
(107, 5, 'Awesome bro!gjjgjyu', '2023-01-20 07:34:26'),
(109, 5, 'Awesome bro!', '2023-01-20 12:00:52'),
(110, 24, 'Nice!', '2023-01-20 12:01:01'),
(111, 22, 'Nice!', '2023-01-20 12:01:07'),
(112, 8, 'Awesome!', '2023-01-23 09:05:35'),
(113, 8, 'Awesome!y', '2023-01-23 09:05:41'),
(114, 6, 'Good😀...', '2023-01-23 09:11:40'),
(115, 5, 'Awesome bro!d', '2023-01-23 09:28:37'),
(119, 5, 'Awesome bro!', '2023-01-23 09:31:24'),
(120, 24, 'Nice!!', '2023-01-23 09:34:58'),
(121, 14, 'good!', '2023-01-23 10:56:24'),
(122, 14, 'good!', '2023-01-23 10:56:27'),
(123, 17, 'Not bad', '2023-01-23 12:33:07'),
(124, 8, 'Awesome!', '2023-01-24 10:06:16'),
(126, 31, 'Awesome!', '2023-01-24 12:10:52'),
(127, 32, 'Nice!', '2023-01-24 12:12:13'),
(128, 32, 'Awesome!', '2023-01-24 12:12:17'),
(131, 32, 'Nice', '2023-01-24 12:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `users_id` int NOT NULL,
  `title` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `body` varchar(250) NOT NULL,
  `post_image` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `users_id`, `title`, `body`, `post_image`, `created_at`) VALUES
(5, 1, 'Core php.', 'It is a server side scripting language.', 'download (1).jpeg', '2023-01-17 12:42:49'),
(6, 1, 'Nature', 'I love nature.', 'download.jpeg', '2023-01-17 12:43:14'),
(8, 1, 'sachin blog', 'This is  my first blog..', 'download (1).jpeg', '2023-01-17 12:52:41'),
(14, 3, 'Html11', 'HTML stands for hypertext markup language..', 'download.png', '2023-01-18 05:38:07'),
(16, 1, 'harsh', 'It is a server side scripting language.', 'download.jpg', '2023-01-18 09:00:41'),
(17, 1, 'DEEPU', 'dfgxggfg', 'download (1).jpeg', '2023-01-18 09:03:06'),
(18, 2, 'vhujg', 'hipwrejej', 'download.jpeg', '2023-01-18 11:17:34'),
(20, 4, 'Node', 'It is a server side scripting language..', 'download.jpeg', '2023-01-18 11:49:44'),
(22, 4, 'rfgrefe', 'This is  my first blog..', 'download.jpg', '2023-01-18 12:06:49'),
(24, 1, 'thyth', 'rhthytrhrtth gnty', 'download.jpg', '2023-01-18 12:35:14'),
(25, 7, 'rahul', '[olf krepfer rere', 'download.png', '2023-01-19 07:45:32'),
(26, 8, 'Nature', 'Nature.........', 'download (1).jpeg', '2023-01-19 09:21:57'),
(27, 8, 'Office lifestyle', 'It is a server side scripting language.', 'download.jpg', '2023-01-19 09:25:48'),
(29, 3, 'grggtg', 'nhyhy', 'download.jpg', '2023-01-23 10:07:27'),
(31, 13, 'New World', 'lkd iejioekdefef er re ret rr r  f e', 'download (1).jpeg', '2023-01-24 12:10:36'),
(32, 15, 'Hello World', 'fddf grr grt tg t r rr4r', 'download.jpg', '2023-01-24 12:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `role` int NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `token` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `role`, `created_at`, `token`) VALUES
(1, 'Rahul Kumar', 'rahul@gmail.com', 'Rahul@123', 'images (1).jpeg', 1, '2023-01-17 09:56:05', 0),
(3, 'Sachin Singh', 'rkteqm@gmail.com', '$2y$10$LVAZJjMXc.9b2OxbRXM93u8KU6U6EmDr61pXRX.TBcbfI73ZmFcxC', 'download (3).jpeg', 1, '2023-01-18 05:34:30', 47675),
(4, 'jenny', 'jenny@gmail.com', 'jenny', 'images.jpeg', 1, '2023-01-18 11:47:51', 0),
(6, 'Rose', 'rose@gmail.com', 'rose', 'images (1).jpeg', 1, '2023-01-19 07:23:56', 0),
(9, 'Admin', 'admin@gmail.com', '$2y$10$JIF.AAoeQ1qttwzADYLT0OXw9WIBiS6FEu2PTjyQi65S7KgbMOW1.', 'loader.png', 0, '2023-01-19 09:43:23', 0),
(10, 'Sachin Singh', 'sachin@gmail.com', '$2y$10$3gmNGQb3TxKDZC1r5dPepOY6lsByXK7y11hft0.u5SMhYQwj5E43W', 'download (3).jpeg', 1, '2023-01-20 05:34:29', 0),
(11, 'srivalli', 'srivalli@gmail.com', '$2y$10$WiJwp.ci.4wjQhzFgaLrgOO4Fm7B2vWdEcdZQaavEZzL0mSnErD3i', 'download (2).jpeg', 1, '2023-01-20 12:17:35', NULL),
(12, 'Neha', 'neha@gmail.com', '$2y$10$Zgxnd5hgjcYvMFF8WERXR.Exhnbnp9o1MzS/rZdRVxSk.yvoZLLoC', 'images.jpeg', 1, '2023-01-20 12:18:49', NULL),
(13, 'Rohit Paul', 'krahul@teqmavens.com', '$2y$10$UPDfxb1y3PIB2mb.25LEreKqLXjrpIIHcSEAwFYY8TVRGbiweVxkm', 'images (1).jpeg', 1, '2023-01-23 12:41:23', 44231),
(14, 'Sachin Singh', 'sss@gmail.com', '$2y$10$hpCDqmCyI.fAHXK2htpl.uHB.rlQAsSVNv2KGRfP.gUVmxerJzETu', 'download.png', 1, '2023-01-24 10:00:04', NULL),
(15, 'sana', 'sana@gmail.com', '$2y$10$/3UE0gGpnVqkCSlk8ZVWd.DwUb5mEpP0Oh.GqpS4RbAJ94R7YAP.O', 'download (2).jpeg', 1, '2023-01-24 12:09:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
