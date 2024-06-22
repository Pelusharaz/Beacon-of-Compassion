-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 04:02 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `blogtitle` varchar(255) DEFAULT NULL,
  `blogimage` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `price` int(255) DEFAULT NULL,
  `bloginfo` varchar(2000) DEFAULT NULL,
  `postedby` varchar(255) DEFAULT NULL,
  `dateposted` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogtitle`, `blogimage`, `ext`, `price`, `bloginfo`, `postedby`, `dateposted`) VALUES
(12, 'Christmas Wishes', 'WhatsApp Video 2022-12-21 at 1.47.08 PM.mp4', 'mp4', 2022, 'Happy holidays, to all our esteemed clients. Thank you for trusting us with your property dealings. We hope to serve you again in the coming year.', 'Advert Manager', '2022-12-21'),
(13, 'Our Projects', 'our projects.jpg', 'jpg', 230000, 'Our current ongoing project in Ruiru, Matuu, Mombasa, Gilgil all up for grabs.', 'Advert Manager', '2023-01-04'),
(14, 'Length Test', 'blogs.gif', 'gif', 200000, 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod unde, delectus optio pariatur veniam veritatis, architecto dolores odio tempora consectetur temporibus doloremque esse inventore. Tenetur rerum ipsa quae possimus pariatur!\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Quod unde, delectus optio pariatur veniam veritatis, architecto dolores odio tempora consectetur temporibus doloremque esse inventore. Tenetur rerum ipsa quae possimus pariatur!\r\n\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Quod unde, delectus optio pariatur veniam veritatis, architecto dolores odio tempora consectetur temporibus doloremque esse inventore. Tenetur rerum ipsa quae possimus pariatur!\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Quod unde, delectus optio pariatur veniam veritatis, architecto dolores odio tempora consectetur temporibus doloremque esse inventore. Tenetur rerum ipsa quae possimus pariatur!', 'Maintainance', '2023-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `preferreddate` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `checkbox` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `callrequests`
--

CREATE TABLE `callrequests` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `information` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `checkbox` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `phone`, `email`, `information`, `type`, `checkbox`, `Date`, `Time`) VALUES
(1, 'Gregorymem', '89751147492', 'no-replyShagma@gmail', 'Hi!  goldenchanceproperties.com \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd businÐµss prÐ¾pÐ¾sÐ°l fully lÐ°wfully? \r\nWÐµ Ð¾ffÐµring Ð° nÐµw uniquÐµ wÐ°y Ð¾f sÐµnding businÐµss Ð¾ffÐµr thrÐ¾ug', 'Complaint', 'on', '2023-01-22', '14:22:38.0'),
(2, 'Raymond', '89127314378', 's1.thecctvpro@gmail.', 'Dear Sir/mdm, \r\nHope you are doing well \r\nWe supply 4G solar cameras, explosion-proof cameras and underwater cameras for commercial use. Use of applications: ships, construction sites, oil rigs and nu', 'Interest', 'on', '2023-01-24', '22:25:18.0'),
(3, 'Mike Mansfield\r\n', '84698969135', 'no-replykt@gmail.com', 'Hi there \r\n \r\nI Just checked your goldenchanceproperties.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for y', 'Interest', 'on', '2023-02-01', '23:48:49.0'),
(4, 'WilliamSon', '85462297829', 'no.reply.paulp@gmail', 'HÐµllÐ¾!  goldenchanceproperties.com \r\n \r\nDid yÐ¾u knÐ¾w thÐ°t it is pÐ¾ssiblÐµ tÐ¾ sÐµnd prÐ¾pÐ¾sÐ°l tÐ¾tÐ°lly lÐµgÐ°lly? \r\nWÐµ prÐ¾viding Ð° nÐµw uniquÐµ wÐ°y Ð¾f sÐµnding Ð°ppÐµÐ°l thrÐ¾ugh fÐµÐµdb', 'Complaint', 'on', '2023-02-03', '14:53:04.0'),
(5, 'Mark Den', '88724193726', 'markden@markkden.com', 'Good day, \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I urge you to get back to me immediately through markden1@markkden.com \r\n \r\nI awai', 'Follow up', 'on', '2023-02-07', '07:28:15.0'),
(6, 'Mike Sheldon\r\n', '88666694767', 'no-replykt@gmail.com', 'Hi there \r\n \r\nThis is Mike Sheldon\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/sem', 'Interest', 'on', '2023-02-11', '07:01:46.0'),
(7, 'Mike Ogden\r\n', '83285813113', 'no-replykt@gmail.com', 'Hi there \r\n \r\nJust checked your goldenchanceproperties.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 'Follow up', 'on', '2023-02-13', '09:42:54.0'),
(8, 'Mike Hill\r\n', '84427889568', 'no-replykt@gmail.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile ra', 'Complaint', 'on', '2023-02-18', '17:52:16.0'),
(9, 'Mike Mackenzie\r\n', '82628652339', 'no-replykt@gmail.com', 'Hello \r\n \r\nI have just checked  goldenchanceproperties.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will enhance your SEO metrics and ranks organically and safely, usi', 'Interest', 'on', '2023-02-23', '00:00:59.0'),
(10, 'Mike Oakman\r\n', '86171479589', 'no-replykt@gmail.com', 'Hi there \r\n \r\nI Just checked your goldenchanceproperties.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for y', 'Complaint', 'on', '2023-03-03', '19:22:33.0'),
(11, 'Mike Fraser\r\n', '86496533977', 'no-replykt@gmail.com', 'Howdy \r\n \r\nThis is Mike Fraser\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush', 'Complaint', 'on', '2023-03-06', '17:32:11.0'),
(12, 'Mike Osborne\r\n', '87346716573', 'no-replykt@gmail.com', 'Hi there \r\n \r\nJust checked your goldenchanceproperties.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 'Interest', 'on', '2023-03-14', '00:47:07.0'),
(13, 'Mike Becker\r\n', '85633757931', 'no-replykt@gmail.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile ra', 'Complaint', 'on', '2023-03-17', '10:08:00.0'),
(14, 'Sandra NeusÃ¼b', '86886756156', 'isabellatrovato02@ho', 'Sorry to have contacted you this way, I just saw your contact on the internet. Be a shareholder in an oil import company and a member of a large humanitarian association. I wish to support you financi', 'Follow up', 'on', '2023-03-17', '21:58:25.0'),
(15, 'Mike Adderiy\r\n', '83437695455', 'no-replykt@gmail.com', 'Good Day \r\n \r\nI have just analyzed  goldenchanceproperties.com for  the current search visibility and saw that your website could use a boost. \r\n \r\nWe will increase your SEO metrics and ranks organica', 'Follow up', 'on', '2023-03-23', '00:44:19.0'),
(16, 'Mike Taylor\r\n', '83744246667', 'no-replykt@gmail.com', 'Hi there \r\n \r\nI Just checked your goldenchanceproperties.com ranks and saw that your site is trending down for some time. \r\n \r\nIf you are looking for a trend reversal, we have the right solution for y', 'Complaint', 'on', '2023-03-29', '00:52:53.0'),
(17, 'Davidphirl', '81655114367', 'alb.e.r.t.han.s.hin.', 'Mjfejdjwdjiwdhwsuf hohaufheodajidhowaf hwidjidjqiohfuehooiPQKWODJQIJ IWJDOKDOWJDIjefiwjreir jwqifjweifewifeefjrghr jfejfekwlfjrghwjwajkdjwfew goldenchanceproperties.com', 'Follow up', 'on', '2023-03-29', '05:08:18.0'),
(18, 'Roberttaula', '82791627755', 'albe.r.t.h.ansh.in.4', '<html><a href=\"https://google.com\"><img src=\"https://blogger.googleusercontent.com/img/a/AVvXsEgXM4xrSRAnQQOLZImSaLdACcB-BosbLfsYEsXB-lLBl71Ma4AFA4xbB22ruqkub9W8nQCJVUXuXvJQeNLG2yoUL-OxTbhSvuyduxRSQI5', 'Complaint', 'on', '2023-04-02', '01:09:49.0'),
(19, 'Mike Hailey\r\n', '81782397522', 'no-replykt@gmail.com', 'Hi \r\n \r\nThis is Mike Hailey\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-ba', 'Complaint', 'on', '2023-04-03', '17:43:56.0'),
(20, 'Mike Wallace\r\n', '81252255711', 'no-replykt@gmail.com', 'Hi there \r\n \r\nJust checked your goldenchanceproperties.com in MOZ and saw that you could use an authority boost. \r\n \r\nWith our service you will get a guaranteed Domain Authority score within just 3 mo', 'Interest', 'on', '2023-04-10', '16:41:39.0'),
(21, 'Mike Blomfield\r\n', '84811596215', 'no-replykt@gmail.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile ra', 'Follow up', 'on', '2023-04-12', '20:20:23.0'),
(22, 'James Osei', '89577799275', 'jamesoseiii16@gmail.', 'Hello dear friend , \r\n \r\nI have contacted you for a reason. \r\n \r\nI am Mr. James , Business Development Executive/Auditing Director in the Bank of Ghana . \r\n \r\nI have a deal which I want to involve you', 'Interest', 'on', '2023-04-13', '02:12:11.0'),
(23, 'StephenFup', '81476151214', 'diseno@maytecommodor', 'Take Your Social Media Efforts to the Next Level with Elite SMM Services https://smm-elite-service.viacrimgeexfite.tk/invite-4768', 'Interest', 'on', '2023-04-17', '01:14:31.0'),
(24, 'Mike Moore\r\n', '88225751262', 'no-replykt@gmail.com', 'Greetings \r\n \r\nI have just checked  goldenchanceproperties.com for its SEO metrics and saw that your website could use a push. \r\n \r\nWe will improve your ranks organically and safely, using state of th', 'Follow up', 'on', '2023-04-17', '14:11:35.0'),
(25, 'Waheed Mohammed', '81341768752', 'ujn2esbgakah@opayq.c', 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. We have a ', 'Follow up', 'on', '2023-04-21', '15:03:40.0'),
(26, 'Mark Bragg', '88473692575', 'cbdetcetera@gmail.co', 'I sent an email to you over a week ago about CBD products for health purposes, treatments, and assistance with treatments. My whatsapp number is +40732455233, www.cbdetcetera.com \r\n \r\nI donâ€™t think ', 'Interest', 'on', '2023-04-22', '13:26:51.0'),
(27, 'Mr. James', '89946764487', '@onmail.com|jamesose', 'You have received a message from Mr. James , Business Development Executive/Auditing Director in the Bank of Ghana. \r\nHe is not fulfilling his obligations. \r\njamesosei59@onmail.com \r\njamesosei@gmx.com', 'Interest', 'on', '2023-05-04', '10:25:53.0'),
(28, 'Mike Stanley\r\n', '89358812829', 'no-replykt@gmail.com', 'Howdy \r\n \r\nThis is Mike Stanley\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backli', 'Interest', 'on', '2023-05-04', '19:04:39.0'),
(29, 'Mike Higgins\r\n', '81156649691', 'no-replykt@gmail.com', 'If you have a local business and want to rank it on google maps in a specific area then this service is for you. \r\n \r\nGoogle Map Stacking is one of the best ways to rank your GMB in a specific mile ra', 'Follow up', 'on', '2023-05-11', '09:23:50.0'),
(30, 'StevenBag', '84622285368', 'hello@odoziakuchi.co', 'Good day! \r\n \r\nLooking for Heirloom fine Jewellery? \r\n \r\nODOZIAKUCHI is an exciting British jewellery brand that celebrates individuality, our mission is to create sentimental jewellery with meaning t', 'Complaint', 'on', '2023-05-11', '10:30:54.0'),
(31, 'Mike Tracey\r\n', '89393645191', 'no-replykt@gmail.com', 'Hello \r\n \r\nI have just checked  goldenchanceproperties.com for its SEO Trend and saw that your website could use an upgrade. \r\n \r\nWe will improve your ranks organically and safely, using state of the ', 'Follow up', 'on', '2023-05-17', '16:45:28.0'),
(32, 'Pelu Jeremiah', '0791386752', 'pelunguta@gmail.com', 'test', 'Interest', 'on', '2023-09-13', '16:14:50.0');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productimage` varchar(255) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `productinfo` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `productname`, `productimage`, `ext`, `productinfo`, `date`) VALUES
(1, 'Valentine Offer', 'MATUU (5).png', 'png', 'Special Valentine Sale .Gift yourself or loved ones this month.', '2023-02-06'),
(3, 'Title Deed Handover Ceremony', 'Invites You to (12).png', 'png', 'We invite all our potential clients and clients for Golden Keys Estate and Tulia Gardens Phase 1 to our official title handover ceremony.', '0000-00-00'),
(4, 'May Offer', 'phase 2 (1).jpg', 'jpg', 'Buy a plot at Tulia Gardens Cash today @230K and get a 3days , 2nights fully paid trip to Mombasa.', '2023-05-04');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `productinfo` varchar(100) NOT NULL,
  `productimage` varchar(100) NOT NULL,
  `ext` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `products` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `price`, `productinfo`, `productimage`, `ext`, `category`, `products`, `code`, `location`, `size`, `Date`, `Time`) VALUES
