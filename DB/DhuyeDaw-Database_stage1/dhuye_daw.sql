-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 10:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhuye_daw`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `c_name` varchar(30) DEFAULT NULL,
  `c_contact` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `loaction` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `u_id`, `c_name`, `c_contact`, `email`, `loaction`) VALUES
(1, 1, 'Adrito', '1234568', 'adrito.mustagaa@gmail.com', 'Khilgaon'),
(2, 2, 'Rahim', '125347', 'ra@gmail.com', 'Rampura');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

CREATE TABLE `delivery_man` (
  `d_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `dm_name` varchar(30) DEFAULT NULL,
  `dm_contact` varchar(30) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `loactio` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`d_id`, `u_id`, `dm_name`, `dm_contact`, `s_id`, `loactio`) VALUES
(3, 1, 'Rakib', '09876', 1, 'Khilgaon'),
(4, 3, 'Shanto', '123126387', 1, 'Rampura');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `u_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`u_id`, `u_name`, `pass`, `u_type`) VALUES
(1, 'adrito', '1234', 'admin'),
(2, 'Rahim', '1234', 'Customer'),
(3, 'shanto', '1234', 'delivery man');

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `pickman_id` int(11) DEFAULT NULL,
  `dropup_id` int(11) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `d_location` varchar(20) DEFAULT NULL,
  `c_contact` varchar(30) DEFAULT NULL,
  `o_progress` varchar(20) DEFAULT NULL,
  `bill` varchar(20) DEFAULT NULL,
  `d_type` varchar(20) DEFAULT NULL,
  `p_type` varchar(20) DEFAULT NULL,
  `ord_date` varchar(20) DEFAULT NULL,
  `del_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`o_id`, `c_id`, `s_id`, `pickman_id`, `dropup_id`, `area`, `d_location`, `c_contact`, `o_progress`, `bill`, `d_type`, `p_type`, `ord_date`, `del_date`) VALUES
(2, 1, 1, 3, 2, 'malibagh', 'malibagh', '1234568', 'pick', '350', 'R', 'cod', '18.4.22', '19.4.22'),
(3, 2, 1, 4, 2, 'Malibagh', 'Malibagh', '7128935', NULL, '200', 'Regular', 'cod', '18.4.22', '19.4.22');

-- --------------------------------------------------------

--
-- Table structure for table `price_list`
--

CREATE TABLE `price_list` (
  `f_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `iron_price` varchar(20) DEFAULT NULL,
  `wash_price` varchar(20) DEFAULT NULL,
  `drywash_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `p_id` int(11) NOT NULL,
  `promo_code` varchar(30) DEFAULT NULL,
  `active_start` varchar(20) DEFAULT NULL,
  `active_end` varchar(20) DEFAULT NULL,
  `promo_value` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `s_id` int(11) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `s_name` varchar(30) DEFAULT NULL,
  `s_contact` varchar(30) DEFAULT NULL,
  `s_email` varchar(30) DEFAULT NULL,
  `s_loaction` varchar(20) DEFAULT NULL,
  `s_area` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`s_id`, `u_id`, `s_name`, `s_contact`, `s_email`, `s_loaction`, `s_area`) VALUES
(1, 1, 'Bandbox', '123456789', 'bb@gmail.com', 'Rampura', 'Rampura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `pickman_id` (`pickman_id`);

--
-- Indexes for table `price_list`
--
ALTER TABLE `price_list`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_man`
--
ALTER TABLE `delivery_man`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `price_list`
--
ALTER TABLE `price_list`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `login_info` (`u_id`);

--
-- Constraints for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD CONSTRAINT `delivery_man_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `login_info` (`u_id`),
  ADD CONSTRAINT `delivery_man_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `shop` (`s_id`);

--
-- Constraints for table `order_data`
--
ALTER TABLE `order_data`
  ADD CONSTRAINT `order_data_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `order_data_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `shop` (`s_id`),
  ADD CONSTRAINT `order_data_ibfk_3` FOREIGN KEY (`pickman_id`) REFERENCES `delivery_man` (`d_id`);

--
-- Constraints for table `shop`
--
ALTER TABLE `shop`
  ADD CONSTRAINT `shop_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `login_info` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
