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
-- Table structure for table `perfil`
--

DROP TABLE IF EXISTS `perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perfil`
--

LOCK TABLES `perfil` WRITE;
/*!40000 ALTER TABLE `perfil` DISABLE KEYS */;
INSERT INTO `perfil` VALUES (1,'Admin','admin','Possui acesso a todo o sistema.','A'),(2,'iNutri - Solicitante Próprio','inutri-padrao','Possui acesso ao sistema da nutrição.','A'),(3,'SisNot - Administrador','sisnot-admin','Possui acesso ao sistema de notificações.','A'),(8,'Gestão de Leitos - Hotelaria','gleitos-hotelaria','Perfil Hotelaria','A'),(9,'Ouvidoria','ouvidoria','Ouvidoria','A'),(10,'iNutri - Administrador','inutri-admin','Nutrição Administrador','A'),(11,'Gestão de Leitos - NIR ','gleitos-nir','Perfil Gestão de Leitos.','A'),(12,'Gestão de Leitos - Solicitante ','gleitos-solicitante','Perfil Solicitante Gestão de Leitos.','A'),(13,'SOS Maqueiro - Maqueiro','sosmaqueiro-maqueiro','Perfil com permissão para atender, atribuir a alguém, cancelar, transferir, pausar e finalizar uma solicitação.','A'),(14,'CensoFugulin','CensoFugulin','Censo Fugulin - Painel','A'),(15,'CountSis - Usuário','countsis-usuario','Perfil no qual permite acesso ao sistema CountSis.','A');
/*!40000 ALTER TABLE `perfil` ENABLE KEYS */;
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
