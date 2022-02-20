-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 11:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour&travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(191) NOT NULL,
  `meta_description` mediumtext DEFAULT NULL,
  `meta_keyword` mediumtext DEFAULT NULL,
  `navbar_status` tinyint(1) DEFAULT 0,
  `status` tinyint(1) DEFAULT 0 COMMENT '0=VISIBLE,1=HIDDEN,2=DELETED',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `meta_title`, `meta_description`, `meta_keyword`, `navbar_status`, `status`, `created_at`) VALUES
(1, 'Asia', 'Asia-url', 'Asia', 'Asia', 'Asia', 'Asia', 0, 0, '2022-02-08 18:46:16'),
(2, 'America', 'America', 'America', 'America', 'America', 'America', 0, 0, '2022-02-08 21:41:59'),
(3, 'Africa', 'Africa', 'Africa', 'Africa', 'Africa', 'Africa', 0, 0, '2022-02-10 15:25:53'),
(4, 'Europe', 'Europe', 'Europe', 'Europe', 'Europe', 'Europe', 0, 0, '2022-02-11 15:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`) VALUES
(15, 1, '21 days Thailand, Laos, Vietnam & Cambodia', 'Start in Bangkok and end in Siem Reap! With the In-depth Cultural tour 21 days Thailand, Laos, Vietnam & Cambodia, you have a 21 days tour package taking you through Bangkok, Thailand and 14 other destinations in Asia. 21 days Thailand, Laos, Vietnam & Cambodia includes accommodation in a hotel as well as flights, an expert guide, meals, transport and more.\r\n', '1644696567.jpg', 0, '2022-02-12 20:09:27'),
(16, 1, 'Cambodia: Ancient Ruins & Boat Rides', 'Start in Bangkok and end in Siem Reap! With the In-depth Cultural tour 21 days Thailand, Laos, Vietnam & Cambodia, you have a 21 days tour package taking you through Bangkok, Thailand and 14 other destinations in Asia. 21 days Thailand, Laos, Vietnam & Cambodia includes accommodation in a hotel as well as flights, an expert guide, meals, transport and more.', '1644696607.jpg', 0, '2022-02-12 20:10:07'),
(17, 1, 'Japan One Life Adventures - 10 Days', 'Start in Tokyo and end in Osaka! With the Explorer tour Japan One Life Adventures - 10 Days, you have a 10 days tour package taking you through Tokyo, Japan and 4 other destinations in Japan. Japan One Life Adventures - 10 Days includes accommodation, an expert guide, meals, transport and more.\r\nExpan', '1644696639.jpg', 0, '2022-02-12 20:10:39'),
(18, 2, 'A Week in Belize: Ruins, Reefs & Rainfore', 'Nestled along the Caribbean Sea in the northeastern corner of Central America sits a ', '1644697695.webp', 0, '2022-02-12 20:24:53'),
(19, 2, 'U.S. National Parks: The Grand Canyon to Yellowstone', 'Follow in the footsteps of the explorers on this U.S. national parks tour. Each day displays a new destination, and with it new landscapes and adventures. Explore the mysterious cliff dwellings of Mesa Verde, gaze into the depths of the Grand Canyon, and stand in the shadow of the Grand Tet', '1644697823.webp', 0, '2022-02-12 20:29:33'),
(20, 2, 'Alaska’s National Parks: Denali & the Kenai Fjords', 'Majestic glaciers, unique wildlife, and pristine views do justice to Alaska’s nickname as the Last Frontier. Learn about the history of famous traditions like the Iditarod,', '1644697906.webp', 0, '2022-02-12 20:31:46'),
(21, 3, 'Drive & fly back safari Serengeti', '3 Days – The quickest way to cross the Serengeti by car, with Tarangire as a bonus and an even quicker trip back to Arusha by air', '1644697981.jpg', 0, '2022-02-12 20:33:01'),
(22, 3, 'Classic Drive Safari Tarangire Manyara', '2 Days – A private and guided safari teaser; 2 National Parks and just one overnight give you an insight into what safari life is all about', '1644698028.jpg', 0, '2022-02-12 20:33:48'),
(23, 3, 'Classic Drive Safari Tarangire & Ngorongoro Crater', '2 Days – One night and two safari game drives are possible with this amazing getaway visiting Tarangire and the Ngorongoro Crater', '1644698061.jpg', 0, '2022-02-12 20:34:21'),
(24, 4, 'Semi-Private Colosseum Underground Tour with Roman Forum & Gladiator Arena', 'On this semi-private Colosseum underground tour of 10 people or fewer, you can experience this historic Rome icon to the fullest with access to areas that are typically closed to the public—the underground chambers', '1644698138.jpg', 0, '2022-02-12 20:35:38'),
(25, 4, 'Skip the Line Ticket: Eiffel Tower Summit Priority Access with Host', 'Bypass the long lines at the Eiffel Tower with this tour that includes summit access. After fast track, skip-the-line access, proceed to the second level to survey the city from the viewing', '1644698187.jpg', 0, '2022-02-12 20:36:27'),
(26, 4, 'Stonehenge, Windsor Castle and Bath with Pub Lunch in Lacock', 'Avoid the hassle of renting a car to see rural England’s highlights with help from this full-day tour which includes round-trip transport from London. ', '1644698239.jpg', 0, '2022-02-12 20:37:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role_as`, `status`, `created_at`) VALUES
(1, 'Arti', 'Shala', 'artishala7@gmail.com', 'artishala', 1, 0, '2022-02-03 20:39:40'),
(3, 'Titan', 'Shala', 'titanshala@gmail.com', 'titanshala', 0, 0, '2022-02-04 15:03:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
