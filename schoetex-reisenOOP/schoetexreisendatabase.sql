-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               10.4.20-MariaDB - mariadb.org binary distribution
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Exportiere Datenbank Struktur für schoetexreisen
CREATE DATABASE IF NOT EXISTS `schoetexreisen` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `schoetexreisen`;

-- Exportiere Struktur von Tabelle schoetexreisen.angebote
CREATE TABLE IF NOT EXISTS `angebote` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Ort` varchar(50) DEFAULT NULL,
  `Preis` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle schoetexreisen.angebote: ~3 rows (ungefähr)
/*!40000 ALTER TABLE `angebote` DISABLE KEYS */;
INSERT INTO `angebote` (`ID`, `Ort`, `Preis`) VALUES
	(1, 'Griechenland', 1052),
	(2, 'Spanien', 888),
	(3, 'Malediven', 1995);
/*!40000 ALTER TABLE `angebote` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle schoetexreisen.hotels
CREATE TABLE IF NOT EXISTS `hotels` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(25) NOT NULL DEFAULT '0',
  `Ort` varchar(50) DEFAULT NULL,
  `Zimmer` int(11) NOT NULL DEFAULT 0,
  `Sterne` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle schoetexreisen.hotels: ~3 rows (ungefähr)
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` (`ID`, `Name`, `Ort`, `Zimmer`, `Sterne`) VALUES
	(1, 'Greece Beach Hotel', 'Griechenland', 3, 4),
	(2, 'Spa Villa', 'Spanien', 3, 5),
	(3, 'Luxury Resort', 'Malediven', 3, 5);
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle schoetexreisen.nachrichten
CREATE TABLE IF NOT EXISTS `nachrichten` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Vorname` varchar(50) DEFAULT NULL,
  `Nachname` varchar(50) DEFAULT NULL,
  `E-Mail` varchar(50) DEFAULT NULL,
  `Alter` int(11) DEFAULT NULL,
  `Kategorie` varchar(50) DEFAULT NULL,
  `Nachricht` text DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle schoetexreisen.nachrichten: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `nachrichten` DISABLE KEYS */;
INSERT INTO `nachrichten` (`ID`, `Vorname`, `Nachname`, `E-Mail`, `Alter`, `Kategorie`, `Nachricht`) VALUES
	(1, 'Marco', '4124', 'm.bajtl@schoetex.de', 0, 'none', '21212');
/*!40000 ALTER TABLE `nachrichten` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle schoetexreisen.zimmer
CREATE TABLE IF NOT EXISTS `zimmer` (
  `Nummer` int(11) DEFAULT NULL,
  `HotelID` int(11) DEFAULT NULL,
  `Personen` int(11) DEFAULT NULL,
  `Preis` int(11) DEFAULT NULL,
  `Verfuegbarkeit` varchar(50) DEFAULT NULL,
  KEY `FK_zimmer_hotels` (`HotelID`),
  CONSTRAINT `FK_zimmer_hotels` FOREIGN KEY (`HotelID`) REFERENCES `hotels` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Exportiere Daten aus Tabelle schoetexreisen.zimmer: ~10 rows (ungefähr)
/*!40000 ALTER TABLE `zimmer` DISABLE KEYS */;
INSERT INTO `zimmer` (`Nummer`, `HotelID`, `Personen`, `Preis`, `Verfuegbarkeit`) VALUES
	(1, 1, 2, 1263, 'Verfügbar'),
	(1, 2, 2, 2633, 'Derzeit nicht verfügbar'),
	(1, 3, 1, 1422, 'Verfügbar'),
	(2, 1, 2, 1244, 'Verfügbar'),
	(2, 2, 3, 3664, 'Verfügbar'),
	(2, 3, 2, 2446, 'Derzeit nicht verfügbar'),
	(3, 1, 1, 812, 'Verfügbar'),
	(3, 2, 2, 2069, 'Verfügbar'),
	(3, 3, 2, 2246, 'Verfügbar'),
	(4, 3, 1, 9999, 'Verfügbar');
/*!40000 ALTER TABLE `zimmer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
