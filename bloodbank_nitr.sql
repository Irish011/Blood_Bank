-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2021 at 11:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank_nitr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `usrname` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `org_name` varchar(50) NOT NULL,
  `incharge_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `quantity` int(11) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `bank` varchar(50) DEFAULT NULL,
  `m_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `req_blood`
--

CREATE TABLE `req_blood` (
  `id` int(11) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `inch_doc` varchar(40) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `blood` varchar(5) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `ldate` varchar(20) DEFAULT NULL,
  `preference` varchar(100) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `date`, `blood`, `aadhar`, `mobile`, `email`, `state`, `district`, `city`, `ldate`, `preference`, `password`) VALUES
(1, 'irish', '', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(2, 'iirish', '', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(3, 'jj', '', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(4, '', '', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(5, 'iijiji', '', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(6, 'hiiih', 'Male', '0000-00-00', '', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(7, 'iirish', 'Other', '2021-10-29', '', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(8, 'jj', 'Male', '2021-10-30', 'O+', 0, 0, '', '', '', '', '0000-00-00', '', ''),
(9, 'ggf', 'Male', '2021-10-08', 'O+', 0, 0, '', 'Assam', '', '', '0000-00-00', '', ''),
(10, 'jkjkjkjk', 'Male', '2021-10-29', 'O-', 0, 0, '', 'Rajasthan', 'Alwar', '', '0000-00-00', '', ''),
(11, 'Irishh', 'Male', '2021-10-29', 'O+', 0, 0, '', 'Assam', 'Barpeta', 'Hameda', '2021-10-29', '', ''),
(12, 'Irish AJAYBHARTI', 'Male', '2021-10-29', 'O+', 0, 0, '', 'Gujarat', 'Anand', 'Ahmedabad', '2021-10-28', '', ''),
(13, 'Minesh Ajaybharti', 'Male', '2021-10-30', 'O+', 0, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-29', 'Once in 3 Months', ''),
(14, 'minesh chandra Ajaybharti', 'Male', '2021-10-29', 'O+', 0, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-29', 'Once in 3 Months', ''),
(15, 'minesh chandra Ajaybharti', 'Male', '2021-10-29', 'O+', 0, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-29', 'Once in 3 Months', ''),
(16, 'Minesh Ajaybharti', 'Male', '2021-10-09', 'O+', 0, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-21', 'Once in 3 Months', ''),
(17, 'Minesh Ajaybharti', 'Male', '2021-10-09', 'O+', 0, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-21', 'Once in 3 Months', 'irish'),
(18, 'Minesh Ajaybharti', 'Male', '2021-10-09', 'O+', 0, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-21', 'Once in 3 Months', 'irish'),
(19, 'Irish AJAYBHARTI', 'Male', '2021-09-30', 'O+', 0, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-29', 'Once in 3 Months', 'irish123'),
(20, 'Minesh Ajaybharti', 'Male', '2021-10-30', 'O+', 123454321232, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-11-03', 'Once in 3 Months', 'irish'),
(21, 'Minesh Ajaybharti', 'Male', '2021-10-30', 'O+', 123454321232, 0, '', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-11-03', 'Once in 3 Months', 'irish'),
(22, 'Minesh Ajaybharti', 'Male', '2021-10-08', 'O+', 123234211234, 919913701881, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-22', 'Once in 3 Months', 'irish'),
(23, 'Irish AJAYBHARTI', 'Male', '2021-10-07', 'O-', 123465432342, 7567055779, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-26', 'Once in 3 Months', 'irish123'),
(24, 'Irish M Ajaybharti', 'Male', '2021-10-30', 'O+', 554632321234, 7567055779, 'irishajaybharti11@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-22', 'Once in 3 Months', 'iirish123'),
(25, 'minesh chandra Ajaybharti', 'Male', '2021-10-23', 'O+', 876543212345, 7567055779, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-28', 'Once in 3 Months', 'iirishwer'),
(26, 'minesh chandra Ajaybharti', 'Male', '2021-10-23', 'O+', 876543212345, 7567055779, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '2021-10-28', 'Once in 3 Months', 'iirishwer'),
(27, 'Minesh Ajaybharti', 'Male', '2021-10-16', 'O+', 887766554434, 9913701881, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '', 'Once in 3 Months', 'ijij'),
(28, 'GG', 'Male', '2021-10-30', 'O+', 765456354231, 7567055779, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahmedabad', '', 'Once in 3 Months', 'irish123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `d_o_b` date NOT NULL,
  `b_group` varchar(4) NOT NULL,
  `aadhar` bigint(12) NOT NULL,
  `m_no` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `last_donation` date DEFAULT NULL,
  `preference` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req_blood`
--
ALTER TABLE `req_blood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `req_blood`
--
ALTER TABLE `req_blood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
