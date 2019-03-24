-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 04:13 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbas`
--

-- --------------------------------------------------------

--
-- Table structure for table `preferences`
--

CREATE TABLE `preferences` (
  `regno` char(9) NOT NULL,
  `smokes` int(1) NOT NULL,
  `drinks` int(1) NOT NULL,
  `vegs` int(1) NOT NULL,
  `sleeps` int(1) NOT NULL,
  `angers` int(1) NOT NULL,
  `cleans` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferences`
--

INSERT INTO `preferences` (`regno`, `smokes`, `drinks`, `vegs`, `sleeps`, `angers`, `cleans`) VALUES
('17BCE0710', 1, 0, 1, 1, 0, 0),
('17BCE0396', 1, 1, 0, 0, 0, 1),
('17BCE0700', 0, 0, 0, 0, 0, 0),
('17BCE2030', 1, 1, 0, 0, 0, 0),
('15BIT0269', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `qualities`
--

CREATE TABLE `qualities` (
  `regno` char(9) NOT NULL,
  `smoke` int(1) NOT NULL,
  `drink` int(1) NOT NULL,
  `veg` int(1) NOT NULL,
  `anger` int(1) NOT NULL,
  `sleep` int(1) NOT NULL,
  `clean` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualities`
--

INSERT INTO `qualities` (`regno`, `smoke`, `drink`, `veg`, `anger`, `sleep`, `clean`) VALUES
('17BCE0710', 0, 1, 1, 0, 0, 0),
('17BCE0396', 0, 0, 0, 1, 1, 0),
('17BCE0700', 0, 0, 1, 0, 1, 1),
('17BCE2030', 0, 0, 1, 1, 1, 0),
('15BIT0269', 0, 1, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `roommate`
--

CREATE TABLE `roommate` (
  `Name` varchar(50) NOT NULL,
  `Regno` char(9) NOT NULL,
  `Gender` char(1) NOT NULL,
  `State` varchar(50) NOT NULL,
  `bedtype` int(1) NOT NULL,
  `mailid` varchar(50) NOT NULL,
  `mobileno` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roommate`
--

INSERT INTO `roommate` (`Name`, `Regno`, `Gender`, `State`, `bedtype`, `mailid`, `mobileno`) VALUES
('Shikhar', '15BIT0269', 'M', 'Madhya Pradesh', 4, 'shikhar@gmail.com', 2147483647),
('Mrinalini', '17BCE0396', 'F', 'Uttar Pradesh', 4, 'mri@gmail.com', 2147483647),
('Mrinal', '17BCE0700', 'M', 'Himachal Pradesh', 2, 'dsvsdv@gmail.com', 2147483647),
('Ishita Gupta', '17BCE0710', 'F', 'Himachal Pradesh', 2, 'dsvsdv@gmail.com', 2147483647),
('Sanchi Chopra', '17BCE2030', 'F', 'Uttar Pradesh', 2, 'sanchichopra@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` text NOT NULL,
  `Regno` char(9) NOT NULL,
  `Gender` text NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Regno`, `Gender`, `Password`) VALUES
('Shikhar', '15BIT0260', 'M', '12345678'),
('Shikhar', '15BIT0269', 'M', '12345678'),
('Lakshya Gupta', '17BCE0001', 'M', 'laksh'),
('Mrinalini', '17BCE0396', 'F', 'hell'),
('Mrinal', '17BCE0700', 'M', 'hel'),
('Naman Gupta', '17BCE0701', 'M', 'heaven'),
('Ishita Gupta', '17BCE0710', 'F', 'hello'),
('Sanchi Chopra', '17BCE2030', 'F', 'teddy'),
('Rakesh Gupta', '17BEC0002', 'M', 'rakesh'),
('Bhavinin Awasthi', '17BEC0096', 'F', 'buaa'),
('Akshara Khare', '17BEC0246', 'F', 'alcatel'),
('Rekha Gupta', '17BEE0003', 'F', 'rekha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `preferences`
--
ALTER TABLE `preferences`
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `qualities`
--
ALTER TABLE `qualities`
  ADD KEY `regno` (`regno`);

--
-- Indexes for table `roommate`
--
ALTER TABLE `roommate`
  ADD PRIMARY KEY (`Regno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Regno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `preferences`
--
ALTER TABLE `preferences`
  ADD CONSTRAINT `preferences_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `roommate` (`Regno`);

--
-- Constraints for table `qualities`
--
ALTER TABLE `qualities`
  ADD CONSTRAINT `qualities_ibfk_1` FOREIGN KEY (`regno`) REFERENCES `roommate` (`Regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
