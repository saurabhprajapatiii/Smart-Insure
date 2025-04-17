-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 05:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurance`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_policy`
--

CREATE TABLE `customer_policy` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `relation` varchar(60) NOT NULL,
  `Sdate` date NOT NULL,
  `Pname` varchar(60) NOT NULL,
  `SumAssured` varchar(50) NOT NULL,
  `PremiumPerYear` varchar(50) NOT NULL,
  `PolicyCategory` varchar(50) NOT NULL,
  `PolicyTerm` int(20) NOT NULL,
  `ProfitRate` int(20) NOT NULL,
  `InstallmentType` varchar(60) NOT NULL,
  `InstallmentAmount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer_policy`
--

INSERT INTO `customer_policy` (`id`, `name`, `relation`, `Sdate`, `Pname`, `SumAssured`, `PremiumPerYear`, `PolicyCategory`, `PolicyTerm`, `ProfitRate`, `InstallmentType`, `InstallmentAmount`) VALUES
(3, 'Kamal', 'wife', '2025-04-11', 'Natural Death ', '1000000 ', '1500 ', 'Single ', 30, 30, 'Annually ', '36000 '),
(5, 'Payal', 'Self', '2025-02-03', 'Accidental Hospitalization ', '100000 ', '800 ', 'Single/Jointee ', 40, 25, 'Annually ', '24000 '),
(6, 'ram', 'father', '0000-00-00', 'Health ', '200000 ', '1000 ', 'Single/Jointee ', 25, 16, 'Half Annually ', '14000 ');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `receiver` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `comment`, `receiver`) VALUES
(4, 'Payal', 'Payal@gmail.com', 'i want to know about installment.', 'admin'),
(5, 'Kamal', 'Kamal@gmail.com', 'i want to know about policies.', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` enum('Press Release','Circular','Guideline') NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `plan_name` varchar(100) NOT NULL,
  `SumAssured` varchar(100) NOT NULL,
  `PremiumPerYear` varchar(100) NOT NULL,
  `PolicyCategory` varchar(60) NOT NULL,
  `PolicyTerm` int(60) NOT NULL,
  `ProfitRate` int(100) NOT NULL,
  `InstallmentAmount` int(100) NOT NULL,
  `InstallmentType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `plan_name`, `SumAssured`, `PremiumPerYear`, `PolicyCategory`, `PolicyTerm`, `ProfitRate`, `InstallmentAmount`, `InstallmentType`) VALUES
(6, 'Health', '200000', '1000', 'Single/Jointee', 25, 16, 14000, 'Half Annually'),
(9, 'Accidental Hospitalization', '100000', '800', 'Single/Jointee', 40, 25, 24000, 'Annually'),
(10, 'Natural Death', '1000000', '1500', 'Single', 30, 30, 36000, 'Annually');

-- --------------------------------------------------------

--
-- Table structure for table `policy_installment`
--

CREATE TABLE `policy_installment` (
  `id` int(11) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Pname` varchar(50) NOT NULL,
  `InstallmentAmount` int(30) NOT NULL,
  `InstallmentYear` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `policy_installment`
--

INSERT INTO `policy_installment` (`id`, `Name`, `Pname`, `InstallmentAmount`, `InstallmentYear`) VALUES
(1, 'Pooja', '  Natural Death', 36000, '2017-09-09'),
(2, 'Payal', ' Natural Death  ', 36000, '2024-09-27'),
(3, 'Kamal', ' Accidental Hospitalization  ', 24000, '2025-05-27'),
(4, 'Kamal', ' Accidental Hospitalization', 24000, '2024-09-18'),
(5, 'Kamal', ' Accidental Hospitalization  ', 24000, '2023-09-13');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `num` varchar(12) NOT NULL,
  `userType` varchar(30) NOT NULL,
  `manager_name` varchar(50) NOT NULL,
  `agent_name` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `num`, `userType`, `manager_name`, `agent_name`, `address`) VALUES
(1, 'krishna', 'krishna@gmail.com', 'qwerty', '8474743828', 'user', '', 'Radha', 'Gokul , utter Pradesh '),
(2, 'Kamal', 'Kamal@gmail.com', 'qwerty', '8908653789', 'user', '', 'Suraj', 'Tilak Nagar '),
(3, 'Madhav', 'Madhav@gmail.com', 'qwerty', '829208722', 'manager', '', '', 'Om Apartments'),
(5, 'Suraj', 'Suraj@gmail.com', 'qwerty', '7895456739', 'agent', 'Pooja', '', 'shiv nagar'),
(6, 'Radha', 'Radha@gmail.com', 'qwerty', '8463763567', 'agent', 'Madhav', '', 'Thane , Mumbai'),
(7, 'Payal', 'Payal@gmail.com', 'qwerty', '9873678998', 'user', '', 'Pooja', 'Madhya Pradesh'),
(8, 'Saurabh', 'Saurabh@gmail.com', 'qwerty', '8975098345', 'admin', '', '', 'Mumbai'),
(10, 'Pooja', 'Pooja@gmail.com', 'qwerty', '9876787654', 'manager', '', '', 'laxmi nagar'),
(12, 'ram', 'ram@gmail.com', 'ram', '8763572993', 'user', '', '', 'amb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_policy`
--
ALTER TABLE `customer_policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy_installment`
--
ALTER TABLE `policy_installment`
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
-- AUTO_INCREMENT for table `customer_policy`
--
ALTER TABLE `customer_policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `policy_installment`
--
ALTER TABLE `policy_installment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
