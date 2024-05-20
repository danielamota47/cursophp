<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php 
            $sal = $_GET['sal'] ?? 820;
            $quansalmin = floor($sal / 820);
            $quares = $sal - ($quansalmin * 820);
        ?>
        <h1>Informe o seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salário(€): </label>
            <input type="number" name="sal" id="isal" step="0.01" value="<?=$sal?>">
            <p>(Considerando o salário mínimo de <strong>820,00€</strong>)</p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            echo "Quem recebe um salário de".number_format($sal, 2, ",", "."). "€ ganha <strong> $quansalmin salários mínimos</strong> + ". number_format($quares, 2, ",", "."). "€";
        ?>
    </section>
</body>

</html>