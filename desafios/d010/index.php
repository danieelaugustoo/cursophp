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
    $anonasc = $_POST['anonasc'] ?? 0;
    $ano = $_POST['ano'] ?? date('Y');
    $idade = $ano - $anonasc;
    
    ?>

    <main>
        <h1>Calculando sua idade</h1>
        <form action="" method="post">
        <label for="ano">Que ano você nasceu?</label>
        <input type="number" name="anonasc" id="anonasc" value="<?= $anonasc ?>" required>
        <label for="idadeano">Quer saber sua idade em que ano? (estamos em 2025)</label>
        <input type="number" name="ano" id="ano" value="<?= $ano ?>" required>
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php 
        echo "<p>Quem nasceu em <strong>$anonasc</strong> vai ter (ou teve) $idade anos em $ano!</p>";
        ?>
    </section>
</body>
</html>