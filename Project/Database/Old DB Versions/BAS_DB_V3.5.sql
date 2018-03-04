-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 12:27 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains qualifications.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `GradeID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for grades',
  `Grade` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The grade itself',
  `GradeSetID` int(8) NOT NULL COMMENT 'Identifier for sets of grades',
  PRIMARY KEY (`GradeID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains available grades that correlate to qualifications' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `LevelID` int(8) NOT NULL AUTO_INCREMENT COMMENT 'Unique Identifier for each level',
  `Level` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The level itself',
  `Gradeset` int(8) NOT NULL COMMENT 'Associated grade set',
  PRIMARY KEY (`LevelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE IF NOT EXISTS `months` (
  `MonthID` int(11) NOT NULL AUTO_INCREMENT,
  `MonthName` varchar(12) NOT NULL,
  PRIMARY KEY (`MonthID`),
  UNIQUE KEY `MonthID` (`MonthID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `occupations`
--

CREATE TABLE IF NOT EXISTS `occupations` (
  `OccupationID` int(16) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for occupation',
  `OccupationName` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'The occupation itself',
  PRIMARY KEY (`OccupationID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains occupations.' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

CREATE TABLE IF NOT EXISTS `useraccess` (
  `AccessID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique identifier for Access Level',
  `AccessName` tinytext COLLATE utf8_unicode_ci NOT NULL COMMENT 'Actual level of access',
  `AccessLevel` int(11) NOT NULL,
  PRIMARY KEY (`AccessID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains access levels for users' AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains user addresses' AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`User`),
  UNIQUE KEY `Address_3` (`Address`),
  KEY `Occupation` (`Occupation`),
  KEY `Address` (`Address`),
  KEY `Address_2` (`Address`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains users personal details.' AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains basic user login details.' AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Contains users qualifications' AUTO_INCREMENT=1 ;

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
