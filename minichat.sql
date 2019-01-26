-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 26 jan. 2019 à 11:13
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phpcourse`
--

-- --------------------------------------------------------

--
-- Structure de la table `minichat`
--

DROP TABLE IF EXISTS `minichat`;
CREATE TABLE IF NOT EXISTS `minichat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `minichat`
--

INSERT INTO `minichat` (`id`, `pseudo`, `message`, `date`) VALUES
(78, '<h1>hAcKer</h1>', 'Fais gaffe, ici c\'est sécure :/', '2019-01-26 12:05:38'),
(79, 'Spy', 'Ouai mec aucune faille, pas moyen de s\'amuser............\r\n\r\n\r\n<script>alert(\'Il y a une faille XSS\')</script>', '2019-01-26 12:07:25'),
(80, 'Spy', 'Mince encore loupé :(', '2019-01-26 12:07:39'),
(81, 'Mike', 'Ahah tant mieux', '2019-01-26 12:08:30'),
(77, '<h1>hAcKer</h1>', 'Bienvenu', '2019-01-26 12:05:16'),
(76, '<h1>hAcKer</h1>', 'Yo Mike\r\n', '2019-01-26 12:05:08'),
(75, 'Mike', 'Et le deuxième !!!', '2019-01-26 12:04:29'),
(74, 'Mike', 'Voici mon premier message', '2019-01-26 12:04:14'),
(73, 'Mike', 'Salut à tous !', '2019-01-26 12:03:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
