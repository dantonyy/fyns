-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Jun-2022 às 22:45
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `finance`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `email`, `nome`, `sobrenome`) VALUES
(1, 'admin', 'admin', 'dantonycbd@gmail.com', 'Dantony', 'Donato');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bancos`
--

DROP TABLE IF EXISTS `bancos`;
CREATE TABLE IF NOT EXISTS `bancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bancos`
--

INSERT INTO `bancos` (`id`, `nome`) VALUES
(NULL, 'Banco do Brasil'),
(NULL, 'Inter'),
(NULL, 'NuBank'),
(NULL, 'Digio');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos_tipo`
--

DROP TABLE IF EXISTS `lancamentos_tipo`;
CREATE TABLE IF NOT EXISTS `lancamentos_tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `lancamentos_tipo` (`id`, `nome`) VALUES
(1, 'Receita'),
(2, 'Despesa'),
(3, 'Investimento');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `banco_user`
--

DROP TABLE IF EXISTS `banco_user`;
CREATE TABLE IF NOT EXISTS `banco_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `conta_corrente` int(11) NOT NULL,
  `conta_poupanca` int(11) NOT NULL,
  `cartao_credito` int(11),
  `cartao_debito` int(11),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos`
--

DROP TABLE IF EXISTS `lancamentos`;
CREATE TABLE IF NOT EXISTS `lancamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `lancamento_tipo` int(11) NOT NULL,
  `lancamento_categoria` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` float(9) NOT NULL,
  `descricao` varchar(250),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Estrutura da tabela `investimento`
--

DROP TABLE IF EXISTS `investimento`;
CREATE TABLE IF NOT EXISTS `investimento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` float(9) NOT NULL,
  `descricao` varchar(250),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_despesas`
--

DROP TABLE IF EXISTS `categoria_despesas`;
CREATE TABLE IF NOT EXISTS `categoria_despesas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_despesas`
--

INSERT INTO `categoria_despesas` (`id`, `nome`) VALUES
(0, 'Selecione'),
(NULL, 'FIXO - Aluguel'),
(NULL, 'FIXO - Água'),
(NULL, 'FIXO - Luz'),
(NULL, 'FIXO - Internet'),
(NULL, 'Fatura - Digio'),
(NULL, 'Fatura - Inter'),
(NULL, 'Fatura - NuBank');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_receitas`
--

DROP TABLE IF EXISTS `categoria_receitas`;
CREATE TABLE IF NOT EXISTS `categoria_receitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_receitas`
--

INSERT INTO `categoria_receitas` (`id`, `nome`) VALUES
(0, 'Selecione'),
(NULL, 'Bolsa - Estágio'),
(NULL, 'Bolsa - PAPFE'),
(NULL, 'Bolsa - FAPESP/CNPQ'),
(NULL, 'Auxílio - Painho'),
(NULL, 'Auxílio - Mainha'),
(NULL, 'PIX'),
(NULL, 'Outros');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_lancamentos`
--

DROP TABLE IF EXISTS `categoria_lancamentos`;
CREATE TABLE IF NOT EXISTS `categoria_lancamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_lancamentos`
--

INSERT INTO `categoria_lancamentos` (`id`, `nome`) VALUES
(0, 'Selecione'),
(NULL, 'Transporte - Uber'),
(NULL, 'Transporte - Onibus'),
(NULL, 'iFood'),
(NULL, 'Mercado'),
(NULL, 'Lanche'),
(NULL, 'Remédios'),
(NULL, 'Compras'),
(NULL, 'Jogos'),
(NULL, 'Entreterimento'),
(NULL, 'PIX'),
(NULL, 'Outros');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Estrutura da tabela `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_inicial` date NOT NULL,
  `data_final` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `data`
--

INSERT INTO `data` (`id`, `data_inicial`, `data_final`) VALUES
(1, '2022-10-01', '2022-10-31'),
(2, '2022-10-01', '2022-10-31'),
(3, '2022-10-01', '2022-10-31');