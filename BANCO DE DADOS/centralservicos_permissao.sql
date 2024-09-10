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
-- Table structure for table `permissao`
--

DROP TABLE IF EXISTS `permissao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sistema` int(11) NOT NULL,
  `permissao_pai` int(11) DEFAULT NULL,
  `codigo` varchar(45) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_sistema` (`id_sistema`),
  CONSTRAINT `id_sistema` FOREIGN KEY (`id_sistema`) REFERENCES `sistema` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissao`
--

LOCK TABLES `permissao` WRITE;
/*!40000 ALTER TABLE `permissao` DISABLE KEYS */;
INSERT INTO `permissao` VALUES (1,3,NULL,'sisnot','Permite acesso ao SisNot.'),(2,2,NULL,'inutri','Permite acesso ao inutri.'),(3,3,1,'sisnot-dashboard','Permite acesso a página de dashboard do SisNot.'),(4,3,1,'sisnot-notificacoes','Permite acesso a página de notificações do  SisNot.'),(5,1,NULL,'admin','Possui acesso a todos os sistemas.'),(6,2,23,'inutri-acessar-calendario-cardapio','Permite acesso a página de elaboração de cardápios.'),(7,2,23,'inutri-editar-calendario-cardapio','Permite a edição da página de elaboração de cardápio.'),(8,2,23,'inutri-acessar-cardapio','Permite acesso a página de criação de cardápios'),(9,2,23,'inutri-editar-cardapio','Permite a edição da página de criação de cardápio.'),(10,2,23,'inutri-acessar-dashboard','Permite acesso ao dashboard.'),(11,2,23,'inutri-acessar-alimentos','Permite acesso a página de alimentos.'),(12,2,23,'inutri-editar-alimentos','Permite a edição da página de alimentos.'),(13,2,2,'inutri-acessar-pedidos','Permite acesso a página de pedidos.'),(14,2,23,'inutri-editar-pedidos','Permite a edição da página de pedidos.'),(15,2,23,'inutri-acessar-perfil','Permite acesso a página de perfis.'),(16,2,23,'inutri-editar-perfil','Permite a edição da página de perfis.'),(17,2,2,'inutri-solicitar-refeicao-proprio','Permite a solicitação de refeição própria.'),(18,2,2,'inutri-solicitar-refeicao-paciente','Permite a solicitação de refeição para pacientes.'),(19,2,2,'inutri-solicitar-refeicao-terceiros','Permite a solicitação de refeição para terceiros.'),(21,2,23,'inutri-acessar-usuario','Permite acesso a página de usuários'),(22,2,23,'inutri-editar-usuario','Permite a edição na página de usuários'),(23,2,2,'inutri-admin','Permite acesso a página de administração do iNutri.'),(24,4,NULL,'gleitos','Permite acesso ao gestão de leitos.'),(25,4,24,'gleitos-solicitar','Permite criar solicitações no gestão de leitos.'),(26,4,24,'gleitos-editar-solicitacao','Permite editar solicitações no gestão de leitos.'),(27,4,24,'gleitos-cancelar-solicitacao','Permite cancelar solicitações no gestão de leitos.'),(28,4,24,'gleitos-preparar-solicitacao','Permite preparar(bloquear) solicitações no gestão de leitos.'),(29,4,24,'gleitos-liberar-solicitacao','Permite liberar(reservar) solicitações do gestão de leitos.'),(30,4,24,'gleitos-alterar-leito-liberado','Permite alterar o leito liberado (reservado) no gestão de leitos.'),(31,4,24,'gleitos-encerrar-reserva','Permite encerrar a reserva no gestão de leitos.'),(32,4,24,'gleitos-transferir-paciente','Permite transferir o paciente de leito no gestão de leitos.'),(33,4,24,'gleitos-painel-leitos','Permite visualizar painel de leitos no gestão de leitos.'),(34,5,NULL,'avasis','Permite acesso ao Avasis.'),(35,5,34,'avasis-dashboard','Permite acesso ao dashboard do Avasis.'),(37,4,24,'gleitos-realizar-checklist','Permite realizar checklist de itens nos leitos no sistema gestão de leitos'),(38,4,24,'gleitos-liberar-leito-nir','Permite liberar um leito livre ao Nucleo Interno de Regulação (NIR) no sistema gestão de leitos'),(39,6,NULL,'monexm','Permite acessar o sistema de monitoramento dos exames.'),(40,7,NULL,'monps','Permite acessar o sistema de monitoramento do pronto socorro.'),(41,8,NULL,'azophicc','Permite acessar o sistema de monitoramento do centro cirúrgico.'),(42,1,5,'super-admin','Permite acesso a todos os sistemas e gerenciar todos os usuários, inclusive os administradores do sistema.'),(43,4,NULL,'gleitos-encerrar-solicitacao','Permite encerrar solicitações no sistema gestão de leitos'),(44,2,23,'inutri-acessar-pedidos-admin','Permite acesso a página de gerenciamento dos pedidos.'),(45,4,NULL,'gleitos-indicadores','Permite acessar a pagina de indicadores no gestão de leitos'),(46,9,NULL,'sosmaqueiro','Permite acesso ao sistema de maqueiros.'),(47,9,46,'sosmaqueiro-solicitar','Permite criar chamados.'),(48,9,46,'sosmaqueiro-atender','Permite iniciar o atendimento de chamados.'),(49,10,NULL,'azophi','Permite acessar o Azophi.'),(50,11,NULL,'pafilas','Permite acessar o PA Filas.'),(51,12,NULL,'checkos','Permite acessar o checkos.'),(52,13,NULL,'check-exame','Permite o acesso ao sistema Check Exame.'),(53,9,46,'sosmaqueiro-gerenciar','Permite gerenciar setors/locais, recursos, transportes e maqueiros.'),(54,9,46,'sosmaqueiro-cancelar','Permite cancelar chamados.'),(55,9,46,'sosmaqueiro-pausar','Permite pausar chamados.'),(56,9,46,'sosmaqueiro-continuar','Permite continuar (despausar) chamados.'),(57,9,46,'sosmaqueiro-mudarmaqueiro','Permite trocar maqueiros durante o atendimento dos chamados'),(58,9,46,'sosmaqueiro-finalizar','Permite finalizar chamados.'),(59,9,46,'sosmaqueiro-atribuir','Permite atribuir maqueiros aos chamados.'),(65,5,NULL,'avasis-questionario','Permite responder questionários.'),(66,5,NULL,'avasis-gerenciamento','Permite gerenciar (criar/editar) questionários.'),(67,5,NULL,'avasis-relatorio','Permite gerar relatórios dos questionários.'),(68,14,NULL,'pacom','Permite acesso ao pacom.'),(69,14,68,'pacom-gerenciar-acesso','Permite gerenciar acessos.'),(70,18,NULL,'aramais','Permite acesso ao ARamais.'),(71,18,70,'aramais-gerenciar-agenda','Permite gerenciar a agenda de ramais.'),(72,19,NULL,'censofugulin','Acesso ao sistema Censo Fugulin'),(73,19,NULL,'censofugulin-escala','Manuseio da escala'),(74,16,NULL,'countsis-novoinventario','Permissão de criar e administrar inventários'),(75,16,NULL,'countsis','Permite o acesso ao sistema');
/*!40000 ALTER TABLE `permissao` ENABLE KEYS */;
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
