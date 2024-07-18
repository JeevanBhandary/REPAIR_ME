-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 14, 2023 at 09:09 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair_me`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(4) NOT NULL,
  `a_name` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `password`, `date`) VALUES
(1, 'admin', '$2y$10$n0qYL61sgjZs8NjCBUcs3u3Ez.NRm3V3YBQ3BVZ0c3ZBYx.KfTCoG', '2023-05-13 12:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `or_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `serv_id` int(10) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_email` varchar(60) NOT NULL,
  `b_phone` bigint(10) NOT NULL,
  `b_address` varchar(150) NOT NULL,
  `v_number` varchar(50) NOT NULL,
  `b_date` date NOT NULL,
  `b_time` time NOT NULL,
  `b_status` varchar(90) NOT NULL,
  `unid` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `or_id`, `c_id`, `serv_id`, `b_name`, `b_email`, `b_phone`, `b_address`, `v_number`, `b_date`, `b_time`, `b_status`, `unid`) VALUES
(4, 4, 4, 1, 'saad ahmed', 'jeevan@gmail.com', 9544252190, 'Kasaragod, Kerala', 'KA 21 E 2625', '2023-06-02', '09:42:00', 'Service_Completed', '647819dca8fee'),
(31, 31, 7, 1, 'Jeevan Bhandary', 'jeevanjithu46@gmail.com', 9544252190, 'Kasaragod, Kerala', 'KA 21 E 2625', '2023-06-16', '16:20:00', 'Service_Completed', '6481885c23219'),
(32, 32, 9, 8, 'Jeevan Bhandary', 'jeevan@gmail.com', 9544252190, 'Kasaragod, Kerala', 'KL 78 E 2625', '2023-06-15', '11:08:00', 'Service_Completed', '6486aeef0bba6'),
(33, 33, 8, 10, 'Jeevan Bhandary', 'jeevanjithu46@gmail.com', 9544252190, 'Kasaragod, Kerala', 'KL78 1900', '2023-06-16', '10:34:00', 'pending', '648949c696b45');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `b_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`b_id`, `b_name`, `date`, `b_status`) VALUES
(1, 'Audi', '2023-05-13 13:02:02', ''),
(2, 'BMW', '2023-05-13 13:02:25', ''),
(3, 'BENZ', '2023-05-13 13:02:32', ''),
(7, 'MARUTI SUZUKI', '2023-05-29 11:39:39', ''),
(8, 'TATA', '2023-05-29 11:39:50', ''),
(9, 'HYUNDAI', '2023-05-29 11:40:04', ''),
(10, 'HONDA', '2023-05-29 11:40:20', ''),
(11, 'RENAULT', '2023-05-29 11:40:57', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `serv_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `qty` int(20) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `serv_id`, `c_id`, `qty`, `date`) VALUES
(59, 10, 8, 1, '2023-06-14 10:32:56'),
(61, 2, 9, 1, '2023-06-14 11:59:24');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(70) NOT NULL,
  `c_email` varchar(90) NOT NULL,
  `c_phone` bigint(10) NOT NULL,
  `c_address` varchar(150) NOT NULL,
  `c_image` varchar(250) NOT NULL,
  `c_password` varchar(250) NOT NULL,
  `c_date` datetime NOT NULL DEFAULT current_timestamp(),
  `c_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_email`, `c_phone`, `c_address`, `c_image`, `c_password`, `c_date`, `c_status`) VALUES
(8, 'saad ahmed', 'saadsayiedahmeed@gmail.com', 9945944372, 'karkala', 'upload/863684-abstract-gaming-wallpapers-1080p-1920x1080-for-iphone-7.jpg', '$2y$10$dpO4qMrciFddHhyqjODfP.cVe8R2ChbgTJ01cQQjiVJDFgGfQ3SiK', '2023-06-09 15:59:02', ''),
(9, 'Jeevan Bhandary', 'jeevanjithu46@gmail.com', 9544252190, 'Kasaragod, Kerala', 'upload/jeevan.jpg', '$2y$10$cJIk3T8JNV3/SYPhIQdWVeIx5hyHnsgss.sKOnegGLzMHMAq6S4aG', '2023-06-12 10:26:04', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `f_status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `c_id`, `message`, `date`, `f_status`) VALUES
(6, 9, 'Satisfied!!', '2023-06-12 11:13:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `m_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `m_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`m_id`, `b_id`, `m_name`, `date`, `m_status`) VALUES
(1, 1, 'Audi Q3', '2023-05-13 13:05:01', ''),
(2, 1, 'Audi TT', '2023-05-13 13:05:29', ''),
(3, 1, 'Audi RS5', '2023-05-13 13:05:38', ''),
(4, 2, 'BMW X1', '2023-05-13 13:05:54', ''),
(5, 2, 'BMW 3 Series', '2023-05-13 13:06:04', ''),
(6, 2, 'BMW X3', '2023-05-13 13:06:15', ''),
(7, 3, 'BENZ C-Class', '2023-05-13 13:06:35', ''),
(8, 3, 'BENZ GLC', '2023-05-13 13:06:44', ''),
(10, 7, 'BREZZA', '2023-05-29 11:40:49', ''),
(11, 7, 'ALTO', '2023-05-29 11:41:07', ''),
(12, 7, 'SWIFT', '2023-05-29 11:41:17', ''),
(13, 11, 'DUSTER', '2023-05-29 11:41:46', ''),
(14, 11, 'KWID', '2023-05-29 11:41:56', ''),
(15, 11, 'KIGER', '2023-05-29 11:42:08', ''),
(16, 11, 'TRIBER', '2023-05-29 11:42:51', '');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `or_id` int(11) NOT NULL,
  `c_id` int(10) NOT NULL,
  `serv_id` int(10) NOT NULL,
  `or_qty` int(80) NOT NULL,
  `or_total` int(70) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `or_date` date NOT NULL DEFAULT current_timestamp(),
  `unid` varchar(80) NOT NULL,
  `or_status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`or_id`, `c_id`, `serv_id`, `or_qty`, `or_total`, `invoice`, `or_date`, `unid`, `or_status`) VALUES
(26, 7, 3, 1, 23199, 'INV126', '2023-06-08', '6481816727ae6', ''),
(27, 7, 3, 1, 23199, 'INV127', '2023-06-08', '6481829f90579', ''),
(28, 7, 3, 1, 23199, 'INV128', '2023-06-08', '64818345c7a02', ''),
(29, 7, 3, 1, 23199, 'INV129', '2023-06-08', '6481836a58542', ''),
(30, 7, 2, 1, 16899, 'INV130', '2023-06-08', '648186469dea5', ''),
(31, 7, 1, 1, 13399, 'INV131', '2023-06-08', '6481885c23219', ''),
(32, 9, 8, 1, 5999, 'INV132', '2023-06-12', '6486aeef0bba6', ''),
(33, 8, 10, 1, 6000, 'INV133', '2023-06-14', '648949c696b45', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `c_id` int(10) NOT NULL,
  `or_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL,
  `pay_method` varchar(60) NOT NULL,
  `trans_id` int(90) NOT NULL,
  `card_name` varchar(30) NOT NULL,
  `card_number` int(25) NOT NULL,
  `unid` varchar(80) NOT NULL,
  `pay_date` datetime NOT NULL DEFAULT current_timestamp(),
  `pay_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `c_id`, `or_id`, `b_id`, `pay_method`, `trans_id`, `card_name`, `card_number`, `unid`, `pay_date`, `pay_status`) VALUES
(1, 2, 1, 1, 'card', 0, 'Visa', 2147483647, '6476d541d2c18', '2023-05-31 10:34:01', 'pending'),
(2, 2, 2, 2, 'cash', 0, '', 0, '6476d6b16fbd0', '2023-05-31 10:40:09', 'paid'),
(3, 5, 3, 3, 'cash', 0, '', 0, '6478157f55dfe', '2023-06-01 09:20:23', 'pending'),
(4, 4, 4, 4, 'cash', 0, '', 0, '647819dca8fee', '2023-06-01 09:39:00', 'pending'),
(5, 6, 5, 5, 'upi', 0, '', 0, '647829d62e7ed', '2023-06-01 10:47:10', 'pending'),
(6, 4, 6, 6, 'cash', 0, '', 0, '6478311d04ebf', '2023-06-01 11:18:13', 'paid'),
(7, 4, 7, 7, 'cash', 0, '', 0, '64815df8908ee', '2023-06-08 10:20:00', 'pending'),
(8, 4, 8, 8, 'cash', 0, '', 0, '64815eac11677', '2023-06-08 10:23:00', 'pending'),
(9, 7, 9, 9, 'cash', 0, '', 0, '64816a608d155', '2023-06-08 11:12:56', 'pending'),
(10, 7, 10, 10, 'cash', 0, '', 0, '64816bf4563f9', '2023-06-08 11:19:40', 'pending'),
(11, 7, 11, 11, 'upi', 0, '', 0, '64816c575bb31', '2023-06-08 11:21:19', 'pending'),
(12, 7, 12, 12, 'upi', 0, '', 0, '64816c9380748', '2023-06-08 11:22:19', 'pending'),
(13, 7, 14, 14, 'upi', 0, '', 0, '64816d2e7c28b', '2023-06-08 11:24:54', 'pending'),
(14, 7, 15, 15, 'cash', 0, '', 0, '64816d63c3dd5', '2023-06-08 11:25:47', 'pending'),
(15, 7, 16, 16, 'cash', 0, '', 0, '64816f15557f9', '2023-06-08 11:33:01', 'pending'),
(16, 7, 17, 17, 'cash', 0, '', 0, '64817788231bc', '2023-06-08 12:09:04', 'pending'),
(17, 7, 18, 18, 'cash', 0, '', 0, '648177bdb61e1', '2023-06-08 12:09:57', 'pending'),
(18, 7, 19, 19, 'cash', 0, '', 0, '64817d29dd019', '2023-06-08 12:33:05', 'pending'),
(19, 7, 20, 20, 'cash', 0, '', 0, '64817dab3dd06', '2023-06-08 12:35:15', 'pending'),
(20, 7, 21, 21, 'cash', 0, '', 0, '64817dcbcbbbb', '2023-06-08 12:35:47', 'pending'),
(21, 7, 22, 22, 'cash', 0, '', 0, '64817dfdd450a', '2023-06-08 12:36:37', 'pending'),
(22, 7, 23, 23, 'cash', 0, '', 0, '64817fdd15c07', '2023-06-08 12:44:37', 'pending'),
(23, 7, 24, 24, 'upi', 0, '', 0, '6481804342521', '2023-06-08 12:46:19', 'pending'),
(24, 7, 25, 25, 'cash', 0, '', 0, '64818090ae430', '2023-06-08 12:47:36', 'pending'),
(25, 7, 26, 26, 'cash', 0, '', 0, '6481816727ae6', '2023-06-08 12:51:11', 'pending'),
(26, 7, 27, 27, 'cash', 0, '', 0, '6481829f90579', '2023-06-08 12:56:23', 'pending'),
(27, 7, 28, 28, 'cash', 0, '', 0, '64818345c7a02', '2023-06-08 12:59:09', 'pending'),
(28, 7, 29, 29, 'cash', 0, '', 0, '6481836a58542', '2023-06-08 12:59:46', 'pending'),
(29, 7, 30, 30, 'cash', 0, '', 0, '648186469dea5', '2023-06-08 13:11:58', 'pending'),
(30, 7, 31, 31, 'upi', 0, '', 0, '6481885c23219', '2023-06-08 13:20:52', 'pending'),
(31, 9, 32, 32, 'cash', 0, '', 0, '6486aeef0bba6', '2023-06-12 11:06:47', 'pending'),
(32, 8, 33, 33, 'upi', 0, '', 0, '648949c696b45', '2023-06-14 10:31:58', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pa_id` int(10) NOT NULL,
  `purchased by` varchar(30) NOT NULL,
  `pa_name` varchar(50) NOT NULL,
  `pa_quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `details` varchar(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pa_id`, `purchased by`, `pa_name`, `pa_quantity`, `price`, `total_price`, `details`, `date`) VALUES
