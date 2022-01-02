-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2020 at 11:23 AM
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
-- Database: `kbgasapp`
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
(8, 'kumasi', 'nice', 'and', 'cool', 'big', 'happy'),
(9, 'happy', 'birth', 'day odo', 'line', 'work', 'looking');

-- --------------------------------------------------------

--
-- Table structure for table `appliancedetails_temp`
--

CREATE TABLE `appliancedetails_temp` (
  `id` int(11) NOT NULL,
  `loc` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `flue_type` varchar(100) NOT NULL,
  `opki` varchar(100) NOT NULL,
  `sdco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `ratingNumber`, `title`, `comments`, `created`, `modified`, `status`) VALUES
(3, 12345678, 1234567, 5, 'tuffour', 'i love your work', '2020-08-17 11:11:26', '2020-08-17 11:11:26', 1),
(4, 12345678, 1234567, 1, 'napo', 'good one', '2020-08-17 11:47:06', '2020-08-17 11:47:06', 1),
(5, 12345678, 1234567, 1, 'Ghana', 'we are trying our best', '2020-08-17 12:37:57', '2020-08-17 12:37:57', 1),
(6, 12345678, 1234567, 5, 'napo', 'it was good', '2020-08-17 22:49:32', '2020-08-17 22:49:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `uid` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`uid`, `email`, `password`, `name`) VALUES
(1, 'sam@gmail.com', 'sam', 'Napo'),
(2, 'admin@admin.com', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `messagetb`
--

CREATE TABLE `messagetb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` longtext NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagetb`
--

INSERT INTO `messagetb` (`id`, `name`, `email`, `phone`, `message`, `date`) VALUES
(1, 'Napoleon Sam', 'samnapoleon86@gmail.com', '0245112561', 'Good ', '2020-08-17 11:47:05'),
(2, 'Napoleon Sam', 'ama@gmail.com', '0245112561', 'try', '2020-08-17 11:53:49'),
(3, 'Napoleon Sam', 'kwame@gmail.com', '0245112561', 'Try', '2020-08-17 11:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `propert_tbl`
--

CREATE TABLE `propert_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `fname` varchar(150) DEFAULT NULL,
  `lname` varchar(150) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `business` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telephone` varchar(150) DEFAULT NULL,
  `mobile` varchar(150) DEFAULT NULL,
  `alt_telephone` varchar(150) DEFAULT NULL,
  `work_telephone` varchar(150) DEFAULT NULL,
  `UPRN` varchar(150) DEFAULT NULL,
  `alt_ID` varchar(100) DEFAULT NULL,
  `Invoice_Payable` varchar(100) DEFAULT NULL,
  `Preferred_Invoice_Bank` varchar(100) DEFAULT NULL,
  `PropertyNotes` text,
  `RiskNote` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `propert_tbl`
--

INSERT INTO `propert_tbl` (`id`, `title`, `fname`, `lname`, `type`, `business`, `address`, `email`, `telephone`, `mobile`, `alt_telephone`, `work_telephone`, `UPRN`, `alt_ID`, `Invoice_Payable`, `Preferred_Invoice_Bank`, `PropertyNotes`, `RiskNote`) VALUES
(1, 'Mr', 'Napoleon', 'Sam', 'Private', 'HouseParty', 'WS-3932558', 'paakumisam@gmail.com', '233245112561', '3245112561', '0245112561', '0200661625', '458', '456', '1', 'KWABED UTILITY LTD', 'Happy you', 'See them'),
(2, 'Miss', 'Hannah', 'Kwofie', 'Tenant', 'HouseParty', 'WS-3932558', 'kwame@gmail.com', '233245112561', '3245112561', '0245112561', '0200661625', '458', '456', '2', 'KWABED UTILITY LTD', 'look Sharp', 'smart thinking'),
(3, 'Miss', 'Hannah', 'Kwofie', 'Landlord', 'HouseParty', 'WS-3932558', 'kwame@gmail.com', '233245112561', '3245112561', '0245112561', '0200661625', '458', '456', '2', 'KWABED UTILITY LTD', 'look Sharp', 'smart thinking'),
(4, 'Mr', 'Kwame', 'Sarpong', 'Landlord', 'Water', 'WS-3932558', 'sarpong@gmail.com', '233245112561', '3245112561', '0245112562', '0246112561', '7562', '9658', 'Kwame', 'KWABED UTILITY LTD', 'Save the date', 'have been checked'),
(5, 'Mr', 'Kwame', 'Sarpong', 'Landlord', 'Water', 'WS-3932558', 'sarpong@gmail.com', '233245112561', '3245112561', '0245112562', '0246112561', '7562', '9658', 'Kwame', 'KWABED UTILITY LTD', 'Save the date', 'have been checked');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `order_receiver_name` varchar(250) NOT NULL,
  `order_receiver_address` text NOT NULL,
  `order_total_before_tax` decimal(10,2) NOT NULL,
  `order_total_tax1` decimal(10,2) NOT NULL,
  `order_total_tax2` decimal(10,2) NOT NULL,
  `order_total_tax3` decimal(10,2) NOT NULL,
  `order_total_tax` decimal(10,2) NOT NULL,
  `order_total_after_tax` decimal(10,2) NOT NULL,
  `order_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_no`, `order_date`, `order_receiver_name`, `order_receiver_address`, `order_total_before_tax`, `order_total_tax1`, `order_total_tax2`, `order_total_tax3`, `order_total_tax`, `order_total_after_tax`, `order_datetime`) VALUES
(1, '455', '2020-08-26', 'Napoleon Sam', 'Takoradi', '300.00', '0.60', '0.60', '0.60', '1.80', '301.80', '2020-08-26 00:00:00'),
(2, '78995', '2020-10-14', 'Kwame', 'plt61', '150.00', '1.50', '1.50', '1.50', '4.50', '154.50', '2020-10-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `order_item_quantity` varchar(50) NOT NULL,
  `order_item_price` decimal(10,2) NOT NULL,
  `order_item_actual_amount` decimal(10,2) NOT NULL,
  `order_item_tax1_rate` decimal(10,2) NOT NULL,
  `order_item_tax1_amount` decimal(10,2) NOT NULL,
  `order_item_tax2_rate` decimal(10,2) NOT NULL,
  `order_item_tax2_amount` decimal(10,2) NOT NULL,
  `order_item_tax3_rate` decimal(10,2) NOT NULL,
  `order_item_tax3_amount` decimal(10,2) NOT NULL,
  `order_item_final_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`order_item_id`, `order_id`, `item_name`, `order_item_quantity`, `order_item_price`, `order_item_actual_amount`, `order_item_tax1_rate`, `order_item_tax1_amount`, `order_item_tax2_rate`, `order_item_tax2_amount`, `order_item_tax3_rate`, `order_item_tax3_amount`, `order_item_final_amount`) VALUES
(1, 1, 'Cement', '20', '15.00', '300.00', '0.20', '0.60', '0.20', '0.60', '0.20', '0.60', '301.80'),
(2, 2, 'Cream', '15', '10.00', '150.00', '1.00', '1.50', '1.00', '1.50', '1.00', '1.50', '154.50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appliancedetails`
--
ALTER TABLE `appliancedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appliancedetails_temp`
--
ALTER TABLE `appliancedetails_temp`
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
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `messagetb`
--
ALTER TABLE `messagetb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propert_tbl`
--
ALTER TABLE `propert_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appliancedetails`
--
ALTER TABLE `appliancedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `appliancedetails_temp`
--
ALTER TABLE `appliancedetails_temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combusting_tbl`
--
ALTER TABLE `combusting_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inspection_details_tbl`
--
ALTER TABLE `inspection_details_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messagetb`
--
ALTER TABLE `messagetb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `propert_tbl`
--
ALTER TABLE `propert_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
