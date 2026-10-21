CREATE DATABASE IF NOT EXISTS base2;
USE base2;

CREATE TABLE IF NOT EXISTS alumnos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    codigocurso INT,
    mail VARCHAR(100)
);

INSERT INTO alumnos (nombre, codigocurso, mail) VALUES
    ('Ana López', 1, 'ana@mail.com'),
    ('Carlos Gómez', 2, 'carlos@mail.com');
