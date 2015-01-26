-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2015 at 05:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `arnet_digi`
--

-- --------------------------------------------------------

--
-- Table structure for table `zaposlenik`
--

CREATE TABLE IF NOT EXISTS `zaposlenik` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(20) COLLATE utf8_croatian_ci DEFAULT NULL,
  `prezime` varchar(20) COLLATE utf8_croatian_ci DEFAULT NULL,
  `adresa` varchar(45) COLLATE utf8_croatian_ci DEFAULT NULL,
  `grad` varchar(45) COLLATE utf8_croatian_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `zaposlenik`
--

INSERT INTO `zaposlenik` (`id`, `ime`, `prezime`, `adresa`, `grad`, `email`) VALUES
(1, 'Slaven 1', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(2, 'Slaven 2', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(3, 'Slaven 3', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(4, 'Slaven 4', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(5, 'Slaven 5', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(6, 'Slaven 6', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(7, 'Slaven 7', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(8, 'Slaven 8', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(9, 'Slaven 9', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(10, 'Slaven 10', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr'),
(11, 'Slaven 11', 'Sakacic', 'Vijenac', 'Osijek', 'lorem@net.hr');

INSERT INTO `arnet_digi`.`telefon` (`id`, `zaposlenik_id`, `telefon`) VALUES 
('1', '1', '031202333'), ('2', '1', '03146856'), 
('3', '1', '031457346'), ('4', '2', '031345678'), 
('5', '2', '031436645'), ('6', '3', '031478654'), 
('7', '3', '031435756'), ('8', '3', '031468555'), 
('9', '4', '031468555'), ('10', '5', '031333333');
