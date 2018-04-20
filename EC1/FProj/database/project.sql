-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 10:29 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

CREATE TABLE `assessment` (
  `ass_id` int(11) NOT NULL,
  `ass_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `due_date` date NOT NULL COMMENT 'date assignment was due',
  `preferred_outcome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_e_d` date NOT NULL COMMENT 'preferred extension date',
  `request_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reason_for_request`
--

CREATE TABLE `reason_for_request` (
  `rfr_id` int(5) NOT NULL COMMENT 'reason for request',
  `d_o_c` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'details of claim',
  `d_a_f` date NOT NULL COMMENT 'dates affected from',
  `d_a_t` date NOT NULL COMMENT 'dates affected to',
  `evidence` blob NOT NULL COMMENT 'evidence'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(5) NOT NULL COMMENT 'request reference',
  `create_date` date NOT NULL COMMENT 'creation date of request',
  `sub_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'submission date',
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) UNSIGNED NOT NULL COMMENT 'User Id',
  `Username` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User username',
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User password',
  `email` int(250) NOT NULL COMMENT 'User email',
  `reg_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time and date of registration',
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Users Table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Username`, `password`, `email`, `reg_time`, `first_name`, `last_name`) VALUES
(1, 'B00659788', '$2y$10$x0Xf8Vzm5zbHPq2my1c8TufQUf/GXcT1Bb7PFcMeAbBL5FxcML0x.', 0, '2018-03-14 11:52:10', '', ''),
(2, 'B00659789', '$2y$10$UjLKUVR9B2vdCL2pQtpbiufXPCHya8lMss11gpHZPSIbg1qAdrcOG', 0, '2018-03-14 11:55:28', '', ''),
(3, 'B00659785', '$2y$10$6TPeSODK91fFKz.1cpFGJeYu2r7v/WMYL88oI3HgaYEeE7lgCsJXu', 0, '2018-03-14 12:01:33', '', ''),
(4, 'B00659786', '$2y$10$Qs60LSjYwfXUbiUoQG7xau9.hCUpo/P0P/lXFBKZhcAWfd957dY3S', 0, '2018-03-16 11:14:08', '', ''),
(5, 'B00659781', '$2y$10$gbZaXv2EFdkconMqVRJ3y.CrV9Bj.l8of2PDz9ywKg1vWQK7OjamK', 0, '2018-03-21 18:47:07', '', ''),
(6, 'B00654356', '$2y$10$keZXfor3kNmwJzMY2QLKnebU6jgZsUgAmtOH68xUjCL3wthvTlJ82', 0, '2018-03-22 16:44:19', '', ''),
(7, 'B00659780', '$2y$10$Veb2k7RSNv2dh6rQrW9Dn.Pvpdcb7yZiDtCQJMP4bbCBpPf.4OWsu', 0, '2018-03-22 16:54:50', '', ''),
(8, 'B00653456', '$2y$10$yw0FnKD8a7KxNU7LX8x1Vev/cvs38Z7f9uHI6VloFvqV2XJUPbtPe', 0, '2018-03-22 17:04:56', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`ass_id`),
  ADD UNIQUE KEY `request_id` (`request_id`);

--
-- Indexes for table `reason_for_request`
--
ALTER TABLE `reason_for_request`
  ADD PRIMARY KEY (`rfr_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessment`
--
ALTER TABLE `assessment`
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reason_for_request`
--
ALTER TABLE `reason_for_request`
  MODIFY `rfr_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'reason for request';

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'request reference';

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User Id', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
