-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2025 at 12:11 AM
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
-- Database: `crime-reportingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`) VALUES
(1, 'crimeadmin', 'crimeadmin@gmail.com', 'crimeadmin@');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `com_id` int(11) NOT NULL,
  `com_name` varchar(30) NOT NULL,
  `com_address` varchar(60) NOT NULL,
  `com_contact` int(10) NOT NULL,
  `com_email` varchar(20) NOT NULL,
  `com_password` varchar(20) NOT NULL,
  `com_complaint` varchar(20) NOT NULL,
  `com_img` varchar(500) NOT NULL,
  `com_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`com_id`, `com_name`, `com_address`, `com_contact`, `com_email`, `com_password`, `com_complaint`, `com_img`, `com_status`) VALUES
(1, 'comname', 'comaddress', 2147483647, 'comemail@gmail.com', 'compassword', 'complaint 1', '', 'Resolved'),
(2, 'amal', 'thekkedath house kollam PO kollam', 2147483647, 'amal123@gmail.com', 'amal123@', 'hit and run', '', 'In Progress'),
(3, 'Aravind', 'manthop house kurisumootil po thrissur 685586', 2147483647, 'aravind1@gmail.com', 'aravind1@', 'theft on public plac', '', 'In Progress'),
(4, 'Arun', 'chandredath House malepparambil po palakkad', 2147483647, 'arun1@gmail.com', 'arun1@', 'hit and run case', '', 'Resolved'),
(5, 'Eldose', 'qwerty', 2147483647, 'eldose1@gmail.com', 'eldose1@', 'mental abuse', '', 'In Progress'),
(6, 'Abin', 'mamalakandam house thekkedath po ottapalam', 2147483647, 'abin1@gmail.com', 'abin1@', 'nothing', '', 'In Progress'),
(7, 'Arthur', 'House no 2 , North state, NY', 2147483647, 'arthur123@gmail.com', 'arthur123@', 'killed', 'bg1.jpg', 'In Progress'),
(8, 'Arthur', 'House no 2 , North state, NY', 2147483647, 'arthur123@gmail.com', 'arthur123@', 'killed', 'bg1.jpg', 'Pending'),
(9, 'Arthur', 'House no 2 , North state, NY', 2147483647, 'arthur123@gmail.com', 'arthur123@', 'killed', '1762384826_cardimg2.png', 'In Progress'),
(10, 'Arthur', 'House no 2 , North state, NY', 2147483647, 'arthur123@gmail.com', 'arthur123@', 'killed', '1762385484_icon1.png,1762385485_icon2.png', 'Resolved');

-- --------------------------------------------------------

--
-- Table structure for table `complaintp`
--

CREATE TABLE `complaintp` (
  `staff_id` int(11) NOT NULL,
  `from_name` varchar(20) NOT NULL,
  `from_contact` int(10) NOT NULL,
  `from_email` varchar(20) NOT NULL,
  `to_name` varchar(20) NOT NULL,
  `to_contact` int(10) NOT NULL,
  `to_email` varchar(20) NOT NULL,
  `crime_name` varchar(20) NOT NULL,
  `audio` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `crime`
--

CREATE TABLE `crime` (
  `fir_id` int(10) NOT NULL,
  `crime_name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `food_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `request_status` enum('Pending','approved','Decline') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_email`, `staff_pass`) VALUES
(1, 'staff1', 'staff1@gmail.com', 'staff1@'),
(2, 'Staff2', 'staff2@gmail.com', 'staff2@'),
(3, 'staff3', 'staff3@gmail.com', 'staff3@');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `user_phno` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_compl` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_address`, `user_phno`, `user_email`, `user_password`, `user_compl`) VALUES
(1, 'Aswin', 'Kozhikode', '9865988754', 'aswin123@gmail.com', 'aswin123@', ''),
(2, 'Amar', 'Ernakulam', '9887549865', 'amar123@gmail.com', 'amar123@', ''),
(3, 'Amal', 'Trivandrum', '9887549865', 'amal123@gmail.com', 'amal123@', ''),
(4, 'Goutham', 'Kollam', '9865875498', 'goutham123@gmail.com', 'goutham123@', ''),
(5, 'qname', '', '1234567891', 'qemail@gmail.com', 'qpassword@', ''),
(6, 'Adarsh', '', '9988776655', 'adarsh123@gmail.com', 'adarsh123@', ''),
(7, 'Abin Manuel', '', '8114568965', 'abin123@gmail.com', 'abin123@', ''),
(8, 'Albert Einstein', '', '9115748693', 'albert123@gmail.com', '$2y$10$y.GTtDmg.vbV9', ''),
(9, 'mname', '', '8111111111', 'mname1@gmail.com', '$2y$10$zb4KJysClIH8g', ''),
(10, 'plokok', '', '9865239865', 'plokok123@gmail.com', 'plokok123@', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `complaintp`
--
ALTER TABLE `complaintp`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `crime`
--
ALTER TABLE `crime`
  ADD PRIMARY KEY (`fir_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `complaintp`
--
ALTER TABLE `complaintp`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crime`
--
ALTER TABLE `crime`
  MODIFY `fir_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
