<?php
include_once "conexao.php";


$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? '';


if (!$id) {
    $mensagem = "ID inválido! Não foi possível excluir.";
    $tipo = "danger";
} else {

    $id = mysqli_real_escape_string($conn, $id);


    $sql = "DELETE FROM pessoas WHERE cod_pessoa = '$id'";
    if (mysqli_query($conn, $sql)) {
        $mensagem = "$nome excluído com sucesso!";
        $tipo = "success";
    } else {
        $erro = mysqli_error($conn);
        $mensagem = "Erro ao excluir $nome: $erro";
        $tipo = "danger";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Excluir Pessoa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <div class="alert alert-<?= $tipo ?>" role="alert">
            <?= htmlspecialchars($mensagem) ?>
        </div>
        <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
    </div>
</body>

</html>