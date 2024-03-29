-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 26 mars 2024 à 15:10
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vercorsfestival`
--

-- --------------------------------------------------------

--
-- Structure de la table `ver_date_nuit_int`
--

DROP TABLE IF EXISTS `ver_date_nuit_int`;
CREATE TABLE IF NOT EXISTS `ver_date_nuit_int` (
  `id_reservation` int NOT NULL,
  `id_nuit` int NOT NULL,
  `date_nuit` date DEFAULT NULL,
  PRIMARY KEY (`id_reservation`,`id_nuit`),
  KEY `id_nuit` (`id_nuit`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ver_date_pass_int`
--

DROP TABLE IF EXISTS `ver_date_pass_int`;
CREATE TABLE IF NOT EXISTS `ver_date_pass_int` (
  `id_reservation` int NOT NULL,
  `id_pass` int NOT NULL,
  `jour` date NOT NULL,
  PRIMARY KEY (`id_reservation`,`id_pass`),
  KEY `id_pass` (`id_pass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ver_nuit`
--

DROP TABLE IF EXISTS `ver_nuit`;
CREATE TABLE IF NOT EXISTS `ver_nuit` (
  `id_nuit` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` smallint NOT NULL,
  PRIMARY KEY (`id_nuit`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ver_option`
--

DROP TABLE IF EXISTS `ver_option`;
CREATE TABLE IF NOT EXISTS `ver_option` (
  `id_option` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` smallint NOT NULL,
  PRIMARY KEY (`id_option`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ver_option_int`
--

DROP TABLE IF EXISTS `ver_option_int`;
CREATE TABLE IF NOT EXISTS `ver_option_int` (
  `id_reservation` int NOT NULL,
  `id_option` int NOT NULL,
  `nombre` smallint DEFAULT NULL,
  PRIMARY KEY (`id_reservation`,`id_option`),
  KEY `id_option` (`id_option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ver_pass`
--

DROP TABLE IF EXISTS `ver_pass`;
CREATE TABLE IF NOT EXISTS `ver_pass` (
  `id_pass` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prix` int NOT NULL,
  `tarif_reduit` int NOT NULL,
  PRIMARY KEY (`id_pass`),
  UNIQUE KEY `nom` (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ver_reservation`
--

DROP TABLE IF EXISTS `ver_reservation`;
CREATE TABLE IF NOT EXISTS `ver_reservation` (
  `id_reservation` int NOT NULL,
  `nombre_resa` int NOT NULL,
  `prix_total` int NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_reservation`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ver_user`
--

DROP TABLE IF EXISTS `ver_user`;
CREATE TABLE IF NOT EXISTS `ver_user` (
  `id_user` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telephone` int NOT NULL,
  `adresse` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `RGPD` date NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `telephone` (`telephone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
