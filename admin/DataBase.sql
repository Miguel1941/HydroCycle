
-- Base de datos


CREATE DATABASE hidrocycle_db;
USE hidrocycle_db;


-- Tabla: usuarios


CREATE TABLE usuarios(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(255) NOT NULL
);


-- Tabla: clientes


CREATE TABLE clientes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    correo VARCHAR(100),
    telefono VARCHAR(20),
    direccion VARCHAR(150)
);


-- Tabla: proveedores


CREATE TABLE proveedores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    contacto VARCHAR(100),
    telefono VARCHAR(20),
    correo VARCHAR(100)
);


-- Tabla: productos


CREATE TABLE productos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_producto VARCHAR(100),
    descripcion VARCHAR(200),
    precio DECIMAL(10,2),
    stock INT
);


-- Tabla: compras


CREATE TABLE compras(
    id INT AUTO_INCREMENT PRIMARY KEY,
    proveedor_id VARCHAR(11),
    producto_id VARCHAR(11),
    cantidad INT,
    fecha_compra DATE
);


-- Tabla: ventas


CREATE TABLE ventas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    producto_id INT,
    cantidad INT,
    fecha_venta DATE
);
