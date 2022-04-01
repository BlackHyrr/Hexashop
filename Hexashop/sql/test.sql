-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 30 mars 2022 à 13:51
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
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `menclothes`
--

DROP TABLE IF EXISTS `menclothes`;
CREATE TABLE IF NOT EXISTS `menclothes` (
  `clothes id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `imagepath` text NOT NULL,
  PRIMARY KEY (`clothes id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menclothes`
--

INSERT INTO `menclothes` (`clothes id`, `title`, `description`, `price`, `imagepath`) VALUES
(1, 'Doudoune', 'Ralph Lauren', 90, 'img/doudoune.png'),
(2, 'Business Attire', 'Armani', 365, 'img/business-attire.png'),
(3, 'Veste', '', 135, 'img/veste.jpg'),
(4, 'Manteau', '', 210, ''),
(5, 'Chemise', '', 78, 'img/chemise-bleu.jpg'),
(6, 'Test', 'Ceci est un test', 45, ''),
(7, 'pull', 'this is a pull', 60, 'img/men-03.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  PRIMARY KEY (`user id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user id`, `fullname`, `Email`, `password`, `age`) VALUES
(1, 'Mathieu Nebra', 'mathieu.nebra@exemple.com', 'P4ssW0rd', 34),
(2, 'Laurène Castor', 'laurene.castor@exemple.com', 'jm_les_cookies', 28),
(3, 'Mickaël Andrieu', 'mickael.andrieu@exemple.com', 's3cr3t', 34),
(4, 'Jérôme Boude', 'jerome.boude@exemple.com', '123456', 27);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
