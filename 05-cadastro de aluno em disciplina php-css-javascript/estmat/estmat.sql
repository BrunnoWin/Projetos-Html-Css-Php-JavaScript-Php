-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 29-Out-2020 às 10:35
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estmat`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `idaluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(12) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `email` varchar(40) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `turno` varchar(3) NOT NULL,
  `periodo` int(2) NOT NULL,
  `status` varchar(7) NOT NULL,
  PRIMARY KEY (`idaluno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `matricula`, `nome`, `telefone`, `email`, `curso`, `turno`, `periodo`, `status`) VALUES
(1, '123456', 'Daniel Gomes de Oliveira', '(62)99310-7549', 'dangogyn@gmail.com', 'ADS', 'mat', 3, 'ativo'),
(2, '6443211', 'Maria Bonita do CearÃ¡', '(62)98745-3217', 'maria@yahoo.com', 'Design', 'not', 1, 'ativo'),
(3, '202010245587', 'Francisco Gomes dos Santos', '(62)99784-4785', 'francisco@hotmail.com', 'Design', 'not', 5, 'ativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
