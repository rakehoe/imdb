-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 08:58 PM
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
-- Database: `imdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentId` int(6) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `FirstName` varchar(15) NOT NULL,
  `Course` varchar(6) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `YearLevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentId`, `LastName`, `FirstName`, `Course`, `Gender`, `YearLevel`) VALUES
(1, 'Sumido', 'Nave', 'BSCS', 'Male', 4),
(2, 'Padilla', 'Janine', 'BSCS', 'Female', 4),
(3, 'Langurayan', 'Kevin', 'BSCS', 'Male', 4),
(4, 'Venezuela', 'Anita Rosario ', 'BSIT', 'Male', 1),
(5, 'Maws', 'Er Gonomic', 'BSIS', 'Female', 2),
(6, 'Hoe', 'Rake', 'BSEMC', 'Male', 2),
(7, 'Dimi', 'Mommy', 'BSEMC', 'Female', 2),
(8, 'Toast', 'KumaKuma', 'BSEMC', 'Male', 2),
(9, 'Karina', 'Huya', 'BSEMC', 'Male', 2),
(10, 'Sasala', 'Ma Ka', 'BLIS', 'Male', 1),
(11, 'Washington', 'Yamamiyamiyamot', 'BLIS', 'Female', 1),
(12, 'Matta', 'Mr.Scruffy', 'BLIS', 'Male', 4),
(13, 'kat', 'Fumi da', 'BSCS', 'Male', 4),
(14, 'White', 'Mr. Snowny', 'BSIS', 'Male', 3),
(15, 'Dimagiba', 'Bryce', 'BSIS', 'Male', 3),
(16, 'Trenas', 'Joey', 'BSIS', 'Male', 3),
(17, 'Ada', 'Mama mo si', 'BSIS', 'Female', 3),
(18, 'De Castro', 'Joel', 'BSIT', 'Male', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StudentId` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
