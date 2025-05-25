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
-- Database: `hospitalms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'password'),
('comp', 'comp');

-- --------------------------------------------------------

--
-- Table structure for table `appointmenttb`
--

CREATE TABLE `appointmenttb` (
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `docFees` int(5) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `userStatus` int(5) NOT NULL,
  `doctorStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointmenttb`
--

INSERT INTO `appointmenttb` (`pid`, `ID`, `fname`, `lname`, `gender`, `email`, `contact`, `doctor`, `docFees`, `appdate`, `apptime`, `userStatus`, `doctorStatus`) VALUES
(12, 14, 'Liam', 'Moore', 'Male', 'liam@gmail.com', '7412225680', 'WillWilliams', 435, '2021-07-06', '10:00:00', 1, 1),
(1, 15, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'ryan', 440, '2021-07-05', '14:00:00', 0, 1),
(1, 16, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'ryan', 440, '2021-07-05', '10:00:00', 1, 1),
(11, 17, 'Kathryn', 'Anderson', 'Female', 'kathryn@gmail.com', '7850002580', 'lewis', 280, '2021-07-05', '10:00:00', 1, 1),
(13, 18, 'Brian', 'Rowe', 'Male', 'brian@gmail.com', '7012569999', 'Ralph', 450, '2021-07-06', '08:00:00', 1, 1),
(14, 19, 'bharat', 'khalate', 'Male', 'Bharat@1234.com', '9027285371', 'WillWilliams', 435, '2024-04-03', '12:00:00', 1, 1),
(18, 20, 'Bharat', 'K', 'Male', 'bk@gmail.com', '', 'bk', 435, '2024-04-23', '10:00:00', 1, 1),
(18, 21, 'Bharat', 'K', 'Male', 'bk@gmail.com', '', 'sm', 450, '2024-04-04', '10:00:00', 1, 1),
(18, 22, 'Bharat', 'K', 'Male', 'bk@gmail.com', '', 'bk', 435, '2024-04-07', '16:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `msg` varchar(255) DEFAULT NULL,
  `times` time DEFAULT NULL,
  `hashh` varchar(256) DEFAULT NULL,
  `prehash` varchar(256) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `userf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`msg`, `times`, `hashh`, `prehash`, `dates`, `userf`) VALUES
