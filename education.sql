-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 22, 2024 at 10:49 AM
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
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user_name`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'a'),
(2, 'user', 'user', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(4) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `type` varchar(20) NOT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `address`, `type`, `lat`, `lng`) VALUES
(1, 'Surat Thani School', '88 Don Nok Road, Talat Subdistrict, Mueang Surat Thani District, Surat Thani 84000', 'School', 9.133663, 99.329994),
(2, 'Surat Thani Technical College', '143 Don Nok Road, Talat Subdistrict, Mueang Surat Thani District, Surat Thani 84000', 'college', 9.134913, 99.329994),
(3, 'Surat Thani City Hall', '48MJ+3VR Surat Thani City Hall, Don Nok Road, Makham Tia Subdistrict, Mueang District, Mueang Surat Thani District, Surat Thani 84000', 'city hall', 9.132933, 99.332146),
(4, 'Don Bosco Surat Technological College', '6 8 Chonkasem Road, Makham Tia Subdistrict Mueang Surat Thani District, Surat Thani 84000', 'college', 9.105797, 99.337830),
(5, 'Nipa Garden Hotel', 'Village No. 3 83/25 Liang Mueang Road, Mueang Surat Thani District, Surat Thani 84000', 'Hotel', 9.106713, 99.328537),
(6, 'Suratthani Rajabhat University', '272 Surat-Nasan Rd., Khun Thale Subdistrict, Mueang District, Surat Thani 84100', 'University', 9.085093, 99.364159),
(7, 'Night Inn Hotel', '217/5 Mueang Surat Thani District, Surat Thani 84000', 'Hotel', 9.119546, 99.337296),
(8, 'Chanraphat Resort Hotel', 'Village No. 6 110/89 Chonkasem Road, Makham Tia, Mueang Surat Thani District, Surat Thani 84000', 'Hotel', 9.123724, 99.342316),
(9, 'Bangkok Hospital? Surat', 'S no 212/1, Plot No. 59, Central Avenue, Next to Big Bazaar, Kalyani Nagar, Prathamesh Society, Kalyani Nagar, Pune, Maharashtra 411006', 'Hospital', 9.122743, 99.293198),
(11, 'zzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzz', 9.136695, 99.335564);

-- --------------------------------------------------------

--
-- Table structure for table `population`
--

CREATE TABLE `population` (
  `P_id` int(11) NOT NULL,
  `P_name` varchar(30) NOT NULL,
  `P_phone` varchar(10) NOT NULL,
  `P_age` int(3) NOT NULL,
  `P_rel` varchar(20) NOT NULL,
  `P_occ` varchar(50) NOT NULL,
  `P_ethnicity` varchar(20) NOT NULL,
  `P_nationality` varchar(20) NOT NULL,
  `P_debt` varchar(10) NOT NULL,
  `P_sav` varchar(10) NOT NULL,
  `P_con` varchar(10) NOT NULL,
  `P_income_m` int(7) NOT NULL,
  `P_expenses_m` int(7) NOT NULL,
  `P_income_y` int(7) NOT NULL,
  `P_source` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `population`
--

INSERT INTO `population` (`P_id`, `P_name`, `P_phone`, `P_age`, `P_rel`, `P_occ`, `P_ethnicity`, `P_nationality`, `P_debt`, `P_sav`, `P_con`, `P_income_m`, `P_expenses_m`, `P_income_y`, `P_source`) VALUES
(1, 'xxx', '0999999999', 99, 'xxxx', 'xxxx', 'xxxx', 'xxxxx', 'xxx', 'xxx', 'xxx', 999, 999, 999, 'xxxxxxxxxxxxxxx'),
(2, 'hani', '0999999999', 18, 'พุทธ', 'นักเรียน', 'ไทย', 'ไทย', '2', '1', '2', 9999, 9999, 9999, 'xxxxxxxxxx'),
(3, 'hani', '0999999999', 18, 'พุทธ', 'นักเรียน', 'ไทย', 'ไทย', '2', '1', '2', 9999, 9999, 9999, 'xxxxxxxxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `population`
--
ALTER TABLE `population`
  ADD PRIMARY KEY (`P_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `population`
--
ALTER TABLE `population`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
testtest