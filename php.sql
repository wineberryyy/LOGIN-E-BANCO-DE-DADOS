CREATE DATABASE PHP;
USE PHP;


DROP DATABASE PHP;

CREATE TABLE users (
codigo INT PRIMARY KEY AUTO_INCREMENT,
username VARCHAR (10),
password VARCHAR(7)
);

INSERT INTO users (username, password) VALUES 
('lana','123');

INSERT INTO users (username, password) VALUES 
('heloysa','123');

SELECT * FROM users;
