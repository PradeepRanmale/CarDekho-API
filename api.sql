-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 11:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `api`
--

CREATE TABLE `api` (
  `sno` int(3) NOT NULL,
  `brandname` text NOT NULL,
  `modelname` text NOT NULL,
  `kmdriven` int(7) NOT NULL,
  `startingprice` int(7) NOT NULL,
  `endingprice` int(7) NOT NULL,
  `location` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `api`
--

INSERT INTO `api` (`sno`, `brandname`, `modelname`, `kmdriven`, `startingprice`, `endingprice`, `location`, `type`) VALUES
(1, 'honda', 'city', 9383, 3849, 3849, 'pune', ''),
(2, 'mercedise', 'aclass', 60000, 120000, 110000, 'nashik', ''),
(3, 'bmd', 'coup', 70000, 1500000, 1400000, 'pune', ''),
(4, 'tata', 'aria', 80000, 300000, 280000, 'pune', ''),
(5, 'lamborghini', 'huracan', 7000, 500000, 410000, 'nashik', ''),
(6, 'honda', 'ciaz', 86867, 400000, 300000, 'pune', 'economy'),
(7, 'honda', 'ciaz', 8999, 400000, 300000, 'pune', 'economy'),
(9, 'mercedise', 'maybach', 50000, 1900000, 1800000, 'thane', 'luxary'),
(10, 'tata', 'hexa', 68999, 1200000, 1180000, 'nashik', 'midrang'),
(11, 'suzuki', 'baleno', 87000, 700000, 650000, 'pune', 'budget'),
(12, 'bmd', 'aclass', 40000, 100000, 80000, 'nashik', 'economy'),
(13, 'Hyundai', 'i20', 60000, 550000, 500000, 'Surat', 'budget');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api`
--
ALTER TABLE `api`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api`
--
ALTER TABLE `api`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
