-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Maio-2021 às 01:55
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_querty`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id_cont` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` bigint(11) DEFAULT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id_cont`, `nome`, `email`, `telefone`, `mensagem`) VALUES
(6, 'Guilherme ', 'guilhermescastilhos@gmail.com', 51988888888, 'Testando o banco de dados novamente!!'),
(7, 'Teste', 'teste@teste.com', 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(8, '', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id_pes` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pg1` varchar(55) NOT NULL,
  `pg2` varchar(55) NOT NULL,
  `pg3` varchar(55) NOT NULL,
  `pg4` varchar(55) NOT NULL,
  `pg5` varchar(55) NOT NULL,
  `pg6` varchar(55) NOT NULL,
  `pg7` varchar(55) NOT NULL,
  `pg8` varchar(55) NOT NULL,
  `pg9` int(1) NOT NULL,
  `mensagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`id_pes`, `nome`, `genero`, `email`, `pg1`, `pg2`, `pg3`, `pg4`, `pg5`, `pg6`, `pg7`, `pg8`, `pg9`, `mensagem`) VALUES
(1, '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(4, 'Guilherme', '', 'guilhermescastilhos@gmail.com', 'sim', 'online', 'roll20', 'player', 'nao', 'semanalmente', 'sim', 'sim', 0, 'Essa mensagem é um teste'),
(5, 'Lucas', '', 'lucas@lucas.com', 'nao', 'nunca_joguei', 'nunca_joguei', 'nunca_joguei', 'nunca_joguei', 'nunca_joguei', 'nao', 'nao', 0, '):'),
(6, 'Camila', '', 'camila@camila.com', 'sim', 'online', 'roll20', 'os_dois', 'sim', 'mais_de_uma_vez_semana', 'sim', 'nao', 5, 'Não');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id_cont`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`id_pes`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `id_pes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
