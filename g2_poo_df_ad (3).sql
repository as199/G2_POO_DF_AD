-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 27 juin 2020 à 04:51
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `g2_poo_df_ad`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `numChambre` varchar(50) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`numChambre`, `type`) VALUES
('001-1234', 2),
('44511225', 1),
('7878', 2);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matricule` varchar(250) NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `prenom` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `adresse` varchar(250) DEFAULT NULL,
  `dateNaissance` varchar(255) DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `montant` varchar(255) DEFAULT '0',
  `telephone` varchar(50) DEFAULT NULL,
  `numChambre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matricule`, `nom`, `prenom`, `email`, `adresse`, `dateNaissance`, `type`, `montant`, `telephone`, `numChambre`) VALUES
('2020bane1307', 'ba', 'Assane', 'Dioneassane0290@gmail.com', 'matam', '2020-06-05', 'nonBoursier', '0', '0778163676', NULL),
('2020Diba2626', 'Dione', 'baba', 'Dioneassane0290@gmail.com', NULL, '2020-06-10', 'boursierLoger', '20000', '0778163676', '44511225'),
('2020Diha2011', 'Dione', 'tapha', 'Dioneassane0290@gmail.com', NULL, '2020-06-04', 'boursierNonLoger', '20000', '0778163676', NULL),
('2020Dily1855', 'Dione', 'ouly', 'Dioneassane0290@gmail.com', NULL, '2020-06-04', 'boursierLoger', '40000', '0778163676', NULL),
('2020Dima2052', 'Dione', 'Fama', 'Dioneassane0290@gmail.com', 'joal', '2020-06-02', 'nonBoursier', '0', '0778163676', NULL),
('2020Dimo1418', 'Dione', 'momo', 'Dioneassane0290@gmail.com', NULL, '2020-06-02', 'boursierLoger', '20000', '0778163676', NULL),
('2020Dine1413', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', 'troup', '2020-06-11', 'nonBoursier', '0', '0778163676', NULL),
('2020Dine1658', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-04', 'boursierLoger', '40000', '0778163676', '7878'),
('2020Dine2211', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-05', 'demiBourse', '0', '0778163676', NULL),
('2020Dine2212', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-05', 'demiBourse', '0', '0778163676', NULL),
('2020Dine2319', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-06', 'bourseEntier', '0', '0778163676', NULL),
('2020Dine2420', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-04', 'boursierLoger', '10005', '768163676', NULL),
('2020Dine2500', 'Dione', 'Assane', 'gt@gmail.com', NULL, '2020-03-04', 'boursierLoger', '0052', '0778163676', NULL),
('2020Dine2659', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-06', 'bourseEntier', '0', '0778163676', NULL),
('2020Dine2700', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-06', 'bourseEntier', '0', '0778163676', NULL),
('2020Dine4143', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-04', 'demiBourse', '0', '0778163676', NULL),
('2020Dine4524', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-12', 'bourseEntier', '0', '0778163676', NULL),
('2020Dine5005', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-02', 'boursierLoger', '20000', '0778163676', '001-1234'),
('2020Dine5409', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-04-01', 'boursierLoger', '1000', '0778163676', NULL),
('2020Dine5536', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-04', 'boursierLoger', '77777700000', '0778163676', NULL),
('2020Dine5840', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', NULL, '2020-06-04', 'boursierNonLoger', '', '0778163676', NULL),
('2020Dine5916', 'Dione', 'Assane', 'Dioneassane0290@gmail.com', 'Keur massar', '2020-06-04', 'nonBoursier', '0', '0778163676', NULL),
('2020Diou4245', 'Dione', 'Fatou', NULL, NULL, NULL, NULL, '0', NULL, NULL),
('2020Faou1216', 'Fatou', 'Fatou', 'Dioneassane0290@gmail.com', 'loop', '2020-06-05', 'nonBoursier', '0', '0778163676', NULL),
('2020faou4559', 'fall', 'saliou', 'fall@gmail.com', NULL, '2020-04-01', 'boursierLoger', '1200', '778163676', NULL),
('2020sane0858', 'sarr', 'Assane', 'Dioneassane0290@gmail.com', 'gtou', '2020-06-11', 'nonBoursier', '0', '0778163676', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`numChambre`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matricule`),
  ADD KEY `numChambre` (`numChambre`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`numChambre`) REFERENCES `chambre` (`numChambre`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
