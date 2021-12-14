-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 09:53 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `blood_group`, `contact`, `city`) VALUES
(1, 'Kalia', 'O+ve', '09887766554', 'Ranchi'),
(2, 'Deepak Kumar', 'AB+ve', '08118893327', 'Aurangabad'),
(4, 'Naman Utsav', 'O-ve', '08228893327', 'Jalandhar');

-- --------------------------------------------------------

--
-- Table structure for table `needed`
--

CREATE TABLE `needed` (
  `id` int(20) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `required_blood_group` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `needed`
--

INSERT INTO `needed` (`id`, `patient_name`, `required_blood_group`, `contact`, `city`) VALUES
(1, 'Manoj Kumar', 'B+ve', '09887766554', 'Dhehradun'),
(3, 'Rohan Kumar', 'O+ve', '08118893327', 'Ranchi'),
(4, 'Ankit Kumar', 'A+ve', '06572362578', 'Delhi'),
(5, 'Chulbul Pandey', 'AB+ve', '09696498523', 'Lukhnow');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(12) NOT NULL,
  `lname` varchar(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `password`, `created_at`, `role_as`, `status`) VALUES
(1, 'Deepak', 'Kumar', 'deepakjsr25@gmail.com', '123456', '2021-12-13 18:27:47', 1, 0),
(2, 'Adam', 'Marcz', 'deepakjsr25@gvhg', '123456', '2021-12-13 18:22:36', 0, 0),
(3, 'Steve', 'Jobs', '', '123456', '2021-12-13 13:48:16', 0, 0),
(4, 'Steve', 'Wozniak', 'deepakjsr25@dsvsdd', '123456', '2021-12-13 12:41:11', 0, 0),
(5, 'Mihir', 'Verma', 'man@dvsdv', '12345', '2021-12-13 12:41:31', 0, 0),
(6, 'Naman', 'Utsav', 'asav@sdvsd', '123', '2021-12-13 12:41:46', 0, 0),
(8, 'Abhishek', 'Kumar', 'abhi@gmai.com', '123456', '2021-12-13 18:27:41', 0, 0),
(11, 'Admin', 'Admin', 'admin@gmail.com', '123456', '2021-12-14 13:40:28', 1, 0),
(12, 'user', 'user', 'user@gmail.com', '123456', '2021-12-14 13:41:37', 0, 0),
(13, 'Kunal', 'Kumar', 'kumarkunal@gmail.com', '123456', '2021-12-14 14:05:44', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needed`
--
ALTER TABLE `needed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `needed`
--
ALTER TABLE `needed`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
