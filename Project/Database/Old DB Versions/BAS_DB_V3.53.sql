-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2016 at 02:06 PM
-- Server version: 5.6.17
-- php Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pathmaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `courselevel`
--

CREATE TABLE IF NOT EXISTS `courselevel` (
  `ID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'unique identifier for each row',
  `Course` int(8) NOT NULL,
  `Level` int(8) NOT NULL COMMENT 'ID of level',
  PRIMARY KEY (`ID`),
  KEY `CourseID` (`Course`),
  KEY `LevelID` (`Level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `CourseID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for qualifications',
  `Course` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The qualification itself',
  PRIMARY KEY (`CourseID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains qualifications.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `GradeID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for grades',
  `Grade` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The grade itself',
  `GradeSetID` int(8) NOT NULL COMMENT 'Identifier for sets of grades',
  PRIMARY KEY (`GradeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains available grades that correlate to qualifications' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`GradeID`, `Grade`, `GradeSetID`) VALUES
(1, 'A', 1),
(2, 'B', 1),
(3, 'C', 1),
(4, 'D', 1),
(5, 'E', 1),
(6, 'F', 1),
(7, '1', 2),
(8, '2', 2),
(9, '3', 2),
(10, '4', 2),
(11, '5', 2),
(12, '6', 2);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `LevelID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Unique Identifier for each level',
  `Level` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The level itself',
  `Gradeset` int(8) NOT NULL COMMENT 'Associated grade set',
  PRIMARY KEY (`LevelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`LevelID`, `Level`, `Gradeset`) VALUES
