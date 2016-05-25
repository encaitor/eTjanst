-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 25 maj 2016 kl 15:50
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
-- Tabellstruktur `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `adID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `game` varchar(45) NOT NULL,
  `skill` varchar(10) NOT NULL,
  `skill_newbie` varchar(10) NOT NULL,
  `skill_casual` varchar(10) NOT NULL,
  `skill_semipro` varchar(10) NOT NULL,
  `skill_hardcore` varchar(10) NOT NULL,
  `timezone` varchar(10) NOT NULL,
  `s_time` int(11) NOT NULL,
  `e_time` int(11) NOT NULL,
  `region` varchar(20) NOT NULL,
  `lang_eng` varchar(5) NOT NULL,
  `lang_chi` varchar(5) NOT NULL,
  `lang_spa` varchar(5) NOT NULL,
  `lang_ara` varchar(5) NOT NULL,
  `lang_other` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  PRIMARY KEY (`adID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `ads`
--

INSERT INTO `ads` (`adID`, `title`, `msg`, `game`, `skill`, `skill_newbie`, `skill_casual`, `skill_semipro`, `skill_hardcore`, `timezone`, `s_time`, `e_time`, `region`, `lang_eng`, `lang_chi`, `lang_spa`, `lang_ara`, `lang_other`, `username`) VALUES
(1, 'Testar att publicera en ad', 'SÃ¶ker spelare och testar att publicera en ad nu!', 'dota', 'semipro', 'yes', 'no', 'yes', 'yes', 'GMT+2', 1700, 0, 'Europe', 'yes', 'no', 'no', 'no', 'Swedish', 'Dath'),
(2, 'testad nr 2', 'Nu testar vi igen olch ser vad som  sker.', 'dota', 'semipro', 'no', 'no', 'yes', 'yes', 'GMT+2', 1715, 2330, 'Europe', 'yes', 'no', 'no', 'no', 'Swedish', 'Dath');

-- --------------------------------------------------------

--
-- Tabellstruktur `bio`
--

CREATE TABLE IF NOT EXISTS `bio` (
  `username` varchar(100) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `weekends` varchar(5) NOT NULL,
  `weekdays` varchar(5) NOT NULL,
  `morning` varchar(5) NOT NULL,
  `afternoon` varchar(5) NOT NULL,
  `evenings` varchar(5) NOT NULL,
  `nights` varchar(5) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `bio`
--

INSERT INTO `bio` (`username`, `bio`, `weekends`, `weekdays`, `morning`, `afternoon`, `evenings`, `nights`) VALUES
('Dath', 'Nu kan man vÃ¤lja weekdays oxÃ¥! :D ', 'yes', 'yes', 'no', 'yes', 'yes', 'yes'),
('Encaitor', 'My name is Jacob and I like to play Dota 2. Testar att uppdatera. It''s woooooorking!', 'yes', 'no', 'no', 'yes', 'yes', 'yes');

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
(3, 'Dath', 'jacob.kjellerstedt@live.com', 'faba015f569036c05038a1b313b8861be8181690af9fbeb43006ede3d5bcb8be', 'k®ô$­3¾R+wÝ_›Ï');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
