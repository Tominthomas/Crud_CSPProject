-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 30, 2018 at 02:52 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Football`
--

-- --------------------------------------------------------

--
-- Table structure for table `Sabers`
--

CREATE TABLE IF NOT EXISTS `Sabers` (
  `lastName` varchar(128) NOT NULL,
  `JerseyNumber` varchar(128) NOT NULL,
  `Weight` varchar(128) NOT NULL,
  `Height` varchar(128) NOT NULL,
  `Postion` varchar(128) NOT NULL,
  `Roster` varchar(128) NOT NULL,
  PRIMARY KEY (`JerseyNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sabers`
--

INSERT INTO `Sabers` (`lastName`, `JerseyNumber`, `Weight`, `Height`, `Postion`, `Roster`) VALUES
('Tomin', '', '170', '', 'Safety', 'Shakopee Sabers'),
('Tom brady', '12', '200', '6''3', 'Safety', 'Shakopee Sabers'),
('Thomas', '22', '170', '6''0', 'Safety', 'Shakopee Sabers'),
('read memmme', '2334', '234', '1234', 'Safety', 'Shakopee Sabers'),
('Harry Moran', '32', '500', '5''4', 'Qb', 'Shakopee Sabers'),
('Jon', '46', '200', '6''0', 'Linebacker', 'Shakopee Sabers'),
('Adam', '71', '700', '6"2', 'Safety', 'Shakopee Sabers');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
