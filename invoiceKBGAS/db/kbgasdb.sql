-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2020 at 09:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbgasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliancedetails`
--

CREATE TABLE `appliancedetails` (
  `id` int(11) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `flue_type` varchar(100) NOT NULL,
  `opki` varchar(100) NOT NULL,
  `sdco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliancedetails`
--

INSERT INTO `appliancedetails` (`id`, `loc`, `description`, `type`, `flue_type`, `opki`, `sdco`) VALUES
(8, 'kumasi', 'nice', 'and', 'cool', 'big', 'happy');

-- --------------------------------------------------------

--
-- Table structure for table `combusting_tbl`
--

CREATE TABLE `combusting_tbl` (
  `id` int(11) NOT NULL,
  `item1` varchar(200) NOT NULL,
  `item2` varchar(200) NOT NULL,
  `item3` varchar(200) NOT NULL,
  `item4` varchar(200) NOT NULL,
  `item5` varchar(200) NOT NULL,
  `item6` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `combusting_tbl`
--

INSERT INTO `combusting_tbl` (`id`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`) VALUES
(2, '15', '15', '25', '12', '15', '10');

-- --------------------------------------------------------

--
-- Table structure for table `enginernotetbl`
--

CREATE TABLE `enginernotetbl` (
  `id` int(11) NOT NULL,
  `svi` varchar(10) NOT NULL DEFAULT 'Yes',
  `eca` varchar(10) NOT NULL DEFAULT 'Yes',
  `sgtt` varchar(10) NOT NULL DEFAULT 'Yes',
  `ebs` varchar(10) NOT NULL DEFAULT 'Yes',
  `pwni` varchar(10) NOT NULL DEFAULT 'Yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enginernotetbl`
--

INSERT INTO `enginernotetbl` (`id`, `svi`, `eca`, `sgtt`, `ebs`, `pwni`) VALUES
(1, 'No', 'Yes', 'Yes', 'Yes', 'Yes'),
(2, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `faulty_tbl`
--

CREATE TABLE `faulty_tbl` (
  `id` int(11) NOT NULL,
  `fault` varchar(100) NOT NULL,
  `remedy` varchar(200) NOT NULL,
  `issued` varchar(200) NOT NULL,
  `sticker` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faulty_tbl`
--

INSERT INTO `faulty_tbl` (`id`, `fault`, `remedy`, `issued`, `sticker`) VALUES
(8, 'Tuffour', 'is', 'not', 'easy oo');

-- --------------------------------------------------------

--
-- Table structure for table `flutests_tbl`
--

CREATE TABLE `flutests_tbl` (
  `id` int(11) NOT NULL,
  `st` varchar(150) NOT NULL,
  `desp` varchar(150) NOT NULL,
  `ft` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flutests_tbl`
--

INSERT INTO `flutests_tbl` (`id`, `st`, `desp`, `ft`) VALUES
(4, 'No', 'Yes\n\n\n\n', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `inspection_details_tbl`
--

CREATE TABLE `inspection_details_tbl` (
  `id` int(11) NOT NULL,
  `satt` varchar(150) NOT NULL,
  `fvc` varchar(150) NOT NULL,
  `adv` varchar(150) NOT NULL,
  `la` varchar(150) NOT NULL,
  `Insp` varchar(150) NOT NULL,
  `serv` varchar(150) NOT NULL,
  `stu` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspection_details_tbl`
--

INSERT INTO `inspection_details_tbl` (`id`, `satt`, `fvc`, `adv`, `la`, `Insp`, `serv`, `stu`) VALUES
(1, 'man', 'him', 'how', 'see', 'kill', 'find', 'look');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliancedetails`
--
ALTER TABLE `appliancedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `combusting_tbl`
--
ALTER TABLE `combusting_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enginernotetbl`
--
ALTER TABLE `enginernotetbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faulty_tbl`
--
ALTER TABLE `faulty_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flutests_tbl`
--
ALTER TABLE `flutests_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspection_details_tbl`
--
ALTER TABLE `inspection_details_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliancedetails`
--
ALTER TABLE `appliancedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `combusting_tbl`
--
ALTER TABLE `combusting_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enginernotetbl`
--
ALTER TABLE `enginernotetbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faulty_tbl`
--
ALTER TABLE `faulty_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `flutests_tbl`
--
ALTER TABLE `flutests_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `inspection_details_tbl`
--
ALTER TABLE `inspection_details_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
