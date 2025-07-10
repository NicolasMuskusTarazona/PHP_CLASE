CREATE DATABASE IF NOT EXISTS php_pdo;

USE php_pdo;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(80) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

INSERT INTO products (name, price) VALUES
('Laptop Lenovo ThinkPad', 3200.00),
('Mouse Inalámbrico Logitech', 85.50),
('Teclado Mecánico Redragon', 199.99),
('Monitor Samsung 24"', 890.00),
('Auriculares Sony WH-1000XM4', 1450.00),
('Silla Ergonómica Ejecutiva', 980.00),
('Disco Duro Externo 1TB', 240.75),
('Webcam Full HD Logitech', 135.00),
('Micrófono USB Blue Yeti', 410.90),
('Hub USB-C 7 en 1', 110.00),
('Memoria RAM 16GB DDR4', 320.40),
('Tarjeta de Video RTX 4060', 1850.00),
('Tablet Samsung Galaxy Tab S7', 2600.00),
('Cargador Rápido USB-C', 75.00),
('Impresora Multifuncional HP', 560.00),
('Base Refrigerante para Laptop', 95.99),
('Switch HDMI 4K', 120.00),
('Router Wi-Fi 6 TP-Link', 300.00),
('Cable HDMI 2.1 2m', 35.50),
('Soporte de Monitor Ajustable', 160.00);