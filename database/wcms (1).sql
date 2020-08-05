-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2020 at 06:31 AM
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
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `about_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `about_img` varchar(5000) NOT NULL,
  `about_title` varchar(5000) NOT NULL,
  `about_text` varchar(10000) NOT NULL,
  PRIMARY KEY (`about_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `temp_id`, `about_img`, `about_title`, `about_text`) VALUES
(1, 1, 'assets/img/about.jpg', 'We are Web Design Heroes', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `temp_id`, `address`, `country`, `email`, `facebook`, `twitter`) VALUES
(1, 1, '#416,1420 Boulevard Jules Potras', 'Canada', 'anjali@gmail.com', 'https://www.facebook.com/', 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `footer_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `copyright` varchar(5000) NOT NULL,
  `DesignCoding` varchar(5000) NOT NULL,
  PRIMARY KEY (`footer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`footer_id`, `temp_id`, `copyright`, `DesignCoding`) VALUES
(1, 1, '2020 .:Herzing College:.', 'Anjali Patel');

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
(9, 1, 'assets/img/third.jpg', 'Free Responsive Template'),
(7, 1, 'assets/img/first.jpg', 'Fully Responsive Components'),
(8, 1, 'assets/img/second.jpg', 'Build New Layout in 10 minutes!');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `portfolio_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `temp_title` varchar(3000) NOT NULL,
  `temp_text` varchar(5000) NOT NULL,
  PRIMARY KEY (`portfolio_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `temp_id`, `temp_title`, `temp_text`) VALUES
(1, 1, 'Template 1', 'Laoreet dolore magna aliquam erat volutpat.'),
(2, 1, 'Template 2', 'Laoreet dolore magna aliquam erat volutpat.'),
(3, 1, 'Template 3', 'Laoreet dolore magna aliquam erat volutpat.');

-- --------------------------------------------------------

--
-- Table structure for table `servises`
--

DROP TABLE IF EXISTS `servises`;
CREATE TABLE IF NOT EXISTS `servises` (
  `services_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `services_name` varchar(500) NOT NULL,
  `services_img` varchar(5000) NOT NULL,
  `services_desc` varchar(3000) NOT NULL,
  PRIMARY KEY (`services_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servises`
--

INSERT INTO `servises` (`services_id`, `temp_id`, `services_name`, `services_img`, `services_desc`) VALUES
(5, 1, 'WE CREATE', 'assets/img/por3.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'),
(4, 1, 'WE LOOK TO THE FUTURE', 'assets/img/fun_fact.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.'),
(6, 1, 'WE FIND A SOLUTION', 'assets/img/por4.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
CREATE TABLE IF NOT EXISTS `team` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `temp_id` int(11) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `member_img` varchar(500) NOT NULL,
  `desc` varchar(1000) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `temp_id`, `member_name`, `member_img`, `desc`) VALUES
(3, 1, 'Suhani', 'assets/img/tanaphong-toochinda-GagC07wVvck-unsplash.jpg', 'HR Manager'),
(9, 1, 'Anjali', 'assets/img/client2.jpg', 'Web Developer');

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
(1, 1, 'Amazing Responsive Business Template');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
