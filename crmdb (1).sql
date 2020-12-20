-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: דצמבר 20, 2020 בזמן 08:17 PM
-- גרסת שרת: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crmdb`
--

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `administrator`
--

CREATE TABLE `administrator` (
  `Address` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `AdministratorID` int(11) NOT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `administrator`
--

INSERT INTO `administrator` (`Address`, `Password`, `AdministratorID`, `PhoneNumber`, `Email`, `FirstName`, `LastName`, `Username`) VALUES
('k', NULL, 0, NULL, NULL, NULL, NULL, ''),
('saa', '123', 10, 987, 'salma@gmail.com', 'salma', 'lala', 'salma');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `feedbak`
--

CREATE TABLE `feedbak` (
  `FeedbakDesc` varchar(255) DEFAULT NULL,
  `SendTo` int(11) DEFAULT NULL,
  `WorkerID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `item`
--

CREATE TABLE `item` (
  `ItemID` int(11) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `OrderID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `orderr`
--

CREATE TABLE `orderr` (
  `OrderID` int(11) NOT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `OrderDateTime` date DEFAULT NULL,
  `DeliveryDateTime` date DEFAULT NULL,
  `TotalPrice` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `CustomertName` varchar(255) DEFAULT NULL,
  `WorkerId` varchar(255) NOT NULL,
  `descr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `orderr`
--

INSERT INTO `orderr` (`OrderID`, `PhoneNumber`, `OrderDateTime`, `DeliveryDateTime`, `TotalPrice`, `Email`, `CustomertName`, `WorkerId`, `descr`) VALUES
(4, 769, '0000-00-00', '2020-12-29', 400, 'Aya@gmail.co', 'Aya', 'samar', 'aya h'),
(3, 876, '0000-00-00', '2020-12-29', 560, 'Noor@gmail.com', 'Noor', 'samar', 'Noor v'),
(2, 987, '0000-00-00', '2020-12-29', 90, 'Sara@gmail.com', 'Sara', 'samar', 'Sara'),
(7, 2147483647, '0000-00-00', '2020-12-31', 7, 'Rana@gmail.com', 'Rana', 'samar', 'ttt'),
(20, 87, '0000-00-00', '2020-12-26', 77, 'rana@gmail.com', 'samar', 'samar', 'Sara'),
(8, 2147483647, '0000-00-00', '2020-12-31', 3, 'lara@gmail.com', 'rana@gmail.com', 'samar', ''),
(5, 890, '0000-00-00', '2020-12-30', 77, 'Mohammad@gmail.com', 'Mohammad', 'samar', 'Mohamaad '),
(6, 98, '0000-00-00', '2020-12-24', 77, 'Nada@gmail.com', 'Nada', 'samar', 'ff'),
(9, 2147483647, '0000-00-00', '2020-12-28', 44, 'Nat@gmail.com', 'Nataly', 'samar', 'ddd');

-- --------------------------------------------------------

--
-- מבנה טבלה עבור טבלה `worker`
--

CREATE TABLE `worker` (
  `Address` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Role` varchar(255) DEFAULT NULL,
  `WorkerID` int(11) NOT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `AdministratorID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- הוצאת מידע עבור טבלה `worker`
--

INSERT INTO `worker` (`Address`, `Password`, `Role`, `WorkerID`, `PhoneNumber`, `Email`, `FirstName`, `LastName`, `AdministratorID`, `Username`) VALUES
('sa', '987', 'nn', 2, 98, 'samar@gmail.com', 'samar', 'hajj', 1, 'samar'),
('j', ' 3319', 'jj', 8, 78, '201706578@bethlehem.edu', 'samah', 'jj', 1, 'samah');

--
-- Indexes for dumped tables
--

--
-- אינדקסים לטבלה `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`AdministratorID`);

--
-- אינדקסים לטבלה `feedbak`
--
ALTER TABLE `feedbak`
  ADD KEY `WorkerID` (`WorkerID`);

--
-- אינדקסים לטבלה `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`OrderID`);

--
-- אינדקסים לטבלה `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`WorkerID`),
  ADD KEY `AdministratorID` (`AdministratorID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
