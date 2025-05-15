<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<!-- $_GET $_POST $_COOKIES SÃO UMA JUNÇÃO QUE RESULTA NO $_REQUEST -->
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
         $nome = $_GET["nome"] ?? " ";
         $sobrenome = $_GET["sobrenome"] ?? " "; 
         echo "<p>É um prazer te conhecer $nome $sobrenome, seja bem-vindo!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>