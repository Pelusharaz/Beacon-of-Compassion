-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 05:01 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sharaz-techs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatpassword` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `role`, `password`, `repeatpassword`, `Date`, `Time`) VALUES
(6, 'Pelu Jeremiah', 'pelunguta@gmail.com', 'super admin', '$2y$10$djoGJuYVwdpqat1z4xzBi.qf2OZY3Zdp9oY8s.SgRiHSeFWovoWYS', '$2y$10$yl89SMxZhCWKKw1IPG/ZNOqeaZUB2CCNNWd1b7obc7IuqXt7cmEES', '2022-06-04', '2022-06-04 13:15:41'),
(7, 'Andrew Komora', 'badakomora06@gmail.com', 'Lead Developer', '$2y$10$YCDfvkaIDMfGXpJO6R3euekN96bOhSgjDhIa3NNWwic2s71hdrmwa', '$2y$10$ziP1l//U26vIJMuUIXBM3e/n4g8P97HNuuKYB1NUE52awIsDydGOq', '2022-06-04', '2022-06-04 13:16:48'),
(8, 'Christine Gaturu', 'gaturuchristine@gmail.com', 'Finance and operations Manager', '$2y$10$wMHLONtbnAwNTfh56fnZIuJRRzXeMqlBhkRgtZVpOIttMGcvIhBD2', '$2y$10$exlRt6lL4K30/aRv69CHKudzg5iWUkQNapmK.ssEUxB99xHudielS', '2022-06-04', '2022-06-04 13:17:36'),
(9, 'Emmanuel Makelele', 'emmanuelmakelele4@gmail.com', 'Software and Hardware Specialist', '$2y$10$wCpFO07M4qP2h6Hu8w4I1OZhMkk/kzVreEDNt20VDMwSZsy2Eh50y', '$2y$10$yuvgDzkklRYg0x2S3Ci9juEED.mqacwXQJRWEY7BkXvWKkQGkEsXq', '2022-06-04', '2022-06-04 13:18:12'),
(10, 'Roybrian', 'brianroykariuki@gmail.com', 'Sales and Marketing Manager', '$2y$10$CLO09zt2ozd9h0vL1Dj11.MUy1FsO0KMcOg4WG3lWQJYBVQ.RG5ia', '$2y$10$eI.gc9DxzO.vug0y0kvERO4Y9iI3IXpHXnUcoDT6GNAPfM3i7DFNy', '2022-07-09', '2022-07-09 04:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `country` varchar(80) NOT NULL,
  `eaddress` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `docandbloggingbookings`
--

CREATE TABLE `docandbloggingbookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `information` varchar(100) NOT NULL,
  `checkbox` varchar(100) NOT NULL,
  `document` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productname` varchar(10000) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `unitprice` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `totalquantity` int(11) NOT NULL,
  `totalprice` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `information` varchar(200) NOT NULL,
  `checkbox` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `productinfo` varchar(100) NOT NULL,
  `productimage` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `products` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `price`, `productinfo`, `productimage`, `category`, `products`, `code`, `Date`, `Time`) VALUES
(2, 'Bolt Mifi Router', 4990, '4G/5G Universal Mifi Router', 'Screenshot_20220604-122238_WhatsAppBusiness.jpg', 'Phonesandtablets', 'products', 'pr1', '2022-06-04', '14:01:06.0'),
(3, 'Phone Case', 399, 'Millitary Shock Proof phone Case', 'Screenshot_20220604-122309_WhatsAppBusiness.jpg', 'Phonesandtablets', 'products', 'pr9', '2022-06-04', '14:02:10.0'),
(4, 'Ceramic Matte Screen Protector', 498, 'Anti-Fingerprint', 'Screenshot_20220604-122344_WhatsAppBusiness.jpg', 'Phonesandtablets', 'products', 'pr8', '2022-06-04', '14:03:01.0'),
(5, '1 Tb Transcend Hard Drive', 6999, 'Brand New', 'Screenshot_20220604-122401_WhatsAppBusiness.jpg', 'Electronics', 'products', 'pr7', '2022-06-04', '14:03:59.0'),
(6, 'Fiber 4G Mifi', 5699, 'Brand New', 'Screenshot_20220604-122419_WhatsAppBusiness.jpg', 'Phonesandtablets', 'products', 'pr6', '2022-06-04', '14:04:48.0'),
(7, 'Plastic Portable Wadrobes', 5299, 'Brand New', 'Screenshot_20220604-122450_WhatsAppBusiness.jpg', 'Others', 'products', 'pr5', '2022-06-04', '14:05:32.0'),
(8, 'Lenovo IdeaPad Laptop Charger', 2499, 'High Quality Charger with power Output 20v,3.25a.', 'Screenshot_20220604-122535_WhatsAppBusiness.jpg', 'Electronics', 'products', 'pr4', '2022-06-04', '14:07:54.0'),
(9, 'Punex Fast Charger', 499, 'Fast Charger/Brand New', 'Screenshot_20220604-122559_WhatsAppBusiness.jpg', 'Phonesandtablets', 'products', 'pr3', '2022-06-04', '14:08:54.0'),
(10, 'President\'s Bussiness Potrait', 1499, 'Framed', 'Screenshot_20220604-122615_WhatsAppBusiness.jpg', 'Others', 'products', 'pr2', '2022-06-04', '14:09:33.0'),
(11, 'Pro 4 Earpods', 1949, 'Brand New', 'Screenshot_20220604-122634_WhatsAppBusiness.jpg', 'Phonesandtablets', 'products', 'pr15', '2022-06-04', '14:10:15.0'),
(12, 'Web Developement', 1000, 'Customised Web Solutions', 'Screenshot_20220604-122221_WhatsAppBusiness.jpg', 'Others', 'products', 'pr14', '2022-06-04', '14:11:01.0'),
(13, 'Plastic Portable Wadrobe', 5299, 'Sky Blue - Brand New', 'Screenshot_20220604-122500_WhatsAppBusiness.jpg', 'Others', 'products', 'pr13', '2022-06-04', '15:02:38.0'),
(14, 'Gents Pull - Necks', 1100, 'Fashion Plaited turtle necks - Brand New (All colors)', 'Gents Pull Necks.webp', 'Others', 'products', 'pr12', '2022-10-07', '03:37:26.0'),
(15, 'Lady Pull Neck Tops', 1000, 'Fashion Plaited pull neck tops - Brand New (All colors)', 'Lady Pull Necks.jpeg', 'Others', 'products', 'pr11', '2022-10-07', '03:39:57.0'),
(16, 'Smart watch', 3000, 'All brands [New]', 'smart watches.jpg', 'Electronics', 'products', 'pr10', '2022-10-07', '03:51:45.0'),
(17, 'classy Ladies Handbags', 3000, 'classy [Brand new]', 'lady handbags.jpg', 'Others', 'products', 'pr16', '2022-10-07', '04:12:08.0'),
(18, 'Office Equipments', 13500, 'Brand new', 'office equipments.png', 'Others', 'products', 'pr17', '2022-10-07', '04:35:09.0');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `gallery` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `category`, `gallery`, `image`, `Date`, `Time`) VALUES
(1, 'Edits', 'pic', 'editting.jpg', '2021-09-14', '23:59:23.000000'),
(2, 'Edits', 'pic', 'studio7.jpg', '2021-09-15', '00:00:11.000000'),
(3, 'Edits', 'pic', 'studio6.jpg', '2021-09-15', '00:00:30.000000'),
(4, 'Shoots', 'pic', 'shoots.jpg', '2021-09-15', '00:01:28.000000'),
(5, 'Shoots', 'pic', 'shoots2.jpg', '2021-09-15', '00:02:13.000000'),
(6, 'Shoots', 'pic', 'shoots3.jpg', '2021-09-15', '00:02:32.000000'),
(8, 'Events', 'pic', 'events.jpg', '2021-09-15', '00:03:45.000000'),
(9, 'Events', 'pic', 'events2.jpg', '2021-09-15', '00:04:14.000000'),
(10, 'Shoots', 'pic', 'adminstudio.jpg', '2021-09-15', '00:15:05.000000'),
(11, 'Events', 'pic', 'studio5 GIF.gif', '2021-09-15', '00:15:35.000000');

-- --------------------------------------------------------

--
-- Table structure for table `studiobookings`
--

CREATE TABLE `studiobookings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `service` varchar(100) NOT NULL,
  `editing` varchar(100) NOT NULL,
  `dateofservice` varchar(11) NOT NULL,
  `checkbox` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatpassword` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `repeatpassword`, `Date`, `Time`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$FhMdoVN3MJAW/EFKR1TbyukAdyiCqjRI2D5rju4SJJy7lgULLqZci', '$2y$10$/lyavsYw44yA6KTSH7HQ0ehRuFLPPCv42/9B0Pe1b8NAYiIQd7pEy', '2022-06-04', '14:30:16.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `docandbloggingbookings`
--
ALTER TABLE `docandbloggingbookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studiobookings`
--
ALTER TABLE `studiobookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `docandbloggingbookings`
--
ALTER TABLE `docandbloggingbookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `studiobookings`
--
ALTER TABLE `studiobookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
