<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        // 0x -> hexadecimal; 0b -> binário; 0-> octal (TUDO INT)
        $v = 33.4; 
        var_dump($v);
        
        $n = "Daniela";
        var_dump($n);

        $vet = [2.5, 'daniela', 7, false];
        var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        
        $p = new Pessoa;
        var_dump($p)
        
    ?>
</body>

</html>