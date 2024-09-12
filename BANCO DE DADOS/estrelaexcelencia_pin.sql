-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: estrelaexcelencia
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

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
-- Table structure for table `pin`
--

DROP TABLE IF EXISTS `pin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ATRIBUTOS_idATRIBUTOS` int(11) NOT NULL,
  `USUARIO` varchar(10) NOT NULL,
  `JUSTIFICATIVA` varchar(150) NOT NULL,
  `DEDICATORIA` varchar(150) NOT NULL,
  `DATA_ATRIBUICAO` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__ATRIBUTOS1_idx` (`ATRIBUTOS_idATRIBUTOS`),
  CONSTRAINT `fk__ATRIBUTOS1` FOREIGN KEY (`ATRIBUTOS_idATRIBUTOS`) REFERENCES `atributos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pin`
--

LOCK TABLES `pin` WRITE;
/*!40000 ALTER TABLE `pin` DISABLE KEYS */;
INSERT INTO `pin` VALUES (16,2,'8','Motivo da atribuição','Dedicatória especial','2024-09-12 10:34:32'),(17,1,'27','Motivo da atribuição','Dedicatória especial','2024-09-12 10:36:25'),(18,3,'33','Motivo da atribuição','Dedicatória especial','2024-09-12 10:36:30'),(19,3,'33','Motivo da atribuição','Dedicatória especial','2024-09-12 10:36:31'),(20,1,'27','Motivo da atribuição','Dedicatória especial','2024-09-12 10:43:16'),(21,1,'27','Motivo da atribuição','Dedicatória especial','2024-09-12 10:43:17'),(22,2,'8','Motivo da atribuição','Dedicatória especial','2024-09-12 10:46:05'),(23,2,'8','Motivo da atribuição','Dedicatória especial','2024-09-12 10:46:06'),(24,2,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 10:46:48'),(25,2,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 10:46:48'),(26,2,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 10:46:48'),(27,2,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 10:46:49'),(28,1,'23','Motivo da atribuição','Dedicatória especial','2024-09-12 11:00:16'),(29,1,'23','Motivo da atribuição','Dedicatória especial','2024-09-12 11:00:16'),(30,1,'23','Motivo da atribuição','Dedicatória especial','2024-09-12 11:00:17'),(31,1,'23','Motivo da atribuição','Dedicatória especial','2024-09-12 11:00:17'),(32,4,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 11:03:13'),(33,4,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 11:03:13'),(34,4,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 11:03:13'),(35,4,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 11:03:14'),(36,4,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 11:03:14'),(37,3,'8','Motivo da atribuição','Dedicatória especial','2024-09-12 11:53:26'),(38,1,'17','Motivo da atribuição','Dedicatória especial','2024-09-12 11:53:42'),(39,1,'17','Motivo da atribuição','Dedicatória especial','2024-09-12 11:53:42'),(40,4,'8','Motivo da atribuição','Dedicatória especial','2024-09-12 11:55:09'),(41,4,'8','Motivo da atribuição','Dedicatória especial','2024-09-12 11:55:17'),(42,4,'17','Motivo da atribuição','Dedicatória especial','2024-09-12 11:55:22'),(46,1,'5','Motivo da atribuição','Dedicatória especial','2024-09-12 14:02:37'),(47,2,'7','Motivo da atribuição','Dedicatória especial','2024-09-12 14:05:20'),(49,1,'4','Motivo da atribuição','Dedicatória especial','2024-09-12 14:07:09'),(52,1,'4','Motivo da atribuição','Dedicatória especial','2024-09-12 14:14:07'),(56,3,'7','Motivo da atribuição','Dedicatória especial','2024-09-12 14:40:09'),(59,4,'7','Motivo da atribuição','Dedicatória especial','2024-09-12 14:44:13'),(62,5,'7','Motivo da atribuição','Dedicatória especial','2024-09-12 14:48:08');
/*!40000 ALTER TABLE `pin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-12 11:51:23
