-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 23, 2019 at 10:30 AM
-- Server version: 5.7.23-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lemon_impex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `username`, `password`) VALUES
('parthivm20@gmail.com', 'parthiv', '$2y$10$1eL8dIW6kBOZ9RZdOAmr9./9fxn/3JiGHcohHjP4gqzoHINSHMI2O');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` char(10) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(3, 'Parthiv ', 'parthivm20@gmail.com', '8758759596', '');

-- --------------------------------------------------------

--
-- Table structure for table `diamond`
--

DROP TABLE IF EXISTS `diamond`;
CREATE TABLE IF NOT EXISTS `diamond` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_number` varchar(20) NOT NULL,
  `main_image_url` varchar(1049) NOT NULL,
  `carat` float NOT NULL,
  `shape` varchar(20) NOT NULL,
  `color` varchar(2) NOT NULL,
  `clarity` varchar(5) NOT NULL,
  `cut` varchar(15) NOT NULL,
  `depth_percentage` float NOT NULL,
  `table_percentage` float NOT NULL,
  `certificate_url` varchar(1049) NOT NULL,
  `certificate_type` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `measurement_length` float NOT NULL,
  `measurement_width` float NOT NULL,
  `measurement_height` float NOT NULL,
  `measurement_type` varchar(10) NOT NULL,
  `gridle` varchar(20) NOT NULL,
  `culet` varchar(20) NOT NULL,
  `fluorescence` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diamond`
--

INSERT INTO `diamond` (`id`, `stock_number`, `main_image_url`, `carat`, `shape`, `color`, `clarity`, `cut`, `depth_percentage`, `table_percentage`, `certificate_url`, `certificate_type`, `price`, `measurement_length`, `measurement_width`, `measurement_height`, `measurement_type`, `gridle`, `culet`, `fluorescence`) VALUES
(1, 'D18198891', '', 1.01, 'cushion', 'j', 'si2', 'very good', 70.7, 60, '', 'IGI', 1000, 5.64, 5.25, 3.71, 'mm', '', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_date_begin` datetime NOT NULL,
  `event_date_end` datetime NOT NULL,
  `event_description` varchar(1000) NOT NULL,
  `event_short_description` varchar(100) NOT NULL,
  `event_created` datetime NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_date_begin`, `event_date_end`, `event_description`, `event_short_description`, `event_created`) VALUES
(1, 'Hong Kong International Diamond Show', '2019-02-26 00:00:00', '2019-03-02 00:00:00', 'We invite you to come at Hong Kong Diamond and Pearl show to meet our sales executives.', 'We invite you to come at diamonds exhibition fair.', '2019-02-22 00:00:00'),
(2, 'Hong Kong Jewellery & Gem Fair September 2018', '2018-09-12 00:00:00', '2018-09-16 00:00:00', 'We invite you to come to exhibition to meet our executives.', 'Come to this fair to meet our executives.', '2018-12-05 00:00:00'),
(3, 'Hong Kong Jewellery & Gem Fair September 2017', '2017-09-13 00:00:00', '2017-09-17 00:00:00', 'We invite you to come to exhibition to meet our executives.', 'Come to this fair to meet our executives.', '2018-12-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_image`
--

DROP TABLE IF EXISTS `event_image`;
CREATE TABLE IF NOT EXISTS `event_image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) NOT NULL,
  `event_image_url` varchar(1441) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event_image`
--

INSERT INTO `event_image` (`image_id`, `event_id`, `event_image_url`) VALUES
(1, 1, 'img/events/event1_1.png\r\n'),
(2, 2, 'img/events/event2_1.jpg\r\n'),
(3, 3, 'img/events/event2_1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
