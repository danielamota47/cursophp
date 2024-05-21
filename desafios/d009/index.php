<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $v1 = $_GET['v1'] ?? 0;
        $p1 = $_GET['p1'] ?? 1;
        $v2 = $_GET['v2'] ?? 0;
        $p2 = $_GET['p2'] ?? 1;

        $mediasimples = ($v1 + $v2) / 2;
        $mediaponderada = (($v1 * $p1) + ($v2 * $p2))/($p1 + $p2);
    ?>
    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="v1">1º Valor</label>
            <input type="number" name="v1" id="iv1" value="<?=$v1?>" required>
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="ip1" value="<?=$p1?>" required>
            <label for="v2">2º Valor</label>
            <input type="number" name="v2" id="iv2" value="<?=$v2?>" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="ip2" value="<?=$p2?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php 
            echo "Analisando os valor $v1 e $v2:";
            echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é ". number_format($mediasimples, 2, ",", ".").".</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2, é igual a ". number_format($mediaponderada, 2, ",", ".").".</li></ul>"
        ?>
    </section>
</body>

</html>