-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 02 Mars 2015 à 17:29
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

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
-- Structure de la table `adds`
--

CREATE TABLE IF NOT EXISTS `adds` (
`id` int(11) NOT NULL,
  `user` varchar(30) DEFAULT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `id_user` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adds`
--

INSERT INTO `adds` (`id`, `user`, `title`, `details`, `id_user`) VALUES
(1, NULL, 'Salut', 'Et merci pour le poisson', 0),
(2, NULL, 'Salut', 'Et merci pour le poisson', 0),
(3, NULL, 'Salut salut', 'Et merci bien pour le poisson', 0),
(4, NULL, 'merci', 'pour le poisson', 0),
(5, NULL, 'Salut salut', 'Et merci bien pour le poisson', 0),
(6, NULL, 'Salut', 'Et merci pour le poisson', 0),
(7, NULL, 'WHOO', 'POO POO POO', 0),
(8, NULL, 'WHOO', 'POO POO POO', 0),
(9, NULL, 'maman', 'les petits bateaux', 0),
(10, NULL, 'maman', 'les petits bateaux', 0),
(11, NULL, 'maman', 'les petits bateaux', 0),
(12, NULL, 'toto', 'tata', 0),
(13, NULL, 'Chapi', 'Chapo', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
`id` int(11) NOT NULL,
  `nom_ligue` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nb_membre` int(11) NOT NULL,
  `site` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sports`
--

INSERT INTO `sports` (`id`, `nom_ligue`, `description`, `nb_membre`, `site`) VALUES
(1, 'Aïkido', 'L''aïkido est un budo (art martial japonais) essentiellement défensif, fondé par Morihei Ueshiba au cours du XXème  siècle , entre 1930 et 1960 (officiellement reconnu par le gouvernement japonais en 1940 sous le nom d''aikibudo), mais basé sur des écoles d''arts martiaux bien plus anciennes (essentiellement le jujutsu de l''école daito ryu , l''escrime ou kenjutsu et l''Aikijutsu).', 10, 'http://www.aikido-lorraine.fr/'),
(2, 'Athlétisme', 'Fondée en 1921 par le Dr Paul KAHN, la Ligue Lorraine d’Athlétisme est une association loi 1901, regroupant les clubs d’Athlétisme de la région.Structure déconcentrée de la Fédération Française d’Athlétisme, elle a pour objet - de développer et de contrôler, sur son territoire, la pratique de l''Athlétisme sous toutes ses formes dans le cadre de la délégation accordée par le Ministère chargé des Sports à la F. F. A. et dans celui du développement durable- de défendre les intérêts moraux', 10, 'http://liguelorraine.athle.com/'),
(3, 'Aviron', '\r\nL''aviron fait partie de la famille des sports nautiques. Il est sport olympique depuis la création des Jeux olympiques modernes en 1896 sous l''impulsion du Baron Pierre de Coubertin. Ce sport consiste à propulser un bateau à l''aide de rames, également appelées avirons, ou communément dans le milieu des pratiquants francophones « pelles ». On distingue deux catégories : l''aviron de rivière et l''aviron de mer.', 10, 'http://www.aviron-lorraine.com/'),
(4, 'Badmington', '\r\nLa Ligue Lorraine de Badminton (LLBaD) affiliée à la Fédération Française de Badminton a été créée le 15 septembre 1987. La LLBaD est une association régie par la loi des associations du 1er juillet 1901.', 10, 'http://www.lorbad.com/');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `ddn` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `pwd` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `ddn`, `email`, `tel`, `pwd`) VALUES
(1, 'Depardieu', 'Paul', '0000-00-00', 'paul.depardieu@y-nov.com', '787915490', ''),
(2, 'Sebrie', 'Mickael', '1991-03-24', 'mickael.sebrie@y-nov.com', '684888228', ''),
(5, 'Depardieu', 'Paul', '1991-03-24', 'paul.depardieu@y-nov.com', '0', ''),
(6, 'Barental', 'Meryl', '1994-12-21', 'meryl.barental@y-nov.com', '669696969', ''),
(7, 'Depardieu', 'Paul', '1995-04-25', 'paul.depardieu@y-nov.com', '787915490', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(8, 'axel', 'thiry', '1995-05-05', 'axel.thiry@y-nov.com', '0777777777', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(9, 'Leux', 'Thomas', '1994-01-23', 'leux.thomas@y-nov.com', '0666666666', '2d64170babb41df5663852d9a96a639d29076c92'),
(10, 'Depardieu', 'paul', '1996-05-21', 'paul9597@hotmail.fr', '0666666666', 'a9993e364706816aba3e25717850c26c9cd0d89d'),
(16, 'Depardieu', 'Pascale', '1995-04-25', 'paul.depardieu@y-nov.com', '0787915490', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(17, 'Test', 'testeur', '0000-00-00', 'testeurdetest@mescouilles.com', '0666666666', '9cf95dacd226dcf43da376cdb6cbba7035218921');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adds`
--
ALTER TABLE `adds`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sports`
--
ALTER TABLE `sports`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adds`
--
ALTER TABLE `adds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `sports`
--
ALTER TABLE `sports`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
