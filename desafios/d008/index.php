<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $num= $_GET["numero"] ?? 0;
    $raiz = sqrt($num);
    $raizCubica = pow($num, 1/3);
    ?>
    <main>
    <h1>Informe um número</h1>
    <form action="" method="get">
        <label for="numero">Número</label>
        <input type="number" step="0.001" name="numero" id="numero" value="<?= $numero?>" required>
        <input type="submit" value="Calcular Raízes">
    </form>

    </main>
    <section>
        <h2>Resultado final</h2>
        <?php
        echo "Analisando o <strong>número $num </strong>, temos:" ;
        echo "<ul><li> A sua raíz quadrada é <strong>" . number_format($raiz, 3, ",") ."</strong> <li>";
        echo "<li> A sua raíz cúbica é <strong>" . number_format($raizCubica, 3, ",") . "</strong </ul>";
        ?>
    </section>
</body>
</html>