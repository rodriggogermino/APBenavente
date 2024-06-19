-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jun-2024 às 15:54
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `apbenavente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficheiros`
--

CREATE TABLE `ficheiros` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data_publicacao` date NOT NULL,
  `url_ficheiro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ficheiros`
--

INSERT INTO `ficheiros` (`id`, `nome`, `data_publicacao`, `url_ficheiro`) VALUES
(3, 'Relatório PAP - Rodrigo Germino', '2024-06-17', 'files/RelatorioPAP.docx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`user`, `password`) VALUES
('adm_apaebnv', '59d53e50c158a0258d3cb3f51be91950');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `conteudo` text NOT NULL,
  `data_publicacao` date NOT NULL,
  `imagem_url` varchar(255) DEFAULT NULL,
  `introducao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descricao`, `conteudo`, `data_publicacao`, `imagem_url`, `introducao`) VALUES
(13, 'Noticia 5', 'Esta noticia foi adicionada pelo telemóvel ', 'Esta noticia foi adicionada pelo telemóvel ', '2024-06-19', 'uploads/IMG_2974.jpeg', 'Esta noticia foi adicionada pelo telemóvel '),
(14, 'Exemplo de Noticia', 'Exemplo de Noticia', 'Exemplo de Noticia', '2024-06-19', 'uploads/Captura de ecrã 2024-03-03 104442.png', 'Exemplo de Noticia');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ficheiros`
--
ALTER TABLE `ficheiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ficheiros`
--
ALTER TABLE `ficheiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