(27, 'Land in Matuu', 180000, '50*100 Plots.  Water and electricity. Ready title deed', 'WhatsApp Image 2023-01-18 at 4.08.29 PM.jpeg', 'jpeg', 'bestselling', 'products', 'Matuu', '', '', '2022-12-21', '07:15:55.0'),
(30, 'Kitengela Projects', 1200000, '50*100 residential plots, touching the tarmac with good security, water and electricity', 'WhatsApp Image 2022-09-19 at 1.20.12 PM (2).jpg', 'jpg', 'hotdeals', 'products', 'kitengela', '', '', '2022-12-21', '07:17:48.0'),
(31, 'Plots In Gilgil', 350000, '50 by 100 Plots, near Lake Elementatiata Pebble Resort, with water and electricity and ready title d', 'WhatsApp Image 2023-05-23 at 9.02.31 AM (1).jpeg', 'jpeg', 'hotdeals', 'products', 'Gilgil', '', '', '2022-12-21', '07:18:46.0'),
(33, 'Mwalimu farm', 2500000, '1,2 and 3 acres starting @ 2.5M - 3Mper  acre', 'IMG_20230104_124958.jpg', 'jpg', 'hotdeals', 'products', 'M', '', '1,2 and 3 acres', '2023-01-04', '09:49:37.0'),
(35, 'Nyandarua Project ', 1000000, '1 acre in Nyandarua ', 'IMG_20201206_133455-870x420.jpg', 'jpg', 'hotdeals', 'products', 'N', '', '', '2023-01-04', '09:58:25.0'),
(36, 'Tulia Gardens Matuu', 230000, '50*100 Plots. 300 Meters from tarmac. Water and electricity. Ready title deed', 'WhatsApp Image 2023-04-24 at 2.23.01 PM.jpeg', 'jpeg', 'bestselling', 'products', 'Mt', '', '', '2023-01-04', '10:00:55.0'),
(38, 'Foothill Gardens Kilimambogo', 375000, '50 x 100 plots. Fully serviced( water, electricity and roads). Spectacular 14 falls. Unique getaway ', 'WhatsApp Video 2023-01-31 at 5.43.01 PM.mp4', 'mp4', 'featured', 'products', 'k', '', '', '2023-03-04', '07:45:51.0'),
(39, 'Nataana Gardens Naivasha', 300000, '50 x 100 plots. Located just 3km from Kongoni Lodge off the Moi South Lake rd.', 'WhatsApp Image 2022-10-12 at 9.26.47 PM.jpeg', 'jpeg', 'hotdeals', 'products', 'n', '', '', '2023-03-04', '07:49:36.0'),
(40, 'Plots in Isinya- Kiserian', 395000, '2KM from isinya town along Kiserian tarmac. Well developed neighborhood, water, electricity, murram ', 'WhatsApp Image 2023-03-29 at 4.56.18 PM.jpeg', 'jpeg', 'hotdeals', 'products', 'i', '', '', '2023-03-29', '15:09:34.0'),
(41, 'Nanyuki Project', 700000, '12 acres Nanyuki Ngobit.  300 meters from tarmac. Rich black cotton soil. Overlooking the beautiful ', 'WhatsApp Image 2023-03-29 at 5.03.51 PM.jpeg', 'jpeg', 'hotdeals', 'products', 'ny', '', '', '2023-03-29', '15:20:32.0'),
(42, 'Fahari Gardens Naivasha', 750000, '50 x 100 plots, located 4km from Naivasha along Mai Mahiu road. 13 minutes from Mai Mahiu town .Just', 'WhatsApp Image 2023-04-28 at 2.02.19 PM.jpeg', 'jpeg', 'hotdeals', 'products', 'nv', '', '', '2023-05-04', '06:08:14.0'),
(43, 'Ridge View Gardens- Juja farm', 899000, '50 x 100 plots, near Mwireri shopping centre, good neighborhood, social amenities: schools, churches', 'WhatsApp Image 2023-05-23 at 9.02.31 AM.jpeg', 'jpeg', 'hotdeals', 'products', 'jf', 'Juja', '50*100', '2023-05-23', '05:57:36.0'),
(161, 'Mwalimu farm', 2500000, '1,2 and 3 acres starting @ 2.5M - 3Mper  acre', 'IMG_20201206_133455-870x420.jpg', 'jpg', 'hotdeals', 'products', 'M', '', '1,2 and 3 acres', '2023-09-11', '21:05:33.0'),
(162, 'Mwalimu farm', 2500000, '1,2 and 3 acres starting @ 2.5M - 3Mper  acre', 'IMG_20230104_121438.jpg', 'jpg', 'hotdeals', 'products', 'M', '', '1,2 and 3 acres', '2023-09-11', '21:05:33.0'),
(194, 'Implode Test', 200000, 'test info', 'land 1 (1).jpg', 'jpg', 'featured', 'products', 'pr64f714a31191f', 'Ruiru', '100*100', '2023-09-13', '15:03:24.0'),
(195, 'Implode Test', 200000, 'test info', 'bgvideo2 (1).mp4', 'mp4', 'featured', 'products', 'pr64f714a31191f', 'Ruiru', '100*100', '2023-09-13', '15:05:31.0'),
(196, 'Implode Test', 200000, 'test info', 'IMG_20201206_133455-870x420.jpg', 'jpg', 'featured', 'products', 'pr64f714a31191f', 'Ruiru', '100*100', '2023-09-13', '15:05:31.0'),
(197, 'Implode Test', 200000, 'test info', 'IMG_20230104_121438.jpg', 'jpg', 'featured', 'products', 'pr64f714a31191f', 'Ruiru', '100*100', '2023-09-13', '15:05:31.0'),
(198, 'Implode Test', 200000, 'test info', 'IMG-20210503-WA0004.jpg', 'jpg', 'featured', 'products', 'pr64f714a31191f', 'Ruiru', '100*100', '2023-09-13', '15:05:31.0'),
(199, 'Implode Test', 200000, 'test info', 'IMG-20220919-WA0003.jpg', 'jpg', 'featured', 'products', 'pr64f714a31191f', 'Ruiru', '100*100', '2023-09-13', '15:05:31.0'),
(200, 'Implode Test', 200000, 'test info', 'IMG-20221214-WA0005.jpg', 'jpg', 'featured', 'products', 'pr64f714a31191f', 'Ruiru', '100*100', '2023-09-13', '15:05:31.0'),
(225, 'Test Property', 400000, ' residential plots, touching the tarmac with good security, water and electricity', 'bgvideo2.mp4', 'mp4', 'featured', 'products', 'pr64f734a8e44c3', 'Naivasha', '100*100', '2023-09-13', '15:25:17.0'),
(226, 'Test Property', 400000, ' residential plots, touching the tarmac with good security, water and electricity', 'IMG-20220919-WA0003.jpg', 'jpg', 'featured', 'products', 'pr64f734a8e44c3', 'Naivasha', '100*100', '2023-09-13', '15:25:17.0'),
(227, 'Test Property', 400000, ' residential plots, touching the tarmac with good security, water and electricity', 'IMG-20221214-WA0005.jpg', 'jpg', 'featured', 'products', 'pr64f734a8e44c3', 'Naivasha', '100*100', '2023-09-13', '15:25:17.0'),
(228, 'Test Property', 400000, ' residential plots, touching the tarmac with good security, water and electricity', 'land 4 (1).jpg', 'jpg', 'featured', 'products', 'pr64f734a8e44c3', 'Naivasha', '100*100', '2023-09-13', '15:25:17.0'),
(229, 'Test Property', 400000, ' residential plots, touching the tarmac with good security, water and electricity', 'IMG_20230104_121438.jpg', 'jpg', 'featured', 'products', 'pr64f734a8e44c3', 'Naivasha', '100*100', '2023-09-13', '15:46:23.0');

