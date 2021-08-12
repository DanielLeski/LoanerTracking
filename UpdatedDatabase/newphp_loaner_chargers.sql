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
-- Table structure for table `loaner_chargers`
--

DROP TABLE IF EXISTS `loaner_chargers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loaner_chargers` (
  `AutoID` int NOT NULL AUTO_INCREMENT,
  `Student_Number` int DEFAULT NULL,
  `id` int NOT NULL,
  `Check_out` varchar(255) DEFAULT NULL,
  `Check_in` varchar(255) DEFAULT NULL,
  `Repair` varchar(45) DEFAULT '0',
  PRIMARY KEY (`AutoID`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaner_chargers`
--

LOCK TABLES `loaner_chargers` WRITE;
/*!40000 ALTER TABLE `loaner_chargers` DISABLE KEYS */;
INSERT INTO `loaner_chargers` VALUES (1,NULL,401861,NULL,NULL,'0'),(2,NULL,401862,NULL,NULL,'0'),(3,NULL,401863,NULL,NULL,'0'),(4,NULL,401864,NULL,NULL,'0'),(5,NULL,401865,NULL,NULL,'0'),(6,NULL,401866,NULL,NULL,'0'),(7,NULL,401867,NULL,NULL,'0'),(8,NULL,401868,NULL,NULL,'0'),(9,NULL,401869,NULL,NULL,'0'),(10,NULL,401870,NULL,NULL,'0'),(11,NULL,401871,NULL,NULL,'0'),(12,NULL,401872,NULL,NULL,'0'),(13,NULL,401873,NULL,NULL,'0'),(14,NULL,401874,NULL,NULL,'0'),(15,NULL,401875,NULL,NULL,'0'),(16,NULL,401876,NULL,NULL,'0'),(17,NULL,401877,NULL,NULL,'0'),(18,NULL,401878,NULL,NULL,'0'),(19,NULL,401879,NULL,NULL,'0'),(20,NULL,401880,NULL,NULL,'0'),(21,NULL,401881,NULL,NULL,'0'),(22,NULL,401882,NULL,NULL,'0'),(23,NULL,401883,NULL,NULL,'0'),(24,NULL,401884,NULL,NULL,'0'),(25,NULL,401885,NULL,NULL,'0'),(26,NULL,401886,NULL,NULL,'0'),(27,NULL,401887,NULL,NULL,'0'),(28,NULL,401888,NULL,NULL,'0'),(29,NULL,401889,NULL,NULL,'0'),(30,NULL,401890,NULL,NULL,'0'),(31,NULL,401891,NULL,NULL,'0'),(32,NULL,401892,NULL,NULL,'0');
/*!40000 ALTER TABLE `loaner_chargers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-26  7:41:19