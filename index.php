<!DOCTYPE html>
<?php
    $conexao = mysqli_connect("localhost","root","");
    mysqli_select_db($conexao, "prismdium");
    session_start();
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prismdium</title>
    <link rel="stylesheet" href="indexStyle.css">
    <link rel="shortcut icon" href="Images/icon/LogoWhite_semfundo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="favicon.png">
    <link rel="stylesheet" href="Images/fonts/pixelFont/Pixel.ttf">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@400..700&display=swap" rel="stylesheet">
</head>

<body>
    <script src="script.js"></script>
    <header class="header">
        <a href="">Notícias</a>
        <a href="">Produtos</a>
        <a href="">Suporte</a>
        <a href="#sobre">Sobre</a>
    </header>
    <hr>
    <div class="main">
        <button class="hide-nav-button"><img class="hide-nav-button__img" src="Images/navIcon.png"
                alt="Navegação 3 barras"></button>
        <div class="dp__none">
            <div class="nav__menu">
                <ul class="nav">
                    <a href="login.html" target="_blank"><img src="
                        <?php
                        if(!isset($_SESSION["imagem"]))
                        {
                            echo 'Images/loginIconBranco.png';
                        }
                        else
                        {
                            echo '<img href="perfil.php" src="'.$_SESSION["imagem"].'"';
                        }
                        ?>" alt="Perfil do Login"></a>
                    <ul>
                        <?php 
                        
                        if(!isset($_SESSION["usuario"]) && !isset($_SESSION["senha"]))
                        {
                            echo '<a style="color:rgb(255, 60, 60);" href="login.php">Não Logado</a>';
                        }
                        else
                        {
                            echo '<a style="color:rgb(60, 168,40);" href="perfil.php">'.$_SESSION["nome"].'</a>';
                        }
                        ?>
                    </ul>
                    <ul><a class="nav__a" href="">Produtos</a></ul>
                    <ul><a class="nav__a" href="">Comunidade</a></ul>
                    <ul><a class="nav__a" href="">Créditos</a></ul>
                    <ul><a class="nav__sair" href="logout.php">Sair</a></ul>
                </ul>
            </div>
        </div>

        <h1 class="texto__inicio"></h1>
        <div class="pesquisar__menu">
            <div class="pesquisar-container">
                <input class="pesquisar" type="text" placeholder="Jogos / Produtos / Blog" maxlength="15">
                <button type="button" class="source"><img class="source__img" src="Images/source.png"
                        alt="Pesquisar"></button>
            </div>
        </div>

        <svg style="background-color: #ffff;" width="100vw" height="70" viewBox="0 0 100 100"
            preserveAspectRatio="none">
            <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#0e0e0e"></path>
        </svg>

    </div>
    <br>
    <br>
    <br>
    <div>
        <section class="jogos">
            <h1 class="jogos__texto">Jogos</h1>
            <button class="button__jogos"><a href="EcosOfAbyss.html"><img class="img__jogos"
                        src="Images/icon/ecosLogoImg2.png" alt="Ecos of Abyss"></a></button>
            <button class="button__jogos"><a href="">
                    <h1>Em Breve...</h1>
                    </p>
                </a></button>
            <button class="button__jogos"><a href="">
                    <h1>Em Breve...</h1>
                </a></button>
        </section>
    </div>


    <div>
        <section class="noticias">
            <h1 class="noticias__texto">Notícias</h1>
            <button class="button__noticias"><a href="">
                    <h1>Em Breve...</h1>
                    </p>
                </a></button>
            <button class="button__noticias"><a href="">
                    <h1>Em Breve...</h1>
                    </p>
                </a></button>
            <button class="button__noticias"><a href="">
                    <h1>Em Breve...</h1>
                    </p>
                </a></button>
        </section>
    </div>


    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div></div>
    <svg style="background-color: #ffff;" width="100vw" height="70" viewBox="0 0 100 100" preserveAspectRatio="none"
        transform="rotateX(180deg)">
        <path id="wavepath" d="M0,0  L110,0C35,150 35,0 0,100z" fill="#0e0e0e"></path>
    </svg>



    <div class="footer">

        <div id="sobre"></div>

    </div>


</body>

</html>