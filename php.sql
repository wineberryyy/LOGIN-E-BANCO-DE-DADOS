CREATE DATABASE PHP;
USE PHP;


DROP DATABASE PHP;

CREATE TABLE usuario (
codigo INT PRIMARY KEY AUTO_INCREMENT,
login VARCHAR (10),
senha VARCHAR(7)
);

INSERT INTO usuario (login, senha) VALUES 
('lana','123');

INSERT INTO usuario (login, senha) VALUES 
('heloysa','123');

SELECT * FROM USUARIO;
