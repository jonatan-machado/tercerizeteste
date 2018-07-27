-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Jul-2018 às 17:40
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cliente`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `cnpj` varchar(30) NOT NULL,
  `pessoa` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `endereco`, `cpf`, `cnpj`, `pessoa`) VALUES
(1, 'teste', 'Rua Tupi', '02664001086', '0', 'Pesso fisica'),
(2, 'Jonatan', 'Rua tupi 720 apto 203', '026.640.010-88', '0', 'Pesso fisica'),
(3, 'teste2', 'teste', '026.640.010-86', '0', 'Pesso fisica'),
(4, 'tete', 'sei lÃ¡', '25696874525', 'NÃ£o tem CNPJ', 'Pesoa Fisica'),
(5, 'Denise', 'qualquer', '256.896.585-84', 'NÃ£o tem CNPJ', 'Pesoa Fisica'),
(6, 'Geneci', 'olÃ¡ mundo', 'nÃ£o tem CPF', '25256985698/0001-56', 'Pessoa Juridica'),
(7, 'pietro', 'casa dele', 'nÃ£o tem CPF', '259865748746', 'Pessoa Juridica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
