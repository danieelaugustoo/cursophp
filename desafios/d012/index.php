<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora do Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $total_segundos = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
    <h1>Calculadora de Tempo</h1>
    <form action="" method="get">
        <label for="seg">Qual é o total de segundos?</label>
        <input type="number" name="seg" id="seg" min="0" step="1" required value="<?= $total_segundos ?>">
        <input type="submit" value="Calcular">
    </form>
</main>
<?php 
    $sobra = $total_segundos;
    $semana = intdiv($sobra, 604800);
    $sobra = $sobra % 604800;
    $dias = intdiv($sobra, 86400);
    $sobra = $sobra % 86400;
    $horas = intdiv($sobra, 3600);
    $sobra = $sobra % 3600;
    $minutos = intdiv($sobra, 60);
    $sobra = $sobra % 60;
    $segundos = $sobra;  
?>
<section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?= number_format($total_segundos, 0, ",", ".") ?> </strong>segundos equivalem a um total de:</p>
    <ul>
        <li><?= $semana ?> semanas</li>
        <li><?= $dias ?> dias</li>
        <li><?= $horas ?> horas</li>
        <li><?= $minutos ?> minutos</li>
        <li><?= $segundos ?> segundos</li>
    </ul>
</section>

</body>
</html>