(1, 'Standard Grade', 2),
(2, 'Intermediate 1', 1),
(3, 'Intermediate 2', 1),
(4, 'Higher', 1),
(5, 'Advanced Higher', 1),
(6, 'National 5', 1),
(7, 'New Higher', 1);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE IF NOT EXISTS `months` (
  `MonthID` int(11) NOT NULL AUTO_INCREMENT,
  `MonthName` varchar(12) NOT NULL,
  PRIMARY KEY (`MonthID`),
  UNIQUE KEY `MonthID` (`MonthID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`MonthID`, `MonthName`) VALUES
(1, 'January'),
(2, 'Febuary'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

CREATE TABLE IF NOT EXISTS `occupations` (
  `OccupationID` int(16) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for occupation',
  `OccupationName` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The occupation itself',
  PRIMARY KEY (`OccupationID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains occupations.' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `occupations`
--

INSERT INTO `occupations` (`OccupationID`, `OccupationName`) VALUES
(1, 'Unemployed'),
(2, 'Student Part-Time '),
(3, 'Student Full-Time '),
(4, 'Work Part-Time'),
(5, 'Work Full-Time '),
(6, 'Apprentice'),
(7, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `ucaspoints`
--

CREATE TABLE IF NOT EXISTS `ucaspoints` (
  `pointID` int(11) NOT NULL AUTO_INCREMENT,
  `Level` int(11) NOT NULL,
  `Grade` int(11) NOT NULL,
  `UCASValue` int(11) NOT NULL,
  PRIMARY KEY (`pointID`),
  KEY `Level` (`Level`),
  KEY `Grade` (`Grade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ucaspoints`
--

INSERT INTO `ucaspoints` (`pointID`, `Level`, `Grade`, `UCASValue`) VALUES
(1, 5, 1, 56),
(2, 5, 2, 48),
(3, 5, 3, 40),
(4, 5, 4, 32),
(5, 7, 1, 33),
(6, 7, 2, 27),
(7, 7, 3, 21),
(8, 7, 4, 15),
(9, 4, 1, 33),
(10, 4, 2, 27),
(11, 4, 3, 21),
(12, 4, 4, 15);

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

CREATE TABLE IF NOT EXISTS `useraccess` (
  `AccessID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for Access Level',
  `AccessName` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Actual level of access',
  `AccessLevel` int(11) NOT NULL,
  PRIMARY KEY (`AccessID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains access levels for users' AUTO_INCREMENT=4 ;

--
-- Dumping data for table `useraccess`
--

INSERT INTO `useraccess` (`AccessID`, `AccessName`, `AccessLevel`) VALUES
(1, 'user', 0),
(2, 'admin', 10),
(3, 'superadmin', 20);

-- --------------------------------------------------------

--
-- Table structure for table `useraddress`
--

CREATE TABLE IF NOT EXISTS `useraddress` (
  `AddressID` int(16) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for the address',
  `HouseNumberName` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name or number of household',
  `StreetName` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of street',
  `PostCode` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Post code',
  `City` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'City',
  PRIMARY KEY (`AddressID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains user addresses' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `useraddress`
--

INSERT INTO `useraddress` (`AddressID`, `HouseNumberName`, `StreetName`, `PostCode`, `City`) VALUES
(1, '123', 'root street', 'root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `usercareerpath`
--

CREATE TABLE IF NOT EXISTS `usercareerpath` (
  `PathwayID` int(16) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for pathways',
  `User` int(16) NOT NULL COMMENT 'User associated with pathway',
  `Pathway` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The Pathway itself',
  `DateGenerated` date NOT NULL COMMENT 'Date pathway was generated',
  PRIMARY KEY (`PathwayID`),
  KEY `UserID` (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
  `User` int(16) NOT NULL COMMENT 'Unique identifier for users',
  `FirstName` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users first name',
  `Surname` varchar(16) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users surname',
  `DateOfBirth` date NOT NULL COMMENT 'Users date of birth',
  `Occupation` int(16) NOT NULL COMMENT 'Users Occupation',
  `Address` int(16) NOT NULL AUTO_INCREMENT COMMENT 'Users Address',
  `UCASPoints` int(11) NOT NULL,
  PRIMARY KEY (`User`),
  UNIQUE KEY `Address_3` (`Address`),
  KEY `Occupation` (`Occupation`),
  KEY `Address` (`Address`),
  KEY `Address_2` (`Address`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains users personal details.' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`User`, `FirstName`, `Surname`, `DateOfBirth`, `Occupation`, `Address`, `UCASPoints`) VALUES
(1, 'root', 'root', '0001-01-01', 5, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `useremployment`
--

CREATE TABLE IF NOT EXISTS `useremployment` (
  `EmploymentID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `StartMonth` int(11) NOT NULL,
  `StartYear` year(4) NOT NULL,
  `EndMonth` int(11) NOT NULL,
  `EndYear` year(4) NOT NULL,
  `Employer` tinytext NOT NULL,
  `JobTitle` tinytext NOT NULL,
  `JobDescription` tinytext NOT NULL,
  PRIMARY KEY (`EmploymentID`),
  UNIQUE KEY `EmploymentID` (`EmploymentID`),
  KEY `UserID` (`UserID`),
  KEY `StartMonth` (`StartMonth`,`EndMonth`),
  KEY `EndMonth` (`EndMonth`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `UserID` int(16) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for users',
  `EmailAddress` varchar(32) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users email address',
  `UserName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `Password` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users password',
  `DateJoined` date NOT NULL COMMENT 'Date account was created',
  `AccessLevel` int(11) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `EmailAddress` (`EmailAddress`),
  KEY `AccessLevel` (`AccessLevel`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains basic user login details.' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`UserID`, `EmailAddress`, `UserName`, `Password`, `DateJoined`, `AccessLevel`) VALUES
(1, 'root@root.com', 'root', 'BaF9VWb6xBNcA', '2016-03-29', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `User` int(16) NOT NULL,
  `Interests` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users Interests',
  `WorkExperience` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users work experience',
  `Hobbies` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users hobbies',
  `PersonalStatement` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users personal statement',
  `CV` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Users CV',
  `DateModified` date NOT NULL COMMENT 'Date profile was last modified',
  PRIMARY KEY (`User`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains the users profile and personal information';

-- --------------------------------------------------------

--
-- Table structure for table `userqualifications`
--

CREATE TABLE IF NOT EXISTS `userqualifications` (
  `UserQID` int(16) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for each row of information',
  `User` int(16) NOT NULL,
  `Course` int(8) NOT NULL,
  `Level` int(8) NOT NULL COMMENT 'Level at which qualification was attained',
  `Grade` int(11) NOT NULL,
  `QYearObtained` date NOT NULL COMMENT 'Year qualification was obtained',
  PRIMARY KEY (`UserQID`),
  KEY `Qualification` (`Course`),
  KEY `UserID` (`User`),
  KEY `LevelID` (`Level`),
  KEY `Grade` (`Grade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains users qualifications' AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courselevel`
--
ALTER TABLE `courselevel`
  ADD CONSTRAINT `courselevel_ibfk_1` FOREIGN KEY (`Course`) REFERENCES `courses` (`CourseID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `courselevel_ibfk_2` FOREIGN KEY (`Level`) REFERENCES `levels` (`LevelID`) ON UPDATE CASCADE;

--
-- Constraints for table `ucaspoints`
--
ALTER TABLE `ucaspoints`
  ADD CONSTRAINT `ucaspoints_ibfk_2` FOREIGN KEY (`Grade`) REFERENCES `grades` (`GradeID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ucaspoints_ibfk_1` FOREIGN KEY (`Level`) REFERENCES `levels` (`LevelID`) ON UPDATE CASCADE;

--
-- Constraints for table `useraddress`
--
ALTER TABLE `useraddress`
  ADD CONSTRAINT `useraddress_ibfk_1` FOREIGN KEY (`AddressID`) REFERENCES `userdetails` (`Address`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `usercareerpath`
--
ALTER TABLE `usercareerpath`
  ADD CONSTRAINT `usercareerpath_ibfk_1` FOREIGN KEY (`User`) REFERENCES `userlogin` (`UserID`) ON DELETE CASCADE;

--
-- Constraints for table `userdetails`
--
ALTER TABLE `userdetails`
  ADD CONSTRAINT `userdetails_ibfk_2` FOREIGN KEY (`Occupation`) REFERENCES `occupations` (`OccupationID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userdetails_ibfk_4` FOREIGN KEY (`User`) REFERENCES `userlogin` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `useremployment`
--
ALTER TABLE `useremployment`
  ADD CONSTRAINT `useremployment_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `userlogin` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useremployment_ibfk_2` FOREIGN KEY (`StartMonth`) REFERENCES `months` (`MonthID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `useremployment_ibfk_3` FOREIGN KEY (`EndMonth`) REFERENCES `months` (`MonthID`) ON UPDATE CASCADE;

--
-- Constraints for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD CONSTRAINT `userlogin_ibfk_1` FOREIGN KEY (`AccessLevel`) REFERENCES `useraccess` (`AccessID`) ON UPDATE CASCADE;

--
-- Constraints for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD CONSTRAINT `userprofile_ibfk_1` FOREIGN KEY (`User`) REFERENCES `userlogin` (`UserID`) ON DELETE CASCADE;

--
-- Constraints for table `userqualifications`
--
ALTER TABLE `userqualifications`
  ADD CONSTRAINT `userqualifications_ibfk_2` FOREIGN KEY (`Course`) REFERENCES `courses` (`CourseID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userqualifications_ibfk_4` FOREIGN KEY (`User`) REFERENCES `userlogin` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `userqualifications_ibfk_5` FOREIGN KEY (`Level`) REFERENCES `levels` (`LevelID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `userqualifications_ibfk_6` FOREIGN KEY (`Grade`) REFERENCES `grades` (`GradeID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
