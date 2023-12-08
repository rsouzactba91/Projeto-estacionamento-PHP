-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/12/2023 às 16:22
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `capacidade_estacionamento`
--

CREATE TABLE `capacidade_estacionamento` (
  `idcapacidade` int(11) NOT NULL,
  `capacidade_total` int(11) DEFAULT NULL,
  `data_atualizacao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `capacidade_estacionamento`
--

INSERT INTO `capacidade_estacionamento` (`idcapacidade`, `capacidade_total`, `data_atualizacao`) VALUES
(0, 4545, '2023-12-07 22:44:11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `placa` varchar(20) DEFAULT NULL,
  `entrada` datetime DEFAULT NULL,
  `saida` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carros`
--

INSERT INTO `carros` (`id`, `placa`, `entrada`, `saida`, `created_at`, `updated_at`) VALUES
(18, 'ABC-1234', '2023-11-22 20:00:07', NULL, '2023-11-22 23:00:07', '2023-11-22 23:00:07'),
(19, 'ABC-1235', '2023-11-22 20:00:13', NULL, '2023-11-22 23:00:13', '2023-11-22 23:00:13'),
(20, 'ABC-1236', '2023-11-22 20:00:18', NULL, '2023-11-22 23:00:18', '2023-11-22 23:00:18'),
(21, 'HGJ-6341', '2023-11-22 20:10:37', NULL, '2023-11-22 23:10:37', '2023-11-22 23:10:37'),
(22, 'AKG-1599', '2023-11-28 14:01:28', NULL, '2023-11-28 17:01:28', '2023-11-28 17:01:28'),
(23, 'AVC-1365', '2023-12-06 19:19:06', NULL, '2023-12-07 02:19:06', '2023-12-07 02:19:56');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fracao`
--

CREATE TABLE `fracao` (
  `idfaixa` int(11) NOT NULL,
  `valor` float DEFAULT NULL,
  `faixadevalor` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fracao`
--

INSERT INTO `fracao` (`idfaixa`, `valor`, `faixadevalor`) VALUES
(1, 2, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabeladevalores`
--

CREATE TABLE `tabeladevalores` (
  `idfaixa` int(11) NOT NULL,
  `valor` float DEFAULT NULL,
  `faixadevalor` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabeladevalores`
--

INSERT INTO `tabeladevalores` (`idfaixa`, `valor`, `faixadevalor`) VALUES
(1, 0, 'tolerância'),
(2, 10, '00:30'),
(3, 16, '01:00'),
(4, 16, '02:00'),
(5, 16, '03:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `teste_data_diff`
--

CREATE TABLE `teste_data_diff` (
  `id` int(11) NOT NULL,
  `data_passada` date DEFAULT NULL,
  `hora_passada` time DEFAULT NULL,
  `data_futura` date DEFAULT NULL,
  `hora_futura` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `teste_data_diff`
--

INSERT INTO `teste_data_diff` (`id`, `data_passada`, `hora_passada`, `data_futura`, `hora_futura`) VALUES
(1, '2023-12-05', '12:00:00', '2023-12-06', '13:00:00'),
(2, '2023-03-15', '08:45:00', '2023-03-20', '15:15:00'),
(3, '2023-05-05', '14:30:00', '2023-05-15', '22:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `capacidade_estacionamento`
--
ALTER TABLE `capacidade_estacionamento`
  ADD PRIMARY KEY (`idcapacidade`);

--
-- Índices de tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fracao`
--
ALTER TABLE `fracao`
  ADD PRIMARY KEY (`idfaixa`);

--
-- Índices de tabela `tabeladevalores`
--
ALTER TABLE `tabeladevalores`
  ADD PRIMARY KEY (`idfaixa`);

--
-- Índices de tabela `teste_data_diff`
--
ALTER TABLE `teste_data_diff`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `fracao`
--
ALTER TABLE `fracao`
  MODIFY `idfaixa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tabeladevalores`
--
ALTER TABLE `tabeladevalores`
  MODIFY `idfaixa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `teste_data_diff`
--
ALTER TABLE `teste_data_diff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
