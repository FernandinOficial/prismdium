<?php 

    $conexao = mysqli_connect("localhost","root","");
    mysqli_select_db($conexao,"prismdium");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $sexo = $_POST["sexo"];

    $inserir = "INSERT INTO usuarios (id, nome, usuario, senha, sexo) VALUES (NULL, '$name', '$email', '$pass', '$sexo');";

    mysqli_query($conexao, $inserir) or die (mysqli_error($conexao));
    echo '<script>window.location.href = "index.php";</script>';   
    echo '<script>window.close();</script>';
    
?>
