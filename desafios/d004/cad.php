<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversão v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <main>
            <?php 
            $inicio = date('m-d-Y', strtotime("- 7 days"));
            $fim = date('m-d-Y');
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);
            
            
            $cotacao = $dados["value"][0]["cotacaoCompra"];
            echo " <br>A cotação foi $cotacao";


            $valcarteira = $_GET["r$"] ?? " ";
            $valdolar = $valcarteira / $cotacao;
            echo "<p> Seus R$$valcarteira equivalem a <strong> US$$valdolar</strong></p>";
            echo "<p>*<strong>Cotação fixa de $cotacao</strong> informada diretamente no código.</p>"
            ?>
            <button><a href="javascript:history.go(-1)">Voltar</a></button>
        </main>
    </section>
</body>
</html>