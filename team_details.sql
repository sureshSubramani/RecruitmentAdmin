-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 01:02 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `id` int(11) NOT NULL,
  `personal_id` int(11) NOT NULL,
  `emp_id` varchar(55) NOT NULL,
  `biometric_id` varchar(55) NOT NULL,
  `offer_letter` tinyint(4) NOT NULL COMMENT '1 is Given pr 0 is Not Given',
  `no_due` tinyint(4) NOT NULL COMMENT '0 is Pending Due or 1 is No Due',
  `relieving_letter` int(4) NOT NULL COMMENT '1 is Given or 0 Not Given',
  `status` int(4) NOT NULL COMMENT '1 is Active or 0 is Deactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`id`, `personal_id`, `emp_id`, `biometric_id`, `offer_letter`, `no_due`, `relieving_letter`, `status`, `created_at`, `modified_at`) VALUES
(1, 1, '', '', 0, 0, 0, 1, '2019-12-13 12:39:18', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
