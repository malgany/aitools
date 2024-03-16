<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">
</head>
<body>
<div style="overflow: hidden;height: 250px;"> <!-- For Demo, Represents the body -->

    <nav class="demo">
        <a href="#" class="brand">
            <img class="logo" src="/img/basket.png" />
            <span>Picnic CSS</span>
        </a>

        <!-- responsive-->
        <input id="bmenub" type="checkbox" class="show">
        <label for="bmenub" class="burger pseudo button">menu</label>

        <div class="menu">
            <a href="#" class="pseudo button icon-picture">Demo</a>
            <a href="#" class="button icon-puzzle">Plugins</a>
        </div>
    </nav>

</div>
    <div class="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="index.php?page=count">Contador de Caracteres</a></li>
            <li><a href="index.php?page=invert">Inversor de Texto</a></li>
            <li><a href="index.php?page=json">Validador JSON</a></li>
            <li><a href="index.php?page=hash">Calculadora de Hash e Criptografia</a></li>
            <li><a href="index.php?page=paleta">Gerador de Cores e Paletas</a></li>
            <li><a href="index.php?page=pass">Gerador de Senhas Seguras</a></li>
            <li><a href="index.php?page=conversor">Conversor de Base</a></li>
            <li><a href="index.php?page=minificar">Formatador e Minificador de Código</a></li>
            <li><a href="index.php?page=regex">Simulador Regex</a></li>
        </ul>
    </div>
    <div class="content">
        <?php if(isset($_GET["page"])) :
            include_once("pages/" . $_GET["page"] . "-tool.html");
        else : ?>
        <h1>Bem-vindo ao Menu</h1>
        <p>Selecione uma ferramenta do menu para começar.</p>
        <?php
        endif;
        ?>
    </div>
    <link rel="stylesheet" href="css/style.css">
</body>
</html>
