-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2022 at 05:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_data`
--

CREATE TABLE `admin_login_data` (
  `adminUN` varchar(20) NOT NULL,
  `adminPW` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login_data`
--

INSERT INTO `admin_login_data` (`adminUN`, `adminPW`) VALUES
('admin', 'ad123');

-- --------------------------------------------------------

--
-- Table structure for table `login_data`
--

CREATE TABLE `login_data` (
  `userName` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_data`
--

INSERT INTO `login_data` (`userName`, `password`) VALUES
('user', 'user'),
('user1', 'user1'),
('user2', 'user2'),
('user3', 'user3'),
('user4', 'user4'),
('user5', 'user5');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `st_id` int(11) NOT NULL,
  `f_Name` varchar(25) NOT NULL,
  `l_Name` varchar(25) NOT NULL,
  `course` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `b_Day` date NOT NULL,
  `OL` varchar(5) NOT NULL,
  `AL` varchar(5) NOT NULL,
  `NVQ3` varchar(5) NOT NULL,
  `NVQ4` varchar(5) NOT NULL,
  `e_Mail` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`st_id`, `f_Name`, `l_Name`, `course`, `gender`, `b_Day`, `OL`, `AL`, `NVQ3`, `NVQ4`, `e_Mail`, `address`, `contact`) VALUES
(1, 'viraj', 'madhushan', 'National Diploma in ICT(NVQ 5)', 'Male', '2022-01-12', '1', '1', '0', '0', 'viraj.madhu1@gmail.com', 'Galle', '0889977881'),
(3, 'kasun', 'Kamal', 'PC Based Application(Part Time)', 'Male', '2022-01-04', '1', '1', '1', '0', 'kk@mail.com', 'galle', '088997889');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_data`
--
ALTER TABLE `admin_login_data`
  ADD PRIMARY KEY (`adminUN`);

--
-- Indexes for table `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`userName`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
