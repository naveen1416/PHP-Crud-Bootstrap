-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2016 at 01:04 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `graduation`
--

CREATE TABLE IF NOT EXISTS `graduation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `graduation_board` varchar(20) NOT NULL,
  `graduation_year` varchar(20) NOT NULL,
  `graduation_percentage` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `graduation`
--

INSERT INTO `graduation` (`id`, `pid`, `graduation_board`, `graduation_year`, `graduation_percentage`) VALUES
(4, 1, 'ssfgdfsg', '1991', '32232');

-- --------------------------------------------------------

--
-- Table structure for table `inter`
--

CREATE TABLE IF NOT EXISTS `inter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `inter_board` varchar(20) NOT NULL,
  `inter_year` varchar(20) NOT NULL,
  `inter_percentage` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `inter`
--

INSERT INTO `inter` (`id`, `pid`, `inter_board`, `inter_year`, `inter_percentage`) VALUES
(4, 1, 'ccccccccc', '1989', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `certification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `userid`, `dob`, `sex`, `address`, `qualification`, `certification`) VALUES
('1', 'naveen goud', '1416', '05/10/2016', 'M', 'vvvvvvvvvvvvvvvvvvvvvvvvvvvv', 'Intermediate', 'SCRUM');

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE IF NOT EXISTS `ssc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `ssc_year` varchar(20) NOT NULL,
  `ssc_percentage` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ssc`
--

INSERT INTO `ssc` (`id`, `pid`, `ssc_board`, `ssc_year`, `ssc_percentage`) VALUES
(4, 1, 'ssc', '1988', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
