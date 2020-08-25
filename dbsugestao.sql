-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25/08/2020 às 22:00
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsugestao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbbairro`
--

CREATE TABLE `tbbairro` (
  `id_bairro` int(11) NOT NULL,
  `bairro` varchar(220) NOT NULL,
  `lon` varchar(100) NOT NULL,
  `lat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbbairro`
--

INSERT INTO `tbbairro` (`id_bairro`, `bairro`, `lon`, `lat`) VALUES
(1, 'Litoral', '-19.8265654', '-40.2928355'),
(2, 'Norte', '-19.583456', '-40.2136192'),
(3, 'Sul', '-19.8745999', '-40.1062969'),
(4, 'Sede', '-19.8745999', '-40.1062969'),
(5, 'Aldeias', '-19.8745999', '-40.1062969');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbsugestao`
--

CREATE TABLE `tbsugestao` (
  `id_sugestao` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `idade` int(11) NOT NULL,
  `id_bairro` int(11) NOT NULL,
  `tema` varchar(220) NOT NULL,
  `sugestao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbsugestao`
--

INSERT INTO `tbsugestao` (`id_sugestao`, `nome`, `email`, `telefone`, `idade`, `id_bairro`, `tema`, `sugestao`) VALUES
(33, 'Jaqueline Maria Rangel Lopes', 'jaquelinemariarangellopes@gmail.com', '2799988275', 20, 1, 'TEMA AI QUE EUE QUERO DISCUTIR COM VOCÊS', 'EU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISSO Á âEU QUERO SUGERIR ISS'),
(34, 'Thalles Rangel ', 'rangelthr@gmail.com', '279998275832', 20, 4, 'Cidadania, diversidades e direitos humanos', 'Uma nova sugestão'),
(35, 'thalles range lopes', 'aaa@gmail.com', '27989989', 25, 3, 'Cidadania, diversidades e direitos humanos', 'sdadsadsadsadsasdadsadsadsadsasdadsadsadsadsasdadsadsadsadsa'),
(36, 'sdsadas', 'ssi@gmail.com', '2798879889', 20, 4, 'Saúde', 'sdfasdsad5s14514'),
(37, 'aaaaa', 'aaa@gmail.com', '36596526', 12, 5, 'Servidor Público', 'sadsadasd21as6d2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `flag_excluido` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tbusuario`
--

INSERT INTO `tbusuario` (`id_usuario`, `nome_usuario`, `email`, `senha`, `flag_excluido`) VALUES
(1, 'Alcântaro Filho', 'alcantarofilho@impactaweb.com.br', '283cb1b3d314433439ccab843ef00d61', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tbbairro`
--
ALTER TABLE `tbbairro`
  ADD PRIMARY KEY (`id_bairro`);

--
-- Índices de tabela `tbsugestao`
--
ALTER TABLE `tbsugestao`
  ADD PRIMARY KEY (`id_sugestao`),
  ADD KEY `id_bairro` (`id_bairro`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tbbairro`
--
ALTER TABLE `tbbairro`
  MODIFY `id_bairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbsugestao`
--
ALTER TABLE `tbsugestao`
  MODIFY `id_sugestao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tbsugestao`
--
ALTER TABLE `tbsugestao`
  ADD CONSTRAINT `tbsugestao_ibfk_1` FOREIGN KEY (`id_bairro`) REFERENCES `tbbairro` (`id_bairro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
