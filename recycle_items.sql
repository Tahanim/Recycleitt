-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 أبريل 2016 الساعة 15:46
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recycle_items`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(30) NOT NULL,
  `adminEmail` varchar(20) NOT NULL,
  `adminPass` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `admin`
--

INSERT INTO `admin` (`id`, `adminName`, `adminEmail`, `adminPass`) VALUES
(1, 'admin', 'admin@hotmail.com', '123456');

-- --------------------------------------------------------

--
-- بنية الجدول `custdeals`
--

CREATE TABLE IF NOT EXISTS `custdeals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custID` int(11) NOT NULL,
  `matID` int(11) NOT NULL,
  `matQuantity` int(11) NOT NULL,
  `dealDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- إرجاع أو استيراد بيانات الجدول `custdeals`
--

INSERT INTO `custdeals` (`id`, `custID`, `matID`, `matQuantity`, `dealDate`) VALUES
(1, 1, 1, 10, '2016-04-09'),
(2, 2, 0, 0, '2016-04-10'),
(3, 2, 2, 4, '2016-04-10'),
(4, 3, 0, 0, '2016-04-10'),
(5, 3, 0, 0, '2016-04-10'),
(6, 3, 0, 0, '2016-04-10'),
(7, 3, 3, 4, '2016-04-10'),
(8, 3, 6, 6, '2016-04-10');

-- --------------------------------------------------------

--
-- بنية الجدول `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custName` varchar(30) NOT NULL,
  `custEmail` varchar(30) NOT NULL,
  `custPhone` varchar(20) NOT NULL,
  `custAddress` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- إرجاع أو استيراد بيانات الجدول `customer`
--

INSERT INTO `customer` (`id`, `custName`, `custEmail`, `custPhone`, `custAddress`) VALUES
(1, 'Sara Dawood', 'hoopahamdy@yahoo.com', '0564789654', 'Address: Olyaa Street, Aloroba way'),
(2, 'Mahmoud', 'sara@hotmail.com', '0564785693', ''),
(3, 'Hala Saad', 'hala@yahoo.com', '0563222222', '');

-- --------------------------------------------------------

--
-- بنية الجدول `cust_exchange`
--

CREATE TABLE IF NOT EXISTS `cust_exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custID` int(11) NOT NULL,
  `exchangeID` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- إرجاع أو استيراد بيانات الجدول `cust_exchange`
--

INSERT INTO `cust_exchange` (`id`, `custID`, `exchangeID`) VALUES
(1, 5, 3);

-- --------------------------------------------------------

--
-- بنية الجدول `exchange`
--

CREATE TABLE IF NOT EXISTS `exchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exchange_offer` text NOT NULL,
  `required_points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- إرجاع أو استيراد بيانات الجدول `exchange`
--

INSERT INTO `exchange` (`id`, `exchange_offer`, `required_points`) VALUES
(1, 'Carrefour Gift Card', 50),
(2, 'Toys R Us Gift Card', 70),
(3, 'Chilis Gift Card', 80),
(4, 'Souq.com Gift Card', 90),
(5, 'Faces Gift Card', 100),
(6, 'Axiom telcom', 200),
(7, 'Saudi Airlines Gift Card', 500);

-- --------------------------------------------------------

--
-- بنية الجدول `material`
--

CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matName` varchar(50) NOT NULL,
  `size` int(11) NOT NULL,
  `measure_unit` varchar(20) NOT NULL,
  `points` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- إرجاع أو استيراد بيانات الجدول `material`
--

INSERT INTO `material` (`id`, `matName`, `size`, `measure_unit`, `points`) VALUES
(1, 'Plastic bottles', 1, 'KG', 5),
(2, 'Plastic films', 1, 'KG', 5),
(3, 'Glass bottles', 1, 'KG', 10),
(4, 'Food Drink cartoon', 1, 'KG', 10),
(5, 'Batteries', 1, 'KG', 25),
(6, 'Aluminum trays', 1, 'KG', 30),
(7, 'Lamps', 1, 'KG', 30),
(8, 'Iron', 1, 'KG', 50),
(9, 'Metal', 1, 'KG', 55),
(10, 'Electrical Items', 1, 'device', 50),
(11, 'Car batteries', 1, 'device', 85),
(12, 'Laptops and Phones', 1, 'device', 100);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
