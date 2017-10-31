-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Octobre 2017 à 16:43
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Cat`
--

-- --------------------------------------------------------

--
-- Structure de la table `class_cat`
--

CREATE TABLE `class_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `age` int(30) NOT NULL,
  `sexe` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `class_cat`
--

INSERT INTO `class_cat` (`id`, `name`, `age`, `sexe`, `color`) VALUES
(44, 'bi', 6, 'FEMALE', 'ROUX'),
(45, 'bi', 6, 'FEMALE', 'ROUX'),
(46, 'bi', 6, 'FEMALE', 'ROUX'),
(47, 'bi', 6, 'FEMALE', 'ROUX'),
(48, 'bi', 6, 'FEMALE', 'ROUX'),
(49, 'bi', 6, 'FEMALE', 'ROUX'),
(50, 'bi', 6, 'FEMALE', 'ROUX'),
(51, 'bi', 6, 'FEMALE', 'ROUX'),
(52, 'bi', 6, 'FEMALE', 'ROUX'),
(53, 'bi', 6, 'FEMALE', 'ROUX'),
(54, 'bi', 6, 'FEMALE', 'ROUX'),
(55, 'bi', 6, 'FEMALE', 'ROUX'),
(56, 'bi', 6, 'FEMALE', 'ROUX'),
(57, 'bi', 6, 'FEMALE', 'ROUX'),
(58, 'bi', 6, 'FEMALE', 'ROUX'),
(59, 'bi', 6, 'FEMALE', 'ROUX'),
(60, 'bi', 6, 'FEMALE', 'ROUX');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `class_cat`
--
ALTER TABLE `class_cat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `class_cat`
--
ALTER TABLE `class_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
