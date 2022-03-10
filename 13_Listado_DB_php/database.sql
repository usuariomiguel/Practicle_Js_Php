CREATE DATABASE ciclismo;
USE ciclismo;
CREATE TABLE Ciclistas ( 
    id int auto_increment PRIMARY KEY,
    nombre VARCHAR(255),
    num_trofeos INT
);

INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Jorge', 10);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Paco', 9);

INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Juan', 8);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Laura', 9);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Amparo', 4);
INSERT INTO Ciclistas (nombre, num_trofeos) VALUES ('Iñaki', 8);

CREATE USER 'pablo'@'127.0.0.1' IDENTIFIED BY 'pablo';
GRANT ALL ON ciclismo.* TO 'pablo'@'localhost';