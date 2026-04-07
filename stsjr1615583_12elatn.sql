-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2026 at 11:49 AM
-- Server version: 10.11.16-MariaDB-deb12
-- PHP Version: 8.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stsjr1615583_12elatn`
--

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_demande_info`
--

CREATE TABLE `linkretz_viator_demande_info` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telephone` varchar(14) DEFAULT NULL,
  `deja_contacte` char(1) DEFAULT NULL,
  `code_pays` char(2) DEFAULT NULL,
  `besoin` varchar(300) DEFAULT NULL,
  `besoin_en` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_employe`
--

CREATE TABLE `linkretz_viator_employe` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `idfonction` int(11) NOT NULL,
  `telephone` varchar(14) NOT NULL,
  `compte` varchar(40) DEFAULT NULL,
  `mot_de_passe` varchar(250) DEFAULT NULL,
  `reset_token_hash` varchar(255) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL,
  `code_profil` char(1) DEFAULT NULL,
  `premier_connexion` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `linkretz_viator_employe`
--

INSERT INTO `linkretz_viator_employe` (`id`, `nom`, `prenom`, `idfonction`, `telephone`, `compte`, `mot_de_passe`, `reset_token_hash`, `reset_token_expires_at`, `code_profil`, `premier_connexion`) VALUES
(2, 'Mjoud', 'Perrine', 1, '+33617736680', 'mjoudp', '$2y$10$Wr35kfb.4feL8VuxzwT/5Oheomp1ytSwveoatfBYgPBbTEpjEHg4y', NULL, NULL, 'A', 1),
(3, 'Foulinos', 'Romain', 2, '+33665432700', 'foulinosr', '$2y$10$TRHTNspHKxnMX5GMAFBQJeW9gttPG0NexleAWjJIBZzWzD3U0aaSi', NULL, NULL, 'E', 1),
(4, 'Lebos', 'Agnès', 3, '+33730734545', 'lebosa', '$2y$10$E3oc2J65Wwz202KQRkvDPeqLpqSzvo3A7GZA852qJpR6zkFR.JhhW', NULL, NULL, 'E', 1),
(5, 'Pratt', 'Gary', 3, '+33633224521', 'prattg', '$2y$10$m1Mt631NY4Lf4n/oM5nxKu9gzPZBNDG5N/U4CYH9yVDP0BmOAWSRS', NULL, NULL, 'E', 1),
(1, 'Viator', 'Lenny', 4, '+33621160159', 'viatorl', '$2y$10$T/YwPawz9JY/mTuto0nIjegbJEq8MH08ejRX2sYojVvdTtccCjDve', NULL, NULL, 'A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_fonction`
--

CREATE TABLE `linkretz_viator_fonction` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `libelle_en` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `linkretz_viator_fonction`
--

INSERT INTO `linkretz_viator_fonction` (`id`, `libelle`, `libelle_en`) VALUES
(1, 'Responsable de l\'agence', 'Head of the agency'),
(2, 'Comptable', 'Accountant'),
(3, 'Commercial', 'Commercial'),
(4, 'Administrateur Informatique', 'IT admin');

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_horaire_ouverture`
--

CREATE TABLE `linkretz_viator_horaire_ouverture` (
  `id` int(11) NOT NULL,
  `jour` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `horaire_matin` varchar(15) DEFAULT NULL,
  `morning_schedule` varchar(20) DEFAULT NULL,
  `horaire_aprem` varchar(15) DEFAULT NULL,
  `afternoon_schedule` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `linkretz_viator_horaire_ouverture`
--

INSERT INTO `linkretz_viator_horaire_ouverture` (`id`, `jour`, `day`, `horaire_matin`, `morning_schedule`, `horaire_aprem`, `afternoon_schedule`) VALUES
(1, 'Lundi', 'Monday', '10h30 à 12h30', '10:30 AM to 12:30 PM', '14h00 à 18h30', '14:00PM to 18:30 PM'),
(2, 'Mardi', 'Tuesday', '8h30 à 12h30', '08:30 AM to 12:30 PM', '14h00 à 18h30', '14:00PM to 18:30 PM'),
(3, 'Mercredi', 'Wednesday', '10h30 à 12h30', '10:30 AM to 12:30 PM', '13h30 à 20h00', '13:00PM to 20:00 PM'),
(4, 'Jeudi', 'Thursday', '10h30 à 12h30', '10:30 AM to 12:30 PM', '13h30 à 19h00', '13:30PM to 19:00 PM'),
(5, 'Vendredi', 'Friday', '9h00 à 12h30', '09:00 AM to 12:30 PM', '13h30 à 20h00', '13:30PM to 20:00 PM'),
(6, 'Samedi', 'Saturday', '9h00 à 12h30', '09:00AM to 12:30 PM', '13h30 à 20h00', '13:00PM to 20:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_pays`
--

CREATE TABLE `linkretz_viator_pays` (
  `code` char(2) NOT NULL,
  `libelle` varchar(75) DEFAULT NULL,
  `libelle_en` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkretz_viator_pays`
--

INSERT INTO `linkretz_viator_pays` (`code`, `libelle`, `libelle_en`) VALUES
('CN', 'Chine', 'China'),
('DE', 'Allemagne', 'Germany'),
('DK', 'Danemark', 'Denmark'),
('ES', 'Espagne', 'Spain'),
('GR', 'Grèce', 'Greece'),
('IT', 'Italie', 'Italy'),
('NO', 'Norvège', 'Norway'),
('SE', 'Suède', 'Sweden');

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_profil`
--

CREATE TABLE `linkretz_viator_profil` (
  `code` char(2) NOT NULL,
  `libelle` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkretz_viator_profil`
--

INSERT INTO `linkretz_viator_profil` (`code`, `libelle`) VALUES
('A', 'Administrateur'),
('E', 'Employé');

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_promotion`
--

CREATE TABLE `linkretz_viator_promotion` (
  `id` int(11) NOT NULL,
  `intitule` varchar(75) NOT NULL,
  `duree` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_thematique` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `linkretz_viator_promotion`
--

INSERT INTO `linkretz_viator_promotion` (`id`, `intitule`, `duree`, `prix`, `id_thematique`) VALUES
(1, 'Un Trek au Guatemala à la recherche d\'une pyramide maya', '14 jours', 2000, 1),
(2, 'Balades en chiens de traînaux au coeur de la Laponie finalandaise', '8 jours', 1200, 1),
(3, 'Partagez la vie d\'un berger dans les pyrénées', '5 jours', 500, 2),
(4, 'Partagez la vie d\'une éleveuse d\'alpages dans le finistère', '6 jours', 350, 2),
(5, 'Voyagez avec un chamane au Pérou', '14 jours', 1700, 3),
(6, 'Deux semaines dans un monastère bouddhiste à Katmandou', '10 jours', 1200, 3),
(7, 'Le voyage pour aller au Portugal', '15 jours', 1250, 2);

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_specialite`
--

CREATE TABLE `linkretz_viator_specialite` (
  `id` int(11) NOT NULL,
  `libelle` varchar(75) NOT NULL,
  `libelle_en` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `linkretz_viator_specialite`
--

INSERT INTO `linkretz_viator_specialite` (`id`, `libelle`, `libelle_en`) VALUES
(1, 'Séjours scandinaves', 'Scandinavian Stays'),
(2, 'Séjours en Asie', 'Asian Stays'),
(3, 'Séjours dans le bassin méditerranéen', 'Mediterranean Basin Stays'),
(4, 'Séjours en Italie', 'Italian Stays');

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_thematique`
--

CREATE TABLE `linkretz_viator_thematique` (
  `id` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `linkretz_viator_thematique`
--

INSERT INTO `linkretz_viator_thematique` (`id`, `libelle`) VALUES
(1, 'Treks & randonnées'),
(2, 'Avec des animaux'),
(3, 'Insolite');

-- --------------------------------------------------------

--
-- Table structure for table `linkretz_viator_tour_operateur`
--

CREATE TABLE `linkretz_viator_tour_operateur` (
  `id` int(11) NOT NULL,
  `num_immat` varchar(11) NOT NULL,
  `nom` varchar(75) NOT NULL,
  `nom_en` varchar(75) NOT NULL,
  `description` varchar(400) NOT NULL,
  `description_en` varchar(400) NOT NULL,
  `id_specialite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `linkretz_viator_tour_operateur`
--

INSERT INTO `linkretz_viator_tour_operateur` (`id`, `num_immat`, `nom`, `nom_en`, `description`, `description_en`, `id_specialite`) VALUES
(1, 'M2356437843', 'Benett Voyages', 'Benett Voyages', 'Spécialiste des séjours scandinaves (Suède, Finlande, Laponie...), Benett Voyages a pour but de partager sa passion des cultures nordiques. Pour cela, le tour opérateur propose un large choix de circuits, de croisières, de séjours ou encore de week-ends.', 'Specialist in Scandinavian travel (Sweden, Finland, Lapland...), Benett Voyages aims to share its passion for northern cultures. For this, the tour operator offers a wide choice of tours, cruises, stays or weekends.', 1),
(2, 'M2353447820', 'Climats du Monde', 'Climates of the World', 'Spécialiste de l\'Asie, le voyagiste Climats du Monde offre une large gamme de circuits et de séjours aux meilleurs tarifs, ainsi que de nombreux voyages thématiques (sport, culture, zen). Avec Climats du Monde, la Thaïlande, le Vietnam ou encore le Népal sont à portée de main.', 'Specialist in Asia, the tour operator Climats du Monde offers a wide range of tours and stays at the best prices, as well as many thematic trips (sport, culture, zen). With Climats du Monde, Thailand, Vietnam or Nepal are within reach.', 2),
(3, 'M2311117866', 'Donatello', 'Donatello', 'Spécialiste de l\'Italie, le voyagiste Donatello propose un large choix de séjours, de week-ends, de circuits ou de voyages personnalisés vers de nombreuses destinations, à linstar de l\'Italie et ses îles la Sicile et la Sardaigne, mais aussi le Portugal, Malte ou encore le Kenya.', 'Specialist in Italy, the tour operator Donatello offers a wide choice of stays, weekends, tours or customized trips to many destinations, including Italy and its islands Sicily and Sardinia, but also Portugal, Malta or Kenya.', 4),
(4, 'M2312232211', 'Visiteurs en Asie', 'Visitors to Asia', 'Avec des destinations phares comme la Thaïlande, l\'Indonésie ou encore le Vietnam, Visiteurs en Asie permet de voyager vers plus de 30 destinations. Sélectionnés avec soin, les séjours et circuits de Visiteurs en Asie répondent aux attentes des voyageurs.', 'With top destinations such as Thailand, Indonesia or Vietnam, Visitors in Asia allows you to travel to more than 30 destinations. Carefully selected, the stays and tours of Visitors in Asia meet the expectations of travelers.', 2),
(5, 'M2356227844', 'Marmara', 'Marmara', 'Spécialiste des voyages dans le bassin méditerranéen, Marmara propose à ses clients une large gamme de circuits, de séjours et de croisières et à la particularité de posséder plusieurs clubs. Parmi ses destinations phares citons la Grèce, la Turquie ou encore l\'Egypte.', 'Specialist in travel in the Mediterranean basin, Marmara offers its customers a wide range of tours, stays and cruises and the particularity of having several clubs. Among its flagship destinations are Greece, Turkey and Egypt.', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `linkretz_viator_demande_info`
--
ALTER TABLE `linkretz_viator_demande_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_pays` (`code_pays`);

--
-- Indexes for table `linkretz_viator_employe`
--
ALTER TABLE `linkretz_viator_employe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idfonction` (`idfonction`),
  ADD KEY `code_profil` (`code_profil`);

--
-- Indexes for table `linkretz_viator_fonction`
--
ALTER TABLE `linkretz_viator_fonction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkretz_viator_horaire_ouverture`
--
ALTER TABLE `linkretz_viator_horaire_ouverture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkretz_viator_pays`
--
ALTER TABLE `linkretz_viator_pays`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `linkretz_viator_profil`
--
ALTER TABLE `linkretz_viator_profil`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `linkretz_viator_promotion`
--
ALTER TABLE `linkretz_viator_promotion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_thematique` (`id_thematique`);

--
-- Indexes for table `linkretz_viator_specialite`
--
ALTER TABLE `linkretz_viator_specialite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkretz_viator_thematique`
--
ALTER TABLE `linkretz_viator_thematique`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linkretz_viator_tour_operateur`
--
ALTER TABLE `linkretz_viator_tour_operateur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_id_specialite` (`id_specialite`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `linkretz_viator_demande_info`
--
ALTER TABLE `linkretz_viator_demande_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `linkretz_viator_employe`
--
ALTER TABLE `linkretz_viator_employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `linkretz_viator_fonction`
--
ALTER TABLE `linkretz_viator_fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `linkretz_viator_horaire_ouverture`
--
ALTER TABLE `linkretz_viator_horaire_ouverture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `linkretz_viator_promotion`
--
ALTER TABLE `linkretz_viator_promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `linkretz_viator_specialite`
--
ALTER TABLE `linkretz_viator_specialite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `linkretz_viator_thematique`
--
ALTER TABLE `linkretz_viator_thematique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `linkretz_viator_tour_operateur`
--
ALTER TABLE `linkretz_viator_tour_operateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `linkretz_viator_demande_info`
--
ALTER TABLE `linkretz_viator_demande_info`
  ADD CONSTRAINT `linkretz_viator_demande_info_ibfk_1` FOREIGN KEY (`code_pays`) REFERENCES `linkretz_viator_pays` (`code`);

--
-- Constraints for table `linkretz_viator_promotion`
--
ALTER TABLE `linkretz_viator_promotion`
  ADD CONSTRAINT `FK_id_thematique` FOREIGN KEY (`id_thematique`) REFERENCES `linkretz_viator_thematique` (`id`);

--
-- Constraints for table `linkretz_viator_tour_operateur`
--
ALTER TABLE `linkretz_viator_tour_operateur`
  ADD CONSTRAINT `FK_id_specialite` FOREIGN KEY (`id_specialite`) REFERENCES `linkretz_viator_specialite` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
