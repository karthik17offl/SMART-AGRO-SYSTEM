-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 06:11 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `aid` int(5) NOT NULL AUTO_INCREMENT,
  `aname` varchar(20) NOT NULL,
  `apass` varchar(20) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE IF NOT EXISTS `buyer` (
  `bid` int(5) NOT NULL AUTO_INCREMENT,
  `busername` varchar(50) NOT NULL,
  `bpassword` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `pinno` varchar(10) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `productdetails` varchar(50) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `busername`, `bpassword`, `date`, `mobileno`, `address`, `pinno`, `dist`, `productdetails`) VALUES
(2, 'buyer1', 'buyer1', '2-4-2016', '9638521270', 'coimbatore', '641001', 'coimbatore', 'seeds'),
(3, 'buyer2', 'buyer2', '2-4-2016', '8745213690', 'pollachi', '642001', 'coimbatore', 'crops');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `stid` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `qty` int(5) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cid`, `stid`, `pid`, `qty`, `date`) VALUES
(1, 1, 7, 10, '2016-02-24'),
(3, 3, 3, 10, '2016-04-02'),
(4, 2, 2, 10, '2016-04-02'),
(5, 2, 1, 2, '2016-06-07'),
(6, 2, 10, 6, '2016-06-07'),
(7, 2, 1, 1, '2016-06-11');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` longtext NOT NULL,
  `pdescp` longtext NOT NULL,
  `cat` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `pimage` varchar(200) NOT NULL,
  `sid` int(5) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdescp`, `cat`, `price`, `qty`, `pimage`, `sid`) VALUES
(1, 'BLACK MUSTARD', 'BLACK MUSTARD', 'Farmer', 42, 100, 'agro1.jpg', 1),
(2, 'CARROT', 'CARROT', 'Producers', 15, 100, 'agro2.jpg', 2),
(3, 'CORIANDER', 'CORIANDER', 'Producers', 58, 100, 'agro3.jpg', 3),
(4, 'brinjal', 'brinjal', 'Farmer', 42, 100, 'pic1.jpg', 1),
(5, 'Tomato', 'Tomato', 'Producers', 25, 100, 'pic3.jpg', 2),
(6, 'Wheat', 'Wheat', 'Producers', 50, 100, 'pic2.jpg', 3),
(7, 'Potato', 'Potato', 'Farmer', 25, 100, 'potato.jpg', 1),
(8, 'Yam', 'Yam', 'Farmer', 50, 100, 'yam.jpg', 1),
(9, 'Spinach', 'Spinach', 'Farmer', 60, 100, 'spinach.jpg', 2),
(10, 'fghgfhf', 'hjg', 'vegtable', 23, 25, '4.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `sid` int(5) NOT NULL AUTO_INCREMENT,
  `susername` varchar(50) NOT NULL,
  `spassword` varchar(50) NOT NULL,
  `date` varchar(10) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `pinno` varchar(10) NOT NULL,
  `dist` varchar(50) NOT NULL,
  `productdetails` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `susername`, `spassword`, `date`, `mobileno`, `address`, `pinno`, `dist`, `productdetails`) VALUES
(1, 'sabarish', 'sabarish', '24-2-2016', '8521479631', 'Pollachi', '642109', 'Coimbatore', 'seeds'),
(2, 'seller1', 'seller1', '2-4-2016', '9874521360', 'coimbatore', '641001', 'coimbatore', 'crops'),
(3, 'seller3', 'seller3', '2-4-2016', '8765439874', 'coimbatore', '641007', 'coimbatore', 'grains');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
