<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curso de PHP - CursoEmVideo.com</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div>
        <?php
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h1> Calculando o fatorial de $v</h1>";
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c--;
            } while ($c >= 1);
            echo "<h2>$v != $fat";
        ?>
        <p><a href="02-index.html" class="botao">Voltar</a></p>
    </div>
</body>
</html>