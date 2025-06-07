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
-- Table structure for table `relationship_table_admin`
--

CREATE TABLE `relationship_table_admin` (
  `ID` int(11) NOT NULL COMMENT 'id of the relationship entry',
  `RELATIONSHIP_TYPE` varchar(255) NOT NULL COMMENT 'relationship type between two entitites(school,student,teacher,admin,etc)',
  `RELATIONSHIP_OF` varchar(255) NOT NULL COMMENT 'id of entity who will have the one part of relationship ',
  `RELATIONSHIP_WITH` varchar(255) NOT NULL COMMENT 'id of entity who will have the second part of relationship ',
  `STATUS` varchar(100) NOT NULL DEFAULT 'ACTIVE' COMMENT 'status of relationship(active or inactive)',
  `CREATED_ON` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `CREATED_BY` varchar(100) DEFAULT NULL COMMENT 'id of user who trigerred this relationship',
  `MODIFIED_ON` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `MODIFIED_BY` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `relationship_table_admin`
--
ALTER TABLE `relationship_table_admin`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RELATIONSHIP_TYPE` (`RELATIONSHIP_TYPE`),
  ADD KEY `RELATIONSHIP_WITH` (`RELATIONSHIP_WITH`),
  ADD KEY `RELATIONSHIP_TYPE_2` (`RELATIONSHIP_TYPE`),
  ADD KEY `RELATIONSHIP_OF` (`RELATIONSHIP_OF`),
  ADD KEY `RELATIONSHIP_WITH_2` (`RELATIONSHIP_WITH`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `relationship_table_admin`
--
ALTER TABLE `relationship_table_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id of the relationship entry';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
