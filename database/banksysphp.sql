-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: july 10, 2021 at 04:35 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banksysphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1, 'Musabbir', 'Masad', 51000, '2021-11-04 11:29:15'),
(2, 'Musabbir', 'Rizwan', 25000, '2021-11-10 13:30:51'),
(3, 'Nitish', 'Musabbir', 5000, '2021-11-06 9:11:36'),
(4, 'Ibran', 'Abid', 26950, '2021-11-08 14:21:07'),
(5, 'Galib', 'Mansur', 7510, '2021-11-11 10:15:14'),
(6, 'Musabbir', 'Abid', 35100, '2021-11-03 3:13:7'),
(7, 'Bhumika', 'Nitish', 3150, '2021-11-04 2:6:5');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(155) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `balance`) VALUES
(1, 'Musabbir', 'musa@gmail.com', 'Male', 6500),
(2, 'Ibran', 'ibran@gmail.com', 'Male', 40650),
(3, 'Khushbu', 'khushbu@gmail.com', 'Female', 13750),
(4, 'Rizwan', 'rizwan@gmail.com', 'Male', 10005),
(5, 'Nitish', 'nitish@gmail.com', 'Male', 2516170),
(6, 'Abid', 'abid@gmail.com', 'Male', 76000),
(7, 'Ritik', 'ritik@gmail.com', 'Male', 32451),
(8, 'Mansur', 'mansur@gmail.com', 'Male', 212360),
(9, 'Bhumika', 'bhumika@gmail.com', 'Female', 826090),
(10, 'Galib', 'galib@gmail.com', 'Male', 42980),
(11, 'Reyan', 'reyan@gmail.com', 'Male', 4000000),
(12, 'Masad', 'masad@gmail.com', 'Male', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
