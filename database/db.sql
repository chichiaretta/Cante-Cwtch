-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versione server:              10.4.28-MariaDB - mariadb.org binary distribution
-- S.O. server:                  Win64
-- HeidiSQL Versione:            12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dump della struttura del database cwtch
CREATE DATABASE IF NOT EXISTS `cwtch` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cwtch`;

-- Dump della struttura di tabella cwtch.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cognome` char(50) DEFAULT NULL,
  `nome` char(50) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `citta` char(50) DEFAULT NULL,
  `indirizzo` char(50) DEFAULT NULL,
  `numero_civico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cwtch.cliente: ~0 rows (circa)
DELETE FROM `cliente`;

-- Dump della struttura di tabella cwtch.dipendente
CREATE TABLE IF NOT EXISTS `dipendente` (
  `cognome` char(50) DEFAULT NULL,
  `nome` char(50) DEFAULT NULL,
  `username` char(50) DEFAULT NULL,
  `password` char(50) DEFAULT NULL,
  `citta` char(50) DEFAULT NULL,
  `indirizzo` char(50) DEFAULT NULL,
  `numero_civico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cwtch.dipendente: ~0 rows (circa)
DELETE FROM `dipendente`;

-- Dump della struttura di tabella cwtch.prenotazioni
CREATE TABLE IF NOT EXISTS `prenotazioni` (
  `nome` char(50) DEFAULT NULL,
  `numero_persone` int(11) DEFAULT NULL,
  `data_prenotazione` date DEFAULT NULL,
  `ora_prenotazione` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cwtch.prenotazioni: ~0 rows (circa)
DELETE FROM `prenotazioni`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
