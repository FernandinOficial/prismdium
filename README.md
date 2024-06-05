# Anotações

## Inserção do banco de dados

1. Inicie o MySQL e Apache.
2. Na pasta `sqlScripts`:

   ![image](https://github.com/FernandinOficial/prismdium/assets/151852919/dc9c1063-413d-4ea8-a9e8-abd88970b5de)

3. Crie um arquivo chamado `database.sql`:

   ![image](https://github.com/FernandinOficial/prismdium/assets/151852919/c4e4bba5-6fc6-47fa-a958-c9efb06e7992)

4. Copie e cole o seguinte código no arquivo `database.sql`:

   ```sql
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

obs: Só vai executar este código somente uma vez.
* Execute o comando no seu editor de código.

