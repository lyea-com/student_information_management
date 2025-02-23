-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2025 at 05:20 AM
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
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `no_matrix` varchar(20) NOT NULL,
  `skills` text DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `username`, `email`, `program`, `course`, `no_matrix`, `skills`, `password`, `photo`) VALUES
(1, 'ahmad', 'yeaa@gmail.com', 'Degree', 'Information Management', '2024', 'C++', '$2y$10$M/bu9ud59M40V56EJDv6f.OzxB6j9/1URiObkDckCVlexuX6ttbLa', NULL),
(3, 'ALYEA', 'mai@gmail.com', 'SARJANA MUDA', 'INFORMATION SYSTEM', '20218772266', 'C++', '$2y$10$1fhnbVQu75fz7DONdSRrEu0jYTHhFkadsmGWkWJcPkbvXpqfFdb1.', NULL),
(4, 'karina', 'yeaa@gmail.com', 'diploma', 'Information Management', '231', 'draw', '$2y$10$ivfQCRjEsXlLRLXA3Y5qteg/ihz2iNUt6bXkZ5OcrL2E2nHHBV2F6', ''),
(5, 'luna', 'mai@yahoo.com', 'degree', 'SARJANA MUDA SAINS MAKLUMAT (KEPUJIAN) PENGURUSAN SAINS MAKLUMAT', '123', 'php', '$2y$10$HsH/ceZq126eiCfVkn5v4OKrHGsCvW4rzR9qooSf5BnsK58B//Sxu', ''),
(6, 'hafiy', 'nrlalyeaaa@gmail.com', 'Diploma', 'SARJANA MUDA SAINS MAKLUMAT (KEPUJIAN) PENGURUSAN SAINS MAKLUMAT', '122', 'conclude', '$2y$10$RyBLiDHOlYDPTCbvirD7cer09t2DmjLnw8C6Cs2Fccqez7I.wa6c6', ''),
(8, 'luqman', 'alyaa@yahoo.com', 'Diploma', 'SARJANA MUDA SAINS MAKLUMAT (KEPUJIAN) PENGURUSAN SAINS MAKLUMAT', '11', 'conclude', '$2y$10$S7Nu51iYoI6Q4p7X8awnouByBUziUf.uLRlveEDOwo8zWXUnLV.1K', ''),
(9, 'rose', 'rose@gmail.com', 'SARJANA MUDA', 'business management', '2901', 'ent', '$2y$10$TPmguKwkrlXsFThbea/fkOS3uqArF6KRPxGM7WZllhEGhjIUnNhzK', ''),
(10, 'maya', 'maya@yahoo.com', 'SARJANA MUDA', 'INFORMATION SYSTEM', '23456', 'C++', '$2y$10$vMzzMvzVR3Pf95Tzm7qWWuzXpgfSAur4cZdRwkUSuhw0/semg97B.', ''),
(11, 'AHMAD RAYYAN', 'rayyan24@mail.com', 'SARJANA MUDA', 'INFORMATION SYSTEM', '12344', 'JAVASCRIPT', '$2y$10$GNL5WtnQETogqCmqAOWoHu/Ds3pMkspfKmqkkaNzcpOXCIQlVImhm', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_matrix` (`no_matrix`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
