-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2024 at 12:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunacorpdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `Email_Address` varchar(100) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Phone_No` int(30) NOT NULL,
  `Course_id` int(30) NOT NULL,
  `Course_Name` varchar(100) NOT NULL,
  `confirmed` int(30) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`Email_Address`, `Full_Name`, `Phone_No`, `Course_id`, `Course_Name`, `confirmed`) VALUES
('gilbertketer759@gmail.com', '', 759104865, 1, 'Data Analytics Fundamentals', 0),
('gilbertketer759@gmail.com', '', 759104865, 2, 'Machine Learning for Business', 0),
('gilbertketer759@gmail.com', '', 759104865, 4, 'Data Visualization and Storytelling', 1),
('gilbertketer759@gmail.com', '', 759104865, 3, 'Big Data Technologies', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lunacorp_students`
--

CREATE TABLE `lunacorp_students` (
  `Email_Address` varchar(100) NOT NULL,
  `Full_Name` varchar(50) NOT NULL,
  `Phone_No` int(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Verified` int(30) NOT NULL,
  `OTPCODE` int(30) NOT NULL,
  `user_type` varchar(30) NOT NULL DEFAULT 'student',
  `reset_token` varchar(255) DEFAULT NULL,
  `token_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunacorp_students`
--

INSERT INTO `lunacorp_students` (`Email_Address`, `Full_Name`, `Phone_No`, `Gender`, `Password`, `Verified`, `OTPCODE`, `user_type`, `reset_token`, `token_expiry`) VALUES
('gilbertketer759@gmail.com', 'GILBERT KIPLANGAT', 759104865, 'Male', '$2y$10$qbt.HE7d.2IgOk/9aJ1EWeKK/T8Dngonfz9wfY1fJzY2uPrq6exey', 0, 437258, 'administrator', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
