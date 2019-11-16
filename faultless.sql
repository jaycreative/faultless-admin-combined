-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 10, 2019 at 05:32 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

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
('ID10007', '2019-11-09 20:58:08', 'testse'),
('ID10007', '2019-11-09 21:18:25', 'testesrt'),
('ID10007', '2019-11-09 21:18:31', 'trhsdhgfdshrsretrtrt'),
('ID10007', '2019-11-09 21:18:44', 'tyrtser'),
('PR009809', '2019-04-14 04:00:00', 'This is the chem hose omment'),
('PR009809', '2019-06-10 04:00:00', 'Hey this is a comment'),
('PR009809', '2019-10-14 16:18:17', 'Add comment for 9809!'),
('PR009809', '2019-10-14 16:18:28', 'Add comment for 9809! A second time'),
('PR009809', '2019-10-14 18:58:20', 'ADding last comment for 9809'),
('PR009809', '2019-10-28 01:59:12', 'addin ganother comment'),
('PR009809', '2019-10-28 01:59:16', 'addin ganother comment'),
('PR009809', '2019-10-28 02:11:31', 'adding ew omment'),
('PR009809', '2019-10-28 02:11:38', 'add yet another!!!!'),
('PR009809', '2019-10-28 02:11:48', 'CAN I USSE THISSS'),
('PR009809', '2019-11-09 20:05:10', 'tseert'),
('PR009809', '2019-11-09 20:56:52', 'test'),
('PR235112', '2019-06-10 04:00:00', 'Hi! Adding comment for  PR ending in 5112'),
('PR235112', '2019-10-26 16:40:37', 'adding ew omment'),
('PR34353', '2019-11-07 13:40:49', 'tesrer'),
('PR34353', '2019-11-09 06:20:46', 'testeretets'),
('PR34353', '2019-11-09 06:20:53', 'testertesttsetetets'),
('PR34353', '2019-11-09 21:17:45', 'teserteste'),
('PR34353', '2019-11-09 21:17:59', 'tester'),
('PR34353', '2019-11-09 21:18:09', 'tester'),
('PR34353', '2019-11-09 21:18:14', 'testertstssgf'),
('PR8364837a', '2019-11-07 12:52:29', 'tester'),
('PR837448', '2019-11-09 20:17:41', 'testertet'),
('PR837459', '2019-11-07 13:32:45', 'test'),
('PR844356', '1992-04-24 04:00:00', 'This is the chem hose Comment'),
('PR866540', '2019-06-10 04:00:00', 'Add comment ending in 640 for PGP hoses'),
('PR866540', '2019-11-07 12:53:09', 'testertset'),
('PR866540', '2019-11-07 13:39:06', 'tesretett'),
('PR866540', '2019-11-07 13:39:15', 'testing once again'),
('PR900867', '2015-12-12 05:00:00', 'This is the chem hose Comment'),
('PR928448', '2019-09-18 04:00:00', 'This is the chem hose Comment'),
('PR928448', '2019-09-26 04:00:00', 'This is the chem hose Comment'),
('PR930411', '2019-11-07 12:52:55', 'tester'),
('PR933842', '2019-11-01 04:55:48', 'adding ew omment'),
('PR933842', '2019-11-01 04:56:00', 'lets add another comment'),
('PR934234', '2019-11-09 21:17:17', 'testest'),
('PR934234', '2019-11-09 21:17:25', 'testesetst'),
('PR934aa', '2019-11-09 20:06:35', 'tseerttesting for thois hs'),
('PR9374534', '2019-11-09 20:07:33', 'testest'),
('PR986837', '2019-11-09 20:09:26', 'testest'),
('PR986837', '2019-11-09 21:04:20', 'test'),
('PR986837', '2019-11-09 21:04:38', 'test'),
('PR986837', '2019-11-09 21:05:30', 'test');

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
  `Ext` mediumint(9) NOT NULL,
  `CompanyPhone` text NOT NULL,
  `NumberOfHoses` int(11) NOT NULL,
  `Website` text,
  `Pic` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Profile_Default.jpg',
  `DateJoined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`Username`, `CompanyName`, `Location`, `FirstName`, `LastName`, `Email`, `PersonalPhone`, `Ext`, `CompanyPhone`, `NumberOfHoses`, `Website`, `Pic`, `DateJoined`) VALUES
('ID019923', 'Petro Canada', '1111 Baker Road', 'Donald', 'Trump', 'Andrew.williams2@ontario.ca', '(905) 988-9865', 0, '', 1, 'www.FaultlessIO.ca', 'Profile_ID019923.jpg', '2019-08-19'),
('ID10001', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34554, '', 0, 'www.tester.com', 'Profile_Default.jpg', '2019-11-06'),
('ID10002', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34554, '', 0, '', 'Profile_ID10002.jpg', '2019-11-06'),
('ID10003', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34554, '', 0, '', 'Profile_ID10003.jpg', '2019-11-06'),
('ID10004', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', '', '6476876753', 34554, '', 0, '', 'Profile_ID10004.jpg', '2019-11-06'),
('ID10005', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', '', '', 34554, '', 0, '', 'Profile_ID10005.jpg', '2019-11-06'),
('ID10006', 'TesterCompany54321', '123 Fake Street', 'Ashley', '', '', '', 34554, '', 0, '', 'Profile_ID10006.jpg', '2019-11-06'),
('ID10007', 'TesterCompany54321', '123 Fake Street', '', '', '', '', 34554, '', 0, '', 'Profile_ID10007.jpg', '2019-11-06'),
('ID10011', '123FakeCompany', '123 Fake Street', '', '', '', '', 0, '', 0, '', 'Profile_ID10011.jpg', '2019-11-06'),
('ID10012', 'TesterCompany54321', '123 Fake Street', '', '', '', '', 0, '', 0, '', 'Profile_Default.jpg', '2019-11-06'),
('ID10013', '123FakeCompany', '124 Fake Street', '', '', '', '', 0, '', 0, '', 'Profile_ID10013.jpg', '2019-11-06'),
('ID10015', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 45345, '', 0, 'www.tester.com', 'Profile_ID10015.jpg', '2019-11-06'),
('ID10016', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 54354, '', 0, 'www.tester.com', 'Profile_ID10016.jpg', '2019-11-06'),
('ID10025', '123FakeCompany', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 3454, '', 0, 'www.tester.com', 'Profile_ID10025.jpg', '2019-11-06'),
('ID10030', '123FakeCompany', '123 Fake Street', '', '', '', '', 0, '', 0, '', 'Profile_ID10030.jpg', '2019-11-06'),
('ID10031', 'TesterCompany54321', '124 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 4355, '', 0, 'test', 'Profile_ID10031.jpg', '2019-11-06'),
('ID10035', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43555, '', 0, 'www.tester.com', 'Profile_ID10035.jpg', '2019-11-06'),
('ID10037', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 3455, '', 0, 'www.tester.com', 'Profile_ID10037.jpg', '2019-11-06'),
('ID10050', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 54354, '6472826230', 0, 'www.tester.com', 'Profile_ID10050.jpg', '2019-11-09'),
('ID10051', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43545, '6472826230', 0, 'www.tester.com', 'Profile_ID10051.jpg', '2019-11-09'),
('ID10052', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 4354, '6476695470', 0, 'www.tester.com', 'Profile_ID10052.jpg', '2019-11-09'),
('ID10054', 'TesterCompany54321', '123 Fake Street', '', '', '', '', 0, '', 0, '', 'Profile_ID10054.jpg', '2019-11-09'),
('ID123321', '123FakeCompany', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 3455, '', 0, '', 'Profile_ID123321.jpg', '2019-11-08'),
('ID32135', 'TesterCompany54321', '1244 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 6876753, '6476695470', 1, 'www.tester.com', 'Profile_Default.jpg', '2019-11-03'),
('ID321365', 'TesterCompany54321', '1244 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 6876753, '6476695470', 1, 'www.tester.com', 'Profile_ID321365.jpg', '2019-11-03'),
('ID394924', 'Transway', '123 John street', 'Andrew', 'Williams', 'Fake_Email@hotmail.com', '(905) 927-2345', 0, '6476876753', 1, 'www.AndrewWilliams.com/hoses', 'Profile_ID394924.jpg', '2019-09-16'),
('ID396441', 'Proctor and Gamble', '123 Core Ave.', 'Joe', 'biden', 'BigSpender68@gmail.com', '(905) 655-5884', 0, '', 1, 'Profile_Default.com', 'Profile_Default.jpg', '2019-09-26'),
('ID4322201', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34555, '', 0, 'www.tester.com', 'Profile_ID4322201.jpg', '2019-11-09'),
('ID4322202', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34555, '', 0, 'www.tester.com', 'Profile_ID4322202.jpg', '2019-11-09'),
('ID4322203', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34555, '', 0, 'www.tester.com', 'Profile_ID4322203.jpg', '2019-11-09'),
('ID4322205', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34554, '6476695470', 0, 'www.tester.com', 'Profile_ID4322205.jpg', '2019-11-09'),
('ID432221', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43244, '6476876753', 0, 'www.tester.com', 'Profile_ID432221.jpg', '2019-11-09'),
('ID4322210', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 3434, '', 0, 'www.tester.com', 'Profile_ID4322210.jpg', '2019-11-09'),
('ID4322211', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 3434, '', 0, 'www.tester.com', 'Profile_ID4322211.jpg', '2019-11-09'),
('ID4322212', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 0, '', 0, 'www.tester.com', 'Profile_ID4322212.jpg', '2019-11-09'),
('ID432222', 'TesterCompany54321', '124 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34545, '', 0, 'www.tester.com', 'Profile_ID432222.jpg', '2019-11-09'),
('ID432223', 'Flochem', '934 Queen St.', 'Andrew', 'Williams', 'Fake_Email@hotmail.com', '(905) 927-2345', 54321, '123 Fake street Suite 23434', 1, 'Walmart.com/hoses', 'Profile_ID432223.jpg', '2019-10-31'),
('ID432223324', 'TesterCompany54321', '124 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 4354, '', 0, 'www.tester.com', 'Profile_ID432223324.jpg', '2019-11-09'),
('ID4322234554', 'TesterCompany54321', '124 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 3455, '', 0, 'www.tester.com', 'Profile_ID4322234554.jpg', '2019-11-09'),
('ID43321', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43543, '6476695470', 0, 'www.tester.com', 'Profile_ID43321.jpg', '2019-11-09'),
('ID52122', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', 'aaliciaphoenix@gmail.com', '6476695470', 28262, '6476876753', 1, '', 'Profile_ID52122.jpg', '2019-11-03'),
('ID52124', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', 'aaliciaphoenix@gmail.com', '6476695470', 28262, '', 1, '', 'Profile_ID52124.jpg', '2019-11-03'),
('ID54221', 'tewtewter', 'twettewfdfe', 'tewt', 'tewt', 'aaliciaphoenix@gmail.com', '6476695470', 68767, '6476695470', 1, 'www.tester.com', 'Profile_ID54221.jpg', '2019-11-03'),
('ID5432145', 'TesterCompany', '155 Fake Street', 'test', 'test', 'aw07@live.ca', '6476876753', 6695, '6476695470', 1, 'www.tester.com', 'Profile_ID5432145.jpg', '2019-11-03'),
('ID554466', 'TesterCompany54321', '124 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 123, '', 0, '', 'Profile_ID554466.jpg', '2019-11-08'),
('ID55543', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43767, '6476695470', 1, '', 'Profile_ID55543.jpg', '2019-11-03'),
('ID55545', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 12345, '6476876753', 1, 'www.tester.com', 'Profile_ID55545.jpg', '2019-11-03'),
('ID55554', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 123, '6476876753', 1, 'www.tester.com', 'Profile_ID55554.jpg', '2019-11-03'),
('ID55555', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 1, '6476876753', 1, 'www.tester.com', 'Profile_ID55555.jpg', '2019-11-03'),
('ID823463', '123FakeCompany', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34555, '', 0, '', 'Profile_ID823463.jpg', '2019-11-09'),
('ID823484', 'Unilever', '9823 Forever Cres.', 'Bruce', 'Williams', 'TesterWilliams@hotmail.com', '(905) 647-5448', 12321, '(657) 945 4948', 1, 'www.OntarioHoseSucks.ca', 'Profile_ID823484.jpg', '2019-09-15'),
('ID830000', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', 'aaliciaphoenix@gmail.com', '', 235, '', 1, '', 'Profile_ID830000.jpg', '2019-11-03'),
('ID830001', '123FakeCompany', '124 Fake Street', 'Ashley', 'Williams', '', '', 235, '', 1, '', 'Profile_ID830001.jpg', '2019-11-03'),
('ID830009', '123FakeCompany', '124 Fake Street', '', '', 'aw07@live.c', '', 444, '', 1, '', 'Profile_Default.jpg', '2019-11-03'),
('ID830011', '123FakeCompany', '124 Fake Street', '', '', '', '', 235, '', 1, '', 'Profile_ID830011.jpg', '2019-11-03'),
('ID830035', '123FakeCompany', 'twettewfdfe', '', '', '', '', 0, '', 1, '', 'Profile_Default.jpg', '2019-11-03'),
('ID830036', '123FakeCompany', 'twettewfdfe', '', '', '', '', 0, '', 1, '', 'Profile_ID830036.jpg', '2019-11-03'),
('ID837588', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43543, '', 0, '', 'Profile_ID837588.jpg', '2019-11-05'),
('ID863464', '123FakeCompany', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 534, '', 0, 'www.tester.com', 'Profile_ID863464.jpg', '2019-11-09'),
('ID876758', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 34545, '', 0, '', 'Profile_ID876758.jpg', '2019-11-05'),
('ID9843375', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 3453, '', 0, '', 'Profile_ID9843375.jpg', '2019-11-08'),
('ID999876', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43455, '', 0, '', 'Profile_ID999876.jpg', '2019-11-05'),
('ID999977', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43545, '', 0, '', 'Profile_ID999977.jpg', '2019-11-05'),
('ID999991', 'TesterCompany54321', '124 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43535, '', 0, '', 'Profile_ID999991.jpg', '2019-11-05'),
('ID999992', 'TesterCompany54321', '123 Fake Street', 'Ashley', 'Williams', 'aw07@live.ca', '6476876753', 43535, '', 0, '', 'Profile_Default.jpg', '2019-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `hose`
--

CREATE TABLE `hose` (
  `HoseType` varchar(255) NOT NULL,
  `PicURL` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hose`
