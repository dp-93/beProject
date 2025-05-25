-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2024 at 06:10 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('shubhamvm43', 'pass@12');

-- --------------------------------------------------------

--
-- Table structure for table `approval_table`
--

CREATE TABLE `approval_table` (
  `status` text NOT NULL,
  `description` text NOT NULL,
  `bank_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approval_table`
--

INSERT INTO `approval_table` (`status`, `description`, `bank_id`) VALUES
('rejected', 'check', NULL),
('approved', 'check', NULL),
('approved', 'no ', 928540),
('rejected', 'Not satisfied with work your org need to improve ', 7741),
('approved', 'Ok', 6643);

-- --------------------------------------------------------

--
-- Table structure for table `blooddonors`
--

CREATE TABLE `blooddonors` (
  `donor_id` int(11) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `blood_group` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blooddonors`
--

INSERT INTO `blooddonors` (`donor_id`, `state`, `district`, `blood_group`) VALUES
(1, 'California', 'Los Angeles', 'A+'),
(2, 'New York', 'Manhattan', 'B-'),
(3, 'Texas', 'Houston', 'O+'),
(4, 'Florida', 'Miami', 'AB+'),
(5, 'Illinois', 'Chicago', 'A-'),
(6, 'Pennsylvania', 'Philadelphia', 'O-'),
(7, 'Ohio', 'Columbus', 'B+'),
(8, 'Georgia', 'Atlanta', 'AB-'),
(9, 'Michigan', 'Detroit', 'A+'),
(10, 'Washington', 'Seattle', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank_registration`
--

CREATE TABLE `blood_bank_registration` (
  `blood_bank_id` int(11) NOT NULL,
  `blood_bank_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_info` varchar(20) NOT NULL,
  `photo_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_bank_registration`
--

INSERT INTO `blood_bank_registration` (`blood_bank_id`, `blood_bank_name`, `address`, `contact_info`, `photo_path`) VALUES
(401, 'Donate_blood', 'pandharpur', '9970166549', 'uploads/Screenshot (8).png'),
(6643, 'Bharat Blood Bank', 'Chavhanwadi', '9960148765', 'uploads/Screenshot (2).png'),
(7741, 'Rotary Blood', 'kolhapur', '124567', 'uploads/e4e72d8e9c881da6ce799b31a0157958.jpg'),
(928540, 'Mhatma Blood Bank ', 'Pandharpur', '9876543210', 'uploads/wp7749511.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dist_solap`
--

CREATE TABLE `dist_solap` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `blood_group` enum('A+','A-','B+','B-','O+','O-','AB+','AB-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dist_solap`
--

INSERT INTO `dist_solap` (`id`, `name`, `email`, `gender`, `city`, `contact`, `blood_group`) VALUES
(1, 'shubham', 'shubhammane@2424gmail.com', 'Male', 'pandharpur', '8668871738', 'O+'),
(10, 'Rushi Mhamane', 'rushimhamane@89gmai.com', 'Male', 'katpal', '9022657445', 'A+'),
(11, 'Bharat khalate', 'bharatk34@gmail.com', 'Male', 'solapur', '7249277297', 'B+');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `status`) VALUES
(1, 'shuhbham', 'active'),
(2, 'Kanha', 'inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddonors`
--
ALTER TABLE `blooddonors`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `blood_bank_registration`
--
ALTER TABLE `blood_bank_registration`
  ADD PRIMARY KEY (`blood_bank_id`);

--
-- Indexes for table `dist_solap`
--
ALTER TABLE `dist_solap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blooddonors`
--
ALTER TABLE `blooddonors`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blood_bank_registration`
--
ALTER TABLE `blood_bank_registration`
  MODIFY `blood_bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=928541;

--
-- AUTO_INCREMENT for table `dist_solap`
--
ALTER TABLE `dist_solap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
