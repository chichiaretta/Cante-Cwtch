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

-- Dump dei dati della tabella cwtch.cliente: ~2 rows (circa)
DELETE FROM `cliente`;
INSERT INTO `cliente` (`cognome`, `nome`, `username`, `password`, `citta`, `indirizzo`, `numero_civico`) VALUES
	('Canteri', 'Riccardo', 'rickycan', 'raikonen', 'Villanova', 'Belvedere', 30),
	('Barberio', 'Chiara Angela', 'Chiara_b', 'chiara', 'Bellusco', 'Veneto', 13);

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

-- Dump dei dati della tabella cwtch.dipendente: ~2 rows (circa)
DELETE FROM `dipendente`;
INSERT INTO `dipendente` (`cognome`, `nome`, `username`, `password`, `citta`, `indirizzo`, `numero_civico`) VALUES
	('Barberio', 'Chiara Angela', 'Chiarabab', 'chiara', 'Bellusco', 'Veneto', 14),
	('Rossi', 'Luca', 'Luca_user', 'Luca', 'Milano', 'Torino', 5);

-- Dump della struttura di tabella cwtch.prenotazioni
CREATE TABLE IF NOT EXISTS `prenotazioni` (
  `username` char(50) DEFAULT NULL,
  `numero_persone` int(11) DEFAULT NULL,
  `data_prenotazione` date DEFAULT NULL,
  `ora_prenotazione` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cwtch.prenotazioni: ~2 rows (circa)
DELETE FROM `prenotazioni`;
INSERT INTO `prenotazioni` (`username`, `numero_persone`, `data_prenotazione`, `ora_prenotazione`) VALUES
	('rickycan', 4, '2023-06-05', '19:00:00'),
	('Chiara_b', 3, '2023-07-23', '19:30:00');

-- Dump della struttura di tabella cwtch.recensioni
CREATE TABLE IF NOT EXISTS `recensioni` (
  `username` char(50) DEFAULT NULL,
  `titolo` char(50) DEFAULT NULL,
  `descrizione` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cwtch.recensioni: ~0 rows (circa)
DELETE FROM `recensioni`;

-- Dump della struttura di tabella cwtch.timbra
CREATE TABLE IF NOT EXISTS `timbra` (
  `username` char(50) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `ore_lavoro` tinyint(4) DEFAULT NULL,
  `ora_inizio` time DEFAULT NULL,
  `ora_fine` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dump dei dati della tabella cwtch.timbra: ~6 rows (circa)
DELETE FROM `timbra`;
INSERT INTO `timbra` (`username`, `data`, `ore_lavoro`, `ora_inizio`, `ora_fine`) VALUES
	('Chiarabab', '2023-06-06', 4, '00:00:00', '00:00:00'),
	('Chiarabab', '2023-06-06', 4, '15:00:00', '19:00:00'),
	('Chiarabab', '2023-03-07', 2, '12:00:00', '14:00:00'),
	('Luca_user', '2023-08-07', 4, '08:00:00', '12:00:00'),
	('Chiarabab', '2023-09-09', 6, '00:00:00', '06:00:00'),
	('Chiarabab', '2023-06-07', 3, '09:00:00', '12:00:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
