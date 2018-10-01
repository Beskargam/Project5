-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 oct. 2018 à 16:29
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
  `publication` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_news_id` (`news_id`),
  KEY `fk_pseudo_id` (`pseudo_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `news_id`, `pseudo_id`, `content_comment`, `dateAdd_comment`, `dateEdit_comment`, `publication`) VALUES
(1, 1, 1, 'Commentaire news 1 news 1 news 1 news 1 news 1 news 1 news 1 news 1 news 1\r\n\r\n news 1 news 1 news 1\r\n\r\n news 1 news 1 news 1 news 1 news 1 news 1\r\n news 1 news 1\r\n news 1 news 1 news 1 news 1', '2018-09-20 15:28:14', '2018-09-20 15:28:14', 1),
(2, 1, 1, 'Ceci est un autre commentaire pour la news 1 un autre commentaire pour la news 1 un autre commentaire pour la news 1\r\n\r\nun autre commentaire pour la news 1\r\n \r\nun autre commentaire pour la news 1 un autre commentaire pour la news 1', '2018-09-20 15:30:29', '2018-09-20 17:36:15', 0),
(6, 1, 2, 'Ce commentaire a été modifié une 4eme fois par le formulaire d\'edition', '2018-09-21 10:41:59', '2018-09-28 11:21:04', 1),
(8, 3, 1, 'Voici un beau commentaire pour cette News', '2018-10-01 18:17:36', '2018-10-01 18:17:36', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `pseudo_id`, `title`, `content_news`, `dateAdd_news`, `dateEdit_news`) VALUES
(1, 1, 'TITRE TEST', 'TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE \r\n\r\nTEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE TEXTE ', '2018-08-17 10:30:00', '2018-08-17 10:30:00'),
(3, 1, 'La troisième News modifiée', 'Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! \r\n\r\nModifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! Modifié ! \r\n\r\nModifié ! Modifié ! Modifié ! ', '2018-09-28 18:48:38', '2018-10-01 15:58:39');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `rank_id`) VALUES
(1, 'Arcturus Morea', '$2y$10$eEmrLAIjOFLm/NtdeWdhXu6v6rIKBSPileiDh6BTbuzGWQpAWqAaa', 1),
(2, 'Cassiopeia', '$2y$10$q6Zw4.akK50IiQewW6lTOOaHTa68hdgUQY7ucGaA3fi60sZAVr04G', 2),
(4, 'Alci', '$2y$10$bY2oi4z4MF/pNHTRtj.OLOhA/eBNpyrEwGP7Xflm3zON22hAr7PSC', 3),
(5, 'Amilkar', '$2y$10$H8GxrVriQ7u5pK9a7nViy.9d.ZRMW6c/4bzQoJdWLH4QXNMiHyBpW', 4),
(6, 'Janee', '$2y$10$r3RRCX8pNcWWfkdl5STLlOjkvZM.kGrkQ02j5unpg0jsQkPu/C1fe', 4),
(7, 'Kaylee', '$2y$10$PRLSToN8boSaNmmuHc5YqOP9f8dzCx9gwQs98rzyUvDiocXAY0kSO', 4),
(8, 'Simon', '$2y$10$G22T0hodxsHMO5L0zZhevu.o2Z7DpY831IaVWS0iDa9KUegbmfzku', 4);

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
