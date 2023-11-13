-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2023 às 16:43
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
-- Banco de dados: `location`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `mast` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `senha`, `email`, `telefone`, `cidade`, `genero`, `mast`) VALUES
(3, 'jungkook', '1234', 'jungkook@gmail.com', '85647385', 'Aquiraz', 'Masculino', 1),
(5, 'taeyhyung', '12345', 'taehyung@gmail.com', '4546565', 'Horizonte', 'Masculino', 1),
(6, 'hope', '1234', 'hope@gmail.com', '65646545', 'Aquiraz', 'Masculino', 1),
(7, 'hope', '1234', 'hope@gmail.com', '65646545', 'Aquiraz', 'Masculino', 1),
(8, 'lee', '1234', 'lee@gmail.com', '4657686', 'Paraipaba', 'Masculino', 1),
(9, 'leeyeon', '1234', 'lee@gmail.com', '4657686', 'Chorozinho', 'Masculino', 1),
(13, 'jimin', '23234', 'biamonteirofig@gmail.com', '85986900966', 'São G do Amarante', 'Masculino', 1),
(14, 'jimin', '23234', 'biamonteirofig@gmail.com', '85986900966', 'São G do Amarante', 'Masculino', 1),
(15, 'intenso', '12344', 'inteno@gmail.com', '65465464', 'Trairi', 'Feminino', 1),
(16, 'jk', '1234', 'jk@gmail.com', '6465657', 'Pacajus', 'Masculino', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `id` int(20) NOT NULL,
  `aula` varchar(50) NOT NULL,
  `descri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`id`, `aula`, `descri`) VALUES
(2, 'aula 1', 'datashow');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lugar`
--

CREATE TABLE `lugar` (
  `id` int(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `professor` varchar(100) DEFAULT NULL,
  `equipamentos` varchar(100) DEFAULT NULL,
  `turma` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `lugar`
--

INSERT INTO `lugar` (`id`, `nome`, `horario`, `professor`, `equipamentos`, `turma`) VALUES
(3, 'Beatriz', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `qnt` int(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `qnt`, `marca`, `modelo`) VALUES
(3, 'canet', 20, 'bic', 'b568');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reserva`
--

CREATE TABLE `reserva` (
  `id` int(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `horario` time NOT NULL,
  `equip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `senha` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `cidade` varchar(45) NOT NULL,
  `genero` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`, `telefone`, `cidade`, `genero`) VALUES
(7, 'Beatriz Figueiredo Monteiro', '1234', 'biamonteirofig@gmail.com', '85986900966', 'Fortaleza', 'Feminino'),
(18, 'Beatriz Bia', '53546', 'biamonteirofig@gmail.com', '85986900966', 'Paracuru', 'Feminino'),
(21, 'jimin', '1234', 'jimin@gmail.com', '65465464', 'Cascavel', 'Masculino'),
(26, 'dong', '12345', 'dongwool@gmail.com', '232454654', 'Cidade', 'Masculino'),
(28, 'Wookie', '$2y$10$PsLIDlAPNPWMIlwpH3LSleBLaFG4qGhPVKoniL', 'wookie@gmail.com', '85986900966', 'Pacajus', 'Masculino'),
(29, 'nubia', '$2y$10$P2FvDfc.WFpNNgaw6HWnmOverXt6T5TBDhKbOP', 'nubia@gmail.com', '5465657', 'Paraipaba', 'Feminino'),
(32, 'jungkook', '$2y$10$0sLwWXRUXW9Sm71/6.v88ueN52EXubdr.sPimd', 'jungkook@gmail.com', '85986900966', 'Paraipaba', 'Masculino'),
(33, 'Ravel', '$2y$10$3uBM85JZtZ4EkaDujfNVq.2lgUE.TsaHc1A5qm', 'ravel.araujo1@aluno.ce.gov.br', '657436356', 'Caucaia', 'Masculino'),
(34, 'lee lindong', '$2y$10$CJCWHkQZKSAuZ6cypZ9vIe3wPRtumck6lcFB/y', 'lindongwook@gmail.com', '43542656', 'Fortaleza', 'Masculino'),
(38, 'live', '$2y$10$5eMffFSdtX3MHSnCC.ImHeWXLpe2/JVosRhjnD', 'live@gmail.com', '6464542', 'São L do curu', 'Masculino'),
(39, 'Beatriz', '$2y$10$39lgIuwVZObfV3vJDqZVFOFeG.Nl06ObpeiiTI', 'beatriz.monteiro5@aluno.ce.gov.br', '85986900966', 'Fortaleza', 'Feminino'),
(40, 'Isabelly', '$2y$10$B99BW8A3GePNZR3ARJxsaeuEIXgDohXelbSMXM', 'isabely.santos5@aluno.ce.gov.br', '462654654', 'Fortaleza', 'Feminino'),
(41, 'Kethelly', '$2y$10$zXSWqZV94kYQUZ0x/OJ2QODQ/kZk.LrfMDR0I3', 'kethelly.silva@aluno.ce.gov.br', '542546', 'Fortaleza', 'Feminino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `lugar`
--
ALTER TABLE `lugar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
