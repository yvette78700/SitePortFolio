-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 17 avr. 2019 à 12:06
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `social`
--

CREATE TABLE `social` (
  `id_social` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `social`
--

INSERT INTO `social` (`id_social`, `url`, `nom`, `id_utilisateur`) VALUES
(1, 'https://www.linkedin.com/in/toukam-kake-yvette-60aa19a6/', 'Linkedin', 1),
(2, 'https://github.com/yvette78700', 'Github', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_competences`
--

CREATE TABLE `t_competences` (
  `id_competence` int(3) NOT NULL,
  `domaine_competence` varchar(30) DEFAULT NULL,
  `competence` varchar(30) DEFAULT NULL,
  `id_utilisateur` int(3) DEFAULT NULL,
  `image_domaine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_competences`
--

INSERT INTO `t_competences` (`id_competence`, `domaine_competence`, `competence`, `id_utilisateur`, `image_domaine`) VALUES
(2, 'Front-End', 'CSS', 1, ''),
(3, 'Front-End', 'BOOTSTRAP', 1, ''),
(4, 'Front-End', 'JavaScript', 1, 'fas fa-laptop'),
(5, 'Front-End', 'jQUERY', 1, 'fas fa-laptop'),
(7, 'Front-End', 'WordPress ', 1, 'fas fa-laptop'),
(8, 'Front-End', 'IONIC ', 1, 'fas fa-laptop'),
(9, 'Front-End', 'AJAX', 1, 'fas fa-laptop'),
(10, 'Back-End', 'PHP ', 1, 'fas fa-server'),
(11, 'Back-End', ' SQL  ', 1, 'fas fa-server'),
(12, 'Back-End', 'WordPress', 1, 'fas fa-server'),
(16, 'Outils Web', ' SLACK', 1, 'fas fa-tools'),
(17, 'Outils Web', 'GIMP', 1, ''),
(19, 'ddd', 'sss', NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `t_experiences`
--

CREATE TABLE `t_experiences` (
  `id_experience` int(3) NOT NULL,
  `e_titre` varchar(50) DEFAULT NULL,
  `e_dates` varchar(50) DEFAULT NULL,
  `e_description` text,
  `e_image` varchar(50) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_experiences`
--

INSERT INTO `t_experiences` (`id_experience`, `e_titre`, `e_dates`, `e_description`, `e_image`, `id_utilisateur`) VALUES
(2, 'Manager', 'Juin 2017 - Août 2017', 'Chez Macdonalds Aeras du groupe Elior à Roissy', '/SitePortFolio/public/img/experience/2.jpg', 1),
(3, 'Conseillère de vente ', 'Janvier 2012 - Août 2016', 'Chez Bambinos à Conflans Sainte Honorine', '/SitePortFolio/public/img/experience/3.jpg', 1),
(4, 'Stage Adjointe de magasin  ', 'stage de 4 mois', 'Chez Armand Thiery à Cergy', '/SitePortFolio/public/img/experience/4.jpg', 1),
(5, 'Assistante administrative  ', 'Juillet 2006 - Septembre 2006', ' Chez Easycom à Paris 18', '', 1),
(9, 'dddd', 'ffff', 'ddddd', '', NULL),
(10, 'dddd', 'ddddd', 'ddddd', '', NULL),
(11, 'dddd', 'ddddd', 'ddddd', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `t_formations`
--

CREATE TABLE `t_formations` (
  `id_formation` int(3) NOT NULL,
  `f_titre` varchar(50) DEFAULT NULL,
  `f_dates` varchar(50) DEFAULT NULL,
  `f_description` text,
  `f_image` varchar(50) DEFAULT NULL,
  `id_utilisateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_formations`
--

INSERT INTO `t_formations` (`id_formation`, `f_titre`, `f_dates`, `f_description`, `f_image`, `id_utilisateur`) VALUES
(2, 'BTS MUC(Management des Unités Commerciales)', 'Octobre 2007 –  Juin 2009 ', 'au Lycée Paul Eluard à Saint Denis  ', '/SitePortFolio/public/img/formation/1.jpg', 1),
(5, 'Deug (2 années) en Informatique', 'Octobre 2005 – Juillet  2007', 'à l’ Université de Paris 7 Denis Didérot ', '/SitePortFolio/public/img/formation/2.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_loisir`
--

CREATE TABLE `t_loisir` (
  `id_loisir` int(3) NOT NULL,
  `loisir` varchar(30) DEFAULT NULL,
  `id_utilisateur` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `t_realisations`
--

CREATE TABLE `t_realisations` (
  `id_realisation` int(3) NOT NULL,
  `maquette` varchar(255) NOT NULL,
  `techno` varchar(255) NOT NULL,
  `modal` varchar(255) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_realisations`
--

INSERT INTO `t_realisations` (`id_realisation`, `maquette`, `techno`, `modal`, `id_utilisateur`) VALUES
(4, '/SitePortFolio/public/img/realisation/maquette4.jpg', 'HTML – CSS - BOOTSTRAP', '/SitePortFolio/public/img/realisation/maquette44.jpg', 1),
(7, '/SitePortFolio/public/img/realisation/maquette7.png', 'HTML – CSS', '/SitePortFolio/public/img/realisation/maquette77.png', 1),
(8, '/SitePortFolio/public/img/realisation/maquette8.png', 'HTML – CSS - JAVASCRIPT', '/SitePortFolio/public/img/realisation/maquette88.png', 1),
(12, '  ', 'html', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_titre_cv`
--

CREATE TABLE `t_titre_cv` (
  `id_titre_cv` int(3) NOT NULL,
  `titre_cv` text,
  `accroche` text,
  `logo` varchar(50) DEFAULT NULL,
  `id_utilisateur` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_titre_cv`
--

INSERT INTO `t_titre_cv` (`id_titre_cv`, `titre_cv`, `accroche`, `logo`, `id_utilisateur`) VALUES
(1, 'Développeur -  Intégrateur Web', 'Yvette TOUKAM KAKE ', '/SitePortFolio/public/img/logos/logo.png', 1);

-- --------------------------------------------------------

--
-- Structure de la table `t_utilisateurs`
--

CREATE TABLE `t_utilisateurs` (
  `id_utilisateur` int(3) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(10) UNSIGNED ZEROFILL NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `pseudo` varchar(30) NOT NULL,
  `statut` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `date_naissance` date NOT NULL,
  `sexe` enum('H','F') NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ville` varchar(30) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `site_web` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_utilisateurs`
--

INSERT INTO `t_utilisateurs` (`id_utilisateur`, `prenom`, `nom`, `email`, `telephone`, `mdp`, `pseudo`, `statut`, `age`, `date_naissance`, `sexe`, `adresse`, `code_postal`, `ville`, `pays`, `site_web`) VALUES
(1, 'Yvette', 'Toukam', 'kamtou8@yahoo.fr', 0602730513, '$2y$10$AhMyqmmh6evHtce6SGVB4.TyTIb20xTgAJq8.5NCsYkIbtixemYuG', 'tata', 'true', 34, '1984-01-22', 'H', '1 rue des ferrites', 78700, 'Conflans Sainte Honorine', 'France', 'toukamweb.epizy.com'),
(3, 'dd', 'ddd', 'ddd@ddd.fr', 0000000000, '$2y$10$6PEurLEcQ0nHfKMyY6q7lO6E8Vl.iDzulSJ1OOVkeuxS4b/X1h1Xi', 'fff', 'false', 12, '1988-01-22', 'F', 'dddd', 78700, 'ddd', 'fff', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id_social`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `t_competences`
--
ALTER TABLE `t_competences`
  ADD PRIMARY KEY (`id_competence`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  ADD PRIMARY KEY (`id_experience`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `t_formations`
--
ALTER TABLE `t_formations`
  ADD PRIMARY KEY (`id_formation`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `t_loisir`
--
ALTER TABLE `t_loisir`
  ADD PRIMARY KEY (`id_loisir`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  ADD PRIMARY KEY (`id_realisation`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `t_titre_cv`
--
ALTER TABLE `t_titre_cv`
  ADD PRIMARY KEY (`id_titre_cv`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `social`
--
ALTER TABLE `social`
  MODIFY `id_social` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `t_competences`
--
ALTER TABLE `t_competences`
  MODIFY `id_competence` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  MODIFY `id_experience` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `t_formations`
--
ALTER TABLE `t_formations`
  MODIFY `id_formation` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_loisir`
--
ALTER TABLE `t_loisir`
  MODIFY `id_loisir` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  MODIFY `id_realisation` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `t_titre_cv`
--
ALTER TABLE `t_titre_cv`
  MODIFY `id_titre_cv` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `t_utilisateurs`
--
ALTER TABLE `t_utilisateurs`
  MODIFY `id_utilisateur` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `social`
--
ALTER TABLE `social`
  ADD CONSTRAINT `social_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `t_utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `t_competences`
--
ALTER TABLE `t_competences`
  ADD CONSTRAINT `t_competences_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `t_utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `t_experiences`
--
ALTER TABLE `t_experiences`
  ADD CONSTRAINT `t_experiences_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `t_utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `t_formations`
--
ALTER TABLE `t_formations`
  ADD CONSTRAINT `t_formations_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `t_utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `t_loisir`
--
ALTER TABLE `t_loisir`
  ADD CONSTRAINT `t_loisir_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `t_utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `t_realisations`
--
ALTER TABLE `t_realisations`
  ADD CONSTRAINT `t_realisations_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `t_utilisateurs` (`id_utilisateur`);

--
-- Contraintes pour la table `t_titre_cv`
--
ALTER TABLE `t_titre_cv`
  ADD CONSTRAINT `t_titre_cv_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `t_utilisateurs` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
