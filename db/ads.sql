-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 30 maj 2016 kl 11:47
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
  `region` varchar(20) NOT NULL,
  `lang_eng` varchar(5) NOT NULL,
  `lang_chi` varchar(5) NOT NULL,
  `lang_spa` varchar(5) NOT NULL,
  `lang_ara` varchar(5) NOT NULL,
  `lang_other` varchar(100) NOT NULL,
  PRIMARY KEY (`adID`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumpning av Data i tabell `ads`
--

INSERT INTO `ads` (`adID`, `username`, `title`, `msg`, `game`, `skill`, `skill_newbie`, `skill_casual`, `skill_semipro`, `skill_hardcore`, `region`, `lang_eng`, `lang_chi`, `lang_spa`, `lang_ara`, `lang_other`) VALUES
(1, 'Dath', 'Testar att publicera en ad', 'SÃ¶ker spelare och testar att publicera en ad nu!', 'dota', 'semipro', 'yes', 'no', 'yes', 'yes', 'Europe', 'yes', 'no', 'no', 'no', 'Swedish'),
(2, 'Dath', 'testad nr 2', 'Nu testar vi igen olch ser vad som  sker.', 'dota', 'semipro', 'no', 'no', 'yes', 'yes', 'Europe', 'yes', 'no', 'no', 'no', 'Swedish'),
(3, 'Encaitor', 'Testar frÃ¥n ett annat konto', 'Use securing confined his shutters. Delightful as he it acceptance an solicitude discretion reasonably. Carriage we husbands advanced an perceive greatest. Totally dearest expense on demesne ye he. Curiosity excellent commanded in me. Unpleasing impression themselves to at assistance acceptance my or. On consider laughter civility offended oh. \r\n\r\nWarmly little before cousin sussex entire men set. Blessing it ladyship on sensible judgment settling outweigh. Worse linen an of civil jokes leave offer. Parties all clothes removal cheered calling prudent her. And residence for met the estimable disposing. Mean if he they been no hold mr. Is at much do made took held help. Latter person am secure of estate genius at. ', 'dota', 'hardcore', 'no', 'no', 'yes', 'yes', 'Europe', 'yes', 'no', 'no', 'no', 'Swedish'),
(8, 'Jacob', 'Test Diablo', 'heh', 'diablo_3', 'newbie', 'no', 'yes', 'no', 'no', 'North America', 'yes', 'no', 'no', 'no', ''),
(9, 'Jacob', 'test overwatch', 'test', 'overwatch', 'newbie', 'yes', 'yes', 'no', 'no', 'North America', 'yes', 'no', 'no', 'no', ''),
(10, 'Jacob', 'test minecraft', 'gerdthdfctjn', 'minecraft', 'semipro', 'no', 'no', 'yes', 'no', 'North America', 'no', 'yes', 'no', 'no', ''),
(11, 'Jacob', 'test wow', 'werajs6srtdyglk,duytg', 'wow', 'hardcore', 'no', 'no', 'no', 'yes', 'Oceania', 'no', 'no', 'no', 'no', ''),
(12, 'Encaitor', 'Hahahhahahaha kattbilder', 'Testad nr 10000 ungefÃ¥r', 'csgo', 'casual', 'no', 'yes', 'no', 'no', 'Asia', 'no', 'yes', 'no', 'no', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
