-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 13 Août 2019 à 08:52
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `qcm`
--

-- --------------------------------------------------------

--
-- Structure de la table `belong_to`
--

CREATE TABLE `belong_to` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `belong_to`
--

INSERT INTO `belong_to` (`id`, `id_question`) VALUES
(6, 13),
(7, 13),
(8, 13),
(9, 14),
(10, 14),
(11, 14),
(12, 14),
(13, 15),
(14, 15),
(15, 15),
(16, 15),
(17, 16),
(18, 16),
(19, 16),
(20, 17),
(21, 17),
(22, 17),
(23, 17),
(24, 18),
(25, 18),
(26, 18),
(27, 18),
(28, 19),
(29, 19),
(30, 19),
(31, 19),
(32, 20),
(33, 20),
(34, 20),
(35, 20),
(36, 21),
(37, 21),
(38, 21),
(39, 21),
(40, 22),
(41, 22),
(42, 22),
(43, 22),
(44, 23),
(45, 23),
(46, 23),
(47, 23),
(48, 24),
(49, 24),
(50, 24),
(51, 24),
(52, 25),
(53, 25),
(54, 25),
(55, 25),
(56, 26),
(57, 26),
(58, 26),
(59, 26),
(60, 27),
(61, 27),
(62, 27),
(63, 27),
(64, 28),
(65, 28),
(66, 28),
(67, 28),
(68, 29),
(69, 30),
(70, 30),
(71, 30),
(72, 31),
(73, 31),
(74, 31),
(75, 31),
(76, 32),
(77, 33);

-- --------------------------------------------------------

--
-- Structure de la table `have`
--

CREATE TABLE `have` (
  `id` int(11) NOT NULL,
  `id_qcm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `have`
--

INSERT INTO `have` (`id`, `id_qcm`) VALUES
(17, 85),
(18, 85),
(19, 85),
(20, 85),
(21, 85),
(22, 85),
(23, 85),
(24, 85),
(25, 85),
(26, 85),
(27, 85),
(28, 85),
(34, 90);

-- --------------------------------------------------------

--
-- Structure de la table `qcm`
--

CREATE TABLE `qcm` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `qcm`
--

INSERT INTO `qcm` (`id`, `titre`) VALUES
(85, 'Jeux vidÃ©os'),
(90, 'Doom');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id`, `question`) VALUES
(1, 'Quelle est la capitale de la horde?'),
(2, 'Quelle est la capitale de la horde?'),
(3, 'je test la recup d\'id'),
(4, 'je test la recup d\'id'),
(5, 'Quelle est la capitale de la horde?'),
(6, 'je test la recup d\'id'),
(7, 'Quelle est la capitale de la horde?'),
(8, 'je test la recup d\'id'),
(9, 'Quelle est la capitale de la horde?'),
(10, 'Quelle est la capitale de la horde?'),
(11, 'je test la recup d\'id'),
(12, 'Quelle est la capitale de la horde?'),
(13, 'Quelle est la capitale de la horde?'),
(14, 'T\'es fort ?'),
(15, 'Combien de dÃ©mons veux-tu tuer?'),
(16, 'Quelle est la capitale de la horde?'),
(17, 'Quel hÃ©ro de jeux vidÃ©o a Ã©tÃ© assimilÃ© au communisme par des thÃ©oriciens?'),
(18, 'Quelle est la capitale de la horde?'),
(19, 'Combien de dÃ©mons doit-on tuer dans Doom?'),
(20, 'Dans quel pays se dÃ©roule principalement l\'histoire d\'Ezzio Auditore dans Assassin\'s Creed II?'),
(21, 'Combien de Dofus primordiaux existe?'),
(22, 'Quel est l\'Ã©volution intermÃ©diaire du starter plante de pokemon or/argent?'),
(23, 'Quel est le nom original du personnage de Marie dans animal crossing?'),
(24, 'Que fait Mario quand on ne touche plus la manette dans Mario 64?'),
(25, 'Quel est le nom du hiboux qui aide Link dans The Legend of Zelda Ocarina of Time'),
(26, 'Quelle est la paire de version pokemon ayant apportÃ© le typÃ© fÃ©e?'),
(27, 'Quel est le nom du seigneur de l\'Ã©pouvante ayant dÃ©fiÃ© Arthas lors de l\'Ã©puration de Stratholme?'),
(28, 'Quel est le nom du jedi qui prendra sous son aile les skywalker?'),
(29, 'Combien de dÃ©mons veux-tu tuer?'),
(30, 'pourquoi php ?'),
(31, 'pourquoi simplon c\'est bien ?'),
(32, 'je test la recup d\'id'),
(33, 'Quelle est la capitale de la horde?'),
(34, 'Quelle est la capitale de la horde?');

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

