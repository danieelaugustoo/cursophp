<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                    include_once "conexao.php";
                    $id = $_POST['id'];
                    $nome = $_POST['nome'];
                    $endereco = $_POST['endereco'];
                    $telefone = $_POST['telefone'];
                    $email = $_POST['email'];
                    $dataNascimento = $_POST['dataNascimento'];
                    $foto_antiga = $_POST['foto_antiga'];
                    $nova_foto = $_FILES['foto'] ?? '';

                    if ($nova_foto == '') {
                        $foto = $foto_antiga;
                    } else {
                        $foto = mover_foto($nova_foto);
                    }


                    $sql = "UPDATE  `pessoas`  set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `dataNascimento` = '$dataNascimento', `foto` = $foto WHERE cod_pessoa = $id";

                    if (mysqli_query($conn, $sql)) {
                        if ($foto != null) {
                            echo "<img src='img/$nome_foto' title='$nome_foto' class='mostra_foto'>";
                        }
                        mensagem("$nome alterado com sucesso!", 'success');
                    } else
                        mensagem("$nome NÃO alterado!", 'danger');
                    ?>
                    <hr>
                    <a href="index.php" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
        </script>
    </body>

</html>