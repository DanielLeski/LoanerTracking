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
-- Table structure for table `cbcart2`
--

DROP TABLE IF EXISTS `cbcart2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cbcart2` (
  `AutoID` int NOT NULL AUTO_INCREMENT,
  `Cart` text,
  `Student_Number` text,
  `ITR` int DEFAULT NULL,
  `Serial` text,
  `Check_in` varchar(225) DEFAULT NULL,
  `Check_out` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`AutoID`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cbcart2`
--

LOCK TABLES `cbcart2` WRITE;
/*!40000 ALTER TABLE `cbcart2` DISABLE KEYS */;
INSERT INTO `cbcart2` VALUES (1,'CB #2-1','232323',36035,'5CD9092RFB','2021-07-01 14:34:24','2021-07-01 14:30:37'),(2,'CB #2-2','',36039,'5CD9092RRV',NULL,NULL),(3,'CB #2-3','',36040,'5CD9092S64',NULL,NULL),(4,'CB #2-4','',36071,'5CD9095P5K',NULL,NULL),(5,'CB #2-5','',36072,'5CD9095P5J',NULL,NULL),(6,'CB #2-6','',36881,'5CD91717X0',NULL,NULL),(7,'CB #2-7','',36890,'5CD9170LJ0',NULL,NULL),(8,'CB #2-8','',36897,'5CD9170M19',NULL,NULL),(9,'CB #2-9','',36898,'5CD918083D',NULL,NULL),(10,'CB #2-10','',36899,'5CD9170L08',NULL,NULL),(11,'CB #2-11','',36900,'5CD9170KP0',NULL,NULL),(12,'CB #2-12','',36901,'5CD917174D',NULL,NULL),(13,'CB #2-13','',36902,'5CD91718HY',NULL,NULL),(14,'CB #2-14','',36903,'5CD9170L3K',NULL,NULL),(15,'CB #2-15','',36905,'5CD91718GV',NULL,NULL),(16,'CB #2-16','',36910,'5CD917194B',NULL,NULL),(17,'CB #2-17','',36911,'5CD9170M5J',NULL,NULL),(18,'CB #2-18','',36912,'5CD9171BP8',NULL,NULL),(19,'CB #2-19','',36913,'5CD91716X5',NULL,NULL),(20,'CB #2-20','',36914,'5CD91718BC',NULL,NULL),(21,'CB #2-21','',36915,'5CD9170L55',NULL,NULL),(22,'CB #2-22','',36916,'5CD9170KYJ',NULL,NULL),(23,'CB #2-23','',36918,'5CD91716XT',NULL,NULL),(24,'CB #2-24','',36919,'5CD91718SN',NULL,NULL),(25,'CB #2-25','',36920,'5CD91716YY',NULL,NULL),(26,'CB #2-26','',36981,'5CD9171731',NULL,NULL),(27,'CB #2-27','',36982,'5CD917181J',NULL,NULL),(28,'CB #2-28','',36983,'5CD9171BLX',NULL,NULL),(29,'CB #2-29','',36984,'5CD91718SW',NULL,NULL),(30,'CB #2-30','',36986,'5CD91717V9',NULL,NULL);
/*!40000 ALTER TABLE `cbcart2` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-01 14:19:54
