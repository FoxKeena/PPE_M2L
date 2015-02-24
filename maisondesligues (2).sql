-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Janvier 2015 à 17:28
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `maisondesligues`
--

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
  `tel` varchar(10) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `ddn`, `email`, `tel`, `pwd`) VALUES
(7, 'Depardieu', 'Paul', '1995-04-25', 'paul.depardieu@y-nov.com', '787915490', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(8, 'axel', 'thiry', '1995-05-05', 'axel.thiry@y-nov.com', '0777777777', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(9, 'Leux', 'Thomas', '1994-01-23', 'leux.thomas@y-nov.com', '0666666666', '2d64170babb41df5663852d9a96a639d29076c92'),
(10, 'Depardieu', 'paul', '1996-05-21', 'paul9597@hotmail.fr', '0666666666', 'a9993e364706816aba3e25717850c26c9cd0d89d'),
(16, 'Depardieu', 'Pascale', '1995-04-25', 'paul.depardieu@y-nov.com', '0787915490', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(17, 'Test', 'testeur', '0000-00-00', 'testeurdetest@mescouilles.com', '0666666666', '9cf95dacd226dcf43da376cdb6cbba7035218921');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
