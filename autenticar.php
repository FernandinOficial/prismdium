<script language="javascript">
    function sucesso() {
        setTimeout(function() {
            window.location = 'index.php';
        }, 0);  // Ajustado para 0
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


    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $consulta = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha= '$pass'") or die (mysqli_error($conexao));

    $linhas = mysqli_num_rows($consulta);

    if ($linhas == 0) {
        echo '<p style=" font-family: sans-serif;font-size: 30px;color: red;">Dados Incorretos</p>';
        echo '<script language="javascript">failed()</script>';
    } else {
        $user_data = mysqli_fetch_assoc($consulta);
        $_SESSION["usuario"] = $user_data['nome'];  // Ajustado para pegar o dado correto do banco
        $_SESSION["senha"] = $user_data['senha'];
        $_SESSION["imagem"] = $user_data['imagem'];  // Ajustado para pegar o dado correto do banco
        echo '<script language="javascript">sucesso()</script>';
    }

?>
