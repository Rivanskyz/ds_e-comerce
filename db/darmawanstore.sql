-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2015 at 02:44 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darmawanstore`
--
CREATE DATABASE IF NOT EXISTS `darmawanstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `darmawanstore`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `No_Admin` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  PRIMARY KEY (`No_Admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`No_Admin`, `Username`, `Nama`, `Email`, `Pass`) VALUES
(1, 'riffai', 'Riffai Rifan Darmawan', 'riffai', 'riffai'),
(2, 'riffai', 'riffai', 'riffai', 'riffai'),
(3, 'tri', 'tri', 'tri', 'tri');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Title` varchar(255) DEFAULT NULL,
  `Desc` varchar(255) DEFAULT NULL,
  `Logo` varchar(255) DEFAULT NULL,
  `Link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Title`, `Desc`, `Logo`, `Link`) VALUES
('Phone', '+6281 2275 66614 ', 'img/icon/phone.png', NULL),
('Email', 'gpm.indo@gmail.com', 'img/icon/mail.png', 'gmail.com'),
('Facebook', 'Globalindo Putra Mandiri', 'img/icon/fb.png', 'https://www.facebook.com/gpmandiri'),
('Twitter', '@GPM_Global', 'img/icon/twit.png', 'https://twitter.com/Gpm_Global'),
('Path', 'Globalindo Putra Mandiri', 'img/icon/path.png', 'https://gpm.sosial.media@gmail.com'),
('WhatsApp', '+62878 4567 1011 ', 'img/icon/wa.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `No_Order` int(11) NOT NULL AUTO_INCREMENT,
  `No_Prod` int(11) DEFAULT NULL,
  `Nama_Prod` varchar(255) DEFAULT NULL,
  `Color` varchar(255) DEFAULT NULL,
  `Size` varchar(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Tlp` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`No_Order`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`No_Order`, `No_Prod`, `Nama_Prod`, `Color`, `Size`, `Price`, `Nama`, `Email`, `Tlp`, `Alamat`) VALUES
(1, 9, 'anu', 'black', '87', 890809, 'saya', 'saya', '8967856', 'sini'),
(2, 3, 'Addidas Runing Boost 3', 'green', '56', 0, 'a', 'a', '9898989', 'a'),
(3, 3, 'Addidas Runing Boost 3', 'red', '67', 0, 'q', 'q', '09900', 'q'),
(4, 3, 'Addidas Runing Boost 3', 'red', '67', 7897, 'q', 'q', '09900', 'q'),
(5, 4, 'Addidas Sport 1', 'w', 'w', 7896, 'w', 'w', 'w', 'w'),
(6, 4, 'Addidas Sport 1', 'blue', '78', 7896789, 'antok', 'antok', '0878978', 'sini'),
(7, 2, 'Addidas Runing Boost 2', 'black', '78', 989080, 'eva', 'eva@gmail.com', '784037398024', 'klaten,klaten, klaten, klaten');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `No_Prod` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Brand` varchar(50) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Gender` char(20) NOT NULL,
  `Stock` int(11) NOT NULL,
  PRIMARY KEY (`No_Prod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`No_Prod`, `Name`, `Picture`, `Color`, `Price`, `Brand`, `Size`, `Gender`, `Stock`) VALUES
(1, 'Addidas Runing Boost 1', 'img/products/addidas/ad1.jpg', 'Red, Green, Blue', 19090, 'Addidas', '38-45', 'Men''s', 10),
(2, 'Addidas Runing Boost 2', 'img/products/addidas/ad2.jpg', 'Red, Green, Blue', 989080, 'Addidas', '38-45', 'Men''s', 11),
(3, 'Addidas Runing Boost 3', 'img/products/addidas/ad3.jpg', 'Red, Green, Blue', 7897897, 'Addidas', '38-45', 'Men''s', 11),
(4, 'Addidas Sport 1', 'img/products/addidas/ad4.jpg', 'Red, Green, Blue', 7896789, 'Addidas', '38-45', 'Men''s', 11),
(5, 'Addidas Sport 2', 'img/products/addidas/ad5.jpg', 'Red, Green, Blue', 3434989, 'Addidas', '38-45', 'Men''s', 11);

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE IF NOT EXISTS `testimony` (
  `No_Testi` int(11) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Testimony` text NOT NULL,
  PRIMARY KEY (`No_Testi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`No_Testi`, `Nama`, `Email`, `Testimony`) VALUES
(1, 'riffai', 'riffa@gmail.com', 'tst'),
(2, 'rifan ', 'rifan@gmail.xom', 'tst'),
(3, 'darmawan', 'darmawan@gmail.com', 'ini baru yang namanya testi'),
(4, 'rrd', 'rrd@gmial.com', 'ggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhguggkh kh kh ih jh kh hui hig g jhkb f t tyur ty fyu bghi huib gugby uigb uhgu'),
(5, 'tri', 'tri@anu.com', 'njajal testimony');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
