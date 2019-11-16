-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2019 at 04:15 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faultless`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ProductID` varchar(255) NOT NULL,
  `DateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ProductID`, `DateAdded`, `Comment`) VALUES
('PR009809', '2019-04-14 04:00:00', 'This is the chem hose omment'),
('PR009809', '2019-06-10 04:00:00', 'Hey this is a comment'),
('PR009809', '2019-10-14 16:18:17', 'Add comment for 9809!'),
('PR009809', '2019-10-14 16:18:28', 'Add comment for 9809! A second time'),
('PR009809', '2019-10-14 18:58:20', 'ADding last comment for 9809'),
('PR235112', '2019-06-10 04:00:00', 'Hi! Adding comment for  PR ending in 5112'),
('PR844356', '1992-04-24 04:00:00', 'This is the chem hose Comment'),
('PR866540', '2019-06-10 04:00:00', 'Add comment ending in 640 for PGP hoses'),
('PR900867', '2015-12-12 05:00:00', 'This is the chem hose Comment'),
('PR928448', '2019-09-18 04:00:00', 'This is the chem hose Comment'),
('PR928448', '2019-09-26 04:00:00', 'This is the chem hose Comment');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Username` varchar(255) NOT NULL,
  `CompanyName` text NOT NULL,
  `Location` varchar(255) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text,
  `PersonalPhone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `Ext` tinyint(4) NOT NULL,
  `CompanyPhone` text NOT NULL,
  `NumberOfHoses` int(11) NOT NULL,
  `Website` text,
  `Pic` text,
  `DateJoined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Username`, `CompanyName`, `Location`, `FirstName`, `LastName`, `Email`, `PersonalPhone`, `Ext`, `CompanyPhone`, `NumberOfHoses`, `Website`, `Pic`, `DateJoined`) VALUES
('ID019923', 'Petro Canada', '1111 Baker Road', 'Donald', 'Trump', 'Andrew.williams2@ontario.ca', '(905) 988-9865', 0, '', 1, 'www.FaultlessIO.ca', 'FaultlessLogo.jpg', '2019-08-19'),
('ID394924', 'Transway', '123 John street', 'Andrew', 'Williams', 'Fake_Email@hotmail.com', '(905) 927-2345', 0, '', 1, 'www.AndrewWilliams.com', 'e8fhjefn3nf.jpg', '2019-09-16'),
('ID396441', 'Proctor and Gamble', '123 Core Ave.', 'Joe', 'biden', 'BigSpender68@gmail.com', '(905) 655-5884', 0, '', 1, 'www.ontario.ca/gov/AboutHoses', 'image.jpg', '2019-09-26'),
('ID432223', 'Flochem', '934 Queen St.', 'Steven', 'Crowdering', 'TryThis@outlook.com', '(905) 416-5466', 0, 'FloChem.Hoses.ca', 1, 'Walmart.ca', '38rhhfui3394.jpg', '2019-09-16'),
('ID823484', 'Unilever', '9823 Forever Cres.', 'Bruce', 'Williams', 'TesterWilliams@hotmail.com', '(905) 647-5448', 0, '', 1, 'www.OntarioHoseSucks.ca', 'ejdf8f79esf.jpg', '2019-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `hose`
--

CREATE TABLE `hose` (
  `HoseType` varchar(255) NOT NULL,
  `PicURL` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hose`
--

INSERT INTO `hose` (`HoseType`, `PicURL`, `Description`) VALUES
('Chemical', 'ChemHose.jpg', 'This is the chem hose description'),
('Entrails', 'Entrails.jpg', 'This is the chem hose description'),
('Food', 'Food.jpg', 'This is the chem hose description'),
('PGP', 'PGP.jpg', 'This is the chem hose description'),
('PSP', 'PSP.jpg', 'This is the chem hose description for hose type PSP. We insert info about the Hose generally Here'),
('Steam', 'test', 'this is a Steam powered hose'),
('Vanilla', 'sidsidsdsndd.jpg', 'This is the newest Vanilla Hose! Enjoy it');

-- --------------------------------------------------------

--
-- Table structure for table `loginpage`
--

CREATE TABLE `loginpage` (
  `Username` varchar(25) NOT NULL,
  `Pass_word` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `loginpage`
--

INSERT INTO `loginpage` (`Username`, `Pass_word`) VALUES
('ID019923', 'tester'),
('ID394924', 'test'),
('ID396441', 'test'),
('ID432223', 'test'),
('ID823484', 'test'),
('sysadmin', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `CustomerPO` text NOT NULL,
  `OrderNum` text NOT NULL,
  `Part` text NOT NULL,
  `Fittings` text NOT NULL,
  `testDate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TestedBy` text NOT NULL,
  `HoseType` text NOT NULL,
  `Pressure` double NOT NULL,
  `HoseDiameter` double NOT NULL,
  `HoseLength` double NOT NULL,
  `Temperature` double NOT NULL,
  `CRN` tinyint(1) NOT NULL,
  `InService` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Username`, `CustomerPO`, `OrderNum`, `Part`, `Fittings`, `testDate`, `TestedBy`, `HoseType`, `Pressure`, `HoseDiameter`, `HoseLength`, `Temperature`, `CRN`, `InService`) VALUES
('PR009809', 'ID432223', '655896', '7895', 'NF-PSP8X30CSFXCSF', 'CS Flange', '06/06/2011', 'Bruce Williams', 'PSP', 1050, 3.6, 225, 175, 1, 0),
('PR235112', 'ID432223', '329424', '3222', 'fin340ffef', 'NRF-efin34', '06/10/2019', 'Brian Williams', 'PSP', 2500, 125, 80, 25, 1, 0),
('PR844356', 'ID396441', '513326', '558754', 'PH-FH2.5X25ALCXE', 'AL CxE', '24/10/2019', 'Billy Forenzo', 'FOOD', 550, 1, 175, 112, 0, 1),
('PR866540', 'ID823484', '239986', '45367', 'NF-PGP2X10SSAXD', 'SS A+D', '26/10/2017', 'Derek Williams', 'PGP', 550, 1.1, 155, 225, 0, 0),
('PR900867', 'ID019923', '599861', '26598', 'ID3PH-TT4X200ALCXC', 'AL CxC', '02/21/2015', 'Jason Chhaidan', 'Chemical', 250, 3, 159, 105, 1, 0),
('PR928448', 'ID394924', '234452', '144532', 'NF-CCH2X15SSCXE', 'SS CXE', '24/10/2019', 'Brian Williams', 'Chemical', 1000, 2, 150, 100, 1, 1),
('PR930411', 'ID432223', '554213', '9985', 'NFX-JFSS32342-FP', 'NXE X NXE2 ', '06/08/2015', 'Andrew Williams', 'PSP', 125.8, 195.5, 120.5, 25, 1, 1),
('PR933842', 'ID432223', '3453233', '6643', 'sdfdjdnfdd', 'NEFoe VS sDOd Desil', '06/06/2012', 'Brian Williams', 'FOOD', 2500, 125, 120, 25, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ProductID`,`DateAdded`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username` (`Username`,`Location`);

--
-- Indexes for table `hose`
--
ALTER TABLE `hose`
  ADD PRIMARY KEY (`HoseType`);

--
-- Indexes for table `loginpage`
--
ALTER TABLE `loginpage`
  ADD PRIMARY KEY (`Username`,`Pass_word`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`,`Username`),
  ADD KEY `Username` (`Username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductID`) REFERENCES `product` (`ProductID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Username`) REFERENCES `company` (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
