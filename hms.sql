-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2021 at 01:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `Adminname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`Adminname`, `pass`, `admin_id`) VALUES
('MYSQL', '123', 2);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_data`
--

CREATE TABLE `appointment_data` (
  `a_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `p_date` varchar(100) NOT NULL,
  `p_time` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `clinic_name1` varchar(100) NOT NULL,
  `clinic_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_data`
--

INSERT INTO `appointment_data` (`a_id`, `p_id`, `p_date`, `p_time`, `status`, `p_name`, `clinic_name1`, `clinic_id`, `amount`) VALUES
(236, 115, '2021-07-12', '16:45', 'pending', 'Prasanna Jayant Dhongde', 'Sai Clinic', 200, 200),
(237, 117, '2021-05-08', '19:49', 'pending', 'Sangita Dhongde', 'Chaitanya Clinic', 200, 500),
(238, 118, '2021-09-20', '16:57', 'pending', 'Rakesh Sharma', 'Krishna Clinic', 203, 40);

-- --------------------------------------------------------

--
-- Table structure for table `cancel_apt`
--

CREATE TABLE `cancel_apt` (
  `p_name` varchar(100) NOT NULL,
  `apt_date` varchar(100) NOT NULL,
  `apt_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_info`
--

CREATE TABLE `clinic_info` (
  `clinic_id` int(100) NOT NULL,
  `clinic_name` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `p_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic_info`
--

INSERT INTO `clinic_info` (`clinic_id`, `clinic_name`, `city`, `state`, `p_id`) VALUES
(203, 'Krishna Clinic', 'Ahmednagr', 'Maharashtra', 114);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info`
--

CREATE TABLE `doctor_info` (
  `idno` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `clinic_id` int(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `special` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_info`
--

INSERT INTO `doctor_info` (`idno`, `fname`, `lname`, `city`, `state`, `clinic_id`, `contact`, `special`) VALUES
(111, ' Chaitanya ', 'Joshi', 'Pune', 'Maharashtra', 200, 1234567890, 'Heart specialist'),
(112, ' Rohit', 'Kapoor', 'Pune', 'Maharashtra', 200, 2147483647, 'Skin special '),
(113, ' Paresh', 'Agarwal', 'Pune', 'Maharashtra', 200, 1234567890, 'BDS'),
(114, ' Priya', 'Nimse', 'Ahmednagr', 'Maharashtra', 200, 2147483647, 'General'),
(115, ' Rakesh', 'Dhakoji', 'Ahmednagr', 'Maharashtra', 200, 887508787, 'Homeopathy'),
(116, ' Prathamesh', 'Udawant', 'Pune', 'Maharashtra', 200, 1234567890, 'Heart specialist');

-- --------------------------------------------------------

--
-- Table structure for table `pat_registration`
--

CREATE TABLE `pat_registration` (
  `pat_id` int(100) NOT NULL,
  `pat_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile_no` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `p_group` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_registration`
--

INSERT INTO `pat_registration` (`pat_id`, `pat_name`, `email`, `password`, `gender`, `birthdate`, `city`, `mobile_no`, `age`, `p_group`) VALUES
(115, 'Prasanna Jayant Dongde', 'prasannadhongde321@gmail.com', 'Prasanna123', 'female', '2010-11-26', 'Pune', '8098797980', 10, 'Minor'),
(117, 'Sangita Dhongde', 'sangita123@gmail.com', 'Sangita123', 'female', '2021-05-19', 'Pune', '1234567890', 0, 'Minor'),
(118, 'Rakesh Sahrma', 'rakesh@gmail.com', 'Rakesh123', 'Male', '1998-07-20', 'Pune', '1234567890', 22, 'Adult');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_info`
--

CREATE TABLE `transaction_info` (
  `trans_id` int(100) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `pat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_info`
--

INSERT INTO `transaction_info` (`trans_id`, `p_name`, `email`, `payment_type`, `pat_id`) VALUES
(37, 'Prasanna Jayant Dongde', 'prasannadhongde321@gmail.com', 'Online', 112),
(38, 'Prasanna Jayant Dongde', 'prasannadhongde321@gmail.com', 'Offline', 114),
(39, 'Prasanna Jayant Dongde', 'prasannadhongde321@gmail.com', 'Online', 115),
(40, 'Sangita Dhongde', 'sangitadhomgde321@gmail.com', 'Online', 0),
(41, 'Rakesh Sahrma', 'rakesh@gmail.com', 'Online', 118);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment_data`
--
ALTER TABLE `appointment_data`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `clinic_info`
--
ALTER TABLE `clinic_info`
  ADD PRIMARY KEY (`clinic_id`);

--
-- Indexes for table `doctor_info`
--
ALTER TABLE `doctor_info`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `pat_registration`
--
ALTER TABLE `pat_registration`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `transaction_info`
--
ALTER TABLE `transaction_info`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment_data`
--
ALTER TABLE `appointment_data`
  MODIFY `a_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `clinic_info`
--
ALTER TABLE `clinic_info`
  MODIFY `clinic_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=205;

--
-- AUTO_INCREMENT for table `doctor_info`
--
ALTER TABLE `doctor_info`
  MODIFY `idno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `pat_registration`
--
ALTER TABLE `pat_registration`
  MODIFY `pat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `transaction_info`
--
ALTER TABLE `transaction_info`
  MODIFY `trans_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
