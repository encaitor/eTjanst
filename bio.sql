-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 26 maj 2016 kl 15:09
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
