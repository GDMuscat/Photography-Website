-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 11:26 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `photography_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `categoryId` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--

CREATE TABLE `tblclient` (
  `clientId` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `mobileNo` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `townId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE `tblcomment` (
  `commentId` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `photoId` int(11) NOT NULL,
  `clientId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblphoto`
--

CREATE TABLE `tblphoto` (
  `photoId` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbltown`
--

CREATE TABLE `tbltown` (
  `townId` int(11) NOT NULL,
  `town` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`categoryId`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD PRIMARY KEY (`clientId`),
  ADD UNIQUE KEY `mobileNo` (`mobileNo`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `townId` (`townId`);

--
-- Indexes for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD PRIMARY KEY (`commentId`),
  ADD KEY `photoId` (`photoId`),
  ADD KEY `clientId` (`clientId`);

--
-- Indexes for table `tblphoto`
--
ALTER TABLE `tblphoto`
  ADD PRIMARY KEY (`photoId`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `tbltown`
--
ALTER TABLE `tbltown`
  ADD PRIMARY KEY (`townId`),
  ADD UNIQUE KEY `town` (`town`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblclient`
--
ALTER TABLE `tblclient`
  MODIFY `clientId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcomment`
--
ALTER TABLE `tblcomment`
  MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblphoto`
--
ALTER TABLE `tblphoto`
  MODIFY `photoId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbltown`
--
ALTER TABLE `tbltown`
  MODIFY `townId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD CONSTRAINT `tblclient_ibfk_1` FOREIGN KEY (`townId`) REFERENCES `tbltown` (`townId`);

--
-- Constraints for table `tblcomment`
--
ALTER TABLE `tblcomment`
  ADD CONSTRAINT `tblcomment_ibfk_1` FOREIGN KEY (`clientId`) REFERENCES `tblclient` (`clientId`),
  ADD CONSTRAINT `tblcomment_ibfk_2` FOREIGN KEY (`photoId`) REFERENCES `tblphoto` (`photoId`);

--
-- Constraints for table `tblphoto`
--
ALTER TABLE `tblphoto`
  ADD CONSTRAINT `tblphoto_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `tblcategory` (`categoryId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
