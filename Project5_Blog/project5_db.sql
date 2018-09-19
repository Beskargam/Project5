-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 19 sep. 2018 à 08:36
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `project5_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `news_id` int(10) UNSIGNED NOT NULL,
  `pseudo_id` int(10) UNSIGNED NOT NULL,
  `content_comment` text NOT NULL,
  `dateAdd_comment` datetime NOT NULL,
  `dateEdit_comment` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_author_id` (`pseudo_id`) USING BTREE,
  KEY `fk_news_id` (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content_news` text NOT NULL,
  `dateAdd_news` datetime NOT NULL,
  `dateEdit_news` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`pseudo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `pseudo_id`, `title`, `content_news`, `dateAdd_news`, `dateEdit_news`) VALUES
(1, 1, 'TITRE TEST', 'TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\n\r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE ', '2018-08-17 10:30:00', '2018-08-17 10:30:00'),
(2, 1, 'Deuxième titre News', 'CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE \r\n\r\nCECI EST UN TEXT D\'EXEMPLE \r\nCECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE \r\nCECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE \r\nCECI EST UN TEXT D\'EXEMPLE CECI EST UN TEXT D\'EXEMPLE ', '2018-08-24 11:23:19', '2018-09-04 15:01:52');

-- --------------------------------------------------------

--
-- Structure de la table `ranks`
--

DROP TABLE IF EXISTS `ranks`;
CREATE TABLE IF NOT EXISTS `ranks` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rank` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ranks`
--

INSERT INTO `ranks` (`id`, `rank`) VALUES
(1, 'Commandant'),
(2, 'Lieutenant'),
(3, 'Vétéran'),
(4, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `password` char(255) NOT NULL,
  `rank_id` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `author` (`pseudo`),
  KEY `fk_rank_id` (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `rank_id`) VALUES
(1, 'Arcturus Morea', 'NdCHv1417', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`pseudo_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_news_id` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`pseudo_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_rank_id` FOREIGN KEY (`rank_id`) REFERENCES `ranks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
