-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 03:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exercise6iyul`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Id` bigint(254) NOT NULL,
  `Comment` varchar(254) DEFAULT NULL,
  `Expense` decimal(64,0) NOT NULL,
  `Income` decimal(64,0) NOT NULL,
  `RemainingMoney` decimal(64,0) NOT NULL,
  `Currency_Id` int(254) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Id`, `Comment`, `Expense`, `Income`, `RemainingMoney`, `Currency_Id`, `Date`) VALUES
(1, 'Saat 02:26-dir', 100, 150, 50, 3, '2023-07-06'),
(2, '', 24, 44, 0, 1, '2023-07-06'),
(3, 'Saat 02:54-dur', 2, 5, 0, 1, '2023-07-06'),
(4, 'Saat 02:54-dur', 2, 5, 0, 1, '2023-07-06'),
(5, 'Saat 02:58-dir', 20, 100, 0, 1, '2023-07-06'),
(6, 'Saat 03:00-dir', 5, 20, 0, 1, '2023-07-06'),
(7, 'Saat 03:01-dir', 25, 50, 0, 1, '2023-07-06'),
(9, '', 10, 25, 15, 1, '2023-07-06'),
(10, '', 10, 25, 15, 1, '2023-07-06'),
(11, '', 10, 25, 15, 1, '2023-07-06'),
(12, 'Saat 03:11-dir', 75, 100, 25, 4, '2023-07-06'),
(13, 'Saat 04:31-dir', 30, 55, 25, 3, '2023-07-06'),
(14, '20-10=10', 10, 20, 10, 4, '2023-07-06'),
(19, 'Saat 05:02', 200, 100, -100, 3, '2023-07-06'),
(20, 'Saat 05:12-dir', 50, 150, 100, 3, '2023-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `valyuta`
--

CREATE TABLE `valyuta` (
  `Currency_Id` int(254) NOT NULL,
  `Currency` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `valyuta`
--

INSERT INTO `valyuta` (`Currency_Id`, `Currency`) VALUES
(1, 'Dollar'),
(2, 'Manat'),
(3, 'Euro'),
(4, 'Rubl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Currency_Id` (`Currency_Id`);

--
-- Indexes for table `valyuta`
--
ALTER TABLE `valyuta`
  ADD PRIMARY KEY (`Currency_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `Id` bigint(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `valyuta`
--
ALTER TABLE `valyuta`
  MODIFY `Currency_Id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info`
--
ALTER TABLE `info`
  ADD CONSTRAINT `info_ibfk_1` FOREIGN KEY (`Currency_Id`) REFERENCES `valyuta` (`Currency_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
