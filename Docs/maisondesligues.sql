-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 21 Octobre 2014 à 09:11
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `maisondesligues`
--
CREATE DATABASE IF NOT EXISTS `maisondesligues` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `maisondesligues`;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `ddn` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `ddn`, `email`, `tel`) VALUES
(1, 'Depardieu', 'Paul', '0000-00-00', 'paul.depardieu@y-nov.com', 787915490),
(2, 'Sebrie', 'Mickael', '1991-03-24', 'mickael.sebrie@y-nov.com', 684888228),
(5, 'Depardieu', 'Paul', '1991-03-24', 'paul.depardieu@y-nov.com', 0),
(6, 'Barental', 'Meryl', '1994-12-21', 'meryl.barental@y-nov.com', 669696969);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
