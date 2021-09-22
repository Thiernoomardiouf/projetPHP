-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 22 Septembre 2021 à 23:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `learninggroup`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  `gérerInscription` varchar(50) NOT NULL,
  `connexion` varchar(50) NOT NULL,
  `deconnexion` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`idadmin`, `identifiant`, `motdepasse`, `gérerInscription`, `connexion`, `deconnexion`) VALUES
(1, 'Omar', 'diouf', 'Admin', 'Oui', 'Oui');

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE IF NOT EXISTS `apprenants` (
  `idapp` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `motdepasse` varchar(50) NOT NULL,
  PRIMARY KEY (`idapp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `apprenants`
--

INSERT INTO `apprenants` (`idapp`, `nom`, `prenom`, `email`, `tel`, `identifiant`, `motdepasse`) VALUES
(1, 'diouf', 'Thierno omar', 'thiernoomardiouf@gmail.com', 774684496, 'P23', 'diouf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
