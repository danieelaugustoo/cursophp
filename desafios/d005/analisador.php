<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do analisador</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
        <main>
        <h1>Analisador de Número Real</h1>
            <?php 
                $num = $_POST["número"] ?? 0;
                echo "<p>Analisando o número <strong>".number_format($num, 3, ",", ".")."</strong> informado pelo usuário</p>";
                $int = (int)$num;
                $frac = $num - $int;
                echo "<ul><li>A parte inteira é <strong>". number_format($int, 0, ",", ".")."</strong></li>";
                echo "<li>A parte fracionada é <strong>".number_format($frac, 3, ",", "0")."</strong></p></li></ul>";
            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
        </main>
</body>
</html>