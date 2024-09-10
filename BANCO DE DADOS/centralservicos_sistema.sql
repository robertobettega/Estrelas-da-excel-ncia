CREATE DATABASE  IF NOT EXISTS `centralservicos` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `centralservicos`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 10.1.1.31    Database: centralservicos
-- ------------------------------------------------------
-- Server version	5.5.5-10.3.36-MariaDB-0+deb10u2

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
-- Table structure for table `sistema`
--

DROP TABLE IF EXISTS `sistema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sistema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sistema`
--

LOCK TABLES `sistema` WRITE;
/*!40000 ALTER TABLE `sistema` DISABLE KEYS */;
INSERT INTO `sistema` VALUES (1,'Admin','Sistema de administração da central de serviços.','A'),(2,'iNutri','Sistema da nutrição para solicitação de refeições.','A'),(3,'SisNot','Sistema de notificações de incidentes.','A'),(4,'Gestao de Leitos','Sistema de gerenciamento de leitos do hospital.','A'),(5,'Avasis','Sistema de avaliação de serviços.','A'),(6,'MonExm','Sistema de monitoramento dos exames.','A'),(7,'MonPS','Sistema de monitoramento do pronto socorro.','A'),(8,'AzophiCC','Sistema de monitoramento do centro cirúrgico.','A'),(9,'SOS Maqueiro','Sistema de solicitação de maqueiros.','A'),(10,'Azophi','Sistema de monitoramento do hospital','A'),(11,'Pa Filas','Sistema de monitoramento das filas do P.A.','A'),(12,'CheckOS','Sistema de monitoramento de OS.','A'),(13,'Check Exame','Sistema de monitoramento de Exames.','A'),(14,'Pacom','Sistema de validar e autorizar compromissos.','A'),(15,'Pleitos','Sistema de monitoramento de leitos.','A'),(16,'CountSis','Sistema de gestão de itens e inventários','A'),(17,'Indicadores de Atendimento','Indicadores de atendimento','A'),(18,'ARamais','Sistema para visualização e gerenciamento de ramais.','A'),(19,'Censo Fugulin','Gestão de riscos concernentes à pacientes','A');
/*!40000 ALTER TABLE `sistema` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-09 12:36:30
