-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Dez-2021 às 13:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `computadores`
--

CREATE TABLE `computadores` (
  `id_computador` bigint(20) UNSIGNED NOT NULL,
  `nome_computador` varchar(50) NOT NULL,
  `cpu_computador` varchar(50) NOT NULL,
  `gpu_computador` varchar(50) NOT NULL,
  `ram_computador` varchar(50) NOT NULL,
  `hd_computador` varchar(50) NOT NULL,
  `os_computador` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `computadores`
--

INSERT INTO `computadores` (`id_computador`, `nome_computador`, `cpu_computador`, `gpu_computador`, `ram_computador`, `hd_computador`, `os_computador`) VALUES
(1, 'recepcao hmi', 'i3-2300', 'integrada', '4gb', '250gb', 'windows'),
(2, 'recepcao hmm', 'i5-4100', 'integrada', '4gb', '1T', 'windows'),
(3, 'laboratório hmm', 'i7-1000', 'rtx 3080', '2gb ddr2', '4T ssd', 'ubuntu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitores`
--

CREATE TABLE `monitores` (
  `id_monitor` bigint(20) UNSIGNED NOT NULL,
  `nome_monitor` varchar(50) NOT NULL,
  `marca_monitor` varchar(50) NOT NULL,
  `resolucao_monitor` varchar(50) NOT NULL,
  `frequencia_monitor` varchar(50) NOT NULL,
  `tempo_monitor` varchar(50) NOT NULL,
  `computador_monitor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `monitores`
--

INSERT INTO `monitores` (`id_monitor`, `nome_monitor`, `marca_monitor`, `resolucao_monitor`, `frequencia_monitor`, `tempo_monitor`, `computador_monitor`) VALUES
(1, 'recepcao hmm', 'acer', '1280x900', '75hz', '2ms', 2),
(2, 'recepcao hmi', 'acer', '1280x900', '75hz', '2ms', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perifericos`
--

CREATE TABLE `perifericos` (
  `id_periferico` bigint(20) UNSIGNED NOT NULL,
  `nome_periferico` varchar(50) NOT NULL,
  `tipo_periferico` varchar(50) NOT NULL,
  `marca_periferico` varchar(50) NOT NULL,
  `computador_periferico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perifericos`
--

INSERT INTO `perifericos` (`id_periferico`, `nome_periferico`, `tipo_periferico`, `marca_periferico`, `computador_periferico`) VALUES
(1, 'teclado recepcao hmm', 'teclado', 'logitech', 2),
(2, 'mouse recepcao hmm', 'mouse', 'logitech', 2),
(3, 'webcan recepcao hmm', 'webcan', 'logitech', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `usuario`, `senha`) VALUES
(1, 'morandi', '3977121c4468b9fc37179d3b6ebaf39e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`id_computador`),
  ADD UNIQUE KEY `id_computador` (`id_computador`);

--
-- Índices para tabela `monitores`
--
ALTER TABLE `monitores`
  ADD PRIMARY KEY (`id_monitor`),
  ADD UNIQUE KEY `id_monitor` (`id_monitor`);

--
-- Índices para tabela `perifericos`
--
ALTER TABLE `perifericos`
  ADD PRIMARY KEY (`id_periferico`),
  ADD UNIQUE KEY `id_periferico` (`id_periferico`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `computadores`
--
ALTER TABLE `computadores`
  MODIFY `id_computador` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `monitores`
--
ALTER TABLE `monitores`
  MODIFY `id_monitor` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perifericos`
--
ALTER TABLE `perifericos`
  MODIFY `id_periferico` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
