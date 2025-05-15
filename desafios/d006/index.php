<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 1;
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
        <input type="number" step="0.001" name="dividendo" id="dividendo" value="<?= $dividendo?>" required>
        <label for="divisor">Divisor</label>
        <input type="number" step="
        0.001" name="divisor" id="divisor" value="<?= $divisor ?>" required>
        <input type="submit" value="Analisar">
        </form>
        </form>
        
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
                </tr>
                <tr>
                <td><?=$quociente?></td>
                <td><?=$resto?></td>
            </tr>
        </table>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </section>
</body>
</html>