-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Maio-2018 às 02:40
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS "cadastro" (
"id" int(11) NOT NULL,
  "end" varchar(255) NOT NULL,
  "cpf" bigint(15) NOT NULL,
  "tipo" varchar(255) DEFAULT NULL,
  "nome" varchar(255) DEFAULT NULL,
  "login" varchar(255) DEFAULT NULL,
  "email" varchar(255) DEFAULT NULL,
  "senha" varchar(255) DEFAULT NULL
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS "produtos" (
"id" int(11) NOT NULL,
  "tipo" varchar(255) NOT NULL,
  "nome" varchar(255) NOT NULL,
  "marca" varchar(255) NOT NULL,
  "preco" float(5,2) NOT NULL,
  "prod_img" varchar(255) DEFAULT NULL
);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
 ADD PRIMARY KEY ("id"), ADD KEY "end" ("end"), ADD KEY "cpf" ("cpf");

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY ("id"), ADD KEY "prod_img" ("prod_img");

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
MODIFY "id" int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
MODIFY "id" int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
