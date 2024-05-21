<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $pre = $_GET['pre'] ?? 0;
        $perc = $_GET['perc'] ?? 0;
        $aum = $pre + ($pre * $perc * 0.01);
    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

            <label for="pre">Preço do Produto(€): </label>
            <input type="number" name="pre" id="ipre" value="<?=$pre?>" step="0.01">

            <label for=" perc">Percentagem de reajuste (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="perc" id="iperc" min="0" max="100" step="1" oninput="mudaValor()">

            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <?php 
            echo "<h2>Resultado do reajuste</h2>";
            echo "<p> O produto que custava ".number_format($pre, 2, ",", ".")."€ com <strong>$perc% de aumento</strong> vai passar a custar ".number_format($aum, 2, ",", ".").".";
        ?>
    </section>

    <script>
    function mudaValor() {
        p.innerText = iperc.value
    }
    </script>
</body>

</html>