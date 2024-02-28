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
            $ano = $_GET["ano"];
            $idade = 2023 - $ano;
            echo "Quem nasceu em $ano tem idade de $idade anos.<br>";
            $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
            echo "E dessa forma seu voto é $tipo."
        ?>
    </div>
</body>
</html>