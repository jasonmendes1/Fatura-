-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Jun-2022 às 00:09
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fatura`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `designacaosocial` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` int(9) NOT NULL,
  `nif` int(9) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `codigopostal` int(9) NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `capitalsocial` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `designacaosocial`, `email`, `telefone`, `nif`, `morada`, `codigopostal`, `localidade`, `capitalsocial`) VALUES
(1, 24, 'empresa@gmail.com', 914567541, 158948454, 'Leiria', 2400, 'Leiria', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `faturalinhas`
--

DROP TABLE IF EXISTS `faturalinhas`;
CREATE TABLE IF NOT EXISTS `faturalinhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quantidade` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `valoriva` float NOT NULL,
  `fatura_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDFatura` (`fatura_id`,`produto_id`),
  KEY `IDProduto` (`produto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `faturalinhas`
--

INSERT INTO `faturalinhas` (`id`, `quantidade`, `valor`, `valoriva`, `fatura_id`, `produto_id`) VALUES
(3, 552, 55, 55, 5, 1),
(4, 1, 11, 5, 5, 1),
(5, 2, 11, 5, 5, 1),
(6, 0, 0, 0, 5, 6),
(7, 0, 0, 0, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `faturas`
--

DROP TABLE IF EXISTS `faturas`;
CREATE TABLE IF NOT EXISTS `faturas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `valortotal` float NOT NULL,
  `ivatotal` float NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `func_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `func_id` (`func_id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `faturas`
--

INSERT INTO `faturas` (`id`, `data`, `valortotal`, `ivatotal`, `estado`, `cliente_id`, `func_id`) VALUES
(5, '2022-06-07 22:58:07', 0, 0, 'Emitida', 4, 3),
(6, '2022-06-07 22:58:37', 0, 0, 'Cancelada', 4, 3),
(7, '2022-06-07 22:59:07', 0, 0, 'Em Lancamento', 4, 3),
(8, '2022-06-07 23:00:49', 0, 0, 'Em Lancamento', 4, 3),
(9, '2022-06-07 23:01:35', 0, 0, 'Em Lancamento', 4, 3),
(10, '2022-06-09 16:36:32', 0, 0, 'Em Lancamento', 4, 3),
(11, '2022-06-14 09:18:56', 0, 0, 'Em Lancamento', 4, 3),
(12, '2022-06-14 09:20:53', 0, 0, 'Em Lancamento', 4, 3),
(13, '2022-06-14 09:21:41', 0, 0, 'Em Lancamento', 4, 3),
(14, '2022-06-14 09:23:08', 0, 0, 'Em Lancamento', 4, 3),
(15, '2022-06-14 09:25:48', 0, 0, 'Em Lancamento', 4, 3),
(16, '2022-06-14 09:28:43', 0, 0, 'Em Lancamento', 4, 3),
(17, '2022-06-14 09:54:07', 0, 0, 'Em Lancamento', 4, 3),
(18, '2022-06-14 10:46:19', 0, 0, 'Em Lancamento', 6, 3),
(19, '2022-06-14 10:57:08', 0, 0, 'Em Lancamento', 4, 1),
(20, '2022-06-14 11:03:02', 0, 0, 'Em Lancamento', 6, 1),
(21, '2022-06-14 11:15:29', 0, 0, 'Em Lancamento', 4, 1),
(22, '2022-06-14 11:16:43', 0, 0, 'Em Lancamento', 7, 1),
(23, '2022-06-14 11:19:12', 0, 0, 'Em Lancamento', 4, 1),
(24, '2022-06-14 11:20:19', 0, 0, 'Em Lancamento', 6, 1),
(25, '2022-06-14 11:26:35', 0, 0, 'Em Lancamento', 4, 1),
(26, '2022-06-14 11:44:08', 0, 0, 'Em Lancamento', 7, 1),
(27, '2022-06-14 11:55:20', 0, 0, 'Em Lancamento', 7, 1),
(100, '2022-06-16 22:37:52', 0, 0, 'Em Lancamento', 6, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ivas`
--

DROP TABLE IF EXISTS `ivas`;
CREATE TABLE IF NOT EXISTS `ivas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `percentagem` float NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `vigor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ivas`
--

INSERT INTO `ivas` (`id`, `percentagem`, `descricao`, `vigor`) VALUES
(1, 23, 'Taxa Normal', 1),
(2, 13, 'Taxa Intermedia', 2),
(3, 6, 'Taxa Reduzida', 2),
(4, 2, 'Outro', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `referencia` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `stock` int(11) NOT NULL,
  `iva_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idiva` (`iva_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `referencia`, `descricao`, `preco`, `stock`, `iva_id`) VALUES
(1, 'P0001', 'Produto 1', 50, 50, 2),
(2, 'P0003', 'Produto 2', 50, 50, 1),
(3, 'P0004', 'Produto 3', 25, 50, 1),
(4, 'P0005', 'Produto 5', 79, 50, 2),
(5, 'P0006', 'Produto 6', 450, 50, 1),
(6, 'P0007', 'Produto 7', 300, 50, 1),
(7, 'P0008', 'Produto 8', 30, 50, 2),
(8, 'P0009', 'Produto 9', 20, 50, 1),
(9, 'P0010', 'Produto 10', 90, 50, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(9) NOT NULL,
  `nif` int(9) NOT NULL,
  `morada` varchar(255) NOT NULL,
  `codigopostal` int(9) NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `role` enum('Funcionario','Administrador','Cliente','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `telefone`, `nif`, `morada`, `codigopostal`, `localidade`, `role`) VALUES
(1, 'jason', '123456', 'jason@jason.com', 123456789, 123456789, 'Leiria', 12345677, 'Leiria', 'Funcionario'),
(3, 'funcionario', '123456', 'funcionario@funcionario.com', 123456789, 123456789, 'Leiria', 1234567, 'Leiria', 'Funcionario'),
(4, 'cliente', '123456', 'cliente@cliente.com', 123456789, 132456789, 'Leiria', 1234567, 'Leiria', 'Cliente'),
(5, 'administrador', '123456', 'administrador@administrador.com', 123456789, 123456789, 'Leiria', 1234567, 'Leiria', 'Administrador'),
(6, 'Jorge', '123456', 'cliente2@cliente2.com', 123456789, 123456789, 'cliente2', 1234567, 'cliente2', 'Cliente'),
(7, 'Manuel', '123456', 'cliente3@cliente3.com', 123456789, 123456789, 'cliente3', 1234567, 'cliente3', 'Cliente'),
(8, 'Testefuncionario', '123456', 'testefuncionario@testefuncionario.com', 123456789, 123456789, 'Leiria', 1234567, 'Leiria', 'Funcionario'),
(9, 'clientetest', '123456', 'clientetest@clientetest.com', 123456789, 123456789, 'Leiria', 12345677, 'Leiria', 'Cliente');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `faturalinhas`
--
ALTER TABLE `faturalinhas`
  ADD CONSTRAINT `faturalinhas_ibfk_1` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `faturalinhas_ibfk_2` FOREIGN KEY (`fatura_id`) REFERENCES `faturas` (`id`);

--
-- Limitadores para a tabela `faturas`
--
ALTER TABLE `faturas`
  ADD CONSTRAINT `faturas_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `faturas_ibfk_2` FOREIGN KEY (`func_id`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`iva_id`) REFERENCES `ivas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
