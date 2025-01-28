-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 28 jan. 2025 à 12:37
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bookmarket`
--

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`id`, `lastname`, `firstname`) VALUES
(1, 'Carrère', 'Emmanuel'),
(2, 'Mauvignier', 'Laurent'),
(3, 'Bober', 'Robert'),
(4, 'Chiche', 'Sarah'),
(5, 'Reinhardt', 'Eric');

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `id_author` bigint NOT NULL,
  `price` int NOT NULL,
  `description` varchar(255) NOT NULL,
  `id_img` varchar(255) NOT NULL,
  `releaseAt` date NOT NULL,
  `id_seller` bigint NOT NULL,
  `id_bookState` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `book_id_img_foreign` (`id_img`(250)),
  KEY `book_id_seller_foreign` (`id_seller`),
  KEY `id_author` (`id_author`),
  KEY `book_id_bookstate_foreign` (`id_bookState`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `id_author`, `price`, `description`, `id_img`, `releaseAt`, `id_seller`, `id_bookState`) VALUES
(1, 'Yoga', 1, 0, 'C’est l’histoire d’un livre sur le yoga et la dépression. La méditation et le terrorisme. L’aspiration à l’unité et le trouble bipolaire. Des choses qui n’ont pas l’air d’aller ensemble, et pourtant : elles vont ensemble.', '1', '0000-00-00', 0, 1),
(2, 'Histoire de la nuit', 2, 0, 'Il ne reste presque plus rien à La Bassée : un bourg et quelques hameaux, dont celui qu’occupent Bergogne, sa femme Marion et leur fille Ida, ainsi qu’une voisine, Christine, une artiste installée ici depuis des années.\r\nOn s’active, on se prépare pour l’', '2', '0000-00-00', 0, 1),
(3, 'Par instants, la vie n’est pas sûre', 3, 0, '« Si j’ai choisi de t’écrire Pierre, c’est que j’ai préféré m’adresser à toi plutôt que de parler de toi. Il m’a semblé ainsi réduire, effacer même par instants, la distance qui sépare la vie de la mort. »\r\n\r\nIl y eut une rencontre décisive dans la vie de', '3', '0000-00-00', 0, 1),
(4, 'Saturne', 4, 0, 'Automne 1977 : Harry, trente-quatre ans, meurt dans des circonstances tragiques, laissant derrière lui sa fille de quinze mois.\r\nAvril 2019 : celle-ci rencontre une femme qui a connu Harry enfant, pendant la guerre d’Algérie.\r\nSe déploie alors le roman de', '4', '0000-00-00', 0, 1),
(5, 'Comédies françaises', 5, 0, 'Fasciné par les arcanes du réel, Dimitri, jeune reporter de vingt-sept ans, mène sa vie comme ses missions : en permanence à la recherche de rencontres et d’instants qu’il voudrait décisifs.\r\nUn jour, il se lance dans une enquête sur la naissance d’Intern', '5', '0000-00-00', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `bookstate`
--

DROP TABLE IF EXISTS `bookstate`;
CREATE TABLE IF NOT EXISTS `bookstate` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `book_genre`
--

DROP TABLE IF EXISTS `book_genre`;
CREATE TABLE IF NOT EXISTS `book_genre` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_genre` bigint NOT NULL,
  `id_book` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `book_genre_id_book_foreign` (`id_book`),
  KEY `book_genre_id_genre_foreign` (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `book_genre`
--

INSERT INTO `book_genre` (`id`, `id_genre`, `id_book`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `fav`
--

DROP TABLE IF EXISTS `fav`;
CREATE TABLE IF NOT EXISTS `fav` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_user` bigint NOT NULL,
  `id_book` bigint NOT NULL,
  `addAt` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fav_id_user_foreign` (`id_user`),
  KEY `fav_id_book_foreign` (`id_book`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Roman'),
(2, 'Essai'),
(3, 'Biographie'),
(4, 'Science-fiction'),
(5, 'Policier');

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `img_alt` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `img_path`, `img_alt`) VALUES
(1, '/images/yoga.jpg', 'Couverture du livre Yoga'),
(2, '/images/histoire_de_la_nuit.jpg', 'Couverture du livre Histoire de la nuit'),
(3, '/images/par_instants.jpg', 'Couverture du livre Par instants, la vie n’est pas sûre'),
(4, '/images/saturne.jpg', 'Couverture du livre Saturne'),
(5, '/images/comedies_francaises.jpg', 'Couverture du livre Comédies françaises');

-- --------------------------------------------------------

--
-- Structure de la table `pro`
--

DROP TABLE IF EXISTS `pro`;
CREATE TABLE IF NOT EXISTS `pro` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_user` bigint NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `company_adress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pro_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `purchasedAt` datetime NOT NULL,
  `id_book` bigint NOT NULL,
  `id_user` bigint NOT NULL,
  `id_pro` bigint NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_id_pro_foreign` (`id_pro`),
  KEY `sales_id_book_foreign` (`id_book`),
  KEY `sales_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pp_path` varchar(255) NOT NULL,
  `id_role` bigint NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`),
  KEY `user_id_role_foreign` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `lastname`, `firstname`, `email`, `phone`, `password`, `pp_path`, `id_role`) VALUES
(2, 'test', 'test', 'test@gmail.com', 'test', '$2y$10$reDnClOIlokliU1qd/l.JuiZNBdYhei7J1VOi91JY4TmQjrXXnNXq', '', 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`id_author`) REFERENCES `author` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
