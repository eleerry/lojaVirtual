-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Set-2023 às 18:10
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lojaeleerry`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `cate_id` int NOT NULL AUTO_INCREMENT,
  `cate_nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cate_id`, `cate_nome`, `cate_slug`) VALUES
(1, 'Geral', 'geral'),
(2, 'Camisas', 'camisas'),
(3, 'calças', 'calcas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_categoria` int NOT NULL,
  `pro_nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_peso` double(9,3) NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_largura` int NOT NULL,
  `pro_altura` int NOT NULL,
  `pro_comprimento` int NOT NULL,
  `pro_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_estoque` int NOT NULL,
  `pro_modelo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_referencia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pro_fabricante` int NOT NULL,
  `pro_ativo` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pro_frete_free` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Não',
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pro_id`, `pro_categoria`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_valor`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_referencia`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 1, 'Camisa Social', 'Essa é uma camisa social manga longa', 0.000, 80.00, 80, 80, 80, 'ainda nao tem', 'camisa', 1, 'modelo01', 'ref01', 1, '1', 'gratuito');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
