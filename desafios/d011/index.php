<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $preco = $_GET['preco'] ?? 0;
    $reaj = $_GET['reaj'] ?? 0;
    ?>
    <main>
    <h1>Reajustador de Preços</h1>
    <form action="" method="get">
    <label for="preco">Preço do produto (R$)</label>
    <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?= $preco ?>">
    <label for="reaj">Qual será o percentual de reajuste? (<strong style="font-weight: bold;"><span id="p">?</span>%</strong>)</label>
    <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?= $reaj ?>">
    <input type="submit" value="Reajustar">

    </form>
    </main>
    <?php 
     $aumento = $preco * $reaj / 100;
     $novopreco = $preco + $aumento;
    ?>
    <section>
    <h2>Resultado do Reajuste</h2>
    <p>O produto que custava R$ <?= number_format($preco, 2, ',', '.') ?> com <strong><?= $reaj ?></strong>% de aumento é vai passar a custar R$<strong> <?= number_format($preco + ($preco * $reaj / 100), 2, ',', '.') ?></strong> a partir de agora</p>
    </section>
    <script>
        mudaValor();
        function mudaValor() {
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>