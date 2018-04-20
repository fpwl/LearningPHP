-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 03:01 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 7.1.9-1+ubuntu14.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ShoppingList`
--

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE IF NOT EXISTS `Items` (
  `ID` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Price` decimal(5,2) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`ID`, `Name`, `Price`) VALUES
(0, 'Chocolate Milk', '4.85'),
(1, 'Trim Milk', '4.35'),
(2, 'Bagels', '3.89'),
(3, 'Cheddar Cheese', '7.50'),
(4, 'Frozen Pizza', '8.99');

-- --------------------------------------------------------

--
-- Table structure for table `Stock`
--

CREATE TABLE IF NOT EXISTS `Stock` (
  `ID` int(5) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `ReOrder_Level` int(2) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Stock`
--

INSERT INTO `Stock` (`ID`, `Quantity`, `Status`, `ReOrder_Level`, `Date`) VALUES
(0, 3453, 'InStock', 0, '2018-04-04'),
(1, 0, 'OutOfStock', 0, '2018-04-08'),
(2, 23, 'ReOrder', 0, '2018-03-09'),
(3, 3812, 'InStock', 0, '2018-04-03'),
(4, 0, 'OutOfStock', 0, '2018-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `Transactions`
--

CREATE TABLE IF NOT EXISTS `Transactions` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Quantity` int(255) NOT NULL,
  `Amount` float(5,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
