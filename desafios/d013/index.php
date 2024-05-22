<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
    p#pequeno {
        font-size: 10px;
    }

    img {
        height: 50px;
        margin: 5px;
    }
    </style>
</head>

<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $sobra = $valor;

        $cem = (int)($valor / 100);
        $sobra = $sobra % 100;

        $cinq = (int)($sobra / 50);
        $sobra = $sobra % 50;

        $dez = (int)($sobra / 10);
        $sobra = $sobra % 10;

        $cinc = (int)($sobra / 5);
        $sobra = $sobra % 5;

        

    ?>
    <main>
        <h1>Caixa Eletrónica</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Valor que deseja retirar (€)<sup>*</sup>:</label>
            <input type="number" name="valor" id="ivalor" step="5" value="<?=$valor?>">

            <p id="pequeno"><sup>*</sup>Notas disponíveis: 100€, 50€, 10€, 5€</p>

            <input type="submit" value="Retirar">
        </form>
    </main>
    <section>
        <h2>Retiramento de <?=$valor?>€</h2>
        <p>A caixa eletrónica irá entregas as seguintes notas:</p>
        <ul>
            <li><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fpt.vecteezy.com%2Ffoto%2F3240353-detalhe-de-uma-nota-de-100-euros&psig=AOvVaw2L5VWcrBKlgW708VrkQa99&ust=1716494041922000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCOjav96EooYDFQAAAAAdAAAAABAU"
                    alt="100"> <?=$cem?></li>
            <li><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.istockphoto.com%2Fbr%2Ffotos%2Fnota-de-cinquenta-euros&psig=AOvVaw185ObBqNO4kSOrH4lWBz6P&ust=1716493445629000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJDInMKCooYDFQAAAAAdAAAAABAJ"
                    alt="50"> <?=$cinq?></li>
            <li><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.bportugal.pt%2Fsites%2Fdefault%2Ffiles%2Fanexos%2Fdocumentos-relacionados%2Fmanualgenuinidade2017_1.pdf&psig=AOvVaw1JIBQbT8GTSTpsFBz6BnRj&ust=1716493478439000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCLiR7NGCooYDFQAAAAAdAAAAABAE"
                    alt="10"> <?=$dez?></li>
            <li><img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fbr.freepik.com%2Ffotos-premium%2Ffragmento-de-nota-de-cinco-euros-nota-de-5-euros-o-euro-e-a-moeda-oficial-da-uniao-europeia_39845956.htm&psig=AOvVaw2ObfZ-kZR-NGZH_9CFeNUX&ust=1716493494485000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCMD9vdmCooYDFQAAAAAdAAAAABAE"
                    alt="5"> <?=$cinc?></li>
        </ul>

    </section>
</body>

</html>