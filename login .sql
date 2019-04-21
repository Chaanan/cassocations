-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2019 at 08:07 AM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dopeshop_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Sr.` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `role` varchar(30) NOT NULL,
  PRIMARY KEY (`Sr.`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Sr.`, `username`, `password`, `email`, `address`, `state`, `role`) VALUES
(24, 'shivam', '097c1dfb9a756d8021354392cb0b1c7381d82f86', 'abc@gmail.com', '34 cool road', 'punjab', 'guest'),
(25, 'navjot', '6d22499ff658489b3478e31288e0fd22e4f27c93', 'navjot@gmail.com', '23 cool road', 'punjab', 'guest'),
(26, 'navjot', '123', 'navjot@gmail.com', '23 cool road', 'punjab', 'guest'),
(27, 'hello', 'adcd7048512e64b48da55b027577886ee5a36350', 'abc@gmail.com', '38 cool road', 'punjab', 'guest'),
(28, 'sanman', '38d46afed18ed4a6390ee07f51a4a28e6d11470b', 'sanman@gmail.com', '34 jkkhkjghj', 'jbhgh', 'guest'),
(29, 'sanman', '38d46afed18ed4a6390ee07f51a4a28e6d11470b', 'sanman@gmail.com', '34 jkkhkjghj', 'jbhgh', 'guest');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
