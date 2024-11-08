-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-arthurm.alwaysdata.net
-- Generation Time: Nov 08, 2024 at 07:35 PM
-- Server version: 10.11.9-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arthurm_terredesanges`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `Email` varchar(50) NOT NULL DEFAULT 'laetitia.dhugues@orange.fr',
  `Location` varchar(150) NOT NULL DEFAULT '5 Rue du Four à Pain, 12220 Peyrusse-le-Roc',
  `Phone` varchar(20) NOT NULL DEFAULT '06 86 51 58 72',
  `Facebook` varchar(120) NOT NULL DEFAULT 'https://www.facebook.com/laterredesangespeyrusse/?locale=fr_FR'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`Email`, `Location`, `Phone`, `Facebook`) VALUES
('laetitia.dhugues@orange.fr', '5 Rue du Four à Pain, 12220 Peyrusse-le-Roc', '06 86 51 58 72', 'https://www.facebook.com/laterredesangespeyrusse/');

-- --------------------------------------------------------

--
-- Table structure for table `Description`
--

CREATE TABLE `Description` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `prix` varchar(6) NOT NULL,
  `alt` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Description`
--

INSERT INTO `Description` (`id`, `titre`, `description`, `image`, `prix`, `alt`) VALUES
(1, 'Pot suspendu Agave', 'Petit pot suspendu pour mettre une petite plante. <br> Ici avec une Agave. <br> Prix affiché vendu avec la plante.', '4suspenduAgave.jpg', '32', 'Pot 4 suspendu avec agave'),
(10, 'Pot suspendu 9', 'Petit pot suspendu pour mettre une petite plante. <br> \r\nPrix affiché vendu avec la plante.', 'Pot9.jpg', '32', 'Pot suspendu 9'),
(11, 'Pot suspendu uni', 'Petit pot suspendu uni blanc  pour mettre une petite plante.<br>\r\nPrix affiché vendu avec la plante.', 'PotSuspendu2.jpg', '32', 'Pot suspendu bicolore');

-- --------------------------------------------------------

--
-- Table structure for table `Presentation`
--

CREATE TABLE `Presentation` (
  `id` int(11) NOT NULL,
  `texte` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Presentation`
--

INSERT INTO `Presentation` (`id`, `texte`) VALUES
(1, 'Ma terre de prédilection ? La porcelaine, la terre des anges.<br />\r\nElle évoque et inspire tout à la fois finesse, douceur, légèreté et élégance.<br />\r\nPar un tour de main précis et sensible, je cherche à en révéler les caractéristiques.<br />\r\nJe crée et façonne de A à Z des objets du quotidien qui allient robustesse et élégance. Je développe des collections de vaisselle utilitaire, parce que j’aime voir la beauté s’installer dans nos quotidiens et rajouter un peu de bonheur à nos vies.<br />\r\nJe travaille également sur commande, n’hésitez pas à me contacter pour plus de renseignements.');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`, `isAdmin`) VALUES
(0, 'admin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Description`
--
ALTER TABLE `Description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Presentation`
--
ALTER TABLE `Presentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Description`
--
ALTER TABLE `Description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Presentation`
--
ALTER TABLE `Presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
