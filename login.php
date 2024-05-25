<!DOCTYPE html>
<?php 
    $conexao = mysqli_connect("localhost","root","");
    mysqli_select_db($conexao,"prismdium");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Prismdium</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>

<body>
    <nav>
        <a href="index.html">
            <img src="Images/voltar.png" alt="Botao Voltar para Home" class="voltar">
        </a>
    </nav>
    <main>
        <div id="container">
            <div id="register"> <!--Register-->
                <!--Informações-->
                <div class="register__first-column">
                    <h1 class="title__welcome">Bem-Vindo Denovo</h1>
                    <p class="descricao">Acesse já novamente sua conta</p>
                    <button class="btn">Sign in</button>
                </div> <!--Informações-->
                <!--Registrar Dados-->
                <div class="register__second-column">
                    <h1 class="title">Criar Conta</h1>
                    <p class="descricao">Register with:</p>
                    <div class="media-social">
                        <ul class="list__media-social">
                            <li><a href="">Google</a></li>
                            <li><a href="">Steam</a></li>
                        </ul>
                    </div>
                    <form action="autenticar.php" method="post">
                        <input type="name" placeholder="Name" required>
                        <input type="email" placeholder="E-mail" required>
                        <input type="pass" placeholder="Password" required>

                        <input type="radio" name="sexo" id="sexo" required>
                        <input type="radio" name="sexo" id="sexo">
                        <input type="radio" name="sexo" id="sexo">

                        <input type="submit" value="Sign up">
                    </form>
                </div> <!--Registrar Dados-->
            </div> <!--Register-->



            <div id="login"> <!--Login-->
                <!--Informações-->
                <div class="login__first-column">
                    <h1>Olá, novo por aqui?</h1>
                    <p>Registre-se já...</p>
                    <button class="btn">Sign up</button>
                </div> <!--Informações-->
                <!--Logar Dados-->
                <div class="login__second-column">
                    <h1 class="title">Logue-se já!</h1>
                    <p class="descricao">Login with:</p>
                    <div class="media-social">
                        <ul>
                            <li><a href="">Google</a></li>
                            <li><a href="">Steam</a></li>
                        </ul>
                    </div>
                    <form action="login.php" method="post">
                        <input type="email" placeholder="E-mail" required>
                        <input type="pass" placeholder="Password" required>
                        <a href="">Esqueceu sua senha?</a>

                        <input type="submit" value="Sign in">
                    </form>
                </div> <!--Logar Dados-->
            </div> <!--Login-->
        </div> <!--Container-->
    </main>
    <?php 
    
        $name = $_POST

    ?>
</body>

</html>