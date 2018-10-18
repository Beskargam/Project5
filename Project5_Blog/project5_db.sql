-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 17 oct. 2018 à 16:33
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

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
  `publication` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_news_id` (`news_id`),
  KEY `fk_pseudo_id` (`pseudo_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `news_id`, `pseudo_id`, `content_comment`, `dateAdd_comment`, `dateEdit_comment`, `publication`) VALUES
(1, 1, 1, 'Commentaire news 1 news 1 news 1 news 1 news 1 news 1 news 1 news 1 news 1\r\n\r\n news 1 news 1 news 1\r\n\r\n news 1 news 1 news 1 news 1 news 1 news 1\r\n news 1 news 1\r\n news 1 news 1 news 1 news 1', '2018-09-20 15:28:14', '2018-09-20 15:28:14', 1),
(2, 1, 1, 'Ceci est un autre commentaire pour la news 1 un autre commentaire pour la news 1 un autre commentaire pour la news 1\r\n\r\nun autre commentaire pour la news 1\r\n \r\nun autre commentaire pour la news 1 un autre commentaire pour la news 1', '2018-09-20 15:30:29', '2018-09-20 17:36:15', 1),
(6, 1, 2, 'Ce commentaire a été modifié une 4eme fois par le formulaire d\'edition', '2018-09-21 10:41:59', '2018-09-28 11:21:04', 1),
(8, 3, 1, 'Voici un beau commentaire pour cette News', '2018-10-01 18:17:36', '2018-10-01 18:17:36', 1),
(9, 1, 1, 'Nous allons écrire un beau commentaire', '2018-10-12 18:21:03', '2018-10-12 18:21:03', 1),
(10, 8, 1, 'Test de commentaire', '2018-10-15 17:14:32', '2018-10-15 17:14:32', 1),
(11, 8, 1, 'Message', '2018-10-15 18:01:37', '2018-10-15 18:01:37', 1),
(12, 8, 1, 'encore un test', '2018-10-15 18:10:49', '2018-10-15 18:10:49', 1),
(13, 8, 1, 'Un test d\'envoi', '2018-10-15 18:27:02', '2018-10-15 18:27:02', 1),
(14, 8, 1, 'Voilà un commentaire', '2018-10-15 18:29:51', '2018-10-15 18:29:51', 1),
(15, 7, 1, 'Un commentaire de test', '2018-10-15 19:14:50', '2018-10-15 19:14:50', 1),
(16, 7, 1, 'Un commentaire de test\r\n\r\nCe commentaire de test vient d\'être modifié', '2018-10-15 19:15:44', '2018-10-17 16:12:06', 1),
(18, 4, 1, 'Un commentaire', '2018-10-15 19:17:07', '2018-10-15 19:17:07', 1),
(19, 3, 1, 'Test de commentaire', '2018-10-15 20:30:33', '2018-10-15 20:30:33', 1),
(20, 4, 1, 'Essayons un commentaire', '2018-10-15 20:44:20', '2018-10-15 20:44:20', 1),
(21, 4, 1, 'encore un pourquoi pas =)', '2018-10-15 20:44:47', '2018-10-15 20:44:47', 1),
(22, 4, 1, 'Encore un petit test', '2018-10-15 20:47:47', '2018-10-15 20:47:47', 1),
(23, 4, 1, 'Encore un', '2018-10-15 20:49:31', '2018-10-15 20:49:31', 1),
(24, 4, 1, 'un petit test', '2018-10-15 20:49:47', '2018-10-15 20:49:47', 1),
(25, 4, 1, 'encore et encore', '2018-10-15 20:50:16', '2018-10-15 20:50:16', 1),
(26, 4, 1, 'un petit dernier ', '2018-10-15 20:50:59', '2018-10-15 20:50:59', 1),
(27, 4, 1, 'et le dernier, peut-être', '2018-10-15 20:51:27', '2018-10-15 20:51:27', 1),
(28, 9, 1, 'C\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! \r\n\r\nC\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! \r\n\r\nC\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! \r\nC\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! C\'est surement un des meilleur commentaire, un long commentaire ! \r\n\r\nC\'est surement un des meilleur commentaire, un long commentaire ! ', '2018-10-17 17:29:45', '2018-10-17 17:29:45', 1),
(29, 10, 1, 'Ajoutons ce commentaire comme preuve de loyauté', '2018-10-17 17:50:05', '2018-10-17 17:50:05', 0);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo_id` int(10) UNSIGNED NOT NULL,
  `intro` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `content_news` text NOT NULL,
  `dateAdd_news` datetime NOT NULL,
  `dateEdit_news` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`pseudo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `pseudo_id`, `intro`, `title`, `content_news`, `dateAdd_news`, `dateEdit_news`) VALUES
