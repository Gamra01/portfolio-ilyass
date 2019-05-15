-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 15 mai 2019 à 19:21
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
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `titre_about` varchar(255) NOT NULL,
  `photo_about` varchar(255) NOT NULL,
  `content_about` text NOT NULL,
  PRIMARY KEY (`id_about`),
  UNIQUE KEY `id_About` (`id_about`),
  KEY `id_About_2` (`id_about`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id_about`, `titre_about`, `photo_about`, `content_about`) VALUES
(1, 'About me', 'images/pic.jpg', 'My name is Ilyass Gamra, I started web development and web design to develop a small personal website and it quickly became a real vocation. I like to experiment, discover and learn to master and measure my projects pros and perso for more informations download my CV.'),
(3, 'About me', 'images/zirax.jpeg', 'Hello!<br>My name is Ilyass Gamra, I am a passionate UI/UX Designer, I also like Cyber Security.</p>\r\n            <p>I created this web page using Bootstrap 4, FontAwesome, some other Javascript Libraries: AOS, Popper.js and tailwind <br>i was inspired from creative portfolio <br>I study in Nantes my 1st year at <strong>Ynov</strong> School.');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `message_user` varchar(255) NOT NULL,
  `mail_user` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_photo` int(11) NOT NULL AUTO_INCREMENT,
  `url_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id_Project` int(11) NOT NULL AUTO_INCREMENT,
  `title_project` varchar(255) NOT NULL,
  `content_project` text NOT NULL,
  PRIMARY KEY (`id_Project`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id_skills` int(11) NOT NULL AUTO_INCREMENT,
  `list_skills` varchar(255) NOT NULL,
  PRIMARY KEY (`id_skills`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `ip_user` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
