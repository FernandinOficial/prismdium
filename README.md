# Anotações

## Inserção do banco de dados
* Inicie o MySQL e Apache;
* Crie um arquivo chamado database.sql
* Copie e cole o seguinte código:

```
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

INSERT INTO usuarios (nome, email, senha, sexo) VALUES ('fernando', 'fernando@gmail.com', '12345', 'M');

SELECT * FROM usuarios;
```
* Execute o c
![image](https://github.com/FernandinOficial/prismdium/assets/151852919/0c818eb6-51b5-439e-a371-e7785d622406)

