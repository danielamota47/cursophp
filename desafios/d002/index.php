<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhar com números aleatórios</h1>
        <p>Irá ser gerado um número aleatório entre 0 e 100...</p>
        <?php 
            $num = mt_rand (0, 100);
            echo "<p> O número sorteado foi <strong>$num</strong> </p>";
        ?>
        <button onclick="javascript:document.location.reload()">Gerar outro</button>

    </main>
</body>

</html>