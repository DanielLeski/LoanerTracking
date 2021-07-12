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
-- Table structure for table `cbcart3`
--

DROP TABLE IF EXISTS `cbcart3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cbcart3` (
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
-- Dumping data for table `cbcart3`
--

LOCK TABLES `cbcart3` WRITE;
/*!40000 ALTER TABLE `cbcart3` DISABLE KEYS */;
INSERT INTO `cbcart3` VALUES (1,'CB #3-1','',36987,'5CD9170M5Q',NULL,NULL),(2,'CB #3-2','',36988,'5CD91719H1',NULL,NULL),(3,'CB #3-3','',36989,'5CD9171947',NULL,NULL),(4,'CB #3-4','',36443,'5CD91717HQ',NULL,NULL),(5,'CB #3-5','',400184,'5CD9413J9Y',NULL,NULL),(6,'CB #3-6','',400705,'P2098G36',NULL,NULL),(7,'CB #3-7','',400716,'P2098N2R',NULL,NULL),(8,'CB #3-8','',400770,'P2098MDB',NULL,NULL),(9,'CB #3-9','',400785,'P2098MLF',NULL,NULL),(10,'CB #3-10','',400790,'P2098G8L',NULL,NULL),(11,'CB #3-11','',402421,'PF2WG8K6',NULL,NULL),(12,'CB #3-12','',402422,'PF2WFT0W',NULL,NULL),(13,'CB #3-13','',402423,'PF2WG618',NULL,NULL),(14,'CB #3-14','',402424,'PF2WFR7X',NULL,NULL),(15,'CB #3-15','',402425,'PF2WG2RW',NULL,NULL),(16,'CB #3-16','',402426,'PF2WGF0G',NULL,NULL),(17,'CB #3-17','',402427,'PF2WFR6V',NULL,NULL),(18,'CB #3-18','',402428,'PF2WFRA5',NULL,NULL),(19,'CB #3-19','',402429,'PF2W36WV',NULL,NULL),(20,'CB #3-20','',402430,'PF2WGNKD',NULL,NULL),(21,'CB #3-21','',402431,'PF2W3FXH',NULL,NULL),(22,'CB #3-22','',402432,'PF2W3AZ6',NULL,NULL),(23,'CB #3-23','',402433,'PF2WH4PP',NULL,NULL),(24,'CB #3-24','',402434,'PF2W3CZ5',NULL,NULL),(25,'CB #3-25','',402435,'PF2W3G1Q',NULL,NULL),(26,'CB #3-26','',402436,'PF2WG2TB',NULL,NULL),(27,'CB #3-27','',402437,'PF2WGDGH',NULL,NULL),(28,'CB #3-28','',402438,'PF2WFP2S',NULL,NULL),(29,'CB #3-29','',402439,'PF2WGKRF',NULL,NULL),(30,'CB #3-30','',402440,'PF2WFP42',NULL,NULL);
/*!40000 ALTER TABLE `cbcart3` ENABLE KEYS */;
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