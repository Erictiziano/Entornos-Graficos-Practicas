CREATE DATABASE IF NOT EXISTS prueba;
USE prueba;

CREATE TABLE IF NOT EXISTS buscador (
    canciones VARCHAR(100)
);

INSERT INTO buscador (canciones) VALUES
    ('De música ligera'),
    ('Persiana Americana'),
    ('Mi Buenos Aires querido'),
    ('La Camisa Negra'),
    ('Imagine');
