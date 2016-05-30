-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 30 maj 2016 kl 11:49
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `db-projekt`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `salt` varchar(100) NOT NULL,
  `permission` varchar(15) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `salt`, `permission`) VALUES
(1, 'Encaitor', 'encaitor@gmail.com', 'b7ba3c40ff85f2134929d1410f8ef98cea91fa6d0e5bacb2f54aa216aa8b006d', 'ù ñ‘ÈÏÎÀiÞ0ZæÉ´ø', '1'),
(3, 'Dath', 'jacob.kjellerstedt@live.com', 'faba015f569036c05038a1b313b8861be8181690af9fbeb43006ede3d5bcb8be', 'k®ô$­3¾R+wÝ_›Ï', '1'),
(17, 'olle', 'olle@mail.com', 'b0e453023f4451d36026cca8d4c8233fd728b3a1fc73c331c13a42f5a64a410b', 'š1RLNò(¥«h2Ça', '0'),
(18, '123', '123@123.1', 'aecdd290dc9246656ec83a8846ca01c17b272d3eb63e1e64d24dac233961c789', 'K°iX_É‹ÊCÿ$‡\n', '1'),
(19, 'Testzor', 'test@test.nu', '5ec1ef4e2346513f5230fc01ec6cd17e476bcbf259773e4e9e49f0789a40af3a', 'R4Òzå¤Úu#ºè¯¤nF', ''),
(20, 'Testare7', 'test7@gmail.com', '023ab26dd5637e2d31cf25d050fa580f4443a6be7b4c060c8ff51aada0f9598e', 'HQúáÍœ@Ìï{W§á¢\n³', '0'),
(21, 'Jacob', 'jacob@test.com', 'b15138f265ff9b56ae3d4a98f6c6bc57308fb26485c6320ab9d3fff4ec669711', '\rèv2"3lÂ:CÌ/L±Ð', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
