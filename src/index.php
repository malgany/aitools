<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Infinite Tools - Sua coleção de ferramentas online</title>
    <meta name="description" content="Infinite Tools oferece uma ampla gama de ferramentas online para melhorar sua produtividade, incluindo contadores de caracteres, inversores de texto, validadores JSON e muito mais.">
    <meta name="keywords" content="ferramentas online, contador de caracteres, inversor de texto, validador JSON, gerador de cores">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/picnic.css">
    <link rel="stylesheet" href="css/style.css?v=0.2">
</head>
<body>
<div style="overflow: hidden;">

    <nav style="background-color: #EAEDFF">
        <a href="/" class="brand">
            <span>Infinite Tools</span>
        </a>
    </nav>

</div>
<div class="menu input">
    <ul>
        <li><a class="value" href="index.php">Início</a></li>
        <li><a class="value" href="index.php?page=count">Contador de Caracteres</a></li>
        <li><a class="value" href="index.php?page=invert">Inversor de Texto</a></li>
        <li><a class="value" href="index.php?page=json">Validador JSON</a></li>
        <li><a class="value" href="index.php?page=hash">Calculadora de Hash e Criptografia</a></li>
        <li><a class="value" href="index.php?page=paleta">Gerador de Cores e Paletas</a></li>
        <li><a class="value" href="index.php?page=pass">Gerador de Senhas Seguras</a></li>
        <li><a class="value" href="index.php?page=conversor">Conversor de Base</a></li>
        <li><a class="value" href="index.php?page=minificar">Formatador e Minificador de Código</a></li>
        <li><a class="value" href="index.php?page=regex">Simulador Regex</a></li>
    </ul>
</div>
<div class="container">
    <div class="content">
        <?php if (isset($_GET["page"])) :
            include_once("pages/" . $_GET["page"] . "-tool.html");
        else : ?>
            <h1>Bem-vindo ao Infinite Tools</h1>
            <p>Selecione uma ferramenta do menu para começar a explorar nossas soluções que facilitam seu dia a dia.</p>
        <?php endif; ?>
    </div>
</div>
</body>
</html>
