-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 21/09/2012 às 22h25min
-- Versão do Servidor: 5.5.22
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `pet-sistemas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivos`
--

CREATE TABLE IF NOT EXISTS `arquivos` (
  `id_arquivos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caminho` varchar(100) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_arquivos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `arquivos`
--

INSERT INTO `arquivos` (`id_arquivos`, `caminho`, `data`) VALUES
(1, 'arquivos/usuarios/Chrysanthemum.jpg', '2012-09-14'),
(2, 'arquivos/usuarios/Desert.jpg', '2012-09-14'),
(3, 'arquivos/usuarios/Hydrangeas.jpg', '2012-09-14'),
(4, 'arquivos/usuarios/Penguins.jpg', '2012-09-14'),
(5, 'arquivos/usuarios/315305_394451153943454_1765037073_n.jpg', '2012-09-14'),
(6, 'arquivos/usuarios/427203_394451237276779_319295667_n.jpg', '2012-09-14'),
(7, 'arquivos/usuarios/430233_394451323943437_1318620508_n_copy.jpg', '2012-09-14'),
(8, 'arquivos/usuarios/blabla.jpg', '2012-09-14'),
(9, 'arquivos/usuarios/lalala.jpg', '2012-09-17'),
(10, 'arquivos/usuarios/bla.jpg', '2012-09-18'),
(11, 'arquivos/multimidia/20120824_193145.jpg', '2012-09-20'),
(12, 'arquivos/multimidia/20120824_193213.jpg', '2012-09-20'),
(13, 'arquivos/multimidia/20120824_193217.jpg', '2012-09-20'),
(14, 'arquivos/noticias/ufms.jpg', '2012-09-21'),
(15, 'arquivos/projetos/csu.gif', '2012-09-21'),
(16, 'arquivos/publicacoes/pub.jpg', '2012-09-21'),
(17, 'arquivos/faca_parte/pdf.pdf', '2012-09-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `tipo` enum('relatorio','planejamento','editais','modelos','outros') NOT NULL COMMENT 'tipos de documentos',
  `id_documentos` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `caminho_id_arquivos` int(10) unsigned NOT NULL,
  `ano` int(11) NOT NULL,
  PRIMARY KEY (`id_documentos`),
  KEY `caminho_id_arquivos` (`caminho_id_arquivos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faca_parte`
--

CREATE TABLE IF NOT EXISTS `faca_parte` (
  `caminho_id_arquivos` int(10) unsigned NOT NULL,
  `id_faca_parte` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_faca_parte`),
  KEY `caminho_id_arquivos` (`caminho_id_arquivos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `faca_parte`
--

INSERT INTO `faca_parte` (`caminho_id_arquivos`, `id_faca_parte`) VALUES
(17, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `multimidia`
--

CREATE TABLE IF NOT EXISTS `multimidia` (
  `id_multimidia` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_arquivos` int(10) unsigned NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_multimidia`),
  KEY `arquivo` (`id_arquivos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `multimidia`
--

INSERT INTO `multimidia` (`id_multimidia`, `id_arquivos`, `titulo`, `data`) VALUES
(1, 11, 'Reunião do Pet 1', '2012-08-24'),
(2, 12, 'Reunião do Pet 2', '2012-08-24'),
(3, 13, 'Reunião do Pet 3', '2012-08-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `data`, `titulo`, `conteudo`, `autor`, `assunto`, `tipo`, `caminho_id_arquivos`) VALUES
(1, '2012-01-20', 'UFMS de Portas Abertas', 'A UFMS está realizando durante esta semana o evento UFMS de portas abertas onde os estudantes estão apresentando seus projetos.', 2, '', '3', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `petiano`
--

CREATE TABLE IF NOT EXISTS `petiano` (
  `rga` varchar(12) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `org_exp` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `endereco` text NOT NULL,
  `data_nasc` date NOT NULL,
  `data_ini` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `id_usuario` int(11) unsigned NOT NULL,
  `pai` varchar(50) NOT NULL,
  `mae` varchar(50) NOT NULL,
  PRIMARY KEY (`rga`),
  UNIQUE KEY `cpf` (`cpf`),
  UNIQUE KEY `rg` (`rg`,`org_exp`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `petiano`
--

INSERT INTO `petiano` (`rga`, `cpf`, `rg`, `org_exp`, `telefone`, `endereco`, `data_nasc`, `data_ini`, `data_fim`, `id_usuario`, `pai`, `mae`) VALUES
('0000111', '09991919', '9191991', 'SSP', '919191', 'Casa', '1990-10-10', '1990-10-10', NULL, 10, 'Casa', 'Casa'),
('1010101', '101010', '10101010101', 'ssp', '101010', 'Teste Petiano', '1990-10-10', '2011-10-10', NULL, 2, 'Teste Petiano', 'Teste Petiano');

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE IF NOT EXISTS `projeto` (
  `nome` varchar(100) NOT NULL,
  `data_ini` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `descricao` text NOT NULL,
  `tipo` int(11) NOT NULL,
  `id_projeto` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `arquivo_id_arquivos` int(10) unsigned DEFAULT NULL,
  `id_usuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_projeto`),
  KEY `arquivo_id_arquivos` (`arquivo_id_arquivos`),
  KEY `projeto_prop` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`nome`, `data_ini`, `data_fim`, `descricao`, `tipo`, `id_projeto`, `arquivo_id_arquivos`, `id_usuario`) VALUES
('CSU', '2012-04-10', '2012-09-20', 'Projeto desenvolvido pelo pet. Computação sem Computador', 3, 1, 15, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE IF NOT EXISTS `publicacoes` (
  `titulo` varchar(100) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `caminho_id_arquivos` int(10) unsigned NOT NULL,
  `data_pub` date NOT NULL,
  `id_publicacoes` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_publicacoes`),
  KEY `caminho_id_arquivos` (`caminho_id_arquivos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`titulo`, `assunto`, `caminho_id_arquivos`, `data_pub`, `id_publicacoes`) VALUES
('Primeira Publicação', 'Grafos', 16, '2012-04-13', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `data_ini` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `id_tutor` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_tutor`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tutor`
--

INSERT INTO `tutor` (`data_ini`, `data_fim`, `id_tutor`, `id_usuario`) VALUES
('2010-10-10', NULL, 1, 1),
('2000-10-12', NULL, 2, 3),
('2000-10-13', NULL, 3, 4),
('2000-12-12', NULL, 4, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
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
  `lattes` varchar(100) NOT NULL DEFAULT '''não possui''',
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `nome_usuario_UNIQUE` (`nome_usuario`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `foto_id_arquivos` (`foto_id_arquivos`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `senha`, `nome`, `permissao`, `descricao`, `email`, `foto_id_arquivos`, `status`, `lattes`) VALUES
(1, 'Teste Tutor', 'ba0b5032731e090f7806d91e2ad4a843', 'Teste Tutor', 1, 'Teste Tutor', 'Teste Tutor', 1, 'A', 'Teste Tutor'),
(2, 'Teste Petiano', '18b0270f6d1871acdf65c2f3d3f59f04', 'Teste Petiano', 1, 'Teste Petiano', 'Teste Petiano', 2, 'A', 'Teste Petiano'),
(3, 'Testes', 'd7d22c0d9dc724ff9bc2ae570b54012a', 'Testes', 1, 'Testes', 'Testes', 3, 'A', 'Testes'),
(4, 'Mais Teste ', '49d879685b37089724d8c9010ddd7811', 'Mais Teste ', 1, 'Mais Teste ', 'Mais Teste ', 4, 'A', 'Mais Teste '),
(5, 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', 'aaa', 1, 'aaa', 'aaa', 5, 'A', 'aaa'),
(6, 'bbb', '08f8e0260c64418510cefb2b06eee5cd', 'bbb', 1, 'bbb', 'bbb', 6, 'A', 'bbb'),
(7, 'Teste', '8e6f6f815b50f474cf0dc22d4f400725', 'Teste', 1, 'Teste', 'Teste', 7, 'A', 'Teste'),
(8, 'Bla', '756eae833e2a14bc716861be073dd4b8', 'Bla', 1, 'Bla', 'Bla', 8, 'A', 'Bla'),
(9, 'lalala', '9aa6e5f2256c17d2d430b100032b997c', 'lalala', 1, 'lalala', 'lalala', 9, 'A', 'lalala'),
(10, 'Casa', 'ca90fdc7b90b2152e5dcccefb2c828f7', 'Casa', 1, 'Casa', 'Casa', 10, 'A', 'Casa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_projeto`
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
-- Extraindo dados da tabela `usuario_projeto`
--

INSERT INTO `usuario_projeto` (`id_usuario`, `id_projeto`, `data_ini`) VALUES
(2, 1, '2012-04-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_publicacoes`
--

CREATE TABLE IF NOT EXISTS `usuario_publicacoes` (
  `id_usuario_publicacoes` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(10) unsigned NOT NULL,
  `id_publicacoes` int(10) unsigned NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario_publicacoes`),
  UNIQUE KEY `id_usuario_UNIQUE` (`id_usuario`),
  UNIQUE KEY `id_publicacoes_UNIQUE` (`id_publicacoes`),
  KEY `usuario` (`id_usuario`),
  KEY `publicacao` (`id_publicacoes`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `usuario_publicacoes`
--

INSERT INTO `usuario_publicacoes` (`id_usuario_publicacoes`, `id_usuario`, `id_publicacoes`, `data`) VALUES
(1, 2, 1, '2012-04-13');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `documentos_ibfk_1` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Restrições para a tabela `faca_parte`
--
ALTER TABLE `faca_parte`
  ADD CONSTRAINT `faca_parte_ibfk_1` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Restrições para a tabela `multimidia`
--
ALTER TABLE `multimidia`
  ADD CONSTRAINT `arquivo` FOREIGN KEY (`id_arquivos`) REFERENCES `arquivos` (`id_arquivos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`autor`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `noticia_ibfk_2` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Restrições para a tabela `petiano`
--
ALTER TABLE `petiano`
  ADD CONSTRAINT `petiano_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para a tabela `projeto`
--
ALTER TABLE `projeto`
  ADD CONSTRAINT `projeto_ibfk_1` FOREIGN KEY (`arquivo_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`),
  ADD CONSTRAINT `projeto_prop` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `publicacoes`
--
ALTER TABLE `publicacoes`
  ADD CONSTRAINT `publicacoes_ibfk_1` FOREIGN KEY (`caminho_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Restrições para a tabela `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Restrições para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`foto_id_arquivos`) REFERENCES `arquivos` (`id_arquivos`);

--
-- Restrições para a tabela `usuario_projeto`
--
ALTER TABLE `usuario_projeto`
  ADD CONSTRAINT `usuario_projeto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_projeto_ibfk_2` FOREIGN KEY (`id_projeto`) REFERENCES `projeto` (`id_projeto`);

--
-- Restrições para a tabela `usuario_publicacoes`
--
ALTER TABLE `usuario_publicacoes`
  ADD CONSTRAINT `publicacao` FOREIGN KEY (`id_publicacoes`) REFERENCES `publicacoes` (`id_publicacoes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
