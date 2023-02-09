-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2023 at 09:24 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digishop_cico`
--

-- --------------------------------------------------------

--
-- Table structure for table `mileage_allowance`
--

CREATE TABLE `mileage_allowance` (
  `id` bigint(255) NOT NULL,
  `uuid` varchar(36) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `starting_location` varchar(256) NOT NULL,
  `ending_location` varchar(256) NOT NULL,
  `km_traveled` bigint(20) NOT NULL,
  `date_traveled` date NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mileage_allowance`
--

INSERT INTO `mileage_allowance` (`id`, `uuid`, `name`, `surname`, `starting_location`, `ending_location`, `km_traveled`, `date_traveled`, `date_submitted`) VALUES
(1, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'Joakim', 'Lönnqvist', 'sadsad', 'adsasd', 11, '2023-02-14', '2023-02-02 14:37:04'),
(2, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'Joakim', 'Lönnqvist', 'Digishop Arabia, Hämeentie, Helsinki, Finland', 'Digishop Herttoniemi, Linnanrakentajantie, Helsinki, Finland', 15, '2023-02-01', '2023-02-02 15:42:20');

-- --------------------------------------------------------

--
-- Table structure for table `time_tracking`
--

CREATE TABLE `time_tracking` (
  `id` bigint(255) NOT NULL,
  `uuid` varchar(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `entryDateTime` varchar(255) NOT NULL,
  `exitDateTime` varchar(255) NOT NULL,
  `breakStart` varchar(255) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakEnd` varchar(255) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `breakTime` varchar(255) NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comments` varchar(300) DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_tracking`
--

INSERT INTO `time_tracking` (`id`, `uuid`, `name`, `surname`, `entryDateTime`, `exitDateTime`, `breakStart`, `breakEnd`, `breakTime`, `comments`, `files`) VALUES
(24, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'Joakim', 'Lönnqvist', '08/02/2023, 11:50:09', '08/02/2023, 11:50:10', '', '', '', 'No comments', NULL),
(25, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'Joakim', 'Lönnqvist', '08/02/2023, 12:53:44', '08/02/2023, 12:53:45', '', '', '', 'No comments', NULL),
(26, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'Joakim', 'Lönnqvist', '08/02/2023, 13:03:53', '08/02/2023, 13:04:44', '', '', '', 'No comments', NULL),
(27, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'Joakim', 'Lönnqvist', '08/02/2023, 13:07:17', '08/02/2023, 13:07:18', '', '', '', 'No comments', NULL),
(28, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'Joakim', 'Lönnqvist', '09/02/2023, 16:04:34', '09/02/2023, 16:04:37', '', '', '', 'No comments', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `uuid` varchar(36) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `username`, `name`, `surname`, `email`, `password`, `date`, `is_admin`) VALUES
(3, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'lonnjoa', 'Joakim', 'Lönnqvist', 'Joakim.is.lonnqvist@gmail.com', '$2y$10$i..NqAOYG2ehrTpSLqoEzOL/oMFsmn1ss71nUpK1raksvkJxHQoIO', '2023-02-02 13:45:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) NOT NULL,
  `uuid` varchar(36) NOT NULL,
  `isActive` varchar(20) NOT NULL,
  `onBreak` varchar(20) NOT NULL,
  `entryDateTime` varchar(30) NOT NULL,
  `exitDateTime` varchar(255) NOT NULL,
  `breakStart` varchar(30) NOT NULL,
  `breakEnd` varchar(30) NOT NULL,
  `breakTime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `uuid`, `isActive`, `onBreak`, `entryDateTime`, `exitDateTime`, `breakStart`, `breakEnd`, `breakTime`) VALUES
(3, '5c02788e-5926-4e54-ba1a-d7bf36f7e6cf', 'false', 'false', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mileage_allowance`
--
ALTER TABLE `mileage_allowance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `surname` (`surname`),
  ADD KEY `date_submitted` (`date_submitted`),
  ADD KEY `date_travelled` (`date_traveled`),
  ADD KEY `id` (`uuid`) USING BTREE;

--
-- Indexes for table `time_tracking`
--
ALTER TABLE `time_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`uuid`),
  ADD KEY `name` (`name`),
  ADD KEY `surname` (`surname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`uuid`),
  ADD KEY `name` (`name`),
  ADD KEY `surname` (`surname`),
  ADD KEY `surname_2` (`surname`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`),
  ADD KEY `date` (`date`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`uuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mileage_allowance`
--
ALTER TABLE `mileage_allowance`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `time_tracking`
--
ALTER TABLE `time_tracking`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
