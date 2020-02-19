-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 19 fév. 2020 à 20:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `inscription_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Prenom` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `telephone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `Prenom`, `Nom`, `telephone`, `email`, `password`, `date_naissance`, `sexe`) VALUES
(1, 'bob', 'bob', 325696356, '', '', '1920-01-01', 'Homme'),
(2, 'bob', 'bob', 653245126, '', '', '1920-01-01', 'Femme'),
(3, 'bob', 'bob', 215362659, '', '', '1920-01-01', 'Autre'),
(4, 'eft', 'bob', 536956305, '', '35aabd9ad7e56c286b04f7ce6a957fdb3153bc0d57ad138a424e642a9ab8d18f', '1925-03-06', 'Homme'),
(5, 'fkqueg', 'vsku', 856348562, NULL, 'db4a5821229506f5efa0bbf1ea7fa20063b628757bcdfd1a2586d5697132e33f', '1922-03-02', 'Homme'),
(6, 'elifuqkgsh', 'lsidfgh', NULL, 'damsam@gmail.fr', '30944eec08e188285d6ff65e1d4fbfdcbdba4194a245ed9702c3e3f0e4456bc2', '1926-04-06', 'Autre');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
