-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2021 at 04:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(7) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `UserName`, `Password`, `UpdationDate`) VALUES
(2021001, 'Anudeep', 'Anudeep', '2021-05-26 14:01:05'),
(2021002, 'Vamsi', 'Vamsi', '2021-05-26 14:01:18'),
(2021003, 'Abhinav', 'Abhinav', '2021-05-26 14:07:52'),
(2021004, 'Abhiram', 'Abhiram', '2021-05-26 14:08:19'),
(2021005, 'Gowtham', 'Gowtham', '2021-05-26 14:08:39'),
(2021006, 'Manikanta', 'Manikanta', '2021-05-26 14:08:56'),
(2021007, 'Hemanth', 'Hemanth', '2021-05-26 14:09:16'),
(2021008, 'Archit', 'Archit', '2021-05-26 14:09:33'),
(2021009, 'Vishnu', 'Vishnu', '2021-05-26 14:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `Roll_Id` varchar(6) DEFAULT NULL,
  `Class` int(2) DEFAULT NULL,
  `Section` varchar(1) DEFAULT NULL,
  `Computer` int(3) DEFAULT NULL,
  `English` int(3) DEFAULT NULL,
  `Hindi` int(3) DEFAULT NULL,
  `Science` int(3) DEFAULT NULL,
  `Social` int(3) DEFAULT NULL,
  `Updation_Date` timestamp NULL DEFAULT NULL,
  `Total` int(3) GENERATED ALWAYS AS (`English` + `Hindi` + `Computer` + `Social` + `Science`) VIRTUAL,
  `Percentage` int(11) GENERATED ALWAYS AS (`Total` / 5) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`Roll_Id`, `Class`, `Section`, `Computer`, `English`, `Hindi`, `Science`, `Social`, `Updation_Date`) VALUES
('1A001', 1, 'A', 93, 65, 89, 85, 73, '2021-05-26 11:34:54'),
('1A002', 1, 'A', 89, 93, 75, 83, 86, '2021-05-26 11:35:28'),
('1A003', 1, 'A', 95, 79, 90, 98, 77, '2021-05-26 11:35:45'),
('1A004', 1, 'A', 95, 93, 90, 85, 73, '2021-05-26 11:36:11'),
('1A005', 1, 'A', 60, 93, 75, 80, 73, '2021-05-26 11:36:58'),
('1A006', 1, 'A', 82, 58, 64, 50, 53, '2021-05-26 11:37:24'),
('1A007', 1, 'A', 69, 65, 75, 84, 53, '2021-05-26 11:38:17'),
('1A008', 1, 'A', 96, 87, 43, 95, 83, '2021-05-26 11:38:54'),
('1A009', 1, 'A', 93, 65, 43, 85, 77, '2021-05-26 11:39:15'),
('1A010', 1, 'A', 93, 65, 90, 98, 53, '2021-05-26 11:39:55'),
('1B001', 1, 'B', 93, 87, 64, 83, 73, '2021-05-26 11:40:16'),
('1B002', 1, 'B', 93, 65, 90, 98, 83, '2021-05-26 11:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll_Id` varchar(6) NOT NULL,
  `Student_Name` varchar(100) DEFAULT NULL,
  `Email_Id` varchar(100) DEFAULT NULL,
  `Class` int(2) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Section` varchar(1) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll_Id`, `Student_Name`, `Email_Id`, `Class`, `Gender`, `DOB`, `Section`, `UpdationDate`, `Password`) VALUES
('1A001', 'Abhiram', 'abhiram@gmail.com', 1, 'M', '2001-01-19', 'A', '2021-05-26 10:46:29', 'Abhiram'),
('1A002', 'Abhinav', 'abhinav@gmail.com', 1, 'M', '2001-06-07', 'A', '2021-05-26 10:48:34', 'Abhinav'),
('1A003', 'Abhilash', 'abhilash@abc.com', 1, 'M', '2001-08-11', 'A', '2021-05-26 10:49:20', 'Abhilash'),
('1A004', 'Akshata', 'akshata@yahoo.com', 1, 'F', '2001-12-13', 'A', '2021-05-26 10:50:01', NULL),
('1A005', 'Bharat', 'bharat@abc.com', 1, 'M', '2001-06-19', 'A', '2021-05-26 10:51:31', NULL),
('1A006', 'Bhavya', 'bhavya@yahoo.com', 1, 'F', '2001-07-05', 'A', '2021-05-26 10:52:13', NULL),
('1A007', 'Chitra', 'chitra@gmail.com', 1, 'F', '2001-12-12', 'A', '2021-05-26 10:52:58', NULL),
('1A008', 'Chandu', 'chandu@yahoo.com', 1, 'M', '2001-04-12', 'A', '2021-05-26 10:53:42', NULL),
('1A009', 'Dharshan Kumar', 'daru123@gmail.com', 1, 'M', '2001-06-07', 'A', '2021-05-26 10:54:23', NULL),
('1A010', 'Darshini', 'darshini321@gmail.com', 1, 'F', '2001-06-13', 'A', '2021-05-26 10:55:39', NULL),
('1B001', 'Abhinav', 'abhinav45@gmail.com', 1, 'M', '2002-08-14', 'B', '2021-05-26 11:30:40', NULL),
('1B002', 'Ankita', 'ankita@yahoo.com', 1, 'F', '2002-06-14', 'B', '2021-05-26 11:05:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Subject_Name` varchar(20) DEFAULT NULL,
  `Subject_Code` varchar(5) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Subject_Name`, `Subject_Code`, `UpdationDate`) VALUES
('Computer', 'CS1', '2021-05-26 10:44:38'),
('English', 'ENG1', '2021-05-26 10:44:08'),
('Hindi', 'HIN1', '2021-05-26 10:43:59'),
('Science', 'SIC1', '2021-05-26 10:44:29'),
('Social', 'SOC1', '2021-05-26 10:44:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `Id` (`Id`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD UNIQUE KEY `Roll_Id` (`Roll_Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `Roll_Id` (`Roll_Id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD UNIQUE KEY `Subject_Code` (`Subject_Code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
