CREATE DATABASE clientes;

USE clientes;

CREATE TABLE datos (
    id INT auto_increment PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    edad INT,
    gustos_musicales VARCHAR(500)
);

CREATE USER 'pablo'@'localhost' IDENTIFIED BY 'pablo';
GRANT ALL ON clientes.* TO 'pablo'@'localhost';

INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Manuel","Sánchez",20,"Todo en general");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Federico","Ibarra",60,"Trap a tope");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Sergio","Gómez",15,"Vivardi");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Felipe","Giménez",17,"Clásica para descansar");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Iván","Duque",35,"Regguetón del antiguo");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Iván","Duque",36,"Regguetón del antiguo");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Iván","Duque",37,"Regguetón del antiguo");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Iván","Duque",39,"Regguetón del antiguo");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Iván","Duque",34,"Regguetón del antiguo");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Iván","Duque",33,"Regguetón del antiguo");
INSERT INTO datos (nombre,apellido,edad,gustos_musicales) VALUES ("Iván","Duque",40,"Regguetón del antiguo");









SELECT * FROM datos WHERE ((nombre LIKE '%M%') OR (apellido LIKE '%G%'));