(1, 'Sham', 'Applo Tyre', 30, 3000, '90000', 'All Clear', '2023-05-23 10:20:15'),
(2, 'Mufeed', 'Tyres', 20, 4800, '96000', 'Apollo Tyres ', '2023-05-30 09:54:37'),
(3, 'Srinivas', 'Tyres', 10, 5000, '50000', 'Tyres purchased', '2023-06-01 10:50:30'),
(4, 'SRINIVAS ENTERPRISES', 'AC Filter', 15, 999, '14985', 'AC Filter stock updated', '2023-06-14 12:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serv_id` int(10) NOT NULL,
  `b_id` int(10) NOT NULL,
  `m_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `serv_image` varchar(250) NOT NULL,
  `serv_name` varchar(40) NOT NULL,
  `serv_price` int(40) NOT NULL,
  `serv_qty` int(50) DEFAULT NULL,
  `serv_details` varchar(2000) NOT NULL,
  `serv_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`serv_id`, `b_id`, `m_id`, `cat_id`, `serv_image`, `serv_name`, `serv_price`, `serv_qty`, `serv_details`, `serv_date`, `status`) VALUES
(2, 1, 1, 1, 'upload/car1.jpeg', 'STANDARD SERVICES', 16899, NULL, 'Car Scanning,Battery Water Top Up,Interior Vacuuming,Front Brake Pads Serviced,Oil filter Replacement', '2023-05-13 15:28:15', ''),
(8, 1, 1, 4, 'upload/car tyre.jpeg', 'BRIDGESTONE TYRE', 5999, 29, 'It is an ideal tyre for city drives and highway use,Its ultra high wear resistant tread compound ensures less road noise and improved traction.,The Amazer 4G Life acquires extra long durability with up to 100,000 kilometres.,Tubeless,9kg (Approx)', '2023-05-13 15:40:04', ''),
(10, 1, 3, 4, 'upload/IMG-6663.JPG', 'APOLLO TYRE', 6000, 51, 'GOOD TYRES,Its ultra high wear resistant tread compound ensures less road noise and improved traction.,9kg (Approx)', '2023-05-31 09:38:27', ''),
(12, 0, 0, 3, 'upload/sonic.JPG', 'Sonic Batteries', 4500, 40, 'Capacity @C20,Batter Dimension (In mm LXBXH) 238x129x227,Battery Layout L,,', '2023-06-14 11:45:30', ''),
(13, 0, 0, 3, 'upload/amaron.JPG', 'Amaron Battery', 4499, 12, 'Lead-Acid,8 Kilogram,', '2023-06-14 11:49:21', ''),
(14, 0, 0, 3, 'upload/exide.JPG', 'EXIDE Battery', 4599, 26, ' Capacity @C20  ,Batter Dimension (In mm  LXBXH) 238x129x227,Battery Layout L', '2023-06-14 11:50:40', ''),
(15, 0, 0, 2, 'upload/AC.JPG', 'AC service', 2000, NULL, 'Full AC checkup,AC gas refill', '2023-06-14 12:14:18', ''),
(16, 0, 0, 1, 'upload/compserv.JPG', 'COMPREHENSIVE SERVICES', 18999, 10, 'AC Filter Replacement,Battery Water Top-UP,Full Car Checkup,Wheel Allignment,1000 Kms or 1 month warranty,Throttle Body cleaning,Wheel Balancing,Rear Break Shoes Service,Car Wash', '2023-06-14 12:31:33', ''),
(17, 0, 0, 1, 'upload/basicser.JPG', 'BASIC SERVICE', 5999, 20, 'Full Car Checkup,Wiper Fluid Replacement,Engine Oil Change,800 Kms or 1 month warranty,Car Wash,Air Filter change', '2023-06-14 12:33:11', '');

