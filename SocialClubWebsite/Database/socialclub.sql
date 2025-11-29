-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2025 at 02:58 PM
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
-- Database: `socialclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bowls`
--

CREATE TABLE `bowls` (
  `BowlsID` int(11) NOT NULL,
  `Forename` varchar(50) NOT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `darts`
--

CREATE TABLE `darts` (
  `DartsID` int(11) NOT NULL,
  `Forename` varchar(50) NOT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dominoes`
--

CREATE TABLE `dominoes` (
  `DominoesID` int(11) NOT NULL,
  `Forename` varchar(50) NOT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `MemberID` int(11) NOT NULL,
  `Forename` text NOT NULL,
  `Surname` text NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Postcode` varchar(6) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`MemberID`, `Forename`, `Surname`, `PhoneNumber`, `Email`, `Postcode`, `Address`, `Username`, `Password`) VALUES
(1, 'Ethan', 'Dearn', '07729285776', 'ethandearn@gmail.com', 'B302RJ', '167 Newlands Road', 'EthanDearn', '65a06f086811a9bc376e938ab12aab5f');

-- --------------------------------------------------------

--
-- Table structure for table `pool`
--

CREATE TABLE `pool` (
  `PoolID` int(11) NOT NULL,
  `Forename` varchar(50) NOT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snooker`
--

CREATE TABLE `snooker` (
  `SnookerID` int(11) NOT NULL,
  `Forename` varchar(50) NOT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `Username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usernames`
--

CREATE TABLE `usernames` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `MemberID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usernames`
--

INSERT INTO `usernames` (`Username`, `Password`, `MemberID`) VALUES
('EthanDearn', '65a06f086811a9bc376e938ab12aab5f', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bowls`
--
ALTER TABLE `bowls`
  ADD PRIMARY KEY (`BowlsID`),
  ADD UNIQUE KEY `Username` (`Username`) USING BTREE;

--
-- Indexes for table `darts`
--
ALTER TABLE `darts`
  ADD PRIMARY KEY (`DartsID`),
  ADD UNIQUE KEY `Username` (`Username`) USING BTREE;

--
-- Indexes for table `dominoes`
--
ALTER TABLE `dominoes`
  ADD PRIMARY KEY (`DominoesID`),
  ADD UNIQUE KEY `Username` (`Username`) USING BTREE;

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`MemberID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `pool`
--
ALTER TABLE `pool`
  ADD PRIMARY KEY (`PoolID`),
  ADD UNIQUE KEY `Username` (`Username`) USING BTREE;

--
-- Indexes for table `snooker`
--
ALTER TABLE `snooker`
  ADD PRIMARY KEY (`SnookerID`),
  ADD UNIQUE KEY `Username` (`Username`) USING BTREE;

--
-- Indexes for table `usernames`
--
ALTER TABLE `usernames`
  ADD PRIMARY KEY (`Username`),
  ADD KEY `MemberID` (`MemberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bowls`
--
ALTER TABLE `bowls`
  MODIFY `BowlsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `darts`
--
ALTER TABLE `darts`
  MODIFY `DartsID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dominoes`
--
ALTER TABLE `dominoes`
  MODIFY `DominoesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `MemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pool`
--
ALTER TABLE `pool`
  MODIFY `PoolID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `snooker`
--
ALTER TABLE `snooker`
  MODIFY `SnookerID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bowls`
--
ALTER TABLE `bowls`
  ADD CONSTRAINT `bowls_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usernames` (`Username`);

--
-- Constraints for table `darts`
--
ALTER TABLE `darts`
  ADD CONSTRAINT `darts_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usernames` (`Username`);

--
-- Constraints for table `dominoes`
--
ALTER TABLE `dominoes`
  ADD CONSTRAINT `dominoes_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usernames` (`Username`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usernames` (`Username`);

--
-- Constraints for table `pool`
--
ALTER TABLE `pool`
  ADD CONSTRAINT `pool_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usernames` (`Username`);

--
-- Constraints for table `snooker`
--
ALTER TABLE `snooker`
  ADD CONSTRAINT `snooker_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `usernames` (`Username`);

--
-- Constraints for table `usernames`
--
ALTER TABLE `usernames`
  ADD CONSTRAINT `usernames_ibfk_1` FOREIGN KEY (`MemberID`) REFERENCES `members` (`MemberID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
