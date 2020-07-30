-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 06:23 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwd`
--

-- --------------------------------------------------------

--
-- Table structure for table `fingerprint_machine`
--

CREATE TABLE `fingerprint_machine` (
  `id` int(3) NOT NULL,
  `machine_id` varchar(15) NOT NULL,
  `machine_code` varchar(15) NOT NULL,
  `max_id_numbers` int(4) NOT NULL DEFAULT '127',
  `group_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `group_members`
--

CREATE TABLE `group_members` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `meeting_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `meeting_name` char(50) NOT NULL,
  `meeting_date` date NOT NULL,
  `meeting_start` time NOT NULL,
  `meeting_end` time NOT NULL,
  `meeting_place` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_attendance`
--

CREATE TABLE `meeting_attendance` (
  `id` int(11) NOT NULL,
  `meeting_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `member_name` char(50) NOT NULL,
  `status` enum('Tidak hadir','Hadir','','') NOT NULL DEFAULT 'Tidak hadir',
  `attendance_time` varchar(20) DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `meeting_groups`
--

CREATE TABLE `meeting_groups` (
  `group_id` int(3) NOT NULL,
  `group_name` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `member_name` char(60) NOT NULL,
  `member_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `member_email`) VALUES
(2, 'atang', 'irfan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `member_fingerprint`
--

CREATE TABLE `member_fingerprint` (
  `id` int(11) NOT NULL,
  `fingerprint_machine_id` varchar(10) NOT NULL,
  `member_id` int(11) NOT NULL,
  `fingerprint_code` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_fingerprint`
--

INSERT INTO `member_fingerprint` (`id`, `fingerprint_machine_id`, `member_id`, `fingerprint_code`) VALUES
(1, 'FTI-TIF-01', 1, 2),
(2, 'FTI-TIF-01', 1, 1),
(5, 'FTI-TIF-01', 2, 4),
(6, 'FTI-TIF-01', 2, 3),
(7, 'FTI-TE-01', 4, 10),
(8, 'FTI-TE-01', 3, 1),
(9, 'FTI-TE-01', 3, 3),
(10, 'FTI-TE-01', 3, 5),
(11, 'FTI-TE-01', 4, 2),
(12, 'FTI-TE-01', 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fingerprint_machine`
--
ALTER TABLE `fingerprint_machine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `machine_id` (`machine_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `group_members`
--
ALTER TABLE `group_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_belongsto_group` (`group_id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`meeting_id`);

--
-- Indexes for table `meeting_attendance`
--
ALTER TABLE `meeting_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_groups`
--
ALTER TABLE `meeting_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member_fingerprint`
--
ALTER TABLE `member_fingerprint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fingerprint_machine_id` (`fingerprint_machine_id`),
  ADD KEY `member_id` (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fingerprint_machine`
--
ALTER TABLE `fingerprint_machine`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_members`
--
ALTER TABLE `group_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `meeting_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meeting_attendance`
--
ALTER TABLE `meeting_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member_fingerprint`
--
ALTER TABLE `member_fingerprint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
