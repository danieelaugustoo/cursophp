<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_POST["valor1"] ?? 0;
    $peso1 = $_POST["peso1"] ?? 0;
    $valor2 = $_POST["valor2"] ?? 0;
    $peso2 = $_POST["peso2"] ?? 0;
    $mult1 = $valor1 * $peso1;
    $mult2 = $valor2 * $peso2;
    $somaprod = $mult1 + $mult2;
    $somapesos = $peso1 + $peso2;
    $ponderada = $somaprod / $somapesos;
    ?>
        
       <main>
        <h1>Média Aritmética</h1>
        <form action="" method="post">
        <label for="valor1">1° Valor</label>
        <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?>" required>
        <label for="peso1">1° Peso</label>
        <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>" required>
        <label for="valor2">2° Valor</label>
        <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?>" required>
        <label for="peso2">2° Peso</label>
        <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>" required>
        <input type="submit" value="Calcular Médias">
        </form>
       </main>
    <section>
        <h1>Cálculo das médias</h1>
        <?php 
        echo "<p>Analisando os valores $valor1 e $valor2:</p>";
        echo "<ul><li><p>A média aritmética é <strong>" . number_format(($valor1 + $valor2) / 2, 2, ",", ".") . "</strong></li></p>";
        echo "<li><p>A média ponderada com pesos é <strong>". number_format($ponderada , 2, "," ,  ".") ."</strong> </p></li></ul>"
        ?>
        </section>
</body>
</html>