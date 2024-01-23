<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <div>
        <?php
            /** Esse exercício pretende demonstrar o uso
             * de operadores de incremento e
             * decremento
            */
            $atual = $_GET["aa"]; # Essa linha recebe o ano da url [também pode usar //]
            echo "O ano atual é $atual e o ano anterior é ". --$atual ."." ;
        ?>
    </div>
</body>
</html>