-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-cvven.alwaysdata.net
-- Generation Time: Feb 22, 2023 at 04:06 PM
-- Server version: 10.6.11-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvven_bdd_projet_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `Animation`
--

CREATE TABLE `Animation` (
  `ID` int(11) NOT NULL,
  `Nom_Anim` varchar(30) NOT NULL,
  `Vacances_Scolaire` tinyint(1) NOT NULL,
  `Hors_Vacances_Scolaire` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Animation`
--

INSERT INTO `Animation` (`ID`, `Nom_Anim`, `Vacances_Scolaire`, `Hors_Vacances_Scolaire`) VALUES
(7, 'Pêche', 1, 1),
(25, 'Moto', 1, 0),
(30, 'Kayak', 1, 0),
(35, 'Basket', 1, 1),
(36, 'Foot', 1, 1),
(37, 'Chasse', 0, 1),
(38, 'Balade Cheval', 1, 1),
(39, 'Gym Tonic', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `telephone` int(20) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `users_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`ID`, `Nom`, `Prenom`, `telephone`, `mail`, `password`, `users_type`) VALUES
(9, 'test', 'test', 548944984, 'test@test.com', '098f6bcd4621d373cade4e832627b4f6', 'user'),
(13, 'admin1', 'admin1', 548884567, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(26, 'test1', 'test1', 4655184, 'test1@test.com', '098f6bcd4621d373cade4e832627b4f6', 'user'),
(29, 'Jean', 'Baptiste', 678987334, 'jean.baptiste@gmail.com', '3056849e9b6bef41c0eb17b01bfb25bb', 'user'),
(30, 'ugfu', 'auigu', 4288834, 'ifiazi@izi.com', '098f6bcd4621d373cade4e832627b4f6', 'user'),
(31, 'yggau', 'zhguhbg', 482848, 'test2@test.com', '098f6bcd4621d373cade4e832627b4f6', 'user'),
(32, 'hash', 'hash', 874185732, 'hash@hash.com', '0800fc577294c34e0b28ad2839435945', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Hebergement`
--

CREATE TABLE `Hebergement` (
  `ID` int(11) NOT NULL,
  `Logements` varchar(40) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Hebergement`
--

INSERT INTO `Hebergement` (`ID`, `Logements`, `prix`) VALUES
(1, 'Chambre_simple', 150),
(2, 'Chambre_double', 250),
(3, 'Chambres_3_Lits', 400),
(4, 'Chambres_4_Lits', 450),
(5, 'Chambre_Handi', 200);

-- --------------------------------------------------------

--
-- Table structure for table `Region`
--

CREATE TABLE `Region` (
  `ID` int(11) NOT NULL,
  `Nom_Region` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Region`
--

INSERT INTO `Region` (`ID`, `Nom_Region`) VALUES
(4, 'Les Rousses (Jura)'),
(5, 'La Rochelle (Charente-Maritime)'),
(6, 'Saint-Anthème (Puy-de-Dôme)'),
(7, 'Villefort (Lozère)');

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `Reservation_ID` int(11) NOT NULL,
  `Hebergement_ID` int(11) NOT NULL,
  `Client_ID` int(11) NOT NULL,
  `Restauration_ID` int(11) NOT NULL,
  `Animation_ID` int(11) NOT NULL,
  `Region_ID` int(11) NOT NULL,
  `Menage` varchar(20) NOT NULL,
  `DateDebut` datetime NOT NULL,
  `DateFin` datetime NOT NULL,
  `Etat` varchar(30) NOT NULL DEFAULT 'en cours de confirmation'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`Reservation_ID`, `Hebergement_ID`, `Client_ID`, `Restauration_ID`, `Animation_ID`, `Region_ID`, `Menage`, `DateDebut`, `DateFin`, `Etat`) VALUES
(105, 2, 26, 1, 25, 5, 'Oui', '2023-01-27 00:00:00', '2023-01-29 00:00:00', 'Payer'),
(129, 3, 9, 1, 30, 5, 'Non', '2023-02-17 00:00:00', '2023-02-28 00:00:00', 'Payer');

-- --------------------------------------------------------

--
-- Table structure for table `Restauration`
--

CREATE TABLE `Restauration` (
  `ID` int(11) NOT NULL,
  `Type_Resto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Restauration`
--

INSERT INTO `Restauration` (`ID`, `Type_Resto`) VALUES
(1, 'Pension_Complete'),
(2, 'Demi_Pension'),
(3, 'Repas_Bebe'),
(4, 'Pique_nique');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Animation`
--
ALTER TABLE `Animation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `Hebergement`
--
ALTER TABLE `Hebergement`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Region`
--
ALTER TABLE `Region`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`Reservation_ID`,`Hebergement_ID`,`Client_ID`,`Restauration_ID`,`Animation_ID`,`Region_ID`,`DateDebut`,`DateFin`),
  ADD KEY `FK_ReservationHebergement` (`Hebergement_ID`),
  ADD KEY `FK_ReservationClient` (`Client_ID`),
  ADD KEY `FK_ReservationRestauration` (`Restauration_ID`),
  ADD KEY `FK_ReservationAnimation` (`Animation_ID`),
  ADD KEY `FK_ReservationRegion` (`Region_ID`),
  ADD KEY `DateDebut` (`DateDebut`);

--
-- Indexes for table `Restauration`
--
ALTER TABLE `Restauration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Animation`
--
ALTER TABLE `Animation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `Hebergement`
--
ALTER TABLE `Hebergement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Region`
--
ALTER TABLE `Region`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `Restauration`
--
ALTER TABLE `Restauration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD CONSTRAINT `FK_ReservationAnimation` FOREIGN KEY (`Animation_ID`) REFERENCES `Animation` (`ID`),
  ADD CONSTRAINT `FK_ReservationClient` FOREIGN KEY (`Client_ID`) REFERENCES `Client` (`ID`),
  ADD CONSTRAINT `FK_ReservationHebergement` FOREIGN KEY (`Hebergement_ID`) REFERENCES `Hebergement` (`ID`),
  ADD CONSTRAINT `FK_ReservationRegion` FOREIGN KEY (`Region_ID`) REFERENCES `Region` (`ID`),
  ADD CONSTRAINT `FK_ReservationRestauration` FOREIGN KEY (`Restauration_ID`) REFERENCES `Restauration` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
