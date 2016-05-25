-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 25 maj 2016 kl 15:54
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
  `username` varchar(100) NOT NULL,
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
  PRIMARY KEY (`adID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `ads`
--

INSERT INTO `ads` (`adID`, `username`, `title`, `msg`, `game`, `skill`, `skill_newbie`, `skill_casual`, `skill_semipro`, `skill_hardcore`, `timezone`, `s_time`, `e_time`, `region`, `lang_eng`, `lang_chi`, `lang_spa`, `lang_ara`, `lang_other`) VALUES
(1, 'Dath', 'Testar att publicera en ad', 'SÃ¶ker spelare och testar att publicera en ad nu!', 'dota', 'semipro', 'yes', 'no', 'yes', 'yes', 'GMT+2', 1700, 0, 'Europe', 'yes', 'no', 'no', 'no', 'Swedish'),
(2, 'Dath', 'testad nr 2', 'Nu testar vi igen olch ser vad som  sker.', 'dota', 'semipro', 'no', 'no', 'yes', 'yes', 'GMT+2', 1715, 2330, 'Europe', 'yes', 'no', 'no', 'no', 'Swedish');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
