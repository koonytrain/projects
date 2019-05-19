-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2019 at 08:22 PM
-- Server version: 5.7.26-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group4cc_Roots_Tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `INDIVIDUAL`
--

CREATE TABLE `INDIVIDUAL` (
  `IND_ID` int(9) NOT NULL,
  `GIVEN_NAME` varchar(50) NOT NULL,
  `FAMILY_NAME` varchar(50) NOT NULL,
  `MIDDLE_NAME` varchar(50) DEFAULT NULL,
  `MAIDEN_NAME` varchar(50) DEFAULT NULL,
  `GENDER` varchar(14) NOT NULL,
  `DOB` date DEFAULT NULL,
  `POB` varchar(50) DEFAULT NULL,
  `DOD` date DEFAULT NULL,
  `POD` varchar(50) DEFAULT NULL,
  `DOM` date DEFAULT NULL,
  `POM` varchar(50) DEFAULT NULL,
  `USER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INDIVIDUAL`
--

INSERT INTO `INDIVIDUAL` (`IND_ID`, `GIVEN_NAME`, `FAMILY_NAME`, `MIDDLE_NAME`, `MAIDEN_NAME`, `GENDER`, `DOB`, `POB`, `DOD`, `POD`, `DOM`, `POM`, `USER_ID`) VALUES
(2, 'Allen', 'Kuenstler', 'All', 'Kuenstler', 'Male', '0000-00-00', 'Arizona', '0000-00-00', 'Mexico', '0000-00-00', 'New York', 13),
(4, 'Aaron', 'Pitt', 'J', 'Pitt', 'Male', '0000-00-00', 'Atlanta', '0000-00-00', 'New York', '0000-00-00', 'Moscow', 13),
(6, 'Kristen', 'Kuenstler', 'R', 'Pitt', 'Female', '1990-12-01', 'Wisconsin', '2019-01-01', 'Wisconsin', '2011-12-01', 'Wisconsin', 13),
(7, 'Allen', 'K', 'J', 'K', 'Male', '2019-01-01', 'Wisconsin', '2019-01-01', 'Wisconsin', '2019-01-01', 'Wisconsin', 13),
(28, 'James', 'Lydon', 'R', 'NA', 'Male', '2019-01-01', 'Illinois', '0000-00-00', '', '2019-01-01', 'Idaho', 13),
(30, 'Jeff', 'Kuenstler', 'A', 'NA', 'Male', '2019-01-01', 'Wisconsin', '0000-00-00', '', '2019-01-01', 'Wisconsin', 13),
(31, 'Tom', 'Kuenstler', 'A', 'NA', 'Male', '2019-01-01', 'Michigan', '2019-01-01', 'Wisconsin', '2019-01-01', 'Wisconsin', 13),
(32, 'Ann', 'Lydon', 'R', 'Zinn', 'Female', '2019-01-01', 'Wisconsin', '0000-00-00', '', '2019-01-01', 'Illinois', 13),
(33, 'Theresa', 'Koehler', 'M', 'Lydon', 'Female', '2019-01-01', 'Wisconsin', '0000-00-00', '', '2019-01-01', 'Wisconsin', 13),
(35, 'Verna', 'Kuenstler', 'B', 'Blanch', 'Female', '2019-01-01', 'Michigan', '0000-00-00', '', '2019-01-01', 'Wisconsin', 13),
(36, 'Test', 'User', 'Test', 'User', 'Male', '2019-01-01', 'Test', '0000-00-00', '', '2019-01-01', 'User', 11),
(37, 'Christian', 'Yelich', 'C', 'Yelich', 'Male', '2019-01-01', 'California', '0000-00-00', '', '2019-01-01', 'Wisconsin', 11),
(39, 'test', 'test', 'test', 'test', 'Female', '2019-01-01', 'test', '0000-00-00', '', '2019-01-01', 'test', 11),
(42, 'Try', 'Please', 'Test', 'test', 'Male', '2019-01-01', 'test', '0000-00-00', '', '2019-01-01', 'test', 11),
(44, 'Test2', 'Test2', 'Test2', 'Test2', 'Female', '2019-01-01', 'Test2', '0000-00-00', '', '2019-01-01', 'Test2', 11),
(51, 'test4', 'test4', 'test4', 'test4', 'Male', '2019-01-01', 'test4', '0000-00-00', '', '2019-01-01', 'test4', 11),
(54, 'Edna', 'Mode', 'E', 'Mode', 'Female', '2019-01-01', 'US', '0000-00-00', '', '2019-01-01', 'US', 11),
(57, 'Robin', 'Yount', 'R', 'NA', 'Male', '1900-01-01', 'California', '1900-01-01', '', '1973-01-01', 'Wisconsin', 11),
(59, 'Michele', 'Yount', 'R', 'Taft', 'Female', '1953-01-10', 'California', '1953-01-10', '', '1979-01-01', 'Wisconsin', 11),
(61, 'Anne', 'Lampbert', 'Lu', 'Yodel', 'Female', '1912-11-12', 'Canada', '1912-11-12', '', '1921-09-10', 'USA', 14),
(62, 'TestUser', 'TestUser', 'TestUser', 'TestUser', 'Male', '1900-01-01', 'TestUser', '1900-01-01', '1900-01-01', '1900-01-01', 'TestUser', 14),
(63, 'Francine', 'Dominguez', 'J', 'Tester', 'Female', '1950-01-01', 'Brazil', '1950-01-01', '', '1982-07-14', 'California', 14),
(64, 'Chamong', 'Lor', '', 'chamong', 'Male', '0000-00-00', 'home', '0000-00-00', 'blah', '0000-00-00', 'blah', 8),
(65, 'John', 'John', 'J', 'John', 'Male', '2012-12-12', 'Milwaukee', '0000-00-00', '', '2012-12-12', 'Milwaukee', 20),
(66, 'Edna', 'Nan', 'J', 'Mom', 'Female', '1953-10-01', 'Atlanta', '0000-00-00', '', '1985-05-05', 'Atlanta', 21),
(67, 'Zach', 'Davies', 'D', 'na', 'Male', '1995-01-01', 'Milwaukee', '0000-00-00', '', '2015-01-01', 'Milwaukee', 21),
(68, 'John', 'Jim', 'Jim', 'Jim', 'Male', '1988-11-11', 'Milwaukee', '0000-00-00', '', '2000-11-11', 'Milwaukee', 20),
(69, 'Jon', 'Doe', 'Al', 'Doe', 'Male', '1980-05-01', 'Atlanta', '0000-00-00', '', '2010-05-01', 'Atlanta', 24);

-- --------------------------------------------------------

--
-- Table structure for table `RELATIONSHIP`
--

CREATE TABLE `RELATIONSHIP` (
  `REL_ID` int(9) NOT NULL,
  `IND1_ID` int(9) NOT NULL,
  `IND2_ID` int(9) NOT NULL,
  `R_ID` int(9) NOT NULL,
  `S_ID` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `RELATIONSHIP`
--

INSERT INTO `RELATIONSHIP` (`REL_ID`, `IND1_ID`, `IND2_ID`, `R_ID`, `S_ID`) VALUES
(2, 7, 30, 2, NULL),
(3, 7, 31, 3, NULL),
(4, 7, 32, 6, NULL),
(5, 7, 33, 1, NULL),
(6, 7, 33, 1, NULL),
(7, 7, 28, 5, NULL),
(8, 7, 35, 4, NULL),
(16, 42, 42, 7, NULL),
(17, 42, 37, 2, NULL),
(18, 42, 44, 1, 1),
(27, 42, 51, 5, 3),
(28, 42, 54, 6, 9),
(33, 42, 57, 3, 9),
(34, 42, 59, 4, 14),
(37, 62, 62, 7, 17),
(38, 62, 61, 1, 9),
(39, 62, 63, 6, 18),
(40, 64, 64, 7, 19),
(41, 65, 65, 1, 19),
(43, 67, 67, 7, 19),
(44, 67, 66, 1, 9),
(45, 65, 68, 7, 19),
(46, 69, 69, 7, 19);

-- --------------------------------------------------------

--
-- Table structure for table `ROLE`
--

CREATE TABLE `ROLE` (
  `R_ID` int(9) NOT NULL,
  `R_TYPE` varchar(20) NOT NULL,
  `R_DEGREE` int(1) NOT NULL,
  `R_DESC` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ROLE`
--

INSERT INTO `ROLE` (`R_ID`, `R_TYPE`, `R_DEGREE`, `R_DESC`) VALUES
(1, 'Mother', 1, 'Mother'),
(2, 'Father', 1, 'Father'),
(3, 'Grandfather Fathers ', 2, 'Grandfather Fathers Side'),
(4, 'Grandmother Fathers ', 2, 'Grandmother Fathers Side'),
(5, 'Grandfather Mothers ', 2, 'Grandfather Mothers Side'),
(6, 'Grandmother Mothers ', 2, 'Grandmother Mothers Side'),
(7, 'User', 0, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `SOURCE`
--

CREATE TABLE `SOURCE` (
  `S_ID` int(9) NOT NULL,
  `S_TYPE` varchar(20) DEFAULT NULL,
  `S_TITLE` varchar(50) DEFAULT NULL,
  `S_AUTHOR` varchar(50) DEFAULT NULL,
  `S_PUBLISHER` varchar(50) DEFAULT NULL,
  `S_DATE` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SOURCE`
--

INSERT INTO `SOURCE` (`S_ID`, `S_TYPE`, `S_TITLE`, `S_AUTHOR`, `S_PUBLISHER`, `S_DATE`) VALUES
(1, 'Newspaper', 'Test2', 'Test2', 'Test2', '1900-01-01'),
(2, 'Letter', 'Test3', 'Test3', 'Test3', '1966-12-31'),
(3, 'Picture', 'test4', 'test4', 'test4', '2019-01-01'),
(9, 'Other', 'NA', 'NA', 'NA', '2019-04-23'),
(14, 'Other', 'Wiki', 'Wiki', 'Wiki', '2019-11-08'),
(15, 'Other', 'Wiki', 'Wiki', 'Wiki', '2019-11-08'),
(16, 'Other', 'Wiki', 'Wiki', 'Wiki', '2019-11-08'),
(17, 'Other', 'TestUser', 'TestUser', 'TestUser', '1900-01-01'),
(18, 'Other', 'none', 'none', 'none', '0000-00-00'),
(19, 'Book', '', '', '', '0000-00-00'),
(20, 'Book', '', '', '', '0000-00-00'),
(21, 'Other', '', '', '', '0000-00-00'),
(22, 'Book', '', '', '', '0000-00-00'),
(23, 'Book', '', '', '', '0000-00-00'),
(24, 'Book', '', '', '', '0000-00-00'),
(25, 'Book', '', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `USER`
--

CREATE TABLE `USER` (
  `USER_ID` int(9) NOT NULL,
  `FNAME` varchar(50) NOT NULL,
  `LNAME` varchar(50) NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  `DATE` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USER`
--

INSERT INTO `USER` (`USER_ID`, `FNAME`, `LNAME`, `EMAIL`, `PASSWORD`, `DATE`) VALUES
(1, '', '', '', '', '2019-04-07 21:51:59'),
(8, 'Chamong', 'Lor', 'chamong@uwm.edu', 'test', '2019-04-11 20:35:17'),
(10, 'Tony', 'Granquist', 'tg@uwm.edu', 'work', '2019-04-14 16:57:32'),
(11, 'Try', 'Please', 'tp@uwm.edu', 'as', '2019-04-15 22:12:42'),
(12, 'Chris', 'Eckes', 'cpeckes@uwm.edu', '123456789', '2019-04-16 18:04:39'),
(13, 'Allen', 'K', 'allen@uwm.edu', 'allen', '2019-04-16 18:04:59'),
(14, 'TestUser', 'TestUser', 'TestUser', 'test', '2019-04-23 11:28:21'),
(15, 'Shana', 'Ponelis', 'ponelis@uwm.edu', '1234', '2019-04-23 12:38:41'),
(16, 'T', 'Lee', 'taehee@uwm.edu', 'taehee', '2019-04-23 14:59:38'),
(17, 'Chamong', 'Lor', 'chamongl@uwm.edu', 'a94a8fe5ccb19ba61c4c', '2019-04-24 18:40:08'),
(18, 'Test', '1', 'test1@hotmail.com', '39ccb32d95edfdbcd882', '2019-04-24 18:55:20'),
(19, 'test2', 'test2', 'test2', '109f4b3c50d7b0df729d', '2019-04-24 19:17:42'),
(20, 'John', 'John', 'jj@uwm.edu', 'help', '2019-04-25 22:45:23'),
(21, 'Zach', 'Davies', 'davies@uwm.edu', 'test', '2019-04-26 14:33:34'),
(22, 'John', 'James', 'jay@uwm.edu', 'hello', '2019-04-28 07:27:16'),
(23, 'Joe', 'Smith', 'smith@uwm.edu', 'test', '2019-05-01 20:26:06'),
(24, 'Jon', 'Doe', 'doe@uwm.edu', 'test', '2019-05-01 20:36:11'),
(25, 'tony', 'stark', 'stark@uwm.edu', 'test', '2019-05-02 20:19:51'),
(26, 'Tony', 'Stark', 'stark@uwm.edu', 'test', '2019-05-02 20:38:27'),
(27, 'jim', 'doe', 'jim@uwm.edu', 'test', '2019-05-02 20:41:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `INDIVIDUAL`
--
ALTER TABLE `INDIVIDUAL`
  ADD PRIMARY KEY (`IND_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `RELATIONSHIP`
--
ALTER TABLE `RELATIONSHIP`
  ADD PRIMARY KEY (`REL_ID`),
  ADD KEY `IND1_ID` (`IND1_ID`),
  ADD KEY `IND2_ID` (`IND2_ID`),
  ADD KEY `R_ID` (`R_ID`),
  ADD KEY `S_ID` (`S_ID`);

--
-- Indexes for table `ROLE`
--
ALTER TABLE `ROLE`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `SOURCE`
--
ALTER TABLE `SOURCE`
  ADD PRIMARY KEY (`S_ID`);

--
-- Indexes for table `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `INDIVIDUAL`
--
ALTER TABLE `INDIVIDUAL`
  MODIFY `IND_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `RELATIONSHIP`
--
ALTER TABLE `RELATIONSHIP`
  MODIFY `REL_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `ROLE`
--
ALTER TABLE `ROLE`
  MODIFY `R_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `SOURCE`
--
ALTER TABLE `SOURCE`
  MODIFY `S_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `USER`
--
ALTER TABLE `USER`
  MODIFY `USER_ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `INDIVIDUAL`
--
ALTER TABLE `INDIVIDUAL`
  ADD CONSTRAINT `INDIVIDUAL_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `USER` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `RELATIONSHIP`
--
ALTER TABLE `RELATIONSHIP`
  ADD CONSTRAINT `RELATIONSHIP_ibfk_3` FOREIGN KEY (`IND1_ID`) REFERENCES `INDIVIDUAL` (`IND_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RELATIONSHIP_ibfk_4` FOREIGN KEY (`IND2_ID`) REFERENCES `INDIVIDUAL` (`IND_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RELATIONSHIP_ibfk_5` FOREIGN KEY (`R_ID`) REFERENCES `ROLE` (`R_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `RELATIONSHIP_ibfk_6` FOREIGN KEY (`S_ID`) REFERENCES `SOURCE` (`S_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
