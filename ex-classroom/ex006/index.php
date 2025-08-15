<!-- Função que calcula média de notas-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função que calcula média de notas</title>
</head>

<body>
    <?php
    function media($nota1, $nota2)
    {
        $resultado = ($nota1 + $nota2) / 2;
        if ($resultado >= 9 && $resultado <= 10) {
            echo "Sua média é $resultado e você foi excepcional!";
        } elseif ($resultado >= 7 && $resultado < 9) {
            echo "Sua média é $resultado e você foi aprovado";
        } else {
            echo "Você foi reprovado com a media de $resultado";
        }
        return $resultado;
    }
    (media(9, 9));

    ?>
</body>

</html>