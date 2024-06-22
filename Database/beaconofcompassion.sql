-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2024 at 06:47 PM
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
-- Database: `beaconofcompassion`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatpassword` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `question`, `answer`, `role`, `password`, `repeatpassword`, `Date`, `Time`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', '$2y$10$mXRs8bYGKjgRcSXu.0o0OeZMf.GdugY8a/zAQCq1f5VvgYHvp3NbG', 'black', 'super admin', '$2y$10$2jdmk/YU.pvaKx0iUua/IemTD24vXnV4XM6XlmBz3C1025L1/VnXe', '$2y$10$4CSA4qjXLSXn/ZRvNXsMPu0oFqKb9yEIGgJ/GBac9PHLsNF4D8EvG', '2024-06-19', '2024-06-19 22:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogtitle` varchar(100) NOT NULL,
  `dateposted` varchar(100) NOT NULL,
  `bloginfo` varchar(500) NOT NULL,
  `postedby` varchar(100) NOT NULL,
  `blogimage` varchar(100) NOT NULL,
  `ext` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogtitle`, `dateposted`, `bloginfo`, `postedby`, `blogimage`, `ext`) VALUES
(3, 'Test4', '2024-06-21', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempore veritatis. Repudiandae ', 'super admin', 'partner.webp', 'webp'),
(4, 'Test4', '2024-06-22', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempore veritatis. Repudiandae', 'super admin', 'blogs5.jpg', 'jpg'),
(5, 'Test', '2024-06-22', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempore veritatis. Repudiandae Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempore veritatis. Repudiandae Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempore veritatis. Repudiandae Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempore veritatis. Repudiandae Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, tempore veritatis. Repudiandae ', 'super admin', 'customer-care.jpg', 'jpg'),
(6, 'Test video', '2024-06-22', 'test', 'super admin', 'bgvideo2.mp4', 'mp4'),
(7, 'row test', '2024-06-22', 'test', 'super admin', 'blogs.gif', 'gif');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `referals` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`, `referals`, `Date`, `Time`) VALUES
(1, 'test', 'test@gmail.com', 'test', 'online', '2024-06-20', '22:20:46.0'),
(2, 'test about', 'test@gmail.com', 'test', 'test', '2024-06-20', '22:23:00.0');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `paymentcheckbox` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `freqcheckbox` varchar(100) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `anonycheckbox` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `termscheckbox` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `paymentcheckbox`, `amount`, `freqcheckbox`, `frequency`, `name`, `phone`, `email`, `anonycheckbox`, `comment`, `termscheckbox`, `Date`, `Time`) VALUES
(4, 'Mpesa', '100', 'on', 'Month', 'sharaz techs', '0796526231', 'sharaztech@gmail.com', 'on', 'test', 'on', '2024-06-22', '08:59:55.0'),
(5, 'Mpesa', '100', 'on', 'Day', 'sharaz techs', '+254 791 386 752', 'sharaztech@gmail.com', 'on', 'test', 'on', '2024-06-22', '09:10:44.0'),
(6, 'Online-Banking', '20', 'on', 'Just once', 'Pelu Jeremiah', '0796526231', 'pelunguta@gmail.com', 'on', 'test', 'on', '2024-06-22', '09:31:32.0');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `referals` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `email`, `message`, `referals`, `Date`, `Time`) VALUES
(3, 'sharaz techs', 'sharaztech@gmail.com', 'test', 'website', '2024-06-20', '23:41:13.0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repeatpassword` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `question`, `answer`, `password`, `repeatpassword`, `Date`, `Time`) VALUES
(1, 'user', 'user@gmail.com', '$2y$10$/e2mwAxGQQeeZCkykXgQR.RVlbEuufFlvpL3aH8JLxYtWVi/GN.sy', 'Black', '$2y$10$uxGwh4XjpuI7GEn0IwNbRuild/1BNlYNRO4McXUgJxIj57el5MSHa', '$2y$10$ndEgTRmERLOfHuc3Z9NbeeXB/IMBkSISOSOjHXlT0pN.SRVXSlE66', '2024-06-20', '21:37:56.0');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `ephone` varchar(100) NOT NULL,
  `eemail` varchar(100) NOT NULL,
  `days` varchar(100) NOT NULL,
  `vtime` varchar(100) NOT NULL,
  `referals` varchar(100) NOT NULL,
  `bcheckbox` varchar(50) NOT NULL,
  `lcheckbox` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `gender`, `address`, `phone`, `email`, `ename`, `ephone`, `eemail`, `days`, `vtime`, `referals`, `bcheckbox`, `lcheckbox`, `Date`, `Time`) VALUES
(1, 'test', 'male', '141', '0796526231', 'test@gmail.com', 'Test', '0796526231', 'test@gmail.com', 'Mon', '00:00:00.0', 'online', 'on', 'on', '2024-06-21', '16:39:52.0'),
(4, 'Pelu Jeremiah', 'male', 'Ruiru,Kiambu', '0796526231', 'pelunguta@gmail.com', 'Test', '0796526231', 'test@gmail.com', 'Tuesdays and Thursday', 'Afternoon', 'online website', 'on', 'on', '2024-06-21', '22:37:33.0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
