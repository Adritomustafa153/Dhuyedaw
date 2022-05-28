-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2022 at 05:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dhuyadaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `price_chart`
--

CREATE TABLE `price_chart` (
  `item_name` varchar(255) NOT NULL,
  `iron` int(10) NOT NULL,
  `dry_wash` int(10) NOT NULL,
  `wash` int(10) NOT NULL,
  `shoe_polish` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `price_chart`
--

INSERT INTO `price_chart` (`item_name`, `iron`, `dry_wash`, `wash`, `shoe_polish`) VALUES
('Shirt', 10, 50, 40, 0),
('T-Shirt', 10, 30, 40, 0),
('Shoes', 0, 0, 0, 50),
('Jacket', 50, 150, 140, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
