-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 09:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Cid` int(5) NOT NULL,
  `Name` char(45) NOT NULL,
  `account_no` int(12) NOT NULL,
  `account_type` text NOT NULL,
  `balance` int(7) NOT NULL,
  `money_transfer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Cid`, `Name`, `account_no`, `account_type`, `balance`, `money_transfer`) VALUES
(101, 'Arham', 1100221155, 'saving', 10000, 0),
(102, 'Arham', 1100221155, 'savings', 10000, 5000),
(103, 'bilal', 1100223345, 'current', 15000, 5000),
(104, 'yasser', 1100229946, 'savings', 8755, 555),
(105, 'yasser', 1100229946, 'savings', 8755, 555),
(106, 'yasser', 1100229946, 'savings', 8755, 555),
(107, 'bilal', 1100226655, 'current', 10000, 500),
(108, 'abhay', 11223344, 'saving', 20000, 200);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL DEFAULT 'INDIA',
  `state` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `country`, `state`, `address`) VALUES
('AM0001', 'INDIA', 'ASSAM', 'MG Road, Pan Bazaar, Guwahati, Assam 781030'),
('DE0002', 'INDIA', 'DELHI', '5th Floor,D-Block,11,Parliament Street,New Delhi'),
('GA0003', 'INDIA', 'GOA', 'H No 0/51, Opposite ICAR, Near Old Goa Petrol Pump'),
('HA0004', 'INDIA', 'HARYANA', ' 9, Park Ave, Charmwood Village, Sector 39, Farida'),
('HP0005', 'INDIA', 'HIMACHAL PRADESH', 'Khasra No 91/1 & 93/1 Talpura, opposite Govt Poly '),
('KA0006', 'INDIA', 'KARNATAKA', 'Mangalore Rd, Hassan, Karnataka 573201'),
('MH0007', 'INDIA', 'MAHARASHTRA', '128, Chawal Mandi, Bilanpura, Achalpur, Maharashtr'),
('PJ0008', 'INDIA', 'PUNJAB', 'Civil Line, Jalandhar, Punjab 144006'),
('RJ0009', 'INDIA', 'RAJASTHAN', 'Sector - 3, Bhiwadi, Rajasthan 301019'),
('UP0010', 'INDIA', 'UTTAR PRADESH', 'Pocket L, Sector 18, Noida, Uttar Pradesh 201301');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `phone_no`, `message`) VALUES
('abhay', 'abhay@gmail.com', 200, 'hi,i am facing issues while login'),
('abhay', 'abhay@gmail.com', 200, 'hi,i am facing issues while login'),
('don', 'don@gmail.com', 100, 'hi ,i am good'),
('don', 'don@gmail.com', 300, 'hehe'),
('abhay', 'abhay@gmail.com', 2302, 'eksfmowfmwlrkfm'),
('', '', 0, ''),
('uobgo', '', 0, 'oubub'),
('', '', 0, ''),
('abhay', 'xyz@email', 53, 'blkdn'),
('abhay', 'xyz@email', 53, 'blkdn'),
('', '', 0, ''),
('hmgm', '', 0, 'vgn/m'),
('abhay', 'abhay@gmail.com', 120912, 'hehe'),
('oirs', 'dndn@gmail.com', 0, 'nd9isnvzs'),
('abhay', 'abhay@gmail.com', 1313, 'how are you'),
('abhay', 'abhay@gmail.com', 0, 'hehe');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `name`, `username`, `email`, `phone_no`, `password`, `gender`) VALUES
(1, 'abhay', 'abhay', 'abhay@gmail.com', 100, 'abhay', 'male'),
(4, 'don', 'don', 'don@gmail.com', 1300, 'don', 'male'),
(29, 'rohan', 'rohan', 'rohan', 200, 'rohan', 'male'),
(41, '', '', '', 0, '', 'male'),
(42, 'king', 'king', '', 0, 'king', 'male'),
(43, 'bilal', 'bilal', '', 0, 'bilal', 'male'),
(46, '', 'abhay123', '', 0, 'abhay123', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `type` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `time` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`type`, `amount`, `time`, `name`, `email`, `desc`) VALUES
('home', 10000, 12, 'abhay', 'abhay@gmail.com', 'hehe'),
('Home Loan', 10000, 12, 'rahul', 'rahul@gmail.com', 'hehe'),
('Home Loan', 10000, 12, 'efns', 'vdsvnsdn', 'nvdsvn'),
('Home Loan', 10000, 12, 'efns', 'vdsvnsdn', 'nvdsvn'),
('Home Loan', 10000, 12, 'efns', 'vdsvnsdn', 'nvdsvn'),
('Personal Loan', 312, 3, 'sacs', 'dszvz', 'dvss'),
('Car Loan', 21324, 2, 'ccgerdfb', 'fngkl g', 'jb kdf kld');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
