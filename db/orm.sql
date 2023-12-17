-- Création de la base de données
CREATE DATABASE IF NOT EXISTS orm;

-- Utilisation de la base de données
USE orm;

-- Création de la table users
CREATE TABLE `users` (
  `id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `age` int NOT NULL
);

-- Insertion de données dans la table users
INSERT INTO `users` (`name`, `age`) VALUES
('Ali Hassan', 30);
