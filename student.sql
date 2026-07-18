-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2026 at 05:40 PM
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
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `python` int(3) NOT NULL,
  `java` int(3) NOT NULL,
  `dbms` int(3) NOT NULL,
  `webtech` int(3) NOT NULL,
  `total` int(5) NOT NULL,
  `percentage` float NOT NULL,
  `grade` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `department`, `python`, `java`, `dbms`, `webtech`, `total`, `percentage`, `grade`) VALUES
(24001, 'Abinaya', 'AI&DS', 98, 78, 97, 76, 349, 87.25, 'B'),
(24002, 'Bhavana', 'CSE', 79, 96, 75, 67, 317, 79.25, 'B'),
(24003, 'Dharshini', 'ECE', 89, 76, 87, 90, 342, 85.5, 'B'),
(24004, 'Harini', 'AI&ML', 87, 76, 78, 89, 330, 82.5, 'B'),
(24005, 'Kavya', 'ECE', 87, 76, 78, 90, 331, 82.75, 'B'),
(24006, 'Gayathri', 'EEE', 80, 97, 89, 90, 356, 89, 'B'),
(24007, 'Shalini', 'PT', 89, 98, 98, 97, 382, 95.5, 'A'),
(24008, 'Vignesh', 'AI&ML', 90, 87, 76, 83, 336, 84, 'B'),
(24009, 'kavin', 'AI&DS', 65, 67, 75, 65, 272, 68, 'C'),
(24010, 'Harshini', 'CSE', 78, 90, 87, 76, 331, 82.75, 'B'),
(24011, 'Swetha', 'AI&ML', 98, 78, 97, 86, 359, 89.75, 'B');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
