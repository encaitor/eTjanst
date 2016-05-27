-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2016 at 12:17 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `permission` int(1) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `salt`, `permission`) VALUES
(1, 'Encaitor', 'encaitor@gmail.com', 'b7ba3c40ff85f2134929d1410f8ef98cea91fa6d0e5bacb2f54aa216aa8b006d', 'ù ñ‘ÈÏÎÀiÞ0ZæÉ´ø', 1),
(3, 'Dath', 'jacob.kjellerstedt@live.com', 'faba015f569036c05038a1b313b8861be8181690af9fbeb43006ede3d5bcb8be', 'k®ô$­3¾R+wÝ_›Ï', 1),
(17, 'olle', 'olle@mail.com', 'b0e453023f4451d36026cca8d4c8233fd728b3a1fc73c331c13a42f5a64a410b', 'š1RLNò(¥«h2Ça', 0),
(18, '123', '123@123.1', 'aecdd290dc9246656ec83a8846ca01c17b272d3eb63e1e64d24dac233961c789', 'K°iX_É‹ÊCÿ$‡\n', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
