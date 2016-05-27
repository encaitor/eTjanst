-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 26 maj 2016 kl 15:09
-- Serverversion: 5.5.9
-- PHP-version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `Spel`
--

-- --------------------------------------------------------

--
-- Struktur för tabell `games`
--

CREATE TABLE `games` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `GameName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Data i tabell `games`
--

INSERT INTO `games` VALUES(1, 'Dota 2');
INSERT INTO `games` VALUES(3, 'CS GO');
INSERT INTO `games` VALUES(4, 'League of Legends');
INSERT INTO `games` VALUES(5, 'Team Fortress 2');
INSERT INTO `games` VALUES(6, 'Fallout 4');
INSERT INTO `games` VALUES(7, 'Call of Duty Black Ops III');
INSERT INTO `games` VALUES(8, 'Battlefield 4');
INSERT INTO `games` VALUES(9, 'World of warcraft');
INSERT INTO `games` VALUES(10, 'StarCraft');
INSERT INTO `games` VALUES(11, 'Diablo II');
INSERT INTO `games` VALUES(12, 'Grand Theft Auto V');
INSERT INTO `games` VALUES(13, 'FIFA 15');
INSERT INTO `games` VALUES(14, 'Rocket League');
INSERT INTO `games` VALUES(15, 'Assassin''s Creed');
INSERT INTO `games` VALUES(16, 'Minecraft');
INSERT INTO `games` VALUES(17, 'Bloodborne');
INSERT INTO `games` VALUES(18, 'Evolve');
INSERT INTO `games` VALUES(19, 'Halo Reach');
INSERT INTO `games` VALUES(20, 'Halo 5: Guardians');
INSERT INTO `games` VALUES(21, 'Kings Quest');
INSERT INTO `games` VALUES(22, 'Mortal Kombat');
INSERT INTO `games` VALUES(23, 'Dragon Age: Inquisition');
INSERT INTO `games` VALUES(24, 'Star Wars Battlefront');
INSERT INTO `games` VALUES(25, 'The Witcher 3: Wild Hunt');
INSERT INTO `games` VALUES(26, 'Colin McRae: Dirt 2');
INSERT INTO `games` VALUES(27, 'Need for Speed: Most Wanted');
INSERT INTO `games` VALUES(28, 'Need For Speed: Rivals');
INSERT INTO `games` VALUES(29, 'Call of Duty: Modern Warfare 3');
INSERT INTO `games` VALUES(30, 'Fortnite');
INSERT INTO `games` VALUES(31, 'Crysis 2');
INSERT INTO `games` VALUES(32, 'Left 4 Dead');
INSERT INTO `games` VALUES(33, 'Final Fantasy');
INSERT INTO `games` VALUES(34, 'Tomb Raider');
INSERT INTO `games` VALUES(35, 'Kingdoms of Amalur');
INSERT INTO `games` VALUES(36, 'Silent Hill');
INSERT INTO `games` VALUES(37, 'The Elder Scrolls IV: Oblivion');
INSERT INTO `games` VALUES(38, 'The Elder Scrolls V: Skyrim');
INSERT INTO `games` VALUES(39, 'Final Fantasy XI');
INSERT INTO `games` VALUES(40, 'Final Fantasy XII');
INSERT INTO `games` VALUES(41, 'NHL 14');
INSERT INTO `games` VALUES(42, 'NHL 15');
INSERT INTO `games` VALUES(43, 'World of Warships');
INSERT INTO `games` VALUES(44, 'World of Tanks');
INSERT INTO `games` VALUES(45, 'EVE Online');
INSERT INTO `games` VALUES(46, 'Metal Gear Solid');
INSERT INTO `games` VALUES(47, 'Rust');
