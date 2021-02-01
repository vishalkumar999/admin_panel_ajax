-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 05:25 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin'),
(2, 'vishal@vishal.com', 'vishal');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `mobile`, `email`, `query`) VALUES
(14, 'Vishal', '7042991740', 'vishalmoney420@gmail.com', 'Hi Vishal'),
(16, 'nidhi', 'nidhi', 'nidhi@nidhi.com', 'hi there'),
(17, 'neha', '4545454545', 'yahoo@nidhi.com', 'hi theresfdd'),
(18, 'nidhi', 'nidhi', 'nidhi@nidhi.com', 'hi there'),
(19, 'Lucifer', '4545454545', 'yahoo@nidhi.com', 'hi theresfdd'),
(20, 'nidhi', 'nidhi', 'nidhi@nidhi.com', 'hi there'),
(21, 'neha', '4545454545', 'yahoo@nidhi.com', 'hi theresfdd'),
(22, 'demon', '', 'nidhi@nidhi.com', 'hi there'),
(23, 'neha sharma', '4545454545', 'yahoo@nidhi.com', 'hi theresfdd'),
(24, 'nidhi', 'nidhi', 'nidhi@nidhi.com', 'hi there'),
(25, 'Kratos', '74545645895', 'hghtrghrt', 'gergerg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
