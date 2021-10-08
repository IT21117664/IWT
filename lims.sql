-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 06:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lims`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `AID` int(11) NOT NULL,
  `authorName` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`AID`, `authorName`) VALUES
(1, 'SLIIT'),
(2, 'Geoffrey P. Hammond'),
(3, 'Uchicago'),
(4, 'Ulla Kirch-Prinz');

-- --------------------------------------------------------

--
-- Table structure for table `barrowreturns`
--

CREATE TABLE `barrowreturns` (
  `transactionID` int(11) NOT NULL,
  `submitedDate` date DEFAULT NULL,
  `retrieveStatus` int(2) DEFAULT NULL,
  `lendStatus` int(2) DEFAULT NULL,
  `fine` double(10,2) DEFAULT NULL,
  `issuedDate` date DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  `userID` varchar(50) DEFAULT '',
  `IID` int(11) DEFAULT NULL,
  `adminUserID` varchar(50) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barrowreturns`
--

INSERT INTO `barrowreturns` (`transactionID`, `submitedDate`, `retrieveStatus`, `lendStatus`, `fine`, `issuedDate`, `dueDate`, `userID`, `IID`, `adminUserID`) VALUES
(1, '0000-00-00', 0, 1, 0.00, '2021-09-24', '2021-09-28', '5', 5, '1'),
(2, '2021-09-25', 1, 1, 500.00, '2021-09-21', '2021-09-24', '3', 2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `IID` int(11) DEFAULT NULL,
  `ISBN` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`IID`, `ISBN`) VALUES
(4, '9781429419253');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CID` int(11) NOT NULL,
  `catName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CID`, `catName`) VALUES
(1, 'Science Fiction (Sci-Fi)'),
(2, 'Computer Science'),
(3, 'Mathematics'),
(4, 'Programming/Scripting Books'),
(5, 'Mid Exam'),
(6, 'Civil Engineering'),
(7, 'Pleasure');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `IID` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `itemImgLoc` varchar(500) DEFAULT NULL,
  `pdfPath` varchar(500) DEFAULT NULL,
  `free` int(2) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Published_Date` date DEFAULT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `totalView` int(11) DEFAULT NULL,
  `totalDownload` int(11) DEFAULT NULL,
  `pubID` int(11) DEFAULT NULL,
  `A_ID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`IID`, `Name`, `itemImgLoc`, `pdfPath`, `free`, `Date`, `Published_Date`, `Description`, `totalView`, `totalDownload`, `pubID`, `A_ID`, `CID`) VALUES
(1, 'English for Academic Purposes - Y1S2', './img/pastpapers/123.png', './pdf/pastpapers/1.pdf', 1, '2021-08-23', '2021-08-20', 'Pastpapers IT1080', 0, 0, 1, 1, 5),
(2, 'Proceedings of the Institution of Civil Engineers - Energy', './img/pastpapers/123d.png', './pdf/journal/1.pdf', 0, '2021-09-25', '2021-08-03', 'Proceedings of the Institution of Civil Engineers', 10, 2, 2, 2, 6),
(3, 'Advances in Cement Research', './img/pastpapers/sd53d.png', './pdf/journal/2.pdf', 1, '2021-09-25', '2021-09-09', 'Optimising the setting behaviour of accelerated cement paste containing poly(AANa-co-DMAA) Xiaolei Zhang, Luping Zeng, Min Qiao, Wei Wang, Jian Chen, Jinxiang Hong, Qianping Ran 33(9), pp. 378–385 Published online:September 20, 2021', 50, 20, 2, 2, 6),
(4, 'A measure of pleasure', './img/articals/sderged.png', './pdf/articals/1.pdf', 1, '2021-09-25', '2021-07-05', 'For nearly two decades, psychologist Andrea King has followed a group of social drinkers to find out why only some develop alcohol use disorder.', 150, 10, 3, 3, 7),
(5, 'A complete guide to programming in C++', './img/book/sderged.png', './pdf/book/1.pdf', 0, '2021-09-26', '2021-07-20', 'A Complete Guide to Programming in C++ was written for both students interested in learning the C++ programming language from scratch, and for advanced C++ programmers wishing to enhance their knowledge of C++.', 50, 2, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `IID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`IID`) VALUES
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `pastpaper`
--

CREATE TABLE `pastpaper` (
  `IID` int(11) NOT NULL,
  `module` varchar(200) DEFAULT NULL,
  `Semester` int(2) DEFAULT NULL,
  `Year` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastpaper`
--

INSERT INTO `pastpaper` (`IID`, `module`, `Semester`, `Year`) VALUES
(1, 'English for Academic Purposes - IT1080 ', 2, 'Y1');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `pubID` int(11) NOT NULL,
  `publisherName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`pubID`, `publisherName`) VALUES
(1, 'SLIIT'),
(2, 'Geoffrey P. Hammond'),
(3, 'Uchicago'),
(4, 'Ulla Kirch-Prinz');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `IID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`IID`) VALUES
(4);

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `revID` int(11) NOT NULL,
  `reserveDate` date DEFAULT NULL,
  `userID` varchar(50) DEFAULT '',
  `IID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`revID`, `reserveDate`, `userID`, `IID`) VALUES