-- --------------------------------------------------------

--
-- Table structure for table `soldout`
--

CREATE TABLE `soldout` (
  `id` int(20) NOT NULL,
  `propertyId` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `gallery` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ext` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `category`, `gallery`, `image`, `ext`, `Date`, `Time`) VALUES
(19, 'projects', 'pic', 'TULIA GARDENS-MATUU (8).jpg', 'jpg', '2022-12-19', '08:28:49.000000'),
(20, 'site visits', 'pic', 'IMG-20221101-WA0001.jpg', 'jpg', '2023-01-04', '09:03:58.000000'),
(21, 'site visits', 'pic', 'IMG-20221101-WA0000.jpg', 'jpg', '2023-01-04', '09:04:20.000000'),
(22, 'site visits', 'pic', 'DSC_3034.jpg', 'jpg', '2023-01-04', '09:05:04.000000'),
(23, 'projects', 'pic', 'IMG-20220708-WA0014.jpg', 'jpg', '2023-01-06', '09:50:25.000000'),
(24, 'projects', 'pic', 'IMG-20220708-WA0011.jpg', 'jpg', '2023-01-06', '09:50:59.000000'),
(25, 'projects', 'pic', 'IMG-20220708-WA0016.jpg', 'jpg', '2023-01-06', '09:51:38.000000'),
(26, 'projects', 'pic', 'IMG-20220221-WA0003-1.jpg', 'jpg', '2023-01-06', '09:53:12.000000'),
(27, 'others', 'pic', 'BMP_6312 (1).jpg', 'jpg', '2023-05-04', '06:11:52.000000'),
(28, 'projects', 'pic', 'BMP_6378.jpg', 'jpg', '2023-05-04', '06:13:26.000000'),
(29, 'projects', 'pic', 'BMP_6334.jpg', 'jpg', '2023-05-04', '06:21:33.000000'),
(30, 'others', 'pic', 'BMP_6320.jpg', 'jpg', '2023-05-23', '06:09:21.000000');

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
  `vtime` time(1) NOT NULL,
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
(2, 'test', 'male', 'Nairobi', '0796526231', 'test@gmail.com', 'Test', '0796526231', 'test@gmail.com', 'Mon', '00:00:00.0', 'test', 'on', 'on', '2024-06-21', '16:40:56.0');

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `callrequests`
--
ALTER TABLE `callrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soldout`
--
ALTER TABLE `soldout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `callrequests`
--
ALTER TABLE `callrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `soldout`
--
ALTER TABLE `soldout`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;