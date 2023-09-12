-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 12 sep. 2023 à 11:08
-- Version du serveur : 10.6.12-MariaDB-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteperso`
--

-- --------------------------------------------------------

--
-- Structure de la table `infouser`
--

CREATE TABLE `infouser` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `infouser`
--

INSERT INTO `infouser` (`id`, `pseudo`, `email`, `mdp`) VALUES
(2, 'Mey', 'meyxana80@gmail.com', '$2y$10$ztLuMq7BSwMS4kYMDZB6R.FaqopPyXNdiXp7bH7ROU/jFBGBz7a/i'),
(3, 'enzo', 'enzo@enzo.com', '$2y$10$St.TRMe8lfbkD/fMJbi8pOKrRXvkDSnkyFznYN7BL.J7g4I0wLvru');

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `id` int(11) NOT NULL,
  `nomjeu` varchar(255) NOT NULL,
  `plateforme` varchar(50) NOT NULL,
  `tmpsjeu` time DEFAULT NULL,
  `trophéeobt` int(11) DEFAULT NULL,
  `jeufini` tinyint(1) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `pseudoj` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `jeux`
--

INSERT INTO `jeux` (`id`, `nomjeu`, `plateforme`, `tmpsjeu`, `trophéeobt`, `jeufini`, `img`, `pseudoj`) VALUES
(18, 'Mortal Kombat', 'SNES', '00:05:00', 80, 1, 'uploads/1200px-Mortal_Kombat_(série)_Logo.svg.png', 'Mey'),
(19, 'Valorant', 'PC', '00:20:00', 50, 1, 'uploads/feurmec.jpg', 'enzo'),
(20, 'Barbie edition raiponce', 'PC', '02:00:00', 100, 1, 'uploads/feurmec.jpg', 'enzo'),
(21, 'Pokémon Rouge', 'GB', '00:06:00', 100, 1, 'uploads/Ori.jpeg', 'Mey');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `infouser`
--
ALTER TABLE `infouser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `infouser`
--
ALTER TABLE `infouser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
