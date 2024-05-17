<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
    </dhead>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $url = '"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)","value":[{"cotacaoCompra":5.1264,"dataHoraCotacao":"2024-05-16 13:09:44.0"}]}';
            
            $dados =json_decode(file_get_contents($url), true);

            $cota = $dados["value"][0]["cotacaoCompra"];

            echo "A cotação foi $cota";
        ?>
    </main>
</body>

</html>