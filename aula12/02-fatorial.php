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
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;

            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
            } while ($c >= 1);
        ?>
    </div>
</body>
</html>