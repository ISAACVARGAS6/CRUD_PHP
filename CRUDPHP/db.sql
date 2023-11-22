CREATE DATABASE IF NOT EXISTS `crud_example`;
USE `crud_example`;

CREATE TABLE IF NOT EXISTS `usuarios` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `nombre` VARCHAR(50) NOT NULL,
    `email` VARCHAR(50) NOT NULL
);
