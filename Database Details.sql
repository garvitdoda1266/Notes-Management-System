-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 10:29 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `mynote`
--

CREATE TABLE `mynote` (
  `file_name` varchar(50) DEFAULT NULL,
  `file_uploaded_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mynote`
--

INSERT INTO `mynote` (`file_name`, `file_uploaded_by`) VALUES
('mynotes/file47.txt', 'Rohin Srivastava'),
('mynotes/file63.txt', 'Rohin Srivastava'),
('mynotes/file78.docx', 'Rohin Srivastava'),
('mynotes/file30.txt', 'Rohin Srivastava'),
('mynotes/file93.txt', 'Ashish');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `types` varchar(50) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`username`, `email`, `password`, `types`, `picture`) VALUES
('Rohin Srivastava', 'sri.rohin184@gmail.com', 'rohin', 'student', 'profiles/BRIDGE.png'),
('Garvit Doda', 'sri.samriddhi114@gmail.com', 'garvit', 'teacher', 'profiles/CASTLE.png'),
('Ashish', 'ashish.srivastava@sahara.in', 'ashish', 'teacher', 'profiles/CACTUS.png');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `file_id` int(20) NOT NULL,
  `file_name` varchar(30) DEFAULT NULL,
  `file_uploaded_by` varchar(40) DEFAULT NULL,
  `file_uploaded_on` date DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `types` varchar(50) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`file_id`, `file_name`, `file_uploaded_by`, `file_uploaded_on`, `subject`, `description`, `types`, `path`) VALUES
(3, 'cao5.pdf', 'Rohin Srivastava', '2021-05-11', 'maths', 'Maths1', 'student', 'uploads/cao5.pdf'),
(4, 'Review 1.pdf', 'Rohin Srivastava', '2021-05-11', 'physics', 'Rohin2', 'student', 'uploads/Review 1.pdf'),
(5, 'JAVA.docx', 'Rohin Srivastava', '2021-05-11', 'maths', 'Maths2', 'student', 'uploads/JAVA.docx'),
(6, 'CACTUS.png', 'Garvit Doda', '2021-04-01', 'maths', 'Garvit1', 'teacher', 'uploads/CACTUS.png'),
(7, '19BIT0177OS3.pdf', 'Garvit Doda', '2021-05-11', 'chemistry', 'Chem1', 'teacher', 'uploads/19BIT0177OS3.pdf'),
(8, 'STONES.jpg', 'Rohin Srivastava', '2021-05-11', 'physics', 'PHYSICS', 'student', 'uploads/STONES.jpg'),
(10, 'COLOURS.png', 'Ashish', '2021-05-12', 'maths', 'Maths1', 'teacher', 'uploads/COLOURS.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`file_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `file_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