--

INSERT INTO `hose` (`HoseType`, `PicURL`, `Description`) VALUES
('4', 'test', '4_hose.jpg'),
('45', 'test', '45_hose.jpg'),
('Chemical', 'ChemHose.jpg', 'This is the chem hose description'),
('Entrails', 'Entrails.jpg', 'This is the chem hose description'),
('FOOD', 'FOOD_hose.jpg', 'for fooood!!'),
('keflar hose', '34i3r.jpg', 'This is the titanium kefler example hose'),
('mark 100 finale', 'test', 'mark 100 finale_hose.jpg'),
('mark 103', 'tester', 'mark 103_hose.jpg'),
('mark 111', 'tesytsetst', 'mark 111_hose.jpg'),
('mark 111 finale?', 'testng for whats hpoefully the last test', 'mark 111 finale?_hose.jpg'),
('mark 21', 'mark 21_hose.jpg', 'tsere'),
('mark 23', 'mark 23_hose.jpg', 'tester'),
('mark 24', 'teters', 'mark 24_hose.jpg'),
('mark 240', 'test', 'mark 240_hose.jpg'),
('mark 24000', 'test', 'mark 24000_hose.jpg'),
('mark 29', 'mark 29_hose.jpg', 'testest'),
('mark 30', 'mark 30_hose.jpg', 'tester'),
('mark 31', 'mark 31_hose.jpg', 'tester'),
('mark 34', 'mark 34_hose.jpg', 'testettstestts'),
('mark 35', 'mark 35_hose.jpg', 'test'),
('mark 36', 'mark 36_hose.jpg', 'testere'),
('mark 38', 'mark 38_hose.jpg', 'test'),
('mark 39', 'mark 39_hose.jpg', 'testestset'),
('mark 40', 'tester for final add hose type call', 'mark 40_hose.jpg'),
('MARK 55', 'tesrer', 'MARK 55_hose.jpg'),
('mark 59', 'test', 'mark 59_hose.jpg'),
('Mark 99', 'final test??', 'Mark 99_hose.jpg'),
('MARK FINAL PLZZZZ US', 'tester', 'MARK FINAL PLZZZZ US_hose.jpg'),
('mark finale 2 ', 'PLZZZZ', 'mark finale 2 _hose.jpg'),
('mark test 57', 'tester', 'mark test 57_hose.jpg'),
('mark x12', 'tester', 'mark x12_hose.jpg'),
('mark xxx', 'test', 'mark xxx_hose.jpg'),
('mark100', 'test', 'mark100_hose.jpg'),
('mark101', 'tester', 'mark101_hose.jpg'),
('mark11', 'mark11_hose.jpg', 'mark11 teater rn'),
('Mark14', 'Mark14_hose.jpg', 'TEStings for combination style hose test'),
('mark2', 'test', 'mark2_hose.jpg'),
('mark21', 'mark21_hose.jpg', 'tesr for mark 21 clear check'),
('mark22', 'mark22_hose.jpg', 'test'),
('mark23', 'mark23_hose.jpg', 'testes'),
('mark25', 'mark25_hose.jpg', 'tsererste'),
('mark28', 'mark28_hose.jpg', 'test'),
('mark5', 'tester', 'mark5_hose.jpg'),
('mark6', 'tester', 'mark6_hose.jpg'),
('mark7', 'mark7_hosejpg', 'mark7'),
('MARk76', 'tesretstrgdfgf', 'MARk76_hose.jpg'),
('mark8', 'mark8_hose.jpg', 'mark 8 test'),
('mKE 95', 'testets', 'mKE 95_hose.jpg'),
('PD', 'PD_hose.', ''),
('PGP', 'PGP.jpg', 'This is the chem hose description'),
('PSP', 'PSP_hose.jpg', 'this is the PSP hose type!'),
('PSP version 2', 'tester', 'PSP version 2_hose.jpg'),
('Steam', 'test', 'this is a Steam powered hose'),
('test 24', 'test', 'test 24_hose.jpg'),
('tester mark 101', 'testerttetest', 'tester mark 101_hose.jpg'),
('tester mark 18', 'tester mark 18_hose.jpg', 'test'),
('testeresr ', 'xcgdgfgd.jpg', 'this s fo testing'),
('testing upload mix', 'fake.jpg', 'this s for another test again!!!'),
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
('ID10052', 'tester'),
('ID10054', 'tester'),
('ID123321', 'test'),
('ID394924', 'tester'),
('ID396441', 'test'),
('ID432223', 'tester'),
('ID823484', 'test'),
('ID863464', 'test'),
('ID9843375', 'test'),
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
  `testDate` date NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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

