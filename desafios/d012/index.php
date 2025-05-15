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
    $segundos = $_POST['segundos'] ?? 0;

    ?>

    <main>
        <h1>Calculadora de tempo</h1>
        <form action="" method="post">
        <label for="tempo">Qual é o total de segundos?</label>
        <input type="number" name="segundos" id="segundos" value="<?= $segundos ?>" required>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h1>Totalizando</h1>
        <?php
        echo "<p>Analisando o valor de segundos que você digitou, <strong> ".number_format($segundos, 2, ".", ".")." segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><p> ".(intdiv($segundos, 604800))." semanas</p></li>
            <li><p>" . number_format (floor($segundos / 3600) , 0, "," , ".") . " horas</p></li>
            <li><p>" . number_format (floor($segundos / 86400) , 0, "," , ".") . " dias</p></li>
            <li><p>" . floor(($segundos % 3600) / 60) . " minutos</p></li>
            <li><p>" . ($segundos % 3600) % 60 . " segundos</p></li>
        </ul>";
        ?>
    </section>
</body>
</html>