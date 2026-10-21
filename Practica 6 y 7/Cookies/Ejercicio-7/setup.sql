CREATE DATABASE IF NOT EXISTS Compras;
USE Compras;

CREATE TABLE IF NOT EXISTS catalogo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio DECIMAL(11,2)
);

INSERT INTO catalogo (producto, precio) VALUES
    ('Teclado', 4500.00),
    ('Mouse', 2500.50),
    ('Monitor', 85000.00),
    ('Auriculares', 12000.00);
