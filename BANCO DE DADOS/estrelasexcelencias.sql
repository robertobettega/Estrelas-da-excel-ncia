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
-- Table structure for table `justificativa`
--

DROP TABLE IF EXISTS `justificativa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `justificativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ID_QUALIDADE` int(11) NOT NULL,
  `DESCRICAO` varchar(50) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk__justificativas_idx` (`ID_QUALIDADE`),
  CONSTRAINT `fk__justificativas` FOREIGN KEY (`ID_QUALIDADE`) REFERENCES `qualidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `justificativa`
--

LOCK TABLES `justificativa` WRITE;
/*!40000 ALTER TABLE `justificativa` DISABLE KEYS */;
INSERT INTO `justificativa` VALUES (1,1,'Respeito','A'),(3,1,'Comunicação','A'),(4,1,'Confiança','A'),(5,1,'Acolhimento','A'),(6,1,'Carinho','A'),(7,1,'Cuidado','A'),(8,2,'Agilidade','A'),(9,4,'Qualidade','A'),(10,3,'Moderno','A'),(11,3,'Ousado','A'),(12,4,'Conformidade','A'),(13,4,'Padronização','A');
/*!40000 ALTER TABLE `justificativa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pin`
--

DROP TABLE IF EXISTS `pin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USUARIO` varchar(10) NOT NULL,
  `ID_USUARIOATRIBUIDO` varchar(10) NOT NULL,
  `ID_QUALIDADE` int(11) NOT NULL,
  `ID_JUSTIFICATIVA` int(11) NOT NULL,
  `DEDICATORIA` varchar(150) NOT NULL,
  `DATA_ATRIBUICAO` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_pin_qualidade_idx` (`ID_QUALIDADE`),
  KEY `fk_pin_justificativa_idx` (`ID_JUSTIFICATIVA`),
  CONSTRAINT `fk_pin_justificativa` FOREIGN KEY (`ID_JUSTIFICATIVA`) REFERENCES `justificativa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pin_qualidade` FOREIGN KEY (`ID_QUALIDADE`) REFERENCES `qualidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pin`
--

LOCK TABLES `pin` WRITE;
/*!40000 ALTER TABLE `pin` DISABLE KEYS */;
INSERT INTO `pin` VALUES (2,'1','1',1,1,'dsdasdasda','0000-00-00 00:00:00'),(4,'1','1',1,1,'asdasdsada','2024-09-17 13:17:56'),(7,'2','2',2,1,'asdsadsadsadsadsadsa','2024-09-17 13:28:48'),(8,'2','2',2,1,'dasdsadasdsadasds','2024-09-17 13:28:59'),(10,'3','3',3,3,'adsadsadsadsadasda','2024-09-17 13:30:44'),(11,'2','2',2,3,'','2024-09-17 13:33:51'),(12,'2','2',3,3,'','0000-00-00 00:00:00'),(13,'2','2',2,1,'','0000-00-00 00:00:00'),(14,'4','4',4,3,'','2024-09-17 13:40:40'),(15,'4','5',4,3,'','0000-00-00 00:00:00'),(16,'4','4',4,3,'','2024-09-17 13:40:40'),(17,'4','7',4,3,'','2024-09-17 14:03:54');
/*!40000 ALTER TABLE `pin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qualidade`
--

DROP TABLE IF EXISTS `qualidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `qualidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DESCRICAO` varchar(45) NOT NULL,
  `nome_qualidade` varchar(50) DEFAULT NULL,
  `STATUS` varchar(1) NOT NULL,
  `ICONES` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qualidade`
--

LOCK TABLES `qualidade` WRITE;
/*!40000 ALTER TABLE `qualidade` DISABLE KEYS */;
INSERT INTO `qualidade` VALUES (1,'Hospitalidade','hospitalidade','A','images/Hospitalidade.png'),(2,'Presteza','presteza','A','images/Prestreza.png'),(3,'Inovação','inovacao','A','images/Inovacao.png'),(4,'Segurança','seguranca','A','images/Seguranca.png');
/*!40000 ALTER TABLE `qualidade` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-17 13:22:37
