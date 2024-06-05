CREATE DATABASE prismdium;
USE prismdium;

CREATE TABLE usuarios 
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    senha VARCHAR(50) NOT NULL,
    sexo ENUM('M', 'F', 'NS') NOT NULL, -- Inclui a opção 'Prefiro não dizer' = Not Say
    foto_perfil BLOB -- Tipo de dado para armazenar imagens até 64KB
);

INSERT INTO usuarios (nome, email, senha, sexo) VALUES ('teste', 'teste@gmail.com', '12345', 'NS');

SELECT * FROM usuarios;