-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jun-2021 às 05:43
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `qnt` decimal(10,2) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `codigo`, `nome`, `qnt`, `preco`, `data`) VALUES
(3, 12345, 'macarrao', '9994.00', '3.00', '2021-03-08'),
(4, 22222, 'feijão', '9.00', '11.11', '2021-05-18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `relatorio`
--

CREATE TABLE `relatorio` (
  `id` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `qntd` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `relatorio`
--

INSERT INTO `relatorio` (`id`, `id_prod`, `tipo`, `qntd`, `data`) VALUES
(5, 3, 'remove', 1, '2021-06-02'),
(6, 4, 'add', 1, '2021-06-02'),
(7, 4, 'add', 1, '2021-06-02'),
(8, 3, 'remove', 1, '2021-06-02'),
(9, 3, 'remove', 1100, '2021-06-02'),
(22, 3, 'add', 99, '2021-06-02'),
(23, 3, 'add', 900, '2021-06-02'),
(24, 3, 'remove', 900, '2021-06-02'),
(25, 3, 'add', 900, '2021-06-02'),
(42, 3, 'add', 1, '2021-06-02'),
(43, 3, 'add', 1, '2021-06-02'),
(44, 3, 'add', 1, '2021-06-02'),
(45, 3, 'add', 108, '2021-06-02'),
(46, 4, 'venda', 2, '2021-06-02'),
(47, 3, 'venda', 1, '2021-06-02'),
(48, 3, 'venda', 1, '2021-06-02'),
(49, 3, 'venda', 1, '2021-06-02'),
(50, 3, 'venda', 1, '2021-06-02'),
(51, 3, 'venda', 1, '2021-06-02'),
(52, 3, 'venda', 2, '2021-06-02'),
(53, 3, 'venda', 3, '2021-06-02'),
(54, 3, 'venda', 5, '2021-06-02'),
(55, 3, 'venda', 5, '2021-06-02'),
(56, 3, 'venda', 3, '2021-06-02'),
(57, 3, 'venda', 1, '2021-06-02'),
(58, 3, 'venda', 1, '2021-06-02'),
(59, 3, 'venda', 1, '2021-06-02'),
(60, 3, 'venda', 1, '2021-06-02'),
(61, 3, 'venda', 1, '2021-06-02'),
(62, 3, 'venda', 1, '2021-06-02'),
(63, 3, 'venda', 5, '2021-06-02'),
(64, 3, 'venda', 5, '2021-06-02'),
(65, 3, 'venda', 5, '2021-06-02'),
(66, 3, 'venda', 5, '2021-06-02'),
(67, 3, 'venda', 5, '2021-06-02'),
(68, 3, 'venda', 5, '2021-06-03'),
(69, 3, 'venda', 5, '2021-06-03'),
(70, 3, 'add', 9944, '2021-06-03'),
(71, 4, 'venda', 2, '2021-06-03'),
(72, 3, 'venda', 6, '2021-06-03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `cpf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `nome`, `senha`, `nivel`, `cpf`) VALUES
(1, 'santosalison561@gmail.com', 'Alison Vitor', '12345', 0, '000.000.000-00'),
(4, 'santos@gmail.com', 'Alison Vitor Brito Souza', '12345', 1, '111.111.111-11');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- Índices para tabela `relatorio`
--
ALTER TABLE `relatorio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `relatorio`
--
ALTER TABLE `relatorio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
