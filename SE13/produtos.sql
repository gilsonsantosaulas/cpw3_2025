-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Jun-2025 às 21:16
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja_online`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `quantidade` int(11) DEFAULT 0,
  `url_imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `marca`, `quantidade`, `url_imagem`) VALUES
(1, 'Smartphone Samsung Galaxy S23', '3999.90', 'Smartphone de última geração com câmera de altíssima qualidade e excelente desempenho.', 'Samsung', 11, 'https://www.mundoconectado.com.br/wp-content/uploads/2023/01/galaxy-s23.jpg'),
(2, 'Notebook Dell Inspiron 15', '4599.00', 'Notebook com processador Intel Core i5, SSD de 512GB, ideal para trabalho e estudo.', 'Dell', 10, 'https://a-static.mlcdn.com.br/800x560/notebook-dell-inspiron-15-3000-3501-a25p-intel-core-i3-4gb-256gb-ssd-156-led-windows-10/magazineluiza/228079200/bf0fdc22ae2b4a4765424a3f6db86d6b.jpg'),
(3, 'Fone de Ouvido Bluetooth JBL Tune 510BT', '249.90', 'Fone de ouvido com áudio de alta qualidade, até 40 horas de bateria e Bluetooth 5.0.', 'JBL', 50, 'https://m.media-amazon.com/images/I/61kFL7ywsZS.jpg'),
(4, 'Monitor LG 24 Polegadas Full HD', '799.00', 'Monitor IPS com resolução Full HD, 75Hz, e tecnologia FreeSync.', 'LG', 20, 'https://m.media-amazon.com/images/I/51r66ZzPZlL.jpg'),
(5, 'Teclado Mecânico Redragon Kumara RGB', '249.00', 'Teclado mecânico com switches Outemu Blue, retroiluminação RGB, estrutura em metal.', 'Redragon', 30, 'https://m.media-amazon.com/images/I/61CtkmCq0HL._AC_UF894,1000_QL80_.jpg'),
(6, 'Cadeira Gamer ThunderX3 EC3', '1199.90', 'Cadeira ergonômica com revestimento de couro sintético, ideal para longas horas de uso.', 'ThunderX3', 5, 'https://m.media-amazon.com/images/I/71V2pJDYxgL.jpg'),
(7, 'Smart TV Samsung 50” 4K Crystal UHD', '2499.00', 'Smart TV com resolução 4K, Tizen, HDR e controle por voz.', 'Samsung', 8, 'https://m.media-amazon.com/images/I/71vk2qFDSPL._AC_UF1000,1000_QL80_.jpg'),
(8, 'Console PlayStation 5', '4499.00', 'Console de nova geração com SSD ultra-rápido e gráficos incríveis.', 'Sony', 4, 'https://m.media-amazon.com/images/I/51VZErxKwkL._AC_UF1000,1000_QL80_.jpg'),
(9, 'Impressora Multifuncional HP Ink Tank 416', '999.00', 'Impressora com sistema de tanque de tinta, imprime, copia e digitaliza.', 'HP', 12, 'https://m.media-amazon.com/images/I/61p9bqBwwNL._AC_UF894,1000_QL80_.jpg'),
(10, 'Relógio Smartwatch Amazfit Bip U Pro', '399.00', 'Relógio inteligente com GPS, monitoramento de saúde, sono e resistência à água.', 'Amazfit', 25, 'https://m.media-amazon.com/images/I/51-57Lg4L5L._AC_UF1000,1000_QL80_.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
