-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 25 mai 2021 à 11:04
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

DROP TABLE IF EXISTS `prof`;
CREATE TABLE IF NOT EXISTS `prof` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `xname` varchar(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `profa` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prof`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `xname`, `room`,`type`, `prof_id`) VALUES
(1, 'Ahmed', '123', 'Ahmed', 'C', 'WAFA');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `xname` varchar(30) NOT NULL,
  `room` varchar(4) NOT NULL,
  `profa` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `xname`, `room`, `profa`) VALUES
(1, 'ahmed.boudibi', '123', 'ahmed.boudibi', 'C107', 'bensmaine.narjes'),
(2, 'wafa.ghomari', '123', 'wafa.ghomari', 'C108', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
