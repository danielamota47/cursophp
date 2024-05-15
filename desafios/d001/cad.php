<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php 
            $num = $_GET["num"] ?? 0;
            $ant = $num - 1;
            $suc = $num + 1;
            echo "<p>O número escolhido é $num</p>";
            echo "<p>O antecessor é $ant</p>";
            echo "<p>O sucessor é $suc</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>

</html>