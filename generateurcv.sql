-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Décembre 2017 à 08:47
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `generateurcv`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE `adresse` (
  `id_a` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `numero` int(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `codePostal` int(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`id_a`, `id_u`, `numero`, `rue`, `codePostal`, `ville`, `pays`) VALUES
(1, 1, 49, 'rue de la Mardotte', 77120, 'Mouroux', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `experience1`
--

CREATE TABLE `experience1` (
  `id_e1` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `posteOccupe` varchar(255) NOT NULL,
  `nomEntreprise` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `mission1` varchar(255) NOT NULL,
  `mission2` varchar(255) NOT NULL,
  `mission3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experience1`
--

INSERT INTO `experience1` (`id_e1`, `id_u`, `posteOccupe`, `nomEntreprise`, `ville`, `dateDebut`, `dateFin`, `mission1`, `mission2`, `mission3`) VALUES
(1, 1, 'Developpeur web', 'conceptuance', 'Serris', '2017-11-14', '2017-11-09', 'Devweb', 'php', 'html css');

-- --------------------------------------------------------

--
-- Structure de la table `experience2`
--

CREATE TABLE `experience2` (
  `id_e2` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `posteOccupe` varchar(255) NOT NULL,
  `nomEntreprise` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `mission1` varchar(255) NOT NULL,
  `mission2` varchar(255) NOT NULL,
  `mission3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experience2`
--

INSERT INTO `experience2` (`id_e2`, `id_u`, `posteOccupe`, `nomEntreprise`, `ville`, `dateDebut`, `dateFin`, `mission1`, `mission2`, `mission3`) VALUES
(1, 1, 'redacteur web', 'conceuptuance', 'serris', '2017-11-01', '2017-11-07', 'Recdation', 'redaction', 'redaction');

-- --------------------------------------------------------

--
-- Structure de la table `experience3`
--

CREATE TABLE `experience3` (
  `id_e3` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `posteOccupe` varchar(255) NOT NULL,
  `nomEntreprise` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `mission1` varchar(255) NOT NULL,
  `mission2` varchar(255) NOT NULL,
  `mission3` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experiencepro`
--

CREATE TABLE `experiencepro` (
  `id_e` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `posteRecherche` varchar(255) NOT NULL,
  `anneeExperience` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `experiencepro`
--

INSERT INTO `experiencepro` (`id_e`, `id_u`, `posteRecherche`, `anneeExperience`) VALUES
(1, 1, 'Developpeur web', 2);

-- --------------------------------------------------------

--
-- Structure de la table `formation1`
--

CREATE TABLE `formation1` (
  `id_f1` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `anneeDebut` date NOT NULL,
  `anneeFin` date NOT NULL,
  `nomFormation` varchar(255) NOT NULL,
  `etablissementObtention` varchar(255) NOT NULL,
  `villeObtention` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation1`
--

INSERT INTO `formation1` (`id_f1`, `id_u`, `anneeDebut`, `anneeFin`, `nomFormation`, `etablissementObtention`, `villeObtention`) VALUES
(1, 1, '2017-11-09', '2017-11-23', 'jdksvbj', 'ghsjgdfl', 'vdjskvl');

-- --------------------------------------------------------

--
-- Structure de la table `formation2`
--

CREATE TABLE `formation2` (
  `id_f2` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `anneeDebut` date NOT NULL,
  `anneeFin` date NOT NULL,
  `nomFormation` varchar(255) NOT NULL,
  `etablissementObtention` varchar(255) NOT NULL,
  `villeObtention` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formation2`
--

INSERT INTO `formation2` (`id_f2`, `id_u`, `anneeDebut`, `anneeFin`, `nomFormation`, `etablissementObtention`, `villeObtention`) VALUES
(1, 1, '2017-11-01', '2017-11-29', 'hubre', 'concept', 'muliscir');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_im` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id_im`, `id_u`, `lien`) VALUES
(4, 1, 'Views/upload/logo-Goncalves-Paul.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `informatique`
--

CREATE TABLE `informatique` (
  `id_i` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `environnement` varchar(255) NOT NULL,
  `bureautique` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `informatique`
--

INSERT INTO `informatique` (`id_i`, `id_u`, `environnement`, `bureautique`) VALUES
(1, 1, 'Windows 7, Windows 10', 'Word, Excel');

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

CREATE TABLE `langue` (
  `id_l` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `langue1` varchar(255) NOT NULL,
  `niveauLangue1` int(11) NOT NULL,
  `langue2` varchar(255) NOT NULL,
  `niveauLangue2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `langue`
--

INSERT INTO `langue` (`id_l`, `id_u`, `langue1`, `niveauLangue1`, `langue2`, `niveauLangue2`) VALUES
(2, 1, 'Anglais', 3, 'Espagnol', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id_u`, `nom`, `prenom`, `mail`, `mdp`, `tel`, `age`) VALUES
(1, 'Goncalves', 'Paul', 'paulgoncalves.mr@gmail.com', 'bc76e0b50f70dfbdfc7ae7d674a2bde607b442ef', 649646891, 19),
(4, 'Martin', 'Michel', 'michel.martin@gmail.com', 'bc76e0b50f70dfbdfc7ae7d674a2bde607b442ef', 0, 0),
(5, 'ndsclkjpb', 'bjkp gil', 'ppp@gmail.com', 'bc76e0b50f70dfbdfc7ae7d674a2bde607b442ef', 649646891, 18);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id_a`);

--
-- Index pour la table `experience1`
--
ALTER TABLE `experience1`
  ADD PRIMARY KEY (`id_e1`);

--
-- Index pour la table `experience2`
--
ALTER TABLE `experience2`
  ADD PRIMARY KEY (`id_e2`);

--
-- Index pour la table `experience3`
--
ALTER TABLE `experience3`
  ADD PRIMARY KEY (`id_e3`);

--
-- Index pour la table `experiencepro`
--
ALTER TABLE `experiencepro`
  ADD PRIMARY KEY (`id_e`);

--
-- Index pour la table `formation1`
--
ALTER TABLE `formation1`
  ADD PRIMARY KEY (`id_f1`);

--
-- Index pour la table `formation2`
--
ALTER TABLE `formation2`
  ADD PRIMARY KEY (`id_f2`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_im`);

--
-- Index pour la table `informatique`
--
ALTER TABLE `informatique`
  ADD PRIMARY KEY (`id_i`);

--
-- Index pour la table `langue`
--
ALTER TABLE `langue`
  ADD PRIMARY KEY (`id_l`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `experience1`
--
ALTER TABLE `experience1`
  MODIFY `id_e1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `experience2`
--
ALTER TABLE `experience2`
  MODIFY `id_e2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `experience3`
--
ALTER TABLE `experience3`
  MODIFY `id_e3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `experiencepro`
--
ALTER TABLE `experiencepro`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `formation1`
--
ALTER TABLE `formation1`
  MODIFY `id_f1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `formation2`
--
ALTER TABLE `formation2`
  MODIFY `id_f2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_im` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `informatique`
--
ALTER TABLE `informatique`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT pour la table `langue`
--
ALTER TABLE `langue`
  MODIFY `id_l` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
