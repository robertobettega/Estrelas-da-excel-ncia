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
-- Temporary view structure for view `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!50001 DROP VIEW IF EXISTS `admins`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `admins` AS SELECT 
 1 AS `id`,
 1 AS `nome`,
 1 AS `sobrenome`,
 1 AS `cpf`,
 1 AS `email`,
 1 AS `senha`,
 1 AS `status`,
 1 AS `matricula`,
 1 AS `data_criacao`,
 1 AS `novo`,
 1 AS `descricao`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `admins`
--

/*!50001 DROP VIEW IF EXISTS `admins`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `admins` AS select `usuario`.`id` AS `id`,`usuario`.`nome` AS `nome`,`usuario`.`sobrenome` AS `sobrenome`,`usuario`.`cpf` AS `cpf`,`usuario`.`email` AS `email`,`usuario`.`senha` AS `senha`,`usuario`.`status` AS `status`,`usuario`.`matricula` AS `matricula`,`usuario`.`data_criacao` AS `data_criacao`,`usuario`.`novo` AS `novo`,`permissao`.`descricao` AS `descricao` from ((`usuario` join `permissao`) join `usuario_permissao`) where `usuario_permissao`.`id_usuario` = `usuario`.`id` and `permissao`.`id` = `usuario_permissao`.`id_permissao` and `permissao`.`id` = 5 */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-09 12:36:31
