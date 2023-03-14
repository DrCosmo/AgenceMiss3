-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 06 mars 2023 à 03:05
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agence_immo`
--

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

DROP TABLE IF EXISTS `bien`;
CREATE TABLE IF NOT EXISTS `bien` (
  `reference` int(11) NOT NULL AUTO_INCREMENT,
  `nbpiece` int(11) DEFAULT NULL,
  `jardin` tinyint(1) NOT NULL,
  `surface` float NOT NULL,
  `prix` float NOT NULL,
  `ville` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `Description` text COLLATE utf8mb4_bin NOT NULL,
  `img` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `ce_type_bien` (`type`),
  KEY `ce_ville_bien` (`ville`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `bien`
--

INSERT INTO `bien` (`reference`, `nbpiece`, `jardin`, `surface`, `prix`, `ville`, `type`, `Description`, `Img`) VALUES
(1, 5, 1, 1675, 66000, 3, 1, 'Lorem ipsum dolor sit amet', 'img/maison_1/maison1.jpeg'),
(2, 5, 1, 1675, 66000, 3, 1, 'Lorem ipsum dolor sit amet', 'img/maison_1/maison1.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `hachage` text COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `hachage`) VALUES
(1, 'CASLOGEZ', 'Paul', '$argon2id$v=19$m=65536,t=4,p=1$d3VDLndzQVdPRFc4Umh6Zg$PpbYTvps9dOtRrSQ7wgjTul/vII4ECB9a04x/OakhzA'),
(2, 'Gelati', 'Ronald', '$argon2id$v=19$m=65536,t=4,p=1$L2VmMTBFdzhUb2o0TlVqLw$HN2t/Hg5c7qbew4IqzIPlNgvu0FdxTpalGECw0RYc38'),
(3, 'Volvic', 'edward', '$argon2id$v=19$m=65536,t=4,p=1$bjBDVW9XRHdOQ29ZQ3M5SQ$dfDY5WK8drJU6xWLBV6TD+M1VsudjYE+i5ACa4rLEzY'),
(4, 'Pilard', 'théo', '$argon2id$v=19$m=65536,t=4,p=1$THVJcnFkN3A5R0JHSUJLZA$E6x7yppCN7CN9P7Am4EpQyHV5IeJpAMQRIQlxDq2A4k'),
(5, 'McVicker', 'Tyler', '$argon2id$v=19$m=65536,t=4,p=1$eDJDeU1tN21yRTBpZDRJQw$AnW2X7mhnd/3CLLm5W8uNlUedbho0VSUjZFKK6YhvaY');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `noType` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`noType`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`noType`, `libelle`) VALUES
(1, 'Maison'),
(2, 'Appartements'),
(3, 'Immeubles'),
(4, 'LocauxCommerciaux'),
(5, 'TerrainsNus');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `noVille` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`noVille`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`noVille`, `libelle`) VALUES
(1, 'Lille'),
(2, 'Paris'),
(3, 'Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `ce_type_bien` FOREIGN KEY (`type`) REFERENCES `type` (`noType`),
  ADD CONSTRAINT `ce_ville_bien` FOREIGN KEY (`ville`) REFERENCES `ville` (`noVille`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
