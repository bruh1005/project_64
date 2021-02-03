-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2021 at 08:00 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `capacity` int(10) NOT NULL,
  `date_strat` date NOT NULL,
  `date_stop` date NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `driver_id` int(10) NOT NULL,
  `car_id` int(10) NOT NULL,
  `mile_start` int(10) NOT NULL,
  `mile_stop` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(10) NOT NULL COMMENT 'เลขทะเบียนรถ',
  `type` varchar(20) NOT NULL COMMENT 'ประเภท',
  `province` varchar(20) NOT NULL COMMENT 'จังหวัด',
  `brand` varchar(20) NOT NULL COMMENT 'ยี่ห้อ',
  `capacity` int(10) NOT NULL COMMENT 'จำนวนความจุ',
  `cur_miles` int(10) NOT NULL COMMENT 'เลขไม',
  `carstatus` int(10) NOT NULL COMMENT 'สถานะของรถ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(10) NOT NULL COMMENT 'รหัสแผนก',
  `department_name` varchar(30) NOT NULL COMMENT 'ชื่อแผนก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'แผนกช่างกลโรงงาน'),
(2, 'แผนกช่างยนต์'),
(3, 'แผนกไฟฟ้ากำลัง'),
(4, 'แผนกช่างอิเล็กทรอนิกส์'),
(5, 'แผนกช่างเทคนิคคอมพิวเตอร์'),
(6, 'แผนกช่างก่อสร้าง'),
(7, 'แผนกช่างเชื่อมโลหะ'),
(8, 'แผนกช่างสถาปัตยกรรม'),
(9, 'แผนกโลจิสติกส์'),
(10, 'แผนกขนส่งระบบทางราง'),
(11, 'แผนกช่างเทคนิคอุตสาหกรรม'),
(12, 'แผนกช่างเขียนแบบเครื่องกล'),
(13, 'แผนกเทคโนโลยีสารสนเทศ'),
(14, 'แผนกช่างเมคคาทรอนิกส์');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_id` int(10) NOT NULL COMMENT 'รหัสพนักงขับรถ',
  `d_fname` varchar(50) NOT NULL COMMENT 'ชื่อพนักงานขับรถ',
  `d_lname` varchar(50) NOT NULL COMMENT 'นามพนักงานขับรถ',
  `d_phone` varchar(15) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `driver_no` varchar(20) NOT NULL COMMENT 'หมายเลขใบขัยขี่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `p_id` int(10) NOT NULL COMMENT 'รหัสตำแหน่ง',
  `p_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'ตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`p_id`, `p_name`) VALUES
(1, 'ผู้อำนวยการ'),
(2, 'รองผู้อำนวยการ'),
(3, 'อาจารย์'),
(4, 'เจ้าหน้าที่');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL COMMENT 'รหัสผู้ใช้',
  `username` varchar(20) NOT NULL COMMENT 'ชื่อผู้ใช้',
  `password` int(20) NOT NULL COMMENT 'รหัสผ่าน',
  `department_id` int(10) NOT NULL COMMENT 'แผนก',
  `p_id` int(10) NOT NULL COMMENT 'รหัสตำแหน่ง',
  `fname` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `lname` varchar(20) NOT NULL COMMENT 'นามสกุล',
  `phone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'สิทธิ์การใช้งาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `department_id`, `p_id`, `fname`, `lname`, `phone`, `status`) VALUES
(1, 'admin', 12345678, 13, 4, 'admin', 'admin', '0952243580', 'admin'),
(2, 'test', 1234, 13, 4, 'gg', 'gg', '0896589658', 'user'),
(3, 'sangun', 12345, 3, 3, 'jirawat', 'sangun', '0853912365', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'เลขทะเบียนรถ';

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสแผนก', AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสตำแหน่ง', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้ใช้', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
