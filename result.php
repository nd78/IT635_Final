-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: blood_bank
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Donors`
--

DROP TABLE IF EXISTS `Donors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Donors` (
  `Name` varchar(100) DEFAULT NULL,
  `Last Name` varchar(100) DEFAULT NULL,
  `ID` varchar(32) NOT NULL,
  `Blood Group` varchar(10) DEFAULT NULL,
  `Age` int(4) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Date` int(8) DEFAULT NULL,
  `Bank Name` varchar(150) DEFAULT NULL,
  `Bank City` varchar(150) DEFAULT NULL,
  `Bank Phone Number` varchar(100) DEFAULT NULL,
  `Contact Information` varchar(100) DEFAULT NULL,
  `Bank Email` varchar(100) DEFAULT NULL,
  `Blood Testing Status` varchar(100) DEFAULT NULL,
  `Blood Status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Donors`
--

LOCK TABLES `Donors` WRITE;
/*!40000 ALTER TABLE `Donors` DISABLE KEYS */;
INSERT INTO `Donors` VALUES ('David','Smith','111','O-',45,'Passaic','879-987-6666','ds@gmail.com',12022016,'New Blood','Kearny','999-999-0000','Maria Gonzalez','mg@new.com','Passed','New'),('Jenny','Garcia','112','O-',23,'Clifton','345-789-1234','jg@gmail.com',6122017,'Red Hearth ','Clifton','201-234-1111','Joseph Mill','jm@red.com','Passed','New'),('Amalia','Kipp','113','A+',38,'Newark','456-900-8999','',3202017,'New Blood','Kearny','','','','Passed','New'),('Manuel ','Turbay','114','AB-',29,'Garfield','','tt@hn.com',4072015,'Red Hearth','Clifton','201-234-1111','Joseph Mill','jm@red.com','Failed','Old'),('Jed','Mark','115','A+',19,'Kearny','','',12032015,'New Blood','Clifton','201-234-1111','Joseph Mill','jm@red.com','Failed','New');
/*!40000 ALTER TABLE `Donors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` int(2) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'nady','c3aeb7e24a0c45ab7eab2dd7bcbefed970501490',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-12 20:19:27
