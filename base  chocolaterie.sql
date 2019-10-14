-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2019 at 06:39 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chocolaterie`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidature`
--

CREATE TABLE `candidature` (
  `id` int(255) NOT NULL,
  `idpersonne` int(255) NOT NULL,
  `idstage` int(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `lettre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidature`
--

INSERT INTO `candidature` (`id`, `idpersonne`, `idstage`, `etat`, `cv`, `lettre`) VALUES
(1, 1, 1, 'accepter', 'Document-sans-titre.pdf', 'nbnnbnbnbn'),
(2, 16, 1, 'encour', 'chocolat-haut-de-gamme.jpg', ''),
(3, 15, 1, 'accepter', 'module_table_bottom.png', 'motifier');

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `id` int(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`id`, `login`, `password`, `role`) VALUES
(1, 'admin@gmail.com', 'admin', 'secretaire'),
(2, 'stage@gmail.com', 'stage', 'stagiaire');

-- --------------------------------------------------------

--
-- Table structure for table `galerie`
--

CREATE TABLE `galerie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerie`
--

INSERT INTO `galerie` (`id`, `nom`, `photo`, `date`, `description`) VALUES
(3, 'mmm', '02.jpg', '', 'ss'),
(6, 'photo1', 'buche-de-noel-aux-carambars.jpg', '2019-01-11', 'mmlll');

-- --------------------------------------------------------

--
-- Table structure for table `livredor`
--

CREATE TABLE `livredor` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `etat` varchar(255) NOT NULL,
  `reponse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `livredor`
--

INSERT INTO `livredor` (`id`, `message`, `nom`, `date`, `etat`, `reponse`) VALUES
(3, 'comm', 'mmm', '05/01/2019', 'accepter', ''),
(6, 'm', 'mahjoub', '05/01/2019', 'encour', ''),
(7, 'm', 'mahjoub', '05/01/2019', 'encour', ''),
(8, 'm', 'mahjoub', '05/01/2019', 'encour', ''),
(9, 'm', 'mahjoub', '05/01/2019', 'encour', '');

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

CREATE TABLE `personne` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `datenaissance` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codepostal` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `datenaissance`, `ville`, `codepostal`, `adresse`, `telephone`, `email`) VALUES
(1, 'cvxcvb', 'bnbnbnb', '2019-01-06', 'bnbnbnbv', '35700', 'bnnbnc', '', 'yaya.simpara.5@gmail.com'),
(2, 'Abdrahmane', 'El Mahjoub', '2019-01-02', 'rennes', '35700', '25 Avenue du professeur foulon', '54049115', 'mahjoubwel@gmail.com'),
(3, 'Abdrahmane', 'El Mahjoub', '2019-01-02', 'rennes', '35700', '25 Avenue du professeur foulon', '54049115', 'mahjoubwel@gmail.com'),
(4, 'Abdrahmane', 'El Mahjoub', '2019-01-02', 'rennes', '35700', '25 Avenue du professeur foulon', '54049115', 'mahjoubwel@gmail.com'),
(5, 'Abdrahmane', 'El Mahjoub', '2019-01-02', 'rennes', '35700', '25 Avenue du professeur foulon', '54049115', 'mahjoubwel@gmail.com'),
(6, 'Abdrahmane', 'El Mahjoub', '2019-01-02', 'rennes', '35700', '25 Avenue du professeur foulon', '54049115', 'mahjoubwel@gmail.com'),
(7, 'Abdrahmane', 'El Mahjoub', '2019-01-02', 'rennes', '35700', '25 Avenue du professeur foulon', '54049115', 'mahjoubwel@gmail.com'),
(8, 'Abdrahmane', 'El Mahjoub', '2019-01-02', 'rennes', '35700', '25 Avenue du professeur foulon', '54049115', 'mahjoubwel@gmail.com'),
(9, 'ss', 'l', '2019-01-03', '', '', '', '', ''),
(10, 'ss', 'zze', '2019-01-04', '', '', '', '', ''),
(11, 'sss', 'ddd', '2019-01-04', '', '', '', '', ''),
(12, 'ss', 'zze', '2019-01-04', '', '', '', '', ''),
(13, 'z', 'ddd', '2019-01-04', '', '', '', '', ''),
(14, 'ss', 'ss', '2019-01-04', '', '', '', '', ''),
(15, 'cand1', 'cand1', '2019-01-04', '', '', '', '', 'mahjoubwel@gmail.com'),
(16, 'syed', 'ksjjs', '2019-01-05', '', '', '', '', 'hassan.hadi1999@yahoo.fr');

-- --------------------------------------------------------

--
-- Table structure for table `realisation`
--

CREATE TABLE `realisation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `realisation`
--

INSERT INTO `realisation` (`id`, `nom`, `description`, `photo`, `prix`) VALUES
(10, 'deli-deli', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.', '3.jpg', ''),
(11, 'coulant-chocolat', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.', 'gateau-coulant-chocolat-coco-fleur.jpg', ''),
(12, 'coeur-coulant', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.', 'recette-coeur-coulant-chocolat.jpg', ''),
(15, 'test ', 'slsmsmmsmsm', 'savarin-au-chocolat.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `recette`
--

CREATE TABLE `recette` (
  `id` int(255) NOT NULL,
  `idstage` int(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recette`
--

INSERT INTO `recette` (`id`, `idstage`, `description`, `photo`, `nom`, `date`) VALUES
(1, 1, 'ddddddddddddddddd', 'chocolat-haut-de-gamme.jpg', 'ddd', '2019-01-18'),
(2, 1, 'dddsadf', '04.jpg', 'ssss', 'ss'),
(7, 1, 'hsddddddddddddddd', '04.jpg', 'chocola', '2019-01-05'),
(9, 1, 'biscuiut', 'buche-de-noel-aux-carambars.jpg', 'snnn', '2019-01-05');

-- --------------------------------------------------------

--
-- Table structure for table `stage`
--

CREATE TABLE `stage` (
  `id` int(255) NOT NULL,
  `theme` varchar(500) NOT NULL,
  `debut` varchar(255) NOT NULL,
  `fin` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `nbplace` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stage`
--

INSERT INTO `stage` (`id`, `theme`, `debut`, `fin`, `description`, `nbplace`) VALUES
(1, 'Stage', '2019-01-10', '2019-05-10', 'Realisation des sacarion au choxolat', 3),
(5, 'stage2', '25-01-2019', '25-02-2019', 'desecppppppppppppp', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stagiare`
--

CREATE TABLE `stagiare` (
  `id` int(255) NOT NULL,
  `idpersonne` int(255) NOT NULL,
  `idstage` int(255) NOT NULL,
  `idcompte` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stagiare`
--

INSERT INTO `stagiare` (`id`, `idpersonne`, `idstage`, `idcompte`) VALUES
(2, 1, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidature`
--
ALTER TABLE `candidature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpersonne` (`idpersonne`),
  ADD KEY `idstage` (`idstage`);

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `livredor`
--
ALTER TABLE `livredor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `realisation`
--
ALTER TABLE `realisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stagiare`
--
ALTER TABLE `stagiare`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpersonne` (`idpersonne`),
  ADD KEY `idstage` (`idstage`),
  ADD KEY `idcompte` (`idcompte`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidature`
--
ALTER TABLE `candidature`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `livredor`
--
ALTER TABLE `livredor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `realisation`
--
ALTER TABLE `realisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stage`
--
ALTER TABLE `stage`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stagiare`
--
ALTER TABLE `stagiare`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidature`
--
ALTER TABLE `candidature`
  ADD CONSTRAINT `candidature_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `candidature_ibfk_2` FOREIGN KEY (`idstage`) REFERENCES `stage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stagiare`
--
ALTER TABLE `stagiare`
  ADD CONSTRAINT `stagiare_ibfk_1` FOREIGN KEY (`idpersonne`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stagiare_ibfk_2` FOREIGN KEY (`idstage`) REFERENCES `stage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stagiare_ibfk_3` FOREIGN KEY (`idcompte`) REFERENCES `compte` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
