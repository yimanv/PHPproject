-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2015 at 04:44 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `userinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(255) COLLATE utf8_bin NOT NULL,
  `Lastname` varchar(255) COLLATE utf8_bin NOT NULL,
  `Addresses` varchar(255) COLLATE utf8_bin NOT NULL,
  `Emails` varchar(255) COLLATE utf8_bin NOT NULL,
  `Telephones` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=30 ;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `Firstname`, `Lastname`, `Addresses`, `Emails`, `Telephones`) VALUES
(1, '22', '22', '222,22', '22,22', '22,22'),
(24, '', '', ',', ',', ','),
(26, 'dfsf', 'dsfsd', 'asd,asd', 'sdf,sdf', 'sdf,sdf'),
(27, 'dfsf', 'dsfsd', 'asd,asd', 'sdf,sdf', 'sdf,sdf'),
(29, 'asd', 'sdf', 'sdfsd,asd', 'sad,sdf', 'asd,asd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
