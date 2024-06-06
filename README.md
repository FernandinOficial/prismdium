# :book: Tutorial :book:
## Executar o site pelo servidor

* Para editar ou acessar o site via código, coloque os arquivos em uma pasta do servidor local para realizar alterações, visualizar, etc.
* Siga o tutorial abaixo para inserir o site no servidor local.

1. Instale o XAMPP para executar o servidor local:
   
https://youtu.be/eAyLWes8eEE?si=FG2s8f3fHUKHznTZ

2. Vá na aba `Code` do https://github.com/FernandinOficial/prismdium:

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/e5cfaa75-da6e-49e3-8409-5dc9eaba5b61)
* Selecione para instalar em arquivo .zip

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/510e2112-c437-4bb9-b38a-12d174efb1ad)

3. Após a instalação, copie e cole este caminho na aba de navegação do Gerenciador de Arquivos com caminho na pasta `htdocs`:
`C:\xampp\htdocs`

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/81a6df72-ccdf-4728-8275-6d470879d0cf)

4. Crie uma pasta chamada `prismdium`:

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/fbb57bbc-44e8-44bd-b80a-d87bd06df26e)

5. Copie ou recorte e cole o arquivo `.zip` após ter realizado o download na pasta `prismdium`;
6. Extrair o arquivo dentro da mesma pasta `prismdium`:

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/c73b71eb-c90d-4da3-9302-948dc1d0dea1)

7. Pode deletar o arquivo `.zip`, restando somente a pasta:

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/168395db-fd0e-451a-b9a0-90e895ca3f53)

8. Abra seu editor de código de preferência, neste caso foi utilizado o editor Visual Studio Code (VSCode)
9. Vá na aba `File` ou `Arquivos` (Português Brasileiro)

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/6e047ccd-a691-45d6-9d28-783081c7406e)

10. Selecione a opção `Open Folder` ou `Abrir Pasta` (Português Brasileiro):

![image](https://github.com/FernandinOficial/prismdium/assets/151852919/941c33db-0a37-40d9-862e-9291ff024b26)

11. Na área de indicar a pasta na aba de navegação adicione o seguinte caminho e selecione a única pasta `prismdium-main`, copie e cole:

`C:\xampp\htdocs\prismdium\prismdium-main`

* Após realizado todos estes passos vá para a Segunda parte que fica abaixo. :smile:
## Inserção do banco de dados

1. Inicie o MySQL e Apache.
2. Na pasta `sqlScripts`:

   ![image](https://github.com/FernandinOficial/prismdium/assets/151852919/dc9c1063-413d-4ea8-a9e8-abd88970b5de)

3. Crie um arquivo chamado `database.sql`:

   ![image](https://github.com/FernandinOficial/prismdium/assets/151852919/c4e4bba5-6fc6-47fa-a958-c9efb06e7992)

4. Copie e cole o seguinte código no arquivo `database.sql`:

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

   INSERT INTO usuarios (nome, email, senha, sexo) VALUES ('teste', 'teste@gmail.com', '12345', 'NS');

   SELECT * FROM usuarios;

obs: Só vai executar este código somente uma vez.
* Execute o comando no seu editor de código.

