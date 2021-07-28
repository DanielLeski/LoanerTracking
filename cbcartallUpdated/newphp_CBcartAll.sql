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
-- Table structure for table `CBcartAll`
--

DROP TABLE IF EXISTS `CBcartAll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `CBcartAll` (
  `AutoID` int NOT NULL AUTO_INCREMENT,
  `Device` text,
  `Student_Number` text,
  `ITR` int DEFAULT NULL,
  `SERIAL` text,
  `Check_in` varchar(45) DEFAULT NULL,
  `Check_out` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `Availability` varchar(45) DEFAULT '0',
  `LongTermRepair` varchar(10) DEFAULT '0',
  `StudentDeviceInRepair` varchar(45) DEFAULT NULL,
  `ReferenceToCart` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`AutoID`),
  KEY `ReferenceToCart_idx` (`ReferenceToCart`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `CBcartAll`
--

LOCK TABLES `CBcartAll` WRITE;
/*!40000 ALTER TABLE `CBcartAll` DISABLE KEYS */;
INSERT INTO `CBcartAll` VALUES (1,'WBCB1-1','',35866,'5CD9092SYX','','','0','0','','1'),(2,'WBCB1-2','',35335,'5CD9092RQS','','','0','0','','1'),(3,'WBCB1-3','',401246,'5CD9092T4Z','','','0','0','','1'),(4,'WBCB1-4','',34912,'5CD9095P4X','','','0','0','','1'),(5,'WBCB1-5','',35203,'5CD9092S8S','','','0','0','','1'),(6,'WBCB1-6','',35215,'5CD9092S9J','','','0','0','','1'),(7,'WBCB1-7','',35166,'5CD9095NPV','','','0','0','','1'),(8,'WBCB1-8','',35268,'5CD9092T99','','','0','0','','1'),(9,'WBCB1-9','',35030,'5CD9095M4T','','','0','0','','1'),(10,'WBCB1-10','',34974,'5CD9095P2X','','','0','0','','1'),(11,'WBCB1-11','',34931,'5CD9095NWH','','','0','0','','1'),(12,'WBCB1-12','',35128,'5CD9095P7P','','','0','0','','1'),(13,'WBCB1-13','',35250,'5CD9092T5T','','','0','0','','1'),(14,'WBCB1-14','',35109,'5CD9095M1B','','','0','0','','1'),(15,'WBCB1-15','',34889,'5CD9095P3R','','','0','0','','1'),(16,'WBCB1-16','',30388,'5CD9413J71','','','0','0','','1'),(17,'WBCB1-17','',34950,'5CD9095P2W','','','0','0','','1'),(18,'WBCB1-18','',35102,'5CD9095LWZ','','','0','0','','1'),(19,'WBCB1-19','',35292,'5CD9092T20','','','0','0','','1'),(20,'WBCB1-20','',35213,'5CD9092S5V','','','0','0','','1'),(21,'WBCB1-21','',36812,'5CD91719T3','','','0','0','','1'),(22,'WBCB1-22','',35004,'5CD9095NZM','','','0','0','','1'),(23,'WBCB1-23','',35330,'5CD9092S04','','','0','0','','1'),(24,'WBCB1-24','',35336,'5CD9092RP7','','','0','0','','1'),(25,'WBCB1-25','',35072,'5CD9095M21','','','0','0','','1'),(26,'WBCB1-26','',35014,'5CD9095P27','','','0','0','','1'),(27,'WBCB1-27','',35311,'5CD9092SKL','','','0','0','','1'),(28,'WBCB1-28','',35120,'5CD9095M0N','','','0','0','','1'),(29,'WBCB1-29','',35214,'5CD9092SKQ','','','0','0','','1'),(30,'WBCB1-30','',34972,'5CD9095P2N','','','0','0','','1'),(31,'WBCB2-1','',401244,'5CD9095NSN','','','0','0','','2'),(32,'WBCB3-2','',35049,'5CD9095NTS','','','0','0','','2'),(33,'WBCB2-3','',35381,'5CD9092R29','','','0','0','','2'),(34,'WBCB2-4','',35150,'5CD9095LYK','','','0','0','','2'),(35,'WBCB2-5','',34934,'5CD9095P3F','','','0','0','','2'),(36,'WBCB2-6','',35390,'5CD9092RQY','','','0','0','','2'),(37,'WBCB2-7','',35326,'5CD9093FCK','','','0','0','','2'),(38,'WBCB2-8','',34984,'5CD9095P2V','','','0','0','','2'),(39,'WBCB2-9','',35056,'5CD9095M39','','','0','0','','2'),(40,'WBCB2-10','',35148,'5CD9095LX8','','','0','0','','2'),(41,'WBCB2-11','',35116,'5CD9095LZG','','','0','0','','2'),(42,'WBCB2-12','',34936,'5CD9095P2M','','','0','0','','2'),(43,'WBCB2-13','',34943,'5CD9095P30','','','0','0','','2'),(44,'WBCB2-14','',35164,'5CD9095LZ2','','','0','0','','2'),(45,'WBCB2-15','',35074,'5CD9095MSX','','','0','0','','2'),(46,'WBCB2-16','',35031,'5CD9095M4K','','','0','0','','2'),(47,'WBCB2-17','',34910,'5CD9095P46','','','0','0','','2'),(48,'WBCB2-18','',34949,'5CD9095P48','','','0','0','','2'),(49,'WBCB2-19','',35142,'5CD9095NS0','','','0','0','','2'),(50,'WBCB2-20','',35093,'5CD9095M2D','','','0','0','','2'),(51,'WBCB2-21','',35404,'5CD9092R8F','','','0','0','','2'),(52,'WBCB2-22','',35026,'5CD9095NZQ','','','0','0','','2'),(53,'WBCB2-23','',34964,'5CD9095P2H','','','0','0','','2'),(54,'WBCB2-24','',35013,'5CD9095P1K','','','0','0','','2'),(55,'WBCB2-25','',35320,'5CD9092SVZ','','','0','0','','2'),(56,'WBCB2-26','',34989,'5CD9095P13','','','0','0','','2'),(57,'WBCB2-27','',35299,'5CD9092R7T','','','0','0','','2'),(58,'WBCB2-28','',34969,'5CD9095P2R','','','0','0','','2'),(59,'WBCB2-29','',35346,'5CD9092R7S','','','0','0','','2'),(60,'WBCB2-30','',35561,'5CD9093DVQ','','','0','0','','2'),(61,'WBCB3-1','',35132,'5CD9095LYV','','','0','0','','3'),(62,'WBCB3-2','',34942,'5CD9095P38','','','0','0','','3'),(63,'WBCB3-3','',35070,'5CD9095M4N','','','0','0','','3'),(64,'WBCB3-4','',34921,'5CD9095NYB','','','0','0','','3'),(65,'WBCB3-5','',35409,'5CD9092RCQ','','','0','0','','3'),(66,'WBCB3-6','',35119,'5CD9095M0K','','','0','0','','3'),(67,'WBCB3-7','',35302,'5CD9093FH3','','','0','0','','3'),(68,'WBCB3-8','',35015,'5CD9095P1C','','','0','0','','3'),(69,'WBCB3-9','',35135,'5CD9095NXF','','','0','0','','3'),(70,'WBCB3-10','',35259,'5CD9092SMZ','','','0','0','','3'),(71,'WBCB3-11','',35327,'5CD9092SD8','','','0','0','','3'),(72,'WBCB3-12','',35134,'5CD9095M8X','','','0','0','','3'),(73,'WBCB3-13','',35118,'5CD9095P6V','','','0','0','','3'),(74,'WBCB3-14','',35182,'5CD9095NXN','','','0','0','','3'),(75,'WBCB3-15','',35040,'5CD9095M3Q','','','0','0','','3'),(76,'WBCB3-16','',34987,'5CD9095P19','','','0','0','','3'),(77,'WBCB3-17','',35140,'5CD9095NR4','','','0','0','','3'),(78,'WBCB3-18','',35094,'5CD9095M24','','','0','0','','3'),(79,'WBCB3-19','',35310,'5CD9092S3Q','','','0','0','','3'),(80,'WBCB3-20','',35365,'5CD9092SCB','','','0','0','','3'),(81,'WBCB3-21','',34977,'5CD9095NTF','','','0','0','','3'),(82,'WBCB3-22','',35309,'5CD9093FD5','','','0','0','','3'),(83,'WBCB3-23','',35047,'5CD9095M3W','','','0','0','','3'),(84,'WBCB3-24','',35238,'5CD9092T8B','','','0','0','','3'),(85,'WBCB3-25','',35162,'5CD9095LXW','','','0','0','','3'),(86,'WBCB3-26','',35306,'5CD9093FF0','','','0','0','','3'),(87,'WBCB3-27','',35639,'5CD9095NZ3','','','0','0','','3'),(88,'WBCB3-28','',35686,'5CD9095NZ4','','','0','0','','3'),(89,'WBCB3-29','',34935,'5CD9095P3T','','','0','0','','3'),(90,'WBCB3-30','',34944,'5CD9095MDT','','','0','0','','3'),(91,'WBCB4-1','',35246,'5CD9092R5D','','','0','0','','4'),(92,'WBCB4-2','',35338,'5CD9092RS3','','','0','0','','4'),(93,'WBCB4-3','',35078,'5CD9095LZZ','','','0','0','','4'),(94,'WBCB4-4','',35387,'5CD9092RLH','','','0','0','','4'),(95,'WBCB4-5','',35055,'5CD9095M5L','','','0','0','','4'),(96,'WBCB4-6','',35376,'5CD9092SLR','','','0','0','','4'),(97,'WBCB4-7','',36036,'5CD9092RCJ','','','0','0','','4'),(98,'WBCB4-8','',35341,'5CD9092RNC','','','0','0','','4'),(99,'WBCB4-9','',35179,'5CD9095NTL','','','0','0','','4'),(100,'WBCB4-10','',35297,'5CD9092RT2','','','0','0','','4'),(101,'WBCB4-11','',35254,'5CD9092S87','','','0','0','','4'),(102,'WBCB4-12','',35396,'5CD9092RZ0','','','0','0','','4'),(103,'WBCB4-13','',34963,'5CD9095P2F','','','0','0','','4'),(104,'WBCB4-14','',35413,'5CD9092R91','','','0','0','','4'),(105,'WBCB4-15','',36494,'5CD9171BDW','','','0','0','','4'),(106,'WBCB4-16','',35420,'5CD9092RSM','','','0','0','','4'),(107,'WBCB4-17','',35318,'5CD9092R0P','','','0','0','','4'),(108,'WBCB4-18','',35333,'5CD9092RWR','','','0','0','','4'),(109,'WBCB4-19','',35294,'5CD9092S4N','','','0','0','','4'),(110,'WBCB4-20','',35361,'5CD9092R9D','','','0','0','','4'),(111,'WBCB4-21','',35230,'5CD9093F53','','','0','0','','4'),(112,'WBCB4-22','',35209,'5CD9095P60','','','0','0','','4'),(113,'WBCB4-23','',34976,'5CD9095NY4','','','0','0','','4'),(114,'WBCB4-24','',35232,'5CD9092SZ9','','','0','0','','4'),(115,'WBCB4-25','',35022,'5CD9095NX8','','','0','0','','4'),(116,'WBCB4-26','',35180,'5CD9095NTG','','','0','0','','4'),(117,'WBCB4-27','',36431,'5CD9170LFN','','','0','0','','4'),(118,'WBCB4-28','',35340,'5CD9092RMX','','','0','0','','4'),(119,'WBCB4-29','',35009,'5CD9095P1Z','','','0','0','','4'),(120,'WBCB4-30','',34922,'5CD9095NYR','','','0','0','','4'),(121,'WBCB4-31','',35172,'5CD9095LW3','','','0','0','','4'),(122,'WBCB4-32','',35107,'5CD9095LZQ','','','0','0','','4'),(123,'WBCB4-33','',35189,'5CD9095NSG','','','0','0','','4'),(124,'WBCB4-34','',34966,'5CD9095P1S','','','0','0','','4'),(125,'WBCB4-35','',34980,'5CD9095P32','','','0','0','','4'),(126,'WBCB4-36','',35313,'5CD9093DXK','','','0','0','','4'),(127,'WBCB4-37','',35190,'5CD9092SDL','','','0','0','','4'),(128,'WBCB4-38','',35598,'5CD9092QWN','','','0','0','','4'),(129,'WBCB4-39','',35273,'5CD9092SDZ','','','0','0','','4'),(130,'WBCB4-40','',35029,'5CD9095M54','','','0','0','','4'),(132,'WBCB5-1','',35161,'5CD9095LW2','','','0','0','','5'),(133,'WBCB5-2','',35062,'5CD9095M5K','','','0','0','','5'),(134,'WBCB5-3','',34941,'5CD9095P1J','','','0','0','','5'),(135,'WBCB5-4','',35300,'5CD9093FFR','','','0','0','','5'),(136,'WBCB5-5','',35020,'5CD9095MF8','','','0','0','','5'),(137,'WBCB5-6','',34975,'5CD9095P24','','','0','0','','5'),(138,'WBCB5-7','',35279,'5CD9092S11','','','0','0','','5'),(139,'WBCB5-8','',35219,'5CD9093FDP','','','0','0','','5'),(140,'WBCB5-9','',35085,'5CD9095M0T','','','0','0','','5'),(141,'WBCB5-10','',34981,'5CD9095P2J','','','0','0','','5'),(142,'WBCB5-11','',35357,'5CD9092RMN','','','0','0','','5'),(143,'WBCB5-12','',35145,'5CD9095NQD','','','0','0','','5'),(144,'WBCB5-13','',35370,'5CD9092R65','','','0','0','','5'),(145,'WBCB5-14','',35081,'5CD9092RQB','','','0','0','','5'),(146,'WBCB5-15','',35143,'5CD9095LWL','','','0','0','','5'),(147,'WBCB5-16','',35412,'5CD9092RQ6','','','0','0','','5'),(148,'WBCB5-17','',34985,'5CD9095P29','','','0','0','','5'),(149,'WBCB5-18','',35353,'5CD9092RSD','','','0','0','','5'),(150,'WBCB5-19','',35147,'5CD9095LYP','','','0','0','','5'),(151,'WBCB5-20','',35204,'5CD9092T93','','','0','0','','5'),(152,'WBCB5-21','',35378,'5CD9092RTB','','','0','0','','5'),(153,'WBCB5-22','',35248,'5CD9092R4V','','','0','0','','5'),(154,'WBCB5-23','',35386,'5CD9092RQD','','','0','0','','5'),(155,'WBCB5-24','',35319,'5CD9092R96','','','0','0','','5'),(156,'WBCB5-25','',34951,'5CD9092R4M','','','0','0','','5'),(157,'WBCB5-26','',34993,'5CD9095NYT','','','0','0','','5'),(158,'WBCB5-27','',36515,'5CD9171B8V','','','0','0','','5'),(159,'WBCB5-28','',34961,'5CD9095P28','','','0','0','','5'),(160,'WBCB5-29','',35170,'5CD9095NSW','','','0','0','','5'),(161,'WBCB5-30','',35379,'5CD9092S98','','','0','0','','5'),(162,'WBCB5-31','',35315,'5CD9093FG9','','','0','0','','5'),(163,'WBCB5-32','',35091,'5CD9095M35','','','0','0','','5'),(164,'WBCB5-33','',35100,'5CD9095P1V','','','0','0','','5'),(165,'WBCB5-34','',35236,'5CD9092T7D','','','0','0','','5'),(166,'WBCB5-35','',35144,'5CD9095LZM','','','0','0','','5'),(167,'WBCB5-36','',35096,'5CD9095M2Y','','','0','0','','5'),(168,'WBCB5-37','',35024,'5CD9095NQL','','','0','0','','5'),(169,'WBCB5-38','',35025,'5CD9095NZV','','','0','0','','5'),(170,'WBCB5-39','',35293,'5CD9092T2R','','','0','0','','5'),(171,'WBCB5-40','',35245,'5CD9093FGY','','','0','0','','5'),(172,'WBCB6-1','',34959,'5CD9095P3D','','','0','0','','6'),(173,'WBCB6-2','',35388,'5CD9092RSY','','','0','0','','6'),(174,'WBCB6-3','',35480,'5CD9092RP4','','','0','0','','6'),(175,'WBCB6-4','',35044,'5CD9095M43','','','0','0','','6'),(176,'WBCB6-5','',34884,'5CD9095P3S','','','0','0','','6'),(177,'WBCB6-6','',36618,'5CD9170M0M','','','0','0','','6'),(178,'WBCB6-7','',35063,'5CD9095MW4','','','0','0','','6'),(179,'WBCB6-8','',35066,'5CD9095M4J','','','0','0','','6'),(180,'WBCB6-9','',35274,'5CD9092R4Z','','','0','0','','6'),(181,'WBCB6-10','',35171,'5CD9095NRZ','','','0','0','','6'),(182,'WBCB6-11','',35111,'5CD9095M1V','','','0','0','','6'),(183,'WBCB6-12','',35275,'5CD9093FFP','','','0','0','','6'),(184,'WBCB6-13','',35097,'5CD9095LZX','','','0','0','','6'),(185,'WBCB6-14','',36844,'5CD9171753','','','0','0','','6'),(186,'WBCB6-15','',34945,'5CD9095NT5','','','0','0','','6'),(187,'WBCB6-16','',35076,'5CD9095M1S','','','0','0','','6'),(188,'WBCB6-17','',35260,'5CD9092S63','','','0','0','','6'),(189,'WBCB6-18','',35414,'5CD9092RGS','','','0','0','','6'),(190,'WBCB6-19','',35201,'5CD9092S5X','','','0','0','','6'),(191,'WBCB6-20','',35307,'5CD9092RGV','','','0','0','','6'),(192,'WBCB6-21','',35027,'5CD9095M4R','','','0','0','','6'),(193,'WBCB6-22','',36384,'5CD9170LF3','','','0','0','','6'),(194,'WBCB6-23','',35229,'5CD9092T8T','','','0','0','','6'),(195,'WBCB6-24','',35906,'5CD9092RKD','','','0','0','','6'),(196,'WBCB6-25','',36437,'5CD9171B2T','','','0','0','','6'),(197,'WBCB6-26','',35352,'5CD9092RQZ','','','0','0','','6'),(198,'WBCB6-27','',35421,'5CD9092RNX','','','0','0','','6'),(199,'WBCB6-28','',35354,'5CD9092RY5','','','0','0','','6'),(200,'WBCB6-29','',36568,'5CD91718JM','','','0','0','','6'),(201,'WBCB6-30','',35065,'5CD9095M58','','','0','0','','6'),(202,'WBP1-1','',401863,'','','','0','0','','P1'),(203,'WBP1-2','',401430,'','','','0','0','','P1'),(204,'WBP1-3','',401861,'','','','0','0','','P1'),(205,'WBP1-4','',401864,'','','','0','0','','P1'),(206,'WBP1-5','',401877,'','','','0','0','','P1'),(207,'WBP1-6','',401866,'','','','0','0','','P1'),(208,'WBP1-7','',401886,'','','','0','0','','P1'),(209,'WBP1-8','',401865,'','','','0','0','','P1'),(210,'WBP1-9','',401867,'','','','0','0','','P1'),(211,'WBP1-10','',401873,'','','','0','0','','P1'),(212,'WBP1-11','',401872,'','','','0','0','','P1'),(213,'WBP1-12','',401870,'','','','0','0','','P1'),(214,'WBP1-13','',401885,'','','','0','0','','P1'),(215,'WBP1-14','',401878,'','','','0','0','','P1'),(216,'WBP1-15','',401871,'','','','0','0','','P1'),(217,'WBP1-16','',401875,'','','','0','0','','P1'),(218,'WBP1-17','',401874,'','','','0','0','','P1'),(219,'WBP1-18','',401431,'','','','0','0','','P1'),(220,'WBP1-19','',401862,'','','','0','0','','P1'),(221,'WBP1-20','',401869,'','','','0','0','','P1'),(222,'WBP1-21','',401868,'','','','0','0','','P1'),(223,'WBP1-22','',401434,'','','','0','0','','P1'),(224,'WBP1-23','',401890,'','','','0','0','','P1'),(225,'WBP1-24','',401876,'','','','0','0','','P1'),(226,'WBP1-25','',401882,'','','','0','0','','P1'),(227,'WBP1-26','',401881,'','','','0','0','','P1'),(228,'WBP1-27','',401883,'','','','0','0','','P1'),(229,'WBP1-28','',401880,'','','','0','0','','P1'),(230,'WBP1-29','',401884,'','','','0','0','','P1'),(231,'WBP1-30','',30320,'','','','0','0','','P1'),(232,'WBP1-31','',401879,'','','','0','0','','P1'),(233,'WBP1-32','',401892,'','','','0','0','','P1'),(234,'WBP1-33','',401439,'','','','0','0','','P1'),(235,'WBP1-34','',401889,'','','','0','0','','P1'),(236,'WBP1-35','',401424,'','','','0','0','','P1');
/*!40000 ALTER TABLE `CBcartAll` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-28 14:59:30
