
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <script language="javascript">
    function sucesso() {
        setTimeout(function() {
            window.location = 'index.php';
        }, 0);  // Ajustado para 0
    }
    function failed() {
        setTimeout(function() {
            window.location = 'cadastro.html';
        }, 2000);
    }
</script>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prismdium";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Injeção SQL direta (NÃO RECOMENDADO - apenas para fins de demonstração)
    $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">sucesso()</script>';
    } else {
        echo '<script language="javascript">failed()</script>';
    }

    $conn->close();
}
?>
