-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Out-2019 às 19:57
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc_fa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `idade` date NOT NULL,
  `altura` float NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `estado` varchar(70) NOT NULL,
  `posicao` varchar(70) NOT NULL,
  `pe` varchar(20) NOT NULL,
  `peso` float NOT NULL,
  `telefone` varchar(70) NOT NULL,
  `video` varchar(250) NOT NULL,
  `email` varchar(70) NOT NULL,
  `senha` varchar(70) NOT NULL,
  `categoria` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `nome`, `idade`, `altura`, `cidade`, `estado`, `posicao`, `pe`, `peso`, `telefone`, `video`, `email`, `senha`, `categoria`, `status`) VALUES
(1, 'jesse', '0000-00-00', 0, '', '', '', '', 0, '', '<iframe width=\"949\" height=\"534\" src=\"https://www.youtube.com/embed/GEmWdwxHjSs\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'jesse@gmail.com', '123', 1, 1),
(2, 'Leonardo Fernandes Alonso', '0000-00-00', 0, '', '', '', '', 0, '', '', 'leonardo.fernandes456@gmail.com', '123', 0, 1),
(3, 'Anderson Fernandes Alonso', '0000-00-00', 0, '', '', '', '', 0, '', '', 'afalonso123@gmail.com', '123', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
