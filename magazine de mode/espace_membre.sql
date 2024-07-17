-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 04 juil. 2023 à 20:34
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` varchar(200) NOT NULL,
  `Page` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL,
  `section` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `contenu`, `Page`, `image`, `date`, `section`) VALUES
(64, 'Kim Taehyung at the Céline festival', 'des', 'home', '64a330d31dce3_espace_admin649e9d7584717_photo2.jpg', '2023-07-03', 'Highlights'),
(65, 'Kim Taehyung at the Céline festival', 'des', 'Fashionstyleguide', '64a3310ab3d46_espace_admin649e9d7584717_photo2.jpg', '2023-07-03', 'Featured Blog Post'),
(66, 'Kim Taehyung at the Céline festival', 'des', 'Fashionstyleguide', '64a33202ab3ba_espace_admin649e9d7584717_photo2.jpg', '2023-07-03', 'Latest Blog Posts'),
(67, 'Elie Saab the royal designers', 'des', 'Fashionstyleguide', '64a332ed548dc_espace_admin649ea34d8db7f_649b4e360627a_photo4.jpg', '2023-07-04', 'Latest Blog Posts'),
(68, 'Kim Taehyung at the Céline festival', 'des', 'Fashionstyleguide', '64a333155cdac_espace_admin649f029e6181e_649c9d64deb52_649b50461989b_photo3.jpg', '2023-07-06', 'Latest Blog Posts'),
(69, 'Elie Saab the royal designers', 'des', 'Fashionstyleguide', '64a333ea5a0d7_espace_admin649f4383eae8f_649b4ec3afdb0_photo3.jpg', '2023-07-11', 'Blog Posts'),
(76, 'Kim Taehyung at the Céline festival', 'a', 'review', '64a3441866da7_espace_admin649e9d7584717_photo2.jpg', '2023-07-14', 'Highlights'),
(77, 'Kim Taehyung at the Céline festival', 'b', 'review', '64a3442a233e1_espace_admin649f00baa07dd_649b50461989b_photo3.jpg', '2023-07-10', 'Highlights'),
(78, 'Kim Taehyung at the Céline festival', 'c', 'review', '64a3443e7991b_images.jpg', '2023-07-17', 'Highlights'),
(79, 'Kim Taehyung at the Céline festival', 'd', 'review', '64a3446b1d802_espace_admin649f4383eae8f_649b4ec3afdb0_photo3.jpg', '2023-07-31', 'Highlights'),
(80, 'Elie Saab the royal designers', 'd', 'review', '64a3449143fdb_espace_admin649ea790b394d_649b4e360627a_photo4.jpg', '2023-08-04', 'Highlights'),
(81, 'Elie Saab the royal designers', 'd', 'review', '64a347f0c4aee_espace_admin649ea790b394d_649b4e360627a_photo4.jpg', '2023-08-04', 'Highlights'),
(84, 'Elie Saab the royal designers', 'des', 'home', '64a4620b382ca_uploads64a1e230ca6ae_espace_admin649f4383eae8f_649b4ec3afdb0_photo3.jpg', '2023-07-04', 'Highlights');

-- --------------------------------------------------------

--
-- Structure de la table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` varchar(10000) NOT NULL,
  `date_creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `blogs`
--

INSERT INTO `blogs` (`id`, `id_article`, `titre`, `contenu`, `date_creation`) VALUES
(1, 36, 'Kim Taehyung at the Céline festival', 'des', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(20) NOT NULL,
  `nouveau_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `email`, `mdp`, `nouveau_password`) VALUES
(36, 'nourhane', 'nourhanebndj@gmail.com', '$2y$10$uAYLQ6eM.HyFK', '64a080163a44a'),
(37, 'loubna', 'loub60418@gmail.com', '$2y$10$pohcLyGVUtVvv', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT pour la table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
