<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Dados - Prismdium</title>
    <link rel="stylesheet" href="loginStyle.css">
    <script language="javascript">
        function sucesso() {
            setTimeout(function() {
                window.location = 'index.php';
            }, 0);
        }
        function failed() {
            setTimeout(function() {
                window.location = 'perfil.php';
            }, 2000);
        }
    </script>
</head>
<body>
    <nav>
        <a href="index.php" id="voltar">
            <img src="Images/voltar.png" alt="Botao Voltar para Home" class="voltar">
        </a>
    </nav>
    <main>
        <div id="login">
            <fieldset>
                <div class="texto1">
                    <h1 style="margin-bottom: 1vw;">Atualizar Dados</h1>
                </div>
                <div class="texto2">
                    <form action="perfil.php" method="post" enctype="multipart/form-data">
                        <label for="nome">Nome:</label>
                        <input class="input1" type="text" id="nome" name="nome" required><br><br>

                        <label for="email">Email:</label>
                        <input class="input1" type="email" id="email" name="email" required><br><br>

                        <label>Sexo:</label>
                        <input type="radio" id="masculino" name="sexo" value="Masculino" required>
                        <label for="masculino">Masculino</label>
                        <input type="radio" id="feminino" name="sexo" value="Feminino" required>
                        <label for="feminino">Feminino</label><br><br>

                        <label for="imagem">Imagem:</label>
                        <input type="file" id="imagem" name="imagem" accept="image/*"><br><br>

                        <input class="submit" type="submit" value="Atualizar">
                    </form>
                </div>
            </fieldset>
        </div>
    </main>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conexao = mysqli_connect("localhost", "root", "", "prismdium");

        if (!$conexao) {
            die("Conexão falhou: " . mysqli_connect_error());
        }
        session_start();
        
        if (!isset($_SESSION['id'])) {
            echo '<script language="javascript">failed()</script>';
            exit();
        }
        
        $id_usuario = $_SESSION['id']; 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        $imagem = null;

        // Processa o upload da imagem
        if (!empty($_FILES['imagem']['name'])) {
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["imagem"]["name"]);
            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $target_file)) {
                $imagem = $target_file;
            } else {
                echo "Desculpe, houve um erro ao fazer o upload da sua imagem.";
                echo '<script language="javascript">failed()</script>';
                exit();
            }
        }

        // Atualiza os dados no banco de dados
        if ($imagem) {
            $stmt = $conexao->prepare("UPDATE usuarios SET nome = ?, email = ?, sexo = ?, foto_perfil = ? WHERE id = ?");
            $stmt->bind_param("ssssi", $nome, $email, $sexo, $imagem, $id_usuario);
        } else {
            $stmt = $conexao->prepare("UPDATE usuarios SET nome = ?, email = ?, sexo = ? WHERE id = ?");
            $stmt->bind_param("sssi", $nome, $email, $sexo, $id_usuario);
        }

        if ($stmt->execute()) {
            // Atualiza as variáveis de sessão
            $_SESSION['nome'] = $nome;
            if ($imagem) {
                $_SESSION['imagem'] = $imagem;
            }
            echo '<script language="javascript">sucesso()</script>';
        } else {
            echo '<script language="javascript">failed()</script>';
        }

        $stmt->close();
        $conexao->close();
    }
    ?>
</body>
</html>