CREATE TABLE `reponse` (
  `id` int(11) NOT NULL,
  `reponse` text NOT NULL,
  `valid` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `reponse`
--

INSERT INTO `reponse` (`id`, `reponse`, `valid`) VALUES
(6, 'obi-wan kenobi', 0),
(7, 'test1', 0),
(8, 'orgrimmar', 1),
(9, 'Oui', 0),
(10, 'Non', 1),
(11, 'Bof', 0),
(12, 'Pas du tout', 0),
(13, '0', 0),
(14, '100', 0),
(15, 'Autant qu\'il y en aura', 0),
(16, 'Jamais assez', 1),
(17, 'obi-wan kenobi', 0),
(18, 'orgrimmar', 1),
(19, 'dalaran', 0),
(20, 'obi-wan kenobi', 0),
(21, 'Zelda', 0),
(22, 'Mario', 1),
(23, 'Crash bandicoot', 0),
(24, 'obi-wan kenobi', 0),
(25, 'orgrimmar', 1),
(26, 'Dalaran', 0),
(27, 'Fossoyeuse', 0),
(28, 'obi-wan kenobi', 0),
(29, '0', 0),
(30, '100', 0),
(31, 'Jamais assez', 1),
(32, 'obi-wan kenobi', 0),
(33, 'Italie', 0),
(34, 'Etats-Unis', 0),
(35, 'France', 0),
(36, 'obi-wan kenobi', 0),
(37, '0', 0),
(38, '6', 1),
(39, '7', 0),
(40, 'obi-wan kenobi', 0),
(41, 'Macronium', 1),
(42, 'Crocrodile', 0),
(43, 'Massko', 0),
(44, 'obi-wan kenobi', 0),
(45, 'Mignonette', 0),
(46, 'Isabelle', 1),
(47, 'Angie', 0),
(48, 'obi-wan kenobi', 0),
(49, 'Il reve de pÃ¢tes', 1),
(50, 'Il reve de la princesse', 0),
(51, 'Il se gratte le fesses', 0),
(52, 'obi-wan kenobi', 0),
(53, 'Kaepora Gaebora', 1),
(54, 'Maegora kaepo', 0),
(55, 'Saerola patata', 0),
(56, 'obi-wan kenobi', 0),
(57, 'Soleil et Lune', 0),
(58, 'X et Y', 1),
(59, 'Noir et Blanc', 0),
(60, 'obi-wan kenobi', 0),
(61, 'Mal Ganis', 1),
(62, 'Kel Thuzad', 0),
(63, 'Mannoroth', 0),
(64, 'Obi-Wan Kenobi!', 1),
(65, 'Mace Windu', 0),
(66, 'Qui adi Mundi', 0),
(67, 'Qui gon Jin', 0),
(68, '100', 0),
(69, 'parceque', 0),
(70, 'lol c chiant', 1),
(71, 'je comprend pas', 0),
(72, 'coder', 0),
(73, 'ping pong', 1),
(74, 'restaurant', 1),
(75, 'biÃ¨re', 1),
(76, 'obi-wan kenobi', 1),
(77, 'obi-wan kenobi', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `belong_to`
--
ALTER TABLE `belong_to`
  ADD PRIMARY KEY (`id`,`id_question`),
  ADD KEY `belong_to_question0_FK` (`id_question`);

--
-- Index pour la table `have`
--
ALTER TABLE `have`
  ADD PRIMARY KEY (`id`,`id_qcm`),
  ADD KEY `have_qcm0_FK` (`id_qcm`);

--
-- Index pour la table `qcm`
--
ALTER TABLE `qcm`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reponse`
--
ALTER TABLE `reponse`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `qcm`
--
ALTER TABLE `qcm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT pour la table `reponse`
--
ALTER TABLE `reponse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `belong_to`
--
ALTER TABLE `belong_to`
  ADD CONSTRAINT `belong_to_question0_FK` FOREIGN KEY (`id_question`) REFERENCES `question` (`id`),
  ADD CONSTRAINT `belong_to_reponse_FK` FOREIGN KEY (`id`) REFERENCES `reponse` (`id`);

--
-- Contraintes pour la table `have`
--
ALTER TABLE `have`
  ADD CONSTRAINT `have_qcm0_FK` FOREIGN KEY (`id_qcm`) REFERENCES `qcm` (`id`),
  ADD CONSTRAINT `have_question_FK` FOREIGN KEY (`id`) REFERENCES `question` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
