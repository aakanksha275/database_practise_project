-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2020 at 07:29 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_email` varchar(60) NOT NULL,
  `a_password` varchar(60) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_email`, `a_password`) VALUES
(2, 'admin@gmail.com', 'admin'),
(4, 'a@gmail.com', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `assign_work`
--

DROP TABLE IF EXISTS `assign_work`;
CREATE TABLE IF NOT EXISTS `assign_work` (
  `r_no` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` int(11) NOT NULL,
  `r_info` varchar(45) NOT NULL,
  `r_desription` text NOT NULL,
  `name` varchar(45) NOT NULL,
  `r_address` text NOT NULL,
  `r_city` varchar(45) NOT NULL,
  `r_state` varchar(45) NOT NULL,
  `r_zip` varchar(45) NOT NULL,
  `r_email` varchar(45) NOT NULL,
  `r_mobile` bigint(20) NOT NULL,
  `r_assign` varchar(45) NOT NULL,
  `r_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`r_no`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_work`
--

INSERT INTO `assign_work` (`r_no`, `r_id`, `r_info`, `r_desription`, `name`, `r_address`, `r_city`, `r_state`, `r_zip`, `r_email`, `r_mobile`, `r_assign`, `r_date`) VALUES
(2, 11, 'mobile not working', 'Problem in hand free', 'chinchu solanki', '60 gayatri nagar', 'Dewas', 'MP', '455001', 'c@gmail.com', 9874110225, 'Ashif Khan', '2020-10-09 15:41:05'),
(4, 12, 'washing machine me problem', 'Problem in washing tub', 'chinchu solanki', '60 gayatri nagar', 'Dewas', 'MP', '455001', 'c@gmail.com', 9874110225, 'Ram', '2020-10-09 15:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(60) NOT NULL,
  `cust_add` varchar(60) NOT NULL,
  `cpname` varchar(60) NOT NULL,
  `cpquantity` int(11) NOT NULL,
  `cpeach` int(11) NOT NULL,
  `cptotal` int(11) NOT NULL,
  `cpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_add`, `cpname`, `cpquantity`, `cpeach`, `cptotal`, `cpdate`) VALUES
(1, 'Madhu solanki', '60 gayatri nagar', 'camera', 1, 555, 555, '2020-10-14 11:25:39'),
(2, 'Aakankskha solanki', '60 gayatri nagar', 'mouse', 1, 900, 900, '2020-10-14 11:33:11'),
(3, 'chinchu solanki', '60 gayatri nagar', 'mouse button', 1, 900, 900, '2020-10-14 11:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `customer_login`
--

DROP TABLE IF EXISTS `customer_login`;
CREATE TABLE IF NOT EXISTS `customer_login` (
  `c_login_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(60) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_password` varchar(60) NOT NULL,
  PRIMARY KEY (`c_login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_login`
--

INSERT INTO `customer_login` (`c_login_id`, `c_name`, `c_email`, `c_password`) VALUES
(24, 'Aakankskha', 'a@gmail.com', 'aakanksha'),
(2, 'Aman Solanki', 'amansolanki2003@gmail.com', 'aman'),
(23, 'Aman', 'amanaman@gmail.com', 'amansolanki'),
(21, 'chinchu', 'c@gmail.com', 'chinchu'),
(25, 'Madhu Solanki', 'm@gmail.com', 'madhu'),
(11, 'Aakankskha solanki', 'aakankshasolanki70@gmail.com', 'chinchu2215');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(60) NOT NULL,
  `pdop` date NOT NULL,
  `pavailable` int(11) NOT NULL,
  `ptotal` int(11) NOT NULL,
  `pocost` int(11) NOT NULL,
  `pscost` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdop`, `pavailable`, `ptotal`, `pocost`, `pscost`) VALUES
(8, 'camera', '2020-10-22', 3, 4, 345, 555),
(6, 'mouse', '2020-10-16', 7, 8, 100, 900),
(9, 'headphone', '2020-11-28', 6, 6, 500, 100),
(12, 'mouse button', '2020-10-16', 7, 8, 100, 900),
(11, 'Tub', '2020-11-28', 6, 6, 500, 100),
(13, 'mouse wire', '2020-10-16', 8, 8, 100, 900),
(14, 'Laptop', '2020-12-02', 4, 4, 899, 1300);

-- --------------------------------------------------------

--
-- Table structure for table `submit_request`
--

DROP TABLE IF EXISTS `submit_request`;
CREATE TABLE IF NOT EXISTS `submit_request` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_info` text NOT NULL,
  `r_desription` text NOT NULL,
  `name` varchar(60) NOT NULL,
  `r_address` text NOT NULL,
  `r_city` varchar(60) NOT NULL,
  `r_state` varchar(60) NOT NULL,
  `r_zip` int(11) NOT NULL,
  `r_email` varchar(60) NOT NULL,
  `r_mobile` bigint(20) NOT NULL,
  `r_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit_request`
--

INSERT INTO `submit_request` (`r_id`, `r_info`, `r_desription`, `name`, `r_address`, `r_city`, `r_state`, `r_zip`, `r_email`, `r_mobile`, `r_date`) VALUES
(15, 'headphones not working', 'Problem in hand free', 'Madhu solanki', '60 gayatri nagar', 'Dewas', 'MP', 455001, 'c@gmail.com', 9826775889, '2020-10-10 21:24:09'),
(14, 'Problem in laptop', 'My laptop is not working properly', 'Aakankskha solanki', '60 gayatri nagar', 'Dewas', 'MP', 455001, 'aakankshasolanki70@gmail.com', 9874110225, '2020-10-07 20:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

DROP TABLE IF EXISTS `technician`;
CREATE TABLE IF NOT EXISTS `technician` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(45) NOT NULL,
  `emp_email` varchar(45) NOT NULL,
  `emp_city` varchar(55) NOT NULL,
  `emp_mobile` bigint(20) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`emp_id`, `emp_name`, `emp_email`, `emp_city`, `emp_mobile`) VALUES
(5, 'Ram', 'ram@gmail.com', 'Chandigarh', 9632587410),
(4, 'Asif Ali', 'asif@gmail.com', 'Hyderabad', 7410258963);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
