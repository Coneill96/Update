-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 08:32 PM
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
  `p_e_d` date NOT NULL COMMENT 'preferred extension date'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`ass_id`, `ass_name`, `due_date`, `preferred_outcome`, `p_e_d`) VALUES
(2, 'Maths test', '2018-03-15', 'Another assessment oppurtunity', '2018-03-15'),
(3, 'programming', '2018-03-16', 'Extension of Deadline', '2018-03-18'),
(4, 'computer technologies', '2018-03-22', 'Deferred placement', '2018-03-24'),
(5, 'Programming III', '2018-03-20', 'Extension of Deadline', '2018-03-29'),
(9, 'programming III', '2018-04-11', 'Extension of Deadline', '2018-04-21'),
(12, 'Maths', '2018-04-11', 'Extension of Deadline', '2018-04-14'),
(13, 'Software Development', '2018-04-19', 'Extension of Deadline', '2018-04-20'),
(14, 'Software systems', '2018-04-11', 'Deferred placement', '2018-04-19'),
(15, 'Computing ', '2018-04-12', 'Extension of Deadline', '2018-04-21'),
(16, 'Software systems', '2018-04-12', 'Extension of Deadline', '2018-04-20'),
(17, 'Healthcare', '2018-04-12', 'Extension of Deadline', '2018-04-21'),
(18, 'Maths', '2018-04-18', 'Extension of Deadline', '2018-04-14'),
(39, 'Maths', '2018-04-18', 'Extension of Deadline', '2018-04-20'),
(40, 'Maths', '2018-04-18', 'Extension of Deadline', '2018-04-20'),
(41, 'Maths', '2018-04-18', 'Extension of Deadline', '2018-04-20'),
(42, 'Maths', '2018-04-18', 'Extension of Deadline', '2018-04-20'),
(43, 'Maths', '2018-04-11', 'Deferred placement', '2018-04-18'),
(46, 'Computing and Law', '2018-04-12', 'Extension of Deadline', '2018-04-22'),
(47, 'Software management', '2018-04-18', 'Extension of Deadline', '2018-04-18'),
(48, 'Software Management II', '2018-04-18', 'Extension of Deadline', '2018-04-27'),
(49, 'Software Development', '2018-04-05', 'Extension of Deadline', '2018-04-19'),
(50, 'Software Development', '2018-04-19', 'Extension of Deadline', '2018-04-20'),
(51, 'Software Development ', '2018-04-11', 'Another assessment oppurtunity', '2018-04-12'),
(52, 'computer technologies', '2018-04-26', 'Extension of Deadline', '2018-04-20'),
(53, 'Maths ', '2018-04-26', 'Extension of Deadline', '2018-04-20'),
(54, 'Maths ', '2018-04-11', 'Extension of Deadline', '2018-04-14'),
(55, 'Maths', '2018-04-05', 'Extension of Deadline', '2018-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `reason_for_request`
--

CREATE TABLE `reason_for_request` (
  `rfr_id` int(5) NOT NULL COMMENT 'reason for request',
  `d_o_c` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'details of claim',
  `d_a_f` date NOT NULL COMMENT 'dates affected from',
  `d_a_t` date NOT NULL COMMENT 'dates affected to',
  `evidence` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'evidence',
  `Statement` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reason_for_request`
--

INSERT INTO `reason_for_request` (`rfr_id`, `d_o_c`, `d_a_f`, `d_a_t`, `evidence`, `Statement`) VALUES
(5, 'I was sick', '2018-04-13', '2018-04-28', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I would appreciate the extension'),
(6, 'I was sick', '2018-04-13', '2018-04-28', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I would appreciate the extension'),
(7, 'I was sick', '2018-04-13', '2018-04-28', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I would appreciate the extension'),
(9, 'I was unwell and unable to attend', '2018-04-27', '2018-05-10', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I hope to be back next week'),
(10, 'I broke my wrist', '2018-04-20', '2018-04-19', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I broke my wrist'),
(11, 'Car broke down', '2018-04-20', '2018-04-20', 'C:\\fakepath\\ToalsBookmakers.pdf', 'The engine blew'),
(12, 'Slept in', '2018-04-12', '2018-04-19', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I slept in'),
(13, 'There was a car crash', '2018-04-14', '2018-04-26', 'C:\\fakepath\\ToalsBookmakers.pdf', 'It disrupted the road to University'),
(15, 'Funeral', '2018-04-12', '2018-04-19', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I could not attend'),
(37, 'hbdchd', '2018-04-12', '2018-04-19', 'C:\\fakepath\\Self declaration.pdf', 'vjsdnvkjb'),
(38, 'hbdchd', '2018-04-12', '2018-04-19', 'C:\\fakepath\\Self declaration.pdf', 'vjsdnvkjb'),
(43, 'I broke my wrist', '2018-04-12', '2018-04-13', 'C:\\fakepath\\ToalsBookmakers.pdf', 'I hope to be able to write in 6 - 8 weeks'),
(44, 'I hurt my self ', '2018-04-12', '2018-04-12', 'C:\\fakepath\\Scannedev.pdf', 'I hurt my self'),
(45, 'sssss', '2018-04-19', '2018-04-20', 'C:\\fakepath\\filename-1.pdf', 'resr');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(5) NOT NULL COMMENT 'request reference',
  `submission_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'creation date of request',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `user_id` int(5) UNSIGNED NOT NULL,
  `ass_id` int(5) NOT NULL,
  `rfr_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `submission_date`, `status`, `user_id`, `ass_id`, `rfr_id`) VALUES
(18, '2018-04-14 15:48:39', 'Accepted', 14, 40, 37),
(19, '2018-04-14 15:48:55', 'Accepted', 14, 41, 38),
(20, '2018-04-19 17:19:38', 'Pending', 25, 46, 43),
(21, '2018-04-23 12:07:23', 'Accepted', 14, 54, 44),
(22, '2018-04-23 19:24:09', 'Pending', 14, 55, 45);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) UNSIGNED NOT NULL COMMENT 'User Id',
  `Username` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User username',
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User password',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User email',
  `reg_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Time and date of registration',
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Users Table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `Username`, `password`, `email`, `reg_time`, `first_name`, `surname`, `role`) VALUES
(14, 'B00659788', '$2y$10$M5aYKiqlNJNmhNlU7DbXxOfxELyAZkWQZ9qataw4lScSr62XdKssS', 'ONeill-C98@ulster.ac.uk', '2018-03-28 20:31:24', 'Christopher', 'O\'Neill', 'user'),
(15, 'B00655487', '$2y$10$6Ceo9uZ8bJkvx798TuebVeaSfxHgOGdgbFMtaGOGmq/xk8N8Hxk7G', 'levinaoneill@hotmail.co.uk', '2018-03-28 21:30:05', 'Levina', 'O\'Neill', 'user'),
(19, 'B00659700', '$2y$10$KYfqpHk0iRiE9VeaP4K.0uLJ6zIToMhgI2RwlNPwfKKd4BTjlYGqy', 'Millar-J20@ulster.ac.uk', '2018-03-30 11:46:42', 'John', 'Millar', 'user'),
(20, 'B00659711', '$2y$10$bVlt/MpEaET0fPLc8DfRBOsvkiWEpR3g4koJyQ360W6nZ8RWEBb3W', 'paddysally@ulster.ac.uk', '2018-03-30 11:48:16', 'Paddy ', 'Sally', 'user'),
(21, 'B00659713', '$2y$10$313zJsNewvS7jtryDttcr.f7SBvBu.6iBtLDfQE9zR9utcwRThZwq', 'markdonelly@gmail.com', '2018-04-01 15:48:44', 'Mark', 'Donnelly', 'user'),
(23, 'B00659722', '$2y$10$RQB.Q82KgteGtLfsQ4L7COWV1lDBZlZbkG1g3Rl2P0rNPLFKagEZa', 'ONeillC12@ulster.ac.uk', '2018-04-01 16:03:49', 'Claire', 'ONeill', 'user'),
(24, 'B00548677', '$2y$10$bBqD2DWZpfPabtkZ1HECZuq75Fw2Vv2v7FqaS6c7eU9RxgZyKXbkq', 'seancasey@ulster.ac.uk', '2018-04-14 13:40:13', 'Sean', 'Casey', 'user'),
(25, 'B00456782', '$2y$10$zN/SCNpgbAqoefq5to7MCOcMPPUKM3/E8noPPJcV/FUYNmOYfGciC', 'conormcnicholl@ulster.ac.uk', '2018-04-19 16:18:33', 'Conor', 'Mcnicholl', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessment`
--
ALTER TABLE `assessment`
  ADD PRIMARY KEY (`ass_id`);

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
  ADD KEY `ass_id` (`ass_id`),
  ADD KEY `rfr_id` (`rfr_id`);

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
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `reason_for_request`
--
ALTER TABLE `reason_for_request`
  MODIFY `rfr_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'reason for request', AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'request reference', AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'User Id', AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`ass_id`) REFERENCES `assessment` (`ass_id`),
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`rfr_id`) REFERENCES `reason_for_request` (`rfr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