(1, '2021-09-30', '1', 4),
(2, '2021-10-03', '4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(50) NOT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `FName` varchar(100) DEFAULT NULL,
  `LName` varchar(100) DEFAULT NULL,
  `NameWithInitial` varchar(200) DEFAULT NULL,
  `profileImg` varchar(500) DEFAULT NULL,
  `memberValid` int(2) DEFAULT NULL,
  `Password` varchar(300) DEFAULT NULL,
  `DateOfBirth` date DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `userType` int(2) DEFAULT 0,
  `NIC` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `phoneNumber`, `email`, `FName`, `LName`, `NameWithInitial`, `profileImg`, `memberValid`, `Password`, `DateOfBirth`, `Address`, `userType`, `NIC`) VALUES
('1', '0713501969', 'it21117664@my.sliit.lk', 'Ranush', 'Bandara', 'M. M. P. R. M. Bandara', './img/1234.jpg', 1, '12345678', '2000-11-12', 'No 22, Isipathana Mawatha, Polonnaruwa', 1, NULL),
('2', '0115555555', 'it21114526@my.sliit.lk', 'Sharaf', 'Mawjood', 'S. M. Mawjood', './img/1234ffd.jpg', 1, '987654321', '1999-07-07', '623/ 8A, Rajagiriya Gardens, Nawala Road, Rajagiriya', 1, NULL),
('3', '0763995297', 'it21106156@my.sliit.lk', 'pasindP', 'Divyanjana', 'U. D. P. S. Divyanjana', './img/123d.jpg', 1, '145752', '2000-09-27', 'No.19/A,Niwandama, Ja-ela', 0, NULL),
('4', '0112255447', 'it27774874@my.sliit.lk', 'Pasindu', 'Shehan', 'R. O. P. Shehan', './img/pro/4678564.jpg', 1, '876876547', '2000-09-08', '32/E, Niwandama, Ja-ela', 0, NULL),
('5', '0776852447', 'it21176764@my.sliit.lk', 'Ranush', 'Malitha', 'K. T. R. Malitha', './img/pro/rhf7.jpg', 0, '5576465496', '2000-11-01', '353/1/3, Nawanagaraya, Polonnaruwa', 0, NULL),
('6', '0745855888', 'it2114567834@my.sliit.lk', 'Yashika ', 'Sewwandi', 'W. P. Y. Sewwandi', './img/pro/u885hg.jpg', 1, '8484juj8u4jj8', '1992-12-24', '176/B, Jayamawata, Yakkala', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_inventry`
--

CREATE TABLE `user_inventry` (
  `userID` varchar(50) NOT NULL,
  `IID` int(11) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_inventry`
--

INSERT INTO `user_inventry` (`userID`, `IID`, `date`) VALUES
('2', 1, '2021-09-23'),
('6', 5, '2021-09-01'),
('4', 3, '2021-08-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `barrowreturns`
--
ALTER TABLE `barrowreturns`
  ADD PRIMARY KEY (`transactionID`),
  ADD KEY `FK_IID_BR` (`IID`),
  ADD KEY `FK_USER_BR` (`userID`),
  ADD KEY `FK_ADMIN_USER` (`adminUserID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD KEY `FK_IID_BOOK` (`IID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`IID`),
  ADD KEY `FK_PUBID_INVEN` (`pubID`),
  ADD KEY `FK_AID_INVEN` (`A_ID`),
  ADD KEY `FK_CID_INVEN` (`CID`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `pastpaper`
--
ALTER TABLE `pastpaper`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`pubID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`IID`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`revID`),
  ADD KEY `FK_IID_RES` (`IID`),
  ADD KEY `FK_USER_RESERVE` (`userID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `NIC` (`NIC`);

--
-- Indexes for table `user_inventry`
--
ALTER TABLE `user_inventry`
  ADD KEY `FK_IID_INVEN` (`IID`),
  ADD KEY `FK_USER_INVENTRY` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barrowreturns`
--
ALTER TABLE `barrowreturns`
  MODIFY `transactionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `IID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `pubID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `revID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barrowreturns`
--
ALTER TABLE `barrowreturns`
  ADD CONSTRAINT `FK_ADMIN_USER` FOREIGN KEY (`adminUserID`) REFERENCES `user` (`userID`),
  ADD CONSTRAINT `FK_IID_BR` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`),
  ADD CONSTRAINT `FK_USER_BR` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `FK_IID_BOOK` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `FK_AID_INVEN` FOREIGN KEY (`A_ID`) REFERENCES `author` (`AID`),
  ADD CONSTRAINT `FK_CID_INVEN` FOREIGN KEY (`CID`) REFERENCES `category` (`CID`),
  ADD CONSTRAINT `FK_PUBID_INVEN` FOREIGN KEY (`pubID`) REFERENCES `publisher` (`pubID`);

--
-- Constraints for table `journal`
--
ALTER TABLE `journal`
  ADD CONSTRAINT `FK_IID_JOURNAL` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `pastpaper`
--
ALTER TABLE `pastpaper`
  ADD CONSTRAINT `FK_IID_PP` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `FK_IID_REPORT` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`);

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `FK_IID_RES` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`),
  ADD CONSTRAINT `FK_USER_RESERVE` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `user_inventry`
--
ALTER TABLE `user_inventry`
  ADD CONSTRAINT `FK_IID_INVEN` FOREIGN KEY (`IID`) REFERENCES `inventory` (`IID`),
  ADD CONSTRAINT `FK_USER_INVENTRY` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