('hi\r\n', '13:13:00', '44723dd4d0e0d46a3c7fa8aca254b61c27b6b5789f96177e82c80700409f1535', '0', '2024-04-02', 0),
('by\r\n', '13:16:00', 'e8720ab29e6194b5e980a54b4fb0a729bfa81406f82de0e8523ae4c50640873a', '44723dd4d0e0d46a3c7fa8aca254b61c27b6b5789f96177e82c80700409f1535', '2024-04-02', 1),
('ok', '13:27:00', '2689367b205c16ce32ed4200942b8b8b1e262dfc70d9bc9fbc77c49699a4f1df', 'e8720ab29e6194b5e980a54b4fb0a729bfa81406f82de0e8523ae4c50640873a', '2024-04-02', 0),
('hi', '13:39:00', '8f434346648f6b96df89dda901c5176b10a6d83961dd3c1ac88b59b2dc327aa4', '0', '2024-04-02', 0),
('3', '13:39:00', '4e07408562bedb8b60ce05c1decfe3ad16b72230967de01f640b7e4729b49fce', '8f434346648f6b96df89dda901c5176b10a6d83961dd3c1ac88b59b2dc327aa4', '2024-04-02', 1),
('hi\r\n', '13:39:00', '44723dd4d0e0d46a3c7fa8aca254b61c27b6b5789f96177e82c80700409f1535', '4e07408562bedb8b60ce05c1decfe3ad16b72230967de01f640b7e4729b49fce', '2024-04-02', 1),
('hiii', '13:41:00', 'cfeadd1353bcc2d50a484de47f12069ea0fce82ae748ff27b54559ddd028f443', '0', '2024-04-02', 0),
('hello', '13:41:00', '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824', 'cfeadd1353bcc2d50a484de47f12069ea0fce82ae748ff27b54559ddd028f443', '2024-04-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `combine`
--

CREATE TABLE `combine` (
  `name` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `combine`
--

INSERT INTO `combine` (`name`, `number`, `password`, `created_at`) VALUES
('shubham', '+918668871738', 'pass123', '2024-04-02 06:42:13'),
('Udayan', '8446031936', 'udayan098', '2024-04-02 14:25:21'),
('Aniket', '09960630149', 'aniket123', '2024-04-02 15:14:40'),
(' ', '+918010269748', ' ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `complg`
--

CREATE TABLE `complg` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complg`
--

INSERT INTO `complg` (`username`, `password`) VALUES
('comp', 'comp');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `contact` varchar(10) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `contact`, `message`) VALUES
('Demo', 'demo@demail.com', '7014500000', 'this is a demo test');

-- --------------------------------------------------------

--
-- Table structure for table `doctb`
--

CREATE TABLE `doctb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `doctorname` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `docFees` int(10) NOT NULL,
  `mono` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctb`
--

INSERT INTO `doctb` (`username`, `password`, `doctorname`, `email`, `spec`, `docFees`, `mono`) VALUES
('bk', 'password', 'Will Williams', 'williams@gmail.com', 'Cardiologist', 435, '+918668871738'),
('sm', 'password', 'Ralphn Bh', 'ralph@gmail.com', 'Neurologist', 450, '+918668871738'),
('vk', 'password', 'Ryan Chandler', 'ryanc@gmail.com', 'Pediatrician', 440, '+918668871738'),
('jk', 'password', 'Lou Lewis', 'lewis@gmail.com', 'Gynecologist', 280, '+918668871738'),
('cmp', 'password', 'Chris Olivas', 'chris@gmail.com', 'Oncologist', 580, '+918668871738'),
('lj', 'password', 'Danial Rivera', 'danial@gmail.com', 'Neurologist', 210, '+918668871738');

-- --------------------------------------------------------

--
-- Table structure for table `patreg`
--

CREATE TABLE `patreg` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `patreg`
--

INSERT INTO `patreg` (`pid`, `fname`, `lname`, `gender`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'Curtis', 'Hicks', 'Male', 'curtis@gmail.com', '7410000010', 'pass', 'pass'),
(2, 'Emily', 'Smith', 'Female', 'emily@gmail.com', '7896541222', 'pass', 'pass'),
(3, 'Robert', 'Ray', 'Male', 'robert@gmail.com', '7014744444', 'pass', 'pass'),
(4, 'Michael', 'Foster', 'Male', 'michael@gmail.com', '7023696969', 'pass', 'pass'),
(5, 'Victor', 'Owen', 'Male', 'victor@gmail.com', '7897895500', 'pass', 'pass'),
(6, 'Johnny', 'Collins', 'Male', 'johnny@gmail.com', '7530001250', 'pass', 'pass'),
(7, 'Elsie', 'Meads', 'Female', 'elsie@gmail.com', '7850001250', 'pass', 'pass'),
(8, 'David', 'Fburn', 'Male', 'david@gmail.com', '7301450000', 'pass', 'pass'),
(9, 'Brandon', 'Mckinnon', 'Male', 'brandon@gmail.com', '7026969500', 'pass', 'pass'),
(10, 'Tyler', 'Smith', 'Male', 'tyler@gmail.com', '7900145300', 'pass', 'pass'),
(11, 'Kathryn', 'Anderson', 'Female', 'kathryn@gmail.com', '7850002580', 'pass', 'pass'),
(12, 'Liam', 'Moore', 'Male', 'liam@gmail.com', '7412225680', 'password', 'password'),
(13, 'Brian', 'Rowe', 'Male', 'brian@gmail.com', '7012569999', 'password', 'password'),
(14, 'bharat', 'khalate', 'Male', 'Bharat@1234.com', '9027285371', 'pass@12', 'pass@12'),
(15, 'Bharat', 'khalate', 'Male', 'bharatkhalate50@gmail.com', '', 'Bharat@123', 'Bharat@123'),
(16, 'Shubham', 'Mane', 'Male', 'pmali6189@gmail.com', '+918010269', 'Bharata$', 'Bharata$'),
(17, 'ravishastri', 'shas', 'Male', 'shash@gmail.com', '+918010269748', 'Bharat@123', 'Bharat@123'),
(18, 'Bharat', 'K', 'Male', 'bk@gmail.com', '', 'Bharat@123', 'Bharat@123');

-- --------------------------------------------------------

--
-- Table structure for table `prestb`
--

CREATE TABLE `prestb` (
  `doctor` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `appdate` date NOT NULL,
  `apptime` time NOT NULL,
  `disease` varchar(250) NOT NULL,
  `allergy` varchar(250) NOT NULL,
  `prescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `prestb`
--

INSERT INTO `prestb` (`doctor`, `pid`, `ID`, `fname`, `lname`, `appdate`, `apptime`, `disease`, `allergy`, `prescription`) VALUES
('WillWilliams', 12, 14, 'Liam', 'Moore', '2021-07-06', '10:00:00', 'Congenital heart disease', 'rhinoconjunctivitis', 'trandolapril (Mavik)'),
('ryan', 1, 16, 'Curtis', 'Hicks', '2021-07-05', '10:00:00', 'Tuberculosis', 'lumpy rash on the legs - or lupus vulgaris which gives lumps or ulcers', 'Isoniazid, Ethambutol (Myambutol), Linezolid (Zyvox)'),
('lewis', 11, 17, 'Kathryn', 'Anderson', '2021-07-05', '10:00:00', 'Ovarian cysts', '00000000', 'Narcotic analgesics and nonsteroidal anti-inflammatory drugs'),
('Ralph', 13, 18, 'Brian', 'Rowe', '2021-07-06', '08:00:00', 'Cerebral Aneurysm', '0000000', 'Nimodipine - empty stomach, at least 1 hour before a meal or 2 hours after a meal'),
('bk', 18, 20, 'Bharat', 'K', '2024-04-23', '10:00:00', 'fever', 'na', 'paracetamol'),
('bk', 18, 20, 'Bharat', 'K', '2024-04-23', '10:00:00', 'abc', 'ggs', 'sfdsfb');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` decimal(10,2) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `description`, `photo`) VALUES
(1, 'Nicip', 120.00, 'Ok', 'uploads/Screenshot (4).png'),
(2, 'Cold', 60.00, 'For only above 18', 'uploads/Screenshot (21).png'),
(3, 'Caugh', 140.00, 'this is for who passing from caugh', 'uploads/Screenshot (22).png'),
(4, 'Tablets', 250.00, 'ok ', 'uploads/Screenshot (18).png'),
(5, 'Liqiud', 745.00, 'NO', 'uploads/image.jpg'),
(0, 'bharat tatya khalate', 52.00, 'vcbnmasdgfhj', 'uploads/idea1.drawio.png');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(32) NOT NULL,
  `user` varchar(256) NOT NULL,
  `doc` varchar(256) NOT NULL,
  `hash` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `user`, `doc`, `hash`) VALUES
(1, 'sachin', 'WillWilliams', '2689367b205c16ce32ed4200942b8b8b1e262dfc70d9bc9fbc77c49699a4f1df'),
(2, 'sachin', 'WillWilliams', '44723dd4d0e0d46a3c7fa8aca254b61c27b6b5789f96177e82c80700409f1535'),
(3, 'sachin', 'WillWilliams', '2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e73043362938b9824');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE `tb_data` (
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL DEFAULT '',
  `longitude` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`name`, `phone`, `latitude`, `longitude`) VALUES
('mahakal', '7249277297', '17.651117', '75.283305'),
('ujjain', '9156750435', '21.1458004', '79.0881546'),
('shuhbham', '884561616', '16.8542541', '74.5801701'),
('bharat khalate', '+918010269748', '17.65592826591343', '75.36898984143926'),
('prathamesh', '7249277297', '16.8542541', '74.5801701'),
('satish', '+9180128277373', '16.8542541', '74.5801701'),
('shubhu', '+918010269748', '17.65592826591343', '75.36898984143926'),
('bharat tatya khalate', '+918010269748', '17.65592826591343', '75.36898984143926'),
('Harshdip ', '+912829292', '17.65592826591343', '75.36898984143926'),
('Bharatttt', 'k', '18.730775', '73.663679'),
('bharat222', '+918010269748', '18.730775', '73.663679'),
('bha', '+801026974678', '18.730775', '73.663679'),
('vishwajeet kasture', '22662261', '18.730775', '73.663679');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patreg`
--
ALTER TABLE `patreg`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmenttb`
--
ALTER TABLE `appointmenttb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `patreg`
--
ALTER TABLE `patreg`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
