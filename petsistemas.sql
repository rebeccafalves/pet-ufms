-- phpMyAdmin SQL Dump
-- version 3.4.9
lillydi cacere
-- http://www.phpmyadmin.net
-- Daivid
-- Servidor: localhost
-- Tempo de Geração: 08/06/2012 às 15h53min
-- Versão do Servidor: 5.5.22
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `petsistemas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `nome` varchar(60) NOT NULL,
  `cod_curso` tinyint(4) NOT NULL,
  PRIMARY KEY (`cod_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`nome`, `cod_curso`) VALUES
('Análise', 1),
('Ciência', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `faca_parte`
--

CREATE TABLE IF NOT EXISTS `faca_parte` (
  `idfaca_parte` int(11) NOT NULL AUTO_INCREMENT,
  `caminho_arquivo` varchar(100) NOT NULL,
  PRIMARY KEY (`idfaca_parte`),
  UNIQUE KEY `caminho_arquivo_UNIQUE` (`caminho_arquivo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `faca_parte`
--

INSERT INTO `faca_parte` (`idfaca_parte`, `caminho_arquivo`) VALUES
(6, '../arquivos/facaParte/'),
(2, '../arquivos/facaParte/1'),
(3, '../arquivos/facaParte/2'),
(10, '../arquivos/facaParte/salão.png'),
(8, '../arquivos/facaParte/Site.pdf'),
(12, 'arquivos/facaParte/IMG00545.jpg'),
(11, 'arquivos/facaParte/Site.pdf'),
(1, 'hahah');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membros`
--

CREATE TABLE IF NOT EXISTS `membros` (
  `nome` varchar(60) NOT NULL,
  `registro` varchar(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `cod_curso` tinyint(4) NOT NULL COMMENT 'numero relacionado ao curso',
  `dara_nasc` date DEFAULT NULL,
  `descricao` text,
  `permissao` tinyint(4) NOT NULL COMMENT 'nivel de acesso',
  `senha` varchar(32) NOT NULL,
  `tipo` char(1) NOT NULL COMMENT 'definir se � professor ou aluno',
  `status` char(1) NOT NULL COMMENT 'se o membro eh ativo, inativo ou outro estatus',
  PRIMARY KEY (`registro`),
  UNIQUE KEY `email` (`email`,`senha`),
  KEY `cod_curso` (`cod_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela que guardara informacoes sobre os membros do pet';

--
-- Extraindo dados da tabela `membros`
--

INSERT INTO `membros` (`nome`, `registro`, `email`, `cod_curso`, `dara_nasc`, `descricao`, `permissao`, `senha`, `tipo`, `status`) VALUES
('$nome', '$registro', '$email', 1, '1991-08-19', '$descricao', 1, '$senha', '1', '1'),
('TESTE', '12189281921', 'email', 1, '1999-10-10', 'teste', 1, '698dc19d489c4e4db73e28a713eab07b', '2', '1'),
('Henrique Marinho Louveira Candia', '20101903', 'henrique', 1, '1908-01-06', '', 2, 'd41d8cd98f00b204e9800998ecf8427e', '2', '2'),
('Rebecca Franca Alves', '201019030577', 'rebeccafalves@gmail.com', 1, '1991-08-19', 'Membra desde dez/2010.', 1, 'd41d8cd98f00b204e9800998ecf8427e', '2', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro_projeto`
--

CREATE TABLE IF NOT EXISTS `membro_projeto` (
  `id_membro` varchar(20) NOT NULL,
  `id_projeto` int(11) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`),
  KEY `id_membro` (`id_membro`,`id_projeto`),
  KEY `id_projeto` (`id_projeto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='liga membros a projetos' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `data` date NOT NULL,
  `conteudo` text NOT NULL,
  `assunto` varchar(50) DEFAULT NULL,
  `ID_registro` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID_registro` (`ID_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='tabela para guardar informa��es sobre noticias do pet' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE IF NOT EXISTS `projeto` (
  `nome` varchar(60) NOT NULL,
  `data_ini` date NOT NULL,
  `data_fim` date NOT NULL,
  `descricao` text NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` tinyint(1) NOT NULL,
  `id_tutor` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `id_tutor` (`id_tutor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='guarda informa��es de projetos' AUTO_INCREMENT=1 ;

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `membros`
--


--
-- Restrições para a tabela `membro_projeto`
--

--
-- Restrições para a tabela `noticia`
--


--
-- Restrições para a tabela `projeto`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
