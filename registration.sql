-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2019 at 09:35 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `Branch`, `year`, `dateofbirth`) VALUES
(1, 'sreeja', 'sreeja.alla21@gmail.com', '6562c5c1f33db6e05a082a88cddab5ea', '', 0, ''),
(2, 'simmy', 'allasrija97@gmail.com', 'f579b5cb463b6001a6467501f10f474d', '', 0, ''),
(5, 'dwija', 'dwija@gmail.com', '201e054a50b9fd82aaae7977a7a43dea', 'IT', 2017, ''),
(4, 'nandini', 'nandini@gmail.com', '48dd344493874130fba108ffa4c8d145', 'IT', 2017, ''),
(6, 'sreeja', 'sreeja.alla21@gmail.com', 'edeed22a3e15f1a3023b2b21e2ff84a5', 'IT', 2017, ''),
(7, 'sreemaan', 'sreeja.alla21@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'IT', 2019, '1997-08-21'),
(8, 'rupa', 'rupa12@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'CSE', 2016, '2019-02-27'),
(9, 'sreeja', 'sreeja.alla21@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'IT', 2019, '1997-08-21'),
(10, 'nandini', 'allasrija97@gmail.com', '6562c5c1f33db6e05a082a88cddab5ea', 'CSE', 2018, '1997-04-04'),
(11, 'nandu', 'nandu@gmail.com', '364680801c264375129015052b846faa', 'IT', 2019, '2019-02-08'),
(12, 'sandeep', 'kallisandeep@gmail.com', '066bf76610d0874c1af0f35d290b6b21', 'ECE', 2016, '1993-08-21'),
(13, 'sreemaan', 'sreeja.alla21@gmail.com', 'def7924e3199be5e18060bb3e1d547a7', 'CSE', 2017, '2006-10-30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
