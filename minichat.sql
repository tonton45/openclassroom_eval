-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 12 Octobre 2018 à 15:12
-- Version du serveur :  5.7.9
-- Version de PHP :  7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test_formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE IF NOT EXISTS `minichat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date_message` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `minichat`
--

INSERT INTO `minichat` (`ID`, `pseudo`, `message`, `date_message`) VALUES
(18, 'titi', 'tu fais quoi ?', '2018-10-12 14:52:03'),
(17, 'titi', 'on fait aller', '2018-10-12 14:49:36'),
(16, 'toto', 'ca va bien merci !! Et toi ?', '2018-10-12 14:49:02'),
(15, 'titi', 'comment vas-tu ?', '2018-10-12 14:48:46'),
(14, 'ttoto', 'bonjour', '2018-10-12 14:48:34'),
(13, 'toto', 'tututu', '2018-10-12 14:47:02'),
(19, 'toto', 'je sui en train d''appendre le PHP', '2018-10-12 14:52:15'),
(20, 'titi', 'c''est quoi ?', '2018-10-12 14:52:24'),
(21, 'toto', 'un language de programmation .. tu comprendrais pas ..', '2018-10-12 14:52:41'),
(22, 'titi', 'allez explique', '2018-10-12 14:52:57'),
(23, 'toto', 'le mieux c''est que tu ailles sur OpenClassroom', '2018-10-12 14:53:13'),
(24, 'toto', 'le cours est super et tres clair', '2018-10-12 14:53:25'),
(25, 'titi', 'ok', '2018-10-12 15:06:17'),
(26, 'toto', 'a+', '2018-10-12 15:06:30');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
