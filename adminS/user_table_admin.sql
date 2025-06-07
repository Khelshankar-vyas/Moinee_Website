-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2022 at 11:51 AM
-- Server version: 5.6.51
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizacad_quizacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table_admin`
--

CREATE TABLE `user_table_admin` (
  `ID` int(5) NOT NULL,
  `NAME` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `EMAIL_ID` varchar(255) NOT NULL,
  `PASSWORD` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `CREDITS` int(11) DEFAULT NULL,
  `CREATED_ON` timestamp NULL DEFAULT NULL,
  `MODIFIED_ON` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table_admin`
--
ALTER TABLE `user_table_admin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMAIL_ID` (`EMAIL_ID`),
  ADD KEY `EMAIL_ID_2` (`EMAIL_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table_admin`
--
ALTER TABLE `user_table_admin`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