-- --------------------------------------------------------

--
-- Table structure for table `serv_category`
--

CREATE TABLE `serv_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(25) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serv_category`
--

INSERT INTO `serv_category` (`cat_id`, `cat_name`, `date`) VALUES
(1, '  Periodic Services', '2023-05-13 13:32:29'),
(2, ' AC Service & Repair', '2023-05-13 13:32:46'),
(3, ' Batteries', '2023-05-13 13:32:51'),
(4, ' Tyres & Wheel Care', '2023-05-13 13:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `s_image` varchar(250) NOT NULL,
  `salary` int(70) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `cat_id`, `s_name`, `phone`, `email`, `address`, `s_image`, `salary`, `password`, `date`) VALUES
(1, 1, 'Ramesh', 7867899878, 'ramesh@gmail.com', 'kadavinabagilu', 'upload/per1.jpeg', 500, 'Ramesh.123', '2023-05-13 16:22:48'),
(2, 2, 'Ragav', 7869876543, 'ragav@gmail.com', 'mangalore', 'upload/handsome-young-asian-man-smiling.jpg', 1000, 'Ragav.123', '2023-05-13 16:24:26'),
(3, 3, 'Samad', 7878798654, 'samad@gmail.com', 'Uppinangady', 'upload/per2.jpeg', 1500, 'Samad.123', '2023-05-13 16:26:39'),
(4, 4, 'Shaheer', 8769457685, 'shaheer@gmail.com', 'manglore', 'upload/per3.jpeg', 2000, 'Shaheer.123', '2023-05-13 16:27:54'),
(7, 2, 'Ganesh', 9544206709, 'ganesh@gmail.com', 'Kasaragod, Kerala', 'upload/IMG-20230611-WA0006.jpg', 800, '12345', '2023-06-12 10:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendence`
--

CREATE TABLE `staff_attendence` (
  `sa_id` int(11) NOT NULL,
  `s_id` int(10) NOT NULL,
  `sa_date` date NOT NULL,
  `sa_status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_attendence`
--

INSERT INTO `staff_attendence` (`sa_id`, `s_id`, `sa_date`, `sa_status`) VALUES
(1, 1, '2023-05-22', 'Present'),
(2, 2, '2023-05-22', 'Present'),
(3, 3, '2023-05-22', 'Present'),
(4, 4, '2023-05-22', 'Present'),
(5, 1, '2023-05-23', 'Absent'),
(6, 2, '2023-05-23', 'Present'),
(7, 3, '2023-05-23', 'Present'),
(8, 4, '2023-05-23', 'Present'),
(9, 1, '2023-05-30', 'Present'),
(10, 2, '2023-05-30', 'Absent'),
(11, 3, '2023-05-30', 'Present'),
(12, 4, '2023-05-30', 'Present'),
(13, 1, '2023-06-12', 'Absent'),
(14, 2, '2023-06-12', 'Present'),
(15, 3, '2023-06-12', 'Present'),
(16, 4, '2023-06-12', 'Present'),
(17, 7, '2023-06-12', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `model` varchar(30) NOT NULL,
  `v_regno` varchar(40) NOT NULL,
  `o_name` varchar(30) NOT NULL,
  `o_email` varchar(50) NOT NULL,
  `o_phone` bigint(10) NOT NULL,
  `o_address` varchar(150) NOT NULL,
  `service` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `details` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `brand`, `model`, `v_regno`, `o_name`, `o_email`, `o_phone`, `o_address`, `service`, `price`, `details`, `date`, `status`) VALUES
(1, 'BMW', 'BMW 800', '', 'Joyel', 'joyel@mail.com', 8988766767, 'mangalore', 'Basic service', 2999, 'Engine Problem', '2023-05-19 17:27:10', ''),
(2, 'Audi', 'AUDI800', '', 'Mohammed nihad', 'mniddu19@gmail.com', 8152077321, 'uppinangady', 'Tyre Replacement', 30000, 'All Clear', '2023-05-21 15:31:11', ''),
(3, 'BMW', 'Q3', 'KA 20 V 2002', 'Saad', 'Saad@gmail.com', 9448327322, 'Karkala', 'Oil Change', 10000, 'Oil change', '2023-05-21 15:32:44', ''),
(4, 'Maruti', 'BREZZA', 'KL14Z5190', 'jeevan', 'jeevan@gmail.com', 9544252190, 'Kasaragod, Kerala', 'tyre', 2000, 'Tyre replacement', '2023-06-06 11:59:38', ''),
(5, 'Maruti', 'BREZZA', 'KL14Z5190', 'Viraj', 'viraj@gmail.com', 9544252190, 'Kasaragod, Kerala', 'tyre', 7000, 'Tyre replacement', '2023-06-14 11:25:46', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serv_id`);

--
-- Indexes for table `serv_category`
--
ALTER TABLE `serv_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `staff_attendence`
--
ALTER TABLE `staff_attendence`
  ADD PRIMARY KEY (`sa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `serv_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `serv_category`
--
ALTER TABLE `serv_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff_attendence`
--
ALTER TABLE `staff_attendence`
  MODIFY `sa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
