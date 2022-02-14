-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2022 at 11:08 AM
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
-- Database: `buycar`
--

-- --------------------------------------------------------

--
-- Table structure for table `buycar`
--

CREATE TABLE `buycar` (
  `Sno` int(3) NOT NULL,
  `car_name` text NOT NULL,
  `brand` text NOT NULL,
  `model` text NOT NULL,
  `min_cost_price` int(9) NOT NULL,
  `max_cost_price` int(9) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buycar`
--

INSERT INTO `buycar` (`Sno`, `car_name`, `brand`, `model`, `min_cost_price`, `max_cost_price`, `type`) VALUES
(1, 'Maruti Alto', 'Maruti', 'Alto\r\n', 357003, 465401, 'economy'),
(2, 'Hyundai Grand', 'Hyundai', 'Grand', 711000, 748000, 'budget'),
(3, 'Hyundai i20', 'Hyundai ', 'i20', 854082, 1307926, 'midrange'),
(4, 'Ford Ecosport', 'Ford', 'Ecosport', 1014000, 1379000, 'midrange'),
(5, 'Maruti Wagon R', 'Maruti', 'Wagon R', 516000, 694000, 'budget'),
(6, 'Hyundai i-10', 'Hyundai', 'i10', 654000, 663000, 'budget'),
(7, 'Hyundai Verna', 'Hyundai', 'Verna', 1309000, 1829000, 'luxary'),
(8, 'Renault Duster', 'Renault', 'Duster', 1143444, 1690333, 'luxary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buycar`
--
ALTER TABLE `buycar`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buycar`
--
ALTER TABLE `buycar`
  MODIFY `Sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
