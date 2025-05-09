<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
</header>
<main>
    <?php 
    $numero = $_GET["Número"] ?? " ";
    $antecessor = $numero - 1 ?? " ";
    $sucessor = $numero + 1 ?? " ";
    echo "<p>O numero escolhido é $numero</p>";
    echo "<p>O seu <i>antecessor</i> é  $antecessor</p>";
    echo "<p>O seu sucessor é $sucessor</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar</a></p>
</main>
    
</body>
</html>