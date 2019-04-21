-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 12:05 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chaanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `description`) VALUES
(13, 'gallery/post-1.jpg', ''),
(14, 'gallery/diya1.jpg', ''),
(15, 'gallery/diya2.jpg', ''),
(16, 'gallery/diya3.jpg', ''),
(17, 'gallery/dia4.jpg', ''),
(18, 'gallery/diya5.jpeg', ''),
(19, 'gallery/p1.jpg', ''),
(20, 'gallery/p2.jpg', ''),
(21, 'gallery/p.jpg', ''),
(22, 'gallery/p1.jpg', ''),
(23, 'gallery/p2.jpg', ''),
(24, 'gallery/p3.jpg', ''),
(25, 'gallery/p1.jpg', ''),
(26, 'gallery/p2.jpg', ''),
(27, 'gallery/p3.jpg', ''),
(28, 'gallery/ba.jpg', ''),
(29, 'gallery/download.jpg', ''),
(30, 'gallery/download (3).jpg', ''),
(31, 'gallery/images (11).jpg', ''),
(32, 'gallery/images.jpg', ''),
(33, 'gallery/w.jpg', ''),
(34, 'gallery/wa.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image1`
--

CREATE TABLE IF NOT EXISTS `image1` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `image1`
--

INSERT INTO `image1` (`id`, `image`, `description`) VALUES
(1, 'gallery/e1.jpg', ''),
(2, 'gallery/e2.jpg', ''),
(3, 'gallery/e3.jpeg', ''),
(4, 'gallery/e1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image2`
--

CREATE TABLE IF NOT EXISTS `image2` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `image2`
--

INSERT INTO `image2` (`id`, `image`, `description`) VALUES
(1, 'gallery/ba.jpg', ''),
(2, 'gallery/download (3).jpg', ''),
(3, 'gallery/download.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image3`
--

CREATE TABLE IF NOT EXISTS `image3` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `image3`
--

INSERT INTO `image3` (`id`, `image`, `description`) VALUES
(1, 'gallery/images (8).jpg', ''),
(2, 'gallery/images (9).jpg', ''),
(3, 'gallery/images (10).jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image4`
--

CREATE TABLE IF NOT EXISTS `image4` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `image4`
--

INSERT INTO `image4` (`id`, `image`, `description`) VALUES
(1, 'gallery/images (11).jpg', ''),
(2, 'gallery/images.jpg', ''),
(3, 'gallery/images (7).jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image5`
--

CREATE TABLE IF NOT EXISTS `image5` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `image5`
--

INSERT INTO `image5` (`id`, `image`, `description`) VALUES
(1, 'gallery/w.jpg', ''),
(2, 'gallery/wa.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `image6`
--

CREATE TABLE IF NOT EXISTS `image6` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `image6`
--

INSERT INTO `image6` (`id`, `image`, `description`) VALUES
(1, 'gallery/i1.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `image7`
--

CREATE TABLE IF NOT EXISTS `image7` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `image7`
--

INSERT INTO `image7` (`id`, `image`, `description`) VALUES
(1, 'gallery/i8.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `image8`
--

CREATE TABLE IF NOT EXISTS `image8` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `image8`
--

INSERT INTO `image8` (`id`, `image`, `description`) VALUES
(1, 'gallery/aa.JPG', '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `sr` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`sr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`sr`, `name`, `email`, `contact`, `message`) VALUES
(1, 'sanman', 'sanman@gmail.com', '757646747', 'good work'),
(2, 'shivam', 'shivam@gmail.com', '87778875', 'great'),
(3, 'hjhk', 'kjh@gfg', '875757', 'kjhjkkjg'),
(4, 'jkhk', 'hkhh@jkj', '8767575', 'jkjljl'),
(6, 'sanman kaur', 'xyz@gmail.com', '2147483647', 'jghjghfhf hvghfhgv hvhv'),
(7, 'sanman', '12', '23343', 'ssakxk'),
(14, 'hjk', '', '78968768', 'kjjgkj'),
(20, '', '', '657766789', 'jkhjkhjhj'),
(21, '', '', '2147483647', 'nnjbhjgbjhg'),
(22, '', '', '981572550', 'hello!!'),
(23, 'arvinder singh', 'smarthouse@gmail.com', '2147483647', 'hi'),
(24, 'arvinder singh', 'smarthouse@gmail.com', '1111111111', 'hi'),
(25, 'sonia', 'sonia@gmail.com', '2147483647', 'hello i am sonia'),
(26, 'abcd', 'abc@gmail.com', '2147483647', 'abc abc abc'),
(27, 'abcd', 'abc@gmail.com', '2147483647', 'a,s d,asmdma akwlskaw'),
(28, 'abcd', 'abc@gmail.com', '0', 'mwsawl mamdkasd maskd'),
(29, 'abcd', 'abc@gmail.com', 'hello', 'mwsawl mamdkasd maskd'),
(30, 'ssjkdxk', 'smakks@gmail.com', 'jsajdhhsakjh', 'ksanknxkjasnk');

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
