SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `quiz_data`;
CREATE TABLE IF NOT EXISTS `quiz_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `data` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE` (`created_at`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO `quiz_data` (`id`, `created_at`, `updated_at`, `data`) VALUES
(23, '2022-11-23 21:15:25', '2022-11-23 21:15:25', '{\"other\": \"\", \"theme\": \"cinema\", \"title\": \"sadsadsadsadsadsda\", \"questions\": [{\"title\": \"dsdsadasdsadsdsad\", \"options\": {\"A\": \"sadsadasdsadsadsad\", \"B\": \"ddsaddsadsdsadsad\", \"C\": \"sdsadsadsadsadsads\", \"D\": \"dsdsadsaddsadsad\", \"E\": \"dsadsadsadssadsadsd\"}, \"correctAnswer\": \"dsadsadsdsadasdsdsdsad\"}, {\"title\": \"dasdsadsadsadsd\", \"options\": {\"A\": \"dsadsadsadsadasd\", \"B\": \"sadsdsadsdsadsadd\", \"C\": \"sdsadsadsadsdsad\", \"D\": \"sadasdsadadsad\", \"E\": \"sdsadasdasdsd\"}, \"correctAnswer\": \"sadsadsadsadsad\"}, {\"title\": \"sdsadsadsdsad\", \"options\": {\"A\": \"sdsadadasdsadasd\", \"B\": \"asdsadsadsad\", \"C\": \"sadsadsadsad\", \"D\": \"asdasdasdsadsa\", \"E\": \"dasdasdsadasd\"}, \"correctAnswer\": \"sadasdasdsd\"}, {\"title\": \"asdasdsadasdsa\", \"options\": {\"A\": \"dsadsadsadsadad\", \"B\": \"sadsadasdsdsad\", \"C\": \"asdsdsadasdsa\", \"D\": \"dasdsadasdsa\", \"E\": \"dasdsadsadsa\"}, \"correctAnswer\": \"dsadsadsadsadasdasd\"}, {\"title\": \"dsadsadsadsad\", \"options\": {\"A\": \"sadsadsadasdsd\", \"B\": \"sadsadsadsa\", \"C\": \"dasdsadasd\", \"D\": \"sadasdsadasd\", \"E\": \"sadsadasd\"}, \"correctAnswer\": \"asdasdsadsadasd\"}]}');
COMMIT;
