<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simular uma calculadora básica</title>
</head>

<body>
    <?php
    $num1 = $_GET['num1'] ?? 0;
    $num2 = $_GET['num2'] ?? 0;
    $operador = $_GET['operador'] ?? 0;

    if ($operador == 'adição(+)') {
        $resultado = $num1 + $num2;
    } elseif ($operador == 'subtração(-)') {
        $resultado = $num1 - $num2;
    } elseif ($operador == 'multiplicação(*)') {
        $resultado  = $num1 * $num2;
    } elseif ($operador == 'divisão(/)') {
        $resultado = $num2 != 0 ? $num1 / $num2 : "Erro: divisão por zero";
    }
    ?>
    <form action="" method="get">
        <label for="num1">Valor 1</label> <br>
        <input type="number" name="num1" id="idNum1" value="<?= $num1 ?>"> <br>
        <label for="operador">Operação</label> <br>
        <select name="operador" id="idOperador">
            <option value="adição(+)" <?= ($operador == 'adição(+)') ? 'selected' : '' ?>>Soma (+)</option>
            <option value="subtração(-)" <?= ($operador == 'subtração(-)') ? 'selected' : '' ?>>Subtração (-)</option>
            <option value="multiplicação(*)" <?= ($operador == 'multiplicação(*)') ? 'selected' : '' ?>>Multiplicação
                (x)</option>
            <option value="divisão(/)" <?= ($operador == 'divisão(/)') ? 'selected' : '' ?>>Divisão (÷)</option>
        </select> <br>
        <label for="num2">Valor 2</label> <br>
        <input type="number" name="num2" id="idNum2" value="<?= $num2 ?>"> <br>
        <input type="submit" value="Enviar">

        <?php
        if (isset($resultado)) {
            echo "<h3>O resultado da conta de $operador é: $resultado</h3>";
        }
        ?>
    </form>
</body>

</html>