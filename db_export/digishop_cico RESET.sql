-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 12:03 PM
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
  `user_id` bigint(20) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `starting_location` varchar(256) NOT NULL,
  `ending_location` varchar(256) NOT NULL,
  `km_traveled` bigint(20) NOT NULL,
  `date_traveled` date NOT NULL,
  `date_submitted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `time_tracking`
--

CREATE TABLE `time_tracking` (
  `id` bigint(255) NOT NULL,
  `user_id` bigint(255) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `is_admin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `isActive` varchar(20) NOT NULL,
  `onBreak` varchar(20) NOT NULL,
  `entryDateTime` varchar(30) NOT NULL,
  `exitDateTime` varchar(255) NOT NULL,
  `breakStart` varchar(30) NOT NULL,
  `breakEnd` varchar(30) NOT NULL,
  `breakTime` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD KEY `id` (`user_id`) USING BTREE;

--
-- Indexes for table `time_tracking`
--
ALTER TABLE `time_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `name` (`name`),
  ADD KEY `surname` (`surname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
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
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mileage_allowance`
--
ALTER TABLE `mileage_allowance`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_tracking`
--
ALTER TABLE `time_tracking`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
