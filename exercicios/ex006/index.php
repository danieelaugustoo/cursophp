<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // Capturando os dados do Formulário Retroalimentado
    $valor = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
    
    
    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?= $valor ?>" required>
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?= $valor2 ?>" required>
        <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?php 
        $soma = $valor + $valor2;
        echo "<p>A soma de <strong>$valor</strong> + <strong>$valor2</strong> é igual a <strong>$soma</strong></p>";
        ?>
    </section>
</body>
</html>