<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversão v1.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <main>
            <?php 
            $cotacao = 5.68;
            $valcarteira = $_GET["r$"] ?? " ";
            $valdolar = $valcarteira * 5.68;
            echo "<p> Seus R$$valcarteira equivalem a <strong> US$$valdolar</strong></p>";
            echo "<p>*<strong>Cotação fixa de $cotacao</strong> informada diretamente no código.</p>"
            ?>
            <button><a href="javascript:history.go(-1)">Voltar</a></button>
        </main>
    </section>
</body>
</html>