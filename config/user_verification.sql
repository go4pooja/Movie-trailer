-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 04:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user verification`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `token` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `verified`, `token`, `password`) VALUES
(1, 'pooo', 'go4pooja78@gmail.com', 0, '1e273615db3e965d4126120cca21500ca9053e29aa7312d394a8c8c9540ad107935c1894dee6e1c219d266f15c25e67c6552', '$2y$10$7SNuVdXuAPa9KlxrXR5lkemlK/69IzAC7rFN2aod8ep4tN6WrKcQW'),
(2, 'pooja', 'go4pooja7@gmail.com', 0, '2018a4a49932830130306ceee03c18ac428e4e0e0c8e382641276d7935b23c99a9894a5f04a4e036ee778730836b4efbc838', '$2y$10$NnPcSeY5Lv5tt/see2eIyuHhUBciIszM.N5oi47dy6Cy3nws63S66'),
(3, 'pooooja', 'go4pooja786@gmail.com', 0, 'c24708ac55d9ab0d78fb44a7b73f8daf443376ad4d5dfc766f1533319f5281d76945e0c1490e2fc07335eeccf603651dcd73', '$2y$10$Us.DGLsXJo5AvJQoM.ECtuAeVgaDr4DnkESoVd3EIjrYdQ/vuvJQa'),
(5, 'jhytgfdsa9k8iju76hygt5frdesw', 'go4ooo@gmail.com', 0, 'e07a23dc858dae4f55d816db96a4e6bf7416bd3144f75a5c9953191757a0349869cc917f275c866e5ebe58ce258f5feeffe8', '$2y$10$iuAAkY4nuF0t4OFdE3pqf.J2QwwrHsoOGpkpCO2xP5inZpUJ78AXG'),
(6, ';lkjhgtfrdsa', 'GO4POOJA@GMAIL.COM', 0, '41f42ea2eb4d47859b38d776658c648e46d82e98a437bd487041b40e85e3307ad47d8905e19af8204c8b96ded58f6af49eb4', '$2y$10$pzdU5YMb3uMowdeoXHHBYudLXX48G3KMXUTNv1PDBu8AjGNP1yXR.'),
(7, 'pooooooo', 'sureshchauahn@gmail.com', 0, '566691f4415ce21550614e36e297ab2a8723bc4cba67e0114710327c454065ab65b427a13e4c4ddbf6478c8517649a9dcd09', '$2y$10$GTNcbu8sj0iDp9UyABC5s.MOW9PNm2hEcSw5bd/17SftGs2/Z9L7q'),
(8, 'suresh', 'suresh@gmail.com', 0, 'cbf6bd1bbccf84ec8d59121ccec6c1b1e215aa0c8a2053f225fc9ce82b7b1ac2037c741d68c9e510ff9f3fdc7892de11ba63', '$2y$10$Szkt/d4bqzp6Y6uXTls/8.8XHJ2keqBZgVtc8ZhSfwuw9VKJCd0CC'),
(10, 'pagal', 'aaja@gmail.com', 0, '64d3698582208fbfbdc0a42fde4eea8e245ffb8071d7d1f0d36b6797e6983df903c0fdbb2e9d624376175e340693dc4e95dd', '$2y$10$xG2kDfJ96DHGf2RZUA7vuedvYs4ry.iDyee8WYOrLh4koV3ncoDL6'),
(12, 'punya', 'go5@gmail.com', 0, 'dc66f07d4e4481c80792ac336e90c4186d9d0bb4070e6fe888b50d0b5ce8a7dfa8b5de94195039ce2ea70c3b908ede8864a0', '$2y$10$WaZeNy9FVzbVyCJadghg6e1877kvoHOqElz2bkNzrv5N8Fiq3XiTe'),
(20, 'shubhi', 'b2bmoviez@gmail.com', 1, '7d05c7561fdde7b39261fc34d37895f6f903f61be134846ab686e9b248309e7695d979a8670b25d5b0703175f9b8bfb4cb04', '$2y$10$vgElpg27nh4aGrjaFZJcHOff1.WwAFLGp9ocH6.zICgeQlK1FcBF.'),
(21, 'alia', 'go4alia786@gmail.com', 1, 'bcd750e184d93108e23ceae5c81178ae5062f4b5ce3c73a1b17862acfb0e87252a604b826154d6302f6d695b2e737f393156', '$2y$10$buuy4nCuQxuSIHuz..V1A.x3bOtVXs0KVwRbqXiD6UCnQTKcwfzUO');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
