-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 30, 2021 at 12:02 PM
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
  `email` varchar(40) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `ldate` varchar(20) DEFAULT NULL,
  `preference` varchar(30) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `date`, `blood`, `aadhar`, `mobile`, `email`, `state`, `district`, `city`, `ldate`, `preference`, `password`) VALUES
(1, 'Irish', 'Male', '2021-10-29', 'O+', 332123341221, 7567055779, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahahaha', '2021-10-23', 'Only in Emergency', 'irish'),
(2, 'Khushi', 'Other', '2021-10-29', 'B-', 756789906969, 9998000825, 'khushi@hotmail.com', 'Gujarat', 'Ahmedabad', 'Bopal', '2021-10-01', 'Once in 3 Months', 'iamkhushi'),
(3, 'Irish', 'Male', '2021-10-29', 'O+', 332123341221, 7567055779, 'ajaybhartiirish@gmail.com', 'Gujarat', 'Ahmedabad', 'Ahahaha', '2021-10-23', 'Only in Emergency', 'irish');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
