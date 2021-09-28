-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 06:12 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wtlproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
CREATE DATABASE `wtlproject`;

CREATE TABLE `donate` (
  `name` text NOT NULL,
  `phone` int(10) NOT NULL,
  `people` int(5) NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`name`, `phone`, `people`, `date`, `address`, `id`) VALUES
('ASHAD', 1234567890, 10, '2017-10-03', 'MHSSCE', 1),
('Rumi', 1234567890, 10, '2017-10-03', 'mhssce', 2),
('meezan', 1234567891, 11, '2017-10-28', 'mahim', 4),
('rumi', 1212121212, 11, '2017-10-29', 'mhssce', 5);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_name` varchar(8) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_name`, `email`, `mobile`, `password`, `address`, `id`) VALUES
('abc', 'abc@gmail.com', 1234567899, '12345', 'mxsjdasdlj', 1),
('xyz', 'xyz@gmail.com', 1234567899, '12345', 'dokdokdo', 2),
('mno', 'mno@gmail.com', 1234567899, '12345', 'iejdiwdkp', 3),
('pqr', 'pqr@gmail.com', 1234567899, '12345', 'fidjfifj', 4),
('rumishai', 'rumishaikh@gmail.com', 1234567890, 'rumishaikh', 'mumbra', 7),
('shaikhme', 'ms343536@gmail.com', 1234567890, 'shaikh', 'xavier', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
