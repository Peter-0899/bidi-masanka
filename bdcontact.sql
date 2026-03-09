-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 09 mars 2026 à 15:32
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdcontact`
--

-- --------------------------------------------------------

--
-- Structure de la table `tcontact`
--

CREATE TABLE `tcontact` (
  `IDC` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL,
  `Telephone` varchar(13) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tcontact`
--

INSERT INTO `tcontact` (`IDC`, `Nom`, `Telephone`, `Email`) VALUES
(1, 'BIDIMASANKA', '0899730809', 'bidimasankapeter@gmail.co'),
(3, 'MALU', '0896754321', 'malubidi@gmail.com'),
(4, 'MAYUMBI', '0899730809', 'marthemayumbi@gmail.com'),
(5, 'BUSHIRI', '099820456', 'yvesbushiri@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tcontact`
--
ALTER TABLE `tcontact`
  ADD PRIMARY KEY (`IDC`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tcontact`
--
ALTER TABLE `tcontact`
  MODIFY `IDC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
