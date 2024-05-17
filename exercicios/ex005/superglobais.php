<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEXTA", time() +3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU";
            
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);
                //variáveis enviadas em método get ou diretamente na URL
                
                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
                //variáveis enviadas em método post

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);
                //variáveis enviadas de método get/URL e método post

                echo "<h1>Superglobal COOKIE</h1>";
                var_dump($_COOKIE);
                //pequenas variáveis guardadas dentro de um navegador

                echo "<h1>Superglobal SESSION</h1>";
                var_dump($_SESSION);
                //variáveis que não foram pedidas, ou seja, criadas dentro do código

                //não existem variáveis de ambiente em hospedagens locais, mas no php sandbox funciona

                echo "<h1>Superglobal SERVER</h1>";
                var_dump($_SERVER);
                //variáveis do servidor

                echo "<h1>Superglobal GLOBALS</h1>";
                var_dump($_GLOBALS);
                
            ?>
        </pre>
    </main>
</body>

</html>