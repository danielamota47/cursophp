<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $cota = 5.59;
            $euro = $_GET["din"];
            $real = $euro * 5.59;
            echo "Os $euro € equivalem a <strong>R$ $real<strong>";
            echo "<p><strong>*Cotação fixa de 0.18€</strong></p>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>

    </main>
</body>

</html>