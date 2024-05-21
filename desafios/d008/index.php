<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        // Área de declaração
        $num = $_GET['num'] ?? 0;
        $rq = sqrt($num);
        $rc = $num ** (1/3);
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="num">Número: </label>
            <input type="number" name="num" id="inum" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "Analisando <strong>número $num</strong>, temos:";
            echo "<ul><li>A raíz quadrada é ". number_format($rq, 3).";</li><li>A raíz cúbica é ". number_format($rc, 3).".</li>";
        ?>
    </section>
</body>

</html>