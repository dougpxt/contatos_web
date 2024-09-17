create database if not exists contatos;

use contatos;

create table usuario(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    senha VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    token VARCHAR(255) NOT NULL
);

create table contatos_info(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL, 
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL
);

INSERT INTO usuario (nome, senha, email, token) VALUES
('douglas', '12345', 'douglas@email.com', ''),	
('fulano', '54321', 'fulano@email.com', ''),
('sicrano', '13524', 'sicrano@email.com', '');