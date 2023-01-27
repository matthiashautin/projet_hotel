-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql-cvven.alwaysdata.net
-- Generation Time: Jan 25, 2023 at 06:25 PM
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
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `Reservation_ID` int(11) NOT NULL,
  `Hebergement_ID` int(11) NOT NULL,
  `Client_ID` int(11) NOT NULL,
  `Restauration_ID` int(11) NOT NULL,
  `Animation_ID` int(11) NOT NULL,
  `Region_ID` int(11) NOT NULL,
  `Menage` tinyint(2) NOT NULL DEFAULT 1,
  `DateDebut` datetime NOT NULL,
  `DateFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Reservation`
--

INSERT INTO `Reservation` (`Reservation_ID`, `Hebergement_ID`, `Client_ID`, `Restauration_ID`, `Animation_ID`, `Region_ID`, `Menage`, `DateDebut`, `DateFin`) VALUES
(22, 1, 29, 2, 25, 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 2, 9, 1, 35, 5, 1, '2023-01-25 18:21:21', '2023-01-25 18:21:21'),
(26, 2, 9, 1, 35, 5, 0, '2023-01-25 18:21:21', '2023-01-25 18:21:21');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Reservation`
--
ALTER TABLE `Reservation`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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