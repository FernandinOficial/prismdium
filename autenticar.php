<script language="javascript">
    function sucesso() {
        setTimeout(function() {
            window.location = 'index.php';
        }, 0000);
    }
    function failed() {
        setTimeout(function() {
            window.location = 'login.html';
        }, 2000);
    }
</script>

<?php
$conexao = mysqli_connect("localhost", "root", "", "prismdium");

if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

session_start();

if (isset($_POST["email"]) && isset($_POST["pass"])) {
    $user = $_POST["email"];
    $pass = $_POST["pass"];

    $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 0) {
        echo 'O login falhou. Você será redirecionado para a página de login em 3 segundos.';
        echo '<script language="javascript">failed()</script>';
    } else {
        $_SESSION["usuario"] = $user;
        $_SESSION["senha"] = $pass;
        echo '<script language="javascript">sucesso()</script>';
    }

    $stmt->close();
} else {
    echo '<p style=" font-family: sans-serif;font-size: 30px;color: red;">Dados Incorretos</p>';
    echo '<script language="javascript">failed()</script>';
}

mysqli_close($conexao);
?>