INSERT INTO `product` (`ProductID`, `Username`, `CustomerPO`, `OrderNum`, `Part`, `Fittings`, `testDate`, `creationDate`, `TestedBy`, `HoseType`, `Pressure`, `HoseDiameter`, `HoseLength`, `Temperature`, `CRN`, `InService`) VALUES
('ID10007', 'ID432223', '45345', '345454', '345', 'test', '2019-08-23', '2019-11-09 08:18:48', 'brian willimas', 'PGP', 234, 123, 123, 23, 0, 1),
('PR009809', 'ID432223', '6543252', '7895', 'NF-PSP8X30CSFXCSF', 'CS Flange', '2019-10-30', '2017-10-27 15:41:00', 'Brian Williams', 'PSP', 1050, 3.6, 225, 175, 1, 1),
('PR009809-z', 'ID432223', 'test', 'estest', 'est', 'test', '2013-08-09', '2019-11-06 03:32:37', 'brian williams', 'food', 123, 123, 123, 12, 1, 1),
('PR235112', 'ID432223', '4322345', '3222', 'fin340ffef', 'NRF-efin34', '2018-08-12', '2019-08-27 15:41:04', 'Brian Williams', 'PSP', 2500, 125, 80, 25, 1, 1),
('PR34353', 'ID432223', 'test', '34545', 'test', 'tes', '2019-11-05', '2019-11-06 02:03:28', 'Brian Williams', 'FOOD', 100, 100, 100, 23, 1, 1),
('PR4535455', 'ID432223', '3454', '43566', 'test', 'test', '2019-08-08', '2019-11-06 02:09:55', 'Brian Williams', 'FOOD', 100, 100, 100, 14, 1, 1),
('PR63545345', 'ID432223', '453455', '4355', 'test', 'test', '2017-08-09', '2019-11-06 02:24:47', 'Bruce Williams', 'FOOD', 56, 56, 56, 23, 1, 1),
('PR8364837a', 'ID432223', '345', '43555', 'test', 'test', '2018-08-05', '2019-11-06 02:14:06', 'Brian Williams', 'FOOD', 123, 123, 123, 24, 1, 1),
('PR83648732', 'ID432223', '34324334', '2344', 'test', 'test', '2019-08-09', '2019-11-09 00:18:27', 'Brian WIlliams', '123', 123, 123, 123, 23, 1, 0),
('PR837448', 'ID432223', '374635', '3455', 'NCE X NCe', 'NCE X NCEYIGJ', '2019-09-11', '2019-11-03 16:38:32', 'Michael Williams', 'FOOD', 1100, 25, 250, 35, 1, 1),
('PR837459', 'ID432223', '374635', '3455', 'NCE X NCe', 'NCE X NCEYIGJ', '2019-09-11', '2019-11-03 16:40:22', 'Michael Williams', 'FOOD', 1100, 25, 250, 35, 1, 1),
('PR844356', 'ID396441', '513326', '558754', 'PH-FH2.5X25ALCXE', 'AL CxE', '2015-12-12', '2019-06-21 15:41:04', 'Billy Forenzo', 'FOOD', 550, 1, 175, 112, 0, 1),
('PR866540', 'ID432223', '345435', '3454', 'est', 'testes', '2013-02-02', '2019-11-06 02:49:05', 'andrew willians', 'PSP', 123, 123, 123, 23, 1, 0),
('PR866540', 'ID823484', '239986', '45367', 'NF-PGP2X10SSAXD', 'SS A+D', '2015-10-14', '2018-10-22 15:41:04', 'Derek Williams', 'PGP', 550, 1.1, 155, 225, 0, 0),
('PR8734384', 'ID432223', '323432', '4324', '', 'tetsst', '2019-07-08', '2019-11-06 02:39:31', 'brian williams', 'FOOD', 123, 123, 123, 12, 1, 1),
('PR877873', 'ID432223', '3453454', '3432', 'test', 'test', '2018-06-13', '2019-11-06 02:16:02', 'brian williams', 'FOOD', 67, 67, 67, 23, 1, 1),
('PR887387', 'ID432223', '4354', '3244', 'test', 'testes', '2017-09-09', '2019-11-06 02:33:08', 'michael Williams', 'FOOD', 123, 123, 123, 21, 1, 1),
('PR893738944', 'ID432223', '3454543', '454', 'test', 'test', '2019-09-09', '2019-11-09 00:20:54', 'tester', 'FOOD', 123, 123, 123, 12, 1, 0),
('PR900867', 'ID019923', '599861', '26598', 'ID3PH-TT4X200ALCXC', 'AL CxC', '2018-07-18', '2017-10-20 15:41:04', 'Jason Chhaidan', 'Chemical', 250, 3, 159, 105, 1, 0),
('PR910749a', 'ID432223', 'test', '324', 'test', 'test', '2018-09-09', '2019-11-06 03:12:23', 'brian williams', 'FOOD', 231, 123, 123, 23, 1, 1),
('PR928448', 'ID394924', '234452', '144532', 'NF-CCH2X15SSCXE', 'SS CXE', '2018-10-21', '2017-10-17 12:41:04', 'Brian Williams', 'Chemical', 1000, 2, 150, 100, 1, 1),
('PR930411', 'ID432223', '666666', '9985', 'NFX-JFSS32342-FP', 'NXE X NXE2 ', '2017-07-24', '2019-08-21 15:41:04', 'Andrew Williams', 'PSP', 125.8, 195.5, 120.5, 25, 1, 1),
('PR933842', 'ID432223', '3453222', '6643', 'sdfdjdnfdd', 'NEFoe VS sDOd Desil', '2018-01-19', '2019-06-27 15:41:04', 'Brian Williams', 'FOOD', 2500, 125, 120, 25, 1, 1),
('PR934234', 'ID432223', '345455', '4677', 'test', 'test', '2019-11-05', '2019-11-06 02:06:45', 'Michael Williams', 'FOOD', 125, 100, 100, 25, 1, 1),
('PR934aa', 'ID432223', '4354', '3453', '4353', '4354', '2017-08-09', '2019-11-06 03:14:40', 'Brian Williams', 'PSP', 123, 123, 123, 12, 1, 1),
('PR934u594', 'ID432223', '345', '435', 'test', 'test', '2017-08-09', '2019-11-06 02:26:52', 'brian williams', 'FOOD', 52, 123, 123, 11, 0, 0),
('PR9374534', 'ID432223', '345435', '34', 'test', 'test', '2016-09-09', '2019-11-06 02:34:06', 'michael Williams', 'PSP', 123, 123, 123, 12, 1, 1),
('PR982374', 'ID432223', '3453', '345', 'teste', 'test', '2019-08-08', '2019-11-09 16:28:44', 'brian williams', 'food', 234, 123, 123, 12, 1, 1),
('PR986837', 'ID432223', '453454', '4355', 'test', 'test', '2019-11-25', '2019-11-06 02:11:15', 'Brian Williams', 'PSP', 125, 100, 100, 25, 1, 0),
('PR9874344', 'ID432223', '435test', 'test', 'teste', 'test', '2019-09-09', '2019-11-09 16:29:48', 'test', 'test', 123, 123, 123, 12, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `psalt` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `psalt`) VALUES
(1, 'subins2000@gmail.com', '4f8ee01c497c8a7d6f44334dc15bd44fe5acea9aed07f67e34a22ec490cfced1', 's*vl%/?s8b*b4}b/w%w4');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
