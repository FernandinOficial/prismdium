# Anotações
## Inserção do banco de dados
Copie e cole o seguinte codigo.
  -- CREATE DATABASE prismdium;
  USE prismdium;
  
  -- CREATE TABLE usuarios 
  -- (
  --     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  --     nome VARCHAR(50) NOT NULL,
  --     usuario VARCHAR(50) NOT NULL UNIQUE, -- E-mail
  --     senha VARCHAR(50) NOT NULL,
  --     sexo ENUM('M', 'F', 'NS') NOT NULL, -- Inclui a opção 'Prefiro não dizer' = Not Say
  --     foto_perfil BLOB -- Tipo de dado para armazenar imagens até 64KB
  -- );
  
  select * from usuarios;
  
  -- INSERT INTO usuarios (id, nome, usuario, senha, sexo) VALUES (NULL, 'fernando', 'fernando@gmail.com', '12345', 'M');
  
  select * from usuarios;
  
  -- ALTER TABLE usuarios CHANGE usuario email VARCHAR(255);
