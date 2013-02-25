-- phpMyAdmin SQL Dump
-- version 3.3.9.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2013 at 10:51 AM
-- Server version: 5.1.63
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trikoder`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `price`) VALUES
(1, 'Mitsubishi Evolution 2013', 264238.36),
(18, 'Honda Civic 2013', 12345.00),
(22, 'Moj auto', 256.00);

-- --------------------------------------------------------

--
-- Table structure for table `car_fuel`
--

CREATE TABLE IF NOT EXISTS `car_fuel` (
  `car_id` int(11) NOT NULL,
  `fuel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_fuel`
--

INSERT INTO `car_fuel` (`car_id`, `fuel_id`) VALUES
(18, 1),
(18, 2),
(18, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 3),
(22, 3),
(18, 5);

-- --------------------------------------------------------

--
-- Table structure for table `car_oil`
--

CREATE TABLE IF NOT EXISTS `car_oil` (
  `car_id` int(11) NOT NULL,
  `oil_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_oil`
--

INSERT INTO `car_oil` (`car_id`, `oil_id`) VALUES
(18, 1),
(18, 2),
(1, 7),
(1, 8),
(22, 8);

-- --------------------------------------------------------

--
-- Table structure for table `fuel`
--

CREATE TABLE IF NOT EXISTS `fuel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `fuel`
--

INSERT INTO `fuel` (`id`, `name`, `price`) VALUES
(1, 'BMB EURO BS 95', 12.12),
(2, 'BMB EURO BS 95 CLASS', 10.83),
(3, 'BMB EURO BS 98+ CLASS', 11.18),
(4, 'DG EURO BS', 9.96),
(5, 'DG EURO BS CLASS', 9.99),
(6, 'DG PLAVI', 6.48),
(7, 'DG EURO BS PLAVI', 6.73),
(8, 'LUEL EURO', 7.19);

-- --------------------------------------------------------

--
-- Table structure for table `oil`
--

CREATE TABLE IF NOT EXISTS `oil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `oil`
--

INSERT INTO `oil` (`id`, `name`, `price`) VALUES
(1, 'INA DELTA 5 15W-40', 35.23),
(2, 'INA DELTA SINT', 47.16),
(7, 'MOTUL 6100 Synergie + 10W-40 5L', 59.99),
(8, 'MOTUL 8100 X-Cess 5W-40 5L', 69.99),
(9, 'MOTUL Specific VW 505.01, 502.00, 505 .00, 5W-40 5L', 74.99),
(10, 'SHELL HELIX PLUS / HX7 10W-40 - 1 karton 12 x 1L', 29.99),
(11, 'TOTAL QUARTZ 7000 10W-40 - 1 karton 12 x 1L', 36.89),
(12, 'ELF COMPETITION STI 10W-40 - 1 karton 12 x 1L', 36.89),
(13, 'TOTAL QUARTZ 9000 5W-40 - 1 karton 12 x 1L', 55.34),
(14, 'ELF EXCELLIUM NF 5W-40 - 1 karton 12 x 1L', 55.34),
(15, 'Shell Helix Ultra 5W-40 - 1 karton 12 x 1L', 59.99),
(16, 'MOBIL 1 ESP FORMULA 5W-30 - 1 karton 12 x 1L', 83.76),
(18, 'Mobil Super 3000 X1 5W-40 - 1 karton 12 x 1L', 61.49);
