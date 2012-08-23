-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2012 at 02:48 AM
-- Server version: 5.5.19
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pet-sistemas`
--

-- --------------------------------------------------------

--
-- Table structure for table `arquivos`
--

CREATE TABLE IF NOT EXISTS `arquivos` (
  `id_arquivos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caminho` varchar(100) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `nome` varchar(100) NOT NULL,
  `id_documentos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caminho_id_arquivos` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_documentos`),
  KEY `caminho_id_arquivos` (`caminho_id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `faca_parte`
--

CREATE TABLE IF NOT EXISTS `faca_parte` (
  `caminho_id_arquivos` int(10) unsigned NOT NULL,
  `id_faca_parte` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_faca_parte`),
  KEY `caminho_id_arquivos` (`caminho_id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

CREATE TABLE IF NOT EXISTS `noticia` (
  `id_noticia` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `conteudo` text NOT NULL,
  `autor` int(11) unsigned NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `tipo` varchar(3) NOT NULL COMMENT 'ensino = ens, pesquisa = pes, extensao = ext, diversos = div',
  `caminho_id_arquivos` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_noticia`),
  KEY `autor` (`autor`),
  KEY `caminho_id_arquivos` (`caminho_id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `petiano`
--

CREATE TABLE IF NOT EXISTS `petiano` (
  `rga` varchar(12) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `org_exp` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` text NOT NULL,
  `lattes` varchar(100) NOT NULL,
  `data_nasc` date NOT NULL,
  `data_ini` date NOT NULL,
  `data_fim` date NOT NULL,
  `id_usuario` int(11) unsigned NOT NULL,
  PRIMARY KEY (`rga`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `rg` (`rg`,`org_exp`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `projeto`
--

CREATE TABLE IF NOT EXISTS `projeto` (
  `nome` int(11) NOT NULL,
  `data_ini` int(11) NOT NULL,
  `data_fim` int(11) NOT NULL,
  `descricao` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `id_projeto` int(11) unsigned NOT NULL,
  `arquivo_id_arquivos` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id_projeto`),
  KEY `arquivo_id_arquivos` (`arquivo_id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `publicacoes`
--

CREATE TABLE IF NOT EXISTS `publicacoes` (
  `autor` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `caminho_id_arquivos` int(10) unsigned NOT NULL,
  `data_pub` date NOT NULL,
  `id_publicacoes` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_publicacoes`),
  KEY `caminho_id_arquivos` (`caminho_id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `data_ini` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `id_tutor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_tutor`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `permissao` int(11) DEFAULT NULL,
  `descricao` text,
  `email` varchar(100) DEFAULT NULL,
  `foto_id_arquivos` int(10) unsigned DEFAULT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `nome_usuario_UNIQUE` (`nome_usuario`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `foto_id_arquivos` (`foto_id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuario_projeto`
--

CREATE TABLE IF NOT EXISTS `usuario_projeto` (
  `id_usuario` int(11) unsigned NOT NULL,
  `id_projeto` int(11) unsigned NOT NULL,
  `data_ini` date NOT NULL,
  PRIMARY KEY (`id_usuario`,`id_projeto`),
  KEY `id_projeto` (`id_projeto`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Constraints for table `faca_parte`
--
ALTER TABLE `faca_parte`
  ADD CONSTRAINT `faca_parte_ibfk_1` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Constraints for table `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_2` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`),
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `petiano`
--
ALTER TABLE `petiano`
  ADD CONSTRAINT `petiano_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `projeto_ibfk_1` FOREIGN KEY (`arquivo_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Constraints for table `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Constraints for table `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`foto_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Constraints for table `usuario_projeto`
--
ALTER TABLE `usuario_projeto`
  ADD CONSTRAINT `usuario_projeto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_projeto_ibfk_2` FOREIGN KEY (`id_projeto`) REFERENCES `projeto` (`id_projeto`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
