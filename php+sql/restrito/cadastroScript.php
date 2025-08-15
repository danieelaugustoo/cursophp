<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            include_once "conexao.php";

            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $dataNascimento = $_POST['dataNascimento'];

            $foto = $_FILES['foto'];
            $nome_foto = mover_foto($foto);
            if ($nome_foto == 0) {
                $nome_foto = null;
            }

            $sql = "INSERT INTO `pessoas` ( `nome`, `endereco`, `telefone`, `email`, `dataNascimento`, `foto` ) VALUES ('$nome','$endereco','$telefone','$email','$dataNascimento','$nome_foto')";

            if (mysqli_query($conn, $sql)) {
                if ($nome_foto != null) {
                    echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                }
                mensagem("$nome cadastrado com sucesso!", 'success');
            } else
                mensagem("$nome NÃO cadastrado!", 'danger');
            ?>
            <hr>
            <a href="cadastro.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>