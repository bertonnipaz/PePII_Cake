-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 17, 2016 at 12:17 PM
-- Server version: 5.6.32-1+deb.sury.org~xenial+0.1
-- PHP Version: 7.0.13-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `nasc` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `rg` varchar(12) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `mobile` varchar(14) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `mail`, `nasc`, `name`, `address`, `rg`, `cpf`, `mobile`, `phone`, `created`, `modified`) VALUES
(1, 'Bertonni', '$2y$10$ZD3ips9MU2pD91YBL3oDVuQvgRvulcSIzfDeqOGzDXdcgZl058qDG', 'admin', 'bertonnipaz@gmail.com', '1991-05-15', 'Bertonni Thiago de Souza Paz', 'Rua de teste, 23', '7.123.432', '098.332.432-21', '(81)98767-9987', '', '2016-10-14 15:28:49', '2016-10-25 20:50:56'),
(2, 'Flaviana', '$2y$10$ReVAOV9pWN.lCQOownCdUet5crK/Nv6H2l/iYerpQUfVniNBpYI4K', 'funcionario', 'flaviana@email.com', '2011-07-08', 'Flaviana Varino', 'Rua de Flaviana, 45', '1.334.673', '098.332.432-21', '(81)97645-3487', '', '2016-10-14 16:42:22', '2016-10-14 16:42:22'),
(3, 'Adauto', '$2y$10$MPZJkOMQvsL4Hf1hn4/yu.P/U4DTsyYUhf8p38TYURGSCrd6wD3G6', 'paciente', 'adauto@email.com', '1987-06-21', 'Adauto Pereira dos Santos Júnior', 'Rua de Adaudo, 111', '', '', '(81)97756-0832', '', '2016-10-17 14:19:55', '2016-10-18 12:21:44'),
(4, 'Mateus', '$2y$10$jdlKfncIS6L.frTzHqESC.umlGXTaZvOdD1rsNggxPS2W3ORHDlY2', 'paciente', '', '2002-05-11', 'Mateus do Nascimento Nóbrega', 'Rua de Mateus, 23', '', '', '(81)96754-2223', '', '2016-10-18 11:50:28', '2016-10-18 11:50:28'),
(5, 'Beatriz', '$2y$10$FpYJknTtaF3fwCVYXJmaeu4dLPZd8aLyrA5VGUKBGgLJTgvpy4aFq', 'paciente', 'anabea@email.com', '2003-06-11', 'Ana Beatriz Ferreira', 'Rua de Ana Beatriz, 1221', '1.321.554', '012.123.345-87', '(81)98765-1121', '', '2016-10-18 12:00:57', '2016-10-18 12:00:57'),
(6, 'Ranieri', '$2y$10$MZaj0OnYqVVrGn7H1aRpJ.nUWgLPVoXE2u/88jzVWBb9ZT8SSCAiW', 'funcionario', 'ravac@email.com', '1987-07-09', 'Ranieri Valença de Carvalho', 'Rua da programação, 10101011', '5.689.022', '021.399.310-71', '(81)98344-2761', '', '2016-10-18 17:26:50', '2016-10-18 17:26:50'),
(7, 'Allan', '$2y$10$sFurahFdKOw2vR6bXLklveBUGZwA0rm9Z0QlTVbd3JXD4CjNjGsam', 'paciente', '', '1993-03-11', 'Allan Diego Lima', 'Rua da Programação, 100', '', '', '(81)98934-2245', '(81)3545-1234', '2016-10-26 22:52:50', '2016-10-26 22:52:50'),
(8, 'Sergio', '$2y$10$G/EX1XJjdlpN2g2wpd7uAuugn.atFv9WNHpucvtZ9xZ/QjSETKxCi', 'paciente', '', '1990-04-11', 'Sérgio Bandeira', 'Rua de Sérgio, 43', '', '', '(81)98565-0935', '', '2016-10-27 23:59:37', '2016-10-27 23:59:37'),
(9, 'JoaoPaulo', '$2y$10$LuitwBqpqsOGNoV9is.XUuCDbzrwbHEQ7qvYDnl.0kQcE7u5nIrIm', 'paciente', 'joaopauloperreira@email.com', '1991-02-28', 'João Paulo Pereira', 'Rua de João Paulo, 244', '', '', '(81)98678-9971', '', '2016-10-30 15:27:25', '2016-10-30 15:27:25'),
(10, 'Bruno', '$2y$10$utYaHi5dWC8ZTisfqJTGjeUJuZfhI20ati8q12LBkFPaySJERmhya', 'paciente', 'bruno@email.com', '1995-04-16', 'Bruno Mendes', 'Rua de Bruno, 432', '', '', '(81)98812-3396', '', '2016-10-30 20:12:57', '2016-10-30 20:12:57'),
(11, 'Pedro', '$2y$10$EnnPgE2w2FHarkGRuSr8euXtyJoC.0MxawnoXGgxQ/lbQT5diAmie', 'paciente', 'pedro@email.com', '1993-04-18', 'Pedro Alcantara', 'Rua de Pedro, 12', '1.445.220', '077.225.395-22', '(81)98633-2202', '(81)3443-2210', '2016-10-30 21:46:12', '2016-10-30 21:46:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
