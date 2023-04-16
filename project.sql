-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 06, 2022 at 04:27 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `c633`
--

CREATE TABLE `c633` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf32_unicode_ci NOT NULL,
  `abstract` text COLLATE utf32_unicode_ci NOT NULL,
  `name` text COLLATE utf32_unicode_ci NOT NULL,
  `file` blob NOT NULL,
  `type` varchar(22) COLLATE utf32_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c644`
--

CREATE TABLE `c644` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf32_unicode_ci NOT NULL,
  `abstract` text COLLATE utf32_unicode_ci NOT NULL,
  `name` text COLLATE utf32_unicode_ci NOT NULL,
  `file` blob NOT NULL,
  `type` varchar(22) COLLATE utf32_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `firstname` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `datatime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `datatime`) VALUES
(1, 'fayez', 'Fayez', 'Alfayez', 'fayez@mu.edu.sa', '123', '2022-11-06 16:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `gname` varchar(11) COLLATE utf32_unicode_ci NOT NULL,
  `s_id1` int(11) NOT NULL,
  `s_id2` int(11) NOT NULL,
  `s_id3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `gname`, `s_id1`, `s_id2`, `s_id3`) VALUES
(1, 's633', 1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pstatus`
--

CREATE TABLE `pstatus` (
  `id` int(11) NOT NULL,
  `comment` text COLLATE utf32_unicode_ci NOT NULL,
  `report` enum('accepted','rejected') COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `firstname` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf32_unicode_ci NOT NULL,
  `datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `firstname`, `lastname`, `email`, `password`, `datetime`) VALUES
(1, '381101259', 'Ibrahim', 'Althabit', '381101259@s.mu.edu.sa', '202cb962ac59075b964b07152d234b70', '2022-11-06 16:01:44'),
(2, '381101164', 'khaled', 'alanazi', '381101164@s.mu.edu.sa', '202cb962ac59075b964b07152d234b70', '2022-11-06 16:08:20'),
(3, '382102682', 'Mosab', 'Alathlawi', '382102682@s.mu.edu.sa', '202cb962ac59075b964b07152d234b70', '2022-11-06 16:10:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c633`
--
ALTER TABLE `c633`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c644`
--
ALTER TABLE `c644`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `s_id1` (`s_id1`),
  ADD KEY `s_id2` (`s_id2`),
  ADD KEY `s_id3` (`s_id3`);

--
-- Indexes for table `pstatus`
--
ALTER TABLE `pstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c633`
--
ALTER TABLE `c633`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c644`
--
ALTER TABLE `c644`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pstatus`
--
ALTER TABLE `pstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`s_id1`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`s_id2`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `groups_ibfk_3` FOREIGN KEY (`s_id3`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
