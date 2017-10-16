-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2017 at 11:53 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nomCategorie` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`) VALUES
(1, 'Gameplay'),
(2, 'Les Musiques de Final Fantasy'),
(3, 'Trucs et Astuces'),
(4, 'Bugs et Glitches'),
(5, 'Vidéos'),
(6, 'Images');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `contenuPost` text,
  `auteur` varchar(255) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idTopic` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`idPost`, `contenuPost`, `auteur`, `idUtilisateur`, `idTopic`) VALUES
(1, 'Test contenu', 'Anonymous', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `idTopic` int(11) NOT NULL,
  `nomTopic` varchar(255) DEFAULT NULL,
  `descTopic` text,
  `idCategorie` int(11) NOT NULL,
  `rang` int(2) NOT NULL,
  `idUtilisateur` int(2) NOT NULL,
  `auteur` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`idTopic`, `nomTopic`, `descTopic`, `idCategorie`, `rang`, `idUtilisateur`, `auteur`) VALUES
(1, 'Ceci est une chose très abstraite, nous n\'avons pas plus d\'information à ce propos', 'Instagram offered a first glimpse at what its ads will look like in a blog post Thursday. The sample ad, which you can see below.', 1, 1, 0, 'Anonymous'),
(2, 'Test', 'OMG OMG OMG OMG', 1, 3, 1, 'Anonymous');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUtilisateur` int(11) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `mdp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dateInscription` date DEFAULT NULL,
  `rang` int(2) DEFAULT '1',
  `dateDerniereConnexion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(50) NOT NULL DEFAULT ' avatars/default.png '
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUtilisateur`, `login`, `prenom`, `nom`, `mdp`, `email`, `dateInscription`, `rang`, `dateDerniereConnexion`, `avatar`) VALUES
(1, 'admin', 'Jean-François', 'Dupont', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'jfdupont@admin.com', '2017-01-25', 3, '2017-01-25 11:30:09', ''),
(2, 'modo', 'Christophe', 'Du Chateau', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'cduchateau@modo.com', '2017-01-25', 2, '2017-01-25 11:46:33', 'avatars/default.png '),
(3, 'user1', 'Maha', 'Amar', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'mamar@user.com', '2017-01-25', 1, '2017-01-25 11:48:00', 'avatars/default.png ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `idUtilisateur` (`idUtilisateur`),
  ADD KEY `idTopic` (`idTopic`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`idTopic`),
  ADD KEY `idUtilisateur` (`idUtilisateur`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `idTopic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
