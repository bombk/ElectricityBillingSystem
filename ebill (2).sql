-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2021 at 09:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebill`
--

-- --------------------------------------------------------

--
-- Table structure for table `5amp`
--

CREATE TABLE `5amp` (
  `id` int(11) NOT NULL,
  `kwprhr` varchar(20) NOT NULL,
  `minAmt` int(11) NOT NULL,
  `energyRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `5amp`
--

INSERT INTO `5amp` (`id`, `kwprhr`, `minAmt`, `energyRate`) VALUES
(1, '0-10', 30, 0),
(2, '11-20', 30, 3),
(3, '21-30', 50, 6.5),
(4, '31-50', 50, 8),
(5, '51-100', 75, 9.5),
(6, '101-150', 100, 9.5),
(7, '151-250', 125, 10),
(8, '251-400', 150, 11),
(9, '400 Above', 175, 12);

-- --------------------------------------------------------

--
-- Table structure for table `15amp`
--

CREATE TABLE `15amp` (
  `id` int(11) NOT NULL,
  `kwprhr` varchar(20) NOT NULL,
  `minAmt` int(11) NOT NULL,
  `energyRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `15amp`
--

INSERT INTO `15amp` (`id`, `kwprhr`, `minAmt`, `energyRate`) VALUES
(1, '0-10', 50, 4),
(2, '11-20', 50, 4),
(3, '21-30', 75, 6.5),
(4, '31-50', 75, 8),
(5, '51-100', 100, 9.5),
(6, '101-150', 125, 9.5),
(7, '151-250', 150, 10),
(8, '251-400', 175, 11),
(9, '400 Above', 200, 12);

-- --------------------------------------------------------

--
-- Table structure for table `30amp`
--

CREATE TABLE `30amp` (
  `id` int(11) NOT NULL,
  `kwprhr` varchar(20) NOT NULL,
  `minAmt` int(11) NOT NULL,
  `energyRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `30amp`
--

INSERT INTO `30amp` (`id`, `kwprhr`, `minAmt`, `energyRate`) VALUES
(1, '0-10', 75, 5),
(2, '11-20', 75, 5),
(3, '21-30', 100, 6.5),
(4, '31-50', 100, 8),
(5, '51-100', 125, 9.5),
(6, '101-150', 150, 9.5),
(7, '151-250', 175, 10),
(8, '251-400', 200, 11),
(9, '400 Above', 225, 12);

-- --------------------------------------------------------

--
-- Table structure for table `60amp`
--

CREATE TABLE `60amp` (
  `id` int(11) NOT NULL,
  `kwprhr` varchar(20) NOT NULL,
  `minAmt` int(11) NOT NULL,
  `energyRate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `60amp`
--

INSERT INTO `60amp` (`id`, `kwprhr`, `minAmt`, `energyRate`) VALUES
(1, '0-10', 125, 6),
(2, '11-20', 125, 6),
(3, '21-30', 125, 6.5),
(4, '31-50', 125, 8),
(5, '51-100', 150, 9.5),
(6, '101-150', 200, 9.5),
(7, '151-250', 200, 10),
(8, '251-400', 250, 11),
(9, '400 Above', 275, 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'bom', 'bomncit@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `5amp`
--
ALTER TABLE `5amp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `15amp`
--
ALTER TABLE `15amp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `30amp`
--
ALTER TABLE `30amp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `60amp`
--
ALTER TABLE `60amp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `5amp`
--
ALTER TABLE `5amp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `15amp`
--
ALTER TABLE `15amp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `30amp`
--
ALTER TABLE `30amp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `60amp`
--
ALTER TABLE `60amp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
