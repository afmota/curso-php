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
			$est = isset($_GET["estado"]) ? $_GET["estado"] : 0;

			switch ($est) {
				case 0:
					$r = "Região Sul";
					break;
				case 1:
					$r = "Região Sudeste";
					break;
				case 2:
					$r = "Região Centro-Oeste";
					break;
				case 3:
					$r = "Região Nordeste";
					break;
				case 4:
					$r = "Região Norte";
					break;
			}

			echo "Você mora na <span class='foco'>$r</span>."
        ?>
		<br><a href="exercicio03.html" class="botao">Voltar</a>
    </div>
</body>
</html>