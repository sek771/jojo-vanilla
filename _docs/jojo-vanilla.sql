-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 20 nov. 2023 à 12:51
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jojo-vanilla`
--

DROP DATABASE IF EXISTS `jojo-vanilla`;
CREATE DATABASE `jojo-vanilla`;
USE `jojo-vanilla`;

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `authors` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `editor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tome` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT '	(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`id`, `title`, `sub_title`, `authors`, `country`, `editor`, `image`, `tome`) VALUES
(4, 'naruto', 'naruto', 'naruto', 'naruto', 'naruto', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRkopIaUQJ9mzwxDrqOxTE-1B6yuGaNdS2VLg&usqp=CAU', 'naruto'),
(5, 'dbz', 'dbz', 'dbz', 'dbz', 'dbz', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTAQTWL-ryAnD-mgEpK9WOxE-I17jq4YYVHBw&usqp=CAU', 'dbz'),
(6, 'one piece', 'one piece', 'one piece', 'one piece', 'one piece', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXvWk1VTeD3e0smrrajAdCXzp125xrPb-eDZug4hl9fFMsjxNCUNDKfpkBqGwORc8mM_4&usqp=CAU', 'one piece'),
(8, 'bleach', 'bleach', 'bleach', 'bleach', 'bleach', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq4VxhXXkz6cBm30wevXRKbv_Frr-SPl-UAw&usqp=CAU', 'bleach'),
(9, 'jojo', 'phantom blood', 'araki', 'japon', 'delcourt', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQR30KbNqdz5YGhNYw9_ZdhOcOvXcAIVcsIOw&usqp=CAU', 'tome 2');

-- --------------------------------------------------------

--
-- Structure de la table `collections_read`
--

DROP TABLE IF EXISTS `collections_read`;
CREATE TABLE IF NOT EXISTS `collections_read` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_email` (`user_email`),
  KEY `fk_book_title` (`book_title`) USING BTREE,
  KEY `fk_user_email` (`book_title`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `collections_read`
--
ALTER TABLE `collections_read`
  ADD CONSTRAINT `collections_read_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `user` (`email`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `collections_read_ibfk_2` FOREIGN KEY (`book_title`) REFERENCES `book` (`title`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
