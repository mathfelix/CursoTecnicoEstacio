-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Abr-2015 às 06:18
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `cpf` varchar(20) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`cpf`, `senha`, `nivel`) VALUES
('111.111.111-11', 'ramica', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `data` varchar(10) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone` varchar(18) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cpf`, `nome`, `data`, `sexo`, `email`, `telefone`, `senha`, `nivel`) VALUES
('222.222.222-22', 'Matheus', '17/12/1995', 'Masculino', 'matheus_felix@hotmail.com', '(23) 3333-3333', 'awgaw', 1),
('333.333.333-33', 'awgawg', '33/33/3333', 'Masculino', 'gawgawg', '(22) 2222-2222', '2agwgawgw', 1),
('444.444.444-44', 'ahawhawh', '33/33/3333', 'Masculino', 'htrdjdtrjtd', '(11) 1111-1232', 'ahbzzx', 1),
('555.555.555-55', '5awhwahwa', '66/66/6666', 'Masculino', 'awhesjdsrjrs', '(33) 3333-3333', '33axgrs', 1),
('666.666.666-66', 'awghahwa', '23/33/3333', 'Masculino', 'awheshrs', '(23) 1234-1231', 'zdgszetesa', 1),
('777.777.777-77', 'sejdtujtfdjftd', '31/23/1231', 'Masculino', 'fxcjgfcdkjyhgklg', '(88) 8888-8888', 'sdhsrhsre', 1),
('888.888.888-88', 'awgawgawg', '33/33/3333', 'Masculino', '6i7ytiy87iy', '(11) 1111-1111', 'awhawhwah', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunoxatividade`
--

CREATE TABLE IF NOT EXISTS `alunoxatividade` (
  `cpf_aluno` varchar(15) NOT NULL,
  `id_atividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `alunoxatividade`
--

INSERT INTO `alunoxatividade` (`cpf_aluno`, `id_atividade`) VALUES
('222.222.222-22', 1),
('222.222.222-22', 2),
('333.333.333-33', 2),
('444.444.444-44', 2),
('444.444.444-44', 3),
('777.777.777-77', 3),
('888.888.888-88', 3),
('777.777.777-77', 4),
('666.666.666-66', 5),
('666.666.666-66', 6),
('222.222.222-22', 7),
('222.222.222-22', 8),
('333.333.333-33', 8),
('555.555.555-55', 8),
('666.666.666-66', 8),
('777.777.777-77', 8),
('444.444.444-44', 9),
('666.666.666-66', 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--

CREATE TABLE IF NOT EXISTS `atividades` (
`id` int(11) NOT NULL,
  `nome` varchar(25) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `atividades`
--

INSERT INTO `atividades` (`id`, `nome`) VALUES
(1, 'Natacao'),
(2, 'Pilates'),
(3, 'Ergometria'),
(4, 'Musculacao'),
(5, 'Alongamento'),
(6, 'Treinamento Funcional'),
(7, 'Jiu Jitsu'),
(8, 'Body Combat'),
(9, 'Muay Thai'),
(10, 'Boxe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `data` varchar(10) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone` varchar(18) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `nivel` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`cpf`, `nome`, `data`, `sexo`, `email`, `telefone`, `senha`, `nivel`) VALUES
('421.342.423-23', 'EUUUU', '16/23/4421', 'Feminino', 'awhwa@jhasewha.com', '(21)1261-5123', 'awgaw', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professorxatividade`
--

CREATE TABLE IF NOT EXISTS `professorxatividade` (
  `cpf_professor` varchar(15) NOT NULL,
  `id_atividade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professorxatividade`
--

INSERT INTO `professorxatividade` (`cpf_professor`, `id_atividade`) VALUES
('421.342.423-23', 1),
('421.342.423-23', 2),
('421.342.423-23', 3),
('421.342.423-23', 4),
('421.342.423-23', 5),
('421.342.423-23', 6),
('421.342.423-23', 7),
('421.342.423-23', 8),
('421.342.423-23', 9),
('421.342.423-23', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
 ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
 ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `alunoxatividade`
--
ALTER TABLE `alunoxatividade`
 ADD PRIMARY KEY (`cpf_aluno`,`id_atividade`), ADD KEY `FK_alunoxatividade3` (`id_atividade`);

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
 ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `professorxatividade`
--
ALTER TABLE `professorxatividade`
 ADD PRIMARY KEY (`cpf_professor`,`id_atividade`), ADD KEY `FK_professorxatividade3` (`id_atividade`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `alunoxatividade`
--
ALTER TABLE `alunoxatividade`
ADD CONSTRAINT `FK_alunoxatividade2` FOREIGN KEY (`cpf_aluno`) REFERENCES `aluno` (`cpf`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `FK_alunoxatividade3` FOREIGN KEY (`id_atividade`) REFERENCES `atividades` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `professorxatividade`
--
ALTER TABLE `professorxatividade`
ADD CONSTRAINT `FK_professorxatividade2` FOREIGN KEY (`cpf_professor`) REFERENCES `professor` (`cpf`),
ADD CONSTRAINT `FK_professorxatividade3` FOREIGN KEY (`id_atividade`) REFERENCES `atividades` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
