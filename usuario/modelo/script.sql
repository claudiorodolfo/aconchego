-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 23/05/2023 às 18:01
-- Versão do servidor: 5.6.51-cll-lve
-- Versão do PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `claudior_escola`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Avaliacao`
--

CREATE TABLE `Avaliacao` (
  `id` int(11) NOT NULL,
  `exame` date NOT NULL,
  `nivel` varchar(16) NOT NULL,
  `aluno` int(11) NOT NULL,
  `professor` int(11) NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Avaliacao`
--

INSERT INTO `Avaliacao` (`id`, `exame`, `nivel`, `aluno`, `professor`, `observacao`, `status`) VALUES
(1, '2023-05-01', 'Bicho de Pé', 8, 2, 'Precisa melhorar muito', 'Reprovado'),
(3, '2023-05-15', 'EstakaZero', 9, 2, 'Corrigir ritmo', 'Aprovado'),
(2, '2023-05-15', 'Bicho de Pé', 8, 2, 'Parabéns e bem-vindo a nova turma', 'Aprovado'),
(4, '2023-05-15', 'EstakaZero', 7, 2, 'Pulando muito', 'Reprovado');

-- --------------------------------------------------------

--
-- Estrutura para tabela `exame`
--

CREATE TABLE `exame` (
  `data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `exame`
--

INSERT INTO `exame` (`data`) VALUES
('2023-03-07'),
('2023-05-01'),
('2023-05-15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Notas`
--

CREATE TABLE `Notas` (
  `avaliacao` int(11) NOT NULL,
  `parametro` int(11) NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Notas`
--

INSERT INTO `Notas` (`avaliacao`, `parametro`, `nota`) VALUES
(3, 1, 5),
(3, 2, 4),
(3, 3, 3),
(3, 4, 4),
(3, 5, 3),
(4, 1, 3),
(4, 2, 2),
(4, 3, 1),
(4, 4, 3),
(4, 5, 2),
(1, 16, 2),
(1, 17, 3),
(1, 18, 1),
(1, 19, 3),
(1, 20, 2),
(1, 21, 2),
(1, 22, 3),
(1, 23, 2),
(1, 24, 1),
(1, 25, 2),
(1, 26, 3),
(1, 27, 1),
(1, 28, 2),
(1, 29, 3),
(1, 30, 2),
(1, 31, 3),
(1, 32, 2),
(1, 33, 1),
(1, 34, 1),
(1, 35, 3),
(1, 36, 2),
(1, 37, 2),
(1, 38, 4),
(2, 16, 3),
(2, 17, 4),
(2, 18, 5),
(2, 19, 3),
(2, 20, 3),
(2, 21, 2),
(2, 22, 4),
(2, 23, 2),
(2, 24, 4),
(2, 25, 4),
(2, 26, 3),
(2, 27, 3),
(2, 28, 5),
(2, 29, 3),
(2, 30, 3),
(2, 31, 4),
(2, 32, 4),
(2, 33, 4),
(2, 34, 3),
(2, 35, 4),
(2, 36, 5),
(2, 37, 5),
(2, 38, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `Parametro`
--

CREATE TABLE `Parametro` (
  `id` int(11) NOT NULL,
  `nivel` varchar(16) NOT NULL,
  `velocidade` varchar(16) NOT NULL,
  `quesito` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Parametro`
--

INSERT INTO `Parametro` (`id`, `nivel`, `velocidade`, `quesito`) VALUES
(1, 'EstakaZero', 'Devagar', 'Condução/Resposta'),
(2, 'EstakaZero', 'Devagar', 'Abraço'),
(3, 'EstakaZero', 'Devagar', 'Mecânica'),
(4, 'EstakaZero', 'Devagar', 'Ritmo'),
(5, 'EstakaZero', 'Devagar', 'Marcação'),
(6, 'Falamansa', 'Devagar', 'Condução/Resposta'),
(7, 'Falamansa', 'Devagar', 'Abraço'),
(8, 'Falamansa', 'Devagar', 'Postura'),
(9, 'Falamansa', 'Devagar', 'Sustentação'),
(10, 'Falamansa', 'Devagar', 'Referência'),
(11, 'Falamansa', 'Devagar', 'Mecânica'),
(12, 'Falamansa', 'Devagar', 'Ritmo'),
(13, 'Falamansa', 'Devagar', 'Marcação'),
(14, 'Falamansa', 'Devagar', 'Giro Lateral'),
(15, 'Falamansa', 'Devagar', 'Repertório'),
(16, 'Bicho de Pé', 'Lenta', 'Condução/Resposta'),
(17, 'Bicho de Pé', 'Lenta', 'Abraço'),
(18, 'Bicho de Pé', 'Lenta', 'Postura'),
(19, 'Bicho de Pé', 'Lenta', 'Sustentação'),
(20, 'Bicho de Pé', 'Lenta', 'Referência'),
(21, 'Bicho de Pé', 'Lenta', 'Ritmo'),
(22, 'Bicho de Pé', 'Lenta', 'Marcação'),
(23, 'Bicho de Pé', 'Lenta', 'Mecânica'),
(24, 'Bicho de Pé', 'Lenta', 'Desenho'),
(25, 'Bicho de Pé', 'Lenta', 'Giro Lateral'),
(26, 'Bicho de Pé', 'Lenta', 'Repertório'),
(27, 'Bicho de Pé', 'Média', 'Condução/Resposta'),
(28, 'Bicho de Pé', 'Média', 'Abraço'),
(29, 'Bicho de Pé', 'Média', 'Postura'),
(30, 'Bicho de Pé', 'Média', 'Sustentação'),
(31, 'Bicho de Pé', 'Média', 'Referência'),
(32, 'Bicho de Pé', 'Média', 'Ritmo'),
(33, 'Bicho de Pé', 'Média', 'Marcação'),
(34, 'Bicho de Pé', 'Média', 'Mecânica'),
(35, 'Bicho de Pé', 'Média', 'Desenho'),
(36, 'Bicho de Pé', 'Média', 'Giro Lateral'),
(37, 'Bicho de Pé', 'Média', 'Repertório'),
(38, 'Bicho de Pé', 'Média', 'Agilidade'),
(39, 'Virgulino', 'Lenta', 'Condução/Resposta'),
(40, 'Virgulino', 'Lenta', 'Abraço'),
(41, 'Virgulino', 'Lenta', 'Postura'),
(42, 'Virgulino', 'Lenta', 'Sustentação'),
(43, 'Virgulino', 'Lenta', 'Referência'),
(44, 'Virgulino', 'Lenta', 'Ritmo'),
(45, 'Virgulino', 'Lenta', 'Marcação'),
(46, 'Virgulino', 'Lenta', 'Mecânica'),
(47, 'Virgulino', 'Lenta', 'Desenho'),
(48, 'Virgulino', 'Lenta', 'Giro Lateral'),
(49, 'Virgulino', 'Lenta', 'Repertório'),
(50, 'Virgulino', 'Rápida', 'Condução/Resposta'),
(51, 'Virgulino', 'Rápida', 'Abraço'),
(52, 'Virgulino', 'Rápida', 'Postura'),
(53, 'Virgulino', 'Rápida', 'Sustentação'),
(54, 'Virgulino', 'Rápida', 'Referência'),
(55, 'Virgulino', 'Rápida', 'Ritmo'),
(56, 'Virgulino', 'Rápida', 'Marcação'),
(57, 'Virgulino', 'Rápida', 'Mecânica'),
(58, 'Virgulino', 'Rápida', 'Desenho'),
(59, 'Virgulino', 'Rápida', 'Giro Lateral'),
(60, 'Virgulino', 'Rápida', 'Repertório'),
(61, 'Virgulino', 'Rápida', 'Agilidade'),
(62, 'Dominguinhos', 'Lenta', 'Condução/Resposta'),
(63, 'Dominguinhos', 'Lenta', 'Abraço'),
(64, 'Dominguinhos', 'Lenta', 'Postura'),
(65, 'Dominguinhos', 'Lenta', 'Sustentação'),
(66, 'Dominguinhos', 'Lenta', 'Referência'),
(67, 'Dominguinhos', 'Lenta', 'Ritmo'),
(68, 'Dominguinhos', 'Lenta', 'Marcacão'),
(69, 'Dominguinhos', 'Lenta', 'Mecânica'),
(70, 'Dominguinhos', 'Lenta', 'Desenho'),
(71, 'Dominguinhos', 'Lenta', 'Giro Lateral'),
(72, 'Dominguinhos', 'Lenta', 'Repertório'),
(73, 'Dominguinhos', 'Rápida', 'Condução/Resposta'),
(74, 'Dominguinhos', 'Rápida', 'Abraço'),
(75, 'Dominguinhos', 'Rápida', 'Postura'),
(76, 'Dominguinhos', 'Rápida', 'Sustentação'),
(77, 'Dominguinhos', 'Rápida', 'Referência'),
(78, 'Dominguinhos', 'Rápida', 'Ritmo'),
(79, 'Dominguinhos', 'Rápida', 'Marcação'),
(80, 'Dominguinhos', 'Rápida', 'Mecânica'),
(81, 'Dominguinhos', 'Rápida', 'Desenho'),
(82, 'Dominguinhos', 'Rápida', 'Giro Lateral'),
(83, 'Dominguinhos', 'Rápida', 'Repertório'),
(84, 'Dominguinhos', 'Rápida', 'Agilidade'),
(85, 'Dominguinhos', 'Arrasta-pé', 'Condução/Resposta'),
(86, 'Dominguinhos', 'Arrasta-pé', 'Abraço'),
(87, 'Dominguinhos', 'Arrasta-pé', 'Postura'),
(88, 'Dominguinhos', 'Arrasta-pé', 'Sustentação'),
(89, 'Dominguinhos', 'Arrasta-pé', 'Referência'),
(90, 'Dominguinhos', 'Arrasta-pé', 'Ritmo'),
(91, 'Dominguinhos', 'Arrasta-pé', 'Marcação'),
(92, 'Dominguinhos', 'Arrasta-pé', 'Mecânica'),
(93, 'Dominguinhos', 'Arrasta-pé', 'Desenho'),
(94, 'Dominguinhos', 'Arrasta-pé', 'Giro Lateral'),
(95, 'Dominguinhos', 'Arrasta-pé', 'Repertório'),
(96, 'Dominguinhos', 'Arrasta-pé', 'Agilidade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Usuario`
--

CREATE TABLE `Usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `cpf` char(11) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `telefone` char(11) DEFAULT NULL,
  `endereco` varchar(256) DEFAULT NULL,
  `nivelCondutor` varchar(16) DEFAULT NULL,
  `nivelConduzido` varchar(16) DEFAULT NULL,
  `tipo` varchar(16) NOT NULL,
  `estaAtivo` tinyint(1) NOT NULL,
  `senha` char(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `Usuario`
--

INSERT INTO `Usuario` (`id`, `nome`, `email`, `cpf`, `dataNascimento`, `telefone`, `endereco`, `nivelCondutor`, `nivelConduzido`, `tipo`, `estaAtivo`, `senha`) VALUES
(2, 'JoÃ£o Pedro Lessa', 'jp_aconchego@gmail.com', NULL, NULL, NULL, NULL, 'Luiz Gonzaga', 'Dominguinhos', 'Professor', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Administrador', 'aconchegodance@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Admin', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Leonardo Fernandes', 'leotonageral@gmail.com', NULL, NULL, NULL, NULL, 'Bicho de PÃ©', 'EstakaZero', 'Aluno', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Lara Vieira', 'lavie@gmail.com', NULL, NULL, NULL, NULL, 'Dominguinhos', 'Luiz Gonzaga', 'Professor', 1, '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'GildeÃ£o PirraÃ§a', 'gillpicarra@gmail.com', '12345678912', NULL, NULL, 'Rua A, Bairro Boa Vista', 'Bicho de PÃ©', 'EstakaZero', 'Aluno', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'ClÃ¡udio Rodolfo S. de Oliveira', 'claudio.ifbavc@gmail.com', NULL, '1983-12-11', '77999913679', NULL, 'Virgulino', 'EstakaZero', 'Aluno', 1, '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Avaliacao`
--
ALTER TABLE `Avaliacao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aluno` (`aluno`),
  ADD KEY `professor` (`professor`);

--
-- Índices de tabela `exame`
--
ALTER TABLE `exame`
  ADD PRIMARY KEY (`data`);

--
-- Índices de tabela `Parametro`
--
ALTER TABLE `Parametro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Avaliacao`
--
ALTER TABLE `Avaliacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `Parametro`
--
ALTER TABLE `Parametro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de tabela `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
