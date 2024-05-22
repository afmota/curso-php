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
			$c = 10;
			do {
				echo $c . " ";
				$c -= 2;
			} while ($c >=0) ;
        ?>
    </div>
</body>
</html>