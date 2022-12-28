-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2022 às 03:36
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `netdevices_database`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso_usuarios`
--

CREATE TABLE `acesso_usuarios` (
 `id` int(4) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `senha` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico_campo`
--

CREATE TABLE `servico_campo` (
  `id_atendimento` int(4) NOT NULL,
  `cidade` varchar(50) COLLATE utf8_bin NOT NULL,
  `bairro` varchar(30) COLLATE utf8_bin NOT NULL,
  `rua` varchar(30) COLLATE utf8_bin NOT NULL,
  `cep` varchar(8) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(11) COLLATE utf8_bin NOT NULL,
  `tipo_servico` varchar(50) COLLATE utf8_bin NOT NULL,
  `estado` varchar(30) COLLATE utf8_bin NOT NULL,
  `tecnologia` varchar(30) COLLATE utf8_bin NOT NULL,
  `especificacao` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acesso_usuarios`
--
ALTER TABLE `acesso_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico_campo`
--
ALTER TABLE `servico_campo`
  ADD PRIMARY KEY (`id_atendimento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acesso_usuarios`
--
ALTER TABLE `acesso_usuarios`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico_campo`
--
ALTER TABLE `servico_campo`
  MODIFY `id_atendimento` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
