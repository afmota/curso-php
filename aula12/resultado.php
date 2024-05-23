<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Curso de PHP - CursoemVideo.com</title>
	<link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
	<div>
        <?php
            $tab = isset($_GET["num"]) ? $_GET["num"] : 0;
            $mult = 1;

            while($mult <= 10){
                $res = $tab * $mult;
                echo "$tab x $mult = $res<br>";
                $mult++;
            }
        ?>
        <br>
        <a href="tabuada.php" class="botao">Voltar</a>
    </div>
</body>
</html>