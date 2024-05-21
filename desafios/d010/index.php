<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php 
        $anonascimento = $_GET['anonascimento'] ?? 2000;
        $anoqqsaber = $_GET['anoqqsaber'] ?? date("Y");
        $idade = $anoqqsaber - $anonascimento;
        $atual = date("Y");
    ?>
    <main>
        <h1>Calculando a idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anonascimento">Ano do seu nascimento: </label>
            <input type="number" name="anonascimento" id="ianonascimento" value="<?=$anonascimento?>" max=<?=$atual?>>

            <label for=" anoqqsaber">Em que ano quer saber a sua idade? (atualmente estamos em <?=$atual?>)</label>
            <input type="number" name="anoqqsaber" id="ianoqqsaber" value="<?=$anoqqsaber?>">

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$anonascimento?> tem <strong><?=$idade?> anos</strong> em <?=$anoqqsaber?>!</p>
    </section>
</body>

</html>