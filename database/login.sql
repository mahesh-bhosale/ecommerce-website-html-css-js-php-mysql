-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 03:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_submissions`
--

CREATE TABLE `contact_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_submissions`
--

INSERT INTO `contact_submissions` (`id`, `name`, `email`, `message`) VALUES
(1, 'Mahesh Bhosale', 'maheshbhosale1212004@gmail.com', 'cc'),
(2, 'abc XYZ', 'abc@gmail.com', 'DSDSFSFVDF'),
(3, 'Mahesh Bhosale', 'maheshbhosale1212004@gmail.com', 'fhgg'),
(4, 'Mahesh Bhosale', 'maheshbhosale1212004@gmail.com', 'cczczxaxx'),
(5, 'zxc', 'zxc@gmail.com', 'sjhfrihfnlo'),
(6, 'Mahesh Bhosale', 'maheshbhosale1212004@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(200) DEFAULT NULL,
  `Email` varchar(255) NOT NULL,
  `Age` int(11) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Email`, `Age`, `Password`, `Address`, `ContactNumber`) VALUES
(14, 'mahesh', 'maheshbhosale1212004@gmail.com', 20, '1234', 'jvhjnbjnvhjnm ,', '9594725359'),
(15, 'mahesh', 'mahesh@gmail.com', 21, '1234', 'nerul navi mumbai 400706 ', '9594725359'),
(16, 'abc', 'abc@gmail.com', 20, '1234', 'terna nerul ', '9256234861'),
(17, 'abcd', 'abcd@gmail.com', 20, '5678', 'sugsy', '1234567890'),
(18, 'nishant', 'nishant@gmail.com', 19, '1234', 'thane', '6867557676'),
(19, 'random', 'random@gmail.com', 25, '1234', 'nerul terna', '0147852369'),
(20, 'mahesh', 'maheshbhosale55@gmail.com', 20, '1234', 'nerul', '9594725359'),
(21, 'Kabya', 'kabya@gmail.com', 19, '1234', 'Nerul', '9999999999'),
(22, 'oniket', 'oniket@gmail.com', 21, '1234', 'navi mumbai', '9988777778');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_submissions`
--
ALTER TABLE `contact_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
