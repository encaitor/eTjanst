-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 25 maj 2016 kl 12:26
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
-- Tabellstruktur `bio`
--

CREATE TABLE IF NOT EXISTS `bio` (
  `userID` int(11) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `weekends` int(11) NOT NULL,
  `weekdays` int(11) NOT NULL,
  `morning` int(11) NOT NULL,
  `afternoon` int(11) NOT NULL,
  `evenings` int(11) NOT NULL,
  `nights` int(11) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `GameName` varchar(100) NOT NULL,
  PRIMARY KEY (`GameName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `games`
--

INSERT INTO `games` (`GameName`) VALUES
('CSGO'),
('Dota 2'),
('League of Legends'),
('Team Fortress 2');

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
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `salt`) VALUES
(1, 'Encaitor', 'encaitor@gmail.com', 'b7ba3c40ff85f2134929d1410f8ef98cea91fa6d0e5bacb2f54aa216aa8b006d', 'ù ñ‘ÈÏÎÀiÞ0ZæÉ´ø'),
(3, 'Dath', 'jacob.kjellerstedt@live.com', 'dbd2a1281ba03158705603c04a167049602fbdab1aea33e0e1986243e3b9bbc8', '°6?óP¤µƒºÝM–ù');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
