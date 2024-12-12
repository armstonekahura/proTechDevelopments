-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 12, 2024 at 12:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proTechDevelopments`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `service` varchar(100) NOT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `service`, `details`, `created_at`) VALUES
(1, 'Armstone ', 'armstonekahura@gmail.com', 'web_app', 'ddad', '2024-12-01 18:12:20'),
(2, 'Ar', 'quakerlays@gmail.com', 'mobile_app', 'qwertyui', '2024-12-02 07:54:16'),
(3, 'collins', 'c@gmail.com', 'cctv', 'umbwa', '2024-12-02 09:22:03'),
(4, 'Jack', 'jack@gmail.com', 'mobile_app', 'qwertyu', '2024-12-02 09:25:54'),
(7, 'Armstone ', 'wafulawisaac27@gmail.com', 'mobile_app', 'erer', '2024-12-02 20:11:16'),
(8, 'fde', 'c@gmail.com', 'web_app', 'sd', '2024-12-03 03:44:20'),
(9, 'Armstone ', 'armstonekahura@gmail.com', 'web_app', 'dhd', '2024-12-03 04:18:42'),
(10, 'Armstone ', 'armstonekahura@gmail.com', 'mobile_app', 'gfg', '2024-12-03 04:21:36'),
(11, 'sdf', 'c@gmail.com', 'web_app', 'sd', '2024-12-03 04:25:51'),
(12, 'sdf', 'c@gmail.com', 'web_app', 'sd', '2024-12-03 04:28:13'),
(13, 'fde', 'c@gmail.com', 'web_app', 'ad', '2024-12-03 04:33:03'),
(14, 'sdf', 'wafulawisaac27@gmail.com', 'mobile_app', 'd', '2024-12-03 04:46:43'),
(15, 'sdf', 'wafulawisaac27@gmail.com', 'mobile_app', 'd', '2024-12-03 04:50:06'),
(16, 'Armstone ', 'armstonekahura@gmail.com', 'web_app', 'hja', '2024-12-03 07:50:43'),
(17, 'sdf', 'armstonedeveloper@gmail.com', 'cctv', 'rw', '2024-12-03 07:54:53'),
(18, 'Armstone ', 'wafulawisaac27@gmail.com', 'web_app', 'wweb', '2024-12-03 08:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
