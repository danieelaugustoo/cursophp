<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $salario = $_POST['salario'] ?? 0;
    $salarioMinimo = 1518.00;
    $sobra = $salario - $salarioMinimo;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php $_SERVER['PHP_SELF']  ?>" method="post">
            <label for="salario">Salário (R$)</label>
            <input type="number" step="0.01" name="salario" id="salario" value="<?= $salario ?>" required>
            <p>Considerando o salário minímo de <strong>R$<?php echo number_format($salarioMinimo, 2, "," , ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
        
    </main>
    <section>
            <h2>Resultado Final</h2>
            <?php 
            echo "Quem recebe <strong>R$ ".number_format($salario, 2, ",","."). " </strong> recebe <strong>" . number_format($salario / $salarioMinimo, 2, ",", ".") . " salários mínimos </strong>  + <strong>R$" . number_format($sobra, 2, ",", ".") . "</strong>.";
            ?>
        </section>
</body>
</html>