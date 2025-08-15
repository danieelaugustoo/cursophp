<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar tabuada com for, loop de
        contagem regressiva</title>
</head>


<body>
    <?php
$numero = $_POST['num'] ?? 0;
?>

    <form action="" method="post">
        <input type="number" name="num" id="idNum" value="<?= $numero ?>" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
for ($i = 10; $i >= 0; $i--) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>
</body>

</html>