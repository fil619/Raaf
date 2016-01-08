-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2016 at 09:53 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anuj`
--
--
-- Database: `bus`
--
--
-- Database: `bustracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `buscompany`
--

CREATE TABLE IF NOT EXISTS `buscompany` (
  `cname` varchar(50) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cnumber` varchar(40) NOT NULL,
  `cowner` varchar(50) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `cinfo` varchar(255) NOT NULL,
  PRIMARY KEY (`cname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buscompany`
--

INSERT INTO `buscompany` (`cname`, `caddress`, `cnumber`, `cowner`, `cemail`, `cinfo`) VALUES
('CitiBus', 'S-12, Madgaonkar Bldg, Lohia Road, Mapusa Goa', '09371243232 , 09226566101', 'Mr. Bruno Mars', 'citibruno@gmail.com', 'Bus Operator which connects cities like Panjim, Calangute, Mapusa & Bicholim.\r\nStarted in 2006.\r\nBus Color : Orange and white.'),
('Goa Deluxe', 'T-26, Alfran Plaza, Near Panjim Municipal Market, Panjim Goa ', '09834342810, 0832-2426492', 'Mr. Joseph Fernandes', 'goadelxbus@rediffmail.com', 'One of the major bus operators in Goa.\r\nConnects major cities like Panjim, Ponda, Margao, Vasco etc.\r\nStarted in 2005.\r\nBus Colour: Light Blue and Yellow.'),
('Jagadamba Travels', 'Sunshine Plaza, Near Shantadurga School, Bicholim Goa ', '08888100122, 09881634589', 'Mr.Pravinkumar Rane', 'jadgadamba@gmail.com', 'Small Bus Operator connects Ponda , Bicholim and Sanquelim.\r\nStarted in 2008.\r\nBus colour: Yellow and White'),
('Sunshine Travels ', 'Near Communidade Ground, Ponda Goa', '07798686883, 08888128989', 'Mrs.Maria Sharapova', 'sunshine_maria@yahoo.com', 'Connects Ponda , Margao and Shiroda.\r\nStarted as Private School and College bus in 2003.\r\nIn 2007, Started public bus transport.\r\nBus Colour: Yellow and Orange. '),
('Sai Baba Travels', 'T/4,Bldg no.3, Boshan Apts, Mapusa Goa', '08698625326, 0832-2262323', 'Mr. Nikhil Challappa', 'saitravels@gmail.com', 'Connects Arambol, Pernem and Mapusa.\r\nMainly used by Tourists travelling to Arambol(Beach).\r\nStarted in 2009.\r\nBus Color: Grey'),
('Golden Bus lines', 'Third Floor, Sapphire Apparment, Margao Goa', '0982311962', 'Mr.Sydney Braganza', 'goldsydbus@hotmail.com', 'Small bus service connecting Margao , Verna Industrial Estate(TITAN), and Colva(beach).\r\nStarted in 2011.\r\nBus Colour: Pink and White.');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE IF NOT EXISTS `buses` (
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `busnumber` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`source`, `destination`, `busnumber`, `time`, `company`) VALUES
('Arambol', 'Pernem', 'GA-01-BT-0118', '13:40', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0120', '14:15', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0111', '14:55', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0113', '15:30', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0115', '16:10', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0117', '16:55', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0119', '17:20', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0110', '18:00', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0112', '18:45', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0114', '19:10', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0116', '19:55', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0118', '20:25', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0120', '21:00', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0111', '22:00', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0113', '22:45', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0115', '23:00', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0115', '09:10', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0117', '09:35', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0119', '10:10', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0110', '10:55', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0112', '11:40', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0114', '12:15', 'Sai Baba Travels'),
('Arambol', 'Pernem', 'GA-01-BT-0116', '13:00', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0116', '09:20', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0118', '10:15', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0120', '10:55', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0111', '11:30', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0113', '12:10', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0114', '13:55', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0117', '14:20', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0119', '15:00', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0110', '16:45', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0112', '17:10', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0114', '17:45', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0116', '18:20', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0118', '19:05', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0120', '19:50', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0111', '20:35', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0113', '21:00', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0115', '21:40', 'Sai Baba Travels'),
('Pernem', 'Arambol', 'GA-01-BT-0117', '22:00', 'Sai Baba Travels'),
('Margao', 'Colva', 'GA-01-CT-0116', '09:20', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0118', '10:15', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0120', '10:55', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0111', '11:30', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0113', '12:10', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0114', '13:55', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0117', '14:20', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0119', '15:00', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0110', '16:45', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0112', '17:10', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0114', '17:45', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0116', '18:20', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0118', '19:05', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0120', '19:50', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0111', '20:35', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0113', '21:00', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0115', '21:40', 'Golden Bus lines'),
('Margao', 'Colva', 'GA-01-CT-0117', '22:00', 'Golden Bus lines');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  FULLTEXT KEY `password` (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`emailid`, `password`, `dob`) VALUES
('giteshnaik@hotmail.com', 'giteshnaik123', '2014-05-07'),
('saish@hotmail.com', 'ecb5afdf3e0710e3fa70982079ffc2fb', '2014-05-07'),
('saishmalik@hotmail.com', '93719f9c97e2771995cd069f658f5508', '2014-05-07'),
('saish@saish.in', '118bb84fc05b512cda33b180d52b2ea3', '2014-05-02'),
('anuj@anuj.in', '0634456ceee41eaacb42d89c6104b6ee', '2014-01-14'),
('1', '1234556', '0000-00-00'),
('anujkamat@ymail.com', '900150983cd24fb0d6963f7d28e17f72', '2015-08-15'),
('anuj', 'c482e3014f9b268c6d953a0fb0df6cc6', '2015-12-30'),
('jack', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', '2015-12-21');
--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_master`
--

CREATE TABLE IF NOT EXISTS `application_master` (
  `ApplicationId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `JobId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`ApplicationId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `application_master`
--

INSERT INTO `application_master` (`ApplicationId`, `JobSeekId`, `JobId`, `Status`, `Description`) VALUES
(1, 3, 1, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(2, 3, 2, 'Call Latter Send', 'You are Invited For Interview on 10-MAR-2013.'),
(3, 3, 3, 'Call Latter Send', 'Invited on 21-Dec-2013.'),
(5, 3, 4, 'Call Latter Send', 'Invited on 21-Dec-2013.');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE IF NOT EXISTS `employer_reg` (
  `EmployerId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Area_Work` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`EmployerId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`EmployerId`, `CompanyName`, `ContactPerson`, `Address`, `City`, `Email`, `Mobile`, `Area_Work`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(2, 'TCS Private Limited', 'Mr. Mohan Shah', 'Navarangpura1', 'Ahmedabad', 'mohan@gmail.com', 9898989898, 'Software', 'Confirm', 'mohan', 'mohan', 'Who is Your Favourite Person?', 'sachin'),
(3, 'Wipro Infotech', 'Mr. Sunil Pandya', 'Baroda', 'Baroda', 'sunil@wipro.com', 8989898989, 'Hardware', 'Confirm', 'sunil', 'sunil', '', ''),
(4, 'Solusoft  Pvt Limite', 'Mr. Nirav Soni', 'Narayanpura', 'Ahmedabad', 'nirav@gmail.com', 9898989898, 'Software', 'Confirm', 'nirav', 'nirav', 'What is Your Pet Name?', 'niru'),
(5, 'Info Matrics', 'Mr. Narayan', 'Sahibagh', 'Ahmedabad', 'narayan@yahoo.com', 6767676767, 'Software', 'Confirm', 'narayan', 'narayan', 'What is Your Pet Name?', 'nari');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakDate` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `JobSeekId`, `Feedback`, `FeedbakDate`) VALUES
(5, 3, 'asdad', '2018-09-13'),
(6, 3, 'asd', '2013-09-18'),
(7, 4, 'Thanks For Your Support.', '2013-09-18'),
(8, 3, 'asd', '2013-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `job_master`
--

CREATE TABLE IF NOT EXISTS `job_master` (
  `JobId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(200) NOT NULL,
  PRIMARY KEY (`JobId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job_master`
--

INSERT INTO `job_master` (`JobId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`) VALUES
(1, 'Wipro Infotech', 'Software Professional Required', 2, 'M.C.A', 'ASP.NET'),
(2, 'Wipro Infotech', 'Marketing Executive Required', 5, 'M.B.A', 'Freshers Are Invited'),
(3, 'TCS Private Limited', 'Software Trainee Required', 1, 'B.Sc.I.T', 'Starting Salary 5000'),
(4, 'Wipro Infotech', 'Cleaners Required', 3, 'S.S.C', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_education`
--

CREATE TABLE IF NOT EXISTS `jobseeker_education` (
  `EduId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekId` int(11) NOT NULL,
  `Degree` varchar(20) NOT NULL,
  `University` varchar(100) NOT NULL,
  `PassingYear` mediumint(9) NOT NULL,
  `Percentage` float NOT NULL,
  PRIMARY KEY (`EduId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jobseeker_education`
--

INSERT INTO `jobseeker_education` (`EduId`, `JobSeekId`, `Degree`, `University`, `PassingYear`, `Percentage`) VALUES
(3, 3, 'B.C.A', 'Ganpat Universiy', 2011, 68.89),
(4, 3, 'M.C.A', 'Ganpat University', 2013, 89.9),
(5, 3, 'S.S.C', 'GSEB', 2005, 80);

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_reg`
--

CREATE TABLE IF NOT EXISTS `jobseeker_reg` (
  `JobSeekId` int(11) NOT NULL AUTO_INCREMENT,
  `JobSeekerName` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` bigint(20) NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `Resume` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Question` varchar(100) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  PRIMARY KEY (`JobSeekId`),
  KEY `JobSeekId` (`JobSeekId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jobseeker_reg`
--

INSERT INTO `jobseeker_reg` (`JobSeekId`, `JobSeekerName`, `Address`, `City`, `Email`, `Mobile`, `Qualification`, `Gender`, `BirthDate`, `Resume`, `Status`, `UserName`, `Password`, `Question`, `Answer`) VALUES
(3, 'Jalpa Prajapati', 'Near Dena Bank', 'Mehsana', 'jalpa@gmail.com', 9898989898, 'M.C.A', 'Female', '2013-09-10', 'Marksheet.pdf', 'Confirm', 'jalpa', 'jalpa', 'What is Your Pet Name?', 'jalpa'),
(4, 'Krunal Prajapati', 'Patan', 'Patan', 'krunal@gmail.com', 8989898989, 'M.B.A', 'Male', '2013-09-16', 'Marksheet.pdf', 'Confirm', 'krunal', 'krunal', '', ''),
(5, 'Gopal Patel', 'Patan', 'Patan', 'gopal@gmail.com', 9898989898, 'MA', 'Male', '2013-10-15', 'admin.jpg', 'Confirm', 'gopal', 'gopal', '', ''),
(6, 'Mehul Mistry', 'Swastik SOciety', 'Baroda', 'mehul@gmail.com', 8989898998, 'BE', 'Male', '2013-10-09', '470X310_1.jpg', 'Confirm', 'mehul', 'mehul', 'What is Your Pet Name?', 'mehu');

-- --------------------------------------------------------

--
-- Table structure for table `news_master`
--

CREATE TABLE IF NOT EXISTS `news_master` (
  `NewsId` int(11) NOT NULL AUTO_INCREMENT,
  `News` varchar(200) NOT NULL,
  `NewsDate` date NOT NULL,
  PRIMARY KEY (`NewsId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news_master`
--

INSERT INTO `news_master` (`NewsId`, `News`, `NewsDate`) VALUES
(1, 'Register and Get JOB', '2013-09-24'),
(2, 'New Vacancies will be updated after diwali', '2013-10-31');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`UserId`, `UserName`, `Password`) VALUES
(6, 'admin', 'admin'),
(10, 'xyz', 'xyz'),
(12, 'anuj', 'anuj');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_master`
--

CREATE TABLE IF NOT EXISTS `walkin_master` (
  `WalkInId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL,
  `MinQualification` varchar(50) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `InterviewDate` date NOT NULL,
  `InterviewTime` time NOT NULL,
  PRIMARY KEY (`WalkInId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `walkin_master`
--

INSERT INTO `walkin_master` (`WalkInId`, `CompanyName`, `JobTitle`, `Vacancy`, `MinQualification`, `Description`, `InterviewDate`, `InterviewTime`) VALUES
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2013-09-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2013-10-07', '09:00:00');
--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `engmov`
--

CREATE TABLE IF NOT EXISTS `engmov` (
  `id` int(11) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `video` longblob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `date` date NOT NULL,
  `country` text NOT NULL,
  `emailid` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `date`, `country`, `emailid`, `pass`) VALUES
('Anuj', 'Kamat', '1996-03-29', 'India', 'anujkamat@ymail.com', '4de6d1d91e888fe44065b167e756ceb8'),
('Raju', 'Rastogi', '1999-02-22', 'India', 'rajurastogi@yahoo.com', 'b4946fe42a043aaf2e71ea582db6b12d');
--
-- Database: `pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_no` int(10) NOT NULL,
  `cust_name` varchar(20) NOT NULL,
  `d_o_b` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `salary` int(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  PRIMARY KEY (`cust_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `test`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
