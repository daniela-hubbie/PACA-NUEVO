create database paca;
use paca;

CREATE TABLE Usuarios (
    Nombre_usuario INT PRIMARY KEY AUTO_INCREMENT,
    Nombre VARCHAR(255) NOT NULL,
    Correo_Electronico VARCHAR(255) NOT NULL,
    Contraseña VARCHAR(255) NOT NULL,
    Codigo_Verificacion VARCHAR(255),
    Verificado BOOLEAN DEFAULT 0
);
select * from Usuarios;