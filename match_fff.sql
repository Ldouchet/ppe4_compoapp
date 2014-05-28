-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 19 Mars 2014 à 15:05
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `match_fff`
--
CREATE DATABASE IF NOT EXISTS `match_fff` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `match_fff`;

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `numClub` int(11) NOT NULL AUTO_INCREMENT,
  `nomClub` varchar(30) NOT NULL,
  `adresseClub` varchar(50) NOT NULL,
  `cpClub` int(5) NOT NULL,
  `villeClub` varchar(30) NOT NULL,
  `telClub` varchar(30) NOT NULL,
  `mailClub` varchar(30) NOT NULL,
  `imgClub` varchar(50) NOT NULL,
  `codeFFF` int(11) NOT NULL,
  `mdpClub` varchar(8) NOT NULL,
  `gerant_club` int(11) NOT NULL,
  PRIMARY KEY (`numClub`),
  KEY `gerant_club` (`gerant_club`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `club`
--

INSERT INTO `club` (`numClub`, `nomClub`, `adresseClub`, `cpClub`, `villeClub`, `telClub`, `mailClub`, `imgClub`, `codeFFF`, `mdpClub`, `gerant_club`) VALUES
(1, 'PARIS Saint Germain', '24, rue du Commandant Guilbaud', 75781, 'PARIS Cedex 16', '0141107100', 'infos@psg.com', '', 12345, '12345', 4),
(2, 'Olympique de Marseille', 'La Commanderie,,33, traverse de la Martine', 13425, 'MARSEILLE', '0491765609', 'infos@om.com', '', 12346, '12345', 5),
(3, 'Olympique Lyonnais', '350 avenue Jean Jaures', 69007, 'LYON', '0426296700', 'infos@ol.com', '', 123457, '12345', 6),
(4, 'Bar Le Duc ', '13 impasse Dyckhoff', 55000, 'Bar le duc', '0385479152', 'bldclub@gmail.com', '', 0, '', 7),
(5, 'teésst', '', 0, '', '', '', '', 0, '', 5);

-- --------------------------------------------------------

--
-- Structure de la table `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `competition`
--

INSERT INTO `competition` (`id`, `nom`) VALUES
(1, 'coupe du barois'),
(2, 'coupe au chocolat'),
(3, 'coupe de la galaxy '),
(4, 'teste'),
(5, 'Ligue des champions'),
(8, 'Ligue bobobobo'),
(9, 'ligue marron'),
(10, 'Ligue des poussins'),
(11, 'Coupe de champagne ');

-- --------------------------------------------------------

--
-- Structure de la table `composition`
--

CREATE TABLE IF NOT EXISTS `composition` (
  `id_match` int(11) NOT NULL,
  `id_joueur` int(11) NOT NULL,
  `statut` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_match`,`id_joueur`),
  KEY `id_match` (`id_match`),
  KEY `id_joueur` (`id_joueur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `composition`
--

INSERT INTO `composition` (`id_match`, `id_joueur`, `statut`) VALUES
(59, 1, 'titulaire'),
(59, 4, 'titulaire'),
(59, 7, 'remplacant'),
(59, 10, 'titulaire'),
(59, 11, 'titulaire'),
(59, 13, 'titulaire'),
(59, 14, 'titulaire'),
(59, 15, 'titulaire'),
(59, 16, 'titulaire'),
(59, 17, 'titulaire'),
(59, 18, 'titulaire'),
(67, 1, 'titulaire'),
(67, 4, 'remplacant'),
(67, 7, 'titulaire'),
(67, 10, 'remplacant'),
(67, 13, 'remplacant'),
(67, 16, 'titulaire'),
(67, 17, 'titulaire'),
(69, 3, 'titulaire'),
(69, 6, 'remplacant'),
(69, 8, 'titulaire'),
(71, 1, 'titulaire'),
(71, 4, 'remplacant');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `num_mess` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) COLLATE utf8_bin NOT NULL,
  `mail` varchar(45) COLLATE utf8_bin NOT NULL,
  `tel` int(11) NOT NULL,
  `sujet` varchar(45) COLLATE utf8_bin NOT NULL,
  `message` varchar(400) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`num_mess`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE IF NOT EXISTS `joueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `numero` int(10) NOT NULL,
  `adresse` varchar(120) NOT NULL,
  `code_postal` int(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Club` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Club` (`Club`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `nom`, `prenom`, `numero`, `adresse`, `code_postal`, `ville`, `Club`) VALUES
(1, 'Sancho', 'Gatien', 607080910, ' 5 impasse de la gourgandine', 67000, 'Strasbourg', 1),
(2, 'Giroud', 'Gabiriel', 608101215, '7 impasse de la gertrude', 55000, 'Bar le duc', 2),
(3, 'plastique', 'bertrand', 606060666, '5 impasse de la brioche', 55000, 'Bar le duc', 3),
(4, 'antonio', 'banderas', 607060706, '5 rue du boulanger', 55000, 'Bar le duc', 1),
(5, 'labay', 'pierre', 633333333, '5 impasse du paradis', 55000, 'Bar le duc', 2),
(6, 'Dark', 'Revan', 666666666, '5 rue du pouvoir ultime', 55000, 'Bar le duc', 3),
(7, 'Ethiene', '$DAO', 964359221, '5 rue du codage', 55000, 'Bar le Swagg', 1),
(8, 'LaRenne', 'Danlgleterre', 626592659, '5 rue du bourg', 55000, 'bar ligny', 3),
(9, 'Obi wan', 'kenobi', 1234567890, '5 impasse de la force', 55000, 'l''étoile noire', 4),
(10, 'LePetit', 'Minou', 2147483647, '5 rue de l''impasse', 55000, 'Bar le duc', 1),
(11, 'Zejli', 'Nourdin', 1472583690, '5 rue de la guimauve', 55000, 'trop loin', 1),
(12, 'Vals', 'Manuel', 666666666, '5 rue de la dictature', 55000, 'Verdun', 2),
(13, 'Bond', 'Vaga', 0, '5 rue derriere le casino', 55000, 'Bar le duc', 1),
(14, 'Girou', 'Marc', 0, '', 0, '', 1),
(15, 'Serafin', 'Camille', 0, '', 0, '', 1),
(16, 'Techer', 'Morgane', 0, '', 0, '', 1),
(17, 'Dalida', 'Stephanie', 0, '', 0, '', 1),
(18, 'Dalida', 'Franck', 0, '', 0, '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE IF NOT EXISTS `matchs` (
  `numMatch` int(11) NOT NULL AUTO_INCREMENT,
  `dateMatch` date NOT NULL,
  `epreuve` int(11) NOT NULL,
  `club1` int(11) NOT NULL,
  `club2` int(11) NOT NULL,
  PRIMARY KEY (`numMatch`),
  KEY `club1` (`club1`),
  KEY `club2` (`club2`),
  KEY `Epreuve` (`epreuve`),
  KEY `epreuve_2` (`epreuve`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=72 ;

--
-- Contenu de la table `matchs`
--

INSERT INTO `matchs` (`numMatch`, `dateMatch`, `epreuve`, `club1`, `club2`) VALUES
(56, '2014-01-01', 1, 1, 2),
(57, '2014-01-03', 1, 2, 4),
(58, '2014-01-01', 5, 1, 4),
(59, '2014-01-04', 11, 1, 2),
(60, '2014-01-02', 2, 3, 1),
(61, '2014-01-01', 1, 2, 1),
(62, '2014-01-03', 3, 3, 1),
(63, '2014-01-02', 2, 4, 3),
(64, '2014-01-02', 4, 3, 2),
(65, '2014-01-08', 9, 4, 3),
(66, '2008-12-11', 8, 2, 4),
(67, '2014-01-15', 2, 1, 4),
(68, '2014-01-11', 3, 2, 4),
(69, '2014-01-08', 10, 3, 4),
(70, '2014-02-05', 1, 1, 3),
(71, '2014-03-04', 1, 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` varchar(20) COLLATE utf8_bin NOT NULL,
  `message` varchar(500) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`num`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=23 ;

--
-- Contenu de la table `timeline`
--

INSERT INTO `timeline` (`num`, `auteur`, `date`, `message`) VALUES
(13, 'resligue', '19-01-2014', 'Note pour le match du 18 : les responsables de club devront se prÃ©senter Ã  l''accueil du stade sous peine de ne pas pouvoir accÃ©der aux tribunes pendant le match.'),
(15, 'resligue', '19-01-2014', 'Les jeux de balle au pied existent dÃ¨s l''AntiquitÃ©. Ce sont des jeux et non des sports. Les Grecs connaissent ainsi plusieurs jeux de balle se pratiquant avec les pieds : aporrhaxis et phÃ©ninde Ã  AthÃ¨nes et Ã©piscyre Ã  Sparte3. La situation est identique chez les Romains oÃ¹ l''on pratique la pila paganica, la pila trigonalis, la follis et l''harpastum.'),
(20, 'resclub_psg', '19-01-2014', 'Bonjour je suis le responsable du club de Paris. Bonne journÃ©e Ã  tous ! '),
(21, 'resclub_lyon', '19-01-2014', 'Le responsable du club de Lyon vous salut :)'),
(22, 'resligue', '16-02-2014', 'Coucou');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(30) COLLATE utf8_bin NOT NULL,
  `nom` varchar(50) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `mdp`, `nom`, `prenom`) VALUES
(4, 'resclub_psg', 'psg', 'Gatien', 'Sancho'),
(5, 'resclub_marseille', 'marseille', 'Loic', 'Douche '),
(6, 'resclub_lyon', 'lyon', 'Pomme', 'Au nutella '),
(7, 'resclub_bld', 'bld', 'Castagnette', 'Brigitte');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `club`
--
ALTER TABLE `club`
  ADD CONSTRAINT `club_ibfk_1` FOREIGN KEY (`gerant_club`) REFERENCES `utilisateurs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `composition`
--
ALTER TABLE `composition`
  ADD CONSTRAINT `composition_ibfk_1` FOREIGN KEY (`id_match`) REFERENCES `matchs` (`numMatch`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `composition_ibfk_2` FOREIGN KEY (`id_joueur`) REFERENCES `joueur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`Club`) REFERENCES `club` (`numClub`);

--
-- Contraintes pour la table `matchs`
--
ALTER TABLE `matchs`
  ADD CONSTRAINT `matchs_ibfk_1` FOREIGN KEY (`club1`) REFERENCES `club` (`numClub`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matchs_ibfk_2` FOREIGN KEY (`club2`) REFERENCES `club` (`numClub`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `matchs_ibfk_3` FOREIGN KEY (`epreuve`) REFERENCES `competition` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
