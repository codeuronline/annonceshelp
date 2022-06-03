-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 21 avr. 2022 à 13:08
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet4`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(10) UNSIGNED NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` int(10) UNSIGNED NOT NULL,
  `ville` varchar(255) NOT NULL,
  `photo1` varchar(250) DEFAULT NULL,
  `photo2` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `photo3` varchar(250) DEFAULT NULL,
  `photo4` varchar(250) DEFAULT NULL,
  `photo5` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `categorie`, `nom`, `description`, `prix`, `ville`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`) VALUES
(175, 'immobilier', 'modification', 'hkgkgkg', 22, 'Chambery', NULL, NULL, NULL, NULL, NULL),
(176, 'immobilier', 'modification', 'hkgkgkg', 22, 'Chambery', NULL, NULL, NULL, NULL, NULL),
(177, 'vehicule', 'deId Test', 'fbdfchbdhb', 30, 'Grenoble', 'http://localhost/annonces/public/images/bananas-282313_1920.jpg', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/'),
(178, 'vehicule', 'onteste', 'hkgkgkg', 22, 'Grenoble', NULL, NULL, NULL, NULL, NULL),
(180, 'loisirs', 'modification parmail', 'fbdfchbdhb', 23, 'Grenoble', 'http://localhost/annonces/public/images/doughnuts-1868573_1920.jpg', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/'),
(181, 'vehicule', 'Alice Durand', 'gsgsdg', 22, 'Grenoble', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/', 'http://localhost/annonces/public/images/');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_annonce` int(30) DEFAULT NULL,
  `mail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `id_annonce`, `mail`) VALUES
(278, 175, 'ibtissemkhiri.simplon@gmail.com'),
(279, 176, 'ibtissemkhiri.simplon@gmail.com'),
(280, 177, 'ibtissemkhiri.simplon@gmail.com'),
(281, 178, 'ibtissemkhiri.simplon@gmail.com'),
(282, 179, 'ibtissemkhiri.simplon@gmail.com'),
(283, 180, 'ibtissemkhiri.simplon@gmail.com'),
(284, 181, 'ibtissemkhiri.simplon@gmail.com'),
(285, 182, 'ibtissemkhiri.simplon@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
