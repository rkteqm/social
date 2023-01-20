-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 20, 2023 at 01:15 PM
-- Server version: 8.0.31-0ubuntu0.20.04.2
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
(43, 14, 'Nice!!', '2023-01-18 05:38:59'),
(44, 14, 'Nice!ff', '2023-01-18 05:43:26'),
(45, 14, 'Nice!', '2023-01-18 05:48:30'),
(47, 6, 'Good😀...', '2023-01-18 05:51:05'),
(49, 14, 'Nice!', '2023-01-18 08:43:06'),
(50, 14, 'Not too much good!', '2023-01-18 08:43:35'),
(53, 16, 'Nice!', '2023-01-18 09:01:20'),
(54, 17, 'Nice!', '2023-01-18 09:03:58'),
(55, 17, 'okk', '2023-01-18 09:04:16'),
(58, 3, 'hello11jjj', '2023-01-18 09:54:36'),
(59, 3, 'hello', '2023-01-18 11:00:16'),
(61, 3, 'helloytfygfyh', '2023-01-18 11:00:56'),
(63, 3, 'helloytfygfyh', '2023-01-18 11:03:35'),
(66, 5, 'Awesome yr!', '2023-01-18 11:27:02'),
(67, 5, 'Awesome yr!', '2023-01-18 11:27:46'),
(72, 5, 'Awesome yr!', '2023-01-18 11:47:07'),
(73, 5, 'Awesome yrsfsfs', '2023-01-18 11:47:12'),
(74, 5, 'Awesome yrsfsfs', '2023-01-18 12:07:50'),
(75, 5, 'Awes', '2023-01-18 12:07:55'),
(76, 5, 'Awes', '2023-01-18 12:08:03'),
(77, 5, 'Awes', '2023-01-18 12:09:09'),
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
(100, 5, 'kya hal hai bhai', '2023-01-19 10:02:19'),
(101, 5, 'badhiya bhai apna bata', '2023-01-19 10:02:40'),
(102, 27, 'Nice!', '2023-01-19 10:03:27'),
(103, 5, 'ythythh', '2023-01-19 11:22:46'),
(104, 20, 'Awesome!', '2023-01-20 05:39:42'),
(105, 5, 'jtjt', '2023-01-20 05:41:31'),
(106, 5, 'Awesome bro!gjjgjyu', '2023-01-20 07:02:09'),
(107, 5, 'Awesome bro!gjjgjyu', '2023-01-20 07:34:26');

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
(13, 3, 'Javascript', 'JavaScript is a client side scripting language!', 'download (1).jpeg', '2023-01-18 05:35:39'),
(14, 3, 'Html', 'HTML stands for hypertext markup language.', 'download.png', '2023-01-18 05:38:07'),
(16, 1, 'harsh', 'It is a server side scripting language.', 'download.jpg', '2023-01-18 09:00:41'),
(17, 1, 'DEEPU', 'dfgxggfg', 'download (1).jpeg', '2023-01-18 09:03:06'),
(18, 2, 'vhujg', 'hipwrejej', 'download.jpeg', '2023-01-18 11:17:34'),
(20, 4, 'Node', 'It is a server side scripting language.', 'download.jpeg', '2023-01-18 11:49:44'),
(22, 4, 'rfgrefe', 'This is  my first blog..', 'download.jpg', '2023-01-18 12:06:49'),
(24, 1, 'thyth', 'rhthytrhrtth gnty', 'download.jpg', '2023-01-18 12:35:14'),
(25, 7, 'rahul', '[olf krepfer rere', 'download.png', '2023-01-19 07:45:32'),
(26, 8, 'Nature', 'Nature.........', 'download (1).jpeg', '2023-01-19 09:21:57'),
(27, 8, 'Office lifestyle', 'It is a server side scripting language.', 'download.jpg', '2023-01-19 09:25:48');

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
(1, 'Rahul Kumar', 'rahul@gmail.com', 'Rahul@123', 'download (2).jpeg', 1, '2023-01-17 09:56:05', 0),
(3, 'Sachin Singh', 'rkteqm@gmail.com', '$2y$10$JIF.AAoeQ1qttwzADYLT0OXw9WIBiS6FEu2PTjyQi65S7KgbMOW1.', 'images (2).jpeg', 1, '2023-01-18 05:34:30', NULL),
(4, 'jenny', 'jenny@gmail.com', 'jenny', 'images.jpeg', 1, '2023-01-18 11:47:51', 0),
(6, 'Rose', 'rose@gmail.com', 'rose', 'images (1).jpeg', 1, '2023-01-19 07:23:56', 0),
(9, 'Admin', 'admin@gmail.com', 'Admin@123', 'loader.png', 0, '2023-01-19 09:43:23', 0),
(10, 'Sachin Singh', 'sachin@gmail.com', '$2y$10$3gmNGQb3TxKDZC1r5dPepOY6lsByXK7y11hft0.u5SMhYQwj5E43W', 'download (3).jpeg', 1, '2023-01-20 05:34:29', 0);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
