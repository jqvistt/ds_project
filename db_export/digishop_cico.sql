-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 04:42 PM
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

--
-- Dumping data for table `mileage_allowance`
--

INSERT INTO `mileage_allowance` (`id`, `user_id`, `name`, `surname`, `starting_location`, `ending_location`, `km_traveled`, `date_traveled`, `date_submitted`) VALUES
(1, 80443495973464965, 'Joakim', 'Lönnqvist', 'Arabia', 'Herttoniemi', 11, '2023-01-27', '2023-01-27 13:24:52'),
(2, 4634443, 'Jekku', 'Ahonen', 'Arabia', 'Digishop Herttoniemi', 11, '2023-01-18', '2023-01-27 21:45:19'),
(3, 4634443, 'Jekku', 'Ahonen', 'Arabianranta', 'Vuosaari', 45, '2023-02-02', '2023-01-30 13:53:59'),
(4, 8910534309924099, 'Joakim', 'Lönnqvist', 'Vuosaari', 'Arabia', 15, '2023-01-29', '2023-01-30 14:00:19'),
(5, 80443495973464965, 'Joakim', 'Lönnqvist', 'Vuosaari', 'Arabia', 15, '2023-01-12', '2023-01-30 16:13:24');

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
  `comments` varchar(300) NOT NULL,
  `files` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_tracking`
--

INSERT INTO `time_tracking` (`id`, `user_id`, `name`, `surname`, `entryDateTime`, `exitDateTime`, `breakStart`, `breakEnd`, `breakTime`, `comments`, `files`) VALUES
(1, 80443495973464965, 'Joakim', 'Lönnqvist', '27/01/2023, 13:23:27', '27/01/2023, 13:25:50', '13:24:04', '13:25:26', '00:01:22', '', ''),
(2, 80443495973464965, 'Joakim', 'Lönnqvist', '27/01/2023, 13:47:40', '27/01/2023, 18:07:48', '14:38:11', '15:00:08', '00:21:57', '', ''),
(3, 4634443, 'Jekku', 'Ahonen', '27/01/2023, 21:40:24', '27/01/2023, 21:42:55', '21:42:07', '21:42:13', '00:00:06', '', ''),
(4, 4634443, 'Jekku', 'Ahonen', '30/01/2023, 13:02:18', '30/01/2023, 13:53:24', '13:53:05', '13:53:18', '00:00:13', '', ''),
(5, 8910534309924099, 'Joakim', 'Lönnqvist', '30/01/2023, 13:59:58', '30/01/2023, 14:00:46', '14:00:35', '14:00:41', '00:00:06', '', ''),
(6, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 15:03:59', '30/01/2023, 15:04:03', '', '', '', '', ''),
(7, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 15:05:11', '30/01/2023, 15:05:21', '', '', '', '', ''),
(8, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 15:35:59', '30/01/2023, 15:36:40', '15:36:24', '15:36:33', '00:00:09', '', ''),
(9, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 15:41:53', '30/01/2023, 16:04:38', '', '', '', '', ''),
(10, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 16:04:54', '30/01/2023, 16:05:05', '16:04:57', '16:05:01', '00:00:04', '', ''),
(11, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 16:13:01', '30/01/2023, 16:13:49', '16:13:28', '16:13:35', '00:00:07', '', ''),
(12, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 17:05:35', '30/01/2023, 17:05:36', '', '', '', '', ''),
(13, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 17:09:29', '30/01/2023, 17:09:30', '', '', '', '', ''),
(14, 80443495973464965, 'Joakim', 'Lönnqvist', '30/01/2023, 18:32:11', '30/01/2023, 18:32:34', '18:32:21', '18:32:28', '00:00:07', '', '');

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

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `username`, `name`, `surname`, `email`, `password`, `date`, `is_admin`) VALUES
(1, 80443495973464965, 'lonnjoa', 'Joakim', 'Lönnqvist', 'Joakim.is.lonnqvist@gmail.com', '$2y$10$RvEMQoK.8b5.wjFz7CrgouLd12SSGbEGdkwATPqESr09kEDM8ECO.', '2023-01-27 13:22:51', 1),
(2, 88287365735011, 'trypzo', 'Joakim', 'Lönnqvist', 'Joakim.is.lonnqvist@gmail.com', '$2y$10$GqD8cUP4giSAA5O9jJl4Q.ENm9EWGJ/./kUu0hd8KS6c46q8pxGoW', '2023-01-27 14:10:18', 0),
(3, 4634443, 'jekku43', 'Jekku', 'Ahonen', 'jekku.ahonen@gmail.com', '$2y$10$QFQGb2JJ7kUh18HvDDIAe.Neaam7T2sRZ64TnFUAXaKJFSRWidDBu', '2023-01-27 21:36:00', 1),
(4, 8910534309924099, 'joakim.lonnqvist', 'Joakim', 'Lönnqvist', 'juki.lonnqvist@gmail.com', '$2y$10$5V1VrbLKd9.lR1DDQkGUEuXCIrpoaQ5emHwkWvDnZgSDPXSivgCNK', '2023-01-30 13:59:41', 0);

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
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `user_id`, `isActive`, `onBreak`, `entryDateTime`, `exitDateTime`, `breakStart`, `breakEnd`, `breakTime`) VALUES
(1, 80443495973464965, 'true', 'false', '30/01/2023, 19:59:25', '', '12:09:42', '14:28:51', '02:19:09'),
(7, 88287365735011, 'false', 'false', '', '', '', '', ''),
(11, 4634443, 'false', 'false', '', '', '', '', ''),
(27, 8910534309924099, 'false', 'false', '', '', '', '', '');

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
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `time_tracking`
--
ALTER TABLE `time_tracking`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
