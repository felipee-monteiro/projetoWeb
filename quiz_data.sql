-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Nov-2022 às 22:20
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quiz`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quiz_data`
--

DROP TABLE IF EXISTS `quiz_data`;
CREATE TABLE IF NOT EXISTS `quiz_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`created_at`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `quiz_data`
--

INSERT INTO `quiz_data` (`id`, `created_at`, `updated_at`, `data`) VALUES
(23, '2022-11-23 21:15:25', '2022-11-23 21:15:25', '{\"other\": \"\", \"theme\": \"cinema\", \"title\": \"sadsadsadsadsadsda\", \"questions\": [{\"title\": \"dsdsadasdsadsdsad\", \"options\": {\"A\": \"sadsadasdsadsadsad\", \"B\": \"ddsaddsadsdsadsad\", \"C\": \"sdsadsadsadsadsads\", \"D\": \"dsdsadsaddsadsad\", \"E\": \"dsadsadsadssadsadsd\"}, \"correctAnswer\": \"dsadsadsdsadasdsdsdsad\"}, {\"title\": \"dasdsadsadsadsd\", \"options\": {\"A\": \"dsadsadsadsadasd\", \"B\": \"sadsdsadsdsadsadd\", \"C\": \"sdsadsadsadsdsad\", \"D\": \"sadasdsadadsad\", \"E\": \"sdsadasdasdsd\"}, \"correctAnswer\": \"sadsadsadsadsad\"}, {\"title\": \"sdsadsadsdsad\", \"options\": {\"A\": \"sdsadadasdsadasd\", \"B\": \"asdsadsadsad\", \"C\": \"sadsadsadsad\", \"D\": \"asdasdasdsadsa\", \"E\": \"dasdasdsadasd\"}, \"correctAnswer\": \"sadasdasdsd\"}, {\"title\": \"asdasdsadasdsa\", \"options\": {\"A\": \"dsadsadsadsadad\", \"B\": \"sadsadasdsdsad\", \"C\": \"asdsdsadasdsa\", \"D\": \"dasdsadasdsa\", \"E\": \"dasdsadsadsa\"}, \"correctAnswer\": \"dsadsadsadsadasdasd\"}, {\"title\": \"dsadsadsadsad\", \"options\": {\"A\": \"sadsadsadasdsd\", \"B\": \"sadsadsadsa\", \"C\": \"dasdsadasd\", \"D\": \"sadasdsadasd\", \"E\": \"sadsadasd\"}, \"correctAnswer\": \"asdasdsadsadasd\"}]}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
