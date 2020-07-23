-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2020 at 06:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `home_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `slider` varchar(5000) NOT NULL,
  `slider_text` varchar(3000) NOT NULL,
  PRIMARY KEY (`home_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `temp_id`, `slider`, `slider_text`) VALUES
(9, 1, 'assets/img/third.jpg', 'Image 3'),
(7, 1, 'assets/img/first.jpg', 'Image 1'),
(8, 1, 'assets/img/second.jpg', 'Image 2');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_name` varchar(100) NOT NULL,
  `temp_src` varchar(3000) NOT NULL,
  PRIMARY KEY (`temp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`temp_id`, `temp_name`, `temp_src`) VALUES
(1, 'THINKBEYOUND', 'asdafdsf');

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
CREATE TABLE IF NOT EXISTS `user_master` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(30) DEFAULT NULL,
  `user_lname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`user_id`, `user_fname`, `user_lname`, `username`, `password`, `email`, `level`, `status`) VALUES
(1, 'Anjali', 'Patel', 'admin', 'admin', NULL, 0, 0),
(2, 'mdcds,mdcS,MD ,', 'SDBSMN', 'sss', 'ss', 'a@gmail.com', 1, 0),
(3, 'bhavin', 'patel', 'bhavin', '123', 'bhavin@gmail.com', 1, 0),
(4, 'suhani', 'patel', 'suhani', '123', 'suhani@gmail.com', 1, 0),
(6, 'test', 'test', 'test', '123456', 'test@gmail.com', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `welcometext`
--

DROP TABLE IF EXISTS `welcometext`;
CREATE TABLE IF NOT EXISTS `welcometext` (
  `welcomeTextId` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `welcomeText` varchar(5000) NOT NULL,
  PRIMARY KEY (`welcomeTextId`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `welcometext`
--

INSERT INTO `welcometext` (`welcomeTextId`, `temp_id`, `welcomeText`) VALUES
(1, 1, 'Aavo Pdharo Mare Desh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
