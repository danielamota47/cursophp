<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $dividendo = $_GET['dividendo'] ?? 0;
        $divisor = $_GET['divisor'] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo:</label>
            <input type="number" name="dividendo" id="idividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor:</label>
            <input type="number" name="divisor" id="idivisor" value="<?=$divisor?>" min=1>
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section>
        <h2>Estrutura da divisão</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>

</html>