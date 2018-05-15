-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2018 às 02:13
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
  "cpf" bigint(15) NOT NULL,
  "tipo" varchar(255) DEFAULT NULL,
  "nome" varchar(255) DEFAULT NULL,
  "login" varchar(255) DEFAULT NULL,
  "email" varchar(255) DEFAULT NULL,
  "senha" varchar(255) DEFAULT NULL,
  "endereco" varchar(255) NOT NULL,
  "uf" varchar(2) NOT NULL
);

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `cpf`, `tipo`, `nome`, `login`, `email`, `senha`, `endereco`, `uf`) VALUES
(1, 0, 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN@GMAIL.COM', 'ADMIN', 'Rua Admin - 666 ', 'RJ'),
(2, 111111111111, NULL, 'Renan', 'Un', 'renan@gmail.com', '123', 'Endereço qualquer', 'RJ'),
(3, 111111111111, NULL, 'Renan', 'Un', 'renan@gmail.com', '123', 'Endereço qualquer', 'RJ'),
(4, 22222222222, NULL, 'Eduardo', 'Eduardinho', 'eduardo@gmail.com', '456', 'Endereço 123', 'RJ'),
(5, 0, NULL, 'asdfasdf', 'asdfadsf', 'asdfasdf@sadfasdf', 'asdfadsf', 'asdfasdf', 'da'),
(6, 0, NULL, 'asdfasdfa', 'adfasdf', 'asdfafds@asdfasdf', 'asdfasdfa', 'asdfadsf', 'RJ');

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
  "preco" float(10,2) NOT NULL,
  "prod_img" varchar(255) DEFAULT NULL,
  "descricao" varchar(255) NOT NULL
);

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `tipo`, `nome`, `marca`, `preco`, `prod_img`, `descricao`) VALUES
(1, 'entretenimento', 'O poder do hábito', 'Objetiva', 42.90, 'poder.jpg', 'Livro - O Poder do Hábito de Charles Duhhig'),
(2, 'entretenimento', 'The Last of Us', 'Sony', 50.99, 'tlou.png', 'Game - The Last of Us Remasterizado - PS4'),
(3, 'entretenimento', 'Horizon Zero Dawn', 'Sony', 99.99, 'hzd.jpg', 'Game - Horizon Zero Dawn - PS4 '),
(4, 'entretenimento', 'The Witcher 3', 'CD Projekt Red', 128.64, 'tw3.jpg', 'Game - The Witcher III Wild Hunt: Edição Completa - PS4'),
(5, 'entretenimento', 'GTA V', 'Rockstar Game', 149.00, 'gtav.png', 'Game - Grand Theft Auto V - PS4'),
(6, 'eletronicos', 'Smart TV LED 49', 'LG', 2099.99, 'tv.png', 'Ultra 4K HD 49UJ6525 Com Conversor Digital 4 HDMI 2 USB 120Hz'),
(7, 'eletronicos', 'Home Theater ', 'Piooner', 1999.99, 'ht.jpg', 'Home Theater Pioneer Htp-074 - 5.1 Ultra HD 4k, Hdr E Bluetooth 127V'),
(8, 'eletronicos', 'Conversor Digital', 'Xiaomi', 365.90, 'cd.jpg', 'Xiaomi MI Box 3 4K Hdr Android TV 6.0 8GB versão global - preto'),
(9, 'telefonia', 'Samsung Galaxy S8+', 'Samsung', 3099.99, 'ssgg.png', 'Smartphone Samsung Galaxy S8+ Dual Chip Android 7.0 Tela 6.2'' Octa-Core 2.3 GHz 64GB Câmera 12MP - Preto'),
(10, 'telefonia', 'Iphone 7 Jet Black', 'Apple', 2747.99, 'iph7.jpg', 'iphone 7 Jet Black 32GB Preto Iphone IOS 4G Wi-Fi Câmera 12MP - Apple'),
(11, 'telefonia', 'Iphone 8', 'Apple', 3599.99, 'iph8.jpg', 'iphone 8 64GB Preto Iphone IOS 4G Wi-Fi Câmera 12MP - Apple'),
(12, 'informatica', 'Notebook Samsung Essentials', 'Samsung', 1699.99, 'note.png', 'Notebook Samsung Essentials E34 Intel Core i3 4GB 1TB Tela LED FULL HD 15.6'' Windows 10 - Branco'),
(13, 'informatica', 'Notebook Samsung', 'Samsung', 2880.99, 'note2.jpg', 'Notebook Samsung Intel Core i5 8GB 1TB Tela LED FULL HD 15.6'' Windows 10 - Branco'),
(14, 'informatica', 'Mouse Wireless', 'Dell', 46.95, 'mouse.png', 'Mouse Wireless WM126 Preto - Dell'),
(15, 'eletrodomesticos', 'Micro-ondas Consul', ' Consul', 329.99, 'micro.jpg', 'Micro-ondas Consul CM020 20 Litros Cinza Espelhado'),
(16, 'eletrodomesticos', 'Lavadora de Roupas', 'Brastemp', 1399.99, 'lava.png', 'Lavadora de Roupas Brastemp 11kg BWK11 - Branco'),
(17, 'eletrodomesticos', 'Geladeira', 'Brastemp', 1969.99, 'geladeira.png', 'Geladeira / Refrigerador Brastemp Frost Free Clean BRM39 352L Branco'),
(18, 'eletroportateis', 'Ventilador de Parede', 'Ventisol', 100.47, 'venti.jpg', 'Ventilador de Parede Ventisol Oscilante New Premium Aço Preto 3 Velocidades - 50cm'),
(19, 'eletroportateis', 'Pipoqueira', 'Britania', 69.99, 'pipoca.png', 'Pipoqueira Elétrica Britânia Pop Time Pip B-02'),
(20, 'eletroportateis', 'Forno elétrico', 'Electrolux', 1499.00, 'forninho.jpg', 'Forno Elétrico Electrolux Fb54X 44L Inox'),
(21, 'decoracao', 'Poltrona Opala', 'Opala', 799.99, 'poltr.jpg', 'Poltrona Opala Decorativa Sued Marron'),
(22, 'decoracao', 'Púlpito estante', 'Naotem', 1290.00, 'slaoquee.jpg', 'Púlpito estante com aparador de livro em acrílico - Timóteo'),
(23, 'decoracao', 'Kit de Acessórios para banheiro', 'naotem', 239.90, 'kit.jpg', 'Kit De Acessórios Para Banheiro Em Metal Ottone - 5 Peças');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
 ADD PRIMARY KEY ("id"), ADD KEY "cpf" ("cpf"), ADD KEY "endereco" ("endereco"), ADD KEY "sbnome" ("uf");

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
 ADD PRIMARY KEY ("id"), ADD KEY "prod_img" ("prod_img"), ADD KEY "descricao" ("descricao");

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