(1, 1, 'Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction ', 'TITRE TEST', 'TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\n\r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE ', '2018-08-17 10:30:00', '2018-08-17 10:30:00'),
(3, 1, 'Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction ', 'La troisième News modifiée', 'Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! \r\n\r\nModifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! \r\n\r\nModifié ! Modifié ! Modifié ! ', '2018-09-28 18:48:38', '2018-10-01 15:58:39'),
(4, 1, 'Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction ', 'Une News', 'Petit test de News Petit test de News Petit test de News Petit test de News Petit test de News \r\n\r\nPetit test de News Petit test de News Petit test de News \r\nPetit test de News Petit test de News Petit test de News \r\n\r\nPetit test de News Petit test de News ', '2018-10-10 14:52:03', '2018-10-10 14:52:03'),
(5, 1, 'Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction ', 'Encore une News', 'Voilà le texte Voilà le texte Voilà le texte Voilà le texte \r\n\r\nVoilà le texte Voilà le texte \r\nVoilà le texte Voilà le texte \r\n\r\nVoilà le texte ', '2018-10-10 14:52:59', '2018-10-10 14:52:59'),
(7, 1, 'Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction ', 'Une News', 'Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire \r\nIl ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire \r\n\r\nIl ne faut pas rien écrire Il ne faut pas rien écrire \r\nIl ne faut pas rien écrire Il ne faut pas rien écrire \r\n\r\n\r\n\r\nIl ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire \r\n\r\nIl ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire \r\n\r\nIl ne faut pas rien écrire Il ne faut pas rien écrire Il ne faut pas rien écrire ', '2018-10-10 15:20:21', '2018-10-10 15:20:21'),
(8, 1, 'Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction Introduction \r\nIntroduction Introduction Introduction Introduction Introduction Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé \r\nModification engagé \r\n\r\nModification engagé ', 'Tout à fait', 'Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé \r\n\r\nModification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé \r\nModification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé \r\n\r\nModification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé Modification engagé \r\n\r\nModification engagé Modification engagé ', '2018-10-10 15:20:43', '2018-10-17 16:01:09'),
(9, 1, 'Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! \r\n\r\nCeci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! Ceci est l\'intro ! ', 'Un beau COMM-LINK', 'Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions \r\n\r\nEt voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions \r\n\r\nEt voilà les transmissions Et voilà les transmissions Et voilà les transmissions Et voilà les transmissions \r\nEt voilà les transmissions ', '2018-10-17 16:02:04', '2018-10-17 16:02:04'),
(10, 1, 'BIENVENU dans l\'intro BIENVENU dans l\'intro BIENVENU dans l\'intro BIENVENU dans l\'intro BIENVENU dans l\'intro BIENVENU dans l\'intro \r\n\r\nBIENVENU dans l\'intro BIENVENU dans l\'intro ', 'Les COMM-LINKS c\'est bien', 'Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte \r\n\r\nNe pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte \r\nNe pas oublié le texte \r\nNe pas oublié le texte \r\n\r\nNe pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte \r\n\r\nNe pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte Ne pas oublié le texte ', '2018-10-17 16:04:10', '2018-10-17 16:04:10');

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
  `rank_id` smallint(5) UNSIGNED NOT NULL DEFAULT '4',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`) USING BTREE,
  KEY `fk_rank_id` (`rank_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `rank_id`) VALUES
(1, 'Arcturus Morea', '$2y$10$eEmrLAIjOFLm/NtdeWdhXu6v6rIKBSPileiDh6BTbuzGWQpAWqAaa', 1),
(2, 'Cassiopeia', '$2y$10$q6Zw4.akK50IiQewW6lTOOaHTa68hdgUQY7ucGaA3fi60sZAVr04G', 2),
(4, 'Alci', '$2y$10$bY2oi4z4MF/pNHTRtj.OLOhA/eBNpyrEwGP7Xflm3zON22hAr7PSC', 3),
(5, 'Amilkar', '$2y$10$H8GxrVriQ7u5pK9a7nViy.9d.ZRMW6c/4bzQoJdWLH4QXNMiHyBpW', 4),
(6, 'Jayne', '$2y$10$r3RRCX8pNcWWfkdl5STLlOjkvZM.kGrkQ02j5unpg0jsQkPu/C1fe', 4),
(7, 'Kaylee', '$2y$10$PRLSToN8boSaNmmuHc5YqOP9f8dzCx9gwQs98rzyUvDiocXAY0kSO', 4),
(8, 'Simon', '$2y$10$G22T0hodxsHMO5L0zZhevu.o2Z7DpY831IaVWS0iDa9KUegbmfzku', 4),
(9, 'Inara Serra', '$2y$10$qZypG.EjhYTyemn0kYHxf.8.5pWVO6lAWKOTY3k.19iDcT/zA.FlS', 4),
(17, 'Shepard', '$2y$10$9zDvM2lwPrEemhDHAfXlieeezHPpM0.G5kSQ0yjlr4n3/uHZ/yp2a', 4);

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
