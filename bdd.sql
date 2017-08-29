-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 29 Août 2017 à 14:57
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `lieux` varchar(255) NOT NULL,
  `locataire` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `location`, `prix`, `lieux`, `locataire`, `image`) VALUES
(18, 'Villa', 'Magnifique habitation en plein centre d\'une foret avec possibilité de pêche de pokemon !', 900, 'Céladopole', 0, 'https://s-media-cache-ak0.pinimg.com/originals/a9/10/5c/a9105cdbeb639c2b2ffa3efcb273cb41.jpg'),
(19, 'Appartement', 'Loue petit appart\' sympatoche pour les vacances d\'hiver ou d\'été', 500, 'Argenta', 0, 'http://ekladata.com/_bKW23Kirmsc0bPT-g4q6mE8-oc.jpg'),
(20, 'Maison', 'A proximité de la Ligue Pokemon, cette maisonette ravira tous les amateurs de poke-fighting !', 600, 'Jadielle', 0, 'http://www.otakia.com/wp-content/uploads/2016/01/sword_art_online_aincrad_episode_11_kirito_asuna_maison.jpg'),
(21, 'Studio', 'Loue petit chalet sympatoche pour les vacances d\'hiver ou d\'été', 400, 'Bourg-palette', 0, 'http://www.10wallpaper.com/wallpaper/1200x900/1111/bedroom-Cartoon_characters-HD_Wallpaper_the_third_series_1200x900.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `admin`) VALUES
(1, 'Nyle', 'j.alsina@hotmail.fr', 'monpass', 0),
(2, 'Alice', 'alice@gmail.com', 'monpass', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;