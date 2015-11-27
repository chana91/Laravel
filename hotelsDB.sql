-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.32 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for hotels
CREATE DATABASE IF NOT EXISTS `hotels` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hotels`;


-- Dumping structure for table hotels.city
CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table hotels.city: ~5 rows (approximately)
/*!40000 ALTER TABLE `city` DISABLE KEYS */;
INSERT INTO `city` (`id`, `city`) VALUES
	(1, 'Kandy'),
	(2, 'Colombo'),
	(3, 'Matara'),
	(4, 'Galle'),
	(5, 'Ambalangoda');
/*!40000 ALTER TABLE `city` ENABLE KEYS */;


-- Dumping structure for table hotels.hotel
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(150) NOT NULL DEFAULT '0',
  `cityId` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `FKcity` (`cityId`),
  CONSTRAINT `FKcity` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table hotels.hotel: ~14 rows (approximately)
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` (`id`, `name`, `address`, `cityId`) VALUES
	(2, 'Kandy City Hotel', 'No.14, Kandy', 1),
	(3, 'OZO Kandy', 'No.18, Kandy', 1),
	(4, 'Cinnamon Red', 'No 28,Colombo', 2),
	(5, 'Cinnamon Grand', 'Galle Face Beach, Colombo', 2),
	(6, 'The kingsbury', 'Fort,Colombo', 2),
	(8, 'Taj Samudra', 'Galle Face beach,Colombo', 2),
	(9, 'The Elephant Stable', 'Ahangama,Galle', 4),
	(10, 'Sky Pavilion', 'Unawatuna, Galle', 4),
	(11, 'Amaya Hills', 'Kamburugamuwa,Matara', 3),
	(12, 'Sweet Cinnamon', 'Mirissa,Matara', 3),
	(13, 'Hotel Sunray', 'No,17, Weligama, Matara', 3),
	(14, 'Royal Tourist', 'No.14, Ambalangoda', 5),
	(15, 'The grand Kandyan', 'No:12, Kandy', 1),
	(16, 'Hotel Suisse', 'No,11,Ambalangoda', 5);
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
