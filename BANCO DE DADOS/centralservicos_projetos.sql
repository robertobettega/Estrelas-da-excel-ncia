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
-- Table structure for table `projetos`
--

DROP TABLE IF EXISTS `projetos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `projetos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(250) NOT NULL,
  `link` varchar(300) NOT NULL,
  `versao` varchar(10) NOT NULL,
  `status` enum('C','P','T') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projetos`
--

LOCK TABLES `projetos` WRITE;
/*!40000 ALTER TABLE `projetos` DISABLE KEYS */;
INSERT INTO `projetos` VALUES (1,'Escala','http://10.1.1.57/dev/escalamedica-ps/','1.0','T'),(2,'Contas Paradas','http://10.1.1.57/dev/hub/','1.0','P'),(3,'Azophi','http://cs.hospitalriogrande.com.br/azophi/','1.0','C'),(4,'Azophi CC','http://cs.hospitalriogrande.com.br/azophicc','1.0','C'),(5,'SOS Maqueiro','http://10.1.1.31/centralservicos/sosmaqueiro','1.0','T'),(6,'Avasis','http://10.1.1.57/dev/avasis/','1.0','T'),(7,'Espera','http://10.1.1.57/espera','1.0','T'),(8,'Espera 2','http://10.1.1.57/espera2/','1.0','C'),(9,'Papem','http://10.1.1.57/papem/','1.0','T'),(10,'Papem Recep','http://10.1.1.57/papem_recep/','1.0','T'),(11,'Agenda Centro Cirurgico','http://agendamento.hospitalriogrande.com.br','1.0','P'),(12,'Gestao de Leitos','http://gleitos.hospitalriogrande.com.br','1.0','T'),(13,'Inutri','http://cs.hospitalriogrande.com.br/inutri','1.0','C'),(14,'Mapa de Leitos','http://10.1.1.57/dev/painel_agm/','1.0','P'),(15,'Monitoramento Exames','http://cs.hospitalriogrande.com.br/monexm','1.0','C'),(16,'Monitoramento PA','http://cs.hospitalriogrande.com.br/monps','1.0','C'),(17,'Sistema de Chaves','http://10.1.1.25/chaves','1.0','T'),(18,'Refeicoes','http://10.1.1.57/dev/refeicoes/','1.0','P'),(19,'CheckOS','http://cs.hospitalriogrande.com.br/checkos','1.0','P'),(20,'Sisnot','http://cs.hospitalriogrande.com.br/sisnot','1.0','T'),(21,'OuviMed','http://cs.hospitalriogrande.com.br/ouvimed','1.0','P');
/*!40000 ALTER TABLE `projetos` ENABLE KEYS */;
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
