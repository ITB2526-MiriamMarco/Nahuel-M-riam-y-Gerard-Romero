-- Script de creació de la base de dades i taula
-- BUG corregit: "WHERE false" no és vàlid en un CREATE DATABASE, s'ha eliminat.

CREATE DATABASE IF NOT EXISTS crud_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE crud_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Usuari d'exemple (opcional)
INSERT INTO users (name, email) VALUES ('Usuari Prova', 'prova@example.com');
