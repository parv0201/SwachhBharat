-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 12:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sba`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaintdetails`
--

CREATE TABLE `complaintdetails` (
  `Username` varchar(50) NOT NULL,
  `Email-Id` varchar(50) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaintdetails`
--

INSERT INTO `complaintdetails` (`Username`, `Email-Id`, `Address`, `Subject`, `Description`) VALUES
('parv', 'parvkapadia@gmail.com', 'Cheese and Chips, near Mota Bazar Circle', 'Uncleliness', 'its been a few days that roads near cheese and chips are not cleand properly. It will be really helpful to clean it and get our environment safe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`) VALUES
('parv', 'parv'),
('parv', 'parv'),
('abc', '1234'),
('qwer', '12345'),
('', ''),
('abhi67', 'abhi');

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE `userdetails` (
  `name` varchar(25) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`name`, `uname`, `pass`, `email`, `mobile`) VALUES
('abhi', 'abhi67', 'abhi', 'abc@gm.in', 9586663210);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
