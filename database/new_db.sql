-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 07:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `otp_expiry`
--

CREATE TABLE `otp_expiry` (
  `id` int(11) NOT NULL,
  `otp` int(10) NOT NULL,
  `is_expired` int(10) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp_expiry`
--

INSERT INTO `otp_expiry` (`id`, `otp`, `is_expired`, `create_at`) VALUES
(1, 1523, 1, '2022-02-11 21:29:26'),
(2, 7203, 0, '2022-02-11 21:35:55'),
(3, 4633, 1, '2022-02-11 21:36:59'),
(4, 3310, 1, '2022-02-12 11:42:11'),
(5, 1822, 1, '2022-02-15 11:39:51'),
(6, 8189, 1, '2022-02-17 20:15:49'),
(7, 5493, 1, '2022-02-17 20:18:23'),
(8, 6429, 0, '2022-02-18 10:44:38'),
(9, 5019, 1, '2022-02-18 10:44:40'),
(10, 6084, 1, '2022-02-18 11:25:34'),
(11, 4100, 1, '2022-02-18 11:30:57'),
(12, 9490, 1, '2022-02-19 10:47:50'),
(13, 8883, 1, '2022-02-19 11:12:08'),
(14, 9659, 1, '2022-02-19 11:15:29'),
(15, 7681, 1, '2022-02-19 11:18:34'),
(16, 5747, 1, '2022-02-19 11:23:05'),
(17, 9537, 0, '2022-02-19 11:25:25'),
(18, 9210, 1, '2022-02-19 11:34:30'),
(19, 5797, 1, '2022-02-19 11:35:34'),
(20, 6338, 1, '2022-02-19 11:40:18'),
(21, 3797, 1, '2022-02-19 11:43:13'),
(22, 5720, 1, '2022-02-19 11:45:24'),
(23, 9305, 1, '2022-02-19 11:46:56'),
(24, 1440, 1, '2022-02-19 11:48:06'),
(25, 5583, 1, '2022-02-19 11:57:54'),
(26, 5518, 1, '2022-02-19 12:00:39'),
(27, 8802, 1, '2022-02-19 12:03:19'),
(28, 8953, 0, '2022-02-19 12:05:07'),
(29, 8248, 1, '2022-02-19 12:05:07'),
(30, 5106, 1, '2022-02-19 16:45:54'),
(31, 1926, 1, '2022-02-19 16:48:59'),
(32, 2517, 1, '2022-02-19 16:50:57'),
(33, 4082, 1, '2022-02-19 16:53:35'),
(34, 6826, 0, '2022-02-19 16:53:40'),
(35, 4102, 0, '2022-02-19 17:38:05'),
(36, 9518, 1, '2022-02-19 17:53:38'),
(37, 6763, 0, '2022-02-19 17:55:36'),
(38, 1937, 1, '2022-02-21 10:29:47'),
(39, 3075, 1, '2022-02-21 11:01:19'),
(40, 8067, 1, '2022-02-21 11:05:52'),
(41, 1508, 1, '2022-02-21 11:53:57'),
(42, 9594, 1, '2022-02-21 11:56:23'),
(43, 6263, 1, '2022-02-21 11:58:20'),
(44, 3241, 1, '2022-02-21 11:59:20'),
(45, 2272, 1, '2022-02-21 12:17:51'),
(46, 7603, 1, '2022-02-21 12:22:03'),
(47, 9155, 1, '2022-02-21 12:23:50'),
(48, 2861, 1, '2022-02-21 12:29:14'),
(49, 4537, 1, '2022-02-21 12:31:52'),
(50, 2382, 1, '2022-02-21 12:33:09'),
(51, 7965, 1, '2022-02-21 12:34:45'),
(52, 4368, 1, '2022-02-21 12:42:32'),
(53, 9843, 1, '2022-02-21 12:50:59'),
(54, 7013, 1, '2022-02-21 12:57:02'),
(55, 6326, 0, '2022-02-21 13:04:09'),
(56, 5759, 0, '2022-02-21 13:04:31'),
(57, 7649, 0, '2022-02-21 13:06:55'),
(58, 6875, 1, '2022-02-21 13:36:29'),
(59, 6714, 1, '2022-02-21 13:37:28'),
(60, 9060, 1, '2022-02-21 13:41:14'),
(61, 9828, 1, '2022-02-21 13:44:48'),
(62, 6209, 0, '2022-02-21 13:47:09'),
(63, 7614, 1, '2022-02-21 17:58:19'),
(64, 8582, 1, '2022-02-21 18:01:05'),
(65, 1203, 0, '2022-02-21 18:01:37'),
(66, 2980, 1, '2022-02-21 18:06:35'),
(67, 3035, 1, '2022-02-21 18:08:16'),
(68, 9987, 1, '2022-02-21 18:11:14'),
(69, 1912, 1, '2022-02-21 18:12:35'),
(70, 6483, 1, '2022-02-21 18:16:19'),
(71, 1081, 1, '2022-02-21 18:27:30'),
(72, 2687, 1, '2022-02-21 18:33:45'),
(73, 2801, 1, '2022-02-21 19:05:28'),
(74, 5480, 1, '2022-02-21 19:17:07'),
(75, 3941, 1, '2022-02-21 19:27:05'),
(76, 8463, 1, '2022-02-21 19:49:07'),
(77, 9719, 1, '2022-02-21 19:52:59'),
(78, 9069, 1, '2022-02-21 20:01:24'),
(79, 8498, 1, '2022-02-21 20:26:41'),
(80, 3870, 1, '2022-02-21 20:27:10'),
(81, 3896, 1, '2022-02-21 20:32:14'),
(82, 5144, 1, '2022-02-22 11:39:53'),
(83, 9928, 1, '2022-02-22 17:57:21'),
(84, 2307, 1, '2022-02-22 21:16:58'),
(85, 5266, 1, '2022-02-23 10:35:26'),
(86, 5794, 0, '2022-02-23 11:31:10'),
(87, 3302, 1, '2022-02-23 11:31:53'),
(88, 2870, 0, '2022-02-23 12:55:40'),
(89, 4396, 1, '2022-02-23 17:34:49'),
(90, 2562, 1, '2022-02-23 17:36:49'),
(91, 8450, 1, '2022-02-23 19:30:45'),
(92, 5555, 1, '2022-02-23 19:33:25'),
(93, 1117, 1, '2022-02-23 19:33:46'),
(94, 2361, 1, '2022-02-23 20:16:59'),
(95, 9012, 1, '2022-02-23 20:18:58'),
(96, 3856, 1, '2022-03-03 12:26:28'),
(97, 3538, 0, '2022-03-03 13:05:45'),
(98, 7492, 1, '2022-03-03 17:56:01'),
(99, 7878, 1, '2022-03-03 18:06:50'),
(100, 2636, 1, '2022-03-03 18:13:01'),
(101, 7634, 1, '2022-03-03 19:09:50'),
(102, 1618, 1, '2022-03-03 19:44:52'),
(103, 8197, 0, '2022-03-03 19:52:02'),
(104, 7616, 1, '2022-03-03 19:53:51'),
(105, 7206, 1, '2022-03-03 19:54:55'),
(106, 3101, 1, '2022-03-03 21:51:48'),
(107, 5617, 1, '2022-03-04 10:02:31'),
(108, 2497, 1, '2022-03-04 10:05:46'),
(109, 9370, 1, '2022-03-04 10:08:11'),
(110, 4911, 1, '2022-03-04 10:23:16'),
(111, 6115, 1, '2022-03-04 10:23:44'),
(112, 8764, 1, '2022-03-04 10:58:42'),
(113, 1022, 1, '2022-03-04 11:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` enum('Select','Male','Female') NOT NULL,
  `dob` date NOT NULL,
  `contact` int(11) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `aadhaar` int(12) NOT NULL,
  `vaccineused` enum('Not Vaccinated','covishield','covaxin') NOT NULL,
  `vaccinationtype` enum('Not Vaccinated','1st Dose','2nd Dose') NOT NULL,
  `dateofvaccination` date NOT NULL,
  `dose2` date NOT NULL,
  `vaccinatedby` varchar(255) NOT NULL,
  `status` enum('Not Vaccinated','Partially Vaccinated','Fully Vaccinated') NOT NULL,
  `vaccinelocation` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `contact`, `emailadd`, `address`, `aadhaar`, `vaccineused`, `vaccinationtype`, `dateofvaccination`, `dose2`, `vaccinatedby`, `status`, `vaccinelocation`, `remark`) VALUES
(3, 'Suraksha', 'K', 'Moolya', 'Female', '2012-03-13', 985746321, 'surakshamoolya77@gmail.com', 'pune', 2147483647, 'covaxin', '2nd Dose', '0000-00-00', '0000-00-00', 'Dr. zety', 'Fully Vaccinated', 'Vaccine Area 104, Dadar,Mumbai.', 'Good'),
(25, 'Demo', 'K', 'M', 'Female', '2009-06-11', 985746321, 'moolyasuraksha77@gmail.com', 'Pune', 2147483647, 'covaxin', '1st Dose', '2022-02-01', '2022-03-18', 'Dr. Ramesh', 'Partially Vaccinated', 'Pune', 'Good Experience');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `password`) VALUES
(4, 'Suraksha K Kulal', 'surakshamoolya77@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'Demo', 'moolyasuraksha77@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `otp_expiry`
--
ALTER TABLE `otp_expiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
