<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Prismdium</title>
    <link rel="stylesheet" href="loginStyle.css">
    <script language="javascript">
        function sucesso() {
            setTimeout(function() {
                window.location = 'index.php';
            }, 0);
        }
        function failed() {
            setTimeout(function() {
                window.location = 'login.php';
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
                    <h1 style="margin-bottom: 1vw;">Logue-se Ja!</h1>
                    <p style="float: left;">Login com:</p>
                    <ul>
                        <li>Google</li>
                        <li>Steam</li>
                    </ul>
                </div>
                <div class="texto2">
                    <form method="post">
                        <input class="input1" maxlength="100" type="email" name="email" id="email" placeholder="E-mail" required><br>
                        <input class="input1" maxlength="50" type="password" name="pass" id="pass" placeholder="Senha" required><br>
                        <input class="submit" type="submit" value="Entrar">
                        <a href="cadastro.php">nao tem conta?</a>
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

        $email = $_POST["email"];
        $pass = $_POST["pass"];

        $consulta = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$pass'") or die (mysqli_error($conexao));
        $linhas = mysqli_num_rows($consulta);

        if ($linhas == 0) {
            echo '<p style="font-family: sans-serif; font-size: 30px; color: red;">Dados Incorretos</p>';
            echo '<script language="javascript">failed()</script>';
        } else {
            $user_data = mysqli_fetch_assoc($consulta);
            $_SESSION["usuario"] = $user_data['nome'];
            $_SESSION["id"] = $user_data['id'];
            $_SESSION["imagem"] = $user_data['foto_perfil'];
            echo '<script language="javascript">sucesso()</script>';
        }

        mysqli_close($conexao);
    }
    ?>
</body>
</html>
