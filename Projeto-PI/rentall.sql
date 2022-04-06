-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06-Jan-2022 às 16:24
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rentall`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecouser`
--

CREATE TABLE `enderecouser` (
  `id` int(11) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `idEstado` int(11) NOT NULL,
  `idCidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_user`
--

CREATE TABLE `login_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` char(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login_user`
--

INSERT INTO `login_user` (`id`, `email`, `senha`, `nome`, `sobrenome`) VALUES
(25, 'guu.assis@hotmail.com', '$2y$10$IbuWuXJ2V2t/zVH/2dSzKO7NNOugBWA.Y4cxLo4DpARUF3kjd/bWi', 'Gustavo', 'Assis'),
(26, 'rodrigo@rentall.com', '$2y$10$vWGt6/4JXUlQakZaElUmUuKn1c0iUU/.S/jF5znV.brx7.S8ysXMG', 'Rodrigo', 'Rossi'),
(27, 'gui@rentall.com', '$2y$10$zaXTeU8lpUPMzLEqWM186ein1z8Yq8959AZ6fC4XIkxGyYWgDQo/G', 'Guilherme', 'Lima'),
(28, 'rentall@email.com', '$2y$10$udOmroKDwe5y56x0yHFJ2uGBjzPLNY4CdolRKvsIJN5gOYYI.7yl2', 'Gustavo', 'Assis'),
(29, 'samuel@placa.com', '$2y$10$Gq0z9CFbh4w5XZUqWProF.VSr5cogWb.efIIhlfGNc1zp8XQ7q5t2', 'Samuel', 'Placa'),
(30, 'pradoisabelamartins@gmail.com', '$2y$10$2f1baLIKc./PfBpGLCb4M.lzDG6X1LLMj.PQHEcqRloCRKL3y2cAy', 'Isabela', 'Prado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `titulo`, `categoria`, `preco`, `modelo`, `marca`, `descricao`, `imagem`) VALUES
(62, 'bike', 'Esportes', '222.00', 'Testando-final', 'Penalty', 'qqqq', 'imagem-produto/6086794118user.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtouser`
--

CREATE TABLE `produtouser` (
  `id` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `emal` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `dtNasc` date NOT NULL,
  `rg` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `idEndereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `enderecouser`
--
ALTER TABLE `enderecouser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEstado` (`idEstado`),
  ADD KEY `idCidade` (`idCidade`);

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtouser`
--
ALTER TABLE `produtouser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `enderecouser`
--
ALTER TABLE `enderecouser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estado`
--
ALTER TABLE `estado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `produtouser`
--
ALTER TABLE `produtouser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `enderecouser`
--
ALTER TABLE `enderecouser`
  ADD CONSTRAINT `enderecouser_ibfk_1` FOREIGN KEY (`idEstado`) REFERENCES `estado` (`id`),
  ADD CONSTRAINT `enderecouser_ibfk_2` FOREIGN KEY (`idCidade`) REFERENCES `cidade` (`id`);

--
-- Limitadores para a tabela `produtouser`
--
ALTER TABLE `produtouser`
  ADD CONSTRAINT `produtouser_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `produtouser_ibfk_3` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idEndereco`) REFERENCES `enderecouser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
