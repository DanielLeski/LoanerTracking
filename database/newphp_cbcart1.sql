-- MySQL dump 10.13  Distrib 8.0.25, for macos11 (x86_64)
--
-- Host: 127.0.0.1    Database: newphp
-- ------------------------------------------------------
-- Server version	8.0.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cbcart1`
--

DROP TABLE IF EXISTS `cbcart1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cbcart1` (
  `AutoID` int NOT NULL AUTO_INCREMENT,
  `Cart` text,
  `Student_Number` text,
  `ITR` int DEFAULT NULL,
  `Serial` text,
  `Check_in` varchar(225) DEFAULT NULL,
  `Check_out` varchar(225) DEFAULT NULL,
  `Repair` varchar(45) DEFAULT '0',
  PRIMARY KEY (`AutoID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cbcart1`
--

LOCK TABLES `cbcart1` WRITE;
/*!40000 ALTER TABLE `cbcart1` DISABLE KEYS */;
INSERT INTO `cbcart1` VALUES (1,'CB #1-1',NULL,35962,'5CD9092RLQ',NULL,NULL,'0'),(2,'CB #1-2',NULL,35963,'5CD9092R5F',NULL,NULL,'0'),(3,'CB #1-3',NULL,35964,'5CD9092RWQ',NULL,NULL,'0'),(4,'CB #1-4','',35965,'5CD9092R7X',NULL,NULL,'0'),(5,'CB #1-5','',35966,'5CD9092RJV',NULL,NULL,'0'),(6,'CB #1-6','',35967,'5CD9092R9L',NULL,NULL,'0'),(7,'CB #1-7','',35968,'5CD9092R9C',NULL,NULL,'0'),(8,'CB #1-8','',35969,'5CD9092RLJ',NULL,NULL,'0'),(9,'CB #1-9','',35971,'5CD9092R3X',NULL,NULL,'0'),(10,'CB #1-10','',35973,'5CD9092T68',NULL,NULL,'0'),(11,'CB #1-11','',35974,'5CD9092QVR',NULL,NULL,'0'),(12,'CB #1-12','',35975,'5CD9092RKL',NULL,NULL,'0'),(13,'CB #1-13','',35978,'5CD9093FHH',NULL,NULL,'0'),(14,'CB #1-14','',35979,'5CD9092TBR',NULL,NULL,'0'),(15,'CB #1-15','',35980,'5CD9092RFK',NULL,NULL,'0'),(16,'CB #1-16','',35981,'5CD9092RL0',NULL,NULL,'0'),(17,'CB #1-17','',35984,'5CD9092T1Z',NULL,NULL,'0'),(18,'CB #1-18','',35985,'5CD9092RDQ',NULL,NULL,'0'),(19,'CB #1-19','',35989,'5CD9092QX7',NULL,NULL,'0'),(20,'CB #1-20','',35997,'5CD9092R2S',NULL,NULL,'0'),(21,'CB #1-21','',35998,'5CD9092RFL',NULL,NULL,'0'),(22,'CB #1-22','',35999,'5CD9092RW8',NULL,NULL,'0'),(23,'CB #1-23','',36011,'5CD9092RC5',NULL,NULL,'0'),(24,'CB #1-24',NULL,36017,'5CD9092R7F',NULL,NULL,'0'),(25,'CB #1-25',NULL,36018,'5CD9092S9H',NULL,NULL,'0'),(26,'CB #1-26',NULL,36019,'5CD9092RFC',NULL,NULL,'0'),(27,'CB #1-27','',36025,'5CD9092R4P',NULL,NULL,'0'),(28,'CB #1-28','',36026,'5CD9092RM9',NULL,NULL,'0'),(29,'CB #1-29',NULL,36027,'5CD9092RLS',NULL,NULL,'0'),(30,'CB #1-30','',36031,'5CD9092RB8',NULL,NULL,'0');
/*!40000 ALTER TABLE `cbcart1` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-14 10:35:59
