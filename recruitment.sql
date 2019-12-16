-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 12:59 PM
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
-- Table structure for table `achievement_details`
--

CREATE TABLE `achievement_details` (
  `personal_id` int(11) NOT NULL COMMENT 'track reference id by personal',
  `set_net` varchar(10) NOT NULL,
  `nat_journals` tinyint(4) NOT NULL,
  `int_journals` tinyint(4) NOT NULL,
  `sem_journals` tinyint(4) NOT NULL,
  `published_book` tinyint(4) NOT NULL,
  `known_languages` varchar(120) NOT NULL,
  `eng_read` varchar(10) NOT NULL,
  `eng_speak` varchar(10) NOT NULL,
  `eng_write` varchar(10) NOT NULL,
  `typing_tamil` varchar(10) NOT NULL,
  `typing_english` varchar(10) NOT NULL,
  `comp_knowledge` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievement_details`
--

INSERT INTO `achievement_details` (`personal_id`, `set_net`, `nat_journals`, `int_journals`, `sem_journals`, `published_book`, `known_languages`, `eng_read`, `eng_speak`, `eng_write`, `typing_tamil`, `typing_english`, `comp_knowledge`, `created_at`, `modified_at`) VALUES
(1, 'Yes', 1, 0, 2, 2, '', 'Read', 'Speak', 'Write', 'Higher', 'Higher', 'Yes', '2019-12-10 06:12:18', NULL),
(2, 'No', 1, 0, 3, 0, 'Tamil,English', 'Read', 'Speak', 'Write', 'Lower', 'Lower', 'Yes', '2019-12-10 06:19:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `roll_type_id` tinyint(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `roll_type_id`, `username`, `email`, `password`, `status`, `created_at`, `created_by`) VALUES
(1, 0, 'developer', 'sureshsubramani1986@gmail.com', '5e8edd851d2fdfbd7415232c67367cc3', 1, '2019-11-19 08:43:39', 0),
(2, 1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, '2019-11-19 08:45:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `communication_details`
--

CREATE TABLE `communication_details` (
  `personal_id` int(11) NOT NULL,
  `type_of_address` varchar(20) NOT NULL COMMENT '0 is Present or 1 is Permanent',
  `phone_no` varchar(15) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `pin_no` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communication_details`
--

INSERT INTO `communication_details` (`personal_id`, `type_of_address`, `phone_no`, `street_address`, `city`, `state`, `country`, `pin_no`, `created_at`, `modified_at`) VALUES
(1, 'Permanent', '8884074278', 'Chittoor Keel Street,', 'Salem', 'Tamilnadu', 'India', 637101, '2019-12-10 07:07:54', NULL),
(1, 'Present', '8884074278', 'Chittoor Keel Street,', 'Salem', 'Tamilnadu', 'India', 637101, '2019-12-10 07:07:54', NULL),
(2, 'Present', '8248182544', 'Chittoor, Idappadi', 'Salem', 'Tamilnadu', 'India', 637101, '2019-12-10 06:13:22', NULL),
(2, 'Permanent', '8248182544', 'Chittoor, Idappadi', 'Salem', 'Tamilnadu', 'India', 637101, '2019-12-10 06:13:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(65) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `status`) VALUES
(1, 'Tamil', 1),
(2, 'English', 1),
(3, 'Mathematics', 1),
(4, 'Physics', 1),
(5, 'Chemistry', 1),
(6, 'Bio Technology', 1),
(7, 'Computer Science', 1),
(8, 'Commerce', 1),
(9, 'Statistics', 1),
(10, 'Social Work', 1),
(11, 'Journalism and Mass communication', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `personal_id` int(11) NOT NULL,
  `degree` varchar(55) NOT NULL,
  `specialization` varchar(55) NOT NULL,
  `mos` varchar(55) NOT NULL,
  `college` varchar(120) NOT NULL,
  `aff_university` varchar(65) NOT NULL,
  `yoj` date NOT NULL,
  `yop` date DEFAULT NULL,
  `percentage` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`personal_id`, `degree`, `specialization`, `mos`, `college`, `aff_university`, `yoj`, `yop`, `percentage`, `created_at`, `modified_at`) VALUES
(1, 'MCA', 'Computer Application', 'Regular', 'Dr.NGP IT', 'Anna University', '0000-00-00', '2012-04-01', '75', '2019-12-10 07:08:01', NULL),
(1, 'BSc', 'Computer Science', 'Regular', 'Sri Kandan College of Arts & Science', 'Periyar University', '0000-00-00', '2009-04-11', '90', '2019-12-10 07:08:01', NULL),
(1, 'Ph.D', 'Data Structure', 'Regular', 'PSG College of Technology', 'Anna University', '0000-00-00', '2017-04-01', '87', '2019-12-10 07:08:01', NULL),
(2, 'M.Tech', 'Computer Science', 'Regular', 'Anna University,Coimbatore', 'Anna University', '0000-00-00', '2018-01-12', '87', '2019-12-10 06:16:44', NULL),
(2, 'B.Tech', 'Computer Science', 'Regular', 'Dr.NGP IT', 'Anna University', '0000-00-00', '2016-03-27', '', '2019-12-10 06:16:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experience_details`
--

CREATE TABLE `experience_details` (
  `personal_id` int(11) NOT NULL,
  `exp_college` varchar(120) NOT NULL,
  `university` varchar(55) NOT NULL,
  `designation` varchar(120) NOT NULL,
  `doj` date NOT NULL,
  `dol` date NOT NULL,
  `doe` varchar(35) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience_details`
--

INSERT INTO `experience_details` (`personal_id`, `exp_college`, `university`, `designation`, `doj`, `dol`, `doe`, `created_at`, `modified_at`) VALUES
(1, 'Dr.NGP IT', 'Periyar University', 'Assistant Professor', '2016-04-03', '2019-08-26', '1', '2019-12-10 06:12:17', '0000-00-00 00:00:00'),
(2, 'PSG College of Technology', 'Anna University', 'Assistant Professor', '2018-06-03', '2019-12-03', '1.5', '2019-12-10 06:17:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `joining_details`
--

CREATE TABLE `joining_details` (
  `personal_id` int(11) NOT NULL,
  `date_of_joining` varchar(55) NOT NULL,
  `current_salary` varchar(25) NOT NULL,
  `expected_salary` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joining_details`
--

INSERT INTO `joining_details` (`personal_id`, `date_of_joining`, `current_salary`, `expected_salary`, `created_at`, `modified_at`) VALUES
(1, '1 Month', '35,000', '45,000', '2019-12-10 06:12:19', NULL),
(2, '15 Days', '25,000', '35,000', '2019-12-10 06:19:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `personal_id` int(11) NOT NULL,
  `department` varchar(110) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(15) NOT NULL,
  `father_name` varchar(45) NOT NULL,
  `father_occupation` varchar(120) NOT NULL,
  `married_status` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `religion` varchar(35) NOT NULL,
  `community` varchar(35) NOT NULL,
  `caste` varchar(120) NOT NULL,
  `mother_tongue` varchar(35) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email_id` varchar(120) NOT NULL,
  `native_place` varchar(55) NOT NULL,
  `profile_status` tinyint(4) NOT NULL COMMENT '1 is Selected or 0 is Rejected',
  `status` smallint(4) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`personal_id`, `department`, `first_name`, `last_name`, `dob`, `gender`, `father_name`, `father_occupation`, `married_status`, `nationality`, `religion`, `community`, `caste`, `mother_tongue`, `phone_no`, `email_id`, `native_place`, `profile_status`, `status`, `created_on`) VALUES
(1, '7', 'Suresh', 'Subramani', '1985-12-01', 'Male', 'Subramani', 'IT', 'Married', 'indian', 'Hindu', 'MBC', 'Testing', 'Tamil', '8884074278', 'sureshsubramani1986@gmail.com', 'Salem', 1, 1, '2019-12-09 05:12:20'),
(2, '3', 'Ramesh', 'Subramani', '1987-07-12', 'Male', 'Subramani', 'Saree Weaver', 'Married', 'indian', 'Hindu', 'MBC', 'Test', 'Tamil', '8248182544', 'rameshmca@gmail.com', 'Salem', 0, 1, '2019-12-10 05:16:55');

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
(1, 1, 'MEMP0001', 'MBIO0001', 13, 0, 0, 1, '2019-12-16 07:14:32', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`personal_id`),
  ADD UNIQUE KEY `email_id` (`email_id`),
  ADD UNIQUE KEY `mobile` (`phone_no`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `personal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
