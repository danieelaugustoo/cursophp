<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números aleatórios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section>
    <h1>Trabalhando com números aleatórios</h1>
        <?php 
        $numrandom = mt_rand(1, 100);
        echo "Gerando um número aleatório entre 0 e 100 <br>";
        echo "O numero gerado é $numrandom <br> ";
        ?>
        <button> <a href="index.php">&#x1F504 Gerar Outro</a></button>
    </section>
</html>