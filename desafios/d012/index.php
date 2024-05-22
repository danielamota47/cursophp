<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $tseg = $_GET['tseg'] ?? 0;
        $sobra = $tseg;

        $sem = (int)($sobra / 604800);
        $sobra = $sobra % 604800;

        $dias =  (int)($sobra / 86400);
        $sobra = $sobra % 86400;

        $horas = (int)($sobra / 3600);
        $sobra = $sobra % 3600;

        $min = (int)($sobra / 60);
        $sobra = $sobra % 60;

        $seg = $sobra;
        
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tseg">Total de segundos:</label>
            <input type="number" name="tseg" id="itseg" value="<?=$tseg?>">

            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizar</h2>
        <p>Analisando o valor digitado, <?=$tseg?> segundos equivale a:</p>
        <ul>
            <li><?=$sem?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$min?> minutos</li>
            <li><?=$seg?> segundos</li>
        </ul>
    </section>
</body>

</html>