
-- ARQUIVO DESTINA PARA QUEM QUISER: 
--  1.IMPLANTAR O BANCO DENTRO DA PRÓPRIA MAQUINA (LOCAL)
--  2.FAZER INSERTS DE UM JEITO MAIS SIMPLES PARA TESTES

--phpMyAdmin SQL Dump
-- version 5.2.0
-- Host: 127.0.0.1
-- Tempo de geração: 09-Set-2024 às 17:13
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estrelasexcelencia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atributos`
--
CREATE DATABASE  IF NOT EXISTS `estrelaexcelencia` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `estrelaexcelencia`;

CREATE TABLE `atributos` (
  `id` int(11) NOT NULL,
  `ID_QUALIDADE` int(11) NOT NULL,
  `DESCRICAO` varchar(45) NOT NULL,
  `STATUS` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `atributos`
--

INSERT INTO `atributos` (`id`, `ID_QUALIDADE`, `DESCRICAO`, `STATUS`) VALUES
(1, 1, 'Respeito', 'A'),
(2, 2, 'Pontualidade', 'A'),
(3, 3, 'Proatividade', 'A'),
(4, 4, 'Comunicação', 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pin`
--

CREATE TABLE `pin` (
  `id` int(11) NOT NULL,
  `ATRIBUTOS_idATRIBUTOS` int(11) NOT NULL,
  `USUARIO` varchar(10) NOT NULL,
  `JUSTIFICATIVA` varchar(150) NOT NULL,
  `DEDICATORIA` varchar(150) NOT NULL,
  `DATA_ATRIBUICAO` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pin`
--

INSERT INTO `pin` (`id`, `ATRIBUTOS_idATRIBUTOS`, `USUARIO`, `JUSTIFICATIVA`, `DEDICATORIA`, `DATA_ATRIBUICAO`) VALUES
(1, 1, 'Usuario1', 'Justificativa para Respeito', 'Dedicatoria para Respeito', '2024-09-09 12:13:38'),
(2, 2, 'Usuario2', 'Justificativa para Pontualidade', 'Dedicatoria para Pontualidade', '2024-09-09 12:13:38'),
(3, 3, 'Usuario3', 'Justificativa para Proatividade', 'Dedicatoria para Proatividade', '2024-09-09 12:13:38'),
(4, 4, 'Usuario4', 'Justificativa para Comunicação', 'Dedicatoria para Comunicação', '2024-09-09 12:13:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualidade`
--

CREATE TABLE `qualidade` (
  `id` int(11) NOT NULL,
  `DESCRICAO` varchar(45) NOT NULL,
  `STATUS` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `qualidade`
--

INSERT INTO `qualidade` (`id`, `DESCRICAO`, `STATUS`) VALUES
(1, 'Hospitalidade', 'A'),
(2, 'Presteza', 'A'),
(3, 'Inovação', 'A'),
(4, 'Segurança', 'A');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ATRIBUTOS_QUALIDADE_idx` (`ID_QUALIDADE`);

--
-- Índices para tabela `pin`
--
ALTER TABLE `pin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk__ATRIBUTOS1_idx` (`ATRIBUTOS_idATRIBUTOS`);

--
-- Índices para tabela `qualidade`
--
ALTER TABLE `qualidade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atributos`
--
ALTER TABLE `atributos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pin`
--
ALTER TABLE `pin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `qualidade`
--
ALTER TABLE `qualidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atributos`
--
ALTER TABLE `atributos`
  ADD CONSTRAINT `fk_ATRIBUTOS_QUALIDADE` FOREIGN KEY (`ID_QUALIDADE`) REFERENCES `qualidade` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pin`
--
ALTER TABLE `pin`
  ADD CONSTRAINT `fk__ATRIBUTOS1` FOREIGN KEY (`ATRIBUTOS_idATRIBUTOS`) REFERENCES `atributos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

INSERT INTO `pin` (`id`, `ATRIBUTOS_idATRIBUTOS`, `USUARIO`, `JUSTIFICATIVA`, `DEDICATORIA`, `DATA_ATRIBUICAO`) VALUES
(15, 1, 'Usuario5', 'Justificativa para Respeito extra', 'Dedicatoria para Respeito extra', '2024-09-09 14:30:00');

(6, 2, 'Usuario6', 'Justificativa para Pontualidade extra', 'Dedicatoria para Pontualidade extra', '2024-09-09 14:45:00'),
(7, 3, 'Usuario7', 'Justificativa para Proatividade extra', 'Dedicatoria para Proatividade extra', '2024-09-09 15:00:00'),
(8, 4, 'Usuario8', 'Justificativa para Comunicação extra', 'Dedicatoria para Comunicação extra', '2024-09-09 15:15:00'),
(9, 1, 'Usuario9', 'Justificativa adicional para Respeito', 'Dedicatoria adicional para Respeito', '2024-09-09 15:30:00');

INSERT INTO `pin` (`id`, `ATRIBUTOS_idATRIBUTOS`, `USUARIO`, `JUSTIFICATIVA`, `DEDICATORIA`, `DATA_ATRIBUICAO`) VALUES
(10, 1, 'Usuario1', 'Nova justificativa para Respeito', 'Nova dedicatoria para Respeito', '2024-09-09 16:00:00'),
(11, 2, 'Usuario2', 'Nova justificativa para Pontualidade', 'Nova dedicatoria para Pontualidade', '2024-09-09 16:15:00'),
(12, 3, 'Usuario3', 'Nova justificativa para Proatividade', 'Nova dedicatoria para Proatividade', '2024-09-09 16:30:00'),
(13, 4, 'Usuario4', 'Nova justificativa para Comunicação', 'Nova dedicatoria para Comunicação', '2024-09-09 16:45:00'),
(14, 1, 'Usuario1', 'Justificativa adicional para Respeito', 'Dedicatoria adicional para Respeito', '2024-09-09 17:00:00');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;