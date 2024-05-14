<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "sem nome";
            $s = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>É um prazer conhecer-te <strong>$n $s</strong>!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>