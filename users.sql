-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2016 at 07:03 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `graduation`
--

CREATE TABLE `graduation` (
  `pid` int(11) NOT NULL,
  `graduation_board` varchar(20) NOT NULL,
  `graduation_year` varchar(20) NOT NULL,
  `graduation_percentage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduation`
--

INSERT INTO `graduation` (`pid`, `graduation_board`, `graduation_year`, `graduation_percentage`) VALUES
(1, 'grad', '1989', '100'),
(1, 'grad', '1989', '100'),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, 'grad', '1990', '100'),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', '');

-- --------------------------------------------------------

--
-- Table structure for table `inter`
--

CREATE TABLE `inter` (
  `pid` int(11) NOT NULL,
  `inter_board` varchar(20) NOT NULL,
  `inter_year` varchar(20) NOT NULL,
  `inter_percentage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inter`
--

INSERT INTO `inter` (`pid`, `inter_board`, `inter_year`, `inter_percentage`) VALUES
(1, 'inter', '1987', '100'),
(1, 'inter', '1993', '100'),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, 'inter', '1991', '100'),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', ''),
(1, '', 'Select Year', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` varchar(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `certification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ssc`
--

CREATE TABLE `ssc` (
  `pid` int(11) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `ssc_year` varchar(20) NOT NULL,
  `ssc_percentage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc`
--

INSERT INTO `ssc` (`pid`, `ssc_board`, `ssc_year`, `ssc_percentage`) VALUES
(1, 'ssc', '1979', 'ssc_percentage'),
(1, 'ssc board', '1991', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, 'ssc board', '1992', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage'),
(1, '', 'Select Year', 'ssc_percentage');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
