<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simular sistema de notas escolares </title>
</head>

<body>
    <?php
    $nota1 = 7;
    $nota2 = 8;
    $nota3 = 4;
    $media = ($nota1 + $nota2 + $nota3) / 3;
    if ($media >= 9 && $media <= 10) {
        echo "Sua média é $media e você foi excepcional!";
    } elseif ($media >= 7 && $media < 9) {
        echo "Sua média é $media e você foi aprovado";
    } else {
        echo "Você foi reprovado com a media de $media";
    }
    ?>
</body>

</html>