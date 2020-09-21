-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2020 at 05:52 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hfdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `aid` int(11) NOT NULL,
  `auser` varchar(63) NOT NULL,
  `aemail` varchar(63) NOT NULL,
  `apass` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`aid`, `auser`, `aemail`, `apass`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cname` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Food'),
(2, 'Toys'),
(3, 'Pet'),
(4, 'Habitat'),
(5, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `lid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `pqty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`lid`, `rid`, `pid`, `pqty`) VALUES
(1, 1, 7, 1),
(2, 1, 8, 1),
(3, 2, 1, 10),
(4, 3, 4, 1),
(5, 3, 5, 1),
(8, 4, 1, 1),
(9, 5, 2, 1),
(10, 5, 7, 1),
(11, 5, 6, 1),
(12, 6, 5, 1),
(13, 7, 6, 1),
(14, 8, 8, 1),
(15, 8, 7, 1),
(16, 8, 9, 1),
(17, 9, 1, 5),
(18, 9, 2, 2),
(19, 9, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `pname` varchar(63) NOT NULL,
  `pprice` int(11) NOT NULL,
  `pquantity` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pprice`, `pquantity`, `cid`) VALUES
(1, 'Treats', 15, 8, 1),
(2, 'Aquarium', 700, 20, 4),
(3, 'Guinea Pig', 200, 50, 3),
(4, 'Bird', 120, 40, 3),
(5, 'Fish', 20, 121, 3),
(6, 'Hamster', 60, 82, 3),
(7, 'Dog', 1200, 24, 3),
(8, 'Cat', 1600, 20, 3),
(9, 'Rabbit', 950, 26, 3),
(21, 'Ball', 25, 132, 2);

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `rid` int(11) NOT NULL,
  `rdatetime` datetime NOT NULL DEFAULT current_timestamp(),
  `rtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`rid`, `rdatetime`, `rtotal`) VALUES
(1, '2020-03-05 07:56:25', 2800),
(2, '2020-03-05 07:56:25', 150),
(3, '2020-03-05 07:56:25', 140),
(4, '2020-03-11 23:59:13', 15),
(5, '2020-03-12 00:02:43', 1960),
(6, '2020-03-12 00:07:18', 20),
(7, '2020-03-12 00:08:15', 60),
(8, '2020-03-12 00:10:20', 3750),
(9, '2020-03-12 23:32:22', 1535);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`lid`),
  ADD KEY `rid` (`rid`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `receipt` (`rid`),
  ADD CONSTRAINT `list_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `product` (`pid`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `category` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
