-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 déc. 2017 à 21:19
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eval1`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(40) NOT NULL,
  `Societe` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Tel` int(10) NOT NULL,
  `Message` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`ID`, `Nom`, `Societe`, `Email`, `Tel`, `Message`) VALUES
(1, 'Test1', 'Apple', 'Apple@net.com', 98787656, 'Ceci est un text'),
(2, 'Test2', 'Windows', 'windows@net.com', 45322334, 'YOOUUUPII le test2 marche aussi !'),
(3, 'Test3', 'Asus', 'Asus@net.com', 34231245, 'ET VOILA un 3e ajout histoire de dire que Ã§a marche toujours...');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
