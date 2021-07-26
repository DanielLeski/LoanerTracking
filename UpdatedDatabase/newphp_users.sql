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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `AutoID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `carts` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`AutoID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sdf','d9729feb74992cc3482b350163a1a010','sdf','WBCB1, WBCB2'),(2,'asd','7815696ecbf1c96e6894b779456d330e','asd','WBCB1, WBCB2'),(3,'asd','7815696ecbf1c96e6894b779456d330e','ads','WBCB1, WBCB2'),(4,'ad','523af537946b79c4f8369ed39ba78605','ad','carts'),(5,'12','c20ad4d76fe97759aa27a0c99bff6710','12',NULL),(6,'asd','7815696ecbf1c96e6894b779456d330e','asd','WBCB1, WBCB2'),(7,'asd','7815696ecbf1c96e6894b779456d330e','asd','WBCB1, WBCB2'),(8,'asd','7815696ecbf1c96e6894b779456d330e','asd','WBCB1, WBCB2'),(9,'asd','7815696ecbf1c96e6894b779456d330e','asd','WBCB1, WBCB2'),(10,'asdasd','a8f5f167f44f4964e6c998dee827110c','asdasd','WBCB1,WBCB2'),(11,'asdasd','a8f5f167f44f4964e6c998dee827110c','asdasd','WBCB1,WBCB2'),(12,'asdasd','a8f5f167f44f4964e6c998dee827110c','adsads','WBCB1,WBCB2'),(13,'sdf','d58e3582afa99040e27b92b13c8f2280','pdf','WBCB1, WBCB2'),(14,'asd','7815696ecbf1c96e6894b779456d330e','as','WBCB1, WBCB2'),(15,'sdf','d9729feb74992cc3482b350163a1a010','sdf','WBCB1, WBCB2'),(16,'sdfsdf','d58e3582afa99040e27b92b13c8f2280','sdfsdf','dsfsdfsdf'),(17,'sdfsdf','d58e3582afa99040e27b92b13c8f2280','sdfsdf','dsfsdfsdf'),(18,'asdad','056f32ee5cf49404607e368bd8d3f2af','as dads','WBCB1, WBCB2'),(19,'asdad','056f32ee5cf49404607e368bd8d3f2af','as dads','WBCB1, WBCB2'),(20,'dan','c20ad4d76fe97759aa27a0c99bff6710','admin','WBCB1,WBCB2'),(21,'dan','a01610228fe998f515a72dd730294d87','regular','WBCB1,WBCB2'),(22,'DanielLeskiewicz','c20ad4d76fe97759aa27a0c99bff6710','admin','WBCB1,WBCB2'),(23,'sdfsd','84d9cfc2f395ce883a41d7ffc1bbcf4e','admin','WBBC'),(24,'dan','9180b4da3f0c7e80975fad685f7f134e','admin','WBCB1,WBCB2'),(25,'dan','a01610228fe998f515a72dd730294d87','admin','WBCB1,WBCB2'),(26,'sa','c12e01f2a13ff5587e1e9e4aedb8242d','admin','n/a'),(27,'dan','c20ad4d76fe97759aa27a0c99bff6710','admin','WBCB1,WBCB2'),(28,'daniel','c20ad4d76fe97759aa27a0c99bff6710','admin','WBCB1,WBCB2,WBCB3'),(29,'ebuckley','c20ad4d76fe97759aa27a0c99bff6710','admin','WBCB1,WBCB2');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-26  7:41:18
