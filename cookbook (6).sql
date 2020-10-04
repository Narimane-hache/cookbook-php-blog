-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 01 oct. 2020 à 09:30
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cookbook`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categorie` varchar(100) NOT NULL,
  `recettes` varchar(50) NOT NULL,
  `image` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `categorie`, `recettes`, `image`) VALUES
(46, 'entrÃ©es', 'salÃ©es', '117768252_2642064439391565_7892270534832848798_n.jpg'),
(48, 'desserts', 'SucrÃ©es', '117806062_776861029772298_8663119272643104301_n.jpg'),
(49, 'gateaux', 'SucrÃ©es', '117770325_1208501616167221_3724977100771376044_n.jpg'),
(50, 'jus', 'SucrÃ©es', '117655450_308998647213413_9033671991184373753_n.jpg'),
(51, 'plats', 'salÃ©es', '117771110_642249806497793_2466100599521636905_n.jpg'),
(52, 'pains', 'salÃ©es', '117840947_580960882601387_2960348677651101760_n.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `email`, `objet`, `message`) VALUES
(24, 'loic', 'lolic@loic.fr', 'recette declicieuse ', 'je vous remercie'),
(18, 'LOIC', 'lolic@loic.fr', 'recette declicieuse ', 'JAIME BIEN VOTRE BLOG');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `descr` text NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `image` longtext DEFAULT NULL,
  `temp` varchar(50) NOT NULL,
  `parts` int(11) NOT NULL,
  `niveau` varchar(100) NOT NULL,
  `ingredients` longtext NOT NULL,
  `preparation` longtext NOT NULL,
  `tag` varchar(200) NOT NULL,
  `note` longtext NOT NULL,
  `date` datetime NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id`, `titre`, `descr`, `categorie`, `image`, `temp`, `parts`, `niveau`, `ingredients`, `preparation`, `tag`, `note`, `date`, `user_id`) VALUES
(54, ' bourek', ' bourek', 'EntrÃ©e', 'tropez.jpg', ' 30min', 5, 'Moyen', 'hbbjbjbhk', 'jbhbvhjv', ' bourek', 'jbgjk,', '2020-06-23 12:51:11', NULL),
(76, 'mteqbaa ', 'galette de dattes  ', 'gateaux', '', '         15min', 5, 'Moyen', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa\r\nmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww\r\nwwwwwwwwwwnnnnnnnnbnmkxdsqlojcfkdsev\r\nsqcfjknvgrhisjflksedj\r\nlqsaijnposejdhfideshnvjfdsbejfnheqdskijf\r\nfjzqrfbvjsdnfvsdnfjcksdncklqjdzoipaedjozjirjfuirghndjnvkleqnfjrbvhfdbnvjfbghejugerkbvhkfigub\r\n100jkerigbfvherbfkherbgfirjofpziekfhyegfyubfvjhs', ' dattes', '', '2020-09-18 12:07:20', NULL),
(80, ' tarte caramel   ', ' tarte Ã  base de pÃ¢te brisÃ©    ', 'desserts', '', '   15min', 8, 'Facile', 'Pour la crÃ¨me caramel au chocolat :\r\n 75 g de sucre\r\n 75 g de crÃ¨me fraÃ®che liquide\r\n 100 g de chocolat noir\r\n 130 g de beurre\r\n\r\nPour la crÃ¨me chantilly cafÃ© :\r\n 150 g de crÃ¨me fraÃ®che liquide\r\n 15 g de sucre glace\r\n 1/2 cuillÃ¨re Ã  cafÃ© de cafÃ© soluble', 'PrÃ©paration de la crÃ¨me caramel\r\nDans une casserole, sur un feu doux, verse le sucre et laisse-le fondre jusquâ€™Ã  obtention dâ€™un caramel. Au mÃªme temps, fais chauffer la crÃ¨me fraÃ®che liquide.\r\nUne fois le caramel obtenu, coupe le feu et ajoute la crÃ¨me fraÃ®che liquide en 3 fois, tout en mÃ©langeant.\r\nMaintenant que le mÃ©lange est bien homogÃ¨ne, reporte le tout Ã  Ã©bullition pour obtenir une crÃ¨me Ã©piasse et soyeuse.\r\nA prÃ©sent, verse le caramel chaud sur le chocolat et les morceaux de beurre Ã  tempÃ©rature ambiante.\r\nLaisse le temps aux deux ingrÃ©dients de fondre grÃ¢ce Ã  la chaleur du caramel, puis homogÃ©nÃ©ise le tout Ã  lâ€™aide dâ€™un bras plongeur.\r\n\r\nIl ne te reste plus quâ€™Ã  couvrir la prÃ©paration avec un papier film pour empÃªcher la formation dâ€™une croÃ»te avant de la garder de cÃ´tÃ©.\r\n\r\nPrÃ©paration de la crÃ¨me chantilly cafÃ©\r\nDans un bol, mÃ©lange tous les ingrÃ©dients listÃ©s plus haut, puis rÃ©serve la mixture obtenue au frais pendant au moins 1 heure.\r\nAstuce du chef : nâ€™oublie pas de mettre les fouets au frigo. Les ustensiles doivent Ãªtre bien froid lors du montage.\r\n\r\nPassÃ© le temps de repos, monte la crÃ¨me progressivement, et ce jusquâ€™Ã  ce que tu obtiennes une crÃ¨me chantilly avec une bonne tenue.\r\nMontage de la tarte au caramel et au cafÃ©\r\nSur le fond de tarte prÃ©alablement cuit, dresse dÃ©licatement la crÃ¨me caramel ainsi que le chocolat. Ensuite, ajoute pardessus la chantilly cafÃ©. Simple et efficace ! ', 'tarte chocolat cafÃ© ', 'Alors, quand est-ce que tu testes la tarte au caramel et au cafÃ©', '2020-09-18 12:07:07', NULL),
(81, ' bourek', ' roulÃ© de feuilles de brick', 'entrÃ©es', '117768252_2642064439391565_7892270534832848798_n.jpg', ' 30min', 5, 'Facile', 'Un paquet de feuilles de brick\r\n300 g de viande hachÃ©e\r\n1 oignon hachÃ©\r\n1 gousse dâ€™ail Ã©mincÃ©e\r\n1 petit bouquet de mÃ©lange de persil et de coriandre\r\nPortions de fromage fondu\r\n1 pincÃ©e de cannelle\r\nSel, poivre\r\n1 petit verre dâ€™eau\r\n1 filet dâ€™huile dâ€™olive\r\nHuile pour friture', ' Faire revenir lâ€™oignon hachÃ© dans un filet dâ€™huile dâ€™olives.\r\nAjouter le verre dâ€™eau', 'bourek viande brick ', 'bourek', '2020-08-17 05:52:31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_recipe` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_3` (`id_user`),
  KEY `id` (`id_user`),
  KEY `id_2` (`id_user`),
  KEY `id_recipe` (`id_recipe`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `email`, `password`, `id_recipe`) VALUES
(24, 'a@a.fr', 'a@a.fr', '$2y$10$fTKPNlEOOEVthjaNhtCXQeoi1VRcs8C4GlyZ1//pJUaSF/iy53WWS', NULL),
(25, 'nari.ma.ne@outlook.fr', 'nari.ma.ne@outlook.fr', '$2y$10$k7U53PbBiF534bO0NjE9JO0UHHUdjwR/UqwvI5dFsc9hJ3TKGo3dm', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD CONSTRAINT `recettes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_recipe`) REFERENCES `recettes` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
