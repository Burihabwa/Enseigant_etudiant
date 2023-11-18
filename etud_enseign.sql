-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 07 oct. 2023 à 11:07
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `etud_enseign`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id_ensei` int(11) NOT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `niveau` varchar(20) DEFAULT NULL,
  `adresse` varchar(20) DEFAULT NULL,
  `profil` varchar(20) DEFAULT NULL,
  `password` varchar(30) NOT NULL DEFAULT '1234'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id_ensei`, `matricule`, `nom`, `prenom`, `niveau`, `adresse`, `profil`, `password`) VALUES
(2, 'A855-864', 'NIYONZIMA', 'Claudine', 'Baccalereat', 'Kamenge', 'imag/esp.jpeg', '1234'),
(3, 'A256-978', 'NIYORUKUNDO', 'Claude', 'Doctorat', 'LYCEE BUBANZA', 'imag/hom.jpeg', '1234'),
(4, '33456', 'btfh', 'sdsdf', 'Maitrise', 'dfhdgh', 'imag/exemple.JPG', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id_etu` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `etablisement` varchar(20) DEFAULT NULL,
  `note` varchar(20) DEFAULT NULL,
  `faculte` varchar(20) DEFAULT NULL,
  `profil` varchar(20) DEFAULT NULL,
  `universite` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etu`, `nom`, `prenom`, `etablisement`, `note`, `faculte`, `profil`, `universite`) VALUES
(3, 'NIYONZIMA', 'Claude', 'LYCEE BUBANZA', '75', 'Electronique', 'imag/hom.jpeg', 'biu'),
(4, 'BUTOYI', 'Claudine', 'ETS kamenge', '78', 'Electronique', 'imag/esp.jpeg', 'ub');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_ensei`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id_etu`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_ensei` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id_etu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
