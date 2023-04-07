-- phpMyAdmin SQL Dump
-- version 5.2.1-1.fc36
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 04 avr. 2023 à 11:35
-- Version du serveur : 10.5.18-MariaDB
-- Version de PHP : 8.1.16

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

CREATE TABLE `bien` (
  `reference` int(11) NOT NULL,
  `nbpiece` int(11) DEFAULT NULL,
  `jardin` tinyint(1) NOT NULL,
  `surface` float NOT NULL,
  `prix` float NOT NULL,
  `ville` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `Description` text NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `bien`
--

INSERT INTO `bien` (`reference`, `nbpiece`, `jardin`, `surface`, `prix`, `ville`, `type`, `Description`, `Img`) VALUES
(1, 5, 1, 1675, 66000, 3, 1, 'Lorem ipsum dolor sit amet', 'img/maison_1/maison1.png'),
(2, 5, 1, 1675, 66000, 3, 1, 'Lorem ipsum dolor sit amet', 'img/maison_2/maison1.jpg'),
(3, 1, 0, 126, 60000, 2, 2, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/appartement_1/appartement_1.png'),
(4, 52, 0, 1675, 154000, 2, 3, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/immeuble_1/immeuble1.jpg'),
(5, 12, 1, 386, 168000, 3, 3, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/immeuble_2/immeuble1.jpg'),
(6, 14, 0, 441, 123000, 1, 3, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi. ', 'img/immeuble_3/immeuble1.jpg'),
(9, 3, 1, 76, 53800, 1, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/maison_3/maison1.jpg'),
(10, 3, 1, 182, 220000, 2, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/maison_4/maison_4.png'),
(11, 3, 0, 130, 135000, 3, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/maison_5/maison_5.png'),
(12, 3, 0, 230, 312000, 2, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/maison_6/maison_6.png'),
(13, 2, 0, 4000, 78000000, 1, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/maison_7/maison_1.jpg'),
(14, 8, 1, 200, 66000, 2, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/maison_8/maison_1.jpg'),
(15, 3, 1, 100, 2000000, 1, 1, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe reiciendis perspiciatis nihil porro numquam blanditiis impedit ipsa perferendis temporibus deserunt eligendi placeat cum rerum dolor eveniet ipsum odio, nemo repellat quidem officia voluptatibus error omnis. Quas, molestias modi.', 'img/maison_9/maison_1.jpg');
-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `hachage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
-- Structure de la table `prix`
--

CREATE TABLE `prix` (
  `reference` int(11) NOT NULL,
  `prixMin` int(11) NOT NULL,
  `prixMax` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `recherche`
--

CREATE TABLE `recherche` (
  `id` int(11) NOT NULL,
  `surface` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `ville` int(11) NOT NULL,
  `tranchePrix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `noType` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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

CREATE TABLE `ville` (
  `noVille` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`noVille`, `libelle`) VALUES
(1, 'Lille'),
(2, 'Paris'),
(3, 'Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bien`
--
ALTER TABLE `bien`
  ADD PRIMARY KEY (`reference`),
  ADD KEY `ce_type_bien` (`type`),
  ADD KEY `ce_ville_bien` (`ville`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `prix`
--
ALTER TABLE `prix`
  ADD PRIMARY KEY (`reference`);

--
-- Index pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ce_ville_recherche` (`ville`),
  ADD KEY `ce_prix_recherche` (`tranchePrix`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`noType`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`noVille`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bien`
--
ALTER TABLE `bien`
  MODIFY `reference` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `noType` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `noVille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `ce_type_bien` FOREIGN KEY (`type`) REFERENCES `type` (`noType`),
  ADD CONSTRAINT `ce_ville_bien` FOREIGN KEY (`ville`) REFERENCES `ville` (`noVille`);

--
-- Contraintes pour la table `recherche`
--
ALTER TABLE `recherche`
  ADD CONSTRAINT `ce_prix_recherche` FOREIGN KEY (`tranchePrix`) REFERENCES `prix` (`reference`),
  ADD CONSTRAINT `ce_ville_recherche` FOREIGN KEY (`ville`) REFERENCES `ville` (`noVille`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
